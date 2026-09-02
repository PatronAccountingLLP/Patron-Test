
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESIC Registration in Delhi - Process, Threshold & Wages</title>
    <meta name="description" content="CA-assisted ESIC registration in Delhi. 10+ employee compliance under ESI Act 1948. Serving Connaught Place, Nehru Place, Okhla businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/esic-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Registration in Delhi - Process, Threshold & Wages">
    <meta property="og:description" content="CA-assisted ESIC registration in Delhi. 10+ employee compliance under ESI Act 1948. Serving Connaught Place, Nehru Place, Okhla businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/esic-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Registration in Delhi - Process, Threshold & Wages">
    <meta name="twitter:description" content="CA-assisted ESIC registration in Delhi. 10+ employee compliance under ESI Act 1948. Serving Connaught Place, Nehru Place, Okhla businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESIC Registration in Delhi",
      "description": "CA-assisted ESIC registration in Delhi. 10+ employee compliance under ESI Act 1948. Serving Connaught Place, Nehru Place, Okhla businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/esic-registration/delhi",
      "serviceType": "ESIC Registration in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
        }
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
        "url": "https://www.patronaccounting.com/esic-registration/delhi",
        "price": "21000"
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
          "name": "ESIC Registration in India: Process, Benefits and Fees",
          "item": "https://www.patronaccounting.com/esic-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESIC Registration in Delhi",
          "item": "https://www.patronaccounting.com/esic-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ESIC office handles registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESIC Regional Office Delhi at Rajendra Bhawan, Rajendra Place, New Delhi 110008. Delhi has Sub Regional Offices in Rohini and Nand Nagri, branch offices in Ashok Vihar, Ashram, and CP area. Employer registration is fully online at esic.gov.in. Patron's Rohini office handles the complete process."
          }
        },
        {
          "@type": "Question",
          "name": "Can I complete ESIC registration online from Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ESIC employer registration is fully online via esic.gov.in. Create employer login, fill Form-1, pay 6-month advance contribution online, receive 17-digit employer code and C-11 letter electronically. No physical visit required. Employee biometric enrollment for Pehchan Cards does require visiting nearest Delhi ESIC dispensary."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESIC registration fee in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No government fee for employer registration. Only mandatory payment is 6-month advance contribution at 4% (3.25% employer + 0.75% employee) of covered employees' gross wages. Patron's managed ESIC registration service starts from INR 1,499."
          }
        },
        {
          "@type": "Question",
          "name": "How long does ESIC registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Same-day employer code on portal once documents are ready and advance contribution is paid. 17-digit code and C-11 letter generated immediately. Employee registration and Pehchan Card issuance take 1-15 business days depending on biometric enrollment at Delhi ESIC dispensaries."
          }
        },
        {
          "@type": "Question",
          "name": "Is ESIC mandatory for IT companies in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ESIC applies to all Delhi establishments with 10+ persons. Software engineers above Rs 21,000 are excluded from coverage, but support staff, housekeeping, security below the ceiling must be registered. An IT company with 25 engineers and 12 support staff must register for the 12 support staff."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I delay ESIC registration in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12% annual interest on all unpaid contributions from original trigger date under Section 39(5)(a). Section 85 provides imprisonment up to 2 years and Rs 10,000 fine. ESIC Regional Office Delhi conducts regular inspections across Okhla, Naraina, and Wazirpur industrial areas."
          }
        },
        {
          "@type": "Question",
          "name": "What are ESIC hospitals available in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Four ESIC hospitals: Basaidarapur (Ring Road), Jhilmil (Shahadara), Okhla Phase-I, and Rohini Sector 15. Plus ESIC Dental College Rohini and dispensaries across Azadpur, Wazirpur, and other areas. ESI-registered employees and families get complete medical care."
          }
        },
        {
          "@type": "Question",
          "name": "Do contract workers count for ESIC in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Contract workers at your Delhi premises count toward the 10-employee threshold. If they earn below Rs 21,000, they must be registered. Principal employer carries secondary liability if contractor fails to provide ESI coverage. Particularly relevant for security, housekeeping, and logistics contractors. Quick Answers ESIC registration kya hai? Har Delhi establishment jismein 10+ employees hain unhe ESI Act 1948 ke under register karna mandatory hai. Employee ko medical, sickness, maternity benefits milte hain. Delhi mein ESIC registration kitne din mein? Portal par same-day employer code mil jata hai. Pehchan Card 7-15 din mein banta hai. ESIC contribution rate 2026 mein? Employer 3.25% + Employee 0.75% = Total 4% gross wages ka. 01 July 2019 se effective."
          }
        }
      ]
    }
  ]
}</script>
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
                        ESIC Registration in Delhi: Social Security Compliance for Delhi Employers
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>10+ Employees = Mandatory</strong>:</span> ESIC registration mandatory for every Delhi establishment with 10+ employees where wages are up to Rs 21,000/month under Section 2A of the ESI Act 1948</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Employer 3.25% + Employee 0.75%</strong>:</span> Total 4% contribution on gross wages. Employer and employee share deposited monthly by 15th of following month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Same-Day Employer Code</strong>:</span> 17-digit ESIC employer code generated immediately on esic.gov.in after 6-month advance contribution payment. No physical office visit needed</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>4 ESIC Hospitals in Delhi</strong>:</span> Basaidarapur, Jhilmil, Okhla Phase-I, and Rohini Sector 15. Registered employees get full medical care for themselves and families</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Expert ESIC Registration in Delhi</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESIC%20Registration%20in%20Delhi&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20ESIC%20Registration%20in%20Delhi.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20Registration%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESIC Registration in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Expert ESIC registration in Delhi - IT firms, manufacturers, hospitality, and security agencies.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Registration in Delhi - At a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Registration in Delhi Services at a Glance</strong></p>
                    <p>ESIC registration is mandatory for every Delhi establishment with 10+ employees earning up to Rs 21,000/month under Section 2A of the ESI Act 1948. Register within 15 days of crossing the threshold. Employer 3.25% + Employee 0.75% = 4% contribution. ESIC Regional Office Delhi at Rajendra Bhawan, Rajendra Place. <a href="/esic-registration">Learn more about ESIC Registration across India</a>.</p>
                </div>
                <p>Delhi was among the first cities where ESI was implemented (1952). Four ESIC hospitals serve Delhi employees. Patron manages ESIC alongside EPF, payroll, and Delhi Shops & Establishments compliance from our Rohini office.</p>
                <p>With 50+ ESIC consultants in Delhi on JustDial alone, finding assistance is not the challenge - finding a firm that handles ESIC as part of a broader payroll and compliance framework is. For EPF compliance, see <a href="/esic-registration">ESIC Registration</a>. For payroll services, see <a href="/payroll-services">Payroll Services</a>.</p>
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
                <h2 class="section-title">What Is ESIC Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC registration is the mandatory process of enrolling an establishment and its employees with the Employees' State Insurance Corporation under Section 2A of the ESI Act 1948, providing social security benefits including medical care, sickness, maternity, disability, and dependent benefits. The scheme is contributory - employer 3.25% and employee 0.75% of gross wages.</p>
                    <p>Delhi, being fully notified under ESI since 1952, requires every qualifying establishment - IT companies in Nehru Place, restaurant chains in Connaught Place, manufacturing units in Okhla - to register within 15 days of reaching the 10-employee threshold under Regulation 10-B.</p>
                    <p>Registered employees receive an ESI card (Pehchan Card) for ESIC hospitals in Basaidarapur, Rohini, Jhilmil, and Okhla. The scheme covers full medical care for employees and family members from the date of insurable employment. For GST compliance, see <a href="/gst-registration">GST Registration</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Registration in Delhi:</strong></p>
                    <p><strong>ESI Act 1948:</strong> Primary statute. Section 2A: applicability to 10+ employee establishments. Section 39: contribution obligations. Section 85: penalties up to 2 years imprisonment + Rs 10,000 fine.</p><p><strong>Wage Ceiling:</strong> Rs 21,000/month (Rs 25,000 for disabled employees). Last revised January 2017.</p><p><strong>Contribution Rate:</strong> Employer 3.25% + Employee 0.75% = 4% of gross wages (effective 01.07.2019).</p><p><strong>Form-1:</strong> Employer Registration Form on esic.gov.in. Generates 17-digit employer code after advance contribution payment.</p><p><strong>Pehchan Card:</strong> ESI identity card for employees. Grants access to ESIC hospitals and dispensaries across Delhi.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESIC Regional Office</span>
                        <strong>Rajendra Place</strong>
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
            <h2 class="section-title">Who Needs ESIC Registration in Delhi?</h2>
            <div class="content-text">
                
                <p>IT/BPO companies in Nehru Place and Aerocity with housekeeping, security, and support staff earning below Rs 21,000 must register under ESIC even if software engineers earn above the ceiling. Manufacturing units in Okhla, Naraina, and Wazirpur have the highest-density ESIC registrations in Delhi.</p>
                <p>Hospitality establishments in Connaught Place, Saket, and Aerocity with 10+ staff are covered. Security agencies with guards deployed at client premises must register - principal employer carries secondary liability. Retail chains, logistics companies, and construction contractors with 10+ employees also fall within mandatory coverage.</p>
                <p>Delhi startups often cross the 10-employee threshold within the first year. Under the ESI Act, the 15-day registration window starts from the date the 10th employee joins - not from next financial year. Late registration triggers 12% annual interest on all contributions from the original trigger date under Section 39(5)(a).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Handles for Delhi Employers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ESIC Applicability Assessment</td><td>Evaluate 10-employee threshold, identify covered employees earning up to Rs 21,000, determine registration obligation date</td></tr><tr><td>Employer Registration on ESIC Portal</td><td>Complete Form-1 on esic.gov.in with establishment details, PAN, bank account, employee strength</td></tr><tr><td>Employee Registration and IP Number Generation</td><td>Register each covered employee with Aadhaar, bank details, family members, nominee details for ESI card issuance</td></tr><tr><td>Advance Contribution Payment</td><td>Process 6-month advance contribution to generate 17-digit employer code and C-11 registration letter</td></tr><tr><td>Monthly Contribution Filing</td><td>Monthly ESI contribution calculation, challan preparation, deposit by 15th of each month. Prevents 12% interest penalty</td></tr><tr><td>Half-Yearly Return Filing</td><td>ESI returns filed by 11 November and 11 May each contribution period</td></tr><tr><td>Bundled Compliance</td><td>ESIC + EPF + payroll + TDS + Delhi Shops & Establishments Act as single engagement</td></tr>

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
            <h2 class="section-title">ESIC Registration Process - 6 Steps for Delhi Employers</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Expert ESIC registration from Patron's Rohini office - portal filing, contribution payment, employee onboarding, and ongoing compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assess ESIC Applicability</h3><p class="step-description">Count all employees including permanent, temporary, part-time, contract, and probationary staff. If total reaches 10+ on any day, ESIC is mandatory. Contract workers at your Delhi premises count. Patron conducts this assessment considering all worker categories.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10+ Employee Check</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Contract Workers Counted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EMPLOYEES</text><text x="60" y="52" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">10+</text></svg></div><span class="illustration-label">Assessment Done</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Create Employer Account on ESIC Portal</h3><p class="step-description">Visit esic.gov.in, navigate to Employer Login > New Employer Registration. Enter Delhi establishment PAN, business address matching MCA records, email, and mobile. System creates Employer Login with username and password.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal Account Created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Login Credentials Received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">esic.gov.in</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="3"/><text x="60" y="55" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">LOGIN</text></svg></div><span class="illustration-label">Account Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Complete Employer Registration Form-1</h3><p class="step-description">Fill Form-1 with establishment details: legal name, type of unit, nature of business, date of commencement, employee count, bank account. Select correct Delhi ESIC branch office from dropdown (Ashok Vihar, Rohini, Nand Nagri, etc.).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form-1 Completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Branch Selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="50" width="55" height="14" rx="3" fill="#E8712C" opacity="0.15"/><text x="58" y="60" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">FORM-1</text></svg></div><span class="illustration-label">Details Submitted</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Advance Contribution for 6 Months</h3><p class="step-description">Calculate contribution for covered employees: 3.25% employer + 0.75% employee on gross wages up to Rs 21,000. Pay 6-month advance via net banking, debit card, or NEFT. Payment must succeed for registration to complete.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4% x 6 Months Paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payment Processed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">4%</text><text x="60" y="55" font-size="7" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">x 6 MOS</text></svg></div><span class="illustration-label">Contribution Done</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive 17-Digit Employer Code and C-11</h3><p class="step-description">On successful payment, ESIC generates 17-digit registration number and issues C-11 letter electronically. This is valid proof of ESIC registration. Used for all future filings and communications with ESIC Regional Office Delhi.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Employer Code Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>C-11 Letter Received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="46" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">17-DIG</text><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">C-11</text></svg></div><span class="illustration-label">Registration Complete</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Register Employees and Generate ESI Cards</h3><p class="step-description">Register each covered employee on ESIC portal with Aadhaar, bank details, family members, photographs. Portal generates IP numbers and temporary certificates. Employees visit nearest Delhi ESIC dispensary for biometric enrollment and Pehchan Card.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IP Numbers Generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pehchan Cards Issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 42l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round"/><text x="60" y="85" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PEHCHAN</text></svg></div><span class="illustration-label">Employees Enrolled</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ESIC Registration in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card of Establishment</strong> - company PAN for Pvt Ltd/LLP; proprietor's PAN for proprietorship</li><li><strong>Certificate of Registration</strong> - from RoC Delhi (companies/LLPs), GST certificate, or Delhi Shops & Establishments Act registration</li><li><strong>Address Proof of Establishment</strong> - electricity bill, rent agreement, or property tax receipt (must match MCA/GST records)</li><li><strong>Bank Account Details</strong> - cancelled cheque or statement for advance contribution payment</li><li><strong>Employee Details</strong> - name, joining date, designation, monthly wages, Aadhaar, bank details for each covered employee</li><li><strong>Attendance Register</strong> - proof of employee headcount crossing 10-employee threshold</li><li><strong>MoA/AoA</strong> for companies; Partnership Deed for partnership firms</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESIC Challenges for Delhi Employers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Delayed Registration Beyond 15-Day Window</td><td>Delhi startups unaware the clock starts from date 10th employee joins. ESIC demands contributions with 12% interest from trigger date</td><td>Proactive headcount monitoring. Registration triggered before compliance gaps accumulate</td></tr><tr><td>Misclassification of Contract Workers</td><td>Security, housekeeping, and delivery staff from agencies excluded from count. They count under ESI Act; principal employer has secondary liability</td><td>All worker categories assessed including contract labour at Okhla, Naraina, and Wazirpur establishments</td></tr><tr><td>Incorrect Wage Calculation</td><td>HRA, city allowance, overtime excluded from ESIC wages. Under ESI Act, gross wages include these. Short-deposit notices from ESIC Regional Office Delhi</td><td>Accurate wage component mapping. All includable components identified before contribution calculation</td></tr><tr><td>Multiple Locations Without Unified Registration</td><td>Delhi businesses with separate premises in CP (office), Okhla (warehouse), Lajpat Nagar (retail) register only one location</td><td>All Delhi locations mapped during applicability assessment. Complete multi-location coverage ensured</td></tr>

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
            <h2 class="section-title">ESIC Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Employer Registration (government fee)</td><td>Nil</td></tr><tr><td>Advance Contribution (6 months)</td><td>4% of covered wages x 6 months</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR 1,499 (Exl GST and Govt. Charges)</td></tr><tr><td>Monthly Compliance (ongoing)</td><td>From Rs 999/month (Patron service)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20Registration%20in%20Delhi.%20Quote%20please." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for ESIC Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability assessment</td><td>1 business day</td></tr><tr><td>Document preparation</td><td>1-2 business days</td></tr><tr><td>Portal registration + Form-1</td><td>Same day</td></tr><tr><td>Advance contribution payment</td><td>Same day</td></tr><tr><td>Employer code generation</td><td>Immediate (on payment)</td></tr><tr><td>Employee registration + IP numbers</td><td>1-3 business days</td></tr><tr><td>ESI Pehchan Card issuance</td><td>7-15 business days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Same-day employer code:</strong> 17-digit ESIC employer code and C-11 letter generated immediately on successful advance contribution payment. No physical visit to ESIC Regional Office Delhi required. Employee Pehchan Cards require biometric enrollment at nearest Delhi ESIC dispensary.</p>

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
            <h2 class="section-title">Why Choose Patron for ESIC in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Physical Office in Delhi</h3><p class="feature-text">Rohini office for walk-in consultations. Proximity to ESIC Sub Regional Office Rohini and ESIC Hospital Rohini means first-hand familiarity with local ESIC administration.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">End-to-End Labour Law Compliance</h3><p class="feature-text">ESIC + EPF + payroll + TDS + Delhi Shops & Establishments Act as a bundled service. Single point of contact for all statutory obligations.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">10,000+ Businesses Served</h3><p class="feature-text">15+ years handling ESIC for IT companies in Nehru Place, manufacturing units in Okhla, hospitality chains in Aerocity, and security agencies across Delhi NCR.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Proactive Compliance Monitoring</h3><p class="feature-text">Automated calendars for monthly deposit (15th) and half-yearly returns (11 Nov, 11 May). Prevents 12% interest penalty and IT Act disallowance.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>With offices in Pune, Mumbai, Delhi (Rohini), and Gurugram, Patron serves Delhi employers across IT, manufacturing, hospitality, and security sectors. Trusted by Hyundai, Asian Paints, Bridgestone, and thousands of growing businesses.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC vs EPF - Comparison for Delhi Employers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>ESIC</th><th>EPF</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>ESI Act, 1948</td><td>EPF & MP Act, 1952</td></tr><tr><td>Applicability</td><td>10+ employees (Delhi)</td><td>20+ employees (all India)</td></tr><tr><td>Wage Ceiling</td><td>Rs 21,000/month</td><td>Rs 15,000/month (mandatory)</td></tr><tr><td>Employer Contribution</td><td>3.25% of gross wages</td><td>12% of basic + DA</td></tr><tr><td>Employee Contribution</td><td>0.75% of gross wages</td><td>12% of basic + DA</td></tr><tr><td>Benefits</td><td>Medical, sickness, maternity, disability</td><td>Retirement, pension, life insurance</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Employers</h2>
            <div class="content-text">
                
                <ul><li><a href="/esic-registration">ESIC Registration (India page)</a> - National overview</li><li><a href="/payroll-services">Payroll Services</a> - Monthly payroll processing with ESIC compliance</li><li><a href="/gst-registration">GST Registration</a> - Tax compliance for Delhi businesses</li><li><a href="/private-limited-company-registration">Company Registration</a> - RoC Delhi incorporation</li><li><a href="/shop-act-registration">Shop Act Registration</a> - Delhi Shops & Establishments Act compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for ESIC Registration in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>ESI Act, 1948:</strong> Section 2A: applicability to 10+ establishments. Section 38: employer's registration obligation. Section 39(5)(a): 12% interest on delayed contributions. Section 85: imprisonment up to 2 years + Rs 10,000 fine. <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC Portal</a></li><li><strong>Regulation 10-B:</strong> Registration within 15 days of applicability. No grace period.</li><li><strong>Contribution Rates (01.07.2019):</strong> Employer 3.25% + Employee 0.75% = 4% of gross wages. Wage ceiling Rs 21,000/month.</li><li><strong>ESIC Regional Office Delhi:</strong> Rajendra Bhawan, Rajendra Place, New Delhi 110008. Sub Regional Offices in Rohini and Nand Nagri. <a href="https://rodelhi.esic.gov.in" target="_blank" rel="noopener">ESIC RO Delhi</a></li><li><strong>Delhi Shops & Establishments Act, 1954:</strong> All commercial establishments must register within 90 days. Supporting documentation during ESIC inspections. No state PT in Delhi. <a href="https://labour.delhi.gov.in" target="_blank" rel="noopener">Delhi Labour Department</a></li><li><strong>Income Tax Impact:</strong> Employer's ESI contribution deposited after due date is disallowed as business expenditure, creating additional taxable income.</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - ESIC Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers about ESIC registration, contribution rates, eligibility, and compliance for Delhi employers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ESIC office handles registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>ESIC Regional Office Delhi at Rajendra Bhawan, Rajendra Place, New Delhi 110008. Delhi has Sub Regional Offices in Rohini and Nand Nagri, branch offices in Ashok Vihar, Ashram, and CP area. Employer registration is fully online at esic.gov.in. Patron's Rohini office handles the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I complete ESIC registration online from Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. ESIC employer registration is fully online via esic.gov.in. Create employer login, fill Form-1, pay 6-month advance contribution online, receive 17-digit employer code and C-11 letter electronically. No physical visit required. Employee biometric enrollment for Pehchan Cards does require visiting nearest Delhi ESIC dispensary.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the ESIC registration fee in Delhi?</h3>
                        <div class="faq-expanded__a"><p>No government fee for employer registration. Only mandatory payment is 6-month advance contribution at 4% (3.25% employer + 0.75% employee) of covered employees' gross wages. Patron's managed ESIC registration service starts from INR 1,499.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does ESIC registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Same-day employer code on portal once documents are ready and advance contribution is paid. 17-digit code and C-11 letter generated immediately. Employee registration and Pehchan Card issuance take 1-15 business days depending on biometric enrollment at Delhi ESIC dispensaries.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is ESIC mandatory for IT companies in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. ESIC applies to all Delhi establishments with 10+ persons. Software engineers above Rs 21,000 are excluded from coverage, but support staff, housekeeping, security below the ceiling must be registered. An IT company with 25 engineers and 12 support staff must register for the 12 support staff.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if I delay ESIC registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>12% annual interest on all unpaid contributions from original trigger date under Section 39(5)(a). Section 85 provides imprisonment up to 2 years and Rs 10,000 fine. ESIC Regional Office Delhi conducts regular inspections across Okhla, Naraina, and Wazirpur industrial areas.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are ESIC hospitals available in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Four ESIC hospitals: Basaidarapur (Ring Road), Jhilmil (Shahadara), Okhla Phase-I, and Rohini Sector 15. Plus ESIC Dental College Rohini and dispensaries across Azadpur, Wazirpur, and other areas. ESI-registered employees and families get complete medical care.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do contract workers count for ESIC in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Contract workers at your Delhi premises count toward the 10-employee threshold. If they earn below Rs 21,000, they must be registered. Principal employer carries secondary liability if contractor fails to provide ESI coverage. Particularly relevant for security, housekeeping, and logistics contractors.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ESIC registration kya hai?</strong> Har Delhi establishment jismein 10+ employees hain unhe ESI Act 1948 ke under register karna mandatory hai. Employee ko medical, sickness, maternity benefits milte hain.</p><p><strong>Delhi mein ESIC registration kitne din mein?</strong> Portal par same-day employer code mil jata hai. Pehchan Card 7-15 din mein banta hai.</p><p><strong>ESIC contribution rate 2026 mein?</strong> Employer 3.25% + Employee 0.75% = Total 4% gross wages ka. 01 July 2019 se effective.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why You Must Register for ESIC Today</h2>
            <div class="content-text">
                
                <p><strong>15-day registration window is non-negotiable.</strong> Every day beyond triggers 12% annual interest on unpaid contributions from the original date.</p><p><strong>Section 85 provides imprisonment up to 2 years</strong> + Rs 10,000 fine for non-compliance. ESIC Regional Office Delhi actively inspects Okhla, Naraina, and Wazirpur.</p><p><strong>Late employer contribution is disallowed under Income Tax Act,</strong> creating additional taxable income. Register before compliance gaps accumulate.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">ESIC Registration in Delhi - Partner with Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">ESIC registration in Delhi is a mandatory statutory obligation for every establishment with 10+ employees under the ESI Act 1948. With Delhi's well-established ESIC infrastructure - hospitals in Basaidarapur, Rohini, Okhla, Jhilmil, and the Regional Office at Rajendra Place - registered employees gain immediate social security benefits.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting provides end-to-end ESIC registration from our Rohini office - applicability assessment, portal registration, employee onboarding, and ongoing monthly compliance. 15+ years serving Delhi NCR employers.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20Registration%20in%20Delhi.%20Quote%20please." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESIC%20Registration%20in%20Delhi&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20ESIC%20Registration%20in%20Delhi.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Registration - Available in 4 Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert ESIC registration across India's major cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/esic-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esic-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/esic-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end employer compliance in Delhi</div><div class="pa-cross-grid"><a href="/payroll-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/shop-act-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed bi-annually. Monitor: ESIC contribution rate revisions, wage ceiling changes, esic.gov.in portal updates. CA & CS Team, Patron Accounting LLP.</p>
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
