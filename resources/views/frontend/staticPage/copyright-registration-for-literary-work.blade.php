
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Copyright for Literary Work - Book, Software & Database</title>
    <meta name="description" content="Copyright for literary work in India costs Rs 500 per work under the Copyright Act, 1957. Learn the online registration process, documents, and timeline.">
    <link rel="canonical" href="/copyright-registration-for-literary-work">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Copyright for Literary Work - Book, Software & Database">
    <meta property="og:description" content="Copyright for literary work in India costs Rs 500 per work under the Copyright Act, 1957. Learn the online registration process, documents, and timeline.">
    <meta property="og:url" content="/copyright-registration-for-literary-work">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Copyright for Literary Work - Book, Software & Database">
    <meta name="twitter:description" content="Copyright for literary work in India costs Rs 500 per work under the Copyright Act, 1957. Learn the online registration process, documents, and timeline.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Copyright for Literary Work - Book, Software & Database",
          "description": "Copyright for literary work in India costs Rs 500 per work under the Copyright Act, 1957. Learn the online registration process, documents, and timeline.",
          "url": "https://www.patronaccounting.com/copyright-registration-for-literary-work",
          "serviceType": "Copyright for Literary Work - Book, Software & Database",
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
            "url": "https://www.patronaccounting.com/copyright-registration-for-literary-work",
            "price": "500"
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
              "name": "Copyright for Literary Work - Book, Software & Database",
              "item": "https://www.patronaccounting.com/copyright-registration-for-literary-work"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a literary work under the Copyright Act, 1957?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 2(o), 'literary work' includes computer programs, tables, and compilations including computer databases. The definition covers all written content regardless of literary merit - books, novels, poems, articles, research papers, manuals, directories, software code, and compilations qualify as literary works if sufficient independent skill and effort were involved in their creation."
              }
            },
            {
              "@type": "Question",
              "name": "How much does it cost to copyright a book in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The government fee for literary work copyright registration is Rs 500 per work as prescribed under Schedule 2 of the Copyright Rules, 2013. If the literary work is used with goods under Section 45, the fee is Rs 2,000. For computer software, the fee is Rs 4,000. Professional fees for application drafting and filing are additional."
              }
            },
            {
              "@type": "Question",
              "name": "How long does copyright last for literary work in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For literary works published during the lifetime of the author, copyright lasts for the lifetime of the author plus 60 years from the beginning of the calendar year following the author's death under Section 22. For joint authorship, the 60-year period is calculated from the death of the last surviving author. For anonymous or pseudonymous works, copyright lasts 60 years from publication under Section 23."
              }
            },
            {
              "@type": "Question",
              "name": "Can I copyright an unpublished manuscript?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, both published and unpublished literary works can be registered. For unpublished manuscripts, submit a complete digital copy in PDF or DOC format. Registration of unpublished works provides the same legal protection - the Certificate serves as prima facie evidence of ownership under Section 48."
              }
            },
            {
              "@type": "Question",
              "name": "Is copyright registration mandatory for books in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, copyright registration is not mandatory. Copyright protection arises automatically when an original literary work is created, in accordance with the Berne Convention. However, registration is strongly recommended because it provides prima facie evidence of ownership under Section 48, which significantly simplifies enforcement in case of infringement."
              }
            },
            {
              "@type": "Question",
              "name": "What exclusive rights does copyright give to authors?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 14(a), copyright grants exclusive rights to: reproduce the work in any material form including electronic storage; issue copies to the public; perform in public; communicate to the public; make a cinematograph film or sound recording; make any translation; and make any adaptation. For computer programs, additional rights include selling or commercially renting copies."
              }
            },
            {
              "@type": "Question",
              "name": "Who owns copyright when a literary work is created during employment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 17, when a literary work is created during employment under a 'contract of service', the employer is the first owner of copyright unless agreed otherwise. However, freelancers working under a 'contract for service' retain their copyright unless specifically assigned in writing under Section 19."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form XIV and how do I file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form XIV is the prescribed application form under the Copyright Rules, 2013 for registering copyright. It requires details such as the title, language, category, authorship information, publication status, and ownership details. The form can be filed online at copyright.gov.in or submitted physically at the Copyright Office in New Delhi."
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

<!-- BREADCRUMB -->

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
                        Copyright for Literary Work in India - Process, Fees, and Documents
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fee:</span> Rs 500 per literary work as prescribed under Schedule 2 of the Copyright Rules, 2013</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Online Filing:</span> Through the Copyright Office portal (copyright.gov.in) using Form XIV - fully digital process</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protection Duration:</span> Lifetime of the author plus 60 years under Section 22 of the Copyright Act, 1957</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Works Covered:</span> Books, novels, poems, articles, computer programs, tables, compilations, and databases under Section 2(o)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses and authors across India for copyright and IP services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Literary%20Work%20Copyright%20Registration&body=Hello%2C%20I%20just%20visited%20your%20Literary%20Work%20Copyright%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Literary%20Work%20Copyright%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Copyright for Literary Work',
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
    'ctaText'    => 'Expert copyright registration for books, manuscripts, software, and literary works under the Copyright Act, 1957.',
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
            <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is It</a>
            <a class="toc-btn" href="#who-section">Who Needs It</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">10-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">DIY vs Pro</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Copyright for Literary Work - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Copyright for Literary Work Services at a Glance</strong></p>
                    <p>Copyright for literary work is the legal mechanism that protects the original expression of ideas in written, digital, or coded form. Under the Copyright Act, 1957, literary work encompasses books, novels, poetry, articles, computer programs, tables, compilations, and databases. Registration with the <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> creates an official public record that serves as prima facie evidence of ownership under Section 48.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Copyright Act, 1957 and Copyright Rules, 2013</td></tr>
                        <tr><td>Definition</td><td>Section 2(o): includes computer programs, tables, compilations including databases</td></tr>
                        <tr><td>Application Form</td><td>Form XIV (online at copyright.gov.in or physical filing)</td></tr>
                        <tr><td>Government Fee</td><td>Rs 500 per work; Rs 2,000 if used with goods (Section 45)</td></tr>
                        <tr><td>Timeline</td><td>2-6 months (no objections); 4-9 months (with objections)</td></tr>
                        <tr><td>Validity</td><td>Lifetime of author + 60 years (Section 22); 60 years from publication for anonymous works (Section 23)</td></tr>
                        <tr><td>Infringement Penalty</td><td>6 months to 3 years imprisonment; Rs 50,000 to Rs 2,00,000 fine (Section 63)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>While copyright protection in India arises automatically upon creation of an original work (as mandated by the Berne Convention), formal registration is strongly recommended. Registration provides documented proof that simplifies enforcement, enables authors to claim statutory damages in infringement proceedings, and creates a public record searchable by publishers, licensees, and courts.</p>
                <p>India's <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a> now supports fully online registration, making the process accessible to authors, self-published writers, researchers, software developers, and content creators across the country. Patron Accounting's CA and CS team provides end-to-end support from application filing through certificate procurement from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is Copyright for Literary Work?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Copyright for literary work is the exclusive legal right granted to authors under the Copyright Act, 1957, protecting original written, coded, or compiled expressions - including books, novels, poems, articles, computer programs, tables, compilations, and databases - from unauthorized reproduction, distribution, adaptation, and translation.</p>
                    <p>Under Section 2(o), 'literary work' includes computer programs, tables, and compilations including computer databases. The definition is intentionally broad and covers all written content regardless of literary merit - from novels to railway guides to street directories. Under Section 13(1)(a), copyright subsists in original literary works where originality refers to independent creation involving sufficient skill, labour, and judgment.</p>
                    <p>Under Section 14(a), copyright in a literary work grants the owner exclusive rights to reproduce the work, issue copies to the public, perform in public, communicate to the public, make translations, and make adaptations. For computer programs, additional rights include selling or commercially renting copies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Copyright for Literary Work:</strong></p>
                    <p><strong>Literary Work (Section 2(o))</strong> - Includes computer programs, tables, and compilations including computer databases. Covers all written content regardless of literary merit.</p>
                    <p><strong>Original Work (Section 13)</strong> - Copyright subsists only in original literary works. Originality means independent creation with sufficient skill, labour, and judgment - not novelty of ideas.</p>
                    <p><strong>Author (Section 2(d))</strong> - For literary work, the person who creates the work. For computer-generated work, the person who causes the work to be created.</p>
                    <p><strong>Fair Dealing (Section 52)</strong> - Permits limited use for private study, research, criticism, review, and reporting current events without constituting infringement.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Open book -->
                            <rect x="30" y="40" width="65" height="85" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="105" y="40" width="65" height="85" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="100" y1="40" x2="100" y2="125" stroke="#14365F" stroke-width="2"/>
                            <!-- Text lines left page -->
                            <line x1="40" y1="55" x2="85" y2="55" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="40" y1="67" x2="82" y2="67" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <line x1="40" y1="79" x2="78" y2="79" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <line x1="40" y1="91" x2="80" y2="91" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <line x1="40" y1="103" x2="75" y2="103" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <!-- Text lines right page -->
                            <line x1="115" y1="55" x2="160" y2="55" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="115" y1="67" x2="158" y2="67" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <line x1="115" y1="79" x2="155" y2="79" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <line x1="115" y1="91" x2="150" y2="91" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/>
                            <!-- Copyright badge -->
                            <circle cx="165" cy="35" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <text x="165" y="41" font-size="16" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">C</text>
                            <!-- Section tag -->
                            <rect x="25" y="130" width="52" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 2(o)</text>
                            <!-- Label -->
                            <text x="100" y="165" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Copyright for Literary Work</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 2(o) Protected</span>
                        <strong>Literary Work Copyright</strong>
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
            <h2 class="section-title">Who Needs Copyright for Literary Work?</h2>
            <div class="content-text">
                
                <p>Copyright registration for literary work is essential for a wide range of creators and professionals who produce original written or coded content:</p>
                <ul>
                    <li><strong>Authors:</strong> Books, novels, short stories, poetry collections, and anthologies</li>
                    <li><strong>Academic Researchers:</strong> Professors and scholars publishing research papers, theses, and dissertations</li>
                    <li><strong>Journalists and Content Writers:</strong> Original articles, editorials, and digital content</li>
                    <li><strong>Software Developers:</strong> Original computer programs, source code, and databases under Section 2(o)</li>
                    <li><strong>Publishers:</strong> Compilations, encyclopedias, directories, and reference works</li>
                    <li><strong>Screenwriters and Lyricists:</strong> Scripts and lyrics that qualify as literary works</li>
                    <li><strong>Self-Published Authors:</strong> Distributing through online platforms and print-on-demand services</li>
                </ul>
                <p><strong>Key Threshold:</strong> The work must be original - meaning it involves independent intellectual effort, skill, and judgment. Copyright does not protect ideas, facts, methods, or systems - only the original expression. Titles, single words, short phrases, and common information are generally not eligible.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Literary Work Copyright Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment</td><td>Review your literary work to confirm it meets originality requirements under Section 13 and determine the correct work classification under Section 2(o)</td></tr>
                        <tr><td>Copyright Search</td><td>Verify that no substantially similar work exists in the Register of Copyrights to minimize objection risk during the 30-day waiting period</td></tr>
                        <tr><td>Application Drafting and Filing</td><td>Prepare Form XIV with Statement of Particulars and Statement of Further Particulars, ensuring all fields are accurately completed and filed on <a href="https://copyright.gov.in" target="_blank" rel="noopener">copyright.gov.in</a></td></tr>
                        <tr><td>Document Compilation</td><td>Collect and organize all required documents including NOCs, identity proofs, manuscript copies, and Power of Attorney</td></tr>
                        <tr><td>Objection Defence</td><td>Handle objections during the 30-day waiting period and represent you in hearings before the Registrar of Copyrights under Section 47</td></tr>
                        <tr><td>Certificate Procurement and Advisory</td><td>Track your application from diary number to certificate issuance, and advise on licensing, assignment, and copyright notice placement</td></tr>

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
            <h2 class="section-title">Step-by-Step Literary Work Copyright Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through the complete copyright registration process for literary works - from finalizing your manuscript to receiving the Registration Certificate from the Copyright Office.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Finalize Your Literary Work</h3>
        <p class="step-description">Ensure your book, manuscript, article, computer program, or other literary work is in its final form. Both published and unpublished works can be registered. Save the work in PDF or DOC format (maximum 10 MB for upload).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Work finalized</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Digital format ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="60" y1="10" x2="60" y2="75" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="25" x2="55" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="35" x2="52" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="50" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="65" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="65" y1="35" x2="88" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Work Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Conduct Copyright Search</h3>
        <p class="step-description">Search the Register of Copyrights to check for similar registered works. While not mandatory, this step reduces the risk of objections being filed during the 30-day waiting period. Patron Accounting conducts thorough searches to minimize risk.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Register searched</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> No conflicts found</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="55" cy="40" r="22" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="72" y1="55" x2="90" y2="73" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="32" x2="62" y2="32" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="42" y1="42" x2="60" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="42" y1="52" x2="55" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Search Complete</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Complete and File Form XIV Online</h3>
        <p class="step-description">Create an account on copyright.gov.in. Complete Form XIV with: main application form (select 'Literary Work'), Statement of Particulars, Statement of Further Particulars, and uploaded scanned signature. Upload digital copy of the complete work.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form XIV completed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Work uploaded</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM XIV</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="64" x2="85" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Upload Work and Pay Government Fee</h3>
        <p class="step-description">Upload the literary work in PDF or DOC format. Pay Rs 500 per work through online payment gateway. If the literary work is used with goods under Section 45, the fee is Rs 2,000 and requires a TM-60 Search Certificate from the Trademark Registry.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 500 fee paid</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Diary number received</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Rs 500</text><line x1="25" y1="48" x2="95" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="85" cy="58" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M82 58l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Fee Paid</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">30-Day Mandatory Waiting Period</h3>
        <p class="step-description">A mandatory waiting period of 30 days follows under Rule 70 of the Copyright Rules, 2013. During this period, any person may file an objection against the registration. If no objection is received, the application proceeds to examination.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Waiting period monitored</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objections tracked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="60" y1="20" x2="60" y2="45" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/><line x1="60" y1="45" x2="78" y2="55" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><circle cx="60" cy="45" r="3" fill="#14365F"/><text x="60" y="90" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">30 DAYS</text></svg></div>
            <span class="illustration-label">Period Complete</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Examination by Registrar</h3>
        <p class="step-description">The Registrar of Copyrights examines the application for completeness, accuracy, and legal compliance. If objections were filed, the Registrar conducts a hearing where both parties present their case under Section 47 of the Copyright Act, 1957.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application examined</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="55" cy="40" r="22" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="72" y1="55" x2="90" y2="73" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="42" y1="32" x2="62" y2="32" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="42" y1="42" x2="60" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="42" y1="52" x2="55" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Review Complete</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Copyright Registration Certificate Issued</h3>
        <p class="step-description">Upon approval, the Registrar records the literary work in the Register of Copyrights under Section 45 and issues the Copyright Registration Certificate. This serves as prima facie evidence of ownership in all courts across India under Section 48.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 48 evidence created</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTERED</text></svg></div>
            <span class="illustration-label">Copyright Registered</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Literary Work Copyright Registration</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Completed Form XIV</strong> - Application for Registration of Copyright with Statement of Particulars and Statement of Further Particulars</li>
                    <li><strong>Digital copy of the literary work</strong> - In PDF or DOC format (complete manuscript, book, or program)</li>
                    <li><strong>Applicant's identity proof</strong> - Aadhaar Card, PAN Card, or Passport</li>
                    <li><strong>Applicant's address proof</strong></li>
                    <li><strong>NOC from the author</strong> - If the applicant is not the author</li>
                    <li><strong>NOC from the publisher</strong> - If the publisher is different from the applicant</li>
                    <li><strong>Power of Attorney (POA) or Vakalatnama</strong> - If filed through an advocate</li>
                    <li><strong>Three copies of the published work</strong> - For physical filing; or digital copy for online filing</li>
                    <li><strong>TM-60 Search Certificate</strong> - From the Trademark Registry, required under Section 45(1) if the literary work is used in relation to goods</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Literary Work Copyright Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Proving Originality</td><td>The Copyright Office requires the work to be 'original' under Section 13. For compilations and databases, demonstrating sufficient skill and judgment can be challenging</td><td>We help document the creative process, maintain creation timelines, and present the work's original elements effectively in the application</td></tr>
                        <tr><td>Third-Party Objections</td><td>Authors sometimes face plagiarism allegations or claims of prior creation during the 30-day waiting period, risking rejection</td><td>We conduct pre-filing copyright searches and prepare comprehensive applications with strong evidence of original authorship, reducing objection risk</td></tr>
                        <tr><td>Multiple Authors (Joint Authorship)</td><td>Joint authorship under Section 2(z) creates complexity around ownership, duration, and licensing rights between co-authors</td><td>We draft clear joint authorship declarations and advise on co-ownership agreements before filing</td></tr>
                        <tr><td>Employer vs Employee Disputes</td><td>Under Section 17, when a literary work is created during employment, the employer becomes the first owner of copyright unless agreed otherwise</td><td>We review employment contracts and advise on ownership clauses before registration, ensuring clarity for both parties</td></tr>

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
            <h2 class="section-title">Copyright Registration Fees for Literary Work</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Literary, Dramatic, Musical, or Artistic Work (general)</td><td>Rs 500 per work</td></tr>
                        <tr><td>Literary Work used with goods (Section 45)</td><td>Rs 2,000 per work</td></tr>
                        <tr><td>Computer Software / Programme</td><td>Rs 4,000 per work</td></tr>
                        <tr><td>Change in particulars (literary work)</td><td>Rs 500</td></tr>
                        <tr><td>Certified copy from Register of Copyrights</td><td>Rs 500</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 3,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Copyright for Literary Work consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Literary%20Work%20Copyright%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Literary Work Copyright Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Application Filing and Diary Number</td><td>Same day</td></tr>
                        <tr><td>Mandatory Waiting Period for Objections</td><td>30 days</td></tr>
                        <tr><td>Examination (no objections)</td><td>1-3 months</td></tr>
                        <tr><td>Hearing (if objections raised)</td><td>Additional 2-4 months</td></tr>
                        <tr><td>Total (standard)</td><td>2-6 months</td></tr>
                        <tr><td>Total (with objections)</td><td>4-9 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> The 30-day waiting period under Rule 70 is mandatory and cannot be shortened. Applications with pre-screened documents and thorough copyright searches typically complete faster. Patron Accounting tracks every application and handles objection responses proactively.</p>

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
            <h2 class="section-title">Benefits of Professional Literary Work Copyright Registration</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Correct Work Classification</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Literary work under Section 2(o) has a broad definition. Our team ensures the correct classification to avoid processing delays</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Error-Free Applications</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Incomplete forms, missing NOCs, or wrong document formats cause rejection. Professional preparation eliminates these risks entirely</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Objection Handling</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">If a third party files an objection, our legal team drafts responses and represents you at hearings before the Registrar under Section 47</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Employer-Employee Advisory</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">For works created during employment, we advise on ownership rights under Section 17 and help draft appropriate agreements</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Post-Registration Support</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Guidance on copyright notice placement, licensing agreements, assignment drafting under Section 18/19, and infringement enforcement strategy</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Authors and Publishers Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including authors, publishers, and software companies trust Patron Accounting for copyright and IP services. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team provides reliable copyright protection for India's literary and creative community.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve authors, researchers, software developers, and publishers across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Literary Work Copyright Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Cost</td><td>Rs 500 govt fee only</td><td>Starting Rs 4,999 (incl. govt + professional)</td></tr>
                        <tr><td>Classification</td><td>Self-assessed</td><td>Expert work classification under Section 2(o)</td></tr>
                        <tr><td>Error Risk</td><td>High - incomplete forms or wrong formats</td><td>Near zero - professionally verified</td></tr>
                        <tr><td>Objection Handling</td><td>Self-representation at hearings</td><td>Professional hearing support and reply drafting</td></tr>
                        <tr><td>Processing Time</td><td>4-9 months</td><td>2-6 months with pre-screening</td></tr>
                        <tr><td>Post-Registration</td><td>None</td><td>Licensing, assignment, and enforcement advice</td></tr>

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
            <h2 class="section-title">Related Copyright and IP Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a comprehensive suite of copyright and IP services for authors and creators:</p>
                <ul>
                    <li><a href="/copyright-registration">Copyright Registration (General)</a> - Umbrella copyright registration for all types of works</li>
                    <li><a href="/brand-copyright-registration">Brand Copyright Registration</a> - Protect your brand elements with copyright</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand protection under the Trademark Act, 1999</li>
                    <li><a href="/logo-copyright-registration">Logo Copyright Registration</a> - Protect your logo design with copyright registration</li>
                    <li><a href="/patent-registration">Patent Registration</a> - Patent filing for inventions in India</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Literary Work Copyright in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Section</th><th>Key Provision</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Section 2(o)</a></td><td>'Literary work' includes computer programs, tables, and compilations including computer databases</td></tr>
                        <tr><td>Section 13(1)(a)</td><td>Copyright subsists in original literary works</td></tr>
                        <tr><td>Section 14(a)</td><td>Exclusive rights: reproduce, issue copies, perform, communicate to public, make translations, make adaptations</td></tr>
                        <tr><td>Section 17</td><td>First ownership: author is first owner; employer owns if created during employment under contract of service</td></tr>
                        <tr><td>Section 22</td><td>Duration: lifetime of author + 60 years from year following death</td></tr>
                        <tr><td>Section 23</td><td>Anonymous/pseudonymous works: 60 years from year following publication</td></tr>
                        <tr><td>Section 45</td><td>Registration process with the Registrar of Copyrights</td></tr>
                        <tr><td>Section 48</td><td>Register of Copyrights is prima facie evidence of ownership</td></tr>
                        <tr><td>Section 52</td><td>Fair dealing exceptions for research, private study, criticism, review, reporting</td></tr>
                        <tr><td>Section 57</td><td>Moral rights: right to paternity (attribution) and right to integrity</td></tr>
                        <tr><td>Section 63</td><td>Criminal penalty: 6 months to 3 years imprisonment; Rs 50,000 to Rs 2,00,000 fine</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Regulatory Authority:</strong> <a href="https://copyright.gov.in" target="_blank" rel="noopener">Copyright Office</a>, DPIIT, Ministry of Commerce and Industry, Government of India.</p>
                <p><strong>International Treaties:</strong> India is a signatory to the Berne Convention, TRIPS Agreement, and WIPO Copyright Treaty. Copyright registered in India is recognized in 170+ member countries.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Literary Work Copyright</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about copyright registration for books, manuscripts, software, and other literary works in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Copyright for Literary Work',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a literary work under the Copyright Act, 1957?</h3>
                        <div class="faq-expanded__a"><p>Under Section 2(o), 'literary work' includes computer programs, tables, and compilations including computer databases. The definition covers all written content regardless of literary merit - books, novels, poems, articles, research papers, manuals, directories, software code, and compilations qualify as literary works if sufficient independent skill and effort were involved in their creation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does it cost to copyright a book in India?</h3>
                        <div class="faq-expanded__a"><p>The government fee for literary work copyright registration is Rs 500 per work as prescribed under Schedule 2 of the Copyright Rules, 2013. If the literary work is used with goods under Section 45, the fee is Rs 2,000. For computer software, the fee is Rs 4,000. Professional fees for application drafting and filing are additional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does copyright last for literary work in India?</h3>
                        <div class="faq-expanded__a"><p>For literary works published during the lifetime of the author, copyright lasts for the lifetime of the author plus 60 years from the beginning of the calendar year following the author's death under Section 22. For joint authorship, the 60-year period is calculated from the death of the last surviving author. For anonymous or pseudonymous works, copyright lasts 60 years from publication under Section 23.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I copyright an unpublished manuscript?</h3>
                        <div class="faq-expanded__a"><p>Yes, both published and unpublished literary works can be registered. For unpublished manuscripts, submit a complete digital copy in PDF or DOC format. Registration of unpublished works provides the same legal protection - the Certificate serves as prima facie evidence of ownership under Section 48.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is copyright registration mandatory for books in India?</h3>
                        <div class="faq-expanded__a"><p>No, copyright registration is not mandatory. Copyright protection arises automatically when an original literary work is created, in accordance with the Berne Convention. However, registration is strongly recommended because it provides prima facie evidence of ownership under Section 48, which significantly simplifies enforcement in case of infringement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What exclusive rights does copyright give to authors?</h3>
                        <div class="faq-expanded__a"><p>Under Section 14(a), copyright grants exclusive rights to: reproduce the work in any material form including electronic storage; issue copies to the public; perform in public; communicate to the public; make a cinematograph film or sound recording; make any translation; and make any adaptation. For computer programs, additional rights include selling or commercially renting copies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Who owns copyright when a literary work is created during employment?</h3>
                        <div class="faq-expanded__a"><p>Under Section 17, when a literary work is created during employment under a 'contract of service', the employer is the first owner of copyright unless agreed otherwise. However, freelancers working under a 'contract for service' retain their copyright unless specifically assigned in writing under Section 19.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is Form XIV and how do I file it?</h3>
                        <div class="faq-expanded__a"><p>Form XIV is the prescribed application form under the Copyright Rules, 2013 for registering copyright. It requires details such as the title, language, category, authorship information, publication status, and ownership details. The form can be filed online at copyright.gov.in or submitted physically at the Copyright Office in New Delhi.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is copyright for literary work?</strong> The exclusive legal right under the Copyright Act, 1957 that protects original written, coded, or compiled expressions - including books, poems, software, and databases.</p>
                <p><strong>How much does it cost?</strong> Rs 500 per literary work under Schedule 2 of the Copyright Rules, 2013.</p>
                <p><strong>How long does it last?</strong> Lifetime of the author plus 60 years under Section 22 of the Copyright Act, 1957.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register Your Literary Work Copyright Now</h2>
            <div class="content-text">
                
                <p>In the digital age, unauthorized copying and distribution of literary works is easier than ever. Digital piracy of books, articles, and software code is rampant - registration provides the strongest legal evidence of ownership. Copyright infringement is a cognizable and non-bailable offence under Section 63. The Rs 500 government fee is among the lowest IP registration costs globally.</p>
                <p><strong>Don't wait for infringement to happen.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Literary%20Work%20Copyright%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to start your copyright registration today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Literary Work Copyright Registration Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Copyright registration for literary work is one of the most cost-effective intellectual property protections available to Indian authors, researchers, software developers, and publishers. At just Rs 500 per work, the registration creates an official record under the Copyright Act, 1957 that serves as prima facie evidence of ownership for the lifetime of the author plus 60 years.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Whether you are a first-time author seeking to protect a manuscript, a software company safeguarding proprietary code, or a publisher with a catalogue of literary works, Patron Accounting's CA and CS team provides expert guidance from application filing through certificate procurement. With 15+ years of experience and offices across India, we deliver reliable copyright protection.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Literary%20Work%20Copyright%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Literary%20Work%20Copyright%20Registration&body=Hello%2C%20I%20just%20visited%20your%20Literary%20Work%20Copyright%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Literary Work Copyright Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides copyright registration for authors, publishers, and software companies in major cities across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">Literary Work Copyright by City</p>
                <p class="pa-block-sub">Expert copyright registration for books, manuscripts, and software</p>
                <div class="pa-city-grid">
                    <a href="/copyright-registration-for-literary-work/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration-for-literary-work/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/copyright-registration-for-literary-work/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/copyright-registration-for-literary-work/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related Copyright and IP Services</p>
                <p class="pa-block-sub">Comprehensive intellectual property protection</p>
                <div class="pa-cross-grid">
                    <a href="/copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/brand-copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Brand Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/logo-copyright-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Logo Copyright</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/copyright-assignment" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Copyright Assignment</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/patent-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Patent Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually - aligned to Copyright Act amendments, fee revisions, and Copyright Office procedural changes. Next review: March 2027.</p>
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






<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
