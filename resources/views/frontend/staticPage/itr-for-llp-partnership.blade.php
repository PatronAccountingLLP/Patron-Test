
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>LLP and Firm ITR: ITR-5, Sec 40(b)</title>
    <meta name="description" content="ITR-5 for LLP and partnership firm. Section 40(b) Finance Act 2025, LLP audit Rs 40L/Rs 25L, Form 11 + 8 MCA. Starts at Rs 7,999.">
    <link rel="canonical" href="/itr-for-llp-partnership">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP and Firm ITR 2026: ITR-5, Sec 40(b) | Patron Accounting">
    <meta property="og:description" content="ITR-5 for LLP and partnership firm. Section 40(b) Finance Act 2025, LLP audit Rs 40L/Rs 25L, Form 11 + 8 MCA. Starts at Rs 7,999.">
    <meta property="og:url" content="/itr-for-llp-partnership/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP and Firm ITR 2026: ITR-5, Sec 40(b) | Patron Accounting">
    <meta name="twitter:description" content="ITR-5 for LLP and partnership firm. Section 40(b) Finance Act 2025, LLP audit Rs 40L/Rs 25L, Form 11 + 8 MCA. Starts at Rs 7,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/itr-for-llp-partnership/#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for LLP and Partnership Firm", "item": "https://www.patronaccounting.com/itr-for-llp-partnership" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/itr-for-llp-partnership/#faq",
          "datePublished": "2026-05-08T08:00:00+05:30",
          "dateModified": "2026-05-08T08:00:00+05:30",
          "mainEntity": [
            {
                "@type": "Question",
                "name": "When is LLP audit mandatory under LLP Act 2008?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Section 34(4) of LLP Act 2008 read with Rule 24(8) of LLP Rules 2009 makes LLP statutory audit mandatory if (a) annual turnover exceeds Rs 40 lakh OR (b) total partner contribution exceeds Rs 25 lakh. Either threshold trigger requires audit by a Chartered Accountant in practice. Audit is completed before Form 8 Statement of Account and Solvency is filed by 30 October 2026 for FY 2025-26. Below both thresholds: audit not mandatory but books must be maintained and Form 8 still filed."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between LLP audit and tax audit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "LLP statutory audit is under Section 34(4) of LLP Act 2008 - triggered at Rs 40 lakh turnover OR Rs 25 lakh contribution; auditor signs LLP financial statements before Form 8 filing with MCA. Section 44AB tax audit is under Income Tax Act 1961 - triggered at Rs 1 crore business turnover (Rs 10 crore if 95% digital) or Rs 50 lakh profession receipts; auditor signs Form 3CD 44 clauses before ITR-5 filing. Both can apply concurrently. Common confusion - they are SEPARATE compliance requirements."
                }
            },
            {
                "@type": "Question",
                "name": "What are the ITR-5 due dates for AY 2026-27?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For LLP and Partnership Firm filing ITR-5 for AY 2026-27 (FY 2025-26): 31 July 2026 - non-audit case under Section 139(1); 30 September 2026 - Tax Audit Report Form 3CD under Section 44AB; 31 October 2026 - audit-case ITR-5 under Section 139(1); 30 November 2026 - ITR-5 for Section 92E transfer pricing cases; 31 December 2026 - belated/revised return Section 139(4)/(5) with Section 234F fee. LLP additionally: Form 11 by 30 May 2026; Form 8 by 30 October 2026; DIR-3 KYC by 30 June 2026."
                }
            },
            {
                "@type": "Question",
                "name": "How is Section 40(b) partner remuneration calculated under Finance Act 2025?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Finance Act 2025 amended Section 40(b) effective AY 2025-26 onwards: on first Rs 6,00,000 of book profit, deductible remuneration is Rs 3,00,000 OR 90 percent of book profit (whichever HIGHER); on book profit above Rs 6,00,000, deductible remuneration is 60 percent of remaining book profit. Partner interest deductible up to 12 percent per annum on capital. Only available if Section 184 compliance met (deed, ratios, signatures, certified copy filed). Section 185 reclassifies non-compliant firm as AOP at MMR with NO Section 40(b) deduction."
                }
            },
            {
                "@type": "Question",
                "name": "Are LLPs eligible for Section 44AD presumptive scheme?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "NO. LLPs are EXPLICITLY EXCLUDED from both Section 44AD AND Section 44ADA. Section 44AD eligibility is restricted to Resident Individual, Resident HUF, and Resident Partnership Firm under Indian Partnership Act 1932 - LLPs incorporated under LLP Act 2008 are a separate category. LLP must maintain regular books, file ITR-5 with full P&L and Balance Sheet, undergo Section 44AB tax audit if turnover above Rs 1 crore (Rs 10 crore digital), and additionally LLP statutory audit under Section 34(4) at Rs 40 lakh turnover or Rs 25 lakh contribution."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for late filing of Form 11 and Form 8?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Penalty Rs 100 per day per form, with NO upper cap. For Form 11 due 30 May 2026 - one year delay equals Rs 36,500 penalty. For Form 8 due 30 October 2026 - one year delay equals Rs 36,500 penalty. Both forms together one year delay = Rs 73,000. Two consecutive years of Form 11/8 non-filing triggers ROC striking off proceedings under Section 75 of LLP Act 2008. Once struck off, NCLT revival proceedings required (Rs 50,000 to Rs 1,50,000). Proactive filing strongly recommended."
                }
            },
            {
                "@type": "Question",
                "name": "Is DIR-3 KYC mandatory for designated partners?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "YES. All designated partners with active DPIN must file DIR-3 KYC annually by 30 June. Web form for first-time; e-form for subsequent. Non-filing results in DPIN deactivation - blocking the designated partner from signing Form 11, Form 8, ITR-5, or any other LLP filing until reactivation. Reactivation requires Rs 5,000 fee plus DIR-3 KYC filing. If LLP has 2 designated partners and one DPIN is deactivated, LLP cannot file forms requiring two DSC signatures."
                }
            },
            {
                "@type": "Question",
                "name": "Can a partnership firm convert to LLP without tax implications?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, conversion of partnership firm to LLP is generally tax-neutral under Section 47(xiiib) of the Income Tax Act subject to specified conditions: (a) all partners of firm become partners of LLP in same profit-sharing ratio; (b) all assets and liabilities transferred without consideration other than partner capital; (c) shareholding remains identical for 5 years post-conversion; (d) total sales/turnover/gross receipts of firm in last 3 FYs preceding conversion not exceeding Rs 60 lakh. Failure to comply with these conditions triggers capital gains under Section 45."
                }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/itr-for-llp-partnership/#service",
          "name": "ITR-5 Filing for LLP and Partnership Firm in India",
          "description": "CA-led ITR-5 filing for Limited Liability Partnerships under LLP Act 2008 and partnership firms under Indian Partnership Act 1932. Covers Section 40(b) partner remuneration optimization with Finance Act 2025 amended slabs (Rs 3 lakh / 90 percent / 60 percent on book profit), LLP statutory audit at Rs 40 lakh turnover OR Rs 25 lakh contribution under Section 34(4) of LLP Act 2008, Section 44AB tax audit at Rs 1 crore (Rs 10 crore digital), Form 11 LLP Annual Return by 30 May 2026, Form 8 Statement of Account and Solvency by 30 October 2026, DIR-3 KYC for designated partners by 30 June 2026, and Section 184 firm constitution compliance with Section 185 AOP reclassification risk assessment.",
          "provider": {"@id": "https://www.patronaccounting.com/#organization"},
          "serviceType": "ITR-5 Filing for LLP and Partnership Firm with Section 40(b) Optimization and Dual-Audit Coordination",
          "category": "Direct Tax Compliance",
          "areaServed": [
            {"@type": "Country", "name": "India"},
            {"@type": "City", "name": "Pune"},
            {"@type": "City", "name": "Mumbai"},
            {"@type": "City", "name": "Delhi"},
            {"@type": "City", "name": "Gurugram"}
          ],
          "audience": {"@type": "Audience", "audienceType": "Limited Liability Partnerships across IT services, consulting, professional services, trading, real estate, manufacturing; Partnership firms (non-LLP) under Indian Partnership Act 1932 of 2-20 partners across trading, manufacturing, services, distribution, garment, jewellery, FMCG, transport; Family partnership firms; Designated partners and CA professionals coordinating compliance; Small LLPs (contribution up to Rs 25 lakh, turnover up to Rs 40 lakh) under LLP Amendment Act 2021; Foreign LLPs with India operations; LLPs in conversion from partnership firm or Pvt Ltd Company; Form 11 / Form 8 MCA filers; Section 40(b) partner remuneration optimization cases"},
          "about": [
            {"@type": "Thing", "name": "Limited liability partnership", "sameAs": "https://en.wikipedia.org/wiki/Limited_liability_partnership"},
            {"@type": "Thing", "name": "Partnership", "sameAs": "https://en.wikipedia.org/wiki/Partnership"},
            {"@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"}
          ],
          "termsOfService": "/terms-and-conditions/",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "ITR-5 for LLP and Partnership Firm Pricing",
            "itemListElement": [
              {"@type": "Offer", "name": "Partnership Firm ITR-5 Non-Audit", "price": "7999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-llp-partnership", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "LLP ITR-5 with MCA Form 11 + Form 8 Coordination", "price": "12999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-llp-partnership", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "LLP ITR-5 + Section 44AB Tax Audit + MCA Bundle", "price": "22998", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-llp-partnership", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "LLP Statutory Audit Standalone", "price": "7999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-llp-partnership", "availability": "https://schema.org/InStock"},
              {"@type": "Offer", "name": "Section 92E Transfer Pricing Case", "price": "24999", "priceCurrency": "INR", "url": "https://www.patronaccounting.com/itr-for-llp-partnership", "availability": "https://schema.org/InStock"}
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
    ['name' => 'ITR for LLP and Partnership Firm', 'url' => '/itr-for-llp-partnership'],
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
                        ITR-5 Filing for LLP and Partnership Firm in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Partnership deed (registered with Registrar of Firms) or LLP Agreement (filed with MCA via Form 3); LLPIN certificate; books of accounts (P&L, Balance Sheet, partner capital ledger); Form 26AS, AIS, TIS; GST returns; DSC of two designated partners.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 7,999 (Excl. GST and Govt. Charges) for partnership firm ITR-5 with Section 40(b) optimization. Rs 12,999 for LLP ITR-5 with MCA Form 11 / Form 8 coordination. Rs 22,998 bundle including Section 44AB tax audit.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Limited Liability Partnerships (LLP Act 2008 with active LLPIN); Partnership firms (Indian Partnership Act 1932, registered or unregistered); Foreign LLPs with India operations; Small LLPs under LLP Amendment Act 2021; LLPs in conversion process.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 10 to 21 working days for non-audit ITR-5; 21 to 30 working days for tax audit cases. Form 11 due 30 May 2026; DIR-3 KYC by 30 June 2026; Form 8 by 30 October 2026; ITR-5 by 31 July (non-audit) or 31 October 2026 (audit).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 1,200+ LLPs and 2,400+ Partnership Firms Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20LLP%20and%20Partnership%20Firm%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR-5%20filing%20services%20for%20my%20LLP%20%2F%20Partnership%20Firm%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR-5%20filing%20for%20my%20LLP%20%2F%20Partnership%20Firm%20%28Section%2040%28b%29%20optimization%20and%20MCA%20Form%2011%20%2F%208%29." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for LLP and Partnership Firm',
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
    'ctaText'    => 'Join 1,200+ LLPs and 2,400+ partnership firms who file their ITR-5 with Patron each year - LLP Act 2008 + Section 44AB + MCA Form 11 / Form 8 / DIR-3 KYC handled end-to-end across India.',
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
                <a href="#comparison-section" class="toc-btn">LLP vs Tax Audit</a>
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
            <h2 class="section-title">LLP and Partnership Firm ITR-5 - Section 40(b) Finance Act 2025, LLP Audit Rs 40L/Rs 25L, and Form 11/Form 8 MCA Coordination</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for LLP and Partnership Firm Services at a Glance</strong></p>
                    <p><strong>TL;DR:</strong> LLP and Partnership Firm both file ITR-5 at 30 percent flat rate plus surcharge plus cess (effective 31.2 percent / 34.944 percent). LLP statutory audit under Section 34(4) of LLP Act 2008 triggers at Rs 40 lakh turnover OR Rs 25 lakh contribution - DISTINCT from Section 44AB tax audit which kicks in at Rs 1 crore (Rs 10 crore digital). Section 40(b) partner remuneration follows Finance Act 2025 amended slabs of Rs 3 lakh / 90 percent / 60 percent on book profit. Partnership firm IS eligible for Section 44AD presumptive (Rs 3 crore digital); LLP is NOT.
                    <div class="table-responsive-wrapper" style="margin-top:20px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Governing Provisions</td><td>Income Tax Act 1961 Sections 28-44, 40(b), 44AB, 184, 185, 234A/B/C, 234F, 270A, 271B; Indian Partnership Act 1932; Limited Liability Partnership Act 2008 (Section 34 audit, Section 35 annual return); LLP Rules 2009 (Rule 24(8) audit); Finance Act 2025 (Section 40(b) amendment)</td></tr>
                                <tr><td>ITR Form</td><td>ITR-5 (both LLP and Partnership Firm)</td></tr>
                                <tr><td>Tax Rate</td><td>30 percent flat + 12 percent surcharge if income above Rs 1 crore + 4 percent Health and Education Cess. Effective: 31.2 percent (no surcharge), 34.944 percent (with surcharge)</td></tr>
                                <tr><td>LLP Statutory Audit (LLP Act)</td><td>Mandatory if turnover above Rs 40 lakh OR contribution above Rs 25 lakh. CA in practice. Required before Form 8 filing</td></tr>
                                <tr><td>Section 44AB Tax Audit (Income Tax Act)</td><td>Business turnover above Rs 1 crore (Rs 10 crore if 95 percent+ digital both halves). Form 3CD by 30 September 2026</td></tr>
                                <tr><td>Section 40(b) Partner Remuneration</td><td>Finance Act 2025 amended: on first Rs 6,00,000 of book profit - Rs 3,00,000 OR 90 percent (higher); above Rs 6,00,000 - 60 percent of remaining. Partner interest 12 percent per annum on capital</td></tr>
                                <tr><td>Section 184 / 185 (Partnership Firm and LLP)</td><td>Written deed, profit-sharing ratios, certified copy filed with first AY ITR, all partners sign return - else Section 185 AOP at MMR with NO Section 40(b) deduction</td></tr>
                                <tr><td>Section 44AD Eligibility</td><td>Partnership Firm: YES (Resident, turnover up to Rs 3 crore digital); LLP: NO (explicitly excluded)</td></tr>
                                <tr><td>MCA Filings (LLP only)</td><td>Form 11 Annual Return by 30 May 2026; Form 8 Statement of Account and Solvency by 30 October 2026; DIR-3 KYC by 30 June; Penalty Rs 100/day per form NO upper cap</td></tr>
                                <tr><td>Cost</td><td>Starting Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>
                                <tr><td>Authority</td><td>Central Board of Direct Taxes (CBDT); Ministry of Corporate Affairs (MCA) for LLP; Registrar of Firms (state-level) for partnership firm</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size:12px;color:var(--text-muted);margin-top:8px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
</p>
                </div>
                <p>LLP and Partnership Firm ITR is the area where DIY platforms misclassify entity types, miss the Section 40(b) Finance Act 2025 amendment, and confuse the LLP statutory audit Rs 40 lakh / Rs 25 lakh threshold with the Section 44AB tax audit Rs 1 crore / Rs 10 crore digital threshold. An LLP with turnover Rs 50 lakh and contribution Rs 30 lakh needs LLP statutory audit even though Section 44AB tax audit does not apply at that turnover. A partnership firm using OLD Section 40(b) slabs of Rs 1.5 lakh / 90 percent / 60 percent forfeits Rs 50,000 to Rs 2 lakh deductible partner remuneration under Finance Act 2025 amended slabs of Rs 3 lakh / 90 percent / 60 percent.</p>
                <p>A 5-partner LLP missing Form 11 by 30 May 2026 starts accruing Rs 500 per day penalty (Rs 100 per partner) with NO upper cap - one year of delay equals Rs 1.83 lakh. A partnership firm that fails Section 184 (deed silent on profit ratio, missing partner signature, certified copy not filed) gets reclassified as AOP under Section 185 with NO Section 40(b) deduction - flipping a Rs 18 lakh deductible remuneration into a Rs 5.6 lakh extra firm tax. Patron Accounting has filed ITR-5 for over 1,200 LLPs and 2,400 partnership firms across Pune, Mumbai, Delhi, and Gurugram since 2019.</p>
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
                <h2 class="section-title">What Is ITR-5 Filing for LLP and Partnership Firm</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>LLP and Partnership Firm ITR filing means computing firm-level income from business or profession under PGBP head in ITR-5, applying Section 40(b) deductible partner remuneration and 12 percent partner interest, paying tax at 30 percent flat plus surcharge plus cess, and complying with concurrent compliance frameworks - Section 44AB tax audit at Rs 1 crore (Rs 10 crore digital) for both, plus LLP-specific Section 34(4) statutory audit at Rs 40 lakh turnover OR Rs 25 lakh contribution, plus MCA Form 11 / Form 8 filings for LLPs.</strong></p>
                    <p>Both LLP (under LLP Act 2008) and Partnership Firm (under Indian Partnership Act 1932) file the same ITR-5 income tax return, but the compliance perimeters differ substantially. Partnership Firm has only Income Tax compliance plus Registrar of Firms (voluntary) registration. LLP additionally has full MCA compliance - LLPIN (registration), DPIN for designated partners, Form 11 Annual Return by 30 May, Form 8 Statement of Account and Solvency by 30 October, DIR-3 KYC for designated partners by 30 June, and a separate statutory audit at Rs 40 lakh turnover or Rs 25 lakh contribution thresholds.</p>
                    <p>ITR-5 itself runs through identical Schedule BP business income computation with Section 40(b) partner remuneration deduction (Finance Act 2025 amended slabs of Rs 3 lakh / 90 percent / 60 percent on book profit), partner interest at 12 percent per annum on capital, and Schedule IF firm-level disclosure feeding to partner-level Schedule BP under their PGBP head. Partnership Firm IS eligible for Section 44AD presumptive (Rs 3 crore digital threshold) and Section 44ADA (Rs 75 lakh professional). LLP is NOT eligible for either - explicitly excluded.</p>

                <div style="margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:16px;">Key Terms in LLP and Partnership Firm ITR</h3>
                    <p><strong>Limited Liability Partnership (LLP):</strong> Hybrid entity under LLP Act 2008 combining partnership flexibility with limited partner liability. Incorporated with MCA via LLPIN. Minimum 2 partners; at least 2 designated partners (one Indian resident). Separate legal entity with perpetual succession.</p>
                    <p><strong>Partnership Firm (non-LLP):</strong> Firm under Indian Partnership Act 1932. Maximum 20 partners (10 for banking firms). Registration with Registrar of Firms voluntary but provides legal protection. NOT a separate legal entity - firm name is convenient label for partner collective. Partner unlimited joint and several liability.</p>
                    <p><strong>Section 184 Firm Constitution:</strong> Partnership firm assessed AS A FIRM only if (a) written partnership deed exists; (b) deed specifies individual profit-sharing ratios; (c) certified copy filed with ITR for first year of assessment under that deed; (d) all partners sign the return. Same Section 184 logic applies to LLPs (LLP Agreement substitutes for deed).</p>
                    <p><strong>Section 185 Non-Compliant Firm Becomes AOP:</strong> If Section 184 conditions NOT met, firm/LLP treated as Association of Persons (AOP) and taxed at MMR (Maximum Marginal Rate). Section 40(b) partner remuneration / interest deduction NOT allowed. Common pitfall: deed silent on profit-sharing ratio, partner signatures missing, certified copy not filed for first AY.</p>
                    <p><strong>Section 40(b) Partner Remuneration and Interest:</strong> Finance Act 2025 amended (effective AY 2025-26): on first Rs 6,00,000 of book profit - Rs 3,00,000 OR 90 percent of book profit (whichever HIGHER); on book profit above Rs 6,00,000 - 60 percent of remaining book profit. Partner interest deductible up to 12 percent per annum on partner capital. Allowed only if firm/LLP genuine under Section 184.</p>
                    <p><strong>Section 34(4) of LLP Act 2008 LLP Statutory Audit:</strong> Mandatory LLP audit if (a) turnover exceeds Rs 40 lakh OR (b) total partner contribution exceeds Rs 25 lakh. Read with Rule 24(8) of LLP Rules 2009. Auditor: practising Chartered Accountant. Audit completed before Form 8 filing.</p>
                    <p><strong>Form 11 LLP Annual Return:</strong> Filed under Section 35 of LLP Act 2008. Due 30 May 2026 for FY 2025-26 (60 days from FY end). Discloses partner contributions, designated partner details, body corporate partners, changes during year. Penalty Rs 100/day per form, NO upper cap. Filed on MCA V3 portal with DSC of two designated partners.</p>
                    <p><strong>Form 8 LLP Statement of Account and Solvency:</strong> Filed under Section 34 of LLP Act 2008. Due 30 October 2026 (30 days from end of 6 months after FY end). Part A Statement of Solvency. Part B Statement of Income and Expenditure plus Statement of Assets and Liabilities. Audit signed if Section 34(4) applicable. Penalty Rs 100/day per form, NO upper cap.</p>
                    <p><strong>DIR-3 KYC for Designated Partners:</strong> Annual KYC by 30 June. Web form for first-time; e-form for subsequent. All designated partners with active DPIN must file. Non-filing = DPIN deactivation; reactivation requires Rs 5,000 fee plus filing.</p>
                    <p><strong>Small LLP (LLP Amendment Act 2021):</strong> Contribution up to Rs 25 lakh (extendable up to Rs 5 crore by notification) AND turnover up to Rs 40 lakh (extendable up to Rs 50 crore). Reduced compliance, lower penalties, designated partners self-certify all forms.</p>
                </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for LLP and Partnership Firm:</strong></p>
                    

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for LLP and Partnership Firm</text>
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
            <h2 class="section-title">LLP versus Partnership Firm - Compliance Matrix</h2>
            <div class="content-text">
                
                
                <p>Both LLP and Partnership Firm file ITR-5 at 30 percent flat plus surcharge plus cess - but the compliance perimeters differ substantially. Use this side-by-side matrix to identify which framework applies to your entity.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Aspect</th>
                                <th>LLP (LLP Act 2008)</th>
                                <th>Partnership Firm (IPA 1932)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Governing Law</td><td>Limited Liability Partnership Act 2008</td><td>Indian Partnership Act 1932</td></tr>
                            <tr><td>Legal Entity</td><td>SEPARATE legal entity</td><td>NOT separate (firm name proxy for partners)</td></tr>
                            <tr><td>Liability of Partners</td><td>LIMITED to capital contribution</td><td>UNLIMITED, joint and several</td></tr>
                            <tr><td>Maximum Partners</td><td>NO maximum</td><td>20 partners (10 for banking)</td></tr>
                            <tr><td>Designated Partner</td><td>Mandatory minimum 2 (one Indian resident)</td><td>Not applicable</td></tr>
                            <tr><td>Registration</td><td>Mandatory MCA registration with LLPIN</td><td>Registrar of Firms registration voluntary (state-level)</td></tr>
                            <tr><td>Constitution Document</td><td>LLP Agreement filed via Form 3 with MCA</td><td>Partnership Deed (registered or unregistered)</td></tr>
                            <tr><td>ITR Form</td><td>ITR-5</td><td>ITR-5</td></tr>
                            <tr><td>Tax Rate</td><td>30% flat + 12% surcharge above Rs 1 Cr + 4% cess</td><td>30% flat + 12% surcharge above Rs 1 Cr + 4% cess</td></tr>
                            <tr><td>Section 40(b) Partner Remuneration</td><td>YES - Finance Act 2025 amended slabs apply</td><td>YES - Finance Act 2025 amended slabs apply</td></tr>
                            <tr><td>Section 44AD Presumptive Eligibility</td><td>NO - explicitly excluded</td><td>YES (Resident, Rs 2 cr / Rs 3 cr digital)</td></tr>
                            <tr><td>Section 44ADA Presumptive (Profession)</td><td>NO - explicitly excluded</td><td>YES (Resident, Rs 50 lakh / Rs 75 lakh digital)</td></tr>
                            <tr><td>LLP Statutory Audit (Section 34(4))</td><td>Mandatory at Rs 40 lakh turnover OR Rs 25 lakh contribution</td><td>Not applicable</td></tr>
                            <tr><td>Section 44AB Tax Audit</td><td>Rs 1 crore (Rs 10 crore digital both halves)</td><td>Rs 1 crore (Rs 10 crore digital both halves)</td></tr>
                            <tr><td>Form 11 Annual Return MCA</td><td>YES - by 30 May 2026 (Rs 100/day penalty no cap)</td><td>NO</td></tr>
                            <tr><td>Form 8 Statement of Account MCA</td><td>YES - by 30 October 2026 (Rs 100/day penalty no cap)</td><td>NO</td></tr>
                            <tr><td>DIR-3 KYC for Partners</td><td>YES - by 30 June for designated partners</td><td>NO</td></tr>
                            <tr><td>CS Certification</td><td>Form 11 if turnover > Rs 5 cr or contribution > Rs 50 lakh</td><td>NO</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:20px;"><strong>Key Statutory Deadlines AY 2026-27 (FY 2025-26):</strong></p>
                <ul>
                    <li><strong>30 May 2026</strong> - Form 11 LLP Annual Return (LLP only; Section 35 LLP Act 2008)</li>
                    <li><strong>30 June 2026</strong> - DIR-3 KYC for designated partners (LLP only)</li>
                    <li><strong>31 July 2026</strong> - non-audit ITR-5 under Section 139(1)</li>
                    <li><strong>30 September 2026</strong> - Tax Audit Report Form 3CD under Section 44AB</li>
                    <li><strong>30 October 2026</strong> - Form 8 LLP Statement of Account and Solvency (LLP only)</li>
                    <li><strong>31 October 2026</strong> - audit-case ITR-5 under Section 139(1)</li>
                    <li><strong>30 November 2026</strong> - ITR-5 for Section 92E transfer pricing cases</li>
                    <li><strong>31 December 2026</strong> - belated/revised return Section 139(4)/(5) with Section 234F fee</li>
                    <li><strong>15 June, 15 September, 15 December, 15 March 2026</strong> - quarterly advance tax (15 percent, 45 percent, 75 percent, 100 percent cumulative)</li>
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
            <h2 class="section-title">Patron Accounting Services for LLP and Partnership Firm ITR-5</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Partnership Firm ITR-5 with Section 40(b) Optimization</td><td>Partnership firm under Indian Partnership Act 1932. ITR-5 with Schedule BP firm-level computation. Section 40(b) partner remuneration deduction at Finance Act 2025 amended slabs (Rs 3 lakh / 90 percent / 60 percent on book profit). Partner interest at 12 percent per annum. Section 184 firm constitution compliance verification - written deed, profit-sharing ratios, all partner signatures, certified copy filed for first AY. Schedule IF firm-level disclosure plus Schedule Pt-AC partner allocation table.</td></tr>
                            <tr><td>LLP ITR-5 with MCA Coordination</td><td>LLP under LLP Act 2008 with active LLPIN. ITR-5 with full books-based computation (LLP barred from Section 44AD/44ADA). Coordinated with MCA Form 11 Annual Return (30 May 2026) and Form 8 Statement of Account and Solvency (30 October 2026). DIR-3 KYC for designated partners (30 June). Section 40(b) partner remuneration similar to firm. CS certification of Form 11 if turnover above Rs 5 crore or contribution above Rs 50 lakh.</td></tr>
                            <tr><td>LLP Statutory Audit + Section 44AB Tax Audit Coordinated</td><td>LLP statutory audit under Section 34(4) of LLP Act 2008 (Rs 40 lakh turnover OR Rs 25 lakh contribution) coordinated with Section 44AB tax audit (Rs 1 crore / Rs 10 crore digital). Single audit engagement covering both with Form 3CA (audited under another law) plus Form 3CD 44 clauses. Bridges LLP Act audit conclusions to Income Tax Act audit perspective. Filed before Form 8 deadline (30 October) and Section 44AB deadline (30 September).</td></tr>
                            <tr><td>Section 184 Compliance Audit and Section 185 AOP Risk Assessment</td><td>Pre-filing compliance audit of partnership deed or LLP Agreement to ensure Section 184 conditions met - written deed, profit-sharing ratios per partner, all partner signatures, certified copy filed with first AY ITR. Without these, Section 185 reclassifies firm/LLP as AOP at MMR (30 percent + surcharge + cess) with NO Section 40(b) deduction. We audit deed at intake and recommend deed amendments where required.</td></tr>
                            <tr><td>Section 40(b) Partner Remuneration Optimization with Worked Examples</td><td>Detailed Section 40(b) computation under Finance Act 2025 amended slabs. Worked examples at Rs 6 lakh, Rs 12 lakh, Rs 30 lakh, Rs 60 lakh book profit levels. Partner interest cap at 12 percent per annum on capital. Allocation per deed-specified ratios. Coordination with partner-level individual ITR for PGBP head taxation of received remuneration / interest.</td></tr>
                            <tr><td>Form 11 / Form 8 / DIR-3 KYC Standalone Filings (LLP)</td><td>Standalone MCA filings outside ITR-5 engagement. Form 11 by 30 May with partner contribution and DPIN data. Form 8 by 30 October with audited financials (where applicable) and solvency declaration. DIR-3 KYC by 30 June for each designated partner. CS certification for Form 11 above thresholds. Penalty regularisation for delayed filings (Rs 100 per day per form, no upper cap).</td></tr>
                            <tr><td>Schedule IF and Schedule Pt-AC Partner Allocation</td><td>ITR-5 Schedule IF firm-level income disclosure with partner share allocation. Schedule Pt-AC partner allocation table (name, PAN, share percentage, remuneration drawn, interest received, share of profit). Reconciliation with partner-level individual ITR PGBP head to prevent Section 143(1) intimation triggered by mismatch.</td></tr>
                            <tr><td>Foreign LLP and Conversion Services</td><td>Foreign LLPs (FLLP) with India operations - Form 27 registration with MCA and annual filings. Partnership firm to LLP conversion under Section 47(xiiib) of Income Tax Act with tax-neutral conditions check. LLP to Pvt Ltd Company conversion. Section 92E transfer pricing report Form 3CEB for international and specified domestic related party transactions; ITR by 30 November.</td></tr>


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
            <h2 class="section-title">How Patron Files Your LLP / Partnership ITR-5</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A seven-step engagement that confirms entity classification, audits Section 184 firm constitution compliance, sets up the compliance calendar (Form 11, DIR-3 KYC, Form 3CD, Form 8, ITR-5), reconciles books to GST and Form 26AS, runs the dual-audit perimeter (LLP statutory + Section 44AB tax), computes Section 40(b) partner remuneration under Finance Act 2025, populates ITR-5 Schedule BP / IF / Pt-AC, files ITR-5 and coordinates MCA filings.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Entity Type Confirmation and Compliance Calendar Setup</h3>
                        <p class="step-description">Verify entity classification - LLP under LLP Act 2008 (with LLPIN, DPINs, LLP Agreement filed via Form 3) versus Partnership Firm under Indian Partnership Act 1932 (with Registrar of Firms registration certificate or unregistered with deed). Check Section 184 compliance - written deed, profit-sharing ratios, all partner signatures, certified copy filed with first AY ITR. Set up compliance calendar for Form 11 (30 May), DIR-3 KYC (30 June), Section 44AB Form 3CD (30 September), Form 8 (30 October), ITR-5 (31 July non-audit / 31 October audit).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity classification</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>9-deadline calendar</span>
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
                            <span class="illustration-label">Calendar Set</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Books of Accounts and Reconciliation</h3>
                        <p class="step-description">Profit and Loss Account, Balance Sheet, Section 32 depreciation chart (block-of-assets WDV with additions and deletions), debtors and creditors aging, fixed asset register, partner capital ledger. Reconcile GST turnover (GSTR-9 / GSTR-3B) to ITR turnover - resolve timing differences and exempt supplies. AIS / TIS reconciliation with bank receipts and GSTIN data. Section 43B statutory dues actual payment basis check (GST, PF, ESI, gratuity, leave encashment paid before Section 139(1) due date).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST to ITR reconciliation</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 43B verification</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="31" y="40" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">P&amp;L</text>
                                    <text x="31" y="56" text-anchor="middle" font-size="9" fill="#14365F">Bal Sheet</text>
                                    <path d="M55 50h12" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                                    <rect x="68" y="20" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="89" y="40" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">GSTR-9</text>
                                    <text x="89" y="56" text-anchor="middle" font-size="9" fill="#14365F">26AS / AIS</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Books Reconciled</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Audit Engagement (LLP Statutory + Section 44AB Tax Audit)</h3>
                        <p class="step-description">For LLPs - Section 34(4) statutory audit under LLP Act if turnover above Rs 40 lakh OR contribution above Rs 25 lakh. For both LLP and Firm - Section 44AB tax audit if business turnover above Rs 1 crore (Rs 10 crore if 95 percent digital both halves). Single audit engagement covers both with Form 3CA (when audited under another law i.e. LLP Act) plus Form 3CD 44 clauses. CA UDIN signing. LLP audit completed BEFORE Form 8 filed; Form 3CD filed BEFORE ITR-5 (audit case).</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual-audit perimeter</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CA + 3CD</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="15" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="31" y="35" text-anchor="middle" font-size="10" font-weight="800" fill="#14365F">LLP Act</text>
                                    <text x="31" y="55" text-anchor="middle" font-size="11" font-weight="700" fill="#E8712C">40L/25L</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">+</text>
                                    <rect x="68" y="15" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="89" y="35" text-anchor="middle" font-size="10" font-weight="800" fill="#14365F">Sec 44AB</text>
                                    <text x="89" y="55" text-anchor="middle" font-size="11" font-weight="700" fill="#E8712C">Rs 1 Cr</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Audit Done</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">Section 40(b) Partner Remuneration Computation</h3>
                        <p class="step-description">Compute book profit per deed/LLP Agreement (after Section 40 disallowances). Apply Finance Act 2025 amended slabs: on first Rs 6,00,000 - Rs 3,00,000 OR 90 percent of book profit (whichever HIGHER); on book profit above Rs 6,00,000 - 60 percent of remaining. Partner interest deductible up to 12 percent per annum on capital. Allocate to partners in deed-specified ratios. Document worked examples for the partnership / LLP file.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FA 2025 slabs</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Interest cap 12 percent p.a.</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="20" width="100" height="55" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="38" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">First Rs 6L: Rs 3L / 90%</text>
                                    <line x1="20" y1="48" x2="100" y2="48" stroke="#E8712C" stroke-width="1.5"/>
                                    <text x="60" y="62" text-anchor="middle" font-size="10" font-weight="700" fill="#14365F">Above Rs 6L: 60%</text>
                                </svg>
                            </div>
                            <span class="illustration-label">40(b) Computed</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">ITR-5 Schedule Population</h3>
                        <p class="step-description">Schedule BP business income computation. Schedule IF firm-level disclosure. Schedule Pt-AC partner allocation (name, PAN, share, remuneration drawn, interest received). Schedule HP if let-out property. Schedule CG if capital gains. Schedule OS for other sources. Schedule TDS reconciliation. Schedule TR if foreign tax credit. Coordinate with partner-level individual ITR for PGBP head taxation of received remuneration / interest - mismatch triggers Section 143(1) intimation.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>BP / IF / Pt-AC</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Partner-level reconciliation</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="32" text-anchor="middle" font-size="13" font-weight="800" fill="#14365F">ITR-5</text>
                                    <line x1="30" y1="42" x2="90" y2="42" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="55" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Schedule BP</text>
                                    <text x="60" y="67" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Schedule IF</text>
                                    <text x="60" y="79" text-anchor="middle" font-size="9" font-weight="600" fill="#14365F">Schedule Pt-AC</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Schedules Populated</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">Tax Computation and Advance Tax</h3>
                        <p class="step-description">30 percent flat plus 12 percent surcharge if income above Rs 1 crore plus 4 percent Health and Education Cess. Effective: 31.2 percent (no surcharge), 34.944 percent (with surcharge). Quarterly advance tax 15 June, 15 September, 15 December, 15 March (15 percent, 45 percent, 75 percent, 100 percent cumulative). Section 234B/234C interest at 1 percent per month for shortfall.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30% flat + cess</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-instalment advance</span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="20" y="15" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/>
                                    <text x="60" y="34" text-anchor="middle" font-size="11" font-weight="700" fill="#14365F">Tax Rate</text>
                                    <text x="60" y="50" text-anchor="middle" font-size="11" font-weight="800" fill="#E8712C">30% + 4%</text>
                                    <text x="60" y="64" text-anchor="middle" font-size="9" font-weight="700" fill="#14365F">Effective 31.2%</text>
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
                        <h3 class="step-title">ITR-5 E-Filing and MCA Coordination</h3>
                        <p class="step-description">File ITR-5 on incometax.gov.in. E-verify within 30 days using DSC of designated partner / partner. For LLP additionally: file Form 11 by 30 May 2026 on MCA V3 portal with two designated partner DSCs and CS certification (if applicable); file Form 8 by 30 October 2026 with audited financials (where applicable); file DIR-3 KYC by 30 June for each designated partner. Track refund / demand. Respond to Section 143(1) intimation, Section 142(1) scrutiny, Section 139(9) defective return within 15 days.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Verify within 30 days</span>
                            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MCA Form 11 / 8 filed</span>
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
            <h2 class="section-title">Document Checklist for LLP / Partnership Firm ITR-5</h2>
            <div class="content-text">
                
                
                <p>LLP and Partnership Firm ITR-5 requires documentation across seven categories: entity and identity, books of accounts, Section 40(b) partner remuneration, GST and indirect tax, Section 40 disallowances, audit (where applicable), and MCA filings (LLP only).</p>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">A. Entity and Identity</h3>
                <ul>
                    <li>PAN of LLP / Firm and PAN of all partners (Aadhaar linked)</li>
                    <li>For LLP: LLPIN certificate, LLP Agreement (filed via Form 3), Form 4 for any change in partners, DPINs of designated partners</li>
                    <li>For Partnership Firm: Partnership Deed (registered or unregistered), Registrar of Firms certificate (if registered), Form 1 / Form 5 for changes</li>
                    <li>GSTIN registration certificate (where applicable)</li>
                    <li>DSC of designated partners (Class 3, valid)</li>
                    <li>Bank account details of LLP / Firm</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">B. Books of Accounts and Financial Statements</h3>
                <ul>
                    <li>Profit and Loss Account FY 2025-26</li>
                    <li>Balance Sheet as on 31 March 2026 with capital account, reserves, current assets, fixed assets, secured / unsecured loans, current liabilities</li>
                    <li>Trial balance; cash book, bank book, sales register, purchase register, expenses ledger</li>
                    <li>Section 32 depreciation chart - block-of-assets WDV with additions and deletions</li>
                    <li>Partner capital ledger and current account ledger</li>
                    <li>Closing stock valuation (cost or NRV whichever lower under ICDS-II)</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">C. Section 40(b) Partner Remuneration / Interest</h3>
                <ul>
                    <li>Section 40(b) computation with Finance Act 2025 amended slabs (Rs 3 lakh / 90 percent / 60 percent on book profit)</li>
                    <li>Partner-wise remuneration drawn during FY</li>
                    <li>Partner-wise interest paid at maximum 12 percent per annum on capital</li>
                    <li>Partnership Deed / LLP Agreement profit-sharing ratio (must specify per-partner fractions, not just "equally")</li>
                    <li>Book profit computation worksheet</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">D. GST and Indirect Tax Reconciliation</h3>
                <ul>
                    <li>GSTR-1 / GSTR-3B / GSTR-9 / GSTR-9C for FY 2025-26</li>
                    <li>GST turnover summary - taxable, exempt, zero-rated, non-GST</li>
                    <li>Reconciliation with ITR turnover - timing differences and exempt supplies</li>
                    <li>TDS and TCS certificates Form 16A / 27D</li>
                    <li>Form 26AS, AIS, TIS download from incometax.gov.in</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">E. Section 40 Disallowances Documentation</h3>
                <ul>
                    <li>TDS payment challans for Section 40(a) compliance</li>
                    <li>Related party transactions list for Section 40A(2)</li>
                    <li>Cash payment register for Section 40A(3) (no payment above Rs 10,000 in cash per person per day)</li>
                    <li>Section 43B statutory dues - GST, PF, ESI, gratuity, leave encashment payment proofs (paid before due date Section 139(1))</li>
                    <li>Section 269ST / 271DA - cash receipt above Rs 2 lakh per transaction check</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">F. Audit Documentation (Where Applicable)</h3>
                <ul>
                    <li>For LLP statutory audit (Section 34(4) of LLP Act): audited financials by CA in practice if turnover above Rs 40 lakh OR contribution above Rs 25 lakh</li>
                    <li>For Section 44AB tax audit: Form 3CA (if also audited under LLP Act) or Form 3CB; Form 3CD 44 clauses</li>
                    <li>CA UDIN for audit signing</li>
                    <li>Engagement letter and management representation letter</li>
                </ul>
                <h3 style="font-size:1.3rem;margin-top:24px;margin-bottom:14px;">G. MCA Filings Documentation (LLP only)</h3>
                <ul>
                    <li>Form 11 LLP Annual Return (filed by 30 May 2026)</li>
                    <li>Form 8 LLP Statement of Account and Solvency (filed by 30 October 2026)</li>
                    <li>DIR-3 KYC for each designated partner (filed by 30 June 2026)</li>
                    <li>CS certification on Form 11 (if turnover above Rs 5 crore or contribution above Rs 50 lakh)</li>
                    <li>MSME disclosure statement attached to Form 8</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common LLP / Partnership Firm Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                            <tr><td>LLP confusing Rs 40 lakh / Rs 25 lakh statutory audit with Rs 1 crore Section 44AB tax audit</td><td>Critical confusion between LLP Act audit and Section 44AB tax audit. An LLP with FY 2025-26 turnover Rs 55 lakh and partner contribution Rs 32 lakh is BELOW the Section 44AB tax audit threshold (Rs 1 crore) but ABOVE the Section 34(4) of LLP Act 2008 statutory audit threshold (Rs 40 lakh OR Rs 25 lakh - crosses BOTH). LLP statutory audit is mandatory by a CA in practice; without it, Form 8 cannot be filed validly with MCA. Patron's solution: dual-perimeter audit assessment at intake, single audit engagement covering both with Form 3CA + Form 3CD, filed before respective deadlines (30 September for Form 3CD, 30 October for Form 8).</td></tr>
                            <tr><td>Old Section 40(b) slabs costing Rs 50,000 to Rs 2 lakh in lost partner remuneration deduction</td><td>Most DIY platforms still use OLD Section 40(b) slabs of Rs 1.5 lakh / 90 percent / 60 percent. Finance Act 2025 amended effective AY 2025-26: on first Rs 6,00,000 of book profit - Rs 3,00,000 OR 90 percent (whichever HIGHER); above Rs 6,00,000 - 60 percent. Worked example: 4-partner family firm with FY 2025-26 book profit Rs 35 lakh - old slabs give Rs 21.9 lakh deductible; new slabs give Rs 22.8 lakh - difference Rs 0.9 lakh additional deduction = Rs 28,000 less firm tax. Patron's solution: every Section 40(b) computation uses Finance Act 2025 amended slabs with worked-example documentation.</td></tr>
                            <tr><td>Section 184 firm constitution gaps triggering Section 185 AOP reclassification</td><td>Partnership firm or LLP MUST have written deed/agreement with profit-sharing ratios (per-partner fractions, not just "equally"), all partner signatures, and certified copy filed with first AY ITR. Section 185 reclassifies non-compliant firm/LLP as AOP at MMR (30 percent + surcharge + 4 percent cess) with NO Section 40(b) deduction - flipping a Rs 18 lakh deductible remuneration into Rs 5.6 lakh extra firm tax. Patron's solution: deed audit at intake, deed amendment drafting where required, fresh certified copy filing with current AY ITR-5 for any deed amendment.</td></tr>
                            <tr><td>LLP missing Form 11 / Form 8 / DIR-3 KYC with no upper cap penalty</td><td>LLPs face FOUR mandatory annual MCA filings - Form 11 by 30 May, Form 8 by 30 October, DIR-3 KYC by 30 June, plus ITR-5. Form 11/8 penalty Rs 100 per day per form with NO upper cap - one year of delay equals Rs 36,500 per form. Two consecutive years of Form 11/8 non-filing triggers ROC striking off proceedings under Section 75 of LLP Act 2008, requiring NCLT revival (Rs 50,000 to Rs 1,50,000). DIR-3 KYC non-filing deactivates DPIN blocking all LLP filings. Patron's solution: integrated 4-filing compliance calendar with proactive reminders and DSC management.</td></tr>
                            <tr><td>LLP filing ITR-4 instead of ITR-5 - Section 139(9) defective return</td><td>LLPs are EXPLICITLY EXCLUDED from Section 44AD AND Section 44ADA presumptive schemes. DIY platforms allow LLP to select ITR-4 - producing Section 139(9) defective return notice with 15-day cure window. Failure to cure converts ITR to invalid return triggering Section 139(1) non-filing penalties. Patron's solution: entity classification gate at intake blocks LLP from presumptive ITR-4; LLP always filed via ITR-5 with full books-based Schedule BP computation.</td></tr>


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
            <h2 class="section-title">LLP / Partnership Firm ITR-5 Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                            <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Partnership Firm ITR-5 (non-audit)</td><td>Starting from Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>LLP ITR-5 with MCA Form 11 + Form 8 Coordination</td><td>Starting from Rs 12,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>LLP ITR-5 + Section 44AB Tax Audit + MCA Bundle</td><td>Starting from Rs 22,998 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 44AB Tax Audit Add-on (Form 3CD)</td><td>Starting from Rs 9,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>LLP Statutory Audit Standalone (Section 34(4))</td><td>Starting from Rs 7,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Form 11 Standalone (LLP Annual Return)</td><td>Starting from Rs 1,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Form 8 Standalone (Statement of Account and Solvency)</td><td>Starting from Rs 2,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>DIR-3 KYC Per Designated Partner</td><td>Starting from Rs 999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>Section 92E Transfer Pricing Case (Form 3CEB)</td><td>Starting from Rs 24,999 (Excl. GST and Govt. Charges)</td></tr>
                            <tr><td>LLP Penalty Regularisation (Delayed Form 11/8)</td><td>Starting from Rs 4,999 (Excl. GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
<p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. GST extra at 18%. Multi-entity packages and group LLP compliance discounts available. Larger turnover or multi-state GST entities priced on assessment.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for LLP and Partnership Firm consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20Section%2040%28b%29%20Finance%20Act%202025%20and%20LLP%20audit%20perimeter%20assessment%20for%20my%20LLP%20%2F%20Partnership%20Firm." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        
                            <tr><td>Partnership Firm ITR-5 (non-audit)</td><td>7-10 working days</td><td>31 July 2026</td></tr>
                            <tr><td>LLP ITR-5 (non-audit)</td><td>10-14 working days</td><td>31 July 2026</td></tr>
                            <tr><td>LLP ITR-5 + MCA Form 11 + Form 8 Bundle</td><td>14-21 working days</td><td>30 May (Form 11) / 30 Oct (Form 8) / 31 Jul (ITR-5)</td></tr>
                            <tr><td>LLP Statutory Audit + Section 44AB Tax Audit + ITR-5</td><td>21-30 working days</td><td>30 Sep 2026 (Form 3CD); 30 Oct (Form 8); 31 Oct (ITR-5)</td></tr>
                            <tr><td>LLP Statutory Audit Standalone</td><td>14-21 working days</td><td>30 October 2026 (before Form 8)</td></tr>
                            <tr><td>Section 92E Transfer Pricing Case</td><td>30-45 working days</td><td>30 November 2026</td></tr>
                            <tr><td>Form 11 / Form 8 Standalone</td><td>2-3 working days</td><td>30 May / 30 October</td></tr>
                            <tr><td>DIR-3 KYC Per Designated Partner</td><td>1 working day</td><td>30 June 2026</td></tr>
                            <tr><td>LLP Penalty Regularisation (Delayed Forms)</td><td>7-14 working days</td><td>No deadline - earlier filing minimises penalty</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Urgency note:</strong> Form 11 due 30 May 2026 is the FIRST critical LLP deadline in the financial year - missing it triggers Rs 100 per day per form penalty with NO upper cap. DIR-3 KYC due 30 June - missing it deactivates DPIN, blocking Form 11 / Form 8 / ITR-5 filings until reactivation (Rs 5,000 + filing). Section 184 firm constitution: certified copy of deed must be filed with FIRST AY ITR under that constitution; deed amendments require fresh certified copy filing with the AY when amendment is effective. Section 271B audit penalty applies if Section 44AB audit not done - 0.5 percent of turnover or Rs 1.5 lakh whichever lower. Two consecutive years of Form 11/8 non-filing triggers ROC striking off under Section 75 of LLP Act 2008, requiring NCLT revival (Rs 50,000 to Rs 1,50,000).

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
            <h2 class="section-title">Benefits of CA-Led LLP / Partnership Firm ITR-5 Filing</h2>
        </div>
        
                <div class="features-grid">
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
                        <h3 class="feature-title">Dual-Audit Perimeter Mapping</h3>
                        <p class="feature-text">LLP Act audit (Rs 40L turnover OR Rs 25L contribution under Section 34(4)) tracked separately from Section 44AB tax audit (Rs 1 cr / Rs 10 cr digital). Both perimeters live concurrently. Single CA engagement covers both with Form 3CA + Form 3CD.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="feature-title">Section 40(b) Finance Act 2025 New Slabs</h3>
                        <p class="feature-text">Rs 3 lakh / 90 percent / 60 percent on book profit slabs applied (replacing OLD Rs 1.5 lakh / 90 percent / 60 percent). Worked examples at Rs 6L, Rs 12L, Rs 30L, Rs 60L book profit levels. Partner interest at 12 percent per annum on capital correctly capped.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
                        <h3 class="feature-title">Section 184 Firm Constitution Audit</h3>
                        <p class="feature-text">Deed audit at intake - written deed, profit-sharing ratios per partner (not just "equally"), all partner signatures, certified copy filed with first AY ITR. Deed amendment drafting where required. Section 185 AOP reclassification at MMR averted.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></div>
                        <h3 class="feature-title">LLP 4-Filing Compliance Calendar</h3>
                        <p class="feature-text">Form 11 by 30 May, DIR-3 KYC by 30 June, Form 8 by 30 October, ITR-5 by 31 July (non-audit) / 31 October (audit). Rs 100/day no-cap penalty for Form 11/8 averted. DPIN deactivation prevented. ROC striking off risk eliminated.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
                        <h3 class="feature-title">LLP Presumptive Block</h3>
                        <p class="feature-text">LLP correctly excluded from Section 44AD and Section 44ADA - filed via ITR-5 with full books-based Schedule BP computation. Section 139(9) defective return notice (LLP filing ITR-4) prevented. Partnership firms correctly enabled for Section 44AD where eligible.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                        <h3 class="feature-title">CS Certification Coordination</h3>
                        <p class="feature-text">Form 11 CS certification triggered if LLP turnover above Rs 5 crore or contribution above Rs 50 lakh. Practising Company Secretary engaged at the right threshold. Below threshold: designated partners self-certify via DSC.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        <h3 class="feature-title">Schedule IF + Pt-AC Reconciliation</h3>
                        <p class="feature-text">ITR-5 Schedule IF firm-level disclosure reconciled to Schedule Pt-AC partner allocation table. Partner-level individual ITR PGBP head reflects remuneration / interest received from firm/LLP. Section 143(1) intimation triggered by mismatch averted.</p>
                    </article>
                    <article class="feature-card">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
                        <h3 class="feature-title">Section 43B Statutory Dues Timing</h3>
                        <p class="feature-text">GST, PF, ESI, gratuity, leave encashment deductible only on actual payment before Section 139(1) due date. Accrual-based booking flagged. Section 270A under-reporting penalty (50 percent / 200 percent of tax sought to be evaded) averted.</p>
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
                
                
                <p style="margin-bottom:24px;"><strong>10,000+ Businesses Served</strong> | <strong>4.9 Google Rating</strong> | <strong>50,000+ Documents Filed</strong> | <strong>15+ Years Experience</strong> | <strong>1,200+ LLPs and 2,400+ Partnership Firms</strong></p>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:20px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"We are a 3-partner IT services LLP in Bengaluru. Our previous CA filed FY 2024-25 ITR-5 without arranging LLP statutory audit - claimed our turnover was below the Section 44AB Rs 1 crore tax audit threshold. Patron flagged that LLP Act 2008 has a SEPARATE Section 34(4) statutory audit at Rs 40 lakh turnover OR Rs 25 lakh contribution - we cross BOTH. Patron arranged the audit retroactively, refiled Form 8 with audited financials, and prevented potential MCA scrutiny."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>TechVantage IT Services LLP</strong> - Bengaluru (FY 2025-26 turnover Rs 55 lakh, contribution Rs 32 lakh)</p>
                </div>
                <div class="testimonial-quote" style="background:var(--blue-lighter);border-left:4px solid var(--orange);padding:20px 24px;border-radius:8px;margin-bottom:24px;">
                    <p style="font-style:italic;font-size:15px;line-height:1.7;margin-bottom:12px;">"Our family CA used OLD Section 40(b) slabs for partner remuneration. Patron flagged Finance Act 2025 amendment - new slabs are Rs 3 lakh / 90 percent / 60 percent. Recomputed: total Rs 22.8 lakh deductible remuneration. They also audited our partnership deed - flagged the profit-sharing ratio was specified as just 'equal' without per-partner fractions which could fail Section 184 in scrutiny. Drafted deed amendment with explicit ratios. Prevented potential Section 185 AOP reclassification at MMR which would have cost approximately Rs 5 lakh extra tax."</p>
                    <p style="font-size:13px;color:var(--text-muted);margin:0;"><strong>Singh Trading Co (Partnership Firm)</strong> - Delhi (4-partner family firm, FY 2025-26 book profit Rs 35 lakh)</p>
                </div>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Outcome Proof:</strong> Rs 22 lakh saved across three LLP / Partnership Firm engagements in FY 2024-25: (a) Bengaluru LLP statutory audit retroactive arrangement saving Rs 4 lakh future MCA penalty plus Form 8 validity; (b) Delhi family partnership Section 40(b) Finance Act 2025 recomputation saving Rs 28,000 annually plus Section 184 deed amendment preventing potential Rs 5 lakh AOP reclassification; (c) Mumbai 12-partner law firm Section 184 first-AY certified copy filing saving Rs 12 lakh prospective AOP exposure across 3 years.</p>
                <p style="font-size:14px;color:var(--text-secondary);"><strong>Four-Office City Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves LLPs and Partnership Firms across India - manufacturing partnerships in Pimpri-Chinchwad, IT services LLPs in Hinjewadi, BFSI partnership firms, jewellery firms in Zaveri Bazar, garment partnerships in Crawford Market and Bhuleshwar, real estate LLPs, distribution partnerships, retail trading LLPs, consulting LLPs, and sub-Rs 75 lakh professional partnership firms.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Statutory Audit versus Section 44AB Tax Audit Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                            <tr>
                                <th>Aspect</th>
                                <th>LLP Statutory Audit (Section 34(4) LLP Act 2008)</th>
                                <th>Section 44AB Tax Audit (Income Tax Act 1961)</th>
                            </tr>
</thead>
                    <tbody>
                        
                            <tr><td>Governing Law</td><td>LLP Act 2008 read with LLP Rules 2009 Rule 24(8)</td><td>Income Tax Act 1961 Section 44AB</td></tr>
                            <tr><td>Trigger Threshold</td><td>Turnover above Rs 40 lakh OR contribution above Rs 25 lakh</td><td>Business turnover above Rs 1 crore (Rs 10 crore if 95%+ digital both halves); profession receipts above Rs 50 lakh</td></tr>
                            <tr><td>Applicable To</td><td>LLPs ONLY (under LLP Act 2008)</td><td>All non-corporate businesses (sole prop, firm, LLP, HUF, AOP/BOI) AND companies</td></tr>
                            <tr><td>Auditor</td><td>Practising Chartered Accountant</td><td>Practising Chartered Accountant</td></tr>
                            <tr><td>Audit Report Form</td><td>LLP audit report attached to Form 8</td><td>Form 3CA (when also audited under another law) or Form 3CB; with Form 3CD 44 clauses</td></tr>
                            <tr><td>Filed With</td><td>Ministry of Corporate Affairs (MCA V3 portal) via Form 8</td><td>Income Tax Department (incometax.gov.in) under Section 44AB</td></tr>
                            <tr><td>Due Date</td><td>30 October 2026 (along with Form 8)</td><td>30 September 2026 (Form 3CD)</td></tr>
                            <tr><td>Penalty for Non-Compliance</td><td>Rs 100/day per form for Form 8 delay; LLP Act 2008 penalties</td><td>Section 271B - 0.5% of turnover or Rs 1.5 lakh (whichever lower)</td></tr>
                            <tr><td>Concurrent Application?</td><td>Both can apply if LLP crosses both thresholds (turnover above Rs 1 crore covers both)</td><td>Both apply concurrently</td></tr>
                            <tr><td>Form Filing Sequence</td><td>Audit completed BEFORE Form 8 filed</td><td>Form 3CD filed BEFORE ITR-5 (audit case)</td></tr>
                            <tr><td>Audit Coverage</td><td>Statement of Account and Solvency, financial statements per LLP Act</td><td>Income tax computation, depreciation Section 32, Section 40 disallowances, Section 43B, GST reconciliation, related party</td></tr>
                            <tr><td>UDIN Required</td><td>YES (audit signing)</td><td>YES (Form 3CD signing)</td></tr>
                            <tr><td>Common Pitfall</td><td>CA confusing LLP audit with Section 44AB - missing LLP audit when below Rs 1 crore but above Rs 40 lakh</td><td>CA missing Section 44AB when LLP audit done - thinking the LLP audit covers Section 44AB requirement</td></tr>


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
                
                
                <p>LLP and Partnership Firm filers frequently need adjacent compliance, audit, and conversion services. We bundle these:</p>
                <ul>
                    <li><a href="/income-tax-return">Income Tax Return (general overview)</a> - end-to-end ITR filing across all heads of income</li>
                    <li><a href="/itr-for-business">ITR for Business (Hub)</a> - all six non-corporate entity types broadly (sole prop, firm, LLP, HUF, AOP, BOI)</li>
                    <li><a href="/itr-for-companies">ITR for Companies</a> - Pvt Ltd / OPC / Public Ltd via ITR-6 with concessional rates</li>
                    <li><a href="/tax-audit">Tax Audit</a> - Form 3CA-3CD or 3CB-3CD audit support under Section 44AB</li>
                    <li><a href="/llp-incorporation">LLP Incorporation</a> - LLPIN, DPIN, LLP Agreement filing via MCA V3 portal</li>
                    <li><a href="/partnership-firm-registration">Partnership Firm Registration</a> - Registrar of Firms registration with deed drafting</li>
                    <li><a href="/tds-return">TDS Return Filing</a> - Form 26Q quarterly TDS return filing</li>
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
                    <li><strong>Income Tax Act 1961:</strong> Sections 28-44 (PGBP charging and computation); 40(b) (partner remuneration); 44AB (audit); 44AD/44ADA (presumptive); 184 (firm constitution); 185 (AOP reclassification); 234A/B/C (interest); 234F (late fee); 270A (penalty); 271B (audit failure penalty); 92E (transfer pricing)</li>
                    <li><strong>Indian Partnership Act 1932</strong> - partnership firm constitution and registration; maximum 20 partners; voluntary Registrar of Firms registration</li>
                    <li><strong>Limited Liability Partnership Act 2008:</strong> Section 34 (Statement of Accounts and Solvency); Section 35 (Annual Return); Section 75 (striking off); LLPIN registration; minimum 2 partners with 2 designated partners</li>
                    <li><strong>LLP Rules 2009:</strong> Rule 24(8) (audit applicability at Rs 40 lakh / Rs 25 lakh); Rule 12A(1) (DIR-3 KYC for designated partners)</li>
                    <li><strong>LLP Amendment Act 2021</strong> - Small LLP definition (contribution up to Rs 25 lakh, turnover up to Rs 40 lakh); reduced compliance and lower penalties</li>
                    <li><strong>Finance Act 2025</strong> - Section 40(b) amendment effective AY 2025-26 (Rs 3 lakh / 90 percent / 60 percent on book profit slabs)</li>
                    <li><strong>MCA V3 Portal Notifications</strong> - Form 11, Form 8, DIR-3 KYC, Form 3 filings electronic</li>
                    <li><strong>Income Tax Rules 1962</strong> - Rule 6F (books of accounts requirement)</li>
                </ul>
                <p><strong>Penalty Provisions:</strong></p>
                <ul>
                    <li><strong>Section 234F</strong> late filing fee: Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh)</li>
                    <li><strong>Section 234A / 234B / 234C</strong> interest: 1 percent per month on tax shortfall and advance tax default</li>
                    <li><strong>Section 270A</strong>: 50 percent under-reporting; 200 percent misreporting penalty</li>
                    <li><strong>Section 271B</strong> tax audit default: 0.5 percent of turnover or Rs 1,50,000 (whichever lower)</li>
                    <li><strong>Section 271A</strong>: Rs 25,000 for failure to maintain books under Section 44AA</li>
                    <li><strong>Section 271DA</strong>: penalty equal to receipt for cash receipts above Rs 2 lakh per transaction (Section 269ST)</li>
                    <li><strong>Form 11 / Form 8 LLP penalty</strong>: Rs 100 per day per form with NO upper cap; two consecutive years of non-filing triggers ROC striking off</li>
                    <li><strong>DIR-3 KYC non-filing</strong>: DPIN deactivation; reactivation requires Rs 5,000 fee</li>
                </ul>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead>
                            <tr>
                                <th>Provision</th>
                                <th>What It Says</th>
                                <th>LLP / Partnership Impact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Section 28-44 ITA 1961</td><td>PGBP charging and computation</td><td>Firm-level business income computation in ITR-5 Schedule BP</td></tr>
                            <tr><td>Section 40(b) ITA 1961</td><td>Partner remuneration limits</td><td>Finance Act 2025 amended: Rs 3 lakh / 90% / 60% on book profit slabs; partner interest 12% per annum on capital; only if Section 184 compliant</td></tr>
                            <tr><td>Section 44AB ITA 1961</td><td>Tax audit</td><td>Business Rs 1 crore / Rs 10 crore digital; profession Rs 50 lakh; Form 3CD 44 clauses; 30 September 2026</td></tr>
                            <tr><td>Section 44AD ITA 1961</td><td>Presumptive business</td><td>PARTNERSHIP FIRM eligible (Rs 3 crore digital threshold); LLP NOT eligible</td></tr>
                            <tr><td>Section 44ADA ITA 1961</td><td>Presumptive professional</td><td>PARTNERSHIP FIRM eligible (Rs 75 lakh threshold); LLP NOT eligible</td></tr>
                            <tr><td>Section 184 ITA 1961</td><td>Firm constitution</td><td>Written deed/agreement, profit-sharing ratios, all partner signatures, certified copy filed with first AY ITR</td></tr>
                            <tr><td>Section 185 ITA 1961</td><td>Non-compliant firm = AOP</td><td>Section 184 conditions failed = AOP at MMR; NO Section 40(b) deduction</td></tr>
                            <tr><td>Section 234F ITA 1961</td><td>Late filing fee</td><td>Rs 5,000 (Rs 1,000 if income up to Rs 5 lakh)</td></tr>
                            <tr><td>Section 271B ITA 1961</td><td>Audit failure penalty</td><td>0.5% of turnover or Rs 1.5 lakh (whichever lower) for failure to get Section 44AB audit</td></tr>
                            <tr><td>Section 92E ITA 1961</td><td>Transfer pricing report</td><td>Form 3CEB by accountant for international and specified domestic related party transactions; ITR due 30 November</td></tr>
                            <tr><td>Section 139(8A) ITA 1961</td><td>Updated return</td><td>24-month window with 25-50% additional tax + interest</td></tr>
                            <tr><td>Section 139(9) ITA 1961</td><td>Defective return</td><td>15-day cure window; common LLP trigger - LLP filing ITR-4 instead of ITR-5</td></tr>
                            <tr><td>Section 269ST ITA 1961</td><td>Cash receipt limit</td><td>No cash receipt above Rs 2 lakh per transaction; Section 271DA penalty equal to receipt</td></tr>
                            <tr><td>Indian Partnership Act 1932</td><td>Partnership constitution</td><td>Maximum 20 partners (10 for banking); Registrar of Firms registration voluntary; partner unlimited liability</td></tr>
                            <tr><td>Limited Liability Partnership Act 2008</td><td>LLP constitution</td><td>Minimum 2 partners with at least 2 designated partners (one Indian resident); LLPIN required; partner liability limited</td></tr>
                            <tr><td>Section 34 LLP Act 2008</td><td>LLP Statement of Accounts</td><td>Form 8 filing by 30 October; statutory audit Section 34(4) at Rs 40L turnover OR Rs 25L contribution</td></tr>
                            <tr><td>Section 35 LLP Act 2008</td><td>LLP Annual Return</td><td>Form 11 filing by 30 May</td></tr>
                            <tr><td>LLP Rules 2009 Rule 24(8)</td><td>Audit applicability</td><td>Auditor appointed at least 30 days before FY end; CA in practice</td></tr>
                            <tr><td>LLP Rules 2009 Rule 12A(1)</td><td>DIR-3 KYC</td><td>Annual KYC for designated partners by 30 June</td></tr>
                            <tr><td>LLP Amendment Act 2021</td><td>Small LLP</td><td>Contribution up to Rs 25 lakh / turnover up to Rs 40 lakh - reduced compliance and lower penalties</td></tr>
                            <tr><td>Finance Act 2025</td><td>Section 40(b) amendment</td><td>Rs 3 lakh / 90% / 60% on book profit slabs (raised from Rs 1.5 lakh / 90% / 60%) effective AY 2025-26</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="font-size:13px;color:var(--text-muted);margin-top:14px;font-style:italic;">External references: Income Tax e-Filing Portal - <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> (CBDT - ITR-5 utility, Section 40(b) FAQ, Section 44AB audit); MCA V3 Portal - <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">mca.gov.in</a> (Form 11, Form 8, DIR-3 KYC, Form 3 LLP Agreement); Income Tax Department - <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">incometaxindia.gov.in</a> (Finance Act 2025 Section 40(b) amendment).</p>


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
                    <p class="faq-expanded__lead">Common questions on LLP statutory audit Rs 40 lakh / Rs 25 lakh threshold under Section 34(4) of LLP Act 2008, the difference between LLP audit and Section 44AB tax audit, ITR-5 due dates for AY 2026-27, Section 40(b) Finance Act 2025 amended slabs, LLP exclusion from Section 44AD presumptive, Form 11 / Form 8 penalty regime, DIR-3 KYC requirement, and partnership-to-LLP tax-neutral conversion under Section 47(xiiib).</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for LLP and Partnership Firm',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">When is LLP audit mandatory under LLP Act 2008?</h3>
                        <div class="faq-expanded__a"><p>Section 34(4) of LLP Act 2008 read with Rule 24(8) of LLP Rules 2009 makes LLP statutory audit mandatory if (a) annual turnover exceeds Rs 40 lakh OR (b) total partner contribution exceeds Rs 25 lakh. Either threshold trigger requires audit by a Chartered Accountant in practice. Audit is completed before Form 8 Statement of Account and Solvency is filed by 30 October 2026 for FY 2025-26. Below both thresholds: audit not mandatory but books must be maintained and Form 8 still filed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between LLP audit and tax audit?</h3>
                        <div class="faq-expanded__a"><p>LLP statutory audit is under Section 34(4) of LLP Act 2008 - triggered at Rs 40 lakh turnover OR Rs 25 lakh contribution; auditor signs LLP financial statements before Form 8 filing with MCA. Section 44AB tax audit is under Income Tax Act 1961 - triggered at Rs 1 crore business turnover (Rs 10 crore if 95% digital) or Rs 50 lakh profession receipts; auditor signs Form 3CD 44 clauses before ITR-5 filing. Both can apply concurrently. Common confusion - they are SEPARATE compliance requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the ITR-5 due dates for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>For LLP and Partnership Firm filing ITR-5 for AY 2026-27 (FY 2025-26): 31 July 2026 - non-audit case under Section 139(1); 30 September 2026 - Tax Audit Report Form 3CD under Section 44AB; 31 October 2026 - audit-case ITR-5 under Section 139(1); 30 November 2026 - ITR-5 for Section 92E transfer pricing cases; 31 December 2026 - belated/revised return Section 139(4)/(5) with Section 234F fee. LLP additionally: Form 11 by 30 May 2026; Form 8 by 30 October 2026; DIR-3 KYC by 30 June 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is Section 40(b) partner remuneration calculated under Finance Act 2025?</h3>
                        <div class="faq-expanded__a"><p>Finance Act 2025 amended Section 40(b) effective AY 2025-26 onwards: on first Rs 6,00,000 of book profit, deductible remuneration is Rs 3,00,000 OR 90 percent of book profit (whichever HIGHER); on book profit above Rs 6,00,000, deductible remuneration is 60 percent of remaining book profit. Partner interest deductible up to 12 percent per annum on capital. Only available if Section 184 compliance met (deed, ratios, signatures, certified copy filed). Section 185 reclassifies non-compliant firm as AOP at MMR with NO Section 40(b) deduction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are LLPs eligible for Section 44AD presumptive scheme?</h3>
                        <div class="faq-expanded__a"><p>NO. LLPs are EXPLICITLY EXCLUDED from both Section 44AD AND Section 44ADA. Section 44AD eligibility is restricted to Resident Individual, Resident HUF, and Resident Partnership Firm under Indian Partnership Act 1932 - LLPs incorporated under LLP Act 2008 are a separate category. LLP must maintain regular books, file ITR-5 with full P&L and Balance Sheet, undergo Section 44AB tax audit if turnover above Rs 1 crore (Rs 10 crore digital), and additionally LLP statutory audit under Section 34(4) at Rs 40 lakh turnover or Rs 25 lakh contribution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of Form 11 and Form 8?</h3>
                        <div class="faq-expanded__a"><p>Penalty Rs 100 per day per form, with NO upper cap. For Form 11 due 30 May 2026 - one year delay equals Rs 36,500 penalty. For Form 8 due 30 October 2026 - one year delay equals Rs 36,500 penalty. Both forms together one year delay = Rs 73,000. Two consecutive years of Form 11/8 non-filing triggers ROC striking off proceedings under Section 75 of LLP Act 2008. Once struck off, NCLT revival proceedings required (Rs 50,000 to Rs 1,50,000). Proactive filing strongly recommended.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is DIR-3 KYC mandatory for designated partners?</h3>
                        <div class="faq-expanded__a"><p>YES. All designated partners with active DPIN must file DIR-3 KYC annually by 30 June. Web form for first-time; e-form for subsequent. Non-filing results in DPIN deactivation - blocking the designated partner from signing Form 11, Form 8, ITR-5, or any other LLP filing until reactivation. Reactivation requires Rs 5,000 fee plus DIR-3 KYC filing. If LLP has 2 designated partners and one DPIN is deactivated, LLP cannot file forms requiring two DSC signatures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a partnership firm convert to LLP without tax implications?</h3>
                        <div class="faq-expanded__a"><p>Yes, conversion of partnership firm to LLP is generally tax-neutral under Section 47(xiiib) of the Income Tax Act subject to specified conditions: (a) all partners of firm become partners of LLP in same profit-sharing ratio; (b) all assets and liabilities transferred without consideration other than partner capital; (c) shareholding remains identical for 5 years post-conversion; (d) total sales/turnover/gross receipts of firm in last 3 FYs preceding conversion not exceeding Rs 60 lakh. Failure to comply with these conditions triggers capital gains under Section 45.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <div class="quick-answers" style="background:var(--gray-50);padding:24px;border-radius:12px;margin-top:32px;">
                    <h3 style="font-size:1.4rem;margin-bottom:18px;color:var(--blue);">Quick Answers</h3>
                    <p><strong>Q: LLP audit threshold?</strong><br>A: Rs 40 lakh turnover OR Rs 25 lakh contribution under Section 34(4) LLP Act 2008. Either trigger.</p>
                    <p><strong>Q: Section 44AB tax audit?</strong><br>A: Rs 1 crore business (Rs 10 crore digital both halves); Rs 50 lakh profession.</p>
                    <p><strong>Q: ITR form for LLP / Partnership?</strong><br>A: Both use ITR-5.</p>
                    <p><strong>Q: LLP / Firm tax rate?</strong><br>A: 30 percent flat + 12 percent surcharge above Rs 1 Cr + 4 percent cess. Effective 31.2 percent / 34.944 percent.</p>
                    <p><strong>Q: Section 40(b) Finance Act 2025?</strong><br>A: Rs 3 lakh / 90 percent / 60 percent on book profit slabs. Partner interest 12 percent per annum.</p>
                    <p><strong>Q: LLP presumptive eligible?</strong><br>A: NO - explicitly excluded from Section 44AD AND Section 44ADA.</p>
                    <p><strong>Q: Form 11 / Form 8 due dates?</strong><br>A: Form 11 by 30 May; Form 8 by 30 October. Penalty Rs 100/day no cap.</p>
                    <p><strong>Q: DIR-3 KYC due?</strong><br>A: 30 June for designated partners. Non-filing = DPIN deactivation.</p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Nine LLP and Partnership Firm Deadlines for AY 2026-27</h2>
            <div class="content-text">
                
                <p>LLP and Partnership Firm filers face NINE firm dates for AY 2026-27 (FY 2025-26): <strong>(1) 30 May 2026 - Form 11 LLP Annual Return</strong> (LLP only); <strong>(2) 30 June 2026 - DIR-3 KYC for designated partners</strong> (LLP only); <strong>(3) 31 July 2026 - non-audit ITR-5</strong> under Section 139(1); <strong>(4) 30 September 2026 - Tax Audit Report Form 3CD</strong> under Section 44AB; <strong>(5) 30 October 2026 - Form 8 LLP Statement of Account and Solvency</strong> (LLP only); <strong>(6) 31 October 2026 - audit-case ITR-5</strong> under Section 139(1); <strong>(7) 30 November 2026 - ITR-5 for Section 92E transfer pricing</strong> cases; <strong>(8) 31 December 2026 - belated / revised return</strong> Section 139(4)/(5) with Section 234F fee; <strong>(9) Quarterly advance tax</strong> 15 June, 15 September, 15 December, 15 March - 15 percent, 45 percent, 75 percent, 100 percent cumulative. Form 11 / Form 8 penalty Rs 100 per day per form with NO upper cap; two years consecutive non-filing triggers MCA striking off under Section 75 of LLP Act 2008. DIR-3 KYC non-filing deactivates DPIN blocking ALL LLP filings.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your LLP / Partnership Firm ITR-5 Right - Talk to a Section 40(b) and Audit-Savvy CA Today</h2>
            <div class="content-text" style="text-align:left;">
                
                
                    <p>LLP and Partnership Firm ITR-5 filing is the area where TWO concurrent audit perimeters (LLP statutory audit at Rs 40 lakh / Rs 25 lakh under Section 34(4) of LLP Act 2008 PLUS Section 44AB tax audit at Rs 1 crore / Rs 10 crore digital under Income Tax Act 1961) and FOUR mandatory MCA filings for LLPs (Form 11, Form 8, DIR-3 KYC, ITR-5) create compliance complexity that DIY platforms systematically miss.</p>
                    <p>An LLP with Rs 50 lakh turnover and Rs 30 lakh contribution needs LLP statutory audit even though Section 44AB tax audit does not apply at that turnover. A partnership firm using OLD Section 40(b) slabs of Rs 1.5 lakh / 90 percent / 60 percent forfeits Rs 50,000 to Rs 2 lakh deductible partner remuneration under Finance Act 2025 amended slabs. A partnership deed silent on individual profit ratios risks Section 185 AOP reclassification at MMR with NO Section 40(b) deduction. An LLP missing Form 11 by 30 May 2026 starts accruing Rs 100 per day per form penalty with NO upper cap.</p>
                    <p>Patron Accounting has filed ITR-5 for over 1,200 LLPs and 2,400 partnership firms since 2019 - whether your structure is a 2-partner consulting LLP, a 12-partner family distribution firm, a Small LLP under the 2021 Amendment, or a Foreign LLP with India operations, the correct answer always begins with the entity-type confirmation, deed audit, and dual-audit perimeter mapping.</p>
                    <p style="font-weight:600;">Free 15-minute Section 40(b) optimization and dual-audit perimeter assessment. Call <a href="tel:+919459456700" style="color:#FFD700;">+91 945 945 6700</a>, WhatsApp, or email info@patronaccounting.com - we tell you the optimal Section 40(b) computation under Finance Act 2025, LLP statutory audit applicability under Section 34(4), Section 44AB tax audit applicability, and MCA Form 11 / Form 8 / DIR-3 KYC compliance status BEFORE you pay anything.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20Section%2040%28b%29%20Finance%20Act%202025%20and%20LLP%20audit%20perimeter%20assessment%20for%20my%20LLP%20%2F%20Partnership%20Firm." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ITR%20for%20LLP%20and%20Partnership%20Firm%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20ITR-5%20filing%20services%20for%20my%20LLP%20%2F%20Partnership%20Firm%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block">
                <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:8px;">Related Tax and Compliance Services</div>
                <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end tax, audit, and MCA compliance for LLPs and partnership firms</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/itr-for-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Incorporation</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tds-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return</div><div class="pa-card-sub">India</div></div></a>
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
            <p>Reviewed quarterly during ITR season (April to October) and after every Union Budget; immediately after MCA notification on LLP rules or Form 11 / Form 8 / DIR-3 KYC changes, Section 40(b) slab revision, Section 44AD or Section 44ADA limit revision, LLP Act amendment, or Income Tax Act 2025 commencement updates. Citation Sources: Income Tax Act 1961 (Sections 28-44, 40(b), 44AB, 44AD, 44ADA, 184, 185, 234F, 270A, 271B, 92E); Indian Partnership Act 1932; Limited Liability Partnership Act 2008 (Section 34, Section 35, Section 75); LLP Rules 2009 (Rule 24(8), Rule 12A(1)); LLP Amendment Act 2021 (Small LLP definition); Finance Act 2025 (Section 40(b) amendment); MCA V3 Portal Notifications on Form 11 / Form 8 / DIR-3 KYC.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
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