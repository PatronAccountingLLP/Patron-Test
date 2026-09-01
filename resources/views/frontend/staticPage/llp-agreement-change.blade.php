
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>LLP Agreement Amendment - Supplementary Deed, Form 3 & ROC</title>
    <meta name="description" content="Change your LLP agreement via MCA Form 3 in 2026. Update activities, profit ratios, rights. Starting at INR 1,499. Expert CS team.">
    <link rel="canonical" href="/llp-agreement-change">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Agreement Amendment - Supplementary Deed, Form 3 & ROC">
    <meta property="og:description" content="Change your LLP agreement via MCA Form 3 in 2026. Update activities, profit ratios, rights. Starting at INR 1,499. Expert CS team.">
    <meta property="og:url" content="/llp-agreement-change">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Agreement Amendment - Supplementary Deed, Form 3 & ROC">
    <meta name="twitter:description" content="Change your LLP agreement via MCA Form 3 in 2026. Update activities, profit ratios, rights. Starting at INR 1,499. Expert CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "LLP Agreement Change: Amend Deed",
          "description": "Change your LLP agreement via MCA Form 3 in 2026. Update activities, profit ratios, rights. Starting at INR 1,499. Expert CS team.",
          "url": "https://www.patronaccounting.com/llp-agreement-change",
          "serviceType": "LLP Agreement Change: Amend Deed",
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
            "url": "https://www.patronaccounting.com/llp-agreement-change",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "50",
              "maxPrice": "1499",
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
              "name": "LLP Agreement Change: Amend Deed",
              "item": "https://www.patronaccounting.com/llp-agreement-change"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the procedure to change an LLP Agreement in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Pass a partner resolution, draft a Supplementary LLP Agreement, execute on stamp paper, notarize where required by State law, and file E-Form 3 LLP on MCA V3 Portal within 30 days under Section 23, LLP Act 2008."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit to file Form 3 LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 3 LLP must be filed within 30 days of execution of the Supplementary LLP Agreement under Section 23(2) of the LLP Act 2008 and Rule 21 of the LLP Rules 2009."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late filing of Form 3 LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "INR 100 per day from the due date with no upper cap under Section 67 of the LLP Act 2008. A 6-month delay costs INR 18,000+ in penalties."
              }
            },
            {
              "@type": "Question",
              "name": "How many times can an LLP Agreement be amended?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No restriction under the LLP Act 2008. Partners can modify the agreement as often as needed by mutual consent, provided each amendment is executed as a Supplementary Deed and filed via Form 3 LLP within 30 days."
              }
            },
            {
              "@type": "Question",
              "name": "What is the stamp duty for changing an LLP Agreement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "INR 100 flat when no capital contribution changes. When capital is being changed, stamp duty is per the applicable State Stamp Act (varies by state and capital amount)."
              }
            },
            {
              "@type": "Question",
              "name": "Is notarization mandatory for the Supplementary LLP Agreement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Varies by state. Mandatory in UP and Delhi. All partners must sign with attestation by at least 2 witnesses in all cases."
              }
            },
            {
              "@type": "Question",
              "name": "Does an LLP Agreement change affect tax registrations?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not directly unless the change involves LLP name or registered address. If business activities expand, GST registration may need amendment for updated NIC codes."
              }
            },
            {
              "@type": "Question",
              "name": "LLP agreement mein badlav kaise karein?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Partners ka resolution pass karein, Supplementary Deed stamp paper par execute karein, MCA portal par E-Form 3 LLP 30 din ke andar file karein under Section 23 LLP Act 2008. Late filing par INR 100 per day penalty lagti hai. Quick Answers Which form? E-Form 3 LLP on MCA V3 Portal. Deadline? 30 days from execution of Supplementary Deed. Penalty? INR 100 per day with no upper cap (Section 67, LLP Act 2008). Stamp duty? INR 100 flat (no capital change). State-specific for capital changes. Who signs Form 3 LLP? Designated Partner (DSC) + Practising CS or CA (certification)."
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
                        LLP Agreement Change in India: Amend Your LLP Deed the Right Way
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 23, LLP Act 2008:</span> Amend any clause - business activities, profit-sharing ratios, rights, jurisdiction - via MCA-registered Supplementary Deed.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 3 LLP Within 30 Days:</span> E-Form 3 LLP filed on MCA V3 Portal within 30 days of execution. Penalty of INR 100/day for delay - no upper cap.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>7-14 Day Turnaround:</span> Expert CS-assisted amendment, drafting, stamping, notarization, and ROC filing completed in 7-14 business days.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>From INR 1,499:</span> Professional fee starting at INR 1,499 + government fees (INR 50-200) + stamp duty (INR 100 flat for non-capital changes).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ LLP matters handled | 4.8/5 rating | Offices in Pune, Mumbai, Delhi, Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=LLP%20Agreement%20Amendment%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20LLP%20agreement%20change.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20my%20LLP%20agreement.%20Please%20help%20with%20Form%203%20filing." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'LLP Agreement Change',
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
            <h2 class="section-title">LLP Agreement Change - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Agreement Change Services at a Glance</strong></p>
                    <p>An LLP Agreement can be changed any time after incorporation by executing a Supplementary Deed with partner consent and filing E-Form 3 LLP with MCA within 30 days. Penalty for delay: INR 100 per day with no upper cap. Governed by Section 23 of the LLP Act, 2008. Stamp duty: INR 100 (no capital change). Starting at INR 1,499.</p>
                </div>
                <p>Your LLP Agreement is the constitutional document of your Limited Liability Partnership - it defines how partners share profits, who has authority, what activities the business can undertake, and how disputes are resolved. As your business evolves, so must your agreement. Whether expanding into new services, revising partner responsibilities, or modifying operational clauses, a formal LLP Agreement change is required under Indian law.</p>
                <p>The process is governed by Section 23 of the LLP Act, 2008. The change is effected through a Supplementary Deed executed on stamp paper, signed by all partners, notarized where required by State law, and filed with the ROC via E-Form 3 LLP on the MCA V3 Portal - all within 30 days of execution.</p>
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
                <h2 class="section-title">What is LLP Agreement Change?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>LLP Agreement change</strong> is the formal legal process of amending any clause in the original LLP Agreement by executing a Supplementary Deed and filing it with the ROC via E-Form 3 LLP under Section 23 of the LLP Act, 2008.</p>
<p>The LLP Agreement, defined under Section 2(1)(o), is a written agreement between partners determining mutual rights and duties. When any terms require modification, a Supplementary Agreement is prepared to record changes, and the original agreement continues alongside the new one.</p>
<p><strong>External authority:</strong> <a href="https://www.indiacode.nic.in/bitstream/123456789/2023/1/A2009-06.pdf" target="_blank" rel="noopener">LLP Act, 2008 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a></p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Agreement Change:</strong></p>
                    <p><strong>Supplementary Deed</strong> - Legal document recording the amendment. Executed on stamp paper; filed via Form 3 LLP.</p>
<p><strong>Form 3 LLP</strong> - MCA e-form for filing LLP Agreement information (initial and amendments).</p>
<p><strong>Designated Partner</strong> - Partner with statutory responsibilities including signing Form 3 LLP with DSC.</p>
<p><strong>DSC</strong> - Digital Signature Certificate (Class 3) mandatory for filing on MCA V3 Portal.</p>
<p><strong>Section 23, LLP Act</strong> - Mandates filing of LLP Agreement and any changes with ROC in prescribed form within 30 days.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- LLP Agreement document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<rect x="50" y="35" width="65" height="18" rx="4" fill="#14365F"/>
<text x="82" y="47" font-size="6" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">LLP DEED</text>
<line x1="58" y1="62" x2="107" y2="62" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-dasharray="4,3"/>
<line x1="58" y1="72" x2="107" y2="72" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/>
<line x1="58" y1="82" x2="95" y2="82" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="92" x2="100" y2="92" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<!-- Form 3 badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="59" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FORM 3</text>
<!-- S.23 badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="89" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.23</text>
<!-- 30 DAYS -->
<rect x="55" y="118" width="50" height="18" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="80" y="130" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Agreement Change</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Act 2008</span>
                        <strong>Form 3 LLP</strong>
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
            <h2 class="section-title">When is LLP Agreement Change Required?</h2>
            <div class="content-text">
                
                <p>An LLP must change its agreement in any of the following situations:</p>
<ul>
<li><strong>Change in business activities:</strong> Adding new product lines, services, or discontinuing existing ones</li>
<li><strong>Profit and loss sharing ratios:</strong> Revising how profits/losses are distributed between partners</li>
<li><strong>Partner rights and duties:</strong> Altering administrative authority, voting rights, or decision-making powers</li>
<li><strong>Jurisdiction clause:</strong> Modifying dispute resolution forum or governing law</li>
<li><strong>Resignation terms:</strong> Amending notice period, appointment/removal conditions</li>
<li><strong>Operational clauses:</strong> Addition, deletion, or alteration of any other clause</li>
<li><strong>Registered office address:</strong> Within same ROC area (combined with Form LLP-15)</li>
<li><strong>Duration or term:</strong> If specified in the original agreement</li>
</ul>
<p><strong>Note:</strong> Changes in partner identity (add/remove) or capital contribution involve linked forms (Form 4 LLP) and are covered under <a href="/llp-partner-change">LLP Partner Change</a> and <a href="/llp-contribution-change">LLP Contribution Change</a> respectively.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's LLP Agreement Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Agreement Review and Analysis</td><td>Review existing LLP Agreement to identify amendment requirements and scope</td></tr>
<tr><td>Supplementary Deed Drafting</td><td>CS-drafted Supplementary LLP Agreement with legally compliant language for the specific change</td></tr>
<tr><td>Stamp Duty and Notarization</td><td>State-specific stamp duty assessment, stamping coordination, and notarization where mandated</td></tr>
<tr><td>DSC Assistance</td><td>Digital Signature Certificate verification and renewal if needed for Designated Partner</td></tr>
<tr><td>Form 3 LLP Filing on MCA V3</td><td>Complete E-Form 3 LLP filing within 30-day statutory window with all attachments</td></tr>
<tr><td>Post-Approval Confirmation</td><td>Monitor MCA approval, flag ROC queries, deliver filed documents and updated clause summary</td></tr>

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
            <h2 class="section-title">7-Step Procedure for LLP Agreement Change</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 23 of the LLP Act, 2008. Form 3 LLP must be filed within 30 days. Late fee: INR 100/day with no upper cap (Section 67).</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Pass Partner Resolution</h3><p class="step-description">Convene a meeting of partners and pass a resolution specifying exact clause(s) to be changed. Authorize a Designated Partner to execute the Supplementary Deed and file Form 3 LLP.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DP authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RESOLVE</text></svg></div><span class="illustration-label">Resolution Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Draft Supplementary Deed</h3><p class="step-description">CS or CA professional drafts the Supplementary LLP Agreement. Must clearly state the amendments, new text replacing old clauses, and be consistent with the LLP Act, 2008.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deed drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Clauses verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Deed Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pay Stamp Duty and Execute</h3><p class="step-description">Print on non-judicial stamp paper. INR 100 stamp duty (no capital change) or State Stamp Act rates (capital changes). All partners sign. Attestation by 2 witnesses required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamp paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All partners signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">INR 100</text><text x="60" y="50" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">STAMPED</text></svg></div><span class="illustration-label">Executed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Notarize (State-Dependent)</h3><p class="step-description">Mandatory in states like UP and Delhi. All partners and designated partners must sign. Attestation by at least 2 witnesses required in all cases.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notarized</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Witnesses attested</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="46" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">NOTARY</text></svg></div><span class="illustration-label">Notarized</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Verify or Update DSC</h3><p class="step-description">Designated Partner must have valid Class 3 DSC. Form also requires certification by practising CS or CA. Flag DSC validity in advance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC valid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CS certified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="46" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text></svg></div><span class="illustration-label">DSC Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File E-Form 3 LLP on MCA V3</h3><p class="step-description">Log in to mca.gov.in. Enter LLPIN, date of modification, reason(s) for change. Attach Supplementary Deed and original LLP Agreement. Affix DSC and CS/CA certification. Pay government fee. Must be filed within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SRN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM 3 FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">MCA Approval and Record Update</h3><p class="step-description">MCA reviews and approves Form 3 LLP. Amendment effective from execution date but only after ROC approval. LLP Agreement is not a public document on MCA portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Amendment effective</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M36 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="65" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M61 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="90" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M86 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for LLP Agreement Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Description</th></tr></thead><tbody>
<tr><td>Supplementary LLP Agreement</td><td>Executed on stamp paper, notarized where applicable, signed by all partners</td></tr>
<tr><td>Original LLP Agreement</td><td>Copy of initial agreement for reference and attachment</td></tr>
<tr><td>Partner Resolution</td><td>Passed in meeting authorizing the specific amendment</td></tr>
<tr><td>DSC of Designated Partner</td><td>Class 3 Digital Signature Certificate for MCA e-filing</td></tr>
<tr><td>LLPIN</td><td>LLP Identification Number for system pre-fill</td></tr>
<tr><td>CA/CS Certification</td><td>Professional certification on Form 3 LLP</td></tr>
<tr><td>Board Resolution (Corporate Partner)</td><td>If a body corporate is a partner, resolution of that company (conditional)</td></tr>
<tr><td>Stamp Paper Receipt</td><td>Proof of stamp duty paid per State Stamp Act</td></tr>
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
                        <tr><td>Missing 30-day filing window</td><td>INR 100/day penalty with no upper cap accumulates</td><td>We track execution dates and ensure Form 3 LLP is filed within the statutory window</td></tr>
<tr><td>Incorrect stamp duty assessment</td><td>Wrong stamp value leads to rejection by ROC</td><td>Our CS team verifies State Stamp Act rates and coordinates stamping before deed execution</td></tr>
<tr><td>Ambiguous drafting of Supplementary Deed</td><td>Legally flawed language causes rejection or disputes</td><td>We draft citing specific clause numbers from original agreement with verified legal language</td></tr>
<tr><td>DSC expiry at time of filing</td><td>Expired DSC prevents e-filing on MCA portal</td><td>We flag DSC validity in advance and coordinate renewal before filing deadline</td></tr>

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
            <h2 class="section-title">LLP Agreement Change Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Professional Fees - Patron Accounting (drafting + filing)</td><td>Starting at INR 1,499 + GST</td></tr>
<tr><td>Government Fee for Form 3 LLP (capital up to INR 1 lakh)</td><td>INR 50</td></tr>
<tr><td>Government Fee (capital INR 1 lakh to INR 5 lakh)</td><td>INR 100</td></tr>
<tr><td>Government Fee (capital above INR 5 lakh)</td><td>INR 150 to INR 200</td></tr>
<tr><td>Stamp Duty (no capital change)</td><td>INR 100 (flat)</td></tr>
<tr><td>Stamp Duty (with capital change)</td><td>As per State Stamp Act (varies by state and capital amount)</td></tr>
<tr><td>Late Fee for delayed filing</td><td>INR 100 per day (no upper cap - Section 67)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Agreement Change consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20agreement%20amendment%20service." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Agreement Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Drafting Supplementary Deed</td><td>1-2 business days</td></tr>
<tr><td>Stamping and Notarization</td><td>1-3 business days (varies by state)</td></tr>
<tr><td>E-Form 3 LLP Filing</td><td>Same day to 1 business day after document readiness</td></tr>
<tr><td>MCA Approval</td><td>3-7 business days after SRN generation</td></tr>
<tr><td>Total typical timeline</td><td>7-14 business days from engagement</td></tr>
<tr><td>Statutory filing deadline</td><td>Within 30 days of Supplementary Deed execution</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Penalty Warning:</strong> INR 100 per day for late filing with no upper cap (Section 67, LLP Act 2008). A 6-month delay = INR 18,000+ in penalties alone - far exceeding the cost of professional filing assistance. Do not risk unnecessary penalties.</p>

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
            <h2 class="section-title">Why Choose Professional Help for LLP Agreement Change?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Legal Accuracy</h3><p class="feature-text">Supplementary Deed aligned precisely with LLP Act 2008 and consistent with all existing clauses. Errors lead to rejection.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">30-Day Deadline Tracking</h3><p class="feature-text">Professional tracking of the filing window prevents the INR 100/day unlimited penalty.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">State Compliance</h3><p class="feature-text">Stamp duty and notarization requirements vary by state - professionals ensure local compliance.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div><h3 class="feature-title">MCA Portal Expertise</h3><p class="feature-text">E-Form 3 LLP requires precise data entry. Incorrect entries cause delays and resubmissions.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">Post-Approval Follow-Up</h3><p class="feature-text">We monitor MCA approval status and flag any queries raised by the Registrar.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Coverage</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, and Gurugram. Starting at INR 1,499 with no hidden charges.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ LLP Matters Handled | 4.8/5 Client Rating | 7-14 Day Turnaround | Offices in Pune, Mumbai, Delhi, Gurugram</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional LLP Agreement Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Aspect</th><th>Patron Accounting</th><th>DIY (Self-Filing)</th></tr></thead>
                    <tbody>
                        <tr><td>Drafting Accuracy</td><td>CS-drafted, legally verified Supplementary Deed</td><td>Risk of clause inconsistencies and legal errors</td></tr>
<tr><td>Stamp Duty Compliance</td><td>State-specific assessment and coordination</td><td>Varies by state - easy to get wrong</td></tr>
<tr><td>Filing Deadline</td><td>Tracked and filed within 30-day window</td><td>Easy to miss deadline</td></tr>
<tr><td>MCA Portal Navigation</td><td>Handled by expert CS team</td><td>Steep learning curve on V3 portal</td></tr>
<tr><td>Rejection Risk</td><td>Low - experienced filers</td><td>High - common mistakes in form entries</td></tr>
<tr><td>Post-Approval Support</td><td>Follow-up until MCA approval confirmed</td><td>None</td></tr>
<tr><td>Cost</td><td>INR 1,499 + Govt fee + stamp duty</td><td>Govt fee only (INR 50-200) + stamp duty</td></tr>

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
<li><a href="/llp-partner-change">LLP Partner Change</a> - adding or removing partners</li>
<li><a href="/llp-contribution-change">LLP Contribution Change</a> - revising capital contribution</li>
<li><a href="/llp-name-change">LLP Name Change</a> - changing registered name</li>
<li><a href="/llp-incorporation">LLP Registration in India</a> - incorporating a new LLP</li>
<li><a href="/pvt-llp-compliance">LLP Compliance</a> - annual filings and ROC compliance</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - LLP Act, 2008</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Details</th></tr></thead><tbody>
<tr><td>Section 23, LLP Act 2008</td><td>Mandates filing LLP Agreement and any changes with ROC in prescribed form within 30 days.</td></tr>
<tr><td>Rule 21(1) and (2), LLP Rules 2009</td><td>Every LLP must file Form 3 LLP within 30 days of incorporation or within 30 days of any change.</td></tr>
<tr><td>Section 67, LLP Act 2008</td><td>Penalty for default: INR 100 per day of delay with no upper limit.</td></tr>
<tr><td>Section 2(1)(o), LLP Act 2008</td><td>Definition of LLP Agreement - written agreement between partners determining mutual rights and duties.</td></tr>
<tr><td>First Schedule, LLP Act 2008</td><td>In absence of agreement, mutual rights and duties governed by First Schedule provisions.</td></tr>
<tr><td>Section 25, LLP Act 2008</td><td>Partner must inform LLP of name/address changes within 15 days; LLP files Form 4 within 30 days.</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - LLP Agreement Change</h2>
                    <p class="faq-expanded__lead">Get answers about LLP agreement amendment procedure, Form 3 LLP, stamp duty, penalties, and notarization requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Agreement Change',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the procedure to change an LLP Agreement in India?</h3>
                        <div class="faq-expanded__a"><p>Pass a partner resolution, draft a Supplementary LLP Agreement, execute on stamp paper, notarize where required by State law, and file E-Form 3 LLP on MCA V3 Portal within 30 days under Section 23, LLP Act 2008.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the time limit to file Form 3 LLP?</h3>
                        <div class="faq-expanded__a"><p>Form 3 LLP must be filed within 30 days of execution of the Supplementary LLP Agreement under Section 23(2) of the LLP Act 2008 and Rule 21 of the LLP Rules 2009.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of Form 3 LLP?</h3>
                        <div class="faq-expanded__a"><p>INR 100 per day from the due date with no upper cap under Section 67 of the LLP Act 2008. A 6-month delay costs INR 18,000+ in penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How many times can an LLP Agreement be amended?</h3>
                        <div class="faq-expanded__a"><p>No restriction under the LLP Act 2008. Partners can modify the agreement as often as needed by mutual consent, provided each amendment is executed as a Supplementary Deed and filed via Form 3 LLP within 30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the stamp duty for changing an LLP Agreement?</h3>
                        <div class="faq-expanded__a"><p>INR 100 flat when no capital contribution changes. When capital is being changed, stamp duty is per the applicable State Stamp Act (varies by state and capital amount).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is notarization mandatory for the Supplementary LLP Agreement?</h3>
                        <div class="faq-expanded__a"><p>Varies by state. Mandatory in UP and Delhi. All partners must sign with attestation by at least 2 witnesses in all cases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does an LLP Agreement change affect tax registrations?</h3>
                        <div class="faq-expanded__a"><p>Not directly unless the change involves LLP name or registered address. If business activities expand, GST registration may need amendment for updated NIC codes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">LLP agreement mein badlav kaise karein?</h3>
                        <div class="faq-expanded__a"><p>Partners ka resolution pass karein, Supplementary Deed stamp paper par execute karein, MCA portal par E-Form 3 LLP 30 din ke andar file karein under Section 23 LLP Act 2008. Late filing par INR 100 per day penalty lagti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which form?</strong> E-Form 3 LLP on MCA V3 Portal.</p>
<p><strong>Deadline?</strong> 30 days from execution of Supplementary Deed.</p>
<p><strong>Penalty?</strong> INR 100 per day with no upper cap (Section 67, LLP Act 2008).</p>
<p><strong>Stamp duty?</strong> INR 100 flat (no capital change). State-specific for capital changes.</p>
<p><strong>Who signs Form 3 LLP?</strong> Designated Partner (DSC) + Practising CS or CA (certification).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Form 3 LLP Within 30 Days - Avoid INR 100/Day Penalty</h2>
            <div class="content-text">
                
                <p><strong>Once you execute the Supplementary Deed, the 30-day clock starts immediately.</strong></p>
<ul>
<li><strong>Day 1:</strong> Supplementary Deed executed - filing window opens</li>
<li><strong>Day 1-7:</strong> Complete stamping, notarization, DSC verification</li>
<li><strong>Day 7-14:</strong> File E-Form 3 LLP on MCA V3 Portal</li>
<li><strong>Day 30:</strong> Last day for penalty-free filing</li>
<li><strong>Day 31+:</strong> INR 100/day penalty starts - no upper cap</li>
</ul>
<p><strong>6-month delay = INR 18,000+ in penalties alone.</strong> Do not risk it.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20my%20LLP%20agreement.%20Please%20help." target="_blank">WhatsApp us</a> on the day you decide to amend.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Amend Your LLP Agreement - Starting at INR 1,499</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Changing an LLP Agreement is a routine yet legally precise exercise. From drafting a legally sound Supplementary Deed to ensuring timely filing on the MCA V3 Portal under Section 23 of the LLP Act 2008, every step carries legal consequences if not handled correctly.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team has the secretarial expertise to handle your LLP Agreement change end-to-end - from resolution drafting to post-approval confirmation. 500+ LLP matters handled with 4.8/5 client rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20agreement%20amendment%20service." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=LLP%20Agreement%20Change%20-%20Form%203&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20change%20my%20LLP%20agreement.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Agreement Change Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your LLP agreement amended from Patron Accounting offices across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">LLP Agreement Change by City</div><div class="pa-block-sub">Form 3 LLP filing from Patron Accounting</div><div class="pa-city-grid">
<a href="/llp-agreement-change/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/llp-agreement-change/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/llp-agreement-change/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/llp-agreement-change/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related LLP Services</div><div class="pa-block-sub">Partner, contribution, and compliance services</div><div class="pa-cross-grid">
<a href="/llp-partner-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Partner Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-contribution-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Contribution Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-name-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Name Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: LLP Act 2008 amendments, LLP Rules 2009 changes, or MCA V3 form updates.</p>
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
