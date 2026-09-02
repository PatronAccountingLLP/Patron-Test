
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>NGO Registration in Chennai – Trust, Society &amp; Section 8 Co.</title>
    <meta name="description" content="CA-assisted NGO registration in Chennai. Trust, society, Section 8 company with 12A, 80G filing. Serving Anna Salai, OMR, Adyar areas. Call +91 945 945 6700.">
    <link rel="canonical" href="/ngo-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO Registration in Chennai – Trust, Society &amp; Section 8 Co.">
    <meta property="og:description" content="CA-assisted NGO registration in Chennai. Trust, society, Section 8 company with 12A, 80G filing. Serving Anna Salai, OMR, Adyar areas. Call +91 945 945 6700.">
    <meta property="og:url" content="/ngo-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO Registration in Chennai – Trust, Society &amp; Section 8 Co.">
    <meta name="twitter:description" content="CA-assisted NGO registration in Chennai. Trust, society, Section 8 company with 12A, 80G filing. Serving Anna Salai, OMR, Adyar areas. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "NGO Registration Services in Chennai",
          "description": "CA-assisted NGO registration in Chennai. Trust, society, Section 8 company with 12A, 80G filing. Serving Anna Salai, OMR, Adyar areas. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/ngo-registration/chennai",
          "serviceType": "NGO Registration Services in Chennai",
          "areaServed": {
            "@type": "City",
            "name": "Chennai"
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
            "url": "https://www.patronaccounting.com/ngo-registration/chennai",
            "price": "7999"
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
              "name": "NGO Registration",
              "item": "https://www.patronaccounting.com/ngo-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "NGO Registration in Chennai",
              "item": "https://www.patronaccounting.com/ngo-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which authority handles NGO registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trust registration is handled by the Sub-Registrar Chennai. Society registration by the Registrar of Societies Tamil Nadu. Section 8 Company by RoC Chennai at Haddows Road. Patron files with the correct authority based on your chosen structure."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get NGO registration done online from Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 8 Company registration is fully online through the MCA portal. Society and trust registration involve some physical submissions. Patron handles all preparation digitally with local associates managing physical submissions where needed."
              }
            },
            {
              "@type": "Question",
              "name": "What is the NGO registration fee in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "NGO registration in Chennai starts from Rs 7,999 for trust registration, Rs 9,999 for society, and Rs 14,999 for Section 8 company. 12A and 80G registration costs Rs 4,999-7,000 each. All fees include government charges and professional fees."
              }
            },
            {
              "@type": "Question",
              "name": "How long does NGO registration take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trust registration takes 15-20 working days, society 25-30 days, and Section 8 company 10-14 days. 12A and 80G registration takes an additional 15-30 days after the NGO is registered."
              }
            },
            {
              "@type": "Question",
              "name": "How to get 12A and 80G registration for my Chennai NGO?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "12A and 80G registrations are filed through Form 10A on the Income Tax portal. The application requires registration certificate, trust deed or MOA, PAN, bank details, and activity statement. New NGOs get provisional 12A/80G for 5 years."
              }
            },
            {
              "@type": "Question",
              "name": "Can a single person register an NGO in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Trust needs minimum 2 trustees. Society needs 7 founding members. Section 8 company needs 2 directors and 2 subscribers. You can be the primary founder and include family members as co-trustees or members."
              }
            },
            {
              "@type": "Question",
              "name": "Is audit mandatory for NGOs in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Audit is mandatory for Section 8 companies regardless of turnover. For trusts and societies, audit is mandatory if total receipts exceed Rs 5 crore or if the trust deed mandates it. Audited accounts strengthen CSR funding and FCRA applications."
              }
            },
            {
              "@type": "Question",
              "name": "Can my Chennai NGO receive foreign donations?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but only after FCRA registration or prior permission from the Ministry of Home Affairs. FCRA registration requires 3 years of audited accounts. Receiving foreign contributions without FCRA approval is a criminal offence."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        NGO Registration in Chennai: Trust, Society, and Section 8 Company
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, trust deed/MOA, registered office proof, photographs of members</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> NGO registration in Chennai starts from Rs 7,999 (all-inclusive)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Trust (2 trustees), Society (7 members), Section 8 (2 directors)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 10-30 working days depending on NGO type</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Registration%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20NGO%20registration%20in%20Chennai.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'NGO Registration in Chennai',
                                            'city'     => 'Chennai',
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
    'ctaText'    => 'Join 10,000+ businesses who trust Patron Accounting',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration in Chennai: Overview and TL;DR</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Registration in Chennai Services at a Glance</strong></p>
                    <p><p>NGO registration in Chennai creates a legally recognised non-profit entity - as a Trust, Society, or Section 8 Company - enabling tax exemptions under 12A and 80G, CSR funding eligibility, and foreign contribution access under FCRA. Patron's CA team handles complete registration and post-registration compliance from Chennai, fully online.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>NGO Types</td><td>Trust (Indian Trusts Act 1882) | Society (Societies Registration Act 1860) | Section 8 Company (Companies Act 2013)</td></tr><tr><td>Registration Authority</td><td>Sub-Registrar Chennai (Trust) | Registrar of Societies TN (Society) | RoC Chennai (Section 8)</td></tr><tr><td>Minimum Members</td><td>Trust: 2 trustees | Society: 7 members | Section 8: 2 directors</td></tr><tr><td>Timeline</td><td>Trust: 15-20 days | Society: 25-30 days | Section 8: 10-14 days</td></tr><tr><td>Cost Starting From</td><td>Rs 7,999 (all-inclusive)</td></tr><tr><td>Tax Exemption</td><td>12A (income exemption) + 80G (donor deduction) via Income Tax portal</td></tr><tr><td>Key Compliance</td><td>Annual ITR, audit (if applicable), 12A/80G renewal, FCRA (if foreign funds)</td></tr></tbody></table></div></p>
                </div>
                <p>Chennai is a city with a deep-rooted culture of philanthropy and social service. From education initiatives in Adyar and Mylapore to healthcare outreach in Ambattur and Guindy, thousands of NGOs operate across the city. The presence of major corporations along the OMR IT Corridor and Anna Salai creates substantial CSR funding opportunities for registered NGOs under Section 135 of the Companies Act 2013. Learn more about <a href="/ngo-registration">NGO Registration across India</a>.</p>
                <p>A CA-managed NGO registration in Chennai ensures your trust, society, or Section 8 company is legally constituted with the correct authority - Sub-Registrar for trusts, Registrar of Societies for societies, and RoC Chennai at Haddows Road for Section 8 companies. Patron's CA team also files for 12A and 80G registration with the Income Tax Department, setting up your NGO for tax-exempt operations from day one.</p>
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
                <h2 class="section-title">What Is NGO Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO registration is the legal process of incorporating a non-governmental, non-profit organisation under Indian law - as a Trust, Society, or Section 8 Company - to carry out charitable, educational, social, or religious activities with legal recognition and tax benefits.</p><p>In India, NGOs operate under three primary legal frameworks. A Trust is registered under the Indian Trusts Act 1882 with the Sub-Registrar and is governed by a trust deed. A Society is registered under the Societies Registration Act 1860 with the Registrar of Societies and requires minimum 7 founding members. A Section 8 Company is incorporated under Section 8 of the Companies Act 2013 with the Registrar of Companies. All three are eligible for 12A and 80G registration.</p><p>For Chennai, NGO registration is particularly relevant given the city's large charitable ecosystem. Educational trusts in T. Nagar and Kodambakkam, healthcare societies in Adyar and Perungudi, and environmental organisations working in the Adyar River estuary all require proper legal constitution. Section 8 companies are preferred by Chennai NGOs seeking CSR partnerships with OMR-based IT firms.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Registration in Chennai:</strong></p>
                    <p><strong>12A Registration:</strong> Registration under Section 12A of Income Tax Act granting NGO income tax exemption on receipts used for charitable purposes.</p><p><strong>80G Registration:</strong> Registration under Section 80G enabling donors to claim tax deductions on donations made to the NGO.</p><p><strong>Section 8 Company:</strong> Non-profit company incorporated under Section 8 of Companies Act 2013 with RoC, operating like a private limited company without profit distribution.</p><p><strong>FCRA:</strong> Foreign Contribution Regulation Act 2010 - registration required for NGOs to receive foreign donations.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Non-Profit Registration</span>
                        <strong>Trust | Society | Section 8</strong>
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
            <h2 class="section-title">Who Needs NGO Registration in Chennai?</h2>
            <div class="content-text">
                
                <p><strong>Educational and Skill Development Organisations:</strong> Groups running schools, tuition centres, vocational training, scholarship programmes, and adult literacy initiatives in Chennai's underserved areas like Vyasarpadi, Tondiarpet, and Ennore. Registration enables access to Sarva Shiksha Abhiyan funds and state education department grants.</p><p><strong>Healthcare and Medical Outreach Groups:</strong> Organisations conducting medical camps, operating free/subsidised clinics, and running health awareness programmes in areas like Ambattur, Guindy, and Perungudi.</p><p><strong>Environmental and Conservation Bodies:</strong> Groups focused on Adyar River conservation, Pallikaranai marsh restoration, coastal cleanup drives along Marina Beach, and urban tree planting.</p><p><strong>CSR-Focused Social Enterprises:</strong> Organisations structured specifically to receive CSR funding from OMR IT firms and Anna Salai corporates under Section 135 of the Companies Act 2013. <a href="/section8-company-registration">Section 8 Company Registration</a> provides the governance framework corporate CSR departments require.</p><p><strong>NRI Philanthropists and Diaspora Groups:</strong> Non-resident Indians establishing charitable entities in Chennai for education, healthcare, or cultural preservation. At least one trustee/director must be an Indian resident.</p><p><strong>Religious and Cultural Organisations:</strong> Temples, churches, mosques, and cultural bodies seeking formal legal identity for property ownership, bank accounts, and donor management.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>Trust deed drafting with TN stamp duty compliance, Sub-Registrar filing, PAN application, and bank account guidance</td></tr><tr><td>Society Registration</td><td>MOA + Rules & Regulations drafting, 7-member coordination, Registrar of Societies TN filing, affidavits, PAN</td></tr><tr><td>Section 8 Company Registration</td><td>DSC, DIN, Section 8 licence application, SPICe+ filing with RoC Chennai, MOA/AOA drafting, PAN/TAN, CIN issuance</td></tr><tr><td>12A Registration</td><td>Form 10A filing on Income Tax portal for income tax exemption with activity description and financial statements</td></tr><tr><td>80G Registration</td><td>Form 10A filing for donor tax deduction eligibility - filed simultaneously with 12A for efficiency</td></tr><tr><td>FCRA Registration</td><td>Complete dossier preparation, Ministry of Home Affairs filing, 3-year audited accounts compilation</td></tr><tr><td>Post-Registration Compliance</td><td>Annual ITR, audit coordination, society renewal tracking (every 5 years in TN), 12A/80G renewal, FCRA annual return</td></tr><tr><td>CSR Readiness Preparation</td><td>Governance structure, financial statements, and compliance documentation prepared for corporate CSR audit requirements</td></tr>

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
            <h2 class="section-title">NGO Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's CA team handles all preparation online. Physical submission to Sub-Registrar (for trusts) is coordinated by Patron's local associate. Section 8 companies are filed fully online through MCA.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Choose the Right NGO Structure for Your Chennai Initiative</h3><p class="step-description">Your dedicated CA assesses your NGO's purpose, scale, and funding strategy to recommend the optimal structure. For a small charitable trust in Kodambakkam - Trust registration under Indian Trusts Act 1882. For a cultural society with 10+ members - Society registration under Societies Registration Act 1860. For a large-scale NGO targeting CSR funding from OMR IT firms - Section 8 Company with RoC Chennai.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Structure advisory</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Funding strategy aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="30" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="45" y="15" width="30" height="45" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="80" y="15" width="30" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="25" y="42" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Trust</text><text x="60" y="42" font-size="7" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Society</text><text x="95" y="42" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Sec 8</text></svg></div><span class="illustration-label">Structure Selected</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Founding Documents with Tamil Nadu Stamp Duty</h3><p class="step-description">For Trusts: Trust Deed drafted specifying charitable objects, trustee powers, and succession rules on TN stamp paper. For Societies: MOA and Rules drafted with 7+ member signatures. For Section 8: MOA and AOA drafted per Companies Act 2013, DSC and DIN obtained for directors.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Custom-drafted docs</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TN stamp duty applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="32" y1="25" x2="88" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="32" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="32" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="32" y1="58" x2="65" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Documents Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Registration with the Chennai Authority</h3><p class="step-description">Trust Deed submitted to Sub-Registrar Chennai. Society application to Registrar of Societies, Tamil Nadu. Section 8 licence application filed with MCA, followed by SPICe+ with RoC Chennai at Haddows Road. Processing times vary: trusts 15-20 days, societies 25-30 days, Section 8 companies 10-14 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed with correct authority</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Timeline tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 40h10M60 35l5 5-5 5" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">RoC Chennai</text></svg></div><span class="illustration-label">Application Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Obtain Certificate of Registration</h3><p class="step-description">Upon verification, the registering authority issues the Certificate of Registration with unique registration number. This is your NGO's primary identity document for all subsequent registrations, bank account opening, and 12A/80G applications.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registration number issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Legal identity created</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 35l4 4 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">NGO Registered</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Apply for 12A and 80G Registration</h3><p class="step-description">Patron's CA files Form 10A on the Income Tax portal for 12A (income exemption) and 80G (donor tax deduction). Under 2020 amendments, new NGOs receive provisional 12A/80G for 5 years. Correct filing with precise charitable object descriptions ensures first-time approval.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Provisional 5-year grant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donor tax benefits enabled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12A</text><text x="60" y="50" font-size="9" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">80G</text><circle cx="90" cy="20" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M86 20l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Tax Exempt</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Complete Post-Registration Setup</h3><p class="step-description">Bank account opened at Chennai branches. GST registration if applicable. FCRA preparation initiated if foreign contributions planned. Annual compliance calendar set up - ITR, audit, society renewal (every 5 years in TN), 80G return.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank account opened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance calendar set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9"/><rect x="55" y="20" width="25" height="40" rx="3" fill="#FFF3E0"/><text x="37" y="48" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Bank</text><text x="67" y="45" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">FCRA</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for NGO Registration in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card of all trustees/members/directors</strong> - mandatory identity proof for all founding members</li><li><strong>Aadhaar Card or Voter ID</strong> - address verification for all members</li><li><strong>Passport-size photographs</strong> - recent photos of all founding members</li><li><strong>Trust Deed / MOA / AOA</strong> - Trust Deed (on TN stamp paper), MOA + Rules for societies, MOA + AOA for Section 8</li><li><strong>Registered office proof</strong> - utility bill (not older than 2 months) + rent agreement or property deed</li><li><strong>NOC from property owner</strong> - if NGO office is on rented premises</li><li><strong>Affidavits from members</strong> - required for society registration on Rs 10 stamp paper</li><li><strong>DSC and DIN (Section 8 only)</strong> - Digital Signature Certificate and Director Identification Number</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> For trust registration, the Sub-Registrar requires trust deed printed on non-judicial stamp paper purchased from authorised vendors in Tamil Nadu. Using stamp paper from another state will result in rejection. Patron's team ensures correct TN stamp paper procurement.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common NGO Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Deed Stamp Duty Errors</td><td>Rejection by Sub-Registrar for incorrect TN stamp paper value</td><td>Exact Tamil Nadu stamp duty calculation before trust deed execution</td></tr><tr><td>12A/80G Application Rejection</td><td>Vague activity descriptions, missing financials - 6-12 month delays</td><td>CA drafts precise charitable object descriptions qualifying under Section 2(15)</td></tr><tr><td>Society Renewal Lapse in TN</td><td>Registration lapses after 5 years - cannot operate legally</td><td>Renewal deadlines tracked and applications filed before expiry</td></tr><tr><td>Wrong NGO Structure Chosen</td><td>Mismatch between entity type and funding/compliance capacity</td><td>CA recommends optimal structure based on scale, funding strategy, and compliance</td></tr><tr><td>FCRA Registration Delays</td><td>Incomplete applications rejected by Ministry of Home Affairs</td><td>Complete FCRA dossier with 3-year audited financials and activity reports</td></tr>

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
            <h2 class="section-title">NGO Registration Fees in Chennai: 2026 Cost Breakdown</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>Rs 7,999 - 12,000 - trust deed drafting, TN stamp duty, Sub-Registrar filing, PAN</td></tr><tr><td>Society Registration</td><td>Rs 9,999 - 15,000 - MOA + Rules, Registrar of Societies filing, affidavits, 7-member coordination</td></tr><tr><td>Section 8 Company</td><td>Rs 14,999 - 25,000 - DSC, DIN, Section 8 licence, SPICe+ with RoC Chennai, MOA/AOA, PAN/TAN</td></tr><tr><td>12A Registration</td><td>Rs 4,999 - 7,000 - Form 10A filing, activity description, financial statement preparation</td></tr><tr><td>80G Registration</td><td>Rs 4,999 - 7,000 - Form 10A filing for donor benefit documentation</td></tr><tr><td>FCRA Registration</td><td>Rs 15,000 - 25,000 - complete dossier, MHA filing, 3-year audit compilation</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR 7,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>15-20 working days - trust deed execution + Sub-Registrar processing</td></tr><tr><td>Society Registration</td><td>25-30 working days - MOA filing + Registrar of Societies TN processing</td></tr><tr><td>Section 8 Company</td><td>10-14 working days - MCA licence + SPICe+ with RoC Chennai</td></tr><tr><td>12A Registration</td><td>15-30 working days - Income Tax portal processing after Form 10A</td></tr><tr><td>80G Registration</td><td>15-30 working days - filed simultaneously with 12A</td></tr><tr><td>PAN + Bank Account</td><td>5-7 working days - after registration certificate received</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fastest Path:</strong> Section 8 Company is the fastest NGO type to register (10-14 days) and also carries the highest credibility for CSR funding. Trust registration is ideal for small charities wanting simplicity.</p>

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
            <h2 class="section-title">Why Choose Patron for NGO Registration in Chennai?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div><h3 class="feature-title">CA-Led with Tax Expertise</h3><p class="feature-text">Patron's CA team drafts trust deed objects qualifying under Section 2(15) of the Income Tax Act, ensuring 12A and 80G approval. Registration portals without CA qualifications cannot provide this tax expertise.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4z"/></svg></div><h3 class="feature-title">4-Office Pan-India Reach</h3><p class="feature-text">NRI philanthropists in the US, UK, or Middle East can set up Chennai-based NGOs with Patron coordinating all registrations remotely through its offices in Pune, Mumbai, Delhi, and Gurugram.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">End-to-End NGO Lifecycle</h3><p class="feature-text">Beyond registration, Patron manages annual ITR, audit, 12A/80G renewal, society renewal in TN every 5 years, and FCRA compliance - all from one CA team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">CSR Funding Readiness</h3><p class="feature-text">Patron prepares your Chennai NGO's governance structure, financial statements, and compliance track record to meet CSR audit requirements of OMR-based IT companies under Section 135.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><p><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai organisations through a dedicated digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust vs Society vs Section 8 Company for Chennai NGOs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Trust</th><th>Society</th><th>Section 8 Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Indian Trusts Act 1882</td><td>Societies Registration Act 1860</td><td>Companies Act 2013 Section 8</td></tr><tr><td>Registration Authority</td><td>Sub-Registrar Chennai</td><td>Registrar of Societies TN</td><td>RoC Chennai</td></tr><tr><td>Minimum Members</td><td>2 trustees</td><td>7 founding members</td><td>2 directors + 2 subscribers</td></tr><tr><td>Main Document</td><td>Trust Deed</td><td>MOA + Rules</td><td>MOA + AOA</td></tr><tr><td>TN Stamp Duty</td><td>Based on trust corpus</td><td>Nominal</td><td>Per Companies Act schedule</td></tr><tr><td>Validity</td><td>Perpetual</td><td>5 years in TN (renewal)</td><td>Perpetual</td></tr><tr><td>Compliance Level</td><td>Low</td><td>Medium</td><td>High (like Pvt Ltd)</td></tr><tr><td>CSR Funding Suitability</td><td>Moderate</td><td>Moderate</td><td>Highest</td></tr><tr><td>Best For in Chennai</td><td>Religious trusts, small charities</td><td>Cultural societies, clubs</td><td>Large NGOs, CSR-funded orgs</td></tr>

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
            <h2 class="section-title">Related Services for Chennai NGOs</h2>
            <div class="content-text">
                
                <p>If you need NGO registration in Chennai, you may also benefit from:</p><ul><li><a href="/ngo-registration">NGO Registration (India)</a> - national service page with all three NGO types explained</li><li><a href="/section8-company-registration">Section 8 Company Registration</a> - detailed Section 8 process</li><li><a href="/accounting-services">Accounting Services</a> - CA-managed accounting for your NGO</li><li><a href="/statutory-audit">Statutory Audit</a> - mandatory audit for Section 8 companies</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for NGOs in Chennai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul><li>Indian Trusts Act, 1882 (Trust registration and governance)</li><li>Societies Registration Act, 1860 (Society registration - Tamil Nadu amendments apply)</li><li>Companies Act, 2013 Section 8 (Section 8 company incorporation)</li><li>Income Tax Act, 1961 Section 12A (NGO income exemption) and Section 80G (donor deduction)</li><li>Foreign Contribution Regulation Act, 2010 (FCRA - foreign funding)</li><li>Companies Act, 2013 Section 135 (CSR obligations for companies)</li><li>Income Tax Act Section 2(15) (Definition of charitable purpose)</li></ul><p><strong>Penalties:</strong></p><ul><li>Late ITR filing: Rs 5,000 under Section 234F</li><li>Operating without registration: No legal identity, no tax exemption, no grant eligibility</li><li>12A/80G non-compliance: Revocation of tax exemption status</li><li>FCRA violation: Penalty up to 5 times the foreign contribution, plus cancellation</li><li>Society non-renewal in TN: Registration lapses after 5 years</li></ul><p><strong>Regulatory Authority:</strong> MCA (Section 8) - <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> | Income Tax Dept - <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | MHA (FCRA) - <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">fcraonline.nic.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - NGO Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about NGO registration types, fees, 12A/80G tax exemption, and compliance requirements in Chennai.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which authority handles NGO registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>It depends on the NGO type. Trust registration is handled by the Sub-Registrar, Chennai (under Indian Trusts Act 1882). Society registration is processed by the Registrar of Societies, Tamil Nadu (under Societies Registration Act 1860). Section 8 Company registration is filed with RoC Chennai at Haddows Road (under Companies Act 2013). Patron's CA team files with the correct authority based on your chosen structure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get NGO registration done online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Section 8 Company registration is fully online through the MCA portal. Society registration involves both online and physical submission to the Registrar of Societies. Trust registration requires physical execution of the trust deed before the Sub-Registrar. Patron handles all preparation digitally, with local associates managing physical submissions where needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the NGO registration fee in Chennai?</h3>
                        <div class="faq-expanded__a"><p>NGO registration starts from Rs 7,999 for trust registration (including trust deed drafting and TN stamp duty), Rs 9,999 for society registration, and Rs 14,999 for Section 8 company registration. 12A and 80G registration costs Rs 4,999-7,000 each. All fees include government charges and professional fees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does NGO registration take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Trust registration takes 15-20 working days, society registration takes 25-30 working days, and Section 8 company registration takes 10-14 working days. 12A and 80G registration takes an additional 15-30 days after the NGO is registered.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to get 12A and 80G registration for my Chennai NGO?</h3>
                        <div class="faq-expanded__a"><p>12A and 80G registrations are filed through Form 10A on the Income Tax portal (incometax.gov.in). The application requires your NGO's registration certificate, trust deed or MOA, PAN, bank account details, and a detailed statement of activities. Under 2020 amendments, new NGOs get provisional 12A/80G for 5 years. Patron's CA files both simultaneously.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a single person register an NGO in Chennai?</h3>
                        <div class="faq-expanded__a"><p>A single person cannot register an NGO alone. Trust registration requires minimum 2 trustees. Society registration requires minimum 7 founding members. Section 8 company requires minimum 2 directors and 2 subscribers. However, you can be the primary founder and include family members or associates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is audit mandatory for NGOs in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Audit is mandatory for Section 8 companies regardless of turnover (under Companies Act 2013). For trusts and societies, audit is mandatory if total receipts exceed Rs 5 crore or if the trust deed/MOA mandates it. Even when not mandatory, audited accounts strengthen CSR funding and FCRA applications. See <a href='/statutory-audit'>Statutory Audit</a> services.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can my Chennai NGO receive foreign donations?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only after FCRA registration or prior permission from the Ministry of Home Affairs under FCRA 2010. FCRA registration requires 3 years of audited accounts. Prior permission can be sought for specific projects before 3 years. Receiving foreign contributions without FCRA approval is a criminal offence with penalties up to 5 times the amount received.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein NGO registration kaise hota hai?</strong> Trust, Society ya Section 8 Company - teeno tarike hain. Trust ke liye Sub-Registrar, Society ke liye Registrar of Societies TN, aur Section 8 ke liye RoC Chennai mein file hota hai.</p><p><strong>12A aur 80G kya hai?</strong> 12A se NGO ki income par tax exemption milti hai. 80G se donors ko tax deduction milta hai. Dono Income Tax portal par Form 10A se apply hota hai.</p><p><strong>Chennai mein NGO registration kitne din mein hota hai?</strong> Trust 15-20 din, Society 25-30 din, Section 8 Company 10-14 din mein ho jaata hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Delay Your NGO Registration in Chennai</h2>
            <div class="content-text">
                
                <p>Operating an unregistered NGO in Chennai means no legal identity, no 12A/80G tax exemption, no CSR funding eligibility, and no ability to receive foreign contributions under FCRA. Every month without registration is a month of lost donations, grants, and credibility. Society registration in Tamil Nadu takes 25-30 days, and 12A/80G processing adds another 15-30 days. Starting the process now ensures your Chennai NGO is fully operational and tax-exempt within 2 months.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Chennai." target="_blank" rel="noopener">WhatsApp us</a> to start your NGO registration in Chennai today.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your NGO Registration in Chennai Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">NGO registration in Chennai enables charitable, educational, social welfare, and environmental organisations to operate with legal recognition, tax exemption under 12A and 80G, CSR funding eligibility, and foreign contribution access under FCRA. Whether you choose a Trust, Society, or Section 8 Company, proper registration with the correct Chennai authority is the foundation of credible non-profit operations.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting serves Chennai NGOs through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles registration, 12A/80G filing, annual compliance, and FCRA preparation.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Registration%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20NGO%20registration%20in%20Chennai.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert NGO registration services available across major Indian cities</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available Cities</div><div class="pa-block-sub">NGO registration with local jurisdictional expertise</div><div class="pa-city-grid"><a href="/ngo-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/ngo-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/ngo-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/ngo-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for NGO Registration in Chennai</div><div class="pa-cross-grid"><a href="/section8-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect changes in MCA fees, Income Tax portal updates, Tamil Nadu stamp duty rates, and FCRA regulations. The next scheduled review is October 2026.</p>
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
