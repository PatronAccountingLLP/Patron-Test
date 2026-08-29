
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
    <title>FDI Compliance Services - FEMA, RBI Reporting & FC-GPR</title>
    <meta name="description" content="FDI compliance in India under FEMA 1999. File FC-GPR within 30 days, FLA return by July 15 via RBI FIRMS portal. CA service from INR 9,999.">
    <link rel="canonical" href="/fdi-compliance">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FDI Compliance Services - FEMA, RBI Reporting & FC-GPR">
    <meta property="og:description" content="FDI compliance in India under FEMA 1999. File FC-GPR within 30 days, FLA return by July 15 via RBI FIRMS portal. CA service from INR 9,999.">
    <meta property="og:url" content="/fdi-compliance">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FDI Compliance Services - FEMA, RBI Reporting & FC-GPR">
    <meta name="twitter:description" content="FDI compliance in India under FEMA 1999. File FC-GPR within 30 days, FLA return by July 15 via RBI FIRMS portal. CA service from INR 9,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "FDI Compliance India: FEMA FIRMS Guide",
          "description": "FDI compliance in India under FEMA 1999. File FC-GPR within 30 days, FLA return by July 15 via RBI FIRMS portal. CA service from INR 9,999.",
          "url": "https://www.patronaccounting.com/fdi-compliance",
          "serviceType": "FDI Compliance India: FEMA FIRMS Guide",
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
            "url": "https://www.patronaccounting.com/fdi-compliance",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "2",
              "maxPrice": "7500",
              "priceCurrency": "INR"
            }
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
              "name": "FDI Compliance India: FEMA FIRMS Guide",
              "item": "https://www.patronaccounting.com/fdi-compliance"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the deadline for filing Form FC-GPR after receiving FDI in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form FC-GPR must be filed on the RBI FIRMS portal via the Single Master Form (SMF) within 30 days from the date of issue (allotment) of equity instruments to the foreign investor. The share allotment itself must be completed within 60 days of receipt of the inward remittance from the foreign investor."
              }
            },
            {
              "@type": "Question",
              "name": "Is Form FC-GPR filed by the company directly or through a bank?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form FC-GPR is filed by the Indian company on the FIRMS portal (firms.rbi.org.in) via the SMF workspace. However, the AD Category-I Bank acts as the reviewing authority - the company files, the AD Bank reviews and forwards to RBI. The bank's KYC clearance for the foreign investor is a mandatory prerequisite."
              }
            },
            {
              "@type": "Question",
              "name": "What is the FLA Return and who must file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Annual Return on Foreign Liabilities and Assets (FLA) is mandatory for every Indian company or LLP that has FDI or ODI outstanding as on March 31 - even if there were no new transactions during the year. Filed directly on the RBI FLAIR portal by July 15 each year."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I miss the FC-GPR or FLA filing deadline?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Missing FEMA reporting deadlines triggers the Late Submission Fee (LSF): INR 7,500 fixed + 0.025% of the amount involved x days of delay. For persistent non-reporting, formal FEMA compounding under Section 15 before RBI may be required."
              }
            },
            {
              "@type": "Question",
              "name": "Does FDI from a Chinese investor require special approval in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Press Note 3 (2020), any investment from an entity incorporated in China (or any country sharing a land border with India) requires prior government approval regardless of sector, amount, or sectoral cap. This also applies where the beneficial owner is a citizen of these bordering countries."
              }
            },
            {
              "@type": "Question",
              "name": "Is valuation mandatory for every FDI transaction?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. NDI Rules 2019, Rule 21 requires every issuance or transfer of equity instruments involving a non-resident be done at fair market value certified by a SEBI-registered Merchant Banker or CA using internationally accepted methodologies (DCF, NAV, or comparable company analysis)."
              }
            },
            {
              "@type": "Question",
              "name": "Can a startup issue Convertible Notes to foreign investors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but only if DPIIT-recognised under Startup India. Minimum INR 25 lakhs per foreign investor per tranche. Must convert into equity or be repaid within 5 years. Reported in Form CN on FIRMS SMF within 30 days of issuance or transfer."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for FDI non-compliance under FEMA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 13 of FEMA 1999, penalty is up to 3x the sum involved or INR 2 lakhs (whichever higher), plus INR 5,000 per day for continuing contravention. For reporting delays, LSF (INR 7,500 + 0.025% x amount x days) applies as a faster alternative to formal compounding. Quick Answers What is FC-GPR in FEMA? Form FC-GPR is filed within 30 days of share allotment to a foreign investor on RBI FIRMS portal via SMF. FLA return due date? July 15 each year (provisional); September 30 for revised submission. Share allotment deadline after FDI? 60 days from receipt of funds. If missed, refund within 15 days. Is 100% FDI allowed in India? Yes, in most sectors under automatic route (manufacturing, IT, telecom, e-commerce). Some sectors have caps; some prohibited. What is the FIRMS portal? RBI's Foreign Investment Reporting and Management System (firms.rbi.org.in) for all FDI reporting via Single Master Form."
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
                        FDI Compliance India: FC-GPR, FLA Return and FIRMS Filing Guide 2026
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>FC-GPR Filing: Within 30 Days of Share Allotment</strong>:</span> Filed via Single Master Form (SMF) on RBI FIRMS portal through AD Category-I Bank. FIRC, KYC, and valuation certificate required.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>FLA Return: Due July 15 Every Year</strong>:</span> Annual Foreign Liabilities and Assets return mandatory for all companies with FDI or ODI outstanding as on March 31. Filed via RBI FLAIR portal.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>FC-TRS: Within 60 Days of Share Transfer</strong>:</span> Filed for every share transfer between resident and non-resident. Pricing norms must be followed - fair market value certified by CA or SEBI Merchant Banker.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>FEMA Penalty: Up to 3x Transaction Amount</strong>:</span> Section 13 FEMA: up to 3x sum involved or INR 2 lakhs (whichever higher). Late Submission Fee (LSF): INR 7,500 + 0.025% x amount x days.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 200+ FDI Filings Managed | 100% Compliant FC-GPR and FLA | 4.8/5 Rating | Pune, Mumbai, Delhi, Bangalore</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=FDI%20Compliance%20Enquiry&body=Hello%2C%0AI%20need%20FDI%20compliance%20services.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20FDI%20compliance%20services%20under%20FEMA.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - FDI Compliance',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'fdi-compliance', 'label' => 'FDI Compliance', 'selected' => true, 'disabled' => false],
                            ['value' => 'issue-of-shares', 'label' => 'Issue of Shares', 'selected' => false, 'disabled' => false],
                            ['value' => 'transfer-of-shares', 'label' => 'Transfer of Shares', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-compliance', 'label' => 'Pvt Ltd Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-india-registration', 'label' => 'Startup India', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">First foreign round for our Series A. Patron handled sector eligibility, AD Bank coordination, valuation, FC-GPR filing - everything within 25 days. Zero RBI queries.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Founder</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">SaaS Startup, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">USD 3M FDI from a Singapore entity. Complex shareholding structure. Patron managed FC-GPR, Entity Master, and downstream investment compliance seamlessly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Tech Company, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">FLA return was overdue by 2 years. Patron filed the pending returns, handled the LSF calculation, and got us compliant before our next funding round due diligence.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Head</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">FC-TRS for a share transfer between our Indian promoter and a US-based fund. Valuation, pricing compliance, and FIRMS filing all handled. Clean transaction.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pvt Ltd, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Press Note 3 assessment for an investor with beneficial ownership in Hong Kong. Patron's FEMA team identified the government approval requirement early, saving us months.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Legal Counsel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">E-commerce, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get complete FDI compliance support. FC-GPR, FLA, FC-TRS - all FEMA filings managed. Starting at INR 9,999.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">9-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Penalties</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FDI Compliance Services at a Glance</strong></p>
                    <p>Every Indian company that receives FDI must file Form FC-GPR on the RBI FIRMS portal within 30 days of share allotment, file the Annual FLA Return by July 15, and ensure share transfer reporting complies with FEMA timelines. India received USD 81.04 billion in FDI in FY 2024-25. Patron Accounting starting at INR 9,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>FDI compliance is governed by FEMA 1999 and the NDI Rules 2019. With DPIIT and RBI tightening enforcement and streamlining reporting through the Single Master Form (SMF) on the FIRMS portal, compliance is mandatory for any company with foreign shareholders.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Framework</strong></td><td>FEMA 1999; NDI Rules 2019; RBI Master Direction on Reporting; Consolidated FDI Policy 2020 (DPIIT)</td></tr>
                        <tr><td><strong>FC-GPR Filing</strong></td><td>Within 30 days of share allotment; filed via SMF on RBI FIRMS portal through AD Category-I Bank</td></tr>
                        <tr><td><strong>FLA Return</strong></td><td>Annual filing by July 15; mandatory for all companies with FDI/ODI outstanding as on March 31</td></tr>
                        <tr><td><strong>FC-TRS Filing</strong></td><td>Within 60 days of share transfer between resident and non-resident; via FIRMS SMF</td></tr>
                        <tr><td><strong>FDI Routes</strong></td><td>Automatic Route (no prior approval; most sectors) vs Government Approval Route (restricted sectors)</td></tr>
                        <tr><td><strong>Penalty</strong></td><td>Section 13 FEMA: up to 3x transaction amount or INR 2 lakhs (whichever higher); LSF for delays</td></tr>
                        <tr><td><strong>India FDI FY 2024-25</strong></td><td>USD 81.04 billion - highest in 3 financial years (DPIIT data)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>FDI compliance kaise karein? Agar aapki company mein foreign investment hai, toh FC-GPR (30 din mein), FLA Return (July 15 tak), aur FC-TRS (share transfer ke 60 din mein) file karna zaroori hai. RBI FIRMS portal par SMF ke zariye filing hoti hai. Patron Accounting poora FEMA compliance manage karta hai.</p>
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
                <h2 class="section-title">What is FDI Compliance Under FEMA?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>FDI compliance</strong> refers to the complete set of legal obligations, documentation, reporting, and regulatory filings that an Indian company must fulfil when it receives Foreign Direct Investment from a non-resident investor.</p>
                    <p>Under FEMA 1999 and the NDI Rules 2019, FDI is defined as investment by a person resident outside India in equity instruments of an unlisted Indian company or in 10% or more of the post-issue paid-up equity capital of a listed Indian company. Compliance covers: sector eligibility, entry route identification, share allotment within 60 days, <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">FC-GPR filing on FIRMS portal</a> within 30 days, and annual FLA returns.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FDI Compliance:</strong></p>
                    <p><strong>FEMA 1999:</strong> Foreign Exchange Management Act, 1999 - primary law governing foreign exchange transactions in India.</p>
                    <p><strong>NDI Rules 2019:</strong> FEMA (Non-Debt Instruments) Rules, 2019 - governs FDI, FPI, and investment through equity instruments.</p>
                    <p><strong>FC-GPR:</strong> Foreign Currency - Gross Provisional Return; filed within 30 days of share allotment to non-resident via FIRMS SMF.</p>
                    <p><strong>FLA Return:</strong> Annual Return on Foreign Liabilities and Assets; due July 15; filed via RBI FLAIR portal.</p>
                    <p><strong>FIRMS Portal:</strong> RBI's Foreign Investment Reporting and Management System (firms.rbi.org.in) for SMF-based FDI reporting.</p>
                    <p><strong>Late Submission Fee (LSF):</strong> INR 7,500 fixed + 0.025% x amount x days of delay for delayed FEMA reporting (effective September 30, 2022).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- FDI compliance FEMA -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FEMA 1999 - FDI COMPLIANCE</text>
                            <rect x="38" y="48" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="65" y="60" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FC-GPR 30d</text>
                            <rect x="98" y="48" width="65" height="18" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <text x="130" y="60" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FLA Jul 15</text>
                            <rect x="38" y="72" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="65" y="84" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FC-TRS 60d</text>
                            <rect x="98" y="72" width="65" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                            <text x="130" y="84" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FIRMS Portal</text>
                            <rect x="55" y="98" width="90" height="16" rx="4" fill="#14365F"/>
                            <text x="100" y="109" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">USD 81B FDI FY25</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">100% FEMA Compliant</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FEMA 1999</span>
                        <strong>FDI Compliance</strong>
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
            <h2 class="section-title">Who Needs FDI Compliance?</h2>
            <div class="content-text">
                
                <p>FDI compliance is mandatory for every Indian company, LLP, or startup that:</p>
                <ul>
                    <li>Has received FDI in equity shares, compulsorily convertible preference shares (CCPS), or compulsorily convertible debentures (CCDs)</li>
                    <li>Is planning to issue new equity instruments to a foreign investor under automatic or government approval route</li>
                    <li>Is transferring shares between a resident and non-resident shareholder (triggering FC-TRS)</li>
                    <li>Has outstanding foreign investment as on March 31 (triggering FLA return obligation)</li>
                    <li>Is issuing convertible notes to foreign investors (DPIIT-recognised startups only, minimum INR 25 lakhs)</li>
                    <li>Is making downstream investments where the investing company is owned/controlled by non-residents (indirect FDI)</li>
                </ul>
                <p style="margin-top:16px;"><strong>Press Note 3 (2020):</strong> Any investment from entities in countries sharing a land border with India (China, Pakistan, Bangladesh, Afghanistan, Nepal, Myanmar, Bhutan) requires prior government approval regardless of sector or percentage.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our FDI Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Pre-Investment FEMA Diligence</strong></td><td>Sector eligibility check, entry route identification, sectoral cap verification, Press Note 3 assessment</td></tr>
                        <tr><td><strong>FC-GPR Filing on FIRMS Portal</strong></td><td>Complete FC-GPR via SMF within 30 days - FIRC, KYC, valuation, board resolution coordination with AD Bank</td></tr>
                        <tr><td><strong>FLA Return Filing (Annual)</strong></td><td>Annual filing by July 15 on RBI FLAIR portal for all companies with FDI/ODI outstanding</td></tr>
                        <tr><td><strong>FC-TRS Filing for Share Transfers</strong></td><td>Within 60 days of transfer between resident and non-resident with pricing compliance</td></tr>
                        <tr><td><strong>Valuation Certificates (CA-Certified)</strong></td><td>FEMA-compliant valuations using DCF, NAV, or comparable company analysis for unlisted companies</td></tr>
                        <tr><td><strong>FEMA Compounding and LSF Representation</strong></td><td>Representation before RBI for past non-compliance; voluntary disclosure and compounding under Section 15</td></tr>
                        <tr><td><strong>Entity Master Setup and FIRMS Management</strong></td><td>One-time FIRMS portal registration and ongoing shareholding pattern updates</td></tr>

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
            <h2 class="section-title">Step-by-Step FDI Compliance Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From sector eligibility to ongoing downstream monitoring. Patron Accounting manages every step of FEMA compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify Sector Eligibility and Entry Route</h3><p class="step-description">Confirm: sector not prohibited; investment within sectoral cap; investor not from bordering country (Press Note 3); correct route (automatic or government) identified. For government route, file with DPIIT via FIFP (fifp.gov.in).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sector verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Route confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="8" rx="2" fill="#14365F"/><text x="45" y="26" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">SECTOR</text><line x1="30" y1="36" x2="90" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Eligible</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Complete KYC and Receive Inward Remittance</h3><p class="step-description">AD Bank KYC for foreign investor. Obtain Foreign Inward Remittance Certificate (FIRC) from bank - mandatory attachment for FC-GPR.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FIRC obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> KYC cleared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="29" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FIRC + KYC</text><line x1="25" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">AD BANK</text></svg></div><span class="illustration-label">Funds In</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Allot Shares Within 60 Days of Receipt</h3><p class="step-description">Company must allot equity instruments (shares, CCPS, CCDs) within 60 days. If not allotted, funds must be returned within 15 days after expiry. Failure is a FEMA violation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shares allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 60-day window</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ALLOTMENT</text><line x1="30" y1="34" x2="90" y2="34" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="52" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">60 DAYS</text></svg></div><span class="illustration-label">Allotted</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Set Up Entity Master on FIRMS Portal</h3><p class="step-description">One-time registration at firms.rbi.org.in capturing CIN, authorised capital, existing foreign shareholding. Must be updated on changes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity Master created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FIRMS portal ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#14365F"/><text x="60" y="29" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FIRMS PORTAL</text><line x1="25" y1="40" x2="95" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Entity Master</text><text x="60" y="67" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">firms.rbi.org.in</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File FC-GPR Within 30 Days of Allotment</h3><p class="step-description">File via SMF on FIRMS through AD Bank. Attach: FIRC, KYC report, valuation certificate (CA or SEBI MB), board resolution, updated shareholding pattern. AD Bank reviews before forwarding to RBI.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FC-GPR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 30 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#E8712C"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FC-GPR FILED</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">30 DAYS</text></svg></div><span class="illustration-label">FC-GPR Done</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Update Entity Master Post-Allotment</h3><p class="step-description">After FC-GPR acceptance, update FIRMS Entity Master with revised shareholding pattern. Update depository participant if shares in demat form.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity Master updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shareholding current</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UPDATED</text><line x1="30" y1="44" x2="90" y2="44" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="58" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">New Shareholding</text></svg></div><span class="illustration-label">Updated</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File FLA Return Annually by July 15</h3><p class="step-description">Every year, file the Annual Foreign Liabilities and Assets Return on the RBI FLAIR portal if FDI or ODI is outstanding as on March 31. Filed directly by company (not through AD Bank).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FLA filed by July 15</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FLAIR portal submission</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FLA RETURN</text><text x="60" y="50" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">JULY 15</text></svg></div><span class="illustration-label">FLA Done</span><span class="step-number-large">07</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File FC-TRS for Each Share Transfer</h3><p class="step-description">Whenever shares transfer between resident and non-resident, file FC-TRS via FIRMS SMF within 60 days. Pricing norms: fair market value certified by CA or SEBI MB.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FC-TRS filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pricing compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="29" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FC-TRS</text><line x1="25" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">60 DAYS</text></svg></div><span class="illustration-label">Transfer Done</span><span class="step-number-large">08</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">Ongoing Downstream Investment Monitoring</h3><p class="step-description">If company makes investments in other Indian entities and is 'owned or controlled' by non-residents, downstream investment qualifies as indirect FDI. File Form DI within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Downstream monitored</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form DI filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM DI</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">09</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FDI Compliance</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Foreign Inward Remittance Certificate (FIRC)</strong> - from AD Category-I Bank (for FC-GPR, FC-TRS)</li>
                    <li><strong>KYC Report of Foreign Investor</strong> - from AD Category-I Bank</li>
                    <li><strong>Valuation Certificate</strong> - from CA or SEBI-registered Merchant Banker (for share issuance and transfer)</li>
                    <li><strong>Board Resolution</strong> - approving allotment/transfer and authorising signatory</li>
                    <li><strong>Updated Shareholding Pattern</strong> - pre and post allotment (for FC-GPR, Entity Master)</li>
                    <li><strong>Memorandum of Association (MOA)</strong> - for Entity Master setup and government route FDI</li>
                    <li><strong>Government Approval (DPIIT/RBI)</strong> - where applicable for government route investments</li>
                    <li><strong>Audited Financial Statements</strong> - for FLA Return filing on FLAIR portal</li>
                    <li><strong>Transfer Agreement / Share Purchase Agreement</strong> - for FC-TRS filing</li>
                    <li><strong>Form 15CB</strong> - for outward remittance of dividend/buyback proceeds to non-resident (from CA)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FEMA Penalties and How We Prevent Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Late FC-GPR Filing (beyond 30 days)</strong></td><td>LSF: INR 7,500 + 0.025% x amount x days; FEMA compounding risk</td><td>We initiate FC-GPR preparation simultaneously with share allotment. AD Bank coordination from Day 1 ensures filing within 30 days.</td></tr>
                        <tr><td><strong>Missed FLA Return (July 15)</strong></td><td>Section 13 FEMA penalty; RBI may block future remittances</td><td>Proactive reminders 45 days before deadline. FLA filed directly on FLAIR portal - no AD Bank dependency.</td></tr>
                        <tr><td><strong>Share Allotment Beyond 60 Days</strong></td><td>Mandatory refund within 15 days; FEMA violation</td><td>We track the 60-day window from remittance receipt and ensure timely Board resolution for allotment.</td></tr>
                        <tr><td><strong>Pricing Non-Compliance (Valuation)</strong></td><td>Most common FEMA violation; attracts compounding</td><td>CA-certified valuations using DCF/NAV/comparable methodology per NDI Rules 2019 Rule 21.</td></tr>

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
            <h2 class="section-title">FDI Compliance Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - FC-GPR Filing (single round of FDI)</td><td class="table-amount">Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>FLA Return Filing (annual)</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>FC-TRS Filing (share transfer)</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>Entity Master Setup on FIRMS</td><td class="table-amount">Included with FC-GPR</td></tr>
                        <tr><td>Valuation Certificate (CA) for FEMA Pricing</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>FEMA Compounding Application</td><td class="table-amount">Starting at INR 24,999</td></tr>
                        <tr><td>Full FDI Compliance Retainer (all FEMA filings)</td><td class="table-amount">Starting at INR 29,999/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FDI Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FDI%20compliance.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Share allotment after receiving FDI funds</td><td>Within 60 days of receipt (refund within 15 days if missed)</td></tr>
                        <tr><td>FC-GPR filing on FIRMS portal</td><td>Within 30 days of share allotment</td></tr>
                        <tr><td>FC-TRS filing for share transfer</td><td>Within 60 days of transfer date and receipt of consideration</td></tr>
                        <tr><td>FLA Return on FLAIR portal</td><td>By July 15 each year (provisional); September 30 (revised)</td></tr>
                        <tr><td>Form CN (Convertible Notes)</td><td>Within 30 days of issuance or transfer</td></tr>
                        <tr><td>Form DI (Downstream Investment)</td><td>Within 30 days of downstream investment</td></tr>
                        <tr><td>ECB-2 Return (External Commercial Borrowings)</td><td>Monthly by 7th of following month</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> FC-GPR filed through AD Bank - bank coordination is the biggest delay point. Patron Accounting coordinates FIRC, KYC, and valuation with your AD Bank from Day 1 to prevent filing delays. FLA return filed directly by company on FLAIR portal - no bank dependency.</p>

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
            <h2 class="section-title">Why Companies Choose Patron Accounting for FDI Compliance</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Pre-Investment FEMA Diligence</h3><p>Prevents receiving funds in a prohibited or restricted sector. Sector eligibility, entry route, and Press Note 3 assessment before any money moves.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>AD Bank Coordination</h3><p>Bank coordination is the biggest delay point in FC-GPR. We coordinate FIRC, KYC, and valuation with your AD Category-I Bank directly.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>FIRMS Portal Expertise</h3><p>First-time FIRMS setup errors cause FC-GPR rejections. We manage Entity Master setup, SMF filing, and post-allotment updates.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>CA-Certified Valuations</h3><p>Pricing non-compliance is the most common FEMA violation. We provide FEMA-compliant valuations using DCF, NAV, or comparable methodology.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>FEMA Compounding Experience</h3><p>Experienced team resolves past non-compliance efficiently through LSF route or formal compounding before RBI under Section 15.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3>Downstream Investment Monitoring</h3><p>Often overlooked; non-compliance discovered during due diligence. We monitor indirect FDI through owned/controlled companies and file Form DI.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">200+ FDI Filings Managed - 100% Compliant FC-GPR and FLA</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 200+ FDI Filings | 100% Compliant | 4.8/5 Rating | FC-GPR, FLA, FC-TRS, FEMA Compounding | Pune, Mumbai, Delhi, Bangalore</p>
                <div class="highlight-box" style="margin-top:16px;"><p>Our CA and CS team has handled FDI compliance for startups with their first foreign round, subsidiaries of Fortune 500 companies, and mid-cap Indian companies with complex multi-round foreign shareholding structures.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Patron Accounting: FDI Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Activity</th><th>DIY</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Sector Eligibility Check</strong></td><td>Risk of oversight for restricted sectors</td><td>Expert review against NDI Rules and DPIIT press notes</td></tr>
                        <tr><td><strong>FIRC and KYC Coordination</strong></td><td>Time-consuming; unfamiliar with bank requirements</td><td>We coordinate directly with your AD Bank</td></tr>
                        <tr><td><strong>Valuation for FEMA Pricing</strong></td><td>Need to separately engage CA or Merchant Banker</td><td>Included in our service package</td></tr>
                        <tr><td><strong>FC-GPR on FIRMS Portal</strong></td><td>High error rate; AD Bank may send back multiple times</td><td>Clean filing; minimal bank queries</td></tr>
                        <tr><td><strong>FLA Return Deadline Tracking</strong></td><td>Frequently missed; July 15 with no reminders</td><td>Proactive reminder and filing</td></tr>
                        <tr><td><strong>FEMA Penalty or Compounding</strong></td><td>No experience with RBI compounding process</td><td>Experienced FEMA compounding representation</td></tr>

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
            <h2 class="section-title">Related Services at Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/issue-of-shares">Issue of Shares</a> - allotment to foreign investors including valuation and Form PAS-3</li>
                    <li><a href="/transfer-of-shares">Transfer of Shares</a> - FC-TRS compliance for resident-non-resident transfers</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - annual ROC compliance for FDI due diligence</li>
                    <li><a href="/startup-registration">Startup India Registration</a> - DPIIT recognition for Convertible Note issuance</li>
                    <li><a href="/pvt-llp-compliance">LLP Compliance</a> - LLP-I and LLP-II filings for foreign capital in Indian LLPs</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FDI Compliance in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legislation / Regulation</th><th>Key Provisions</th></tr></thead><tbody>
                        <tr><td><strong>FEMA 1999</strong></td><td>Primary law. S.6: capital account transactions. S.13: penalties (up to 3x sum). S.15: compounding. Source: <a href="https://dpiit.gov.in/foreign-direct-investment" target="_blank" rel="noopener">DPIIT FDI Policy</a></td></tr>
                        <tr><td><strong>NDI Rules 2019</strong></td><td>FDI definition, entry routes, sectoral caps, pricing norms (Rule 21), downstream investment rules.</td></tr>
                        <tr><td><strong>Consolidated FDI Policy 2020</strong></td><td>DPIIT policy: sectors eligible for automatic vs government route; permitted and prohibited sectors.</td></tr>
                        <tr><td><strong>Press Note 3 (2020)</strong></td><td>Mandatory government approval for investments from countries sharing land border with India.</td></tr>
                        <tr><td><strong>RBI Master Direction on Reporting</strong></td><td>FED Master Direction No. 11/2017-18 (updated January 2025). FC-GPR, FC-TRS, FLA, LSF matrix. Source: <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">RBI FIRMS Portal</a></td></tr>
                        <tr><td><strong>DPIIT Press Note 2 (2025)</strong></td><td>Clarification on bonus share issuance in prohibited sectors to existing non-resident shareholders.</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FDI Compliance India</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about FC-GPR, FLA return, FEMA penalties, valuation, Press Note 3, and FIRMS portal filing.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'FDI Compliance India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the deadline for filing Form FC-GPR after receiving FDI in India?</h3>
                        <div class="faq-expanded__a"><p>Form FC-GPR must be filed on the RBI FIRMS portal via the Single Master Form (SMF) within 30 days from the date of issue (allotment) of equity instruments to the foreign investor. The share allotment itself must be completed within 60 days of receipt of the inward remittance from the foreign investor.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Form FC-GPR filed by the company directly or through a bank?</h3>
                        <div class="faq-expanded__a"><p>Form FC-GPR is filed by the Indian company on the FIRMS portal (firms.rbi.org.in) via the SMF workspace. However, the AD Category-I Bank acts as the reviewing authority - the company files, the AD Bank reviews and forwards to RBI. The bank's KYC clearance for the foreign investor is a mandatory prerequisite.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the FLA Return and who must file it?</h3>
                        <div class="faq-expanded__a"><p>The Annual Return on Foreign Liabilities and Assets (FLA) is mandatory for every Indian company or LLP that has FDI or ODI outstanding as on March 31 - even if there were no new transactions during the year. Filed directly on the RBI FLAIR portal by July 15 each year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if I miss the FC-GPR or FLA filing deadline?</h3>
                        <div class="faq-expanded__a"><p>Missing FEMA reporting deadlines triggers the Late Submission Fee (LSF): INR 7,500 fixed + 0.025% of the amount involved x days of delay. For persistent non-reporting, formal FEMA compounding under Section 15 before RBI may be required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does FDI from a Chinese investor require special approval in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Press Note 3 (2020), any investment from an entity incorporated in China (or any country sharing a land border with India) requires prior government approval regardless of sector, amount, or sectoral cap. This also applies where the beneficial owner is a citizen of these bordering countries.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is valuation mandatory for every FDI transaction?</h3>
                        <div class="faq-expanded__a"><p>Yes. NDI Rules 2019, Rule 21 requires every issuance or transfer of equity instruments involving a non-resident be done at fair market value certified by a SEBI-registered Merchant Banker or CA using internationally accepted methodologies (DCF, NAV, or comparable company analysis).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a startup issue Convertible Notes to foreign investors?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only if DPIIT-recognised under Startup India. Minimum INR 25 lakhs per foreign investor per tranche. Must convert into equity or be repaid within 5 years. Reported in Form CN on FIRMS SMF within 30 days of issuance or transfer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the penalty for FDI non-compliance under FEMA?</h3>
                        <div class="faq-expanded__a"><p>Under Section 13 of FEMA 1999, penalty is up to 3x the sum involved or INR 2 lakhs (whichever higher), plus INR 5,000 per day for continuing contravention. For reporting delays, LSF (INR 7,500 + 0.025% x amount x days) applies as a faster alternative to formal compounding.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is FC-GPR in FEMA?</strong> Form FC-GPR is filed within 30 days of share allotment to a foreign investor on RBI FIRMS portal via SMF.</p>
                <p><strong>FLA return due date?</strong> July 15 each year (provisional); September 30 for revised submission.</p>
                <p><strong>Share allotment deadline after FDI?</strong> 60 days from receipt of funds. If missed, refund within 15 days.</p>
                <p><strong>Is 100% FDI allowed in India?</strong> Yes, in most sectors under automatic route (manufacturing, IT, telecom, e-commerce). Some sectors have caps; some prohibited.</p>
                <p><strong>What is the FIRMS portal?</strong> RBI's Foreign Investment Reporting and Management System (firms.rbi.org.in) for all FDI reporting via Single Master Form.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Deadlines Are Non-Negotiable - Penalties Are Severe</h2>
            <div class="content-text">
                
                <p><strong>If your company has received foreign investment, these deadlines are mandatory. Non-compliance triggers LSF, FEMA compounding, and potential RBI enforcement.</strong></p>
                <ul>
                    <li><strong>FC-GPR:</strong> 30 days from share allotment - delay triggers LSF (INR 7,500 + 0.025% x amount x days) and potential FEMA compounding</li>
                    <li><strong>FLA Return:</strong> July 15 each year - non-filing blocks future inward remittances and attracts Section 13 penalties</li>
                    <li><strong>Share allotment:</strong> 60 days from receipt of funds - non-allotment requires mandatory refund within 15 days</li>
                    <li><strong>Past non-compliance:</strong> Voluntary disclosure and LSF/compounding is always better than an RBI show-cause notice</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Complete FDI Compliance Support - Starting at INR 9,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">FDI compliance in India is a multi-layered obligation under FEMA 1999, NDI Rules 2019, and RBI Master Directions. It begins before the first rupee is received - with sector eligibility and route identification - and continues annually through FLA returns.</p>
                <p style="color:rgba(255,255,255,0.9);">With India receiving USD 81.04 billion in FDI in FY 2024-25 and RBI tightening FEMA enforcement, a structured compliance approach is essential. Patron Accounting manages the complete FDI lifecycle - from first FC-GPR to annual FLA returns.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 9,999 (Exl GST and Govt. Charges) | 200+ FDI Filings | 100% Compliant | Free FEMA Consultation</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20FDI%20compliance.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FDI%20Compliance&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20FDI%20compliance%20services%20under%20FEMA.%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FDI Compliance Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert FEMA and FDI compliance services across major cities in India.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/fdi-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fdi-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fdi-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/fdi-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Business Services</div><div class="pa-block-sub">Complete corporate compliance and foreign investment support</div><div class="pa-cross-grid"><a href="/issue-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">India</div></div></a><a href="/transfer-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup India</div><div class="pa-card-sub">India</div></div></a><a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> January 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers FDI Compliance in India under FEMA 1999, NDI Rules 2019, and RBI Master Directions. India FDI inflows: USD 81.04 billion FY 2024-25. Reviewed quarterly.</p>
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
