
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
    <title>LLP Name Change - Form 5, ROC Approval & Process India</title>
    <meta name="description" content="Change your LLP name in India via RUN-LLP and Form 5. New Certificate of Incorporation from ROC. Expert CS help. Starting at INR 2,499. 15-25 day turnaround.">
    <link rel="canonical" href="/llp-name-change">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Name Change - Form 5, ROC Approval & Process India">
    <meta property="og:description" content="Change your LLP name in India via RUN-LLP and Form 5. New Certificate of Incorporation from ROC. Expert CS help. Starting at INR 2,499. 15-25 day turnaround.">
    <meta property="og:url" content="/llp-name-change">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Name Change - Form 5, ROC Approval & Process India">
    <meta name="twitter:description" content="Change your LLP name in India via RUN-LLP and Form 5. New Certificate of Incorporation from ROC. Expert CS help. Starting at INR 2,499. 15-25 day turnaround.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "LLP Name Change: Form 5 and RUN",
          "description": "Change your LLP name in India via RUN-LLP and Form 5. New Certificate of Incorporation from ROC. Expert CS help. Starting at INR 2,499. 15-25 day turnaround.",
          "url": "https://www.patronaccounting.com/llp-name-change",
          "serviceType": "LLP Name Change: Form 5 and RUN",
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
            "url": "https://www.patronaccounting.com/llp-name-change",
            "price": "2499"
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
              "name": "LLP Name Change: Form 5 and RUN",
              "item": "https://www.patronaccounting.com/llp-name-change"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the procedure for LLP name change in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File RUN-LLP form for name reservation (INR 200), then Form 5 LLP within 30 days of approval, obtain new Certificate of Incorporation from ROC, execute Supplementary LLP Agreement, and file Form 3 LLP within 30 days of Certificate. Governed by Section 19, LLP Act 2008."
              }
            },
            {
              "@type": "Question",
              "name": "What forms are required for LLP name change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Three forms: RUN-LLP (name reservation, no DSC required), Form 5 LLP (notice of change, filed within 30 days of RUN approval, requires DSC + CS/CA certification), and Form 3 LLP (Supplementary Agreement, filed within 30 days of new Certificate)."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to file Form 5 LLP after name approval?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 5 must be filed within 30 days of receiving the approved RUN-LLP SRN. Missing this attracts a fine of INR 10,000 to INR 50,000 on the LLP and INR 10,000 to INR 1 lakh on each Designated Partner."
              }
            },
            {
              "@type": "Question",
              "name": "How long does LLP name change take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "15-25 business days end-to-end. RUN-LLP approval: 1-3 days. Form 5 processing: 3-7 days. New Certificate: 7-14 days after Form 5 approval. Plus Form 3 LLP filing thereafter."
              }
            },
            {
              "@type": "Question",
              "name": "Can the Central Government force an LLP to change its name?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 17, the Central Government can direct a name change if the name is identical to or too similar to another entity or trademark. Failure within 3 months results in forced ORDNC-prefixed name under Rule 19A."
              }
            },
            {
              "@type": "Question",
              "name": "What are the post-change compliance requirements?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Update PAN, TAN, GST registration, bank accounts, contracts, letterheads, invoices, and website with new name per Section 21 LLP Act 2008."
              }
            },
            {
              "@type": "Question",
              "name": "LLP ka naam kaise badle?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "RUN-LLP form fill karein MCA portal par (fee INR 200). Approval ke baad 30 din mein Form 5 LLP file karein. ROC se new Certificate milne ke baad Supplementary Agreement execute karke Form 3 LLP 30 din mein file karein. Section 19 LLP Act 2008 ke under governed. Quick Answers Which form for name reservation? RUN-LLP web form on MCA V3 Portal (no DSC, INR 200 fee, 90-day reservation). Which form for name notice? Form 5 LLP - filed within 30 days of RUN-LLP approval. Which form updates agreement? Form 3 LLP - filed within 30 days of new Certificate of Incorporation. What confirms the name change? New Certificate of Incorporation issued by ROC (Form 16). Name effective from this date."
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
                        LLP Name Change in India: Change Your LLP Name via MCA the Right Way
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 19, LLP Act 2008:</span> Change your LLP name legally via RUN-LLP name reservation, Form 5 LLP filing, and Supplementary Agreement amendment.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two 30-Day Deadlines:</span> Form 5 within 30 days of RUN-LLP approval; Form 3 LLP within 30 days of new Certificate of Incorporation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>New Certificate Issued:</span> ROC issues fresh Certificate of Incorporation in the new LLP name. Name change effective from date of certificate.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>From INR 2,499:</span> Expert CS-assisted end-to-end service including RUN-LLP, Form 5, Form 3, and post-change compliance checklist.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ LLP matters handled | 4.8/5 rating | Offices in Pune, Mumbai, Delhi, Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=LLP%20Name%20Change%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20LLP%20name%20change.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20my%20LLP%20name.%20Please%20help%20with%20RUN-LLP%20and%20Form%205." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - LLP Name Change',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'llp-name-change', 'label' => 'LLP Name Change', 'selected' => true, 'disabled' => false],
                            ['value' => 'llp-agreement-change', 'label' => 'LLP Agreement Change', 'selected' => false, 'disabled' => false],
                            ['value' => 'llp-partner-change', 'label' => 'LLP Partner Change', 'selected' => false, 'disabled' => false],
                            ['value' => 'llp-incorporation', 'label' => 'LLP Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'pvt-llp-compliance', 'label' => 'LLP Compliance', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">LLP name change handled professionally. From name availability check to new Certificate of Incorporation - everything tracked and completed within 3 weeks. Highly recommend.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Designated Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Services LLP, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Rebranding our consulting LLP. Patron found our first-choice name was too similar to another entity - saved us from RUN-LLP rejection. Second choice approved in 2 days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Consulting LLP, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Received Central Government direction to change name. Patron handled the ORDNC deadline urgency, filed Form 5 within 10 days, and coordinated all post-change PAN and GST updates.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Founding Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trading LLP, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Aligned our LLP name with our new trademark. Patron coordinated RUN-LLP with trademark NOC, managed both Form 5 and Form 3 deadlines, and delivered new Certificate in 18 days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Senior Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Design LLP, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 500+ LLPs who trust Patron Accounting for name changes and secretarial compliance.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">When Needed</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Name Change - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Name Change Services at a Glance</strong></p>
                    <p>An LLP can change its name under Section 19 of the LLP Act 2008 by filing RUN-LLP form for name reservation (INR 200 fee), then Form 5 LLP within 30 days of approval, and Form 3 LLP within 30 days of receiving the new Certificate of Incorporation. Expert CS assistance from INR 2,499 + GST.</p>
                </div>
                <p>Your LLP name is more than a label - it is your brand, your legal identity, and how regulators, clients, and partners recognize you. Whether you are rebranding to reflect new services, resolving a name conflict, or responding to directions from the Central Government or Registrar, changing your LLP name is a structured legal process with specific forms, deadlines, and compliance steps.</p>
                <p>Governed by Section 19 of the LLP Act 2008 and Rule 20 of the LLP Rules 2009, the process involves reserving a new name via RUN-LLP, filing Form 5 LLP with the ROC within 30 days, receiving a new Certificate of Incorporation, and updating the LLP Agreement via Supplementary Deed filed in Form 3 LLP.</p>
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
                <h2 class="section-title">What is LLP Name Change?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>LLP Name Change</strong> is the formal legal process by which a registered LLP changes its name under Section 19 of the LLP Act 2008. The new name is reserved via the RUN-LLP web form on MCA portal, and upon approval, Form 5 LLP is filed with the ROC. The Registrar issues a fresh Certificate of Incorporation in the new name.</p>
<p>An LLP may change its name <strong>voluntarily</strong> (rebranding, expansion, restructuring) or <strong>mandatorily</strong> when directed by the Central Government or Registrar under Section 17 if the existing name is undesirable or too similar to another entity or trademark.</p>
<p><strong>External authority:</strong> <a href="https://www.indiacode.nic.in/bitstream/123456789/2023/1/A2009-06.pdf" target="_blank" rel="noopener">LLP Act 2008 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a></p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Name Change:</strong></p>
                    <p><strong>RUN-LLP</strong> - Reserve Unique Name web form on MCA portal. No DSC required. INR 200 non-refundable fee. Name reserved for 90 days.</p>
<p><strong>Form 5 LLP</strong> - Notice for Change of Name. Filed with ROC within 30 days of RUN-LLP approval. Requires DSC + CS/CA certification.</p>
<p><strong>Form 3 LLP</strong> - Supplementary Agreement filing. Filed within 30 days of new Certificate. Late fee: INR 100/day (no cap).</p>
<p><strong>Certificate of Incorporation (New)</strong> - Fresh certificate issued by ROC in new name (Form 16). Name change effective from this date.</p>
<p><strong>Section 19</strong> - LLP Act 2008 provision permitting an LLP to change its name by notifying the Registrar.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Old name crossed out -->
<rect x="50" y="40" width="65" height="22" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="0.8"/>
<text x="82" y="54" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial" text-decoration="line-through">OLD LLP</text>
<!-- New name -->
<rect x="50" y="70" width="65" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<text x="82" y="84" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEW LLP</text>
<!-- RUN-LLP badge -->
<rect x="120" y="40" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="54" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RUN-LLP</text>
<!-- Form 5 badge -->
<rect x="120" y="70" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="84" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM 5</text>
<!-- NEW COI -->
<rect x="50" y="100" width="65" height="22" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="82" y="114" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEW COI</text>
<!-- 30 DAYS x 2 -->
<rect x="120" y="105" width="40" height="18" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="140" y="117" font-size="6" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYSx2</text>
<!-- Verified -->
<circle cx="152" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M146 30l4 4 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Name Change</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Act 2008</span>
                        <strong>RUN-LLP + Form 5</strong>
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
            <h2 class="section-title">When Can an LLP Change Its Name?</h2>
            <div class="content-text">
                
                <p>An LLP can change its name in the following situations:</p>
<ul>
<li><strong>Voluntary Rebranding:</strong> Partners decide to adopt a name better reflecting current activities or market identity</li>
<li><strong>Change in Business Activities:</strong> LLP diversifies into new sectors or discontinues existing services</li>
<li><strong>Name Conflict:</strong> Existing name identical or too similar to another entity or trademark</li>
<li><strong>Direction from Central Government:</strong> Under Section 17 if name is undesirable, misleading, or similar to existing name</li>
<li><strong>Direction from Registrar:</strong> ROC issues directions for name change within specified period</li>
<li><strong>Trademark Alignment:</strong> Aligning LLP name with newly acquired trademark or brand identity</li>
<li><strong>Post-Conversion:</strong> After conversion from Partnership/Pvt Ltd to LLP, renaming to match new structure</li>
</ul>
<p><strong>Naming rule:</strong> New name must end with 'Limited Liability Partnership' or 'LLP' per Section 15 and Rule 18.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's LLP Name Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Name Availability Check</td><td>MCA portal search and trademark conflict screening before filing RUN-LLP</td></tr>
<tr><td>RUN-LLP Filing</td><td>File RUN-LLP web form on MCA portal with partner consent documents (INR 200 fee)</td></tr>
<tr><td>Form 5 LLP Filing</td><td>Draft and file Notice for Change of Name within 30-day statutory deadline with DSC and CS/CA certification</td></tr>
<tr><td>Supplementary Agreement + Form 3 LLP</td><td>Draft Supplementary LLP Agreement with new name; execute on stamp paper; file Form 3 within 30 days of new Certificate</td></tr>
<tr><td>Post-Change Compliance</td><td>Coordinate PAN amendment, GST amendment, bank notifications, and statutory correspondence updates</td></tr>
<tr><td>Certificate Delivery</td><td>Full handholding until new Certificate of Incorporation is received and delivered</td></tr>

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
            <h2 class="section-title">8-Step Procedure for LLP Name Change</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 19 of the LLP Act 2008. Two separate 30-day deadlines: Form 5 (after RUN-LLP approval) and Form 3 (after new Certificate). Penalty for Form 5 non-filing: INR 10,000-50,000. Form 3 late fee: INR 100/day (no cap).</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Review LLP Agreement and Decide New Name</h3><p class="step-description">Check LLP Agreement for name change procedure/restrictions. New name must end with 'LLP' or 'Limited Liability Partnership' (Section 15, Rule 18). Check MCA portal and trademark database for conflicts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Agreement reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name decided</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Name Chosen</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Pass Partner Resolution</h3><p class="step-description">Hold meeting and pass resolution authorizing name change. Where LLP Agreement is silent, consent of all partners required (Section 19). Authorize Designated Partner for MCA filings.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DP authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RESOLVE</text></svg></div><span class="illustration-label">Resolution Done</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File RUN-LLP for Name Reservation</h3><p class="step-description">File RUN-LLP web form on MCA V3 Portal. Up to 2 proposed names. No DSC required. Pay INR 200 non-refundable fee. Name reserved for 90 days upon approval. Attach partner consent and LLP Agreement extract.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RUN-LLP filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name reserved 90 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RUN</text><text x="60" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">LLP</text></svg></div><span class="illustration-label">Name Reserved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form 5 LLP Within 30 Days</h3><p class="step-description">Within 30 days of RUN-LLP approval SRN, file Form 5 LLP on MCA V3. Enter approved RUN-LLP SRN. Attach partner consent, resolution, and Central Govt direction (if applicable). Affix DSC + CS/CA certification. Pay government fee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 5 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30-day deadline met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">5</text></svg></div><span class="illustration-label">Form 5 Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Obtain New Certificate of Incorporation</h3><p class="step-description">ROC issues fresh Certificate of Incorporation (Form 16 for voluntary, Form 16A for directed change) in the new LLP name. Name change effective from this certificate date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New COI issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name effective</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEW COI</text></svg></div><span class="illustration-label">COI Received</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Execute Supplementary LLP Agreement</h3><p class="step-description">Draft Supplementary Agreement reflecting new name throughout. Execute on stamp paper (INR 100 flat stamp duty). All partners sign. Notarize where required by State law.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deed executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Partners signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#25D366" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M62 52l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Deed Ready</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Form 3 LLP Within 30 Days</h3><p class="step-description">File Supplementary Agreement via Form 3 LLP on MCA V3 within 30 days of new Certificate. Late filing: INR 100/day with no upper cap (Section 67).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Agreement updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">3</text></svg></div><span class="illustration-label">Form 3 Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Post-Change Compliance Updates</h3><p class="step-description">Update PAN, TAN, GST registration, bank accounts, vendor/client contracts, letterheads, invoices, website. Display new name on all statutory documents per Section 21 LLP Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M36 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="65" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M61 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="90" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M86 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for LLP Name Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Description</th></tr></thead><tbody>
<tr><td>RUN-LLP Filing</td><td>Partner consent for new name, LLP Agreement extract, Trademark NOC (if applicable)</td></tr>
<tr><td>Form 5 LLP Filing</td><td>Partner consent letter, resolution, minutes, Central Govt direction (if applicable)</td></tr>
<tr><td>Form 3 LLP Filing</td><td>Supplementary LLP Agreement (stamped, signed, notarized), original LLP Agreement copy</td></tr>
<tr><td>LLPIN</td><td>LLP Identification Number (system auto-fills)</td></tr>
<tr><td>DSC of Designated Partner</td><td>For Form 5 and Form 3 filing on MCA portal</td></tr>
<tr><td>CA/CS Certification</td><td>Professional certification on Form 5 and Form 3</td></tr>
<tr><td>Trademark Certificate/NOC</td><td>If new name is based on a registered trademark (conditional)</td></tr>
<tr><td>Central Govt Direction</td><td>If name change is directed by Central Government (conditional)</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>RUN-LLP rejection due to similar names</td><td>Wastes INR 200 fee and delays process</td><td>Thorough pre-filing name search on MCA portal and trademark database before submitting RUN-LLP</td></tr>
<tr><td>Missing 30-day Form 5 deadline</td><td>Fine INR 10,000-50,000 on LLP; INR 10,000-1 lakh per DP</td><td>We monitor RUN-LLP approval date and file Form 5 promptly within statutory window</td></tr>
<tr><td>Missing 30-day Form 3 deadline</td><td>INR 100/day penalty with no upper cap</td><td>We track Certificate issuance date and file Supplementary Agreement within 30 days</td></tr>
<tr><td>Overlooking post-change compliance</td><td>PAN, GST, bank updates often missed</td><td>Complete post-change compliance checklist provided and assisted</td></tr>

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
            <h2 class="section-title">LLP Name Change Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Professional Fees - Patron Accounting (end-to-end)</td><td>Starting at INR 2,499 + GST</td></tr>
<tr><td>RUN-LLP Name Reservation Fee</td><td>INR 200 (non-refundable)</td></tr>
<tr><td>Form 5 LLP Government Fee</td><td>INR 50 to INR 200 (based on LLP contribution slab)</td></tr>
<tr><td>Form 3 LLP Government Fee</td><td>INR 50 to INR 200 (based on capital contribution)</td></tr>
<tr><td>Stamp Duty on Supplementary Agreement</td><td>INR 100 flat (no capital change)</td></tr>
<tr><td>Penalty - Form 5 non-filing</td><td>INR 10,000 to INR 50,000 on LLP; INR 10,000 to INR 1 lakh per Designated Partner</td></tr>
<tr><td>Late Fee - Form 3 LLP</td><td>INR 100 per day (no upper cap - Section 67)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Name Change consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20name%20change%20service." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Name Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Name availability check</td><td>1 business day</td></tr>
<tr><td>RUN-LLP filing + MCA approval</td><td>1-3 business days</td></tr>
<tr><td>Form 5 LLP filing + ROC processing</td><td>3-7 business days</td></tr>
<tr><td>New Certificate of Incorporation issuance</td><td>7-14 business days after Form 5 approval</td></tr>
<tr><td>Supplementary Deed + Form 3 LLP filing</td><td>2-4 business days after Certificate</td></tr>
<tr><td>Total end-to-end (Patron Accounting)</td><td>15-25 business days</td></tr>
<tr><td>Statutory Deadline - Form 5</td><td>Within 30 days of RUN-LLP approval</td></tr>
<tr><td>Statutory Deadline - Form 3</td><td>Within 30 days of new Certificate</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Two Critical Deadlines:</strong> (1) Form 5 LLP within 30 days of RUN-LLP approval - penalty INR 10,000 to INR 50,000. (2) Form 3 LLP within 30 days of new Certificate - penalty INR 100/day with no upper cap. Both must be tracked independently.</p>

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
            <h2 class="section-title">Why Choose Professional Help for LLP Name Change?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg></div><h3 class="feature-title">Name Search Expertise</h3><p class="feature-text">Pre-filing MCA portal and trademark database search to avoid costly RUN-LLP rejection (INR 200 non-refundable).</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Dual Deadline Management</h3><p class="feature-text">Two separate 30-day deadlines (Form 5 and Form 3) precisely tracked - missed deadlines carry serious penalties.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Correct Form Filing</h3><p class="feature-text">Form 5 requires approved RUN-LLP SRN and specific attachments. Errors cause rejection and resubmission delays.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Post-Change Compliance</h3><p class="feature-text">Full impact of name change extends to PAN, GST, banking, and contracts - nothing is missed.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">Seamless Coordination</h3><p class="feature-text">CS professionals handle the entire multi-step process from resolution to post-Certificate updates.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, Gurugram. Starting at INR 2,499 + GST with no hidden charges.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ LLP Matters Handled | 4.8/5 Client Rating | 15-25 Day Turnaround | Offices in Pune, Mumbai, Delhi, Gurugram</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional LLP Name Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Aspect</th><th>Patron Accounting</th><th>DIY (Self-Filing)</th></tr></thead>
                    <tbody>
                        <tr><td>Name Availability Check</td><td>Pre-filing MCA + trademark search</td><td>Risk of filing a name that gets rejected</td></tr>
<tr><td>RUN-LLP Filing</td><td>Handled same day with all documents</td><td>Straightforward but errors delay by 90 days</td></tr>
<tr><td>Form 5 Deadline</td><td>Monitored from day of RUN approval</td><td>Easy to miss 30-day window</td></tr>
<tr><td>Form 3 Deadline</td><td>Tracked and filed within 30 days</td><td>Second deadline easy to overlook</td></tr>
<tr><td>Post-Change Compliance</td><td>Full checklist provided and assisted</td><td>Often overlooked (PAN, GST, bank)</td></tr>
<tr><td>Rejection Risk</td><td>Low - experienced in MCA requirements</td><td>High - incomplete attachments common</td></tr>
<tr><td>Total Cost</td><td>INR 2,499 + GST + Govt fees</td><td>Govt fees only (INR 200 + Form 5 + Form 3)</td></tr>

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
            <h2 class="section-title">Related LLP Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/llp-agreement-change">LLP Agreement Change</a> - amending other clauses of your LLP Agreement</li>
<li><a href="/llp-partner-change">LLP Partner Change</a> - adding or removing partners</li>
<li><a href="/llp-contribution-change">LLP Contribution Change</a> - revising capital contribution</li>
<li><a href="/llp-incorporation">LLP Registration in India</a> - incorporating a new LLP</li>
<li><a href="/pvt-llp-compliance">LLP Compliance</a> - annual filings and secretarial services</li>
<li><a href="/convert-llp-to-private-limited-company">LLP to Pvt Ltd Conversion</a></li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - LLP Name Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Details</th></tr></thead><tbody>
<tr><td>Section 19, LLP Act 2008</td><td>LLP may change its name by filing notice with Registrar. All partner consent if agreement is silent.</td></tr>
<tr><td>Rule 20, LLP Rules 2009</td><td>Governs RUN-LLP reservation and Form 5 filing process.</td></tr>
<tr><td>Section 15 + Rule 18</td><td>LLP name must end with 'LLP' or 'Limited Liability Partnership'. Restricted/prohibited words governed.</td></tr>
<tr><td>Section 17, LLP Act 2008</td><td>Central Government can direct name change if undesirable, misleading, or similar to existing entity.</td></tr>
<tr><td>Section 17(3) + Rule 19A (2022)</td><td>Failure to change within 3 months of direction: ROC allots ORDNC-prefixed name via Form 16A.</td></tr>
<tr><td>Section 21, LLP Act 2008</td><td>Display new name on all invoices, official correspondence, and publications.</td></tr>
<tr><td>Section 67, LLP Act 2008</td><td>Form 3 LLP late fee: INR 100 per day of delay with no upper cap.</td></tr>
<tr><td>Section 17/19 Penalty</td><td>Form 5 non-filing: Fine INR 10,000-50,000 on LLP; INR 10,000-1 lakh per Designated Partner.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.indiacode.nic.in/bitstream/123456789/2023/1/A2009-06.pdf" target="_blank" rel="noopener">LLP Act 2008 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - LLP Name Change</h2>
                    <p class="faq-expanded__lead">Get answers about RUN-LLP, Form 5, Form 3, name reservation, deadlines, penalties, and post-change compliance.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'LLP Name Change'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the procedure for LLP name change in India?</h3>
                        <div class="faq-expanded__a"><p>File RUN-LLP form for name reservation (INR 200), then Form 5 LLP within 30 days of approval, obtain new Certificate of Incorporation from ROC, execute Supplementary LLP Agreement, and file Form 3 LLP within 30 days of Certificate. Governed by Section 19, LLP Act 2008.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What forms are required for LLP name change?</h3>
                        <div class="faq-expanded__a"><p>Three forms: RUN-LLP (name reservation, no DSC required), Form 5 LLP (notice of change, filed within 30 days of RUN approval, requires DSC + CS/CA certification), and Form 3 LLP (Supplementary Agreement, filed within 30 days of new Certificate).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit to file Form 5 LLP after name approval?</h3>
                        <div class="faq-expanded__a"><p>Form 5 must be filed within 30 days of receiving the approved RUN-LLP SRN. Missing this attracts a fine of INR 10,000 to INR 50,000 on the LLP and INR 10,000 to INR 1 lakh on each Designated Partner.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does LLP name change take?</h3>
                        <div class="faq-expanded__a"><p>15-25 business days end-to-end. RUN-LLP approval: 1-3 days. Form 5 processing: 3-7 days. New Certificate: 7-14 days after Form 5 approval. Plus Form 3 LLP filing thereafter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can the Central Government force an LLP to change its name?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 17, the Central Government can direct a name change if the name is identical to or too similar to another entity or trademark. Failure within 3 months results in forced ORDNC-prefixed name under Rule 19A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the post-change compliance requirements?</h3>
                        <div class="faq-expanded__a"><p>Update PAN, TAN, GST registration, bank accounts, contracts, letterheads, invoices, and website with new name per Section 21 LLP Act 2008.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">LLP ka naam kaise badle?</h3>
                        <div class="faq-expanded__a"><p>RUN-LLP form fill karein MCA portal par (fee INR 200). Approval ke baad 30 din mein Form 5 LLP file karein. ROC se new Certificate milne ke baad Supplementary Agreement execute karke Form 3 LLP 30 din mein file karein. Section 19 LLP Act 2008 ke under governed.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which form for name reservation?</strong> RUN-LLP web form on MCA V3 Portal (no DSC, INR 200 fee, 90-day reservation).</p>
<p><strong>Which form for name notice?</strong> Form 5 LLP - filed within 30 days of RUN-LLP approval.</p>
<p><strong>Which form updates agreement?</strong> Form 3 LLP - filed within 30 days of new Certificate of Incorporation.</p>
<p><strong>What confirms the name change?</strong> New Certificate of Incorporation issued by ROC (Form 16). Name effective from this date.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Two 30-Day Deadlines - Track Both to Avoid Heavy Penalties</h2>
            <div class="content-text">
                
                <p><strong>LLP name change has two separate compliance deadlines:</strong></p>
<ul>
<li><strong>Deadline 1 - Form 5:</strong> Within 30 days of RUN-LLP approval. Penalty: INR 10,000-50,000 on LLP; INR 10,000-1 lakh per Designated Partner.</li>
<li><strong>Deadline 2 - Form 3:</strong> Within 30 days of new Certificate. Penalty: INR 100/day with no upper cap (Section 67).</li>
</ul>
<p><strong>Don't forget post-change updates:</strong> PAN, GST, bank, contracts, letterheads - all must reflect new name per Section 21.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20my%20LLP%20name.%20Please%20help." target="_blank">WhatsApp us</a> on the day you decide - we track both deadlines.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Change Your LLP Name - Starting at INR 2,499</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">LLP name change is a multi-step, deadline-sensitive legal process involving name reservation, MCA form filings, ROC approvals, and post-change statutory updates. Two separate 30-day compliance windows and significant penalties make this a process that benefits from professional CS assistance.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CS team manages your LLP name change end-to-end - from pre-filing name checks and RUN-LLP reservation to Form 5 and Form 3 filings, new Certificate receipt, and post-change compliance updates. 500+ LLP matters handled.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20name%20change%20service." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=LLP%20Name%20Change%20-%20RUN-LLP&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20change%20my%20LLP%20name.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Name Change Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your LLP name changed from Patron Accounting offices across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">LLP Name Change by City</div><div class="pa-block-sub">RUN-LLP, Form 5 and Form 3 from Patron Accounting</div><div class="pa-city-grid">
<a href="/llp-name-change/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/llp-name-change/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/llp-name-change/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/llp-name-change/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related LLP Services</div><div class="pa-block-sub">Agreement, partner, and compliance services</div><div class="pa-cross-grid">
<a href="/llp-agreement-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Agreement Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-partner-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Partner Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-contribution-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Contribution Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/convert-llp-to-private-limited-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP to Pvt Ltd</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: LLP Act 2008 amendments, LLP Rules 2009 changes, RUN-LLP form updates, or MCA V3 portal changes.</p>
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
