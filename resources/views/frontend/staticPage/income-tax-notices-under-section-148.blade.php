

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Notice u/s 148 - Reopening of Assessment & Reply</title>
    <meta name="description" content="Received income tax notice u/s 148? Know time limits, the 148A pre-notice procedure, how to respond, and when to challenge. CA help from INR 3,499.">
    <link rel="canonical" href="/income-tax-notices-under-section-148">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Notice u/s 148 - Reopening of Assessment & Reply">
    <meta property="og:description" content="Received income tax notice u/s 148? Know time limits, the 148A pre-notice procedure, how to respond, and when to challenge. CA help from INR 3,499.">
    <meta property="og:url" content="/income-tax-notices-under-section-148">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Notice u/s 148 - Reopening of Assessment & Reply">
    <meta name="twitter:description" content="Received income tax notice u/s 148? Know time limits, the 148A pre-notice procedure, how to respond, and when to challenge. CA help from INR 3,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Income Tax Notice Section 148 India Guide",
          "description": "Received income tax notice u/s 148? Know time limits, the 148A pre-notice procedure, how to respond, and when to challenge. CA help from INR 3,499.",
          "url": "https://www.patronaccounting.com/income-tax-notices-under-section-148",
          "serviceType": "Income Tax Notice Section 148 India Guide",
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
              "name": "Income Tax Notice Section 148 India Guide",
              "item": "https://www.patronaccounting.com/income-tax-notices-under-section-148"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is an income tax notice under Section 148?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Section 148 notice is a formal reassessment notice issued by the Assessing Officer under the Income Tax Act, 1961 when there is credible information indicating that income for a prior assessment year has escaped assessment. Since Finance Act 2021, it can only be issued after completing the mandatory pre-notice procedure under Section 148A - which gives the taxpayer an opportunity to respond before the reassessment formally begins."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Section 148 and Section 148A?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 148A (Finance Act 2021, w.e.f. 01-04-2021) is the mandatory pre-notice procedure: the AO issues a Show Cause Notice disclosing the information, gives the taxpayer 7-30 days to respond, considers the reply, and passes a reasoned order under Section 148A(d). Only if the AO concludes reassessment is justified, the formal Section 148 reassessment notice is issued. Section 148 without a valid 148A procedure is void."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit for issuing a Section 148 notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Finance (No.2) Act 2024, effective 01-09-2024 [Section 149, IT Act 1961]: for escaped income below INR 50 lakh, the notice must be issued within 3 years and 3 months from the end of the relevant assessment year; for escaped income of INR 50 lakh or more, within 5 years and 3 months. These replaced the earlier 3-year and 10-year limits. A notice issued after these deadlines is void."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I ignore a Section 148A or Section 148 notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Ignoring a 148A SCN means the AO will proceed to issue a Section 148 notice on available information alone. Ignoring the 148 notice means the AO completes reassessment ex-parte under Section 144 (Best Judgment Assessment) - typically resulting in high-pitched additions, large tax demand, penalty under Section 270A, and possible prosecution for willful non-compliance."
              }
            },
            {
              "@type": "Question",
              "name": "Can a Section 148 notice be challenged in court?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A Section 148 notice can be challenged in the High Court via a Writ Petition on grounds including: notice issued beyond Section 149 time limits; improper or mechanical Section 151 approval (Union of India v. Rajeev Bansal, SC 2024); Section 148A procedure not followed; information relied upon is vague or insufficient; escaped income below INR 1 lakh. Courts have quashed numerous notices on these grounds."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum income threshold for Section 148 reassessment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Income Tax Department cannot reopen an assessment under Section 148A/148 if the amount of income that escaped assessment is less than INR 1 lakh. This threshold applies regardless of the year or the type of information. If the alleged escaped income is below INR 1 lakh, the AO cannot proceed."
              }
            },
            {
              "@type": "Question",
              "name": "Section 148 ka notice kya hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 148 ka notice ek reassessment notice hota hai jisme Income Tax Department pichle assessment year ki income dobara check karna chahti hai. Pehle Section 148A ke under show cause notice aata hai aur aapko 7-30 din jawab dene ka mauka milta hai. Sahi jawab de kar aap Section 148 notice rok sakte hain. CA ki madad se is notice ka sahi jawab dena bahut zaroori hai."
              }
            },
            {
              "@type": "Question",
              "name": "What is the right to file objections under GKN Driveshafts?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "As held by the Supreme Court in GKN Driveshafts India Ltd v. ITO (2003), a taxpayer has the right to file objections challenging the validity of the Section 148 notice - including on grounds of time limits, lack of jurisdiction, and insufficient information. The AO must pass a speaking order disposing of these objections before proceeding with the reassessment. Quick Answers What is income escaping assessment under Section 147? Income that was liable to be taxed in a prior year but was not assessed. Section 147 authorises the AO to reassess by issuing notice under Section 148, provided the Section 148A pre-notice procedure is followed. Time limits after Finance (No.2) Act 2024? 3 years 3 months from end of relevant AY if escaped income below INR 50 lakh; 5 years 3 months if INR 50 lakh or more (w.e.f. 01-09-2024). What is the Section 148A procedure? (1) Inquiry with specified authority approval; (2) Show Cause Notice to taxpayer; (3) 7-30 days for reply; (4) Reasoned 148A(d) order deciding whether to issue Section 148 notice. Without this, Section 148 is void. Rajeev Bansal SC 2024? Section 151 approval is a jurisdictional precondition, not a formality. Mechanical approval where the higher authority does not independently apply mind renders the reassessment void ab initio."
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
                        Income Tax Notice under Section 148 - Reassessment: What It Means, How to Respond, and When to Challenge
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Reassessment Notice for Prior Years</strong>:</span> A Section 148 notice reopens a prior year's income tax assessment - it can cover any year up to 5 years and 3 months old (w.e.f. 01-09-2024) [Section 149, IT Act 1961].</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Mandatory Section 148A Pre-Notice Procedure</strong>:</span> Before any Section 148 notice, the AO must follow the 4-step procedure under Section 148A (Finance Act 2021) - giving you a critical opportunity to stop the reassessment before it begins.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Potent Legal Defences Available</strong>:</span> Time limits, Section 151 approval requirements, and procedural compliance are powerful defences - a defective notice can be quashed (Union of India v. Rajeev Bansal, SC 2024).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>End-to-End Defence by Patron Accounting</strong>:</span> Section 148A response, ITR filing under Section 148, assessment representation, additions defence, and CIT(A)/ITAT appeal - from offices in Pune, Mumbai, Delhi, and Bengaluru.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 900+ Reassessment Cases | 58% 148A Cases Closed Without 148 Notice | 71% Addition Deletion Rate at CIT(A) | 4.8/5 Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Section%20148%20Notice%20Help&body=Hello%2C%0AI%20received%20a%20Section%20148%20notice.%20Please%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20a%20Section%20148%20reassessment%20notice.%20Please%20help." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'IT Notice Section 148',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Don\'t let a Section 148 notice become a large demand. Get expert CA intervention at the 148A stage. Starting at INR 3,499.',
])

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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is 148</a><a href="#who-section" class="toc-btn">Who Gets It</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">How to Respond</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why CA Help</a><a href="#comparison-section" class="toc-btn">DIY vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Notice under Section 148 - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Notice Section 148 Services at a Glance</strong></p>
                    <p>A Section 148 reassessment notice means the Income Tax Department is reopening your old return. You must respond - file the return or reply - within the time stated in the notice. Your first and most important opportunity is to challenge the validity of the Section 148A Show Cause Notice before the reassessment formally begins. Patron Accounting provides end-to-end defence starting at INR 3,499.</p>
                </div>
                <p>An income tax notice under Section 148 of the Income Tax Act, 1961 initiates reassessment proceedings for a prior assessment year in which the Assessing Officer (AO) has information suggesting that income chargeable to tax has escaped assessment. Since Finance Act 2021, the AO cannot issue a Section 148 notice without first completing the mandatory preliminary procedure under Section 148A. The Finance (No. 2) Act 2024, effective 01-09-2024, made critical changes to the time limits under Section 149.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Provisions</strong></td><td>IT Act 1961 - Sections 147, 148, 148A, 149, 151, 153</td></tr>
                        <tr><td><strong>Pre-Notice Procedure</strong></td><td>Mandatory Section 148A: SCN + response + reasoned order (Finance Act 2021, w.e.f. 01-04-2021)</td></tr>
                        <tr><td><strong>Time Limit (w.e.f. 01-09-2024)</strong></td><td>3 yrs 3 mths (escaped income below INR 50 lakh); 5 yrs 3 mths (INR 50 lakh or more) [Section 149]</td></tr>
                        <tr><td><strong>Minimum Threshold</strong></td><td>Dept cannot reopen if escaped income is less than INR 1 lakh</td></tr>
                        <tr><td><strong>Response to 148A SCN</strong></td><td>Min 7 days, max 30 days to submit explanation [Section 148A(b)]</td></tr>
                        <tr><td><strong>ITR Filing Deadline</strong></td><td>Within time specified in notice (max 3 months from month-end of notice date)</td></tr>
                        <tr><td><strong>Section 151 Approval</strong></td><td>Mandatory - PCIT/CIT for beyond 3-year cases; Joint Commissioner for within-3-year cases</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Section 148 ka notice kya hota hai? Yeh ek reassessment notice hai jisme Income Tax Department aapke pichle assessment year ki income dobara check karna chahti hai. Pehle Section 148A ke under show cause notice aata hai - sahi jawab dekar aap Section 148 notice rok sakte hain. CA ki madad bahut zaroori hai.</p>
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
                <h2 class="section-title">What is a Notice under Section 148?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>A Section 148 notice</strong> is a formal notice of reassessment issued by the Assessing Officer under the Income Tax Act, 1961 when credible information indicates that income chargeable to tax has escaped assessment in a prior assessment year.</p>
                    <p>Section 147 is the charging section (authorising reassessment). Section 148 is the procedural section (the notice mechanism). Section 148A is the mandatory pre-notice procedure (Finance Act 2021) requiring the AO to conduct inquiry, issue a Show Cause Notice, consider the taxpayer's reply, and pass a reasoned order before issuing the Section 148 notice. Section 149 governs time limits. Section 151 governs approval authority.</p>
                    <p>Receiving a Section 148 notice does not automatically mean you owe more tax. With the right professional response - beginning at the Section 148A stage - many reassessments are either withdrawn or result in minimal or no additions.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Notice Section 148:</strong></p>
                    <p><strong>Income Escaping Assessment:</strong> Income that was liable to be assessed and taxed in a prior year but was not assessed - either because the return was not filed, income was understated, or the AO missed it. Section 147 authorises reassessment.</p>
                    <p><strong>Section 148A Show Cause Notice (SCN):</strong> The mandatory preliminary notice the AO must issue before serving a Section 148 notice (Finance Act 2021, w.e.f. 01-04-2021). Gives the taxpayer 7-30 days to respond. The AO must pass a reasoned order under Section 148A(d).</p>
                    <p><strong>Section 149 Time Limits:</strong> Post Finance (No.2) Act 2024 (w.e.f. 01-09-2024): 3 years 3 months if escaped income below INR 50 lakh; 5 years 3 months if INR 50 lakh or more. Notice beyond these limits is void.</p>
                    <p><strong>Section 151 Specified Authority:</strong> Prior approval is mandatory: Joint Commissioner (within 3 yrs); PCIT/CIT (beyond 3 yrs). Mechanical approval is void (<em>Union of India v. Rajeev Bansal</em>, SC 2024).</p>
                    <p><strong>GKN Driveshafts Right:</strong> Supreme Court (2003) held taxpayer has right to file objections against Section 148 notice. AO must pass speaking order on objections before proceeding with reassessment.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Income Tax reassessment notice -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SECTION 148 NOTICE</text>
                            <text x="100" y="52" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">REASSESSMENT</text>
                            <line x1="45" y1="58" x2="155" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <rect x="45" y="65" width="50" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="70" y="77" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">148A SCN</text>
                            <path d="M100 74l10 0" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" marker-end="url(#arrow)"/>
                            <rect x="110" y="65" width="45" height="18" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <text x="132" y="77" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">REPLY</text>
                            <rect x="55" y="92" width="90" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                            <text x="100" y="103" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">148A(d) ORDER</text>
                            <circle cx="165" cy="25" r="14" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/>
                            <text x="165" y="29" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">!</text>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Defend at 148A Stage</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 148</span>
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
            <h2 class="section-title">Who Receives a Section 148A/148 Notice?</h2>
            <div class="content-text">
                
                <p>A Section 148A/148 notice can be issued to any taxpayer (individual, firm, company, HUF, trust) for any prior assessment year within the applicable time limit, when the AO has information from:</p>
                <ul>
                    <li><strong>AIS and SFT Data</strong> - High-value transactions reported by banks, registrars, mutual fund houses, or stockbrokers not reflected in the taxpayer's ITR for that year</li>
                    <li><strong>Third-Party Information</strong> - Information from other government departments, investigation wings, or intelligence inputs indicating undisclosed income</li>
                    <li><strong>Search and Survey Operations</strong> - Where a search under Section 132 or survey under Section 133A reveals prior year income not assessed</li>
                    <li><strong>TDS or GST Mismatch</strong> - Discrepancy between income reported in ITR and TDS/GST turnover data available with the department</li>
                    <li><strong>Non-Filing of Return</strong> - Where the taxpayer did not file an ITR for a prior year and the AO has information of taxable income</li>
                    <li><strong>Capital Gains Underreporting</strong> - Property transactions where stamp duty valuation exceeds declared sale consideration, or foreign remittances not matching ITR</li>
                    <li><strong>Crypto and Foreign Assets</strong> - Information from exchanges or foreign tax authorities regarding undisclosed crypto, foreign bank accounts, or assets</li>
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
            <h2 class="section-title">Patron Accounting Services for Section 148 Reassessment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Section 148A SCN Analysis and Response</strong></td><td>Detailed examination of the Show Cause Notice and underlying information; legally robust written reply to pre-empt the Section 148 notice</td></tr>
                        <tr><td><strong>Writ Petition Strategy and HC Challenge</strong></td><td>Where the notice is time-barred, lacks proper Section 151 approval, or is issued without adequate information - advising and co-ordinating with litigation counsel</td></tr>
                        <tr><td><strong>ITR Filing under Section 148</strong></td><td>Filing of return for the reassessment year within the notice deadline with accurate income, deductions, and computed tax</td></tr>
                        <tr><td><strong>Assessment Representation</strong></td><td>Complete management of reassessment proceedings under Section 143(3)/144/144B including submissions and faceless assessment responses</td></tr>
                        <tr><td><strong>Objections and Additions Defence</strong></td><td>Point-by-point rebuttal of proposed additions with documentary evidence and legal precedents (GKN Driveshafts right)</td></tr>
                        <tr><td><strong>CIT(A) Appeal and ITAT Representation</strong></td><td>Filing appeal against adverse reassessment order under Section 246A; ITAT representation for further challenges</td></tr>

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
            <h2 class="section-title">How to Respond to a Section 148A/148 Notice - Step-by-Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Section 148 reassessment process has two stages. The most critical intervention is at Stage 1 - the Section 148A SCN - before the formal reassessment notice is issued.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Receive and Verify the 148A SCN</h3><p class="step-description">You will receive a Show Cause Notice under Section 148A(b) via email, SMS, and the e-filing portal. The SCN must disclose the specific information suggesting escaped income, specify the assessment year, and give you 7-30 days to respond. Verify the date against Section 149 time limits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Verify AY and date</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Check 149 time limits</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="6" rx="2" fill="#E8712C"/><text x="45" y="24" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">148A</text><line x1="30" y1="34" x2="90" y2="34" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="44" x2="85" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">SCN Received</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Review the Information Disclosed</h3><p class="step-description">Analyse whether the information is credible, whether you have a legitimate explanation, and whether the alleged escaped income exceeds INR 1 lakh (the minimum threshold for reopening).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Information analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Threshold verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="68" y1="48" x2="82" y2="62" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><text x="60" y="44" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">AIS</text></svg></div><span class="illustration-label">Info Reviewed</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare and Submit Reply to 148A SCN</h3><p class="step-description">Draft a detailed written response within the deadline (7-30 days) addressing: factual position, supporting documents, legal grounds if notice is defective, and request for personal hearing if relevant. Submit via e-Proceedings on incometaxindia.gov.in.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reply drafted with evidence</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed via e-Proceedings</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="25" x2="95" y2="25" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="25" y1="38" x2="85" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="25" y1="48" x2="80" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><circle cx="60" cy="62" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M57 62l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Reply Filed</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">AO Passes Section 148A(d) Order</h3><p class="step-description">After considering your reply, the AO passes a reasoned order. If satisfied, the matter is closed - no Section 148 notice issued. If not satisfied, the AO issues the Section 148 notice with 148A(d) order copy.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Matter closed OR</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 148 notice issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="25" width="40" height="30" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="35" y="43" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CLOSED</text><rect x="65" y="25" width="40" height="30" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="85" y="43" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">148 ISSUED</text><text x="55" y="20" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">148A(d) ORDER</text></svg></div><span class="illustration-label">Order Passed</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Verify the Section 148 Notice</h3><p class="step-description">Check: assessment year matches 148A order; notice is accompanied by 148A(d) order copy; correct Section 151 authority approved (PCIT/CIT for beyond 3 years; Joint Commissioner for within 3 years). Defective approval renders notice void.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 151 approval checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notice validity verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="25" height="6" rx="2" fill="#E8712C"/><text x="42" y="24" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.148</text><path d="M60 35l5 5 10-10" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.151 OK?</text></svg></div><span class="illustration-label">Notice Verified</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Return under Section 148</h3><p class="step-description">File an accurate, complete return for the reassessment year within the time specified in the notice (max 3 months from month-end of notice). If you already filed for that year, file a fresh return addressing the escaped income allegation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR filed on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All income disclosed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ITR u/s 148</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="50" x2="75" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="85" cy="55" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M82 55l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Return Filed</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File GKN Driveshafts Objections</h3><p class="step-description">Before the AO proceeds, file objections challenging the validity of the reassessment - time limits, lack of information, improper approval. The AO must pass a speaking order disposing of objections before proceeding (GKN Driveshafts, SC 2003).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objections filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Speaking order awaited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">OBJECTIONS</text><line x1="25" y1="34" x2="95" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M35 45l4 4 8-8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><text x="60" y="47" font-size="5" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">Time Limit</text><path d="M35 58l4 4 8-8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><text x="60" y="60" font-size="5" fill="#14365F" font-weight="500" font-family="Arial,sans-serif">S.151 Defect</text></svg></div><span class="illustration-label">Objections Filed</span><span class="step-number-large">07</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Respond to Assessment and Appeal if Needed</h3><p class="step-description">After the return is filed, respond to all assessment queries with comprehensive documentation. If the reassessment order makes additions, file CIT(A) appeal under Section 246A within 30 days with 20% pre-deposit or stay application.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Assessment defended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CIT(A) appeal filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="34" x2="80" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="35" y="42" width="50" height="14" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="60" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CIT(A) APPEAL</text><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Case Resolved</span><span class="step-number-large">08</span></div></div></div>
            <div class="highlight-box" style="margin-top:32px;"><p><strong>Legal Verification Gate:</strong> All Section references, time limits, and thresholds verified against Income Tax Act, 1961 provisions and Finance Act amendments as of March 2026. Supreme Court citations: Union of India v. Rajeev Bansal (2024); GKN Driveshafts India Ltd v. ITO (2003).</p></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for Section 148A/148 Response</h2>
            <div class="content-text">
                
                <ul>
                    <li>Copy of Section 148A SCN and all annexures (information document disclosed by AO)</li>
                    <li>ITR acknowledgment and filed returns for the relevant reassessment year</li>
                    <li>Form 26AS and Annual Information Statement (AIS) for the reassessment year</li>
                    <li>Bank statements for all accounts for the full financial year in question</li>
                    <li>Source-of-funds documentation for transactions flagged in the SCN (sale deeds, property documents, FD receipts, gift deeds, loan documentation)</li>
                    <li>Capital gains computations, brokerage statements, Demat account history for the relevant year</li>
                    <li>Investment and deduction proofs (80C/80D/80G) for the reassessment year</li>
                    <li>Business financial statements, audit reports, GST returns (if applicable)</li>
                    <li>Foreign asset and income disclosures, bank account statements, DTAA claim documents (if foreign income involved)</li>
                    <li>Any previous correspondence with the AO or department regarding the same assessment year</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Section 148 Reassessment and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Notice Issued After Time Limit (Section 149)</strong></td><td>Notice is void - but taxpayer must identify the issue</td><td>We calculate the exact time limit immediately on receipt. If even one day late, we prepare the writ petition ground for High Court challenge. One of the most successful defences.</td></tr>
                        <tr><td><strong>Defective Section 151 Approval</strong></td><td>Jurisdictional defect renders entire reassessment void</td><td>We review the 148A(d) order to verify correct specified authority. Wrong authority or mechanical approval = void notice (Rajeev Bansal SC 2024).</td></tr>
                        <tr><td><strong>Information is Stale or Already Explained</strong></td><td>AO proceeds despite adequate explanation</td><td>At the 148A SCN stage, we file a detailed written reply with documentary evidence. A well-drafted 148A reply is the most cost-effective defence tool.</td></tr>
                        <tr><td><strong>High-Pitched Additions in Reassessment Order</strong></td><td>Cash deposits treated as unexplained, losses disallowed, foreign remittances added</td><td>We build the defence record from the first SCN response. If additions are unjustified, we file CIT(A) appeal within 30 days with stay application.</td></tr>

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
            <h2 class="section-title">Professional Fees for Section 148 Reassessment Defence</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Section 148A SCN Analysis and Reply</td><td class="table-amount">Starting at INR 3,499</td></tr>
                        <tr><td>Section 148A SCN + 148 Notice Response Package</td><td class="table-amount">Starting at INR 5,999</td></tr>
                        <tr><td>Complete Reassessment Defence (Assessment Stage)</td><td class="table-amount">Starting at INR 8,999</td></tr>
                        <tr><td>Objections and High Court Writ Support</td><td class="table-amount">Quoted on case basis</td></tr>
                        <tr><td>Reassessment Order Review + Rectification u/s 154</td><td class="table-amount">Starting at INR 2,999</td></tr>
                        <tr><td>CIT(A) Appeal against Reassessment Order</td><td class="table-amount">Starting at INR 9,999</td></tr>
                        <tr><td>Comprehensive Package (148A + Assessment + Appeal)</td><td class="table-amount">Starting at INR 14,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Notice Section 148 consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%20148%20notice.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Section 148 Reassessment Resolution</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial review of 148A SCN and consultation</td><td>Same day (under 24 hours)</td></tr>
                        <tr><td>Preparation and submission of 148A SCN reply</td><td>3-7 working days after document collection</td></tr>
                        <tr><td>AO passes 148A(d) order (decision on 148 notice)</td><td>15-30 days from your reply date (AO discretion)</td></tr>
                        <tr><td>ITR filing under Section 148 (if notice issued)</td><td>Within time stated in notice - max 3 months</td></tr>
                        <tr><td>Reassessment proceedings under Section 143(3)/144B</td><td>2-12 months depending on complexity</td></tr>
                        <tr><td>Reassessment order u/s 143(3) - Section 153 limit</td><td>12 months from end of AY in which notice was issued</td></tr>
                        <tr><td>CIT(A) appeal (if order has additions)</td><td>30 days to file; hearing within 2-6 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> The Section 148A SCN has a hard deadline of 7-30 days. This is the most important action in the entire reassessment process. A strong 148A reply can close the matter entirely without a Section 148 notice being issued. Contact us immediately on receipt.</p>

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
            <h2 class="section-title">Why Professional CA Assistance Matters for Section 148 Cases</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Critical 148A Reply Window</h3><p>The Section 148A SCN reply is your single best opportunity to stop the reassessment before it begins. A professional reply often results in the matter being closed without a Section 148 notice.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Technical Legal Defences</h3><p>Time limit analysis under Section 149, Section 151 approval verification, and procedural compliance checks require deep familiarity with post-2021 reassessment law amendments.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg></div><h3>Judicial Precedent Leverage</h3><p>Cases like Rajeev Bansal (SC 2024) and GKN Driveshafts (SC 2003) provide powerful tools to challenge defective notices. We know when and how to invoke them.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Record Building for Appeal</h3><p>Every submission from the first 148A reply is part of the appeal record. We structure responses to pre-empt additions and preserve strong CIT(A)/ITAT grounds.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Cost-Benefit Protection</h3><p>A INR 10 lakh addition can result in INR 8-15 lakh total demand with interest and penalty under Section 270A. Professional fees are a fraction of potential liability.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Coverage</h3><p>Offices in Pune, Mumbai, Delhi, Bengaluru. 900+ reassessment cases handled. 58% of 148A cases closed without 148 notice being issued.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">900+ Reassessment Cases Handled - 58% Closed at 148A Stage</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 900+ Reassessment Cases | 58% 148A Closure Rate | 71% Addition Deletion at CIT(A) | 4.8/5 Rating (320+ Reviews) | Pune, Mumbai, Delhi, Bengaluru</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"I received a Section 148A notice for AY 2019-20 involving a property sale. Patron's CA team filed a detailed reply explaining the source of funds. The 148A(d) order closed the matter without a 148 notice being issued. Saved me months of reassessment proceedings." - <strong>Ramesh K., Pune (Verified Client)</strong></p></div>
                <div class="highlight-box" style="margin-top:12px;"><p>"The 148 notice for my business was time-barred - issued after 5 years and 4 months from AY-end. Patron's team identified this immediately, briefed our advocate, and the High Court quashed the notice within 8 months." - <strong>Anand B., Mumbai (Verified Client)</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional CA - Section 148 Reassessment Response</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Self-Response (DIY)</th><th>Patron Accounting CA</th></tr></thead>
                    <tbody>
                        <tr><td><strong>148A SCN Reply Quality</strong></td><td>Generic or factual only - misses legal defences</td><td>Combines documentary evidence with statutory and judicial grounds</td></tr>
                        <tr><td><strong>Time-Limit Check (Section 149)</strong></td><td>Often missed - taxpayers unaware of exact calculation</td><td>First action - verified immediately on receipt of notice</td></tr>
                        <tr><td><strong>Section 151 Approval Verification</strong></td><td>Not checked</td><td>Checked against correct specified authority for the time period</td></tr>
                        <tr><td><strong>GKN Driveshafts Objections</strong></td><td>Unknown to most taxpayers</td><td>Filed proactively before AO proceeds with reassessment</td></tr>
                        <tr><td><strong>148A Closure Rate</strong></td><td>Low - inadequate replies rarely close the matter</td><td>58% closed at 148A stage without 148 notice</td></tr>
                        <tr><td><strong>Appeal Record Building</strong></td><td>Ad-hoc responses create poor appeal record</td><td>Each submission designed for both assessment and appeal stage</td></tr>

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
            <h2 class="section-title">Related Income Tax Services from Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/income-tax-notices-under-section-147">Income Tax Notices under Section 147</a> - reassessment provision and income escaping assessment</li>
                    <li><a href="/income-tax-notices-under-section-143-3">Income Tax Notices under Section 143(3)</a> - scrutiny assessment for current year returns</li>
                    <li><a href="/income-tax-notices-under-section-142-1">Income Tax Notices under Section 142(1)</a> - preliminary inquiry and pre-assessment notices</li>
                    <li><a href="/income-tax-demand-under-section-156">Income Tax Demand under Section 156</a> - demand notice arising from reassessment orders</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - accurate prior-year ITR filing under Section 148</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Key Provisions for Section 148 Reassessment</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Provision</th><th>Relevance</th></tr></thead><tbody>
                        <tr><td><strong>Section 147</strong></td><td>AO may assess or reassess income that has escaped assessment</td><td>Charging provision - AO must have credible information, not mere suspicion</td></tr>
                        <tr><td><strong>Section 148</strong></td><td>Formal reassessment notice issued after 148A procedure</td><td>Triggers requirement to file ITR and commence assessment proceedings</td></tr>
                        <tr><td><strong>Section 148A (Finance Act 2021)</strong></td><td>Mandatory pre-notice: inquiry, SCN (7-30 days), reply consideration, 148A(d) order + Section 151 approval</td><td>Any Section 148 notice without following 148A is void</td></tr>
                        <tr><td><strong>Section 149 (Post Finance (No.2) Act 2024)</strong></td><td>Time limits: 3 yrs 3 mths (escaped income below INR 50 lakh); 5 yrs 3 mths (INR 50 lakh or more)</td><td>Notice outside these limits is barred by limitation and void. Source: <a href="https://www.incometaxindia.gov.in" target="_blank" rel="noopener">incometaxindia.gov.in</a></td></tr>
                        <tr><td><strong>Section 151</strong></td><td>Approval: Jt Commissioner (within 3 yrs); PCIT/CIT (beyond 3 yrs)</td><td>Jurisdictional requirement - wrong authority or mechanical approval renders notice void (Rajeev Bansal SC 2024)</td></tr>
                        <tr><td><strong>Section 153</strong></td><td>Reassessment order must be passed within 12 months from end of AY in which 148 notice was issued</td><td>Order passed later is time-barred. Source: <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">India Code - IT Act</a></td></tr>
                        <tr><td><strong>Section 270A</strong></td><td>Penalty for under-reporting: 50%; misreporting: 200%</td><td>Additional financial risk if reassessment establishes undisclosed income</td></tr>
                        <tr><td><strong>GKN Driveshafts (SC 2003)</strong></td><td>Right to file objections; AO must pass speaking order on objections</td><td>Procedural right - exercise before AO proceeds with reassessment</td></tr>
                        <tr><td><strong>Rajeev Bansal (SC 2024)</strong></td><td>Section 151 approval is jurisdictional, not a formality; mechanical approval is void</td><td>Key defence - verify the correct specified authority approved the notice</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Section 148 Reassessment Notice</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about income tax reassessment notice under Section 148, the Section 148A pre-notice procedure, time limits, and legal defences.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IT Notice Section 148',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is an income tax notice under Section 148?</h3>
                        <div class="faq-expanded__a"><p>A Section 148 notice is a formal reassessment notice issued by the Assessing Officer under the Income Tax Act, 1961 when there is credible information indicating that income for a prior assessment year has escaped assessment. Since Finance Act 2021, it can only be issued after completing the mandatory pre-notice procedure under Section 148A - which gives the taxpayer an opportunity to respond before the reassessment formally begins.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Section 148 and Section 148A?</h3>
                        <div class="faq-expanded__a"><p>Section 148A (Finance Act 2021, w.e.f. 01-04-2021) is the mandatory pre-notice procedure: the AO issues a Show Cause Notice disclosing the information, gives the taxpayer 7-30 days to respond, considers the reply, and passes a reasoned order under Section 148A(d). Only if the AO concludes reassessment is justified, the formal Section 148 reassessment notice is issued. Section 148 without a valid 148A procedure is void.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit for issuing a Section 148 notice?</h3>
                        <div class="faq-expanded__a"><p>Under Finance (No.2) Act 2024, effective 01-09-2024 [Section 149, IT Act 1961]: for escaped income below INR 50 lakh, the notice must be issued within 3 years and 3 months from the end of the relevant assessment year; for escaped income of INR 50 lakh or more, within 5 years and 3 months. These replaced the earlier 3-year and 10-year limits. A notice issued after these deadlines is void.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if I ignore a Section 148A or Section 148 notice?</h3>
                        <div class="faq-expanded__a"><p>Ignoring a 148A SCN means the AO will proceed to issue a Section 148 notice on available information alone. Ignoring the 148 notice means the AO completes reassessment ex-parte under Section 144 (Best Judgment Assessment) - typically resulting in high-pitched additions, large tax demand, penalty under Section 270A, and possible prosecution for willful non-compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a Section 148 notice be challenged in court?</h3>
                        <div class="faq-expanded__a"><p>Yes. A Section 148 notice can be challenged in the High Court via a Writ Petition on grounds including: notice issued beyond Section 149 time limits; improper or mechanical Section 151 approval (Union of India v. Rajeev Bansal, SC 2024); Section 148A procedure not followed; information relied upon is vague or insufficient; escaped income below INR 1 lakh. Courts have quashed numerous notices on these grounds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the minimum income threshold for Section 148 reassessment?</h3>
                        <div class="faq-expanded__a"><p>The Income Tax Department cannot reopen an assessment under Section 148A/148 if the amount of income that escaped assessment is less than INR 1 lakh. This threshold applies regardless of the year or the type of information. If the alleged escaped income is below INR 1 lakh, the AO cannot proceed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Section 148 ka notice kya hota hai?</h3>
                        <div class="faq-expanded__a"><p>Section 148 ka notice ek reassessment notice hota hai jisme Income Tax Department pichle assessment year ki income dobara check karna chahti hai. Pehle Section 148A ke under show cause notice aata hai aur aapko 7-30 din jawab dene ka mauka milta hai. Sahi jawab de kar aap Section 148 notice rok sakte hain. CA ki madad se is notice ka sahi jawab dena bahut zaroori hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the right to file objections under GKN Driveshafts?</h3>
                        <div class="faq-expanded__a"><p>As held by the Supreme Court in GKN Driveshafts India Ltd v. ITO (2003), a taxpayer has the right to file objections challenging the validity of the Section 148 notice - including on grounds of time limits, lack of jurisdiction, and insufficient information. The AO must pass a speaking order disposing of these objections before proceeding with the reassessment.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is income escaping assessment under Section 147?</strong> Income that was liable to be taxed in a prior year but was not assessed. Section 147 authorises the AO to reassess by issuing notice under Section 148, provided the Section 148A pre-notice procedure is followed.</p>
                <p><strong>Time limits after Finance (No.2) Act 2024?</strong> 3 years 3 months from end of relevant AY if escaped income below INR 50 lakh; 5 years 3 months if INR 50 lakh or more (w.e.f. 01-09-2024).</p>
                <p><strong>What is the Section 148A procedure?</strong> (1) Inquiry with specified authority approval; (2) Show Cause Notice to taxpayer; (3) 7-30 days for reply; (4) Reasoned 148A(d) order deciding whether to issue Section 148 notice. Without this, Section 148 is void.</p>
                <p><strong>Rajeev Bansal SC 2024?</strong> Section 151 approval is a jurisdictional precondition, not a formality. Mechanical approval where the higher authority does not independently apply mind renders the reassessment void ab initio.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Your Section 148A Reply Deadline is 7-30 Days - Act Now</h2>
            <div class="content-text">
                
                <p><strong>The Section 148A SCN comes with a hard deadline - 7 to 30 days - within which you must submit your written explanation. This is the most important action in the entire reassessment process.</strong></p>
                <ul>
                    <li><strong>A strong 148A reply</strong> that adequately explains the information can result in the 148A(d) order closing the matter entirely - no Section 148 notice is issued</li>
                    <li><strong>Once Section 148 notice is issued,</strong> you enter formal reassessment that can take 6-18 months with significant financial risk</li>
                    <li><strong>Missing the 148A deadline</strong> results in the AO proceeding to issue Section 148 notice based on their information alone</li>
                    <li><strong>Financial risk if not defended:</strong> Tax at applicable rate on additions + interest under Section 234B/234C + penalty under Section 270A at 50%-200%. An INR 10 lakh addition can result in INR 8-15 lakh total demand.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert CA Intervention at the Section 148A Stage - Starting at INR 3,499</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">A Section 148A/148 notice is one of the most legally complex income tax notices you can receive. It involves multi-layered procedural requirements, statutory time limits, and judicial precedents that can be used to your advantage - but only if you act promptly and professionally.</p>
                <p style="color:rgba(255,255,255,0.9);">With Patron Accounting's experienced CA team, you get a two-track defence: a substantive rebuttal of the information and alleged escaped income, combined with a technical legal review for time-limit and procedural defects. Our 58% Section 148A closure rate and 71% addition deletion rate at CIT(A) reflect the value of early professional intervention.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 3,499 | 900+ Reassessment Cases | 58% Closed at 148A Stage | Free 30-Min Case Review</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Section%20148%20notice.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Section%20148%20Reassessment%20Defence&body=Hello%20Patron%20Accounting%2C%0A%0AI%20received%20a%20Section%20148%20notice.%20Please%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 148 Reassessment Defence - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert CA representation for Section 148 reassessment notices across major cities in India.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/income-tax-notices-under-section-148/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-notices-under-section-148/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-notices-under-section-148/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/income-tax-notices-under-section-148/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Income Tax Services</div><div class="pa-block-sub">Complete income tax notice defence and compliance support</div><div class="pa-cross-grid"><a href="/income-tax-notices-under-section-147" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Notice Section 147</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notices-under-section-143-3" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Notice Section 143(3)</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notices-under-section-142-1" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Notice Section 142(1)</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-demand-under-section-156" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Demand Section 156</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice-for-defective-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Defective Return Notice</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Income Tax Notice under Section 148 (Reassessment). Content is reviewed annually and updated immediately on Finance Act amendments. Time limits under Section 149 changed via Finance Act 2021, Finance (No.2) Act 2024, and Budget 2025. All statutory references verified as of March 2026.</p>
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
