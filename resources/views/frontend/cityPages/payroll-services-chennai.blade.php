
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
    <title>Payroll Services in Chennai – Salary, PF, ESI &amp; TDS | Patron</title>
    <meta name="description" content="CA-managed payroll services in Chennai. PF, ESI, TDS, TN Professional Tax compliant. Serving OMR, Ambattur, MEPZ businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Services in Chennai – Salary, PF, ESI &amp; TDS | Patron">
    <meta property="og:description" content="CA-managed payroll services in Chennai. PF, ESI, TDS, TN Professional Tax compliant. Serving OMR, Ambattur, MEPZ businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Services in Chennai – Salary, PF, ESI &amp; TDS | Patron">
    <meta name="twitter:description" content="CA-managed payroll services in Chennai. PF, ESI, TDS, TN Professional Tax compliant. Serving OMR, Ambattur, MEPZ businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll Services in Chennai",
          "description": "CA-managed payroll services in Chennai. PF, ESI, TDS, TN Professional Tax compliant. Serving OMR, Ambattur, MEPZ businesses. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/payroll-services/chennai",
          "serviceType": "Payroll Services in Chennai",
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
            "url": "https://www.patronaccounting.com/payroll-services/chennai",
            "price": "1500"
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
              "name": "Payroll Services in Chennai",
              "item": "https://www.patronaccounting.com/payroll-services/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which office handles PF and ESI compliance in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PF compliance for Chennai businesses is handled by the EPFO Regional Office Chennai. ESI contributions are managed through ESIC Regional Office Chennai. Monthly ECR for PF and ESI challans must be filed by the 15th of each month. Patron's CA team files all returns electronically."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get payroll services done online from Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patron Accounting delivers fully digital payroll services to Chennai businesses. Employee data is collected securely, payroll is processed on cloud systems, payslips are generated digitally, and all statutory filings are done online. Monthly reports are delivered by the 5th."
              }
            },
            {
              "@type": "Question",
              "name": "What is the payroll service fee in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Payroll services in Chennai start from Rs 1,500 per month for up to 15 employees covering salary computation, payslips, PF ESI challan, TDS, and Tamil Nadu PT. Growth plans for 16-50 employees cost Rs 4,000 per month with Form 24Q filing and leave tracking."
              }
            },
            {
              "@type": "Question",
              "name": "How long does payroll setup take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A typical payroll setup takes 5-7 working days covering employee data migration, salary structuring, PF ESI PT configuration, and bank file formatting. Chennai IT firms with clean HR data can go live in 5 working days."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Professional Tax rate in Tamil Nadu?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Professional Tax in Tamil Nadu is levied under the TN PT Act 1992 on a half-yearly basis. For Greater Chennai Corporation, employees earning above Rs 21,000 per half-year pay PT starting from Rs 100. The maximum PT is Rs 2,500 per year."
              }
            },
            {
              "@type": "Question",
              "name": "Is PF mandatory for all businesses in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PF is mandatory for establishments with 20 or more employees under the EPF Act 1952. Once registered with EPFO Regional Office Chennai, PF contribution becomes mandatory at 12% of basic wages. Even if headcount drops below 20, obligations continue."
              }
            },
            {
              "@type": "Question",
              "name": "Can Patron handle payroll for contract workers in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patron manages payroll for contract and temporary workers under the Contract Labour Act 1970 including wage computation per Tamil Nadu minimum wages, PF/ESI for eligible workers, and compliance registers."
              }
            },
            {
              "@type": "Question",
              "name": "Do you generate Form 16 for Chennai employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patron generates Form 16 Part A from TRACES and Part B with salary details for all employees by the June 15th deadline. The CA reconciles TDS deposited with actual salary records to ensure zero mismatches."
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
                        Payroll Services in Chennai: CA-Managed Salary Processing and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Employee master data, PAN, Aadhaar, bank account details, salary structure</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Payroll services in Chennai start from Rs 1,500/month (up to 15 employees)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any Chennai business with 1 or more employees - startup, MSME, IT firm, or factory</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup and first cycle processing in 5-7 working days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20payroll%20services%20in%20Chennai.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Payroll Services in Chennai',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services/chennai', 'label' => 'Payroll Services in Chennai', 'selected' => true, 'disabled' => false],
                            ['value' => 'accounting-services/chennai', 'label' => 'Accounting Services in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'zoho-books-accounting/chennai', 'label' => 'Zoho Books Accounting in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/chennai', 'label' => 'GST Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/chennai', 'label' => 'Income Tax Return Filing in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/chennai', 'label' => 'Startup Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/chennai', 'label' => 'Private Limited Company Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/chennai', 'label' => 'Trademark Registration in Chennai', 'selected' => false, 'disabled' => false],
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
            <a href="#overview-section" class="toc-btn">Overview</a>
                <a href="#what-is-section" class="toc-btn">What Is</a>
                <a href="#who-section" class="toc-btn">Who Needs</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services in Chennai: Overview and TL;DR</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Services in Chennai Services at a Glance</strong></p>
                    <p><p>Payroll services in Chennai cover salary computation, PF/ESI deductions, TDS withholding, Tamil Nadu Professional Tax compliance, and Form 16 generation. A CA-managed payroll service ensures zero-error salary processing and statutory filing for businesses across OMR, Ambattur, MEPZ, and Guindy. Patron Accounting handles end-to-end payroll from Chennai - fully online.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Service</td><td>End-to-end payroll processing with statutory compliance</td></tr>
                        <tr><td>Applicable To</td><td>All Chennai businesses with employees - IT, manufacturing, exports, services</td></tr>
                        <tr><td>Governing Laws</td><td>EPF Act 1952, ESI Act 1948, TN PT Act 1992, Payment of Wages Act 1936</td></tr>
                        <tr><td>Timeline</td><td>Monthly cycle - payroll processed by 28th, salary credited by 1st</td></tr>
                        <tr><td>Cost Starting From</td><td>Rs 1,500/month (up to 15 employees)</td></tr>
                        <tr><td>Key Compliance</td><td>PF (12%), ESI (employees below Rs 21,000/month), TN PT (half-yearly), TDS</td></tr>
                        <tr><td>Jurisdictional Offices</td><td>EPFO Regional Office Chennai, ESIC Chennai, Greater Chennai Corporation (PT)</td></tr>
                    </tbody>
                </table>
                </div></p>
                </div>
                <p>Chennai hosts over 5,000 MSMEs, 1,200+ IT and ITES firms, and hundreds of manufacturing units across Ambattur SIDCO Industrial Estate, Guindy Industrial Estate, and the Sriperumbudur auto-component corridor. Each of these businesses must process monthly payroll while complying with central laws like the EPF Act 1952 and ESI Act 1948, and state-specific obligations under the Tamil Nadu Professional Tax Act 1992 and the Tamil Nadu Shops and Establishments Act 1947. Learn more about <a href="/payroll-services">Payroll Services across India</a>.</p>
                <p>A CA-managed payroll service in Chennai takes this compliance burden off your HR team. Patron Accounting's CA team computes salaries, deducts PF at 12% of basic wages, calculates ESI contributions for eligible employees, applies Tamil Nadu PT slabs (collected in April and October through the Greater Chennai Corporation), withholds TDS as per income tax slabs, and generates Form 16 at year-end. Whether your team operates from the OMR IT Corridor or the MEPZ export zone, your payroll runs on time, every time.</p>
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
                <h2 class="section-title">What Are Payroll Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services refer to the end-to-end process of computing employee compensation, deducting statutory contributions, withholding taxes, and ensuring timely salary disbursement in compliance with central and state labour laws.</p>
                <p>In India, payroll processing involves calculating gross salary (basic + HRA + allowances), deducting Provident Fund under the EPF Act 1952 (12% employer and 12% employee contribution on basic wages), ESI under the ESI Act 1948 (for employees earning below Rs 21,000 per month), TDS under the Income Tax Act 1961, and state-level Professional Tax. The net pay after all deductions is disbursed to employees, and statutory contributions are remitted to the respective government authorities.</p>
                <p>For Chennai businesses, payroll carries additional state-specific requirements. The Tamil Nadu Professional Tax Act 1992 mandates half-yearly PT deduction based on salary slabs - employees earning above Rs 21,000 per half-year owe PT starting from Rs 100. The Tamil Nadu Shops and Establishments Act 1947 governs working hours, leave policies, and wage payment timelines. IT companies on OMR processing payroll for 200+ employees must also comply with the Payment of Bonus Act 1965 and the Payment of Gratuity Act 1972 for employees completing 5 years.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Services in Chennai:</strong></p>
                    <p><strong>Provident Fund (PF):</strong> Mandatory retirement savings scheme under EPF Act 1952 requiring 12% employer and 12% employee contribution on basic wages.</p>
                <p><strong>ESI (Employees' State Insurance):</strong> Medical benefit scheme under ESI Act 1948 for employees earning below Rs 21,000 per month.</p>
                <p><strong>Tamil Nadu Professional Tax:</strong> State-level tax under TN PT Act 1992 deducted half-yearly from salaried individuals, remitted to Greater Chennai Corporation.</p>
                <p><strong>Form 16:</strong> Annual TDS certificate issued by employer showing salary paid, deductions, and tax withheld under Section 203 of the Income Tax Act.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Payroll Compliance</span>
                        <strong>PF + ESI + TDS + TN PT</strong>
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
            <h2 class="section-title">Who Needs Payroll Services in Chennai?</h2>
            <div class="content-text">
                
                <p><strong>IT and ITES Companies on the OMR Corridor:</strong> Firms in Tidel Park, Perungudi, and Sholinganallur employ hundreds to thousands of software engineers. Their CTC structures include basic salary, HRA, special allowance, LTA, and stock options. Monthly payroll must compute TDS under Section 192, PF on basic, ESI for eligible staff, and Tamil Nadu PT. Many OMR firms also have employees in multiple states, requiring multi-state PT compliance.</p>
                <p><strong>Automobile and Component Manufacturers in Guindy and Sriperumbudur:</strong> Chennai's auto manufacturing corridor processes shift-based payroll with overtime calculations under the Factories Act 1948. Workers in Ambattur SIDCO and Guindy Industrial Estate need accurate overtime pay at double the ordinary rate as mandated by Section 59 of the Factories Act.</p>
                <p><strong>Exporters in MEPZ and Ambattur:</strong> Export processing units in the Madras Export Processing Zone employ contract and permanent workers. Payroll for MEPZ units must handle foreign-currency incentive disbursements, shift allowances, and compliance with the Contract Labour Act 1970.</p>
                <p><strong>Healthcare and Pharma Firms:</strong> Hospitals and pharmaceutical companies in Adyar, Nungambakkam, and Perungudi run 24x7 shift rosters. Payroll must accurately compute night-shift allowances, on-call pay, and overtime while deducting PF, ESI, and TN PT.</p>
                <p><strong>Startups and SMEs:</strong> Chennai's growing startup ecosystem (concentrated on OMR and Anna Salai) often lacks dedicated HR. PF registration is mandatory once headcount reaches 20 employees. ESI applies when 10+ employees are on rolls. For <a href="/payroll-processing-and-management-services">payroll processing and management</a>, a CA-managed service ensures startups do not miss registration thresholds.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services Included in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Salary Computation and Structuring</td><td>CTC breakdown into basic, HRA, special allowance, and reimbursements optimised for tax efficiency. Chennai IT employees get HRA at 40% of basic.</td></tr>
                        <tr><td>PF and ESI Compliance</td><td>Monthly PF challan generation and ECR filing with EPFO Regional Office Chennai. ESI contribution for employees below Rs 21,000/month threshold.</td></tr>
                        <tr><td>TDS Computation and Filing</td><td>Monthly TDS withholding under Section 192, investment declaration processing under Section 80C/80D, and quarterly Form 24Q filing. See also <a href="/tds-return-filing-24q">TDS Return Filing</a>.</td></tr>
                        <tr><td>Tamil Nadu Professional Tax</td><td>Half-yearly PT deduction as per TN PT Act 1992 slabs. Remittance to Greater Chennai Corporation in April and October cycles.</td></tr>
                        <tr><td>Payslip Generation</td><td>Monthly digital payslips with earnings, deductions, PF/ESI breakup, TDS, and net pay. Bilingual payslips (English/Tamil) available for factory workers.</td></tr>
                        <tr><td>Form 16 and Annual Filings</td><td>Year-end Form 16 (Part A and Part B) generation. Annual PF return, ESI return, and PT annual return filing.</td></tr>
                        <tr><td>Leave and Attendance Integration</td><td>Leave encashment computation, attendance-linked payroll for Ambattur and Guindy factory workers with shift rosters and overtime.</td></tr>
                        <tr><td>Gratuity and Bonus Calculation</td><td>Gratuity provision under Payment of Gratuity Act 1972. Statutory bonus under Payment of Bonus Act 1965 (8.33% to 20% of wages).</td></tr>
                        <tr><td>Full and Final Settlement</td><td>Exit payroll processing including leave encashment, gratuity, bonus pro-rata, PF withdrawal facilitation, and final TDS computation.</td></tr>

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
            <h2 class="section-title">How Payroll Services Work in Chennai: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to EPFO Chennai or ESIC Chennai required - your dedicated CA/expert from Patron's pan-India team handles all filings online. Payroll data flows directly into statutory return filing and Form 16 generation without manual re-entry.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assess Your Chennai Workforce and Compliance Requirements</h3><p class="step-description">Your dedicated CA reviews your employee master data, existing salary structures, PF/ESI registration status with EPFO Regional Office Chennai and ESIC Chennai, and Tamil Nadu PT registration with Greater Chennai Corporation. The CA identifies applicable labour laws based on your industry and headcount thresholds for PF (20 employees) and ESI (10 employees).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance audit</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Headcount mapping</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="45" cy="31" r="5" fill="#14365F" opacity="0.3"/><path d="M35 43c0-5 4-9 10-9s10 4 10 9" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="68" y1="28" x2="95" y2="28" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="68" y1="38" x2="90" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="68" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Assessment Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Structure Salaries for Tax Efficiency and TN Compliance</h3><p class="step-description">The CA designs CTC components - basic salary (40-50% of CTC), HRA (40% of basic for Chennai), special allowance, conveyance, medical reimbursement, and LTA. PF is computed on basic wages. Tamil Nadu PT slabs are mapped into the payroll system. For Chennai IT professionals, the CA optimises the structure to maximise HRA exemption under Section 10(13A) of the Income Tax Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax-efficient CTC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TN PT configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="3" fill="#25D366" opacity="0.4"/><rect x="30" y="35" width="45" height="8" rx="3" fill="#F5A623" opacity="0.4"/><rect x="30" y="48" width="30" height="8" rx="3" fill="#E8712C" opacity="0.4"/><text x="60" y="85" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CTC Structure</text></svg></div><span class="illustration-label">Structure Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Set Up Payroll System and Employee Data</h3><p class="step-description">All employee data - PAN, Aadhaar, bank account, UAN, ESIC IP number, and investment declarations under Section 80C - are loaded. For Ambattur and Guindy factory units, shift schedules and overtime rules under Section 59 of the Factories Act 1948 are configured. Leave policies per TN Shops and Establishments Act are mapped.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data loaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shifts configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><rect x="30" y="75" width="60" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">System Ready</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Process Monthly Payroll with Chennai-Specific Deductions</h3><p class="step-description">By the 25th of each month, the CA collects attendance data, leave records, and overtime hours. Gross salary is computed, followed by deductions: PF (12% on basic up to Rs 15,000), ESI (0.75% employee + 3.25% employer for wages under Rs 21,000), TDS, Tamil Nadu PT, and loan recoveries. Net pay is calculated and bank transfer file generated for salary credit by the 1st.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zero-error processing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank file generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><line x1="25" y1="42" x2="95" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><text x="35" y="55" font-size="8" fill="#25D366" font-family="Arial">PF</text><text x="55" y="55" font-size="8" fill="#F5A623" font-family="Arial">ESI</text><text x="75" y="55" font-size="8" fill="#E8712C" font-family="Arial">TDS</text><text x="55" y="68" font-size="8" fill="#14365F" font-family="Arial">TN PT</text></svg></div><span class="illustration-label">Payroll Done</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Statutory Returns with EPFO Chennai and ESIC Chennai</h3><p class="step-description">PF ECR is filed with EPFO Regional Office Chennai by the 15th. ESI contribution is remitted by the 15th. TDS is deposited via Challan 281 by the 7th. Tamil Nadu Professional Tax is remitted to Greater Chennai Corporation in April and October.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed before deadline</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All jurisdictions covered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="40" height="55" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="35" y="40" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ECR</text><text x="85" y="40" font-size="7" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">FILED</text><path d="M58 37h5M60 35l2 2-2 2" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Generate Reports, Form 16, and Prepare for Year-End</h3><p class="step-description">Monthly payroll reports delivered by the 5th. At year-end, the CA generates Form 16 (Part A from TRACES, Part B with salary details), files annual PF return, ESI half-yearly return, and PT annual return. Full and final settlement for exiting employees includes gratuity computation under Payment of Gratuity Act 1972.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 by June 15</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready registers</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9"/><rect x="55" y="20" width="25" height="40" rx="3" fill="#FFF3E0"/><text x="37" y="55" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">16</text><text x="67" y="55" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">P&L</text><circle cx="90" cy="20" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M86 20l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Reports Ready</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Payroll Setup in Chennai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Employee PAN Cards</strong> - mandatory for TDS computation and Form 16 generation</li>
                    <li><strong>Aadhaar Cards</strong> - required for UAN-Aadhaar linking for PF and ESIC IP number generation</li>
                    <li><strong>Bank Account Details</strong> - for salary disbursement via NEFT/RTGS/direct bank transfer</li>
                    <li><strong>PF Establishment Code</strong> - from EPFO Regional Office Chennai. New businesses need PF registration if 20+ employees</li>
                    <li><strong>ESIC Code Number</strong> - from ESIC Chennai for establishments with 10+ employees</li>
                    <li><strong>PT Registration Certificate</strong> - from Greater Chennai Corporation for Professional Tax deduction and remittance</li>
                    <li><strong>Salary Structure/CTC Breakup</strong> - existing CTC components for all employees, including allowances and reimbursements</li>
                    <li><strong>Investment Declarations</strong> - employee declarations under Section 80C, 80D, 80E for TDS computation</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Chennai-Specific Tip:</strong> For Ambattur and Guindy factory units, keep your Factories Act registration, shift roster approvals, and overtime permission from the Inspector of Factories (Tamil Nadu) ready - these determine overtime payroll calculations.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Payroll Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tamil Nadu PT Slab Miscalculation</td><td>Under-deduction leading to 2% interest per month under Tamil Nadu Municipal Laws</td><td>Correct slab rates configured per Greater Chennai Corporation jurisdiction</td></tr>
                        <tr><td>PF Late Filing for OMR Startups</td><td>Damages up to 100% of arrears under Section 14B of EPF Act 1952 for delays beyond 6 months</td><td>PF registration monitored at 20-employee threshold, ECR filed by 15th monthly</td></tr>
                        <tr><td>Overtime Errors in Ambattur/Guindy</td><td>Payment of Wages Act violations from incorrect double-rate overtime under Section 59 Factories Act</td><td>Shift-based payroll with accurate overtime at double the ordinary wage rate</td></tr>
                        <tr><td>Multi-State Payroll for Chennai-HQ Companies</td><td>Missed PT filings and penalties across TN, Karnataka, Maharashtra, Telangana</td><td>Single CA team handles multi-state PT compliance from one dashboard</td></tr>
                        <tr><td>Form 16 Generation Delays</td><td>TRACES mismatches causing employee ITR filing errors and income tax notices</td><td>TDS deposits reconciled via TRACES before Form 16 issuance by June 15th</td></tr>

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
            <h2 class="section-title">Payroll Services Fees in Chennai: 2026 Cost Breakdown</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter Plan (up to 15 employees)</td><td>Rs 1,500/month - salary computation, payslips, PF/ESI challan, TN PT, basic TDS</td></tr>
                        <tr><td>Growth Plan (16-50 employees)</td><td>Rs 4,000/month - all Starter features + Form 24Q filing, investment declarations, leave tracking</td></tr>
                        <tr><td>Scale Plan (51-200 employees)</td><td>Rs 8,000/month - all Growth features + multi-location payroll, shift/overtime, audit support, Form 16</td></tr>
                        <tr><td>Enterprise (200+ employees)</td><td>Custom pricing - full-suite payroll + gratuity provisioning, ESOP accounting, multi-state compliance</td></tr>
                        <tr><td>One-Time Setup</td><td>Rs 3,000 - 10,000 - employee data migration, salary restructuring, PF/ESI/PT registration support</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Services in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Processing Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Attendance/Leave Data Collection</td><td>25th of month - HR shares attendance, overtime, leave records</td></tr>
                        <tr><td>Payroll Computation</td><td>27th-28th of month - gross/net salary calculated with all deductions</td></tr>
                        <tr><td>Salary Disbursement</td><td>1st of following month - bank transfer file generated and processed</td></tr>
                        <tr><td>PF/ESI Remittance</td><td>15th of following month - ECR filed with EPFO Chennai, ESI remitted</td></tr>
                        <tr><td>TDS Deposit</td><td>7th of following month - Challan 281 deposited with Income Tax Dept</td></tr>
                        <tr><td>TN PT Remittance</td><td>April and October - half-yearly PT deposited with Greater Chennai Corporation</td></tr>
                        <tr><td>Form 16 Generation</td><td>By 15 June annually - Part A from TRACES + Part B prepared by CA</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Fast Track:</strong> IT firms with clean HR data can complete payroll setup in 5 working days. Manufacturing units with shift rosters may require 7-10 days for complete configuration.</p>

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
            <h2 class="section-title">Why Choose Patron for Payroll Services in Chennai?</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                    <h3 class="feature-title">CA-Led Payroll - Not Just Software</h3>
                    <p class="feature-text">Unlike payroll software companies or HR outsourcing firms, Patron delivers payroll managed by a practising Chartered Accountant. Your salary register feeds directly into books of accounts, GST returns, and income tax filings.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4z"/></svg></div>
                    <h3 class="feature-title">4-Office Authority with Pan-India Reach</h3>
                    <p class="feature-text">With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai through a digital-first model. Multi-state payroll for Chennai-HQ companies is handled by a single CA team familiar with PT rules across all states.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                    <h3 class="feature-title">Chennai Jurisdictional Familiarity</h3>
                    <p class="feature-text">Your file is handled by a CA/expert familiar with EPFO Regional Office Chennai, ESIC Chennai, Greater Chennai Corporation PT rules, and Tamil Nadu Shops and Establishments Act compliance.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                    <h3 class="feature-title">Integrated Accounting + Payroll</h3>
                    <p class="feature-text">Salary journal entries flow into Zoho Books or Tally, PF/ESI liabilities are mapped to the balance sheet, TDS entries reconcile with quarterly returns, and year-end payroll feeds into statutory audit preparation - all from one CA team.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>
                <p><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai businesses through a dedicated digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs CA-Managed Outsourced Payroll in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>In-House Payroll</th><th>CA-Managed by Patron</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Cost (50 employees)</td><td>Rs 35,000-50,000 (staff + software)</td><td>Rs 4,000/month</td></tr>
                        <tr><td>Compliance Accuracy</td><td>Depends on HR team knowledge</td><td>CA-verified, zero-penalty track record</td></tr>
                        <tr><td>PF/ESI Filing</td><td>Manual - risk of late filing</td><td>Filed by 15th every month without fail</td></tr>
                        <tr><td>TN PT</td><td>Often miscalculated</td><td>Correct slab per Greater Chennai Corporation</td></tr>
                        <tr><td>Form 16 Accuracy</td><td>Frequent TRACES mismatches</td><td>Reconciled with TDS deposits before issuance</td></tr>
                        <tr><td>Accounting Integration</td><td>Separate entry - reconciliation gaps</td><td>Auto-mapped to Zoho Books/Tally</td></tr>
                        <tr><td>Multi-State Support</td><td>Requires separate PT knowledge per state</td><td>Single CA team handles all states</td></tr>
                        <tr><td>Year-End Audit</td><td>Payroll data scattered</td><td>Audit-ready payroll registers from day one</td></tr>

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
                
                <p>If you need payroll services in Chennai, you may also benefit from these related services:</p>
                <ul>
                    <li><a href="/payroll-services">Payroll Services (India)</a> - national service page with detailed feature overview</li>
                    <li><a href="/payroll-processing-and-management-services">Payroll Processing and Management</a> - end-to-end payroll management</li>
                    <li><a href="/accounting-services">Accounting Services</a> - full-scope accounting integrated with payroll</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> - quarterly TDS return filing from payroll data</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing using Form 16 data</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Payroll in Chennai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p>
                <ul>
                    <li>Employees' Provident Fund and Miscellaneous Provisions Act, 1952 (EPF Act)</li>
                    <li>Employees' State Insurance Act, 1948 (ESI Act)</li>
                    <li>Tamil Nadu Tax on Professions, Trades, Callings and Employments Act, 1992</li>
                    <li>Tamil Nadu Shops and Establishments Act, 1947</li>
                    <li>Payment of Wages Act, 1936</li>
                    <li>Payment of Bonus Act, 1965</li>
                    <li>Payment of Gratuity Act, 1972</li>
                    <li>Income Tax Act, 1961 (Section 192 - TDS on Salary)</li>
                    <li>Factories Act, 1948 (for manufacturing units in Ambattur, Guindy, Sriperumbudur)</li>
                </ul>
                <p><strong>Penalties:</strong></p>
                <ul>
                    <li>PF late filing: Damages up to 100% of arrears under Section 14B of EPF Act 1952</li>
                    <li>ESI non-compliance: Imprisonment up to 2 years under Section 85 of ESI Act 1948</li>
                    <li>TN PT late payment: 2% interest per month under Tamil Nadu Municipal Laws</li>
                    <li>TDS non-deduction: Interest at 1% per month under Section 201(1A) of Income Tax Act</li>
                    <li>Payment of Wages Act violation: Fine up to Rs 3,000 under Section 20</li>
                </ul>
                <p><strong>Regulatory Authority (Central):</strong> EPFO - <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">epfindia.gov.in</a> | ESIC - <a href="https://www.esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a></p>
                <p><strong>Regulatory Authority (State):</strong> Greater Chennai Corporation (PT) | TN Labour Department - <a href="https://www.tn.gov.in" target="_blank" rel="noopener">tn.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Payroll Services in Chennai</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about payroll processing, PF/ESI compliance, Tamil Nadu Professional Tax, and Form 16 generation in Chennai.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Chennai', 'enquiryService' => 'Payroll Services in Chennai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles PF and ESI compliance in Chennai?</h3>
                        <div class="faq-expanded__a"><p>PF compliance for Chennai businesses is handled by the EPFO Regional Office Chennai. ESI contributions are managed through ESIC Regional Office Chennai. Monthly ECR for PF and ESI contribution challans must be filed by the 15th of each month. Patron's CA team files all returns electronically from your payroll data - no visit to any office is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get payroll services done online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron Accounting delivers fully digital payroll services to Chennai businesses. Employee data is collected securely, payroll is processed on cloud systems, payslips are generated digitally, and all statutory filings (PF, ESI, TDS, Tamil Nadu PT) are done online. Monthly reports are delivered electronically by the 5th of each month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the payroll service fee in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Payroll services in Chennai start from Rs 1,500 per month for up to 15 employees, covering salary computation, payslips, PF/ESI challan, TDS, and Tamil Nadu PT. Growth plans for 16-50 employees cost Rs 4,000/month. Scale plans for 51-200 employees cost Rs 8,000/month with full compliance and Form 16 support.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does payroll setup take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>A typical payroll setup takes 5-7 working days, covering employee data migration, salary structuring, PF/ESI/PT configuration, and bank file formatting. The first payroll cycle is processed within this timeframe. Chennai IT firms with clean HR data can go live in 5 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the Professional Tax rate in Tamil Nadu?</h3>
                        <div class="faq-expanded__a"><p>Professional Tax in Tamil Nadu is levied under the TN PT Act 1992 on a half-yearly basis. For Greater Chennai Corporation, employees earning above Rs 21,000 per half-year pay PT starting from Rs 100. The maximum PT is Rs 2,500 per year. PT is deducted from salary in April and October and remitted to the municipal authority.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is PF mandatory for all businesses in Chennai?</h3>
                        <div class="faq-expanded__a"><p>PF is mandatory for establishments with 20 or more employees under the EPF Act 1952. Once an establishment crosses this threshold and registers with EPFO Regional Office Chennai, PF contribution becomes mandatory at 12% of basic wages. Even if headcount drops below 20 later, PF obligations continue. Startups on OMR must register within 30 days of reaching the threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can Patron handle payroll for contract workers in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron manages payroll for contract and temporary workers under the Contract Labour (Regulation and Abolition) Act 1970. This includes wage computation per the minimum wages notification for Tamil Nadu, PF/ESI contributions for eligible contract workers, and compliance registers. This is relevant for Ambattur manufacturing units and MEPZ export firms using contract labour.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do you generate Form 16 for Chennai employees?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron generates Form 16 (Part A downloaded from TRACES after TDS deposits reconciliation, Part B prepared with salary details and deduction breakup) for all employees by the June 15th deadline. The CA reconciles TDS deposited via Challan 281 with actual salary records to ensure zero mismatches - preventing employee ITR filing issues. For employee <a href='/income-tax-return'>Income Tax Return Filing</a>, Patron also offers ITR support.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Payroll services Chennai mein kya hota hai?</strong> Salary calculation, PF/ESI deduction, TDS, Tamil Nadu Professional Tax, aur payslip generation - sab monthly cycle mein CA dwara manage hota hai.</p>
                <p><strong>PF mandatory hai kya Chennai mein?</strong> Haan, 20 ya zyada employees hone par PF registration EPFO Chennai ke saath mandatory hai under EPF Act 1952.</p>
                <p><strong>Form 16 kab milta hai?</strong> Har saal 15 June tak employer ko Form 16 dena hota hai. Patron ye deadline se pehle generate kar deta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Delay Your Payroll Compliance in Chennai</h2>
            <div class="content-text">
                
                <p>PF contribution must be deposited by the 15th of every month. Late payment attracts damages under Section 14B of the EPF Act 1952 - up to 100% of arrears for delays beyond 6 months. TDS on salary must be deposited by the 7th; late deposit attracts 1.5% interest per month under Section 201(1A). Tamil Nadu PT late payment attracts 2% monthly interest. Every month without a CA-managed payroll service in Chennai is a month of accumulating compliance risk.</p>
                <p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Chennai." target="_blank">WhatsApp us</a> to start payroll services in Chennai today.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Payroll Services in Chennai Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Payroll services in Chennai cover the complete cycle of salary computation, statutory deductions, tax withholding, and compliance filing for businesses across every sector - from OMR IT firms and MEPZ exporters to Ambattur manufacturers and Anna Salai professional services firms. A CA-managed payroll service ensures zero-error processing, timely PF/ESI filings, correct TN PT deductions, and audit-ready payroll registers.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting serves Chennai businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA is familiar with EPFO Regional Office Chennai, ESIC Chennai, Greater Chennai Corporation PT rules, and the Tamil Nadu Shops and Establishments Act 1947.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20payroll%20services%20in%20Chennai.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert payroll services available in 8 major cities across India</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available Cities</div><div class="pa-block-sub">Payroll services with local jurisdictional expertise</div><div class="pa-city-grid"><a href="/payroll-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/payroll-services/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/payroll-services/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for Payroll Services in Chennai</div><div class="pa-cross-grid"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Chennai</div></div><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect changes in PF/ESI contribution rates, Tamil Nadu Professional Tax slabs, TDS thresholds, and labour law amendments. The next scheduled review is October 2026.</p>
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
