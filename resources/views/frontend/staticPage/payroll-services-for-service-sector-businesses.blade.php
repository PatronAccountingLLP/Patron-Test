
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
    <title>Service Sector Payroll - CTC, TDS & Professional Tax India</title>
    <meta name="description" content="Payroll for service sector businesses in India - hotels, restaurants, retail, BPO, PF, ESI, TDS, service charge, and statutory compliance. From Rs 4,000/month.">
    <link rel="canonical" href="/payroll-services-for-service-sector-businesses">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Service Sector Payroll - CTC, TDS & Professional Tax India">
    <meta property="og:description" content="Payroll for service sector businesses in India - hotels, restaurants, retail, BPO, PF, ESI, TDS, service charge, and statutory compliance. From Rs 4,000/month.">
    <meta property="og:url" content="/payroll-services-for-service-sector-businesses">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Service Sector Payroll - CTC, TDS & Professional Tax India">
    <meta name="twitter:description" content="Payroll for service sector businesses in India - hotels, restaurants, retail, BPO, PF, ESI, TDS, service charge, and statutory compliance. From Rs 4,000/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll for Service Sector Companies",
          "description": "Payroll for service sector businesses in India - hotels, restaurants, retail, BPO, PF, ESI, TDS, service charge, and statutory compliance. From Rs 4,000/month.",
          "url": "https://www.patronaccounting.com/payroll-services-for-service-sector-businesses",
          "serviceType": "Payroll for Service Sector Companies",
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
              "name": "Payroll for Service Sector Companies",
              "item": "https://www.patronaccounting.com/payroll-services-for-service-sector-businesses"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How are minimum wages applicable to the service sector in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Minimum wages are set by state governments under Code on Wages 2019, with separate rates for unskilled, semi-skilled, skilled, and highly skilled workers by geographic zone. Rates are revised bi-annually (April and October). Paying below minimum wage is a criminal offence with fines up to Rs 1,00,000 and imprisonment up to 6 months for repeat offences. [Code on Wages 2019, Sections 6, 9, 26]"
              }
            },
            {
              "@type": "Question",
              "name": "How should hotels and restaurants handle service charge in payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Service charge collected from customers must be distributed entirely to staff per DoCA July 2022 guidelines - establishments cannot retain any portion. The distributed amount is employee salary income and must be included in TDS computation under Section 192 of Income Tax Act 2025. Patron Accounting maintains a formal pooling and distribution register ensuring amounts are reflected in payslips and Form 16."
              }
            },
            {
              "@type": "Question",
              "name": "What is the F&F 2-working-day rule and why is it critical for service sector?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The New Wage Code (November 2025) mandates salary dues to be settled within 2 working days of exit. For BPOs (8-15% attrition), hotels (5-10%), and retail (3-8%), this means processing dozens of F&F settlements monthly - each requiring unpaid salary, leave encashment, gratuity, service charge dues, and TDS computation within 2 working days. Patron Accounting's standing template enables same-day computation."
              }
            },
            {
              "@type": "Question",
              "name": "Are contract workers covered under PF and ESI?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Contract workers are covered under EPF (20+ employees) and ESI (10+ employees) counting both direct and contract workers. The contractor is primarily responsible, but the principal employer is jointly liable under CLRA Act 1970, Section 21 if the contractor defaults. Hotels, retail chains, and facility managers must verify contractor PF/ESI compliance monthly."
              }
            },
            {
              "@type": "Question",
              "name": "What is the GST rate on hotel rooms and restaurants after September 2025?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Per 56th GST Council (effective September 22 2025): Hotel rooms up to Rs 7,500/night at 5% GST (no ITC); above Rs 7,500 at 18% (ITC available). Most standalone restaurants at 5% (no ITC). Restaurants in specified premises (hotel tariff above Rs 7,500) at 18% (with ITC). These affect service charge collection and billing."
              }
            },
            {
              "@type": "Question",
              "name": "Is overtime mandatory in the service sector and how is it computed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Work beyond 9 hours/day or 48 hours/week attracts overtime at double the regular rate. For hotel, BPO, and logistics shifts, overtime must be computed on actual hourly rate (Basic+DA / 26 days / 8 hours) and included in gross wages for EPF, ESI, and minimum wage compliance. Patron Accounting's payroll system flags and accurately computes overtime for all service sector clients."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if a service sector employer pays below minimum wages?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Underpayment under Code on Wages 2019 is a criminal offence: fine up to Rs 50,000 for first offence; imprisonment up to 3 months; for repeat offences - fine up to Rs 1,00,000 and imprisonment up to 6 months. Employer also liable for arrears with interest. For high-headcount service businesses, even small per-employee underpayment creates significant aggregate liability. [Section 26]"
              }
            },
            {
              "@type": "Question",
              "name": "Service sector company ka payroll kaise manage karein?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron Accounting se outsource karna simple hai. Aapko employee data, shift attendance, service charge collections, aur salary structure dena hota hai. Hum complete setup karte hain - minimum wage mapping, EPFO/ESIC registration, monthly payslip, TDS, PF/ESI deposits, service charge TDS, Form 24Q, aur Form 16 tak sab handle karte hain. Fee Rs 149 per employee se shuru hoti hai. Quick Answers Q: Minimum wages? A: State-specific, skill-specific, revised twice yearly. Criminal offence to pay below minimum. [Code on Wages 2019] Q: EPF? A: 12%+12% of Basic+DA. Mandatory 20+ employees. Deposit by 15th. Covers most service sector workers. Q: Service charge? A: Must be fully distributed to staff if collected. Distributed amount is salary income; include in TDS base. [DoCA 2022] Q: Contract workers? A: Principal employer jointly liable for PF and ESI if contractor defaults. [CLRA 1970, Section 21] Q: Hotel GST (Sep 2025)? A: Rooms up to Rs 7,500/night at 5% (no ITC); above Rs 7,500 at 18% (with ITC). [56th GST Council] Q: F&F? A: Salary dues within 2 working days of exit. [New Wage Code, November 2025]"
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
                        Payroll Services for Service Sector Companies in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Service Sector Specialist:</span> Hotels, restaurants, BPO, retail, logistics, security agencies, and professional services - shift-based, hourly, and high-attrition workforce payroll managed end-to-end.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Compliance:</span> PF (12%+12%), ESI (0.75%+3.25%), TDS under Income Tax Act 2025, minimum wages per state and skill category, PT, and LWF - all deposits and returns.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>F&F in 2 Working Days:</span> Mandatory for all service sector employers with high turnover - housekeeping, food service, delivery, and BPO agents processed within the New Wage Code deadline.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Service Charge and Tips:</span> Service charge pooling, distribution, and TDS compliance for hotels and restaurants per Department of Consumer Affairs guidelines.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">200+ service sector companies trust Patron Accounting for payroll across hospitality, retail, BPO, logistics, and facility management.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Service%20Sector%20Payroll&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20service%20sector%20payroll%20services.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20for%20my%20service%20sector%20company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Service Sector Payroll',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-service-sector-businesses', 'label' => 'Service Sector Payroll', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services (Overview)', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services-for-the-hospitality-industry', 'label' => 'Hospitality Payroll', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-processing-and-management-services', 'label' => 'Payroll Processing and Management', 'selected' => false, 'disabled' => false],
                            ['value' => 'esic-registration', 'label' => 'ESIC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'pf-registration', 'label' => 'PF Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We run four hotel properties across Pune, Mumbai, Goa, and Bangalore. Before Patron Accounting, our minimum wage compliance was always a concern - different states, different slabs, biannual revisions. Now we get a monthly compliance certificate confirming zero breaches.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajendra Shinde</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">GM, Hospitality Chain, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our BPO has 600 agents with 8-10% monthly attrition. Patron Accounting processes all our F&F within 2 days of exit. We have not received a single wage non-payment complaint since we switched. The service charge TDS handling is also impeccable.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Krishnan</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Head, BPO Company, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our restaurant chain has 180 staff across 12 outlets. Patron handles the service charge distribution register, tip-based TDS, minimum wages for kitchen and service staff across two states, and all our seasonal hires during festivals. Completely hassle-free.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, QSR Chain, Mumbai and Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We manage 2,000 security guards deployed across 40 client sites. CLRA compliance, contractor PF audits, and multi-state minimum wages were our biggest risks. Patron Accounting now handles all of it - including the principal employer compliance documentation.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vijay Pawar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Security Agency, Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our retail chain with 300+ floor staff across 8 states was struggling with multi-state PT, different minimum wages, and seasonal headcount surges during Diwali. Patron scaled our payroll from 150 to 450 employees in one month without a single compliance gap.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">COO, Retail Chain, Hyderabad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get specialist payroll for your service sector business - minimum wages, service charge, F&F, and CLRA compliance managed by CAs.</p>
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
            <a href="#what-section" class="toc-btn">What's Different</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">10-Step Process</a>
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
            <h2 class="section-title">Service Sector Payroll in India - Quick Reference for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Service Sector Payroll Services at a Glance</strong></p>
                    <p>India's service sector employs over 250 million people across hospitality, retail, logistics, BPO, facility management, security, and professional services. Service sector payroll combines high headcount, hourly and daily-wage workers, multiple minimum wage slabs (state-wise and skill-wise), seasonal surges, service charge distribution, high attrition, and the strictest F&F timeline under the New Wage Code. With four Labour Codes active since November 2025 and the Income Tax Act 2025 from April 2026, a specialist CA payroll partner is an operational necessity.</p>
                </div>
                <p>Patron Accounting's CA team delivers specialist payroll for hotels, restaurants, BPO and KPO firms, retail chains, logistics companies, security agencies, facility management, and professional services firms - handling shift-based pay, minimum wage compliance across states, service charge pooling, and high-attrition F&F processing every month.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Key Detail for Service Sector</th></tr></thead><tbody>
<tr><td>EPF</td><td>12%+12% of Basic+DA. Mandatory for 20+ employees. Most service sector workers under Rs 15,000 basic qualify. Deposit by 15th monthly.</td></tr>
<tr><td>ESI</td><td>0.75%+3.25%. Employees earning up to Rs 21,000/month gross. Covers large portion of service sector workforce. Deposit by 15th.</td></tr>
<tr><td>Minimum Wages</td><td>State-specific; skill-category-specific. Updated half-yearly. Must track unskilled, semi-skilled, skilled, and highly skilled slabs.</td></tr>
<tr><td>Service Charge</td><td>Must be fully distributed to staff if collected. Distributed amount is taxable salary; TDS applies under Section 192.</td></tr>
<tr><td>TDS on Salary</td><td>Under Income Tax Act 2025 (effective April 2026). Most service workers in 0% or lower slabs; senior staff in 20-30%.</td></tr>
<tr><td>F&F Settlement</td><td>Within 2 working days of exit per New Wage Code (November 2025). Critical for high-attrition service sector roles.</td></tr>
<tr><td>CLRA Compliance</td><td>Principal employer jointly liable if contractor defaults on PF, ESI, minimum wages. [CLRA Act 1970, Section 21]</td></tr>
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
                <h2 class="section-title">Service Sector Payroll - What Makes It Different?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Service sector payroll in India is distinct from manufacturing or IT payroll in several fundamental ways. The workforce is predominantly hourly, shift-based, or contractual. Minimum wages - rather than CTC - form the baseline for most employees, and these vary by state and skill level. Service charge income must be pooled and distributed separately from wages. Seasonal demand spikes create workforce surges requiring rapid onboarding and subsequent F&F.</p>
<p>Under the <strong>Code on Wages 2019</strong> (active November 2025), the 50% basic wage rule requires Basic+DA to be at least 50% of total CTC. For service sector workers earning near-minimum wage with allowances forming a large share of pay, this restructuring can increase PF contribution base and total employer cost. [Source: Code on Wages 2019, Section 2(y)]</p>
<p>The <strong>56th GST Council</strong> (September 2025) also affects hospitality payroll through revised hotel room GST rates (5% for tariff up to Rs 7,500; 18% above Rs 7,500) and restaurant GST (5% for most standalone; 18% for specified premises) - directly impacting service charge collection and distribution.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Service Sector Payroll:</strong></p>
                    <p><strong>Minimum Wages:</strong> Set by state governments under the Code on Wages 2019. Revised bi-annually. Must be applied by skill category (unskilled, semi-skilled, skilled, highly skilled) and geographic zone. Paying below minimum is a criminal offence. [Code on Wages 2019, Section 6]</p>
<p><strong>Service Charge Distribution:</strong> Service charges collected from customers and distributed to staff are employee income, not employer wages. Must be included in TDS computation under Section 192 of Income Tax Act 2025. [DoCA Guidelines, July 2022]</p>
<p><strong>Shift Differentials:</strong> Evening, night, and holiday shift premiums common in hospitality, BPO, and logistics. Included in EPF and ESI computation base.</p>
<p><strong>Contract Workers (CLRA):</strong> Principal employer is ultimately responsible for minimum wages, PF, and ESI even if the contractor defaults. [CLRA Act 1970, Section 21]</p>
<p><strong>50% Basic Wage Rule:</strong> Code on Wages 2019 (November 2025) requires Basic+DA to be at least 50% of total CTC, increasing PF contribution base for many service sector workers.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Service Sector Payroll -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Service Sector Payroll</text>
                            <rect x="42" y="48" width="28" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="56" y="56" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Hotel</text>
                            <text x="56" y="65" font-size="5" fill="#14365F" opacity="0.5" text-anchor="middle" font-family="Arial">Shifts</text>
                            <rect x="78" y="48" width="28" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="92" y="56" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BPO</text>
                            <text x="92" y="65" font-size="5" fill="#14365F" opacity="0.5" text-anchor="middle" font-family="Arial">Night</text>
                            <rect x="114" y="48" width="28" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="128" y="56" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Retail</text>
                            <text x="128" y="65" font-size="5" fill="#14365F" opacity="0.5" text-anchor="middle" font-family="Arial">Multi</text>
                            <line x1="45" y1="82" x2="155" y2="82" stroke="#F5A623" stroke-width="1.5" stroke-linecap="round"/>
                            <line x1="45" y1="95" x2="140" y2="95" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <line x1="45" y1="108" x2="130" y2="108" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <line x1="45" y1="121" x2="145" y2="121" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Service Sector Payroll</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Service Sector Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Service Sector</span>
                        <strong>Hotels, BPO, Retail, Logistics</strong>
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
            <h2 class="section-title">Which Service Sector Businesses Need Specialist Payroll?</h2>
            <div class="content-text">
                
                <p>Payroll compliance in the service sector scales with headcount, workforce type, geographic spread, and industry-specific regulations. Patron Accounting's specialist payroll covers:</p>
<ul>
<li><strong>Hotels, Resorts, and Hospitality Chains:</strong> Multiple pay grades (front office, housekeeping, F&B, kitchen, security), shift rosters, service charge pooling, meal and accommodation perquisite computation, high monthly turnover.</li>
<li><strong>Restaurants and QSR Chains:</strong> Hourly kitchen and service staff, delivery executives, multiple minimum wage slabs, tip distribution, seasonal hiring, variable hours.</li>
<li><strong>BPO and KPO Companies:</strong> Large shift-based workforces, night-shift allowances, performance incentives, high attrition requiring monthly joinings and exits at scale.</li>
<li><strong>Retail Chains and Supermarkets:</strong> Multi-outlet staff, incentive-linked variable pay, holiday roster management, multi-state PT and LWF compliance.</li>
<li><strong>Logistics and Courier Companies:</strong> Delivery staff (full-time and gig-adjacent), warehouse workers, variable pay based on deliveries/distance, multi-state minimum wages.</li>
<li><strong>Security Agencies and Facility Management:</strong> Contract-heavy workforces, <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">CLRA compliance</a>, separate payroll streams for client-deployed vs in-house staff, guard allowances, night-shift premiums.</li>
<li><strong>Professional Services Firms:</strong> Salaried workforce with performance bonuses, partner profit-sharing, high TDS compliance for senior staff in upper brackets.</li>
</ul>
<p><strong>Statutory Registration Thresholds:</strong></p>
<ul>
<li><strong>EPF:</strong> Mandatory for 20+ employees. [Section 1(3)(a), EPF Act 1952]</li>
<li><strong>ESI:</strong> Mandatory for 10+ employees; covers workers earning up to Rs 21,000/month gross. [Section 2(12), <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act 1948</a>]</li>
<li><strong>CLRA Registration:</strong> Required for principal employers engaging 20+ contract workers. [CLRA Act 1970, Section 7]</li>
<li><strong>TAN:</strong> Required from first employee crossing the income tax threshold. [<a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act 2025</a>]</li>
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
            <h2 class="section-title">6 Specialist Service Sector Payroll Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>CTC Structure and Minimum Wage Design</td><td>Salary structures compliant with state-specific minimum wages (unskilled, semi-skilled, skilled) and the 50% basic rule under Code on Wages 2019. Pay grades for hotel departments, BPO teams, retail outlets.</td></tr>
<tr><td>Monthly Payroll Processing</td><td>Gross-to-net for all full-time, part-time, contractual, and seasonal staff. Shift-differential pay, overtime (double rate), service charge distribution, attendance-linked deductions, and payslip generation.</td></tr>
<tr><td>Statutory Compliance - PF, ESI, PT, LWF</td><td>EPF ECR monthly; ESI challan and Form 5 half-yearly; Professional Tax across all states; Labour Welfare Fund per state schedule. All deposits and returns on time.</td></tr>
<tr><td>Service Charge Distribution and TDS</td><td>Pooling service charge receipts, per-employee distribution, inclusion in gross salary for TDS under Section 192 of Income Tax Act 2025, compliant with DoCA July 2022 guidelines.</td></tr>
<tr><td>High-Attrition F&F Settlement</td><td>F&F within 2 working days of exit per New Wage Code - unpaid salary, leave encashment, gratuity, service charge dues, TDS. Standing template for BPOs and hotels with 5-10% monthly attrition.</td></tr>
<tr><td>Minimum Wage Monitoring</td><td>Live state minimum wage matrix updated within 7 days of every state notification. Half-yearly revision tracking (April and October). Monthly compliance certificate confirming zero minimum wage breaches.</td></tr>

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
            <h2 class="section-title">10-Step Service Sector Payroll Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows this cycle for every service sector client - from shift data collection on the 20th to statutory filing by the 15th. Minimum wage verification is performed every month, not just at revision time.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Setup and Employee Onboarding</h3><p class="step-description">Collect employee PAN, Aadhaar, UAN, and bank details. Classify by skill level for minimum wage slab mapping. Set up separate payroll streams for full-time, part-time, contract, and seasonal hires. Register with EPFO, ESIC, obtain TAN.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Skill classification done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Registrations complete</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Setup Complete</span><span class="step-number-large">01</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Monthly Input Collection (by 20th)</h3><p class="step-description">Receive shift-wise attendance, leave records, overtime approvals, service charge pooled collections, performance incentives, and new joiner/exit notifications.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shift data collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Service charge pooled</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="20" y="22" width="35" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">SHIFTS</text><rect x="65" y="22" width="35" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">SC Pool</text><rect x="20" y="40" width="80" height="5" rx="1" fill="#14365F" opacity="0.15"/><rect x="20" y="50" width="60" height="5" rx="1" fill="#14365F" opacity="0.15"/><rect x="20" y="60" width="70" height="5" rx="1" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Data Collected</span><span class="step-number-large">02</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Minimum Wage Verification</h3><p class="step-description">Before computing salary, verify each employee's gross wages equal or exceed the current applicable state minimum wage for their skill category and zone. Apply updated rates from any revision notification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero wage breaches</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> State slabs applied</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MIN</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">WAGE</text><path d="M45 62l10 10 20-20" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Wages Verified</span><span class="step-number-large">03</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Payroll Computation and Service Charge</h3><p class="step-description">Calculate basic salary, add shift differentials, overtime (double rate), and service charge distribution. Apply all statutory deductions: EPF, ESI, TDS, PT, LWF. Arrive at net take-home per employee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Service charge in TDS</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net pay computed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="26" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GROSS + SC</text><line x1="30" y1="32" x2="90" y2="32" stroke="#14365F" stroke-width="0.8" opacity="0.3"/><text x="35" y="42" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- EPF 12%</text><text x="35" y="50" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- ESI 0.75%</text><text x="35" y="58" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- TDS</text><line x1="30" y1="63" x2="90" y2="63" stroke="#25D366" stroke-width="1.5"/><text x="60" y="74" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">NET PAY</text></svg></div><span class="illustration-label">Net Pay Ready</span><span class="step-number-large">04</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Validation and Approval (by 24th)</h3><p class="step-description">Cross-verify all computations against previous month. Flag anomalies. Spot-check minimum wage compliance. Validate TDS projections. Obtain client confirmation before bank transfer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Anomalies resolved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Client approved</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><rect x="25" y="35" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="45" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="55" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="60" y="72" width="28" height="12" rx="3" fill="#25D366"/><text x="74" y="81" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">OK</text></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">05</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Salary Disbursement (by 7th)</h3><p class="step-description">Prepare bank salary file (NEFT/RTGS). Credit salaries by the 7th of following month per Code on Wages 2019. Issue digital payslips showing gross, shift premium, service charge share, all deductions, and net pay.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salaries credited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips issued</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEFT</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="60" y="55" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Rs</text></svg></div><span class="illustration-label">Salaries Credited</span><span class="step-number-large">06</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Statutory Deposits and Filings</h3><p class="step-description">TDS by 7th. EPF and ESI by 15th. PT and LWF per state schedule. EPF ECR monthly. Form 24Q quarterly. ESI Form 5 half-yearly. All filings with acknowledgement copies retained.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS by 7th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PF/ESI by 15th</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="60" height="8" rx="2" fill="#F5A623" opacity="0.7"/><rect x="20" y="36" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="20" y="48" width="55" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="20" y="60" width="45" height="6" rx="2" fill="#14365F" opacity="0.15"/><circle cx="95" cy="30" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M90 30l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">07</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">F&F Settlement and Year-End</h3><p class="step-description">Process exits within 2 working days - unpaid wages, leave encashment, gratuity, service charge dues, TDS. Year-end: Form 16 by June 15, gratuity provision, statutory bonus (8.33%-20% under Payment of Bonus Act 1965).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> F&F in 2 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 issued</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="32" r="15" fill="#25D366" opacity="0.2"/><path d="M52 32l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="60" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">All Complete</span><span class="step-number-large">08</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Service Sector Payroll Setup</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready for a smooth payroll onboarding:</p>
<ul>
<li>Company PAN, TAN, EPFO Establishment Code, and ESIC Employer Code</li>
<li>Professional Tax Registrations for all states where employees are located</li>
<li>CLRA Registration Certificate (if engaging contract labour through contractors)</li>
<li>PAN, Aadhaar, UAN, and bank account details for all employees</li>
<li>Employment contracts with designation, skill category, and basic pay</li>
<li>Current state government minimum wage notification for all applicable states and skill categories</li>
<li>Service charge distribution policy (for hotels and restaurants) signed by management</li>
<li>Attendance and shift roster data from POS, biometric, or manual system for first processing month</li>
<li>Previous payroll data and TDS challans if transitioning from another provider</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Service Sector Payroll Challenges and How Patron Accounting Resolves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Minimum Wage Complexity Across States</td><td>Multi-state hospitality chains must track different minimum wage schedules with multiple skill categories and biannual revisions. Misclassification creates criminal exposure under Code on Wages 2019.</td><td>Live internal minimum wage matrix covering all states, updated within 7 days of each notification. Auto-flagging before payroll finalisation. Monthly zero-breach compliance certificate.</td></tr>
<tr><td>Service Charge Distribution and TDS</td><td>Hotels and restaurants that pool service charge face DoCA compliance (full distribution to staff) and TDS compliance (Section 192 on aggregate income). Many fail to track accurately or include in TDS base.</td><td>Formal service charge pooling register. Monthly distribution per approved formula. Service charge included in each employee's gross salary for TDS computation and reflected in Form 16.</td></tr>
<tr><td>High-Attrition F&F at Scale</td><td>BPOs (8-15% monthly attrition), hotels (5-10%), and retail (3-8%) need dozens of F&F settlements per month, each within 2 working days per New Wage Code. Manual batch processing routinely misses deadlines.</td><td>Standing F&F template pre-configured per client. Same-day computation on exit confirmation. Bank transfer instructions within 1 working day. Meets 2-day deadline reliably at any volume.</td></tr>
<tr><td>CLRA Contract Labour Compliance</td><td>Hotels, retail chains, security agencies use contract labour extensively. Principal employer jointly liable if contractor defaults on PF, ESI, minimum wages. [CLRA Act 1970, Section 21]</td><td>Contractor compliance audit: monthly verification of PF/ESI deposits, minimum wage payments, statutory registers. CLRA Form V registration managed. Payroll migration support for direct-hire transitions.</td></tr>

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
            <h2 class="section-title">Service Sector Payroll Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter (up to 25 employees)</td><td class="table-amount">Rs 4,000 - Rs 7,000/month</td></tr>
<tr><td>Growth (26-100 employees)</td><td class="table-amount">Rs 7,000 - Rs 15,000/month</td></tr>
<tr><td>Professional (101-300 employees)</td><td class="table-amount">Rs 15,000 - Rs 30,000/month</td></tr>
<tr><td>Scale (301-750 employees)</td><td class="table-amount">Rs 30,000 - Rs 55,000/month</td></tr>
<tr><td>Enterprise (750+ employees)</td><td class="table-amount">Custom pricing with dedicated team</td></tr>
<tr><td>Minimum Wage Compliance Audit (one-time)</td><td class="table-amount">Rs 5,000 - Rs 15,000</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Service Sector Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20service%20sector%20payroll.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Monthly Payroll Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Attendance, shift records, service charge submitted</td><td>20th of current month</td></tr>
<tr><td>Minimum wage verification and payroll computation</td><td>21st to 22nd</td></tr>
<tr><td>Service charge distribution and TDS inclusion</td><td>22nd</td></tr>
<tr><td>Payroll validation and client approval</td><td>22nd to 24th</td></tr>
<tr><td>Bank salary upload submission</td><td>24th to 28th</td></tr>
<tr><td>Employee salaries credited (mandatory)</td><td>By 7th of following month</td></tr>
<tr><td>TDS deposit (ITNS 281)</td><td>By 7th of following month</td></tr>
<tr><td>EPF and ESI contribution deposit</td><td>By 15th of following month</td></tr>
<tr><td>F&F settlement for exits</td><td>Within 2 working days of confirmed exit</td></tr>
<tr><td>Form 24Q quarterly TDS return</td><td>31 Jul, 31 Oct, 31 Jan, 31 May</td></tr>
<tr><td>ESI half-yearly return (Form 5)</td><td>Nov 11 and May 11</td></tr>
<tr><td>Minimum wage revision check</td><td>April and October each year</td></tr>
<tr><td>Form 16 to all employees</td><td>By June 15 annually</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Minimum wage verification is performed every month, not just at revision time. Late EPF deposit attracts 12% interest plus damages 5-25% under Section 14B. Late TDS attracts 1.5%/month interest plus Rs 200/day. Paying below minimum wage is a criminal offence under Code on Wages 2019, Section 26.</p>

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
            <h2 class="section-title">Why Service Sector Companies Choose Patron Accounting</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div><h3 class="feature-title">Minimum Wage Intelligence</h3><p class="feature-text">Live state minimum wage matrix updated within 7 days of every notification. Monthly compliance certificate confirming zero breaches across all skill categories.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Service Charge Expertise</h3><p class="feature-text">Structured service charge pooling, distribution, and TDS compliance for hospitality clients. Formal register maintained. Full Form 16 reflection.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">F&F at Scale</h3><p class="feature-text">Same-day F&F computation and next-day bank instruction for BPOs, retail chains, and hotels processing 20-100 exits per month under the 2-working-day New Wage Code deadline.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">CLRA Compliance</h3><p class="feature-text">Contractor compliance monitoring as standard - PF/ESI verification, minimum wage audit, CLRA Form V registration, and payroll migration for direct-hire transitions.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Multi-State and Multi-Outlet</h3><p class="feature-text">Pre-configured for multi-state PT, LWF, and minimum wage compliance from day one. Ideal for hospitality chains, retail groups, and logistics companies across 5-20 states.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Seasonal Workforce Ready</h3><p class="feature-text">Rapid onboarding with compliant payroll from Day 1 for festive season surges in hospitality and retail. Seamless exit processing when seasonal roles end.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 200+ Service Sector Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>4 Offices:</strong> Pune, Mumbai, Bangalore, Delhi NCR - India's major service sector hubs.</p>
<p><strong>200+ Service Sector Clients:</strong> Hotel chains, restaurant groups, BPO companies, retail chains, logistics operators, security agencies, and professional services firms.</p>
<p><strong>15+ Years</strong> managing high-attrition, multi-state, shift-based service sector payroll with zero-penalty statutory compliance.</p>
<p><strong>500+ Monthly F&F Settlements</strong> processed across all service sector clients - each within the 2-working-day New Wage Code deadline.</p>
<p><strong>All 28 States and 8 UTs</strong> covered for PT, LWF, and minimum wage compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Patron Accounting for Service Sector</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>In-House / DIY</th><th>Patron Accounting CA-Managed</th></tr></thead>
                    <tbody>
                        <tr><td>Minimum Wage Tracking (multi-state)</td><td>Manual; often missed at revision time</td><td>Live matrix; updated within 7 days of state notification</td></tr>
<tr><td>Service Charge Distribution and TDS</td><td>Often undocumented; not in TDS base</td><td>Formal register; fully in TDS computation and Form 16</td></tr>
<tr><td>F&F within 2 Working Days</td><td>Operationally difficult for high-attrition teams</td><td>Standing template; same-day compute; next-day bank instruction</td></tr>
<tr><td>CLRA Contractor Compliance</td><td>Usually not monitored by payroll team</td><td>Included in service offering; monthly audit support</td></tr>
<tr><td>Labour Codes 2025 + ITA 2025</td><td>Software update dependency; often delayed</td><td>Immediately implemented and active</td></tr>
<tr><td>Multi-State PT and LWF</td><td>High miss rate; manually tracked</td><td>All-state matrix; auto-filed per schedule</td></tr>
<tr><td>Seasonal Workforce Surges</td><td>Manual onboarding; compliance gaps common</td><td>Rapid compliant onboarding from Day 1</td></tr>
<tr><td>Digital Registers (7-year retention)</td><td>Often incomplete or paper-based</td><td>Digital archives; inspection-ready at all times</td></tr>

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
            <h2 class="section-title">Related Services for Service Sector Businesses</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers complementary services for service sector companies:</p>
<ul>
<li><strong><a href="/payroll-services">Payroll Services (Overview)</a></strong> - Hub page for all industry verticals and city-wise payroll services across India.</li>
<li><strong><a href="/payroll-services-for-the-hospitality-industry">Hospitality Payroll</a></strong> - Specialist payroll for hotels, resorts, and restaurant chains with service charge, tips, and multi-property compliance.</li>
<li><strong><a href="/payroll-processing-and-management-services">Payroll Processing and Management</a></strong> - Core payroll processing service covering all industries and workforce types.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - GST for hotels (5%/18% post 56th Council), restaurants, and service sector businesses.</li>
<li><strong><a href="/esic-registration">ESIC Registration</a></strong> - ESIC employer code registration, IP generation, and compliance for 10+ employee establishments.</li>
<li><strong><a href="/income-tax-return">Income Tax Return Filing</a></strong> - ITR for service sector employees with service charge income and contract workers.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Service Sector Payroll in India</h2>
            <div class="content-text">
                
                <p><strong>Code on Wages 2019 and Minimum Wages Act 1948:</strong> The Code on Wages 2019 (active November 2025) consolidates wage laws. State governments set minimum wages by skill category, revised at least biannually. The national floor wage is the absolute minimum. Paying below minimum wage is a cognizable offence with penalties including imprisonment. [Code on Wages 2019, Sections 6, 9, and 26; <a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour</a>]</p>
<p><strong>Contract Labour (CLRA) Act 1970:</strong> Any principal employer engaging 20+ contract workers must register under the Act. Where the contractor fails to pay minimum wages, PF, or ESI, the principal employer must step in. Service sector businesses are routinely the principal employer. [CLRA Act 1970, Section 21]</p>
<p><strong>Service Charge Distribution - DoCA Guidelines July 2022:</strong> Service charge by hotels and restaurants is voluntary. If collected, the entire amount must be distributed to employees. For payroll, distributed amounts are taxable salary income; TDS under Section 192 must be computed on aggregate salary including service charge share.</p>
<p><strong><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF Act 1952:</a></strong> Mandatory for 20+ employees. 12%+12% on Basic+DA. Most service sector workers covered from day one. Late deposit: 12% interest (Section 7Q) + damages 5-25% (Section 14B).</p>
<p><strong><a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act 1948:</a></strong> 10+ employees; gross <= Rs 21,000. Covers almost entire service sector workforce below supervisor level. 0.75%+3.25%. Form 5 by Nov 11 and May 11.</p>
<p><strong><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act 2025</a> (Effective April 2026):</strong> TDS on salary under Section 192. Service charge distributed to employees included in TDS base. Deposit by 7th. Form 24Q quarterly. Form 16 by June 15.</p>
<p><strong>Payment of Gratuity Act 1972:</strong> After 5 years (1 year for fixed-term post-2018). 15/26 x last drawn salary x years. High relevance for tenured housekeeping, kitchen, and security staff. Max exempt: Rs 20,00,000.</p>
<p><strong>Payment of Bonus Act 1965:</strong> 20+ employees. 8.33%-20% for employees earning up to Rs 21,000/month. Most service sector floor staff qualify. Payable within 8 months. [Sections 8, 11, 19]</p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Obligation</th><th>Deadline</th><th>Penalty</th></tr></thead><tbody>
<tr><td>Salary payment</td><td>7th of following month</td><td>Code on Wages violation; labour authority action</td></tr>
<tr><td>TDS deposit</td><td>7th of following month</td><td>Interest 1.5%/month; penalty up to TDS amount (ITA 2025)</td></tr>
<tr><td>EPF and ESI deposit</td><td>15th of following month</td><td>12% interest; damages 5-25% (Section 14B); prosecution</td></tr>
<tr><td>F&F salary dues</td><td>Within 2 working days of exit</td><td>New Wage Code violation; wage dispute; labour grievance</td></tr>
<tr><td>Minimum wages payment</td><td>Ongoing per state notification</td><td>Fine up to Rs 50,000; imprisonment up to 3 months (Code on Wages 2019, Section 26)</td></tr>
<tr><td>Form 24Q quarterly</td><td>31 Jul, 31 Oct, 31 Jan, 31 May</td><td>Rs 200/day penalty (ITA 2025)</td></tr>
<tr><td>Form 16</td><td>By June 15 annually</td><td>Rs 100/day penalty (ITA 2025)</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Service Sector Payroll</h2>
                    <p class="faq-expanded__lead">Answers about minimum wages, service charge distribution, F&F at scale, CLRA compliance, GST rates, and overtime for hotels, BPOs, retail, and logistics.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Service Sector Payroll'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How are minimum wages applicable to the service sector in India?</h3>
                        <div class="faq-expanded__a"><p>Minimum wages are set by state governments under Code on Wages 2019, with separate rates for unskilled, semi-skilled, skilled, and highly skilled workers by geographic zone. Rates are revised bi-annually (April and October). Paying below minimum wage is a criminal offence with fines up to Rs 1,00,000 and imprisonment up to 6 months for repeat offences. [Code on Wages 2019, Sections 6, 9, 26]</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How should hotels and restaurants handle service charge in payroll?</h3>
                        <div class="faq-expanded__a"><p>Service charge collected from customers must be distributed entirely to staff per DoCA July 2022 guidelines - establishments cannot retain any portion. The distributed amount is employee salary income and must be included in TDS computation under Section 192 of Income Tax Act 2025. Patron Accounting maintains a formal pooling and distribution register ensuring amounts are reflected in payslips and Form 16.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the F&F 2-working-day rule and why is it critical for service sector?</h3>
                        <div class="faq-expanded__a"><p>The New Wage Code (November 2025) mandates salary dues to be settled within 2 working days of exit. For BPOs (8-15% attrition), hotels (5-10%), and retail (3-8%), this means processing dozens of F&F settlements monthly - each requiring unpaid salary, leave encashment, gratuity, service charge dues, and TDS computation within 2 working days. Patron Accounting's standing template enables same-day computation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Are contract workers covered under PF and ESI?</h3>
                        <div class="faq-expanded__a"><p>Yes. Contract workers are covered under EPF (20+ employees) and ESI (10+ employees) counting both direct and contract workers. The contractor is primarily responsible, but the principal employer is jointly liable under CLRA Act 1970, Section 21 if the contractor defaults. Hotels, retail chains, and facility managers must verify contractor PF/ESI compliance monthly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the GST rate on hotel rooms and restaurants after September 2025?</h3>
                        <div class="faq-expanded__a"><p>Per 56th GST Council (effective September 22 2025): Hotel rooms up to Rs 7,500/night at 5% GST (no ITC); above Rs 7,500 at 18% (ITC available). Most standalone restaurants at 5% (no ITC). Restaurants in specified premises (hotel tariff above Rs 7,500) at 18% (with ITC). These affect service charge collection and billing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is overtime mandatory in the service sector and how is it computed?</h3>
                        <div class="faq-expanded__a"><p>Yes. Work beyond 9 hours/day or 48 hours/week attracts overtime at double the regular rate. For hotel, BPO, and logistics shifts, overtime must be computed on actual hourly rate (Basic+DA / 26 days / 8 hours) and included in gross wages for EPF, ESI, and minimum wage compliance. Patron Accounting's payroll system flags and accurately computes overtime for all service sector clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if a service sector employer pays below minimum wages?</h3>
                        <div class="faq-expanded__a"><p>Underpayment under Code on Wages 2019 is a criminal offence: fine up to Rs 50,000 for first offence; imprisonment up to 3 months; for repeat offences - fine up to Rs 1,00,000 and imprisonment up to 6 months. Employer also liable for arrears with interest. For high-headcount service businesses, even small per-employee underpayment creates significant aggregate liability. [Section 26]</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Service sector company ka payroll kaise manage karein?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting se outsource karna simple hai. Aapko employee data, shift attendance, service charge collections, aur salary structure dena hota hai. Hum complete setup karte hain - minimum wage mapping, EPFO/ESIC registration, monthly payslip, TDS, PF/ESI deposits, service charge TDS, Form 24Q, aur Form 16 tak sab handle karte hain. Fee Rs 149 per employee se shuru hoti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Minimum wages?</strong> A: State-specific, skill-specific, revised twice yearly. Criminal offence to pay below minimum. [Code on Wages 2019]</p>
<p><strong>Q: EPF?</strong> A: 12%+12% of Basic+DA. Mandatory 20+ employees. Deposit by 15th. Covers most service sector workers.</p>
<p><strong>Q: Service charge?</strong> A: Must be fully distributed to staff if collected. Distributed amount is salary income; include in TDS base. [DoCA 2022]</p>
<p><strong>Q: Contract workers?</strong> A: Principal employer jointly liable for PF and ESI if contractor defaults. [CLRA 1970, Section 21]</p>
<p><strong>Q: Hotel GST (Sep 2025)?</strong> A: Rooms up to Rs 7,500/night at 5% (no ITC); above Rs 7,500 at 18% (with ITC). [56th GST Council]</p>
<p><strong>Q: F&F?</strong> A: Salary dues within 2 working days of exit. [New Wage Code, November 2025]</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Minimum Wage Compliance Is Not Optional - Get a Free Audit</h2>
            <div class="content-text">
                
                <p>A missed minimum wage revision, an undisclosed service charge income, a delayed F&F payment, or an unaudited contractor's PF default can trigger criminal proceedings, regulatory closure, and reputational damage that no service sector business can afford.</p>
<p><strong>Get a Free Minimum Wage Compliance Audit:</strong> We review your current payroll for skill-category mapping, state minimum wage compliance, service charge TDS, and CLRA coverage - free, no obligation. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20service%20sector%20payroll%20audit.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">CA-Managed Payroll for India's Service Sector</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">India's service sector runs on the effort of millions of hourly workers, shift employees, contract staff, and seasonal hires - people who depend on accurate, timely pay and whose employers face the strictest legal standards in the country.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting brings CA-level rigour to service sector payroll: minimum wage compliance across all states and skill categories, service charge distribution as a documented payroll process, F&F settled in 1 working day, CLRA contractor compliance monitored, and every Labour Code and Income Tax Act 2025 change implemented before it becomes your liability.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">200+ service sector companies across India trust us. Starting from Rs 149 per employee per month. Contact us for a free payroll health check.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20service%20sector%20payroll.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Service%20Sector%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Service%20Sector%20Payroll%20services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Service Sector Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Specialist payroll for hotels, BPOs, retail, and logistics with local compliance expertise. Click your city for state-specific details.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/payroll-services-for-service-sector-businesses/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/payroll-services-for-service-sector-businesses/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/payroll-services-for-service-sector-businesses/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/payroll-services-for-service-sector-businesses/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for Service Sector Payroll</div>
    <div class="pa-cross-grid">
        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
        <a href="/payroll-services-for-the-hospitality-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Hospitality Payroll</div><div class="pa-card-sub">India</div></div></a>
        <a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">India</div></div></a>
        <a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 3 months. Content aligned with Labour Codes (November 2025), Income Tax Act 2025 (April 2026), 56th GST Council (September 2025), EPF Act 1952, ESI Act 1948, Code on Wages 2019, CLRA Act 1970, and DoCA Service Charge Guidelines July 2022. Next review: June 2026.</p>
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
