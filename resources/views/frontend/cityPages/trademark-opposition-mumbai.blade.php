
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Trademark Opposition in Mumbai - TM-O, Process & Timeline</title>
    <meta name="description" content="Trademark opposition in Mumbai. File or defend Form TM-O, S.21, 4-month window, counter-statement, evidence, hearing. Trademark Registry Antop Hill. CA-led. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-opposition/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Opposition in Mumbai - TM-O, Process & Timeline">
    <meta property="og:description" content="Trademark opposition in Mumbai. File or defend Form TM-O, S.21, 4-month window, counter-statement, evidence, hearing. Trademark Registry Antop Hill. CA-led. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-opposition/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Opposition in Mumbai - TM-O, Process & Timeline">
    <meta name="twitter:description" content="Trademark opposition in Mumbai. File or defend Form TM-O, S.21, 4-month window, counter-statement, evidence, hearing. Trademark Registry Antop Hill. CA-led. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trademark Opposition in Mumbai",
      "description": "Trademark opposition in Mumbai. File or defend Form TM-O, S.21, 4-month window, counter-statement, evidence, hearing. Trademark Registry Antop Hill. CA-led. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/trademark-opposition/mumbai",
      "serviceType": "Trademark Opposition in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
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
        "url": "https://www.patronaccounting.com/trademark-opposition/mumbai",
        "price": "2700"
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
          "name": "Trademark Opposition in India: Process and Fees",
          "item": "https://www.patronaccounting.com/trademark-opposition"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trademark Opposition in Mumbai",
          "item": "https://www.patronaccounting.com/trademark-opposition/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is trademark opposition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trademark opposition is the formal legal proceeding under Section 21 of Trade Marks Act 1999 where any person can challenge a trademark application AFTER it has been accepted and published in the Trademark Journal but BEFORE it is registered. It is the public last checkpoint to prevent conflicting deceptive or unlawful marks from entering the Register. Filed via Form TM-O within 4 months of publication which is non-extendable. Applicant must file counter-statement within 2 months or application deemed abandoned. Proceedings include evidence stages hearing and decision appealable to Bombay HC."
          }
        },
        {
          "@type": "Question",
          "name": "Who can file a trademark opposition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Any person under S.21 which is deliberately broad. Includes registered trademark owners whose marks may be confused, unregistered mark owners who have prior use or common law rights, consumers or consumer groups who may be confused or deceived, competitors in the same trade, public interest parties, and even the general public. You do NOT need to be a registered trademark proprietor to oppose. You just need to demonstrate that the registration would harm your rights or the public interest."
          }
        },
        {
          "@type": "Question",
          "name": "What is the deadline for filing opposition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "4 MONTHS from date the trademark application is published in the Trademark Journal. This deadline is STRICT and NON-EXTENDABLE as TM Rules 2017 removed the Registrar discretionary power to grant extensions. If you miss the 4-month window you CANNOT oppose and mark will proceed to registration. Only recourse then is S.57 cancellation which is post-registration and more expensive and time-consuming. Weekly TM Journal monitoring essential for brand protection. Patron watch service catches conflicts within days."
          }
        },
        {
          "@type": "Question",
          "name": "What are the grounds for opposing a trademark?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multiple grounds available: S.9 absolute grounds including mark is descriptive generic customary deceptive offensive or prohibited. S.11 relative grounds including mark identical or deceptively similar to prior mark for same or similar goods causing confusion or to well-known mark for any goods causing dilution. Prior use under common law where opponent used mark before applicant. Bad faith where applicant adopted mark knowing of opponent prior use. Non-compliance with Act requirements. Opposition can cite multiple grounds simultaneously."
          }
        },
        {
          "@type": "Question",
          "name": "How to file a counter-statement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Counter-statement filed by applicant whose mark is being opposed in response to opposition notice. Filed in Form TM-O on ipindia.gov.in within 2 MONTHS of receiving opposition notice from Registrar. Fee Rs 2,700 per class. Must address each ground of opposition, assert applicant rights and defences including prior use distinctiveness different goods S.12 honest concurrent use, deny opponent claims point-by-point, and state grounds relied upon. CRITICAL non-filing within 2 months equals application DEEMED ABANDONED."
          }
        },
        {
          "@type": "Question",
          "name": "Can the opposition decision be appealed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 91 of Trade Marks Act 1999 any person aggrieved by Registrar decision in opposition proceedings may appeal to the High Court. For Mumbai Registry jurisdiction appeal filed at Bombay High Court IP Division at Fort. Since abolition of IPAB in 2021 all trademark appeals go directly to High Court. HC conducts fresh consideration not limited to reviewing only Registrar reasoning. Appeal must be filed within prescribed period. Many Registrar decisions both allowing and refusing registration are overturned on appeal. Quick Answers Trademark opposition kya hota hai? Jab kisi ka mark accept hoke TM Journal mein publish hota hai - tab 4 mahine ka window milta hai oppose karne ka. Yeh registration se PEHLE ka last chance hai. Form TM-O, Rs 2,700/class. Agar aapki application oppose hui - 2 mahine mein counter-statement file karo warna ABANDONED. Patron dono side handle karta hai. 4 mahine miss ho gaya toh? Mark register ho jayega. Phir sirf S.57 cancellation bachta hai - zyada expensive, zyada time. TM Rules 2017 ne extension ki power KHATAM kar di. Isliye TM Journal watch bahut zaroori hai - Patron har hafta scan karta hai. Counter-statement nahi file ki toh? Application ABANDONED - khatam. Koi hearing nahi, koi defence nahi. Mark gayi. TURANT Patron ko notice dikhao - emergency counter-statement draft karte hain."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        Trademark Opposition in Mumbai: Filing and Defending Opposition Under Section 21 - Form TM-O, Counter-Statement, Evidence, and Hearing at the Trademark Registry
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What:</span> Legal process under S.21 to challenge or defend a trademark application AFTER TM Journal publication but BEFORE registration. Last checkpoint</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Sides:</span> FILING opposition (block conflicting mark, protect your brand) | DEFENDING opposition (protect your application when someone opposes it)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> Opposition: 4 MONTHS from TM Journal publication (NON-EXTENDABLE). Counter-statement: 2 months (non-filing = ABANDONED). Every deadline strict</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Process:</span> Form TM-O (Rs 2,700/class) > Counter-statement > Evidence (Rule 45/46/47) > Hearing at Antop Hill/VC > Decision > Appeal to Bombay HC (S.91)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TM%20Opposition%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Opposition%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Opposition%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Opposition',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'From BKC corporate brand portfolios to Andheri pharma Class 5 to Powai startup defence to Bandra restaurant disputes - Mumbai\'s brand owners trust Patron for trademark opposition.',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Evidence</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Filing vs Defence</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Opposition in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Opposition Services at a Glance</strong></p>
                    <p>S.21 opposition = last checkpoint before registration. FILING: block conflicting mark within 4 months (NON-EXTENDABLE). DEFENDING: counter-statement within 2 months (non-filing = ABANDONED). Form TM-O, Rs 2,700/class. Evidence stages (Rule 45/46/47). Hearing at Antop Hill or VC. Decision appealable to Bombay HC (S.91). 'Any person' can oppose. Mumbai = highest opposition volume. TM Journal watch = essential.</p>
                </div>
                <p>Mumbai generates one of India's highest trademark opposition volumes - BKC corporate brand portfolios, Andheri pharma Class 5 (most opposed), Bandra restaurants, Powai startups, Goregaon entertainment. Learn more about <a href="/trademark-opposition">trademark opposition across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Filing Side</td><td>Oppose conflicting mark: Form TM-O within 4 months of TM Journal publication. NON-EXTENDABLE</td></tr>
                        <tr><td>Defence Side</td><td>Defend YOUR mark: counter-statement within 2 months. Non-filing = ABANDONED</td></tr>
                        <tr><td>Form + Fee</td><td>Form TM-O. Rs 2,700/class (e-filing, individual/MSME). Both sides same form</td></tr>
                        <tr><td>Evidence</td><td>Rule 45 (opponent, 2 months) > Rule 46 (applicant, 2 months) > Rule 47 (reply, 1-2 months)</td></tr>
                        <tr><td>Hearing</td><td>Before Registrar. Physical at Antop Hill or video conference. ~3 months after evidence</td></tr>
                        <tr><td>Locus Standi</td><td>'Any person' - registered owners, prior users, consumers, competitors, public interest</td></tr>
                        <tr><td>Appeal</td><td>Bombay HC IP Division (S.91). Fresh consideration. Many decisions overturned</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Opposition is part of complete brand protection. Patron integrates with <a href="/trademark-registration/mumbai">trademark registration</a>, <a href="#">objection handling</a>, <a href="/trademark-hearing/mumbai">hearing</a>, <a href="/trademark-infringement/mumbai">infringement enforcement</a>, and <a href="/trademark-notice/mumbai">notice reply</a>.</p>
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
                <h2 class="section-title">What Is Trademark Opposition?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Trademark opposition is the formal legal proceeding under Section 21 where any person can challenge a trademark application AFTER it is accepted and published in the TM Journal but BEFORE registration. The public's last checkpoint.</p>
                    <p>Two roles: OPPONENT (block conflicting mark, protect your brand) and APPLICANT (defend your application against opposition). Patron handles BOTH sides. The 4-month window is NON-EXTENDABLE since TM Rules 2017.</p>
                    <p>TM Journal published weekly at <a href="https://ipindia.gov.in" target="_blank" rel="noopener">ipindia.gov.in</a>. Trademark Registry Mumbai: Antop Hill. Learn more at <a href="/trademark-opposition">our national opposition practice</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Opposition:</strong></p>
                    <ul>
                        <li><strong>4-Month NON-EXTENDABLE:</strong> TM Rules 2017 removed extension power. Miss it = only S.57 cancellation (post-registration, more expensive). TM Journal watch is CRITICAL.</li>
                        <li><strong>2-Month Counter-Statement:</strong> Applicant must file or application DEEMED ABANDONED. No hearing, no merits. Mark lost without defence.</li>
                        <li><strong>Evidence Wins:</strong> Rule 45/46/47 evidence stages are where oppositions are won or lost. Affidavits + invoices + advertising + confusion proof.</li>
                        <li><strong>'Any Person':</strong> S.21 deliberately broad. Registered owners, prior users, consumers, competitors, public interest. No restriction.</li>
                        <li><strong>Both Sides:</strong> Patron files oppositions (protecting brands) AND defends applications (protecting clients' marks). Dual expertise = stronger service.</li>
                        <li><strong>Bombay HC Appeal:</strong> S.91. Since IPAB abolition (2021), directly to HC. Fresh consideration. Many decisions overturned.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Opposition</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Opposition</span>
                        <strong>Resolved</strong>
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
            <h2 class="section-title">Who Needs Trademark Opposition Services in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Corporate Brand Owners (BKC, Nariman Point):</strong> Global/national brands maintaining TM Journal watch. Opposing any similar filing across classes. <a href="/trademark-registration/mumbai">Trademark registration</a> for portfolio.</p>
                <p><strong>Pharma Companies (Andheri MIDC, Thane):</strong> Class 5 = most opposed class. Drug brand protection. Filing and facing oppositions constantly. <a href="/trademark-hearing/mumbai">Hearing support</a>.</p>
                <p><strong>Startups (Powai, BKC):</strong> Accepted applications opposed by established companies. Need counter-statement within 2 months urgently. <a href="#">Objection handling</a>.</p>
                <p><strong>Restaurants (Bandra, Andheri):</strong> Class 43 heavily contested. Similar names trigger oppositions. Both filing and defending. <a href="/trademark-infringement/mumbai">Infringement enforcement</a>.</p>
                <p><strong>Media/Entertainment (Lower Parel, Goregaon):</strong> Creative brand conflicts. Show names, production house marks. <a href="/trademark-notice/mumbai">Notice reply</a> for C&D situations.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Opposition Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>TM Journal Monitoring (Watch)</td><td>Automated weekly scan of every TM Journal issue for marks identical/similar to client brands across relevant classes. Alert within days of publication. 4-month window preserved. ONLY way to catch conflicts in time</td></tr>
                        <tr><td>Filing Opposition (Form TM-O)</td><td>Draft + file within 4 months. Grounds: S.9 absolute, S.11 relative, prior use, well-known mark, bad faith. Detailed particulars of opponent's mark. Rs 2,700/class e-filing. Typically filed within 2-3 months for review time</td></tr>
                        <tr><td>Counter-Statement (Defence)</td><td>Draft + file within 2 MONTHS of receiving opposition notice. Address each ground. Assert rights: prior use, distinctiveness, different goods, S.12 honest concurrent use. Non-filing = ABANDONED. Emergency service available</td></tr>
                        <tr><td>Evidence Compilation (Rule 45/46/47)</td><td>Comprehensive evidence packages: affidavits with exhibits (invoices, advertising, market surveys, photographs, international certificates). Properly notarised and indexed. Evidence started BEFORE filing for readiness</td></tr>
                        <tr><td>Hearing Preparation + Representation</td><td>Written submissions (legal brief), evidence highlights, oral argument preparation. Appear before Registrar at Antop Hill (physical) or via VC. Strategy: confusion emphasis (opponent) or distinctiveness emphasis (applicant)</td></tr>
                        <tr><td>Coexistence Agreement</td><td>Not all oppositions need hearing. Negotiate: territorial restrictions, goods carve-outs, visual differentiation, mutual non-aggression. Both parties withdraw/settle. Saves years of proceedings</td></tr>
                        <tr><td>Bombay HC Appeal (S.91)</td><td>If Registrar decision adverse: appeal to Bombay HC IP Division at Fort. Since IPAB abolition (2021), directly to HC. Fresh consideration. Many decisions overturned. Patron coordinates with IP litigation counsel</td></tr>
                        <tr><td>Integrated Brand Protection</td><td><a href="/trademark-registration/mumbai">Registration</a> + watch + opposition + <a href="/trademark-infringement/mumbai">infringement</a> + <a href="/trademark-notice/mumbai">notice reply</a>. Complete brand defence stack from one firm</td></tr>

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
            <h2 class="section-title">How Trademark Opposition Works in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 7-step process covers both filing and defending opposition - from TM Journal monitoring through analysis, Form TM-O or counter-statement, evidence stages, hearing, decision, to Bombay HC appeal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">TM Journal Monitoring / Opposition Notice</h3>
        <p class="step-description">FILING: Patron's watch service identifies conflicting mark in weekly TM Journal - alerts client within days. 4-month clock starts. DEFENDING: Client receives opposition notice - 2-month counter-statement clock starts. Walk-in at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Conflict detected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Client alerted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline tracked</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TM JOURNAL</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Conflict Found</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">4-Month Clock</text></svg></div>
            <span class="illustration-label">Clock Started</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Analysis and Strategy</h3>
        <p class="step-description">FILING: Analyse conflicting mark (phonetic/visual/conceptual similarity, class overlap, goods/services overlap, opponent's rights). DEFENDING: Analyse opposition grounds, verify opponent's claims on ipindia.gov.in, identify strongest defence strategy.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Similarity assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rights analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategy confirmed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANALYSE</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Similarity + Class</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Strategy Set</text></svg></div>
            <span class="illustration-label">Strategy Set</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Form TM-O Filing / Counter-Statement</h3>
        <p class="step-description">FILING: Draft + file Form TM-O with grounds and particulars within 4 months. Rs 2,700/class. DEFENDING: Draft + file counter-statement addressing each ground within 2 months. Non-filing = ABANDONED. Both on ipindia.gov.in.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TM-O drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grounds specified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed within deadline</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TM-O FILE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ipindia.gov.in</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Rs 2,700/class</text><text x="60" y="68" font-size="5" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">Within 4 Months</text></svg></div>
            <span class="illustration-label">Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Evidence - Opponent (Rule 45)</h3>
        <p class="step-description">Opponent files evidence in support of opposition within 2 months of counter-statement: affidavits proving prior use, reputation, advertising, sales, confusion instances, international registrations. Can waive but risky. Patron compiles comprehensive exhibits.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Affidavits prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exhibits indexed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed within 2 months</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EVIDENCE R.45</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Opponent Proof</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Affidavits</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">2 Months</text></svg></div>
            <span class="illustration-label">Opponent Evidence Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Evidence - Applicant (Rule 46)</h3>
        <p class="step-description">Applicant files evidence in support of application within 2 months: affidavits proving own use, distinctiveness, different trade channels, no confusion, independent adoption. Patron ensures evidence addresses every opposition ground.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Distinctiveness proved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Use documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Market presence shown</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EVIDENCE R.46</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Applicant Proof</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Distinctiveness</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">2 Months</text></svg></div>
            <span class="illustration-label">Applicant Evidence Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Reply Evidence (Rule 47) + Hearing</h3>
        <p class="step-description">Opponent's reply evidence (1-2 months). Then hearing before Registrar (~3 months after evidence). Physical at Antop Hill or VC. Written submissions + oral arguments. Non-attendance by either party = fatal outcome.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reply evidence filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hearing attended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Arguments presented</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">R.47 + HEARING</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Reply Evidence</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Antop Hill / VC</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Oral Arguments</text></svg></div>
            <span class="illustration-label">Hearing Completed</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Decision + Appeal</h3>
        <p class="step-description">Registrar decides: register / refuse / register with conditions. Communicated in writing. If adverse: appeal to Bombay HC under S.91 within prescribed period. HC conducts fresh consideration. Many decisions overturned.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Decision received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Appeal assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Brand outcome secured</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">DECIDED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Appeal if Needed</text></svg></div>
            <span class="illustration-label">Matter Resolved</span>
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
            <h2 class="section-title">Evidence Required for Trademark Opposition</h2>
            <div class="content-text">
                
                <ul><li><strong>TM Registration Certificate:</strong> Prove registered rights (opponent) or own registration (applicant). Download from ipindia.gov.in.</li><li><strong>Form TM-O:</strong> Notice of opposition with grounds (filing) or counter-statement with defences (defending).</li><li><strong>Evidence of Prior Use (Affidavit):</strong> Invoices, ads, packaging since first use date. Both sides.</li><li><strong>Sales/Revenue Data:</strong> Prove commercial significance of brand for both opponent and applicant.</li><li><strong>Advertising Materials:</strong> Print/digital/TV/radio showing brand use and investment.</li><li><strong>International Registrations:</strong> Show global recognition - certificates from other countries.</li><li><strong>Market Survey/Consumer Evidence:</strong> Prove likelihood of confusion (opponent) or no confusion (applicant).</li><li><strong>Case Law Compilation:</strong> Precedents supporting opposition grounds or registrability.</li><li><strong>Coexistence Agreement (if settling):</strong> Draft agreement for mutual use conditions.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Evidence Wins Oppositions:</strong> Filing a strong TM-O with compelling grounds but submitting weak Rule 45 evidence = opposition will fail. Similarly, strong counter-statement without Rule 46 evidence = application vulnerable. Start evidence compilation BEFORE filing. Build the evidentiary foundation from the outset.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trademark Opposition Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing 4-Month Window</td><td>No TM Journal monitoring. Discover conflicting mark AFTER registration. Only S.57 cancellation remains (more expensive)</td><td>Automated weekly watch service. Every Journal scanned across relevant classes. Alert within days. 4-month window preserved</td></tr>
                        <tr><td>Counter-Statement Not Filed</td><td>Opposition notice received but no counter-statement within 2 months. Application DEEMED ABANDONED. Mark lost without hearing</td><td>Emergency counter-statement service. Priority drafting within days. Strong defences asserted. Zero applications lost to deadline</td></tr>
                        <tr><td>Weak Evidence at Rule 45/46</td><td>Strong TM-O but no supporting evidence. Or strong counter-statement but no Rule 46 proof. Proceedings decided on evidence quality</td><td>Evidence compilation starts BEFORE filing. Comprehensive packages: affidavits, invoices, advertising, surveys. Properly notarised and indexed</td></tr>
                        <tr><td>Class 5 Pharma Overload</td><td>Andheri MIDC pharma: highest opposition rate. Short drug names, limited phonetics. Large pharma systematically oppose ANY similar filing</td><td>Challenge opponent actual use. Demonstrate different therapeutic segments. Show no confusion. Counter with S.47 non-use claim if opponent's mark unused</td></tr>
                        <tr><td>Hearing Non-Attendance</td><td>Opponent absent = opposition DISMISSED (mark registers). Applicant absent = application ABANDONED. Either way fatal</td><td>All hearing dates tracked. Representation at every hearing - Antop Hill physical or VC. Zero non-attendance</td></tr>

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
            <h2 class="section-title">Trademark Opposition Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form TM-O - Opposition (e-filing)</td><td>Rs 2,700/class (individual/MSME)</td></tr>
                        <tr><td>Form TM-O - Counter-Statement</td><td>Rs 2,700/class</td></tr>
                        <tr><td>Patron: Filing Opposition</td><td>Rs 15,000 - Rs 40,000</td></tr>
                        <tr><td>Patron: Defending Opposition</td><td>Rs 15,000 - Rs 40,000</td></tr>
                        <tr><td>Patron: Evidence per Stage</td><td>Rs 15,000 - Rs 50,000</td></tr>
                        <tr><td>Patron: TM Journal Watch (Annual)</td><td>Rs 5,000 - Rs 15,000/year</td></tr>
                        <tr><td>Bombay HC Appeal (S.91)</td><td>Rs 50,000 - Rs 2,00,000+</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Opposition consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Opposition%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Opposition Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Opposition Filing (TM-O)</td><td>Within 4 months (NON-EXTENDABLE)</td></tr>
                        <tr><td>Counter-Statement</td><td>Within 2 months (non-filing = ABANDONED)</td></tr>
                        <tr><td>Evidence: Opponent (Rule 45)</td><td>2 months</td></tr>
                        <tr><td>Evidence: Applicant (Rule 46)</td><td>2 months</td></tr>
                        <tr><td>Evidence: Reply (Rule 47)</td><td>1-2 months</td></tr>
                        <tr><td>Hearing</td><td>~3 months after evidence</td></tr>
                        <tr><td>Total (Filing to Decision)</td><td>12-36+ months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Walk-in at Patron's Marine Lines, Mumbai office. Trademark Registry: Antop Hill (15 min). Bombay HC: Fort (10 min). TM Journal: ipindia.gov.in (weekly). 4-month opposition window is NON-EXTENDABLE. 2-month counter-statement is do-or-die. Evidence stages have strict deadlines. Every missed deadline has irreversible consequences. Start early - don't wait until the last week.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Opposition in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Both Sides Expertise</h3><p>Filing oppositions (protecting brands) AND defending applications (protecting clients' marks). Dual expertise means we understand both strategies - making service stronger on whichever side needed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>TM Journal Watch Service</h3><p>Automated weekly monitoring across all relevant classes. ONLY way to catch threats within 4-month window. Without it: discover conflicts after registration = expensive S.57 cancellation only option.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Evidence-Driven Approach</h3><p>Evidence compilation starts BEFORE filing. By Rule 45/46/47 deadlines: comprehensive, compelling packages ready. Affidavits + invoices + advertising + international certificates. Properly indexed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Industry-Specific Strategy</h3><p>Pharma Class 5, restaurant Class 43, IT Class 9/42, entertainment, fashion - each needs different opposition/defence strategy. Mumbai industry dynamics tailored. 10,000+ businesses, 4.9 rating.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Brand Owners Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Four offices: Pune, Mumbai, Delhi, Gurugram. Filing and defending trademark oppositions for corporates, pharma, startups, restaurants, and entertainment companies across Mumbai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Filing vs Defending Opposition</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Filing Opposition (Opponent)</th><th>Defending (Applicant)</th></tr></thead>
                    <tbody>
                        <tr><td>Trigger</td><td>Conflicting mark in TM Journal</td><td>Opposition notice received</td></tr>
                        <tr><td>Deadline</td><td>4 months (NON-EXTENDABLE)</td><td>Counter-statement 2 months (non-filing = ABANDONED)</td></tr>
                        <tr><td>Form + Fee</td><td>TM-O, Rs 2,700/class</td><td>TM-O, Rs 2,700/class</td></tr>
                        <tr><td>Grounds</td><td>S.9 absolute, S.11 relative, prior use, bad faith</td><td>Deny grounds, assert distinctiveness, S.12 concurrent use</td></tr>
                        <tr><td>Evidence</td><td>Rule 45 (support) + Rule 47 (reply)</td><td>Rule 46 (support application)</td></tr>
                        <tr><td>If Successful</td><td>Mark NOT registered; brand protected</td><td>Opposition dismissed; mark registered</td></tr>
                        <tr><td>If Unsuccessful</td><td>Mark registered (appeal to Bombay HC)</td><td>Application refused (appeal to Bombay HC)</td></tr>

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
            <h2 class="section-title">Related Services for Mumbai Brand Owners</h2>
            <div class="content-text">
                
                <p>Mumbai brand owners handling trademark oppositions often need:</p>
                <ul><li><a href="/trademark-opposition">Trademark Opposition (India)</a> - National overview.</li>
                    <li><a href="/trademark-registration/mumbai">Trademark Registration in Mumbai</a> - Secure your mark.</li>
                    <li><a href="#">Trademark Objection in Mumbai</a> - Examination reply.</li>
                    <li><a href="/trademark-hearing/mumbai">Trademark Hearing in Mumbai</a> - Show cause hearing.</li>
                    <li><a href="/trademark-infringement/mumbai">Trademark Infringement in Mumbai</a> - Enforcement.</li>
                    <li><a href="/trademark-notice/mumbai">Trademark Notice Reply in Mumbai</a> - C&D response.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Trademark Opposition</h2>
            <div class="content-text">
                
                <p><strong>S.21 - Opposition (7 Sub-Sections):</strong></p>
                <ul><li>S.21(1): any person may oppose within 4 months. S.21(3): counter-statement 2 months or abandoned. S.21(5): hearing and decision.</li></ul>
                <p style="margin-top:16px;"><strong>Grounds:</strong></p>
                <ul><li>S.9 absolute (descriptive, generic, deceptive). S.11 relative (similar prior mark, well-known mark dilution). Prior use. Bad faith.</li></ul>
                <p style="margin-top:16px;"><strong>Evidence Rules 43-48:</strong></p>
                <ul><li>Rule 45: opponent 2 months. Rule 46: applicant 2 months. Rule 47: reply 1-2 months. Rule 48: hearing. Non-attendance fatal.</li></ul>
                <p style="margin-top:16px;"><strong>Appeal:</strong> S.91 to Bombay HC. Since IPAB abolition (2021), directly to HC. Fresh consideration.</p>
                <p style="margin-top:16px;"><strong>Portals:</strong> <a href="https://ipindia.gov.in" target="_blank" rel="noopener">IP India</a> | <a href="https://indiacode.nic.in" target="_blank" rel="noopener">India Code</a> | <a href="https://bombayhighcourt.nic.in" target="_blank" rel="noopener">Bombay HC</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: Trademark Opposition in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about trademark opposition, who can file, deadlines, grounds, counter-statement, and appeals for Mumbai brand owners and applicants.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Opposition',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is trademark opposition?</h3>
                        <div class="faq-expanded__a"><p>Trademark opposition is the formal legal proceeding under Section 21 of Trade Marks Act 1999 where any person can challenge a trademark application AFTER it has been accepted and published in the Trademark Journal but BEFORE it is registered. It is the public last checkpoint to prevent conflicting deceptive or unlawful marks from entering the Register. Filed via Form TM-O within 4 months of publication which is non-extendable. Applicant must file counter-statement within 2 months or application deemed abandoned. Proceedings include evidence stages hearing and decision appealable to Bombay HC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can file a trademark opposition?</h3>
                        <div class="faq-expanded__a"><p>Any person under S.21 which is deliberately broad. Includes registered trademark owners whose marks may be confused, unregistered mark owners who have prior use or common law rights, consumers or consumer groups who may be confused or deceived, competitors in the same trade, public interest parties, and even the general public. You do NOT need to be a registered trademark proprietor to oppose. You just need to demonstrate that the registration would harm your rights or the public interest.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the deadline for filing opposition?</h3>
                        <div class="faq-expanded__a"><p>4 MONTHS from date the trademark application is published in the Trademark Journal. This deadline is STRICT and NON-EXTENDABLE as TM Rules 2017 removed the Registrar discretionary power to grant extensions. If you miss the 4-month window you CANNOT oppose and mark will proceed to registration. Only recourse then is S.57 cancellation which is post-registration and more expensive and time-consuming. Weekly TM Journal monitoring essential for brand protection. Patron watch service catches conflicts within days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the grounds for opposing a trademark?</h3>
                        <div class="faq-expanded__a"><p>Multiple grounds available: S.9 absolute grounds including mark is descriptive generic customary deceptive offensive or prohibited. S.11 relative grounds including mark identical or deceptively similar to prior mark for same or similar goods causing confusion or to well-known mark for any goods causing dilution. Prior use under common law where opponent used mark before applicant. Bad faith where applicant adopted mark knowing of opponent prior use. Non-compliance with Act requirements. Opposition can cite multiple grounds simultaneously.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to file a counter-statement?</h3>
                        <div class="faq-expanded__a"><p>Counter-statement filed by applicant whose mark is being opposed in response to opposition notice. Filed in Form TM-O on ipindia.gov.in within 2 MONTHS of receiving opposition notice from Registrar. Fee Rs 2,700 per class. Must address each ground of opposition, assert applicant rights and defences including prior use distinctiveness different goods S.12 honest concurrent use, deny opponent claims point-by-point, and state grounds relied upon. CRITICAL non-filing within 2 months equals application DEEMED ABANDONED.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can the opposition decision be appealed?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 91 of Trade Marks Act 1999 any person aggrieved by Registrar decision in opposition proceedings may appeal to the High Court. For Mumbai Registry jurisdiction appeal filed at Bombay High Court IP Division at Fort. Since abolition of IPAB in 2021 all trademark appeals go directly to High Court. HC conducts fresh consideration not limited to reviewing only Registrar reasoning. Appeal must be filed within prescribed period. Many Registrar decisions both allowing and refusing registration are overturned on appeal.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Trademark opposition kya hota hai?</strong> Jab kisi ka mark accept hoke TM Journal mein publish hota hai - tab 4 mahine ka window milta hai oppose karne ka. Yeh registration se PEHLE ka last chance hai. Form TM-O, Rs 2,700/class. Agar aapki application oppose hui - 2 mahine mein counter-statement file karo warna ABANDONED. Patron dono side handle karta hai.</p>
                <p><strong>4 mahine miss ho gaya toh?</strong> Mark register ho jayega. Phir sirf S.57 cancellation bachta hai - zyada expensive, zyada time. TM Rules 2017 ne extension ki power KHATAM kar di. Isliye TM Journal watch bahut zaroori hai - Patron har hafta scan karta hai.</p>
                <p><strong>Counter-statement nahi file ki toh?</strong> Application ABANDONED - khatam. Koi hearing nahi, koi defence nahi. Mark gayi. TURANT Patron ko notice dikhao - emergency counter-statement draft karte hain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Clock is Ticking - 4 Months or 2 Months</h2>
            <div class="content-text">
                
                <p>If you're a brand owner: your brand is ONLY protected with TM Journal monitoring. Every week hundreds of marks published. 4-month window is NON-EXTENDABLE. If you're an applicant who received opposition: EXACTLY 2 months for counter-statement. Non-filing = ABANDONED = brand lost. Evidence stages have strict deadlines. Every missed deadline = irreversible consequences.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Opposition%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Protect Your Brand Through Opposition</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Trademark opposition under S.21 is the last checkpoint before a conflicting mark enters the Register. 4-month non-extendable filing window. 2-month counter-statement deadline. Evidence stages (Rule 45/46/47). Hearing at Antop Hill. Decision appealable to Bombay HC (S.91).</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai = highest opposition volume in India. BKC corporates, Andheri pharma (Class 5), Bandra restaurants, Powai startups, Goregaon entertainment. Patron handles BOTH filing and defending oppositions.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron delivers TM Journal watch, Form TM-O filing, counter-statement, evidence compilation, hearing representation, coexistence negotiation, and Bombay HC appeal from Marine Lines (15 min from Antop Hill, 10 min from Bombay HC). 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Opposition%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Trademark%20Opposition%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Opposition%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Opposition Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides trademark opposition filing and defence services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Trademark opposition and brand protection</div>
                <div class="pa-city-grid">
                    <a href="/trademark-opposition/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/trademark-opposition/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/trademark-opposition/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Complete brand protection</div>
                <div class="pa-cross-grid">
                    <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Objection</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-hearing/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Hearing</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-infringement/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Infringement</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/trademark-notice/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Notice Reply</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/copyright-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Copyright Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers trademark opposition in Mumbai. Content reviewed annually (Freshness Tier 3) as procedure is stable with fee and rule updates monitored.</p>
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
