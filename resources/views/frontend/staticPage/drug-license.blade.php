@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Drug License in India - Types, Process & CDSCO Application</title>
    <meta name="description" content="Apply for drug license under the Drugs and Cosmetics Act, 1940. Retail (Form 20/21), Wholesale (Form 20B/21B), Manufacturing. Fees from Rs 1,500. Valid perpetually.">
    <link rel="canonical" href="#">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Drug License in India - Types, Process & CDSCO Application">
    <meta property="og:description" content="Apply for drug license under the Drugs and Cosmetics Act, 1940. Retail (Form 20/21), Wholesale (Form 20B/21B), Manufacturing. Fees from Rs 1,500. Valid perpetually.">
    <meta property="og:url" content="/drug-license">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Drug License in India - Types, Process & CDSCO Application">
    <meta name="twitter:description" content="Apply for drug license under the Drugs and Cosmetics Act, 1940. Retail (Form 20/21), Wholesale (Form 20B/21B), Manufacturing. Fees from Rs 1,500. Valid perpetually.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Drug License in India: Types, Process, Fees and Forms",
          "description": "Apply for drug license under the Drugs and Cosmetics Act, 1940. Retail (Form 20/21), Wholesale (Form 20B/21B), Manufacturing. Fees from Rs 1,500. Valid perpetually.",
          "url": "https://www.patronaccounting.com/drug-license",
          "serviceType": "Drug License in India: Types, Process, Fees and Forms",
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
            "url": "https://www.patronaccounting.com/drug-license",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "1500",
              "maxPrice": "6000",
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
              "name": "Drug License in India: Types, Process, Fees and Forms",
              "item": "https://www.patronaccounting.com/drug-license"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a drug license in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A drug license is a legal authorisation under the Drugs and Cosmetics Act, 1940 permitting manufacture, sale, stocking, or distribution of pharmaceutical products. Issued by the State Drug Licensing Authority (retail/wholesale) or CDSCO (manufacturing/imports). Different forms apply: Form 20/21 retail, Form 20B/21B wholesale. Operating without one is a criminal offence under Section 27."
              }
            },
            {
              "@type": "Question",
              "name": "What are the types of drug license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Main types: (1) Retail - Form 20 (general) + Form 21 (Schedule C/C1), (2) Wholesale - Form 20B + Form 21B, (3) Manufacturing - CDSCO, (4) Import License, (5) Schedule X - Form 20F retail and Form 20G wholesale for narcotic/psychotropic substances, (6) Homeopathic - Form 20C retail and Form 20D wholesale."
              }
            },
            {
              "@type": "Question",
              "name": "How much does a drug license cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fees vary by state. Retail Form 20/21: Rs 1,500-3,000. Wholesale Form 20B/21B: Rs 3,000-6,000. Homeopathic Form 20C: Rs 250-500. Schedule X: Rs 600-2,400 additional. Manufacturing: Rs 5,000-25,000+. Professional fees from Patron Accounting start at Rs 4,999."
              }
            },
            {
              "@type": "Question",
              "name": "Drug license kaise banaye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Drug license banane ke liye: (1) Business type decide karein (retail/wholesale/manufacturing), (2) Premises arrange karein (min 10 sq.m retail, 15 sq.m wholesale), (3) Registered pharmacist ya competent person appoint karein, (4) State Drug Control Department ke portal par Form 19 submit karein, (5) Drug Inspector inspection karega, (6) License milega Form 20/21/20B/21B mein. License perpetual hai - har 5 saal retention fee deni hoti hai. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What is the validity of a drug license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under amended Rule 63 (G.S.R. 1337(E)), drug licences are now perpetual - valid unless suspended or cancelled. A retention fee equal to the original grant fee must be paid every 5 years from the date of issue. Compliance is assessed through inspections not less than once in 3 years or based on a risk-based approach."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Form 20 and Form 20B?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 20 is the retail drug licence for sale of general allopathic drugs directly to consumers through a pharmacy. A registered pharmacist must be present. Form 20B is the wholesale licence for distribution to retailers, hospitals, and stockists. A competent person with pharmacy qualifications is required. Both are applied for using Form 19."
              }
            },
            {
              "@type": "Question",
              "name": "Dawa ki dukan ka license kaise le?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Dawa ki dukan (medical store) ke liye Form 20 aur Form 21 chahiye. Minimum 10 sq.m area honi chahiye. Registered pharmacist appoint karo. State Drug Control Department ke portal par Form 19 submit karo. Drug Inspector premises check karega. Fees Rs 1,500 se Rs 3,000 tak hoti hai. License perpetual hai par 5 saal mein retention fee deni padti hai. Patron Accounting poora process handle karta hai."
              }
            },
            {
              "@type": "Question",
              "name": "Is a pharmacist mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For retail: a registered pharmacist must be present during all business hours - this is non-negotiable. For wholesale: a competent person is required (pharmacy graduate with 1 year experience, or pharmacy undergraduate with 4 years experience). Manufacturing requires approved technical staff with GMP compliance. Quick Answers Q: Can I sell medicines without a drug license? A: No. Section 18 prohibits it. Penalty under Section 27: up to 3 years imprisonment + Rs 1 lakh fine. Q: Separate licences for retail and wholesale? A: Yes. Form 20/21 (retail) and Form 20B/21B (wholesale) are separate licences with separate fees. Q: Can I sell ayurvedic with allopathic licence? A: No. AYUSH drugs require separate licences under the AYUSH department. Q: Is inspection mandatory? A: Yes. Drug Inspector inspects before licence grant and periodically (at least once in 3 years)."
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
                        Drug License in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> Retail (Form 20/21), Wholesale (Form 20B/21B), and Manufacturing drug licenses under the Drugs & Cosmetics Act, 1940.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fees:</span> From Rs 1,500 (Retail) to Rs 6,000+ (Wholesale/Manufacturing). Varies by state and licence type.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity:</span> Perpetual under amended Rule 63 - subject to licence retention fee every 5 years. No more 5-year expiry.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Authorities:</span> State Drug Licensing Authority (retail/wholesale) + CDSCO (manufacturing/imports). Dual regulatory system.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Drug%20License%20Enquiry&body=Hello%2C%0A%0AI%20need%20drug%20license%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Drug%20License.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Drug License',
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Retail vs Wholesale vs Mfg</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Drug License in India - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Drug License Services at a Glance</strong></p>
                    <p>A drug license is mandatory for any person or entity manufacturing, selling, stocking, or distributing drugs in India. Governed by the Drugs and Cosmetics Act, 1940 and Rules, 1945, licences are issued by the State Drug Licensing Authority for retail (Form 20/21) and wholesale (Form 20B/21B), and by CDSCO for manufacturing and imports. Licences are now perpetual (Rule 63 amended), subject to a retention fee every 5 years.</p>
                </div>
                <p>Drug licensing regulates every stage of the pharmaceutical supply chain - manufacturing, wholesale distribution, and retail sale. The 2018 amendment to Rule 63 made drug licences perpetual. Compliance is assessed through inspections not less than once in 3 years. Patron Accounting provides end-to-end drug licence services for retail pharmacies, wholesale distributors, and manufacturers.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Drugs and Cosmetics Act, 1940 + Rules, 1945 (as amended by G.S.R. 1337(E))</td></tr>
<tr><td>Retail Licence</td><td>Form 20 (general) + Form 21 (Schedule C/C1 drugs). Application: Form 19</td></tr>
<tr><td>Wholesale Licence</td><td>Form 20B (general) + Form 21B (Schedule C/C1). Application: Form 19</td></tr>
<tr><td>Validity</td><td>Perpetual - retention fee every 5 years (Rule 63). Inspections every 3 years</td></tr>
<tr><td>Key Prerequisite</td><td>Registered Pharmacist (retail) or Competent Person (wholesale). Min area: 10/15 sq.m</td></tr>
<tr><td>Issuing Authority</td><td>SDLA for retail/wholesale; <a href="https://cdsco.gov.in" target="_blank" rel="noopener">CDSCO</a> for manufacturing/imports</td></tr>
<tr><td>Penalty (No Licence)</td><td>Section 27: Up to 3 years imprisonment + Rs 1 lakh fine</td></tr>
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
                <h2 class="section-title">What Is a Drug License?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A drug license is a legal authorisation issued under the <strong>Drugs and Cosmetics Act, 1940</strong> that permits an individual or entity to manufacture, sell, stock, or distribute pharmaceutical products in India. The Act defines 'drug' broadly to include all medicines, diagnostic substances, medical devices (as notified), and cosmetics.</p>
<p>Drug licensing operates at two levels. The <a href="https://cdsco.gov.in" target="_blank" rel="noopener">Central Drugs Standard Control Organisation (CDSCO)</a>, headed by the DCGI, handles manufacturing licences, new drug approvals, and import licences. <strong>State Drug Licensing Authorities (SDLAs)</strong> handle retail and wholesale licences.</p>
<p>Without a valid drug license, any activity related to sale or manufacture of drugs is illegal and attracts criminal penalties including imprisonment up to 3 years and fine up to Rs 1 lakh (Section 27). The <a href="https://cdscoonline.gov.in" target="_blank" rel="noopener">SUGAM Portal</a> handles CDSCO applications while state portals handle retail/wholesale.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Drug License:</strong></p>
                    <p><strong>CDSCO:</strong> Central Drugs Standard Control Organisation - the national regulatory authority under Ministry of Health & Family Welfare. Approves new drugs, clinical trials, and manufacturing licences.</p>
<p><strong>SDLA / State Drug Controller:</strong> Issues retail and wholesale drug licences at the state level through Drug Inspectors.</p>
<p><strong>Schedule C and C1:</strong> Lists of biologicals, sera, vaccines, toxins, antigens, insulin, and antibiotics requiring separate Form 21/21B licensing and cold-chain storage.</p>
<p><strong>Schedule M:</strong> Good Manufacturing Practices (GMP) requirements for drug manufacturing facilities.</p>
<p><strong>Rule 63 (amended):</strong> Drug licences are now perpetual - valid unless suspended/cancelled. Retention fee (equal to grant fee) payable every 5 years. Inspections not less than once in 3 years.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Drug License -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License</text>
                            <!-- Rx symbol -->
                            <circle cx="100" cy="65" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="100" y="72" font-size="22" fill="#14365F" font-weight="800" text-anchor="middle" font-family="serif">Rx</text>
                            <!-- Form badges -->
                            <rect x="40" y="98" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="57" y="108" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 20</text>
                            <rect x="82" y="98" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="99" y="108" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 20B</text>
                            <rect x="124" y="98" width="35" height="14" rx="3" fill="#F5A623" opacity="0.5"/>
                            <text x="141" y="108" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Mfg</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">D&amp;C Act, 1940</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Drug License</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>D&C Act, 1940</span>
                        <strong>Retail + Wholesale + Manufacturing</strong>
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
            <h2 class="section-title">Who Needs a Drug License?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Retail Pharmacies and Medical Stores:</strong> Any shop selling medicines to consumers. Requires Form 20 (general) + Form 21 (Schedule C/C1). Registered pharmacist must be present during business hours.</li>
<li><strong>Wholesale Drug Distributors:</strong> Selling drugs in bulk to retailers, hospitals, and stockists. Requires Form 20B + Form 21B. Competent person required.</li>
<li><strong>Pharmaceutical Manufacturers:</strong> Manufacturing formulations, bulk drugs, or repackaging. Manufacturing licence from CDSCO with Schedule M (GMP) compliance.</li>
<li><strong>Hospital Pharmacies:</strong> In-house pharmacies dispensing medicines to patients. Require retail drug licence.</li>
<li><strong>Online Pharmacies and E-Pharmacies:</strong> Digital platforms selling medicines online. Must hold a valid drug licence in the state of operation.</li>
<li><strong>Ayurvedic, Unani, Siddha, and Homeopathic Drug Sellers:</strong> Separate licence forms under AYUSH department (Form 20C/20D for homeopathic).</li>
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
            <h2 class="section-title">6 Drug License Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Type Assessment</td><td>Assessment of your business model (retail, wholesale, manufacturing, or combination) and determination of exact forms and authorities required.</td></tr>
<tr><td>Application Preparation and Filing</td><td>Complete Form 19/19A/19B preparation, document compilation, and online submission to the State Drug Control Department or <a href="https://cdscoonline.gov.in" target="_blank" rel="noopener">CDSCO SUGAM portal</a>.</td></tr>
<tr><td>Premises Compliance Advisory</td><td>Advice on minimum area (10 sq.m retail, 15 sq.m wholesale), cold storage setup, ventilation, and hygienic conditions to pass Drug Inspector inspection.</td></tr>
<tr><td>Pharmacist/Competent Person Coordination</td><td>Assistance identifying and onboarding a registered pharmacist (retail) or competent person (wholesale) with qualification documentation.</td></tr>
<tr><td>Drug Inspector Inspection Support</td><td>Pre-inspection preparation, document organisation, and representation during the Drug Inspector premises visit.</td></tr>
<tr><td>Licence Retention and Compliance</td><td>5-year retention fee management (Rule 63), compliance assessment preparation, stock register advisory, and additional category endorsement.</td></tr>

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
            <h2 class="section-title">7-Step Drug License Application Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete process - from licence type assessment to Drug Inspector inspection support and ongoing compliance management.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Licence Type</h3><p class="step-description">Identify which forms you need: Form 20/21 (retail), Form 20B/21B (wholesale), Form 20C/20D (homeopathic), Form 20F/20G (Schedule X), or manufacturing licence from CDSCO.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Correct type identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Forms determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="25" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="34" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Retail</text><rect x="52" y="22" width="25" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="64" y="31" font-size="4.5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Wholesale</text><rect x="82" y="22" width="25" height="12" rx="3" fill="#F5A623" opacity="0.6"/><text x="94" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Mfg</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Type Selected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Arrange Prerequisites</h3><p class="step-description">Secure premises meeting minimum area (10 sq.m retail, 15 sq.m wholesale). Appoint registered pharmacist (retail) or competent person (wholesale). Register the business entity.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pharmacist appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="25" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="42" y="35" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10sqm</text><rect x="65" y="22" width="25" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="77" y="35" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15sqm</text><circle cx="60" cy="58" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M56 58l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Prerequisites Met</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Documents</h3><p class="step-description">Compile identity proof, premises proof (rent/ownership), pharmacist certificates, appointment letter, affidavit of non-conviction, site plan/layout, and cold storage proof for Schedule C/C1.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All docs ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cross-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Application Online</h3><p class="step-description">Submit Form 19 (or 19A/19B as applicable) on the State Drug Control portal with all documents and prescribed fee. Each state has its own portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 19 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">State Drug Portal</text><rect x="55" y="52" width="30" height="12" rx="3" fill="#F5A623" opacity="0.4"/><text x="70" y="61" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 19</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Drug Inspector Inspection</h3><p class="step-description">Inspector visits premises to verify: minimum area, hygiene, ventilation, storage, refrigerator/cold chain (Schedule C/C1), pharmacist presence, and correctness of declared facts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inspection passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="35" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="45" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Inspection Done</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Licence Grant</h3><p class="step-description">Drug Controller issues the licence in prescribed form (Form 20/21/20B/21B etc.). The licence must be prominently displayed at the business premises.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Licence issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Displayed at premises</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">DRUG</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">LICENSE</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Licence Issued</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Post-Grant Compliance</h3><p class="step-description">Maintain stock registers, sales records, expiry tracking, and purchase bills. Pay licence retention fee every 5 years (Rule 63). Cooperate with inspections (at least once in 3 years).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Retention fee tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance ongoing</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">5-Year Cycle</text><rect x="30" y="45" width="60" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="6" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">COMPLIANT</text></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Drug License</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Application Form:</strong> Form 19 (retail/wholesale allopathic), Form 19A (restricted drugs), Form 19B (homeopathic)</li>
<li><strong>Identity Proof:</strong> PAN/Aadhaar/Passport of proprietor/partners/directors</li>
<li><strong>Business Constitution:</strong> Partnership deed / MOA & AOA / LLP Agreement / Proprietorship declaration</li>
<li><strong>Premises Proof:</strong> Registered rent agreement or sale deed + electricity bill/property tax receipt</li>
<li><strong>Site Plan:</strong> Layout showing premises area, storage area, dispensing area, and refrigerator location</li>
<li><strong>Pharmacist/Competent Person:</strong> Pharmacy Council registration, degree/diploma, mark sheets, appointment letter, bio-data</li>
<li><strong>Affidavit:</strong> Non-conviction declaration under the Drugs & Cosmetics Act, 1940</li>
<li><strong>Cold Storage Proof:</strong> Refrigerator/cold chain documentation for Schedule C/C1 drugs</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Drug License Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Premises Area Below Minimum</td><td>Drug Inspector rejects if premises below 10 sq.m (retail) or 15 sq.m (wholesale)</td><td>We advise on premises selection before application, ensuring compliance from day one with area and layout requirements.</td></tr>
<tr><td>Pharmacist Not Available Full-Time</td><td>Registered pharmacist must be present during all business hours for retail licences</td><td>We help structure pharmacist employment contracts and shifts to ensure full compliance during operating hours.</td></tr>
<tr><td>State Portal Technical Issues</td><td>Each state has a different online system with varying interfaces and requirements</td><td>Our team has experience across multiple state portals (Maharashtra, Delhi, Karnataka, Gujarat) and handles all submissions.</td></tr>
<tr><td>Schedule C/C1 Cold Chain Issues</td><td>Vaccines, sera, and insulin require temperature-controlled storage for inspection clearance</td><td>We provide cold chain setup advisory and documentation for Drug Inspector satisfaction before the premises visit.</td></tr>

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
            <h2 class="section-title">Drug License Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Retail - Form 20 & 21 (Allopathic)</td><td class="table-amount">Rs 1,500 - Rs 3,000 (varies by state)</td></tr>
<tr><td>Wholesale - Form 20B & 21B (Allopathic)</td><td class="table-amount">Rs 3,000 - Rs 6,000 (varies by state)</td></tr>
<tr><td>Retail - Homeopathic (Form 20C)</td><td class="table-amount">Rs 250 - Rs 500</td></tr>
<tr><td>Schedule X - Retail (Form 20F)</td><td class="table-amount">Rs 600 - Rs 1,200 (additional to Form 20)</td></tr>
<tr><td>Schedule X - Wholesale (Form 20G)</td><td class="table-amount">Rs 1,200 - Rs 2,400 (additional to Form 20B)</td></tr>
<tr><td>Licence Retention Fee (every 5 years)</td><td class="table-amount">Equal to original grant fee (Rule 63)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Drug License consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20a%20Drug%20License.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Drug License Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>3-7 days</td></tr>
<tr><td>Application Filing</td><td>1-2 days</td></tr>
<tr><td>Drug Inspector Inspection</td><td>7-30 days after filing</td></tr>
<tr><td><strong>Total: Maharashtra</strong></td><td><strong>~30 days</strong></td></tr>
<tr><td><strong>Total: Delhi</strong></td><td><strong>15-30 days</strong></td></tr>
<tr><td><strong>Overall Range</strong></td><td><strong>15-45 days (varies by state)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Timeline varies significantly by state. Maharashtra typically takes 30 days; Delhi 15-30 days. The Drug Inspector inspection is the key variable. Patron Accounting's pre-inspection preparation ensures smooth first-visit clearance, avoiding delays from repeat inspections.</p>

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
            <h2 class="section-title">5 Benefits of Professional Drug License Services</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Licence Type Clarity</h3><p class="feature-text">We identify the exact forms needed for your business model - retail, wholesale, manufacturing, or combination - avoiding wrong applications and re-filings.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3 class="feature-title">Premises Compliance</h3><p class="feature-text">Pre-application premises assessment ensures you pass the Drug Inspector's inspection on the first visit - area, ventilation, storage, and cold chain requirements.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Multi-State Experience</h3><p class="feature-text">We handle drug licence applications across Maharashtra, Delhi, Karnataka, Gujarat, Tamil Nadu, and other states with their varying portals and procedures.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Pharmacist Network</h3><p class="feature-text">We assist in connecting businesses with qualified registered pharmacists for retail licence compliance, including employment contract structuring.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Lifecycle Management</h3><p class="feature-text">5-year retention fee tracking (Rule 63), compliance inspection preparation, additional category endorsements, and modification handling throughout the licence lifecycle.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Legal Compliance</h3><p class="feature-text">Section 27 prescribes up to 3 years imprisonment and Rs 1 lakh fine. Section 27A: spurious drugs causing death attract minimum 10 years. Professional filing ensures full compliance.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India with registration and compliance.</p>
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
            <h2 class="section-title">Retail vs Wholesale vs Manufacturing Drug License</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Retail</th><th>Wholesale</th><th>Manufacturing</th></tr></thead>
                    <tbody>
                        <tr><td>Licence Forms</td><td>Form 20 (general) + Form 21 (Sch C/C1)</td><td>Form 20B (general) + Form 21B (Sch C/C1)</td><td>Form 25/28 (varies by drug type)</td></tr>
<tr><td>Application Form</td><td>Form 19</td><td>Form 19</td><td>Form 24/27 (varies)</td></tr>
<tr><td>Authority</td><td>State Drug Controller</td><td>State Drug Controller</td><td>CDSCO + State</td></tr>
<tr><td>Personnel Required</td><td>Registered Pharmacist (during business hours)</td><td>Competent Person (grad + 1yr or undergrad + 4yr)</td><td>Approved Technical Staff + GMP</td></tr>
<tr><td>Minimum Area</td><td>10 sq.m</td><td>15 sq.m</td><td>As per Schedule M</td></tr>
<tr><td>Fee Range</td><td>Rs 1,500-3,000</td><td>Rs 3,000-6,000</td><td>Rs 5,000-25,000+</td></tr>

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
            <h2 class="section-title">Related Business Registration Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - Mandatory for pharmacies and drug businesses above Rs 40 lakh turnover.</li>
<li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - For incorporating your pharmaceutical business.</li>
<li><strong><a href="/trademark-registration">Trademark Registration</a></strong> - Brand protection for your pharmacy or drug brand name.</li>
<li><strong><a href="/startup-registration">Startup Registration</a></strong> - DPIIT recognition for pharma and healthtech startups.</li>
<li><strong><a href="/gst-returns">GST Returns</a></strong> - Monthly/quarterly GST compliance for drug businesses.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Drug Licensing in India</h2>
            <div class="content-text">
                
                <p><strong>Primary Legislation:</strong> <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Drugs and Cosmetics Act, 1940</a> + Drugs and Cosmetics Rules, 1945 (as amended).</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 18:</strong> Prohibits manufacture/sale without licence.</li>
<li><strong>Section 27:</strong> Penalty - up to 3 years imprisonment + Rs 1 lakh fine. Repeat offence: up to 5 years.</li>
<li><strong>Section 27A:</strong> Adulterated/spurious drugs - 3-5 years + Rs 1-3 lakh. Spurious causing death: minimum 10 years.</li>
<li><strong>Rule 63 (G.S.R. 1337(E)):</strong> Licences now perpetual. Retention fee every 5 years. Inspections every 3 years.</li>
</ul>
<p><strong>Schedules:</strong> C/C1 (biologicals, cold storage), M (GMP manufacturing), X (narcotics/psychotropics).</p>
<p><strong>Regulatory:</strong> <a href="https://cdsco.gov.in" target="_blank" rel="noopener">CDSCO</a> (national) + SDLAs (state). SUGAM Portal: <a href="https://cdscoonline.gov.in" target="_blank" rel="noopener">cdscoonline.gov.in</a>. ONDLS: statedrugs.gov.in.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Drug License</h2>
                    <p class="faq-expanded__lead">Answers about drug license types, fees, validity, Form 20 vs Form 20B, pharmacist requirements, and application process.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Drug License',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a drug license in India?</h3>
                        <div class="faq-expanded__a"><p>A drug license is a legal authorisation under the Drugs and Cosmetics Act, 1940 permitting manufacture, sale, stocking, or distribution of pharmaceutical products. Issued by the State Drug Licensing Authority (retail/wholesale) or CDSCO (manufacturing/imports). Different forms apply: Form 20/21 retail, Form 20B/21B wholesale. Operating without one is a criminal offence under Section 27.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the types of drug license?</h3>
                        <div class="faq-expanded__a"><p>Main types: (1) Retail - Form 20 (general) + Form 21 (Schedule C/C1), (2) Wholesale - Form 20B + Form 21B, (3) Manufacturing - CDSCO, (4) Import License, (5) Schedule X - Form 20F retail and Form 20G wholesale for narcotic/psychotropic substances, (6) Homeopathic - Form 20C retail and Form 20D wholesale.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does a drug license cost?</h3>
                        <div class="faq-expanded__a"><p>Government fees vary by state. Retail Form 20/21: Rs 1,500-3,000. Wholesale Form 20B/21B: Rs 3,000-6,000. Homeopathic Form 20C: Rs 250-500. Schedule X: Rs 600-2,400 additional. Manufacturing: Rs 5,000-25,000+. Professional fees from Patron Accounting start at Rs 4,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Drug license kaise banaye?</h3>
                        <div class="faq-expanded__a"><p>Drug license banane ke liye: (1) Business type decide karein (retail/wholesale/manufacturing), (2) Premises arrange karein (min 10 sq.m retail, 15 sq.m wholesale), (3) Registered pharmacist ya competent person appoint karein, (4) State Drug Control Department ke portal par Form 19 submit karein, (5) Drug Inspector inspection karega, (6) License milega Form 20/21/20B/21B mein. License perpetual hai - har 5 saal retention fee deni hoti hai. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the validity of a drug license?</h3>
                        <div class="faq-expanded__a"><p>Under amended Rule 63 (G.S.R. 1337(E)), drug licences are now perpetual - valid unless suspended or cancelled. A retention fee equal to the original grant fee must be paid every 5 years from the date of issue. Compliance is assessed through inspections not less than once in 3 years or based on a risk-based approach.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between Form 20 and Form 20B?</h3>
                        <div class="faq-expanded__a"><p>Form 20 is the retail drug licence for sale of general allopathic drugs directly to consumers through a pharmacy. A registered pharmacist must be present. Form 20B is the wholesale licence for distribution to retailers, hospitals, and stockists. A competent person with pharmacy qualifications is required. Both are applied for using Form 19.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Dawa ki dukan ka license kaise le?</h3>
                        <div class="faq-expanded__a"><p>Dawa ki dukan (medical store) ke liye Form 20 aur Form 21 chahiye. Minimum 10 sq.m area honi chahiye. Registered pharmacist appoint karo. State Drug Control Department ke portal par Form 19 submit karo. Drug Inspector premises check karega. Fees Rs 1,500 se Rs 3,000 tak hoti hai. License perpetual hai par 5 saal mein retention fee deni padti hai. Patron Accounting poora process handle karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is a pharmacist mandatory?</h3>
                        <div class="faq-expanded__a"><p>For retail: a registered pharmacist must be present during all business hours - this is non-negotiable. For wholesale: a competent person is required (pharmacy graduate with 1 year experience, or pharmacy undergraduate with 4 years experience). Manufacturing requires approved technical staff with GMP compliance.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Can I sell medicines without a drug license?</strong> A: No. Section 18 prohibits it. Penalty under Section 27: up to 3 years imprisonment + Rs 1 lakh fine.</p>
<p><strong>Q: Separate licences for retail and wholesale?</strong> A: Yes. Form 20/21 (retail) and Form 20B/21B (wholesale) are separate licences with separate fees.</p>
<p><strong>Q: Can I sell ayurvedic with allopathic licence?</strong> A: No. AYUSH drugs require separate licences under the AYUSH department.</p>
<p><strong>Q: Is inspection mandatory?</strong> A: Yes. Drug Inspector inspects before licence grant and periodically (at least once in 3 years).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Operating Without a Drug License is a Criminal Offence</h2>
            <div class="content-text">
                
                <p>Section 27 of the Drugs & Cosmetics Act prescribes imprisonment up to 3 years and fine up to Rs 1 lakh for selling drugs without a licence. For spurious or adulterated drugs, penalties escalate to minimum 10 years imprisonment. The Drug Inspector can seal premises, seize stock, and initiate prosecution at any time.</p>
<p>E-pharmacy platforms now verify drug licence status digitally. Get your licence before commencing operations.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Drug%20License.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Drug License with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Drug licensing is a mandatory regulatory requirement for every entity in the pharmaceutical supply chain. Governed by the Drugs and Cosmetics Act, 1940, licences are now perpetual under amended Rule 63, subject to a 5-year retention fee.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting provides end-to-end services - licence type assessment, application preparation, premises advisory, pharmacist coordination, Drug Inspector inspection support, and lifecycle management.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">15+ years of practice. 10,000+ businesses served. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 4,999. Contact us for a free consultation.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20a%20Drug%20License.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Drug%20License&body=Hello%2C%0A%0AI%20need%20a%20drug%20license.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Drug License Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert drug license registration for pharmacies, wholesale distributors, and manufacturers with local CA support.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete pharma business setup</div><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a><a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/shop-act-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop & Establishment</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the Drugs & Cosmetics Act, 1940, Rules 1945 (amended), CDSCO guidelines, and state Drug Control procedures. Next review: September 2026.</p>
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
