
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>LLP Partner Change - Addition, Removal, Form 4 & Filing</title>
    <meta name="description" content="Add or remove a partner in LLP with Form LLP-4 on MCA portal. Starting at INR 2,499. CA/CS team handles all partner change filings.">
    <link rel="canonical" href="/llp-partner-change">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Partner Change - Addition, Removal, Form 4 & Filing">
    <meta property="og:description" content="Add or remove a partner in LLP with Form LLP-4 on MCA portal. Starting at INR 2,499. CA/CS team handles all partner change filings.">
    <meta property="og:url" content="/llp-partner-change">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Partner Change - Addition, Removal, Form 4 & Filing">
    <meta name="twitter:description" content="Add or remove a partner in LLP with Form LLP-4 on MCA portal. Starting at INR 2,499. CA/CS team handles all partner change filings.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "LLP Partner Change in India: Add or Remove",
          "description": "Add or remove a partner in LLP with Form LLP-4 on MCA portal. Starting at INR 2,499. CA/CS team handles all partner change filings.",
          "url": "https://www.patronaccounting.com/llp-partner-change",
          "serviceType": "LLP Partner Change in India: Add or Remove",
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
              "name": "LLP Partner Change in India: Add or Remove",
              "item": "https://www.patronaccounting.com/llp-partner-change"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the procedure to add a new partner in an LLP in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Adding a new partner requires four steps under Section 22 of the LLP Act, 2008: (1) Obtain consent of all existing partners per LLP Agreement or Schedule I, (2) If appointing as Designated Partner, obtain DPIN and DSC, (3) Execute Supplementary LLP Agreement on stamp paper with all partners' signatures, and (4) File Form LLP-4 linked with Form LLP-3 on the MCA V3 portal within 30 days."
              }
            },
            {
              "@type": "Question",
              "name": "What form is required to file LLP partner change with MCA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form LLP-4 is the primary form for partner or Designated Partner addition, cessation, change in designation, or update in particulars. When the change also triggers an LLP Agreement amendment, Form LLP-3 Part B must be filed linked with Form LLP-4. Both forms must be filed within 30 days on MCA V3."
              }
            },
            {
              "@type": "Question",
              "name": "What is the time limit for filing Form LLP-4 for partner change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form LLP-4 must be filed within 30 days of the effective date of the partner change under Section 25 of the LLP Act, 2008 read with Rule 22 of LLP Rules, 2009. Missing this deadline attracts additional filing fees. Non-filing can block Form LLP-8 and Form LLP-11 on the MCA portal."
              }
            },
            {
              "@type": "Question",
              "name": "Is DPIN mandatory for all LLP partners?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DPIN (Designated Partner Identification Number) is mandatory only for Designated Partners, not for regular partners. An incoming Designated Partner must apply for and obtain DPIN through Form DIR-3 on the MCA portal before Form LLP-4 can be filed for their appointment."
              }
            },
            {
              "@type": "Question",
              "name": "Can a foreign national or foreign company become a partner in an Indian LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The LLP Act permits foreign nationals and foreign companies/LLPs to become partners, subject to FDI regulations and FEMA compliance. However, at least one Designated Partner must be an Indian resident per Section 7. FEMA guidelines and sector-specific FDI limits must be verified."
              }
            },
            {
              "@type": "Question",
              "name": "What happens to a partner's liability after they resign from an LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Resignation does not automatically discharge the resigning partner from obligations incurred before the resignation date - Section 24(4) of LLP Act 2008. Creditors and third parties who had dealings before resignation can hold the former partner liable for those obligations."
              }
            },
            {
              "@type": "Question",
              "name": "Can a body corporate be a partner or Designated Partner in an LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, any body corporate can be a partner per Section 5. However, a body corporate cannot be a Designated Partner directly - it must nominate an individual as its representative, and that individual acts as the Designated Partner per Section 7(2) of LLP Act."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not filing Form LLP-4 for partner change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 25(4) of the LLP Act, 2008, failure to file makes the LLP and every partner liable to penalty. Additional filing fees under LLP Amendment Rules 2022 apply on a slab basis based on period of delay. Non-filing also blocks annual return and financial statement filings."
              }
            },
            {
              "@type": "Question",
              "name": "LLP mein partner kaise add karte hain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Pehle existing partners ki consent leni hoti hai, phir agar Designated Partner hai toh DPIN aur DSC lena hota hai. Uske baad supplementary LLP agreement execute karna hota hai aur 30 din ke andar Form LLP-4 aur Form LLP-3 MCA V3 portal par file karna hota hai. Patron Accounting poori process handle karta hai starting at INR 2,499. Quick Answers What forms for LLP partner change? Form LLP-4 (partner change) + Form LLP-3 Part B (agreement amendment) linked. Both on MCA V3 within 30 days. Is Form LLP-3 always required with Form LLP-4? Only when partner change triggers LLP Agreement amendment. For pure particulars change (name/address), only Form LLP-4. Who certifies Form LLP-4? Practising CA, CS, or Cost Accountant registered on MCA V3 portal. Can a body corporate be Designated Partner? Not directly - must nominate an individual representative per Section 7(2)."
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
                        LLP Partner Change in India: Complete Process for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Governed by Sections 22, 24, 25 of LLP Act 2008</strong>:</span> Read with Rule 22 of LLP Rules, 2009. Partner addition, resignation, retirement, and designation changes all covered.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Form LLP-4 Within 30 Days</strong>:</span> Filed on MCA V3 portal within 30 days of effective date of partner change. Form LLP-3 linked when LLP Agreement is amended.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Minimum 2 Designated Partners at All Times</strong>:</span> At least one must be India resident per Section 7. DPIN/DIN mandatory for Designated Partners. Personal liability if below minimum for 6+ months.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>DPIN, DSC, Agreement and MCA Filing - All Handled</strong>:</span> From DPIN procurement for incoming Designated Partner to supplementary LLP Agreement drafting and Form LLP-4 + LLP-3 linked filing.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 500+ LLP Secretarial Filings | 5,000+ Clients | 99% First-Attempt Approval | 4.8/5 Rating | Mumbai, Delhi, Pune, Bangalore</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=LLP%20Partner%20Change&body=Hello%2C%0AI%20need%20help%20with%20LLP%20partner%20change.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20a%20partner%20in%20my%20LLP.%20Please%20help." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'LLP Partner Change',
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
    'ctaText'    => 'Change your LLP partner with expert CA/CS support. Starting at INR 2,499. Addition, resignation, removal - all handled.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">When Needed</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Step-by-Step</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Partner Change in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Partner Change Services at a Glance</strong></p>
                    <p>LLP partner change - addition, removal, resignation, or retirement - requires a partners' resolution, supplementary LLP Agreement on stamp paper, Form LLP-4 on MCA V3 portal within 30 days, and linked Form LLP-3 when the agreement is amended. Minimum 2 Designated Partners required at all times. Patron Accounting starting at INR 2,499 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Every partner change must be documented and registered with the RoC through Form LLP-4 within 30 days. Failing to comply attracts late fees and can block subsequent annual filing obligations.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Act</strong></td><td>LLP Act, 2008 - Sections 22, 24, 25 read with Rule 22 of LLP Rules, 2009</td></tr>
                        <tr><td><strong>Applicable To</strong></td><td>All registered LLPs adding, removing, retiring, or changing partner details</td></tr>
                        <tr><td><strong>Key Forms</strong></td><td>Form LLP-4 (partner change) + Form LLP-3 (LLP Agreement amendment)</td></tr>
                        <tr><td><strong>Filing Deadline</strong></td><td>Within 30 days of effective date of partner change</td></tr>
                        <tr><td><strong>Late Penalty</strong></td><td>Additional filing fees under LLP Amendment Rules, 2022</td></tr>
                        <tr><td><strong>DPIN Requirement</strong></td><td>Mandatory for Designated Partners; not mandatory for regular Partners</td></tr>
                        <tr><td><strong>Minimum Partners</strong></td><td>Minimum 2 Designated Partners at all times; at least 1 must be India resident</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>LLP mein partner kaise add karte hain? Pehle existing partners ki consent leni hoti hai, phir agar Designated Partner hai toh DPIN aur DSC lena hota hai. Uske baad supplementary LLP agreement execute karna hota hai aur 30 din ke andar Form LLP-4 aur Form LLP-3 MCA V3 portal par file karna hota hai.</p>
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
                <h2 class="section-title">What is LLP Partner Change?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>LLP partner change</strong> is the formal process of adding, removing, retiring, or updating the details of a partner or designated partner in an LLP, requiring a partners' resolution, supplementary agreement, and filing of Form LLP-4 (and Form LLP-3 when the LLP Agreement is amended) with the RoC within 30 days under Sections 24 and 25 of the LLP Act, 2008.</p>
                    <p>Unlike a company where directors are appointed by shareholders, LLP partners are admitted or removed per the <a href="/llp-agreement-change">LLP Agreement</a> or Schedule I to the LLP Act. The LLP continues as a separate legal entity regardless of partner change.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Partner Change:</strong></p>
                    <p><strong>Partner:</strong> Individual (18+, solvent, sound mind) or body corporate admitted per Section 5 of LLP Act, 2008 and the LLP Agreement.</p>
                    <p><strong>Designated Partner:</strong> Partner responsible for regulatory compliance; must hold DPIN/DIN; LLP must have minimum 2 at all times per Section 7. At least one must be India resident.</p>
                    <p><strong>DPIN:</strong> Designated Partner Identification Number from MCA; mandatory for all Designated Partners; applied through Form DIR-3.</p>
                    <p><strong>Form LLP-4:</strong> MCA e-form for partner addition, cessation, change in designation, or update in particulars per Rule 22, LLP Rules 2009.</p>
                    <p><strong>Form LLP-3:</strong> Filed linked with Form LLP-4 when partner change triggers LLP Agreement amendment (contribution/profit ratio changes).</p>
                    <p><strong>Form 6:</strong> Consent form signed by incoming partner confirming willingness to act; mandatory attachment to Form LLP-4.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- LLP partner change -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">LLP ACT S.22, 24, 25</text>
                            <circle cx="60" cy="58" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="60" y="62" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">P1</text>
                            <circle cx="100" cy="58" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                            <text x="100" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">P2</text>
                            <circle cx="140" cy="58" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5" stroke-dasharray="4 2"/>
                            <text x="140" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">NEW</text>
                            <rect x="45" y="82" width="110" height="16" rx="4" fill="#14365F"/>
                            <text x="100" y="93" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM LLP-4 + LLP-3</text>
                            <text x="100" y="118" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">30 DAYS - MCA V3 PORTAL</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Add, Remove, Redesignate</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Act 2008</span>
                        <strong>Partner Change</strong>
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
            <h2 class="section-title">When is LLP Partner Change Needed?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Addition of new partner</strong> - individual or body corporate bringing capital, expertise, or business relationships</li>
                    <li><strong>Resignation of partner</strong> - 30 days' written notice required per Section 24 if LLP Agreement is silent</li>
                    <li><strong>Retirement of partner</strong> on happening of event specified in LLP Agreement</li>
                    <li><strong>Death or insolvency of partner</strong> - LLP continues; estate acquires financial rights but not management rights</li>
                    <li><strong>Removal or expulsion</strong> as per conditions in the LLP Agreement</li>
                    <li><strong>Change in designation</strong> - regular Partner to Designated Partner or vice versa</li>
                    <li><strong>Change in particulars</strong> - update of partner's name or residential address (inform LLP within 15 days per Section 25(1))</li>
                    <li><strong>Body corporate as partner</strong> - must designate a natural person as nominee/representative</li>
                </ul>
                <p style="margin-top:16px;"><strong>Critical:</strong> If a partner ceases to be a partner, it does NOT discharge their obligations arising before cessation date - Section 24(4), LLP Act 2008.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our LLP Partner Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>LLP Agreement Review</strong></td><td>Identify process, conditions, and restrictions on partner change in existing agreement</td></tr>
                        <tr><td><strong>DPIN/DIN and DSC Support</strong></td><td>Application for incoming Designated Partner through Form DIR-3 and Class 3 DSC procurement</td></tr>
                        <tr><td><strong>Resolution and Consent Drafting</strong></td><td>Partners' resolution for addition/removal + Form 6 consent for incoming partner</td></tr>
                        <tr><td><strong>Supplementary LLP Agreement</strong></td><td>Drafted on appropriate stamp paper per State Stamp Act, signed by all partners, notarized</td></tr>
                        <tr><td><strong>Form LLP-4 + LLP-3 Linked Filing</strong></td><td>Filed on MCA V3 portal within 30 days with professional CS/CA certification</td></tr>
                        <tr><td><strong>Post-Change Update Advisory</strong></td><td>GST registration amendment, bank KYC update, sector-specific licence update checklist</td></tr>

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
            <h2 class="section-title">Step-by-Step: Adding a New Partner in an LLP</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The most common partner change scenario. For resignation procedure, see Section 7B in our detailed guide. Patron Accounting handles both addition and removal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Review LLP Agreement</h3><p class="step-description">Check clauses governing partner admission. Verify if all-partner consent or specific majority is required. If silent, obtain consent of all existing partners per Schedule I to LLP Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Agreement reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Consent requirements identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="8" rx="2" fill="#14365F"/><text x="45" y="26" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.22</text><line x1="30" y1="36" x2="90" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="46" x2="85" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Reviewed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain DPIN/DIN and DSC for Incoming DP</h3><p class="step-description">If incoming partner will be Designated Partner, apply for DPIN through Form DIR-3 on MCA portal. Class 3 DSC is mandatory. For regular partner, DPIN not needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DPIN obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC procured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="29" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DPIN + DSC</text><line x1="25" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Form DIR-3</text></svg></div><span class="illustration-label">DPIN Ready</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Obtain Consent in Form 6</h3><p class="step-description">Incoming partner signs Form 6 (consent to act as partner/designated partner). This is a mandatory attachment to Form LLP-4.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 6 signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Consent documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM 6</text><line x1="30" y1="44" x2="90" y2="44" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="58" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Consent to Act</text></svg></div><span class="illustration-label">Consent</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pass Partners' Resolution</h3><p class="step-description">Existing partners pass a resolution approving admission - specifying new partner's details, contribution amount, profit-sharing ratio, and effective date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Details specified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#14365F"/><text x="60" y="29" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">RESOLUTION</text><line x1="25" y1="40" x2="95" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">New Partner Approved</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Execute Supplementary LLP Agreement</h3><p class="step-description">Draft on stamp paper per State Stamp Act. All partners (existing + incoming) sign. Notarize and witness.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Agreement executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stamp duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SUPP. AGREEMENT</text><line x1="25" y1="34" x2="95" y2="34" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="30" y="42" width="25" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="51" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">STAMP</text><rect x="60" y="42" width="30" height="12" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="75" y="51" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">SIGNED</text></svg></div><span class="illustration-label">Executed</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Form LLP-4 on MCA V3 (Within 30 Days)</h3><p class="step-description">Select: Appointment of Partner/Designated Partner. Attach Form 6, resolution, PAN, address proof. DSC of Designated Partner. Professionally certified by CS/CA/CWA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form LLP-4 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 30 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#E8712C"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM LLP-4</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">30 DAYS</text></svg></div><span class="illustration-label">LLP-4 Filed</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Linked Form LLP-3</h3><p class="step-description">Since partner addition requires LLP Agreement amendment, file Form LLP-3 Part B linked with Form LLP-4. Attach Supplementary LLP Agreement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form LLP-3 linked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Agreement filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM LLP-3</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Linked with LLP-4</text></svg></div><span class="illustration-label">LLP-3 Filed</span><span class="step-number-large">07</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Post-Filing Updates</h3><p class="step-description">After MCA approval, update GST registration (add/remove authorised signatory), update bank KYC, notify statutory bodies for licensed businesses.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank KYC done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">UPDATES DONE</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for LLP Partner Change</h2>
            <div class="content-text">
                
                <p><strong>For Addition of Partner:</strong></p>
                <ul>
                    <li>Form 6 - Consent signed by incoming partner/designated partner</li>
                    <li>PAN card and Aadhaar/passport of incoming partner</li>
                    <li>Proof of residential address (utility bill/bank statement not older than 2 months)</li>
                    <li>DPIN/DIN of incoming Designated Partner (if applicable)</li>
                    <li>Class 3 DSC of incoming Designated Partner</li>
                    <li>Partners' resolution approving addition</li>
                    <li>Executed Supplementary LLP Agreement on stamp paper</li>
                    <li>Copy of existing LLP Agreement + LLPIN</li>
                </ul>
                <p style="margin-top:16px;"><strong>For Resignation/Removal of Partner:</strong></p>
                <ul>
                    <li>Resignation letter/notice from outgoing partner (signed and dated)</li>
                    <li>Partners' resolution acknowledging resignation or approving removal</li>
                    <li>Executed Supplementary LLP Agreement reflecting revised structure</li>
                    <li>DSC of remaining Designated Partner for Form LLP-4 signing</li>
                    <li>LLPIN of the LLP</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in LLP Partner Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Designated Partners Below Minimum of 2</strong></td><td>Section 6: sole remaining partner becomes personally liable for LLP obligations after 6 months</td><td>We check post-change Designated Partner count and advise on simultaneous appointment if needed.</td></tr>
                        <tr><td><strong>DPIN/DIN Procurement Delays</strong></td><td>30-day Form LLP-4 window missed</td><td>We initiate DPIN application (Form DIR-3) and DSC at the earliest stage - before resolution is passed.</td></tr>
                        <tr><td><strong>Body Corporate as Partner - Nominee Missing</strong></td><td>Company/LLP partner must designate a natural person as representative</td><td>Our CS team reviews body corporate resolution and ensures nominee details are correctly documented.</td></tr>
                        <tr><td><strong>Outgoing Partner's Capital Settlement Unclear</strong></td><td>Disputes delay the formal partner change process</td><td>We provide standard settlement clause template and advisory on capital account settlement approach.</td></tr>

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
            <h2 class="section-title">Fees for LLP Partner Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Basic (1 partner addition or removal, 2-partner LLP)</td><td class="table-amount">Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Standard (up to 2 partner changes, LLP with up to 4 partners)</td><td class="table-amount">Starting at INR 3,499</td></tr>
                        <tr><td>Advanced (3+ partner changes or 5+ partner LLP or Designated Partner designation change)</td><td class="table-amount">Starting at INR 4,499</td></tr>
                        <tr><td>Government Fees (MCA Form LLP-4 + Form LLP-3)</td><td class="table-amount">Based on LLP contribution slab</td></tr>
                        <tr><td>Stamp Duty on Supplementary LLP Agreement</td><td class="table-amount">As per State Stamp Act (varies by state)</td></tr>
                        <tr><td>DPIN/DSC Procurement (if new Designated Partner)</td><td class="table-amount">At actuals</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Partner Change consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20partner%20change.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for LLP Partner Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DPIN/DIN and DSC procurement (if new Designated Partner)</td><td>3-5 working days</td></tr>
                        <tr><td>Document collection and LLP Agreement review</td><td>1-2 days</td></tr>
                        <tr><td>Supplementary Agreement drafting and execution</td><td>1-2 days</td></tr>
                        <tr><td>Stamp paper procurement (state-dependent)</td><td>1-2 days</td></tr>
                        <tr><td>Form LLP-4 and Form LLP-3 filing on MCA V3</td><td>1 day after documents ready</td></tr>
                        <tr><td>MCA processing and approval</td><td>3-5 working days</td></tr>
                        <tr><td>Total (new DP with DPIN required)</td><td>10-15 working days</td></tr>
                        <tr><td>Total (no new DPIN required)</td><td>7-10 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Statutory Deadline:</strong> 30 days from effective date of partner change - hard deadline under Section 25 and Rule 22. Late filing attracts additional fees under LLP Amendment Rules 2022 and may block Form LLP-8 and Form LLP-11 filings.</p>

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
            <h2 class="section-title">Why Use Patron Accounting for LLP Partner Change</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Deep LLP Act Expertise</h3><p>Experienced CA and CS team ensuring legally watertight partner change under Sections 22, 24, 25. 500+ LLP secretarial filings processed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Proactive DPIN/DSC Procurement</h3><p>Initiated from Day 1 to prevent 30-day deadline breach. Form DIR-3 application and Class 3 DSC coordinated in parallel.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Linked LLP-4 + LLP-3 Filing</h3><p>Simultaneous linked filing minimises risk of rejection. 99% first-attempt approval rate on MCA V3 portal.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Minimum DP Count Audit</h3><p>Pre-change verification ensures LLP always has minimum 2 Designated Partners. Prevents Section 6 personal liability exposure.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>State-Specific Stamp Duty</h3><p>Accurate calculation for Supplementary LLP Agreement per State Stamp Act. Maharashtra, Delhi, Karnataka each handled correctly.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3>Post-Change Update Advisory</h3><p>GST registration amendment, bank KYC update, and sector-specific licence update checklist provided after MCA approval.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">500+ LLP Secretarial Filings - 99% First-Attempt Approval</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 5,000+ Clients | 500+ LLP Filings | 99% First-Attempt Approval | 4.8/5 Rating | Mumbai, Delhi, Pune, Bangalore</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"We needed to add a new Designated Partner urgently and Patron Accounting had the entire DPIN, DSC, Form LLP-4, and Form LLP-3 process done within 10 days. Completely hassle-free." - <strong>Priya N., Services LLP, Bangalore</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional LLP Partner Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Activity</th><th>DIY Risk</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>LLP Agreement Review</strong></td><td>Risk of missing consent requirements</td><td>Thorough CS review of Agreement clauses</td></tr>
                        <tr><td><strong>DPIN/DIN Procurement</strong></td><td>Often delayed causing 30-day breach</td><td>Proactive application from Day 1</td></tr>
                        <tr><td><strong>Form LLP-4 + LLP-3 Linked Filing</strong></td><td>Technical linkage errors causing rejection</td><td>Expert filing with correct linkage on MCA V3</td></tr>
                        <tr><td><strong>Professional Certification</strong></td><td>Requires in-practice CA/CS/CWA</td><td>In-house practising CS/CA certifies</td></tr>
                        <tr><td><strong>Minimum DP Count</strong></td><td>Often undetected until penalty</td><td>Pre-change audit by CS team</td></tr>
                        <tr><td><strong>Time to Completion</strong></td><td>15-25 days with errors</td><td>7-15 working days</td></tr>

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
                    <li><a href="/llp-agreement-change">LLP Agreement Change</a> - broader LLP Agreement amendments</li>
                    <li><a href="/llp-contribution-change">LLP Contribution Change</a> - capital contribution amendment via Form LLP-3</li>
                    <li><a href="/llp-name-change">LLP Name Change</a> - change LLP name via RUN and LLP-5</li>
                    <li><a href="/pvt-llp-compliance">LLP Annual Compliance</a> - Form 11, Form 8, ITR-5, DIR-3 KYC</li>
                    <li><a href="/llp-incorporation">LLP Registration in India</a> - new LLP incorporation</li>
                    <li><a href="/dsc-registration">Digital Signature Certificate (DSC)</a> - Class 3 DSC for MCA filing</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for LLP Partner Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Relevance</th></tr></thead><tbody>
                        <tr><td><strong>Section 5, LLP Act 2008</strong></td><td>Eligibility - individual (18+, solvent) or body corporate. Source: <a href="https://www.indiacode.nic.in/bitstream/123456789/2023/1/A2009-06.pdf" target="_blank" rel="noopener">India Code - LLP Act</a></td></tr>
                        <tr><td><strong>Section 6, LLP Act 2008</strong></td><td>Minimum 2 partners at all times. If below 2 for 6+ months, sole partner personally liable.</td></tr>
                        <tr><td><strong>Section 7, LLP Act 2008</strong></td><td>Minimum 2 Designated Partners (individuals); at least one India resident; each must have DPIN.</td></tr>
                        <tr><td><strong>Section 22, LLP Act 2008</strong></td><td>New partners admitted per LLP Agreement or Schedule I. Source: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a></td></tr>
                        <tr><td><strong>Section 24, LLP Act 2008</strong></td><td>Cessation - partner can resign per LLP Agreement; if silent, 30 days' notice. Cessation does not discharge prior obligations (S.24(4)).</td></tr>
                        <tr><td><strong>Section 25, LLP Act 2008</strong></td><td>Registration of changes - partner must inform LLP within 15 days; LLP files with Registrar within 30 days.</td></tr>
                        <tr><td><strong>Rule 22, LLP Rules 2009</strong></td><td>Prescribes Form LLP-4 as the form for filing notice of partner change with the Registrar.</td></tr>
                        <tr><td><strong>LLP (Amendment) Act 2021</strong></td><td>Effective April 1, 2022: decriminalised several violations, revised penalty structure.</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - LLP Partner Change</h2>
                    <p class="faq-expanded__lead">Get answers about adding or removing LLP partners, Form LLP-4, DPIN requirements, foreign partners, and penalties.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Partner Change',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the procedure to add a new partner in an LLP in India?</h3>
                        <div class="faq-expanded__a"><p>Adding a new partner requires four steps under Section 22 of the LLP Act, 2008: (1) Obtain consent of all existing partners per LLP Agreement or Schedule I, (2) If appointing as Designated Partner, obtain DPIN and DSC, (3) Execute Supplementary LLP Agreement on stamp paper with all partners' signatures, and (4) File Form LLP-4 linked with Form LLP-3 on the MCA V3 portal within 30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What form is required to file LLP partner change with MCA?</h3>
                        <div class="faq-expanded__a"><p>Form LLP-4 is the primary form for partner or Designated Partner addition, cessation, change in designation, or update in particulars. When the change also triggers an LLP Agreement amendment, Form LLP-3 Part B must be filed linked with Form LLP-4. Both forms must be filed within 30 days on MCA V3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit for filing Form LLP-4 for partner change?</h3>
                        <div class="faq-expanded__a"><p>Form LLP-4 must be filed within 30 days of the effective date of the partner change under Section 25 of the LLP Act, 2008 read with Rule 22 of LLP Rules, 2009. Missing this deadline attracts additional filing fees. Non-filing can block Form LLP-8 and Form LLP-11 on the MCA portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is DPIN mandatory for all LLP partners?</h3>
                        <div class="faq-expanded__a"><p>DPIN (Designated Partner Identification Number) is mandatory only for Designated Partners, not for regular partners. An incoming Designated Partner must apply for and obtain DPIN through Form DIR-3 on the MCA portal before Form LLP-4 can be filed for their appointment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a foreign national or foreign company become a partner in an Indian LLP?</h3>
                        <div class="faq-expanded__a"><p>Yes. The LLP Act permits foreign nationals and foreign companies/LLPs to become partners, subject to FDI regulations and FEMA compliance. However, at least one Designated Partner must be an Indian resident per Section 7. FEMA guidelines and sector-specific FDI limits must be verified.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens to a partner's liability after they resign from an LLP?</h3>
                        <div class="faq-expanded__a"><p>Resignation does not automatically discharge the resigning partner from obligations incurred before the resignation date - Section 24(4) of LLP Act 2008. Creditors and third parties who had dealings before resignation can hold the former partner liable for those obligations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a body corporate be a partner or Designated Partner in an LLP?</h3>
                        <div class="faq-expanded__a"><p>Yes, any body corporate can be a partner per Section 5. However, a body corporate cannot be a Designated Partner directly - it must nominate an individual as its representative, and that individual acts as the Designated Partner per Section 7(2) of LLP Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the penalty for not filing Form LLP-4 for partner change?</h3>
                        <div class="faq-expanded__a"><p>Under Section 25(4) of the LLP Act, 2008, failure to file makes the LLP and every partner liable to penalty. Additional filing fees under LLP Amendment Rules 2022 apply on a slab basis based on period of delay. Non-filing also blocks annual return and financial statement filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">LLP mein partner kaise add karte hain?</h3>
                        <div class="faq-expanded__a"><p>Pehle existing partners ki consent leni hoti hai, phir agar Designated Partner hai toh DPIN aur DSC lena hota hai. Uske baad supplementary LLP agreement execute karna hota hai aur 30 din ke andar Form LLP-4 aur Form LLP-3 MCA V3 portal par file karna hota hai. Patron Accounting poori process handle karta hai starting at INR 2,499.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What forms for LLP partner change?</strong> Form LLP-4 (partner change) + Form LLP-3 Part B (agreement amendment) linked. Both on MCA V3 within 30 days.</p>
                <p><strong>Is Form LLP-3 always required with Form LLP-4?</strong> Only when partner change triggers LLP Agreement amendment. For pure particulars change (name/address), only Form LLP-4.</p>
                <p><strong>Who certifies Form LLP-4?</strong> Practising CA, CS, or Cost Accountant registered on MCA V3 portal.</p>
                <p><strong>Can a body corporate be Designated Partner?</strong> Not directly - must nominate an individual representative per Section 7(2).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">30-Day Filing Deadline - Don't Let Partner Change Block Your Compliance</h2>
            <div class="content-text">
                
                <p><strong>From the effective date of any LLP partner change, Form LLP-4 must be filed within 30 days. Non-filing blocks annual returns and attracts penalties.</strong></p>
                <ul>
                    <li><strong>Late filing:</strong> Additional fees on slab basis under LLP Amendment Rules 2022</li>
                    <li><strong>Cascading block:</strong> Non-filing of Form LLP-4 blocks Form LLP-8 and Form LLP-11 filings</li>
                    <li><strong>Minimum DP violation:</strong> If Designated Partners fall below 2 for 6+ months, remaining partner becomes personally liable (Section 6)</li>
                    <li><strong>DPIN procurement:</strong> Takes 3-5 working days - must be initiated immediately to preserve 30-day window</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Change Your LLP Partner - Starting at INR 2,499</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">LLP partner change is a well-defined compliance process governed by Sections 22, 24, and 25 of the LLP Act, 2008. Whether adding a new partner, accepting a resignation, or changing a designation, the process requires careful attention to DPIN requirements, the 30-day filing deadline, and linked LLP-3 filing.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA and CS team manages the entire process - from DPIN procurement and Agreement review to MCA portal filing and post-change update advisory.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 2,499 (Exl GST and Govt. Charges) | 500+ LLP Filings | 99% First-Attempt | 7-15 Working Days</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20partner%20change.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20LLP%20Partner%20Change&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20change%20an%20LLP%20partner.%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Partner Change Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert LLP secretarial services across major cities in India.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/llp-partner-change/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/llp-partner-change/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/llp-partner-change/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/llp-partner-change/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related LLP Services</div><div class="pa-block-sub">Complete LLP compliance and amendment support</div><div class="pa-cross-grid"><a href="/llp-agreement-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Agreement Change</div><div class="pa-card-sub">India</div></div></a><a href="/llp-contribution-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Contribution Change</div><div class="pa-card-sub">India</div></div></a><a href="/llp-name-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Name Change</div><div class="pa-card-sub">India</div></div></a><a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/dsc-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">DSC Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers LLP Partner Change under Sections 22, 24, 25 of LLP Act 2008 and Rule 22 of LLP Rules 2009. LLP (Amendment) Act 2021 effective April 1, 2022 reflected.</p>
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
