
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trademark Registration India - Process, Fees & TM-A Filing</title>
    <meta name="description" content="Register your trademark online. Govt fee Rs 4,500 (individual/startup) or Rs 9,000 per class. 10-year validity. 45 NICE classes. Form TM-A on IP India.">
    <link rel="canonical" href="/trademark-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Registration India - Process, Fees & TM-A Filing">
    <meta property="og:description" content="Register your trademark online. Govt fee Rs 4,500 (individual/startup) or Rs 9,000 per class. 10-year validity. 45 NICE classes. Form TM-A on IP India.">
    <meta property="og:url" content="/trademark-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Registration India - Process, Fees & TM-A Filing">
    <meta name="twitter:description" content="Register your trademark online. Govt fee Rs 4,500 (individual/startup) or Rs 9,000 per class. 10-year validity. 45 NICE classes. Form TM-A on IP India.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Trademark Registration in India: Online Process & Fees",
          "description": "Register your trademark online. Govt fee Rs 4,500 (individual/startup) or Rs 9,000 per class. 10-year validity. 45 NICE classes. Form TM-A on IP India.",
          "url": "https://www.patronaccounting.com/trademark-registration",
          "serviceType": "Trademark Registration in India: Online Process & Fees",
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
            "url": "https://www.patronaccounting.com/trademark-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "4500",
              "maxPrice": "9000",
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
              "name": "Trademark Registration in India: Online Process & Fees",
              "item": "https://www.patronaccounting.com/trademark-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is trademark registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark registration is the legal process of obtaining exclusive rights over a distinctive mark (brand name, logo, slogan, sound, or shape) for specific goods or services under the Trade Marks Act, 1999. Registration is done online via Form TM-A on ipindia.gov.in. It gives the owner the exclusive right to use the mark, take legal action against infringers, and use the registered R symbol. The mark is valid for 10 years and renewable indefinitely."
              }
            },
            {
              "@type": "Question",
              "name": "How to register a trademark in India online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Conduct a trademark search on the IP India database. Visit ipindia.gov.in, create an account, and file Form TM-A with: applicant details, mark type (word/device), NICE class, goods/services specification, and mark image. Upload documents (PAN, Aadhaar, business registration, Form TM-48). Pay government fee (Rs 4,500 or Rs 9,000 per class) online. Submit with DSC or through a trademark agent."
              }
            },
            {
              "@type": "Question",
              "name": "Trademark registration kaise kare - brand name register kaise karaye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark register karne ke liye pehle IP India database par search karo ki aapke jaisa mark pehle se registered toh nahi hai. Phir ipindia.gov.in par jaake Form TM-A bharo - apna brand name ya logo, NICE class (45 classes mein se sahi class chuno), goods/services description, aur applicant details dalo. Documents upload karo - PAN, Aadhaar, business proof, logo image. Government fee Rs 4,500 (individual/startup/MSME) ya Rs 9,000 (company) per class online pay karo. 6 se 12 mahine mein registration ho jata hai. Patron Accounting poora process handle karta hai - +91 945 945 6700 ."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for trademark registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fee for online filing: Rs 4,500 per class for individuals, DPIIT-recognised startups, and Udyam-registered MSMEs. Rs 9,000 per class for companies, LLPs, and other entities. Physical filing: Rs 5,000 (individual) or Rs 10,000 (company) per class. Each NICE class requires a separate application and fee. No government fee for objection reply or hearing."
              }
            },
            {
              "@type": "Question",
              "name": "How long does trademark registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Without objection or opposition: 6 to 8 months from filing to registration certificate. With objection reply: 10 to 12 months. With objection, hearing, and opposition: 12 to 18 months. Examination stage (3 to 6 months from filing) is typically the longest wait."
              }
            },
            {
              "@type": "Question",
              "name": "What is the validity of a registered trademark?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A registered trademark is valid for 10 years from the date of filing the application (not the date of registration). It can be renewed indefinitely for successive 10-year periods by filing Form TM-R and paying the renewal fee before expiry. Late renewal with surcharge is possible within 6 months of expiry."
              }
            },
            {
              "@type": "Question",
              "name": "Trademark registration ke baad kya karna padta hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Registration ke baad: (1) R symbol use karo sab packaging, labels, website, aur marketing material par. (2) Mark ko actively use karo - 5 saal tak use nahi kiya toh Section 47 ke tahat koi bhi removal petition file kar sakta hai. (3) 10 saal baad renewal file karo Form TM-R se. (4) Kisi bhi infringer ke khilaf legal action lo (Section 29). (5) Amazon Brand Registry aur Flipkart Brand Protection mein register karo."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between TM and R symbol?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The TM symbol can be used by anyone who claims trademark rights in a mark - even before filing or while the application is pending. It has no legal restriction. The R (registered) symbol can ONLY be used after the mark has been officially registered by the Trademark Registry. Using R without registration is a criminal offence under Section 107, punishable with imprisonment up to 3 years or fine or both. Quick Answers Can I register a trademark for multiple classes in one application? No. Indian trademark law requires a separate application for each NICE class. Each class has its own government fee. Is a trademark search mandatory before filing? Not legally mandatory, but highly recommended. A pre-filing search identifies potential conflicts and reduces the risk of Section 11 objections. What if someone is already using a similar mark but hasn't registered? Unregistered marks have limited common law protection through passing off. A registered mark has stronger statutory protection. Register as early as possible. Can I trademark a person's name? Yes, if the name has acquired distinctiveness as a trademark for specific goods/services. Common personal names may face Section 9 objections unless they have acquired secondary meaning."
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
                        Trademark Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Protects:</span> Brand Names, Logos, Slogans, Sounds, Shapes, and Combinations</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Government Fee:</span> Rs 4,500/class (Individual/Startup/MSME) | Rs 9,000/class (Company/LLP)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity:</span> 10 Years (Renewable Indefinitely) - strongest brand protection in India</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 6 to 12 Months (filing to registration) | Fully online on IP India</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Starting from INR Govt fee 4,500 + 2,499</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Registration',
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
    'ctaText'    => 'Get end-to-end trademark registration - from search and filing to registration certificate and renewal.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It?</a>
            <a href="#who-section" class="toc-btn">Who Should Register</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Lifecycle</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration - Complete Guide for India 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Registration Services at a Glance</strong></p>
                    <p>Trademark Registration under the Trade Marks Act, 1999 gives the owner exclusive legal rights to use a brand name, logo, slogan, or other distinctive mark in connection with specified goods or services. Registration is done online at <a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindia.gov.in</a> using Form TM-A. Government fee: Rs 4,500 per class for individuals, startups (DPIIT-recognised), and MSMEs (Udyam-registered); Rs 9,000 per class for companies, LLPs, and other entities. India follows the NICE Classification system with 45 classes (1-34 goods, 35-45 services). Upon registration, the owner can use the registered symbol and take legal action for infringement under Sections 29 and 103-104. The mark is valid for 10 years and renewable indefinitely.</p>
                </div>
                <p>Your brand name and logo are among the most valuable assets your business owns. In India, over 10 lakh trademark applications are filed annually, and the number is growing as businesses recognise that brand protection is not optional. A registered trademark gives you the exclusive right to use the mark, the legal power to stop infringers, and the commercial ability to license, franchise, and monetise your brand.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Trade Marks Act, 1999; Trade Marks Rules, 2017</td></tr>
                        <tr><td>Application Form</td><td>Form TM-A (online at ipindia.gov.in)</td></tr>
                        <tr><td>Govt Fee (Individual/Startup/MSME)</td><td>Rs 4,500 per class (50% concession from Rs 9,000)</td></tr>
                        <tr><td>Govt Fee (Company/LLP/Other)</td><td>Rs 9,000 per class</td></tr>
                        <tr><td>Classification</td><td>NICE Classification - 45 classes (1-34 goods, 35-45 services)</td></tr>
                        <tr><td>Validity</td><td>10 years from filing date (renewable indefinitely for 10-year periods)</td></tr>
                        <tr><td>Infringement Penalty</td><td>Sec 103-104: 6 months to 3 years imprisonment + Rs 50,000 to Rs 2,00,000 fine</td></tr>
                    </tbody>
                </table>
                </div>
                <p></p>
                <p>The Trade Marks Act, 1999 and the Trade Marks Rules, 2017 govern the entire process. Patron Accounting, with offices in Pune, Mumbai, Delhi, and Gurugram, provides end-to-end trademark registration for businesses, startups, and professionals across India. Keywords: <em>trademark registration online, trademark registration fees, register trademark India, TM registration, brand registration India, trademark kaise register kare, logo registration</em>.</p>
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
                <h2 class="section-title">What Is Trademark Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Trademark Registration is the legal process of obtaining exclusive rights over a distinctive mark (brand name, logo, slogan, sound, shape, colour combination, or any combination thereof) for specific goods or services, administered by the Trademark Registry under the Controller General of Patents, Designs and Trade Marks (CGPDTM), Ministry of Commerce and Industry.</p>
                    <p>Under Section 2(zb) of the Trade Marks Act, 1999, a trademark is defined as a mark capable of being represented graphically and capable of distinguishing the goods or services of one person from those of others. Section 18 provides the procedure for application. Upon registration, the owner acquires exclusive rights under Section 28 to use the mark and to obtain relief for infringement under Section 29.</p>
                    <p>The registration process involves filing Form TM-A online on the <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India portal</a>, examination by a Trademark Examiner for compliance with Sections 9 (absolute grounds) and 11 (relative grounds), publication in the Trademark Journal for a 4-month opposition window, and issuance of the Registration Certificate. The registered trademark is valid for 10 years from the filing date and can be renewed indefinitely under Section 25. After registration, the owner may use the R symbol; before registration, the TM symbol may be used.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Registration:</strong></p>
                    <ul>
                        <li><strong>Trademark (Section 2(zb)):</strong> A mark capable of graphical representation that distinguishes goods/services. Includes words, logos, numerals, figurative elements, colour combinations, shapes of goods, packaging, and sounds.</li>
                        <li><strong>NICE Classification:</strong> International classification system adopted by India - 45 classes (Classes 1-34 for goods, Classes 35-45 for services). Each application covers one class. See: <a href="https://www.wipo.int/classifications/nice/en/" target="_blank" rel="noopener">WIPO NICE Classification</a>.</li>
                        <li><strong>Wordmark vs Device Mark:</strong> A wordmark protects the textual identity regardless of font/style. A device mark protects a logo/design element (requires Vienna Codification during processing).</li>
                        <li><strong>Section 9 (Absolute Grounds):</strong> Refusal based on mark's own characteristics - non-distinctive, descriptive, customary, deceptive, or prohibited.</li>
                        <li><strong>Section 11 (Relative Grounds):</strong> Refusal based on conflict with an earlier registered or pending mark - identical/similar marks causing confusion.</li>
                        <li><strong>TM vs R Symbol:</strong> TM can be used by anyone claiming rights (even before registration). R can ONLY be used after official registration. Using R without registration is an offence under Section 107.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Trademark</span>
                        <strong>Registration Service</strong>
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
            <h2 class="section-title">Who Should Register a Trademark in India?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Startups and New Businesses:</strong> Register your brand name and logo before launch. Early registration establishes priority and prevents competitors from claiming similar marks.</li>
                    <li><strong>E-Commerce Sellers:</strong> Amazon Brand Registry, Flipkart Brand Protection, and Meesho Seller Hub require a trademark (registered or application number) for brand protection features.</li>
                    <li><strong>Franchise Businesses:</strong> Trademark registration is essential for franchise agreements - it defines the brand rights being licensed to franchisees.</li>
                    <li><strong>Exporters:</strong> International buyers verify trademark status. Indian registration supports international filings under the Madrid Protocol.</li>
                    <li><strong>Content Creators and Influencers:</strong> Personal brand names, channel names, and content series names can be trademarked to prevent imitation.</li>
                    <li><strong>Professional Service Firms:</strong> CA firms, law firms, consulting companies, and healthcare brands benefit from trademark protection to build trust.</li>
                    <li><strong>Manufacturers and FMCG Companies:</strong> Product names, packaging designs, and brand logos require trademark protection across relevant classes.</li>
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
            <h2 class="section-title">Patron Accounting Trademark Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Search and Clearance</td><td>Comprehensive search on the IP India database for identical and deceptively similar marks. Risk assessment report with go/no-go recommendation. See: <a href="/trademark-search-report">Trademark Search Report</a></td></tr>
                        <tr><td>Application Filing (Form TM-A)</td><td>End-to-end filing on <a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindia.gov.in</a> including class selection (NICE), goods/services specification, mark representation, applicant details, and government fee payment</td></tr>
                        <tr><td>Examination Report Response</td><td>Drafting and filing replies to Section 9 and Section 11 objections with legal arguments, evidence, and case law. See: <a href="/trademark-notice">Trademark Notice Reply</a></td></tr>
                        <tr><td>Hearing Representation</td><td>Preparation and representation at show-cause hearings before the Registrar. See: <a href="/trademark-hearing">Trademark Hearing</a></td></tr>
                        <tr><td>Opposition Defence</td><td>Filing counter-statements and evidence in opposition proceedings. See: <a href="/trademark-opposition">Trademark Opposition</a></td></tr>
                        <tr><td>Renewal and Portfolio Management</td><td>Timely renewal before the 10-year expiry. Multi-mark portfolio tracking and management. See: <a href="/trademark-renewal">Trademark Renewal</a></td></tr>

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
            <h2 class="section-title">7-Step Process for Trademark Registration in India</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Follow this step-by-step process to register your trademark online via Form TM-A on the IP India portal. Patron Accounting handles every step - from search to registration certificate.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Trademark Search</h3><p class="step-description">Before filing, conduct a comprehensive search on the IP India database (<a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindiaservices.gov.in</a>) to check if identical or deceptively similar marks exist in the same class. Patron Accounting provides a detailed search report with risk assessment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IP India search completed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Conflict risk assessed</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="66" y1="46" x2="80" y2="60" stroke="#14365F" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Search Complete</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select NICE Class and Prepare Specification</h3><p class="step-description">Identify the correct NICE class(es) for your goods or services (45 classes: 1-34 goods, 35-45 services). Draft a precise specification - generic or overly broad descriptions lead to objections. Each class requires a separate application.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NICE class(es) identified</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Specification drafted</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">45</text><text x="60" y="48" font-size="8" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">CLASSES</text><line x1="35" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Class Selected</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form TM-A on IP India Portal</h3><p class="step-description">Visit ipindia.gov.in. Fill Form TM-A with: applicant details, mark type (wordmark/device), mark representation, class and specification, filing basis, and applicant category. Pay government fee online: Rs 4,500 (individual/startup/MSME) or Rs 9,000 (company/LLP) per class.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form TM-A submitted</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Government fee paid</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M75 55l5 5 10-10" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Application Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Formality Check and Examination</h3><p class="step-description">The Registry performs a formality check. If passed, the application is assigned to an Examiner who reviews it under Sections 9 and 11. If no objections, the mark proceeds to publication. If objections are raised, an Examination Report is issued. See: <a href="/trademark-formality-check-fail">Formality Check Fail</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Formality check passed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Examination complete</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M52 35l6 6 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Examined</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Reply to Examination Report (If Objected)</h3><p class="step-description">If the Examiner raises objections, file a reply within 30 days (extendable by 30 days). Address Section 9 objections (prove distinctiveness) and Section 11 objections (differentiate from cited marks). See: <a href="/trademark-notice">Trademark Notice Reply</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Objection reply filed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Evidence submitted</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="70" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M90 15l10 55-6 2-10-55z" fill="#F5A623" opacity="0.8" stroke="#14365F" stroke-width="1"/><line x1="30" y1="20" x2="70" y2="20" stroke="#14365F" stroke-width="2" opacity="0.4"/><line x1="30" y1="32" x2="65" y2="32" stroke="#14365F" stroke-width="2" opacity="0.4"/></svg></div><span class="illustration-label">Reply Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Publication in Trademark Journal</h3><p class="step-description">Once accepted, the mark is published in the Trademark Journal for 4 months. During this period, any third party can file an opposition. If no opposition is filed, the mark proceeds to registration. See: <a href="/trademark-opposition">Trademark Opposition</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Published in Journal</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 4-month opposition window</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="50" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="60" y="10" width="50" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><line x1="20" y1="25" x2="50" y2="25" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="70" y1="25" x2="100" y2="25" stroke="#F5A623" stroke-width="2"/><text x="85" y="50" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">JOURNAL</text></svg></div><span class="illustration-label">Published</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Registration Certificate Issued</h3><p class="step-description">If no opposition is filed (or opposition is decided in your favour), the Trademark Registry issues a digitally signed Registration Certificate. The owner can now use the R symbol. The trademark is valid for 10 years from the filing date. Renewal must be filed before expiry. See: <a href="/trademark-renewal">Trademark Renewal</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> R symbol authorized</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><text x="60" y="38" font-size="24" fill="#25D366" font-weight="800" text-anchor="middle" font-family="Arial">R</text><circle cx="60" cy="40" r="20" fill="none" stroke="#25D366" stroke-width="1.5"/></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Trademark Registration</h2>
            <div class="content-text">
                
                <ul>
                    <li>Clear representation of the trademark (word or logo image in JPEG format)</li>
                    <li>Applicant's identity proof: Aadhaar and PAN</li>
                    <li>Proof of business registration: Certificate of Incorporation (company/LLP), Partnership Deed, or proprietorship proof</li>
                    <li>Address proof of the applicant (utility bill, rent agreement, or property document)</li>
                    <li>MSME Udyam Registration Certificate (for 50% fee concession)</li>
                    <li>DPIIT Startup India Recognition Certificate (for 50% fee concession)</li>
                    <li>Power of Attorney (Form TM-48) authorising the trademark agent</li>
                    <li>Affidavit of use with supporting evidence (invoices, advertisements) if claiming prior use date</li>
                    <li>Digital Signature Certificate (DSC) of the authorised signatory (for companies/LLPs)</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Trademark Registration and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Choosing the wrong NICE class</td><td>No protection for your actual goods/services; wasted filing fees</td><td>Patron Accounting's IP team analyses your business activities and recommends the correct class(es) based on NICE Classification (11th Edition)</td></tr>
                        <tr><td>Mark is too descriptive (Section 9 objection)</td><td>Examination Report issued; application stalled or refused</td><td>Choose distinctive, coined, or suggestive marks. If descriptive mark has acquired distinctiveness through use, prepare strong affidavit with evidence</td></tr>
                        <tr><td>Similar mark already exists (Section 11 objection)</td><td>Examination Report citing prior mark; risk of refusal</td><td>Thorough pre-filing search identifies conflicts. Modify mark, file in different class, or prepare differentiation strategy with consent letter</td></tr>
                        <tr><td>Application abandoned due to missed deadlines</td><td>Loss of filing fees, priority date, and brand protection</td><td>Patron Accounting tracks every deadline (30 days for objection reply, 4 months for opposition) and ensures timely response</td></tr>

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
            <h2 class="section-title">Trademark Registration - Government Fees and Professional Charges 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form TM-A Filing - Online (Individual/Startup/MSME)</td><td>Rs 4,500 per class</td></tr>
                        <tr><td>Form TM-A Filing - Online (Company/LLP/Other)</td><td>Rs 9,000 per class</td></tr>
                        <tr><td>Form TM-A Filing - Physical (Individual/Startup/MSME)</td><td>Rs 5,000 per class</td></tr>
                        <tr><td>Form TM-A Filing - Physical (Company/LLP/Other)</td><td>Rs 10,000 per class</td></tr>
                        <tr><td>Objection Reply (No Government Fee)</td><td>Professional fee only</td></tr>
                        <tr><td>Renewal (Per Class, Online)</td><td>Rs 4,500 (Individual) / Rs 9,000 (Company)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR Govt fee 4,500 + 2,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Trademark Registration Take in India?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Search (Patron Accounting)</td><td>1-2 working days</td></tr>
                        <tr><td>Application Filing</td><td>Same day after search approval</td></tr>
                        <tr><td>Formality Check</td><td>1-4 weeks</td></tr>
                        <tr><td>Examination and Report</td><td>3-6 months from filing</td></tr>
                        <tr><td>Objection Reply (if needed)</td><td>30-60 days</td></tr>
                        <tr><td>Publication in Trademark Journal</td><td>4-month opposition window</td></tr>
                        <tr><td>Registration Certificate</td><td>Within 1 month of publication ending</td></tr>
                        <tr><td>Total (No Objection/Opposition)</td><td>6-8 months</td></tr>
                        <tr><td>Total (With Objection + Hearing)</td><td>10-18 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron Accounting targets filing within 2 working days of document receipt.</strong> Startups with DPIIT recognition and MSMEs with Udyam registration get 50% concession on government fees (same rate as individuals). Each class requires separate filing and fee.</p>

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
            <h2 class="section-title">6 Benefits of Trademark Registration in India</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Exclusive Legal Rights (Section 28)</h3><p class="feature-text">The registered owner has the exclusive right to use the mark in connection with the registered goods/services. No other person can use an identical or deceptively similar mark in the same class.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Legal Action Against Infringers (Section 29)</h3><p class="feature-text">File infringement suits for injunction, damages, and accounts of profits. Criminal proceedings under Sections 103-104 can result in 6 months to 3 years imprisonment and Rs 50,000 to Rs 2,00,000 fine.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 16V8h3a3 3 0 010 6h-3m3-6l3 8"/></svg></div><h3 class="feature-title">Use of the Registered R Symbol</h3><p class="feature-text">Only a registered trademark owner can use the R symbol, signalling to consumers, competitors, and marketplaces that the mark is legally protected. Using R without registration is an offence under Section 107.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">E-Commerce Brand Protection</h3><p class="feature-text">Amazon Brand Registry, Flipkart Brand Protection, and other marketplaces require a registered trademark or pending application for brand protection tools, preventing counterfeit listings.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 class="feature-title">Licensing, Franchising, and Monetisation</h3><p class="feature-text">A registered trademark can be licensed (Section 49), assigned (Section 37), and used as security for loans. Franchise businesses require registered trademarks for licensing agreements.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">International Protection via Madrid Protocol</h3><p class="feature-text">India is a member of the Madrid Protocol. An Indian trademark registration can be used as a basis for international registration in 130+ countries through WIPO.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>
                <p><strong>4-Office Presence:</strong> Offices in Pune, Mumbai, Delhi, and Gurugram for in-person and remote trademark support across India.</p>
                <p>Patron Accounting's IP team provides end-to-end trademark registration services - from search and filing through objection reply, hearing, opposition, registration, and renewal. Our team of CAs and trademark professionals ensures accurate class selection, complete documentation, and timely deadline management.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Lifecycle - Status Tracker</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Status on IP India</th><th>Action Required</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Filing</td><td>New Application</td><td>None - await processing</td><td>Day 0</td></tr>
                        <tr><td>Vienna Codification</td><td>Send to Vienna Codification</td><td>None (device marks only)</td><td>1-4 weeks</td></tr>
                        <tr><td>Formality Check</td><td>Formalities Chk Pass / Fail</td><td>Reply to MIS-F if fail</td><td>1-4 weeks</td></tr>
                        <tr><td>Examination</td><td>Marked for Exam / Objected</td><td>Reply to objection if raised</td><td>3-6 months</td></tr>
                        <tr><td>Acceptance</td><td>Accepted / Advertised Before Acceptance</td><td>None - await publication</td><td>Post-examination</td></tr>
                        <tr><td>Publication</td><td>Published in Journal</td><td>Monitor for opposition</td><td>4 months</td></tr>
                        <tr><td>Opposition (if any)</td><td>Opposed</td><td>File counter-statement</td><td>4-12 months</td></tr>
                        <tr><td>Registration</td><td>Registered</td><td>Use R symbol; renew in 10 years</td><td>Post-publication</td></tr>
                        <tr><td>Renewal</td><td>Due for Renewal</td><td>File Form TM-R before expiry</td><td>Every 10 years</td></tr>

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
            <h2 class="section-title">Related Trademark and IP Services by Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/trademark-search-report">Trademark Search Report</a> - Pre-filing trademark availability search and risk assessment</li>
                    <li><a href="/trademark-formality-check-fail">Trademark Formality Check Fail</a> - Reply to procedural deficiencies before examination</li>
                    <li><a href="/trademark-notice">Trademark Notice / Objection Reply</a> - Expert response to Section 9 and Section 11 objections</li>
                    <li><a href="/trademark-hearing">Trademark Hearing</a> - Representation at show-cause hearing before the Registrar</li>
                    <li><a href="/trademark-opposition">Trademark Opposition</a> - Filing or defending trademark opposition proceedings</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Trademark Registration</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong> <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Trade Marks Act, 1999</a>; Trade Marks Rules, 2017; NICE Agreement (Classification)</p>
                <p><strong>Key Sections:</strong></p>
                <ul>
                    <li><strong>Section 2(zb):</strong> Definition of trademark - mark capable of graphical representation, distinguishing goods/services</li>
                    <li><strong>Section 9:</strong> Absolute grounds for refusal - non-distinctive, descriptive, deceptive, prohibited</li>
                    <li><strong>Section 11:</strong> Relative grounds for refusal - identical/similar to earlier mark</li>
                    <li><strong>Section 18:</strong> Procedure for application</li>
                    <li><strong>Section 25:</strong> Duration and renewal - 10 years, renewable indefinitely</li>
                    <li><strong>Section 28:</strong> Rights conferred by registration - exclusive right to use</li>
                    <li><strong>Section 29:</strong> Infringement of registered trademark</li>
                    <li><strong>Sections 103-104:</strong> Penalty - 6 months to 3 years imprisonment + Rs 50,000 to Rs 2,00,000 fine</li>
                    <li><strong>Section 107:</strong> Falsely representing a trademark as registered - offence</li>
                    <li><strong>Section 47:</strong> Removal from register for non-use (5 years)</li>
                </ul>
                <p><strong>Key Forms:</strong> TM-A (application), TM-M (amendment), TM-O (opposition/rectification), TM-R (renewal), TM-48 (Power of Attorney), TM-12 (reply to examination report)</p>
                <p><strong>Regulatory Authority:</strong> Controller General of Patents, Designs and Trade Marks (CGPDTM); Trademark Registry offices: Mumbai, Delhi, Kolkata, Chennai, Ahmedabad. Portal: <a href="https://ipindia.gov.in" target="_blank" rel="noopener">https://ipindia.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About Trademark Registration in India</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about trademark registration process, fees, timeline, classes, and legal requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is trademark registration?</h3>
                        <div class="faq-expanded__a"><p>Trademark registration is the legal process of obtaining exclusive rights over a distinctive mark (brand name, logo, slogan, sound, or shape) for specific goods or services under the Trade Marks Act, 1999. Registration is done online via Form TM-A on ipindia.gov.in. It gives the owner the exclusive right to use the mark, take legal action against infringers, and use the registered R symbol. The mark is valid for 10 years and renewable indefinitely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to register a trademark in India online?</h3>
                        <div class="faq-expanded__a"><p>Conduct a trademark search on the IP India database. Visit ipindia.gov.in, create an account, and file Form TM-A with: applicant details, mark type (word/device), NICE class, goods/services specification, and mark image. Upload documents (PAN, Aadhaar, business registration, Form TM-48). Pay government fee (Rs 4,500 or Rs 9,000 per class) online. Submit with DSC or through a trademark agent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Trademark registration kaise kare - brand name register kaise karaye?</h3>
                        <div class="faq-expanded__a"><p>Trademark register karne ke liye pehle IP India database par search karo ki aapke jaisa mark pehle se registered toh nahi hai. Phir ipindia.gov.in par jaake Form TM-A bharo - apna brand name ya logo, NICE class (45 classes mein se sahi class chuno), goods/services description, aur applicant details dalo. Documents upload karo - PAN, Aadhaar, business proof, logo image. Government fee Rs 4,500 (individual/startup/MSME) ya Rs 9,000 (company) per class online pay karo. 6 se 12 mahine mein registration ho jata hai. Patron Accounting poora process handle karta hai - <a href="tel:+919459456700">+91 945 945 6700</a>.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the fee for trademark registration?</h3>
                        <div class="faq-expanded__a"><p>Government fee for online filing: Rs 4,500 per class for individuals, DPIIT-recognised startups, and Udyam-registered MSMEs. Rs 9,000 per class for companies, LLPs, and other entities. Physical filing: Rs 5,000 (individual) or Rs 10,000 (company) per class. Each NICE class requires a separate application and fee. No government fee for objection reply or hearing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does trademark registration take?</h3>
                        <div class="faq-expanded__a"><p>Without objection or opposition: 6 to 8 months from filing to registration certificate. With objection reply: 10 to 12 months. With objection, hearing, and opposition: 12 to 18 months. Examination stage (3 to 6 months from filing) is typically the longest wait.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the validity of a registered trademark?</h3>
                        <div class="faq-expanded__a"><p>A registered trademark is valid for 10 years from the date of filing the application (not the date of registration). It can be renewed indefinitely for successive 10-year periods by filing Form TM-R and paying the renewal fee before expiry. Late renewal with surcharge is possible within 6 months of expiry.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Trademark registration ke baad kya karna padta hai?</h3>
                        <div class="faq-expanded__a"><p>Registration ke baad: (1) R symbol use karo sab packaging, labels, website, aur marketing material par. (2) Mark ko actively use karo - 5 saal tak use nahi kiya toh Section 47 ke tahat koi bhi removal petition file kar sakta hai. (3) 10 saal baad renewal file karo Form TM-R se. (4) Kisi bhi infringer ke khilaf legal action lo (Section 29). (5) Amazon Brand Registry aur Flipkart Brand Protection mein register karo.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between TM and R symbol?</h3>
                        <div class="faq-expanded__a"><p>The TM symbol can be used by anyone who claims trademark rights in a mark - even before filing or while the application is pending. It has no legal restriction. The R (registered) symbol can ONLY be used after the mark has been officially registered by the Trademark Registry. Using R without registration is a criminal offence under Section 107, punishable with imprisonment up to 3 years or fine or both.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can I register a trademark for multiple classes in one application?</strong> No. Indian trademark law requires a separate application for each NICE class. Each class has its own government fee.</p>
                <p><strong>Is a trademark search mandatory before filing?</strong> Not legally mandatory, but highly recommended. A pre-filing search identifies potential conflicts and reduces the risk of Section 11 objections.</p>
                <p><strong>What if someone is already using a similar mark but hasn't registered?</strong> Unregistered marks have limited common law protection through passing off. A registered mark has stronger statutory protection. Register as early as possible.</p>
                <p><strong>Can I trademark a person's name?</strong> Yes, if the name has acquired distinctiveness as a trademark for specific goods/services. Common personal names may face Section 9 objections unless they have acquired secondary meaning.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register Your Trademark - Protect Your Brand Legally</h2>
            <div class="content-text">
                
                <p>With over 10 lakh trademark applications filed annually in India, brand protection is more competitive than ever. Every day your brand remains unregistered, competitors and squatters can file similar marks. Registration starting from just Rs 4,500 government fee per class (with Patron Accounting's professional fee from Rs 2,499) delivers disproportionate value - exclusive legal rights, infringement enforcement, e-commerce brand protection, and international filing basis.</p>
                <p><strong>Start your trademark registration today.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation. We file within 2 working days of document receipt.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">End-to-End Trademark Registration - Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Trademark Registration under the Trade Marks Act, 1999 is the most powerful legal tool for protecting your brand identity in India. With government fees starting at just Rs 4,500 per class for individuals and startups, 10-year validity with indefinite renewal, and enforcement powers including imprisonment and fines for infringers, trademark registration delivers disproportionate value relative to its cost.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's IP team provides end-to-end trademark registration services covering search, class selection, Form TM-A filing, examination report response, hearing representation, opposition defence, renewal, and portfolio management. With 15+ years of practice, offices in Pune, Mumbai, Delhi, and Gurugram, and 10,000+ businesses served - from first-time founders to established enterprises.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get expert trademark registration assistance in your city. Patron Accounting serves clients across 8 major Indian cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Services</div><div class="pa-block-sub">Trademark registration in major cities</div><div class="pa-city-grid">
<a href="/trademark-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/trademark-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/trademark-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/trademark-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/trademark-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/trademark-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/trademark-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/trademark-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end trademark lifecycle support</div><div class="pa-cross-grid">
<a href="/trademark-search-report" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Search</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-formality-check-fail" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Formality Check Fail</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Notice Reply</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-hearing" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Hearing</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-opposition" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Opposition</div><div class="pa-card-sub">India</div></div></a>
<a href="/trademark-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Renewal</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed on a 6-monthly cycle (Tier 2 freshness). Review triggers include: Trade Marks Act amendment, TM Rules fee revision, NICE Classification update, IP India portal change, Madrid Protocol update, new Registrar circular, startup/MSME fee concession change.</p>
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
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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
