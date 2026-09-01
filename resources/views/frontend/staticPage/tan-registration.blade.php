

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>TAN Registration Online - Process, Form 49B & Application</title>
    <meta name="description" content="TAN registration via Form 49B under Section 203A. Fee Rs 77. Mandatory for TDS/TCS deductors. Online on Protean portal. 7-10 days. Expert CA and CS team.">
    <link rel="canonical" href="/tan-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TAN Registration Online - Process, Form 49B & Application">
    <meta property="og:description" content="TAN registration via Form 49B under Section 203A. Fee Rs 77. Mandatory for TDS/TCS deductors. Online on Protean portal. 7-10 days. Expert CA and CS team.">
    <meta property="og:url" content="/tan-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TAN Registration Online - Process, Form 49B & Application">
    <meta name="twitter:description" content="TAN registration via Form 49B under Section 203A. Fee Rs 77. Mandatory for TDS/TCS deductors. Online on Protean portal. 7-10 days. Expert CA and CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "TAN Registration: Process and Fee",
          "description": "TAN registration via Form 49B under Section 203A. Fee Rs 77. Mandatory for TDS/TCS deductors. Online on Protean portal. 7-10 days. Expert CA and CS team.",
          "url": "https://www.patronaccounting.com/tan-registration",
          "serviceType": "TAN Registration: Process and Fee",
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
            "url": "https://www.patronaccounting.com/tan-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "65",
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
              "name": "TAN Registration: Process and Fee",
              "item": "https://www.patronaccounting.com/tan-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is TAN mandatory for all businesses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TAN is mandatory for every person or entity liable to deduct TDS or collect TCS under the Income Tax Act. This includes employers paying salaries, businesses making rent/professional fee/contractor payments above thresholds, banks deducting TDS on interest, and sellers collecting TCS. Salaried individuals and HUFs not liable to deduct/collect tax do not need TAN."
              }
            },
            {
              "@type": "Question",
              "name": "What is the TAN application fee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The processing fee for Form 49B is Rs 77 (Rs 65 application charge + 18% GST). This is non-refundable even if the application is rejected. Payment via credit/debit card, net banking, UPI, or demand draft in favour of 'NSDL-TIN' payable at Mumbai. Same fee of Rs 77 applies for TAN correction or change applications."
              }
            },
            {
              "@type": "Question",
              "name": "Are any documents required for TAN application?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No supporting documents are required with Form 49B, whether filed online or offline. The application requires only the applicant's details: name, address in India, PAN, contact information, AO code, and designation. For online applications, the signed acknowledgement must be sent to Protean's Pune office within 15 days."
              }
            },
            {
              "@type": "Question",
              "name": "TAN number kaise le?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TAN number lene ke liye tin.tin.nsdl.com par jao aur 'Online Application for TAN (Form 49B)' click karo. Deductor category select karo (Company, Individual, Firm, etc.). Form mein naam, address, PAN, AO code fill karo. Rs 77 fee online pay karo. Acknowledgement download karke sign karo aur Protean Pune office bhejo 15 din ke andar. 7-10 din mein TAN allot ho jayega. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Can a single TAN be used for both TDS and TCS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. If a TAN has been allotted for TDS purposes, the same TAN is used for TCS as well. No separate application needed. The TAN is quoted in all TDS returns, TCS returns, challans, and certificates. Having more than one TAN for the same entity is illegal. However, different branches may have separate TANs."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not having TAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 272BB prescribes Rs 10,000 penalty for failure to apply for TAN. Same penalty applies for failure to quote TAN or quoting incorrect TAN in returns, challans, certificates, or documents. Additionally, TDS/TCS returns will not be accepted without TAN, and banks will not accept payment challans without a valid TAN."
              }
            },
            {
              "@type": "Question",
              "name": "TAN aur PAN mein kya fark hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TAN tax deduct karne wale ke liye hota hai (employer, company jo TDS katata hai). PAN taxpayer ke liye hota hai (har vyakti jo tax bharta hai). TAN Section 203A ke under allot hota hai, PAN Section 139A ke under. Dono 10-digit alphanumeric hain. TAN TDS/TCS returns mein quote hota hai, PAN ITR mein. TAN ki fee Rs 77 hai, PAN ki Rs 107. Dono lifetime valid hain."
              }
            },
            {
              "@type": "Question",
              "name": "Can branches of a company have separate TANs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Different branches or divisions of the same company can have separate TANs. The branch name and location must be mentioned in Form 49B. This is common for large companies and banks with multiple branches, each handling TDS/TCS independently. However, having duplicate TANs for the same entity/branch is illegal. Quick Answers Q: Does TAN expire? A: No. Lifetime validity, no renewal required. Q: Can PAN be quoted instead of TAN? A: Only for Sections 194IA, 194IB, 194M, and 194S. For all other TDS/TCS sections, TAN must be quoted. Q: How to check TAN status? A: Use 'Know Your TAN' on incometaxindia.gov.in or track on the NSDL-TIN website. Q: TAN for government deductors? A: Yes. Both government and non-government deductors are required to obtain TAN. Q: What is TRACES? A: TRACES is the Income Tax portal for TDS/TCS compliance - Form 16/16A download, challan status, and justification reports."
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
                        TAN Registration (Tax Deduction and Collection Account Number) in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>TAN:</span> 10-digit alphanumeric identifier for tax deductors and collectors under Section 203A of the Income Tax Act, 1961. Lifetime validity.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Mandatory For:</span> Every person deducting TDS or collecting TCS - employers, companies, businesses, banks, and government offices. No exceptions.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fee:</span> Rs 77 (Rs 65 + 18% GST) - non-refundable. No supporting documents required with Form 49B application.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-10 working days for allotment. Penalty for non-compliance: Rs 10,000 per instance under Section 272BB.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TAN%20Registration%20Enquiry&body=Hello%2C%0A%0AI%20need%20TAN%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TAN%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'TAN Registration',
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
    'ctaText'    => 'Get your TAN for TDS/TCS compliance with expert CA and CS support. Integrated with PAN, payroll, and return filing.',
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
            <a href="#what-section" class="toc-btn">What Is TAN</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">TAN vs PAN</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TAN Registration Services at a Glance</strong></p>
                    <p>TAN (Tax Deduction and Collection Account Number) is a unique 10-digit alphanumeric number issued to every person responsible for deducting or collecting tax at source. Under Section 203A, TAN must be quoted on all TDS/TCS returns, payment challans, and certificates. Application via Form 49B through Protean portal. Fee: Rs 77. No documents required. Lifetime validity. Penalty for non-compliance: Rs 10,000 (Section 272BB).</p>
                </div>
                <p>TAN is the bridge between the tax deductor/collector and the Income Tax Department. Every salary, rent, professional fee, and contract payment requires the deductor to withhold tax and deposit it using TAN. Without TAN, TDS/TCS returns cannot be filed, challans are not accepted by banks, and certificates cannot be issued. With India's TDS system accounting for a significant portion of direct tax collection, TAN is foundational for every employer and business making specified payments.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>Section 203A, Income Tax Act, 1961; Rule 114A, IT Rules, 1962</td></tr>
<tr><td>Format</td><td>10-digit alphanumeric (e.g., PNER12345A) - 4 letters + 5 digits + 1 letter</td></tr>
<tr><td>Application Form</td><td>Form 49B (online via <a href="https://tin.tin.nsdl.com/tan/form49B.html" target="_blank" rel="noopener">Protean portal</a> or offline at TIN-FC)</td></tr>
<tr><td>Fee</td><td>Rs 77 (Rs 65 + 18% GST) - non-refundable</td></tr>
<tr><td>Issuing Authority</td><td>Income Tax Department via Protean (formerly NSDL e-Gov)</td></tr>
<tr><td>Validity</td><td>Lifetime (no expiry, no renewal required)</td></tr>
<tr><td>Penalty</td><td>Rs 10,000 per default under Section 272BB</td></tr>
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
                <h2 class="section-title">What Is TAN?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>TAN (Tax Deduction and Collection Account Number) is a unique <strong>10-digit alphanumeric identifier</strong> issued by the Income Tax Department to persons responsible for deducting TDS or collecting TCS under <strong>Chapter XVII of the Income Tax Act, 1961</strong>. The first four characters represent the city and deductor's initial, followed by five digits and one letter.</p>
<p>TAN is issued via <strong>Form 49B</strong> under Section 203A read with Rule 114A, processed by <a href="https://tin.tin.nsdl.com/tan/form49B.html" target="_blank" rel="noopener">Protean eGov Technologies</a> (formerly NSDL). TAN has lifetime validity and is distinct from PAN: PAN identifies taxpayers, TAN identifies tax deductors/collectors.</p>
<p>TAN must be quoted on all TDS/TCS returns, payment challans, certificates (Form 16/16A/27D), and all correspondence with the Income Tax Department regarding TDS/TCS. Different branches of the same entity may have separate TANs. Having duplicate TANs is illegal.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TAN Registration:</strong></p>
                    <p><strong>Section 203A:</strong> Mandates TAN for every person deducting/collecting tax at source. Non-compliance attracts Rs 10,000 penalty (Section 272BB).</p>
<p><strong>Form 49B:</strong> Application form for TAN allotment. No supporting documents required. Filed online via Protean or offline at TIN Facilitation Centres.</p>
<p><strong>TDS (Tax Deducted at Source):</strong> Chapter XVII-B mechanism where the payer deducts tax before making specified payments (salary, rent, fees, contracts) and deposits it using TAN.</p>
<p><strong>TCS (Tax Collected at Source):</strong> Chapter XVII-BB mechanism where the seller collects tax from the buyer on specified goods (timber, scrap, minerals) using TAN.</p>
<p><strong>TRACES:</strong> TDS Reconciliation Analysis and Correction Enabling System - Income Tax portal for Form 16/16A download, Form 26AS, and TDS/TCS compliance management.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- TAN Registration -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN Registration</text>
                            <!-- TAN card -->
                            <rect x="50" y="48" width="100" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <rect x="58" y="55" width="30" height="18" rx="3" fill="#14365F" opacity="0.15"/>
                            <text x="73" y="67" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TAN</text>
                            <rect x="95" y="58" width="45" height="5" rx="1" fill="#14365F" opacity="0.2"/>
                            <rect x="95" y="67" width="35" height="5" rx="1" fill="#14365F" opacity="0.15"/>
                            <text x="100" y="92" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="monospace">PNER12345A</text>
                            <!-- Labels -->
                            <rect x="40" y="115" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="65" y="125" font-size="5.5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 203A</text>
                            <rect x="100" y="115" width="55" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="127" y="125" font-size="5.5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Fee: Rs 77</text>
                            <!-- Check badge -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Act, 1961</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act, 1961</span>
                        <strong>Section 203A - TAN</strong>
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
            <h2 class="section-title">Who Needs TAN Registration?</h2>
            <div class="content-text">
                
                <p><strong>TAN is mandatory for every person deducting TDS or collecting TCS:</strong></p>
<ul>
<li><strong>Employers</strong> deducting TDS on salary payments (Section 192)</li>
<li><strong>Companies/firms/individuals</strong> deducting TDS on rent above Rs 2.4 lakh/year (Section 194I)</li>
<li><strong>Businesses</strong> deducting TDS on professional/technical fees above Rs 30,000/year (Section 194J)</li>
<li><strong>Persons</strong> deducting TDS on contractor payments above Rs 30,000/transaction or Rs 1 lakh/year (Section 194C)</li>
<li><strong>Banks/financial institutions</strong> deducting TDS on interest (Section 194A)</li>
<li><strong>Companies</strong> deducting TDS on dividends (Section 194)</li>
<li><strong>Sellers</strong> collecting TCS on specified goods (Section 206C)</li>
<li><strong>E-commerce operators</strong> deducting TDS under Section 194-O</li>
<li><strong>All government and non-government deductors</strong></li>
</ul>
<p><strong>Exceptions:</strong> Sections 194IA, 194IB, 194M, and 194S allow PAN in place of TAN. Salaried individuals and HUFs not liable to deduct tax do not need TAN.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 TAN Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Complete TAN Registration</td><td>End-to-end Form 49B preparation, AO code identification, online submission via Protean, fee payment, acknowledgement dispatch, and follow-up until TAN allotment.</td></tr>
<tr><td>TAN Correction and Change</td><td>Correction of name, address, or other details on existing TAN using the Form for Changes or Correction in TAN Data via online or offline channels.</td></tr>
<tr><td>TRACES Registration</td><td>Registration of TAN on TRACES portal for Form 16/16A download, Form 26AS, challan status, justification reports, and TDS/TCS compliance management.</td></tr>
<tr><td>Duplicate TAN Surrender</td><td>Identification and surrender of duplicate TANs. Only one TAN should be active per deductor (branches may have separate TANs).</td></tr>
<tr><td>TDS/TCS Return Filing</td><td>Quarterly return preparation and filing using TAN. See <a href="/tds-return-filing-24q">TDS Return Filing</a> and <a href="/tds-return">TDS Returns</a>.</td></tr>
<tr><td>Integrated Compliance Setup</td><td>TAN coordinated with <a href="/pan-registration">PAN</a>, GST registration, and <a href="/payroll-processing-and-management-services">payroll setup</a> for new businesses.</td></tr>

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
            <h2 class="section-title">7-Step TAN Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete TAN application - from AO code identification and Form 49B filing to TRACES registration and ongoing TDS/TCS compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine If TAN Is Required</h3><p class="step-description">Verify whether your business is liable to deduct TDS or collect TCS. If you make salary, rent, professional fee, or contractor payments, you need TAN. Patron Accounting provides a free assessment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS/TCS assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TAN confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="36" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS</text><rect x="55" y="22" width="28" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="69" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TCS</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Visit Protean TIN Portal</h3><p class="step-description">Go to tin.tin.nsdl.com and click 'Online Application for TAN (Form 49B)'. Alternatively, download Form 49B for offline submission at any TIN Facilitation Centre.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 49B ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Protean TIN</text><rect x="40" y="50" width="40" height="12" rx="3" fill="#F5A623" opacity="0.4"/><text x="60" y="59" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">49B</text></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Select Category of Deductor</h3><p class="step-description">Choose the appropriate category: Company, Individual/Sole Proprietorship, Government, Partnership Firm, Trust, Association of Persons, LLP, etc. Click 'Select' to proceed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Category selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form opened</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="23" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Category</text><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><path d="M75 58l5 5 10-10" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Selected</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Fill Form 49B Online</h3><p class="step-description">Enter all mandatory details: full name, complete address (must be in India), phone, email, PAN of applicant, AO code (Area Code, AO Type, Range Code, AO Number), and designation of the responsible person.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AO code correct</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Review and Submit</h3><p class="step-description">Confirmation screen displays all data. Review for accuracy. No supporting documents required with the TAN application. Click 'Confirm' to submit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">No Docs</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Confirmed</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pay Fee and Download Acknowledgement</h3><p class="step-description">Pay Rs 77 (Rs 65 + GST) via card, net banking, UPI, or DD. Download 14-digit acknowledgement slip. Print, sign, and send to Protean Pune office within 15 days (unless submitted with DSC).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 77 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ack dispatched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 77</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Fee Paid</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">TAN Allotted and Communicated</h3><p class="step-description">Protean processes after receiving signed acknowledgement. TAN allotted within 7-10 working days. Allotment letter dispatched to registered address and/or email. Register TAN on TRACES portal immediately.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 10-digit TAN</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TRACES registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TAN</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">PNER12345A</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="72" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Lifetime</text></svg></div><span class="illustration-label">TAN Issued</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for TAN Registration</h2>
            <div class="content-text">
                
                <p><strong>No documents are required to be attached to the TAN application (Form 49B).</strong></p>
<p>The application requires only the following information:</p>
<ul>
<li>Full legal name of the deductor/collector</li>
<li>Complete address in India</li>
<li>Contact details (phone number, email ID)</li>
<li>PAN of the applicant</li>
<li>Assessing Officer (AO) code</li>
<li>Designation of the person responsible for deduction/collection</li>
<li>Category of deductor (Company, Individual, Firm, Trust, LLP, etc.)</li>
</ul>
<p><strong>For online applications:</strong> The acknowledgement generated after submission must be printed, signed, and forwarded to Protean eGov Technologies Limited, 5th Floor, Mantri Sterling, Model Colony, Pune - 411016 within 15 days.</p>
<p><strong>For offline applications:</strong> Submit completed Form 49B in duplicate at any TIN Facilitation Centre (TIN-FC) with the processing fee.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common TAN Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incorrect AO Code Selection</td><td>Wrong Area Code, AO Type, Range Code leads to jurisdictional mapping errors and TDS assessment complications</td><td>We identify the correct AO code using the TIN-NSDL search tool based on your city and filing location.</td></tr>
<tr><td>Duplicate TAN Allotment</td><td>Some entities inadvertently obtain multiple TANs causing confusion in TDS filings and Form 26AS credits</td><td>We verify existing TANs via 'Know Your TAN' before filing and assist in surrendering duplicates.</td></tr>
<tr><td>Delayed Acknowledgement Forwarding</td><td>Processing does not begin until signed acknowledgement reaches Protean Pune - many applicants delay this step</td><td>We dispatch the signed acknowledgement on the same day of application for fastest processing.</td></tr>
<tr><td>TRACES Registration After TAN</td><td>Many new deductors skip TRACES registration, missing access to Form 16/16A, challan status, and compliance tools</td><td>We complete TRACES registration as part of the TAN registration service - included at no extra cost.</td></tr>

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
            <h2 class="section-title">TAN Registration Fees in 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>TAN Application Processing Fee</td><td class="table-amount">Rs 77 (Rs 65 + 18% GST) - non-refundable</td></tr>
<tr><td>TAN Change/Correction Fee</td><td class="table-amount">Rs 77 (Rs 65 + 18% GST)</td></tr>
<tr><td>Duplicate TAN Surrender</td><td class="table-amount">No fee</td></tr>
<tr><td>TRACES Registration</td><td class="table-amount">Free</td></tr>
<tr><td>Penalty for Not Obtaining TAN (Sec 272BB)</td><td class="table-amount">Rs 10,000</td></tr>
<tr><td>Penalty for Not Quoting TAN</td><td class="table-amount">Rs 10,000 per instance</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TAN Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20TAN.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does TAN Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment + AO Code</td><td>Same day</td></tr>
<tr><td>Form 49B Filing Online</td><td>1 day</td></tr>
<tr><td>Fee Payment + Acknowledgement Download</td><td>Same day</td></tr>
<tr><td>Signed Acknowledgement Dispatch to Protean</td><td>1 day</td></tr>
<tr><td>Protean Processing and TAN Allotment</td><td>7-10 working days</td></tr>
<tr><td>TRACES Registration</td><td>1 day (after TAN receipt)</td></tr>
<tr><td><strong>Total</strong></td><td><strong>10-15 days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Online submission is instant but processing begins only after the signed acknowledgement reaches Protean's Pune office. Patron Accounting dispatches the acknowledgement on the day of application to ensure the fastest possible allotment within 7-10 working days.</p>

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
            <h2 class="section-title">6 Benefits of TAN Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Legal TDS/TCS Compliance</h3><p class="feature-text">TAN is mandatory under Section 203A. Without TAN, you cannot deduct TDS, file returns, or issue certificates. Non-compliance: Rs 10,000 penalty (Section 272BB).</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">TDS/TCS Return Filing</h3><p class="feature-text">Quarterly returns are mandatory and will not be accepted without TAN. TAN ensures returns are processed and credits appear in deductees' Form 26AS.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Challan Payment Acceptance</h3><p class="feature-text">Banks do not accept TDS/TCS payment challans without a valid TAN. Every deposit of deducted/collected tax requires TAN on the challan.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">TDS Certificate Issuance</h3><p class="feature-text">Form 16, 16A, and 27D certificates must carry the deductor's TAN. Without TAN, you cannot issue legally valid certificates to deductees.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">TRACES Portal Access</h3><p class="feature-text">TAN on TRACES enables Form 16/16A download, Form 26AS verification, justification reports, challan tracking, and conso file download.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Transparent Tax Administration</h3><p class="feature-text">TAN links all TDS/TCS transactions to a single identifier, enabling the Income Tax Department to track deductions and ensure credits reach the correct taxpayers.</p></article>
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
            <h2 class="section-title">TAN vs PAN - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>TAN</th><th>PAN</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Tax Deduction and Collection Account Number</td><td>Permanent Account Number</td></tr>
<tr><td>Governing Section</td><td>Section 203A</td><td>Section 139A</td></tr>
<tr><td>Purpose</td><td>Identifies tax deductors/collectors</td><td>Identifies taxpayers</td></tr>
<tr><td>Who Needs It</td><td>Persons deducting TDS or collecting TCS</td><td>All taxpayers and entities</td></tr>
<tr><td>Format</td><td>10-digit (4 letters + 5 digits + 1 letter)</td><td>10-digit (5 letters + 4 digits + 1 letter)</td></tr>
<tr><td>Application Form</td><td>Form 49B</td><td>Form 49A / Form 49AA</td></tr>
<tr><td>Fee</td><td>Rs 77 (Rs 65 + GST)</td><td>Rs 107 (physical) / Rs 72 (e-PAN)</td></tr>
<tr><td>Documents Required</td><td>No documents required</td><td>Identity, address, DOB proof required</td></tr>
<tr><td>Validity</td><td>Lifetime</td><td>Lifetime</td></tr>
<tr><td>Penalty</td><td>Rs 10,000 (Section 272BB)</td><td>Rs 10,000 (Section 272B)</td></tr>

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
            <h2 class="section-title">Related Tax and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/pan-registration">PAN Registration</a></strong> - Permanent Account Number for taxpayer identification.</li>
<li><strong><a href="/tds-return-filing-24q">TDS Return Filing</a></strong> - Quarterly TDS return preparation and filing.</li>
<li><strong><a href="/tds-return">TDS Returns</a></strong> - Complete TDS management and compliance.</li>
<li><strong><a href="/payroll-processing-and-management-services">Payroll Services</a></strong> - Integrated payroll with TDS compliance.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - For complete business compliance setup.</li>
<li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - Company incorporation with TAN as compliance requirement.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for TAN Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>; Income Tax Rules, 1962.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 203A(1):</strong> Every person deducting/collecting tax shall apply for TAN.</li>
<li><strong>Section 203A(2):</strong> TAN must be quoted in all TDS/TCS returns, challans, certificates, and documents.</li>
<li><strong>Section 272BB:</strong> Penalty Rs 10,000 for failure to apply for TAN or failure to quote TAN.</li>
<li><strong>Chapter XVII-B:</strong> TDS provisions (Sections 192-196D).</li>
<li><strong>Chapter XVII-BB:</strong> TCS provisions (Section 206C).</li>
<li><strong>Exception:</strong> Sections 194IA, 194IB, 194M, 194S - PAN may be used instead of TAN.</li>
</ul>
<p><strong>Quarterly Return Due Dates:</strong> Q1: 31 July | Q2: 31 October | Q3: 31 January | Q4: 31 May. Monthly deposit: 7th of following month (April-Feb); 30 April for March.</p>
<p><strong>Portals:</strong> <a href="https://tin.tin.nsdl.com/tan/form49B.html" target="_blank" rel="noopener">Protean TIN</a> (Form 49B) | <a href="https://incometaxindia.gov.in/forms/income-tax%20rules/103120000000007919.pdf" target="_blank" rel="noopener">Form 49B PDF</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - TAN Registration</h2>
                    <p class="faq-expanded__lead">Answers about TAN registration, fees, documents, TDS/TCS applicability, penalties, and the difference between TAN and PAN.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TAN Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is TAN mandatory for all businesses?</h3>
                        <div class="faq-expanded__a"><p>TAN is mandatory for every person or entity liable to deduct TDS or collect TCS under the Income Tax Act. This includes employers paying salaries, businesses making rent/professional fee/contractor payments above thresholds, banks deducting TDS on interest, and sellers collecting TCS. Salaried individuals and HUFs not liable to deduct/collect tax do not need TAN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the TAN application fee?</h3>
                        <div class="faq-expanded__a"><p>The processing fee for Form 49B is Rs 77 (Rs 65 application charge + 18% GST). This is non-refundable even if the application is rejected. Payment via credit/debit card, net banking, UPI, or demand draft in favour of 'NSDL-TIN' payable at Mumbai. Same fee of Rs 77 applies for TAN correction or change applications.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Are any documents required for TAN application?</h3>
                        <div class="faq-expanded__a"><p>No supporting documents are required with Form 49B, whether filed online or offline. The application requires only the applicant's details: name, address in India, PAN, contact information, AO code, and designation. For online applications, the signed acknowledgement must be sent to Protean's Pune office within 15 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">TAN number kaise le?</h3>
                        <div class="faq-expanded__a"><p>TAN number lene ke liye tin.tin.nsdl.com par jao aur 'Online Application for TAN (Form 49B)' click karo. Deductor category select karo (Company, Individual, Firm, etc.). Form mein naam, address, PAN, AO code fill karo. Rs 77 fee online pay karo. Acknowledgement download karke sign karo aur Protean Pune office bhejo 15 din ke andar. 7-10 din mein TAN allot ho jayega. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a single TAN be used for both TDS and TCS?</h3>
                        <div class="faq-expanded__a"><p>Yes. If a TAN has been allotted for TDS purposes, the same TAN is used for TCS as well. No separate application needed. The TAN is quoted in all TDS returns, TCS returns, challans, and certificates. Having more than one TAN for the same entity is illegal. However, different branches may have separate TANs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for not having TAN?</h3>
                        <div class="faq-expanded__a"><p>Section 272BB prescribes Rs 10,000 penalty for failure to apply for TAN. Same penalty applies for failure to quote TAN or quoting incorrect TAN in returns, challans, certificates, or documents. Additionally, TDS/TCS returns will not be accepted without TAN, and banks will not accept payment challans without a valid TAN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">TAN aur PAN mein kya fark hai?</h3>
                        <div class="faq-expanded__a"><p>TAN tax deduct karne wale ke liye hota hai (employer, company jo TDS katata hai). PAN taxpayer ke liye hota hai (har vyakti jo tax bharta hai). TAN Section 203A ke under allot hota hai, PAN Section 139A ke under. Dono 10-digit alphanumeric hain. TAN TDS/TCS returns mein quote hota hai, PAN ITR mein. TAN ki fee Rs 77 hai, PAN ki Rs 107. Dono lifetime valid hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can branches of a company have separate TANs?</h3>
                        <div class="faq-expanded__a"><p>Yes. Different branches or divisions of the same company can have separate TANs. The branch name and location must be mentioned in Form 49B. This is common for large companies and banks with multiple branches, each handling TDS/TCS independently. However, having duplicate TANs for the same entity/branch is illegal.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Does TAN expire?</strong> A: No. Lifetime validity, no renewal required.</p>
<p><strong>Q: Can PAN be quoted instead of TAN?</strong> A: Only for Sections 194IA, 194IB, 194M, and 194S. For all other TDS/TCS sections, TAN must be quoted.</p>
<p><strong>Q: How to check TAN status?</strong> A: Use 'Know Your TAN' on incometaxindia.gov.in or track on the NSDL-TIN website.</p>
<p><strong>Q: TAN for government deductors?</strong> A: Yes. Both government and non-government deductors are required to obtain TAN.</p>
<p><strong>Q: What is TRACES?</strong> A: TRACES is the Income Tax portal for TDS/TCS compliance - Form 16/16A download, challan status, and justification reports.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Without TAN, No TDS Compliance is Possible - Apply Today</h2>
            <div class="content-text">
                
                <p>Section 272BB imposes Rs 10,000 penalty for not having TAN or not quoting it. TDS/TCS returns are rejected without TAN. Banks refuse challans. Certificates cannot be issued. Your deductees lose their tax credits in Form 26AS.</p>
<p>The fee is just Rs 77. No documents required. Application takes minutes. TAN is allotted in 7-10 days.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20TAN%20Registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your TAN with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">TAN is the mandatory identifier for every tax deductor and collector in India under Section 203A. The 10-digit number is obtained via Form 49B at Rs 77, with no documents required. Lifetime validity. Rs 10,000 penalty for non-compliance.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles the complete process - AO code identification, Form 49B filing, acknowledgement dispatch, TRACES registration, and ongoing TDS/TCS return compliance.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">15+ years. 10,000+ businesses. Offices in Pune, Mumbai, Delhi, and Gurugram. Starting from Rs 1,999.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20apply%20for%20TAN.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20TAN%20Registration&body=Hello%2C%0A%0AI%20need%20TAN%20registration.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">TAN Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert TAN registration for employers, companies, and TDS/TCS deductors with integrated return filing support.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/tan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/tan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/tan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/tan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete tax compliance setup</div><div class="pa-cross-grid"><a href="/pan-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the Income Tax Act 1961, Section 203A, and current Protean/TRACES procedures. Next review: September 2026.</p>
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
