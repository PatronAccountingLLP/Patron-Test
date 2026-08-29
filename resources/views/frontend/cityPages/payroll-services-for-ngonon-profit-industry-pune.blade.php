
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
    <title>NGO & Non-Profit Payroll in Pune - FCRA, 12A & TDS</title>
    <meta name="description" content="CA-assisted payroll for NGOs and trusts in Pune. PF, ESIC, TDS, FCRA salary reporting, and 12AB compliance for non-profits. Serving Sadashiv Peth, Kothrud, Deccan charities. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-ngonon-profit-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO & Non-Profit Payroll in Pune - FCRA, 12A & TDS">
    <meta property="og:description" content="CA-assisted payroll for NGOs and trusts in Pune. PF, ESIC, TDS, FCRA salary reporting, and 12AB compliance for non-profits. Serving Sadashiv Peth, Kothrud, Deccan charities. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-ngonon-profit-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO & Non-Profit Payroll in Pune - FCRA, 12A & TDS">
    <meta name="twitter:description" content="CA-assisted payroll for NGOs and trusts in Pune. PF, ESIC, TDS, FCRA salary reporting, and 12AB compliance for non-profits. Serving Sadashiv Peth, Kothrud, Deccan charities. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Payroll Services for Non-Profit NGO in Pune",
      "description": "CA-assisted payroll for NGOs and trusts in Pune. PF, ESIC, TDS, FCRA salary reporting, and 12AB compliance for non-profits. Serving Sadashiv Peth, Kothrud, Deccan charities. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry/pune",
      "serviceType": "Payroll Services for Non-Profit NGO in Pune",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry/pune",
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
          "name": "NGO Payroll Services in India",
          "item": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Payroll Services for Non-Profit NGO in Pune",
          "item": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles NGO payroll compliance in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Joint Charity Commissioner Pune at Dhole Patil Marg opposite Wadia College oversees public trust compliance under the Bombay Public Trusts Act. EPFO Regional Office Pune handles PF. Income Tax Office Pune manages 12AB 80G and ITR-7. GRAS portal handles Maharashtra PT. Patron Pune office coordinates with all authorities."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get NGO payroll services done online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron provides fully digital payroll processing for Pune non-profits. Employee data and attendance submitted via secure portal. All statutory filings completed online. Walk-in consultations at Wagholi office available for NGO directors and trustees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the NGO payroll fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-profit payroll fees start from Rs 5,000 per month for up to 15 employees including salary processing and statutory compliance. For 50 plus employees with multi-donor allocation fees range from Rs 15,000 to Rs 25,000. FCRA reporting add-on from Rs 3,000 per month."
          }
        },
        {
          "@type": "Question",
          "name": "How long does NGO payroll setup take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard setup takes 8-12 working days including trust document review, donor grant mapping, employee data onboarding, PF ESIC PT configuration, and FCRA bank account verification. First payroll cycle processes within 3 working days of attendance submission."
          }
        },
        {
          "@type": "Question",
          "name": "Is Maharashtra Professional Tax mandatory for NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every non-profit employing staff in Pune must obtain PTRC under Maharashtra PT Act 1975. Professional tax is deducted from employee salaries per applicable slabs. Trustees and directors need PTEC at Rs 2,500 per year. Tax-exempt status under 12AB does not exempt from PT."
          }
        },
        {
          "@type": "Question",
          "name": "Does Section 12AB affect NGO payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes indirectly but critically. Under Section 11, NGOs registered under 12AB must apply at least 85 percent of income to charitable purposes. Salary costs are the largest expenditure. If payroll costs are not accurately tracked the 85 percent application test may fail making shortfall taxable."
          }
        },
        {
          "@type": "Question",
          "name": "How to report FCRA-funded salaries?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Salaries from FCRA foreign contributions must be paid through the designated FCRA bank account and reported in Form FC-4 due annually by 30 June. Administrative expenses including salaries must not exceed 20 percent of total FCRA receipts under the 2020 amendment without prior MHA permission."
          }
        },
        {
          "@type": "Question",
          "name": "How to allocate salaries to donor grants in Pune NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron configures each employee salary split across multiple donor grants based on time allocation or project assignment. Monthly reports show donor-wise costs with cumulative tracking against grant budgets. Utilisation certificates generated per donor format eliminating manual reconciliation. Quick Answers Pune mein NGO ka payroll kitne mein hota hai? Rs 5,000 per month se start hota hai 15 employees tak. Donor reporting add-on Rs 3,000 se. NGO ko bhi PF aur ESIC dena padta hai kya? Haan. 20 se zyada employees hain toh EPF mandatory hai. ESIC bhi applicable hai Rs 21,000 tak kamane wale staff ke liye. FCRA salary par 20% limit kya hai? FCRA foreign contribution se salary kharcha 20% se zyada nahi ho sakta bina MHA permission ke. Monthly tracking zaroori hai."
          }
        }
      ]
    }
  ]
}</script>
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
                        Payroll Services for Non-Profit and NGO in Pune: FCRA, 12AB, and Trust Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trust deed or registration certificate, 12AB certificate, 80G certificate, FCRA registration, PAN, TAN, employee master data, donor grant agreements</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000 per month for up to 15 NGO employees (payroll + statutory compliance)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Public charitable trusts, registered societies, Section 8 companies, and FCRA-registered NGOs with salaried staff in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Monthly payroll processed within 3 working days; FCRA utilisation data generated quarterly</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20non-profit%20payroll%20in%20Pune.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20payroll%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                            ['value' => 'payroll-services-for-non-profit-ngo/pune', 'label' => 'NGO Payroll in Pune', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services/pune', 'label' => 'Payroll Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services/pune', 'label' => 'Accounting Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit/pune', 'label' => 'Statutory Audit in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/pune', 'label' => 'GST Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/pune', 'label' => 'Income Tax Return in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/pune', 'label' => 'Pvt Ltd Registration in Pune', 'selected' => false, 'disabled' => false],
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handles donor-wise salary splitting for our 5 active grants seamlessly. The utilisation certificates are now generated automatically instead of our finance team spending 3 days on Excel every quarter.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Education Trust, Kothrud</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">The FCRA 20% salary cap was a compliance risk we didn't even know about. Patron flagged it in month 2 and restructured our cost allocation before we hit the threshold.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Programme Head, FCRA NGO, Sadashiv Peth</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron's payroll team handles 200+ employees without a single error month on month. Our Schedule IX-C and ITR-7 now have perfectly reconciled salary data.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trustee, Healthcare Charity, Deccan</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We were classifying some field workers as volunteers. Patron identified the compliance risk and helped us restructure before EPFO noticed. Saved us from significant penalties.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Manager, Community Organisation, Hadapsar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From education trusts in Kothrud to FCRA-registered NGOs in Sadashiv Peth - Pune non-profits trust Patron for compliant, donor-ready payroll.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
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
            <h2 class="section-title">Payroll Services for NGOs and Non-Profits in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Payroll Services at a Glance</strong></p>
                    <p>Payroll services for non-profits and NGOs in Pune cover salary processing, statutory deductions (PF, ESIC, Maharashtra PT, TDS), donor-wise cost allocation, FCRA utilisation reporting, and Bombay Public Trusts Act compliance. Essential for charitable trusts, societies, and Section 8 companies with salaried programme staff, field workers, and administrative teams across Pune.</p>
                </div>
                <p>Pune is home to one of Maharashtra's most active non-profit ecosystems, with hundreds of public charitable trusts, registered societies, and Section 8 companies operating across education, healthcare, child welfare, women's empowerment, and rural development. The Joint Charity Commissioner's office at 45/2 Late B.S. Dhole Patil Marg oversees all public trusts in Pune division. Learn more about <a href="/ngo-and-non-profit-accounting-services">NGO payroll services across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Acts</td><td>EPF Act 1952, ESIC Act 1948, IT Act (Sec 192, 12AB, 80G), Maharashtra PT Act 1975, Bombay Public Trusts Act 1950, FCRA 2010</td></tr>
                        <tr><td>Applicable To</td><td>Public trusts, registered societies, Section 8 companies, FCRA-registered NGOs with salaried staff in Pune</td></tr>
                        <tr><td>Timeline</td><td>Payroll within 3 days; PF/ESIC by 15th; TDS by 7th; ITR-7 by 31 Oct; FC-4 by 30 Jun; Charity Commissioner by 30 Sep</td></tr>
                        <tr><td>Cost Starting From</td><td>Rs 5,000/month for up to 15 employees</td></tr>
                        <tr><td>Penalties</td><td>Loss of 12AB/80G for non-filing; FCRA cancellation; Bombay Public Trusts Act penalties; EPF damages up to 100%</td></tr>
                        <tr><td>Key Portals</td><td>IT e-filing (ITR-7), FCRA Online (fcraonline.nic.in), EPFO Portal, GRAS (mahagst.gov.in), Charity Commissioner Portal</td></tr>
                        <tr><td>Jurisdictional Office</td><td>Joint Charity Commissioner Pune (Dhole Patil Marg); Income Tax Office Pune; EPFO Regional Office Pune</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Under the Income Tax Act, non-profits registered under Section 12AB must apply at least 85% of their income to charitable activities - making payroll cost management a critical compliance requirement. Every NGO with salaried employees is subject to PF, ESIC, Maharashtra PT, and TDS obligations. Patron Accounting's Pune office at RTC Silver, Wagholi handles the complete non-profit payroll lifecycle including donor-wise cost allocation and FCRA reporting.</p>
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
                <h2 class="section-title">What Is Payroll Services for Non-Profit / NGO?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services for non-profit and NGO organisations is the end-to-end processing of employee compensation, statutory deductions, donor-wise cost allocation, and regulatory reporting for charitable trusts, societies, and Section 8 companies, governed by the Income Tax Act (Sections 11, 12, 12AB), FCRA 2010, and applicable labour laws.</p>
                    <p>NGO payroll carries unique complexities. A non-profit may employ programme managers, field workers, counsellors, teachers, and admin staff - each funded by different donors with different grant periods. A single coordinator's salary may be split across CSR, government, and FCRA grants, each requiring separate utilisation certificates. Under Section 11, at least 85% of income must be applied to charitable purposes - if salary costs push application below 85%, the excess becomes taxable.</p>
                    <p>For Pune trusts registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950, annual audited accounts must be filed alongside Schedule IX-C. FCRA-registered Pune NGOs must submit Form FC-4 by 30 June. Patron's CA team structures NGO payroll to serve both statutory compliance and donor reporting simultaneously.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Payroll:</strong></p>
                    <ul>
                        <li><strong>Section 12AB:</strong> Tax exemption registration for charitable trusts/NGOs. Valid 5 years. Requires 85% application of income to charitable purposes.</li>
                        <li><strong>FCRA 2010:</strong> Foreign Contribution Regulation Act. Separate bank accounts. Admin expenses (including salaries) capped at 20% of FCRA receipts. FC-4 by 30 June.</li>
                        <li><strong>Bombay Public Trusts Act 1950:</strong> Maharashtra law for public trusts. Schedule IX-C annual filing with Joint Charity Commissioner Pune.</li>
                        <li><strong>Donor-Wise Allocation:</strong> Splitting each employee's salary across multiple grants based on time allocation or project assignment.</li>
                        <li><strong>85% Application Rule:</strong> Under Section 11, NGOs must apply 85% of income to charitable purposes. Salary costs are a key component.</li>
                        <li><strong>Form FC-4:</strong> Annual return for FCRA-registered NGOs reporting foreign contribution utilisation including salary expenditure.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Non-Profit</span>
                        <strong>Pune NGOs</strong>
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
            <h2 class="section-title">Who Needs NGO Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Public Charitable Trusts (Sadashiv Peth, Kothrud, Deccan):</strong> Education trusts, healthcare charities, community development organisations registered under the Bombay Public Trusts Act 1950 with the Joint Charity Commissioner Pune. Must file Schedule IX-C and maintain audited accounts aligned with payroll data.</p>
                <p><strong>FCRA-Registered NGOs:</strong> Organisations receiving foreign contributions must maintain separate FCRA bank accounts. Salary expenditure from FCRA funds must stay within 20% cap. Form FC-4 due annually by 30 June. Patron monitors FCRA salary utilisation monthly.</p>
                <p><strong>Section 8 Companies (Baner, Koregaon Park):</strong> Dual compliance with RoC Pune (Companies Act - AOC-4, MGT-7) and Income Tax (12AB/80G). Many Pune Section 8 companies also hold CSR-1 registration for receiving CSR funds.</p>
                <p><strong>Registered Societies:</strong> Membership organisations and welfare societies under the Societies Registration Act. Must comply with PF, ESIC, PT, and TDS like any employer.</p>
                <p>All non-profits with 20+ employees must register under the EPF Act. ESIC applies for staff earning up to Rs 21,000/month. <a href="/ngo-registration">NGO registration</a> is the first step for new organisations.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Salary Processing</td><td>Computing salaries for programme managers, field workers, counsellors, teachers, admin staff, and drivers. Handling project-based and grant-period-specific contracts</td></tr>
                        <tr><td>Donor-Wise Salary Cost Allocation</td><td>Splitting each employee's salary across multiple donor grants. Utilisation reports per donor with payroll cost breakdowns for CSR, government, and FCRA funds</td></tr>
                        <tr><td>EPF and ESIC Compliance</td><td>Monthly ECR filing, ESIC contribution by 15th, UAN activation. Managing compliance as NGOs cross the 20-employee PF threshold</td></tr>
                        <tr><td>TDS on Salary (Section 192)</td><td>Monthly TDS deposit by 7th. Quarterly Form 24Q. Year-end Form 16. Non-profit 12AB status does not exempt employee salary TDS</td></tr>
                        <tr><td>FCRA Salary Utilisation Reporting</td><td>Tracking FCRA-funded salaries. 20% admin expense cap monitoring. FC-4 salary data generation for annual filing by 30 June</td></tr>
                        <tr><td>Maharashtra Professional Tax</td><td>Monthly PTRC deduction per Maharashtra slabs on GRAS portal by 15th per Feb 2026 notification. PTEC Rs 2,500/year for trustees/directors</td></tr>
                        <tr><td>Bombay Public Trusts Act Filing</td><td>Schedule IX-C annual return preparation. Ensuring payroll data aligns with audited accounts submitted to Joint Charity Commissioner Pune</td></tr>
                        <tr><td>ITR-7 and Form 10B/10BB Coordination</td><td>Salary data for trust audit (Form 10B below Rs 5 crore, 10BB above). ITR-7 inputs. Form 10BD for 80G organisations. 85% application verification</td></tr>

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
            <h2 class="section-title">How NGO Payroll Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers the complete non-profit payroll lifecycle - from organisation data onboarding through donor configuration, monthly payroll processing, statutory filing, donor reporting, and annual compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Share Organisation and Staff Data with Patron's Pune Office</h3>
        <p class="step-description">Submit trust deed or registration certificate, 12AB and 80G certificates, FCRA registration (if applicable), PAN, TAN, and employee master data with each employee's donor/grant assignment. For trusts registered with the Joint Charity Commissioner at Dhole Patil Marg, provide the trust registration number. EPFO and ESIC codes required if active.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trust documents reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donor grants mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA status verified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="30" y="38" width="60" height="12" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><rect x="30" y="54" width="40" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="60" y="31" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Trust Deed</text><text x="60" y="47" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">12AB / 80G</text></svg></div>
            <span class="illustration-label">Data Onboarded</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Configure Donor-Wise Cost Allocation and Compliance Parameters</h3>
        <p class="step-description">Map each employee's salary to applicable donor grants - CSR funds, government schemes, domestic donations, and FCRA foreign contributions. For FCRA-funded positions, the 20% salary expenditure cap is flagged with alerts. CTC structures comply with Code on Wages (50% basic rule). Maharashtra PT slabs applied on GRAS portal.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donor splits configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA 20% cap monitored</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PT slabs applied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DONORS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="38" y="48" font-size="6" fill="#10B981" font-weight="600" text-anchor="start" font-family="Arial">CSR</text><text x="53" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="start" font-family="Arial">Govt</text><text x="70" y="48" font-size="6" fill="#E8712C" font-weight="600" text-anchor="start" font-family="Arial">FCRA</text></svg></div>
            <span class="illustration-label">Allocation Configured</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Process Monthly Payroll with All Deductions</h3>
        <p class="step-description">Compute gross salary, deduct EPF (12%+12%), ESIC (if applicable), Maharashtra PT, TDS under Section 192, and Labour Welfare Fund. Each salary payment tagged to funding source (domestic/FCRA/CSR/government). FCRA-funded salaries routed through designated FCRA bank account. Joint Charity Commissioner accounting transparency maintained.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All deductions computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donor-tagged payments</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA bank routing done</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><line x1="35" y1="38" x2="85" y2="38" stroke="#F5A623" stroke-width="1.5"/><text x="42" y="52" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">EPF</text><text x="55" y="52" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">PT</text><text x="68" y="52" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">TDS</text><text x="81" y="52" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ESI</text></svg></div>
            <span class="illustration-label">Payroll Processed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File Statutory Returns and Deposit Contributions</h3>
        <p class="step-description">EPF ECR by 15th via EPFO Unified Portal. ESIC by 15th. TDS by 7th. Maharashtra PTRC on GRAS portal by 15th per February 2026 notification. Quarterly Form 24Q on TRACES. Zero-penalty filing across all statutory obligations for Pune NGOs.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESIC by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS by 7th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PTRC by 15th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M53 35l4 4 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Filed</text></svg></div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Generate Donor Reports and FCRA Utilisation Data</h3>
        <p class="step-description">Donor-wise salary cost reports at month-end and quarter-end. For FCRA NGOs, salary utilisation summaries feeding directly into Form FC-4 annual return. For CSR-funded positions, utilisation certificates per project. Reports formatted to match requirements of major donors, government agencies, and FCRA authorities.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donor reports monthly</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-4 data generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSR utilisation ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="46" width="50" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="32" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Donor Report</text><text x="60" y="60" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">FCRA FC-4</text></svg></div>
            <span class="illustration-label">Reports Delivered</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Year-End Compliance - ITR-7, Audit, and Charity Commissioner Filing</h3>
        <p class="step-description">Form 16 for all employees, annual PF and ESIC returns, salary data for trust audit (Form 10B or 10BB), ITR-7 inputs, and Form 10BD for 80G organisations. Schedule IX-C filed with Joint Charity Commissioner Pune. AOC-4/MGT-7 for Section 8 companies with RoC Pune. 85% application test verified with payroll costs.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 for all staff</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule IX-C filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>85% test verified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="46" width="50" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="32" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITR-7 / 10B</text><text x="60" y="60" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Schedule IX-C</text></svg></div>
            <span class="illustration-label">Year Closed</span>
            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for NGO Payroll in Pune</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Trust Deed or Registration Certificate:</strong> Under Bombay Public Trusts Act 1950, Societies Registration Act 1860, or Companies Act 2013 Section 8.</li>
                    <li><strong>12AB and 80G Certificates:</strong> Income Tax registration for tax exemption and donor deduction eligibility. Renewal status must be current.</li>
                    <li><strong>FCRA Registration Certificate:</strong> If the NGO receives foreign contributions. Includes designated FCRA bank account details.</li>
                    <li><strong>PAN and TAN:</strong> PAN for the trust/society/Section 8 company. TAN for TDS deduction on employee salaries.</li>
                    <li><strong>Employee Master Data:</strong> Name, PAN, Aadhaar, DOB, DOJ, designation, department/project, donor grant assignment, salary structure.</li>
                    <li><strong>Donor Grant Agreements:</strong> MoUs or grant letters specifying salary budget allocation, reporting requirements, and grant period.</li>
                    <li><strong>EPF and ESIC Registration:</strong> If the NGO has 20+ employees (PF) or staff earning up to Rs 21,000 (ESIC).</li>
                    <li><strong>Maharashtra PTRC Registration:</strong> 12-digit TIN from GRAS portal for the NGO.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune-Specific Tip:</strong> For trusts registered with the Joint Charity Commissioner, ensure your trust registration number and latest Charity Commissioner annual return receipt are available. Patron verifies compliance status before configuring payroll to avoid any registration lapses.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common NGO Payroll Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Donor-Wise Salary Splitting</td><td>Multi-grant NGOs in Sadashiv Peth/Kothrud forced into manual Excel reconciliation</td><td>Automated multi-donor cost allocation with utilisation reports per donor format</td></tr>
                        <tr><td>FCRA 20% Salary Cap</td><td>Senior staff salaries push FCRA admin expenses above 20% mid-year; MHA permission needed</td><td>Monthly FCRA salary expenditure monitoring with early threshold breach alerts</td></tr>
                        <tr><td>85% Application Rule Pressure</td><td>If payroll + programme costs don't reach 85% of income, shortfall becomes taxable; 12AB at risk</td><td>Payroll costs factored into application percentage; structured to maximise compliance</td></tr>
                        <tr><td>Dual Filing - Charity Commissioner + IT</td><td>Different salary figures submitted to different authorities creates audit risk</td><td>Single source of payroll truth feeding both Schedule IX-C and ITR-7 filings simultaneously</td></tr>
                        <tr><td>Volunteer vs Employee Misclassification</td><td>Person receiving Rs 15,000 monthly with attendance = employee; triggers PF/ESIC/TDS defaults</td><td>Workforce classification review; correct treatment ensuring statutory compliance</td></tr>

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
            <h2 class="section-title">Fees for NGO Payroll Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll + Statutory (up to 15 employees)</td><td>Rs 5,000 - Rs 7,000/month</td></tr>
                        <tr><td>Payroll + Statutory (16-50 employees)</td><td>Rs 7,000 - Rs 15,000/month</td></tr>
                        <tr><td>Payroll + Statutory (51-100 employees)</td><td>Rs 15,000 - Rs 25,000/month</td></tr>
                        <tr><td>FCRA Utilisation Reporting (add-on)</td><td>Rs 3,000 - Rs 8,000/month</td></tr>
                        <tr><td>Charity Commissioner Filing (annual)</td><td>Rs 5,000 - Rs 10,000</td></tr>
                        <tr><td>ITR-7 + Form 10B/10BB Coordination (annual)</td><td>Rs 8,000 - Rs 15,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20non-profit%20payroll%20in%20Pune.%20Please%20share%20details%20and%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Payroll Timeline for Pune Non-Profits</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Organisation Data Onboarding</td><td>Day 1-4</td></tr>
                        <tr><td>Employee and Grant Configuration</td><td>Day 5-8</td></tr>
                        <tr><td>First Payroll Cycle</td><td>Day 9-12</td></tr>
                        <tr><td>Statutory Filing</td><td>TDS by 7th; PF/ESIC/PTRC by 15th</td></tr>
                        <tr><td>FCRA/Donor Reports</td><td>Monthly/Quarterly</td></tr>
                        <tr><td>Annual Compliance</td><td>ITR-7 by 31 Oct; FC-4 by 30 Jun; Charity Commissioner by 30 Sep</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> No visit to the Joint Charity Commissioner Pune, EPFO, or Income Tax Office required. Patron's Pune office at RTC Silver, Wagholi handles all registrations, filings, and liaison. Walk-in available for NGO directors, trustees, and programme managers across Sadashiv Peth, Kothrud, Deccan, Koregaon Park, and Hadapsar.</p>

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
            <h2 class="section-title">Why Choose Patron for NGO Payroll in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - serves NGOs across Sadashiv Peth, Kothrud, Deccan, Koregaon Park, Hadapsar, and PCMC. Walk-in consultations available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Integrated NGO Compliance</h3><p>Only Pune CA firm combining NGO-specific payroll with FCRA utilisation, donor-wise allocation, Bombay Public Trusts Act filing, and 12AB/80G compliance in one engagement.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Jurisdictional Familiarity</h3><p>Regular filings with Joint Charity Commissioner Pune, Income Tax Office (12AB/80G/ITR-7), EPFO Pune, and GRAS portal for Maharashtra PT.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years experience, 50,000+ documents filed, 4.9 Google rating. ISO 9001:2015 certified. From 5-staff community orgs to 100+ employee FCRA trusts.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Organisations Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune's non-profit sector with both in-person support and digital delivery. Trusted by Hyundai, Asian Paints, Bridgestone, and hundreds of organisations.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Professional NGO Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>Patron Professional Service</th><th>In-House (NGO Accountant)</th></tr></thead>
                    <tbody>
                        <tr><td>Donor Reporting</td><td>Automated multi-donor allocation with utilisation certificates</td><td>Manual Excel; errors in splitting</td></tr>
                        <tr><td>FCRA Compliance</td><td>Monthly 20% cap monitoring with early alerts</td><td>Often discovered late; MHA issues</td></tr>
                        <tr><td>Statutory Filing</td><td>Zero-penalty filing record across PF/TDS/PT</td><td>PF/TDS delays common</td></tr>
                        <tr><td>Audit Coordination</td><td>Single source feeding ITR-7, Charity Commissioner, and donors</td><td>Salary data inconsistent across filings</td></tr>
                        <tr><td>Volunteer Classification</td><td>Workforce review; correct classification ensuring compliance</td><td>Often misclassified; PF defaults</td></tr>

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
            <h2 class="section-title">Related Services for Pune Non-Profits</h2>
            <div class="content-text">
                
                <p>Non-profit organisations in Pune often need complementary services:</p>
                <ul>
                    <li><a href="/ngo-and-non-profit-accounting-services">NGO Payroll (India)</a> - National overview of non-profit payroll services.</li>
                    <li><a href="/ngo-registration">NGO Registration</a> - Trust, society, and Section 8 company registration.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - General payroll for all business types.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Form 10B/10BB audit for charitable trusts.</li>
                    <li><a href="#">Professional Tax Registration</a> - Maharashtra PTRC/PTEC.</li>
                    <li><a href="/gst-registration">GST Registration</a> - For NGOs with taxable activities.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Full accounting for non-profits.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for NGO Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p>
                <ul>
                    <li><strong>Income Tax Act - Section 12AB:</strong> Tax exemption registration. 85% income must be applied to charitable purposes. ITR-7 mandatory. Form 10B/10BB audit.</li>
                    <li><strong>FCRA 2010:</strong> Separate FCRA bank accounts. Salary from FCRA funds in FC-4 by 30 June. Admin expenses capped at 20% of FCRA receipts under 2020 amendment.</li>
                    <li><strong>Bombay Public Trusts Act 1950:</strong> Annual Schedule IX-C with audited accounts to Joint Charity Commissioner Pune. Property transactions need approval.</li>
                    <li><strong>EPF Act 1952:</strong> Mandatory for 20+ employees. 12%+12% on basic. ECR by 15th. Section 7A principal employer liability.</li>
                    <li><strong>ESIC Act 1948:</strong> For staff earning up to Rs 21,000/month. Employer 3.25%, employee 0.75%. Common for field and admin staff.</li>
                    <li><strong>Maharashtra PT Act 1975:</strong> PTRC mandatory for all NGOs with employees in Pune. PTEC Rs 2,500/year for trustees/directors. Due 15th per Feb 2026 notification.</li>
                    <li><strong>Code on Wages 2019:</strong> Effective Nov 2025. Basic pay minimum 50% of CTC even for non-profit employees.</li>
                </ul>
                <p style="margin-top:16px;"><strong>Key Penalties:</strong></p>
                <ul>
                    <li>Non-filing of ITR-7: <strong>Loss of 12AB/80G registration</strong> - all future income taxable</li>
                    <li>FCRA FC-4 non-filing: <strong>FCRA registration cancellation</strong></li>
                    <li>Late EPF: <strong>12% p.a. interest + damages up to 100%</strong></li>
                    <li>Bombay Public Trusts Act non-filing: <strong>Penalties and registration jeopardy</strong></li>
                    <li>TDS non-deduction: <strong>1.5%/month interest</strong> under Section 201(1A)</li>
                </ul>
                <p style="margin-top:16px;"><strong>External Authority:</strong> <a href="https://charity.maharashtra.gov.in/" target="_blank" rel="noopener">Maharashtra Charity Commissioner Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: NGO Payroll in Pune</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about non-profit payroll, FCRA salary reporting, 12AB compliance, donor allocation, and trust filing for Pune NGOs.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'NGO Payroll in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles NGO payroll compliance in Pune?</h3>
                        <div class="faq-expanded__a"><p>The Joint Charity Commissioner Pune at Dhole Patil Marg opposite Wadia College oversees public trust compliance under the Bombay Public Trusts Act. EPFO Regional Office Pune handles PF. Income Tax Office Pune manages 12AB 80G and ITR-7. GRAS portal handles Maharashtra PT. Patron Pune office coordinates with all authorities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get NGO payroll services done online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides fully digital payroll processing for Pune non-profits. Employee data and attendance submitted via secure portal. All statutory filings completed online. Walk-in consultations at Wagholi office available for NGO directors and trustees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the NGO payroll fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>Non-profit payroll fees start from Rs 5,000 per month for up to 15 employees including salary processing and statutory compliance. For 50 plus employees with multi-donor allocation fees range from Rs 15,000 to Rs 25,000. FCRA reporting add-on from Rs 3,000 per month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does NGO payroll setup take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Standard setup takes 8-12 working days including trust document review, donor grant mapping, employee data onboarding, PF ESIC PT configuration, and FCRA bank account verification. First payroll cycle processes within 3 working days of attendance submission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Maharashtra Professional Tax mandatory for NGOs?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every non-profit employing staff in Pune must obtain PTRC under Maharashtra PT Act 1975. Professional tax is deducted from employee salaries per applicable slabs. Trustees and directors need PTEC at Rs 2,500 per year. Tax-exempt status under 12AB does not exempt from PT.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does Section 12AB affect NGO payroll?</h3>
                        <div class="faq-expanded__a"><p>Yes indirectly but critically. Under Section 11, NGOs registered under 12AB must apply at least 85 percent of income to charitable purposes. Salary costs are the largest expenditure. If payroll costs are not accurately tracked the 85 percent application test may fail making shortfall taxable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How to report FCRA-funded salaries?</h3>
                        <div class="faq-expanded__a"><p>Salaries from FCRA foreign contributions must be paid through the designated FCRA bank account and reported in Form FC-4 due annually by 30 June. Administrative expenses including salaries must not exceed 20 percent of total FCRA receipts under the 2020 amendment without prior MHA permission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to allocate salaries to donor grants in Pune NGOs?</h3>
                        <div class="faq-expanded__a"><p>Patron configures each employee salary split across multiple donor grants based on time allocation or project assignment. Monthly reports show donor-wise costs with cumulative tracking against grant budgets. Utilisation certificates generated per donor format eliminating manual reconciliation.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein NGO ka payroll kitne mein hota hai?</strong> Rs 5,000 per month se start hota hai 15 employees tak. Donor reporting add-on Rs 3,000 se.</p>
                <p><strong>NGO ko bhi PF aur ESIC dena padta hai kya?</strong> Haan. 20 se zyada employees hain toh EPF mandatory hai. ESIC bhi applicable hai Rs 21,000 tak kamane wale staff ke liye.</p>
                <p><strong>FCRA salary par 20% limit kya hai?</strong> FCRA foreign contribution se salary kharcha 20% se zyada nahi ho sakta bina MHA permission ke. Monthly tracking zaroori hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Missed Deadline Threatens Your NGO Registration - Act Now</h2>
            <div class="content-text">
                
                <p>Loss of 12AB registration makes all future income taxable. FCRA registration cancellation stops foreign donations permanently. Bombay Public Trusts Act non-filing jeopardises trust registration. EPF damages can reach 100% of arrears. For Pune NGOs, every compliance deadline missed is a direct threat to the organisation's ability to receive tax-exempt donations and foreign contributions.</p>
                <p style="margin-top:16px;"><strong>Get started with NGO payroll - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20payroll%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with NGO Payroll in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Payroll services for non-profit and NGO organisations in Pune demand a provider that understands the interplay between statutory employer obligations and the unique compliance requirements of charitable trusts, including 12AB, 80G, Bombay Public Trusts Act, and FCRA.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office at RTC Silver, Wagholi delivers integrated non-profit payroll processing, donor-wise cost allocation, FCRA utilisation reporting, and trust compliance coordination for charitable trusts, societies, and Section 8 companies across Pune.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years of experience, 10,000+ businesses served, and ISO 9001:2015 certification, Patron ensures every NGO payroll cycle is accurate, donor-compliant, and audit-ready.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20non-profit%20payroll%20in%20Pune.%20Please%20share%20details%20and%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20non-profit%20payroll%20services%20in%20Pune.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides non-profit payroll and trust compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">NGO payroll and compliance services</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    
                    <a href="/ngo-and-non-profit-accounting-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end non-profit compliance</div>
                <div class="pa-cross-grid">
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers payroll services for non-profit NGOs in Pune. Content reviewed annually (Freshness Tier 1) reflecting 12AB renewal cycles, FCRA amendments, Bombay Public Trusts Act changes, and Maharashtra PT notification updates.</p>
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
