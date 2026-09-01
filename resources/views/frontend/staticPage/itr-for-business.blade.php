
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Business ITR: 44AD, ITR-3, ITR-5</title>
    <meta name="description" content="ITR for proprietorship, partnership firm, LLP, HUF, AOP/BOI. Section 44AD Rs 3Cr presumptive, tax audit Sec 44AB. Starts at Rs 1,999.">
    <link rel="canonical" href="/itr-for-business">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Business ITR 2026: 44AD, ITR-3, ITR-5 | Patron Accounting">
    <meta property="og:description" content="ITR for proprietorship, partnership firm, LLP, HUF, AOP/BOI. Section 44AD Rs 3Cr presumptive, tax audit Sec 44AB. Starts at Rs 1,999.">
    <meta property="og:url" content="/itr-for-business/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Business ITR 2026: 44AD, ITR-3, ITR-5 | Patron Accounting">
    <meta name="twitter:description" content="ITR for proprietorship, partnership firm, LLP, HUF, AOP/BOI. Section 44AD Rs 3Cr presumptive, tax audit Sec 44AB. Starts at Rs 1,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/itr-for-business/#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Business", "item": "https://www.patronaccounting.com/itr-for-business" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/itr-for-business/#faq",
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30",
          "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Section 44AD presumptive turnover threshold for AY 2026-27?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rs 3 crore for FY 2025-26 (AY 2026-27) IF cash receipts AND cash payments BOTH stay below 5 percent of total (i.e., 95 percent or more digital). Otherwise Rs 2 crore. Presumptive rate: 8 percent of turnover (cash receipts portion) and 6 percent (digital receipts portion). Eligible: Resident Individual, Resident HUF, Resident Partnership Firm (NOT LLP, NOT AOP/BOI, NOT companies). Excludes Section 44AE goods carriage, agency / brokerage, and professional services covered under Section 44ADA."
                }
            },
            {
                "@type": "Question",
                "name": "Which ITR form should a sole proprietor use?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "ITR-3 if you maintain regular books of accounts (Profit and Loss, Balance Sheet, Section 32 depreciation). ITR-4 SUGAM if you opt for Section 44AD presumptive (8 percent / 6 percent) or Section 44ADA (50 percent professional) or Section 44AE (per-vehicle goods carriage). NEVER ITR-1 or ITR-2 - those have no business income head and produce Section 139(9) defective return. Sole prop business income clubs with proprietor personal income at slab rates."
                }
            },
            {
                "@type": "Question",
                "name": "How is a partnership firm taxed in India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Partnership firm (non-LLP) under Indian Partnership Act 1932 is taxed at 30 percent flat plus 12 percent surcharge if income above Rs 1 crore plus 4 percent Health and Education Cess. Effective rate: 31.2 percent (no surcharge), 34.944 percent (with surcharge). ITR-5 form. Section 40(b) allows deductible partner remuneration on Finance Act 2025 amended slabs (Rs 3 lakh / 90 percent / 60 percent) and partner interest at 12 percent per annum. Partner-side income is taxed under PGBP head in partner individual return."
                }
            },
            {
                "@type": "Question",
                "name": "When is tax audit mandatory under Section 44AB?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Five trigger paths. (1) Business turnover above Rs 1 crore - or Rs 10 crore if 95 percent+ digital (cash receipts AND cash payments each below 5 percent). (2) Profession receipts above Rs 50 lakh (NO digital exception). (3) Section 44AD opted-out within 5-year lock-in with income above basic exemption - regardless of turnover. (4) Section 44AD declared less than 8/6 percent with income above basic exemption. (5) Section 44ADA declared less than 50 percent with income above basic exemption. Form 3CD due 30 September 2026."
                }
            },
            {
                "@type": "Question",
                "name": "Are LLPs eligible for presumptive scheme under Section 44AD?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "NO. LLPs are explicitly excluded from both Section 44AD AND Section 44ADA. Section 44AD eligibility is restricted to Resident Individual, Resident HUF, and Resident Partnership Firm - the term Partnership Firm here refers to firms under Indian Partnership Act 1932 only. LLPs incorporated under LLP Act 2008 are a separate category. LLP must maintain regular books, file ITR-5, undergo Section 44AB tax audit if turnover above Rs 1 crore (Rs 10 crore digital). Section 40(b) partner remuneration applies similarly to firms."
                }
            },
            {
                "@type": "Question",
                "name": "How is HUF business income taxed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Hindu Undivided Family (HUF) is treated as a separate person under the Income Tax Act with its own PAN. Karta files HUF return. Business income reported in ITR-3 (regular books) or ITR-4 (Section 44AD presumptive). Slab rates same as individuals - basic exemption Rs 2.5 lakh (old regime) / Rs 3 lakh (new regime). HUF NOT eligible for Section 44ADA professional presumptive (only Individual and Firm). Section 64 clubbing applies if assets transferred to HUF without adequate consideration. HUF can claim Section 80C, 80D, and other Chapter VIA deductions."
                }
            },
            {
                "@type": "Question",
                "name": "What is the Section 40(b) partner remuneration limit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Finance Act 2025 amended Section 40(b) effective AY 2025-26 onwards: on first Rs 6,00,000 of book profit, deductible remuneration is Rs 3,00,000 OR 90 percent of book profit (whichever HIGHER); on book profit above Rs 6,00,000, deductible remuneration is 60 percent of remaining book profit. Partner interest deductible up to 12 percent per annum on partner capital. Available only if firm complies with Section 184. Section 185 reclassifies non-compliant firm as AOP at MMR with NO Section 40(b) deduction."
                }
            },
            {
                "@type": "Question",
                "name": "How is AOP / BOI taxed?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 167B. If shares of members are DETERMINATE AND no member income exceeds basic exemption: AOP/BOI taxed at slab rates. If shares INDETERMINATE OR any member income exceeds basic exemption: AOP/BOI taxed at MMR (Maximum Marginal Rate) - 30 percent plus applicable surcharge plus 4 percent Health and Education Cess. ITR-5. Section 86 grants member-level credit for AOP tax paid (no double taxation). Section 167C makes members jointly and severally liable for unpaid AOP tax. Common AOP forms: residential welfare associations, joint ventures, family pools."
                }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/itr-for-business/#service",
          "name": "ITR Filing for Business in India",
          "description": "Income Tax Return filing for sole proprietorship, partnership firm (non-LLP), Limited Liability Partnership (LLP), Hindu Undivided Family (HUF), Association of Persons (AOP), and Body of Individuals (BOI). Covers ITR-3, ITR-4 SUGAM, and ITR-5 forms with Section 44AD/44ADA/44AE presumptive opt-in, Section 44AB tax audit, Section 40(b) partner remuneration computation under Finance Act 2025, and Section 167B AOP/BOI taxation for AY 2026-27.",
          "provider": {"@id": "https://www.patronaccounting.com/#organization"},
          "serviceType": "Tax Return Filing",
          "category": "Direct Tax Compliance",
          "areaServed": [
            {"@type": "Country", "name": "India"},
            {"@type": "City", "name": "Pune"},
            {"@type": "City", "name": "Mumbai"},
            {"@type": "City", "name": "Delhi"},
            {"@type": "City", "name": "Gurugram"}
          ],
          "audience": {"@type": "Audience", "audienceType": "Sole proprietors (traders, retail shopkeepers, manufacturers, service providers, e-commerce sellers, kirana stores, restaurants, salons, garment shops, distributors); Partnership firms (non-LLP) of 2-20 partners across trading, manufacturing, services, real estate brokerage, garment, FMCG distribution, jewellery, transport; Limited Liability Partnerships across professional services and trading; Hindu Undivided Families with business income; Associations of Persons for joint ventures and residential welfare associations; Bodies of Individuals; Goods carriage transport operators"},
          "about": [
            {"@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
            {"@type": "Thing", "name": "Partnership", "sameAs": "https://en.wikipedia.org/wiki/Partnership"},
            {"@type": "Thing", "name": "Limited liability partnership", "sameAs": "https://en.wikipedia.org/wiki/Limited_liability_partnership"}
          ],
          "termsOfService": "/terms-and-conditions/",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Business ITR Filing Plans",
            "itemListElement": [
              {"@type": "Offer", "name": "Sole Proprietorship ITR-4 Presumptive", "price": "1999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-business", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Sole Proprietorship ITR-3 Regular", "price": "4999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-business", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Partnership Firm ITR-5", "price": "7999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-business", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "LLP ITR-5", "price": "12999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-business", "availability": "https://schema.org/InStock"}
            ]
          }
        }
      ]
    }
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
    ['name' => 'ITR for Business', 'url' => '/itr-for-business'],
]])
</div>

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        ITR Filing for Sole Proprietorship, Partnership Firm, LLP, HUF, and AOP/BOI
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">8 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Books of accounts, Form 26AS, AIS, TIS, GST returns reconciliation, partnership deed, LLP agreement, HUF deed, bank statements, sale-purchase ledgers, fixed asset register, debtors and creditors aging.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 1,999 (Excl. GST and Govt. Charges). Sole proprietorship ITR-3/4, partnership firm ITR-5 with Section 40(b), LLP/AOP/BOI ITR-5 with full audit support.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Sole proprietors, partnership firms (non-LLP under Indian Partnership Act 1932), Limited Liability Partnerships (LLP Act 2008), HUFs with business income, Associations of Persons, Bodies of Individuals.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 14 working days for non-audit cases; 21 to 30 days for audit cases. Due 31 July 2026 (non-audit), 31 October 2026 (audit), 30 September 2026 (Tax Audit Report Section 44AB).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Business%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Business%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Business%20ITR%20filing%20for%20my%20proprietorship%2Fpartnership%2FLLP." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Business',
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
    'ctaText'    => 'Join 10,000+ proprietors, partnership firms, LLPs, HUFs, and AOPs who file their business ITR with Patron each year.',
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
                <a href="#what-section" class="toc-btn">What Is</a>
                <a href="#who-section" class="toc-btn">Who Needs</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#related-section" class="toc-btn">Related</a>
                <a href="#legal-section" class="toc-btn">Legal Framework</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Business ITR Filing in India - Six Entity Types Across ITR-3, ITR-4, and ITR-5</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Business Services at a Glance</strong></p>
                    <p><strong>TL;DR:</strong> Non-corporate business ITR uses ITR-3 (sole prop / HUF regular books), ITR-4 SUGAM (Section 44AD / 44ADA / 44AE presumptive), or ITR-5 (partnership firm / LLP / AOP / BOI). Section 44AD allows 8 percent / 6 percent presumptive on turnover up to Rs 3 crore (95 percent digital) for resident individual / HUF / partnership firm (NOT LLP). Tax audit under Section 44AB triggers at Rs 1 crore (Rs 10 crore digital). Partnership firms and LLPs taxed at 30 percent flat plus surcharge plus cess.
                    <div class="table-responsive-wrapper" style="margin-top:20px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Governing Provisions</td><td>Income Tax Act 1961 - Sections 28-44 (PGBP charging and computation); 44AA (books); 44AB (audit); 44AD/44ADA/44AE (presumptive); 40(b) (partner remuneration); 184/185 (firm constitution); 167B (AOP/BOI); 234A/B/C; 234F; 270A. Indian Partnership Act 1932; LLP Act 2008</td></tr>
                                <tr><td>Entity Types Covered</td><td>Sole Proprietorship, Partnership Firm (non-LLP), Limited Liability Partnership (LLP), Hindu Undivided Family (HUF) with business, Association of Persons (AOP), Body of Individuals (BOI)</td></tr>
                                <tr><td>ITR Form Mapping</td><td>ITR-3 (sole prop / HUF regular books); ITR-4 SUGAM (Sec 44AD / 44ADA / 44AE presumptive); ITR-5 (partnership firm / LLP / AOP / BOI)</td></tr>
                                <tr><td>Section 44AD Threshold</td><td>Rs 3 crore (95 percent+ digital receipts AND 95 percent+ digital payments); else Rs 2 crore. Eligible: Resident Individual / HUF / Partnership Firm (NOT LLP)</td></tr>
                                <tr><td>Section 44AD Rate</td><td>8 percent of turnover (cash receipts portion); 6 percent of turnover (digital receipts portion)</td></tr>
                                <tr><td>Section 44AB Tax Audit Business</td><td>Rs 1 crore turnover; Rs 10 crore if 95 percent+ digital (cash receipts AND cash payments each below 5 percent of total)</td></tr>
                                <tr><td>Partnership Firm / LLP Rate</td><td>30 percent flat + 12 percent surcharge if income above Rs 1 crore + 4 percent Health and Education Cess. Effective: 31.2 percent (no surcharge), 34.944 percent (with surcharge)</td></tr>
                                <tr><td>Section 40(b) Partner Remuneration (Finance Act 2025)</td><td>On first Rs 6,00,000 book profit: Rs 3,00,000 OR 90 percent of book profit (higher); above Rs 6,00,000: 60 percent of remaining book profit. Partner interest capped 12 percent per annum</td></tr>
                                <tr><td>Cost</td><td>Starting Rs 1,999 (Excl. GST and Govt. Charges)</td></tr>
                                <tr><td>Authority</td><td>Central Board of Direct Taxes (CBDT); Registrar of Firms (state-level for partnership); Registrar of Companies / MCA (LLP)</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
</p>
                </div>
                <p>Non-corporate business ITR filing has six entity-type lanes - sole proprietorship, partnership firm (non-LLP), LLP, HUF with business, AOP, and BOI - each with its own ITR form, tax rate structure, presumptive eligibility, and audit threshold. A trader with Rs 2.7 crore turnover gets a Section 44AD presumptive 6 percent option on ITR-4 only if 95 percent of receipts AND 95 percent of payments are digital - one cash receipt above the threshold and the option collapses to actual books and tax audit.</p>
                <p>A partnership firm with Rs 9 lakh book profit gets Section 40(b) deduction of approximately Rs 5.4 lakh under Finance Act 2025 amended slabs - the OLD slabs of Rs 1.5 lakh / 90 percent / 60 percent are no longer applicable for AY 2025-26 onwards. An LLP with the same numbers gets the same Section 40(b) treatment but is permanently barred from Section 44AD presumptive. An AOP with one member earning above basic exemption flips from slab to MMR (Maximum Marginal Rate) under Section 167B. Patron Accounting has filed business ITRs for over 8,500 non-corporate entities since 2019.</p>
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
                <h2 class="section-title">What Is Business ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>Business ITR filing means computing income from business or profession under Sections 28 to 44 of the Income Tax Act 1961 (PGBP head), reporting it in ITR-3 (sole prop / HUF regular books), ITR-4 SUGAM (Section 44AD / 44ADA / 44AE presumptive), or ITR-5 (partnership firm / LLP / AOP / BOI), and complying with Section 44AB tax audit if turnover crosses the prescribed thresholds.</strong></p>
                    <p>Section 28 charges Profits and Gains from Business or Profession (PGBP). Sections 30 to 36 list specific deductions - rent, repairs, insurance under Section 30; depreciation block-of-assets under Section 32; bad debts and employee contributions under Section 36. Section 37 catches general business expenditure wholly and exclusively for the business. Section 40 disallows certain payments - Section 40(a) for non-deduction of TDS; Section 40A(2) for excessive payments to related parties; Section 40A(3) for cash payments above Rs 10,000; Section 40(b) for partner remuneration beyond prescribed limits. Section 43B applies actual-payment basis for statutory dues.</p>
                    <p>The form selection follows the entity. Sole proprietors and HUFs with business income file ITR-3 if they maintain regular books, or ITR-4 SUGAM if opting for Section 44AD / 44ADA / 44AE presumptive. Partnership firms (non-LLP), LLPs, AOPs, and BOIs file ITR-5. Section 184 of the Income Tax Act requires partnership firms to have a written deed with profit-sharing ratios and all-partner signatures, with a certified copy filed for the first AY under that constitution - failure triggers Section 185 reclassification as AOP at MMR. AOPs and BOIs follow Section 167B - slab rates if member shares are determinate and no member crosses basic exemption, else MMR (30 percent + surcharge + 4 percent cess).</p>

                <div style="margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:16px;">Key Terms in Business ITR</h3>
                    <p><strong>Section 44AD - Presumptive Business:</strong> 8 percent of turnover (cash portion) and 6 percent of turnover (digital portion) declared as deemed income for resident individual / HUF / partnership firm (NOT LLP) with turnover up to Rs 3 crore (95 percent digital) or Rs 2 crore otherwise. ITR-4 SUGAM. 5-year lock-in under Section 44AD(4).</p>
                    <p><strong>Section 44AB - Tax Audit Threshold:</strong> Business audit triggered at turnover above Rs 1 crore (Rs 10 crore if 95 percent+ digital). Profession audit at receipts above Rs 50 lakh (no digital exception). Form 3CD with 44 clauses, signed by CA with UDIN, due 30 September 2026 for AY 2026-27.</p>
                    <p><strong>Section 40(b) - Partner Remuneration Limit:</strong> Finance Act 2025 amended slabs effective AY 2025-26: on first Rs 6,00,000 of book profit - Rs 3,00,000 OR 90 percent of book profit (whichever higher); on book profit above Rs 6,00,000 - 60 percent. Partner interest capped at 12 percent per annum.</p>
                    <p><strong>Section 167B - AOP / BOI Taxation:</strong> Slab rates if shares of members are determinate AND no member crosses basic exemption. MMR (Maximum Marginal Rate at 30 percent plus surcharge plus 4 percent cess) if shares indeterminate OR any member exceeds basic exemption. Member-level credit under Section 86.</p>
                    <p><strong>Form 3CD - Tax Audit Report:</strong> Statement of particulars under Section 44AB; 44 clauses covering depreciation, payments to specified persons, TDS compliance, related party transactions, GST reconciliation. Filed by CA on incometax.gov.in by 30 September 2026 for AY 2026-27.</p>
                    <p><strong>Schedule BP - Profits and Gains from Business or Profession:</strong> Schedule in ITR-3 / ITR-5 disclosing business income computation - profit per books, additions / disallowances under Sections 36-43, depreciation under Section 32, presumptive income under 44AD/44ADA/44AE.</p>
                </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Business:</strong></p>
                    

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Business</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Filed by</span>
                        <strong>CA Team</strong>
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
            <h2 class="section-title">Entity Type Mapping - ITR Form, Rate, and Presumptive Eligibility</h2>
            <div class="content-text">
                
                
                <p>Different non-corporate entity types map to different ITR forms, tax rates, and presumptive schemes. The selection cascades from entity type to form to rate structure to presumptive eligibility.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Entity Type</th>
                                <th>ITR Form</th>
                                <th>Tax Rate</th>
                                <th>Section 44AD Eligible?</th>
                                <th>Section 44ADA Eligible?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Sole Proprietorship (Resident Individual)</td><td>ITR-3 (regular) or ITR-4 (presumptive)</td><td>Slab (proprietor)</td><td>YES (if Resident Individual)</td><td>YES (if Resident Individual professional)</td></tr>
                            <tr><td>Partnership Firm (non-LLP, Resident)</td><td>ITR-5</td><td>30 percent + 12 percent surcharge above Rs 1Cr + 4 percent cess</td><td>YES (if Resident Partnership Firm)</td><td>YES (if Resident Partnership Firm)</td></tr>
                            <tr><td>Limited Liability Partnership (LLP)</td><td>ITR-5</td><td>30 percent + 12 percent surcharge above Rs 1Cr + 4 percent cess</td><td>NO - explicitly excluded</td><td>NO - explicitly excluded</td></tr>
                            <tr><td>Hindu Undivided Family (HUF) with business</td><td>ITR-3 (regular) or ITR-4 (presumptive)</td><td>Slab (Karta files for HUF)</td><td>YES (if Resident HUF)</td><td>NO - HUF not eligible</td></tr>
                            <tr><td>Association of Persons (AOP)</td><td>ITR-5</td><td>Slab if determinate shares; else MMR Sec 167B</td><td>NO - explicitly excluded</td><td>NO - explicitly excluded</td></tr>
                            <tr><td>Body of Individuals (BOI)</td><td>ITR-5</td><td>Slab if determinate shares; else MMR Sec 167B</td><td>NO - explicitly excluded</td><td>NO - explicitly excluded</td></tr>
                            <tr><td>Goods Carriage Transport (any of above)</td><td>ITR-4 (Section 44AE)</td><td>Per-vehicle presumptive</td><td>NA - 44AE applies</td><td>NA</td></tr>
                            <tr><td>Non-Resident Sole Proprietor</td><td>ITR-3</td><td>Slab (NR)</td><td>NO - resident only</td><td>NO - resident only</td></tr>
                            <tr><td>Non-Resident Partnership Firm</td><td>ITR-5</td><td>30 percent + surcharge + cess</td><td>NO - resident only</td><td>NO - resident only</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:20px;"><strong>Statutory Due Dates AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>31 July 2026</strong> - non-audit ITR-3 / ITR-4 / ITR-5 under Section 139(1)</li>
                    <li><strong>30 September 2026</strong> - Tax Audit Report on Form 3CD under Section 44AB</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR-3 / ITR-5 under Section 139(1)</li>
                    <li><strong>30 November 2026</strong> - ITR for entities required to furnish report under Section 92E (transfer pricing)</li>
                    <li><strong>31 December 2026</strong> - belated/revised return under Section 139(4)/(5) with Section 234F fee</li>
                    <li><strong>15 March 2026</strong> - 100 percent advance tax for Section 44AD/44ADA presumptive (single instalment)</li>
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
            <h2 class="section-title">ITR Services for Non-Corporate Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Sole Proprietorship ITR-3 / ITR-4</td><td>Regular books filed via ITR-3 with full Schedule BP, depreciation under Section 32, Section 40 disallowances, Section 43B statutory payment timing. Section 44AD presumptive opt-in via ITR-4 SUGAM with 8 percent / 6 percent declaration. Personal slab rates with regime selection. GST turnover reconciliation against ITR turnover.</td></tr>
                            <tr><td>Partnership Firm ITR-5 with Section 40(b) Optimization</td><td>Partnership firm under Indian Partnership Act 1932. ITR-5 with Schedule BP firm-level computation. Section 40(b) partner remuneration deduction at Finance Act 2025 amended limits (Rs 3 lakh / 90 percent / 60 percent). Partner interest at 12 percent. Section 184 compliance verification to avoid Section 185 AOP reclassification.</td></tr>
                            <tr><td>LLP ITR-5 with Tax Audit Coordination</td><td>LLP under Limited Liability Partnership Act 2008. ITR-5 with full books-based computation (LLPs barred from Section 44AD/44ADA). Tax audit Form 3CD by 30 September 2026 if turnover above Rs 1 crore (Rs 10 crore digital). Section 40(b) partner remuneration. MCA Form 11 and Form 8 separate filings (we coordinate).</td></tr>
                            <tr><td>HUF Business Income with Karta-Filed Return</td><td>HUF treated as separate person under Income Tax Act. Karta files HUF return ITR-3 (regular) or ITR-4 (Section 44AD presumptive). Slab rate same as individuals. HUF property let-out income separate from business. Section 64 clubbing of income transferred to HUF without adequate consideration. PAN of HUF and Karta both linked.</td></tr>
                            <tr><td>AOP / BOI Section 167B Taxation Filing</td><td>AOP / BOI for joint ventures, residential welfare associations with surplus income, family pools. ITR-5 with Section 167B classification - slab if shares determinate AND no member above basic exemption; MMR if indeterminate or any member crosses. Member-level credit for AOP tax paid available under Section 86.</td></tr>
                            <tr><td>Tax Audit and Section 44AB Defence</td><td>Tax audit Form 3CD coordination for clients above Rs 1 crore turnover (Rs 10 crore if digital), or Rs 50 lakh profession receipts, or Section 44AD opted-out cases. 44 Form 3CD clauses verified including Sections 40(a), 40A(2), 40A(3), 43B, GST reconciliation, depreciation, related party schedules. Filed by Patron CA on incometax.gov.in by 30 September 2026.</td></tr>


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
            <h2 class="section-title">How Patron Files Your Business ITR</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A seven-step engagement model that confirms entity type, runs Section 44AD/44ADA/44AE eligibility tests, prepares books, computes Section 40(b) partner remuneration, completes Form 3CD where applicable, files the correct ITR, and defends against Section 143(1) intimations.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Entity Type Identification and ITR Form Selection</h3>
                        <p class="step-description">We confirm your entity type - Sole Proprietorship, Partnership Firm (non-LLP), Limited Liability Partnership, HUF with business, AOP, or BOI. Map to correct ITR: ITR-3 (sole prop / HUF regular books); ITR-4 SUGAM (Sec 44AD / 44ADA / 44AE presumptive); ITR-5 (firm / LLP / AOP / BOI). Verify Section 184 firm constitution for partnership firms - written deed, profit-sharing ratios, all partner signatures, certified copy filed for first AY. AOP/BOI Section 167B classification.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Six entity-type lanes</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 184 deed audit</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/>
                                    <line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/>
                                    <circle cx="95" cy="60" r="10" fill="#10B981" opacity="0.2"/>
                                    <path d="M90 60l3 3 6-6" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Entity Confirmed</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Section 44AD / 44ADA / 44AE Presumptive Eligibility</h3>
                        <p class="step-description">Test turnover against thresholds: Section 44AD Rs 3 crore (95 percent digital, both receipts and payments) or Rs 2 crore; Section 44ADA Rs 75 lakh (95 percent digital) or Rs 50 lakh; Section 44AE per-vehicle scheme. Verify entity-type eligibility - Section 44AD for Resident Individual / HUF / Partnership Firm only; Section 44ADA for Resident Individual / Partnership Firm only (NOT LLP, NOT HUF). Run 5-year lock-in check under Section 44AD(4) - opt-out within 5 years bars re-entry for 5 years.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>95% digital test - both halves</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5-year lock-in tracker</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="45" r="22" fill="none" stroke="#14365F" stroke-width="2.5"/>
                                    <line x1="68" y1="63" x2="90" y2="85" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                                    <text x="50" y="50" text-anchor="middle" font-size="14" font-weight="700" fill="#E8712C">8% / 6%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Threshold Test</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Books of Accounts and GST-ITR Reconciliation</h3>
                        <p class="step-description">For non-presumptive: Profit and Loss account, Balance Sheet, Section 32 depreciation chart (block-wise WDV with additions and deletions), debtors and creditors aging, fixed asset register. Reconcile GST turnover (GSTR-9 / GSTR-3B) to ITR turnover - resolve timing differences and exempt supplies. AIS / TIS reconciliation with bank receipts and GSTIN data. Section 43B statutory dues actual payment basis (GST, PF, ESI, gratuity, leave encashment).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>P&amp;L, BS, depreciation chart</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9 to ITR reconciliation</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="68" y="20" width="42" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <line x1="18" y1="32" x2="44" y2="32" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="18" y1="42" x2="38" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="18" y1="52" x2="42" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
                                    <line x1="76" y1="32" x2="102" y2="32" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="76" y1="42" x2="96" y2="42" stroke="#E8712C" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
                                    <path d="M55 47l5 -5 5 5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                    <path d="M55 47l5 5 5 -5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Books Reconciled</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Section 40(b) Partner Remuneration and Interest (Firm and LLP)</h3>
                        <p class="step-description">Compute book profit per partnership deed (after disallowances). Apply Finance Act 2025 amended slabs: on first Rs 6,00,000 - Rs 3,00,000 OR 90 percent of book profit (higher); on book profit above Rs 6,00,000 - 60 percent of remaining. Partner interest deductible up to 12 percent per annum on capital. Allocate to partners in deed-specified ratio. Partners file individual return with PGBP head for remuneration / interest received.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Finance Act 2025 amended slabs</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Partner interest 12 percent cap</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="20" width="90" height="55" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="42" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">Section 40(b)</text>
                                    <text x="60" y="58" text-anchor="middle" font-size="14" font-weight="800" fill="#E8712C">Rs 3L / 90% / 60%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Remuneration Computed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Tax Audit Form 3CD Preparation</h3>
                        <p class="step-description">For business turnover above Rs 1 crore (Rs 10 crore if 95 percent+ digital) or profession receipts above Rs 50 lakh: 44 Form 3CD clauses including Section 40(a) TDS non-deduction disallowance, Section 40A(2) related party excessive payments, Section 40A(3) cash payment above Rs 10,000, Section 43B statutory dues, GST reconciliation, depreciation Section 32, related party Schedule. Section 44AD opt-out lock-in audit also covered. CA-signed Form 3CD filed on incometax.gov.in by 30 September 2026 for AY 2026-27.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>44 Form 3CD clauses verified</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UDIN by signing CA</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="13" font-weight="800" fill="#14365F">Form 3CD</text>
                                    <line x1="30" y1="42" x2="90" y2="42" stroke="#E8712C" stroke-width="2"/>
                                    <line x1="30" y1="54" x2="80" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="30" y1="64" x2="85" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                    <line x1="30" y1="74" x2="75" y2="74" stroke="#14365F" stroke-width="1.5" opacity="0.4"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Filed</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Tax Computation and Regime Selection</h3>
                        <p class="step-description">For sole prop / HUF: slab rates with old vs new regime comparison; Form 10-IEA for old regime opt-in. For partnership firm / LLP: 30 percent flat plus 12 percent surcharge if income above Rs 1 crore plus 4 percent cess. For AOP/BOI: Section 167B - slab if shares determinate; MMR if indeterminate or any member crosses basic exemption. Section 87A rebate (sole prop and HUF). Surcharge cap on capital gains under Section 111A/112A/112.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Old vs new regime compare</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 167B classification</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="60" cy="50" r="30" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="46" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">Tax</text>
                                    <text x="60" y="62" text-anchor="middle" font-size="11" font-weight="600" fill="#E8712C">31.2%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Tax Computed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">ITR Filing and Section 143(1) Defence</h3>
                        <p class="step-description">File on incometax.gov.in. E-verify within 30 days. Track refund / demand. Respond to Section 143(1) intimation, Section 142(1) scrutiny, Section 139(9) defective return within 15 days, or Section 148 reassessment notice. Maintain Tax Audit Report and books for Section 44AA mandatory retention period (8 years). Coordinate with MCA Form 11 (Annual Return) and Form 8 (Statement of Account) for LLPs (separate filings under LLP Act 2008).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Verify within 30 days</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>143(1) defence support</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#10B981" stroke-width="2"/>
                                    <path d="M40 50l12 12 28 -28" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">ITR Filed</span>
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
            <h2 class="section-title">Document Checklist for Business ITR</h2>
            <div class="content-text">
                
                
                <p>Six document categories cover entity verification, books of accounts, GST reconciliation, Section 40 disallowances, partnership-specific computations, and tax audit:</p>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">A. Entity and Identity</h3>
                <ul>
                    <li>PAN of entity (firm / LLP / AOP / BOI / HUF) and PAN of proprietor / partners / Karta / members (Aadhaar linked)</li>
                    <li>Partnership Deed (registered or unregistered) for firm; LLP Agreement for LLP; HUF deed and family tree for HUF; AOP/BOI constitution document</li>
                    <li>Registration certificate - Registrar of Firms (state-level for partnership firm); MCA LLPIN for LLP; GSTIN if registered</li>
                    <li>Bank account details for refund (entity bank account)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">B. Books of Accounts and Financial Statements</h3>
                <ul>
                    <li>Profit and Loss account FY 2025-26 (Tally / Zoho / QuickBooks export)</li>
                    <li>Balance Sheet as on 31 March 2026 with capital account, reserves, current assets, fixed assets, secured/unsecured loans, current liabilities</li>
                    <li>Trial balance</li>
                    <li>Cash book, bank book, sales register, purchase register, expenses ledger</li>
                    <li>Fixed asset register with Section 32 block-of-assets depreciation chart</li>
                    <li>Debtors and creditors aging</li>
                    <li>Closing stock valuation (cost or NRV whichever lower)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">C. GST and Indirect Tax Reconciliation</h3>
                <ul>
                    <li>GSTR-1 / GSTR-3B / GSTR-9 / GSTR-9C for FY 2025-26</li>
                    <li>GST turnover summary - taxable, exempt, zero-rated, non-GST</li>
                    <li>Reconciliation with ITR turnover - timing differences and exempt supplies</li>
                    <li>TDS and TCS certificates Form 16A / 27D</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">D. Section 40 Disallowances Documentation</h3>
                <ul>
                    <li>TDS payment challans for Section 40(a) compliance</li>
                    <li>Related party transactions list for Section 40A(2)</li>
                    <li>Cash payment register for Section 40A(3) compliance (no payment above Rs 10,000 in cash)</li>
                    <li>Section 43B statutory dues - GST, PF, ESI, gratuity, leave encashment payment proofs (paid before due date Section 139(1))</li>
                    <li>Personal vs business expense segregation (sole prop)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">E. Partnership Firm and LLP Specific</h3>
                <ul>
                    <li>Section 40(b) computation for partner remuneration (Finance Act 2025 amended slabs)</li>
                    <li>Partner interest computation at 12 percent per annum on capital</li>
                    <li>Partner-wise share of profit and loss as per deed</li>
                    <li>Partner capital account ledger</li>
                    <li>For LLP: Form 11 Annual Return, Form 8 Statement of Account due dates separately</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">F. Section 44AB Tax Audit (Where Applicable)</h3>
                <ul>
                    <li>Form 3CD particulars - 44 clauses</li>
                    <li>Form 3CB / 3CA audit report by CA</li>
                    <li>CA UDIN (Unique Document Identification Number) for audit signing</li>
                    <li>Section 44AB applicability working - Rs 1 crore vs Rs 10 crore digital trigger</li>
                    <li>Section 44AD opt-out lock-in audit working</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Business ITR Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Kirana retail sole proprietor in Pune, FY 2025-26 turnover Rs 2.7 crore, 30 percent cash receipts. Can I opt for Section 44AD presumptive at 6 percent?</td><td>NO at the Rs 3 crore enhanced threshold - cash receipts at 30 percent exceed the 5 percent test. Applicable threshold is Rs 2 crore - your turnover Rs 2.7 crore is above it. Outcome: Section 44AD not available. File ITR-3 with regular books, Section 32 depreciation, Section 40 disallowances, and Section 44AB tax audit. Mitigation: restructure receipts to 95 percent+ digital for FY 2026-27 to qualify for Rs 3 crore threshold and 6 percent rate next year.</td></tr>
                            <tr><td>Mumbai partnership firm, FY 2025-26 book profit Rs 22 lakh. CA used OLD Section 40(b) slabs Rs 1.5 lakh / 90 percent / 60 percent. Is that correct?</td><td>NO - those are pre-Finance Act 2025 slabs. Finance Act 2025 amended Section 40(b) effective AY 2025-26. New slabs: on first Rs 6,00,000 - Rs 3,00,000 OR 90 percent (higher); above Rs 6,00,000 - 60 percent. For Rs 22 lakh book profit: first Rs 6 lakh = Rs 5.4 lakh; remaining Rs 16 lakh at 60 percent = Rs 9.6 lakh. Total deductible Rs 15 lakh. Difference vs old slabs: approximately Rs 90,000 less deduction means Rs 28,000 more tax. We re-file using correct Finance Act 2025 slabs.</td></tr>
                            <tr><td>Gurugram LLP IT consulting, FY 2025-26 receipts Rs 65 lakh. Can I opt Section 44ADA at 50 percent like a sole proprietor consultant?</td><td>NO - LLPs are explicitly excluded from Section 44ADA presumptive. Section 44ADA is available only to Resident Individual or Resident Partnership Firm (non-LLP). Your LLP must file ITR-5 with regular books, full Profit and Loss, Balance Sheet, Section 32 depreciation, Section 40(b) partner remuneration. No tax audit since turnover Rs 65 lakh is below Rs 1 crore. We assess restructure options if presumptive savings exceed LLP liability protection value.</td></tr>
                            <tr><td>Delhi family residential welfare association, maintenance fees Rs 18 lakh annually. Surplus Rs 4 lakh. Two members each have personal income above Rs 50 lakh. How is this taxed?</td><td>AOP taxation under Section 167B. Members shares may be considered determinate (each flat owner with proportionate share). However, since at least one member income exceeds basic exemption, Section 167B applies MMR treatment - 30 percent + 12 percent surcharge if applicable + 4 percent cess. Effective approximately 31.2 to 34.944 percent on Rs 4 lakh = Rs 1.25 to 1.4 lakh tax. Mitigation pathways: principle of mutuality argument; book allowable expenses fully; separate sinking fund for capex; trust route for charitable purposes.</td></tr>


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
            <h2 class="section-title">Business ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Sole Proprietorship ITR-4 SUGAM (Section 44AD/44ADA presumptive)</td><td>Starting from Rs 1,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Sole Proprietorship ITR-3 (regular books)</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Partnership Firm ITR-5 (Section 40(b) computation)</td><td>Starting from Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>LLP ITR-5</td><td>Starting from Rs 12,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>HUF Business ITR-3 / ITR-4</td><td>Starting from Rs 6,499 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>AOP / BOI ITR-5 with Section 167B Classification</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 44AB Tax Audit add-on (Form 3CD)</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Goods Carriage Section 44AE</td><td>Starting from Rs 5,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 143(1) / NUDGE Campaign Response</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 139(8A) Updated Return (Prior Year)</td><td>Starting from Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
<p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. GST extra at 18%. Larger turnover or multi-state GST entities priced on assessment.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Business consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%2015-minute%20Section%2044AD%20eligibility%20and%20tax%20audit%20assessment%20for%20my%20business%20ITR." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engagement Timeline and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Sole Proprietorship ITR-4 (presumptive)</td><td>5-7 working days</td><td>31 July 2026</td></tr>
                            <tr><td>Sole Proprietorship ITR-3 (regular books)</td><td>7-10 working days</td><td>31 July 2026</td></tr>
                            <tr><td>Partnership Firm ITR-5 (regular)</td><td>10-14 working days</td><td>31 July 2026 (non-audit)</td></tr>
                            <tr><td>LLP ITR-5 (regular)</td><td>14-21 working days</td><td>31 July 2026 (non-audit)</td></tr>
                            <tr><td>HUF ITR-3 / ITR-4</td><td>5-10 working days</td><td>31 July 2026</td></tr>
                            <tr><td>AOP / BOI ITR-5 with Section 167B classification</td><td>10-14 working days</td><td>31 July 2026</td></tr>
                            <tr><td>Tax Audit Form 3CD + ITR-3/5 audit case</td><td>21-30 working days</td><td>30 September 2026 (Form 3CD); 31 October 2026 (ITR)</td></tr>
                            <tr><td>Section 44AD opt-out audit case</td><td>14-21 working days</td><td>31 October 2026</td></tr>
                            <tr><td>Section 92E transfer pricing case</td><td>30-45 working days</td><td>30 November 2026</td></tr>
                            <tr><td>Section 139(8A) Updated Return</td><td>7-14 working days</td><td>24 months from end of relevant AY</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> Tax audit Form 3CD due 30 September 2026 - one month before audit-case ITR. Section 44AD opt-out trap: if you opted Section 44AD in any of last 5 AYs and now declaring lower than 8 percent / 6 percent with income above basic exemption, audit is mandatory regardless of turnover. Section 211(b) advance tax for presumptive is 100 percent by 15 March - Section 234B/234C interest at 1 percent per month for shortfall. Indian Partnership Act 1932 firms must file Section 184 deed certified copy with first ITR under that constitution.

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
            <h2 class="section-title">Why Non-Corporate Businesses Hire a CA Instead of DIY Filing</h2>
        </div>
        
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                        <h3 class="feature-title">Entity Type and ITR Form Mapping</h3>
                        <p class="feature-text">Sole prop maps to ITR-3 / ITR-4; Partnership Firm to ITR-5; LLP to ITR-5; HUF to ITR-3 / ITR-4; AOP / BOI to ITR-5. DIY platforms commonly default sole proprietor to ITR-1 - producing Section 139(9) defective return. We confirm entity classification first, then form selection.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="feature-title">Section 44AD Cash Receipt 5 Percent Test</h3>
                        <p class="feature-text">Section 44AD enhanced Rs 3 crore threshold applies ONLY if cash receipts AND cash payments BOTH stay below 5 percent of total. DIY platforms apply Rs 3 crore blanket without testing both halves. One cash payment line above the threshold collapses the option. We test both halves through GSTR data.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h3 class="feature-title">Section 44AD(4) 5-Year Lock-In Trap</h3>
                        <p class="feature-text">Once Section 44AD opted, must continue 5 consecutive AYs. Opt-out within 5 years bars re-entry for next 5 years AND triggers mandatory tax audit if income above basic exemption regardless of turnover. DIY platforms do not maintain multi-year history; we track lock-in across last 5 AYs.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                        <h3 class="feature-title">LLP Presumptive Exclusion</h3>
                        <p class="feature-text">LLPs are explicitly excluded from Section 44AD AND Section 44ADA. DIY platforms allow LLP filers to select ITR-4 - producing Section 139(9) defective return. We block LLP from presumptive at intake.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
                        <h3 class="feature-title">Section 184 Firm Constitution Audit</h3>
                        <p class="feature-text">Partnership firms MUST have written deed with profit-sharing ratios, all partner signatures, and certified copy filed with first AY ITR under that deed. Section 185 reclassifies non-compliant firm as AOP at MMR. DIY platforms do not validate deed; we audit the deed at intake.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                        <h3 class="feature-title">Section 40(b) Finance Act 2025 New Slabs</h3>
                        <p class="feature-text">Effective AY 2025-26 onwards: Rs 3,00,000 / 90 percent / 60 percent on book profit slabs (replacing old Rs 1,50,000 / 90 percent / 60 percent). DIY platforms still use old slabs - producing Rs 50,000 to Rs 2,00,000 disallowed remuneration depending on book profit size.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                        <h3 class="feature-title">Section 167B AOP/BOI Classification</h3>
                        <p class="feature-text">AOP / BOI taxed at slab if shares determinate AND no member above basic exemption; ELSE MMR (30 percent + surcharge + cess). DIY platforms default to slab without member-income test. One member with Rs 50 lakh personal income flips the classification.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <h3 class="feature-title">Section 44AB Tax Audit Trigger Mapping</h3>
                        <p class="feature-text">Business audit Rs 1 crore / Rs 10 crore digital; Profession Rs 50 lakh (no digital exception); Section 44AD opt-out Rs 0 turnover but income above basic exemption; Section 44ADA declared less than 50 percent with income above basic exemption. DIY platforms apply only the basic Rs 1 crore - missing four other trigger paths.</p>
                    </article>
                </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust and Track Record</h2>
            <div class="content-text">
                
                
                <p style="margin-bottom:24px;"><strong>10,000+ Businesses Served</strong> | <strong>4.9 Google Rating</strong> | <strong>50,000+ Documents Filed</strong> | <strong>15+ Years Experience</strong></p>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:20px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"I run a wholesale garment trading proprietorship with turnover Rs 1.85 crore - 92 percent UPI receipts. My previous CA filed under Section 44AD using Rs 3 crore enhanced threshold and 6 percent presumptive rate. AIS reconciliation flagged a mismatch - my actual cash receipts portion was 8 percent, not below 5 percent. Patron audited the receipts data, confirmed I do NOT qualify for the Rs 3 crore enhanced threshold, reclassified me to Rs 2 crore threshold under which I am still eligible at the 8 percent presumptive rate. Saved me from a future Section 143(2) scrutiny notice."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Mr Ravindra K</strong> - Sole proprietor garment trading, Mumbai (FY 2025-26 turnover Rs 1.85 crore)</p>
                </div>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:24px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"We are a 4-partner family firm in Delhi distributing FMCG products with book profit Rs 28 lakh. Our previous CA used OLD Section 40(b) slabs and arrived at Rs 17.4 lakh deductible remuneration. Patron flagged Finance Act 2025 amendment - new slabs are Rs 3 lakh / 90 percent / 60 percent. Recomputed total Rs 18.6 lakh. Difference Rs 1.2 lakh additional deduction = Rs 37,000 less firm tax. Patron also identified that Section 184 deed compliance was intact - prevented Section 185 AOP reclassification at MMR which would have cost us approximately Rs 4 lakh extra tax."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Sharma and Sons</strong> - Partnership firm distribution business, Delhi (FY 2025-26 book profit Rs 28 lakh)</p>
                </div>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Four-Office City Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves non-corporate businesses across India. Coverage: Pune (manufacturing in Pimpri-Chinchwad belt, IT services in Hinjewadi); Mumbai (BFSI proprietors, garment traders in Crawford Market and Bhuleshwar, jewellery firms); Delhi NCR (distribution, retail trading, transport, real estate brokerage, AOP/BOI for residential welfare associations); Gurugram (IT services LLPs, e-commerce sellers, consulting partnerships).</p>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Outcome Proof:</strong> Rs 28 lakh saved across 3 non-corporate business engagements in FY 2024-25 closing - including a Mumbai garment proprietor Section 44AD threshold correction preventing a scrutiny notice, a Delhi family partnership Section 40(b) recomputation under Finance Act 2025 saving Rs 4 lakh annual tax, and a Pune IT consulting LLP audit-trigger restructuring saving Rs 6 lakh annual tax across both vehicles.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Sole Prop vs Partnership Firm vs LLP vs HUF vs AOP/BOI Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                            <tr>
                                <th>Aspect</th>
                                <th>Sole Prop</th>
                                <th>Partnership Firm</th>
                                <th>LLP</th>
                                <th>HUF</th>
                                <th>AOP / BOI</th>
                            </tr>
</thead>
                    <tbody>
                        
                            <tr><td>Governing Law</td><td>No specific Act</td><td>Indian Partnership Act 1932</td><td>LLP Act 2008</td><td>Hindu Law (customary)</td><td>Income Tax Act</td></tr>
                            <tr><td>Legal Entity</td><td>NOT separate</td><td>NOT separate (firm name proxy)</td><td>SEPARATE</td><td>NOT separate (HUF as person)</td><td>NOT separate</td></tr>
                            <tr><td>Liability of Members</td><td>Unlimited (personal)</td><td>Unlimited (joint and several)</td><td>Limited to capital</td><td>Joint family liability</td><td>Joint and several Sec 167C</td></tr>
                            <tr><td>ITR Form</td><td>ITR-3 / ITR-4</td><td>ITR-5</td><td>ITR-5</td><td>ITR-3 / ITR-4</td><td>ITR-5</td></tr>
                            <tr><td>Tax Rate</td><td>Slab (proprietor)</td><td>30% flat + surcharge + cess</td><td>30% flat + surcharge + cess</td><td>Slab (HUF)</td><td>Slab if determinate; else MMR Sec 167B</td></tr>
                            <tr><td>Section 44AD Eligible</td><td>YES (Resident Indl)</td><td>YES (Resident Firm)</td><td>NO (excluded)</td><td>YES (Resident HUF)</td><td>NO (excluded)</td></tr>
                            <tr><td>Section 44ADA Eligible</td><td>YES (Resident Indl prof)</td><td>YES (Resident Firm)</td><td>NO (excluded)</td><td>NO (excluded)</td><td>NO (excluded)</td></tr>
                            <tr><td>Section 44AE Eligible</td><td>YES</td><td>YES</td><td>YES</td><td>YES</td><td>YES</td></tr>
                            <tr><td>Section 40(b) Partner Remuneration</td><td>NA</td><td>YES (Finance Act 2025 slabs)</td><td>YES (similar to firm)</td><td>NA</td><td>NA</td></tr>
                            <tr><td>Section 184 Deed Required</td><td>NA</td><td>YES (else Sec 185 AOP)</td><td>YES (LLP Agreement)</td><td>YES (HUF deed advisable)</td><td>YES (constitution)</td></tr>
                            <tr><td>Maximum Members</td><td>NA (one)</td><td>20 (10 banking)</td><td>No limit</td><td>No limit (family)</td><td>No limit</td></tr>
                            <tr><td>Registration</td><td>Voluntary (proprietorship cert)</td><td>Voluntary (Reg of Firms)</td><td>Mandatory (MCA LLPIN)</td><td>Voluntary (HUF deed)</td><td>NA</td></tr>
                            <tr><td>Audit Trigger Sec 44AB</td><td>Rs 1Cr / Rs 10Cr digital</td><td>Rs 1Cr / Rs 10Cr digital</td><td>Rs 1Cr / Rs 10Cr digital</td><td>Rs 1Cr / Rs 10Cr digital</td><td>Rs 1Cr / Rs 10Cr digital</td></tr>
                            <tr><td>Annual ROC / MCA Filing</td><td>NA</td><td>NA (Reg of Firms only)</td><td>YES Form 11 + Form 8</td><td>NA</td><td>NA</td></tr>


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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                
                <p>Business filers frequently need adjacent compliance work. We bundle the following services with Business ITR filing engagements:</p>
                <ul>
                    <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - end-to-end ITR filing across all heads of income</li>
                    <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / OPC / Public Ltd via ITR-6 with concessional tax rates</li>
                    <li><a href="/itr-for-professionals">ITR for Professionals</a> - Section 44ADA specialist filing for resident professionals</li>
                    <li><a href="/itr-for-professionals">ITR Filing for Freelancers and Professionals</a> - presumptive taxation guidance</li>
                    <li><a href="/tax-planning-services">Tax Planning Services</a> - regime selection, Section 40(b) optimization, advance tax</li>
                    <li><a href="/income-tax-notice-for-defective-return">Income Tax Notice for Defective Return</a> - Section 139(9) cure within 15 days</li>
                    <li><a href="/income-tax-notice">Income Tax Notice Response</a> - Section 142(1), 143(2), 148 representation</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                
                <p><strong>Governing Acts and Rules:</strong></p>
                <ul>
                    <li>Income Tax Act 1961 - applies to AY 2026-27 (FY 2025-26 income) per Section 536(2)(c) of ITA 2025</li>
                    <li>Income Tax Act 2025 - applies Tax Year 2026-27 onwards (FY 2026-27 from 1 April 2026); Section 44AD threshold and Section 44AB framework retained</li>
                    <li>Income Tax Rules 1962 - Rule 6F books of accounts, Rule 14 presumptive computation, Rule 17 advance tax</li>
                    <li>Finance Act 2025 - Section 40(b) amended slabs effective AY 2025-26 (Rs 3 lakh / 90 percent / 60 percent)</li>
                    <li>Indian Partnership Act 1932 - partnership firm constitution and registration</li>
                    <li>Limited Liability Partnership Act 2008 - LLP constitution, liability limitation, partner contribution</li>
                    <li>Goods and Services Tax framework (CGST Act, SGST Act, IGST Act) - turnover reconciliation reference</li>
                    <li>CBDT Notification on Rs 10 crore digital tax audit threshold under Section 44AB</li>
                </ul>
                <p><strong>Key Penalty Provisions for Non-Corporate Business:</strong></p>
                <ul>
                    <li><strong>Section 234F</strong> late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A</strong> interest: 1 percent per month from 1 August 2026 on unpaid tax</li>
                    <li><strong>Section 234B / 234C</strong>: 1 percent per month for advance tax shortfall - particularly relevant for presumptive opt-in (single 15 March instalment)</li>
                    <li><strong>Section 270A</strong>: 50 percent under-reporting; 200 percent misreporting penalty</li>
                    <li><strong>Section 271B</strong>: Rs 1,50,000 OR 0.5 percent of turnover (whichever lower) for failure to get accounts audited under Section 44AB</li>
                    <li><strong>Section 271A</strong>: Rs 25,000 for failure to maintain books of accounts under Section 44AA</li>
                    <li><strong>Section 269ST / 271DA</strong>: penalty equal to amount received in cash above Rs 2 lakh in single transaction</li>
                    <li><strong>Section 139(9)</strong> defective return: 15-day cure window; failure to cure = return treated as never filed</li>
                    <li><strong>Section 139(8A)</strong> updated return: 25 percent (year 1) or 50 percent (year 2) additional tax + interest</li>
                </ul>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Provision</th>
                                <th>What It Says</th>
                                <th>Business ITR Impact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Section 28 ITA 1961</td><td>Charging section for PGBP</td><td>All business income reportable under PGBP head</td></tr>
                            <tr><td>Section 30-32 ITA 1961</td><td>Specific deductions</td><td>Rent, repairs, insurance Sec 30; depreciation block-of-assets Sec 32</td></tr>
                            <tr><td>Section 36 ITA 1961</td><td>Specific deductions list</td><td>Bad debts, employee contributions, scientific research</td></tr>
                            <tr><td>Section 37 ITA 1961</td><td>General business expenditure</td><td>Any expenditure wholly and exclusively for business deductible</td></tr>
                            <tr><td>Section 40 ITA 1961</td><td>Disallowances</td><td>Sec 40(a) TDS non-deduction; Sec 40A(2) related party; Sec 40A(3) cash above Rs 10,000; Sec 40(b) partner remuneration</td></tr>
                            <tr><td>Section 43B ITA 1961</td><td>Statutory dues actual payment</td><td>GST, PF, ESI, gratuity, leave encashment deductible only on actual payment before Sec 139(1) due date</td></tr>
                            <tr><td>Section 44AA ITA 1961</td><td>Books of accounts</td><td>Mandatory if business turnover above Rs 25 lakh OR business income above Rs 2.5 lakh</td></tr>
                            <tr><td>Section 44AB ITA 1961</td><td>Tax audit</td><td>Business Rs 1 crore / Rs 10 crore digital; profession Rs 50 lakh; Form 3CD; CA UDIN; due 30 September 2026</td></tr>
                            <tr><td>Section 44AD ITA 1961</td><td>Presumptive business</td><td>8% / 6% on turnover; Rs 3 crore digital / Rs 2 crore otherwise; Resident Individual/HUF/Firm only; 5-year lock-in</td></tr>
                            <tr><td>Section 44ADA ITA 1961</td><td>Presumptive professional</td><td>50% on receipts; Rs 75 lakh digital / Rs 50 lakh otherwise; Resident Individual/Firm only</td></tr>
                            <tr><td>Section 44AE ITA 1961</td><td>Goods carriage transport</td><td>Heavy goods Rs 1,000/ton/month/vehicle; other Rs 7,500/month/vehicle; max 10 vehicles</td></tr>
                            <tr><td>Section 40(b) ITA 1961</td><td>Partner remuneration</td><td>Finance Act 2025 amended: Rs 3 lakh / 90% / 60% on book profit slabs; partner interest 12% per annum</td></tr>
                            <tr><td>Section 184 ITA 1961</td><td>Firm constitution</td><td>Written deed with profit-sharing ratios, all partner signatures, certified copy filed with first AY ITR</td></tr>
                            <tr><td>Section 185 ITA 1961</td><td>Non-compliant firm = AOP</td><td>Section 184 conditions failed = AOP at MMR; no Sec 40(b) deduction</td></tr>
                            <tr><td>Section 167B ITA 1961</td><td>AOP / BOI taxation</td><td>Slab if shares determinate AND no member above basic exemption; else MMR (30% + surcharge + cess)</td></tr>
                            <tr><td>Section 86 ITA 1961</td><td>Member share AOP credit</td><td>Member-level credit for AOP tax paid; member does not retax</td></tr>
                            <tr><td>Section 211(b) ITA 1961</td><td>Advance tax presumptive</td><td>100% by 15 March (single instalment) for Sec 44AD/44ADA opt-in</td></tr>
                            <tr><td>Section 234F ITA 1961</td><td>Late filing fee</td><td>Rs 5,000 (Rs 1,000 if income up to Rs 5 lakh)</td></tr>
                            <tr><td>Section 270A ITA 1961</td><td>Penalty</td><td>50% under-reporting; 200% misreporting</td></tr>
                            <tr><td>Section 139(9) ITA 1961</td><td>Defective return</td><td>15-day cure window; common trigger - sole prop in ITR-1, LLP in ITR-4</td></tr>
                            <tr><td>Indian Partnership Act 1932</td><td>Partnership firm constitution</td><td>Maximum 20 partners (10 for banking); registration voluntary</td></tr>
                            <tr><td>LLP Act 2008</td><td>LLP constitution</td><td>Minimum 2 partners; mandatory MCA LLPIN; LLP NOT eligible for presumptive</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">External references: Income Tax Department - <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> (ITR-3 / ITR-4 / ITR-5 utilities, Section 44AD/44AB FAQ); India Code - <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">indiacode.nic.in</a> (Income Tax Act 1961, Indian Partnership Act 1932, LLP Act 2008).</p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Common questions on Section 44AD presumptive eligibility, ITR form selection, partnership taxation, LLP exclusions, and AOP/BOI Section 167B treatment for AY 2026-27 (FY 2025-26).</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Business',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Section 44AD presumptive turnover threshold for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Rs 3 crore for FY 2025-26 (AY 2026-27) IF cash receipts AND cash payments BOTH stay below 5 percent of total (i.e., 95 percent or more digital). Otherwise Rs 2 crore. Presumptive rate: 8 percent of turnover (cash receipts portion) and 6 percent (digital receipts portion). Eligible: Resident Individual, Resident HUF, Resident Partnership Firm (NOT LLP, NOT AOP/BOI, NOT companies). Excludes Section 44AE goods carriage, agency / brokerage, and professional services covered under Section 44ADA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which ITR form should a sole proprietor use?</h3>
                        <div class="faq-expanded__a"><p>ITR-3 if you maintain regular books of accounts (Profit and Loss, Balance Sheet, Section 32 depreciation). ITR-4 SUGAM if you opt for Section 44AD presumptive (8 percent / 6 percent) or Section 44ADA (50 percent professional) or Section 44AE (per-vehicle goods carriage). NEVER ITR-1 or ITR-2 - those have no business income head and produce Section 139(9) defective return. Sole prop business income clubs with proprietor personal income at slab rates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is a partnership firm taxed in India?</h3>
                        <div class="faq-expanded__a"><p>Partnership firm (non-LLP) under Indian Partnership Act 1932 is taxed at 30 percent flat plus 12 percent surcharge if income above Rs 1 crore plus 4 percent Health and Education Cess. Effective rate: 31.2 percent (no surcharge), 34.944 percent (with surcharge). ITR-5 form. Section 40(b) allows deductible partner remuneration on Finance Act 2025 amended slabs (Rs 3 lakh / 90 percent / 60 percent) and partner interest at 12 percent per annum. Partner-side income is taxed under PGBP head in partner individual return.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When is tax audit mandatory under Section 44AB?</h3>
                        <div class="faq-expanded__a"><p>Five trigger paths. (1) Business turnover above Rs 1 crore - or Rs 10 crore if 95 percent+ digital (cash receipts AND cash payments each below 5 percent). (2) Profession receipts above Rs 50 lakh (NO digital exception). (3) Section 44AD opted-out within 5-year lock-in with income above basic exemption - regardless of turnover. (4) Section 44AD declared less than 8/6 percent with income above basic exemption. (5) Section 44ADA declared less than 50 percent with income above basic exemption. Form 3CD due 30 September 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are LLPs eligible for presumptive scheme under Section 44AD?</h3>
                        <div class="faq-expanded__a"><p>NO. LLPs are explicitly excluded from both Section 44AD AND Section 44ADA. Section 44AD eligibility is restricted to Resident Individual, Resident HUF, and Resident Partnership Firm - the term Partnership Firm here refers to firms under Indian Partnership Act 1932 only. LLPs incorporated under LLP Act 2008 are a separate category. LLP must maintain regular books, file ITR-5, undergo Section 44AB tax audit if turnover above Rs 1 crore (Rs 10 crore digital). Section 40(b) partner remuneration applies similarly to firms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is HUF business income taxed?</h3>
                        <div class="faq-expanded__a"><p>Hindu Undivided Family (HUF) is treated as a separate person under the Income Tax Act with its own PAN. Karta files HUF return. Business income reported in ITR-3 (regular books) or ITR-4 (Section 44AD presumptive). Slab rates same as individuals - basic exemption Rs 2.5 lakh (old regime) / Rs 3 lakh (new regime). HUF NOT eligible for Section 44ADA professional presumptive (only Individual and Firm). Section 64 clubbing applies if assets transferred to HUF without adequate consideration. HUF can claim Section 80C, 80D, and other Chapter VIA deductions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the Section 40(b) partner remuneration limit?</h3>
                        <div class="faq-expanded__a"><p>Finance Act 2025 amended Section 40(b) effective AY 2025-26 onwards: on first Rs 6,00,000 of book profit, deductible remuneration is Rs 3,00,000 OR 90 percent of book profit (whichever HIGHER); on book profit above Rs 6,00,000, deductible remuneration is 60 percent of remaining book profit. Partner interest deductible up to 12 percent per annum on partner capital. Available only if firm complies with Section 184. Section 185 reclassifies non-compliant firm as AOP at MMR with NO Section 40(b) deduction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is AOP / BOI taxed?</h3>
                        <div class="faq-expanded__a"><p>Under Section 167B. If shares of members are DETERMINATE AND no member income exceeds basic exemption: AOP/BOI taxed at slab rates. If shares INDETERMINATE OR any member income exceeds basic exemption: AOP/BOI taxed at MMR (Maximum Marginal Rate) - 30 percent plus applicable surcharge plus 4 percent Health and Education Cess. ITR-5. Section 86 grants member-level credit for AOP tax paid (no double taxation). Section 167C makes members jointly and severally liable for unpaid AOP tax. Common AOP forms: residential welfare associations, joint ventures, family pools.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <div class="quick-answers" style="background:var(--gray-50);padding:24px;border-radius:12px;margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:18px;color:var(--blue);">Quick Answers</h3>
                    <p><strong>Q: Section 44AD threshold AY 2026-27?</strong><br>A: Rs 3 crore (95% digital both halves) / Rs 2 crore otherwise. 8% cash / 6% digital rate.</p>
                    <p><strong>Q: Sole prop ITR form?</strong><br>A: ITR-3 (regular books) or ITR-4 (Sec 44AD/44ADA/44AE presumptive). Never ITR-1.</p>
                    <p><strong>Q: Partnership firm tax rate?</strong><br>A: 30% flat + 12% surcharge above Rs 1Cr + 4% cess. ITR-5.</p>
                    <p><strong>Q: LLP presumptive eligible?</strong><br>A: NO - explicitly excluded from Section 44AD AND Section 44ADA.</p>
                    <p><strong>Q: Tax audit business threshold?</strong><br>A: Rs 1 crore turnover; Rs 10 crore if 95%+ digital (both cash receipts and payments below 5%).</p>
                    <p><strong>Q: Section 40(b) Finance Act 2025?</strong><br>A: Rs 3 lakh / 90% / 60% on book profit slabs. Partner interest 12% p.a.</p>
                    <p><strong>Q: AOP / BOI tax rate?</strong><br>A: Slab if shares determinate and no member above basic exemption. Else MMR Section 167B.</p>
                    <p><strong>Q: Section 44AD lock-in?</strong><br>A: 5 consecutive AYs once opted. Opt-out bars re-entry for 5 years + audit if income above basic.</p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Recap: Seven Firm Dates for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Non-corporate business filers face seven firm dates for AY 2026-27 (FY 2025-26): <strong>(1) 31 July 2026</strong> - non-audit ITR-3 / ITR-4 / ITR-5; <strong>(2) 30 September 2026</strong> - Tax Audit Report on Form 3CD under Section 44AB; <strong>(3) 31 October 2026</strong> - audit-case ITR-3 / ITR-5; <strong>(4) 30 November 2026</strong> - ITR for Section 92E transfer pricing cases; <strong>(5) 31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee; <strong>(6) 15 March 2026</strong> - 100 percent advance tax for Section 44AD/44ADA presumptive (single instalment under Section 211(b)); <strong>(7)</strong> Quarterly advance tax 15 June, 15 September, 15 December, 15 March - 15%, 45%, 75%, 100% cumulative for non-presumptive. LLPs additionally file MCA Form 11 (Annual Return) by 30 May 2026 and Form 8 (Statement of Account) by 30 October 2026 under LLP Act 2008. Section 44AD opt-out trap: any year of opt-out within 5 years triggers mandatory audit if income above basic exemption regardless of turnover - and bars re-entry for 5 years.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Business ITR Right - Talk to a CA Today</h2>
            <div class="content-text" style="text-align:left;">
                
                
                    <p>Non-corporate business ITR is the area where one entity-type misclassification creates Rs 2 to 10 lakh tax exposure - and where Section 44AD enhanced threshold lures DIY platforms into incorrect 6 percent declarations that AIS now flags as Section 143(2) scrutiny triggers. A sole proprietor with Rs 2.7 crore turnover and 30 percent cash receipts who applies the Rs 3 crore threshold instead of Rs 2 crore loses Section 44AD eligibility entirely - facing tax audit, Section 32 depreciation, and Section 40 disallowance complexity.</p>
                    <p>A partnership firm using OLD Section 40(b) slabs of Rs 1.5 lakh / 90 percent / 60 percent forfeits Rs 50,000 to Rs 2 lakh deductible partner remuneration under Finance Act 2025 amended slabs. An LLP attempting Section 44ADA presumptive at 50 percent gets Section 139(9) defective return - LLPs are explicitly excluded. A residential welfare association AOP with one member earning above Rs 2.5 lakh personal income flips from slab to MMR under Section 167B. Patron Accounting has filed business ITRs for over 8,500 non-corporate entities across India since 2019.</p>
                    <p style="font-weight:600;">Free 15-minute Section 44AD eligibility and tax audit assessment. Call <a href="tel:+919459456700" style="color:#FFD700;">+91 945 945 6700</a>, WhatsApp, or email info@patronaccounting.com - we tell you the optimal ITR form (ITR-3 vs ITR-4 vs ITR-5), Section 44AD vs regular books decision, and Section 40(b) partner remuneration ceiling BEFORE you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%2015-minute%20Section%2044AD%20eligibility%20and%20tax%20audit%20assessment%20for%20my%20business%20ITR." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20Business%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR%20for%20Business%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Business ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Non-corporate business ITR served from our four offices in Pune, Mumbai, Delhi, and Gurugram - covering proprietors, partnership firms, LLPs, HUFs, and AOP/BOI clients across India.</p>
 
            
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Business ITR Filing By City</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">Local CA support for proprietors, partnership firms, LLPs, HUFs, and AOPs</div>
                <div class="pa-city-grid">
                    <a href="/itr-for-business/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-business/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-business/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/itr-for-business/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Related ITR Services</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end direct tax compliance for non-corporate businesses</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-professionals" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Professionals</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-professionals" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Freelancers</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-planning-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">8 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Reviewed quarterly during ITR season (April to October) and after every Union Budget; immediately after Section 44AD threshold or Section 40(b) amendments. Citation Sources: Income Tax Act 1961 (Sections 28-44, 44AA, 44AB, 44AD, 44ADA, 44AE, 40(b), 86, 167B, 184, 185, 211, 234F, 270A, 139); Income Tax Act 2025 (Section 28-44 PGBP framework retained from 1 April 2026); Indian Partnership Act 1932; LLP Act 2008; Finance Act 2025 (Section 40(b) amendment effective AY 2025-26); CBDT Notification on Rs 10 crore digital tax audit threshold.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<!-- <div class="wa-sticky-bar" id="waBar">
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
</div> -->

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