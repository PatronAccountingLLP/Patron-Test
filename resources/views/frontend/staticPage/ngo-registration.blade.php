
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>NGO Registration in India - Trust, Society & Section 8 Co</title>
    <meta name="description" content="Register an NGO in India as Trust, Society, or Section 8 Company. Starting at Rs 5,000. 15-30 day process. Expert CA and CS support from Patron Accounting.">
    <link rel="canonical" href="/ngo-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO Registration in India - Trust, Society & Section 8 Co">
    <meta property="og:description" content="Register an NGO in India as Trust, Society, or Section 8 Company. Starting at Rs 5,000. 15-30 day process. Expert CA and CS support from Patron Accounting.">
    <meta property="og:url" content="/ngo-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO Registration in India - Trust, Society & Section 8 Co">
    <meta name="twitter:description" content="Register an NGO in India as Trust, Society, or Section 8 Company. Starting at Rs 5,000. 15-30 day process. Expert CA and CS support from Patron Accounting.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "NGO Registration in India: Trust, Society & Section 8",
          "description": "Register an NGO in India as Trust, Society, or Section 8 Company. Starting at Rs 5,000. 15-30 day process. Expert CA and CS support from Patron Accounting.",
          "url": "https://www.patronaccounting.com/ngo-registration",
          "serviceType": "NGO Registration in India: Trust, Society & Section 8",
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
            "url": "https://www.patronaccounting.com/ngo-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "5000",
              "maxPrice": "15000",
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
              "name": "NGO Registration in India: Trust, Society & Section 8",
              "item": "https://www.patronaccounting.com/ngo-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to register an NGO in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "An NGO can be registered as a Trust under the Indian Trusts Act, 1882, a Society under the Societies Registration Act, 1860, or a Section 8 Company under Section 8 of the Companies Act, 2013. The process involves choosing a name, preparing the governing document (Trust Deed, MOA, or AOA), filing with the relevant registering authority, and obtaining the registration certificate. Post-registration, apply for PAN, 12A, and 80G."
              }
            },
            {
              "@type": "Question",
              "name": "What are the 3 types of NGO registration in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The three types are: (1) Trust - governed by the Indian Trusts Act, 1882, requiring 2 trustees and a notarised Trust Deed; (2) Society - governed by the Societies Registration Act, 1860, requiring 7 founding members and an MOA; (3) Section 8 Company - governed by Section 8 of the Companies Act, 2013, requiring 2 directors and filing on the MCA portal."
              }
            },
            {
              "@type": "Question",
              "name": "NGO kaise register kare - NGO banane ka tarika kya hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "NGO register karne ke liye sabse pehle decide karo ki Trust, Society, ya Section 8 Company banana hai. Trust ke liye 2 log chahiye aur Trust Deed notarise karke Sub-Registrar office mein file karo. Society ke liye 7 members chahiye aur Registrar of Societies mein file karo. Section 8 ke liye MCA portal par SPICe+ form file karo. Patron Accounting poora process handle karta hai - call karo +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "How much does NGO registration cost in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "NGO registration cost varies by structure. Trust registration costs approximately Rs 5,000 to Rs 15,000 (including stamp duty and professional fees). Society registration costs Rs 8,500 to Rs 17,000. Section 8 Company registration costs Rs 17,000 to Rs 31,000 (including ROC fees and professional charges). Additional costs for 12A, 80G, and FCRA apply separately."
              }
            },
            {
              "@type": "Question",
              "name": "How many members are required to register an NGO?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Trust requires a minimum of 2 trustees (settler and at least 1 trustee). A Society requires a minimum of 7 founding members. A Section 8 Company requires a minimum of 2 directors and 2 shareholders (can be the same persons). All members must be at least 18 years of age."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Trust, Society, and Section 8 Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Trust is property-based with less compliance, governed by trustees under the Indian Trusts Act, 1882. A Society is a democratic membership organisation under the Societies Registration Act, 1860, with elected managing committee. A Section 8 Company has corporate governance under the Companies Act, 2013, with highest credibility, pan-India scope, and strict ROC compliance. Section 8 is preferred for CSR funding and foreign-funded projects."
              }
            },
            {
              "@type": "Question",
              "name": "NGO registration ke liye kitna time lagta hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trust registration mein 15 se 20 din lagte hain. Society registration mein 20 se 30 din lagte hain. Section 8 Company ka registration 20 se 30 din mein ho jata hai. 12A aur 80G ke liye additional 30 se 60 din lagte hain. Patron Accounting fast-track service bhi offer karta hai."
              }
            },
            {
              "@type": "Question",
              "name": "Can an NGO receive foreign donations?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but only after obtaining FCRA registration under the Foreign Contribution Regulation Act, 2010, from the Ministry of Home Affairs. The NGO must have been registered for at least 3 years and have spent at least Rs 15 lakh on charitable activities in the preceding 3 years to qualify for FCRA registration under Section 12(1)(a) of the FCRA, 2010. Quick Answers Is NGO registration mandatory? Not legally mandatory to form a charitable group, but registration is essential for legal identity, tax exemptions, bank accounts, government grants, CSR funding, and foreign donations. Can a single person register an NGO? No. A Trust needs minimum 2 trustees. A Society needs 7 members. A Section 8 Company needs 2 directors and 2 shareholders. What is NGO Darpan? A portal by NITI Aayog ( ngodarpan.gov.in ) that assigns a unique ID to registered NGOs, enabling access to government schemes, grants, and CSR funding. What tax benefits do registered NGOs get? 12A registration exempts the NGO's income from tax. 80G registration allows donors to claim 50% or 100% tax deduction on donations."
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
                        NGO Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Structures:</span> Trust, Society, or Section 8 Company</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000 (Trust) to Rs 15,000 (Section 8)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Members Required:</span> 2 Trustees / 7 Society Members / 2 Directors</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15 - 30 Working Days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20NGO%20Registration%20services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'NGO Registration',
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
    'ctaText'    => 'Get professional NGO registration support from Patron Accounting\'s CA and CS team.',
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
            <a href="#what-section" class="toc-btn">What Is NGO Registration</a>
            <a href="#who-section" class="toc-btn">Who Should Register</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Registration Process</a>
            <a href="#documents-section" class="toc-btn">Documents Required</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration in India - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Registration Services at a Glance</strong></p>
                    <p>An NGO in India can be registered as a Trust under the Indian Trusts Act, 1882, a Society under the Societies Registration Act, 1860, or a Section 8 Company under Section 8 of the Companies Act, 2013. Trusts require 2 trustees and a notarised trust deed. Societies need 7 founding members and a Memorandum of Association filed with the state Registrar of Societies. Section 8 Companies require 2 directors with DSC and DIN, filing SPICe+ on the MCA portal. Registration takes 15 to 30 working days. Patron Accounting handles the end-to-end process for all three structures.</p>
                </div>
                <p>Non-Governmental Organisations (NGOs) are the backbone of India's social development ecosystem. Whether you want to work in education, healthcare, women empowerment, environmental protection, or rural development, formal registration gives your NGO legal identity, tax exemptions under Sections 12A and 80G of the Income Tax Act, 1961, access to government grants, and eligibility for CSR funding under Section 135 of the Companies Act, 2013. Patron Accounting has helped register 500+ NGOs across all three structures with offices in Pune, Mumbai, Delhi, and Gurugram.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Laws</td><td>Indian Trusts Act, 1882 | Societies Registration Act, 1860 | Companies Act, 2013 (Section 8)</td></tr>
                        <tr><td>Applicable To</td><td>Social entrepreneurs, charitable foundations, educational institutions, healthcare nonprofits, religious trusts</td></tr>
                        <tr><td>Minimum Members</td><td>Trust: 2 | Society: 7 | Section 8: 2 directors + 2 shareholders</td></tr>
                        <tr><td>Timeline</td><td>Trust: 15-20 days | Society: 20-30 days | Section 8: 20-30 days</td></tr>
                        <tr><td>Cost (Professional Fees)</td><td>Trust: Rs 5,000-10,000 | Society: Rs 8,000-15,000 | Section 8: Rs 15,000-30,000</td></tr>
                        <tr><td>Regulatory Authority</td><td>Sub-Registrar (Trust) | Registrar of Societies (Society) | ROC, MCA (Section 8)</td></tr>
                        <tr><td>Key Portal</td><td><a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">https://ngodarpan.gov.in</a> (NITI Aayog NGO Darpan)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p></p>
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
                    
                    <p>NGO Registration is the legal process of incorporating a non-profit organisation in India under one of three statutes - the Indian Trusts Act, 1882, the Societies Registration Act, 1860, or Section 8 of the Companies Act, 2013 - to carry out charitable, educational, religious, or social welfare activities.</p>
                    <p>Registration provides the NGO with a separate legal identity, the ability to hold property, open bank accounts, receive domestic and foreign donations (subject to <a href="/fcra-registration">FCRA registration</a> under the Foreign Contribution Regulation Act, 2010), and claim tax exemptions. The choice of structure depends on the NGO's objectives, geographic scope, governance preference, and funding strategy.</p>
                    <p>India has over 3.4 million registered NGOs as per the Central Statistical Organisation. These entities are regulated by the respective registering authority - Sub-Registrar for trusts, state Registrar of Societies for societies, and the Registrar of Companies (ROC) under the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA)</a> for Section 8 companies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Registration:</strong></p>
                    <p><strong>Public Charitable Trust:</strong> An irrevocable arrangement where the settler transfers property/assets to trustees for the benefit of the public, governed by the Indian Trusts Act, 1882, or state-specific Public Trust Acts.</p>
                    <p><strong>Society:</strong> A membership-based organisation of 7 or more persons united for literary, scientific, charitable, or social welfare purposes, registered under the Societies Registration Act, 1860.</p>
                    <p><strong>Section 8 Company:</strong> A non-profit company incorporated under Section 8 of the Companies Act, 2013. Profits must be reinvested; no dividends to members.</p>
                    <p><strong>12A Registration:</strong> Registration under Section 12A of the Income Tax Act, 1961, that exempts the NGO's income from income tax.</p>
                    <p><strong>80G Certificate:</strong> Certificate under Section 80G of the Income Tax Act, 1961, that allows donors to claim 50% or 100% tax deduction on donations.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Trusted by 10,000+</span>
                        <strong>Businesses Across India</strong>
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
            <h2 class="section-title">Who Should Register an NGO?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Social Entrepreneurs:</strong> Individuals or groups planning charitable, educational, healthcare, or environmental initiatives.</li>
                    <li><strong>Educational Institutions:</strong> Schools, colleges, vocational training centres operating on a non-profit basis.</li>
                    <li><strong>Healthcare Nonprofits:</strong> Hospitals, clinics, and health awareness programmes serving underprivileged communities.</li>
                    <li><strong>Religious and Cultural Bodies:</strong> Temples, churches, mosques, gurudwaras, and cultural organisations operating charitable programmes.</li>
                    <li><strong>CSR Project Implementers:</strong> Entities that wish to receive CSR funds under Section 135 of the Companies Act, 2013, must be registered under Section 12A and 80G, and hold CSR-1 registration.</li>
                    <li><strong>Foreign-Funded Organisations:</strong> NGOs seeking to receive foreign contributions must first register domestically and then obtain <a href="/fcra-registration">FCRA registration</a> under the Foreign Contribution Regulation Act, 2010.</li>
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
            <h2 class="section-title">Patron Accounting NGO Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>Drafting the trust deed, name approval, notarisation, registration with the Sub-Registrar, PAN and TAN application</td></tr>
                        <tr><td>Society Registration</td><td>Preparation of Memorandum of Association and Rules & Regulations, name approval, filing with the Registrar of Societies, obtaining the registration certificate</td></tr>
                        <tr><td>Section 8 Company Registration</td><td>DSC and DIN for directors, SPICe+ filing on <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA portal</a>, MOA and AOA drafting, Section 8 license and Certificate of Incorporation</td></tr>
                        <tr><td>12A and 80G Registration</td><td>Application to the Income Tax Department for tax exemption (12A) and donor tax benefit (80G) certificates using Form 10A</td></tr>
                        <tr><td>FCRA Registration</td><td>Application under the Foreign Contribution Regulation Act, 2010, for NGOs seeking to receive foreign donations</td></tr>
                        <tr><td>NGO Darpan Registration</td><td>Registration on the <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">NITI Aayog NGO Darpan portal</a> for unique ID issuance and government scheme eligibility</td></tr>

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
            <h2 class="section-title">7-Step Process for NGO Registration in India</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From choosing the right structure to obtaining 12A, 80G, and NGO Darpan registration - Patron Accounting handles every step of your NGO incorporation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Choose the Right NGO Structure</h3>
        <p class="step-description">Select between Trust, Society, or Section 8 Company based on objectives, member count, governance preference, and geographic scope. Trusts suit property-based charitable work. Societies suit membership-driven welfare. Section 8 suits nationwide operations with corporate governance under the Companies Act, 2013.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert structure advisory</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tailored to your goals</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="20" width="40" height="55" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="40" y="10" width="40" height="55" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <rect x="70" y="20" width="40" height="55" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <text x="30" y="52" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Trust</text>
                    <text x="60" y="42" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Society</text>
                    <text x="90" y="52" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sec 8</text>
                </svg>
            </div>
            <span class="illustration-label">Choose Structure</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Finalise the Name and Objectives</h3>
        <p class="step-description">Choose a unique name that does not violate the Emblems and Names (Prevention of Improper Use) Act, 1950. Define charitable objectives clearly in the governing document (Trust Deed / MOA / AOA).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name availability check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objective drafting</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="82" y1="62" x2="105" y2="85" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <text x="60" y="44" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NGO</text>
                </svg>
            </div>
            <span class="illustration-label">Name Search</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare the Governing Document</h3>
        <p class="step-description">Trust: Draft and notarise the Trust Deed on stamp paper. Society: Prepare MOA and Rules & Regulations, signed by all 7 founding members. Section 8: Draft MOA and AOA with non-profit objectives; obtain DSC and DIN for all proposed directors.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Legal document drafting</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance-ready formats</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="35" y1="30" x2="85" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="35" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="35" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="35" y1="66" x2="65" y2="66" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File the Registration Application</h3>
        <p class="step-description">Trust: Submit the notarised Trust Deed to the local Sub-Registrar. Society: File the MOA, Rules, and member affidavits with the state Registrar of Societies. Section 8: File SPICe+ Part A and Part B on the MCA portal along with INC-12.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online & offline filing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Error-free submission</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="15" width="70" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <path d="M60 30L60 55" stroke="#14365F" stroke-width="2"/>
                    <path d="M50 40L60 30L70 40" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="40" y1="62" x2="80" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Obtain the Registration Certificate</h3>
        <p class="step-description">Trust: The Sub-Registrar issues the Trust Deed registration certificate within 7 to 15 days. Society: The Registrar of Societies issues the Certificate of Registration within 20 to 30 days. Section 8: The ROC issues the Certificate of Incorporation along with the Section 8 License within 20 to 30 days.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issuance</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15-30 working days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="10" width="70" height="60" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <circle cx="60" cy="35" r="15" fill="#fff" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M53 35l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="40" y="60" width="40" height="8" rx="3" fill="#F5A623" opacity="0.5"/>
                </svg>
            </div>
            <span class="illustration-label">Certificate Issued</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Apply for PAN, TAN, and Bank Account</h3>
        <p class="step-description">All NGO structures must obtain PAN and TAN from the Income Tax Department. Open a bank account in the NGO's name with the registration certificate, PAN, and board resolution.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN & TAN application</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank account opening</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="25" width="90" height="50" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="25" y="35" width="30" height="8" rx="2" fill="#F5A623" opacity="0.6"/>
                    <rect x="25" y="50" width="50" height="4" rx="2" fill="#14365F" opacity="0.2"/>
                    <rect x="25" y="58" width="40" height="4" rx="2" fill="#14365F" opacity="0.2"/>
                    <circle cx="88" cy="50" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                    <text x="88" y="54" font-size="9" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">&#8377;</text>
                </svg>
            </div>
            <span class="illustration-label">Bank & PAN Ready</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Apply for 12A, 80G, NGO Darpan, and FCRA</h3>
        <p class="step-description">File Form 10A with the Income Tax Department for 12A and 80G registration. Register on the NITI Aayog NGO Darpan portal for a unique NGO ID. If foreign funding is anticipated, apply for FCRA registration with the Ministry of Home Affairs.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax exemption setup</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Government scheme access</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M60 10L60 75" stroke="#14365F" stroke-width="2"/>
                    <path d="M60 10L30 30L60 50L90 30Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <circle cx="60" cy="75" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M53 75l5 5 10-10" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Fully Compliant</span>
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
            <h2 class="section-title">Documents Required for NGO Registration</h2>
            <div class="content-text">
                
                <h3>For Trust Registration</h3>
                <ul>
                    <li>Trust Deed on appropriate stamp paper (stamp duty varies by state)</li>
                    <li>PAN Card and Aadhaar of all trustees</li>
                    <li>Address proof of registered office</li>
                    <li>Passport-sized photographs of all trustees</li>
                    <li>NOC from property owner (if rented)</li>
                </ul>
                <h3>For Society Registration</h3>
                <ul>
                    <li>Memorandum of Association (MOA) signed by all 7 founding members</li>
                    <li>Rules and Regulations of the Society</li>
                    <li>Affidavits from all members (attested by Notary/Oath Commissioner)</li>
                    <li>PAN Card and ID proof (Aadhaar/Voter ID/Passport) of all members</li>
                    <li>Address proof of registered office with NOC</li>
                    <li>Authority letter appointing office bearers</li>
                </ul>
                <h3>For Section 8 Company</h3>
                <ul>
                    <li>DSC and DIN of all proposed directors</li>
                    <li>MOA and AOA with non-profit objectives</li>
                    <li>INC-12 (License application) with declaration in INC-15</li>
                    <li>Estimated income and expenditure for 3 years</li>
                    <li>PAN, Aadhaar, and address proof of all directors</li>
                    <li>Registered office address proof with NOC</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and Solutions in NGO Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Choosing between Trust, Society, and Section 8</td><td>Wrong structure limits funding, tax exemptions, or geographic scope</td><td>Our CA and CS team assesses your objectives, scale, and funding strategy to recommend the optimal structure</td></tr>
                        <tr><td>MOA/Trust Deed rejection due to vague objectives</td><td>Registration application returned, causing delays</td><td>We draft objectives with precise charitable language that satisfies the registering authority and aligns with 12A/80G eligibility</td></tr>
                        <tr><td>Name rejection by the Registrar</td><td>Re-filing delays of 2-4 weeks</td><td>We conduct pre-filing name availability checks and prepare 2 to 3 alternative names</td></tr>
                        <tr><td>Delayed 12A/80G registration post-incorporation</td><td>NGO cannot receive tax-exempt donations for months</td><td>We file Form 10A for 12A and 80G simultaneously with the primary registration to minimise the gap</td></tr>

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
            <h2 class="section-title">NGO Registration Fees and Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration - Government Fees</td><td>Rs 500 - Rs 5,000 (stamp duty varies by state)</td></tr>
                        <tr><td>Trust Registration - Professional Fees</td><td>Rs 5,000 - Rs 10,000</td></tr>
                        <tr><td>Society Registration - Government Fees</td><td>Rs 500 - Rs 2,000 (state Registrar fee)</td></tr>
                        <tr><td>Society Registration - Professional Fees</td><td>Rs 8,000 - Rs 15,000</td></tr>
                        <tr><td>Section 8 Company - Government Fees</td><td>Rs 2,000 - Rs 6,000 (ROC + stamp duty)</td></tr>
                        <tr><td>Section 8 Company - Professional Fees</td><td>Rs 15,000 - Rs 25,000</td></tr>
                        <tr><td>12A + 80G Registration</td><td>Rs 5,000 - Rs 10,000 (no government fee)</td></tr>
                        <tr><td>FCRA Registration</td><td>Rs 15,000 - Rs 25,000 (includes Rs 5,000 govt fee)</td></tr>
                        <tr><td>NGO Darpan Registration</td><td>Rs 2,000 - Rs 5,000 (no government fee)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 6,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20an%20NGO%20in%20India.%20Please%20share%20details%20and%20pricing." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for NGO Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>15 to 20 working days</td></tr>
                        <tr><td>Society Registration</td><td>20 to 30 working days</td></tr>
                        <tr><td>Section 8 Company Registration</td><td>20 to 30 working days</td></tr>
                        <tr><td>12A and 80G Approval</td><td>30 to 60 days (post-registration)</td></tr>
                        <tr><td>NGO Darpan Registration</td><td>7 to 30 days (post-submission)</td></tr>
                        <tr><td>FCRA Registration</td><td>90 to 120 days (after 3 years of operations)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pro Tip:</strong> Section 8 Company registration via SPICe+ on the MCA portal is the fastest online route for nationwide NGO operations. Patron Accounting offers fast-track filing with dedicated CA and CS support to minimise delays.</p>

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
            <h2 class="section-title">Benefits of Professional NGO Registration Assistance</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Structure Advisory</h3>
                <p class="feature-text">Choosing the wrong structure can limit your NGO's ability to receive foreign funding, claim tax exemptions, or operate nationwide. Professional guidance ensures the right fit.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                <h3 class="feature-title">Legally Sound Governing Documents</h3>
                <p class="feature-text">The Trust Deed, MOA, and AOA are the foundation of your NGO. Imprecise drafting leads to rejection by registering authorities and denial of 12A/80G benefits.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">12A/80G/FCRA Integration</h3>
                <p class="feature-text">We file for all post-registration certifications concurrently, saving 60 to 90 days compared to sequential filing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Ongoing Compliance Support</h3>
                <p class="feature-text">Annual return filing, audit, board meeting compliance, and renewal tracking are handled by our team - so you focus on your mission.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust vs Society vs Section 8 Company - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Trust</th><th>Society</th><th>Section 8 Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Indian Trusts Act, 1882 / State Public Trust Acts</td><td>Societies Registration Act, 1860</td><td>Companies Act, 2013 (Section 8)</td></tr>
                        <tr><td>Minimum Members</td><td>2 Trustees</td><td>7 Founding Members</td><td>2 Directors + 2 Shareholders</td></tr>
                        <tr><td>Governing Document</td><td>Trust Deed</td><td>MOA + Rules & Regulations</td><td>MOA + AOA</td></tr>
                        <tr><td>Registering Authority</td><td>Local Sub-Registrar</td><td>State Registrar of Societies</td><td>Registrar of Companies (MCA)</td></tr>
                        <tr><td>Geographic Scope</td><td>Local/State</td><td>State (inter-state requires amendments)</td><td>Pan-India from incorporation</td></tr>
                        <tr><td>Governance</td><td>Trustees (less democratic)</td><td>Elected managing committee (democratic)</td><td>Board of Directors (corporate governance)</td></tr>
                        <tr><td>Tax Exemption</td><td>12A + 80G eligible</td><td>12A + 80G eligible</td><td>12A + 80G eligible; CARO exempt</td></tr>
                        <tr><td>Stamp Duty</td><td>Applicable on Trust Deed</td><td>Minimal</td><td>Exempted in most states</td></tr>
                        <tr><td>Credibility</td><td>Moderate</td><td>Moderate</td><td>High (MCA regulated)</td></tr>
                        <tr><td>Annual Compliance</td><td>Low</td><td>Moderate</td><td>High (ROC filings, audit, board meetings)</td></tr>
                        <tr><td>Best For</td><td>Property-based charity, religious trusts</td><td>Community welfare, cultural bodies</td><td>Nationwide NGOs, CSR-funded projects</td></tr>

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
                
                <p>Patron Accounting also provides end-to-end support for:</p>
                <ul>
                    <li><a href="/section8-company-registration">Section 8 Company Registration</a> - Non-profit company incorporation under the Companies Act, 2013</li>
                    <li>Society Registration in India - Membership-based non-profit under the Societies Registration Act, 1860</li>
                    <li><a href="#">12A and 80G Registration</a> - Tax exemption and donor benefit certificates</li>
                    <li><a href="/fcra-registration">FCRA Registration</a> - Foreign contribution registration for NGOs</li>
                    <li><a href="/ngo-and-non-profit-accounting-services">NGO Accounting Services</a> - Dedicated accounting for non-profit organisations</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for NGO Registration</h2>
            <div class="content-text">
                
                <h3>Governing Acts</h3>
                <ul>
                    <li><strong>Indian Trusts Act, 1882</strong> - Governs private and public charitable trusts; state-specific Public Trust Acts apply in Maharashtra, Gujarat, Rajasthan, and Madhya Pradesh</li>
                    <li><strong>Societies Registration Act, 1860</strong> - Governs registration and regulation of societies; state amendments apply</li>
                    <li><strong>Companies Act, 2013, Section 8</strong> - Governs Section 8 non-profit companies; ROC/MCA regulated</li>
                    <li><strong>Income Tax Act, 1961, Section 12A</strong> - Tax exemption for registered NGOs</li>
                    <li><strong>Income Tax Act, 1961, Section 80G</strong> - Donor tax deduction for donations to registered NGOs</li>
                    <li><strong>Foreign Contribution Regulation Act, 2010 (FCRA)</strong> - Governs receipt of foreign donations by Indian NGOs</li>
                </ul>
                <h3>Key Sections</h3>
                <ul>
                    <li><strong>Section 8(1), Companies Act, 2013:</strong> License for non-profit companies with charitable objectives</li>
                    <li><strong>Section 12A, Income Tax Act, 1961:</strong> Registration for income tax exemption of NGOs</li>
                    <li><strong>Section 80G, Income Tax Act, 1961:</strong> Tax deduction for donors</li>
                    <li><strong>Section 135, Companies Act, 2013:</strong> CSR obligation - companies with net worth Rs 500 crore+, turnover Rs 1,000 crore+, or profit Rs 5 crore+ must spend 2% of average net profit on CSR through registered entities</li>
                    <li><strong>Section 11(1)(a), FCRA, 2010:</strong> Registration for receiving foreign contributions</li>
                </ul>
                <h3>Penalty Provisions</h3>
                <ul>
                    <li><strong>Section 447, Companies Act, 2013:</strong> Fraud in connection with Section 8 company - imprisonment of 6 months to 10 years and fine of Rs 1 lakh to 3 times the amount involved</li>
                    <li><strong>Section 12, Societies Registration Act, 1860:</strong> Governing body personally liable for improper use of society funds</li>
                    <li><strong>Section 13, Income Tax Act, 1961:</strong> Loss of 12A exemption if NGO income is used for non-charitable purposes or for benefit of specified persons</li>
                </ul>
                <p><strong>Regulatory Authority:</strong> Sub-Registrar (Trusts) | State Registrar of Societies (Societies) | Registrar of Companies, MCA (Section 8) | Income Tax Department (12A/80G) | Ministry of Home Affairs (FCRA)</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - NGO Registration in India</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about registering an NGO in India as Trust, Society, or Section 8 Company.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to register an NGO in India?</h3>
                        <div class="faq-expanded__a"><p>An NGO can be registered as a Trust under the Indian Trusts Act, 1882, a Society under the Societies Registration Act, 1860, or a Section 8 Company under Section 8 of the Companies Act, 2013. The process involves choosing a name, preparing the governing document (Trust Deed, MOA, or AOA), filing with the relevant registering authority, and obtaining the registration certificate. Post-registration, apply for PAN, 12A, and 80G.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the 3 types of NGO registration in India?</h3>
                        <div class="faq-expanded__a"><p>The three types are: (1) Trust - governed by the Indian Trusts Act, 1882, requiring 2 trustees and a notarised Trust Deed; (2) Society - governed by the Societies Registration Act, 1860, requiring 7 founding members and an MOA; (3) Section 8 Company - governed by Section 8 of the Companies Act, 2013, requiring 2 directors and filing on the MCA portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">NGO kaise register kare - NGO banane ka tarika kya hai?</h3>
                        <div class="faq-expanded__a"><p>NGO register karne ke liye sabse pehle decide karo ki Trust, Society, ya Section 8 Company banana hai. Trust ke liye 2 log chahiye aur Trust Deed notarise karke Sub-Registrar office mein file karo. Society ke liye 7 members chahiye aur Registrar of Societies mein file karo. Section 8 ke liye MCA portal par SPICe+ form file karo. Patron Accounting poora process handle karta hai - call karo +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How much does NGO registration cost in India?</h3>
                        <div class="faq-expanded__a"><p>NGO registration cost varies by structure. Trust registration costs approximately Rs 5,000 to Rs 15,000 (including stamp duty and professional fees). Society registration costs Rs 8,500 to Rs 17,000. Section 8 Company registration costs Rs 17,000 to Rs 31,000 (including ROC fees and professional charges). Additional costs for 12A, 80G, and FCRA apply separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How many members are required to register an NGO?</h3>
                        <div class="faq-expanded__a"><p>A Trust requires a minimum of 2 trustees (settler and at least 1 trustee). A Society requires a minimum of 7 founding members. A Section 8 Company requires a minimum of 2 directors and 2 shareholders (can be the same persons). All members must be at least 18 years of age.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between Trust, Society, and Section 8 Company?</h3>
                        <div class="faq-expanded__a"><p>A Trust is property-based with less compliance, governed by trustees under the Indian Trusts Act, 1882. A Society is a democratic membership organisation under the Societies Registration Act, 1860, with elected managing committee. A Section 8 Company has corporate governance under the Companies Act, 2013, with highest credibility, pan-India scope, and strict ROC compliance. Section 8 is preferred for CSR funding and foreign-funded projects.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">NGO registration ke liye kitna time lagta hai?</h3>
                        <div class="faq-expanded__a"><p>Trust registration mein 15 se 20 din lagte hain. Society registration mein 20 se 30 din lagte hain. Section 8 Company ka registration 20 se 30 din mein ho jata hai. 12A aur 80G ke liye additional 30 se 60 din lagte hain. Patron Accounting fast-track service bhi offer karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can an NGO receive foreign donations?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only after obtaining FCRA registration under the Foreign Contribution Regulation Act, 2010, from the Ministry of Home Affairs. The NGO must have been registered for at least 3 years and have spent at least Rs 15 lakh on charitable activities in the preceding 3 years to qualify for FCRA registration under Section 12(1)(a) of the FCRA, 2010.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is NGO registration mandatory?</strong> Not legally mandatory to form a charitable group, but registration is essential for legal identity, tax exemptions, bank accounts, government grants, CSR funding, and foreign donations.</p>
                <p><strong>Can a single person register an NGO?</strong> No. A Trust needs minimum 2 trustees. A Society needs 7 members. A Section 8 Company needs 2 directors and 2 shareholders.</p>
                <p><strong>What is NGO Darpan?</strong> A portal by NITI Aayog (<a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">ngodarpan.gov.in</a>) that assigns a unique ID to registered NGOs, enabling access to government schemes, grants, and CSR funding.</p>
                <p><strong>What tax benefits do registered NGOs get?</strong> 12A registration exempts the NGO's income from tax. 80G registration allows donors to claim 50% or 100% tax deduction on donations.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Register Your NGO Now?</h2>
            <div class="content-text">
                
                <p>Without registration, an NGO cannot open a bank account in its name, receive tax-exempt donations, apply for government grants, participate in CSR funding under Section 135 of the Companies Act, 2013, or receive foreign contributions under FCRA. Donors to unregistered NGOs cannot claim tax deductions under Section 80G. Operating without registration also exposes members to personal liability for the organisation's debts and obligations. Early registration enables the NGO to build a track record required for FCRA eligibility (3 years) and CSR-1 registration.</p>
                <p><strong>Register your NGO today - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20an%20NGO%20in%20India.%20Please%20share%20details%20and%20pricing." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your NGO with Expert CA and CS Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">NGO Registration in India is the foundational step for any individual or group seeking to create sustainable social impact. The three legal structures - Trust, Society, and Section 8 Company - each serve distinct needs, from localised charitable trusts to nationwide non-profit corporations. With registration comes legal identity, tax exemptions under Sections 12A and 80G of the Income Tax Act, eligibility for CSR funding, and the ability to receive foreign donations under FCRA.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's CA and CS team provides end-to-end NGO registration support across all three structures, along with 12A, 80G, FCRA, and NGO Darpan registration. With 15+ years of practice, offices in Pune, Mumbai, Delhi, and Gurugram, and 10,000+ businesses served, the firm delivers reliable, efficient, and compliant NGO registration across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20an%20NGO%20in%20India.%20Please%20share%20details%20and%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Registration%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20NGO%20Registration%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Register your NGO from any city with Patron Accounting's dedicated CA and CS support - in-person and remote.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/ngo-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/ngo-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/ngo-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/ngo-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/ngo-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/ngo-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/ngo-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/ngo-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for NGO Registration</div>
                <div class="pa-cross-grid">
                    <a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fcra-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FCRA Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/ngo-and-non-profit-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 6 months or when significant regulatory changes occur - including Companies Act amendments, FCRA rule changes, Income Tax Act changes to 12A/80G provisions, CSR threshold revisions, or state-specific Society Act amendments.</p>
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
