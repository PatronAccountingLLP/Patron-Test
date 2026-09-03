

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Notice - Types, Sections, Reply Process & Penalty</title>
    <meta name="description" content="Got an income tax notice in India? Expert CA response for Section 143(1), 143(2), 148, 142(1) and 156 notices. Avoid penalties up to 200%. From Rs. 1,499.">
    <link rel="canonical" href="/income-tax-notice">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Notice - Types, Sections, Reply Process & Penalty">
    <meta property="og:description" content="Got an income tax notice in India? Expert CA response for Section 143(1), 143(2), 148, 142(1) and 156 notices. Avoid penalties up to 200%. From Rs. 1,499.">
    <meta property="og:url" content="/income-tax-notice">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Notice - Types, Sections, Reply Process & Penalty">
    <meta name="twitter:description" content="Got an income tax notice in India? Expert CA response for Section 143(1), 143(2), 148, 142(1) and 156 notices. Avoid penalties up to 200%. From Rs. 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Income Tax Notice Response: CA Help",
          "description": "Got an income tax notice in India? Expert CA response for Section 143(1), 143(2), 148, 142(1) and 156 notices. Avoid penalties up to 200%. From Rs. 1,499.",
          "url": "https://www.patronaccounting.com/income-tax-notice",
          "serviceType": "Income Tax Notice Response: CA Help",
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
            "url": "https://www.patronaccounting.com/income-tax-notice",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "1499",
              "maxPrice": "10000",
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
              "name": "Income Tax Notice Response: CA Help",
              "item": "https://www.patronaccounting.com/income-tax-notice"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What happens if I ignore an income tax notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Consequences depend on section. Ignoring 139(9): ITR treated as not filed, refunds and carry-forward lost. Ignoring 142(1): Rs 10,000 penalty per instance under 271(1)(b) plus prosecution. Ignoring 143(2): best-judgment assessment by AO under Section 144 without your input. Ignoring 156 demand: 1% monthly interest from Day 31 and bank account attachment under Section 222."
              }
            },
            {
              "@type": "Question",
              "name": "How do I respond to Section 143(1) intimation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Verify DIN at incometax.gov.in. Compare ITD computation with your filed ITR line by line. If demand is due to ITD error (wrong TDS credit, incorrect AIS entry): file Section 154 rectification. If demand is valid: pay within 30 days. All responses via e-Proceedings module on incometax.gov.in."
              }
            },
            {
              "@type": "Question",
              "name": "What is Section 148 reassessment notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AO believes income chargeable to tax has escaped assessment in a past year. Preceded by Section 148A show-cause giving 15 days to explain. If accepted, reassessment dropped. If not, full reassessment initiated. Can reopen up to 3 years (escaped income below Rs 50 lakh) or 10 years (above Rs 50 lakh or foreign assets)."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties for under-reporting or misreporting income?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 270A: under-reporting attracts 50% penalty on tax due - even for careless or inadvertent errors. Misreporting (deliberate concealment, false documents) attracts 200% of tax due. Both in addition to principal tax and interest. Section 270AA immunity available if you pay full tax and interest and do not file appeal."
              }
            },
            {
              "@type": "Question",
              "name": "Can I file a revised return after receiving a notice?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For 139(9) defective: correct and resubmit within 15 days. For NUDGE advisory (before formal notice): file revised return under 139(5) before December 31 of the AY. Once 143(2) scrutiny or 148 reassessment is issued, revised return is not possible - but ITR-U (updated return) under 139(8A) may be available for prior years with additional tax."
              }
            },
            {
              "@type": "Question",
              "name": "How do I check if a notice is genuine?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Verify the Document Identification Number (DIN) at incometax.gov.in using the DIN verification tool. Also log in and check e-Proceedings or Pending Actions - genuine notices appear there. Any notice without valid DIN after January 1, 2019 is invalid per CBDT Circular 19/2019 and need not be responded to. Quick Answers How long to reply? 139(9): 15 days. 143(1)/156/245: 30 days. 142(1): 15-30 days per notice. 148A: 15 days. Is notice genuine? Verify DIN at incometax.gov.in. Without DIN after Jan 1, 2019 = invalid. 143(1) vs 143(2)? 143(1) is automated CPC intimation. 143(2) is formal scrutiny by Assessing Officer requiring detailed documentation. Can notice be cancelled? 143(1) demand reduced via Section 154 rectification. 148A objection can stop reassessment. 143(2)/148 quashed only through appeal."
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
                        Income Tax Notice Response - Expert CA Help for Section 143(1), 148, 142(1) and Demand Notices India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>8 Notice Types:</span> Section 139(9) defective, 142(1) inquiry, 143(1) intimation, 143(2) scrutiny, 148A/148 reassessment, 156 demand, 245 refund set-off - each needs a different response strategy</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Severe Penalties:</span> Section 270A: 50% penalty (under-reporting) / 200% (misreporting). Section 271(1)(b): Rs 10,000 per non-compliance. Section 144 best-judgment if ignored.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>e-Proceedings:</span> All responses via incometax.gov.in e-Proceedings module. DIN verified on every notice to confirm authenticity before any response. Fake notice scams flagged.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 1,499 for 143(1) intimation response. 5,000+ clients annually. NRI notice handling. Appeal support before CIT(A) and ITAT.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">5,000+ clients annually with notice response across all assessment years and all 8 notice types with 4.9/5 Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Notice&body=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Income Tax Notice Response',
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
    'ctaText'    => 'Expert notice response - DIN authentication, AIS reconciliation, e-Proceedings submission, AO representation, and CIT(A) appeal support.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">8 Notice Types</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">9-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Common Triggers</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Deadlines</a><a class="toc-btn" href="#benefits-section">Why CA Help</a><a class="toc-btn" href="#comparison-section">DIY vs Patron</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Notice Response - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Income Tax Notice Response Services at a Glance</strong></p>
                    <p>Every income tax notice has a section, reason, deadline, and consequence if ignored. The ITD uses AIS, Form 26AS, banking data, and analytics to cross-verify returns. NUDGE campaign sends advisories before formal notices. Section 270A: 50% penalty (under-reporting) / 200% (misreporting). DIN verification mandatory. All responses via e-Proceedings on incometax.gov.in. From Rs 1,499.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Key Facts</th></tr></thead><tbody><tr><td>Most Common Notices</td><td>143(1) intimation, 148 reassessment, 142(1) inquiry, 139(9) defective, 156 demand</td></tr><tr><td>Response Deadlines</td><td>139(9): 15 days | 143(1)/156/245: 30 days | 142(1): 15-30 days | 148A: 15 days</td></tr><tr><td>Penalty - 142(1) Ignored</td><td>Rs 10,000 per instance under Sec 271(1)(b) + prosecution up to 1 year</td></tr><tr><td>Penalty - Under-reporting (270A)</td><td>50% of tax on under-reported amount - even for inadvertent errors</td></tr><tr><td>Penalty - Misreporting (270A)</td><td>200% of tax on misreported amount - deliberate concealment</td></tr><tr><td>Authentication</td><td>Verify DIN at incometax.gov.in - notice without DIN (after Jan 1, 2019) is invalid</td></tr><tr><td>Where to Respond</td><td>e-Proceedings module on incometax.gov.in | From Rs 1,499</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>Receiving an income tax notice is not automatically cause for panic, but it always requires timely and accurate action. The ITD now uses AIS, TIS, Form 26AS, banking data, GST Network, and analytics to cross-verify returns. Routine mismatches - unreported FD interest, high-value cash deposit, missed capital gains, undisclosed foreign assets - increasingly trigger automated intimations and formal notices.</p>
                <p>For AY 2025-26, the ITD is running an active NUDGE campaign sending advisory emails before escalating to formal notices. Acting on these before they become formal proceedings saves significant time, cost, and penalty exposure. Patron Accounting handles all 8 notice types from offices in Pune, Mumbai, Delhi, and Hyderabad.</p>
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
                <h2 class="section-title">What Is Income Tax Notice Response?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Income tax notice response is the formal process of reading, authenticating, and replying to a notice issued by the Income Tax Department under a specific section of the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>, within the prescribed deadline, through the e-Proceedings module on incometax.gov.in, supported by appropriate documentation.</p><p>Every notice must be verified using the Document Identification Number (DIN) - any notice without a valid DIN issued after January 1, 2019 is invalid per CBDT Circular 19/2019. All responses are submitted digitally via e-Proceedings.</p><p><strong>Income Tax Act 2025 transition:</strong> The new Act (effective April 1, 2026) renumbers sections. Section 148 becomes 279, Section 245 becomes 438, Section 156 becomes 289. Proceedings for FY 2025-26 and earlier continue under the 1961 Act.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Income Tax Notice Response:</strong></p>
                    <p><strong>Section 270A Penalty</strong> - Under-reporting: 50% of tax due (even inadvertent). Misreporting: 200% of tax due. In addition to principal tax and interest. Immunity under 270AA if full tax paid without appeal.</p><p><strong>DIN</strong> - Document Identification Number. 20-digit number on every notice from Jan 1, 2019. Without valid DIN = invalid notice. Verify at incometax.gov.in.</p><p><strong>NUDGE Campaign</strong> - System-generated advisory emails/SMS for AY 2025-26 flagging AIS mismatches and excess deductions. Not a formal notice. Respond via AIS feedback or revised ITR before escalation.</p><p><strong>e-Proceedings</strong> - Mandatory digital submission module on incometax.gov.in for all notice responses. Save acknowledgement ID for every submission.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="140" height="90" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="35" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT NOTICE</text><rect x="42" y="52" width="32" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="58" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">143(1)</text><rect x="78" y="52" width="32" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="94" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">148</text><rect x="114" y="52" width="32" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="130" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">156</text><rect x="55" y="76" width="90" height="14" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="86" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 270A: 50% / 200%</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">8 TYPES</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">5K+</text><text x="100" y="168" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Notice Response</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT Act 1961</span>
                        <strong>Notice Response</strong>
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
            <h2 class="section-title">Types of Income Tax Notices and Response Deadlines</h2>
            <div class="content-text">
                
                <ul><li><strong>Section 139(9) - Defective Return:</strong> 15 days to rectify. If missed, ITR treated as not filed.</li><li><strong>Section 142(1) - Preliminary Inquiry:</strong> 15-30 days. Rs 10,000 penalty per non-compliance. Prosecution possible.</li><li><strong>Section 143(1) - Automated Intimation:</strong> 30 days. CPC comparison of ITR vs AIS/26AS. Demand or refund.</li><li><strong>Section 143(2) - Scrutiny Notice:</strong> Per notice timeline. Leads to 143(3) assessment. Ignoring = Section 144 best-judgment.</li><li><strong>Section 148A/148 - Reassessment:</strong> 15 days for 148A objection. 30 days for 148 return/objection. Up to 3yr/10yr lookback.</li><li><strong>Section 156 - Demand Notice:</strong> Pay within 30 days. 1% monthly interest from Day 31. Bank account attachment possible.</li><li><strong>Section 245 - Refund Set-Off:</strong> 30 days to accept or dispute. If no response, refund adjusted automatically.</li><li><strong>NUDGE Advisory:</strong> Not a formal notice. AIS feedback or revised ITR before escalation to formal proceedings.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Notice Response Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Authentication and Triage</td><td>DIN verified at incometax.gov.in. Section, AY, and query identified. Urgency classified. Response deadline calendared immediately.</td></tr><tr><td>AIS/TIS Reconciliation</td><td>AIS downloaded and reviewed. Every entry matched against ITR. Specific trigger identified (unreported income, TDS mismatch, high-value transaction, excess deduction, foreign asset).</td></tr><tr><td>Section 143(1) Intimation Response</td><td>ITD computation compared line-by-line. Section 154 rectification if ITD error. Payment guidance if valid demand. Refund assistance if excess tax paid.</td></tr><tr><td>Scrutiny and Reassessment (142(1)/143(2)/148)</td><td>Complete documentation compiled. Structured written reply. e-Proceedings submission. AO representation at hearings. Multi-round query management.</td></tr><tr><td>Section 156 Demand and 245 Refund Set-Off</td><td>Demand verified against assessment order. Rectification if incorrect. Optimal payment plan. Stay application if contesting in appeal.</td></tr><tr><td>Section 270A Penalty and Appeal</td><td>Penalty notice response and mitigation. Section 270AA immunity explored. CIT(A) appeal within 30 days. ITAT appeal if CIT(A) order incorrect.</td></tr>

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
            <h2 class="section-title">How Patron Handles Your Income Tax Notice - 9 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Structured process from DIN authentication through AIS reconciliation, response drafting, e-Proceedings submission, to appeal if required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Authenticate Notice and Verify DIN</h3><p class="step-description">Log in to incometax.gov.in. Download the notice from e-Proceedings. Verify the Document Identification Number using the DIN verification tool. Any notice without valid DIN after January 1, 2019 is invalid and need not be responded to.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DIN verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Genuine notice confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="39" font-size="6" fill="#25D366" font-weight="800" text-anchor="middle" font-family="Arial">DIN</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">VERIFY</text></svg></div><span class="illustration-label">Authenticated</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Identify Section, Reason, and Deadline</h3><p class="step-description">Read notice carefully. Identify section (139(9)/142(1)/143(1)/143(2)/148A/148/156/245), reason for issuance, assessment year, and exact response deadline. Calendar immediately. Different sections have different windows (15 to 30 days).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deadline calendared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SECTION</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">DEADLINE</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Gather Documents and Reconcile AIS</h3><p class="step-description">Download Form 26AS, AIS, and TIS from incometax.gov.in. Collect Form 16/16A, bank statements, and income documents. Reconcile each item in the notice against source documents. Identify if trigger is genuine omission, AIS error, TDS mismatch, or high-value transaction flag.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Trigger identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AIS</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">vs ITR</text></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Draft Structured Response</h3><p class="step-description">Prepare written response addressing every query with documentary support. For 142(1)/143(2): attach ITR, Form 26AS, AIS, Form 16, bank statements. For 148A: detailed legal objection citing precedents and CBDT circulars.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Response drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents indexed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="25" x2="92" y2="25" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="28" y1="38" x2="80" y2="38" stroke="#F5A623" stroke-width="2"/><line x1="28" y1="51" x2="70" y2="51" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Drafted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit via e-Proceedings Portal</h3><p class="step-description">Log in to incometax.gov.in. Go to e-Proceedings under Pending Actions. Locate the notice. Upload response and all supporting documents. Click Submit. Save acknowledgement ID and submission timestamp.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Uploaded to portal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Acknowledgement saved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><text x="60" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">e-PROCEEDINGS</text></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Follow Up, Track, and Appeal if Needed</h3><p class="step-description">Monitor e-Proceedings for additional queries or assessment orders. Respond to each round within deadline. If AO passes adverse order, file CIT(A) appeal under Section 246A within 30 days. ITAT appeal available if CIT(A) order is also incorrect.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Proceedings tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Appeal filed if needed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RESOLVED</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Notice Response</h2>
            <div class="content-text">
                
                <ul><li><strong>Original notice</strong> downloaded from incometax.gov.in with DIN verified</li><li><strong>Filed ITR</strong> acknowledgement for the assessment year in question</li><li><strong>Form 26AS and AIS</strong> from incometax.gov.in</li><li><strong>Form 16/16A</strong> from employer or TDS deductor</li><li><strong>Bank statements</strong> for full FY (for cash deposit/high-value transaction queries)</li><li><strong>Capital gains statements</strong> from broker or property sale documents (if applicable)</li><li><strong>Deduction proofs:</strong> 80C investments, 80D premiums, 24b home loan certificates</li><li><strong>Books of accounts / P&L</strong> (for business income scrutiny cases)</li><li><strong>Foreign account statements / DTAA documentation</strong> (if foreign assets triggered notice)</li><li><strong>Assessment order or prior year refund order</strong> (for 156 demand or 245 set-off)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Most Common Notice Triggers in 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AIS/TIS Mismatch</td><td>ITR declares lower income than AIS shows (FD interest, dividend, rent). Triggers Section 143(1) or 148.</td><td>AIS vs ITR reconciliation. If AIS correct: agree and pay. If AIS error (duplicate bank report, wrong PAN): submit AIS feedback. File Section 154 rectification if demand wrongly raised.</td></tr><tr><td>High-Value Cash Deposits</td><td>Bank reports cash above Rs 10 lakh (savings) or Rs 50 lakh (current) via SFT. Triggers 142(1) or 143(2).</td><td>Source-of-funds explanation with salary slips, business receipts, agricultural income proof, old savings documentation reconciled with bank statements.</td></tr><tr><td>Unreported Capital Gains</td><td>Broker or registrar reports securities/property sale. Not in ITR. Triggers 148A/148 reassessment.</td><td>Section 148A objection with correct capital gains computation. Or file ITR-U proactively before notice if discovered.</td></tr><tr><td>NUDGE Campaign Advisory</td><td>System email flagging AIS discrepancy, foreign asset omission, or excess 80GGC claim. Pre-notice advisory.</td><td>AIS feedback for incorrect entries. Revised ITR before December 31 if income omitted. Prevents escalation to formal notice.</td></tr>

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
            <h2 class="section-title">Income Tax Notice Response Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Section 143(1) Intimation or 139(9) Defective</td><td>Starting from INR 1,499</td></tr><tr><td>Section 142(1) Inquiry Response</td><td>Rs 2,499</td></tr><tr><td>Section 143(2) Scrutiny (First Round)</td><td>Rs 3,999</td></tr><tr><td>Section 148A Show-Cause Objection</td><td>Rs 4,999</td></tr><tr><td>Section 148 Reassessment (Full AO Representation)</td><td>Rs 7,999</td></tr><tr><td>Section 156 Demand or 245 Refund Set-Off</td><td>Rs 1,999</td></tr><tr><td>Section 270A Penalty Response</td><td>Rs 3,999</td></tr><tr><td>NUDGE Advisory (AIS Reconciliation + Revised ITR)</td><td>Rs 1,499</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Income Tax Notice Response consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Critical Notice Response Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Section 139(9) Defective Return</td><td>15 DAYS - correct and resubmit or ITR treated as not filed</td></tr><tr><td>Section 148A Show-Cause</td><td>15 DAYS - last chance to stop Section 148 reassessment</td></tr><tr><td>Section 143(1) Intimation</td><td>30 DAYS - respond or demand becomes final</td></tr><tr><td>Section 156 Demand</td><td>30 DAYS to pay - 1% monthly interest from Day 31 under Sec 220(2)</td></tr><tr><td>Section 245 Refund Set-Off</td><td>30 DAYS to dispute - silence = automatic adjustment</td></tr><tr><td>Section 148 Reassessment Window</td><td>3 years (escaped income < Rs 50 lakh) | 10 years (> Rs 50 lakh or foreign assets)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> 15-day windows for Section 139(9) and 148A are the shortest and most consequential. Missing 139(9) means your ITR is treated as not filed - refunds and carry-forward permanently lost. Missing 148A means full reassessment proceeds without your objection. Act within the first 3-5 days of receiving any notice.</p>

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
            <h2 class="section-title">Why Professional CA Help Matters for Notices</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">DIN Verification First</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Every notice verified at incometax.gov.in before any action. Fake notice scams identified immediately. Protects against phishing.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">AIS Error Challenge</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Banks frequently misreport FD maturity as income. Joint accounts attributed to wrong PAN. Patron identifies AIS errors and submits structured feedback.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Zero Missed Deadlines</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Every deadline calendared on Day 1. Clients receive advance reminders. Zero missed deadlines policy across all notice types.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Section 270A Penalty Mitigation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Challenge penalty applicability for inadvertent omissions. Section 270AA immunity explored. Prevents 50-200% penalty where possible.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Appeal Support</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">CIT(A) appeal filed within 30-day window for adverse orders. ITAT appeal available. Wrongly raised demands recovered.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Taxpayers Choose Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>4.9/5 from 1,200+ verified Google reviews.</strong> 5,000+ clients annually from Pune, Mumbai, Delhi, and Hyderabad. Experience across all assessment years and all notice types - from routine 143(1) intimations to complex 148 reassessments and Section 270A penalty proceedings. Proactive AIS reconciliation prevents notice triggers for existing clients.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Response vs Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Response</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>DIN Authentication</td><td>Many don't check DIN; respond to fake notices</td><td>DIN verified at incometax.gov.in before any action</td></tr><tr><td>AIS Mismatch Root Cause</td><td>Respond generically without resolving trigger</td><td>AIS mapped line-by-line against ITR; feedback submitted for errors</td></tr><tr><td>Section 148A Objection</td><td>Brief self-drafted objection; AO proceeds anyway</td><td>Detailed legal objection citing precedents and CBDT circulars</td></tr><tr><td>Section 270A Penalty</td><td>Simply agree and pay 50-200% unnecessarily</td><td>Challenge applicability; explore 270AA immunity; penalty mitigated</td></tr><tr><td>Deadline Management</td><td>High risk of missing 15-30 day windows</td><td>Every deadline calendared Day 1; advance reminders; zero misses</td></tr><tr><td>Multi-Round Scrutiny</td><td>Run out of documents by 2nd-3rd AO round</td><td>Complete package upfront; each round managed systematically</td></tr><tr><td>Appeal if Adverse Order</td><td>Don't file CIT(A) appeal; order becomes final</td><td>Every order evaluated; CIT(A) appeal within 30 days if meritorious</td></tr>

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
            <h2 class="section-title">Related Tax Filing Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/income-tax-return">Income Tax Return</a> - Revised return, belated return, or ITR-U in response to notice</li><li><a href="/tax-planning-services">Tax Planning</a> - Proactive AIS reconciliation and advance tax to prevent notices</li><li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - If notice triggered by unreported capital gains</li><li><a href="/itr-for-property-sale">ITR for Property Sale</a> - If notice triggered by property capital gains or Section 194IA TDS mismatch</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Income Tax Notices India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>ITA 1961</th><th>ITA 2025 (eff. Apr 1, 2026)</th><th>Key Requirement</th></tr></thead><tbody><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Section 139(9)</a></td><td>Section 263(9)</td><td>Defective return. 15 days to rectify. If missed, ITR treated as not filed.</td></tr><tr><td>Section 142(1)</td><td>Section 267</td><td>Preliminary inquiry. Rs 10,000 penalty per default under 271(1)(b). Prosecution up to 1 year.</td></tr><tr><td>Section 143(1)</td><td>Section 241(1)</td><td>Automated CPC intimation. Within 9 months of FY of filing. 30 days to respond.</td></tr><tr><td>Section 148</td><td>Section 279</td><td>Reassessment. 3 years (< Rs 50 lakh escaped) / 10 years (> Rs 50 lakh or foreign assets).</td></tr><tr><td>Section 156</td><td>Section 289</td><td>Demand notice. Pay within 30 days. 1% monthly interest under 220(2).</td></tr><tr><td>Section 270A</td><td>Section 434</td><td>Under-reporting: 50% penalty. Misreporting: 200%. Immunity under 270AA if paid without appeal.</td></tr></tbody></table></div><p><strong>DIN Mandatory:</strong> CBDT Circular 19/2019. All notices after January 1, 2019 must have valid DIN. Verify at incometax.gov.in. Without DIN = invalid notice.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Income Tax Notice</h2>
                    <p class="faq-expanded__lead">Expert answers about notice types, response deadlines, penalties, DIN verification, NUDGE campaign, and appeal process.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Income Tax Notice Response',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What happens if I ignore an income tax notice?</h3>
                        <div class="faq-expanded__a"><p>Consequences depend on section. Ignoring 139(9): ITR treated as not filed, refunds and carry-forward lost. Ignoring 142(1): Rs 10,000 penalty per instance under 271(1)(b) plus prosecution. Ignoring 143(2): best-judgment assessment by AO under Section 144 without your input. Ignoring 156 demand: 1% monthly interest from Day 31 and bank account attachment under Section 222.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do I respond to Section 143(1) intimation?</h3>
                        <div class="faq-expanded__a"><p>Verify DIN at incometax.gov.in. Compare ITD computation with your filed ITR line by line. If demand is due to ITD error (wrong TDS credit, incorrect AIS entry): file Section 154 rectification. If demand is valid: pay within 30 days. All responses via e-Proceedings module on incometax.gov.in.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Section 148 reassessment notice?</h3>
                        <div class="faq-expanded__a"><p>AO believes income chargeable to tax has escaped assessment in a past year. Preceded by Section 148A show-cause giving 15 days to explain. If accepted, reassessment dropped. If not, full reassessment initiated. Can reopen up to 3 years (escaped income below Rs 50 lakh) or 10 years (above Rs 50 lakh or foreign assets).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the penalties for under-reporting or misreporting income?</h3>
                        <div class="faq-expanded__a"><p>Section 270A: under-reporting attracts 50% penalty on tax due - even for careless or inadvertent errors. Misreporting (deliberate concealment, false documents) attracts 200% of tax due. Both in addition to principal tax and interest. Section 270AA immunity available if you pay full tax and interest and do not file appeal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I file a revised return after receiving a notice?</h3>
                        <div class="faq-expanded__a"><p>For 139(9) defective: correct and resubmit within 15 days. For NUDGE advisory (before formal notice): file revised return under 139(5) before December 31 of the AY. Once 143(2) scrutiny or 148 reassessment is issued, revised return is not possible - but ITR-U (updated return) under 139(8A) may be available for prior years with additional tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How do I check if a notice is genuine?</h3>
                        <div class="faq-expanded__a"><p>Verify the Document Identification Number (DIN) at incometax.gov.in using the DIN verification tool. Also log in and check e-Proceedings or Pending Actions - genuine notices appear there. Any notice without valid DIN after January 1, 2019 is invalid per CBDT Circular 19/2019 and need not be responded to.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>How long to reply?</strong> 139(9): 15 days. 143(1)/156/245: 30 days. 142(1): 15-30 days per notice. 148A: 15 days.</p><p><strong>Is notice genuine?</strong> Verify DIN at incometax.gov.in. Without DIN after Jan 1, 2019 = invalid.</p><p><strong>143(1) vs 143(2)?</strong> 143(1) is automated CPC intimation. 143(2) is formal scrutiny by Assessing Officer requiring detailed documentation.</p><p><strong>Can notice be cancelled?</strong> 143(1) demand reduced via Section 154 rectification. 148A objection can stop reassessment. 143(2)/148 quashed only through appeal.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Respond to Your Income Tax Notice Before the Deadline</h2>
            <div class="content-text">
                
                <p>Every day of delay increases your exposure. Section 139(9) has only 15 days - miss it and your ITR is treated as not filed. Section 270A penalty of 50-200% applies once scrutiny/reassessment is completed. Section 156 demand accrues 1% monthly interest from Day 31. Best-judgment assessment under Section 144 cannot be undone without a costly appeal. Act within the first 3-5 days of receiving any notice.</p><p><strong>Get CA help now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for expert notice response from Rs 1,499.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Resolve Your Income Tax Notice with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Income tax notices have become routine as AIS analytics, SFT reporting, and the NUDGE campaign make mismatches increasingly visible. The consequences of ignoring notices - best-judgment assessment, Section 270A penalties of 50-200%, bank attachment, prosecution - are severe and avoidable with timely, professionally drafted responses.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting handles all 8 notice types from Rs 1,499. DIN authentication, AIS reconciliation, e-Proceedings submission, AO representation, and CIT(A) appeal. Offices in Pune, Mumbai, Delhi, and Hyderabad.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Income%20Tax%20Notice%20Help&body=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Income Tax Notice Response Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting responds to income tax notices for individuals, HUFs, and businesses in major cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">Notice Response by City</p><p class="pa-block-sub">DIN authentication, AIS reconciliation, e-Proceedings submission</p><div class="pa-city-grid"><a href="/income-tax-notice/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-notice/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-notice/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/income-tax-notice/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Tax Services</p><p class="pa-block-sub">Prevention and compliance</p><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Filing</div></div></a><a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">Prevention</div></div></a><a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR Capital Gains</div><div class="pa-card-sub">Investments</div></div></a><a href="/itr-for-property-sale" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Property Sale ITR</div><div class="pa-card-sub">Real Estate</div></div></a><a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Response</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed before each assessment cycle. Income Tax Act 2025 (effective April 1, 2026) will renumber sections. NUDGE campaign and e-Proceedings updates tracked. Next review: July 2026.</p>
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
