
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
    <title>Payroll Processing & Management Services - PF, ESI & TDS</title>
    <meta name="description" content="End-to-end payroll processing and management services in India - salary computation, PF, ESI, TDS, statutory filings, and payslips. From Rs 3,000/month.">
    <link rel="canonical" href="/payroll-processing-and-management-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Processing & Management Services - PF, ESI & TDS">
    <meta property="og:description" content="End-to-end payroll processing and management services in India - salary computation, PF, ESI, TDS, statutory filings, and payslips. From Rs 3,000/month.">
    <meta property="og:url" content="/payroll-processing-and-management-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Processing & Management Services - PF, ESI & TDS">
    <meta name="twitter:description" content="End-to-end payroll processing and management services in India - salary computation, PF, ESI, TDS, statutory filings, and payslips. From Rs 3,000/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll Processing and Management",
          "description": "End-to-end payroll processing and management services in India - salary computation, PF, ESI, TDS, statutory filings, and payslips. From Rs 3,000/month.",
          "url": "https://www.patronaccounting.com/payroll-processing-and-management-services",
          "serviceType": "Payroll Processing and Management",
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
              "name": "Payroll Processing and Management",
              "item": "https://www.patronaccounting.com/payroll-processing-and-management-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the difference between payroll processing and payroll management?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Payroll processing refers specifically to the monthly cycle of computing gross salary, deductions, and net pay and disbursing salaries. Payroll management is the broader function including statutory registration and compliance (PF, ESI, TDS, PT), return filing, year-end Form 16, F&F settlements, and CTC structure advisory. Patron Accounting provides both as a single integrated managed service."
              }
            },
            {
              "@type": "Question",
              "name": "Is outsourcing payroll to a CA firm better than using payroll software?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Payroll software automates calculations but cannot optimise tax regimes, catch misclassified perquisites, flag PT deadline changes, or process a compliant F&F within 2 working days. CA-managed outsourcing combines automated accuracy with professional review and regulatory awareness. For a 50-person company, in-house payroll costs typically exceed outsourcing to Patron Accounting."
              }
            },
            {
              "@type": "Question",
              "name": "What are mandatory statutory deductions from an Indian employee's salary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Statutory deductions include: (a) EPF - 12% of Basic+DA; (b) ESI - 0.75% of gross for employees earning up to Rs 21,000/month; (c) TDS - income tax at applicable slab rate under Income Tax Act 2025; (d) Professional Tax - state-specific, max Rs 2,500/year; (e) Labour Welfare Fund - state-specific in applicable states. Employer also contributes 12% EPF, 3.25% ESI, and accrues gratuity."
              }
            },
            {
              "@type": "Question",
              "name": "What is the 50% basic wage rule and how does it affect payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Code on Wages 2019 (active November 2025) requires that basic wages must be at least 50% of total CTC. This prevents low-basic/high-allowance structures that minimise PF liability. For example, if CTC is Rs 50,000/month, Basic+DA must be at least Rs 25,000 - making minimum EPF contribution Rs 3,000/month each from employee and employer."
              }
            },
            {
              "@type": "Question",
              "name": "What is the F&F settlement 2-working-day rule?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the New Wage Code (active November 2025), employers must settle all salary dues within 2 working days of an employee's exit. This requires real-time payroll readiness - companies cannot wait for the regular monthly cycle. Patron Accounting maintains a standing F&F workflow activated the same day an exit is confirmed."
              }
            },
            {
              "@type": "Question",
              "name": "How does the Income Tax Act 2025 affect payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Income Tax Act 2025 replaces the 1961 Act from April 1 2026. For payroll, it retains TDS on salary at applicable slab rates but introduces updated Form 24Q and Form 16 formats and stricter audit trail requirements. Payroll systems must be updated before the April 2026 cycle. Patron Accounting has fully implemented ITA 2025."
              }
            },
            {
              "@type": "Question",
              "name": "What statutory records must employers maintain under the November 2025 Labour Codes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Employers must maintain fully digitalised wage registers, attendance registers, muster rolls, PF and ESI contribution records, payslips, LWF records, and statutory challans. All records must be retained for 7 years minimum and available for inspection without prior notice. Failure to produce digital records attracts adverse findings and penalties."
              }
            },
            {
              "@type": "Question",
              "name": "Payroll outsource kaise karein India mein?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron Accounting se payroll outsource karna simple hai. Aapko employee data (PAN, Aadhaar, UAN, bank details), salary structure, aur attendance records dena hota hai. Hum complete setup karte hain - EPFO, ESIC, TAN, PT registrations se lekar monthly payslip, TDS, PF, ESI deposits, Form 24Q filing, aur year-end Form 16 tak sab handle karte hain. Fee Rs 149 per employee se shuru hoti hai. Quick Answers Q: EPF rate? A: 12% employee + 12% employer of Basic+DA. Deposit by 15th monthly. [EPF Act 1952] Q: ESI rate? A: 0.75% employee + 3.25% employer. Applicable for gross up to Rs 21,000/month. Deposit by 15th. Q: TDS deposit deadline? A: 7th of following month under Income Tax Act 2025 (from April 2026). Q: Salary payment deadline? A: 7th of following month for under 1,000 employees. [Code on Wages 2019] Q: F&F settlement deadline? A: Salary dues within 2 working days of exit. [New Wage Code, November 2025] Q: Form 16 deadline? A: To all employees by June 15 annually. Form 24Q quarterly: 31 Jul, 31 Oct, 31 Jan, 31 May."
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
                        Payroll Processing and Management Services in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>End-to-End Monthly Payroll:</span> Attendance to payslip to bank disbursement by the 7th of each month as mandated under the Code on Wages 2019.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Compliance:</span> PF (12%+12%), ESI (0.75%+3.25%), TDS under Income Tax Act 2025, Professional Tax, and Labour Welfare Fund - all deposits and returns managed.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>F&F in 2 Working Days:</span> Full-and-final settlement within 2 working days of employee exit per New Wage Code requirement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Labour Code Ready:</span> All four national Labour Codes (November 2025), 50% basic rule, and digital record-keeping mandates fully implemented.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ companies and 20,000+ employees under Patron Accounting managed payroll with 15+ years zero-penalty track record.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Processing%20and%20Management%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Payroll%20Processing%20and%20Management%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Payroll%20Processing%20and%20Management%20services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Payroll Processing and Management',
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We moved our payroll of 280 employees to Patron Accounting after our in-house team struggled with the new Labour Code requirements. Within one month, everything was in order - payslips accurate, PF and ESI filed on time, and our F&F processing is now done within 2 days of exit.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sudhir Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Director, Manufacturing Company, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting handles our payroll across 6 states. The PT and LWF compliance alone was a nightmare in-house. They have a state-wise matrix and never miss a deadline. The monthly MIS report is a bonus for our finance team.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AJ</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anuradha Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Retail Chain, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a GCC with 120 India employees, we needed a CA firm that understood both Indian payroll law and cross-border salary components. Patron got our DTAA-based TDS right from month one and handles our expat payroll seamlessly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MR</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Mark Reynolds</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">India Country Head, Technology GCC, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We switched from payroll software to Patron Accounting's managed service after our previous provider missed a PT deadline in Karnataka. The software calculated correctly but nobody filed. With Patron, filing is guaranteed - 15 years zero-penalty speaks for itself.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KN</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Kavita Nair</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, EdTech Startup, Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Started with 12 employees and Patron has scaled with us to 350. Never had to renegotiate or change providers. The monthly payroll MIS and year-end Form 16 reconciliation are consistently perfect. Best payroll decision we made.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RP</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit Patil</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, Healthcare Services, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
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
                    <p>Get accurate, penalty-free payroll processing with CA-level expertise - from monthly payslips to annual Form 16.</p>
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Calendar</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">In-House vs Outsource</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Processing and Management - Quick Reference for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Processing and Management Services at a Glance</strong></p>
                    <p>Payroll processing and management in India has never been more regulated. With all four national Labour Codes active since November 2025, the Income Tax Act 2025 replacing the 1961 Act from April 1 2026, the 50% basic wage rule live, mandatory digital record-keeping, and F&F settlements required within 2 working days of exit - the compliance burden on any in-house payroll team has increased substantially. Patron Accounting handles everything from attendance to payslip to bank disbursement, starting at Rs 149 per employee.</p>
                </div>
                <p>A single missed deadline or miscalculated deduction can now attract penalties of Rs 200/day, interest at 12% per annum, and in serious cases, prosecution. For businesses that want accurate, timely, penalty-free payroll every month, outsourcing to Patron Accounting is the clear operational choice.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Key Detail</th></tr></thead><tbody>
<tr><td>EPF Contributions</td><td>12% employee + 12% employer of Basic+DA. Mandatory for 20+ employees. Deposit by 15th monthly. [EPF Act 1952, Section 1(3)(a)]</td></tr>
<tr><td>ESI Contributions</td><td>0.75% employee + 3.25% employer. Applies to employees earning up to Rs 21,000/month gross. Mandatory for 10+ employees. [ESI Act 1948]</td></tr>
<tr><td>TDS on Salary</td><td>Deducted under Income Tax Act 2025 (effective 1 April 2026). At applicable slab rate per employee's tax regime choice. Deposit by 7th monthly.</td></tr>
<tr><td>Professional Tax (PT)</td><td>State-specific levy; max Rs 2,500/year. Applicable in Maharashtra, Karnataka, West Bengal, Tamil Nadu, and others.</td></tr>
<tr><td>Salary Payment Deadline</td><td>By 7th of following month (under 1,000 employees) or 10th (1,000+ employees). [Code on Wages 2019]</td></tr>
<tr><td>F&F Settlement Deadline</td><td>Within 2 working days of employee exit for salary dues. [New Wage Code, November 2025]</td></tr>
<tr><td>Digital Records</td><td>Mandatory 7-year retention of all wage registers, payslips, attendance logs, and statutory challans. [November 2025 Labour Codes]</td></tr>
<tr><td>Starting Price</td><td>Rs 149 per employee per month (Patron Accounting LLP)</td></tr>
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
                <h2 class="section-title">What Is Payroll Processing and Management?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll processing and management is the complete monthly operational cycle of computing employee compensation - from raw attendance and leave data to gross salary, statutory deductions (PF, ESI, TDS, PT, LWF), net salary disbursement, payslip issuance, statutory contributions deposit, and all government return filings - executed accurately, on time, and in full compliance with India's central and state labour and tax laws.</p>
<p>Under the <strong>Code on Wages 2019</strong> (active November 2025), Basic Pay must be at least 50% of total CTC. This directly affects the PF contribution base and prevents employers from structuring low basic / high allowance CTC to minimise PF contributions.</p>
<p>The <strong>Income Tax Act 2025</strong> (effective April 1 2026) replaces the Income Tax Act 1961, updating TDS calculation methods, Form 24Q formats, and Form 16 generation requirements for all employers.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Processing and Management:</strong></p>
                    <p><strong>Gross Salary:</strong> Sum of all earnings including Basic Pay, HRA, DA, LTA, Special Allowance, bonuses, reimbursements, and arrears. Basic Pay must be at least 50% of total CTC under the Code on Wages 2019.</p>
<p><strong>Statutory Deductions:</strong> EPF (12% of Basic+DA), ESI (0.75% of gross if eligible), Professional Tax (state-specific), TDS at applicable income tax slab rate, and Labour Welfare Fund.</p>
<p><strong>Net Salary (Take-Home):</strong> Gross salary minus all employee-side deductions. Disbursed by bank transfer by the 7th of following month.</p>
<p><strong>F&F Settlement:</strong> Full-and-final settlement of all salary dues within 2 working days of exit per New Wage Code (November 2025).</p>
<p><strong>Form 16:</strong> Annual TDS certificate issued to employees by June 15 showing total salary, deductions, and tax paid during the financial year.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Payroll Document -->
                            <rect x="35" y="15" width="130" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="35" y="15" width="130" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Monthly Payslip</text>
                            <!-- Table rows -->
                            <line x1="50" y1="52" x2="150" y2="52" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <text x="55" y="48" font-size="7" fill="#14365F" font-weight="600" font-family="Arial">Basic</text>
                            <text x="140" y="48" font-size="7" fill="#14365F" font-weight="600" text-anchor="end" font-family="Arial">25,000</text>
                            <line x1="50" y1="68" x2="150" y2="68" stroke="#14365F" stroke-width="0.8" opacity="0.2"/>
                            <text x="55" y="64" font-size="7" fill="#14365F" opacity="0.6" font-family="Arial">HRA</text>
                            <text x="140" y="64" font-size="7" fill="#14365F" opacity="0.6" text-anchor="end" font-family="Arial">10,000</text>
                            <line x1="50" y1="84" x2="150" y2="84" stroke="#14365F" stroke-width="0.8" opacity="0.2"/>
                            <text x="55" y="80" font-size="7" fill="#E8712C" font-weight="600" font-family="Arial">- EPF</text>
                            <text x="140" y="80" font-size="7" fill="#E8712C" font-weight="600" text-anchor="end" font-family="Arial">3,000</text>
                            <text x="55" y="96" font-size="7" fill="#E8712C" font-weight="600" font-family="Arial">- TDS</text>
                            <text x="140" y="96" font-size="7" fill="#E8712C" font-weight="600" text-anchor="end" font-family="Arial">2,500</text>
                            <line x1="50" y1="108" x2="150" y2="108" stroke="#25D366" stroke-width="2"/>
                            <text x="55" y="122" font-size="9" fill="#25D366" font-weight="700" font-family="Arial">Net Pay</text>
                            <text x="140" y="122" font-size="9" fill="#25D366" font-weight="700" text-anchor="end" font-family="Arial">38,500</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="25" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 25l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="150" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Processing</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Processing and Management</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Managed Payroll</span>
                        <strong>PF, ESI, TDS, Form 16</strong>
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
            <h2 class="section-title">Who Needs Managed Payroll Processing in India?</h2>
            <div class="content-text">
                
                <p>Payroll compliance obligations arise the moment a business makes its first hire in India. The complexity scales with employee count, salary diversity, geographic spread, and workforce composition. Patron Accounting's managed payroll service covers:</p>
<ul>
<li><strong>Startups and SMEs (1-50 employees):</strong> Avoiding non-compliance penalties from day one; correct PF and ESI registration at the right thresholds; TDS from first eligible hire; and salary structure design compliant with the 50% basic wage rule.</li>
<li><strong>Growing Mid-Market Companies (50-500 employees):</strong> Multi-state PT compliance, variable pay processing (bonuses, commissions, incentives), mid-cycle salary revisions with arrear computation, and inspection-ready digital registers.</li>
<li><strong>Large Enterprises and Corporates (500+ employees):</strong> High-volume payroll across multiple locations and states; complex salary bands; contractual and third-party workforce payroll management; integration with HRMS/ERP systems.</li>
<li><strong>Foreign Companies with Indian Operations:</strong> Payroll compliance under Indian law for India-based employees; DTAA-based TDS optimisation for expat staff; FEMA compliance for cross-border salary components.</li>
<li><strong>Companies Transitioning from In-House to Outsourced Payroll:</strong> Migration of existing employee data and historical payroll records; gap audit of past compliance; immediate takeover of monthly processing cycle.</li>
</ul>
<p><strong>Statutory Registration Thresholds:</strong></p>
<ul>
<li><strong>TAN:</strong> From first employee whose annual salary exceeds the income tax exemption threshold. [Section 203A, Income Tax Act 2025]</li>
<li><strong>EPFO Registration:</strong> When headcount reaches 20 or more employees. [Section 1(3)(a), <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF and MP Act 1952</a>]</li>
<li><strong>ESIC Registration:</strong> When headcount reaches 10 or more employees. [Section 2(12), <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act 1948</a>]</li>
<li><strong>Professional Tax Registration:</strong> Required in applicable states as soon as any employee is on payroll.</li>
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
            <h2 class="section-title">6 Payroll Processing and Management Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll Setup and CTC Structure Design</td><td>Employee data onboarding, CTC breakdown with Basic >= 50% of CTC (Code on Wages 2019), tax regime advisory, Form 12BB collection, and all statutory registrations (EPFO, ESIC, TAN, PT).</td></tr>
<tr><td>Monthly Payroll Processing</td><td>Attendance validation, gross salary computation, all statutory deductions (EPF, ESI, TDS, PT, LWF), net salary calculation, payslip generation, and bank salary upload file preparation.</td></tr>
<tr><td>Statutory Contribution Deposits</td><td>EPF and ESI by 15th, TDS by 7th, PT per state schedule, LWF per state calendar - all deposits managed with built-in deadline buffers.</td></tr>
<tr><td>Statutory Return Filing</td><td>Monthly EPF ECR through EPFO Unified Portal, quarterly Form 24Q under Income Tax Act 2025, half-yearly ESI Form 5, and state-wise PT returns.</td></tr>
<tr><td>Full-and-Final Settlement (F&F)</td><td>Exit processing within 2 working days per New Wage Code - unpaid salary, leave encashment, gratuity, reimbursements, TDS on F&F, and Form 16 issuance.</td></tr>
<tr><td>Year-End Compliance</td><td>Form 16 Parts A and B by June 15, Form 26AS reconciliation, gratuity provision computation, statutory bonus calculation under Payment of Bonus Act 1965.</td></tr>

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
            <h2 class="section-title">10-Step Monthly Payroll Processing Cycle</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows this systematic monthly cycle for every client - from data collection on the 20th to statutory filing by the 15th of the following month. Each step is documented and verified.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Pre-Payroll Setup (One-Time)</h3>
        <p class="step-description">Collect all employee master data (PAN, Aadhaar, UAN, bank account). Design CTC structure with Basic >= 50% of CTC per Code on Wages 2019. Complete all statutory registrations - EPFO, ESIC, TAN, and PT across all applicable states.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC structure designed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Registrations complete</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Setup Complete</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Monthly Input Collection (by 20th)</h3>
        <p class="step-description">Receive approved attendance data, leave records, variable pay approvals, reimbursement claims, mid-month joinings or exits, and salary revision letters effective that month.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Attendance validated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Variables collected</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="30" y="20" width="20" height="4" rx="1" fill="#F5A623" opacity="0.7"/><rect x="55" y="20" width="35" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="30" y="30" width="18" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="55" y="30" width="30" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="30" y="40" width="22" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="55" y="40" width="28" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="30" y="50" width="15" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="55" y="50" width="32" height="4" rx="1" fill="#14365F" opacity="0.2"/><path d="M15 75 L105 75" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 3"/></svg></div>
            <span class="illustration-label">Data Collected</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Payroll Computation (by 22nd)</h3>
        <p class="step-description">Calculate gross salary per employee. Apply statutory deductions: EPF (12%), ESI (0.75%), TDS under Income Tax Act 2025, PT per state slab, LWF per state schedule, and voluntary deductions. Compute net take-home salary.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gross-to-net computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions applied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GROSS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#14365F" stroke-width="0.8" opacity="0.3"/><text x="35" y="46" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- EPF</text><text x="35" y="54" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- ESI</text><text x="35" y="62" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- TDS</text><text x="70" y="46" font-size="6" fill="#14365F" opacity="0.5" font-family="Arial">12%</text><text x="70" y="54" font-size="6" fill="#14365F" opacity="0.5" font-family="Arial">0.75%</text><text x="70" y="62" font-size="6" fill="#14365F" opacity="0.5" font-family="Arial">Slab</text><line x1="30" y1="67" x2="90" y2="67" stroke="#25D366" stroke-width="1.5"/><text x="60" y="78" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">NET PAY</text></svg></div>
            <span class="illustration-label">Net Pay Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Payroll Validation (by 23rd)</h3>
        <p class="step-description">Cross-verify payroll output against previous month. Check new joiner and exit calculations. Validate TDS projections for the full year. Reconcile totals against approved headcount and salary budgets.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Anomalies flagged</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS projections verified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><line x1="60" y1="28" x2="60" y2="42" stroke="#14365F" stroke-width="1.5"/><line x1="74" y1="54" x2="95" y2="75" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 40l6 6 14-14" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Verified Clean</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Approval and Disbursement (by 28th)</h3>
        <p class="step-description">Present payroll summary to authorised signatory. Prepare NEFT bank salary file. Submit to company's bank. Confirm salary credit by the 7th of following month per Payment of Wages Act 1936.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Client sign-off</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank file submitted</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="24" r="2" fill="#FF5F56"/><circle cx="31" cy="24" r="2" fill="#FFBD2E"/><circle cx="37" cy="24" r="2" fill="#27C93F"/><rect x="25" y="35" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="45" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="55" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="60" y="75" width="28" height="12" rx="3" fill="#25D366"/><text x="74" y="84" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">PAY</text></svg></div>
            <span class="illustration-label">Salaries Credited</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Statutory Deposits (by 7th and 15th)</h3>
        <p class="step-description">Deposit TDS by the 7th. Deposit EPF (12%+12%) and ESI (0.75%+3.25%) by the 15th. Deposit PT as per state deadlines. All deposits with built-in deadline buffers.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS by 7th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PF/ESI by 15th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="29" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS - 7th</text><rect x="25" y="38" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PF+ESI - 15th</text><rect x="25" y="56" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="65" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PT - State</text></svg></div>
            <span class="illustration-label">Deposits Done</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Return Filing (Monthly/Quarterly)</h3>
        <p class="step-description">File EPF ECR monthly through EPFO Unified Portal. File Form 24Q quarterly under Income Tax Act 2025. File ESI half-yearly return (Form 5). File state PT returns per schedule.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ECR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 24Q filed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="60" height="8" rx="2" fill="#F5A623" opacity="0.7"/><rect x="20" y="36" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="20" y="48" width="55" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="20" y="60" width="45" height="6" rx="2" fill="#14365F" opacity="0.15"/><circle cx="95" cy="30" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M90 30l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">F&F Settlement (within 2 working days)</h3>
        <p class="step-description">Upon exit confirmation, compute all outstanding dues: unpaid salary, leave encashment, gratuity, reimbursements, and TDS. Process bank transfer and issue F&F payslip within the mandatory 2-working-day window per New Wage Code.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> F&F in 2 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS adjusted</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#25D366" opacity="0.2"/><path d="M52 35l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">F&amp;F Complete</text></svg></div>
            <span class="illustration-label">Exit Settled</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Required for Payroll Onboarding</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready for a smooth payroll transition:</p>
<ul>
<li>Company PAN and TAN (Tax Deduction Account Number)</li>
<li>EPFO Establishment Code and ESIC Employer Code (or documents for fresh registration)</li>
<li>Professional Tax Registration Certificates for all applicable states</li>
<li>PAN, Aadhaar, UAN, and bank account details for all employees</li>
<li>Employment contracts, appointment letters, and current salary structures</li>
<li>Investment declarations (Form 12BB) from all employees opting for old tax regime</li>
<li>Attendance and leave records for the first processing month</li>
<li>Previous payroll data, TDS challans, and Form 16 (if migrating from another provider)</li>
<li>Authorised signatory details and bank mandate for statutory payment transfers</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Payroll Challenges and How Patron Accounting Resolves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Regulatory Changes - Labour Codes 2025 and Income Tax Act 2025</td><td>In-house teams and generic software lag behind the most significant payroll reforms in decades</td><td>CA team has fully implemented all four Labour Code requirements and Income Tax Act 2025 provisions. Zero-disruption transition with compliance update briefing each financial year.</td></tr>
<tr><td>F&F Settlement Within 2 Working Days</td><td>Companies processing F&F manually or in batches cannot meet the new 2-working-day deadline</td><td>Standing F&F computation template for each client. Calculation initiated same day as exit notification. Bank transfer instructions within 1 working day.</td></tr>
<tr><td>Multi-State PT and LWF Complexity</td><td>Different PT slabs, payment frequencies, and LWF structures across states cause missed deadlines</td><td>Internal state-compliance matrix updated every financial year. All state-level filings tracked independently. Consolidated compliance calendar provided annually.</td></tr>
<tr><td>Payroll Data Security and Confidentiality</td><td>Mishandled salary data creates legal exposure under DPDPA 2023</td><td>Secured, access-controlled systems with role-based access. No unencrypted transmission. Data archived per 7-year statutory retention requirement.</td></tr>

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
            <h2 class="section-title">Payroll Processing and Management Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter Package (up to 10 employees)</td><td class="table-amount">Rs 3,000 - Rs 5,000/month</td></tr>
<tr><td>Growth Package (11-50 employees)</td><td class="table-amount">Rs 5,000 - Rs 10,000/month</td></tr>
<tr><td>Professional Package (51-150 employees)</td><td class="table-amount">Rs 10,000 - Rs 20,000/month</td></tr>
<tr><td>Scale Package (151-500 employees)</td><td class="table-amount">Rs 20,000 - Rs 40,000/month</td></tr>
<tr><td>Enterprise (500+ employees)</td><td class="table-amount">Custom pricing with dedicated CA team</td></tr>
<tr><td>Compliance Catch-Up (any size)</td><td class="table-amount">Rs 8,000 - Rs 25,000 one-time</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Processing and Management consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20payroll%20processing.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Monthly Payroll Processing Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Employee data and input collection cutoff</td><td>20th of current month</td></tr>
<tr><td>Payroll computation and gross-to-net calculation</td><td>20th to 22nd</td></tr>
<tr><td>Payroll validation and anomaly resolution</td><td>22nd to 23rd</td></tr>
<tr><td>Client approval of payroll summary</td><td>24th</td></tr>
<tr><td>Bank salary file submission</td><td>24th to 28th</td></tr>
<tr><td>Employee salary credited to bank accounts</td><td>By 7th of following month (mandatory)</td></tr>
<tr><td>TDS deposit (ITNS 281)</td><td>By 7th of following month</td></tr>
<tr><td>EPF and ESI contribution deposit</td><td>By 15th of following month</td></tr>
<tr><td>EPF ECR filing</td><td>Monthly through EPFO Unified Portal</td></tr>
<tr><td>Form 24Q (quarterly TDS return)</td><td>31 Jul, 31 Oct, 31 Jan, 31 May</td></tr>
<tr><td>ESI half-yearly return (Form 5)</td><td>Nov 11 and May 11</td></tr>
<tr><td>Form 16 issuance to all employees</td><td>By June 15 each year</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> This calendar is followed for every client, every month, with built-in deadline buffers. TDS deposit (7th) and PF/ESI deposit (15th) are non-negotiable statutory deadlines - late deposits attract 12% per annum interest and damages of 5-25% under EPF Act Section 14B.</p>

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
            <h2 class="section-title">Why Businesses Outsource Payroll to Patron Accounting</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
        <h3 class="feature-title">Zero Penalty Guarantee</h3>
        <p class="feature-text">Every statutory deposit and filing is calendar-driven with built-in buffers. In 15+ years, Patron Accounting has never caused a client to incur a late filing penalty under our management.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
        <h3 class="feature-title">Regulatory Readiness</h3>
        <p class="feature-text">Labour Codes (November 2025), Income Tax Act 2025 (April 2026), 50% basic rule, F&F 2-working-day rule, and digital records mandate - all implemented and live in our payroll processes.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
        <h3 class="feature-title">CA-Level Expertise</h3>
        <p class="feature-text">Payroll is processed and reviewed by Chartered Accountants. TDS optimisation, tax regime advisory, and gratuity/bonus computation accuracy come as standard, not premium add-ons.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">Data Security</h3>
        <p class="feature-text">Payroll data handled under strict access controls, encrypted transmission, and DPDPA 2023-aligned data handling practices. Employee financial data stays confidential.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div>
        <h3 class="feature-title">Multi-State Ready</h3>
        <p class="feature-text">PT and LWF compliance across Maharashtra, Karnataka, West Bengal, Tamil Nadu, and all other states with an internal state-compliance matrix updated annually.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">Scalability</h3>
        <p class="feature-text">Whether you add 5 employees or 500, Patron Accounting's payroll service scales without disruption, renegotiation, or additional lead time. From startup to enterprise.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 500+ Indian Businesses for Over 15 Years</h2>
            <div class="content-text">
                
                <p><strong>4 Offices Across India:</strong> Pune (Head Office), Mumbai, Bangalore, Delhi NCR - ensuring local expertise with national payroll coverage.</p>
<p><strong>500+ Companies with Managed Payroll:</strong> Across IT, manufacturing, healthcare, education, retail, and financial services sectors.</p>
<p><strong>20,000+ Employees under Patron Accounting Payroll:</strong> From startups with 5 employees to enterprises with 1,000+ - all processed with the same CA-level accuracy.</p>
<p><strong>15+ Years Zero-Penalty Track Record:</strong> Not a single client has incurred a late filing penalty under Patron Accounting's managed payroll service.</p>
<p><strong>12,000+ Statutory Filings Annually:</strong> EPF ECR, Form 24Q, ESI Form 5, PT returns, and LWF contributions - all managed on time, every time.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Patron Accounting Managed Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>In-House / DIY</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Labour Code 2025 + ITA 2025 Updates</td><td>Often delayed; software update dependency</td><td>Immediately implemented; zero gap</td></tr>
<tr><td>F&F within 2 Working Days</td><td>Operationally very difficult in-house</td><td>Standard process - 1 working day to compute</td></tr>
<tr><td>Multi-State PT and LWF</td><td>High miss rate; each state tracked manually</td><td>State matrix updated annually; auto-filed</td></tr>
<tr><td>TDS Accuracy (Old vs New Regime)</td><td>Employee self-declares; employer often applies incorrectly</td><td>CA-reviewed regime comparison per employee</td></tr>
<tr><td>Payroll Data Security</td><td>Spreadsheets, email - high breach risk</td><td>Role-based access; encrypted; DPDPA-aligned</td></tr>
<tr><td>Statutory Register Maintenance</td><td>Often incomplete or paper-based</td><td>Digital, 7-year compliant archives</td></tr>
<tr><td>Penalty Exposure</td><td>High - missed deadlines frequent</td><td>Negligible - deadline-buffer calendar in place</td></tr>
<tr><td>Cost (all-in: staff + software + filing)</td><td>Rs 40,000 - Rs 2,00,000/month depending on size</td><td>Rs 3,000 - Rs 40,000/month managed fee</td></tr>

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
            <h2 class="section-title">Related Services from Patron Accounting</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a comprehensive suite of payroll-adjacent compliance services:</p>
<ul>
<li><strong><a href="/payroll-services">Payroll Services (Overview)</a></strong> - Industry-specific payroll services for IT, healthcare, education, manufacturing, and retail sectors.</li>
<li><strong><a href="/esic-calculation-and-compliance-services">ESIC Calculation and Compliance</a></strong> - Dedicated ESIC registration, contribution calculation, and half-yearly return filing services.</li>
<li><strong><a href="/pf-registration">Provident Fund Registration</a></strong> - EPFO establishment code registration, UAN generation, and ongoing PF compliance.</li>
<li><strong><a href="/tds-return-filing-24q">TDS Return Filing</a></strong> - Quarterly Form 24Q/26Q filing, Form 16 generation, and TRACES reconciliation.</li>
<li><strong><a href="/gratuity-calculation-and-compliance-services">Gratuity Calculations and Compliance</a></strong> - Gratuity provision computation, fund management, and Payment of Gratuity Act compliance.</li>
<li><strong><a href="/income-tax-return">Income Tax Return Filing</a></strong> - ITR filing for salaried employees with Form 16 integration and refund processing.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Payroll Processing in India</h2>
            <div class="content-text">
                
                <p><strong>Code on Wages 2019 (November 2025 Implementation):</strong> Consolidates four wage-related laws. Key payroll implications: (a) Basic wages must be at least 50% of total remuneration - directly affects PF contribution base. (b) Wages must be paid by the 7th (under 1,000 employees) or 10th (1,000+ employees). (c) F&F settlement within 2 working days of exit. [Source: <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Code on Wages 2019</a>, Sections 2(y), 17, and 23]</p>
<p><strong><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF and MP Act 1952:</a></strong> Mandatory for 20+ employees. Employee contribution: 12% of Basic+DA. Employer: 12% (8.33% to EPS capped at Rs 15,000 basic + 3.67% to EPF). Monthly ECR through EPFO Unified Portal. Deposit by 15th monthly. Penalty for late deposit: interest at 12% per annum (Section 7Q) plus damages of 5-25% under Section 14B.</p>
<p><strong><a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act 1948:</a></strong> Applicable to establishments with 10+ employees where employees earn up to Rs 21,000/month gross. Employee: 0.75% of gross. Employer: 3.25% of gross. Deposit by 15th monthly. Form 5 by November 11 and May 11. Penalty: 12% per annum interest plus prosecution.</p>
<p><strong><a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax Act 2025</a> (Effective April 1 2026):</strong> Replaces the Income Tax Act 1961. TDS on salary at applicable slab rate. Deposit by 7th of following month. Form 24Q quarterly. Form 16 by June 15 annually. Updated formats and stricter audit trail requirements.</p>
<p><strong>Payment of Gratuity Act 1972:</strong> Payable after 5 years continuous service (1 year for fixed-term contracts post-2018). Formula: 15 days x last drawn salary / 26 x completed years. Maximum tax-exempt: Rs 20,00,000 under Income Tax Act 2025.</p>
<p><strong>Payment of Bonus Act 1965:</strong> Applicable for 20+ employees. Mandatory for employees earning up to Rs 21,000/month. Minimum 8.33% of annual wages; maximum 20%. Payable within 8 months of close of accounting year.</p>
<div class="table-responsive-wrapper"><table>
<thead><tr><th>Obligation</th><th>Deadline</th><th>Penalty for Default</th></tr></thead>
<tbody>
<tr><td>Salary disbursement</td><td>7th / 10th of following month</td><td>Payment of Wages Act violation; labour authority action</td></tr>
<tr><td>TDS deposit on salaries</td><td>7th of following month</td><td>Interest 1.5%/month; penalty up to TDS amount under ITA 2025</td></tr>
<tr><td>EPF contribution deposit</td><td>15th of following month</td><td>Interest 12% p.a. (Section 7Q); damages 5-25% under Section 14B</td></tr>
<tr><td>ESI contribution deposit</td><td>15th of following month</td><td>12% p.a. interest; prosecution under ESI Act 1948</td></tr>
<tr><td>Form 24Q quarterly TDS return</td><td>31 Jul, 31 Oct, 31 Jan, 31 May</td><td>Rs 200/day late fee under ITA 2025; minimum equal to TDS amount</td></tr>
<tr><td>Form 16 issuance</td><td>By June 15 annually</td><td>Rs 100/day penalty under ITA 2025</td></tr>
<tr><td>F&F salary dues settlement</td><td>Within 2 working days of exit</td><td>Code on Wages 2019 violation; labour dispute</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Payroll Processing and Management</h2>
                    <p class="faq-expanded__lead">Find answers about payroll outsourcing, statutory deductions, Labour Codes 2025, Income Tax Act 2025, and compliance requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Payroll Processing and Management',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between payroll processing and payroll management?</h3>
                        <div class="faq-expanded__a"><p>Payroll processing refers specifically to the monthly cycle of computing gross salary, deductions, and net pay and disbursing salaries. Payroll management is the broader function including statutory registration and compliance (PF, ESI, TDS, PT), return filing, year-end Form 16, F&F settlements, and CTC structure advisory. Patron Accounting provides both as a single integrated managed service.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is outsourcing payroll to a CA firm better than using payroll software?</h3>
                        <div class="faq-expanded__a"><p>Payroll software automates calculations but cannot optimise tax regimes, catch misclassified perquisites, flag PT deadline changes, or process a compliant F&F within 2 working days. CA-managed outsourcing combines automated accuracy with professional review and regulatory awareness. For a 50-person company, in-house payroll costs typically exceed outsourcing to Patron Accounting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are mandatory statutory deductions from an Indian employee's salary?</h3>
                        <div class="faq-expanded__a"><p>Statutory deductions include: (a) EPF - 12% of Basic+DA; (b) ESI - 0.75% of gross for employees earning up to Rs 21,000/month; (c) TDS - income tax at applicable slab rate under Income Tax Act 2025; (d) Professional Tax - state-specific, max Rs 2,500/year; (e) Labour Welfare Fund - state-specific in applicable states. Employer also contributes 12% EPF, 3.25% ESI, and accrues gratuity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the 50% basic wage rule and how does it affect payroll?</h3>
                        <div class="faq-expanded__a"><p>The Code on Wages 2019 (active November 2025) requires that basic wages must be at least 50% of total CTC. This prevents low-basic/high-allowance structures that minimise PF liability. For example, if CTC is Rs 50,000/month, Basic+DA must be at least Rs 25,000 - making minimum EPF contribution Rs 3,000/month each from employee and employer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the F&amp;F settlement 2-working-day rule?</h3>
                        <div class="faq-expanded__a"><p>Under the New Wage Code (active November 2025), employers must settle all salary dues within 2 working days of an employee's exit. This requires real-time payroll readiness - companies cannot wait for the regular monthly cycle. Patron Accounting maintains a standing F&F workflow activated the same day an exit is confirmed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How does the Income Tax Act 2025 affect payroll?</h3>
                        <div class="faq-expanded__a"><p>The Income Tax Act 2025 replaces the 1961 Act from April 1 2026. For payroll, it retains TDS on salary at applicable slab rates but introduces updated Form 24Q and Form 16 formats and stricter audit trail requirements. Payroll systems must be updated before the April 2026 cycle. Patron Accounting has fully implemented ITA 2025.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What statutory records must employers maintain under the November 2025 Labour Codes?</h3>
                        <div class="faq-expanded__a"><p>Employers must maintain fully digitalised wage registers, attendance registers, muster rolls, PF and ESI contribution records, payslips, LWF records, and statutory challans. All records must be retained for 7 years minimum and available for inspection without prior notice. Failure to produce digital records attracts adverse findings and penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Payroll outsource kaise karein India mein?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting se payroll outsource karna simple hai. Aapko employee data (PAN, Aadhaar, UAN, bank details), salary structure, aur attendance records dena hota hai. Hum complete setup karte hain - EPFO, ESIC, TAN, PT registrations se lekar monthly payslip, TDS, PF, ESI deposits, Form 24Q filing, aur year-end Form 16 tak sab handle karte hain. Fee Rs 149 per employee se shuru hoti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: EPF rate?</strong> A: 12% employee + 12% employer of Basic+DA. Deposit by 15th monthly. [EPF Act 1952]</p>
<p><strong>Q: ESI rate?</strong> A: 0.75% employee + 3.25% employer. Applicable for gross up to Rs 21,000/month. Deposit by 15th.</p>
<p><strong>Q: TDS deposit deadline?</strong> A: 7th of following month under Income Tax Act 2025 (from April 2026).</p>
<p><strong>Q: Salary payment deadline?</strong> A: 7th of following month for under 1,000 employees. [Code on Wages 2019]</p>
<p><strong>Q: F&F settlement deadline?</strong> A: Salary dues within 2 working days of exit. [New Wage Code, November 2025]</p>
<p><strong>Q: Form 16 deadline?</strong> A: To all employees by June 15 annually. Form 24Q quarterly: 31 Jul, 31 Oct, 31 Jan, 31 May.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Is Too Important to Manage Casually - Start Today</h2>
            <div class="content-text">
                
                <p>India's payroll compliance landscape has fundamentally changed in 2025-26. Four Labour Codes are active. The Income Tax Act 2025 comes into force April 1 2026. F&F must be settled in 2 working days. Digital registers must be maintained for 7 years. Basic salary must be 50% of CTC.</p>
<p>A salary error erodes employee trust and drives attrition. A compliance failure invites penalties (Rs 200/day late fee, 12% per annum interest), regulatory notices, and in serious cases, prosecution of directors and officers.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20payroll.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a> for a free payroll health check and transition assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Move to Accurate, Penalty-Free Managed Payroll</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Payroll is the single interaction every employee has with their employer every month. A salary error, delayed payment, or missing payslip erodes trust and drives attrition. A compliance failure invites penalties, regulatory notices, and prosecution.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">For businesses that partner with Patron Accounting, the 2026 payroll compliance environment is a non-event - handled with CA precision, every month, on time, with zero surprises. 500+ companies and 20,000+ employees trust us for their payroll. Starting at Rs 149 per employee.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Contact us for a free payroll health check and transition assessment. Our team will audit your current payroll compliance, identify gaps, and provide a custom quote within 24 hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20payroll%20processing.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Processing%20and%20Management%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Payroll%20Processing%20and%20Management%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Payroll Processing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert payroll processing and statutory compliance available in major cities. Click your city for location-specific information.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/payroll-processing-and-management-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/payroll-processing-and-management-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/payroll-processing-and-management-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/payroll-processing-and-management-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for Payroll Processing and Management</div>
    <div class="pa-cross-grid">
        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
        <a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gratuity-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Gratuity Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months. Content is aligned with the four Labour Codes (active November 2025), Income Tax Act 2025 (effective April 1 2026), EPF Act 1952, ESI Act 1948, and Code on Wages 2019. Next scheduled review: June 2026.</p>
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
