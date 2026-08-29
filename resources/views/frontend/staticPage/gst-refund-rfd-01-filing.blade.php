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
    <title>GST RFD-01 Filing — Step-by-Step Across 8 Categories</title>
    <meta name="description" content="Step-by-step GST Form RFD-01 filing across 8 refund categories. Statements 1A to 7 mapping. Pre-application form. CA-led portal walkthrough. Rs 6,000+.">
    <link rel="canonical" href="/gst-refund-rfd-01-filing">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST RFD-01 Filing — Step-by-Step Across 8 Categories">
    <meta property="og:description" content="Step-by-step GST Form RFD-01 filing across 8 refund categories. Statements 1A to 7 mapping. Pre-application form. CA-led portal walkthrough. Rs 6,000+.">
    <meta property="og:url" content="/gst-refund-rfd-01-filing/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST RFD-01 Filing — Step-by-Step Across 8 Categories">
    <meta name="twitter:description" content="Step-by-step GST Form RFD-01 filing across 8 refund categories. Statements 1A to 7 mapping. Pre-application form. CA-led portal walkthrough. Rs 6,000+.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/gst-refund-rfd-01-filing/#breadcrumb",
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
          "name": "GST Refund",
          "item": "https://www.patronaccounting.com/gst-refund/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "RFD-01 Filing",
          "item": "https://www.patronaccounting.com/gst-refund-rfd-01-filing/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/gst-refund-rfd-01-filing/#faq",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Form GST RFD-01 and who can file it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-01 is the prescribed online refund application form under Rule 89(1) of CGST Rules 2017 for any GST refund claim. It covers all 8 refund categories under Section 54 of the CGST Act 2017. Eligible filers include any GST-registered taxpayer (regular, composition scheme, casual, NRTP), unregistered persons in specific scenarios, and applicants via TRN where GSTIN was not granted. The form is filed at gst.gov.in under Services > Refunds > Application for Refund using DSC (companies and LLPs) or EVC (individuals and proprietorships)."
          }
        },
        {
          "@type": "Question",
          "name": "Which Statement do I use for each refund category?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statement 1 and 1A for inverted duty structure (Rule 89(5) and 89(2)(h)). Statement 2 for service exports with IGST (Rule 89(2)(c)). Statement 3, 3A, 3B for goods/service exports under LUT or with payment (Rule 89(2)(b) and (c), 89(4)). Statement 4 for SEZ supplies WITH payment, Statement 5 and 5A for SEZ supplies WITHOUT payment (Rule 89(2)(d), (e), 89(4)). Statement 5B for deemed exports (Rule 89(2)(g)). Statement 6 for wrong tax head (Rule 89(2)(j)). Statement 7 for excess cash ledger (Rule 89(2)(k))."
          }
        },
        {
          "@type": "Question",
          "name": "RFD-01 kaise file karte hain - kya documents lagte hain? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST portal (gst.gov.in) par login karke Services > Refunds > Application for Refund par jaayein. Pehle Pre-Application Form (PAF) bharein - bank validation, Aadhaar authentication, GSTR-3B latest filed status check. Phir refund category select karein (8 categories me se ek). Annexure-1 me Statement (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, ya 7) bharein based on category. Annexure-2 me CA Certificate (above Rs 2 lakh) ya self-declaration (below Rs 2 lakh). Documents upload karein (max 10 PDFs, 5 MB each). DSC ya EVC se submit karke ARN generate karein. RFD-02 acknowledgement 15 din me milega."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Pre-Application Form (PAF) under RFD-01?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Pre-Application Form (PAF) is a short verification form opening before the main RFD-01 - captures bank account validation against PFMS, GSTIN active status, Aadhaar authentication of all promoters and authorised signatories, Notification 14/2025-CT eligible class check, latest GSTR-3B filing verification, and refund period selection. Until PAF clears, the substantive RFD-01 form does not open. PAF is the first procedural gate for RFD-01 filing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Annexure-1 and Annexure-2?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Annexure-1 contains the 11 Statements (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, 7) - one or more applies depending on refund category. The Statement provides invoice-level or aggregate data substantiating the refund claim. Annexure-2 is the Chartered Accountant or Cost Accountant Certificate certifying that tax incidence has not been passed on - mandatory for refunds above Rs 2 lakh under Section 54(8) and Rule 89(2)(m). Below Rs 2 lakh, self-declaration under Rule 89(2)(l) suffices."
          }
        },
        {
          "@type": "Question",
          "name": "Is a CA Certificate mandatory for every RFD-01?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. CA Certificate (Annexure-2) is mandatory only for refunds above Rs 2 lakh under Section 54(8) and Rule 89(2)(m). It is NOT required for refunds covered under Section 54(8)(a)/(b)/(c)/(d)/(f) - including zero-rated supplies, accumulated ITC under Section 54(3), and refunds where unjust enrichment doctrine does not apply. For refunds below Rs 2 lakh, self-declaration under Rule 89(2)(l) is sufficient. CGST Circular 166/22/2021-GST clarified that CA Certificate is not required for excess cash ledger refund regardless of amount."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file RFD-01 for multiple tax periods together?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Multiple tax periods within one financial year can be combined in a single RFD-01. Cross-financial-year refunds need separate RFD-01s. The 2-year limitation under Section 54(1) applies separately for each tax period - earliest period determines the cut-off. Patron typically combines quarterly periods for exporters and IDS manufacturers to optimise documentation effort."
          }
        },
        {
          "@type": "Question",
          "name": "How long does ARN generation take after RFD-01 submission?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ARN (Application Reference Number) is generated immediately on successful RFD-01 submission via DSC or EVC. The ARN appears on screen and is sent to the registered email and mobile via SMS. The proper officer issues RFD-02 acknowledgement within 15 days under Rule 90(2). The 7-day clock for 90 percent provisional refund (post 01.10.2025 risk-based path) and the 60-day clock for final sanction under Section 54(7) start from RFD-02 date, not ARN date."
          }
        },
        {
          "@type": "Question",
          "name": "What is RFD-01W and when do I use it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-01W is the withdrawal application for a filed RFD-01. Used when applicant realises errors after submission (wrong amount, wrong head, wrong bank account, wrong category) or wants to abandon the claim. On withdrawal, the amount debited from Electronic Cash Ledger or Credit Ledger on RFD-01 filing is auto-credited back. Applicant can then file fresh RFD-01 with corrections. RFD-01W must be filed before RFD-06 sanction is issued."
          }
        },
        {
          "@type": "Question",
          "name": "Wrong Statement file ho gaya - kya re-file kar sakte hain? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Haan. Wrong Statement file karne par typically Department RFD-03 deficiency memo bhejta hai. Iske baad fresh RFD-01 file karna padta hai with correct Statement - original ARN void ho jata hai aur new ARN generate hota hai. Alternatively, agar applicant ko submission ke turant baad pata chal jaye, RFD-01W (withdrawal) file karke debit amount ECL me wapas le sakte hain, phir fresh RFD-01 file karein. Important - RFD-01W RFD-06 final sanction se pehle hi file kar sakte hain. Patron ki 11-Statement matrix discipline pehle hi sahi Statement select kar leti hai - 70 percent preventable RFD-03 memos avoid hote hain."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/gst-refund-rfd-01-filing/#service",
      "name": "GST RFD-01 Filing Step-by-Step (All 8 Refund Categories)",
      "description": "Patron Accounting LLP files Form GST RFD-01 under Rule 89(1) of CGST Rules 2017 across all 8 refund categories under Section 54 of CGST Act 2017. Services include Pre-Application Form pre-audit, correct Statement selection from the 11-Statement matrix (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, 7), Annexure-1 Excel template preparation, in-house Annexure-2 CA Certificate above Rs 2 lakh, document upload optimisation, DSC or EVC submission, ARN tracking, RFD-02 acknowledgement coordination, and RFD-03 deficiency memo response.",
      "serviceType": "GST Refund Filing Service",
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "areaServed": "India"
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
.toc-pill {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
.toc-pill:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
.toc-pill.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
.toc-pill.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
/* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
<main>

<!-- BREADCRUMB -->
<div role="navigation" aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="/gst-refund/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">GST Refund</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">RFD-01 Filing Services</span></li>
        </ol>
    </div>
</div>

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
                        GST RFD-01 Filing - Step-by-Step Guide Across 8 Refund Categories
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team · Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Latest GSTR-1 and GSTR-3B, refund-category-specific Statement, invoice list, declarations, bank validation, Aadhaar auth.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 6,000 per RFD-01 filing plus 18 percent GST; success fee 0.5 to 2 percent for contested or aged claims.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any GST-registered taxpayer plus casual taxpayer plus NRTP plus unregistered person (specific refund types) with valid GSTIN or TRN.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> ARN generated immediately on submission; RFD-02 acknowledgement within 15 days under Rule 90(2).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20GST%20Form%20RFD-01.%20Please%20share%20a%20free%20readiness%20check." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - RFD-01 Filing',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'gst-refund-rfd-01-filing', 'label' => 'GST RFD-01 Filing', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-refund', 'label' => 'GST Refund (General)', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-returns', 'label' => 'GST Returns Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-annual-returns', 'label' => 'GST Annual Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-audit', 'label' => 'GST Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'iec-registration', 'label' => 'IEC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gstat-appeal-exporters', 'label' => 'GSTAT Appeal for Exporters', 'selected' => false, 'disabled' => false],
                            ['value' => 'other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron fixed our failed RFD-01 filing in February 2026. We had filed under Statement 2 but should have been Statement 3A (LUT route). Patron prepared correct Statement, fresh CA Certificate in prescribed format, consolidated documents to 9 PDFs. Fresh RFD-01 approved with RFD-04 in 6 days - Rs 22 lakh credited within 25 days.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KR</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Karthik Raman</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CTO, Bengaluru SaaS Exporter</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our PAF kept failing on bank validation - IFSC change after bank merger. Patron filed Amendment of Registration, waited for PFMS revalidation, and re-attempted PAF cleanly in 5 days. Without their guidance we would have spent weeks figuring out the actual problem versus assuming portal error.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PV</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Pooja Venkat</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Chennai Engineering Exporter</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Multi-quarter RFD-01 was a nightmare with our 200+ invoices per quarter. Patron consolidated all into 9 PDFs with internal bookmarks, prepared Statement 3A with proper aggregation, and got us through under the 10-document portal limit cleanly. RFD-04 in 7 days, no deficiency memos.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Deepak Kumar</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, Pune IT Services</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">RFD-03 deficiency memo arrived 12 days after we filed. Department flagged Annexure-2 CA Certificate format and one missing FIRC. Patron diagnosed both issues in 24 hours, filed fresh RFD-01 with corrections within 7 days. Recovered everything cleanly without escalation.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Shilpa Modi</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Mumbai Pharma Exporter</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
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
                    <p>From pharma, IT services, engineering, textile, and chemical exporters to SEZ suppliers and IDS manufacturers - we file RFD-01 across all 8 refund categories for 200+ Indian businesses with above-90 percent first-time approval rate.</p>
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
                        <a href="#overview-section" class="toc-pill">Overview</a>
            <a href="#what-section" class="toc-pill">What Is RFD-01</a>
            <a href="#who-section" class="toc-pill">Statement Matrix</a>
            <a href="#services-section" class="toc-pill">Our Services</a>
            <a href="#procedure-section" class="toc-pill">8-Step Walkthrough</a>
            <a href="#documents-section" class="toc-pill">Documents</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Benefits</a>
            <a href="#comparison-section" class="toc-pill">RFD-01 vs Others</a>
            <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - RFD-01 Filing Services at a Glance</strong></p>
                    <p>Form GST RFD-01 is the single online refund application form prescribed under Rule 89(1) of CGST Rules 2017. It covers all 8 refund categories under Section 54 of the CGST Act 2017 - exports with IGST, exports under LUT, SEZ supplies, inverted duty structure, deemed exports, excess cash ledger, wrong tax head, and others. Annexure-1 contains 11 Statements mapped to specific refund categories. Annexure-2 is the CA Certificate required for refunds above Rs 2 lakh under Section 54(8).</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Governing Provision</strong></td><td>Section 54(1) of CGST Act 2017 read with Rule 89(1) of CGST Rules 2017</td></tr>
                            <tr><td><strong>Form Number</strong></td><td>Form GST RFD-01 (online); RFD-01A obsolete since portal enabled</td></tr>
                            <tr><td><strong>Coverage</strong></td><td>All 8 refund categories under Section 54 - single unified form</td></tr>
                            <tr><td><strong>Annexure-1</strong></td><td>11 Statements (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, 7) - one per refund category</td></tr>
                            <tr><td><strong>Annexure-2</strong></td><td>CA or Cost Accountant Certificate of unjust enrichment (mandatory above Rs 2 lakh)</td></tr>
                            <tr><td><strong>Submission</strong></td><td>DSC or EVC (Aadhaar OTP); Aadhaar authentication mandatory</td></tr>
                            <tr><td><strong>Output</strong></td><td>ARN generated immediately; RFD-02 acknowledgement within 15 days</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>Form GST RFD-01 is the single online refund application form prescribed under Rule 89(1) of the CGST Rules 2017 for all GST refund claims. The form was substituted vide Notification 56/2019-Central Tax dated 14.11.2019 with the modern Statement architecture. It replaces the obsolete RFD-01A offline form. The form is available at <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> under Services > Refunds > Application for Refund and is filed by login via GSTIN or - for casual taxable persons and non-resident taxable persons without GSTIN - via Temporary Reference Number (TRN).</p>
                <p>The structural architecture of RFD-01 is - (a) Basic Form (Sl. No. 1-10) capturing GSTIN, legal name, trade name, address, tax period, refund amount break-up by tax head, ground of refund, bank account, declaration on Annexure-1, and verification; (b) Annexure-1 with 11 Statements mapped to specific refund categories under Rule 89(2)(b) through Rule 89(2)(m); and (c) Annexure-2 for CA Certificate above Rs 2 lakh. The Pre-Application Form (PAF) opens before the main RFD-01 to validate bank account, GSTIN status, and eligibility. From May 2025, the portal auto-populates select fields from filed GSTR-1 and GSTR-3B - the invoice-based system enhancement that reduced manual entry errors. Patron Accounting LLP files RFD-01 across all 8 refund categories for 200+ businesses with first-time approval rate above 90 percent.</p>
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
                <h2 class="section-title">What Is Form GST RFD-01?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Form GST RFD-01 is the prescribed application form under <strong>Rule 89(1) of the CGST Rules 2017</strong> for any registered or unregistered person seeking a refund of GST. The form is filed electronically at the GST Common Portal and covers all 8 refund categories under Section 54 of the CGST Act 2017. Unlike pre-GST regimes that had multiple refund forms for different categories, GST consolidated the entire refund landscape into a single unified RFD-01 with refund-category-specific Annexure-1 Statements.</p>
                    <p>The form's modern architecture was set by <strong>Notification 56/2019-Central Tax dated 14 November 2019</strong> - which introduced Statement 1A (inverted duty) and refined the existing Statement structure. Subsequent notifications - 33/2019-CT, 12/2024-CT (upward price revision case), and 13/2025-CT (Rule 91(2) amendment) - have layered procedural enhancements without disturbing the core form architecture. The form is filed under DSC for companies and LLPs or EVC via Aadhaar OTP for individuals and proprietorships.</p>
                    <p><strong>Eight refund categories covered by RFD-01:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                    <table>
                        <thead><tr><th>Category</th><th>Statutory Basis</th><th>Statement(s)</th></tr></thead>
                        <tbody>
                            <tr><td><strong>1. Exports with payment of IGST</strong></td><td>Section 16 IGST Act 2017</td><td>Auto-route via shipping bill (goods); Statement 2 (services)</td></tr>
                            <tr><td><strong>2. Exports without payment (LUT)</strong></td><td>Section 16 IGST + Rule 96A</td><td>Statement 3 (goods); Statement 3A (services)</td></tr>
                            <tr><td><strong>3. SEZ supplies with payment</strong></td><td>Section 16(1)(b) IGST + Rule 89(2)(d)</td><td>Statement 4</td></tr>
                            <tr><td><strong>4. SEZ supplies without payment (LUT)</strong></td><td>Section 16(1)(b) + Rule 89(2)(e)</td><td>Statement 5 + 5A</td></tr>
                            <tr><td><strong>5. Inverted duty structure</strong></td><td>Section 54(3)(ii) + Rule 89(5)</td><td>Statement 1 + 1A</td></tr>
                            <tr><td><strong>6. Deemed exports</strong></td><td>Section 147 + Notification 48/2017-CT</td><td>Statement 5B</td></tr>
                            <tr><td><strong>7. Excess balance in ECL</strong></td><td>Section 49(6) + Rule 89(1)</td><td>Statement 7</td></tr>
                            <tr><td><strong>8. Wrong tax head</strong></td><td>Section 77 CGST + Section 19 IGST + Rule 89(1A)</td><td>Statement 6</td></tr>
                        </tbody>
                    </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for RFD-01 Filing:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>Form GST RFD-01:</strong> Online refund application form under Rule 89(1) CGST Rules 2017 - covers all 8 refund categories.</li>
                        <li><strong>Form GST RFD-01A:</strong> Obsolete offline form - replaced by online RFD-01 since portal enablement.</li>
                        <li><strong>Pre-Application Form (PAF):</strong> Short verification form opening before main RFD-01 - captures bank details, validates GSTIN status and eligibility.</li>
                        <li><strong>Annexure-1:</strong> Section of RFD-01 containing 11 Statements mapped to specific refund categories under Rule 89(2).</li>
                        <li><strong>Annexure-2:</strong> CA or Cost Accountant Certificate certifying tax incidence not passed on - mandatory above Rs 2 lakh under Section 54(8).</li>
                        <li><strong>Statement 1 [Rule 89(5)]:</strong> ITC accumulated due to inverted tax structure - max refund formula computation.</li>
                        <li><strong>Statement 1A [Rule 89(2)(h)]:</strong> Inverted duty - inward and outward supply details with HSN.</li>
                        <li><strong>Statement 2 [Rule 89(2)(c)]:</strong> Service exports with payment of IGST - FIRC/BRC details.</li>
                        <li><strong>Statement 3 / 3A / 3B:</strong> Export of goods/services under LUT or with payment - shipping bill or FIRC details.</li>
                        <li><strong>Statement 4 / 5 / 5A:</strong> SEZ supplies with or without payment of IGST.</li>
                        <li><strong>Statement 5B [Rule 89(2)(g)]:</strong> Deemed exports under Notification 48/2017-CT categories.</li>
                        <li><strong>Statement 6 / 7:</strong> Wrong tax head correction; excess balance in Electronic Cash Ledger refund.</li>
                        <li><strong>ARN:</strong> Application Reference Number - generated immediately on RFD-01 submission; used to track refund status.</li>
                        <li><strong>Form GST RFD-01W:</strong> Withdrawal of filed refund application - debited amount auto-credited back to ECL.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RFD-01 Filing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Form RFD-01</span>
                        <strong>Rule 89(1) + 11 Statements</strong>
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
            <h2 class="section-title">Complete Statement-to-Refund-Category Matrix</h2>
            <div class="content-text">
                
                <p>The single most important diagnostic in RFD-01 filing is correct Statement selection. Wrong Statement triggers RFD-03 deficiency memo and restarts the timeline. Patron's matrix below is the master reference.</p>
                <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                <table>
                    <thead><tr><th>Statement</th><th>Refund Category</th><th>Rule Reference</th><th>Typical Use</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Statement 1</strong></td><td>Inverted duty structure - max refund formula</td><td>Rule 89(5) + Section 54(3)(ii)</td><td>Textile, footwear, fertilizer, pharma, EV manufacturers</td></tr>
                        <tr><td><strong>Statement 1A</strong></td><td>Inverted duty - inward/outward supply with HSN</td><td>Rule 89(2)(h) - Notification 56/2019-CT</td><td>Companion to Statement 1</td></tr>
                        <tr><td><strong>Statement 2</strong></td><td>Service export with payment of IGST</td><td>Rule 89(2)(c)</td><td>IT services, SaaS, consulting, BPO/KPO exporters</td></tr>
                        <tr><td><strong>Statement 3</strong></td><td>Export of goods/services without payment (LUT)</td><td>Rule 89(2)(b) and (c)</td><td>Goods or service exporters under LUT</td></tr>
                        <tr><td><strong>Statement 3A</strong></td><td>Export with payment - shipping bill mapping</td><td>Rule 89(4)</td><td>Goods or service exporters with IGST</td></tr>
                        <tr><td><strong>Statement 3B</strong></td><td>Aggregate export details across invoices</td><td>Rule 89(2)(b) and (c)</td><td>Multi-period or high-volume exporters</td></tr>
                        <tr><td><strong>Statement 4</strong></td><td>SEZ supplies WITH payment of IGST</td><td>Rule 89(2)(d) and (e)</td><td>DTA suppliers feeding SEZ on IGST-paid route</td></tr>
                        <tr><td><strong>Statement 5</strong></td><td>SEZ supplies WITHOUT payment (LUT)</td><td>Rule 89(2)(d) and (e)</td><td>DTA suppliers feeding SEZ on LUT route</td></tr>
                        <tr><td><strong>Statement 5A</strong></td><td>SEZ supply turnover and Net ITC computation</td><td>Rule 89(4)</td><td>Companion to Statement 5</td></tr>
                        <tr><td><strong>Statement 5B</strong></td><td>Deemed exports</td><td>Rule 89(2)(g) + Notification 48/2017-CT</td><td>AA, EPCG, EOU/EHTP/STP/BTP units</td></tr>
                        <tr><td><strong>Statement 6</strong></td><td>Wrong tax head - intra-state held inter-state or vice versa</td><td>Rule 89(2)(j) + Rule 89(1A)</td><td>Intermediaries, businesses with Place of Supply errors</td></tr>
                        <tr><td><strong>Statement 7</strong></td><td>Excess balance in Electronic Cash Ledger</td><td>Rule 89(2)(k) + Section 49(6)</td><td>All taxpayers with surplus ECL - auto-populated</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Pre-Application Form (PAF) workflow:</strong> Before the main RFD-01 opens, the GST portal presents a Pre-Application Form - a short verification form that validates 6 gates: bank account against PFMS, GSTIN active status, Aadhaar authentication for all promoters and authorised signatories, Notification 14/2025-CT eligible class check, latest GSTR-3B filing verification, and refund period selection. Until PAF clears, the substantive Statement filing cannot begin.</p>
                <p>If you are a new applicant who has not yet registered under GST, complete <a href="/gst-registration/">GST registration</a> first. For exporters of physical goods, <a href="/iec-registration/">IEC registration</a> is a separate mandatory requirement under Foreign Trade Policy.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for RFD-01 Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Refund Category Identification + Statement Selection</strong></td><td>Free 30-minute review to identify precise category among the 8 and exact Statement from the 11-Statement matrix. Wrong Statement is the #1 RFD-03 trigger. <span class="badge-included">Free</span></td></tr>
                        <tr><td><strong>Pre-Application Form (PAF) Pre-Audit</strong></td><td>All 6 PAF gates audited before RFD-01 attempt - bank validation, GSTIN active status, Aadhaar authentication, Notification 14/2025-CT class check, latest GSTR-3B filing, period selection. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Annexure-1 Statement Preparation</strong></td><td>All 11 Statements prepared in prescribed Excel template - invoice-by-invoice listing for Statement 2/3/3A/3B/4/5/5A/5B; aggregate computation for Statement 1/1A/5A; head-wise allocation for Statement 6/7. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Annexure-2 CA Certificate Drafting (Above Rs 2 Lakh)</strong></td><td>In-house Chartered Accountants issue Annexure-2 certificate in prescribed format - confirming tax incidence not passed on, based on examination of books and returns. <span class="badge-included">Included if applicable</span></td></tr>
                        <tr><td><strong>Document Upload Optimisation (10-doc / 5 MB limit)</strong></td><td>Consolidate supporting documents into max 10 PDFs with internal page bookmarks for officer navigation. Compression without quality loss. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>DSC/EVC Submission + ARN Tracking</strong></td><td>Final submission via DSC (companies/LLPs) or EVC (individuals). ARN captured immediately. RFD-02 tracked daily for 15-day window. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>RFD-03 Deficiency Memo Response</strong></td><td>Diagnosis, fresh RFD-01 with correct Statement, document remediation within 7-day Patron cycle. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>RFD-08 SCN Defence + Section 107 Appeal</strong></td><td>Drafting reply within 15 days via RFD-09; hearing representation; Section 107 appeal if denial persists with pre-deposit calculation. <span class="badge-addon">Add-on</span></td></tr>

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
            <h2 class="section-title">8-Step Portal Walkthrough</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's Form RFD-01 filing pipeline runs the eight sequential steps below. Each step cites the relevant Act, Section, Rule, Form, or Notification.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Login to GST Portal + Pre-Filing Reconciliation</h3>
                    <p class="step-description">Login at gst.gov.in with GSTIN/TRN, Username, Password, Captcha. Reconcile last 12 months GSTR-1 (Tables 6A, 6B, 6C) with GSTR-3B (Table 3.1(a) outward taxable, 3.1(b) zero-rated, 3.1(c) other exempt). Confirm latest GSTR-3B filed.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1/3B reconciliation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Latest GSTR-3B confirmed</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="14" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="25" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="30" y="38" width="60" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1" opacity="0.6"/><text x="60" y="45" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">GSTIN/TRN</text><rect x="30" y="52" width="60" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1" opacity="0.6"/><text x="60" y="59" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR Reconcile</text><rect x="38" y="68" width="44" height="12" rx="3" fill="#E8712C"/><text x="60" y="77" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">LOGIN</text></svg></div>
                        <span class="illustration-label">Portal Open</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Pre-Application Form (PAF) Completion</h3>
                    <p class="step-description">Navigate to Services > User Services > Refunds > Pre-Application Form. Complete bank validation, GSTIN status check, Aadhaar authentication confirmation, Notification 14/2025-CT eligible class check, latest GSTR-3B filing verification, and period selection.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>6 PAF gates audited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank + Aadhaar + Notif 14/2025-CT</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PAF - 6 Gates</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><circle cx="32" cy="44" r="2.5" fill="#25D366"/><text x="38" y="46" font-size="6" fill="#14365F" font-family="Arial">Bank PFMS</text><circle cx="32" cy="54" r="2.5" fill="#25D366"/><text x="38" y="56" font-size="6" fill="#14365F" font-family="Arial">GSTIN Active</text><circle cx="32" cy="64" r="2.5" fill="#25D366"/><text x="38" y="66" font-size="6" fill="#14365F" font-family="Arial">Aadhaar Auth</text><circle cx="32" cy="74" r="2.5" fill="#25D366"/><text x="38" y="76" font-size="6" fill="#14365F" font-family="Arial">GSTR-3B Latest</text></svg></div>
                        <span class="illustration-label">PAF Cleared</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Refund Category Selection</h3>
                    <p class="step-description">After PAF clears, navigate Services > Refunds > Application for Refund. Select the refund category from drop-down - one of the 8 categories. The selection determines which Statement(s) are required in Annexure-1.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1 of 8 categories</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Drives Statement selection</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="60" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Select Category</text><rect x="30" y="46" width="60" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="55" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">1 of 8</text><path d="M85 53l4 4-4 4" stroke="#F5A623" stroke-width="1.5" fill="none"/><text x="60" y="74" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Drop-down</text></svg></div>
                        <span class="illustration-label">Category Set</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Annexure-1 Statement Preparation</h3>
                    <p class="step-description">Download the Excel template from portal for the selected Statement (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, or 7). Populate with invoice details, Net ITC computation, turnover, or auto-populated ECL balance as applicable. Save and upload as JSON or Excel.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>11-Statement matrix discipline</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Excel template upload</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Statement</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><rect x="28" y="42" width="20" height="6" rx="1" fill="#FFF3E0"/><text x="38" y="47" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Inv</text><rect x="52" y="42" width="20" height="6" rx="1" fill="#FFF3E0"/><text x="62" y="47" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">HSN</text><rect x="76" y="42" width="20" height="6" rx="1" fill="#FFF3E0"/><text x="86" y="47" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Val</text><rect x="28" y="52" width="64" height="6" rx="1" fill="#F0F4F8"/><rect x="28" y="62" width="50" height="6" rx="1" fill="#F0F4F8"/><rect x="28" y="72" width="40" height="6" rx="1" fill="#F0F4F8"/></svg></div>
                        <span class="illustration-label">Statement Ready</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Form RFD-01 Basic Form Completion</h3>
                    <p class="step-description">Sl. No. 1-5 auto-populated from registration. Sl. No. 6 - refund amount break-up by tax head (IGST, CGST, SGST, Cess) and sub-head (Tax, Interest, Penalty, Fee). Sl. No. 7 - ground of refund from drop-down. Sl. No. 8-10 - bank account, declaration on Annexure-1, verification.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10-field basic form</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax head break-up</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01 Basic</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><text x="32" y="45" font-size="5" fill="#14365F" font-family="Arial">1-5: Auto</text><text x="32" y="55" font-size="5" fill="#14365F" font-family="Arial">6: Tax head</text><text x="32" y="65" font-size="5" fill="#14365F" font-family="Arial">7: Ground</text><text x="32" y="75" font-size="5" fill="#14365F" font-family="Arial">8-10: Bank</text></svg></div>
                        <span class="illustration-label">Form Filled</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Annexure-2 CA Certificate (If Above Rs 2 Lakh)</h3>
                    <p class="step-description">For refunds above Rs 2 lakh under Section 54(8), Annexure-2 Chartered Accountant or Cost Accountant Certificate uploaded - certifying tax incidence has not been passed on, based on examination of books and returns. For refunds below Rs 2 lakh, self-declaration under Rule 89(2)(l) is sufficient.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 54(8) compliance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Prescribed format</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="32" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Annexure-2</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CA Certificate</text><line x1="28" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.4"/><text x="60" y="63" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Above Rs 2L</text><text x="60" y="75" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Section 54(8)</text></svg></div>
                        <span class="illustration-label">CA Cert Ready</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Document Upload (Max 10 Documents, 5 MB Each)</h3>
                    <p class="step-description">Upload supporting documents - invoices, shipping bills, FIRCs/BRCs, LUT reference, Specified Officer endorsement, AA/EPCG/LOP copy, declarations, computation sheets, bank statements. Consolidate into PDFs with internal bookmarks for officer navigation.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Max 10 PDFs / 5 MB each</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Internal bookmarks</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="60" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><polyline points="60,32 50,42 56,42 56,55 64,55 64,42 70,42" fill="#E8712C" stroke="#E8712C" stroke-width="1.5"/><line x1="48" y1="60" x2="72" y2="60" stroke="#E8712C" stroke-width="2"/><text x="60" y="76" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Max 10 PDFs / 5 MB</text></svg></div>
                        <span class="illustration-label">Documents Uploaded</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Submission via DSC or EVC and ARN Generation</h3>
                    <p class="step-description">DSC (Digital Signature Certificate) for companies and LLPs; EVC (Aadhaar OTP) for individuals and proprietorships. On submission, ARN generated immediately and displayed on screen plus emailed to registered email and SMS to registered mobile. RFD-02 acknowledgement issued by proper officer within 15 days under Rule 90(2).</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Immediate ARN generation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-02 in 15 days</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="25" width="90" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ARN Generated</text><rect x="25" y="50" width="70" height="14" rx="3" fill="#FFF" stroke="#25D366" stroke-width="1"/><text x="60" y="60" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AAxxxxxxxxxxxxxx</text><text x="60" y="92" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-02 in 15 Days</text></svg></div>
                        <span class="illustration-label">ARN Captured</span>
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
            <h2 class="section-title">Document Checklist for RFD-01 Filing</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before filing each RFD-01 cycle. Patron Accounting maintains a digital document vault per client.</p>
                <p><strong>Universal pre-conditions (all categories):</strong></p>
                <ul>
                    <li>Latest GSTR-3B filed for refund period.</li>
                    <li>GSTR-1 filed and reconciled with GSTR-3B.</li>
                    <li>Aadhaar authenticated for all promoters and authorised signatories.</li>
                    <li>Bank account validated and PFMS-linked.</li>
                    <li>GSTR-2B and GSTR-3B Net ITC reconciled within tolerance (Rule 36(4)).</li>
                    <li>Not in Notification 14/2025-CT ineligible class for provisional refund.</li>
                    <li>DSC valid and registered (companies and LLPs) OR Aadhaar OTP working (others).</li>
                </ul>
                <p><strong>Annexure-1 Statement documents (category-specific):</strong></p>
                <ul>
                    <li><strong>Statement 1 / 1A:</strong> Inverted duty - Net ITC computation; GSTIN-wise inward and outward supply with HSN.</li>
                    <li><strong>Statement 2:</strong> Service exports with IGST - FIRC/BRC, invoice list, IGST payment evidence.</li>
                    <li><strong>Statement 3 / 3A / 3B:</strong> Goods/service exports under LUT or with payment - shipping bills, FIRCs, LUT reference.</li>
                    <li><strong>Statement 4:</strong> SEZ with IGST - tax invoice, Specified Officer endorsement, payment evidence.</li>
                    <li><strong>Statement 5 / 5A:</strong> SEZ without IGST (LUT) - LUT reference, endorsement, Rule 89(2)(f) declaration.</li>
                    <li><strong>Statement 5B:</strong> Deemed exports - AA/EPCG/LOP, Form A intimation (EOU), Notification 49/2017-CT evidence.</li>
                    <li><strong>Statement 6:</strong> Wrong tax head - original wrong payment evidence, DRC-03 of correct tax discharge.</li>
                    <li><strong>Statement 7:</strong> Excess Cash Ledger - auto-populated; no manual Statement template required.</li>
                </ul>
                <p><strong>Annexure-2 CA Certificate (above Rs 2 lakh):</strong></p>
                <ul>
                    <li>Chartered Accountant or Cost Accountant Certificate confirming tax incidence not passed.</li>
                    <li>Based on examination of books of account, returns, and other relevant records.</li>
                    <li>Format prescribed in Annexure-2 of RFD-01.</li>
                    <li>NOT required for refunds under Section 54(8)(a)/(b)/(c)/(d)/(f) - including excess cash ledger and SEZ supplies.</li>
                </ul>
                <p><strong>Self-declarations (all categories):</strong> Rule 89(2)(l) non-prosecution declaration; Rule 89(2)(m) tax-incidence-not-passed self-declaration (if below Rs 2 lakh); refund-category-specific declarations (e.g., Rule 89(2)(f) for SEZ).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Wrong Statement Selected - RFD-03 Deficiency Memo</strong></td><td>Single most common rejection trigger - applicant chooses Statement 2 for goods exports (should be Statement 3) or Statement 4 for SEZ LUT (should be Statement 5). Patron's 11-Statement matrix discipline prevents this. Where deficiency memo issued, fresh RFD-01 with correct Statement filed.</td></tr>
                        <tr><td><strong>Pre-Application Form (PAF) Fails on Bank Validation</strong></td><td>PAF flags bank account as invalid or PFMS-mismatch. Common causes - IFSC code change, account name mismatch with GSTIN registered name, closed account. Patron files Amendment of Registration (Non-Core) under Rule 19, waits for PFMS revalidation (3 to 7 days), and re-attempts PAF.</td></tr>
                        <tr><td><strong>GSTR-2B vs GSTR-3B Net ITC Mismatch</strong></td><td>ITC claimed in GSTR-3B exceeds GSTR-2B auto-populated by more than tolerance under Rule 36(4). Refund officer issues RFD-08 SCN. Patron's pre-filing reconciliation catches this - excess ITC is reversed via DRC-03 with interest if any, and refund is computed on the lower of GSTR-3B or 2B.</td></tr>
                        <tr><td><strong>Aadhaar Not Authenticated - PAF Blocks Submission</strong></td><td>PAF requires Aadhaar authentication for all promoters and authorised signatories. Where one signatory's Aadhaar is not linked, the entire RFD-01 is blocked. Patron coordinates Aadhaar authentication via portal Profile section before re-attempting.</td></tr>
                        <tr><td><strong>Document Upload Hits 10-Doc / 5 MB Limit</strong></td><td>Multi-period or high-volume exporters often have more than 10 supporting documents or files larger than 5 MB. Patron consolidates by combining invoices into a single PDF with bookmarks, compressing PDFs without quality loss, and using clear naming convention.</td></tr>
                        <tr><td><strong>CA Certificate Format Mismatch in Annexure-2</strong></td><td>Officer rejects Annexure-2 CA Certificate citing format deviation from prescribed text. Patron uses the exact prescribed format from RFD-01 with no deviations. Where rejection persists, written representation cites the prescribed format and Notification 56/2019-CT.</td></tr>

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
            <h2 class="section-title">Fees for RFD-01 Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (RFD-01 filing)</strong></td><td class="table-amount">Nil (no statutory portal fee)</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund Cluster</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>Standard RFD-01 Filing (single category, single quarter)</strong></td><td class="table-amount">Rs 6,000 per filing plus GST</td></tr>
                        <tr><td><strong>RFD-01 With CA Certificate (Annexure-2 above Rs 2 lakh)</strong></td><td class="table-amount">Rs 12,000 per filing plus GST</td></tr>
                        <tr><td><strong>Multi-Quarter or Annual RFD-01</strong></td><td class="table-amount">Rs 18,000 per filing plus GST (up to 4 quarters)</td></tr>
                        <tr><td><strong>High-Complexity Categories (Stmt 5B / 6 / 4 SEZ)</strong></td><td class="table-amount">Rs 15,000 per filing plus GST</td></tr>
                        <tr><td><strong>Inverted Duty Statement 1 + 1A (manufacturer)</strong></td><td class="table-amount">Rs 18,000 per filing plus GST</td></tr>
                        <tr><td><strong>RFD-03 Deficiency Memo Response</strong></td><td class="table-amount">Rs 8,000 per response plus GST</td></tr>
                        <tr><td><strong>RFD-08 SCN Defence</strong></td><td class="table-amount">Rs 18,000 per response plus GST</td></tr>
                        <tr><td><strong>RFD-01W Withdrawal Coordination</strong></td><td class="table-amount">Rs 4,000 standalone plus GST</td></tr>
                        <tr><td><strong>End-to-End Bundle (filing + provisional + final + Section 56 interest)</strong></td><td class="table-amount">Rs 22,000 plus GST</td></tr>
                        <tr><td><strong>Success Fee on Recovery</strong></td><td class="table-amount">0.5 to 2 percent of refund sanctioned (contested or aged claims)</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Government fees are payable separately at actuals.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free RFD-01 Filing consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20RFD-01%20filing%20with%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long RFD-01 Filing Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Pre-filing reconciliation + PAF gate audit</strong></td><td>1 to 2 working days</td><td>From data share</td></tr>
                        <tr><td><strong>Pre-Application Form (PAF) completion</strong></td><td>Same day if clear; 3 to 7 days if remediation</td><td>6-gate verification</td></tr>
                        <tr><td><strong>Refund category + Statement selection</strong></td><td>Same day</td><td>11-Statement matrix discipline</td></tr>
                        <tr><td><strong>Annexure-1 Statement preparation</strong></td><td>1 to 3 working days</td><td>Depends on invoice volume</td></tr>
                        <tr><td><strong>RFD-01 basic form completion</strong></td><td>Same day</td><td>10 Sl. Nos. with auto-populated fields</td></tr>
                        <tr><td><strong>Annexure-2 CA Certificate (above Rs 2 lakh)</strong></td><td>1 working day</td><td>In-house CA issuance</td></tr>
                        <tr><td><strong>Document upload + consolidation (max 10 PDFs)</strong></td><td>1 working day</td><td>Internal bookmarks for officer</td></tr>
                        <tr><td><strong>DSC/EVC submission + ARN generation</strong></td><td>Same day</td><td>System-driven</td></tr>
                        <tr><td><strong>RFD-02 acknowledgement</strong></td><td>Within 15 days of RFD-01</td><td>Rule 90(2) CGST Rules</td></tr>
                        <tr><td><strong>RFD-03 deficiency memo response</strong></td><td>7-day Patron cycle</td><td>Statute does not specify deadline</td></tr>
                        <tr><td><strong>RFD-04 90% provisional sanction</strong></td><td>Within 7 days of RFD-02</td><td>Low-risk path post 01.10.2025</td></tr>
                        <tr><td><strong>RFD-06 final sanction</strong></td><td>Within 60 days of RFD-02</td><td>Section 54(7) statutory ceiling</td></tr>
                        <tr><td><strong>Time limit to file RFD-01</strong></td><td>2 years from relevant date</td><td>Section 54(1) statute of limitation</td></tr>
                        <tr><td><strong>Best-case end-to-end (low-risk filing)</strong></td><td>22 to 30 days from data share to bank credit</td><td>Patron 2025-26 average</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>May 2025 invoice-based system enhancement:</strong> From May 2025, the GST portal RFD-01 form auto-populates select fields from filed GSTR-1 (Tables 6A, 6B, 6C) and GSTR-3B (Table 3.1(b) zero-rated supplies). The enhancement reduces manual data entry, prevents GSTR vs RFD-01 mismatch, and accelerates RFD-02 acknowledgement issuance. Applicant must verify auto-populated data accuracy before submission - any mismatch can trigger RFD-03 deficiency memo.

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
            <h2 class="section-title">Why CA-Led RFD-01 Filing Beats DIY</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">11-Statement Matrix Discipline</h3>
                <p class="feature-description">DIY filers default to whichever Statement seems closest to their category. Wrong Statement is the single most common RFD-03 trigger. Patron's matrix matches refund context to exact Statement on first attempt - prevents 70 percent of preventable deficiency memos.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">Pre-Application Form Gate Audit</h3>
                <p class="feature-description">DIY filers attempt RFD-01 directly and fail at PAF stage with bank validation, Aadhaar, or Notification 14/2025-CT issues. Patron's pre-filing audit clears all 6 PAF gates before the substantive form opens - no wasted attempts, no last-minute scramble.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Annexure-2 CA Certificate from In-House CAs</h3>
                <p class="feature-description">DIY filers either skip the CA Certificate (causing RFD-08 SCN above Rs 2 lakh) or use external CAs who do not know the prescribed format. Patron's in-house Chartered Accountants issue Annexure-2 in exact prescribed format with proper books examination basis.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">Document Upload Optimisation (10-doc / 5 MB)</h3>
                <p class="feature-description">DIY filers hit the 10-document portal limit and resort to incomplete uploads or compressed-beyond-readability files. Patron consolidates intelligently with internal bookmarks - clean officer review experience without breaching limits.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3 class="feature-title">RFD-03 Deficiency Memo Recovery</h3>
                <p class="feature-description">Where deficiency memos do arrive, Patron diagnoses the root cause (wrong Statement, format mismatch, document gap) within 24 hours and files fresh RFD-01 with corrections in the 7-day Patron cycle - typically reaching RFD-04 within 25 days of fresh filing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg></div>
                <h3 class="feature-title">End-to-End Tracking Through Bank Credit</h3>
                <p class="feature-description">DIY filers stop tracking after ARN; Patron tracks daily through RFD-02 acknowledgement, RFD-04 provisional sanction (where applicable), RFD-06 final sanction, RFD-05 payment advice, and PFMS bank credit - with Section 56 interest claim if delayed beyond 60 days.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of GST Compliance</strong></p>
                <p><strong>Outcome proof:</strong> A Bengaluru SaaS exporter recovered Rs 22 lakh service-export refund within 25 days of fresh RFD-01 filing in February 2026. Original DIY filing was deficient under Statement 2 (wrong - LUT route required Statement 3A); Annexure-2 had non-prescribed format. Patron's intervention - correct Statement 3A, in-house CA Certificate in prescribed format, document consolidation to 9 PDFs - secured RFD-04 in 6 days of RFD-02.</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ Indian businesses including pharma, IT services, engineering, textile, electronics, and chemical exporters filing across all 8 refund categories. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">RFD-01 vs Other GST Refund Forms</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Form RFD-01</th><th>Shipping Bill Route</th><th>Form PMT-09</th><th>Form RFD-01W</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Statutory basis</strong></td><td>Rule 89(1) CGST Rules 2017</td><td>Rule 96 CGST Rules</td><td>Section 49(6) + Rule 87</td><td>Rule 89(1) CGST Rules</td></tr>
                        <tr><td><strong>Form purpose</strong></td><td>All 8 refund categories - main application</td><td>Auto-route for IGST-paid goods exports</td><td>Inter-head transfer within ECL</td><td>Withdrawal of filed RFD-01</td></tr>
                        <tr><td><strong>Filing mode</strong></td><td>Online via portal</td><td>Auto-triggered by shipping bill in ICEGATE</td><td>Online via portal</td><td>Online via portal</td></tr>
                        <tr><td><strong>Statement required</strong></td><td>11-Statement matrix</td><td>None - shipping bill is application</td><td>None - simple inter-head selection</td><td>None - reference original ARN</td></tr>
                        <tr><td><strong>CA Certificate</strong></td><td>Required above Rs 2 lakh under Section 54(8)</td><td>Not applicable</td><td>Not applicable</td><td>Not applicable</td></tr>
                        <tr><td><strong>Output</strong></td><td>ARN immediately; RFD-02 in 15 days</td><td>Auto-sanction; PFMS credit in 7 to 15 days</td><td>Inter-head transfer in ECL</td><td>ECL re-credit of debited amount</td></tr>
                        <tr><td><strong>Common usage</strong></td><td>ALL refund types except IGST-paid goods exports</td><td>Goods exporters with IGST payment</td><td>Wrong-head deposit correction</td><td>Withdrawn for re-filing</td></tr>
                        <tr><td><strong>Document upload</strong></td><td>Up to 10 documents 5 MB each</td><td>Not applicable</td><td>Not applicable</td><td>Not applicable</td></tr>

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
            <h2 class="section-title">Partner Services for End-to-End Refund Recovery</h2>
            <div class="content-text">
                
                <p>RFD-01 filing is the procedural overlay across all refund categories. Common service bundles:</p>
                <ul>
                    <li><a href="/gst-refund/">GST refund (general)</a> - the parent practice covering Section 54 refund spectrum across all 8 refund categories.</li>
                    <li><a href="/gst-returns/">GST returns filing</a> - monthly GSTR-1 and GSTR-3B that underpin every RFD-01 claim. Return mismatch is the most common cause of RFD-03 deficiency memos.</li>
                    <li><a href="/gst-annual-returns/">GST annual returns</a> - GSTR-9 and GSTR-9C reconciliation that ties together refunds across the FY.</li>
                    <li><a href="/gst-audit/">GST audit support</a> - for businesses above the prescribed turnover threshold.</li>
                    <li><a href="/gst-registration/">GST registration</a> - for new applicants who need GSTIN before initiating any refund claim cycle.</li>
                    <li><a href="/iec-registration/">IEC registration</a> - mandatory for exporters of physical goods under the Foreign Trade Policy.</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT appeal for exporters</a> - second-tier appellate route where refund rejection escalates beyond Section 107.</li>
                    <li><a href="/gst-notice/">GST notice response</a> - for RFD-08 SCNs and scrutiny notices on RFD-01 filings.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India)</h2>
            <div class="content-text">
                
                <p><strong>Section 54(1) of CGST Act 2017:</strong> Any person claiming refund of any tax and interest, if any, paid on such tax or any other amount paid by him, may make an application before the expiry of two years from the relevant date in such form and manner as may be prescribed.</p>
                <p><strong>Section 54(8) of CGST Act 2017:</strong> The unjust enrichment doctrine - refund payable to applicant where (a) refund of tax paid on zero-rated supplies, (b) refund of unutilised ITC under Section 54(3), (c) refund of tax paid on supply not provided, (d) refund of tax under proviso to sub-section (3), (e) tax or interest borne by such other class of applicants, or (f) the tax has not been passed on by him to any other person. CA Certificate above Rs 2 lakh evidences (f).</p>
                <p><strong>Rule 89(1) of CGST Rules 2017:</strong> Any person, except the persons covered under notification issued under Section 55, claiming refund of any tax, interest, penalty, fees or any other amount paid by him, other than refund of integrated tax paid on goods exported out of India, may file an application electronically in Form GST RFD-01 through the common portal.</p>
                <p><strong>Rule 89(2) of CGST Rules 2017:</strong> Specifies the documentary evidence required - clause (b) for goods exports (shipping bill), (c) for service exports (FIRC/BRC), (d) and (e) for SEZ supplies, (f) for SEZ tax-not-collected declaration, (g) for deemed exports, (h) for inverted duty structure, (j) for wrong tax head, (k) for excess cash ledger, (l) for non-prosecution declaration, (m) for CA Certificate above Rs 2 lakh.</p>
                <p><strong>Rule 89(4) of CGST Rules 2017:</strong> Refund formula for zero-rated supplies - Maximum Refund = (Turnover of Zero-Rated Supply x Net ITC) divided by Adjusted Total Turnover.</p>
                <p><strong>Rule 89(5) of CGST Rules 2017:</strong> Refund formula for inverted duty structure - Maximum Refund = ((Turnover of Inverted Rated Supply x Net ITC) divided by Adjusted Total Turnover) - Tax Payable on Inverted Rated Supply.</p>
                <p><strong>Notification 56/2019-Central Tax dated 14 November 2019:</strong> Foundational notification substituting Form GST RFD-01 with the modern Statement architecture. Introduced Statement 1A specifically for inverted duty structure inward and outward supply details.</p>
                <p><strong>Notification 12/2024-Central Tax dated 10 July 2024:</strong> Inserted Rule 89(1B) - any person claiming refund of additional IGST due to upward revision in price of exported goods, for which initial tax refund has already been sanctioned, may apply electronically in Form RFD-01 within two years from relevant date as per Section 54.</p>
                <p><strong>Notification 13/2025-Central Tax dated 17 September 2025:</strong> Amended Rule 91(2) introducing risk-based system identification for provisional refund. Effective 01.10.2025.</p>
                <p><strong>Notification 14/2025-Central Tax dated 17 September 2025:</strong> Identifies the class of registered persons not eligible for provisional refund of zero-rated supply or IDS.</p>
                <p><strong>Notification 48/2017-Central Tax dated 18 October 2017:</strong> Notifies four deemed export categories - AA, EPCG, EOU/EHTP/STP/BTP, gold.</p>
                <p><strong>Circular 125/44/2019-GST dated 18 November 2019:</strong> Master refund procedure clarification.</p>
                <p><strong>Circular 166/22/2021-GST dated 17 November 2021:</strong> ECL refund carve-outs - no time limit, no unjust enrichment, no Rs 1,000 minimum threshold.</p>
                <p><strong>Government references:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST notifications and circulars</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (CGST Act 2017 and IGST Act 2017)</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the questions taxpayers most often ask about Form GST RFD-01 filing - including Hinglish variants for stakeholders comfortable in mixed language.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form GST RFD-01 and who can file it?</h3>
                        <div class="faq-expanded__a"><p>Form GST RFD-01 is the prescribed online refund application form under Rule 89(1) of CGST Rules 2017 for any GST refund claim. It covers all 8 refund categories under Section 54 of the CGST Act 2017. Eligible filers include any GST-registered taxpayer (regular, composition scheme, casual, NRTP), unregistered persons in specific scenarios, and applicants via TRN where GSTIN was not granted. The form is filed at gst.gov.in under Services > Refunds > Application for Refund using DSC (companies and LLPs) or EVC (individuals and proprietorships).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which Statement do I use for each refund category?</h3>
                        <div class="faq-expanded__a"><p>Statement 1 and 1A for inverted duty structure (Rule 89(5) and 89(2)(h)). Statement 2 for service exports with IGST (Rule 89(2)(c)). Statement 3, 3A, 3B for goods/service exports under LUT or with payment (Rule 89(2)(b) and (c), 89(4)). Statement 4 for SEZ supplies WITH payment, Statement 5 and 5A for SEZ supplies WITHOUT payment (Rule 89(2)(d), (e), 89(4)). Statement 5B for deemed exports (Rule 89(2)(g)). Statement 6 for wrong tax head (Rule 89(2)(j)). Statement 7 for excess cash ledger (Rule 89(2)(k)).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">RFD-01 kaise file karte hain - kya documents lagte hain? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>GST portal (gst.gov.in) par login karke Services > Refunds > Application for Refund par jaayein. Pehle Pre-Application Form (PAF) bharein - bank validation, Aadhaar authentication, GSTR-3B latest filed status check. Phir refund category select karein (8 categories me se ek). Annexure-1 me Statement (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, ya 7) bharein based on category. Annexure-2 me CA Certificate (above Rs 2 lakh) ya self-declaration (below Rs 2 lakh). Documents upload karein (max 10 PDFs, 5 MB each). DSC ya EVC se submit karke ARN generate karein. RFD-02 acknowledgement 15 din me milega.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the Pre-Application Form (PAF) under RFD-01?</h3>
                        <div class="faq-expanded__a"><p>The Pre-Application Form (PAF) is a short verification form opening before the main RFD-01 - captures bank account validation against PFMS, GSTIN active status, Aadhaar authentication of all promoters and authorised signatories, Notification 14/2025-CT eligible class check, latest GSTR-3B filing verification, and refund period selection. Until PAF clears, the substantive RFD-01 form does not open. PAF is the first procedural gate for RFD-01 filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between Annexure-1 and Annexure-2?</h3>
                        <div class="faq-expanded__a"><p>Annexure-1 contains the 11 Statements (1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, 7) - one or more applies depending on refund category. The Statement provides invoice-level or aggregate data substantiating the refund claim. Annexure-2 is the Chartered Accountant or Cost Accountant Certificate certifying that tax incidence has not been passed on - mandatory for refunds above Rs 2 lakh under Section 54(8) and Rule 89(2)(m). Below Rs 2 lakh, self-declaration under Rule 89(2)(l) suffices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is a CA Certificate mandatory for every RFD-01?</h3>
                        <div class="faq-expanded__a"><p>No. CA Certificate (Annexure-2) is mandatory only for refunds above Rs 2 lakh under Section 54(8) and Rule 89(2)(m). It is NOT required for refunds covered under Section 54(8)(a)/(b)/(c)/(d)/(f) - including zero-rated supplies, accumulated ITC under Section 54(3), and refunds where unjust enrichment doctrine does not apply. For refunds below Rs 2 lakh, self-declaration under Rule 89(2)(l) is sufficient. CGST Circular 166/22/2021-GST clarified that CA Certificate is not required for excess cash ledger refund regardless of amount.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I file RFD-01 for multiple tax periods together?</h3>
                        <div class="faq-expanded__a"><p>Yes. Multiple tax periods within one financial year can be combined in a single RFD-01. Cross-financial-year refunds need separate RFD-01s. The 2-year limitation under Section 54(1) applies separately for each tax period - earliest period determines the cut-off. Patron typically combines quarterly periods for exporters and IDS manufacturers to optimise documentation effort.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does ARN generation take after RFD-01 submission?</h3>
                        <div class="faq-expanded__a"><p>ARN (Application Reference Number) is generated immediately on successful RFD-01 submission via DSC or EVC. The ARN appears on screen and is sent to the registered email and mobile via SMS. The proper officer issues RFD-02 acknowledgement within 15 days under Rule 90(2). The 7-day clock for 90 percent provisional refund (post 01.10.2025 risk-based path) and the 60-day clock for final sanction under Section 54(7) start from RFD-02 date, not ARN date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is RFD-01W and when do I use it?</h3>
                        <div class="faq-expanded__a"><p>Form GST RFD-01W is the withdrawal application for a filed RFD-01. Used when applicant realises errors after submission (wrong amount, wrong head, wrong bank account, wrong category) or wants to abandon the claim. On withdrawal, the amount debited from Electronic Cash Ledger or Credit Ledger on RFD-01 filing is auto-credited back. Applicant can then file fresh RFD-01 with corrections. RFD-01W must be filed before RFD-06 sanction is issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Wrong Statement file ho gaya - kya re-file kar sakte hain? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Haan. Wrong Statement file karne par typically Department RFD-03 deficiency memo bhejta hai. Iske baad fresh RFD-01 file karna padta hai with correct Statement - original ARN void ho jata hai aur new ARN generate hota hai. Alternatively, agar applicant ko submission ke turant baad pata chal jaye, RFD-01W (withdrawal) file karke debit amount ECL me wapas le sakte hain, phir fresh RFD-01 file karein. Important - RFD-01W RFD-06 final sanction se pehle hi file kar sakte hain. Patron ki 11-Statement matrix discipline pehle hi sahi Statement select kar leti hai - 70 percent preventable RFD-03 memos avoid hote hain.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Statutory provisions?</strong> Section 54(1) CGST Act 2017 + Rule 89(1) CGST Rules 2017.</li>
                    <li><strong>Form?</strong> Form GST RFD-01 - online via portal at gst.gov.in.</li>
                    <li><strong>Statements?</strong> 11 in Annexure-1 - 1, 1A, 2, 3, 3A, 3B, 4, 5, 5A, 5B, 6, 7.</li>
                    <li><strong>CA Certificate?</strong> Annexure-2 mandatory above Rs 2 lakh under Section 54(8).</li>
                    <li><strong>Pre-Application Form?</strong> Yes - PAF validates bank, GSTIN, Aadhaar, eligibility before main form.</li>
                    <li><strong>ARN generation?</strong> Immediately on submission via DSC or EVC.</li>
                    <li><strong>RFD-02 acknowledgement?</strong> Within 15 days of RFD-01 under Rule 90(2).</li>
                    <li><strong>Time limit?</strong> 2 years from relevant date under Section 54(1).</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines That Determine Your Refund</h2>
            <div class="content-text">
                
                <p>RFD-01 deadlines run off the relevant date for each refund category. Patron tracks each milestone:</p>
                <ol>
                    <li><strong>Time limit to file RFD-01</strong> - 2 years from relevant date under Section 54(1). Permanent loss of refund right if missed.</li>
                    <li><strong>Latest GSTR-3B filing</strong> - mandatory pre-condition. PAF blocks RFD-01 filing without it.</li>
                    <li><strong>Aadhaar authentication</strong> - one-time per signatory. PAF blocks without Aadhaar.</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of RFD-01 (Rule 90(2)). Escalate via grievance if delayed.</li>
                    <li><strong>RFD-03 deficiency memo response</strong> - 7-day Patron cycle. Fresh RFD-01 with corrections.</li>
                    <li><strong>RFD-04 90% provisional sanction</strong> - within 7 days of RFD-02 (low-risk post 01.10.2025).</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 (Section 54(7)). 6% interest under Section 56 if delayed.</li>
                    <li><strong>RFD-09 reply to RFD-08 SCN</strong> - within 15 days. Adverse order without reply is appealable.</li>
                    <li><strong>RFD-01W withdrawal window</strong> - before RFD-06 sanction is issued. Withdrawal not possible after final sanction.</li>
                </ol>
                <p><strong>Get your RFD-01 readiness check now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20GST%20Form%20RFD-01." target="_blank" rel="noopener">WhatsApp us</a>. Free Statement selection and document gap report within 4 business hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File RFD-01 Right the First Time. Get Your Refund Faster.</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">Form GST RFD-01 is the unified online refund application form under Rule 89(1) of CGST Rules 2017 covering all 8 refund categories under Section 54 of the CGST Act 2017 - exports with IGST, exports under LUT, SEZ supplies (with and without payment), inverted duty structure, deemed exports, excess cash ledger, wrong tax head, and others. The form's modern architecture - introduced by Notification 56/2019-CT and refined through 33/2019-CT, 12/2024-CT, and 13/2025-CT - features Annexure-1 with 11 Statements mapped to specific refund categories under Rule 89(2)(b) through Rule 89(2)(m), and Annexure-2 CA Certificate mandatory for refunds above Rs 2 lakh under Section 54(8).</p>
                <p style="color:#FFFFFF;">The Pre-Application Form (PAF) opens before the main RFD-01 to validate bank account against PFMS, GSTIN active status, Aadhaar authentication, Notification 14/2025-CT eligible class check, latest GSTR-3B filing, and refund period. The May 2025 invoice-based system enhancement auto-populates select fields from filed GSTR-1 and GSTR-3B. Patron Accounting LLP brings 15+ years of GST refund and Form RFD-01 portal filing experience for 200+ businesses with four offices in Pune, Mumbai, Delhi, and Gurugram. Taxpayers gain CA-led correct Statement selection on first attempt, all 6 PAF gates cleared before substantive filing, in-house CA Certificate in prescribed format, document upload optimisation, and end-to-end ARN-to-bank-credit tracking with above-90 percent first-time approval rate.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20RFD-01%20filing%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20RFD-01%20Filing%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20RFD-01%20filing%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Services for Refund Recovery</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">RFD-01 filing overlays the broader GST compliance stack. Most clients run these services in parallel for end-to-end refund acceleration.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end refund and compliance support across the GST stack</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST Returns Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-annual-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-audit/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/iec-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-notice/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><div><div class="pa-card-title">GST Notice Response</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 7 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 7 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Tier 2 freshness - core form architecture stable since 2017; periodic Notification updates and May 2025 invoice-based enhancement absorbed). Review triggers include CBIC notifications amending Form RFD-01, Statement format, Annexure structure, or portal workflow.</p>
        </div>
    </div>
</section>

@include('layouts.itr-season-strip')


</main>
<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
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
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}
slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';
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
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
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
        // Static cards already rendered - init Slick immediately
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
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-pill'));
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
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
