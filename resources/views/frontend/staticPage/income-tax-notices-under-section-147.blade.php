

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
    <title>Income Tax Notice u/s 147 - Reassessment, Reply & Process</title>
    <meta name="description" content="Received IT notice u/s 147 for income escaping assessment? Our CAs handle 148A objections to reassessment proceedings. Starting at INR 3,999.">
    <link rel="canonical" href="/income-tax-notices-under-section-147">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Notice u/s 147 - Reassessment, Reply & Process">
    <meta property="og:description" content="Received IT notice u/s 147 for income escaping assessment? Our CAs handle 148A objections to reassessment proceedings. Starting at INR 3,999.">
    <meta property="og:url" content="/income-tax-notices-under-section-147">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Notice u/s 147 - Reassessment, Reply & Process">
    <meta name="twitter:description" content="Received IT notice u/s 147 for income escaping assessment? Our CAs handle 148A objections to reassessment proceedings. Starting at INR 3,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Section 147 Notice: CA Reassessment Reply",
          "description": "Received IT notice u/s 147 for income escaping assessment? Our CAs handle 148A objections to reassessment proceedings. Starting at INR 3,999.",
          "url": "https://www.patronaccounting.com/income-tax-notices-under-section-147",
          "serviceType": "Section 147 Notice: CA Reassessment Reply",
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
            "url": "https://www.patronaccounting.com/income-tax-notices-under-section-147",
            "price": "50"
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
              "name": "Section 147 Notice: CA Reassessment Reply",
              "item": "https://www.patronaccounting.com/income-tax-notices-under-section-147"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is Section 147 of the Income Tax Act?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 147 grants the AO the power to reassess income that escaped taxation in a prior Assessment Year. Post Finance Act 2021, a mandatory Section 148A show cause notice procedure must be completed before the Section 148 reassessment notice can be issued."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Section 147 and Section 148?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 147 is the substantive power to reassess escaped income. Section 148 is the procedural notice that formally initiates reassessment. Before Section 148, a mandatory Section 148A show cause notice must be issued and the assessee must be given an opportunity to respond."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit for reassessment under Section 147?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Post 01-09-2024 under Section 149: for escaped income below INR 50 lakh, 3 years and 3 months from end of Assessment Year. For INR 50 lakh or more, 5 years and 3 months. Budget 2024 reduced the earlier 10-year limit for high-value cases to 5 years."
              }
            },
            {
              "@type": "Question",
              "name": "Can I challenge a Section 147 reassessment notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. At the Section 148A stage, file written objections challenging validity of information, time limit, or prior full disclosure. Under GKN Driveshafts (2003), the AO must pass a speaking order on objections. After reassessment, appeal to CIT(A) and ITAT is available."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I do not respond to a Section 148A or 148 notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Non-response to Section 148A means the AO proceeds without your explanation and issues the Section 148 notice. Ignoring the Section 148 notice results in Best Judgement Assessment under Section 144, typically with a significantly inflated tax demand."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties if income is found to have escaped assessment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 270A: for under-reporting, penalty of 50% of tax on under-reported income; for misreporting (false statements, suppression), penalty of 200% of tax. Tax demands also carry interest under Sections 234A, 234B, and 234C."
              }
            },
            {
              "@type": "Question",
              "name": "What does income escaping assessment mean under Section 147?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Income has escaped assessment when it was not included in the original assessment, was assessed at a lower rate, or excessive relief was allowed. Common examples: unreported rental income, undisclosed capital gains, interest income omitted, foreign assets not declared."
              }
            },
            {
              "@type": "Question",
              "name": "What is the mandatory Section 148A procedure before reassessment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 148A (Finance Act 2021) requires: AO issues SCN with information of escaped income; assessee gets 7-30 days to respond; AO considers response and gets specified authority approval; AO passes speaking order under 148A(d). Only if order confirms a fit case can Section 148 notice be issued. Quick Answers What is Section 147 notice? Empowers the AO to reassess income that escaped taxation in a prior year. Requires mandatory Section 148A SCN procedure before Section 148 notice. Time limit? Post 01-09-2024: 3 years + 3 months (below INR 50 lakh); 5 years + 3 months (INR 50 lakh+) from end of Assessment Year. Can it be challenged? Yes - at 148A stage through written objections; after reassessment order through CIT(A) and ITAT appeal. 147 vs 148 difference? Section 147 is the substantive power to reassess; Section 148 is the procedural notice. Before 148, a 148A SCN is mandatory. Penalty? Under-reporting: 50% of tax (Section 270A); Misreporting: 200% of tax (Section 270A)."
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
                        IT Notice under Section 147: Expert CA Reassessment Defence
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Income Escaping Assessment:</span> Section 147 empowers the AO to reopen and reassess income that was under-reported, wrongly exempted, or not brought to tax in a prior Assessment Year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Mandatory 148A Procedure:</span> AO must first issue a Show Cause Notice under Section 148A, wait for your response, obtain approval, and only then issue the Section 148 notice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reduced Time Limits (Budget 2024):</span> Post 01-09-2024: 3 years + 3 months for income below INR 50 lakh; 5 years + 3 months for INR 50 lakh+ (reduced from 10 years)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Full-Cycle CA Defence:</span> From Section 148A show cause notice through objection filing, return filing, reassessment order contestation, and CIT(A) appeal</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">400+ reassessment cases handled | 4.8/5 rating | 4 offices across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Section%20147%20Reassessment%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0AI%20need%20help%20with%20Section%20147%20reassessment.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20Section%20147/148%20reassessment%20notice.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - Section 147 Notice',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'income-tax-notices-under-section-147', 'label' => 'Section 147 Reassessment Defence', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-notice', 'label' => 'Income Tax Notice Assistance', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notices-under-section-148', 'label' => 'Section 148 Notice', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notices-under-section-143-3', 'label' => 'Section 143(3) Scrutiny', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-audit', 'label' => 'Tax Audit Service', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I received a 148A notice alleging INR 80 lakh of escaped income from a property sale. Patron's CA showed the capital gain was correctly disclosed in my original ITR. The AO dropped the case after our objection.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">HNI Client</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bengaluru</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Three Assessment Years were reopened simultaneously. The team coordinated all three responses, filed consistent submissions, and two were closed at the 148A stage. The third was resolved at reassessment with no penalty.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">BO</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Business Owner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The AO tried to expand the reassessment scope beyond the original 148 notice issue. Patron's CA invoked Explanation 3 limitations and the final order was restricted to the specific issue. No penalty imposed.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">NRI Client</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai (remote)</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting challenged the 148A notice on time-bar grounds citing the Budget 2024 reduced time limit. The specified authority rejected the AO's request to proceed. Case closed without any demand.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Salaried Professional</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 400+ clients who trust Patron Accounting for Section 147 reassessment defence.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is S.147</a><a href="#who-section" class="toc-btn">Triggers</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why CA</a><a href="#comparison-section" class="toc-btn">DIY vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 147 Income Tax Notice - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Section 147 Notice Services at a Glance</strong></p>
                    <p>Section 147 empowers the AO to reopen your already-completed assessment if income has escaped taxation. The process now requires a mandatory Section 148A show cause notice before the Section 148 reassessment notice can be issued. Time limits: 3 years + 3 months (income below INR 50 lakh) or 5 years + 3 months (income INR 50 lakh or more) from the end of the relevant Assessment Year.</p>
                </div>
                <p>If you have received a notice related to Section 147 of the Income Tax Act, 1961, the Income Tax Department believes that some income chargeable to tax has 'escaped assessment' in a previous year. This could mean income that was never disclosed, was under-reported, attracted wrong deductions, or was assessed at an incorrect rate.</p>
                <p>Under the post-Finance Act 2021 regime, reassessment under Section 147 follows a mandatory two-stage process: first a Show Cause Notice under Section 148A requiring your response, and then - if the AO concludes a fit case exists - a formal reassessment notice under Section 148. At every stage you have clearly defined rights, including the right to request reasons, file objections, and challenge the notice.</p>
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
                <h2 class="section-title">What is Section 147 of the Income Tax Act?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Section 147 of the Income Tax Act, 1961</strong> grants the Assessing Officer the power to reassess or recompute income for a prior Assessment Year if they have reason to believe that income chargeable to tax has escaped assessment - meaning it was not assessed, was under-assessed, was assessed at too low a rate, or excessive relief or deductions were allowed.</p>
<p>Unlike the original assessment, reassessment under Section 147 is triggered by specific information - such as data from AIS, third-party reports, investigation wing findings, CAG objections, or CBDT risk management flags. Pure suspicion or a mere change of opinion by the AO is not sufficient; documented information is mandatory under the post-Finance Act 2021 framework.</p>
<p>The response process is managed through <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> e-Proceedings portal.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Section 147 Notice:</strong></p>
                    <p><strong>Income Escaping Assessment</strong> - Income not disclosed, under-reported, or assessed at a lower rate in a prior Assessment Year.</p>
<p><strong>Section 148A</strong> - Mandatory pre-notice procedure (Finance Act 2021): AO must issue SCN, consider response, obtain approval before issuing Section 148 notice.</p>
<p><strong>Section 148</strong> - Formal reassessment notice issued after completing the 148A procedure; initiates actual reassessment proceedings.</p>
<p><strong>GKN Driveshafts Principles</strong> - Landmark SC ruling (2003): taxpayer has the right to demand reasons for reassessment and AO must pass a speaking order on objections.</p>
<p><strong>Section 270A</strong> - Penalty: 50% of tax for under-reporting; 200% of tax for misreporting of income.</p>
<p><strong>Explanation 3 to Section 147</strong> - AO may assess any other escaped income that 'comes to notice' during reassessment proceedings.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Notice document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<line x1="58" y1="48" x2="107" y2="48" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round"/>
<line x1="58" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="68" x2="95" y2="68" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="78" x2="100" y2="78" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="88" x2="90" y2="88" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="98" x2="95" y2="98" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<!-- Section 147 badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="140" y="59" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">S.147</text>
<!-- 148A badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="89" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">148A</text>
<!-- Shield defence -->
<rect x="55" y="118" width="50" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="80" y="130" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEFENCE</text>
<!-- Alert icon -->
<circle cx="152" cy="35" r="14" fill="#FEE2E2" stroke="#EF4444" stroke-width="1.5"/>
<text x="152" y="40" font-size="14" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">!</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Section 147 Notice</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 147</span>
                        <strong>Reassessment Defence</strong>
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
            <h2 class="section-title">When Can Section 147 Be Invoked? Triggers and Conditions</h2>
            <div class="content-text">
                
                <p>The AO can reopen an assessment under Section 147 only when there is documented 'information' (not mere opinion). Post Finance Act 2021, information must come from:</p>
<ul>
<li>CBDT risk management flag - income flagged by algorithmic risk management strategy</li>
<li>CAG final objection - raised by Comptroller and Auditor General</li>
<li>AIS/Form 26AS mismatch - significant discrepancy between reported income and department data</li>
<li>Survey findings under Section 133A - information from survey operations</li>
<li>Investigation wing intelligence - credible information about concealed assets or transactions</li>
</ul>
<p><strong>Common triggers:</strong> Unreported rental income or capital gains from AIS data, high-value property purchases, wrongly claimed deductions, non-filing despite taxable income, undisclosed foreign assets, crypto/F&O trading income not reported.</p>
<p><strong>Safeguards:</strong> AO cannot reopen on mere change of opinion if all material facts were disclosed. Section 148A procedure is mandatory. Minimum escapement threshold is INR 1 lakh.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Section 147 Reassessment Defence Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 148A SCN Analysis and Response</td><td>Detailed review of Show Cause Notice, the information relied upon, and preparation of comprehensive written objection to prevent Section 148 notice</td></tr>
<tr><td>Objection Filing and Hearing</td><td>Filing written objections challenging the basis for reopening, citing GKN Driveshafts principles; representing you in the 148A hearing</td></tr>
<tr><td>Section 148 Notice Response and Return Filing</td><td>Advising whether to file a fresh return or treat original as the return; compiling all supporting documentation</td></tr>
<tr><td>Reassessment Proceedings Representation</td><td>Managing the entire reassessment: responding to questionnaires, submitting accounts, attending e-proceedings, making legal submissions</td></tr>
<tr><td>Reassessment Order Challenge</td><td>Filing appeal before CIT(A) if the reassessment order raises an unjustified tax demand</td></tr>
<tr><td>ITAT Appeal</td><td>Representing you before the Income Tax Appellate Tribunal if the CIT(A) order is adverse</td></tr>

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
            <h2 class="section-title">8-Step Section 147 Reassessment Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The post-Finance Act 2021 regime has two mandatory stages before reassessment begins. Penalty under Section 270A for concealed income: up to 200% of tax. For under-reporting: 50% of tax.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Analyse the Section 148A Show Cause Notice</h3><p class="step-description">The AO issues a 148A(b) SCN specifying information suggesting income has escaped assessment. You typically have 7-30 days to respond. Identify the basis for reopening, the Assessment Year, and the alleged escaped income.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SCN analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Basis identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="60" height="35" rx="4" fill="#FFF" stroke="#EF4444" stroke-width="1"/><line x1="38" y1="35" x2="82" y2="35" stroke="#EF4444" stroke-width="2.5" stroke-linecap="round"/><line x1="38" y1="45" x2="75" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><text x="60" y="78" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">148A SCN</text></svg></div><span class="illustration-label">SCN Reviewed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File Section 148A Objection</h3><p class="step-description">This is the most critical step - a well-drafted objection can stop the reassessment entirely. Challenge whether AO has valid 'information', whether the notice is within time limit, and whether material facts were already disclosed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objection filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Case law cited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="55" y="56" width="40" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="75" y="65" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OBJECTION</text></svg></div><span class="illustration-label">Objection Filed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Await the Section 148A(d) Order</h3><p class="step-description">AO must pass a speaking order on your objection. If the order closes the case, no Section 148 notice can be issued. If it proceeds, the AO issues the Section 148 notice along with the 148A order.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Order received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Outcome assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">148A(d)</text><text x="60" y="50" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ORDER</text></svg></div><span class="illustration-label">Order Received</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Respond to the Section 148 Notice</h3><p class="step-description">File a return of income for the relevant AY within the time specified (max 3 months). Either file a fresh return or request original return be treated as the return for this notice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Return filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="35" y="50" width="50" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="60" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RETURN</text></svg></div><span class="illustration-label">Return Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Participate in Reassessment Proceedings</h3><p class="step-description">The AO may issue questionnaires, request books of accounts, and conduct hearings. Submit structured response with indexed exhibits. Challenge the scope under Explanation 3 to Section 147.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Responses submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scope controlled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="65" y="20" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="25" y="48" width="30" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><rect x="65" y="48" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">Proceedings Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Review Draft Assessment Order</h3><p class="step-description">Under the Faceless Assessment Scheme, a draft order is shared before finalisation. File objections if proposed additions are incorrect or exceed the scope of the reopening notice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Draft reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objections filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M62 55l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Order Reviewed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Respond to Penalty SCN</h3><p class="step-description">If reassessment results in additions, the AO issues a SCN for penalty under Section 270A. A well-reasoned reply citing reasonable cause can mitigate or avoid the penalty.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Penalty defence filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cause established</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FEE2E2" stroke="#EF4444" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">270A</text><text x="60" y="50" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PENALTY</text></svg></div><span class="illustration-label">Penalty Addressed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File CIT(A) Appeal if Order Adverse</h3><p class="step-description">If the reassessment order is unjustified, file appeal before Commissioner of Income Tax (Appeals) within 30 days. Patron Accounting handles appeal drafting, grounds framing, and representation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Appeal filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grounds framed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CIT(A) APPEAL</text></svg></div><span class="illustration-label">Appeal Filed</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Section 147 Reassessment Response</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Where to Obtain</th></tr></thead><tbody>
<tr><td>Original ITR and ITR-V</td><td>Show what was originally disclosed</td><td>e-Filing portal</td></tr>
<tr><td>Form 26AS / AIS for relevant AY</td><td>Identify data the AO may be relying on</td><td>incometax.gov.in</td></tr>
<tr><td>Bank statements (relevant AY)</td><td>Source of funds / transaction verification</td><td>Net banking / bank</td></tr>
<tr><td>Investment, deduction, and exemption proofs</td><td>Validate original claims in ITR</td><td>Insurer / mutual fund / employer</td></tr>
<tr><td>Capital gains computation and sale deeds</td><td>Verify property/share sale transactions</td><td>Broker / registrar</td></tr>
<tr><td>Business P&L and Balance Sheet</td><td>Income and expense verification</td><td>CA / accountant</td></tr>
<tr><td>Evidence of disclosed income sources</td><td>Demonstrate original full and true disclosure</td><td>CA / records</td></tr>
<tr><td>Loan agreements, gift deeds, inheritance records</td><td>Explain high-value transactions</td><td>Personal records / sub-registrar</td></tr>
<tr><td>Prior correspondence with AO</td><td>Context for reassessment trigger</td><td>Own records</td></tr>
<tr><td>Relevant case law citations</td><td>Support objection to reopening validity</td><td>CA / legal research</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Challenges in Section 147 Cases</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Challenging the validity of reopening</td><td>148A notice based on weak or erroneous AIS data</td><td>Detailed objection citing lack of valid 'information' to establish reopening is based on mere change of opinion, which is legally impermissible</td></tr>
<tr><td>High escaped income allegations (INR 50 lakh+)</td><td>Extended time limit and higher stakes</td><td>Pre-assessment review of all years, identify every disclosure made, prepare comprehensive exhibit-indexed response limiting reassessment scope</td></tr>
<tr><td>Multiple Assessment Years under simultaneous reopening</td><td>AO issues 148A notices for 2-3 AYs at once</td><td>Coordinated responses across all years ensuring consistency; where appropriate, file combined objection challenging all reopening notices</td></tr>
<tr><td>Best Judgement Assessment risk on non-response</td><td>AO completes Section 144 assessment with inflated demand</td><td>Emergency response service - Patron Accounting handles responses even when timelines are tight; contact us immediately on receipt</td></tr>

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
            <h2 class="section-title">Section 147 Reassessment Defence Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>148A Objection (Standard)</td><td>INR 3,999</td></tr>
<tr><td>148A + 148 Full Defence (1 AY)</td><td>INR 7,999</td></tr>
<tr><td>Multi-Year Reassessment (2-3 AYs, INR 50L+ escaped)</td><td>INR 14,999 onwards</td></tr>
<tr><td>Reassessment + CIT(A) Appeal</td><td>INR 19,999 onwards</td></tr>
<tr><td>Emergency Response (48-72 hours)</td><td>INR 7,999 onwards</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 3,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Section 147 Notice consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%20147%20reassessment%20defence." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timelines in Section 147 Reassessment Proceedings</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Section 148A SCN response time</td><td>7-30 days (as specified in SCN)</td></tr>
<tr><td>AO passes Section 148A(d) order</td><td>1 month from end of month in which SCN reply received</td></tr>
<tr><td>Section 148 notice - return filing deadline</td><td>Max 3 months from end of month of notice; no extension</td></tr>
<tr><td>Reassessment proceedings - AO questionnaire response</td><td>15-30 days typically</td></tr>
<tr><td>Draft assessment order response (faceless)</td><td>Up to 30 days after draft is shared</td></tr>
<tr><td>Reassessment completion by AO</td><td>9 months from end of FY in which Section 148 notice was served</td></tr>
<tr><td>CIT(A) appeal filing deadline</td><td>30 days from date of receiving reassessment order</td></tr>
<tr><td>Patron Accounting - 148A objection preparation</td><td>2-4 business days (standard); 24-48 hours (emergency)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> The Section 148A objection is your best opportunity to stop reassessment entirely. Contact Patron Accounting immediately on receipt of any 148A SCN - objection preparation begins on the same day.</p>

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
            <h2 class="section-title">Why Section 147 Cases Require Professional CA Representation</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">148A Objection Can Stop Reassessment</h3><p class="feature-text">A precisely argued objection citing lack of valid information or prior full disclosure can cause the AO to drop the case at the 148A stage itself.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">GKN Driveshafts Rights</h3><p class="feature-text">The Supreme Court established your right to reasons for reopening and a speaking order on objections. A CA ensures these rights are exercised correctly.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Scope Control</h3><p class="feature-text">Under Explanation 3 to Section 147, the AO can assess any other escaped income. A CA limits scope and prevents fishing expeditions.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></div><h3 class="feature-title">Penalty Risk Management</h3><p class="feature-text">Additions attract Section 270A penalties of 50% to 200%. Professional calibration prevents additions from being framed as misreporting.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">Appeal-Ready from Day 1</h3><p class="feature-text">CIT(A) appeal on reassessment issues is complex. Patron Accounting builds the appeal record from the reassessment stage itself.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi NCR, and Bengaluru. 400+ reassessment cases handled across all complexity levels.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Clients Trust Patron Accounting for Reassessment Defence</h2>
            <div class="content-text">
                
                <p>400+ Reassessment Cases | 4.8/5 Client Rating | 300+ Verified Google Reviews | 8+ Years Avg CA Experience | 4 Offices: Pune, Mumbai, Delhi NCR, Bengaluru</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Response vs Professional CA Reassessment Defence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Factor</th><th>Patron Accounting CA Defence</th><th>DIY (Self-Response)</th></tr></thead>
                    <tbody>
                        <tr><td>148A Objection Quality</td><td>Legally precise objection citing case law and factual rebuttal</td><td>Risk of conceding the basis for reopening</td></tr>
<tr><td>GKN Driveshafts Rights</td><td>Formally invoked at correct procedural stage</td><td>Often unknown or not invoked correctly</td></tr>
<tr><td>Scope Control</td><td>Submissions crafted to limit AO to specific issue</td><td>Reassessment may expand to other issues</td></tr>
<tr><td>Return Filing Decision (148)</td><td>CA advises on optimal strategy for each situation</td><td>Often unsure whether to file fresh or treat original</td></tr>
<tr><td>Penalty Risk</td><td>Response calibrated to prevent misreporting characterisation</td><td>High - additions often framed as misreporting</td></tr>
<tr><td>CIT(A) Appeal Preparation</td><td>Appeal record built from day 1 of reassessment</td><td>Not built into reassessment stage</td></tr>
<tr><td>Time Required</td><td>3-7 days CA-managed; client effort minimal</td><td>20-40 hours; high error risk</td></tr>
<tr><td>Cost</td><td>INR 3,999 - INR 19,999 depending on complexity</td><td>Zero professional fee</td></tr>

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
            <h2 class="section-title">Related Income Tax Notice and Appeal Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/income-tax-notice">Income Tax Notice Assistance</a> - comprehensive notice handling hub</li>
<li><a href="/income-tax-notices-under-section-148">IT Notice under Section 148</a> - reassessment notice issuance procedure</li>
<li><a href="/income-tax-notices-under-section-142-1">IT Notice under Section 142(1)</a> - pre-assessment inquiry</li>
<li><a href="/income-tax-notices-under-section-143-3">IT Notice under Section 143(3)</a> - scrutiny assessment</li>
<li><a href="/income-tax-demand-under-section-156">Income Tax Demand under Section 156</a></li>
<li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a></li>
<li><a href="/tax-audit">Tax Audit Service</a></li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Section 147 and Related Provisions</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody>
<tr><td>Section 147</td><td>Substantive power: AO may reassess income that escaped assessment, subject to Sections 148 to 153.</td></tr>
<tr><td>Section 148A (Finance Act 2021)</td><td>Mandatory SCN procedure: issue SCN, consider response (7-30 days), obtain approval, pass speaking order before issuing Section 148 notice.</td></tr>
<tr><td>Section 148</td><td>Formal reassessment notice issued after 148A process; taxpayer must file return within time specified (max 3 months).</td></tr>
<tr><td>Section 149 (Time Limits)</td><td>Post 01-09-2024: 3 years + 3 months (income below INR 50 lakh); 5 years + 3 months (income INR 50 lakh+). Budget 2024 reduced upper limit from 10 to 5 years.</td></tr>
<tr><td>Section 151 (Approval)</td><td>AO must obtain prior approval from specified authority (Joint Commissioner / Principal Commissioner) before issuing notice.</td></tr>
<tr><td>Section 153</td><td>Completion of reassessment: 9 months from end of FY in which Section 148 notice is served.</td></tr>
<tr><td>Explanation 3 to Section 147</td><td>AO may assess any other escaped income that comes to notice during proceedings.</td></tr>
<tr><td>Section 270A</td><td>Penalty: 50% of tax for under-reporting; 200% of tax for misreporting. Applies if reassessment establishes concealed income.</td></tr>
<tr><td>GKN Driveshafts (2003) 259 ITR 19</td><td>Taxpayer has right to demand reasons for reassessment; AO must pass speaking order on objections.</td></tr>
<tr><td>Finance Act 2024 Amendment</td><td>Reduced maximum time limit from 10 years to 5 years for escaped income of INR 50 lakh+ (effective 01-09-2024).</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India e-filing portal</a> - for e-Proceedings responses.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Section 147 Reassessment</h2>
                    <p class="faq-expanded__lead">Get answers about Section 147 income escaping assessment, the 148A procedure, time limits, penalties, and how to challenge reassessment notices.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Section 147 Reassessment'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Section 147 of the Income Tax Act?</h3>
                        <div class="faq-expanded__a"><p>Section 147 grants the AO the power to reassess income that escaped taxation in a prior Assessment Year. Post Finance Act 2021, a mandatory Section 148A show cause notice procedure must be completed before the Section 148 reassessment notice can be issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Section 147 and Section 148?</h3>
                        <div class="faq-expanded__a"><p>Section 147 is the substantive power to reassess escaped income. Section 148 is the procedural notice that formally initiates reassessment. Before Section 148, a mandatory Section 148A show cause notice must be issued and the assessee must be given an opportunity to respond.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit for reassessment under Section 147?</h3>
                        <div class="faq-expanded__a"><p>Post 01-09-2024 under Section 149: for escaped income below INR 50 lakh, 3 years and 3 months from end of Assessment Year. For INR 50 lakh or more, 5 years and 3 months. Budget 2024 reduced the earlier 10-year limit for high-value cases to 5 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I challenge a Section 147 reassessment notice?</h3>
                        <div class="faq-expanded__a"><p>Yes. At the Section 148A stage, file written objections challenging validity of information, time limit, or prior full disclosure. Under GKN Driveshafts (2003), the AO must pass a speaking order on objections. After reassessment, appeal to CIT(A) and ITAT is available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I do not respond to a Section 148A or 148 notice?</h3>
                        <div class="faq-expanded__a"><p>Non-response to Section 148A means the AO proceeds without your explanation and issues the Section 148 notice. Ignoring the Section 148 notice results in Best Judgement Assessment under Section 144, typically with a significantly inflated tax demand.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the penalties if income is found to have escaped assessment?</h3>
                        <div class="faq-expanded__a"><p>Under Section 270A: for under-reporting, penalty of 50% of tax on under-reported income; for misreporting (false statements, suppression), penalty of 200% of tax. Tax demands also carry interest under Sections 234A, 234B, and 234C.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What does income escaping assessment mean under Section 147?</h3>
                        <div class="faq-expanded__a"><p>Income has escaped assessment when it was not included in the original assessment, was assessed at a lower rate, or excessive relief was allowed. Common examples: unreported rental income, undisclosed capital gains, interest income omitted, foreign assets not declared.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the mandatory Section 148A procedure before reassessment?</h3>
                        <div class="faq-expanded__a"><p>Section 148A (Finance Act 2021) requires: AO issues SCN with information of escaped income; assessee gets 7-30 days to respond; AO considers response and gets specified authority approval; AO passes speaking order under 148A(d). Only if order confirms a fit case can Section 148 notice be issued.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is Section 147 notice?</strong> Empowers the AO to reassess income that escaped taxation in a prior year. Requires mandatory Section 148A SCN procedure before Section 148 notice.</p>
<p><strong>Time limit?</strong> Post 01-09-2024: 3 years + 3 months (below INR 50 lakh); 5 years + 3 months (INR 50 lakh+) from end of Assessment Year.</p>
<p><strong>Can it be challenged?</strong> Yes - at 148A stage through written objections; after reassessment order through CIT(A) and ITAT appeal.</p>
<p><strong>147 vs 148 difference?</strong> Section 147 is the substantive power to reassess; Section 148 is the procedural notice. Before 148, a 148A SCN is mandatory.</p>
<p><strong>Penalty?</strong> Under-reporting: 50% of tax (Section 270A); Misreporting: 200% of tax (Section 270A).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Received a 148A or 148 Notice? Act Immediately</h2>
            <div class="content-text">
                
                <p><strong>Your Section 148A objection window is the most critical stage.</strong> A well-drafted objection can stop the entire reassessment before it begins.</p>
<ul>
<li><strong>On receipt of 148A SCN:</strong> Contact Patron Accounting immediately - objection preparation begins same day</li>
<li><strong>Before 148A deadline:</strong> File comprehensive written objection citing lack of valid information, prior full disclosure, time-bar</li>
<li><strong>If 148 notice issued:</strong> File return or seek AO approval to treat original return; engage CA for reassessment proceedings</li>
<li><strong>After reassessment order:</strong> 30 days to file CIT(A) appeal - missing this deadline forecloses your appeal right</li>
</ul>
<p><strong>Penalty reminder:</strong> Under-reporting: 50% of tax; Misreporting: 200% of tax (Section 270A).</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20148A/148%20notice.%20Need%20urgent%20help." target="_blank">WhatsApp us</a> immediately for reassessment defence.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert CA Reassessment Defence - Starting at INR 3,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">A notice related to Section 147 signals that the department has documented information suggesting income escaped taxation. This is a serious proceeding but one with clearly defined taxpayer rights and multiple opportunities to contest the reopening.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">The Finance Act 2021's mandatory Section 148A procedure, combined with the Budget 2024 reduction of time limits, has significantly strengthened taxpayer protection. Patron Accounting's CA team has handled 400+ reassessment cases - from straightforward 148A objections to multi-year high-value reassessments and ITAT appeals.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%20147%20reassessment%20defence." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Help%20with%20Section%20147%20Reassessment%20Notice&body=Hello%20Patron%20Accounting%2C%0A%0AI%20received%20a%20Section%20147/148%20reassessment%20notice.%20Please%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 147 Reassessment Defence Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get expert CA reassessment defence from Patron Accounting offices across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Section 147 Defence by City</div><div class="pa-block-sub">Expert CA reassessment defence from Patron Accounting</div><div class="pa-city-grid">
<a href="/income-tax-notices-under-section-147/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-notices-under-section-147/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-notices-under-section-147/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/income-tax-notices-under-section-147/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Income Tax Services</div><div class="pa-block-sub">Comprehensive notice and appeal services</div><div class="pa-cross-grid">
<a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice Hub</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-notices-under-section-148" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 148 Notice</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-notices-under-section-142-1" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 142(1) Notice</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-notices-under-section-143-3" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 143(3) Scrutiny</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-demand-under-section-156" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 156 Demand</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Trigger: Finance Act amendments to Section 147/148/149, CBDT circulars on reassessment, or new judicial precedents. Freshness Tier 1 - 6-Monthly Review.</p>
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
