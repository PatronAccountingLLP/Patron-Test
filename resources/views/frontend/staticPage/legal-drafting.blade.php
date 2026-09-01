
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Legal Drafting Services - Agreements, Contracts & MOU India</title>
    <meta name="description" content="Professional legal drafting service in India. NDA, MOU, shareholder agreement, employment contract drafted and vetted by CA. Starting at INR 2,499.">
    <link rel="canonical" href="/legal-drafting">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Legal Drafting Services - Agreements, Contracts & MOU India">
    <meta property="og:description" content="Professional legal drafting service in India. NDA, MOU, shareholder agreement, employment contract drafted and vetted by CA. Starting at INR 2,499.">
    <meta property="og:url" content="/legal-drafting">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Legal Drafting Services - Agreements, Contracts & MOU India">
    <meta name="twitter:description" content="Professional legal drafting service in India. NDA, MOU, shareholder agreement, employment contract drafted and vetted by CA. Starting at INR 2,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Legal Drafting Service",
          "description": "",
          "url": "https://www.patronaccounting.com/legal-drafting",
          "serviceType": "Legal Drafting Service",
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
            "url": "https://www.patronaccounting.com/legal-drafting",
            "price": "2500"
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
              "name": "Legal Drafting Service",
              "item": "https://www.patronaccounting.com/legal-drafting"
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
                        Legal Drafting Service in India: Contracts, Agreements and Deeds in 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Custom Contracts - Not Templates</strong>:</span> Every document drafted from scratch, customised to your transaction, industry, parties, and risk profile. Governed by Indian Contract Act, 1872.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Full Range of Business Documents</strong>:</span> NDA, MOU, Shareholder Agreement (SHA), Employment Contract, Service Agreement, Vendor Contract, Founders Agreement, JV Agreement, Lease Deed, and Legal Notices.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Contract Vetting and Risk Review</strong>:</span> Clause-by-clause review of third-party contracts with written risk memo. Identifies risky indemnity, liability, arbitration, and termination clauses.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Stamp Duty Guidance Included</strong>:</span> State-specific stamp duty guidance under Indian Stamp Act 1899 included with every document. Unstamped documents are inadmissible in court.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 1,000+ Documents Drafted | 4.8/5 Rating | 2-Day Average Delivery | Pune, Mumbai, Delhi, Bangalore</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Legal%20Drafting%20Enquiry&body=Hello%2C%0AI%20need%20legal%20drafting%20services.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20contract%20drafted.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Legal Drafting',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Our Process</a><a href="#documents-section" class="toc-btn">Info Required</a><a href="#challenges-section" class="toc-btn">Contract Risks</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Drafting Service in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Legal Drafting Services at a Glance</strong></p>
                    <p>Every business relationship in India begins with a written agreement. A poorly drafted contract - missing a dispute resolution clause, carrying an ambiguous scope of work, or lacking an IP assignment - can cost far more in litigation than the deal was ever worth. Patron Accounting's CA and CS team drafts custom contracts from scratch. Starting at INR 2,499 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Our legal drafting service produces precision-drafted contracts, agreements, and legal documents governed by the Indian Contract Act, 1872 and enforceable in Indian courts.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>Indian Contract Act 1872; Companies Act 2013; Arbitration Act 1996; Specific Relief Act 1963; Indian Stamp Act 1899; IT Act 2000 (S.10A)</td></tr>
                        <tr><td><strong>Documents Covered</strong></td><td>NDA, MOU, SHA, Employment Contract, Service Agreement, Vendor Contract, Founders Agreement, JV Agreement, Lease Deed, Legal Notice, Board Resolution</td></tr>
                        <tr><td><strong>Our Process</strong></td><td>Free intake call > information checklist > custom draft > internal review > client revision > execution-ready document + stamp duty guidance</td></tr>
                        <tr><td><strong>Delivery Time</strong></td><td>2-3 days for NDA/MOU; 3-5 days for service/employment; 5-7 days for SHA/JV/founders</td></tr>
                        <tr><td><strong>Vetting / Review</strong></td><td>Clause-by-clause review of third-party contracts with risk flags and recommended revisions</td></tr>
                        <tr><td><strong>Stamp Duty</strong></td><td>State-specific stamp duty guidance under Indian Stamp Act 1899 included for every document</td></tr>
                        <tr><td><strong>Starting Price</strong></td><td>INR 2,499 for standard NDA; INR 14,999 for Shareholder Agreement; custom quote for complex documents</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Legal drafting kaise karein? Patron Accounting ki CA aur CS team aapke liye custom contracts draft karti hai - NDA, MOU, shareholder agreement, employment contract, service agreement - sabhi Indian law ke anusaar. Generic templates nahi, scratch se drafting. Free scoping call se shuru karein.</p>
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
                <h2 class="section-title">What is Legal Drafting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Legal drafting</strong> is the professional process of creating legally valid and enforceable written documents - contracts, agreements, deeds, notices, and resolutions - that accurately record the mutual intent of the parties and comply with applicable Indian laws.</p>
                    <p>Under Section 2(h) of the Indian Contract Act, 1872, a contract is an agreement enforceable by law. Section 10 states that all agreements are contracts if made by free consent of competent parties, for lawful consideration, with a lawful object, and not declared void. Skilled legal drafting ensures every clause satisfies these requirements and withstands judicial or arbitral scrutiny.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Legal Drafting:</strong></p>
                    <p><strong>Drafting:</strong> Creating a legal document from scratch, tailored to the parties, transaction, and applicable Indian law.</p>
                    <p><strong>Vetting / Review:</strong> Clause-by-clause analysis of a third-party contract to identify unfavourable terms, risks, and missing protections.</p>
                    <p><strong>NDA:</strong> Non-Disclosure Agreement - legally binding agreement protecting confidential information shared between parties.</p>
                    <p><strong>SHA:</strong> Shareholders Agreement - governs shareholder rights including anti-dilution, tag-along, drag-along, ROFR, and ROFO clauses.</p>
                    <p><strong>Arbitration Clause:</strong> Dispute resolution clause referring disputes to arbitration; must be in writing per Section 7, Arbitration and Conciliation Act 1996.</p>
                    <p><strong>Stamp Duty:</strong> Tax on specific instruments under Indian Stamp Act 1899. Unstamped documents are inadmissible as evidence in court.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Legal drafting contract -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CUSTOM CONTRACT DRAFTING</text>
                            <line x1="45" y1="48" x2="155" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <line x1="45" y1="58" x2="150" y2="58" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <line x1="45" y1="68" x2="145" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <line x1="45" y1="78" x2="140" y2="78" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                            <rect x="45" y="90" width="40" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="65" y="101" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">NDA</text>
                            <rect x="90" y="90" width="30" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                            <text x="105" y="101" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SHA</text>
                            <rect x="125" y="90" width="30" height="16" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                            <text x="140" y="101" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">MOU</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Enforceable. Custom. Precise.</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Indian Contract Act</span>
                        <strong>Custom Drafting</strong>
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
            <h2 class="section-title">Who Needs Legal Drafting Services?</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Startups and Founders:</strong> Founders Agreement, SHA, ESOP Policy, NDA with investors and early hires, Convertible Note documentation</li>
                    <li><strong>SMEs and Growing Businesses:</strong> Vendor contracts, customer service agreements, distribution agreements, franchise agreements, non-compete clauses</li>
                    <li><strong>Companies Raising Investment:</strong> Share Subscription Agreement (SSA), Share Purchase Agreement (SPA), SHA with anti-dilution, Term Sheet review</li>
                    <li><strong>HR and Employment:</strong> Employment contracts, offer letters, POSH Policy, Code of Conduct, employee IP assignment agreements</li>
                    <li><strong>Real Estate and Property:</strong> Leave and licence agreements, lease deeds, sale agreements, development agreements</li>
                    <li><strong>Intellectual Property:</strong> IP licensing, technology transfer, software development agreements, copyright assignment deeds</li>
                    <li><strong>Joint Ventures:</strong> JV Agreements, Partnership Deeds, LLP Agreement drafting under LLP Act 2008</li>
                    <li><strong>Dispute Management:</strong> Legal notices (Section 80 CPC, Section 138 NI Act), demand letters, settlement agreements</li>
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
            <h2 class="section-title">Our Legal Drafting Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Business and Commercial Contracts</strong></td><td>Service Agreements, Vendor Contracts, Supply Agreements, Distribution, Franchise, MSAs - with clear scope, payment, IP, and arbitration clauses</td></tr>
                        <tr><td><strong>Corporate and Investment Documents</strong></td><td>SHA with anti-dilution/tag-along/ROFR, SSA, SPA, Founders Agreement with vesting, JV Agreements, MOA/AOA amendments</td></tr>
                        <tr><td><strong>Employment and HR Documents</strong></td><td>Employment contracts, NDAs for employees, Non-Compete Agreements (reviewed for enforceability), POSH Policy, ESOP Policy</td></tr>
                        <tr><td><strong>NDAs and Confidentiality Agreements</strong></td><td>Unilateral and mutual NDAs for partnerships, investor discussions, pre-employment, technology sharing, and due diligence</td></tr>
                        <tr><td><strong>Real Estate and Lease Documents</strong></td><td>Leave and Licence, Lease Deeds, Sale Agreements - stamped per state-specific rates under Indian Stamp Act 1899</td></tr>
                        <tr><td><strong>Legal Notices and Dispute Letters</strong></td><td>Section 80 CPC notices, Section 138 NI Act cheque dishonour, Cease and Desist, Settlement Agreements</td></tr>
                        <tr><td><strong>Contract Vetting and Risk Review</strong></td><td>Clause-by-clause review with written risk memo - especially valuable before signing vendor MSAs and investor term sheets</td></tr>

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
            <h2 class="section-title">Our Legal Drafting Process: Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From free scoping call to execution-ready document with stamp duty guidance. Custom drafting, not templates.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Free Scoping Call (30 Minutes)</h3><p class="step-description">We begin with a free intake call to understand the nature of the agreement, parties involved, commercial terms, key protections required, governing law and jurisdiction preference, and mandatory stamp duty requirements.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Requirements scoped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Applicable laws confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">30m</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">FREE CALL</text></svg></div><span class="illustration-label">Call Done</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Information Checklist</h3><p class="step-description">We share a structured checklist covering party details (legal name, CIN/PAN), commercial terms, duration, payment, IP ownership preferences, dispute resolution mechanism, and any non-standard clauses required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Checklist completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All details captured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="85" y2="25" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="45" x2="85" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><circle cx="25" cy="25" r="3" fill="#10B981"/><circle cx="25" cy="35" r="3" fill="#10B981"/><circle cx="25" cy="45" r="3" fill="#10B981"/><circle cx="25" cy="55" r="3" fill="#F5A623"/></svg></div><span class="illustration-label">Info Ready</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Custom Draft - No Templates</h3><p class="step-description">Our CA and CS team drafts the document from scratch, customised to your transaction, industry, and parties. Every clause complies with Indian law, protects your specific interests, and withstands judicial or arbitral scrutiny.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Custom draft created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Clause-by-clause review</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CUSTOM DRAFT</text><line x1="25" y1="34" x2="95" y2="34" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="25" y1="46" x2="85" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="25" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><text x="60" y="70" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">NOT A TEMPLATE</text></svg></div><span class="illustration-label">Drafted</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Internal Quality Review</h3><p class="step-description">Before sharing, we review for: legal accuracy, internal consistency of defined terms, completeness, compliance with applicable statutes, stamp duty guidance accuracy, and jurisdiction suitability.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Quality verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">QA PASSED</text><line x1="30" y1="44" x2="90" y2="44" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="58" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.10 ICA Verified</text></svg></div><span class="illustration-label">Reviewed</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Client Review and One Revision Round</h3><p class="step-description">We share the draft with a brief explanation of key clauses and our drafting rationale. You review and share changes or counterparty mark-ups. One full revision round is included at no additional charge.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Draft shared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> One revision included</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="30" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">DRAFT v1</text><path d="M65 27l8 0" stroke="#14365F" stroke-width="1.5" stroke-linecap="round"/><rect x="78" y="20" width="22" height="14" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="89" y="30" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">v2</text><text x="60" y="55" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">1 REVISION INCLUDED</text></svg></div><span class="illustration-label">Revised</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Final Execution-Ready Document</h3><p class="step-description">We deliver the final document in MS Word and PDF. For documents requiring stamp paper, we advise on applicable stamp duty by state and the execution, attestation, and registration procedure.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Final delivered (Word + PDF)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stamp duty guidance included</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FINAL DOC</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="45" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">.docx</text><text x="75" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">.pdf</text><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Information Required to Begin Drafting</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Party details:</strong> Full legal name, registered address, CIN/PAN/LLPIN for each party; authorised signatory name and designation</li>
                    <li><strong>Purpose of agreement:</strong> What the contract governs - services, supply, employment, investment, IP licensing, property</li>
                    <li><strong>Commercial terms agreed:</strong> Payment amount and schedule, duration, deliverables, territory, exclusivity (if any)</li>
                    <li><strong>Governing law preference:</strong> Which state's courts or arbitration seat - commonly Maharashtra, Delhi, or Karnataka</li>
                    <li><strong>Dispute resolution preference:</strong> Institutional arbitration (DIAC, MCIA, ICC), ad-hoc arbitration, mediation, or court jurisdiction</li>
                    <li><strong>IP ownership:</strong> Who owns IP created during engagement; background IP vs foreground IP; licensing scope</li>
                    <li><strong>Confidentiality scope:</strong> What constitutes confidential information, exclusions, survival period after termination</li>
                    <li><strong>Termination terms:</strong> Notice period, grounds for termination for cause, post-termination obligations</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Risks of Poorly Drafted Contracts and How We Prevent Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Unenforceability</strong></td><td>Contract missing essentials under Section 10 ICA is void or voidable</td><td>Every clause verified against Section 10 requirements: free consent, competent parties, lawful consideration, lawful object.</td></tr>
                        <tr><td><strong>Vague Scope Triggers Disputes</strong></td><td>Undefined deliverables and missing milestones drive commercial disputes</td><td>Precise scope of work, payment milestones, and deliverable definitions. Courts apply contra proferentem against the drafter.</td></tr>
                        <tr><td><strong>Missing or Defective IP Clauses</strong></td><td>Without explicit IP assignment, IP belongs to the creator - not the company</td><td>Clear IP assignment and licensing terms for every technology, software, and creative engagement.</td></tr>
                        <tr><td><strong>Unenforceable Dispute Resolution</strong></td><td>Ambiguous arbitration clause can be challenged under Arbitration Act 1996</td><td>Properly structured clause specifying seat, institution, rules, and scope per BALCO v. Kaiser Aluminium (2012) SC.</td></tr>

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
            <h2 class="section-title">Legal Drafting Fee Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - NDA (Unilateral or Mutual)</td><td class="table-amount">Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>MOU / Letter of Intent</td><td class="table-amount">Starting at INR 3,999</td></tr>
                        <tr><td>Employment Contract / Offer Letter</td><td class="table-amount">Starting at INR 3,999</td></tr>
                        <tr><td>Service Agreement / Consultancy Agreement / Vendor Contract</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Leave and Licence / Lease Agreement</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Founders Agreement</td><td class="table-amount">Starting at INR 9,999</td></tr>
                        <tr><td>Shareholders Agreement (SHA) / SPA / SSA / JV Agreement</td><td class="table-amount">Starting at INR 14,999</td></tr>
                        <tr><td>Contract Vetting / Review (up to 20 pages)</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Legal Notice (Section 138 NI Act / Section 80 CPC)</td><td class="table-amount">Starting at INR 2,499</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Legal Drafting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20legal%20drafting%20services.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Turnaround Time for Legal Drafting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>NDA, MOU, Legal Notice</td><td>1 to 2 working days</td></tr>
                        <tr><td>Employment Contract, Service Agreement, Vendor Contract</td><td>2 to 3 working days</td></tr>
                        <tr><td>Leave and Licence / Lease Agreement</td><td>2 to 3 working days</td></tr>
                        <tr><td>Founders Agreement, Consultancy Agreement</td><td>3 to 5 working days</td></tr>
                        <tr><td>SHA, SPA, SSA</td><td>5 to 7 working days</td></tr>
                        <tr><td>JV Agreement, Complex Multi-Party Document</td><td>7 to 14 working days</td></tr>
                        <tr><td>Contract Vetting (up to 20 pages)</td><td>1 to 3 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Urgent Delivery:</strong> 24-48 hour express delivery available for most standard documents at an express premium. Confirm scope and availability with our CA team before placing an urgent request.</p>

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
            <h2 class="section-title">Why Professional Legal Drafting Pays for Itself</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Reduces Litigation Risk</h3><p>Precisely drafted dispute resolution, indemnity, and termination clauses reduce the probability of a dispute reaching arbitration or court.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Protects IP Ownership</h3><p>Without an explicit IP assignment clause, IP created under a contract belongs to the creator - not the company that paid for it. Critical in tech and creative engagements.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg></div><h3>Ensures Enforceability</h3><p>A contract failing Section 10 of the Indian Contract Act 1872 is unenforceable - regardless of how commercially sound the underlying deal.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3>Investor and Lender Ready</h3><p>Clean founders, shareholder, and employment agreements are a pre-condition for Series A due diligence and bank facility documentation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Saves Cost</h3><p>Professional fee for a well-drafted contract is almost always less than one session of legal fees in a dispute arising from a poorly drafted one.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Statutory Compliance</h3><p>Employment contracts under POSH Act, lease deeds, agreements with foreign parties - all require specific statutory clauses to be valid and enforceable.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">1,000+ Documents Drafted - 4.8/5 Client Rating</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 1,000+ Documents Drafted | 4.8/5 Rating | 2-Day Avg Delivery | Fixed Pricing | Pune, Mumbai, Delhi, Bangalore</p>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>What sets us apart:</strong> 100% custom drafting (no templates), CA and CS team with corporate transaction experience, state-specific stamp duty guidance with every document, contract vetting with written risk memo, fixed transparent pricing, delivery in 1-7 working days, one full revision round included.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Template vs Professional Legal Drafting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY Template</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Customisation</strong></td><td>Generic; not tailored to your transaction</td><td>100% custom to parties, terms, and industry</td></tr>
                        <tr><td><strong>Legal Accuracy</strong></td><td>Often outdated; may reference repealed provisions</td><td>Drafted to current 2026 Indian law with specific Act references</td></tr>
                        <tr><td><strong>Stamp Duty Guidance</strong></td><td>Not included</td><td>State-specific stamp duty advice included for every document</td></tr>
                        <tr><td><strong>Dispute Resolution</strong></td><td>Generic or absent</td><td>Properly structured arbitration clause per Arbitration Act 1996</td></tr>
                        <tr><td><strong>IP Protection</strong></td><td>Often incomplete or absent</td><td>Clear IP assignment and licensing terms for every engagement</td></tr>
                        <tr><td><strong>Enforceability Review</strong></td><td>High risk of missing Section 10 ICA essentials</td><td>Every draft reviewed against Section 10 ICA requirements</td></tr>

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
            <h2 class="section-title">Related Services at Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - statutory registers, board resolutions, and ROC filings</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - protect your brand before executing licensing or franchise agreements</li>
                    <li><a href="/fdi-compliance">FDI Compliance</a> - FEMA-compliant SHA, SSA, and SPA for companies with foreign investors</li>
                    <li><a href="/startup-registration">Startup India Registration</a> - DPIIT recognition required for Convertible Note issuance</li>
                    <li><a href="/gst-registration">GST Registration</a> - GST-compliant service agreements and supply contracts</li>
                    <li><a href="/pvt-llp-compliance">LLP Compliance</a> - LLP Agreement drafting under LLP Act 2008</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework Governing Contracts in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legislation</th><th>Relevance</th></tr></thead><tbody>
                        <tr><td><strong>Indian Contract Act, 1872</strong></td><td>Foundation of all contracts. S.2(h): contract definition. S.10: essentials. S.73: compensation for breach. S.74: penalty. S.124: indemnity. Source: <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a></td></tr>
                        <tr><td><strong>Specific Relief Act, 1963</strong></td><td>Governs specific performance and injunctions as remedies for breach - available where monetary damages are inadequate.</td></tr>
                        <tr><td><strong>Arbitration and Conciliation Act, 1996</strong></td><td>S.7: arbitration agreement must be in writing. S.11: appointment of arbitrators. S.34: grounds to set aside award.</td></tr>
                        <tr><td><strong>Mediation Act, 2023</strong></td><td>Statutory framework for pre-litigation mediation; mediation settlement agreements are final and binding.</td></tr>
                        <tr><td><strong>Indian Stamp Act, 1899</strong></td><td>Mandates stamp duty on lease deeds, loan agreements, indemnity bonds. Unstamped instruments inadmissible as evidence.</td></tr>
                        <tr><td><strong>Registration Act, 1908</strong></td><td>Compulsory registration for leases exceeding 1 year and property sale deeds.</td></tr>
                        <tr><td><strong>Companies Act, 2013</strong></td><td>Governs MOA, AOA, shareholder agreements, ESOP plans, and board/shareholder resolutions.</td></tr>
                        <tr><td><strong>IT Act, 2000 (S.10A)</strong></td><td>Electronic contracts legally enforceable; digital signatures equivalent to physical for most commercial contracts.</td></tr>
                </tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Legal Drafting Service</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about legal drafting, contract enforceability, stamp duty, electronic contracts, and breach remedies in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Legal Drafting',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is legal drafting and why is it important in India?</h3>
                        <div class="faq-expanded__a"><p>Legal drafting is the process of creating legally valid and enforceable written documents - contracts, agreements, deeds, and notices - that accurately record the intent of the parties and comply with Indian law. Under Section 2(h) of the Indian Contract Act 1872, a contract is an agreement enforceable by law. Section 10 defines the essentials: free consent, lawful consideration, competent parties, and a lawful object. A poorly drafted contract can be void, voidable, or unenforceable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a CA or CS draft legal contracts in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Chartered Accountants and Company Secretaries routinely draft corporate, commercial, and statutory documents - shareholder agreements, MOUs, employment contracts, board resolutions, LLP agreements, and ESOP plans - as part of their professional advisory mandates. For court litigation documents (plaints, written statements, petitions), a qualified advocate is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is an MOU legally binding in India?</h3>
                        <div class="faq-expanded__a"><p>An MOU can be legally binding or non-binding depending on its terms. If it contains all elements of a valid contract under Section 10 of the Indian Contract Act 1872, it is enforceable regardless of its title. If expressly stated to be non-binding or a 'statement of intent', it is generally not enforceable, though specific clauses (confidentiality, exclusivity, governing law) may independently bind the parties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does every agreement need to be stamped and registered in India?</h3>
                        <div class="faq-expanded__a"><p>Not every agreement requires stamping and registration. The Indian Stamp Act 1899 mandates stamp duty on specific instruments such as lease deeds, loan agreements, indemnity bonds, and powers of attorney. Registration under the Registration Act 1908 is compulsory for leases exceeding one year and property sale deeds. Critically, an unstamped instrument is inadmissible as evidence in court.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between drafting and vetting a contract?</h3>
                        <div class="faq-expanded__a"><p>Drafting means creating a new contract from scratch, tailored to the parties and transaction. Vetting means clause-by-clause analysis of a contract drafted by the other party - identifying unfavourable terms, missing protections, and legal risks, and recommending balanced changes. Contract vetting is particularly important before signing vendor MSAs, investor term sheets, and commercial agreements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can contracts be executed electronically in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 10A of the IT Act 2000, electronic contracts are legally enforceable in India. Digital signatures from a licensed Certifying Authority are equivalent to wet ink signatures for most commercial agreements. However, certain documents - negotiable instruments, wills, powers of attorney, and trust deeds - are excluded and must be executed on physical stamp paper.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if a contract is breached in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 73 of the Indian Contract Act 1872, the aggrieved party is entitled to compensation for loss naturally arising from the breach. Section 74 governs penalty clauses - courts award only reasonable compensation, not the full penalty if disproportionate. Additional remedies include specific performance and injunctions under the Specific Relief Act 1963.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does legal drafting take at Patron Accounting?</h3>
                        <div class="faq-expanded__a"><p>Standard documents (NDA, MOU, employment contract) are delivered within 1-3 working days from receipt of complete information. Shareholder agreements, JV agreements, and complex multi-party documents within 5-14 working days. Urgent delivery within 24-48 hours is available for most standard documents at an express premium.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What makes a contract valid in India?</strong> Per Section 10 Indian Contract Act 1872: free consent, competent parties, lawful consideration, lawful object, and not declared void.</p>
                <p><strong>Is an oral contract enforceable?</strong> Yes - oral contracts satisfying Section 10 ICA are valid, but proof of terms is difficult without a written record.</p>
                <p><strong>What is an arbitration clause?</strong> A clause referring disputes to arbitration instead of court. Must be in writing per Section 7 of the Arbitration Act 1996.</p>
                <p><strong>What is force majeure?</strong> A clause excusing performance for unforeseeable events beyond a party's control. Must specify notice period and mitigation duties.</p>
                <p><strong>What is contra proferentem?</strong> A rule of contract interpretation: ambiguous terms are construed against the party who drafted the contract.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">A Poorly Drafted Contract Costs More in Litigation Than the Deal Was Worth</h2>
            <div class="content-text">
                
                <p><strong>Under Section 73 of the Indian Contract Act, the aggrieved party is entitled to compensation for loss naturally arising from the breach. Prevention through proper drafting costs a fraction of remedy through litigation.</strong></p>
                <ul>
                    <li><strong>Unstamped documents:</strong> Inadmissible as evidence in court - a common, costly oversight (Indian Stamp Act 1899)</li>
                    <li><strong>Missing IP clause:</strong> IP created belongs to the contractor, not the company that paid for it</li>
                    <li><strong>Ambiguous arbitration clause:</strong> Can be challenged under Arbitration Act 1996 per BALCO v. Kaiser Aluminium (2012) SC</li>
                    <li><strong>Contra proferentem rule:</strong> Courts interpret ambiguous terms against the party who drafted the contract</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Contract Drafted - Starting at INR 2,499</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Every business relationship that matters - with an employee, a vendor, an investor, a co-founder, or a customer - deserves a properly drafted legal document. A contract that precisely defines obligations, allocates risk, protects IP, and specifies enforceable dispute resolution is a business necessity.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA and CS team provides legal drafting for the complete range of corporate and commercial documents - from simple NDAs in one day to complex shareholders agreements over a week. Custom drafts, transparent pricing, stamp duty guidance included.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 2,499 (Exl GST and Govt. Charges) | 1,000+ Documents Drafted | 4.8/5 Rating | Free 30-Min Scoping Call</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20legal%20drafting%20services.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Legal%20Drafting%20Service&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20a%20contract%20drafted.%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Legal Drafting Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides professional legal drafting and contract vetting services across major cities in India.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/legal-drafting/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/legal-drafting/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/legal-drafting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/legal-drafting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Business Services</div><div class="pa-block-sub">Complete corporate compliance and business setup support</div><div class="pa-cross-grid"><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/trademark-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">India</div></div></a><a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup India</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/pvt-llp-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> January 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Legal Drafting Service in India. Governed by Indian Contract Act 1872, Arbitration Act 1996, Mediation Act 2023. Content reviewed annually.</p>
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
