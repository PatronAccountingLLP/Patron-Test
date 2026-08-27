@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>ESOP for Flip Structures: Delaware, Singapore, Cayman Guide</title>
    <meta name="description" content="ESOP design for Indian companies flipped to Delaware, Singapore or Cayman - mirror grants, reverse flip migration, FEMA OI Rules. From Rs 2,00,000.">
    <link rel="canonical" href="/esop-for-flip-structures">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP for Flip Structures: Delaware, Singapore, Cayman Guide | Patron Accounting">
    <meta property="og:description" content="ESOP design for Indian companies flipped to Delaware, Singapore or Cayman - mirror grants, reverse flip migration, FEMA OI Rules. From Rs 2,00,000.">
    <meta property="og:url" content="/esop-for-flip-structures/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/esop-for-flip-structures-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP for Flip Structures: Delaware, Singapore, Cayman Guide | Patron Accounting">
    <meta name="twitter:description" content="ESOP design for Indian companies flipped to Delaware, Singapore or Cayman - mirror grants, reverse flip migration, FEMA OI Rules. From Rs 2,00,000.">
    <meta name="twitter:image" content="/images/esop-for-flip-structures-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "https://www.patronaccounting.com/esop-for-flip-structures/#service",
        "name": "ESOP for Flip Structures",
        "url": "https://www.patronaccounting.com/esop-for-flip-structures/",
        "description": "ESOP design and reverse flip migration advisory for Indian-origin companies operating under Delaware C-Corp, Singapore Pte Ltd or Cayman Islands holding company structures. Forward flip ESOP setup with mirror grants under FEMA OI Rules 2022 and US 409A coordination, plus end-to-end reverse flip ESOP migration via NCLT Sections 230-232 plus Section 234 scheme of arrangement for IPO-bound companies with Section 47 capital gains exemption planning.",
        "serviceType": "ESOP Design and Reverse Flip Migration Advisory",
        "areaServed": {
            "@type": "Country",
            "name": "India",
            "sameAs": "https://en.wikipedia.org/wiki/India"
        },
        "provider": {
            "@id": "https://www.patronaccounting.com/#organization"
        },
        "about": [
            {
                "@type": "Thing",
                "name": "Holding company",
                "sameAs": "https://en.wikipedia.org/wiki/Holding_company"
            },
            {
                "@type": "Thing",
                "name": "Delaware General Corporation Law",
                "sameAs": "https://en.wikipedia.org/wiki/Delaware_General_Corporation_Law"
            },
            {
                "@type": "Thing",
                "name": "Foreign Exchange Management Act",
                "sameAs": "https://en.wikipedia.org/wiki/Foreign_Exchange_Management_Act"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Flip Structure ESOP Engagement Tiers",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "name": "Forward Flip ESOP Design",
                    "priceCurrency": "INR",
                    "price": "200000",
                    "description": "Mirror grant scheme plus FEMA OI Rules 2022 setup plus US 409A coordination plus TDS workflow plus TP recharge memo plus LRS tracking"
                },
                {
                    "@type": "Offer",
                    "name": "Reverse Flip ESOP Migration Advisory",
                    "priceCurrency": "INR",
                    "price": "300000",
                    "description": "Section 47 tax memo plus ESOP migration plan plus NCLT scheme drafting plus share exchange ratio analysis plus post-flip Section 80-IAC re-eligibility"
                },
                {
                    "@type": "Offer",
                    "name": "Full Reverse Flip Coordination",
                    "priceCurrency": "INR",
                    "price": "400000",
                    "description": "All migration deliverables plus legal coordination, NCLT representation, fairness opinion coordination and employee communication"
                },
                {
                    "@type": "Offer",
                    "name": "Forward Flip Operating Retainer (Annual)",
                    "priceCurrency": "INR",
                    "price": "150000",
                    "description": "Annual FEMA OI compliance plus TP study plus TDS workflow plus audit support"
                }
            ]
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://www.patronaccounting.com/esop-for-flip-structures/#breadcrumb",
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
                "name": "FDI Compliance",
                "item": "https://www.patronaccounting.com/fdi-compliance/"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "ESOP for Flip Structures",
                "item": "https://www.patronaccounting.com/esop-for-flip-structures/"
            }
        ]
    }
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/esop-for-flip-structures/#faq",
  "datePublished": "2026-05-11T08:00:00+05:30",
  "dateModified": "2026-05-11T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a flip structure for Indian startups?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A flip structure is where an Indian-origin company has externalised its holding company to a foreign jurisdiction - typically Delaware C-Corp (most common for US VC-backed companies), Singapore Pte Ltd (Asian VC, APAC GTM) or Cayman Islands (funds, tax-neutral holdcos). The foreign entity becomes the parent; the original Indian operating company becomes a wholly-owned subsidiary providing engineering and customer support services. The Indian sub continues to employ Indian talent and bill the foreign parent on arm's-length transfer pricing under Section 92."
      }
    },
    {
      "@type": "Question",
      "name": "Why do Indian startups flip to Delaware, Singapore or Cayman?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Primary drivers are US VC funding alignment (Sequoia US, Tiger Global, Accel US prefer Delaware C-Corp), SAFE and convertible note instruments well-established under US law, US listing path (NASDAQ or NYSE) from Delaware parent, global GTM and US customer contracting, Section 1202 QSBS founder stock benefits for US-resident founders, and M and A optics for US strategic acquirers. The 2018-2022 wave saw widespread externalisation; the 2023-2026 wave has begun reversing toward Indian IPO listing."
      }
    },
    {
      "@type": "Question",
      "name": "How are ESOPs issued from a Delaware parent to Indian employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Foreign parent (Delaware, Singapore or Cayman) issues options to Indian subsidiary employees as mirror grants. The instrument is foreign parent equity, governed by the foreign jurisdiction stock plan (typically a 2021 Incentive Plan for Delaware). Indian subsidiary acts as TDS deductor under Section 192(1) at exercise. FMV computed under Rule 3(8)(ii) on foreign parent stock converted to INR. FEMA OI Rules 2022 classify holdings as OPI (up to 10 percent of parent equity) or ODI (above). Section 92 transfer pricing recharge from parent to sub for ESOP cost."
      }
    },
    {
      "@type": "Question",
      "name": "What is reverse flip and which Indian startups have done it?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reverse flip is migration of the foreign parent (Delaware, Singapore or Cayman) back to India via NCLT-approved scheme of arrangement under Sections 230-232 plus Section 234 Companies Act 2013. PhonePe completed reverse flip from Singapore to India in 2023; Groww completed Delaware to India in 2024 paying Rs 1,340 crore tax; Razorpay, Pixxel, Meesho and Eruditus are in progress or planning. Driven by Indian IPO market access, abolition of Section 56(2)(viib) angel tax, Section 80-IAC startup benefits and improved Indian regulatory framework."
      }
    },
    {
      "@type": "Question",
      "name": "What is the LRS limit for exercising foreign parent ESOPs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "USD 250,000 per FY per Indian resident individual under the Liberalised Remittance Scheme (Section 5 FEMA 1999). This applies to ESOP exercise consideration remitted by the Indian employee to the foreign parent. Senior employees with large exercises (CTO, VP roles holding 0.5 to 1.5 percent of Delaware C-Corp) can hit this cap. Cashless or net-settled exercises (broker sells portion of vested shares immediately to fund exercise price and tax) typically fall outside LRS scope and are the standard approach."
      }
    },
    {
      "@type": "Question",
      "name": "Does reverse flip trigger capital gains tax for ESOP holders?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Properly structured reverse flips qualify for Section 47 capital gains exemption - Section 47(via) for foreign amalgamating company shares (e.g. Delaware parent shares cancelled), Section 47(vii) for share transfer in scheme of amalgamation, Section 47(vicc) for merger of foreign holding into Indian subsidiary. Conditions must be met (specified shareholding patterns, consideration in shares of Indian entity). Section 49(2AA) preserves original cost basis. If conditions not met, capital gains tax applies. Groww 2024 reverse flip involved Rs 1,340 crore tax due to specific shareholder positions; Patron planning minimises this."
      }
    },
    {
      "@type": "Question",
      "name": "How long does reverse flip take and what is the process?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reverse flip end-to-end typically 12 to 18 months. Process - Board decision and structure design (Months 18 to 15), foreign side approvals (Months 15 to 12), Section 47 tax memo and NCLT scheme drafting (Months 14 to 12), cross-border valuations including US 409A and Rule 11UA (Months 12 to 10), NCLT filing under Sections 230-232 plus Section 234 (Months 10 to 8), creditor objection window and First Motion (Months 8 to 6), Second Motion and Final NCLT order (Months 6 to 4), MCA filing, share allotment and ESOP migration (Months 4 to 2), foreign parent dissolution and Section 80-IAC re-eligibility (Months 2 to 0)."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between RSU and ESOP from foreign parent?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "RSU (Restricted Stock Unit) is a grant of shares vesting over time with NO exercise price - the employee gets the full FMV at vesting as perquisite under Section 17(2)(vi). Common at mature US MNCs (Microsoft, Adobe, Cisco). ESOP (Employee Stock Option Plan) has an EXERCISE PRICE the employee pays to convert vested options into shares - perquisite is FMV minus exercise price at exercise. Common at Delaware C-Corp startups. From an Indian tax perspective the mechanic is the same (perquisite at exercise or vesting, Schedule FA reporting, Form 67 DTAA) but the dollar quantum and timing differ."
      }
    },
    {
      "@type": "Question",
      "name": "Delaware flip ke baad reverse flip kaise karein? (How to reverse flip after Delaware flip)",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reverse flip 12-18 mahine ka NCLT process hota hai. Steps - Board approval karna, structure design karna (Delaware parent ko India NewCo mein merge), foreign side approvals lena, Section 47 tax memo banwana, US 409A aur Rule 11UA valuation refresh karna, NCLT mein Form NCLT-1 file karna under Sections 230-232 plus 234, creditor objection window (21 din), First Motion aur Second Motion hearings, Final NCLT order milne ke baad MCA filing, Indian parent shares allot karna, foreign parent ESOPs cancel karke Indian parent ESOPs reissue karna with original grant date preserved. Section 80-IAC re-eligibility check bhi karna padta hai. Groww ne 2024 mein Rs 1,340 crore tax pay kiya tha; proper planning se yeh kam ho sakta hai. Patron Rs 3-5 lakh charge karta hai. Call +91 945 945 6700."
      }
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
/* Conclusion + CTA Block (Dark) - force light text against dark navy
           background. Overrides .content-text/strong/p default dark colours. */
        .content-section[style*="var(--blue)"] .section-title,
        .content-section[style*="var(--blue)"] h2 {
            color: #FFFFFF !important;
        }
.content-section[style*="var(--blue)"] .content-text,
        .content-section[style*="var(--blue)"] .content-text p {
            color: rgba(255,255,255,0.92) !important;
        }
.content-section[style*="var(--blue)"] .content-text strong,
        .content-section[style*="var(--blue)"] p strong {
            color: #FFFFFF !important;
            font-weight: 700;
        }
.content-section[style*="var(--blue)"] .content-text a:not([style*="background"]) {
            color: rgba(255,255,255,0.92) !important;
            text-decoration: underline;
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
                        ESOP for Flip Structures
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 11 May 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Forward Flip ESOP:</span> Delaware, Singapore or Cayman parent mirror grants; FEMA OI Rules 2022 OPI/ODI classification; US 409A coordination</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reverse Flip Migration:</span> Section 47 scheme of arrangement under NCLT; convert foreign parent ESOPs to Indian parent ESOPs; pre-IPO clean-up</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax and FEMA:</span> Section 17(2)(vi) at exercise; LRS USD 250k limit; Rule 11UA at conversion; Section 49(2AA) cost basis preserved</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 2,00,000 to Rs 5,00,000 for advisory engagement; multi-disciplinary across CA, CS, valuation and FEMA</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years in Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20scoping%20call%20for%20Flip%20Structure%20ESOP." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - Flip Structure ESOP',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'ESOP for Flip Structures', 'label' => 'ESOP for Flip Structures', 'selected' => true, 'disabled' => false],
                            ['value' => 'FDI Compliance', 'label' => 'FDI Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'ESOP Accounting under Ind AS 102', 'label' => 'ESOP Accounting under Ind AS 102', 'selected' => false, 'disabled' => false],
                            ['value' => 'ESOP Corporate Filings', 'label' => 'ESOP Corporate Filings', 'selected' => false, 'disabled' => false],
                            ['value' => 'ESOP Management and Compliance', 'label' => 'ESOP Management and Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'Startup Registration (DPIIT)', 'label' => 'Startup Registration (DPIIT)', 'selected' => false, 'disabled' => false],
                            ['value' => 'Private Limited Company Compliance', 'label' => 'Private Limited Company Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'Issue of Shares', 'label' => 'Issue of Shares', 'selected' => false, 'disabled' => false],
                            ['value' => 'Other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->

        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Outstanding experience with Patron. Professionalism and timely communication made the process seamless.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Business Owner</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Glad I connected with Patron. Really helpful and took minimum time.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Entrepreneur</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Fantastic experience. Knowledgeable and smooth handling of all documentation.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Best service for account handling. Extremely happy with dedicated point of contact.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Nimbhorkar</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Smooth process for ITR filing. They understand basics well and respond promptly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SH</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Sameer Mehta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Client</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Forward flip mirror grants under FEMA OI Rules 2022. Reverse flip via NCLT Sections 230-232 plus Section 47 tax optimisation. CA, CS, valuation, FEMA and NCLT under one engagement.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <a href="#what-section" class="toc-btn">Forward vs Reverse Flip</a>
            <a href="#who-section" class="toc-btn">Mirror Grant Stack</a>
            <a href="#services-section" class="toc-btn">Deliverables</a>
            <a href="#process-section" class="toc-btn">8-Step NCLT Process</a>
            <a href="#documents-section" class="toc-btn">Section 47 Tax</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">12-18 Month Timeline</a>
            <a href="#comparison-section" class="toc-btn">Jurisdictions Compared</a>
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
            <h2 class="section-title">Flip Structure ESOP Advisory - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Flip Structure ESOP Services at a Glance</strong></p>
                    <p>Indian-origin companies that have flipped to Delaware C-Corp, Singapore Pte Ltd or Cayman holding company structures face a distinct ESOP problem - the foreign parent issues options to Indian subsidiary employees as mirror grants under FEMA Overseas Investment Rules 2022, with US 409A or jurisdiction-equivalent valuation, LRS USD 250,000 limit for exercise consideration, transfer pricing on the India sub services billing, and Section 17(2)(vi) perquisite tax timing aligned to exercise. The reverse flip wave (PhonePe 2023, Groww 2024, Razorpay, Pixxel, Meesho in progress) adds a second layer - migration of foreign parent ESOPs to Indian parent ESOPs via Section 47 scheme of arrangement under NCLT Sections 230-232, preserving Section 49(2AA) cost basis and original grant dates.</p>
                </div>
                <p>The 2018-2022 Indian startup era saw widespread externalisation - Indian-origin founders incorporating Delaware C-Corp or Singapore Pte Ltd holding companies, transferring IP and operations to the foreign parent, and keeping the Indian entity as a wholly-owned subsidiary providing engineering and customer support services. The driver was US VC funding (which typically required a US holdco), global GTM and SAFE-equivalent funding instruments unavailable in India.</p>
                <p>From 2023, the wave has begun to reverse - companies like PhonePe (Singapore to India 2023), Groww (US to India 2024 with Rs 1,340 crore tax paid), Razorpay, Pixxel, Meesho and Eruditus are reverse-flipping back to India to access Indian IPO markets and benefit from improved Indian regulatory framework. Patron Accounting LLP designs ESOP schemes for both forward and reverse flip scenarios across CA, CS, valuation, FEMA and NCLT disciplines.</p>
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
                <h2 class="section-title">Forward Flip vs Reverse Flip - Decision Framework</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Two distinct workflows sit under the flip-structure umbrella. Forward flip externalises the Indian holdco to a foreign jurisdiction; reverse flip brings it back. Each carries a separate ESOP design problem.</p>
                    <p><strong>Forward Flip Drivers (2018-2022 wave):</strong> US VC funding alignment (Sequoia US, Tiger Global, Accel US prefer Delaware C-Corp), SAFE and convertible note instruments well-established under US law, US listing path (NASDAQ or NYSE) easier from Delaware parent, global GTM and US customer contracting, Section 1202 QSBS founder stock benefits for US-resident founders, and M&amp;A optics for US strategic acquirers.</p>
                    <p><strong>Reverse Flip Drivers (2023-2026 wave):</strong> Indian IPO market access (BSE and NSE listing), abolition of Section 56(2)(viib) angel tax under Finance Act 2024, Section 80-IAC startup tax benefits, improved Indian regulatory framework (DPIIT, IMB, online MCA, FEMA OI Rules 2022), Indian VC and growth fund ecosystem maturity matching US ticket sizes, and the operational overhead of US 409A and quarterly board reporting exceeding value at scale.</p>
                    <p><strong>Public Precedents:</strong> PhonePe completed reverse flip from Singapore to India in 2023. Groww completed Delaware to India in 2024 paying Rs 1,340 crore tax. Razorpay, Pixxel, Meesho and Eruditus are in progress or planning.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Flip Structure ESOP:</strong></p>
                    <p><strong>Forward Flip (Externalisation):</strong> Indian-origin company moves its holdco offshore - typically Delaware C-Corp for US VC-backed SaaS and AI startups, Singapore Pte Ltd for Asian VC and APAC GTM, Cayman Islands for funds and IP holdcos. The original Indian entity becomes a wholly-owned subsidiary providing services.</p>
                    <p><strong>Reverse Flip (Re-domiciliation to India):</strong> Migration of the foreign parent back to India via NCLT-approved scheme of arrangement under Sections 230-232 plus Section 234 Companies Act 2013. The Indian entity (often a newly incorporated NewCo) becomes the new parent.</p>
                    <p><strong>Mirror Grant:</strong> Stock options issued by the foreign parent directly to Indian subsidiary employees - the instrument is foreign parent equity, not Indian Section 62(1)(b) ESOP.</p>
                    <p><strong>FEMA OI Rules 2022:</strong> Overseas Investment Rules notified 22 August 2022 governing Indian residents holding foreign equity. OPI (Overseas Portfolio Investment) up to 10 percent of parent equity individually under Rule 7; ODI (Overseas Direct Investment) above under Rule 9.</p>
                    <p><strong>LRS USD 250,000:</strong> Liberalised Remittance Scheme limit per FY per Indian resident individual under Section 5 FEMA 1999 - applies to ESOP exercise consideration remittance.</p>
                    <p><strong>Section 47 Framework:</strong> Income Tax Act 1961 capital gains exemption pathway for reverse flip - Section 47(via) for foreign amalgamating company shares, Section 47(vii) for share transfer in scheme of amalgamation, Section 47(vicc) for merger of foreign holding into Indian subsidiary. Section 49(2AA) preserves original cost basis.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Flip Structure ESOP</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Tax Pathway</span>
                        <strong>Section 47</strong>
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
            <h2 class="section-title">Mirror Grant Compliance Stack</h2>
            <div class="content-text">
                
                <p>In a forward flip structure, the foreign parent (Delaware, Singapore or Cayman) issues options to Indian subsidiary employees as mirror grants. The Indian subsidiary continues to act as TDS deductor under Section 192(1) on the perquisite at exercise. FMV is computed on the foreign parent stock and converted to INR. Each compliance element below sits under Patron's standard forward flip ESOP design engagement.</p>
                <ul>
                    <li><strong>FEMA OI Rules 2022 Classification:</strong> OPI if up to 10 percent of parent equity individually (Rule 7); ODI if above (Rule 9). Annual employee-wise classification with Form FLA and OPI report filing.</li>
                    <li><strong>LRS Limit Tracking:</strong> USD 250,000 per FY per Indian resident individual for exercise consideration remittance. LRS tracker integrated with ESPP and exercise workflow to prevent breach.</li>
                    <li><strong>Foreign Parent Valuation:</strong> US 409A every 12 months or on material event; jurisdiction-equivalent for Singapore (IRAS guidance) and Cayman. Coordinated with US 409A valuation firm; INR translation for India use.</li>
                    <li><strong>Section 17(2)(vi) Perquisite Tax at Exercise:</strong> FMV on parent stock minus exercise price; converted to INR at SBI TTBR on vesting or exercise date. Rule 3(8)(ii) FMV computation; payroll integration.</li>
                    <li><strong>TDS by Indian Subsidiary:</strong> Section 192(1) - the Indian sub is the statutory deductor on parent-issued equity perquisite. TDS workflow plus Form 16 and Form 12BA.</li>
                    <li><strong>Transfer Pricing Recharge:</strong> Section 92 - parent recharges the India sub for ESOP cost attributable to Indian employees. Annual TP study with cost-plus methodology aligned to engineering services billing.</li>
                    <li><strong>Employee Schedule FA:</strong> Foreign Asset disclosure for resident Indian employees (not required for NRI or RNOR). Annual ITR support with Form 67 for Foreign Tax Credit.</li>
                    <li><strong>Annual FLA Report:</strong> RBI Form FLA by 15 July each year for ODI; OPI reporting per Rule 13 FEMA OI Rules 2022. Filing workflow set up at sub level.</li>
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
            <h2 class="section-title">Patron Flip Structure Engagement Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Forward Flip ESOP Design</strong></td><td>For Indian-origin companies that have flipped to Delaware, Singapore or Cayman - mirror grant scheme design under FEMA OI Rules 2022, US 409A coordination, Indian subsidiary TDS workflow under Section 192(1), transfer pricing recharge memo, LRS tracking for exercise consideration, employee FEMA OI classification (OPI vs ODI).</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Reverse Flip ESOP Migration Planning</strong></td><td>End-to-end reverse flip ESOP migration - Section 47 scheme of arrangement design, NCLT filings under Sections 230-232, foreign parent ESOPs cancelled and Indian parent ESOPs issued preserving Section 49(2AA) cost basis and original grant dates.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>NCLT Scheme of Arrangement Drafting</strong></td><td>Drafting of the cross-border scheme of arrangement under Sections 230-232 plus Section 234, share exchange ratio determination, fairness opinion coordination with SEBI Cat I Merchant Banker, Form NCLT-1 filing, statutory authority no-objection coordination (IT, RBI, MCA).</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>FEMA OI Rules 2022 Compliance</strong></td><td>OPI/ODI classification per employee; annual reporting via Form FLA and OPI report; coordinated with the FDI Compliance team for outbound investment compliance stack.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Section 47 Tax Memo</strong></td><td>Tax memo confirming Section 47(via), 47(vii) and 47(vicc) applicability to the scheme; conditions analysis; Section 47A risk review; Section 49(2AA) cost basis preservation; Section 17(2)(vi) timing for post-flip exercises; Section 80-IAC re-eligibility analysis for the reverse-flipped Indian entity.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Rule 11UA and US 409A Valuation Coordination</strong></td><td>Coordinated valuation engagement - US 409A refresh on the foreign parent through US valuation firm and Rule 11UA via SEBI Cat I Merchant Banker route. Share exchange ratio defensibility documented.</td><td><span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Employee Communication Pack</strong></td><td>Pre-flip and post-flip employee education sessions; FAQ document covering tax implications, vesting continuity, exercise mechanics; consent forms for ESOP cancellation and reissuance; ITR support memo for affected employees.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Section 80-IAC Re-Eligibility Confirmation</strong></td><td>For reverse-flipped entities - confirmation of Section 80-IAC eligibility post merger; DPIIT recognition continuity or fresh recognition application; IMB certification implications; 10-year clock determination (typically runs from original Indian incorporation date if scheme structured correctly).</td><td><span class="badge-addon">Add-on</span></td></tr>


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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">8-Step Reverse Flip Scheme of Arrangement</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From pre-decision board approval to post-NCLT implementation and ESOP migration, the reverse flip scheme of arrangement runs through eight phases across CA, CS, tax, valuation, NCLT and FEMA disciplines - typically 12 to 18 months end-to-end.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Pre-Decision and Advisor Appointment</h3>
                    <p class="step-description">Board approval of reverse flip rationale. Appointment of Indian and foreign legal counsel, tax advisor (Patron), SEBI Cat I Merchant Banker for fairness opinion, IBBI valuer for Rule 11UA and US 409A valuation firm.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board rationale</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Advisor panel set</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Decision Made</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Structure Design</h3>
                    <p class="step-description">Determine the Indian entity into which foreign parent will merge - existing India sub, new India holdco, or NewCo. Consider tax efficiency, IP holding, employee ESOP migration mechanics and Section 80-IAC continuity.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Target entity selected</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IP path mapped</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Structure Locked</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Foreign Side Approvals</h3>
                    <p class="step-description">Delaware shareholder approvals (or Singapore Pte Ltd / Cayman equivalent). Foreign board minutes. Regulatory clearances in the foreign jurisdiction (US SEC if applicable, ACRA Singapore, Cayman registrar). US 409A refresh.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Foreign shareholder vote</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 409A refreshed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Foreign Side Done</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Section 47 Tax Memo and Scheme Drafting</h3>
                    <p class="step-description">Section 47(via), 47(vii) and 47(vicc) condition analysis. Section 47A risk review. Section 49(2AA) cost basis preservation. Drafting of the cross-border scheme of arrangement document.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 47 conditions met</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scheme document drafted</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Tax + Scheme Ready</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Indian Side NCLT Filing</h3>
                    <p class="step-description">Application to NCLT under Sections 230-232 plus Section 234 Companies Act 2013 via Form NCLT-1 with scheme document. Notice to creditors, shareholders and statutory authorities (Income Tax, RBI, MCA, SEBI if listed).</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form NCLT-1 filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 21-day objection window</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Filed with NCLT</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Fairness Opinion and Cross-Border Valuation</h3>
                    <p class="step-description">SEBI Cat I Merchant Banker fairness opinion. Rule 11UA Indian valuation. US 409A foreign valuation. Share exchange ratio finalised. Stakeholder objections resolved before First Motion hearing.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fairness opinion issued</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Share ratio finalised</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Valuation Locked</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">NCLT Hearings and Final Order</h3>
                    <p class="step-description">Typically 2 to 3 hearings over 6 to 12 months. First Motion order, Second Motion order. Objections resolved. Final NCLT order approving the scheme of arrangement. Filed with MCA within statutory timeline.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> First + Second Motion</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Final NCLT order</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Court Approved</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">ESOP Migration and Post-NCLT Implementation</h3>
                    <p class="step-description">Allot Indian parent shares per the approved scheme. Cancel foreign parent shares. Foreign parent ESOPs cancelled; Indian parent ESOPs issued with original grant dates preserved under Section 49(2AA). Section 80-IAC re-eligibility check.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ESOPs migrated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 80-IAC confirmed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Migration Complete</span>
                        <span class="step-number-large">08</span>
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
            <h2 class="section-title">Section 47 Tax Treatment - Reverse Flip Framework</h2>
            <div class="content-text">
                
                <p>Section 47 of the Income Tax Act 1961 is the central tax pathway for reverse flip. Properly structured reverse flips qualify for capital gains exemption across founder, employee and investor shareholders. The conditions matter - Groww's 2024 reverse flip involved Rs 1,340 crore tax paid due to specific shareholder positions where Section 47 conditions could not be fully met. Patron's planning minimises this exposure.</p>
                <ul>
                    <li><strong>Indian Resident Founder (Delaware Parent Shareholder):</strong> Holds Delaware C-Corp shares classified as ODI under FEMA OI Rules. <strong>Section 47(via)</strong> - no transfer for capital gains on cancellation of Delaware shares, subject to conditions on consideration in Indian parent shares. Post-flip: holds Indian parent shares directly.</li>
                    <li><strong>Indian Resident Employee (Delaware ESOP holder):</strong> Holds vested or unvested ESOPs from the Delaware parent. <strong>Section 47(vii)</strong> for share component; ESOPs cancelled and reissued under Indian parent. Post-flip: holds Indian parent ESOPs with original grant date preserved under Section 49(2AA).</li>
                    <li><strong>Foreign VC / US VC (Delaware Shareholder):</strong> Holds Delaware C-Corp shares; US tax resident. <strong>Section 47(via)</strong> at India level; US tax treatment per IRC applies separately. Post-flip: holds Indian parent shares; FPI registration may be required.</li>
                    <li><strong>Indian Subsidiary:</strong> Operating entity providing services. Becomes the new Indian parent or is merged into NewCo per the chosen structure.</li>
                    <li><strong>IP Holding:</strong> May be held at the Delaware parent level pre-flip. IP transferred to the Indian entity as part of the scheme. Post-flip: IP held at Indian parent level.</li>
                    <li><strong>Section 47A Risk:</strong> Withdrawal of Section 47 exemption on subsequent transfer within prescribed timeframes. Patron's tax memo addresses this for all shareholder classes.</li>
                    <li><strong>Section 80-IAC Re-Eligibility:</strong> Patron's confirmation memo addresses whether DPIIT recognition is preserved, IMB certification carries over and the 10-year clock continues from original Indian incorporation date.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Flip Structure ESOP Mistakes and How We Avoid Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Mirror grant treated as Indian ESOP</strong></td><td>Foreign parent mirror grants are NOT Indian ESOPs under Section 62(1)(b) Companies Act 2013 - they fall under FEMA OI Rules 2022 and the foreign jurisdiction's framework. Indian subsidiary acts as TDS deductor but the underlying instrument is foreign parent equity.</td><td>Patron documentation separates the two paths cleanly - foreign parent stock plan + FEMA OI Rules workflow for mirror grants; Section 62(1)(b) only where applicable.</td></tr>
                        <tr><td><strong>LRS limit ignored for cash exercises</strong></td><td>Indian residents have a USD 250,000 per FY remittance cap under LRS. Senior employees with large ESOP exercises (CTO, VP roles) can hit this cap, blocking exercise.</td><td>Patron designs cashless and net-settled exercise mechanics that avoid LRS scope, or stages exercise across multiple FYs to stay within the cap.</td></tr>
                        <tr><td><strong>Reverse flip without Section 47 analysis</strong></td><td>Reverse flip without Section 47 capital gains exemption planning can trigger a multi-crore tax event for founders, employees and investors.</td><td>Patron runs the Section 47(via), 47(vii) and 47(vicc) condition analysis upfront and structures the scheme to qualify before NCLT filing.</td></tr>
                        <tr><td><strong>Foreign parent ESOPs not migrated</strong></td><td>Reverse flip schemes that focus on the share migration but neglect ESOP migration leave employees holding cancelled options without replacement.</td><td>Patron reverse flip workflow includes ESOP migration as a core component with original grant date and vesting status preserved under Section 49(2AA).</td></tr>
                        <tr><td><strong>US 409A valuation stale at flip event</strong></td><td>Material events including reverse flip trigger a fresh US 409A valuation. Companies that do not refresh face IRS exposure on the US side and Rule 11UA defensibility issues on the India side.</td><td>Patron coordinates both 409A (US side) and Rule 11UA (India side) valuations at the flip event with a SEBI Cat I Merchant Banker on the India end.</td></tr>
                        <tr><td><strong>No Section 80-IAC re-eligibility planning</strong></td><td>Reverse-flipped entities may or may not retain Section 80-IAC eligibility depending on scheme structure - whether incorporation date is preserved, IMB certification carried over and the 10-year clock maintained.</td><td>Patron tax memo addresses Section 80-IAC re-eligibility for the post-flip Indian entity as part of the standard reverse flip engagement.</td></tr>
                        <tr><td><strong>Transfer pricing default during forward flip operations</strong></td><td>Foreign parent plus Indian sub structure requires arm's-length transfer pricing under Section 92 for the engineering and customer support services billing. Default exposes the India sub to TP adjustment risk.</td><td>Patron drafts the TP recharge memo at forward flip setup and refreshes annually with cost-plus methodology aligned to engineering services billing.</td></tr>


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
            <h2 class="section-title">Flip Structure ESOP Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Forward Flip ESOP Design</td><td>Mirror grant scheme plus FEMA OI Rules 2022 setup plus US 409A coordination plus TDS workflow plus TP recharge memo plus LRS tracking</td><td class="table-amount">Rs 2,00,000 to Rs 3,00,000</td></tr>
                        <tr><td>Reverse Flip ESOP Migration Advisory</td><td>Section 47 tax memo plus ESOP migration plan plus NCLT scheme drafting plus share exchange ratio analysis plus post-flip Section 80-IAC re-eligibility</td><td class="table-amount">Rs 3,00,000 to Rs 5,00,000</td></tr>
                        <tr><td>Full Reverse Flip Coordination (Multi-Disciplinary)</td><td>All migration deliverables plus legal coordination, NCLT representation, fairness opinion coordination and employee communication</td><td class="table-amount">Rs 4,00,000 to Rs 5,00,000</td></tr>
                        <tr><td>Forward Flip Operating Retainer (Annual)</td><td>Annual FEMA OI compliance plus TP study plus TDS workflow plus audit support</td><td class="table-amount">Rs 1,50,000 to Rs 3,00,000 per year</td></tr>
                        <tr><td>FEMA OI Form FLA and OPI Report (Standalone)</td><td>Annual FLA reporting plus OPI report filing</td><td class="table-amount">Rs 25,000 to Rs 75,000 per year</td></tr>
                        <tr><td>Section 47 Tax Opinion (Standalone)</td><td>Section 47(via), 47(vii) and 47(vicc) condition analysis plus risk memo for proposed scheme</td><td class="table-amount">Rs 75,000 to Rs 1,50,000</td></tr>
                        <tr><td>Rule 11UA and 409A Coordination (Pass-Through)</td><td>Cross-border valuation engagement at flip event</td><td class="table-amount">Rs 1,00,000 to Rs 2,50,000</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for Forward Flip ESOP Design engagement</td><td class="table-amount"><strong>Starting from INR 2,00,000 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free Flip Structure ESOP consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20quote%20for%20ESOP%20for%20Flip%20Structures." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Reverse Flip Migration Timeline (12 to 18 Months)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Months 18 to 15 - Reverse flip decision and structure design; advisor appointment (Patron, legal, MB)</td><td class="table-amount">Engagement letter; structure memo</td></tr>
                        <tr><td>Months 15 to 12 - Foreign side approvals (Delaware/Singapore/Cayman shareholder vote, board minutes, US 409A refresh)</td><td class="table-amount">Foreign approval pack</td></tr>
                        <tr><td>Months 14 to 12 - Section 47 tax memo and NCLT scheme drafting</td><td class="table-amount">Tax memo plus draft scheme</td></tr>
                        <tr><td>Months 12 to 10 - Cross-border valuations (US 409A refresh and Rule 11UA via SEBI Cat I MB)</td><td class="table-amount">409A report plus Rule 11UA report</td></tr>
                        <tr><td>Months 10 to 8 - NCLT filing under Sections 230-232 plus Section 234 (Form NCLT-1)</td><td class="table-amount">NCLT filing receipt</td></tr>
                        <tr><td>Months 8 to 6 - Creditor objection window (21 days) and First Motion hearing</td><td class="table-amount">First Motion order</td></tr>
                        <tr><td>Months 6 to 4 - Second Motion hearing and Final NCLT order</td><td class="table-amount">Final NCLT order</td></tr>
                        <tr><td>Months 4 to 2 - MCA filing, Indian parent share allotment, foreign parent ESOPs cancelled and Indian parent ESOPs reissued</td><td class="table-amount">ESOP migration complete</td></tr>
                        <tr><td>Months 2 to 0 - Foreign parent dissolution and Section 80-IAC re-eligibility confirmation</td><td class="table-amount">DPIIT continuity confirmed</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Reverse flip timelines are NCLT-bound; the 6 to 12 month court process is the longest single phase. Patron's role is to ensure pre-filing materials (Section 47 tax memo, scheme document, valuations, foreign approvals) are complete so the NCLT process runs without remand. Groww 2024 example: full reverse flip completed in approximately 14 months with Rs 1,340 crore tax paid - Patron planning minimises that tax via Section 47 condition optimisation upfront.

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
            <h2 class="section-title">Why Patron for Flip Structure ESOP</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Multi-Disciplinary Single Engagement</h3><p>CA, CS, valuation, FEMA and NCLT disciplines under one engagement. Works alongside legal counsel, merchant banker and foreign jurisdiction advisors - no coordination gaps.</p></article>
    <article class="feature-card"><h3>Forward + Reverse Flip Both Covered</h3><p>Both directions in scope - forward flip mirror grant design (FEMA OI Rules 2022, US 409A coordination) and reverse flip ESOP migration (Section 47 + NCLT 230-232).</p></article>
    <article class="feature-card"><h3>Section 47 Tax Optimisation</h3><p>Section 47(via), 47(vii) and 47(vicc) condition analysis upfront. Scheme structured to qualify for capital gains exemption before NCLT filing. Groww-level tax exposure minimised.</p></article>
    <article class="feature-card"><h3>FEMA OI Rules 2022 Depth</h3><p>OPI/ODI classification, Form FLA annual filing, LRS USD 250k limit management, transfer pricing recharge under Section 92 - the full outbound investment compliance stack.</p></article>
    <article class="feature-card"><h3>Cross-Border Valuation Coordination</h3><p>US 409A through US valuation firm and Rule 11UA through SEBI Cat I Merchant Banker route at flip event. Share exchange ratio defensibility documented.</p></article>
    <article class="feature-card"><h3>Section 80-IAC Re-Eligibility Memo</h3><p>For reverse-flipped entities - confirms DPIIT recognition continuity, IMB certification carry-over and the 10-year clock determination from original Indian incorporation date.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian-Origin Flip and Reverse-Flip Founders</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years in Practice</strong></p>
                <p>As a US VC-backed Indian SaaS founder operating Delaware C-Corp, the FEMA OI Rules 2022 compliance for our 75 Indian employees holding Delaware ESOPs was a nightmare before Patron. They built the OPI/ODI classification matrix, set up the annual Form FLA workflow, drafted the TDS process for Indian sub, and handled the transfer pricing recharge memo. Audit comments went to zero. - Co-founder, Delaware C-Corp SaaS (Mumbai).</p>
                <p>Patron ran our reverse flip Section 47 tax memo end-to-end - identified two shareholder positions where Section 47 conditions would not be met and structured around them. The final tax exposure was 30 percent of what we had budgeted. NCLT scheme also moved through First and Second Motion without remand. - CFO, Pre-IPO Reverse Flip (Bengaluru).</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Delaware vs Singapore vs Cayman - Jurisdiction Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Dimension</th>
                            <th>Delaware C-Corp (US)</th>
                            <th>Singapore Pte Ltd / Cayman Islands</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Typical Use Case</strong></td><td>US VC funding; US listing path; B2B SaaS, AI</td><td>Singapore: Asian VC funding, APAC GTM, fintech, gaming. Cayman: funds, IP holdcos, tax-neutral structures</td></tr>
                        <tr><td><strong>Incorporation Cost</strong></td><td>USD 500 to 2,000</td><td>Singapore: SGD 1,500 to 5,000. Cayman: USD 3,000 to 10,000</td></tr>
                        <tr><td><strong>Annual Compliance</strong></td><td>Delaware franchise tax (USD 400+); federal and state IRS filings</td><td>Singapore: ACRA annual return plus IRAS corporate tax. Cayman: government fee plus annual compliance</td></tr>
                        <tr><td><strong>Valuation Methodology</strong></td><td>US 409A (refresh every 12 months or material event)</td><td>Singapore: Rule 11UA-equivalent under IRAS guidance. Cayman: generally less prescriptive</td></tr>
                        <tr><td><strong>Tax on Founder Stock Sale</strong></td><td>Section 1202 QSBS - up to USD 10M exclusion (5-year hold) for US tax residents</td><td>Singapore: no capital gains tax. Cayman: no capital gains tax</td></tr>
                        <tr><td><strong>Indian Employee Tax</strong></td><td>Section 17(2)(vi) perquisite at exercise; same regardless of jurisdiction</td><td>Section 17(2)(vi) perquisite at exercise; same regardless of jurisdiction</td></tr>
                        <tr><td><strong>FEMA OI Classification (Indian Employee)</strong></td><td>OPI if up to 10 percent; ODI above</td><td>Same OPI/ODI framework applies for both Singapore and Cayman</td></tr>
                        <tr><td><strong>Reverse Flip Complexity</strong></td><td>Highest - Section 47(via) for US shares; QSBS unwind</td><td>Singapore: medium - Section 47(via) for Singapore shares. Cayman: medium-high - IP transfer complexity</td></tr>
                        <tr><td><strong>Indian Employee ESOP Issuance</strong></td><td>Mirror grant; FEMA OI Rules 7-9; US 409A valuation</td><td>Same FEMA OI mechanic; IRAS valuation for Singapore; less prescriptive for Cayman</td></tr>


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
                
                <ul>
                    <li><strong><a href="/fdi-compliance/">FDI Compliance</a></strong> - FEMA NDI Rules 2019 and FEMA Overseas Investment Rules 2022 compliance; FC-GPR coordination for cross-border share movements.</li>
                    <li><strong><a href="/startup-registration/">Startup Registration</a></strong> - DPIIT recognition and IMB Section 80-IAC certification; re-eligibility confirmation post reverse flip.</li>
                    <li><strong><a href="/esop-accounting-ind-as-102/">ESOP Accounting under Ind AS 102</a></strong> - group share-based payment accounting for foreign parent and reverse-flipped Indian parent structures.</li>
                    <li><strong><a href="/esop-corporate-filings/">ESOP Corporate Filings</a></strong> - ongoing MCA filings retainer (MGT-14, PAS-3, MGT-7, SH-6) for the post-flip Indian parent ESOP scheme.</li>
                    <li><strong><a href="/esop-for-deeptech-aiml/">ESOP for Deeptech and AI/ML Startups</a></strong> - sister vertical page; deeptech founders frequently operate Delaware C-Corp parent structures.</li>
                    <li><strong><a href="/esop-for-fintech/">ESOP for Fintech Companies</a></strong> - sister vertical page; foreign-parent fintech subsidiaries face overlapping FEMA OI plus RBI compliance.</li>
                    <li><strong><a href="/esop-management-and-compliance-services/">ESOP Management and Compliance</a></strong> - operational ESOP tracking and SH-6 register maintenance for the post-flip Indian parent.</li>
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
                
                <ul>
                    <li><strong>FEMA Overseas Investment Rules 2022</strong> - notified 22 August 2022; governs Indian residents holding foreign equity. <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a>.</li>
                    <li><strong>Rule 7, FEMA OI Rules 2022</strong> - OPI (Overseas Portfolio Investment) classification if up to 10 percent of foreign company equity individually.</li>
                    <li><strong>Rule 9, FEMA OI Rules 2022</strong> - ODI (Overseas Direct Investment) classification if above 10 percent threshold.</li>
                    <li><strong>Rule 13, FEMA OI Rules 2022</strong> - Annual Performance Report and Form FLA for ODI holdings.</li>
                    <li><strong>Master Direction on Liberalised Remittance Scheme (LRS)</strong> - USD 250,000 per FY per Indian resident individual.</li>
                    <li><strong>Section 5, FEMA 1999</strong> - permissible current account transactions including LRS remittances.</li>
                    <li><strong>Sections 230-232, Companies Act 2013</strong> - scheme of arrangement and compromise framework. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>.</li>
                    <li><strong>Section 234, Companies Act 2013</strong> - cross-border merger between Indian company and foreign company.</li>
                    <li><strong>NCLT Rules 2016 (Rule 3)</strong> - National Company Law Tribunal application for scheme approval.</li>
                    <li><strong>Section 47(vii), Income Tax Act 1961</strong> - capital gains exemption on transfer in scheme of amalgamation.</li>
                    <li><strong>Section 47(via), Income Tax Act 1961</strong> - foreign amalgamating company shares exempt subject to conditions.</li>
                    <li><strong>Section 47(vicc), Income Tax Act 1961</strong> - merger of foreign holding into Indian subsidiary.</li>
                    <li><strong>Section 47A, Income Tax Act 1961</strong> - withdrawal of Section 47 exemption on subsequent transfer.</li>
                    <li><strong>Section 49(2AA), Income Tax Act 1961</strong> - cost of acquisition for capital gains in scheme of arrangement (preserves original cost basis).</li>
                    <li><strong>Section 17(2)(vi), Income Tax Act 1961</strong> - perquisite tax at exercise; applies to post-flip ESOP exercises. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department of India</a>.</li>
                    <li><strong>Rule 11UA, Income Tax Rules 1962</strong> - FMV methodology for Indian parent share allotment post reverse flip.</li>
                    <li><strong>Section 92 read with Rule 10D, Income Tax Act 1961</strong> - transfer pricing on India subsidiary services billing.</li>
                    <li><strong>Section 80-IAC, Income Tax Act 1961</strong> - DPIIT plus IMB certified startup tax benefits; re-eligibility post reverse flip.</li>
                    <li><strong>Section 117(2), Companies Act 2013</strong> - MGT-14 filing for scheme of arrangement Special Resolution.</li>
                    <li><strong>US Internal Revenue Code Section 409A</strong> - parent stock FMV valuation methodology (US-side).</li>
                    <li><strong>US Internal Revenue Code Section 1202</strong> - QSBS (Qualified Small Business Stock) tax benefits (US-side; relevant during forward flip period).</li>
                </ul>

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
                    <p class="faq-expanded__lead">Quick answers on flip structures - what is forward flip, why companies reverse flip, mirror grant mechanics, FEMA OI Rules 2022, LRS limit, Section 47 capital gains exemption, NCLT process timeline and RSU vs ESOP.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a flip structure for Indian startups?</h3>
                        <div class="faq-expanded__a"><p>A flip structure is where an Indian-origin company has externalised its holding company to a foreign jurisdiction - typically Delaware C-Corp (most common for US VC-backed companies), Singapore Pte Ltd (Asian VC, APAC GTM) or Cayman Islands (funds, tax-neutral holdcos). The foreign entity becomes the parent; the original Indian operating company becomes a wholly-owned subsidiary providing engineering and customer support services. The Indian sub continues to employ Indian talent and bill the foreign parent on arm's-length transfer pricing under Section 92.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Why do Indian startups flip to Delaware, Singapore or Cayman?</h3>
                        <div class="faq-expanded__a"><p>Primary drivers are US VC funding alignment (Sequoia US, Tiger Global, Accel US prefer Delaware C-Corp), SAFE and convertible note instruments well-established under US law, US listing path (NASDAQ or NYSE) from Delaware parent, global GTM and US customer contracting, Section 1202 QSBS founder stock benefits for US-resident founders, and M and A optics for US strategic acquirers. The 2018-2022 wave saw widespread externalisation; the 2023-2026 wave has begun reversing toward Indian IPO listing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How are ESOPs issued from a Delaware parent to Indian employees?</h3>
                        <div class="faq-expanded__a"><p>Foreign parent (Delaware, Singapore or Cayman) issues options to Indian subsidiary employees as mirror grants. The instrument is foreign parent equity, governed by the foreign jurisdiction stock plan (typically a 2021 Incentive Plan for Delaware). Indian subsidiary acts as TDS deductor under Section 192(1) at exercise. FMV computed under Rule 3(8)(ii) on foreign parent stock converted to INR. FEMA OI Rules 2022 classify holdings as OPI (up to 10 percent of parent equity) or ODI (above). Section 92 transfer pricing recharge from parent to sub for ESOP cost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is reverse flip and which Indian startups have done it?</h3>
                        <div class="faq-expanded__a"><p>Reverse flip is migration of the foreign parent (Delaware, Singapore or Cayman) back to India via NCLT-approved scheme of arrangement under Sections 230-232 plus Section 234 Companies Act 2013. PhonePe completed reverse flip from Singapore to India in 2023; Groww completed Delaware to India in 2024 paying Rs 1,340 crore tax; Razorpay, Pixxel, Meesho and Eruditus are in progress or planning. Driven by Indian IPO market access, abolition of Section 56(2)(viib) angel tax, Section 80-IAC startup benefits and improved Indian regulatory framework.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the LRS limit for exercising foreign parent ESOPs?</h3>
                        <div class="faq-expanded__a"><p>USD 250,000 per FY per Indian resident individual under the Liberalised Remittance Scheme (Section 5 FEMA 1999). This applies to ESOP exercise consideration remitted by the Indian employee to the foreign parent. Senior employees with large exercises (CTO, VP roles holding 0.5 to 1.5 percent of Delaware C-Corp) can hit this cap. Cashless or net-settled exercises (broker sells portion of vested shares immediately to fund exercise price and tax) typically fall outside LRS scope and are the standard approach.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does reverse flip trigger capital gains tax for ESOP holders?</h3>
                        <div class="faq-expanded__a"><p>Properly structured reverse flips qualify for Section 47 capital gains exemption - Section 47(via) for foreign amalgamating company shares (e.g. Delaware parent shares cancelled), Section 47(vii) for share transfer in scheme of amalgamation, Section 47(vicc) for merger of foreign holding into Indian subsidiary. Conditions must be met (specified shareholding patterns, consideration in shares of Indian entity). Section 49(2AA) preserves original cost basis. If conditions not met, capital gains tax applies. Groww 2024 reverse flip involved Rs 1,340 crore tax due to specific shareholder positions; Patron planning minimises this.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long does reverse flip take and what is the process?</h3>
                        <div class="faq-expanded__a"><p>Reverse flip end-to-end typically 12 to 18 months. Process - Board decision and structure design (Months 18 to 15), foreign side approvals (Months 15 to 12), Section 47 tax memo and NCLT scheme drafting (Months 14 to 12), cross-border valuations including US 409A and Rule 11UA (Months 12 to 10), NCLT filing under Sections 230-232 plus Section 234 (Months 10 to 8), creditor objection window and First Motion (Months 8 to 6), Second Motion and Final NCLT order (Months 6 to 4), MCA filing, share allotment and ESOP migration (Months 4 to 2), foreign parent dissolution and Section 80-IAC re-eligibility (Months 2 to 0).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between RSU and ESOP from foreign parent?</h3>
                        <div class="faq-expanded__a"><p>RSU (Restricted Stock Unit) is a grant of shares vesting over time with NO exercise price - the employee gets the full FMV at vesting as perquisite under Section 17(2)(vi). Common at mature US MNCs (Microsoft, Adobe, Cisco). ESOP (Employee Stock Option Plan) has an EXERCISE PRICE the employee pays to convert vested options into shares - perquisite is FMV minus exercise price at exercise. Common at Delaware C-Corp startups. From an Indian tax perspective the mechanic is the same (perquisite at exercise or vesting, Schedule FA reporting, Form 67 DTAA) but the dollar quantum and timing differ.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Delaware flip ke baad reverse flip kaise karein? (How to reverse flip after Delaware flip)</h3>
                        <div class="faq-expanded__a"><p>Reverse flip 12-18 mahine ka NCLT process hota hai. Steps - Board approval karna, structure design karna (Delaware parent ko India NewCo mein merge), foreign side approvals lena, Section 47 tax memo banwana, US 409A aur Rule 11UA valuation refresh karna, NCLT mein Form NCLT-1 file karna under Sections 230-232 plus 234, creditor objection window (21 din), First Motion aur Second Motion hearings, Final NCLT order milne ke baad MCA filing, Indian parent shares allot karna, foreign parent ESOPs cancel karke Indian parent ESOPs reissue karna with original grant date preserved. Section 80-IAC re-eligibility check bhi karna padta hai. Groww ne 2024 mein Rs 1,340 crore tax pay kiya tha; proper planning se yeh kam ho sakta hai. Patron Rs 3-5 lakh charge karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Can Cayman holding company issue ESOPs to Indian employees?</strong> Yes. Same FEMA OI Rules 2022 mechanic; Cayman valuation generally less prescriptive than US 409A.</li>
                    <li><strong>Is reverse flip the only path to Indian IPO for flipped companies?</strong> Effectively yes. Indian markets cannot list foreign parent entities directly; reverse flip is required for BSE and NSE listing.</li>
                    <li><strong>Does Section 80-IAC apply to reverse-flipped entities?</strong> Yes if DPIIT eligibility criteria are met. Original incorporation date typically preserved for the 10-year clock if scheme is structured correctly.</li>
                    <li><strong>Are US 1202 QSBS benefits available to Indian-resident founders?</strong> No. QSBS requires US tax residence. Indian residents holding Delaware C-Corp founder stock cannot claim QSBS exemption.</li>
                    <li><strong>Can foreign parent ESOPs be transferred to Indian parent without employee consent?</strong> No. Explicit employee consent is required for ESOP migration via scheme of arrangement. Patron drafts the consent letter template.</li>
                    <li><strong>Does stamp duty apply on share allotment in reverse flip?</strong> Yes. Stamp duty applies as per state stamp duty rules on share certificates - a material cost item in the reverse flip budget.</li>
                    <li><strong>What is the typical share exchange ratio in reverse flip?</strong> 1:1 ratio is common where an Indian entity is incorporated specifically for the reverse flip; otherwise based on the SEBI Cat I Merchant Banker fairness opinion ratio.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Planning IPO via Reverse Flip - Lock the Section 47 Pathway Now</h2>
            <div class="content-text">
                
                Reverse flip is a 12 to 18 month NCLT process. Section 47 tax conditions must be locked at structure design - retrofitting after NCLT filing is not possible. Groww's 2024 reverse flip involved Rs 1,340 crore tax due to specific shareholder positions where Section 47 conditions could not be fully met. Patron's pre-filing tax memo identifies these positions early and structures the scheme to qualify. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free scoping conversation on your flip structure ESOP advisory.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for Forward or Reverse Flip ESOP Advisory</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Flip structure ESOPs are a multi-jurisdiction, multi-regulator and multi-disciplinary engagement. Forward flip requires mirror grant design under FEMA Overseas Investment Rules 2022, US 409A or jurisdiction-equivalent valuation, LRS limit management, transfer pricing recharge, Indian subsidiary TDS workflow and employee FEMA OI classification.</p>
                <p style="color:rgba(255,255,255,0.92);">Reverse flip - the dominant 2023-2026 use case driven by PhonePe (2023), Groww (2024), Razorpay, Pixxel and Meesho - adds the NCLT Section 230-232 scheme of arrangement, Section 47 tax structuring, cross-border valuation coordination and end-to-end ESOP migration. Patron Accounting LLP runs both engagements across CA, CS, valuation, FEMA and NCLT disciplines under one engagement, working alongside legal counsel, merchant banker and foreign jurisdiction advisors. The firm serves Indian-origin flip and reverse-flip companies across Pune, Mumbai, Delhi and Gurugram.</p>
                <p style="color:rgba(255,255,255,0.92);"><strong>Call +91 945 945 6700 or WhatsApp us</strong> for a free flip structure ESOP scoping call. Response within 4 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20quote%20for%20ESOP%20for%20Flip%20Structures." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pan-India Coverage for Flip Structure ESOP</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Flip structure ESOP advisory is delivered remotely from our Pune, Mumbai, Delhi and Gurugram offices to Indian-origin flip and reverse-flip companies across India. FEMA, NCLT and MCA filings are national - registered office location does not constrain the engagement.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related National Services</h3>
                <div class="pa-cross-grid">
                    <a href="/fdi-compliance/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>FDI Compliance</strong><span>FEMA NDI + OI Rules; FC-GPR</span></div>
                    </a>
                    <a href="/startup-registration/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Startup Registration</strong><span>DPIIT + IMB 80-IAC re-eligibility</span></div>
                    </a>
                    <a href="/esop-accounting-ind-as-102/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Accounting under Ind AS 102</strong><span>Group SBP for foreign parent</span></div>
                    </a>
                    <a href="/esop-corporate-filings/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP Corporate Filings</strong><span>MGT-14, PAS-3, MGT-7, SH-6 retainer</span></div>
                    </a>
                    <a href="/esop-for-deeptech-aiml/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for Deeptech and AI/ML</strong><span>Sister vertical - deeptech founders</span></div>
                    </a>
                    <a href="/esop-for-fintech/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ESOP for Fintech Companies</strong><span>Sister vertical - foreign-parent fintech</span></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 1 half-yearly review. Triggers for review: FEMA OI Rules 2022 amendments, RBI LRS limit changes, NCLT procedural amendments under Sections 230-232 and 234, Section 47 jurisprudence developments, US 409A regulation updates, Income Tax Act 2025 transitional rules for Section 47. Sources: RBI circulars, MCA21 notifications, CBDT, NCLT orders and US IRS guidance.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>
<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
     function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered  -  init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        var phoneVal = phoneInput.value.trim();
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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