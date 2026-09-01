
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Change in Object Clause - MOA Alteration, MGT-14 & Process</title>
    <meta name="description" content="Change object clause in MOA under Section 13 Companies Act 2013. Board meeting, EGM, special resolution and MGT-14 filing by expert CS team. From INR 4,999.">
    <link rel="canonical" href="/change-in-object-clause">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Change in Object Clause - MOA Alteration, MGT-14 & Process">
    <meta property="og:description" content="Change object clause in MOA under Section 13 Companies Act 2013. Board meeting, EGM, special resolution and MGT-14 filing by expert CS team. From INR 4,999.">
    <meta property="og:url" content="/change-in-object-clause">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Change in Object Clause - MOA Alteration, MGT-14 & Process">
    <meta name="twitter:description" content="Change object clause in MOA under Section 13 Companies Act 2013. Board meeting, EGM, special resolution and MGT-14 filing by expert CS team. From INR 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Change Object Clause: MOA Filing",
          "description": "Change object clause in MOA under Section 13 Companies Act 2013. Board meeting, EGM, special resolution and MGT-14 filing by expert CS team. From INR 4,999.",
          "url": "https://www.patronaccounting.com/change-in-object-clause",
          "serviceType": "Change Object Clause: MOA Filing",
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
            "url": "https://www.patronaccounting.com/change-in-object-clause",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "500",
              "maxPrice": "100000",
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
              "name": "Change Object Clause: MOA Filing",
              "item": "https://www.patronaccounting.com/change-in-object-clause"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the object clause in a company's MOA?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The object clause is the third clause in every MOA. It defines the exact purposes and range of business activities the company is legally permitted to undertake under Section 4(1)(c) of the Companies Act 2013. A company cannot legally operate beyond its stated object clause."
              }
            },
            {
              "@type": "Question",
              "name": "Which section governs the change in object clause?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 13 of the Companies Act 2013, read with Rule 29 and Rule 32 of the Companies (Incorporation) Rules 2014."
              }
            },
            {
              "@type": "Question",
              "name": "What form must be filed with ROC to change the object clause?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form MGT-14 under Section 117(1) within 30 days of passing the Special Resolution."
              }
            },
            {
              "@type": "Question",
              "name": "Is shareholder approval required?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Special Resolution passed by at least 75% of shareholders present and voting at an EGM. 21 clear days notice required to all members, directors, and auditors."
              }
            },
            {
              "@type": "Question",
              "name": "How long does the process take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "7 to 10 working days for a private limited company with Patron Accounting. 30 to 45 days for public limited companies with additional requirements."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late MGT-14 filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company: INR 1,00,000 base + INR 500/day continuing (max INR 25,00,000). Officer in default: INR 50,000 + INR 500/day (max INR 5,00,000)."
              }
            },
            {
              "@type": "Question",
              "name": "Can ROC reject the proposed change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. ROC may reject if proposed objects are illegal, against public policy, too broad, or non-compliant with structural regulations. A CS ensures precise, legally compliant wording."
              }
            },
            {
              "@type": "Question",
              "name": "Does the change require a new Certificate of Incorporation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. ROC issues a fresh COI upon registering the change. This Certificate is conclusive evidence that all requirements have been complied with. Alteration is effective only from the date of this Certificate. Quick Answers Which section? Section 13 of Companies Act 2013 read with Rule 29 and Rule 32. Which form? MGT-14 filed within 30 days of Special Resolution. Time taken? 7-10 working days (Pvt Ltd); 30-45 days (Public Ltd). New COI required? Yes. ROC issues a fresh Certificate of Incorporation upon registering the change."
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
                        Change in Object Clause - MOA Alteration Under Companies Act 2013
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 13 Compliance:</span> Legal process governed by Section 13 of the Companies Act, 2013. Requires Special Resolution at EGM.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>MGT-14 Within 30 Days:</span> ROC filing via Form MGT-14 within 30 days of resolution. Late filing attracts INR 1,00,000 penalty + INR 500/day.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>7-10 Working Days:</span> Process completed in 7 to 10 working days with expert CS assistance for private limited companies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>All Company Types:</span> Valid for Private Limited, Public Limited, OPC, and Section 8 companies registered in India.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,000+ companies served | 7-10 working days | 100% ROC compliant</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Object%20Clause%20Change%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20MOA%20object%20clause%20change.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20the%20object%20clause%20in%20my%20company%20MOA.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Change in Object Clause',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Why Change</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Mistakes</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">Pvt vs Public</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change in Object Clause - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Change in Object Clause Services at a Glance</strong></p>
                    <p>The object clause in your MOA defines the legal scope of every business activity. When your business evolves, the object clause must be updated under Section 13 of the Companies Act 2013. Requires Special Resolution at EGM (75% shareholder approval), MGT-14 filing within 30 days, and ROC certification. Penalty for late MGT-14: INR 1,00,000 + INR 500/day. Starting at INR 4,999.</p>
                </div>
                <p>The object clause in your company's Memorandum of Association (MOA) defines the legal scope of every business activity your company can undertake. When your business evolves - whether entering a new sector, pivoting your model, or diversifying revenue streams - your MOA object clause must be updated to reflect these changes legally under Section 13 of the Companies Act, 2013.</p>
                <p>Any activity carried on by the company that falls outside the object clause is considered ultra vires - void and unenforceable under company law. Patron Accounting helps private limited companies, public limited companies, and OPCs complete the change in object clause process end-to-end: from board resolution drafting to e-MOA preparation and MGT-14 filing with the ROC.</p>
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
                <h2 class="section-title">What is the Object Clause in MOA?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>The object clause</strong> is the third clause in every company's Memorandum of Association. It specifies the exact purposes for which the company has been incorporated and the range of activities it is legally permitted to undertake. Under Section 4(1)(c), the object clause is divided into: (a) main objects, and (b) ancillary objects necessary for furtherance of those objects.</p>
<p>The object clause serves three critical functions: it protects shareholders by ensuring investment is used only for stated purposes, informs creditors and regulators about the scope of activities, and binds the Board to utilise company funds strictly within stated objects.</p>
<p><strong>Ultra vires acts</strong> (activities outside the object clause) are void and unenforceable. This makes periodic review and amendment essential for growing businesses.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Change in Object Clause:</strong></p>
                    <p><strong>Section 13</strong> - Companies Act 2013 provision governing alteration of MOA including object clause. Requires Special Resolution.</p>
<p><strong>MGT-14</strong> - Form filed with ROC within 30 days of passing Special Resolution under Section 117(1).</p>
<p><strong>Special Resolution</strong> - Requires 75% of shareholders present and voting at EGM to approve the change.</p>
<p><strong>e-MOA (INC-33)</strong> - Electronic MOA with amendments filed on MCA V3 portal.</p>
<p><strong>Ultra Vires</strong> - An act performed outside the scope of the object clause - void ab initio under company law.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- MOA document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<rect x="50" y="35" width="65" height="18" rx="4" fill="#14365F"/>
<text x="82" y="47" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">MOA</text>
<line x1="58" y1="62" x2="107" y2="62" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-dasharray="4,3"/>
<line x1="58" y1="72" x2="107" y2="72" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/>
<line x1="58" y1="82" x2="95" y2="82" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="92" x2="100" y2="92" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<!-- S.13 badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="59" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">S.13</text>
<!-- MGT-14 badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="89" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-14</text>
<!-- FRESH COI badge -->
<rect x="50" y="118" width="60" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="80" y="130" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FRESH COI</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Change in Object Clause</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 13</span>
                        <strong>MGT-14 Filing</strong>
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
            <h2 class="section-title">Why Do Companies Need to Change the Object Clause?</h2>
            <div class="content-text">
                
                <p>Common reasons for amending the object clause:</p>
<ul>
<li><strong>Business Expansion:</strong> Entering new sectors such as technology, manufacturing, or e-commerce</li>
<li><strong>Diversification:</strong> Adding new product lines, services, or revenue streams</li>
<li><strong>Merger or Acquisition:</strong> Absorbing the objects of an acquired entity</li>
<li><strong>Pivot or Restructuring:</strong> Changing core business model or winding down existing activities</li>
<li><strong>New Technology:</strong> Incorporating activities related to AI, fintech, or renewables</li>
<li><strong>Regulatory Requirement:</strong> Certain regulated activities require specific mentions in MOA</li>
<li><strong>NIC Code Change:</strong> Shifts in industrial activity requiring updated classification on MCA portal</li>
</ul>
<p><strong>Applies to:</strong> Private Limited (standard procedure), OPC (single member consent), Public Limited (postal ballot + newspaper publication + dissenting shareholder exit), Section 8 (prior ROC/RD approval required).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Object Clause Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Consultation</td><td>Review existing MOA, identify required changes, confirm scope and new object clause wording</td></tr>
<tr><td>Board Resolution Drafting</td><td>Prepare draft Board Resolution and EGM notice with explanatory statement under Section 102(1)</td></tr>
<tr><td>EGM Coordination</td><td>Issue 21-day notice, support conduct of EGM, draft and certify Special Resolution (75% approval)</td></tr>
<tr><td>e-MOA Preparation (INC-33)</td><td>Draft amended MOA with updated object clause for MCA V3 portal; update NIC Code if applicable</td></tr>
<tr><td>MGT-14 Filing with ROC</td><td>File Form MGT-14 within 30 days with Special Resolution, EGM notice, and altered MOA attached</td></tr>
<tr><td>ROC Follow-Up</td><td>Track filing status and coordinate until fresh Certificate of Incorporation is received</td></tr>

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
            <h2 class="section-title">7-Step Procedure for Change in Object Clause</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 13 of the Companies Act 2013. MGT-14 must be filed within 30 days. Late filing penalty: INR 1,00,000 (company) + INR 500/day continuing. ROC issues fresh Certificate of Incorporation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Convene Board Meeting</h3><p class="step-description">Issue 7-day notice to all directors. Agenda: approve proposed alteration, fix EGM date, approve draft EGM notice with explanatory statement under Section 102(1), authorise director/CS to issue notice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board convened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EGM date fixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BOARD</text></svg></div><span class="illustration-label">Board Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Pass Board Resolution</h3><p class="step-description">Approve proposed new objects, recommend for members' consideration via Special Resolution, authorise CS/Director to sign and file all required forms.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filing authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M62 48l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Resolution Done</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Issue EGM Notice (21 Clear Days)</h3><p class="step-description">Send notice to all members, directors, and auditors at least 21 clear days before meeting. Include agenda and detailed explanatory statement explaining reason, effect, and proposed new wording.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>21-day clock started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="30" width="50" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">21 DAYS</text></svg></div><span class="illustration-label">Notice Sent</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Conduct EGM and Pass Special Resolution</h3><p class="step-description">Hold EGM on scheduled date. Pass Special Resolution under Section 13(1) with at least 75% of votes cast in favour. Record proceedings in minutes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SR passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>75% approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EGM</text><text x="60" y="52" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">75% PASS</text></svg></div><span class="illustration-label">SR Passed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare Amended e-MOA (INC-33)</h3><p class="step-description">Draft amended MOA incorporating new or modified object clause. Submit electronic MOA in Form INC-33 on MCA V3. Update NIC Code if industrial activity changed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-MOA prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NIC Code updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">33</text></svg></div><span class="illustration-label">e-MOA Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File MGT-14 with ROC Within 30 Days</h3><p class="step-description">File Form MGT-14 under Section 117 with: Special Resolution, EGM notice, altered MOA, and government fee based on authorised capital. Must be filed within 30 days of passing SR.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC notified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">14</text></svg></div><span class="illustration-label">MGT-14 Filed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">ROC Certification and Fresh COI</h3><p class="step-description">ROC registers new objects and issues fresh Certificate of Incorporation within 30 days of filing. This Certificate is conclusive evidence that all requirements have been complied with.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fresh COI issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objects updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FRESH COI</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Object Clause Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Board Resolution</td><td>Authorises the proposed change and fixes EGM date</td></tr>
<tr><td>EGM Notice with Explanatory Statement</td><td>21-day advance notice to all members, directors, auditors</td></tr>
<tr><td>Special Resolution (Certified True Copy)</td><td>Passed at EGM with 75%+ shareholder approval</td></tr>
<tr><td>Altered Memorandum of Association (MOA)</td><td>Printed copy showing new or amended object clause</td></tr>
<tr><td>e-MOA (INC-33)</td><td>Electronic MOA filed on MCA V3 portal</td></tr>
<tr><td>Certificate of Incorporation (copy)</td><td>Existing COI for reference in filing</td></tr>
<tr><td>DSC of Director / Company Secretary</td><td>Required for e-filing on MCA portal</td></tr>
<tr><td>Proof of Payment of Government Fees</td><td>As per Companies (Registration Offices and Fees) Rules 2014</td></tr>
<tr><td>Additional Regulatory Approvals (if applicable)</td><td>RBI, SEBI, or RD approval for regulated sectors or Section 8 companies</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes to Avoid</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing MGT-14 after 30 days</td><td>Attracts heavy penalty of INR 1,00,000 + INR 500/day</td><td>Patron Accounting files MGT-14 well within the 30-day window - zero delay, zero penalty</td></tr>
<tr><td>Insufficient EGM notice period</td><td>Minimum 21 clear days required (not counting notice day and meeting day)</td><td>Our CS team calculates notice period precisely and issues compliant notices</td></tr>
<tr><td>Overly broad or vague new object clause</td><td>ROC may reject clauses that are too wide or ambiguous</td><td>Expert character-level review of new wording to ensure ROC approval</td></tr>
<tr><td>Forgetting to update NIC code on MCA portal</td><td>When industrial activity changes, MCA Master Data must be updated</td><td>We verify NIC Code applicability and update Master Data alongside MGT-14 filing</td></tr>

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
            <h2 class="section-title">Object Clause Change Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Private Limited Company</td><td>INR 4,999 + GST (board resolution, EGM, Special Resolution, e-MOA, MGT-14 filing)</td></tr>
<tr><td>One Person Company (OPC)</td><td>INR 3,999 + GST (simplified single member consent process)</td></tr>
<tr><td>Public Limited Company</td><td>INR 7,999+ + GST (postal ballot, newspaper publication, dissenter exit)</td></tr>
<tr><td>Government Filing Fee (MGT-14)</td><td>Based on company's authorised share capital per MCA fee schedule</td></tr>
<tr><td>Penalty for Late MGT-14 (Company)</td><td>INR 1,00,000 base + INR 500/day continuing (max INR 25,00,000)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Change in Object Clause consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MOA%20object%20clause%20change%20service." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Object Clause Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Board Meeting + Board Resolution</td><td>1-2 days</td></tr>
<tr><td>EGM Notice Period (minimum 21 clear days)</td><td>21 days</td></tr>
<tr><td>EGM + Special Resolution passed</td><td>1 day</td></tr>
<tr><td>MGT-14 filing with ROC + e-MOA preparation</td><td>3-5 working days</td></tr>
<tr><td>ROC verification and certification</td><td>Up to 30 days from filing</td></tr>
<tr><td>Total end-to-end (Patron Accounting - Pvt Ltd)</td><td>7-10 working days</td></tr>
<tr><td>Total end-to-end (Public Limited)</td><td>30-45 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Penalty Warning:</strong> Late MGT-14 filing attracts INR 1,00,000 base penalty for company + INR 500 per day of continuing default (max INR 25 lakh). Each officer in default: INR 50,000 + INR 500/day (max INR 5 lakh). Condonation of delay requires Form CG-1 with MCA.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Object Clause Change?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Expert CS-Led Process</h3><p class="feature-text">Company Secretaries with hands-on MCA V3 portal experience handle the complete filing process.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Accurate Wording Review</h3><p class="feature-text">Character-level review of new object clause wording to avoid ROC rejection.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">On-Time MGT-14</h3><p class="feature-text">Zero delay, zero penalty. Filed well within the 30-day statutory window.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Transparent Pricing</h3><p class="feature-text">Fixed pricing from INR 4,999 with no hidden charges. Government fees quoted separately.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">End-to-End Handling</h3><p class="feature-text">From board resolution drafting to ROC certification follow-up - updates at every stage.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Service</h3><p class="feature-text">1,000+ businesses served. Offices in Pune, Mumbai, Delhi, Bangalore.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>1,000+ Companies Served | 7-10 Working Days (Pvt Ltd) | 100% ROC Compliant | Expert CA and CS Team | 15+ Years Experience</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd vs OPC vs Public Ltd - Object Clause Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Pvt Ltd</th><th>Public Ltd</th></tr></thead>
                    <tbody>
                        <tr><td>EGM Required</td><td>Yes</td><td>Yes</td></tr>
<tr><td>Postal Ballot</td><td>No</td><td>Yes (for unutilised funds)</td></tr>
<tr><td>21-Day Notice</td><td>Yes</td><td>Yes</td></tr>
<tr><td>Newspaper Publication</td><td>No</td><td>Yes - English and vernacular</td></tr>
<tr><td>Exit for Dissenters</td><td>No</td><td>Yes</td></tr>
<tr><td>NIC Code Update</td><td>If applicable</td><td>If applicable</td></tr>
<tr><td>ROC Certification</td><td>Fresh COI issued</td><td>Fresh COI issued</td></tr>
<tr><td>Typical Time (Patron)</td><td>7-10 days</td><td>30-45 days</td></tr>

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
            <h2 class="section-title">Related Corporate Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/change-in-name-of-company">Change in Company Name</a> - amend name clause of MOA with ROC approval</li>
<li><a href="/llp-agreement-change">LLP Agreement Amendment</a> - modify LLP agreement including object clause</li>
<li><a href="/change-in-authorised-capital">Increase in Authorised Share Capital</a> - alter capital clause of MOA</li>
<li><a href="/private-limited-company-compliance">Annual ROC Compliance</a> - MGT-7, AOC-4, and annual filings</li>
<li><a href="#">Director Appointment and Resignation</a> - DIR-12 filings with MCA</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Section 13 Companies Act 2013</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Requirement</th></tr></thead><tbody>
<tr><td>Section 13(1)</td><td>Object clause can be altered by a Special Resolution.</td></tr>
<tr><td>Section 13(6)</td><td>ROC to certify alteration within 30 days of MGT-14 filing.</td></tr>
<tr><td>Section 13(8)</td><td>Companies with unutilised public prospectus funds face additional requirements.</td></tr>
<tr><td>Section 13(9)</td><td>Dissenting shareholders of public companies must be given exit option.</td></tr>
<tr><td>Section 117(1)</td><td>MGT-14 must be filed within 30 days of passing the Special Resolution.</td></tr>
<tr><td>Rule 29 and Rule 32</td><td>Procedure for MOA alteration including EGM notice requirements.</td></tr>
<tr><td>Section 173 + SS-1</td><td>Board meeting notice requirements - minimum 7 days.</td></tr>
<tr><td>Section 101</td><td>EGM notice to all members, directors, auditors - minimum 21 clear days.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal - Forms and Filing</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Change in Object Clause</h2>
                    <p class="faq-expanded__lead">Get answers about MOA alteration, Section 13 procedure, MGT-14 filing, penalties, and ROC certification.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Change in Object Clause',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the object clause in a company's MOA?</h3>
                        <div class="faq-expanded__a"><p>The object clause is the third clause in every MOA. It defines the exact purposes and range of business activities the company is legally permitted to undertake under Section 4(1)(c) of the Companies Act 2013. A company cannot legally operate beyond its stated object clause.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which section governs the change in object clause?</h3>
                        <div class="faq-expanded__a"><p>Section 13 of the Companies Act 2013, read with Rule 29 and Rule 32 of the Companies (Incorporation) Rules 2014.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What form must be filed with ROC to change the object clause?</h3>
                        <div class="faq-expanded__a"><p>Form MGT-14 under Section 117(1) within 30 days of passing the Special Resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is shareholder approval required?</h3>
                        <div class="faq-expanded__a"><p>Yes. Special Resolution passed by at least 75% of shareholders present and voting at an EGM. 21 clear days notice required to all members, directors, and auditors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does the process take?</h3>
                        <div class="faq-expanded__a"><p>7 to 10 working days for a private limited company with Patron Accounting. 30 to 45 days for public limited companies with additional requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for late MGT-14 filing?</h3>
                        <div class="faq-expanded__a"><p>Company: INR 1,00,000 base + INR 500/day continuing (max INR 25,00,000). Officer in default: INR 50,000 + INR 500/day (max INR 5,00,000).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can ROC reject the proposed change?</h3>
                        <div class="faq-expanded__a"><p>Yes. ROC may reject if proposed objects are illegal, against public policy, too broad, or non-compliant with structural regulations. A CS ensures precise, legally compliant wording.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does the change require a new Certificate of Incorporation?</h3>
                        <div class="faq-expanded__a"><p>Yes. ROC issues a fresh COI upon registering the change. This Certificate is conclusive evidence that all requirements have been complied with. Alteration is effective only from the date of this Certificate.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which section?</strong> Section 13 of Companies Act 2013 read with Rule 29 and Rule 32.</p>
<p><strong>Which form?</strong> MGT-14 filed within 30 days of Special Resolution.</p>
<p><strong>Time taken?</strong> 7-10 working days (Pvt Ltd); 30-45 days (Public Ltd).</p>
<p><strong>New COI required?</strong> Yes. ROC issues a fresh Certificate of Incorporation upon registering the change.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File MGT-14 On Time - Avoid INR 1 Lakh Penalty</h2>
            <div class="content-text">
                
                <p><strong>Key Deadlines:</strong></p>
<ul>
<li><strong>7 days:</strong> Board Meeting notice to all directors</li>
<li><strong>21 clear days:</strong> EGM notice to all members, directors, auditors</li>
<li><strong>30 days:</strong> MGT-14 must be filed with ROC after Special Resolution - penalty INR 1,00,000 + INR 500/day for delay</li>
<li><strong>30 days:</strong> ROC certifies alteration and issues fresh COI</li>
</ul>
<p><strong>Ultra vires risk:</strong> Any activity outside your object clause is void and unenforceable. Amend before commencing new activities.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20the%20object%20clause%20in%20my%20MOA." target="_blank">WhatsApp us</a> for a free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Change Your Object Clause - Starting at INR 4,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Your MOA object clause defines the legal boundary of your business. Operating beyond it exposes your company to ultra vires risk - void contracts, regulatory action, and shareholder disputes. Amending proactively before commencing new activities is essential corporate governance.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CS team handles the complete process in 7-10 working days for private limited companies - from board resolution to fresh Certificate of Incorporation. 1,000+ companies served with 100% ROC compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MOA%20object%20clause%20change%20service." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Change%20Object%20Clause%20-%20MOA%20Alteration&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20change%20the%20object%20clause%20in%20my%20company%20MOA.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Object Clause Change Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your MOA object clause changed from Patron Accounting offices across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Object Clause Change by City</div><div class="pa-block-sub">MGT-14 filing and ROC certification from Patron Accounting</div><div class="pa-city-grid">
<a href="/change-in-object-clause/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/change-in-object-clause/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/change-in-object-clause/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>

</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Company and MOA compliance services</div><div class="pa-cross-grid">
<a href="/change-in-name-of-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Name Change</div><div class="pa-card-sub">India</div></div></a>
<a href="/change-in-authorised-capital" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Increase Share Capital</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-agreement-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Agreement Amendment</div><div class="pa-card-sub">India</div></div></a>
<a href="/appointment-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director Appointment</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: Companies Act 2013 amendments, Companies (Incorporation) Rules 2014 changes, or MCA filing procedure updates.</p>
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
