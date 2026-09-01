@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>DSC Registration Online - Class 3 Digital Signature India</title>
    <meta name="description" content="A Digital Signature Certificate (DSC) is issued under Section 35 of the IT Act, 2000 by licensed CAs. Starting at Rs 1,500. 1-2 day issuance with Patron Accounting.">
    <link rel="canonical" href="/dsc-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="DSC Registration Online - Class 3 Digital Signature India">
    <meta property="og:description" content="A Digital Signature Certificate (DSC) is issued under Section 35 of the IT Act, 2000 by licensed CAs. Starting at Rs 1,500. 1-2 day issuance with Patron Accounting.">
    <meta property="og:url" content="/dsc-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DSC Registration Online - Class 3 Digital Signature India">
    <meta name="twitter:description" content="A Digital Signature Certificate (DSC) is issued under Section 35 of the IT Act, 2000 by licensed CAs. Starting at Rs 1,500. 1-2 day issuance with Patron Accounting.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "DSC Registration in India: Online Process and Fees",
          "description": "A Digital Signature Certificate (DSC) is issued under Section 35 of the IT Act, 2000 by licensed CAs. Starting at Rs 1,500. 1-2 day issuance with Patron Accounting.",
          "url": "https://www.patronaccounting.com/dsc-registration",
          "serviceType": "DSC Registration in India: Online Process and Fees",
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
            "url": "https://www.patronaccounting.com/dsc-registration",
            "price": "1499"
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
              "name": "DSC Registration in India: Online Process and Fees",
              "item": "https://www.patronaccounting.com/dsc-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a Digital Signature Certificate (DSC)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Digital Signature Certificate is a secure electronic credential issued by a licensed Certifying Authority under Section 35 of the Information Technology Act, 2000. It verifies the identity of the certificate holder and enables legally valid signing of electronic documents using PKI technology with asymmetric cryptography as defined in Section 3."
              }
            },
            {
              "@type": "Question",
              "name": "How much does a Digital Signature Certificate cost in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Class 3 DSC for signing purposes typically costs between Rs 800 and Rs 2,500 depending on the Certifying Authority and validity period (1 to 3 years). The USB token is an additional one-time cost of Rs 300 to Rs 500. Sign and Encrypt DSCs and Organisation DSCs cost more. Professional service fees for application assistance are separate."
              }
            },
            {
              "@type": "Question",
              "name": "DSC kaise banaye - digital signature ka online process kya hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Digital signature ke liye kisi bhi CCA-licensed Certifying Authority ki website par jaake Class 3 DSC ke liye apply karo. Aadhaar eKYC se verification 1 din mein ho jata hai. PAN card, Aadhaar, photo chahiye. Patron Accounting complete assistance deta hai - call karo +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Is DSC mandatory for company registration in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Every proposed director of a company must have a valid Class 3 DSC to file incorporation forms (SPICe+, INC-32) on the MCA portal under the Companies Act, 2013. Similarly, LLP designated partners need DSC for LLP incorporation forms. Without a valid DSC, the MCA portal will not accept the filing."
              }
            },
            {
              "@type": "Question",
              "name": "What is the validity of a Digital Signature Certificate?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DSCs are typically issued with validity of 1 year, 2 years, or 3 years. After expiry, the DSC must be renewed through the same or a different Certifying Authority. Renewal can be initiated within 7 days before expiry. An expired DSC cannot be used for statutory filings."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Class 2 and Class 3 DSC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Class 2 DSC required identity verification against a pre-verified database, while Class 3 DSC requires in-person or video-based identity verification - the highest security level. Since 1 January 2021, the CCA discontinued Class 2 certificates, and Class 3 DSC is now mandatory for all government filings including MCA, GST, Income Tax, and e-Tendering."
              }
            },
            {
              "@type": "Question",
              "name": "Digital signature kiske liye zaroori hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company directors, LLP partners, CAs filing audit reports, CS professionals, income tax audit cases mein ITR file karne wale, GST registration, e-tendering mein participate karne wale - sabko DSC chahiye. Foreign directors ko bhi DSC chahiye MCA filings ke liye."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use one DSC for multiple government portals?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A single Class 3 DSC can be registered and used across multiple government portals including MCA, Income Tax, GST, EPFO, DGFT, and e-Tendering platforms. However, the DSC must be separately registered on each portal. For e-Tendering, a Sign and Encrypt type DSC may be required instead of Sign only. Quick Answers Q: Who issues DSC in India? A: Licensed Certifying Authorities (CAs) regulated by the Controller of Certifying Authorities (CCA) under Section 24 of the IT Act, 2000. Q: How many CAs are licensed? A: Approximately 15 CAs are licensed by CCA as of 2026, including eMudhra, (n)Code Solutions, Capricorn, VSign, XtraTrust, and Sify Technologies. Q: What is eSign? A: An Aadhaar-based online electronic signature service for paperless signing, facilitated by empanelled eSign Service Providers under CCA. Q: What penalty for DSC misuse? A: Under Sections 71, 73, and 74 of the IT Act - imprisonment up to 2 years or fine up to Rs 1,00,000 or both. Q: Can a foreign national get DSC? A: Yes. Foreign nationals and NRIs can obtain a DSC with a valid passport and address proof attested by an Indian Embassy or Notary."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
@endpush
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
                        Digital Signature Certificate (DSC) Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN Card, Aadhaar Card, and passport-sized photo - Aadhaar eKYC enables paperless processing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 1,499 inclusive of CA charges and USB token. Class 3 DSC for all government portals.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 1-2 working days for standard processing. Same-day processing available for urgent requirements.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Individuals, company directors, LLP partners, CAs, CS professionals, and any person filing on government portals.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served with DSC registration support. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20DSC%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20DSC.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Digital%20Signature%20Certificate%20(DSC).%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'DSC Registration',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is DSC</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Pro</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Digital Signature Certificate - Everything You Need to Know in 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - DSC Registration Services at a Glance</strong></p>
                    <p>A Digital Signature Certificate (DSC) is an electronic credential issued by a licensed Certifying Authority (CA) under Section 35 of the Information Technology Act, 2000. It authenticates the identity of the signer for filings on MCA, GST, Income Tax, and e-Tendering portals. Class 3 DSC is now mandatory for all government filings since January 2021. Validity ranges from 1 to 3 years. Patron Accounting assists with end-to-end DSC registration in 1-2 working days.</p>
                </div>
                <p>Every company director, LLP designated partner, and practising professional filing documents on the MCA, GST, or Income Tax portals requires a valid DSC. The Controller of Certifying Authorities (CCA), operating under the Ministry of Electronics and Information Technology (MeitY), licenses Certifying Authorities to issue these certificates across India.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Information Technology Act, 2000 (Section 3, 5, 35)</td></tr>
<tr><td>Applicable To</td><td>Directors, LLP Partners, CAs, CS, individuals filing on govt portals</td></tr>
<tr><td>Timeline</td><td>1-2 working days (same-day with Aadhaar eKYC)</td></tr>
<tr><td>Cost</td><td>Starting from Rs 1,499 (CA fee + USB token)</td></tr>
<tr><td>Penalty (Misuse)</td><td>Up to 2 years imprisonment or Rs 1,00,000 fine under Section 71/73/74</td></tr>
<tr><td>Regulatory Authority</td><td>Controller of Certifying Authorities (CCA), MeitY</td></tr>
<tr><td>Key Portal</td><td><a href="https://cca.gov.in" target="_blank" rel="noopener">https://cca.gov.in</a></td></tr>
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
                <h2 class="section-title">What Is a Digital Signature Certificate (DSC)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Digital Signature Certificate (DSC) is a secure electronic key issued by a licensed Certifying Authority under <strong>Section 35 of the Information Technology Act, 2000</strong>, to authenticate the identity of the certificate holder for signing electronic documents.</p>
<p>DSCs use public key infrastructure (PKI) technology based on asymmetric cryptography as defined in Section 3 of the IT Act. The certificate binds a public key to the subscriber's identity, enabling recipients to verify that the signed document has not been altered. <strong>Section 5 of the IT Act</strong> grants legal recognition to digital signatures, making them equivalent to handwritten signatures for all purposes except those listed in the First Schedule (negotiable instruments, power of attorney, trusts, and wills).</p>
<p>The <a href="https://cca.gov.in" target="_blank" rel="noopener">CCA</a>, established under Section 17 of the IT Act, supervises licensed CAs and maintains the National Repository of Digital Certificates (NRDC). As of 2026, there are approximately 15 licensed Certifying Authorities in India, including eMudhra, (n)Code Solutions, Capricorn Identity Services, VSign, XtraTrust, and Sify Technologies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for DSC Registration:</strong></p>
                    <p><strong>Digital Signature Certificate (DSC):</strong> An electronic credential issued by a licensed CA under Section 35, IT Act, 2000, binding a public key to the subscriber's verified identity.</p>
<p><strong>Certifying Authority (CA):</strong> A person or entity granted a license under Section 24, IT Act, 2000, to issue digital signature certificates to subscribers.</p>
<p><strong>Controller of Certifying Authorities (CCA):</strong> Government-appointed authority under Section 17, IT Act, 2000, that licenses and regulates CAs and maintains the Root Certifying Authority of India (RCAI).</p>
<p><strong>Class 3 DSC:</strong> The highest level of digital signature certificate requiring in-person or video-based identity verification, mandatory for MCA, GST, Income Tax, and e-Tendering filings since January 2021.</p>
<p><strong>eSign:</strong> An Aadhaar-based online electronic signature service enabling paperless signing without a physical USB token, facilitated by empanelled eSign Service Providers under CCA.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Digital Signature Certificate -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Digital Signature Certificate</text>
                            <!-- Certificate body -->
                            <rect x="50" y="50" width="100" height="70" rx="4" fill="#fff" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="60" y1="62" x2="140" y2="62" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="60" y1="74" x2="130" y2="74" stroke="#14365F" stroke-width="1" opacity="0.2" stroke-linecap="round"/>
                            <line x1="60" y1="84" x2="120" y2="84" stroke="#14365F" stroke-width="1" opacity="0.2" stroke-linecap="round"/>
                            <line x1="60" y1="94" x2="135" y2="94" stroke="#14365F" stroke-width="1" opacity="0.2" stroke-linecap="round"/>
                            <!-- Seal -->
                            <circle cx="120" cy="108" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="120" y="112" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">CA</text>
                            <!-- USB Token -->
                            <rect x="35" y="65" width="16" height="30" rx="3" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="38" y="70" width="10" height="12" rx="1" fill="#F5A623" opacity="0.5"/>
                            <rect x="40" y="85" width="6" height="3" rx="1" fill="#14365F" opacity="0.3"/>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DSC Registration</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DSC Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT Act, 2000</span>
                        <strong>Class 3 DSC - All Portals</strong>
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
            <h2 class="section-title">Who Needs a Digital Signature Certificate in India?</h2>
            <div class="content-text">
                
                <p>A DSC is mandatory for any person required to sign electronic documents on Indian government portals:</p>
<ul>
<li><strong>Company Directors:</strong> Every director must have a Class 3 DSC to sign and file e-forms on the MCA portal under the Companies Act, 2013.</li>
<li><strong>LLP Designated Partners:</strong> Partners signing LLP forms on MCA require a DSC under the Limited Liability Partnership Act, 2008.</li>
<li><strong>Chartered Accountants and Company Secretaries:</strong> Practising professionals certifying statutory forms (audit reports, annual returns, tax returns) need a DSC.</li>
<li><strong>Income Tax Assessees:</strong> Companies and individuals whose accounts are required to be audited must file ITR using DSC under Section 140 of the Income Tax Act, 1961.</li>
<li><strong>GST Registrants:</strong> Certain GST filings and registrations require DSC-based authentication.</li>
<li><strong>E-Tendering Participants:</strong> Businesses bidding on government tenders through GeM, CPPP, or state e-procurement portals require a Class 3 Sign and Encrypt DSC.</li>
<li><strong>Exporters and Importers:</strong> IEC holders filing on the DGFT-ICEGATE portal need a DGFT-specific DSC.</li>
<li><strong>EPFO Employers:</strong> Employers filing EPF returns on the EPFO portal require a DSC for authentication.</li>
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
            <h2 class="section-title">6 DSC Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>New DSC Application</td><td>End-to-end assistance for Class 3 DSC through a licensed Certifying Authority - document preparation, Aadhaar eKYC, and video verification.</td></tr>
<tr><td>DSC Renewal</td><td>Timely renewal of expiring DSCs to avoid disruption in statutory filings. Renewal must be completed before expiry and in the same name.</td></tr>
<tr><td>DSC for Organisations</td><td>Organisation-level DSC procurement for companies and LLPs with multiple directors or partners requiring simultaneous issuance.</td></tr>
<tr><td>DGFT DSC</td><td>Specialised DSC for import-export code holders filing on the ICEGATE portal with DGFT-compatible certificates.</td></tr>
<tr><td>DSC Registration on Portals</td><td>Registering the issued DSC on MCA V3, Income Tax e-filing portal, GST portal, EPFO, and other government platforms.</td></tr>
<tr><td>USB Token Support</td><td>Assistance with USB token installation, driver setup, emsigner utility configuration, and troubleshooting across Windows and Mac systems.</td></tr>

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
            <h2 class="section-title">6-Step Process to Obtain a Digital Signature Certificate</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through each step - from DSC type selection to portal registration. Most applications are completed in 1-2 working days.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Select DSC Type and Validity</h3><p class="step-description">Choose Class 3 DSC (mandatory since January 2021 per CCA directive). Select between Sign only or Sign and Encrypt based on usage. Pick validity period - 1, 2, or 3 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Class 3 mandatory</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sign or Sign+Encrypt</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Class 3 DSC</text><rect x="25" y="40" width="32" height="8" rx="2" fill="#14365F" opacity="0.15"/><text x="41" y="46" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Sign</text><rect x="63" y="40" width="32" height="8" rx="2" fill="#F5A623" opacity="0.3"/><text x="79" y="46" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Encrypt</text><rect x="25" y="55" width="20" height="8" rx="2" fill="#14365F" opacity="0.1"/><text x="35" y="61" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">1yr</text><rect x="50" y="55" width="20" height="8" rx="2" fill="#14365F" opacity="0.1"/><text x="60" y="61" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">2yr</text><rect x="75" y="55" width="20" height="8" rx="2" fill="#F5A623" opacity="0.4"/><text x="85" y="61" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">3yr</text></svg></div><span class="illustration-label">Type Selected</span><span class="step-number-large">01</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Choose a Licensed Certifying Authority</h3><p class="step-description">Select a CA licensed by CCA under Section 24 of the IT Act, 2000. The list of licensed CAs is available at cca.gov.in. Patron Accounting partners with CCA-licensed CAs for faster processing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CCA-licensed CA</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pre-vetted partner</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="37" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CCA</text><text x="60" y="47" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Licensed</text><path d="M48 65l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">CA Selected</span><span class="step-number-large">02</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Fill Application and Complete eKYC</h3><p class="step-description">Provide applicant details and PAN number. Verify identity through Aadhaar eKYC (paperless), PAN-based video call, or physical document submission. Phone and email OTP verification is mandatory.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar eKYC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Video verification</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="58" x2="75" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">eKYC Done</span><span class="step-number-large">03</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Make Payment and Submit</h3><p class="step-description">Pay the DSC issuance fee online (net banking, UPI, credit/debit card). CA fees vary but typically range from Rs 800 to Rs 2,500 depending on validity and type. USB token cost (Rs 300-Rs 500) is additional.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Online payment</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application submitted</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 1,499</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="60" y="55" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Rs</text></svg></div><span class="illustration-label">Payment Done</span><span class="step-number-large">04</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive DSC on USB Token</h3><p class="step-description">Upon verification, the CA issues the DSC electronically. An encrypted USB token containing the certificate is delivered to the applicant's address. Install token drivers for use.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Token delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Drivers installed</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="40" y="25" width="40" height="25" rx="4" fill="#14365F" opacity="0.1"/><rect x="44" y="29" width="12" height="17" rx="2" fill="#F5A623" opacity="0.6"/><rect x="60" y="29" width="16" height="8" rx="1" fill="#14365F" opacity="0.2"/><rect x="60" y="40" width="12" height="5" rx="1" fill="#14365F" opacity="0.2"/><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">USB Token</text></svg></div><span class="illustration-label">DSC Received</span><span class="step-number-large">05</span></div></div>
</div>

<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Register DSC on Government Portals</h3><p class="step-description">Register the issued DSC on MCA V3, Income Tax e-filing portal, GST portal, EPFO, and other required platforms using the emsigner utility. Patron Accounting handles all portal registrations as part of the service.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MCA, IT, GST portals</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> emsigner configured</span></div></div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="24" r="2" fill="#FF5F56"/><circle cx="31" cy="24" r="2" fill="#FFBD2E"/><circle cx="37" cy="24" r="2" fill="#27C93F"/><rect x="25" y="35" width="25" height="6" rx="2" fill="#F5A623" opacity="0.5"/><text x="37" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MCA</text><rect x="55" y="35" width="20" height="6" rx="2" fill="#F5A623" opacity="0.5"/><text x="65" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">IT</text><rect x="80" y="35" width="20" height="6" rx="2" fill="#F5A623" opacity="0.5"/><text x="90" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GST</text><rect x="60" y="52" width="28" height="12" rx="3" fill="#25D366"/><text x="74" y="61" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">DONE</text></svg></div><span class="illustration-label">All Registered</span><span class="step-number-large">06</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for DSC Registration</h2>
            <div class="content-text">
                
                <p><strong>For Indian Individuals:</strong></p>
<ul>
<li>PAN Card (mandatory for all DSC applications in India)</li>
<li>Aadhaar Card (for eKYC-based verification - paperless process)</li>
<li>Passport-sized photograph (recent)</li>
<li>Mobile number linked to Aadhaar (for OTP verification)</li>
<li>Valid email address (for OTP verification)</li>
</ul>
<p><strong>For Organisations:</strong></p>
<ul>
<li>All individual documents of the authorised signatory listed above</li>
<li>Certificate of Incorporation or LLP Registration Certificate</li>
<li>GST Registration Certificate (if applicable)</li>
<li>Authorisation letter on company letterhead</li>
</ul>
<p><strong>For Foreign Nationals / NRIs:</strong></p>
<ul>
<li>Valid Passport</li>
<li>Address proof (utility bill or bank statement from country of residence)</li>
<li>Attestation by Indian Embassy or Notary in the country of residence</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common DSC Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Video Verification Failure During eKYC</td><td>Unstable internet, poor lighting, or missing original documents cause verification failures</td><td>Our team guides you through the video verification call in real time, ensuring all requirements are met on the first attempt.</td></tr>
<tr><td>USB Token Driver Compatibility</td><td>Token drivers may not be compatible with the latest OS versions, causing installation failures</td><td>Remote support for driver installation on Windows, Mac, and Linux systems with latest CA-specific drivers.</td></tr>
<tr><td>DSC Not Recognised on MCA V3 or IT Portal</td><td>DSC must be separately registered on each portal - many users miss this step</td><td>Patron Accounting handles portal registration on MCA, Income Tax, GST, and all required platforms as part of the service.</td></tr>
<tr><td>DSC Expired During Critical Filing Deadline</td><td>Expired DSC blocks all statutory filings, causing missed deadlines and penalties</td><td>We track expiry dates and initiate renewal proactively 30 days before expiry for all clients.</td></tr>

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
            <h2 class="section-title">DSC Registration Fees and Charges in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Class 3 - Sign Only (1 Year)</td><td class="table-amount">Rs 800 - Rs 1,200</td></tr>
<tr><td>Class 3 - Sign Only (2 Years)</td><td class="table-amount">Rs 1,200 - Rs 1,800</td></tr>
<tr><td>Class 3 - Sign Only (3 Years)</td><td class="table-amount">Rs 1,800 - Rs 2,800</td></tr>
<tr><td>Class 3 - Sign and Encrypt (2 Years)</td><td class="table-amount">Rs 1,500 - Rs 2,500</td></tr>
<tr><td>Class 3 - Sign and Encrypt (3 Years)</td><td class="table-amount">Rs 2,200 - Rs 3,500</td></tr>
<tr><td>DGFT DSC (2 Years)</td><td class="table-amount">Rs 1,500 - Rs 2,500</td></tr>
<tr><td>Organisation DSC (2 Years)</td><td class="table-amount">Rs 3,000 - Rs 4,500</td></tr>
<tr><td>USB Token (one-time)</td><td class="table-amount">Rs 300 - Rs 500</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free DSC Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20DSC%20registration.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for DSC Issuance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar eKYC-based Verification</td><td>Same day to 1 working day</td></tr>
<tr><td>PAN-based Video Verification</td><td>1-2 working days</td></tr>
<tr><td>Physical Document-based Verification</td><td>3-7 working days</td></tr>
<tr><td>DSC Renewal (before expiry)</td><td>1 working day</td></tr>
<tr><td>USB Token Delivery (courier)</td><td>2-3 working days after issuance</td></tr>
<tr><td>Portal Registration (MCA, IT, GST)</td><td>Same day after DSC receipt</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast Track:</strong> Patron Accounting's partnership with CCA-licensed CAs enables same-day processing for urgent requirements. For standard applications with Aadhaar eKYC, the entire process from application to portal registration can be completed within 1-2 working days.</p>

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
            <h2 class="section-title">Benefits of Professional DSC Registration Assistance</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Correct DSC Type Selection</h3><p class="feature-text">Avoid re-application by selecting the right class (Sign only vs Sign and Encrypt) and validity period for your specific filing needs.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Error-Free Application</h3><p class="feature-text">Name mismatches between PAN and DSC are a common rejection reason. Professional assistance ensures PAN name and DSC applicant name match exactly.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Portal Registration Support</h3><p class="feature-text">A DSC must be separately registered on each portal (MCA, Income Tax, GST). Our team completes all portal registrations as part of the service.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Renewal Tracking</h3><p class="feature-text">Expired DSCs block statutory filings. We maintain a renewal calendar and initiate renewal 30 days before expiry for all clients.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Same-Day Processing</h3><p class="feature-text">Partnership with CCA-licensed CAs enables same-day DSC issuance for urgent requirements. Standard Aadhaar eKYC applications complete in 1 working day.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Technical Troubleshooting</h3><p class="feature-text">USB token driver issues, emsigner errors, and browser compatibility problems resolved through dedicated remote support for Windows, Mac, and Linux.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting for DSC</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> with DSC registration, renewal, and portal management across India.</p>
<p><strong>4.9 Google Rating</strong> based on verified client reviews for registration and compliance services.</p>
<p><strong>50,000+ Documents Filed</strong> on MCA, Income Tax, GST, and other government portals using DSCs managed by Patron Accounting.</p>
<p><strong>15+ Years of Practice</strong> - one of India's most experienced CA firms for digital signature and statutory compliance services.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram - serving businesses across India both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DSC Registration - DIY vs Professional Assistance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY (Self-Application)</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Time Required</td><td>3-7 days (including troubleshooting)</td><td>1-2 working days</td></tr>
<tr><td>CA Selection</td><td>Research required among 15+ CAs</td><td>Pre-vetted CA partnerships for faster processing</td></tr>
<tr><td>eKYC Guidance</td><td>Self-managed video verification</td><td>Guided video call support in real time</td></tr>
<tr><td>Portal Registration</td><td>Manual on each portal separately</td><td>All portals registered by our team</td></tr>
<tr><td>Token Installation</td><td>Self-install drivers (troubleshooting common)</td><td>Remote setup assistance included</td></tr>
<tr><td>Renewal Tracking</td><td>Manual calendar management</td><td>Automated expiry alerts 30 days before</td></tr>
<tr><td>Cost</td><td>CA fee only (Rs 800 - Rs 2,500)</td><td>Rs 1,499 service fee + CA charges</td></tr>
<tr><td>Error Resolution</td><td>Re-application if name mismatch</td><td>Pre-verified application - first-time success</td></tr>

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
            <h2 class="section-title">Related Registration Services</h2>
            <div class="content-text">
                
                <p>If you are obtaining a DSC for a specific filing, Patron Accounting also offers end-to-end support for:</p>
<ul>
<li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - Complete incorporation on MCA portal requiring director DSC for SPICe+ filing.</li>
<li><strong><a href="/llp-incorporation">LLP Registration in India</a></strong> - LLP incorporation requiring designated partner DSC for FiLLiP form filing.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - GST registration and filing requiring DSC-based authentication for companies and LLPs.</li>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - IP registration on the Trademarks Registry portal.</li>
<li><strong><a href="/iec-registration">IEC Registration</a></strong> - Import Export Code registration on DGFT portal requiring DGFT-specific DSC.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for DSC in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> <a href="https://www.indiacode.nic.in/bitstream/123456789/13116/1/it_act_2000_updated.pdf" target="_blank" rel="noopener">Information Technology Act, 2000</a></p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong>Section 2(1)(p):</strong> Defines 'Digital Signature' as authentication of electronic records per Section 3.</li>
<li><strong>Section 3:</strong> Prescribes authentication using asymmetric cryptosystem and hash function.</li>
<li><strong>Section 3A (Amendment 2008):</strong> Recognises Electronic Signatures including Aadhaar-based eSign.</li>
<li><strong>Section 5:</strong> Grants legal recognition to digital signatures equivalent to handwritten signatures.</li>
<li><strong>Section 17-20:</strong> Establishes the <a href="https://cca.gov.in" target="_blank" rel="noopener">Controller of Certifying Authorities (CCA)</a> and defines powers.</li>
<li><strong>Section 24:</strong> Governs the licensing of Certifying Authorities by CCA.</li>
<li><strong>Section 35:</strong> Governs issuance of DSC by CAs; application fee not exceeding Rs 25,000 per Section 35(2).</li>
<li><strong>Section 37:</strong> Suspension of DSC - not more than 15 days without opportunity to be heard.</li>
<li><strong>Section 38:</strong> Revocation of DSC - on death, request, dissolution, or material misrepresentation.</li>
</ul>
<p><strong>Penalty Provisions:</strong></p>
<ul>
<li><strong>Section 71:</strong> Misrepresentation to obtain DSC - imprisonment up to 2 years or fine up to Rs 1,00,000 or both.</li>
<li><strong>Section 73:</strong> Publishing false DSC - imprisonment up to 2 years or fine up to Rs 1,00,000 or both.</li>
<li><strong>Section 74:</strong> Creating or publishing DSC for fraudulent purpose - imprisonment up to 2 years or fine up to Rs 1,00,000 or both.</li>
</ul>
<p><strong>Regulatory Authority:</strong> Controller of Certifying Authorities (CCA), Ministry of Electronics and Information Technology (MeitY). Website: <a href="https://cca.gov.in" target="_blank" rel="noopener">https://cca.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Digital Signature Certificate</h2>
                    <p class="faq-expanded__lead">Answers about DSC types, costs, validity, application process, and portal registration for directors, partners, and professionals.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'DSC Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a Digital Signature Certificate (DSC)?</h3>
                        <div class="faq-expanded__a"><p>A Digital Signature Certificate is a secure electronic credential issued by a licensed Certifying Authority under Section 35 of the Information Technology Act, 2000. It verifies the identity of the certificate holder and enables legally valid signing of electronic documents using PKI technology with asymmetric cryptography as defined in Section 3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does a Digital Signature Certificate cost in India?</h3>
                        <div class="faq-expanded__a"><p>A Class 3 DSC for signing purposes typically costs between Rs 800 and Rs 2,500 depending on the Certifying Authority and validity period (1 to 3 years). The USB token is an additional one-time cost of Rs 300 to Rs 500. Sign and Encrypt DSCs and Organisation DSCs cost more. Professional service fees for application assistance are separate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">DSC kaise banaye - digital signature ka online process kya hai?</h3>
                        <div class="faq-expanded__a"><p>Digital signature ke liye kisi bhi CCA-licensed Certifying Authority ki website par jaake Class 3 DSC ke liye apply karo. Aadhaar eKYC se verification 1 din mein ho jata hai. PAN card, Aadhaar, photo chahiye. Patron Accounting complete assistance deta hai - call karo +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is DSC mandatory for company registration in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every proposed director of a company must have a valid Class 3 DSC to file incorporation forms (SPICe+, INC-32) on the MCA portal under the Companies Act, 2013. Similarly, LLP designated partners need DSC for LLP incorporation forms. Without a valid DSC, the MCA portal will not accept the filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the validity of a Digital Signature Certificate?</h3>
                        <div class="faq-expanded__a"><p>DSCs are typically issued with validity of 1 year, 2 years, or 3 years. After expiry, the DSC must be renewed through the same or a different Certifying Authority. Renewal can be initiated within 7 days before expiry. An expired DSC cannot be used for statutory filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between Class 2 and Class 3 DSC?</h3>
                        <div class="faq-expanded__a"><p>Class 2 DSC required identity verification against a pre-verified database, while Class 3 DSC requires in-person or video-based identity verification - the highest security level. Since 1 January 2021, the CCA discontinued Class 2 certificates, and Class 3 DSC is now mandatory for all government filings including MCA, GST, Income Tax, and e-Tendering.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Digital signature kiske liye zaroori hai?</h3>
                        <div class="faq-expanded__a"><p>Company directors, LLP partners, CAs filing audit reports, CS professionals, income tax audit cases mein ITR file karne wale, GST registration, e-tendering mein participate karne wale - sabko DSC chahiye. Foreign directors ko bhi DSC chahiye MCA filings ke liye.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I use one DSC for multiple government portals?</h3>
                        <div class="faq-expanded__a"><p>Yes. A single Class 3 DSC can be registered and used across multiple government portals including MCA, Income Tax, GST, EPFO, DGFT, and e-Tendering platforms. However, the DSC must be separately registered on each portal. For e-Tendering, a Sign and Encrypt type DSC may be required instead of Sign only.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Who issues DSC in India?</strong> A: Licensed Certifying Authorities (CAs) regulated by the Controller of Certifying Authorities (CCA) under Section 24 of the IT Act, 2000.</p>
<p><strong>Q: How many CAs are licensed?</strong> A: Approximately 15 CAs are licensed by CCA as of 2026, including eMudhra, (n)Code Solutions, Capricorn, VSign, XtraTrust, and Sify Technologies.</p>
<p><strong>Q: What is eSign?</strong> A: An Aadhaar-based online electronic signature service for paperless signing, facilitated by empanelled eSign Service Providers under CCA.</p>
<p><strong>Q: What penalty for DSC misuse?</strong> A: Under Sections 71, 73, and 74 of the IT Act - imprisonment up to 2 years or fine up to Rs 1,00,000 or both.</p>
<p><strong>Q: Can a foreign national get DSC?</strong> A: Yes. Foreign nationals and NRIs can obtain a DSC with a valid passport and address proof attested by an Indian Embassy or Notary.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">An Expired DSC Blocks All Statutory Filings - Renew Today</h2>
            <div class="content-text">
                
                <p>An expired DSC immediately blocks all statutory filings on MCA, Income Tax, GST, and e-Tendering portals. If a DSC expires during the annual return filing window (September-November for companies), the director risks delayed filing penalties under the Companies Act, 2013 and the Income Tax Act, 1961.</p>
<p>E-Tendering participants with expired DSCs lose the ability to submit bids, potentially losing government contracts. Proactive renewal - initiated at least 30 days before expiry - eliminates this compliance risk entirely.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DSC%20registration%20or%20renewal.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for same-day DSC issuance.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Digital Signature Certificate Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">A Digital Signature Certificate is a foundational compliance requirement for every business and professional conducting statutory filings in India. Governed by the Information Technology Act, 2000, and regulated by the CCA under MeitY, the DSC ensures authentication, data integrity, and legal validity for electronic transactions.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">With Class 3 DSC now mandatory for all government portals since January 2021, obtaining and maintaining an active DSC is not optional - it is a statutory necessity. Patron Accounting's CA and CS team assists with DSC application, portal registration, renewal tracking, and troubleshooting.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">With offices in Pune, Mumbai, Delhi, and Gurugram, and 15+ years of practice serving 10,000+ businesses, we deliver reliable, same-day DSC registration support across India. Starting from Rs 1,499.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20DSC%20registration.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20DSC%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20Digital%20Signature%20Certificate.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">DSC Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your Digital Signature Certificate with local support. Click your city for details.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/dsc-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/dsc-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/dsc-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/dsc-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for DSC and company compliance</div>
    <div class="pa-cross-grid">
        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/director-kyc" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the Information Technology Act, 2000, CCA guidelines, and current Certifying Authority fee schedules. Next review: September 2026.</p>
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
