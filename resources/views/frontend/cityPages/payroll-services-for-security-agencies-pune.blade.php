
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
    <title>Security Agency Payroll in Pune - ESIC, PF & Wage Register</title>
    <meta name="description" content="CA-assisted payroll for security agencies in Pune. Shift-based wages, PF, ESIC, PSARA muster rolls, and Guard Board compliance for guard companies. Serving Hinjewadi, Chakan, Baner sites. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-security-agencies/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Security Agency Payroll in Pune - ESIC, PF & Wage Register">
    <meta property="og:description" content="CA-assisted payroll for security agencies in Pune. Shift-based wages, PF, ESIC, PSARA muster rolls, and Guard Board compliance for guard companies. Serving Hinjewadi, Chakan, Baner sites. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-security-agencies/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Security Agency Payroll in Pune - ESIC, PF & Wage Register">
    <meta name="twitter:description" content="CA-assisted payroll for security agencies in Pune. Shift-based wages, PF, ESIC, PSARA muster rolls, and Guard Board compliance for guard companies. Serving Hinjewadi, Chakan, Baner sites. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Payroll for Security Agencies in Pune",
      "description": "CA-assisted payroll for security agencies in Pune. Shift-based wages, PF, ESIC, PSARA muster rolls, and Guard Board compliance for guard companies. Serving Hinjewadi, Chakan, Baner sites. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-security-agencies/pune",
      "serviceType": "Payroll for Security Agencies in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
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
        "url": "https://www.patronaccounting.com/payroll-services-for-security-agencies/pune",
        "price": "5000"
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
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Payroll for Security Agencies in Pune",
          "item": "https://www.patronaccounting.com/payroll-services-for-security-agencies/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles security agency payroll compliance in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Maharashtra Security Guard Board and PSARA Controlling Authority oversee agency licensing and guard welfare. EPFO Regional Office Pune handles PF. ESIC Regional Office Pune manages ESI. Labour Commissioner Pune monitors wage payment and Contract Labour Act compliance. GRAS portal handles Maharashtra PT. Patron's Pune office at Wagholi coordinates with all authorities."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get security agency payroll services done online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron provides fully digital payroll for Pune security agencies. Muster rolls uploaded via secure portal or structured Excel templates. All statutory filings completed online. Walk-in at Wagholi office available for agency owners who prefer in-person discussion on PSARA compliance or principal employer reporting."
          }
        },
        {
          "@type": "Question",
          "name": "What is the security agency payroll fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fees start from Rs 5,000 per month for up to 50 guards including shift-based wage computation and statutory compliance. For agencies with 200+ guards across 20+ sites, fees range from Rs 18,000 to Rs 35,000/month. PSARA renewal documentation support from Rs 8,000 per cycle."
          }
        },
        {
          "@type": "Question",
          "name": "How long does security agency payroll setup take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard setup takes 7-10 working days including PSARA verification, deployment site mapping, guard data onboarding, shift configuration, PF/ESIC/PT setup, and minimum wage verification. First payroll cycle processes within 3 working days of muster roll submission. For 500+ guard agencies, allow 10-12 days."
          }
        },
        {
          "@type": "Question",
          "name": "Is PSARA licence needed for payroll compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. PSARA licence is the foundational requirement for operating a private security agency in India. Without a valid licence, the agency cannot legally deploy guards or process payroll. PSARA compliance requires guard training records, police verification documentation, and wage registers aligned with payroll records."
          }
        },
        {
          "@type": "Question",
          "name": "What are minimum wages for security guards in Maharashtra 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra notifies minimum wages for security guards under Scheduled Employment with separate rates for unarmed guards, armed guards, and supervisors. Rates are revised periodically and may vary by zone. All agencies must ensure guard wages meet or exceed prescribed minimums. Patron monitors Labour Department notifications."
          }
        },
        {
          "@type": "Question",
          "name": "Who is liable for PF - security agency or principal employer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 7A of the EPF Act 1952, the principal employer (company, society, factory deploying contract guards) is directly liable if the security agency fails to deposit PF. Patron generates site-wise ECR challans and compliance reports that agencies share with principal employers as proof of deposit."
          }
        },
        {
          "@type": "Question",
          "name": "How to manage shift-based payroll for 24/7 security deployments?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron configures both 8-hour three-shift and 12-hour two-shift rosters per deployment site. Overtime beyond 8 hours/day or 48 hours/week is computed automatically at double the ordinary wage rate. Night shift allowances and weekly-off duty premiums applied per agency policy. Multi-site consolidation ensures accuracy across all sites. Quick Answers Pune mein security guard ka payroll kitne mein hota hai? Rs 5,000 per month se start. 50 guards tak. Bade agencies ke liye Rs 18,000-35,000. Security agency ko PF dena zaroori hai kya? Haan. 20 se zyada guards hain toh EPF mandatory hai. Agar agency nahi deti toh principal employer (company/society) ko pay karna padta hai. 12-hour shift mein overtime dena padta hai kya? Haan. 8 ghante se zyada kaam ka double rate mein overtime zaroori hai."
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
                        Payroll Services for Security Agencies in Pune: PSARA-Compliant Shift Processing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PSARA licence, guard muster rolls (Form XVI), deployment site details, wage register, PAN and Aadhaar of guards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000 per month for up to 50 security guards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> PSARA-licensed security agencies, facility management companies, and principal employers deploying guards in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Monthly payroll within 3 working days of muster roll submission; shift differential automatic</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - Call +91 945 945 6700</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20security%20agency%20payroll%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Security Agency Payroll in Pune',
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
        
        <div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Outstanding experience with Patron Accounting. Professionalism, attention to detail, and timely communication made everything seamless.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Glad I connected with Patron. Minimum time for calculations and really helpful throughout the process.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">R</div><div><div class="testi-name">Rajib Dutta</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Fantastic experience with Patron. Shubham was extremely knowledgeable. 5 stars for smooth documentation handling.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Best service for all account handling. Extremely happy they assigned a dedicated contact for our security company.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nikhil Nimbhorkar</div><div class="testi-role">4 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Professional and timely. Shubham and Amin handled our filings smoothly. Understand basics well and respond promptly.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get CA-managed security agency payroll, PSARA compliance, and principal employer reporting for your Pune guard company.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Choose Us</a><a href="#comparison-section" class="toc-btn">In-House vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll for Security Agencies in Pune</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Security Agency Payroll in Pune Services at a Glance</strong></p>
                    <p>Payroll services for security agencies in Pune cover shift-based wage computation, statutory deductions (PF, ESIC, Maharashtra PT, TDS), PSARA-compliant muster roll management, Maharashtra Guard Board compliance, and principal employer liability coordination. Mandatory for all PSARA-licensed agencies deploying guards across Pune's IT parks, industrial zones, residential societies, and commercial establishments.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>PSARA 2005, Maharashtra Guard Act 1981, EPF Act 1952, ESIC Act 1948, Contract Labour Act 1970, Maharashtra PT Act 1975, Code on Wages 2019</td></tr><tr><td>Applicable To</td><td>PSARA-licensed agencies, facility management companies, principal employers deploying guards in Pune</td></tr><tr><td>Timeline</td><td>Payroll within 3 days of muster roll; PF/ESIC by 15th; TDS by 7th; wages within 7 days</td></tr><tr><td>Cost Starting From</td><td>Rs 5,000/month for up to 50 guards</td></tr><tr><td>Penalty</td><td>EPF: damages up to 100%; ESIC: Rs 5,000; PSARA licence suspension; Payment of Wages: Rs 7,500 fine</td></tr><tr><td>Key Portals</td><td>EPFO Unified Portal, ESIC portal, mahagst.gov.in for PTRC, Maharashtra Home Department (PSARA)</td></tr><tr><td>Jurisdictional Office</td><td>Maharashtra Guard Board; PSARA Authority; EPFO Pune; Labour Commissioner Pune</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is one of Maharashtra's largest markets for private security services, with hundreds of PSARA-licensed agencies deploying thousands of guards across IT parks in Hinjewadi and Kharadi, manufacturing units in Chakan and MIDC Bhosari, residential societies in Baner, Wakad, and Kothrud, and commercial complexes across the city. Established agencies like Lynx Security Services, Poona Security Investigation (60+ years), and JSS Group (40+ years) anchor the market. Learn more about <a href="/payroll-services-for-security-agencies">Payroll Services for Security Agencies across India</a>.</p>
                <p>The Maharashtra Private Security Guards Act 1981 requires Guard Board registration or exemption. PSARA 2005 mandates licensing, guard training (100 hours classroom + 60 hours field), and police verification. Every guard is subject to EPF, ESIC, Maharashtra PT, and minimum wage notifications. The Code on Wages 2019 (effective November 2025) requires basic pay at minimum 50% of CTC. Patron Accounting's Pune office at RTC Silver, Wagholi handles integrated security agency payroll.</p>
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
                <h2 class="section-title">What Is Payroll for Security Agencies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services for security agencies is the end-to-end processing of guard wages, shift-based pay computation, statutory deductions, muster roll management, and multi-site deployment compliance for private security firms, governed by PSARA 2005, the Maharashtra Private Security Guards Act 1981, and applicable labour laws.</p><p>Security agency payroll is among the most operationally complex. Guards work 8-hour or 12-hour shifts across day, evening, and night rotations. A single agency may deploy guards at 20-50 different sites across Pune. The muster roll (Form XVI under Contract Labour Act rules) must record attendance, shift assignments, overtime, and leave for every guard at every site. Wages must be paid within 7 days under the Payment of Wages Act 1936.</p><p>For Pune security agencies, the principal employer bears ultimate PF liability under Section 7A of the EPF Act if the agency defaults. This creates compliance interdependency where both parties need accurate payroll records. Patron's CA team structures payroll to satisfy PSARA, Guard Board, principal employer audit, and statutory filing requirements simultaneously.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Security Agency Payroll in Pune:</strong></p>
                    <ul><li><strong>PSARA:</strong> Private Security Agencies Regulation Act 2005. Mandatory licensing with 100 hours classroom + 60 hours field training for guards</li><li><strong>Maharashtra Guard Board:</strong> State body under Maharashtra Private Security Guards Act 1981 regulating guard employment and welfare</li><li><strong>Form XVI:</strong> Muster roll format under Contract Labour Act recording guard attendance, shifts, and overtime per deployment site</li><li><strong>Section 7A Liability:</strong> EPF Act provision making the principal employer (IT company, society, factory) liable if the security agency defaults on PF</li><li><strong>Code on Wages 2019:</strong> Basic pay must be minimum 50% of total wages from November 2025. Overtime at double rate</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Security Agency Payroll in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>PSARA + PF + ESIC Compliant</span>
                        <strong>Security Agency Payroll</strong>
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
            <h2 class="section-title">Who Needs Security Agency Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p>Pune's security deployment spans IT park complexes in Hinjewadi Phase I-IV and Kharadi EON Free Zone (50-200 guards per campus), manufacturing plants in Chakan and MIDC Bhosari (24/7 gate management), residential societies in Baner, Wakad, and Kothrud, commercial offices, hospitals, and educational institutions. Any agency must hold a valid PSARA licence. You may also need <a href="/payroll-services/pune">Payroll Services in Pune</a> for your office staff.</p><p>Under the Contract Labour Act 1970, the principal employer must obtain Form V registration for 20+ contract guards. The agency needs a contractor licence. Under Section 7A EPF Act, if the agency fails to deposit PF, the principal employer is directly liable.</p><p>Under Code on Wages 2019 (effective November 2025), basic pay must be 50% of total wages. Combined with Maharashtra minimum wage notifications for security guards by category (unarmed, armed, supervisor), wage compliance becomes critical.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Shift-Based Wage Computation</td><td>8-hour and 12-hour shift rosters across day, evening, night. Overtime at double rate. Night shift allowance. Multi-site Pune deployments</td></tr><tr><td>Muster Roll (Form XVI) Processing</td><td>Site-wise daily attendance converted to payroll. Guard-wise shift, OT, leave tracked across 20-50 deployment sites</td></tr><tr><td>EPF and ESIC Compliance</td><td>Monthly ECR by 15th. ESIC IP for new guards. Principal employer PF code coordination. Related: <a href="/payroll-services/pune">Payroll Services in Pune</a></td></tr><tr><td>Minimum Wage Compliance</td><td>Maharashtra notifications for unarmed, armed, supervisor categories. Auto-updated within 48 hours of revision</td></tr><tr><td>Maharashtra PT (PTRC/PTEC)</td><td>Monthly deduction per slabs on GRAS portal. PTEC Rs 2,500/year for agency directors</td></tr><tr><td>TDS on Guard Salaries</td><td>Section 192 where applicable. Quarterly Form 24Q. Year-end Form 16</td></tr><tr><td>Principal Employer Reports</td><td>Site-wise payroll reports, PF/ESIC challans, muster rolls for Section 7A liability protection</td></tr><tr><td>Guard Board and PSARA Docs</td><td>Wage registers, attendance records, training documentation per PSARA and Guard Board requirements</td></tr><tr><td>Full and Final Settlement</td><td>Gratuity (5+ years), leave encashment, PF transfer for exiting guards. Critical at 30-50% annual attrition</td></tr>

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
            <h2 class="section-title">How Security Agency Payroll Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to Maharashtra Guard Board, EPFO, or Labour Commissioner required - Patron's Pune office at Wagholi handles all registrations, filings, and liaison. Walk-in available for agency owners.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Share Agency and Deployment Data with Patron's Pune Office</h3><p class="step-description">Submit your PSARA licence, Maharashtra Guard Board registration or exemption certificate, deployment site list with guard strength and shift pattern, and guard master data (name, Aadhaar, PAN, skill category, base wage) to Patron's Pune office at Wagholi. For agencies deploying across Hinjewadi IT parks, Chakan factories, and Baner residential societies, we configure site-wise payroll segregation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PSARA Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sites Mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="80" height="12" rx="3" fill="#E8712C" opacity="0.15"/><text x="60" y="31" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="700">PSARA Licence</text><line x1="20" y1="42" x2="100" y2="42" stroke="#14365F" stroke-width="0.8"/><rect x="20" y="48" width="35" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="54" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Sites</text><rect x="65" y="48" width="35" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="54" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Guards</text></svg></div><span class="illustration-label">Onboarding Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Configure Shift Rosters and Wage Structures</h3><p class="step-description">Patron sets up shift configurations per deployment site - 8-hour three-shift rotation for IT parks, 12-hour two-shift for residential societies, and 24-hour single guard posts. Base wages verified against Maharashtra minimum wage notifications for security guards (unarmed, armed, supervisor). Overtime at double rate. Code on Wages 50% basic rule applied to all guard CTC structures.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shifts Configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Min Wages Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Shift Config</text><line x1="20" y1="30" x2="100" y2="30" stroke="#14365F" stroke-width="0.8"/><rect x="20" y="35" width="25" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="32" y="47" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Day</text><rect x="48" y="35" width="25" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="47" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Eve</text><rect x="76" y="35" width="25" height="18" rx="3" fill="#E8712C" opacity="0.2" stroke="#E8712C" stroke-width="0.8"/><text x="88" y="47" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Night</text><text x="60" y="72" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">OT at 2x auto</text></svg></div><span class="illustration-label">Config Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Process Monthly Payroll from Muster Rolls</h3><p class="step-description">On receiving site-wise muster rolls (Form XVI), Patron computes gross wages including base pay, shift differential, overtime, and allowances. Deductions include EPF (12% + 12%), ESIC (0.75% + 3.25% for guards up to Rs 21,000), Maharashtra PT, TDS where applicable, and permitted recoveries. Wages computed per guard per site for principal employer billing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-Guard Per-Site</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OT at Double Rate</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Muster to Wages</text><line x1="20" y1="28" x2="100" y2="28" stroke="#14365F" stroke-width="0.8"/><text x="25" y="40" font-size="6" fill="#14365F" font-family="Arial">Base + Shift Diff</text><text x="25" y="50" font-size="6" fill="#14365F" font-family="Arial">+ OT at 2x</text><text x="25" y="60" font-size="6" fill="#14365F" font-family="Arial">- EPF/ESIC/PT/TDS</text><line x1="20" y1="68" x2="100" y2="68" stroke="#14365F" stroke-width="0.8"/><text x="60" y="80" font-size="7" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">= Net Wages</text></svg></div><span class="illustration-label">Payroll Done</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Statutory Returns and Deposit Contributions</h3><p class="step-description">EPF ECR filed by 15th with guard-wise breakup. ESIC by 15th. Maharashtra PTRC on GRAS portal by 15th per Feb 2026 notification. TDS by 7th. ECR and ESIC challans tagged site-wise for principal employer verification. Wages disbursed within 7 days per Payment of Wages Act. Related: <a href="#">Professional Tax Registration</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPF/ESIC by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Site-Wise Tags</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="42" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="80" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="22" y="32" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">EPF</text><text x="60" y="32" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">ESIC</text><text x="97" y="32" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">PT</text><path d="M18 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M55 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M93 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><text x="60" y="82" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial">Filed by 15th</text></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Generate Site-Wise Reports for Principal Employer Audits</h3><p class="step-description">Deployment-site-wise payroll reports showing guard strength, total wages, PF/ESIC contributions, and compliance status. Reports shared with principal employers (IT companies in Hinjewadi, housing societies in Baner, factories in Chakan) to protect from Section 7A liability. Muster roll copies, wage registers, and ECR challans packaged per site.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S7A Protection</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-Site Packages</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="15" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="32" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Site Reports</text><line x1="30" y1="45" x2="90" y2="45" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="59" x2="85" y2="59" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="70" y="65" width="20" height="8" rx="4" fill="#10B981" opacity="0.3"/><text x="80" y="71" font-size="5" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">Sent</text></svg></div><span class="illustration-label">Reports Delivered</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Annual Compliance and PSARA Renewal Documentation</h3><p class="step-description">Form 16 for applicable guards, annual PF and ESIC returns, consolidated wage registers per PSARA format, training records per PSARA requirements, and Maharashtra Guard Board compliance documentation. Patron coordinates with statutory auditor. Related: <a href="/statutory-audit">Statutory Audit</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PSARA Docs Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit Registers</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="35" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="25" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Form 16</text><rect x="65" y="10" width="35" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="25" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">PSARA</text><rect x="35" y="50" width="50" height="25" rx="4" fill="#E8712C" opacity="0.15"/><text x="60" y="65" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Audit Ready</text></svg></div><span class="illustration-label">Year-End Done</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Security Agency Payroll</h2>
            <div class="content-text">
                
                <ul><li><strong>PSARA Licence:</strong> Valid state licence from Maharashtra Home Department</li><li><strong>Guard Board Registration/Exemption:</strong> Under Maharashtra Private Security Guards Act 1981</li><li><strong>Guard Master Data:</strong> Name, Aadhaar, PAN, DOB, DOJ, skill category, base wage, deployment site</li><li><strong>Site-Wise Muster Rolls (Form XVI):</strong> Daily attendance per deployment site with duty hours, shift, overtime, leave</li><li><strong>EPF/ESIC Registration:</strong> Agency PF code and ESIC number. Principal employer codes if required</li><li><strong>Deployment Site Contracts:</strong> Agreements specifying guard strength, shift pattern, billing structure</li><li><strong>Maharashtra PTRC Registration:</strong> 12-digit TIN from GRAS portal</li><li><strong>Police Verification Certificates:</strong> For all deployed guards per PSARA requirements</li></ul><p style="margin-top:16px;"><strong>Pune tip:</strong> For agencies deploying guards across 20+ residential societies in Baner and Wakad, Patron provides a bulk muster roll upload template that consolidates attendance from multiple sites into a single payroll cycle.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Security Agency Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Site Muster Roll Consolidation</td><td>30-50 sites with different formats (digital/handwritten). Consolidating into accurate payroll is the biggest operational challenge</td><td>Standardised formats across all sites with bulk upload into unified payroll system</td></tr><tr><td>Guard Attrition and F&amp;F</td><td>30-50% annual attrition; 15-25 F&amp;F settlements monthly for 500-guard agencies</td><td>Automated F&amp;F processing as part of regular payroll cycle</td></tr><tr><td>Minimum Wage Compliance</td><td>Separate Maharashtra rates for unarmed, armed, supervisor with periodic revisions</td><td>Auto-updated within 48 hours of Labour Department notification</td></tr><tr><td>Principal Employer PF Disputes</td><td>Hinjewadi IT companies and Chakan factories demand monthly ECR proof; delays cause contract termination risk</td><td>Site-wise ECR challans generated automatically for principal employer sharing</td></tr><tr><td>12-Hour Shift Overtime</td><td>Residential societies prefer 12-hour shifts; agencies skip overtime at double rate creating Payment of Wages violations</td><td>Auto overtime computation for both 8-hour and 12-hour patterns per law</td></tr>

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
            <h2 class="section-title">Fees for Security Agency Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll + Statutory (up to 50 guards)</td><td>Rs 5,000 - Rs 8,000/month</td></tr><tr><td>Payroll + Statutory (51-200 guards)</td><td>Rs 8,000 - Rs 18,000/month</td></tr><tr><td>Payroll + Statutory (201-500 guards)</td><td>Rs 18,000 - Rs 35,000/month</td></tr><tr><td>Payroll + Statutory (501-1000 guards)</td><td>Rs 35,000 - Rs 60,000/month</td></tr><tr><td>Guard Board Compliance (annual)</td><td>Rs 5,000 - Rs 10,000</td></tr><tr><td>PSARA Renewal Documentation</td><td>Rs 8,000 - Rs 15,000 per cycle</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Security Agency Payroll in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20security%20guard%20payroll%20in%20Pune.%20Please%20share%20a%20quote." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Security Agency Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Agency Data and Site Onboarding</td><td>Day 1-4</td></tr><tr><td>Shift and Wage Configuration</td><td>Day 5-7</td></tr><tr><td>First Payroll Cycle</td><td>Day 8-10</td></tr><tr><td>Statutory Filing</td><td>TDS by 7th; PF/ESIC/PTRC by 15th</td></tr><tr><td>Principal Employer Reports</td><td>Monthly (site-wise compliance packages)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Note:</strong> Small agencies with 50-100 guards are set up within 7 working days. Large agencies with 500+ guards across 30+ sites may require 10-12 working days for initial configuration.</p>

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
            <h2 class="section-title">Why Choose Patron for Security Agency Payroll in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Near Pune Deployment Zones</h3><p class="feature-text">RTC Silver, Wagholi - serving agencies across Hinjewadi, Kharadi, Baner, Wakad, Chakan, MIDC Bhosari, and PCMC. Walk-in and site visits.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Security-Specific Payroll</h3><p class="feature-text">PSARA muster roll processing, shift differential, Guard Board documentation, principal employer compliance reports - all bundled under one engagement.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Zero-Penalty Filing</h3><p class="feature-text">TDS by 7th. EPF/ESIC by 15th. PTRC by 15th per Feb 2026 notification. Wages within 7 days. All deadlines tracked.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Section 7A Protection</h3><p class="feature-text">Site-wise ECR challans and compliance packages generated for every principal employer. Protects both agency and client from PF liability.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years. 50,000+ documents filed. Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">From Rs 5,000/month</h3><p class="feature-text">50 guards included. Shift processing and statutory compliance bundled. Guard Board and PSARA documentation available.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune's Security Industry</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"Patron's payroll team handles 200+ employees without a single error month on month."</em> - HR Head, IT Company, Gurugram</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and hundreds of Pune-based companies. 4 offices across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Professional Security Agency Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>In-House (Agency Office)</th><th>Patron Professional Service</th></tr></thead>
                    <tbody>
                        <tr><td>Muster Roll Processing</td><td>Manual Excel; errors across 20+ sites</td><td>Bulk upload; automated site consolidation</td></tr><tr><td>Overtime Computation</td><td>Frequently missed for 12-hour shifts</td><td>Auto-computed at double rate per law</td></tr><tr><td>PF/ESIC Filing</td><td>Delayed; principal employer complaints</td><td>Zero-penalty; site-wise ECR packages</td></tr><tr><td>Minimum Wage</td><td>Revisions missed; underpayment risk</td><td>48-hour update on notifications</td></tr><tr><td>PSARA Documentation</td><td>Scattered records across sites</td><td>Centralised audit-ready documentation</td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="/payroll-services-for-security-agencies">Payroll for Security Agencies in India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="/payroll-services/pune">Payroll Services in Pune</a></li><li><a href="/accounting-services/pune">Accounting Services in Pune</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="#">Professional Tax Registration</a></li><li><a href="/shop-act-registration">Shop Act Registration</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/gst-registration">GST Registration</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Security Agency Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>PSARA 2005:</strong> Mandatory licence for all security agencies. State-specific from Maharashtra Home Department. Guards need 100 hours classroom + 60 hours field training. Police verification mandatory. Source: <a href="https://www.maharashtra.gov.in/" target="_blank" rel="noopener">maharashtra.gov.in</a></p><p><strong>Maharashtra Private Security Guards Act 1981:</strong> Guard Board registration or exemption required. Regulates wages, working hours, and welfare for guards.</p><p><strong>EPF Act 1952:</strong> 12% + 12% for 20+ employees. ECR by 15th. Section 7A: principal employer liable if agency defaults.</p><p><strong>ESIC Act 1948:</strong> 3.25% + 0.75% for guards up to Rs 21,000/month (covers vast majority). Medical and injury benefits.</p><p><strong>Contract Labour Act 1970:</strong> Form V for principal employer (20+ guards). Contractor licence for agency. Muster rolls (Form XVI).</p><p><strong>Payment of Wages Act 1936:</strong> Wages within 7 days. No unauthorised deductions. Penalty Rs 7,500.</p><p><strong>Maharashtra PT Act 1975:</strong> PTRC mandatory. Due 15th per Feb 2026 notification. PTEC Rs 2,500/year.</p><p><strong>Code on Wages 2019:</strong> Basic pay 50% of CTC from Nov 2025. Overtime at double rate beyond 8 hours/day.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Security Agency Payroll in Pune</h2>
                    <p class="faq-expanded__lead">Answers about PSARA compliance, guard shift payroll, PF/ESIC, minimum wages, and principal employer liability for Pune security agencies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Security Agency Payroll in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles security agency payroll compliance in Pune?</h3>
                        <div class="faq-expanded__a"><p>The Maharashtra Security Guard Board and PSARA Controlling Authority oversee agency licensing and guard welfare. EPFO Regional Office Pune handles PF. ESIC Regional Office Pune manages ESI. Labour Commissioner Pune monitors wage payment and Contract Labour Act compliance. GRAS portal handles Maharashtra PT. Patron's Pune office at Wagholi coordinates with all authorities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get security agency payroll services done online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides fully digital payroll for Pune security agencies. Muster rolls uploaded via secure portal or structured Excel templates. All statutory filings completed online. Walk-in at Wagholi office available for agency owners who prefer in-person discussion on PSARA compliance or principal employer reporting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the security agency payroll fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>Fees start from Rs 5,000 per month for up to 50 guards including shift-based wage computation and statutory compliance. For agencies with 200+ guards across 20+ sites, fees range from Rs 18,000 to Rs 35,000/month. PSARA renewal documentation support from Rs 8,000 per cycle.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does security agency payroll setup take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Standard setup takes 7-10 working days including PSARA verification, deployment site mapping, guard data onboarding, shift configuration, PF/ESIC/PT setup, and minimum wage verification. First payroll cycle processes within 3 working days of muster roll submission. For 500+ guard agencies, allow 10-12 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PSARA licence needed for payroll compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. PSARA licence is the foundational requirement for operating a private security agency in India. Without a valid licence, the agency cannot legally deploy guards or process payroll. PSARA compliance requires guard training records, police verification documentation, and wage registers aligned with payroll records.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are minimum wages for security guards in Maharashtra 2026?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra notifies minimum wages for security guards under Scheduled Employment with separate rates for unarmed guards, armed guards, and supervisors. Rates are revised periodically and may vary by zone. All agencies must ensure guard wages meet or exceed prescribed minimums. Patron monitors Labour Department notifications.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Who is liable for PF - security agency or principal employer?</h3>
                        <div class="faq-expanded__a"><p>Under Section 7A of the EPF Act 1952, the principal employer (company, society, factory deploying contract guards) is directly liable if the security agency fails to deposit PF. Patron generates site-wise ECR challans and compliance reports that agencies share with principal employers as proof of deposit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to manage shift-based payroll for 24/7 security deployments?</h3>
                        <div class="faq-expanded__a"><p>Patron configures both 8-hour three-shift and 12-hour two-shift rosters per deployment site. Overtime beyond 8 hours/day or 48 hours/week is computed automatically at double the ordinary wage rate. Night shift allowances and weekly-off duty premiums applied per agency policy. Multi-site consolidation ensures accuracy across all sites.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein security guard ka payroll kitne mein hota hai?</strong> Rs 5,000 per month se start. 50 guards tak. Bade agencies ke liye Rs 18,000-35,000.</p><p><strong>Security agency ko PF dena zaroori hai kya?</strong> Haan. 20 se zyada guards hain toh EPF mandatory hai. Agar agency nahi deti toh principal employer (company/society) ko pay karna padta hai.</p><p><strong>12-hour shift mein overtime dena padta hai kya?</strong> Haan. 8 ghante se zyada kaam ka double rate mein overtime zaroori hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk PSARA Suspension or PF Default</h2>
            <div class="content-text">
                
                <p>Every PSARA-licensed agency must maintain active PF/ESIC registrations, deduct Maharashtra PT, pay wages within 7 days, and comply with minimum wages. EPF by 15th - delays attract damages up to 100%. PTRC by 15th per Feb 2026 notification. Principal employers can terminate contracts and demand compliance proof. PSARA licence can be suspended for labour law violations. With 30-50% annual attrition and multi-site deployments, every payroll cycle without professional support is penalty exposure multiplied across every site.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20security%20agency%20payroll%20in%20Pune" target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Security Agency Payroll in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Payroll services for security agencies in Pune demand shift-based wage computation, multi-site muster roll consolidation, PSARA and Guard Board compliance, principal employer PF liability coordination, and Maharashtra minimum wage tracking.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers integrated security agency payroll, shift roster management, PSARA documentation, and principal employer compliance reporting for agencies across Pune and PCMC.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">15+ years. 10,000+ businesses. 4.9 Google rating. CAs, CSs, and compliance professionals. Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20security%20guard%20payroll%20in%20Pune.%20Please%20share%20a%20quote." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Security%20Agency%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0AI%20need%20security%20agency%20payroll%20in%20Pune.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides security agency payroll in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local security agency payroll</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-security-agencies/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-security-agencies/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services-for-security-agencies/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Complete compliance for Pune security businesses</div><div class="pa-cross-grid"><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers payroll services for security agencies in Pune. PSARA requirements, minimum wages, Guard Board rules, and PT notifications verified against latest updates. Freshness Tier 1.</p>
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
