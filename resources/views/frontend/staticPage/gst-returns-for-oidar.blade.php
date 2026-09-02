

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST for OIDAR Services - Registration, Returns & Compliance</title>
    <meta name="description" content="OIDAR service providers must file GSTR-5A monthly by the 20th. Know OIDAR GST registration via REG-10, 18% IGST rate, place of supply rules and penalties. Starts Rs 4,999.">
    <link rel="canonical" href="/gst-returns-for-oidar">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST for OIDAR Services - Registration, Returns & Compliance">
    <meta property="og:description" content="OIDAR service providers must file GSTR-5A monthly by the 20th. Know OIDAR GST registration via REG-10, 18% IGST rate, place of supply rules and penalties. Starts Rs 4,999.">
    <meta property="og:url" content="/gst-returns-for-oidar">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST for OIDAR Services - Registration, Returns & Compliance">
    <meta name="twitter:description" content="OIDAR service providers must file GSTR-5A monthly by the 20th. Know OIDAR GST registration via REG-10, 18% IGST rate, place of supply rules and penalties. Starts Rs 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Returns for OIDAR: GSTR-5A Guide",
          "description": "OIDAR service providers must file GSTR-5A monthly by the 20th. Know OIDAR GST registration via REG-10, 18% IGST rate, place of supply rules and penalties. Starts Rs 4,999.",
          "url": "https://www.patronaccounting.com/gst-returns-for-oidar",
          "serviceType": "GST Returns for OIDAR: GSTR-5A Guide",
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
              "name": "GST Returns for OIDAR: GSTR-5A Guide",
              "item": "https://www.patronaccounting.com/gst-returns-for-oidar"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What are OIDAR services under GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "OIDAR stands for Online Information and Database Access or Retrieval services, defined under Section 2(17) of the IGST Act. These are digital services delivered via internet, essentially automated and involving minimal human intervention. Examples: cloud computing (AWS, Azure), streaming (Netflix, Spotify), SaaS, e-books, online gaming, digital advertising. Three-part test: via internet, automated, impossible without IT."
              }
            },
            {
              "@type": "Question",
              "name": "Is GST registration mandatory for foreign OIDAR providers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 24(xi) of the CGST Act, every person supplying OIDAR services from outside India to unregistered persons in India must register regardless of turnover. No threshold exemption. Registration via Simplified Registration Scheme Form GST REG-10. Application filed at least 5 days before commencing business. Authorised representative required in India."
              }
            },
            {
              "@type": "Question",
              "name": "What is GSTR-5A and who needs to file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-5A is a monthly return under Rule 64 of CGST Rules for non-resident OIDAR service providers supplying to unregistered Indian consumers (NTORs). Due by the 20th of the succeeding month. Includes state-wise outward supplies, IGST computation, and amendments. Filing mandatory even for zero-transaction months (Nil return). No ITC can be claimed."
              }
            },
            {
              "@type": "Question",
              "name": "What is the GST rate for OIDAR services?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Standard rate is 18% IGST for most OIDAR services including cloud, streaming, SaaS, online gaming, and digital advertising. E-books attract a reduced 5% under HSN 9984 (Notification 13/2018-CT(Rate)). No exemptions apply - even supplies to government, local authorities, and charitable organisations attract GST."
              }
            },
            {
              "@type": "Question",
              "name": "OIDAR services ke liye GST registration kaise hota hai foreign company ka?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Foreign company ko GST portal par Form GST REG-10 file karna hota hai. Iске liye promoters ka passport, foreign government se mila tax identification number, aur India mein ek authorised representative appoint karna zaroori hai. Business shuru karne se 5 din pehle application file karni hoti hai. Registration hone ke baad har mahine GSTR-5A file karna mandatory hai, chahe koi bhi transaction na ho."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between GSTR-5 and GSTR-5A?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-5 is for non-resident taxable persons (NRTPs) temporarily conducting physical business in India (e.g., trade fair exhibitors). Covers goods and services, allows ITC claims. GSTR-5A is specifically for non-resident OIDAR providers serving unregistered Indian consumers. Covers only OIDAR services, does not allow ITC, and requires mandatory Nil filing."
              }
            },
            {
              "@type": "Question",
              "name": "Can foreign OIDAR providers claim Input Tax Credit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Foreign OIDAR providers under Simplified Registration cannot claim ITC in GSTR-5A. No electronic credit ledger is maintained. The full 18% IGST is a cost. However, for B2B supplies under reverse charge, the Indian registered recipient pays GST and can claim ITC - making B2B structurally more tax-efficient."
              }
            },
            {
              "@type": "Question",
              "name": "What is the reverse charge mechanism for OIDAR services?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "When a foreign OIDAR provider supplies to a GST-registered Indian business, the recipient pays 18% IGST under reverse charge (RCM). The recipient issues a self-invoice, pays in GSTR-3B, and claims ITC if used for business. The foreign provider does not file GSTR-5A for B2B supplies - only B2C (to unregistered consumers) requires GSTR-5A. Quick Answers Q: What is OIDAR in GST? A: Online Information and Database Access or Retrieval - digital services via internet with minimal human intervention. 18% IGST. Section 2(17) IGST Act. Q: What form do OIDAR providers file? A: Foreign: GSTR-5A monthly by 20th. Indian: regular GSTR-1 and GSTR-3B. Q: Turnover limit for registration? A: No. Foreign OIDAR providers must register from the first transaction. Section 24(xi) CGST Act."
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
                        GST Returns for OIDAR Services - GSTR-5A Filing, Registration and Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Definition:</span> OIDAR = automated digital services delivered over internet with minimal human intervention. Section 2(17) IGST Act. Cloud, SaaS, streaming, e-books, gaming.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Mandatory for all foreign OIDAR providers regardless of turnover - Section 24(xi) CGST Act. Simplified Registration via Form GST REG-10.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-5A:</span> Monthly return due by 20th. Nil return mandatory. No ITC available. Full payment required before filing. Cannot be filed if previous period pending.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax Rate:</span> 18% IGST on most OIDAR services. 5% on e-books (HSN 9984). B2B supplies: reverse charge on Indian recipient. No exemptions.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">50+ OIDAR entities managed. 100% on-time GSTR-5A filing rate. Serving companies from 12+ countries. 4.9 Google Rating.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=OIDAR%20GST%20Compliance%20Enquiry&body=Hello%2C%0A%0AI%20need%20GSTR-5A%20filing%20for%20OIDAR%20services.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20OIDAR%20GST%20compliance%20-%20GSTR-5A%20filing.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'OIDAR GST Returns',
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
    'ctaText'    => 'Comply with Indian OIDAR GST from day one. Simplified Registration, monthly GSTR-5A, and authorised representative services from Rs 4,999/month.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is OIDAR</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">9-Step GSTR-5A</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Foreign vs Indian</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Returns - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - OIDAR GST Returns Services at a Glance</strong></p>
                    <p>OIDAR services are automated digital services delivered via internet, defined under Section 2(17) of IGST Act. Foreign providers serving unregistered Indian consumers must register via Form REG-10 and file GSTR-5A monthly by the 20th. IGST rate: 18% (5% for e-books). No ITC available for foreign providers. B2B supplies attract reverse charge on the Indian recipient. Indian OIDAR providers file regular GSTR-1 and GSTR-3B.</p>
                </div>
                <p>OIDAR services have grown exponentially in India with global platforms like Netflix, Spotify, AWS, Google Cloud, Adobe, and Canva serving millions. Under the IGST Act, these digital services attract special GST provisions. The treatment depends on two factors: where the provider is located (India or outside) and who the recipient is (GST-registered business or unregistered consumer). Foreign providers to unregistered consumers must register via Form REG-10, file GSTR-5A monthly, and pay 18% IGST directly.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Definition</td><td>Services via internet/electronic network, automated, minimal human intervention - Section 2(17) IGST Act</td></tr>
<tr><td>GST Rate</td><td>18% IGST on most OIDAR; 5% on e-books (HSN 9984)</td></tr>
<tr><td>Registration (Foreign)</td><td>Mandatory regardless of turnover - Form GST REG-10, Section 24(xi) CGST Act</td></tr>
<tr><td>Return Form</td><td>GSTR-5A (foreign providers); GSTR-1/3B (Indian providers)</td></tr>
<tr><td>Due Date</td><td>20th of the month following the tax period</td></tr>
<tr><td>ITC Availability</td><td>No ITC for foreign OIDAR providers; ITC available for Indian providers</td></tr>
<tr><td>Patron Fee</td><td>Starting Rs 4,999/month for GSTR-5A filing</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Are OIDAR Services Under GST?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>OIDAR services</strong> are digital services delivered through information technology over the internet or electronic network, essentially automated and involving minimal human intervention, as defined under <strong>Section 2(17) of the IGST Act, 2017</strong>.</p>
<p><strong>Examples:</strong> Cloud computing and SaaS (AWS, Google Cloud, Azure), streaming (Netflix, Spotify, Disney+), software downloads, e-books, online gaming, digital advertising (Google Ads, Meta Ads), online education platforms, data storage, website hosting, and AI/ML platform subscriptions.</p>
<p><strong>Three-Part Test:</strong> (1) Delivered via internet, (2) Essentially automated, (3) Impossible to ensure without IT. If all three are met, the service qualifies as OIDAR.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for OIDAR GST Returns:</strong></p>
                    <p><strong>GSTR-5A:</strong> Monthly return under Rule 64 for non-resident OIDAR providers. Reports taxable outward supplies to unregistered Indian consumers. Due by 20th. Nil return mandatory. No ITC.</p>
<p><strong>Non-Taxable Online Recipient (NTOR):</strong> Unregistered person in India receiving OIDAR services for non-business purposes. Foreign provider pays GST for NTOR supplies.</p>
<p><strong>Simplified Registration (REG-10):</strong> Special registration for foreign providers. Passport, foreign TIN, authorised representative in India required. File 5 days before first Indian transaction.</p>
<p><strong>Reverse Charge (RCM):</strong> For B2B OIDAR supplies, the Indian registered recipient pays GST and claims ITC. Foreign provider does not file GSTR-5A for B2B.</p>
<p><strong>Place of Supply (Section 13(12)):</strong> Proxies: billing address, IP address, SIM country code, credit card country. If any two place recipient in India, GST applies.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- OIDAR GST Returns -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OIDAR GST</text>
                            <!-- Globe / Digital icon -->
                            <circle cx="75" cy="68" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <ellipse cx="75" cy="68" rx="22" ry="10" fill="none" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <line x1="75" y1="46" x2="75" y2="90" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <text x="75" y="65" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OIDAR</text>
                            <text x="75" y="76" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">18% IGST</text>
                            <!-- GSTR-5A card -->
                            <rect x="110" y="50" width="48" height="35" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="134" y="65" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-5A</text>
                            <text x="134" y="78" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">By 20th</text>
                            <!-- Labels -->
                            <rect x="35" y="100" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="110" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 2(17)</text>
                            <rect x="100" y="100" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="110" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">REG-10</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IGST Act, 2017</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OIDAR GST Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IGST Act, 2017</span>
                        <strong>Section 2(17) | GSTR-5A</strong>
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
            <h2 class="section-title">Who Must File GST Returns for OIDAR Services?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Foreign Provider to Unregistered Indian Consumer (B2C):</strong> Must register via Form REG-10, file GSTR-5A monthly, pay 18% IGST. No turnover threshold - mandatory from first transaction (Section 24(xi)).</li>
<li><strong>Foreign Provider to GST-Registered Indian Business (B2B):</strong> Indian recipient pays GST under reverse charge. No GSTR-5A required for B2B supplies.</li>
<li><strong>Foreign Provider via Indian Intermediary:</strong> The Indian intermediary is liable for registration and GST payment.</li>
<li><strong>Foreign Provider via Foreign Intermediary:</strong> The foreign intermediary must register and file GSTR-5A for supplies to Indian NTORs.</li>
<li><strong>Indian OIDAR Provider:</strong> Standard GST compliance - regular registration, GSTR-1/GSTR-3B monthly, GSTR-9 annually. Rs 20 lakh threshold applies.</li>
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
            <h2 class="section-title">6 OIDAR GST Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Simplified Registration (Form REG-10)</td><td>Complete registration for foreign OIDAR providers including passport documentation, authorised representative appointment, and GSTIN issuance. Filed 5 days before first Indian transaction.</td></tr>
<tr><td>Monthly GSTR-5A Filing</td><td>Outward supply reporting by state, IGST computation at 18% (5% for e-books), amendment processing, and return submission by the 20th. Nil returns included.</td></tr>
<tr><td>Authorised Representative Services</td><td>Acting as the India-based authorised representative for foreign companies handling all GST compliance obligations on their behalf.</td></tr>
<tr><td>Reverse Charge Advisory (B2B)</td><td>Guidance for Indian businesses receiving OIDAR services on RCM obligations, self-invoice generation, and ITC claims.</td></tr>
<tr><td>Indian OIDAR Provider Compliance</td><td>Regular GSTR-1 and GSTR-3B filing for India-based digital service providers with standard registration.</td></tr>
<tr><td>Place of Supply Determination</td><td>Analysis of complex scenarios using Section 13(12) IGST Act proxy rules to determine correct place of supply and OIDAR classification.</td></tr>

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
            <h2 class="section-title">9-Step GSTR-5A Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete GSTR-5A filing process for foreign OIDAR providers - returns filed 2 days before the 20th deadline every month.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Register via Form GST REG-10</h3><p class="step-description">Obtain GST registration under the Simplified Registration Scheme. Provide passport of promoters, foreign tax identification number, and appoint an authorised representative in India. Application must be filed at least 5 days before commencing business.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rep appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form REG-10</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compile Taxable Outward Supplies</h3><p class="step-description">Compile all taxable outward supplies made to unregistered consumers (NTORs) in India during the month. Categorise by place of supply (state-wise) for accurate IGST computation at 18% (or 5% for e-books).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> State-wise split</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compiled</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Login to GST Portal</h3><p class="step-description">Access www.gst.gov.in using your GSTIN. Navigate to Services > Returns > Returns Dashboard. Select the return period and click on GSTR-5A.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Period selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-5A</text><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="59" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LOGGED IN</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Enter B2C Supplies in Table 5</h3><p class="step-description">Enter details of taxable outward supplies to non-taxable online recipients. Include place of supply (state), rate of tax (18% IGST or 5% for e-books), taxable value, IGST amount, and cess if applicable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Table 5 filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IGST computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Table 5</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="60" y="55" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">18%</text></svg></div><span class="illustration-label">B2C Done</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Enter B2B and Gaming Supplies</h3><p class="step-description">Enter supplies to registered persons in Table 5B and online money gaming supplies in Table 5C (if applicable, effective from October 2023).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 5B/5C filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gaming reported</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="44" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">5B</text><rect x="63" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="77" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">5C</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">B2B Done</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Process Amendments</h3><p class="step-description">Enter corrections to previous period supplies in Tables 5A and 5D/5E as applicable. This is the only way to correct errors since GSTR-5A cannot be revised after filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Amendments done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Prior periods corrected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Table 5A</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Amended</text></svg></div><span class="illustration-label">Amended</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Report Interest/Penalty in Table 6</h3><p class="step-description">Report any interest, penalty, or other amounts payable in Table 6. Table 7 (tax summary) auto-populates from Tables 5, 5A, 5D, 5E, and 6.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Table 6 done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Table 7 auto</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Table 6</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">07</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Ensure Full Payment</h3><p class="step-description">Ensure sufficient balance in the Electronic Cash Ledger to cover full tax liability. Partial payment is not accepted - GSTR-5A can only be filed after full payment via debit/credit card, NEFT, RTGS, or online banking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Full payment made</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ledger funded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FULL PAY</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">No Partial</text></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">08</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">File with DSC/EVC and Download Acknowledgement</h3><p class="step-description">Click Proceed to File, review summary, select declaration checkbox, choose authorised signatory, and file using DSC or EVC. Download the acknowledgement. Note: Cannot file if previous period is pending.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-5A filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ack downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GSTR-5A</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FILED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">09</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for OIDAR GST Compliance</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Valid passport</strong> of promoters/directors of the foreign entity</li>
<li><strong>Tax identification number (TIN)</strong> or unique number from foreign government</li>
<li><strong>PAN of authorised representative</strong> in India</li>
<li><strong>Authorised representative details</strong> (name, address, contact)</li>
<li><strong>List of OIDAR services</strong> with SAC codes (e.g., HSN 9984)</li>
<li><strong>Monthly transaction records</strong> categorised by place of supply (Indian state)</li>
<li><strong>Invoice records</strong> with taxable value and IGST computed</li>
<li><strong>Proof of payment</strong> for previous period GST liabilities</li>
<li><strong>Digital Signature Certificate (DSC)</strong> or registered mobile for EVC</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common OIDAR GST Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>OIDAR Classification Uncertainty</td><td>The 'minimal human intervention' test is subjective. Borderline services (online exam administration, live classes) create confusion</td><td>Apply the three-part test: (1) via internet, (2) essentially automated, (3) impossible without IT. Refer to AAR rulings for borderline cases.</td></tr>
<tr><td>Place of Supply Determination</td><td>Recipient's location unknown when selling digital services globally. Need to identify Indian consumers accurately</td><td>Section 13(12) proxies: billing address, IP address, SIM country code, credit card country. If any two place recipient in India, GST applies.</td></tr>
<tr><td>No ITC for Foreign Providers</td><td>Full 18% IGST becomes a cost with no offset. Significant impact on pricing for Indian B2C market</td><td>Factor 18% IGST into pricing for B2C. For B2B, structure through reverse charge so Indian business pays and claims ITC.</td></tr>
<tr><td>No Indian Presence for Representative</td><td>Foreign company has no office or staff in India but needs an authorised representative</td><td>Patron Accounting serves as the authorised representative, handling registration, GSTR-5A filing, and IGST payments on behalf of the foreign entity.</td></tr>

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
            <h2 class="section-title">OIDAR GST Compliance Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Simplified Registration (Form REG-10)</td><td class="table-amount">Rs 9,999 (one-time)</td></tr>
<tr><td>Monthly GSTR-5A Filing</td><td class="table-amount">Rs 4,999/month</td></tr>
<tr><td>Authorised Representative Services</td><td class="table-amount">Rs 2,999/month</td></tr>
<tr><td>Place of Supply Analysis and Advisory</td><td class="table-amount">Rs 4,999 per engagement</td></tr>
<tr><td>Reverse Charge Advisory for Indian Recipients</td><td class="table-amount">Rs 2,999 per engagement</td></tr>
<tr><td>Indian OIDAR Provider (GSTR-1 + GSTR-3B)</td><td class="table-amount">Rs 1,499/month</td></tr>
<tr><td>Annual Compliance Package (Reg + 12 months)</td><td class="table-amount">Rs 59,999/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free OIDAR GST Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GSTR-5A%20filing%20for%20OIDAR%20services.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OIDAR GST Compliance Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Simplified Registration (REG-10)</td><td>5 days before first transaction | 3-5 working days turnaround</td></tr>
<tr><td>Appointment of Authorised Representative</td><td>Before registration | 1-2 working days</td></tr>
<tr><td><strong>Monthly GSTR-5A Filing</strong></td><td><strong>By 20th of succeeding month</strong> | Filed by 18th (2-day buffer)</td></tr>
<tr><td>Place of Supply Analysis</td><td>Before first invoice | 3-5 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> GSTR-5A for the current period cannot be filed if the previous period's return is pending - creating cascading compliance failures. Nil return filing is mandatory even with zero transactions. Full payment must be made before filing (no partial payment accepted). Missing the 20th deadline attracts penalties under Section 122 plus 18% interest under Section 50.</p>

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
            <h2 class="section-title">Benefits of Professional OIDAR GST Compliance</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Accurate OIDAR Classification</h3><p class="feature-text">Expert application of the three-part test under Section 2(17) ensures your service correctly qualifies (or does not qualify) as OIDAR.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Place of Supply Determination</h3><p class="feature-text">State-wise IGST computation using Section 13(12) proxy rules prevents assessment disputes and ensures correct tax allocation.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Authorised Representative in India</h3><p class="feature-text">Foreign companies get a dedicated India contact for all GST matters without establishing physical presence. Complete compliance handled.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Timely GSTR-5A Filing</h3><p class="feature-text">Returns filed 2 days before the 20th deadline every month including mandatory Nil returns. 100% on-time filing rate across all OIDAR clients.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">B2B vs B2C Structuring</h3><p class="feature-text">Optimise tax flow by routing B2B supplies through reverse charge to avoid 18% IGST cost to the foreign provider. Strategic compliance advisory.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Global Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>50+ Foreign OIDAR Entities Managed</strong> across SaaS, streaming, e-commerce, gaming, and digital advertising.</p>
<p><strong>100% On-Time GSTR-5A Filing Rate</strong> with zero missed deadlines.</p>
<p><strong>Serving Companies from 12+ Countries</strong> as authorised representative in India.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Foreign OIDAR Provider vs Indian OIDAR Provider</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Foreign Provider (Outside India)</th><th>Indian Provider</th></tr></thead>
                    <tbody>
                        <tr><td>Registration</td><td>Simplified Scheme (Form REG-10)</td><td>Normal registration (Form REG-01)</td></tr>
<tr><td>Return Form</td><td>GSTR-5A (monthly)</td><td>GSTR-1 + GSTR-3B (monthly/quarterly)</td></tr>
<tr><td>Tax Type</td><td>IGST only (18%)</td><td>CGST + SGST or IGST</td></tr>
<tr><td>ITC Availability</td><td>No - full IGST is cost</td><td>Yes - ITC on business inputs</td></tr>
<tr><td>B2C Liability</td><td>Provider pays IGST</td><td>Provider charges and remits GST</td></tr>
<tr><td>B2B Liability</td><td>Reverse charge on recipient</td><td>Provider charges GST</td></tr>
<tr><td>Authorised Representative</td><td>Mandatory in India</td><td>Not required</td></tr>
<tr><td>Turnover Threshold</td><td>None - mandatory from first transaction</td><td>Rs 20 lakh (Rs 10 lakh special states)</td></tr>

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
            <h2 class="section-title">Related GST and Foreign Company Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - For Indian companies providing OIDAR services.</li>
<li><strong><a href="/gst-returns">GST Returns</a></strong> - Complete guide to all GST return types.</li>
<li><strong><a href="/gst-notice">GST Notice Handling</a></strong> - Expert reply for scrutiny or demand notices.</li>
<li><strong><a href="#">Foreign Company Registration</a></strong> - LLP or subsidiary setup in India.</li>
<li><strong><a href="/accounting-services">Bookkeeping Services</a></strong> - Monthly bookkeeping for Indian operations.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for OIDAR Services Under GST</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> IGST Act, 2017; CGST Act, 2017; CGST Rules, 2017.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 2(17) IGST:</strong> Definition of OIDAR services - delivered via IT, automated, minimal human intervention.</li>
<li><strong>Section 14 IGST:</strong> When OIDAR supplied from non-taxable territory to NTOR in India, supplier pays IGST.</li>
<li><strong>Section 24(xi) CGST:</strong> Compulsory registration for foreign OIDAR providers - no turnover threshold.</li>
<li><strong>Section 13(12) IGST:</strong> Place of supply proxies - billing address, IP, SIM, credit card country.</li>
<li><strong>Rule 64 CGST:</strong> GSTR-5A filing procedure. Monthly by 20th. Nil return mandatory.</li>
<li><strong>Form GST REG-10:</strong> Simplified Registration for foreign OIDAR providers.</li>
<li><strong>Section 122 CGST:</strong> Penalty Rs 10,000 or tax amount, whichever higher.</li>
</ul>
<p><strong>GST Rate:</strong> 18% IGST (most OIDAR). 5% on e-books (HSN 9984, Notification 13/2018-CT(Rate)).</p>
<p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">CBIC Tax Information</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - OIDAR GST Returns</h2>
                    <p class="faq-expanded__lead">Answers about OIDAR definition, GSTR-5A, registration, GST rates, reverse charge, ITC, and compliance for foreign and Indian providers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'OIDAR GST Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What are OIDAR services under GST?</h3>
                        <div class="faq-expanded__a"><p>OIDAR stands for Online Information and Database Access or Retrieval services, defined under Section 2(17) of the IGST Act. These are digital services delivered via internet, essentially automated and involving minimal human intervention. Examples: cloud computing (AWS, Azure), streaming (Netflix, Spotify), SaaS, e-books, online gaming, digital advertising. Three-part test: via internet, automated, impossible without IT.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for foreign OIDAR providers?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 24(xi) of the CGST Act, every person supplying OIDAR services from outside India to unregistered persons in India must register regardless of turnover. No threshold exemption. Registration via Simplified Registration Scheme Form GST REG-10. Application filed at least 5 days before commencing business. Authorised representative required in India.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is GSTR-5A and who needs to file it?</h3>
                        <div class="faq-expanded__a"><p>GSTR-5A is a monthly return under Rule 64 of CGST Rules for non-resident OIDAR service providers supplying to unregistered Indian consumers (NTORs). Due by the 20th of the succeeding month. Includes state-wise outward supplies, IGST computation, and amendments. Filing mandatory even for zero-transaction months (Nil return). No ITC can be claimed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the GST rate for OIDAR services?</h3>
                        <div class="faq-expanded__a"><p>Standard rate is 18% IGST for most OIDAR services including cloud, streaming, SaaS, online gaming, and digital advertising. E-books attract a reduced 5% under HSN 9984 (Notification 13/2018-CT(Rate)). No exemptions apply - even supplies to government, local authorities, and charitable organisations attract GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">OIDAR services ke liye GST registration kaise hota hai foreign company ka?</h3>
                        <div class="faq-expanded__a"><p>Foreign company ko GST portal par Form GST REG-10 file karna hota hai. Iске liye promoters ka passport, foreign government se mila tax identification number, aur India mein ek authorised representative appoint karna zaroori hai. Business shuru karne se 5 din pehle application file karni hoti hai. Registration hone ke baad har mahine GSTR-5A file karna mandatory hai, chahe koi bhi transaction na ho.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between GSTR-5 and GSTR-5A?</h3>
                        <div class="faq-expanded__a"><p>GSTR-5 is for non-resident taxable persons (NRTPs) temporarily conducting physical business in India (e.g., trade fair exhibitors). Covers goods and services, allows ITC claims. GSTR-5A is specifically for non-resident OIDAR providers serving unregistered Indian consumers. Covers only OIDAR services, does not allow ITC, and requires mandatory Nil filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can foreign OIDAR providers claim Input Tax Credit?</h3>
                        <div class="faq-expanded__a"><p>No. Foreign OIDAR providers under Simplified Registration cannot claim ITC in GSTR-5A. No electronic credit ledger is maintained. The full 18% IGST is a cost. However, for B2B supplies under reverse charge, the Indian registered recipient pays GST and can claim ITC - making B2B structurally more tax-efficient.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the reverse charge mechanism for OIDAR services?</h3>
                        <div class="faq-expanded__a"><p>When a foreign OIDAR provider supplies to a GST-registered Indian business, the recipient pays 18% IGST under reverse charge (RCM). The recipient issues a self-invoice, pays in GSTR-3B, and claims ITC if used for business. The foreign provider does not file GSTR-5A for B2B supplies - only B2C (to unregistered consumers) requires GSTR-5A.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: What is OIDAR in GST?</strong> A: Online Information and Database Access or Retrieval - digital services via internet with minimal human intervention. 18% IGST. Section 2(17) IGST Act.</p>
<p><strong>Q: What form do OIDAR providers file?</strong> A: Foreign: GSTR-5A monthly by 20th. Indian: regular GSTR-1 and GSTR-3B.</p>
<p><strong>Q: Turnover limit for registration?</strong> A: No. Foreign OIDAR providers must register from the first transaction. Section 24(xi) CGST Act.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Non-Compliance Penalties Start from Day One</h2>
            <div class="content-text">
                
                <p>Non-registration attracts penalties under Section 122 - Rs 10,000 or the tax amount, whichever is higher. Interest at 18% p.a. on delayed payments under Section 50. The GST portal blocks current period GSTR-5A if the previous period is pending, creating cascading failures.</p>
<p>GSTR-5A must be filed as Nil return even with zero transactions - missing it attracts the same penalties as missing a return with liability. There is no threshold exemption for foreign OIDAR providers.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20OIDAR%20GST%20compliance.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free OIDAR GST assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Comply with Indian OIDAR GST from Day One</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">OIDAR services represent one of the most specialised areas of GST compliance. The distinction between B2B and B2C, the Simplified Registration Scheme, the unique GSTR-5A return, absence of ITC for foreign providers, and complex place of supply rules make professional assistance essential.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Whether you are a global SaaS platform, streaming service, digital advertising network, or cloud computing provider serving Indian consumers - compliance protects your business and ensures uninterrupted delivery in one of the world's largest digital markets.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting: 50+ OIDAR entities. 100% filing rate. Companies from 12+ countries. Starting from Rs 4,999/month.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GSTR-5A%20filing%20for%20OIDAR%20services.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20OIDAR%20GST%20Compliance&body=Hello%2C%0A%0AI%20need%20OIDAR%20GST%20compliance%20services%20(GSTR-5A).%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">OIDAR GST Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GSTR-5A filing and authorised representative services for foreign OIDAR providers serving Indian consumers.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-returns-for-oidar/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-oidar/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-oidar/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-returns-for-oidar/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">GST and foreign company compliance</div><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Foreign Company Reg</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Bookkeeping</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns-for-e-commerce-operator" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">E-com GST Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Content aligned with IGST Act 2017, CGST Act 2017, and current GST portal procedures. Next review: June 2026.</p>
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
