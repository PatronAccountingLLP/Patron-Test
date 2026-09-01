
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Registered Office Change Mumbai - INC-22, INC-23 & ROC</title>
    <meta name="description" content="CA-assisted registered office change in Mumbai. INC-22, INC-23, within city, cross-ROC, cross-state. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/change-in-registered-office/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Registered Office Change Mumbai - INC-22, INC-23 & ROC">
    <meta property="og:description" content="CA-assisted registered office change in Mumbai. INC-22, INC-23, within city, cross-ROC, cross-state. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/change-in-registered-office/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Registered Office Change Mumbai - INC-22, INC-23 & ROC">
    <meta name="twitter:description" content="CA-assisted registered office change in Mumbai. INC-22, INC-23, within city, cross-ROC, cross-state. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Change Registered Office Mumbai",
      "description": "CA-assisted registered office change in Mumbai. INC-22, INC-23, within city, cross-ROC, cross-state. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/change-in-registered-office/mumbai",
      "serviceType": "Change Registered Office Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
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
          "name": "Change Registered Office India: INC-22 Guide",
          "item": "https://www.patronaccounting.com/change-in-registered-office"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Change Registered Office Mumbai",
          "item": "https://www.patronaccounting.com/change-in-registered-office/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ROC handles registered office change in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ROC Mumbai at Everest House, 100 Marine Lines, Mumbai 400020. Form INC-22 filed on MCA V3 portal. For cross-ROC within Maharashtra (Scenario 3), Regional Director (Western Region), also based in Mumbai, must approve via INC-23. Patron's Marine Lines office is adjacent to both ROC and RD offices."
          }
        },
        {
          "@type": "Question",
          "name": "What resolution is needed for registered office change?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scenario 1 (within city): Board Resolution only. Scenarios 2, 3, 4 (outside city/cross-ROC/cross-state): Special Resolution with 75% majority at EGM. Cross-state (Scenario 4) additionally requires MOA Clause II alteration approval. Patron determines the correct resolution for each specific relocation."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form INC-22?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MCA form to notify ROC of registered office address change. Filed within 15 days of Board Resolution (Scenario 1) or 30/60 days for other scenarios. Requires: CIN, new full address, date of change, resolution, address proof, utility bill (within 2 months), and NOC from owner. Filed electronically with director's DSC."
          }
        },
        {
          "@type": "Question",
          "name": "When is Regional Director approval needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When company moves from one ROC jurisdiction to another within the same state (Scenario 3 – e.g. Mumbai ROC to Pune ROC), or to a different state (Scenario 4). Application via Form INC-23. The Regional Director (Western Region) is in Mumbai, handling both scenarios for Mumbai companies. Patron coordinates directly with the RD office."
          }
        },
        {
          "@type": "Question",
          "name": "How long does the process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scenario 1: 5-7 days. Scenario 2: 15-20 days. Scenario 3 (cross-ROC): 45-90 days (RD processing is bottleneck). Scenario 4 (cross-state): 60-120 days (CG/RD + newspaper). Post-change updates add 15-30 days to all scenarios. Patron provides realistic estimates per scenario."
          }
        },
        {
          "@type": "Question",
          "name": "What post-change updates are needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST amendment (REG-14), PAN address update, TAN update, bank account address change (all accounts), EPF/ESIC establishment address, FSSAI/IEC update if applicable, office signboard (Section 12(3) mandatory), letterhead/invoices, website. Patron manages all 10 updates in parallel for Mumbai companies."
          }
        },
        {
          "@type": "Question",
          "name": "Does CIN change when registered office changes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No for Scenarios 1, 2, 3 (within Maharashtra) – CIN unchanged. For Scenario 4 (cross-state), CIN changes because the first two characters represent the state code. Mumbai company (CIN starting MH) moving to Delhi gets a new CIN prefix. This is a significant implication of cross-state moves."
          }
        },
        {
          "@type": "Question",
          "name": "Can I move from co-working to dedicated office?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Many Mumbai startups incorporate at co-working spaces and later move to dedicated offices. This is typically Scenario 1 (within city) if both are in Mumbai. Requires Board Resolution and INC-22 within 15 days. Ensure new office has valid rent agreement permitting use as registered office, utility bill within 2 months, and NOC from owner. Quick Answers Mumbai mein office address kaise badle? Same city mein hai toh Board Resolution + INC-22 file karo 15 din mein. Same ROC lekin different area hai toh Special Resolution + MGT-14 + INC-22 file karo 30 din mein. Mumbai se Pune (different ROC) jaana hai toh Regional Director ki approval chahiye INC-23 se. Doosre state jaana hai toh MOA bhi badalna padega + newspaper mein publish karna padega. Kitne din lagta hai? Same city: 5-7 din. Same ROC: 15-20 din. Different ROC (Mumbai to Pune): 45-90 din. Different state (Mumbai to Delhi): 60-120 din. Post-change GST/PAN/bank updates: 15-30 din extra. Kya co-working se dedicated office jaane pe bhi file karna padta hai? Haan. Registered office change hota hai. Board Resolution + INC-22 15 din mein file karo. Patron 5-7 din mein complete karta hai Mumbai mein."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        Change in Registered Office in Mumbai: Relocate Within City, Across ROC, or to Another State
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scenario 1:</span> Within same city &ndash; Board Resolution + INC-22 within 15 days | 5-7 working days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scenario 2:</span> Outside city, same ROC &ndash; Special Resolution + MGT-14 + INC-22 within 30 days | 15-20 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scenario 3:</span> Different ROC, same state (Mumbai to Pune) &ndash; INC-23 to Regional Director | 45-90 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scenario 4:</span> Different state (Mumbai to Delhi/Bangalore) &ndash; MOA alteration + newspaper + RD/CG approval | 60-120 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office is adjacent to ROC Everest House &amp; Regional Director office &ndash; 10,000+ businesses served</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20registered%20office%20of%20my%20company%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Change in Registered Office',
                                            'city'     => 'Mumbai',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">When Needed</a>
            <a href="#services-section" class="toc-btn">4 Scenarios</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Geography Map</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change in Registered Office in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Change in Registered Office Services at a Glance</strong></p>
                    <p>Changing a company's registered office involves four scenarios with increasing complexity depending on the relocation distance: (1) within same city &ndash; Board Resolution + INC-22 in 5-7 days; (2) outside city but same ROC &ndash; Special Resolution + MGT-14 + INC-22 in 15-20 days; (3) different ROC within Maharashtra (Mumbai to Pune) &ndash; Regional Director approval via INC-23 in 45-90 days; (4) different state (Mumbai to Delhi/Bangalore) &ndash; MOA alteration + newspaper publication + RD/CG approval in 60-120 days. Each scenario requires different forms, resolutions, and post-change updates across GST, PAN, bank, and signboard.</p>
                </div>
                <p>Mumbai companies frequently relocate: startups upgrading from co-working to dedicated offices, BKC companies moving to Andheri/Powai for cost savings, companies shifting to Navi Mumbai/Thane for operations, Mumbai-to-Pune cross-ROC moves, and Mumbai-to-Delhi/Bangalore cross-state relocations. Each relocation follows a different compliance pathway. Learn more about <a href="/change-in-registered-office">Change in Registered Office across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to both ROC Mumbai Everest House and the Regional Director (Western Region) office &ndash; provides end-to-end registered office change for all four scenarios: correct scenario determination, form filing (INC-22, MGT-14, INC-23, INC-28), RD coordination, newspaper publication, and the complete post-change update checklist. For ongoing compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is a Registered Office?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The registered office is the official legal address of a company, registered with the Registrar of Companies under Section 12 of the Companies Act, 2013. It is the address where the company receives all government communications, statutory notices, legal proceedings, and correspondence from ROC, income tax, GST, and other authorities.</p>
                    <p>Every company must have a registered office from the 15th day of incorporation. The address must be a physical location (not a PO Box) where the company's name is displayed on the signboard. It determines the company's domicile (state of incorporation), jurisdictional ROC, and applicable state laws. For Mumbai companies, the registered office is under ROC Mumbai at Everest House, Marine Lines.</p>
                    <p>The registered office address appears on: Certificate of Incorporation, letterheads, invoices, the signboard (Section 12(3)), MCA Master Data, GST registration, PAN card, bank accounts, and all statutory filings. Changing this address requires specific MCA filings that vary by relocation type. For GST updates after address change, see <a href="/gst-registration/mumbai">GST Registration in Mumbai</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Change in Registered Office:</strong></p>
                    <ul>
                        <li><strong>Section 12:</strong> Registered office &ndash; must have from 15th day, displayed on signboard, address on all documents</li>
                        <li><strong>Form INC-22:</strong> Notify ROC of address change &ndash; filed within 15 days (Scenario 1) or 30/60 days</li>
                        <li><strong>Form INC-23:</strong> Application to Regional Director (cross-ROC) or Central Government (cross-state)</li>
                        <li><strong>Form INC-28:</strong> Filing of RD/CG order with ROC after cross-ROC or cross-state approval</li>
                        <li><strong>Regional Director (Western Region):</strong> Mumbai-based authority for cross-ROC and cross-state approvals</li>
                        <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Change in Registered Office</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>Office Relocation Filing</strong>
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
            <h2 class="section-title">When Mumbai Companies Need to Change Registered Office</h2>
            <div class="content-text">
                
                <p><strong>Upgrading from co-working to dedicated office</strong> &ndash; Powai/Andheri startups moving from WeWork BKC, 91Springboard, CoWrks to dedicated offices. Scenario 1 (within city) &ndash; simplest process.</p>
                <p><strong>Relocating within Mumbai for cost optimisation</strong> &ndash; BKC/Nariman Point (Rs 200-500/sqft) to Andheri (Rs 80-150), Powai (Rs 100-180), or Lower Parel (Rs 120-200). Scenario 1 or 2 depending on local limits.</p>
                <p><strong>Moving to Navi Mumbai or Thane</strong> &ndash; Manufacturing/logistics to Airoli, Vashi, Thane-Belapur MIDC. Same ROC Mumbai jurisdiction &ndash; typically Scenario 2.</p>
                <p><strong>Mumbai to Pune (different ROC, same state)</strong> &ndash; IT companies moving to Hinjewadi/Kharadi/Magarpatta. ROC Mumbai to ROC Pune = Scenario 3 requiring Regional Director approval.</p>
                <p><strong>Mumbai to Delhi/Bangalore/Hyderabad (different state)</strong> &ndash; Scenario 4: MOA alteration, Special Resolution, RD/CG approval, newspaper publication in both states. Most complex.</p>
                <p><strong>Post-M&amp;A or group restructuring</strong> &ndash; Surviving entity consolidating registered office at acquirer's location.</p>
                <p><strong>Regulatory alignment</strong> &ndash; Banks, NBFCs aligning registered office with principal place of business per RBI/SEBI requirements.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registered Office Change Services &ndash; By Scenario</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Scenario 1: Within Same City</td><td>BKC to Bandra, Fort to Marine Lines, Powai to Andheri. Board Resolution + INC-22 within 15 days. No shareholder approval. Completed in 5-7 working days</td></tr>
                        <tr><td>Scenario 2: Outside City, Same ROC</td><td>Mumbai to Navi Mumbai, Mumbai to Thane. Special Resolution + MGT-14 + INC-22 within 30 days. EGM required. Completed in 15-20 working days</td></tr>
                        <tr><td>Scenario 3: Different ROC, Same State</td><td>Mumbai to Pune (ROC Mumbai &rarr; ROC Pune). Special Resolution + MGT-14 + INC-23 to Regional Director (Western Region) + INC-28 + INC-22. Creditor consent. 45-90 working days</td></tr>
                        <tr><td>Scenario 4: Different State</td><td>Mumbai to Delhi/Bangalore/Hyderabad. MOA Clause II alteration + Special Resolution + MGT-14 + INC-23 to CG/RD + newspaper in both states + creditor notification + INC-28 + INC-22 with both ROCs. 60-120 days</td></tr>
                        <tr><td>Correct Scenario Determination</td><td>Exact old/new addresses verified, municipal ward boundaries confirmed, ROC jurisdiction determined. Prevents form rejections from wrong scenario selection &ndash; most common filing error</td></tr>
                        <tr><td>Regional Director Coordination</td><td>For Scenarios 3 &amp; 4: INC-23 preparation with creditor declarations, employee interest statements, Chief Secretary intimation. RD (Western Region) is in Mumbai &ndash; direct coordination</td></tr>
                        <tr><td>Newspaper Publication (Scenario 4)</td><td>English + Marathi newspaper in Mumbai + vernacular newspaper in destination state. Publication 1 month before INC-23 filing. Coordinated across both states</td></tr>
                        <tr><td>Post-Change Update Checklist</td><td>GST (REG-14), PAN, TAN, bank accounts, EPF/ESIC, FSSAI/IEC, signboard (Section 12(3) mandatory), letterhead, website. All managed in parallel &ndash; 15-30 days</td></tr>

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
            <h2 class="section-title">Registered Office Change Process (Within Mumbai &ndash; Most Common)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The most common Mumbai scenario is Scenario 1 (within city). For Scenarios 2-4, additional steps apply as detailed in the services section above. Our Marine Lines office is adjacent to ROC Mumbai Everest House.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Finalise New Office Address</h3><p class="step-description">Secure new premises: execute rent/lease agreement or ownership document. Obtain NOC from property owner permitting use as registered office. Collect recent utility bill (electricity, water, gas &ndash; not older than 2 months). Patron verifies address proof meets MCA requirements before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rent agreement executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NOC obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Address Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Hold Board Meeting</h3><p class="step-description">Pass Board Resolution approving the change of registered office from old address to new address within Mumbai. Authorise a director to sign and file Form INC-22 with ROC. Record minutes. Patron drafts Board Resolution and minutes for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Director authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Board Approved</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form INC-22 within 15 Days</h3><p class="step-description">File INC-22 on MCA V3 portal within 15 days of Board Resolution. Enter: CIN, new address details, date of change. Attach: Board Resolution, rent agreement/ownership proof, utility bill (within 2 months), NOC from owner. Director's DSC required. Patron files and tracks ROC approval.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>INC-22 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents attached</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="35" y="40" width="40" height="8" rx="3" fill="#14365F" opacity="0.15"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">ROC Approval &amp; MCA Master Data Update</h3><p class="step-description">ROC Mumbai processes the filing. Upon approval, MCA Master Data is updated with new registered office address. CIN remains unchanged. Download approved INC-22 acknowledgment. Patron verifies Master Data reflects the new address.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Master Data updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 40l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Address Updated</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Update Signboard &amp; All Registrations</h3><p class="step-description">Update company signboard at new office (mandatory under Section 12(3)). Update new address across: GST (REG-14), PAN, TAN, bank accounts, EPF/ESIC, letterhead, invoices, website, and contracts. Patron manages complete post-change update checklist for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Signboard updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All registrations aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">05</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Registered Office Change in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Company CIN and PAN:</strong> For MCA portal login and form pre-fill</li>
                    <li><strong>Board Resolution:</strong> Certified copy approving address change (all scenarios)</li>
                    <li><strong>Proof of New Address:</strong> Rent/lease agreement (stamped) or ownership deed</li>
                    <li><strong>Utility Bill:</strong> Electricity, water, or gas &ndash; not older than 2 months, showing new address</li>
                    <li><strong>NOC from Property Owner:</strong> Permitting use as company's registered office</li>
                    <li><strong>DSC of Director:</strong> Valid Class 2/3 Digital Signature Certificate</li>
                    <li><strong>Special Resolution (Scenarios 2-4):</strong> Certified copy passed at EGM (75% majority)</li>
                    <li><strong>EGM Notice &amp; Minutes (Scenarios 2-4):</strong> With explanatory statement under Section 102</li>
                    <li><strong>Creditor Declarations (Scenarios 3-4):</strong> Creditor list, consent, and director declaration</li>
                    <li><strong>Altered MOA (Scenario 4):</strong> Clause II (state) updated for cross-state moves</li>
                    <li><strong>Newspaper Publications (Scenario 4):</strong> English + vernacular in both old and new state</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Mumbai rent agreements are typically 11-month leave-and-licence agreements under the Maharashtra Rent Control Act. Ensure the agreement specifically permits use as registered office. Many co-working agreements in BKC and Powai include this clause, but traditional leave-and-licence may not. Patron reviews the agreement for MCA compliance before filing INC-22.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Registered Office Change in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>15-Day Filing Deadline (Scenario 1)</td><td>INC-22 must be filed within 15 days of Board Resolution. Companies that move and forget to convene Board Meeting promptly miss the window</td><td>Board Resolution passed before physical move. INC-22 filed on day of relocation. Additional fees avoided</td></tr>
                        <tr><td>Determining the Correct Scenario</td><td>Mumbai geography creates confusion. Andheri to Powai may be Scenario 1 or 2 depending on ward boundaries. Mumbai to Navi Mumbai is Scenario 2 (same ROC). Mumbai to Pune is Scenario 3 (different ROC)</td><td>Exact addresses analysed, municipal limits verified, ROC jurisdiction confirmed before initiating any filing</td></tr>
                        <tr><td>Regional Director Processing (Scenario 3)</td><td>Cross-ROC changes require RD (Western Region) approval. Processing: 15 days (no objections) to 60 days (with objections). Primary bottleneck for Mumbai-to-Pune moves</td><td>Comprehensive INC-23 applications to minimise queries. Direct coordination with RD office in Mumbai</td></tr>
                        <tr><td>Cross-State Newspaper Publication (Scenario 4)</td><td>Publication required in English + vernacular in both Mumbai and destination state, at least 1 month before INC-23. Operationally complex across two states</td><td>Publication coordinated in Mumbai (Marathi) and destination state. Notice content verified for MCA compliance</td></tr>
                        <tr><td>Post-Change Update Delays</td><td>GST amendment 5-10 days, banks 7-15 days, EPF/ESIC 10-20 days. Each agency has its own process. Delayed updates cause operational disruption</td><td>All 10 updates managed in parallel. GST, PAN, bank, EPF, signboard tracked to completion simultaneously</td></tr>

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
            <h2 class="section-title">Registered Office Change Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form INC-22 Filing Fee</td><td>Rs 200 (small company) / Rs 600 (others) &ndash; all scenarios</td></tr>
                        <tr><td>Form MGT-14 Filing Fee</td><td>Rs 200 / Rs 600 &ndash; Scenarios 2, 3, 4 only</td></tr>
                        <tr><td>Form INC-23 Filing Fee</td><td>Rs 5,000 &ndash; Rs 10,000 &ndash; Scenarios 3, 4 only (RD application)</td></tr>
                        <tr><td>Newspaper Publication (Scenario 4)</td><td>Rs 5,000 &ndash; Rs 25,000 per state (English + vernacular)</td></tr>
                        <tr><td>Patron Fee &ndash; Scenario 1 (Within City)</td><td>Starting Rs 3,000 (Board Resolution + INC-22 + tracking)</td></tr>
                        <tr><td>Patron Fee &ndash; Scenario 2 (Same ROC)</td><td>Starting Rs 5,000 (EGM + SR + MGT-14 + INC-22)</td></tr>
                        <tr><td>Patron Fee &ndash; Scenario 3 (Cross-ROC Maharashtra)</td><td>Starting Rs 12,000 (all filings + RD application + INC-23/28/22)</td></tr>
                        <tr><td>Patron Fee &ndash; Scenario 4 (Cross-State)</td><td>Starting Rs 18,000 (MOA + newspaper + RD/CG + dual ROC)</td></tr>
                        <tr><td>Patron Fee &ndash; Post-Change Update Bundle</td><td>Starting Rs 3,000 (GST + PAN + TAN + bank + EPF/ESIC updates)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Change in Registered Office consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20registered%20office%20of%20my%20company%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registered Office Change Timeline by Scenario</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Scenario 1: Within Same City</td><td>BKC to Bandra, Powai to Andheri &ndash; 5-7 working days (ROC processing 2-3 days)</td></tr>
                        <tr><td>Scenario 2: Outside City, Same ROC</td><td>Mumbai to Navi Mumbai/Thane &ndash; 15-20 working days (EGM notice period bottleneck)</td></tr>
                        <tr><td>Scenario 3: Different ROC, Same State</td><td>Mumbai to Pune &ndash; 45-90 working days (Regional Director approval 15-60 days)</td></tr>
                        <tr><td>Scenario 4: Different State</td><td>Mumbai to Delhi/Bangalore &ndash; 60-120 working days (CG/RD + newspaper 30+ days)</td></tr>
                        <tr><td>Post-Change Updates (All Scenarios)</td><td>15-30 additional days (GST/PAN/bank processing)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pass the Board Resolution before the physical move.</strong> For Scenario 1, INC-22 must be filed within 15 days. Patron advises Mumbai companies to initiate the process before relocation, ensuring the Board Resolution is ready and INC-22 is filed on the day of the move.</p>

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
            <h2 class="section-title">Why Choose Patron for Registered Office Change in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC &amp; Regional Director</h3><p class="feature-text">Patron's Marine Lines office is adjacent to both ROC Mumbai Everest House and Regional Director (Western Region) office. Dual proximity for Scenario 3 cross-ROC coordination.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Correct Scenario Determination</h3><p class="feature-text">Most common filing error is wrong scenario. Patron analyses exact addresses, verifies municipal limits, confirms ROC jurisdiction. No form rejections from incorrect scenario selection.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">All 4 Scenarios Handled</h3><p class="feature-text">From simple within-city INC-22 (5 days) to complex cross-state MOA alteration with newspaper and dual-ROC filing (120 days). Every relocation type covered.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Post-Change Update Management</h3><p class="feature-text">GST, PAN, TAN, bank accounts, EPF/ESIC, signboard, letterhead, contracts &ndash; all 10 updates managed in parallel. Minimises operational disruption for Mumbai companies.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron moved our registered office from BKC to Andheri in 5 days and updated GST, PAN, and 4 bank accounts within 2 weeks. Zero disruption to operations.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; COO, IT Services Company, Andheri</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving companies with MCA compliance and corporate restructuring.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Mumbai Geography and Registered Office Scenarios</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>From (Mumbai)</th><th>To</th><th>Scenario</th><th>Forms Required</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>BKC</td><td>Bandra/Santacruz</td><td>1 (same city)</td><td>INC-22</td><td>5-7 days</td></tr>
                        <tr><td>Nariman Point</td><td>Marine Lines/Fort</td><td>1 (same city)</td><td>INC-22</td><td>5-7 days</td></tr>
                        <tr><td>Powai</td><td>Andheri East/West</td><td>1 (same city)</td><td>INC-22</td><td>5-7 days</td></tr>
                        <tr><td>Fort</td><td>Powai/Goregaon</td><td>2 (outside city, same ROC)</td><td>MGT-14 + INC-22</td><td>15-20 days</td></tr>
                        <tr><td>Mumbai</td><td>Navi Mumbai (Vashi/Airoli)</td><td>2 (outside city, same ROC)</td><td>MGT-14 + INC-22</td><td>15-20 days</td></tr>
                        <tr><td>Mumbai</td><td>Thane/Dombivli</td><td>2 (outside city, same ROC)</td><td>MGT-14 + INC-22</td><td>15-20 days</td></tr>
                        <tr><td>Mumbai</td><td>Pune (Hinjewadi/Kharadi)</td><td>3 (different ROC, same state)</td><td>MGT-14 + INC-23 + INC-28 + INC-22</td><td>45-90 days</td></tr>
                        <tr><td>Mumbai</td><td>Delhi/Gurugram</td><td>4 (different state)</td><td>MGT-14 + INC-23 + INC-28 + INC-22 + Newspaper + MOA</td><td>60-120 days</td></tr>
                        <tr><td>Mumbai</td><td>Bangalore/Hyderabad</td><td>4 (different state)</td><td>MGT-14 + INC-23 + INC-28 + INC-22 + Newspaper + MOA</td><td>60-120 days</td></tr>

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
                
                <p>Explore related services:</p>
                <ul>
                    <li><a href="/change-in-registered-office">Change in Registered Office (India Overview)</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/change-in-authorised-capital">Change in Authorised Capital</a></li>
                    <li><a href="/change-in-name-of-company">Change in Name of Company</a></li>
                    <li><a href="/change-in-object-clause">Change in Object Clause</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li>
                    <li><a href="/roc-notice">ROC Notice</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Registered Office Change</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 12(1):</strong> Company must have registered office from 15th day of incorporation</li>
                    <li><strong>Section 12(3):</strong> Company name displayed on signboard + address on all documents</li>
                    <li><strong>Section 12(4):</strong> Change notified to ROC within 15 days (Form INC-22)</li>
                    <li><strong>Section 12(5):</strong> Shifting outside local limits requires Special Resolution</li>
                    <li><strong>Section 13:</strong> Alteration of MOA (Clause II &ndash; state) for cross-state shift</li>
                    <li><strong>Form INC-22:</strong> Notice of situation or change of registered office</li>
                    <li><strong>Form MGT-14:</strong> Filing of Special Resolution with ROC (Scenarios 2, 3, 4)</li>
                    <li><strong>Form INC-23:</strong> Application to Regional Director / Central Government (Scenarios 3, 4)</li>
                    <li><strong>Form INC-28:</strong> Filing of RD/CG order with ROC</li>
                    <li><strong>Regional Director (Western Region):</strong> Mumbai-based; handles cross-ROC within Maharashtra and cross-state from Maharashtra</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> (MCA V3 portal)</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Change in Registered Office in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about 4 scenarios, ROC filing, resolutions, INC-22, Regional Director approval, post-change updates, and CIN changes for Mumbai companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Change in Registered Office',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ROC handles registered office change in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>ROC Mumbai at Everest House, 100 Marine Lines, Mumbai 400020. Form INC-22 filed on MCA V3 portal. For cross-ROC within Maharashtra (Scenario 3), Regional Director (Western Region), also based in Mumbai, must approve via INC-23. Patron's Marine Lines office is adjacent to both ROC and RD offices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What resolution is needed for registered office change?</h3>
                        <div class="faq-expanded__a"><p>Scenario 1 (within city): Board Resolution only. Scenarios 2, 3, 4 (outside city/cross-ROC/cross-state): Special Resolution with 75% majority at EGM. Cross-state (Scenario 4) additionally requires MOA Clause II alteration approval. Patron determines the correct resolution for each specific relocation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Form INC-22?</h3>
                        <div class="faq-expanded__a"><p>MCA form to notify ROC of registered office address change. Filed within 15 days of Board Resolution (Scenario 1) or 30/60 days for other scenarios. Requires: CIN, new full address, date of change, resolution, address proof, utility bill (within 2 months), and NOC from owner. Filed electronically with director's DSC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When is Regional Director approval needed?</h3>
                        <div class="faq-expanded__a"><p>When company moves from one ROC jurisdiction to another within the same state (Scenario 3 &ndash; e.g. Mumbai ROC to Pune ROC), or to a different state (Scenario 4). Application via Form INC-23. The Regional Director (Western Region) is in Mumbai, handling both scenarios for Mumbai companies. Patron coordinates directly with the RD office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does the process take?</h3>
                        <div class="faq-expanded__a"><p>Scenario 1: 5-7 days. Scenario 2: 15-20 days. Scenario 3 (cross-ROC): 45-90 days (RD processing is bottleneck). Scenario 4 (cross-state): 60-120 days (CG/RD + newspaper). Post-change updates add 15-30 days to all scenarios. Patron provides realistic estimates per scenario.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What post-change updates are needed?</h3>
                        <div class="faq-expanded__a"><p>GST amendment (REG-14), PAN address update, TAN update, bank account address change (all accounts), EPF/ESIC establishment address, FSSAI/IEC update if applicable, office signboard (Section 12(3) mandatory), letterhead/invoices, website. Patron manages all 10 updates in parallel for Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does CIN change when registered office changes?</h3>
                        <div class="faq-expanded__a"><p>No for Scenarios 1, 2, 3 (within Maharashtra) &ndash; CIN unchanged. For Scenario 4 (cross-state), CIN changes because the first two characters represent the state code. Mumbai company (CIN starting MH) moving to Delhi gets a new CIN prefix. This is a significant implication of cross-state moves.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I move from co-working to dedicated office?</h3>
                        <div class="faq-expanded__a"><p>Yes. Many Mumbai startups incorporate at co-working spaces and later move to dedicated offices. This is typically Scenario 1 (within city) if both are in Mumbai. Requires Board Resolution and INC-22 within 15 days. Ensure new office has valid rent agreement permitting use as registered office, utility bill within 2 months, and NOC from owner.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Mumbai mein office address kaise badle?</strong> Same city mein hai toh Board Resolution + INC-22 file karo 15 din mein. Same ROC lekin different area hai toh Special Resolution + MGT-14 + INC-22 file karo 30 din mein. Mumbai se Pune (different ROC) jaana hai toh Regional Director ki approval chahiye INC-23 se. Doosre state jaana hai toh MOA bhi badalna padega + newspaper mein publish karna padega.</p>
                <p><strong>Kitne din lagta hai?</strong> Same city: 5-7 din. Same ROC: 15-20 din. Different ROC (Mumbai to Pune): 45-90 din. Different state (Mumbai to Delhi): 60-120 din. Post-change GST/PAN/bank updates: 15-30 din extra.</p>
                <p><strong>Kya co-working se dedicated office jaane pe bhi file karna padta hai?</strong> Haan. Registered office change hota hai. Board Resolution + INC-22 15 din mein file karo. Patron 5-7 din mein complete karta hai Mumbai mein.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let Your Registered Office Go Stale &ndash; File Before You Move</h2>
            <div class="content-text">
                
                <p>An outdated registered office address creates operational problems: ROC and IT notices sent to the old address may not be received, leading to defaults and penalties. GST notices at the wrong address can trigger adverse proceedings. Banks may freeze accounts if the registered address doesn't match records. The 15-day filing deadline for INC-22 (Scenario 1) means the Board Resolution should be passed before the physical move.</p>
                <p><strong>Change your registered office today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20registered%20office%20of%20my%20company%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End Registered Office Change in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Change in registered office in Mumbai covers four distinct scenarios &ndash; from a simple within-city move (BKC to Bandra in 5 days) to a cross-state relocation (Mumbai to Delhi over 60-120 days). Mumbai's unique geography means that moves within the city, to Navi Mumbai/Thane, to Pune, or to another state each follow a different compliance pathway.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to both ROC Everest House and Regional Director (Western Region) &ndash; provides end-to-end services: correct scenario determination, INC-22/MGT-14/INC-23/INC-28 filing, RD coordination, newspaper publication, and the complete post-change update checklist.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers fast, accurate corporate compliance across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20registered%20office%20of%20my%20company%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Registered Office Change Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles registered office changes in major cities with local ROC coordination and cross-state expertise.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Change in Registered Office in Other Cities</div>
                        <div class="pa-block-sub">Professional MCA filing across India</div>
                        <div class="pa-city-grid">
                            <a href="/change-registered-office/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/change-registered-office/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/change-in-registered-office/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed bi-annually for accuracy of Companies Act provisions, MCA portal procedures, and ROC filing requirements. Freshness Tier: 2.</p>
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
