
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
    <title>Security Agency Payroll Services - ESIC, PF & Wage Register</title>
    <meta name="description" content="Payroll for security agencies in India: PSARA, CLRA, guard min wages, EPF, ESI, overtime, Labour Code 2025. From Rs.3,999/month.">
    <link rel="canonical" href="/payroll-services-for-security-agencies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Security Agency Payroll Services - ESIC, PF & Wage Register">
    <meta property="og:description" content="Payroll for security agencies in India: PSARA, CLRA, guard min wages, EPF, ESI, overtime, Labour Code 2025. From Rs.3,999/month.">
    <meta property="og:url" content="/payroll-services-for-security-agencies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Security Agency Payroll Services - ESIC, PF & Wage Register">
    <meta name="twitter:description" content="Payroll for security agencies in India: PSARA, CLRA, guard min wages, EPF, ESI, overtime, Labour Code 2025. From Rs.3,999/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Security Agency Payroll Services in India",
          "description": "Payroll for security agencies in India: PSARA, CLRA, guard min wages, EPF, ESI, overtime, Labour Code 2025. From Rs.3,999/month.",
          "url": "https://www.patronaccounting.com/payroll-services-for-security-agencies",
          "serviceType": "Security Agency Payroll Services in India",
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
              "name": "Security Agency Payroll Services in India",
              "item": "https://www.patronaccounting.com/payroll-services-for-security-agencies"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What payroll compliance obligations does a private security agency have in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A PSARA-licensed security agency must comply with state-specific minimum wages for each guard category revised every April and October under Code on Wages 2019; EPF contributions (employer 12% + employee 12%) deposited by the 15th each month; ESI contributions (employer 3.25% + employee 0.75%) for workers earning up to Rs.21,000/month; overtime at twice the ordinary rate for hours beyond 8/day under OSH Code 2020; Payment of Bonus Act compliance (minimum 8.33%); CLRA contractor licence and register maintenance; and annual bonus and gratuity provisions."
              }
            },
            {
              "@type": "Question",
              "name": "Do security agencies need to pay overtime for 12-hour shifts?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under OSH Code 2020 (active November 2025), standard working hours are 8 hours/day and 48 hours/week. Any work beyond these limits is overtime at twice the ordinary rate. Guards on 12-hour shifts work 4 hours of overtime per shift at double rate. The agency must maintain Form B Register of Overtime under CLRA Central Rules 1971. Failure to pay correct overtime attracts penalties and back-pay demands."
              }
            },
            {
              "@type": "Question",
              "name": "What is the CLRA Act and how does it apply to security agencies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CLRA 1970 governs deployment of contract labour through a tripartite framework. The security agency must obtain Form IV CLRA contractor licence for each state; issue Form XII employment cards within 3 days; issue Form XIX wage slips before disbursement; maintain Form A wage register and Form B overtime register digitally. The principal employer client must register under Form I if engaging 20+ contract guards."
              }
            },
            {
              "@type": "Question",
              "name": "How does the 50% basic wage rule affect security agency payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Code on Wages 2019 requires basic pay plus DA to be at least 50% of total CTC. Security agencies that structured guard CTC with low basic and high allowances to minimise EPF must restructure. The excess allowances get added to the wage base for EPF, ESI, gratuity, and overtime. For agencies with hundreds of guards, the EPF cost increase is material and needs modelling."
              }
            },
            {
              "@type": "Question",
              "name": "What is the gratuity obligation for fixed-term security guards?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the Industrial Relations Code 2020 (active November 2025), fixed-term employees are eligible for gratuity after completing just 1 year of service - reduced from the previous 5-year threshold. Gratuity is calculated at 15 days salary per year of service, capped at Rs.20 lakh. Agencies must provision gratuity monthly for all guards approaching the 1-year mark."
              }
            },
            {
              "@type": "Question",
              "name": "Does GST apply to security agency services?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, security services are taxable at 18% GST under HSN 9985. If the agency is a body corporate (Pvt Ltd, LLP), it charges 18% under forward charge. If the agency is not a body corporate and the client is a registered body corporate, RCM applies under GST Notification 13/2017 - the client pays GST directly. Incorrect invoicing leads to GST demand notices."
              }
            },
            {
              "@type": "Question",
              "name": "What documents are needed for a PSARA compliance audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Key documents include: valid PSARA licence for each state; police verification certificates; training MoU; Form IV CLRA licence; Form XII employment cards; digital Form A and Form B registers; Form XIX wage slips; EPF ECR and ESI challan receipts; minimum wage compliance analysis by state and category; bonus register; and gratuity provision statements for fixed-term guards."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for security agency payroll non-compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Penalties come from multiple regulators simultaneously. Code on Wages: up to Rs.1,00,000 for repeat offences plus back-payment with interest. EPF defaults: 12% annual interest plus damages up to 25%; imprisonment up to 3 years for wilful non-payment. CLRA violations: contractor licence cancellation. PSARA violations: licence suspension or cancellation and criminal prosecution. Quick Answers Minimum wages for security guards? State-specific and category-specific; revised April and October; basic + VDA must be 50% of CTC; national floor wage from Code on Wages 2019. EPF for guards? Yes - 12%+12% of basic+DA; mandatory for agencies with 20+ employees; deposit by 15th. Overtime for 12-hour shifts? Yes - hours beyond 8/day = overtime at twice ordinary rate; Form B register mandatory under CLRA Rules. CLRA Form IV contractor licence? Mandatory for security agency deploying contract guards; renewed annually by December 31; state-specific. Gratuity for fixed-term guards? Yes - eligible after 1 year under IR Code 2020 (from November 2025); 15 days salary per year. GST on security services? 18% GST; forward charge if agency is body corporate; RCM if non-body corporate agency and registered body corporate client."
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
                        Payroll Services for Security Agencies in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>State-wise Minimum Wage Compliance:</span> Security guard categories separately scheduled in every state; rates revised April and October; non-payment attracts penalties under Code on Wages 2019</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>PSARA Audit-Ready Payroll:</span> PSARA Controlling Authorities inspect payroll records; guard EPF/ESI and minimum wage evidence maintained on-demand</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CLRA Double-Register Compliance:</span> Agency maintains Form IV contractor licence records; principal employer clients get Form I registration evidence to avoid deemed employment risk</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Labour Code 2025 Restructuring:</span> 50% basic rule restructures guard CTC; 12-hour shift overtime mandatory at double rate; digital registers replace paper; gratuity after 1 year for fixed-term guards</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses including PSARA-licensed security agencies across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Security%20Agency%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Security%20Agency%20Payroll%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Security%20Agency%20Payroll%20Services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Security Agency Payroll',
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting transformed our guard payroll operations. We had 300 guards across 3 states with minimum wage compliance issues. Their CA team restructured everything in 3 weeks - Form B registers, overtime computation, and EPF reconciliation all sorted.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Shield Security Pvt Ltd</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were struggling with CLRA register maintenance for our 150-guard workforce. Patron's team set up Form XII, Form XIX, and Form B registers digitally within 2 weeks. Our PSARA audit went smoothly for the first time ever.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Mehta</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Manager, Sentinel Guard Services</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The Labour Code 2025 changes hit us hard - 50% basic rule meant our EPF costs for 500 guards were going to spike. Patron modelled the impact, proposed a revised CTC structure, and even helped us renegotiate client contracts to absorb the increase.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Singh</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD, Apex Security Solutions LLP</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a principal employer engaging 80 contract guards, we needed CLRA Form I registration support and ongoing proof that our security contractor was compliant. Patron handles both sides seamlessly - our exposure is now fully documented.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Kapoor</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Facility Director, InfoPark Technologies</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Outstanding service for our multi-state security operation. Patron handles payroll for our guards in Maharashtra, Karnataka, and Delhi NCR with state-wise minimum wage compliance, overtime computation, and EPF/ESI filing. Highly recommended.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Rao</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, Guardian Force India Pvt Ltd</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
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
                    <p>Expert payroll management for PSARA-licensed security agencies - CLRA registers, minimum wage compliance, EPF/ESI, and Labour Code restructuring.</p>
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
            <a class="toc-btn" href="#who-section">PSARA Compliance</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">Compare</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll Compliance - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Security Agency Payroll Services at a Glance</strong></p>
                    <p>Security agency payroll in India operates under a uniquely layered compliance architecture. A PSARA-licensed agency must simultaneously satisfy PSARA 2005 (licensing), CLRA 1970 (contractor licence and registers), Code on Wages 2019 (minimum wages and 50% basic rule), Social Security Code 2020 (EPF and ESI), OSH Code 2020 (overtime at double rate), IR Code 2020 (fixed-term guard gratuity after 1 year), and the Payment of Bonus Act. Patron Accounting manages this entire compliance landscape from Rs.3,999/month.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Requirement / Rate</th></tr></thead>
                    <tbody>
                        <tr><td>Minimum Wages</td><td>State-specific for security guard categories; revised April and October; national floor wage under Code on Wages 2019</td></tr>
                        <tr><td>EPF</td><td>Employer 12% + Employee 12% of basic + DA; mandatory for agencies with 20+ employees; deposit by 15th each month</td></tr>
                        <tr><td>ESI</td><td>Employer 3.25% + Employee 0.75%; workers earning up to Rs.21,000/month; mandatory 10+ employees</td></tr>
                        <tr><td>Overtime</td><td>OSH Code 2020: beyond 8 hours/day or 48 hours/week = overtime at twice the ordinary rate; Form B register mandatory</td></tr>
                        <tr><td>Bonus</td><td>Payment of Bonus Act: minimum 8.33% of annual wages (max 20%); workers earning up to Rs.21,000/month</td></tr>
                        <tr><td>Gratuity</td><td>IR Code 2020 (Nov 2025): fixed-term guards eligible after 1 year; 15 days salary per year; capped at Rs.20 lakh</td></tr>
                        <tr><td>GST</td><td>Security agency (body corporate): 18% GST under forward charge; non-body corporate with registered client: RCM applies</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>The November 2025 Labour Codes have materially raised the compliance stakes for security agencies. Guards historically placed on low-basic, high-allowance CTC structures to minimise EPF contributions must now be restructured to satisfy the 50% basic pay rule under the <a href="https://labour.gov.in/labourcodes" target="_blank" rel="noopener">Code on Wages 2019</a>. The resulting EPF base increase is significant when multiplied across thousands of guards. Fixed-term deployment contracts - the industry's preferred model for site-specific guard postings - now trigger gratuity eligibility after just one year under the Industrial Relations Code 2020.</p>
                <p>Paper muster rolls and wage registers are no longer accepted under OSH Code 2020; digital records are mandatory and subject to remote web-based inspection. The <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act 2025</a>, effective April 1, 2026, revises Form 24Q and Form 16 formats. Patron Accounting's CA team manages this entire compliance landscape, so security agency owners can focus on winning contracts and deploying guards - not navigating multi-statute payroll filings.</p>
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
                <h2 class="section-title">What is Security Agency Payroll?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Security agency payroll is the end-to-end process of computing and disbursing wages for guards, head guards, security supervisors, armed personnel, and office staff employed by a PSARA-licensed private security agency - while simultaneously meeting obligations under <a href="https://www.mha.gov.in" target="_blank" rel="noopener">PSARA 2005</a>, CLRA 1970, minimum wage schedules, EPF and ESI statutes, overtime rules, bonus law, and all four Labour Codes active from November 2025.</p>
                    <p>Security agency payroll differs fundamentally from generic payroll in four structural ways. First, the workforce is multi-tier and site-scattered: guards are deployed at dozens or hundreds of client locations simultaneously, each with different shift structures, minimum wage schedules, and principal employer relationships. Second, minimum wages are category-specific and biannually revised for Security Guard, Head Guard, Security Supervisor, ASO, SO, and CSO - all at different rates in each state.</p>
                    <p>Third, overtime is endemic: the industry-standard 12-hour shift means every guard working that shift owes overtime at double the ordinary rate per OSH Code 2020 - a liability routinely miscalculated. Fourth, the <a href="https://clc.gov.in" target="_blank" rel="noopener">CLRA</a> tripartite structure creates dual compliance obligations for both the security agency and the principal employer client.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Security Agency Payroll:</strong></p>
                    <p><strong>PSARA</strong> - Private Security Agencies Regulation Act 2005; mandatory licensing statute for all private security agencies in India; licence valid 5 years; state-specific</p>
                    <p><strong>CLRA</strong> - Contract Labour (Regulation and Abolition) Act 1970; governs the tripartite relationship between agency (contractor), client (principal employer), and guard (contract worker)</p>
                    <p><strong>Form IV</strong> - CLRA contractor licence application required for each state where guards are deployed; renewed annually by December 31</p>
                    <p><strong>Form XII</strong> - CLRA employment card issued to each guard within 3 working days of engagement</p>
                    <p><strong>Form B</strong> - Register of Overtime under CLRA Central Rules 1971; mandatory for all guards on shifts exceeding 8 hours</p>
                    <p><strong>VDA</strong> - Variable Dearness Allowance; revised biannually (April and October) based on Consumer Price Index (CPI)</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Shield / Security -->
                            <path d="M100 20L50 45V95C50 130 100 160 100 160C100 160 150 130 150 95V45L100 20Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Guard silhouette -->
                            <circle cx="100" cy="65" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <path d="M75 110C75 93 87 80 100 80C113 80 125 93 125 110" fill="#D4DCE8" stroke="#14365F" stroke-width="1"/>
                            <!-- Payroll document -->
                            <rect x="130" y="30" width="50" height="40" rx="4" fill="#fff" stroke="#14365F" stroke-width="1.2"/>
                            <line x1="138" y1="42" x2="172" y2="42" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="138" y1="50" x2="165" y2="50" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.3"/>
                            <line x1="138" y1="58" x2="160" y2="58" stroke="#14365F" stroke-width="1" stroke-linecap="round" opacity="0.3"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M146 25l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- PSARA tag -->
                            <rect x="25" y="120" width="50" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="50" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PSARA</text>
                            <!-- CLRA tag -->
                            <rect x="125" y="120" width="45" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="147" y="132.5" font-size="8" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CLRA</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Security Agency Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>PSARA Compliant</span>
                        <strong>Guard Payroll Management</strong>
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
            <h2 class="section-title">PSARA Compliance and Its Payroll Implications</h2>
            <div class="content-text">
                
                <p>The <a href="https://www.mha.gov.in" target="_blank" rel="noopener">Private Security Agencies Regulation Act 2005 (PSARA)</a> is the primary legislation governing every private security agency in India. While PSARA is primarily a licensing statute, its compliance obligations create direct and material payroll consequences.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>PSARA Provision</th><th>Payroll Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Section 4 - Mandatory Licence</td><td>Operating without a PSARA licence is a criminal offence; PSARA Controlling Authorities inspect payroll, EPF/ESI evidence, and minimum wage compliance as part of licence renewal audits</td></tr>
                        <tr><td>State-specific Licence</td><td>Each state requires a separate PSARA licence; agencies operating in multiple states must maintain state-specific payroll registers showing minimum wages per that state's schedule</td></tr>
                        <tr><td>Police Verification</td><td>All guards must have police verification certificates; onboarding a guard to payroll without police clearance creates PSARA non-compliance</td></tr>
                        <tr><td>Training and Certification</td><td>Guards must complete PSARA-approved training; training cost is a payroll-adjacent obligation; some states treat pre-deployment training allowance as part of wages</td></tr>
                        <tr><td>Uniform and Equipment</td><td>Uniform cost deductions from guard wages are regulated; any deduction must comply with Code on Wages 2019 and must not reduce net pay below minimum wage</td></tr>
                    </tbody>
                </table>
                </div>
                <p>Additionally, the <a href="https://clc.gov.in" target="_blank" rel="noopener">CLRA 1970</a> creates a tripartite legal structure. Both the security agency (contractor) and the principal employer client carry distinct statutory obligations - and the agency's payroll records serve as primary evidence in any CLRA inspection.</p>
                <ul>
                    <li>PSARA-licensed security agency owners and directors deploying guards across states</li>
                    <li>HR managers of security companies managing multi-site guard rosters</li>
                    <li>Facility managers handling contract guard payroll under CLRA</li>
                    <li>Principal employers engaging 20+ contract guards (Form I registration required)</li>
                    <li>Armed and unarmed guard deployment firms requiring multi-statute compliance</li>
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
            <h2 class="section-title">Our Security Agency Payroll Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Guard Payroll Processing</td><td>Gross-to-net wage computation for all guard categories and ranks; state-wise minimum wage compliance check; shift-wise overtime calculation; Form XIX payslip generation; bank transfer disbursement files</td></tr>
                        <tr><td>Minimum Wage Compliance Management</td><td>Biannual (April and October) minimum wage update for each state and guard category; CTC audit against revised schedules; automated revision alerts; CA confirmation of compliance</td></tr>
                        <tr><td>Overtime Computation and Register</td><td>Calculation of overtime for 12-hour shift guards at twice the ordinary rate per OSH Code 2020; Form B Register of Overtime maintenance under CLRA Central Rules; overtime cost reporting by site</td></tr>
                        <tr><td>EPF and ESI Compliance</td><td>Registration (EPFO + ESIC), monthly ECR filing, challan deposit by 15th, annual returns, UAN management for every guard, ESI claim support, Form 10C/10D</td></tr>
                        <tr><td>CLRA Compliance Registers</td><td>Form XII (employment cards), Form XIX (wage slips), Form A (wage register), Form B (overtime register), Form VIII (service certificates); contractor licence renewal calendar</td></tr>
                        <tr><td>Labour Code 2025 Restructuring</td><td>CTC audit for 50% basic rule compliance across all guard grades; revised CTC structures; digital payroll register setup; F&F settlement within 2 working days</td></tr>
                        <tr><td>Bonus Calculation</td><td>Annual bonus computation per Payment of Bonus Act (8.33-20% of wages); monthly accrual provision; payout calendar within 8 months of FY end; bonus register</td></tr>
                        <tr><td>Gratuity Provision Management</td><td>Monthly gratuity accrual for all guards; tracking of 1-year threshold for fixed-term guards under IR Code 2020; gratuity calculation and F&F settlement</td></tr>
                        <tr><td>GST on Security Services</td><td>Correct GST classification (forward charge vs RCM); invoice format review; ITC eligibility for principal employer clients; GST return reconciliation support</td></tr>
                        <tr><td>TDS and Annual Compliance</td><td>TDS under Section 192 (IT Act 2025); Form 24Q quarterly; Form 16 by June 15; annual EPF and ESI returns; state PT returns</td></tr>

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
            <h2 class="section-title">Security Agency Payroll Process - 8 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting follows a structured 8-step payroll cycle designed specifically for PSARA-licensed security agencies - covering guard classification, state-wise minimum wages, overtime computation, statutory filings, and CLRA register maintenance.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Guard Classification and Category Register</h3>
        <p class="step-description">Map each guard to their PSARA-defined role (Security Guard, Head Guard, Supervisor, ASO, SO, CSO). Verify police verification certificate status. Confirm PSARA licence validity for the state of deployment. Issue Form XII CLRA employment card within 3 working days.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PSARA role mapping</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XII issued in 3 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Police verification linked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="45" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <path d="M42 35l3 3 6-6" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                    <line x1="65" y1="28" x2="95" y2="28" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="65" y1="38" x2="90" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="65" y1="48" x2="85" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <rect x="20" y="58" width="25" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                    <text x="32" y="66" font-size="6" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial">PSARA</text>
                </svg>
            </div>
            <span class="illustration-label">Guard Classified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">State-Wise Minimum Wage Verification</h3>
        <p class="step-description">Before each payroll cycle, verify the current minimum wage for each guard's category in each state of deployment. Apply the higher of national floor wage and state-specific schedule. Ensure basic + VDA constitutes at least 50% of total CTC per Code on Wages 2019.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> State-wise rate check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 50% basic rule verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="15" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="10" y1="35" x2="110" y2="35" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="10" y1="55" x2="110" y2="55" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <text x="20" y="28" font-size="7" fill="#14365F" font-weight="700" font-family="Arial">State</text>
                    <text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" font-family="Arial">Category</text>
                    <text x="95" y="28" font-size="7" fill="#F5A623" font-weight="700" font-family="Arial">Rate</text>
                    <circle cx="100" cy="12" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                    <path d="M96 12l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Wages Verified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Shift and Attendance Capture</h3>
        <p class="step-description">Collect site-wise attendance data from client deployment registers, biometric systems, or mobile attendance apps. Record actual shift hours per guard. Flag guards working beyond 8 hours/day or 48 hours/week for overtime calculation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Digital attendance capture</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> OT hours flagged</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="10" width="70" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="25" y="10" width="70" height="18" rx="8" fill="#14365F"/>
                    <text x="60" y="23" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SHIFT LOG</text>
                    <line x1="35" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="35" y1="52" x2="85" y2="52" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="35" y1="64" x2="85" y2="64" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <rect x="70" y="55" width="20" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                    <text x="80" y="64" font-size="6" fill="#C05E10" font-weight="700" text-anchor="middle" font-family="Arial">12hr</text>
                </svg>
            </div>
            <span class="illustration-label">Shifts Captured</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Overtime Calculation</h3>
        <p class="step-description">For each guard working 12-hour shifts, compute overtime hours (shift hours minus 8 ordinary hours). Apply twice the ordinary hourly rate to overtime hours. Update Form B (Register of Overtime) for each guard at each site.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Double rate computed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form B updated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="45" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="60" y1="20" x2="60" y2="45" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="60" y1="45" x2="80" y2="55" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="60" cy="45" r="3" fill="#14365F"/>
                    <text x="60" y="92" font-size="7" fill="#C05E10" font-weight="700" text-anchor="middle" font-family="Arial">2x OVERTIME</text>
                </svg>
            </div>
            <span class="illustration-label">OT Computed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Gross-to-Net Payroll Computation</h3>
        <p class="step-description">Compute gross wages (Basic + VDA + HRA + Overtime + Allowances). Apply deductions: EPF 12% employee, ESI 0.75%, TDS (where applicable), Professional Tax. Generate Form XIX wage slips at least 1 day before disbursement.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gross-to-net computed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIX generated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="25" y1="30" x2="95" y2="30" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="25" y1="45" x2="80" y2="45" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <line x1="25" y1="55" x2="70" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <line x1="25" y1="65" x2="95" y2="65" stroke="#14365F" stroke-width="1" opacity="0.15"/>
                    <rect x="70" y="60" width="25" height="12" rx="3" fill="#E8F5E9"/>
                    <text x="82" y="69" font-size="6" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial">NET</text>
                </svg>
            </div>
            <span class="illustration-label">Payslip Ready</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Statutory Contribution Computation</h3>
        <p class="step-description">Calculate employer EPF (12%) and ESI (3.25%) on each guard's wage base. Prepare EPF ECR for all guards. Compute monthly bonus accrual (8.33%/12) and gratuity provision (15/26 of monthly Basic+DA). Update site-wise cost reports.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPF/ESI computed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bonus and gratuity accrued</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="20" width="40" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <text x="30" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPF</text>
                    <text x="30" y="55" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">12%</text>
                    <rect x="70" y="20" width="40" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <text x="90" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI</text>
                    <text x="90" y="55" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">3.25%</text>
                    <path d="M55 48 L60 43 L65 48" stroke="#25D366" stroke-width="2" fill="none" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Contributions Filed</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Disbursement</h3>
        <p class="step-description">Pay guard wages by the 7th of each month per Code on Wages 2019. Deposit EPF and ESI by the 15th. Deposit TDS by the 7th. Maintain site-wise disbursement records as evidence for CLRA principal employer audits.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Wages paid by 7th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPF/ESI by 15th</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="20" y="15" width="80" height="15" rx="6" fill="#14365F"/>
                    <text x="60" y="26" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">BANK TRANSFER</text>
                    <line x1="30" y1="40" x2="90" y2="40" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="30" y1="50" x2="75" y2="50" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <circle cx="85" cy="75" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                    <path d="M80 75l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Wages Disbursed</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Statutory Filings and Records</h3>
        <p class="step-description">File EPF ECR monthly. ESI returns quarterly. Form 24Q quarterly under IT Act 2025. Issue Form 16 by June 15. Maintain Form A, Form B, Form XII, Form XIX digitally as required by OSH Code 2020. File annual bonus register by November 30.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All returns filed on time</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Digital records maintained</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="10" width="35" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                    <rect x="42" y="15" width="35" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                    <rect x="74" y="10" width="35" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                    <text x="27" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ECR</text>
                    <text x="59" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">24Q</text>
                    <text x="91" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI</text>
                    <circle cx="60" cy="78" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M54 78l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Filings Complete</span>
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
            <h2 class="section-title">Documents Required for Security Agency Payroll Compliance</h2>
            <div class="content-text">
                
                <p>A PSARA-licensed security agency must maintain the following documents for payroll compliance and audit readiness:</p>
                <ul>
                    <li>Valid PSARA licence for each state of operation</li>
                    <li>Police verification certificates for all deployed guards</li>
                    <li>MoU with government-authorised training institute</li>
                    <li>Form IV CLRA contractor licence for each state (renewed annually)</li>
                    <li>Form XII CLRA employment cards for all active guards</li>
                    <li>Digital Form A (wage register) - past 12 months</li>
                    <li>Digital Form B (overtime register) for all guards on 12-hour shifts</li>
                    <li>Form XIX wage slips - past 3 months minimum</li>
                    <li>EPF ECR submissions and challan deposit receipts - past 12 months</li>
                    <li>ESI challan deposit receipts - past 12 months</li>
                    <li>Minimum wage compliance analysis per state and guard category</li>
                    <li>Payment of Bonus Act register</li>
                    <li>Gratuity provision statements for fixed-term guards completing 1 year</li>
                    <li>State-specific registers required under applicable state PSARA rules</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll Challenges and Our Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Overtime Underestimation</td><td>Agencies treat 12-hour shifts as 'ordinary' and pay flat rate. Labour inspectors detect this as overtime non-payment, triggering back-pay demands with interest under OSH Code 2020.</td><td>We compute overtime for every guard on every 12-hour shift. Form B maintained digitally for instant PSARA or labour authority inspection. Cost impact modelled on client billing.</td></tr>
                        <tr><td>State Minimum Wage Revision Lag</td><td>Revised wages notified every April and October across multiple states. Delayed implementation means guards are underpaid - a Code on Wages 2019 violation with penalties up to Rs.1,00,000.</td><td>State-wise minimum wage calendar maintained for all guard categories. Revised rates implemented within 7 days of notification. CA-confirmed compliance certificate issued each April and October.</td></tr>
                        <tr><td>CLRA Register Gaps</td><td>Agencies maintain Form IV but neglect Form XII (employment cards), Form XIX (wage slips), and Form B (overtime register). These gaps are critical in CLRA inspections.</td><td>Payroll system generates Form XII for every new guard, Form XIX for every cycle, Form B for every OT-eligible guard - all digitally per CLRA Central Rules 1971.</td></tr>
                        <tr><td>Fixed-Term Gratuity Post Nov 2025</td><td>IR Code 2020 makes fixed-term guards eligible for gratuity after 1 year (reduced from 5 years). Few agencies have updated provisions, creating unexpected liabilities.</td><td>Every guard's joining date tracked; 1-year anniversary flagged; monthly gratuity accrual built into payroll model; F&F includes gratuity for all qualifying guards.</td></tr>
                        <tr><td>50% Basic Rule Restructuring</td><td>Code on Wages 2019 eliminates low-basic, high-allowance CTC structures. EPF base increase for agencies with 1,000+ guards is material and threatens contract margins.</td><td>Full CTC audit across guard workforce; EPF cost impact modelled; revised structures proposed to meet 50% rule with minimal net cost increase; client contract renegotiation support.</td></tr>
                        <tr><td>GST RCM vs Forward Charge</td><td>Agencies incorrectly invoice all clients under forward charge. Where agency is not body corporate and client is registered body corporate, RCM applies - leading to GST demand notices.</td><td>Legal constitution reviewed; each client invoice classified correctly as forward charge or RCM. Agencies advised on body corporate incorporation where scale warrants it.</td></tr>

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
            <h2 class="section-title">Security Agency Payroll Service Fees and Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter Plan (Up to 50 guards)</td><td>Rs.3,999/month - Payroll processing, Form XIX wage slips, EPF/ESI filing, basic minimum wage compliance check</td></tr>
                        <tr><td>Growth Plan (51-200 guards)</td><td>Rs.8,999/month - All Starter + overtime computation (Form B), CLRA Form XII register, state min wage update service, bonus provision</td></tr>
                        <tr><td>Operations Plan (201-1000 guards)</td><td>Rs.19,999/month - All Growth + multi-state payroll, gratuity provision tracking, CTC restructuring, PSARA compliance register, Form 16</td></tr>
                        <tr><td>Enterprise Plan (1000+ guards)</td><td>Custom quote - Dedicated CA team, PSARA licence audit support, multi-state CLRA compliance, client billing reconciliation, GST review</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>CLRA Form B Overtime Register Add-on (Starter plan)</td><td>Rs.2,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Security Agency Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Security%20Agency%20Payroll.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll Onboarding Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Week 1 - Consultation and Audit</td><td>Days 1-7: PSARA licence review; guard roster and deployment state mapping; CTC audit for 50% basic rule; shift structure review for overtime exposure</td></tr>
                        <tr><td>Week 2 - System Setup</td><td>Days 8-14: Guard data migration; Form XII generation for all active guards; minimum wage schedule setup per state and category; overtime rule configuration</td></tr>
                        <tr><td>Week 3 - Parallel Test Run</td><td>Days 15-21: Parallel test payroll; minimum wage compliance check; overtime calculation trial; EPF/ESI YTD reconciliation; CLRA register review</td></tr>
                        <tr><td>Week 4 - Go-Live</td><td>Days 22-28: First live payroll run; Form XIX wage slips; EPF ECR; ESI challan; Form B overtime register; CLRA registers generated</td></tr>
                        <tr><td>Month 2+ Ongoing</td><td>Ongoing: Monthly payroll cycle; April and October min wage updates; quarterly Form 24Q; annual bonus and gratuity provision reporting; PSARA audit support</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast-Track Available:</strong> For agencies with fewer than 50 guards and single-state operations, we can complete onboarding in 14 days. Multi-state agencies with 500+ guards may require 5-6 weeks for complete data migration and parallel testing.</p>

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
            <h2 class="section-title">Why Outsource Security Agency Payroll to Patron Accounting</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Minimum Wage Compliance - Always Current</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Every April and October revision implemented within 7 days; Code on Wages 2019 non-payment risk eliminated; CA-certified compliance letter provided</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Overtime Correctly Computed</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">12-hour shift excess hours paid at double rate per OSH Code 2020; Form B register maintained; labour inspection exposure eliminated</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">CLRA Registers Audit-Ready</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Form XII, Form XIX, Form B, Form VIII maintained digitally; ready for PSARA Controlling Authority and principal employer CLRA audits</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Labour Code 2025 Fully Implemented</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">50% basic rule; fixed-term gratuity after 1 year; digital registers; F&F within 2 working days - all implemented from Day 1</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Guard Churn Managed</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">High-attrition workforce onboarded, separated, and F&F settled within statutory deadlines; UAN management for migrant guards</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Audit Confidence</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">PSARA, EPFO, ESIC, and labour authority inspections supported with complete digital documentation; CA represents agency in proceedings</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Security Agencies Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including PSARA-licensed security agencies trust Patron Accounting for payroll and statutory compliance management. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong> from 500+ verified reviews, and <strong>50,000+ payroll documents filed annually</strong>, our CA and CS team delivers audit-ready payroll infrastructure for security agencies across India.</p>
                <p>Our offices in Gurugram, Mumbai, Pune, and Bengaluru provide multi-state coverage. Expert payroll advice is available within 30 minutes of inquiry. ISO Certified processes and registered CA firm credentials ensure professional-grade compliance management.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Outsourcing Security Agency Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House / DIY</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Overtime Compliance</td><td>Flat rate for 12-hour shifts; double-rate requirement missed; back-pay risk</td><td>Double rate computed for every excess hour; Form B maintained; zero back-pay risk</td></tr>
                        <tr><td>Min Wage Updates</td><td>Manual tracking; revisions missed; guards underpaid; Code on Wages violation</td><td>Biannual update service; CA-confirmed compliance letter every April and October</td></tr>
                        <tr><td>CLRA Registers</td><td>Form XII/XIX/B often missing; CLRA inspection gaps</td><td>Complete CLRA register set maintained digitally; PSARA audit-ready</td></tr>
                        <tr><td>Labour Code Restructuring</td><td>50% basic rule unimplemented; EPF base understated; EPFO demand risk</td><td>Full CTC audit and restructuring; EPF base corrected; no retrospective demands</td></tr>
                        <tr><td>Gratuity - Fixed-Term</td><td>1-year threshold not tracked; unexpected liability on guard exit</td><td>Monthly accrual; 1-year flag; F&F settlement includes gratuity</td></tr>
                        <tr><td>Cost</td><td>HR staff salary Rs.4-8 lakh/year + errors + penalties + inspection costs</td><td>From Rs.3,999/month all-inclusive; penalties and labour disputes avoided</td></tr>

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
            <h2 class="section-title">Related Services for Security Agencies</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a comprehensive suite of services that complement security agency payroll management:</p>
                <ul>
                    <li><a href="/tds-return">TDS Return Filing</a> - Form 24Q quarterly for officer and supervisor salaries above TDS threshold; Form 16 annual; Section 192 IT Act 2025 compliance</li>
                    <li><a href="/gst-registration">GST Registration and Returns</a> - GST on security services (18% forward charge or RCM); monthly/quarterly returns; e-invoicing for large agencies</li>
                    <li><a href="/payroll-services">Payroll Services (All Industries)</a> - Full-spectrum payroll outsourcing for 10,000+ clients across India</li>
                    <li><a href="/esic-calculation-and-compliance-services">ESIC Calculation and Compliance</a> - Complete ESI compliance for agencies meeting employee thresholds</li>
                    <li><a href="/pf-return">PF Return Filing</a> - Monthly EPF ECR filing, annual returns, and UAN management for guard workforce</li>
                    <li><a href="/gratuity-calculation-and-compliance-services">Gratuity Calculations and Compliance</a> - Monthly accrual provisioning and F&F settlement for fixed-term guards completing 1 year</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Security Agency Payroll in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Act / Code</th><th>Key Provision</th><th>Security Agency Applicability</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://www.mha.gov.in" target="_blank" rel="noopener">PSARA 2005</a></td><td>Mandatory licence from state Controlling Authority; valid 5 years; police NOC; training institute MoU</td><td>Every security agency providing guards in India; state-specific licence for each state</td></tr>
                        <tr><td><a href="https://clc.gov.in" target="_blank" rel="noopener">CLRA 1970</a></td><td>Form IV contractor licence; Form I principal employer registration; Form XII employment cards; Form B overtime register</td><td>Security agency (contractor) and every client engaging 20+ guards (principal employer)</td></tr>
                        <tr><td><a href="https://labour.gov.in/labourcodes" target="_blank" rel="noopener">Code on Wages 2019</a></td><td>Minimum wages per state schedule; basic + DA at least 50% of CTC; salary by 7th; VDA revised April and October</td><td>All security agencies - mandatory biannual minimum wage revision for every guard category</td></tr>
                        <tr><td>Social Security Code 2020</td><td>EPF 12%+12% (agencies 20+ employees); ESI 3.25%+0.75% (agencies 10+ employees, workers up to Rs.21,000/month)</td><td>Applies to all security agencies meeting headcount thresholds</td></tr>
                        <tr><td>Industrial Relations Code 2020</td><td>Fixed-term employment formal; gratuity after 1 year for FTE; F&F within 2 working days; digital registers</td><td>High impact: most guard deployments are site-specific fixed-term; gratuity now at 1 year</td></tr>
                        <tr><td>OSH Code 2020</td><td>8 hours/day, 48 hours/week normal; overtime at twice rate; digital records mandatory</td><td>Critical for 12-hour shifts - 4 hours per shift is overtime at double rate</td></tr>
                        <tr><td>Payment of Bonus Act 1965</td><td>Minimum 8.33% of annual wages; workers earning up to Rs.21,000/month; payable within 8 months of FY end</td><td>Entire guard workforce (below Rs.21,000/month) covered; large aggregate liability</td></tr>
                        <tr><td><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF Act / SS Code</a></td><td>15 days salary per year; Rs.20 lakh cap; 1 year for fixed-term (from Nov 2025)</td><td>Fixed-term guards completing 1-year deployments trigger gratuity</td></tr>
                        <tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act 2025</a></td><td>Section 192 TDS on salaries above exemption; Form 24Q quarterly; Form 16 by June 15</td><td>Guards on minimum wage typically below threshold; supervisors and officers attract TDS</td></tr>
                    </tbody>
                </table>
                </div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Security Agency Payroll</h2>
                    <p class="faq-expanded__lead">Expert answers to the most common questions about payroll compliance for PSARA-licensed security agencies in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Security Agency Payroll',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What payroll compliance obligations does a private security agency have in India?</h3>
                        <div class="faq-expanded__a"><p>A PSARA-licensed security agency must comply with state-specific minimum wages for each guard category revised every April and October under Code on Wages 2019; EPF contributions (employer 12% + employee 12%) deposited by the 15th each month; ESI contributions (employer 3.25% + employee 0.75%) for workers earning up to Rs.21,000/month; overtime at twice the ordinary rate for hours beyond 8/day under OSH Code 2020; Payment of Bonus Act compliance (minimum 8.33%); CLRA contractor licence and register maintenance; and annual bonus and gratuity provisions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do security agencies need to pay overtime for 12-hour shifts?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under OSH Code 2020 (active November 2025), standard working hours are 8 hours/day and 48 hours/week. Any work beyond these limits is overtime at twice the ordinary rate. Guards on 12-hour shifts work 4 hours of overtime per shift at double rate. The agency must maintain Form B Register of Overtime under CLRA Central Rules 1971. Failure to pay correct overtime attracts penalties and back-pay demands.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the CLRA Act and how does it apply to security agencies?</h3>
                        <div class="faq-expanded__a"><p>CLRA 1970 governs deployment of contract labour through a tripartite framework. The security agency must obtain Form IV CLRA contractor licence for each state; issue Form XII employment cards within 3 days; issue Form XIX wage slips before disbursement; maintain Form A wage register and Form B overtime register digitally. The principal employer client must register under Form I if engaging 20+ contract guards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does the 50% basic wage rule affect security agency payroll?</h3>
                        <div class="faq-expanded__a"><p>Code on Wages 2019 requires basic pay plus DA to be at least 50% of total CTC. Security agencies that structured guard CTC with low basic and high allowances to minimise EPF must restructure. The excess allowances get added to the wage base for EPF, ESI, gratuity, and overtime. For agencies with hundreds of guards, the EPF cost increase is material and needs modelling.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the gratuity obligation for fixed-term security guards?</h3>
                        <div class="faq-expanded__a"><p>Under the Industrial Relations Code 2020 (active November 2025), fixed-term employees are eligible for gratuity after completing just 1 year of service - reduced from the previous 5-year threshold. Gratuity is calculated at 15 days salary per year of service, capped at Rs.20 lakh. Agencies must provision gratuity monthly for all guards approaching the 1-year mark.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does GST apply to security agency services?</h3>
                        <div class="faq-expanded__a"><p>Yes, security services are taxable at 18% GST under HSN 9985. If the agency is a body corporate (Pvt Ltd, LLP), it charges 18% under forward charge. If the agency is not a body corporate and the client is a registered body corporate, RCM applies under GST Notification 13/2017 - the client pays GST directly. Incorrect invoicing leads to GST demand notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What documents are needed for a PSARA compliance audit?</h3>
                        <div class="faq-expanded__a"><p>Key documents include: valid PSARA licence for each state; police verification certificates; training MoU; Form IV CLRA licence; Form XII employment cards; digital Form A and Form B registers; Form XIX wage slips; EPF ECR and ESI challan receipts; minimum wage compliance analysis by state and category; bonus register; and gratuity provision statements for fixed-term guards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the penalty for security agency payroll non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Penalties come from multiple regulators simultaneously. Code on Wages: up to Rs.1,00,000 for repeat offences plus back-payment with interest. EPF defaults: 12% annual interest plus damages up to 25%; imprisonment up to 3 years for wilful non-payment. CLRA violations: contractor licence cancellation. PSARA violations: licence suspension or cancellation and criminal prosecution.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Minimum wages for security guards?</strong> State-specific and category-specific; revised April and October; basic + VDA must be 50% of CTC; national floor wage from Code on Wages 2019.</p>
                <p><strong>EPF for guards?</strong> Yes - 12%+12% of basic+DA; mandatory for agencies with 20+ employees; deposit by 15th.</p>
                <p><strong>Overtime for 12-hour shifts?</strong> Yes - hours beyond 8/day = overtime at twice ordinary rate; Form B register mandatory under CLRA Rules.</p>
                <p><strong>CLRA Form IV contractor licence?</strong> Mandatory for security agency deploying contract guards; renewed annually by December 31; state-specific.</p>
                <p><strong>Gratuity for fixed-term guards?</strong> Yes - eligible after 1 year under IR Code 2020 (from November 2025); 15 days salary per year.</p>
                <p><strong>GST on security services?</strong> 18% GST; forward charge if agency is body corporate; RCM if non-body corporate agency and registered body corporate client.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Compliance Deadlines - Act Now</h2>
            <div class="content-text">
                
                <p><strong>April 1, 2026:</strong> Income Tax Act 2025 in effect - update TDS formats; Form 24Q and Form 16 revised formats. <strong>7th of each month:</strong> TDS deposit and guard wage disbursement (Code on Wages 2019) - penalty up to Rs.1,00,000 for late wages. <strong>15th of each month:</strong> EPF and ESI deposits - 12% annual interest plus damages up to 25% for EPF defaults. <strong>Every April and October:</strong> Implement revised state minimum wages for all guard categories.</p>
                <p><strong>Don't risk PSARA licence suspension or CLRA contractor licence cancellation.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Security%20Agency%20Payroll.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free compliance assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Security Agency Payroll Compliance Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Payroll compliance for security agencies in India is multi-statute, multi-regulator, and operationally demanding. A PSARA-licensed agency must simultaneously satisfy licensing obligations, CLRA requirements, biannually revised minimum wages, overtime laws, EPF/ESI contributions, bonus provisions, and the accelerated gratuity obligation under the November 2025 Labour Codes.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting delivers CA-managed infrastructure for PSARA-licensed security agencies - from monthly guard payroll and minimum wage updates to CLRA register maintenance, PSARA audit support, and Labour Code compliance restructuring. With 15 years of experience and 10,000+ clients, we allow security agency owners to focus on guard deployment and client service - not statutory filings.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Security%20Agency%20Payroll.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Security%20Agency%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Security%20Agency%20Payroll%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Security Agency Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides security agency payroll services in major cities across India with state-wise minimum wage compliance.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">Security Agency Payroll Services by City</p>
                <p class="pa-block-sub">State-wise minimum wage compliance and CLRA register maintenance for security agencies</p>
                <div class="pa-city-grid">
                    <a href="/payroll-services-for-security-agencies/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/payroll-services-for-security-agencies/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/payroll-services-for-security-agencies/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/payroll-services-for-security-agencies/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related Compliance Services Across India</p>
                <p class="pa-block-sub">Comprehensive payroll and statutory compliance for all industries</p>
                <div class="pa-cross-grid">
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/pf-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">PF Return Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gratuity-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Gratuity Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tds-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months - aligned to state minimum wage revisions for security guard categories (April and October), Labour Code updates, PSARA amendment notifications, and IT Act 2025 implementation. Next review: October 2026.</p>
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
