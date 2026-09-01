

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PAN Card Registration Online - Process, Form 49A & Documents</title>
    <meta name="description" content="PAN registration for individuals, companies, LLPs, trusts. Form 49A/49AA under Section 139A. Fee Rs 107. Instant e-PAN via Aadhaar. Expert CA and CS team.">
    <link rel="canonical" href="/pan-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PAN Card Registration Online - Process, Form 49A & Documents">
    <meta property="og:description" content="PAN registration for individuals, companies, LLPs, trusts. Form 49A/49AA under Section 139A. Fee Rs 107. Instant e-PAN via Aadhaar. Expert CA and CS team.">
    <meta property="og:url" content="/pan-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PAN Card Registration Online - Process, Form 49A & Documents">
    <meta name="twitter:description" content="PAN registration for individuals, companies, LLPs, trusts. Form 49A/49AA under Section 139A. Fee Rs 107. Instant e-PAN via Aadhaar. Expert CA and CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "PAN Registration: Process and Fee",
          "description": "PAN registration for individuals, companies, LLPs, trusts. Form 49A/49AA under Section 139A. Fee Rs 107. Instant e-PAN via Aadhaar. Expert CA and CS team.",
          "url": "https://www.patronaccounting.com/pan-registration",
          "serviceType": "PAN Registration: Process and Fee",
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
            "url": "https://www.patronaccounting.com/pan-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "72",
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
              "name": "PAN Registration: Process and Fee",
              "item": "https://www.patronaccounting.com/pan-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How much does PAN registration cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Physical PAN card with e-PAN costs Rs 107 (inclusive of GST). e-PAN only without physical card costs Rs 72. Dispatch outside India adds Rs 910. Instant e-PAN via Aadhaar on the Income Tax portal (incometax.gov.in) is completely free. PAN correction or reprint costs the same: Rs 107 (physical) or Rs 72 (e-PAN only). Professional service charges from Patron Accounting are additional."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Form 49A and Form 49AA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 49A is for Indian citizens, HUFs, companies, LLPs, partnerships, trusts, and entities formed in India. Form 49AA is for foreign citizens, PIOs, OCIs, and foreign entities. Both are similar in structure but Form 49AA includes fields for country of citizenship and ISD code, and requires documents attested by Apostille (Hague Convention countries) or Indian Embassy."
              }
            },
            {
              "@type": "Question",
              "name": "How to get instant e-PAN free of cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Individuals (non-minors) with valid Aadhaar linked to an active mobile can get instant e-PAN free at incometax.gov.in. Navigate to 'Instant e-PAN' under Quick Links. Enter Aadhaar, verify OTP, and e-PAN is allotted in real-time. The PDF is sent to your email. This facility is not available for entities (companies, LLPs, trusts)."
              }
            },
            {
              "@type": "Question",
              "name": "PAN card kaise banaye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PAN card banane ke liye Protean (NSDL) ya UTIITSL ki website par jao. Form 49A select karo (Indian citizen ke liye). Naam, date of birth, address, Aadhaar number, aur source of income fill karo. Documents upload karo - Aadhaar, photo, signature. Rs 107 fee online pay karo. 15-20 din mein PAN card aa jayega. Aadhaar hai toh incometax.gov.in par instant e-PAN free mein mil jata hai. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Is PAN mandatory for companies and LLPs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. For new companies, PAN is allotted during SPICe+ incorporation on MCA portal. For LLPs, during the FiLLiP process. Older entities without PAN or trusts, societies, and partnerships need separate Form 49A applications. PAN is also required for GST registration - GSTIN is derived from PAN."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if PAN is not linked with Aadhaar?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unlinked PAN becomes inoperative under Section 139AA. Cannot file ITR, pending returns not processed, refunds withheld, TDS at higher rates under Sections 206AA and 206CC, and difficulties in financial transactions. PAN can be reactivated by completing Aadhaar linking (late fee of Rs 1,000 may apply)."
              }
            },
            {
              "@type": "Question",
              "name": "Company ka PAN card kaise banta hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company ka PAN card SPICe+ incorporation ke saath automatically allot hota hai MCA portal par. Agar company pehle se registered hai aur PAN nahi hai toh Form 49A se alag se apply karna padta hai. LLP ka PAN bhi FiLLiP form ke saath allot hota hai. Trust, society, aur partnership firm ko Form 49A se apply karna hota hai. Rs 107 fee lagti hai."
              }
            },
            {
              "@type": "Question",
              "name": "Is it legal to have more than one PAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Having or using more than one PAN is illegal under the Income Tax Act. Each person or entity must have only one PAN. If you discover duplicate PANs, surrender the additional one immediately by filing a PAN correction/change request form. Using multiple PANs can attract a penalty of Rs 10,000 under Section 272B. Quick Answers Q: Does PAN expire? A: No. Once allotted, PAN is valid for a lifetime. No renewal required. Q: Can minors get PAN? A: Yes, through a representative assessee (parent/guardian). Instant e-PAN not available for minors. Q: What is the 4th character in PAN? A: Entity type: P (Individual), C (Company), H (HUF), A (AOP), T (Trust), F (Firm). Q: Is PAN required for GST? A: Yes. PAN is a prerequisite. The 15-digit GSTIN is derived from PAN. Q: How to check PAN status? A: Track using acknowledgement number on Protean or UTIITSL website. For verification, use the Income Tax e-filing portal."
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
                        PAN Registration (Permanent Account Number) in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>PAN:</span> 10-digit alphanumeric unique tax identifier under Section 139A of the Income Tax Act, 1961. Lifetime validity. No renewal needed.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Application Forms:</span> Form 49A (Indian citizens/entities) | Form 49AA (foreign citizens/entities). Filed via Protean or UTIITSL portals.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fee:</span> Rs 107 (physical card + e-PAN) | Rs 72 (e-PAN only) | Free instant e-PAN via Aadhaar on incometax.gov.in.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15-20 working days (standard online). Instant for e-PAN via Aadhaar. Penalty for non-compliance: Rs 10,000 (Section 272B).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=PAN%20Registration%20Enquiry&body=Hello%2C%0A%0AI%20need%20PAN%20card.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PAN%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'PAN Registration',
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
    'ctaText'    => 'Get your PAN card for individuals, companies, LLPs, trusts, and foreign entities with expert CA support.',
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
            <a href="#what-section" class="toc-btn">What Is PAN</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">PAN vs TAN vs GSTIN</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PAN Registration Services at a Glance</strong></p>
                    <p>PAN (Permanent Account Number) is a unique 10-digit alphanumeric identifier issued by the Income Tax Department under Section 139A. It is mandatory for all taxpayers - individuals, HUFs, companies, LLPs, partnerships, trusts, and AOPs. PAN is required for ITR filing, bank accounts, financial transactions above prescribed thresholds, and GST registration. Union Budget 2023 proposed PAN as the common business identifier across government digital systems.</p>
                </div>
                <p>PAN is the foundational tax identity for every financial transaction in India. It links all tax payments, TDS credits, investments, property transactions, and bank accounts to a single identifier. Without PAN, individuals cannot file ITR, companies cannot obtain GST registration, and high-value transactions are not permitted. With over 70 crore PAN cards issued and PAN proposed as the unified business identifier, obtaining PAN is the first compliance step.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Section 139A, Income Tax Act, 1961; Rule 114, IT Rules, 1962</td></tr>
<tr><td>Format</td><td>10-digit alphanumeric (e.g., ABCDE1234F) - 5 letters + 4 digits + 1 letter</td></tr>
<tr><td>Application Form</td><td>Form 49A (Indian) | Form 49AA (Foreign) - via Protean or UTIITSL</td></tr>
<tr><td>Fee</td><td>Rs 107 (physical + e-PAN) | Rs 72 (e-PAN only) | Free (instant e-PAN via Aadhaar)</td></tr>
<tr><td>Issuing Authority</td><td>Income Tax Dept via <a href="https://incometax.gov.in" target="_blank" rel="noopener">Protean</a> and UTIITSL</td></tr>
<tr><td>Validity</td><td>Lifetime (no expiry, no renewal required)</td></tr>
<tr><td>Penalty</td><td>Rs 10,000 per default under Section 272B</td></tr>
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
                <h2 class="section-title">What Is PAN?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Permanent Account Number (PAN) is a unique <strong>10-digit alphanumeric identifier</strong> issued by the Income Tax Department under <strong>Section 139A of the Income Tax Act, 1961</strong>. The fourth character indicates the entity type: P (Individual), C (Company), F (Firm), H (HUF), A (AOP), T (Trust).</p>
<p>PAN is issued by two authorized agencies: <strong>Protean</strong> (formerly NSDL e-Gov) and <strong>UTIITSL</strong>. Applications can be filed online through their portals, or offline at PAN centres. Once issued, PAN is <strong>valid for a lifetime</strong> and does not require renewal.</p>
<p>PAN must be linked to Aadhaar under <strong>Section 139AA</strong>. An unlinked PAN becomes inoperative, restricting financial transactions and tax filings. Instant e-PAN is available free of cost for individuals with valid Aadhaar on the <a href="https://incometax.gov.in" target="_blank" rel="noopener">Income Tax e-filing portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PAN Registration:</strong></p>
                    <p><strong>Section 139A:</strong> Core provision mandating PAN for every person liable to pay tax, file returns, or enter prescribed financial transactions.</p>
<p><strong>Form 49A:</strong> Application form for Indian citizens, HUFs, companies, LLPs, partnership firms, trusts, and entities formed in India.</p>
<p><strong>Form 49AA:</strong> Application form for foreign citizens, PIOs, OCIs, and foreign entities under Rule 114.</p>
<p><strong>Protean (formerly NSDL e-Gov):</strong> Authorized PAN service agency processing applications and issuing PAN cards on behalf of the Income Tax Department.</p>
<p><strong>Instant e-PAN:</strong> Free real-time PAN allotment on the Income Tax portal for individuals with Aadhaar linked to an active mobile number.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- PAN Registration -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN Registration</text>
                            <!-- PAN card design -->
                            <rect x="50" y="48" width="100" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <rect x="58" y="55" width="30" height="20" rx="3" fill="#14365F" opacity="0.15"/>
                            <text x="73" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text>
                            <rect x="95" y="58" width="45" height="5" rx="1" fill="#14365F" opacity="0.2"/>
                            <rect x="95" y="67" width="35" height="5" rx="1" fill="#14365F" opacity="0.15"/>
                            <text x="100" y="95" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="monospace">ABCDE1234F</text>
                            <!-- Labels -->
                            <rect x="45" y="118" width="45" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="67" y="128" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 139A</text>
                            <rect x="110" y="118" width="45" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="132" y="128" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Lifetime</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Act, 1961</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act, 1961</span>
                        <strong>Section 139A - PAN</strong>
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
            <h2 class="section-title">Who Needs PAN Registration?</h2>
            <div class="content-text">
                
                <p><strong>PAN is mandatory for:</strong></p>
<ul>
<li><strong>Every individual</strong> whose total income exceeds the basic exemption limit or who enters prescribed financial transactions</li>
<li><strong>All companies</strong> incorporated under the Companies Act (allotted during SPICe+ incorporation)</li>
<li><strong>All LLPs</strong> registered with MCA (allotted during FiLLiP process)</li>
<li><strong>Partnership firms, HUFs, Trusts</strong> (charitable and private), AOPs and BOIs, Section 8 companies and NGOs</li>
<li><strong>Foreign citizens</strong> investing or doing business in India (Form 49AA)</li>
<li><strong>NRIs</strong> with taxable income in India</li>
<li><strong>Any person</strong> entering high-value transactions: cash deposits above Rs 50,000, property transactions above Rs 10 lakh, motor vehicle purchases, time deposits above Rs 50,000, foreign travel payments above Rs 50,000 (Rule 114B)</li>
</ul>
<p><strong>Note:</strong> Having or using more than one PAN is illegal. If you have duplicate PANs, surrender the additional one immediately.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 PAN Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Individual PAN Registration</td><td>Complete Form 49A preparation, document compilation, online submission via Protean or UTIITSL, and follow-up. Instant e-PAN assistance via Aadhaar where eligible.</td></tr>
<tr><td>Company and LLP PAN</td><td>PAN for newly incorporated companies (coordinated with SPICe+) and LLPs (FiLLiP). Separate Form 49A for existing entities. See <a href="/private-limited-company-registration">company registration</a>.</td></tr>
<tr><td>Trust, Society, and NGO PAN</td><td>PAN registration for charitable trusts, societies, Section 8 companies, and AOPs. Critical prerequisite for 12A/80G registration and ITR filing.</td></tr>
<tr><td>Foreign Citizen PAN (Form 49AA)</td><td>PAN for foreign nationals, PIOs, OCIs, and foreign entities. Document attestation guidance (Apostille/Embassy authentication) for overseas applicants.</td></tr>
<tr><td>PAN Correction and Reprint</td><td>Correction of name, date of birth, address, or other details on existing PAN card. Reprint of lost or damaged PAN card with same PAN number.</td></tr>
<tr><td>PAN-Aadhaar Linking</td><td>Mandatory linking under Section 139AA. Reactivation of inoperative PAN after linking. Also see <a href="/tan-registration">TAN Registration</a>.</td></tr>

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
            <h2 class="section-title">7-Step PAN Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete PAN application - from form selection and AO code identification to document verification and PAN card delivery tracking.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine the Correct Form</h3><p class="step-description">Indian citizens/entities use Form 49A. Foreign citizens/entities use Form 49AA. Individuals with valid Aadhaar can use the instant e-PAN route on incometax.gov.in (free of cost).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Route selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49A</text><rect x="57" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="72" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49AA</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Form Selected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Gather Documents</h3><p class="step-description">Compile identity proof (Aadhaar, passport, voter ID), address proof, date of birth proof, and photographs. For entities: Certificate of Incorporation, Partnership Deed, Trust Deed, or Registration Certificate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Apply Online via Protean or UTIITSL</h3><p class="step-description">Visit Protean or UTIITSL portal. Select New PAN and applicant category (Individual, Company, Firm, Trust, LLP). Fill all details: name, DOB, address, AO code, and source of income.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AO code correct</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Protean / UTIITSL</text><rect x="40" y="50" width="40" height="12" rx="3" fill="#F5A623" opacity="0.4"/><text x="60" y="59" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49A</text></svg></div><span class="illustration-label">Applied</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Upload Documents and Photo</h3><p class="step-description">Upload scanned copies of identity, address, DOB proof, and photograph in prescribed format. For entities, upload incorporation certificate and statutory documents. Ensure clarity and legibility.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Clear and legible</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UPLOAD</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Uploaded</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Pay Application Fee</h3><p class="step-description">Pay Rs 107 (physical card + e-PAN) or Rs 72 (e-PAN only) via credit/debit card, UPI, net banking. Additional Rs 910 for dispatch outside India. Download acknowledgement receipt.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 107 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Receipt downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 107</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Submit and Track Application</h3><p class="step-description">Acknowledgement number generated for tracking on Protean/UTIITSL website or via SMS. Verify via e-sign or Aadhaar OTP for paperless processing where applicable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tracking active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Tracked</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">PAN Card Issued</h3><p class="step-description">PAN allotted and physical card dispatched (15-20 working days). e-PAN (PDF) sent to registered email. The 10-digit PAN is valid for a lifetime. Ensure immediate PAN-Aadhaar linking under Section 139AA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 10-digit PAN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Lifetime validity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PAN</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">ABCDE1234F</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="72" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Lifetime</text></svg></div><span class="illustration-label">PAN Issued</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PAN Registration</h2>
            <div class="content-text">
                
                <p><strong>For Individuals (Form 49A):</strong></p>
<ul>
<li>Identity Proof: Aadhaar card, Passport, Voter ID, Driving License, or Ration Card</li>
<li>Address Proof: Aadhaar, Passport, Voter ID, Utility bill, Bank statement, Post office passbook</li>
<li>Date of Birth Proof: Aadhaar, Birth certificate, Matriculation certificate, Passport, Driving license</li>
<li>Two recent passport-size colour photographs</li>
</ul>
<p><strong>For Companies, LLPs, Firms, Trusts (Form 49A):</strong></p>
<ul>
<li>Certificate of Incorporation / Registration Certificate / Partnership Deed / Trust Deed</li>
<li>MOA and AOA (for companies)</li>
<li>Address proof of registered office</li>
<li>Identity proof of authorised signatory</li>
</ul>
<p><strong>For Foreign Citizens (Form 49AA):</strong></p>
<ul>
<li>Passport copy (mandatory)</li>
<li>PIO/OCI card copy (if applicable)</li>
<li>TIN or citizenship ID attested by Apostille or Indian Embassy</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common PAN Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AO Code Selection Errors</td><td>Incorrect Area Code, AO Type, Range Code leads to wrong jurisdictional mapping and tax assessment complications</td><td>We identify the correct AO code based on your address and entity type before filing the application.</td></tr>
<tr><td>Name Mismatch PAN vs Aadhaar</td><td>Discrepancy between PAN and Aadhaar names causes PAN-Aadhaar linking failure, making PAN inoperative</td><td>We ensure name consistency across PAN, Aadhaar, and all documents before filing the application.</td></tr>
<tr><td>Document Attestation for Foreign Applicants</td><td>Form 49AA requires Apostille (Hague Convention) or Indian Embassy attestation - many foreign applicants are unfamiliar</td><td>We guide foreign investors through the complete documentation and attestation process end-to-end.</td></tr>
<tr><td>PAN for Companies During Incorporation</td><td>New companies get PAN via SPICe+ but trusts, societies, and partnerships need separate applications</td><td>We coordinate PAN allotment seamlessly as part of the entity formation process for all entity types.</td></tr>

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
            <h2 class="section-title">PAN Registration Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Physical PAN Card + e-PAN (within India)</td><td class="table-amount">Rs 107 (inclusive of GST)</td></tr>
<tr><td>e-PAN Only (no physical card)</td><td class="table-amount">Rs 72 (inclusive of GST)</td></tr>
<tr><td>Dispatch Outside India (additional)</td><td class="table-amount">Rs 910</td></tr>
<tr><td>Instant e-PAN via Aadhaar</td><td class="table-amount">Free of cost</td></tr>
<tr><td>PAN Correction / Reprint</td><td class="table-amount">Rs 107 (physical) / Rs 72 (e-PAN only)</td></tr>
<tr><td>Penalty for Not Having PAN (Section 272B)</td><td class="table-amount">Rs 10,000 per default</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PAN Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20PAN%20card.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does PAN Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Compilation</td><td>1-2 days</td></tr>
<tr><td>Online Application Filing</td><td>1 day</td></tr>
<tr><td>Document Verification by Protean/UTIITSL</td><td>7-15 working days</td></tr>
<tr><td>PAN Card Dispatch</td><td>3-5 working days (after allotment)</td></tr>
<tr><td><strong>Total (Standard Online)</strong></td><td><strong>15-20 working days</strong></td></tr>
<tr><td><strong>Instant e-PAN (Aadhaar route)</strong></td><td><strong>Immediate (real-time)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Instant e-PAN via Aadhaar on incometax.gov.in is free and real-time - but only for individual non-minor applicants with valid Aadhaar. For entities (companies, LLPs, trusts), standard 15-20 day processing applies. Patron Accounting ensures paperless processing via e-sign/Aadhaar OTP for fastest turnaround.</p>

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
            <h2 class="section-title">6 Benefits of PAN Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Mandatory Tax Identification</h3><p class="feature-text">PAN must be quoted in all ITR filings, TDS/TCS certificates, tax payments, and Income Tax Department communications. Without PAN, you cannot file ITR or receive TDS credits.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Bank and Financial Transactions</h3><p class="feature-text">Mandatory for opening bank accounts, FDs above Rs 50,000, mutual funds, securities, and all high-value transactions specified under Rule 114B of the Income Tax Rules.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">GST Registration Prerequisite</h3><p class="feature-text">PAN is required for GST registration - the 15-digit GSTIN is derived from the PAN number. Without PAN, a business cannot register for GST. See <a href="/gst-registration">GST Registration</a>.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3 class="feature-title">Property and Vehicle Transactions</h3><p class="feature-text">Mandatory for property sale/purchase above Rs 10 lakh and motor vehicle purchases. Registration authorities require PAN for stamp duty and registration.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Common Business Identifier</h3><p class="feature-text">Union Budget 2023 proposed PAN as the common identifier for all business establishments across government digital systems - becoming the unified business identity in India.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Foreign Investment in India</h3><p class="feature-text">Foreign citizens and entities investing or doing business in India must obtain PAN for tax compliance, property transactions, and NRO/NRE account opening.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN vs TAN vs GSTIN vs Aadhaar - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>PAN</th><th>TAN</th><th>GSTIN</th><th>Aadhaar</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Permanent Account Number</td><td>Tax Deduction Account Number</td><td>GST Identification Number</td><td>Unique Identification</td></tr>
<tr><td>Digits</td><td>10 alphanumeric</td><td>10 alphanumeric</td><td>15 alphanumeric</td><td>12 numeric</td></tr>
<tr><td>Issued By</td><td>Income Tax Dept</td><td>Income Tax Dept</td><td>GST Department</td><td>UIDAI</td></tr>
<tr><td>Purpose</td><td>Tax identification</td><td>TDS/TCS deduction</td><td>GST compliance</td><td>Identity verification</td></tr>
<tr><td>Who Needs It</td><td>All taxpayers and entities</td><td>Persons deducting/collecting tax</td><td>Businesses with taxable supply</td><td>Indian residents</td></tr>
<tr><td>Validity</td><td>Lifetime</td><td>Lifetime</td><td>Active while business operates</td><td>Lifetime</td></tr>
<tr><td>Fee</td><td>Rs 107 / Rs 72 / Free</td><td>Rs 65</td><td>Free</td><td>Free</td></tr>

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
            <h2 class="section-title">Related Tax and Registration Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/tan-registration">TAN Registration</a></strong> - Tax Deduction Account Number for entities deducting TDS.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - PAN is a prerequisite for GST. GSTIN is derived from PAN.</li>
<li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - PAN allotted during SPICe+ incorporation.</li>
<li><strong><a href="/llp-incorporation">LLP Registration</a></strong> - PAN allotted during FiLLiP process.</li>
<li><strong><a href="/income-tax-return">Income Tax Return Filing</a></strong> - PAN mandatory for ITR filing.</li>
<li><strong><a href="/iec-registration">IEC Registration</a></strong> - PAN required for Import Export Code.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for PAN Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://incometaxindia.gov.in/pages/form-pan.aspx" target="_blank" rel="noopener">Income Tax Act, 1961</a>; Income Tax Rules, 1962.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 139A(1):</strong> Every person exceeding the exemption limit or carrying on business shall apply for PAN.</li>
<li><strong>Section 139A(5A):</strong> PAN mandatory for prescribed financial transactions (Rule 114B).</li>
<li><strong>Section 139AA:</strong> PAN-Aadhaar linking mandatory. Non-linking makes PAN inoperative.</li>
<li><strong>Section 272B:</strong> Penalty of Rs 10,000 per default for PAN non-compliance.</li>
<li><strong>Rule 114:</strong> Governs Form 49AA applications for foreign citizens/entities.</li>
<li><strong>Rule 114B:</strong> Lists high-value transactions requiring PAN - bank deposits above Rs 50,000, property above Rs 10 lakh, vehicle purchase, time deposits, foreign travel.</li>
</ul>
<p><strong>PAN-Aadhaar Linking:</strong> Unlinked PAN = inoperative. Cannot file ITR, higher TDS rates (Sec 206AA/206CC), refunds withheld. Reactivate by linking (Rs 1,000 late fee).</p>
<p><strong>Portals:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">Income Tax e-Filing</a> (instant e-PAN) | <a href="https://tinpan.proteantech.in/downloads/pan/download/Form_49A.PDF" target="_blank" rel="noopener">Form 49A (Protean)</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - PAN Registration</h2>
                    <p class="faq-expanded__lead">Answers about PAN fees, Form 49A vs 49AA, instant e-PAN, company PAN, Aadhaar linking, foreign citizen PAN, and duplicate PAN.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PAN Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does PAN registration cost?</h3>
                        <div class="faq-expanded__a"><p>Physical PAN card with e-PAN costs Rs 107 (inclusive of GST). e-PAN only without physical card costs Rs 72. Dispatch outside India adds Rs 910. Instant e-PAN via Aadhaar on the Income Tax portal (incometax.gov.in) is completely free. PAN correction or reprint costs the same: Rs 107 (physical) or Rs 72 (e-PAN only). Professional service charges from Patron Accounting are additional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Form 49A and Form 49AA?</h3>
                        <div class="faq-expanded__a"><p>Form 49A is for Indian citizens, HUFs, companies, LLPs, partnerships, trusts, and entities formed in India. Form 49AA is for foreign citizens, PIOs, OCIs, and foreign entities. Both are similar in structure but Form 49AA includes fields for country of citizenship and ISD code, and requires documents attested by Apostille (Hague Convention countries) or Indian Embassy.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to get instant e-PAN free of cost?</h3>
                        <div class="faq-expanded__a"><p>Individuals (non-minors) with valid Aadhaar linked to an active mobile can get instant e-PAN free at incometax.gov.in. Navigate to 'Instant e-PAN' under Quick Links. Enter Aadhaar, verify OTP, and e-PAN is allotted in real-time. The PDF is sent to your email. This facility is not available for entities (companies, LLPs, trusts).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">PAN card kaise banaye?</h3>
                        <div class="faq-expanded__a"><p>PAN card banane ke liye Protean (NSDL) ya UTIITSL ki website par jao. Form 49A select karo (Indian citizen ke liye). Naam, date of birth, address, Aadhaar number, aur source of income fill karo. Documents upload karo - Aadhaar, photo, signature. Rs 107 fee online pay karo. 15-20 din mein PAN card aa jayega. Aadhaar hai toh incometax.gov.in par instant e-PAN free mein mil jata hai. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PAN mandatory for companies and LLPs?</h3>
                        <div class="faq-expanded__a"><p>Yes. For new companies, PAN is allotted during SPICe+ incorporation on MCA portal. For LLPs, during the FiLLiP process. Older entities without PAN or trusts, societies, and partnerships need separate Form 49A applications. PAN is also required for GST registration - GSTIN is derived from PAN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if PAN is not linked with Aadhaar?</h3>
                        <div class="faq-expanded__a"><p>Unlinked PAN becomes inoperative under Section 139AA. Cannot file ITR, pending returns not processed, refunds withheld, TDS at higher rates under Sections 206AA and 206CC, and difficulties in financial transactions. PAN can be reactivated by completing Aadhaar linking (late fee of Rs 1,000 may apply).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Company ka PAN card kaise banta hai?</h3>
                        <div class="faq-expanded__a"><p>Company ka PAN card SPICe+ incorporation ke saath automatically allot hota hai MCA portal par. Agar company pehle se registered hai aur PAN nahi hai toh Form 49A se alag se apply karna padta hai. LLP ka PAN bhi FiLLiP form ke saath allot hota hai. Trust, society, aur partnership firm ko Form 49A se apply karna hota hai. Rs 107 fee lagti hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is it legal to have more than one PAN?</h3>
                        <div class="faq-expanded__a"><p>No. Having or using more than one PAN is illegal under the Income Tax Act. Each person or entity must have only one PAN. If you discover duplicate PANs, surrender the additional one immediately by filing a PAN correction/change request form. Using multiple PANs can attract a penalty of Rs 10,000 under Section 272B.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Does PAN expire?</strong> A: No. Once allotted, PAN is valid for a lifetime. No renewal required.</p>
<p><strong>Q: Can minors get PAN?</strong> A: Yes, through a representative assessee (parent/guardian). Instant e-PAN not available for minors.</p>
<p><strong>Q: What is the 4th character in PAN?</strong> A: Entity type: P (Individual), C (Company), H (HUF), A (AOP), T (Trust), F (Firm).</p>
<p><strong>Q: Is PAN required for GST?</strong> A: Yes. PAN is a prerequisite. The 15-digit GSTIN is derived from PAN.</p>
<p><strong>Q: How to check PAN status?</strong> A: Track using acknowledgement number on Protean or UTIITSL website. For verification, use the Income Tax e-filing portal.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN is Your Foundational Tax Identity - Get It Now</h2>
            <div class="content-text">
                
                <p>Without PAN, you cannot file income tax returns, open bank accounts, register for GST, purchase property above Rs 10 lakh, or enter into any high-value financial transaction. Section 272B imposes a penalty of Rs 10,000 per default for PAN non-compliance. An unlinked PAN becomes inoperative, blocking ITR filing and triggering higher TDS rates.</p>
<p>The government fee is just Rs 107. Instant e-PAN via Aadhaar is free. There is no reason to delay.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PAN%20Registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your PAN Card with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">PAN is the foundational tax identity for every individual and entity in India, mandated under Section 139A of the Income Tax Act, 1961. The 10-digit alphanumeric identifier is issued via Form 49A or 49AA through Protean or UTIITSL at Rs 107 (physical) or free (instant e-PAN via Aadhaar).</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">PAN is valid for a lifetime and is a prerequisite for GST registration, bank accounts, ITR filing, property transactions, and international trade.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles PAN for individuals, companies, LLPs, trusts, and foreign entities. 15+ years. 10,000+ businesses. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 1,999.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20PAN%20card.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PAN%20Registration&body=Hello%2C%0A%0AI%20need%20PAN%20registration.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PAN Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert PAN registration for individuals, companies, LLPs, trusts, and foreign entities with local CA support.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/pan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/pan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete tax and registration compliance</div><div class="pa-cross-grid"><a href="/tan-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the Income Tax Act 1961, Rules 1962, and current Protean/UTIITSL procedures. Next review: September 2026.</p>
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
