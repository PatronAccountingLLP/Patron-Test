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
    <title>ITR Filing for Professionals India: Doctors, Lawyers, CAs</title>
    <meta name="description" content="ITR-3 and ITR-4 filing for professionals AY 2026-27. Section 44ADA, FIRC, GST LUT for doctors, lawyers, CAs, architects, freelancers. From Rs 1,499.">
    <link rel="canonical" href="/itr-for-professionals">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR Filing for Professionals India: Doctors, Lawyers, CAs | Patron Accounting">
    <meta property="og:description" content="ITR-3 and ITR-4 filing for professionals AY 2026-27. Section 44ADA, FIRC, GST LUT for doctors, lawyers, CAs, architects, freelancers. From Rs 1,499.">
    <meta property="og:url" content="/itr-for-professionals/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-professionals-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR Filing for Professionals India: Doctors, Lawyers, CAs | Patron Accounting">
    <meta name="twitter:description" content="ITR-3 and ITR-4 filing for professionals AY 2026-27. Section 44ADA, FIRC, GST LUT for doctors, lawyers, CAs, architects, freelancers. From Rs 1,499.">
    <meta name="twitter:image" content="/images/itr-for-professionals-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/itr-for-professionals/#breadcrumb",
      "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR Filing for Professionals", "item": "https://www.patronaccounting.com/itr-for-professionals" }
          ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/itr-for-professionals/#faq",
      "datePublished": "2026-05-11T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form should a professional file for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professionals opting for Section 44ADA presumptive taxation file ITR-4 Sugam. Professionals with regular books, gross receipts above Rs 75 lakh, capital gains, or foreign assets file ITR-3. Salaried individuals with side professional income must also file ITR-3, not ITR-1. Filing the wrong form triggers a defective return notice under Section 139(9). LLPs and HUFs cannot use ITR-4 and must file ITR-5 with regular books."
          }
        },
        {
          "@type": "Question",
          "name": "Who can opt for Section 44ADA presumptive taxation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 44ADA is available to resident individuals and partnership firms (not LLPs or HUFs) carrying on specified professions under Section 44AA(1): legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration, authorised representative, and film artist. The taxpayer must declare 50 percent of gross receipts as deemed profit. Software developers, content writers, and graphic designers are not specified professions and typically route to Section 44AD instead."
          }
        },
        {
          "@type": "Question",
          "name": "What is the turnover limit under Section 44ADA for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The standard limit is Rs 50 lakh of gross receipts. The enhanced limit is Rs 75 lakh if cash receipts do not exceed 5 percent of total receipts, meaning at least 95 percent must come through banking channels, UPI, account payee cheques, or electronic clearing systems. Crossing Rs 75 lakh requires regular ITR-3 with books and triggers Section 44AB tax audit. The enhanced limit was introduced by Budget 2023 effective FY 2023-24 onwards."
          }
        },
        {
          "@type": "Question",
          "name": "How much does CA-assisted professional ITR filing cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting professional ITR filing starts at Rs 1,499 for Section 44ADA presumptive ITR-4 filing. ITR-3 with regular books starts at Rs 4,999. ITR-3 with Section 44AB tax audit starts at Rs 14,999. Foreign income with FIRC reconciliation and Form 67 DTAA relief starts at Rs 6,999. Annual GST LUT filing in Form RFD-11 is Rs 1,499. IGST refund claims under Rule 89 start at Rs 4,999."
          }
        },
        {
          "@type": "Question",
          "name": "Is FIRC mandatory for freelancers with foreign clients?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Foreign Inward Remittance Certificate or e-FIRA is required to prove that payment was received in convertible foreign currency, which is a mandatory condition under Section 2(6) of the IGST Act for classifying a transaction as export of services. Without FIRC, GST refund claims under Rule 89 are rejected. Banks issue FIRC on wire transfers; PayPal, Stripe, Wise, and Payoneer provide FIRC or transaction statements for digital payouts."
          }
        },
        {
          "@type": "Question",
          "name": "What is GST LUT and why do freelancers need it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Letter of Undertaking in Form RFD-11 is filed under Rule 96A of the CGST Rules allowing GST-registered exporters of services to export without paying 18 percent IGST upfront. Without a valid LUT, 18 percent IGST applies on export invoices with the cash blocked until a refund under Rule 89 is processed. LUT is valid for one financial year and must be renewed before 31 March each year. CBIC Circular No. 37/11/2018-GST clarifies the process."
          }
        },
        {
          "@type": "Question",
          "name": "When is professional ITR due for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For AY 2026-27, ITR-3 and ITR-4 non-audit cases are due 31 August 2026 - a new deadline introduced for AY 2026-27, distinct from the 31 July deadline applicable to ITR-1 and ITR-2. Professionals with gross receipts above Rs 75 lakh requiring Section 44AB tax audit have until 31 October 2026, with the Form 3CB-3CD audit report due by 30 September 2026 - one month before the ITR due date."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to pay advance tax under Section 44ADA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Professionals opting for Section 44ADA can pay 100 percent of their advance tax liability in a single installment by 15 March of the financial year, rather than the four quarterly installments applicable to regular taxpayers. This single-installment route is the key cash-flow advantage of presumptive taxation. Default in advance tax triggers Section 234B and 234C interest at 1 percent per month on the shortfall."
          }
        },
        {
          "@type": "Question",
          "name": "Professional ka ITR kaunsa form bhare AY 2026-27 mein? (Which ITR form should professionals file for AY 2026-27)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AY 2026-27 ke liye specified professionals (doctor, lawyer, CA, architect, engineer, technical consultant, interior decorator, authorised representative, film artist) Section 44ADA presumptive scheme use kar sakte hain - ITR-4 Sugam file karke 50 percent gross receipts ko taxable profit dikhana hota hai. Limit Rs 50 lakh hai standard, aur Rs 75 lakh enhanced agar 95 percent receipts digital hain. Books nahi maintain karne padte. Regular books wale ya Rs 75 lakh se upar wale ITR-3 file karte hain. Software developers aur non-specified freelancers Section 44AD use karte hain. Due date 31 August 2026 hai non-audit cases ke liye. Patron Accounting Rs 1,499 se start hone wali filing offer karta hai. Call +91 945 945 6700."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/itr-for-professionals/#service",
      "name": "ITR Filing for Professionals",
      "url": "https://www.patronaccounting.com/itr-for-professionals/",
      "description": "End-to-end CA-assisted Income Tax Return filing for self-employed professionals under Section 139 of the Income Tax Act 1961 for AY 2026-27. Covers doctors, lawyers, chartered accountants, company secretaries, architects, engineers, technical consultants, interior decorators, authorised representatives and film artists - the nine specified professions under Section 44AA(1) read with Rule 6F. Includes Section 44ADA presumptive taxation at 50 percent deemed profit (up to Rs 50 lakh standard, Rs 75 lakh if 95 percent digital receipts) via ITR-4 Sugam, regular books filing via ITR-3, Section 44AB tax audit coordination for receipts above Rs 75 lakh with Form 3CB-3CD, Section 194J and 194JB TDS credit reconciliation, FIRC consolidation for foreign currency receipts, GST LUT filing under Rule 96A of CGST Rules via Form RFD-11, IGST refund claims under Rule 89 via Form GST RFD-01, Form 67 DTAA Foreign Tax Credit under Sections 90 and 91, and 12 months of post-filing Section 139(9), 143(1), 142(1) and 148 notice support.",
      "serviceType": "Professional Income Tax Return Filing",
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
          "name": "Income tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"
        },
        {
          "@type": "Thing",
          "name": "Profession",
          "sameAs": "https://en.wikipedia.org/wiki/Profession"
        },
        {
          "@type": "Thing",
          "name": "Goods and Services Tax (India)",
          "sameAs": "https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Professional ITR Filing Tiers (AY 2026-27)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Section 44ADA Presumptive ITR-4 (Rs 50 lakh limit)",
            "priceCurrency": "INR",
            "price": "1499",
            "description": "Specified profession under Section 44AA(1); 50 percent deemed profit; single-installment advance tax; books and audit waived"
          },
          {
            "@type": "Offer",
            "name": "Section 44ADA Enhanced Limit ITR-4 (Rs 75 lakh, 95 percent digital)",
            "priceCurrency": "INR",
            "price": "1999",
            "description": "Cash receipts under 5 percent of total; enhanced presumptive limit per Budget 2023"
          },
          {
            "@type": "Offer",
            "name": "Mixed Salary plus Profession ITR-3",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "Schedule S salary plus Schedule BP profession; regime arbitrage memo; AIS and Form 26AS reconciliation"
          },
          {
            "@type": "Offer",
            "name": "ITR-3 with Regular Books (no audit)",
            "priceCurrency": "INR",
            "price": "4999",
            "description": "Full books under Rule 6F; Section 30 to 37 expense deductions; Section 32 depreciation; receipts up to Rs 75 lakh"
          },
          {
            "@type": "Offer",
            "name": "ITR-3 with Section 44AB Tax Audit",
            "priceCurrency": "INR",
            "price": "14999",
            "description": "Receipts above Rs 75 lakh; Form 3CB-3CD tax audit report; due 30 September with ITR by 31 October"
          },
          {
            "@type": "Offer",
            "name": "Foreign Income with FIRC and Form 67 DTAA",
            "priceCurrency": "INR",
            "price": "6999",
            "description": "Export of services classification, FIRC reconciliation across banks and payment platforms, Form 67 Foreign Tax Credit"
          },
          {
            "@type": "Offer",
            "name": "GST LUT Annual Filing (Form RFD-11)",
            "priceCurrency": "INR",
            "price": "1499",
            "description": "Annual LUT renewal under Rule 96A of CGST Rules for zero-rated export of services"
          },
          {
            "@type": "Offer",
            "name": "IGST Refund Claim (Rule 89, Form GST RFD-01)",
            "priceCurrency": "INR",
            "price": "4999",
            "description": "IGST refund on export of services with FIRC trail and shipping documents; CBIC processing 30 to 60 days"
          }
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
    ['name' => 'ITR Filing for Professionals', 'url' => '/itr-for-professionals'],
]])
</div>

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
                        ITR Filing for Professionals
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Gross receipts ledger, Form 26AS, AIS, FIRC for foreign income, Section 194J/194JB TDS certificates</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 1,499 for ITR-4 under Section 44ADA; ITR-3 with books from Rs 4,999; tax audit cases Rs 14,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Specified professions under Section 44AA(1) - gross receipts up to Rs 75 lakh for 44ADA presumptive</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 24-72 hours for ITR-4; 3-5 days for ITR-3 books; due 31 August 2026 non-audit, 31 October audit cases</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">2,500+ Professionals Served | 4.9 Google Rating | 10,000+ Returns Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20professional%20ITR%20filing%20AY%202026-27." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ITR Filing for Professionals',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'Section 44ADA Presumptive ITR-4', 'label' => 'Section 44ADA Presumptive ITR-4', 'selected' => true, 'disabled' => false],
                            ['value' => 'ITR-3 with Regular Books', 'label' => 'ITR-3 with Regular Books', 'selected' => false, 'disabled' => false],
                            ['value' => 'ITR-3 with Section 44AB Tax Audit', 'label' => 'ITR-3 with Section 44AB Tax Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'Doctor ITR Filing', 'label' => 'Doctor ITR Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'Lawyer or Advocate ITR', 'label' => 'Lawyer or Advocate ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'Chartered Accountant Practice ITR', 'label' => 'Chartered Accountant Practice ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'Architect or Interior Designer ITR', 'label' => 'Architect or Interior Designer ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'Technical Consultant or Engineer ITR', 'label' => 'Technical Consultant or Engineer ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'Foreign Income with FIRC and Form 67', 'label' => 'Foreign Income with FIRC and Form 67', 'selected' => false, 'disabled' => false],
                            ['value' => 'GST LUT Filing (Form RFD-11)', 'label' => 'GST LUT Filing (Form RFD-11)', 'selected' => false, 'disabled' => false],
                            ['value' => 'IGST Refund Claim', 'label' => 'IGST Refund Claim', 'selected' => false, 'disabled' => false],
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a freelance design consultant with clients in US, Germany and Singapore, my FIRC trail was scattered across PayPal, Wise and three banks. Patron consolidated 47 FIRCs, filed GST refund and Form 67. Rs 2.8 lakh refund in 35 days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anand R.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">UI Consultant (Bengaluru)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our four-partner advocacy practice hit Rs 1.2 cr receipts crossing the Rs 75 lakh tax audit threshold. Patron coordinated Form 3CB-3CD and filed ITR-3 by 25 October. Books reconciled in 9 working days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram M.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Senior Partner, Law Firm (Mumbai)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I'm a consultant doctor at three hospitals plus my own clinic. Three Form 16A under 194J and clinic receipts under 44ADA. Patron consolidated all streams and finalised ITR-3 with 50 percent presumptive on clinic income.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Kavita.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Cardiologist (Pune)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a CA in practice, I was filing my own ITR-4 under 44ADA for years. Patron showed me ITR-3 with actual expenses gave a Rs 1.4 lakh lower tax due to office rent, staff, depreciation. Switched and saved real money.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Prashant S.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Chartered Accountant (Delhi)</div>
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
                    <p>Doctors, lawyers, chartered accountants, architects, engineers, technical consultants, interior decorators, film artists, authorised representatives. Section 44ADA presumptive ITR-4 and regular ITR-3 with books. 2,500+ professional ITRs filed.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Profession Routing</a>
            <a href="#process-section" class="toc-btn">8-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">44ADA vs ITR-3</a>
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
            <h2 class="section-title">Professional ITR Filing for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing for Professionals Services at a Glance</strong></p>
                    <p>ITR Filing for Professionals is the annual return covering Profits and Gains from Business or Profession (PGBP) under Section 28 of the Income Tax Act 1961. For AY 2026-27, eligible professionals under Section 44AA(1) can opt for Section 44ADA presumptive taxation declaring 50 percent of gross receipts up to Rs 50 lakh (Rs 75 lakh if 95 percent or more of receipts are digital), filing ITR-4 Sugam. Others file ITR-3 with full books. Section 44AB tax audit triggers at Rs 75 lakh gross receipts. Due date is 31 August 2026 for non-audit cases and 31 October 2026 for audit cases.</p>
                </div>
                <p>ITR Filing for Professionals covers every doctor, lawyer, chartered accountant, company secretary, architect, engineer, technical consultant, interior decorator, authorised representative and film artist practising in India. Professional income is taxed under Profits and Gains from Business or Profession (PGBP) per Section 28 of the Income Tax Act 1961 and requires either ITR-3 (regular books under Section 44AA(3) and Rule 6F) or ITR-4 Sugam (presumptive under Section 44ADA). For freelancers receiving foreign income, FIRC documentation under RBI purpose codes and GST LUT filing under Rule 96A of CGST Rules are integral to the return cycle.</p>
                <p>Patron Accounting has filed 2,500+ professional ITRs across all nine specified professions under Section 44AA(1) plus mixed salaried-plus-freelance scenarios. The firm coordinates Section 44ADA versus regular books decision via a documented comparison memo, FIRC consolidation across banks, PayPal, Stripe, Wise and Payoneer, annual GST LUT renewal in Form RFD-11, IGST refund claims under Rule 89 in Form GST RFD-01 with CBIC Circular 37/11/2018-GST compliance, and Form 67 DTAA Foreign Tax Credit under Sections 90 and 91. With offices in Pune, Mumbai, Delhi and Gurugram and 15+ years of practice, every professional ITR comes with 12 months of post-filing Section 139(9), 143(1), 142(1) and 148 notice support at no extra cost.</p>
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
                <h2 class="section-title">What Is Professional ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Professional ITR Filing is the annual income tax return submitted by self-employed practitioners under Profits and Gains from Business or Profession (PGBP) per Section 28 of the Income Tax Act, 1961. The return reports gross professional receipts, allowable expenses, deemed profit (if Section 44ADA is opted), TDS credits under Sections 194J and 194JB, and taxes paid.</p>
                    <p>Specified professionals listed in Section 44AA(1) and Rule 6F can opt for Section 44ADA presumptive taxation declaring 50 percent of gross receipts as taxable income, filing ITR-4 Sugam without maintaining detailed books. Professionals exceeding the Rs 75 lakh threshold, or those preferring expense-based computation, file ITR-3 with full books of accounts and Form 3CB-3CD tax audit under Section 44AB.</p>
                    <p>The nine specified professions under Section 44AA(1) read with Rule 6F are: legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration, authorised representative and film artist. Company secretary practice qualifies under accountancy. Software developers, content writers, graphic designers, marketers and most freelancers fall OUTSIDE Section 44ADA and route to Section 44AD business presumptive instead.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing for Professionals:</strong></p>
                    <p><strong>PGBP (Profits and Gains from Business or Profession):</strong> The income head under Section 28 of the Income Tax Act 1961 covering all self-employment receipts including professional fees, consultation income and retainer revenue.</p>
                    <p><strong>Section 44ADA:</strong> Presumptive taxation scheme for specified professionals - 50 percent of gross receipts is treated as taxable income; books under Rule 6F and Section 44AB audit are waived.</p>
                    <p><strong>Section 44AA(1) Specified Professions:</strong> Nine professions listed in the Income Tax Act - legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration, authorised representative and film artist. Rule 6F prescribes book-keeping requirements.</p>
                    <p><strong>ITR-3:</strong> Regular Income Tax Return for business and professional income with full books, capital gains, foreign income and mixed-source scenarios.</p>
                    <p><strong>ITR-4 Sugam:</strong> Simplified Income Tax Return for taxpayers opting for Sections 44AD, 44ADA, or 44AE presumptive schemes; books waived; single-installment advance tax.</p>
                    <p><strong>FIRC (Foreign Inward Remittance Certificate):</strong> Bank-issued document or e-FIRA proving receipt of payment in convertible foreign currency. Mandatory under Section 2(6) of the IGST Act for classifying a transaction as export of services and claiming GST refund under Rule 89.</p>
                    <p><strong>GST LUT (Letter of Undertaking, Form RFD-11):</strong> Bond filed under Rule 96A of CGST Rules allowing GST-registered service exporters to export without paying 18 percent IGST upfront. Annual renewal mandatory before 31 March each year.</p>
                    <p><strong>Section 194J and 194JB:</strong> TDS provisions on professional and technical fees - Section 194J at 10 percent on professional fees and Section 194JB at 2 percent on technical services. Filed by client; reflected in Form 26AS.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing for Professionals</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Source</span>
                        <strong>Section 44ADA</strong>
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
            <h2 class="section-title">Who Files Professional ITR for AY 2026-27</h2>
            <div class="content-text">
                
                <p>Professional ITR filing applies for AY 2026-27 under Section 139(1) of the Income Tax Act 1961 to the following categories. Filing is mandatory if your total income exceeds the basic exemption limit (Rs 4 lakh under the new regime or Rs 2.5 lakh under the old regime for individuals below 60) or if you wish to claim a TDS refund.</p>
                <ul>
                    <li><strong>Resident individuals</strong> practising any of the nine specified professions under Section 44AA(1) and Rule 6F - legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration, authorised representative, film artist.</li>
                    <li><strong>Partnership firms</strong> (excluding LLPs) carrying on specified professions; LLPs must file ITR-5 with regular books and cannot use Section 44ADA.</li>
                    <li><strong>Freelancers, consultants and independent practitioners</strong> with gross receipts above the basic exemption limit; non-specified freelancers route to Section 44AD business presumptive via ITR-4 instead of 44ADA.</li>
                    <li><strong>Salaried individuals with side professional or freelance income</strong> - must file ITR-3 (not ITR-1, even if salary is the larger component); Schedule S (salary) plus Schedule BP (profession) in the same return.</li>
                    <li><strong>Professionals receiving TDS deduction</strong> under Section 194J (10 percent on professional fees) or Section 194JB (2 percent on technical services) - filing required to claim refund or credit against final liability.</li>
                    <li><strong>Freelancers receiving foreign currency payments</strong> - FIRC documentation per invoice, RBI purpose code classification, and GST LUT compliance mandatory.</li>
                    <li><strong>HUFs are not eligible for Section 44ADA</strong> and must file ITR-5 with regular books even if the professional turnover is small.</li>
                </ul>
                <p><strong>Statutory due dates for AY 2026-27:</strong> ITR-3 and ITR-4 non-audit cases - 31 August 2026 (new deadline introduced for AY 2026-27, distinct from the 31 July deadline for ITR-1 and ITR-2). ITR-3 audit cases under Section 44AB where profession gross receipts exceed Rs 75 lakh - 31 October 2026. Tax audit report (Form 3CB-3CD) - 30 September 2026 (one month before ITR). Advance tax under Section 44ADA - single installment by 15 March 2026. GST LUT renewal (Form RFD-11) - before start of each FY. Belated return under Section 139(4) - 31 December 2026 with Section 234F fee. Revised return under Section 139(5) - 31 March 2027.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Profession-Specific Routing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Doctors and Medical Practitioners</strong></td><td>Eligible for Section 44ADA presumptive (medical). Hospital consultancy income, OPD fee receipts, surgical procedure billings count as professional receipts. TDS under Section 194J on hospital consultancy. Proprietary clinic doctors typically use ITR-4 under 44ADA up to Rs 75 lakh; diagnostic centres and partnership hospital groups often need ITR-3 with full books. Pharmaceutical sample income and CME honoraria reported under Other Sources.</td><td>ITR-4 / ITR-3</td></tr>
                        <tr><td><strong>Lawyers and Advocates</strong></td><td>Specified profession under Section 44AA(1) - legal. Court fee receipts, consultation income, drafting fees and arguing fees fall under PGBP. Bar Council subscription is allowable under Section 37(1). Senior counsel briefs frequently cross Rs 75 lakh - ITR-3 with Section 44AB tax audit applies. Foreign clients require FIRC and GST LUT for zero-rated export of legal services.</td><td>ITR-4 / ITR-3</td></tr>
                        <tr><td><strong>Chartered Accountants and Company Secretaries</strong></td><td>Section 44ADA available under accountancy profession. CA practice income from audit, tax filings, and advisory under PGBP. ICAI membership fees, library and professional development costs allowable in ITR-3. Partnership firms structured as LLP CANNOT use 44ADA and must file ITR-5 with regular books.</td><td>ITR-4 / ITR-3</td></tr>
                        <tr><td><strong>Architects and Interior Designers</strong></td><td>Both specified under Section 44AA(1). Project fee receipts, design retainers and supervision fees come under PGBP. Site visits, model-making and CAD subscription expenses claimable in ITR-3. International project receipts require FIRC and SAC 9983 for architectural services under GST.</td><td>ITR-4 / ITR-3</td></tr>
                        <tr><td><strong>Technical Consultants and Engineers</strong></td><td>Specified profession under technical consultancy. Project consultancy, technical advisory and turnkey engineering services route through 44ADA up to receipt limits. Foreign clients common - GST LUT essential for service exports. <strong>Software developers without professional engineering degrees fall under Section 44AD business presumptive, NOT Section 44ADA.</strong></td><td>ITR-4 / ITR-3</td></tr>
                        <tr><td><strong>Freelancers (Software Developers, Designers, Writers, Marketers)</strong></td><td>Non-specified freelancers fall under Section 44AD business presumptive (6 percent digital, 8 percent cash) rather than 44ADA. IT Department notices have questioned 44AD use where TDS is deducted under Section 194J. Patron position: use 44AD for true non-specified freelancing; consult before claiming 44ADA outside the 9 listed professions. Foreign income requires FIRC with RBI purpose code P0802 (software exports).</td><td><a href="/itr-filing-for-freelancers-professionals/" style="color:var(--orange);font-weight:600;">Freelancer ITR &rarr;</a></td></tr>
                        <tr><td><strong>Authorised Representatives and Film Artists</strong></td><td>Both specified professions under Section 44AA(1). Authorised representatives (Section 288 representatives appearing before income tax authorities) and film artists (actors, directors, music directors, art directors, cameramen, dance directors, dress designers, editors, lyricists, story writers, screen-play writers, dialogue writers, audio production technicians) route through 44ADA at 50 percent or ITR-3 with books.</td><td>ITR-4 / ITR-3</td></tr>


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
            <h2 class="section-title">8-Step Professional ITR Filing Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow on the Income Tax e-filing portal covers Section 44ADA eligibility verification, form selection, FIRC reconciliation for foreign income, GST LUT compliance, advance tax single-installment optimisation and e-verification. Each step is owned by a named senior CA with documented hand-off.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Document Collection</h3>
                    <p class="step-description">Receive gross receipts ledger, expense vouchers, Form 26AS, AIS, bank statements, FIRC for foreign income, Section 194J or 194JB TDS certificates. Secure shared workspace with named CA point of contact.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents in</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Workspace activated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Documents</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Income Head Classification</h3>
                    <p class="step-description">Confirm profession falls under Section 44AA(1) specified list - legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration, authorised representative, film artist. Non-specified professions route to Section 44AD business presumptive.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PGBP confirmed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 44AA(1) verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Classified</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Section 44ADA Eligibility Check</h3>
                    <p class="step-description">Verify gross receipts under Rs 50 lakh standard or Rs 75 lakh enhanced (if 95 percent or more digital receipts). Check entity type (individual or partnership firm, not LLP or HUF). Compare 44ADA presumptive vs ITR-3 regular books with expense projection.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligibility verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Route decided</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">44ADA Check</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Form Selection</h3>
                    <p class="step-description">ITR-4 Sugam if opting Section 44ADA presumptive. ITR-3 if regular books, mixed salary plus profession income, capital gains, foreign assets or receipts above Rs 75 lakh. Wrong form triggers Section 139(9) defective return notice.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form locked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schema confirmed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Form</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">FIRC and Foreign Income Reconciliation</h3>
                    <p class="step-description">For service exporters, match each foreign currency credit to an FIRC. Classify under correct RBI purpose code (P0802 software, P0806 business consultancy, P1006 medical, P1007 architectural). Report under Schedule FA where applicable. Form 67 filed BEFORE ITR for DTAA Foreign Tax Credit.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FIRC reconciled</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 67 filed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">FIRC</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">GST Integration</h3>
                    <p class="step-description">Confirm LUT in Form RFD-11 is in force for the financial year. If GST refund claim under Rule 89 of CGST Rules exists, prepare Form GST RFD-01 with FIRC and shipping bill supporting documents. CBIC Circular 37/11/2018-GST compliance check.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> LUT validated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RFD-01 ready</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">GST</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Computation and Validation</h3>
                    <p class="step-description">Calculate tax under chosen regime (old vs new Section 115BAC), apply Section 87A rebate if eligible, run advance tax single-installment optimisation under 44ADA. Validate ITR on portal and resolve every error and warning.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax computed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Validator passed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Computed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Submission and E-Verification</h3>
                    <p class="step-description">File the return electronically before the Section 139(1) due date. E-verify within 30 days per CBDT Notification 5/2022 via Aadhaar OTP, net banking, bank account EVC or DSC. Track ITR-V acknowledgement with 15-digit number.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-Verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Submitted</span>
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
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                <p>The Patron document checklist for professional ITR is segmented by filing route (Section 44ADA versus ITR-3 regular books) and by income type (Indian-only versus foreign income with FIRC). Universal documents apply to all professionals; additional documents apply for the specific route.</p>
                <p><strong>Universal (all professionals):</strong></p>
                <ul>
                    <li>PAN and Aadhaar (linked under Section 139AA).</li>
                    <li>Bank account details for refund credit; statements for the relevant financial year covering all operating accounts.</li>
                    <li>AIS (Annual Information Statement) download and Form 26AS for the financial year.</li>
                    <li>TDS certificates - Section 194J at 10 percent on professional fees and Section 194JB at 2 percent on technical services. Form 16A from each deductor.</li>
                    <li>Gross receipts register or invoicing summary with client-wise breakdown.</li>
                    <li>Section 80C, 80D, 80G, 80CCD investment proofs (if opting old regime).</li>
                </ul>
                <p><strong>Under Section 44ADA (ITR-4 Sugam):</strong></p>
                <ul>
                    <li>Only gross receipts total and bank statements - no expense vouchers required.</li>
                    <li>Confirmation that 95 percent or more of receipts are non-cash (for the enhanced Rs 75 lakh limit).</li>
                    <li>Single-installment advance tax challan by 15 March of the FY.</li>
                </ul>
                <p><strong>Under ITR-3 (Regular Books):</strong></p>
                <ul>
                    <li>Expense vouchers - rent, salaries paid, professional fees paid out, equipment purchases.</li>
                    <li>Depreciation schedule under Section 32 for fixed assets (laptop, equipment, vehicle).</li>
                    <li>Books of account (cash book, ledger, journal) maintained under Section 44AA(3) and Rule 6F.</li>
                    <li>Tax audit Form 3CB-3CD by 30 September if gross receipts exceed Rs 75 lakh.</li>
                </ul>
                <p><strong>Freelancers with Foreign Income:</strong></p>
                <ul>
                    <li>FIRC or e-FIRA from each bank, PayPal, Stripe, Payoneer or Wise transaction.</li>
                    <li>Foreign invoices in convertible currency with client address outside India.</li>
                    <li>GST LUT acknowledgement (Form RFD-11) for the relevant FY.</li>
                    <li>RBI purpose code mapping - P0802 software exports, P0806 business consultancy, P1006 medical consultancy, P1007 architectural services.</li>
                    <li>Schedule FA disclosure for foreign bank accounts or assets (Resident Ordinarily Resident only).</li>
                </ul>
                <p><strong>Key Outputs You Receive:</strong> Filed ITR-3 or ITR-4 acknowledgement with e-verification confirmation. Section 44ADA versus regular taxation comparison memo with chosen-route justification. AIS, Form 26AS and bank statement reconciliation with variance notes. Advance tax computation for the current year under presumptive single-installment route. FIRC reconciliation summary tying invoices to bank credits (for foreign income cases). GST LUT confirmation and export schedule (for service exporters).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Professional ITR Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Wrong form - salaried doctor or lawyer filing ITR-1 instead of ITR-3/ITR-4</strong></td><td>Section 194J TDS on side practice receipts shown in Form 26AS but the taxpayer files ITR-1 because salary is the dominant income. The portal accepts the filing but generates a Section 139(9) defective return notice with a 15-day correction window.</td><td>Patron flags every Form 26AS line showing Section 194J or 194JB TDS and routes the filing to ITR-3 (or ITR-4 if eligible) by default. Schedule BP completed alongside Schedule S in ITR-3.</td></tr>
                        <tr><td><strong>Section 44ADA limit confusion - Rs 50 lakh vs Rs 75 lakh</strong></td><td>The enhanced Rs 75 lakh limit requires cash receipts to be under 5 percent of total - meaning 95 percent or more through banking, UPI, account-payee cheques or electronic clearing. Cash exceeding 5 percent disqualifies the higher cap.</td><td>Patron confirms the cash receipts proportion before invoking the Rs 75 lakh limit. Cash exceeding 5 percent reverts to the Rs 50 lakh cap, with Section 44AB tax audit triggered above.</td></tr>
                        <tr><td><strong>Software developer claiming Section 44ADA (not specified profession)</strong></td><td>Software developers and IT consultants without engineering degrees are NOT in the Section 44AA(1) specified list - they should use Section 44AD business presumptive, not 44ADA. IT Department notices have specifically questioned 44ADA use by software professionals.</td><td>Patron position: software developers route to Section 44AD (6 percent digital, 8 percent cash). Engineers with degrees can use 44ADA under technical consultancy. Section 194J TDS context flagged for review.</td></tr>
                        <tr><td><strong>Foreign income reported without FIRC, GST refund denied</strong></td><td>Without FIRC or e-FIRA, the transaction does not qualify as export of services under Section 2(6) of the IGST Act. Form GST RFD-01 refund claims under Rule 89 are rejected; 18 percent IGST applies retrospectively on the export invoice.</td><td>Patron co-ordinates FIRC collection from banks, PayPal, Stripe, Payoneer and Wise before filing. Each foreign invoice mapped to an FIRC with RBI purpose code. Form 67 DTAA Foreign Tax Credit filed before ITR submission.</td></tr>
                        <tr><td><strong>GST LUT not renewed annually, IGST liability triggered on exports</strong></td><td>Form RFD-11 LUT is valid for ONE financial year only and must be renewed before 31 March each year. Without a valid LUT, 18 percent IGST applies on export invoices with cash flow blocked until refund.</td><td>Patron LUT renewal calendared 15 days before each FY start. Annual LUT acknowledgement filed in client GST portal. CBIC Circular 37/11/2018-GST compliance verified.</td></tr>
                        <tr><td><strong>LLP claiming Section 44ADA (not eligible)</strong></td><td>LLPs cannot use Section 44ADA regardless of profession - the section explicitly restricts to individuals and partnership firms (non-LLP). Section 8 companies and HUFs are also excluded. Filing ITR-4 for an LLP results in defective return.</td><td>Patron pre-screens entity type during scoping. LLPs route to ITR-5 with regular books under Section 44AA. Partnership firms in specified professions can use 44ADA via ITR-4.</td></tr>
                        <tr><td><strong>Advance tax default under Section 44ADA</strong></td><td>Section 44ADA taxpayers can pay 100 percent advance tax in a single installment by 15 March. Many miss this single date entirely and face Section 234B (1 percent per month) and 234C (1 percent per month) interest on the shortfall.</td><td>Patron advance tax computation delivered in February with 15 March single-installment challan ready. Calendar reminder issued for the deadline.</td></tr>
                        <tr><td><strong>Schedule FA omission for Resident professionals with foreign accounts</strong></td><td>Resident Ordinarily Resident (ROR) professionals with foreign bank accounts (PayPal balance held overseas, foreign-currency wallet, RSU brokerage abroad) must disclose under Schedule FA. Non-disclosure attracts Black Money Act 2015 Section 42 penalty of Rs 10 lakh.</td><td>Patron Schedule FA workflow captures initial value, peak value during FY and closing balance for each foreign asset. CRS and FATCA data cross-checked against AIS.</td></tr>


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
            <h2 class="section-title">Professional ITR Filing Fees (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Section 44ADA presumptive (specified profession, receipts up to Rs 50 lakh)</td><td>ITR-4 Sugam with 50 percent deemed profit, single-installment advance tax, AIS and Form 26AS reconciliation</td><td class="table-amount">Rs 1,499</td></tr>
                        <tr><td>Section 44ADA enhanced limit (95 percent or more digital, receipts up to Rs 75 lakh)</td><td>ITR-4 with 5 percent cash test verification; cash receipt percentage documented in working paper</td><td class="table-amount">Rs 1,999</td></tr>
                        <tr><td>Mixed Salary plus Profession ITR-3</td><td>Schedule S salary plus Schedule BP profession; regime arbitrage memo; Section 194J TDS reconciliation</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>ITR-3 with regular books, no audit (receipts under Rs 75 lakh)</td><td>Full books under Section 44AA(3) and Rule 6F; Section 30 to 37 expense deductions; Section 32 depreciation schedule</td><td class="table-amount">Rs 4,999</td></tr>
                        <tr><td>ITR-3 with Section 44AB tax audit (receipts above Rs 75 lakh)</td><td>Form 3CB-3CD tax audit report due 30 September; ITR-3 due 31 October; co-ordination with statutory auditor</td><td class="table-amount">Rs 14,999</td></tr>
                        <tr><td>Foreign income with FIRC and DTAA relief (Form 67)</td><td>FIRC consolidation across banks/PayPal/Stripe/Wise/Payoneer; RBI purpose code mapping; Form 67 Foreign Tax Credit</td><td class="table-amount">Rs 6,999</td></tr>
                        <tr><td>GST LUT filing (Form RFD-11) - annual renewal</td><td>Letter of Undertaking under Rule 96A of CGST Rules for zero-rated export of services; CBIC Circular 37/11/2018-GST compliance</td><td class="table-amount">Rs 1,499</td></tr>
                        <tr><td>IGST refund claim under Rule 89 (Form GST RFD-01)</td><td>IGST refund on export of services with FIRC trail; CBIC processing typically 30 to 60 days post submission</td><td class="table-amount">From Rs 4,999</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for Section 44ADA ITR-4 filing; GST registration, monthly GSTR-3B/GSTR-1 filing and TDS return services quoted separately</td><td class="table-amount"><strong>Starting from INR 1,499 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing for Professionals consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20professional%20ITR%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Patron Engagement Turnaround</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>ITR-4 under Section 44ADA presumptive</td><td class="table-amount">24 to 72 hours</td></tr>
                        <tr><td>ITR-3 with regular books, no audit</td><td class="table-amount">3 to 5 working days</td></tr>
                        <tr><td>ITR-3 with Section 44AB tax audit (Form 3CB-3CD)</td><td class="table-amount">7 to 10 working days post audit</td></tr>
                        <tr><td>Foreign income with multiple FIRCs and DTAA relief</td><td class="table-amount">5 to 8 working days</td></tr>
                        <tr><td>GST LUT filing (Form RFD-11)</td><td class="table-amount">Same-day acknowledgement</td></tr>
                        <tr><td>IGST refund processing by CBIC (Rule 89)</td><td class="table-amount">30 to 60 days</td></tr>
                        <tr><td><strong>Statutory Deadlines AY 2026-27</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>ITR-3 and ITR-4 non-audit cases (NEW deadline for AY 2026-27)</td><td class="table-amount">31 August 2026</td></tr>
                        <tr><td>Tax audit report (Form 3CB-3CD) under Section 44AB</td><td class="table-amount">30 September 2026</td></tr>
                        <tr><td>ITR-3 audit cases (gross receipts above Rs 75 lakh)</td><td class="table-amount">31 October 2026</td></tr>
                        <tr><td>Advance tax under Section 44ADA - single installment</td><td class="table-amount">15 March 2026</td></tr>
                        <tr><td>GST LUT renewal (Form RFD-11) - before start of FY</td><td class="table-amount">Before 31 March 2026</td></tr>
                        <tr><td>Belated return under Section 139(4) with Section 234F fee</td><td class="table-amount">31 December 2026</td></tr>
                        <tr><td>Revised return under Section 139(5)</td><td class="table-amount">31 March 2027</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    With the 31 August 2026 due date for non-audit ITR-3 and ITR-4, engage Patron Accounting by 31 July 2026 to avoid portal congestion. Audit cases need engagement by 15 July to meet the 30 September Form 3CB-3CD audit report deadline. Late filing triggers Section 234F fee up to Rs 5,000 plus Section 234A interest at 1 percent per month. Section 271A penalty up to Rs 25,000 applies for failure to maintain Rule 6F books; Section 271B penalty at 0.5 percent of gross receipts (capped at Rs 1,50,000) for failure to get Section 44AB audit done.

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
            <h2 class="section-title">Why CA-Assisted Professional ITR Filing</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Form Selection Correctness</h3><p>Avoids Section 139(9) defective return notices. Every Form 26AS line with Section 194J or 194JB TDS routed to ITR-3 or ITR-4 by default - not ITR-1, regardless of salary dominance.</p></article>
    <article class="feature-card"><h3>Section 44ADA Versus ITR-3 Memo</h3><p>Side-by-side comparison of 50 percent deemed profit under 44ADA vs actual expense-based profit under ITR-3. Documented decision rationale retained for scrutiny defence.</p></article>
    <article class="feature-card"><h3>FIRC Reconciliation Per Invoice</h3><p>Every foreign currency credit mapped to an FIRC across banks, PayPal, Stripe, Wise and Payoneer. Avoids GST refund rejection under Rule 89 of CGST Rules.</p></article>
    <article class="feature-card"><h3>Annual GST LUT Calendar</h3><p>Form RFD-11 renewal calendared before each FY. Preserves zero-rated export status; avoids 18 percent IGST on export invoices and cash flow blockage.</p></article>
    <article class="feature-card"><h3>Advance Tax Single-Installment Optimisation</h3><p>Section 44ADA advance tax delivered with 15 March single-installment challan ready. Avoids Section 234B and 234C interest at 1 percent per month on shortfall.</p></article>
    <article class="feature-card"><h3>12 Months Notice Support Included</h3><p>Section 139(9) defective return, Section 143(1) demand from CPC, Section 142(1) enquiry and Section 148 reassessment - all covered by named CA partner for 12 months at no extra cost.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 2,500+ Professionals Across India</h2>
            <div class="content-text">
                
                <p><strong>2,500+ Professionals Served | 4.9 Google Rating | 10,000+ Returns Filed | 15+ Years in Practice</strong></p>
                <p>As a freelance design consultant with clients in the US, Germany and Singapore, my FIRC trail was scattered across PayPal, Wise and three banks. Patron consolidated 47 FIRCs against my export invoices, filed the GST refund under Rule 89, and ITR-3 with DTAA relief on Form 67. Refund of Rs 2.8 lakh credited in 35 days. - Independent UI consultant, Bengaluru.</p>
                <p>Our four-partner advocacy practice hit Rs 1.2 crore receipts last year, crossing the Rs 75 lakh tax audit threshold. Patron coordinated Form 3CB-3CD audit and filed ITR-3 by 25 October 2025. Complete books reconciliation in 9 working days. - Senior Partner, law firm, Mumbai.</p>
                <p>I'm a consultant doctor at three hospitals plus my own clinic. Three Form 16A under Section 194J and clinic receipts under 44ADA. Patron consolidated all four streams, claimed the right TDS credit and finalised ITR-3 with the 50 percent presumptive on clinic income. - Cardiologist, Pune.</p>
                <p><strong>Outcome Proof:</strong> Across the AY 2025-26 cycle, Patron filed 2,500+ professional ITRs with zero defective return notices under Section 139(9), 99 percent on-time submission ahead of due dates, and Rs 1.6 crore aggregate IGST refunds recovered for service exporters.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves professionals across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 44ADA vs ITR-3 Regular Books - Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Section 44ADA Presumptive (ITR-4 Sugam)</th>
                            <th>ITR-3 Regular Books</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Profit Calculation</strong></td><td>50 percent of gross receipts treated as deemed profit; no expense deduction</td><td>Actual profit - gross receipts minus all allowable expenses under Sections 30 to 37; Section 32 depreciation claimed</td></tr>
                        <tr><td><strong>Books of Account</strong></td><td>Waived; only gross receipts ledger needed</td><td>Full books under Section 44AA(3) and Rule 6F - cash book, ledger, journal</td></tr>
                        <tr><td><strong>Tax Audit Section 44AB</strong></td><td>Waived if gross receipts under Rs 75 lakh and 95 percent or more digital</td><td>Mandatory if gross receipts exceed Rs 75 lakh - Form 3CB-3CD due 30 September</td></tr>
                        <tr><td><strong>Expense Deductions</strong></td><td>NOT separately claimable (already embedded in the 50 percent deeming)</td><td>All Section 30 to 37 expenses claimable with vouchers - rent, salaries, depreciation, professional fees paid, equipment</td></tr>
                        <tr><td><strong>Advance Tax</strong></td><td>Single installment by 15 March of FY (100 percent)</td><td>Four installments by 15 June (15 percent), 15 September (45 percent cumulative), 15 December (75 percent), 15 March (100 percent)</td></tr>
                        <tr><td><strong>Gross Receipts Limit</strong></td><td>Rs 50 lakh standard; Rs 75 lakh if cash receipts 5 percent or less of total</td><td>No upper limit; tax audit triggers at Rs 75 lakh</td></tr>
                        <tr><td><strong>Entity Type</strong></td><td>Resident individuals and partnership firms only; LLPs and HUFs excluded</td><td>Individuals, HUFs, partnership firms (LLPs file ITR-5)</td></tr>
                        <tr><td><strong>ITR Form</strong></td><td>ITR-4 Sugam</td><td>ITR-3</td></tr>
                        <tr><td><strong>Best For</strong></td><td>Low-expense ratios, high net margins, simple practices, individual professionals with primarily digital receipts</td><td>Heavy equipment, employee salaries, depreciable assets, complex receipts, foreign income with FIRC, mixed salary plus profession scenarios</td></tr>


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
            <h2 class="section-title">Adjacent Patron Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong><a href="/itr-filing-for-freelancers-professionals/">ITR Filing for Freelancers and Professionals</a></strong> - sibling service for non-specified freelancer scenarios (software developers, content writers, designers, marketers) using Section 44AD business presumptive route.</li>
                    <li><strong><a href="/itr-for-salaries/">ITR Filing for Salaried Individuals</a></strong> - reference page for the salary component when combined with professional income in ITR-3 (Schedule S plus Schedule BP).</li>
                    <li><strong><a href="/itr-for-business/">ITR Filing for Business</a></strong> - for non-professional businesses including trading, manufacturing and service businesses outside Section 44AA(1) specified professions.</li>
                    <li><strong><a href="/tax-audit/">Tax Audit under Section 44AB</a></strong> - mandatory for professionals with gross receipts above Rs 75 lakh. Form 3CB-3CD preparation due 30 September - one month before ITR-3.</li>
                    <li><strong><a href="/tax-planning-services/">Tax Planning Services</a></strong> - regime choice (old vs new Section 115BAC), 80C investment structuring, advance tax planning for professionals before year-end.</li>
                    <li><strong><a href="/tds-return/">TDS Return Filing</a></strong> - Form 24Q and 26Q quarterly filing for professionals paying salaries or fees subject to TDS (clinic owners, law firms, CA firms).</li>
                    <li><strong><a href="/income-tax-notice/">Income Tax Notice Response</a></strong> - representation for Section 139(9), 143(1), 142(1), 143(3) and 148 notices.</li>
                    <li><strong><a href="/income-tax-return/">Income Tax Return Filing Master Hub</a></strong> - hub-and-spoke routing across all 7 ITR forms and 14 sub-services.</li>
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
                    <li><strong>Income Tax Act, 1961</strong> - governing statute for AY 2026-27 professional returns. The new Income Tax Act 2025 applies to Tax Year 2026-27 returns due in 2027. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department e-filing portal</a>.</li>
                    <li><strong>CGST Act, 2017</strong> - governs GST LUT regime under Rule 96A and IGST refund procedure under Rule 89 of CGST Rules 2017.</li>
                    <li><strong>Section 28</strong> - Profits and Gains from Business or Profession (PGBP) - chargeable head for all professional receipts.</li>
                    <li><strong>Section 44AA</strong> - maintenance of books of accounts for professionals; Section 44AA(1) lists nine specified professions; Section 44AA(3) and Rule 6F specify book-keeping requirements.</li>
                    <li><strong>Rule 6F, Income Tax Rules 1962</strong> - specifies books and documents to be maintained by specified professionals - cash book, journal, ledger, bills/receipts copies above Rs 25, daily case register for medical professionals.</li>
                    <li><strong>Section 44ADA</strong> - presumptive taxation at 50 percent of gross receipts for specified professionals; Rs 50 lakh limit standard, Rs 75 lakh enhanced if cash receipts 5 percent or less.</li>
                    <li><strong>Section 44AD</strong> - presumptive taxation for non-specified businesses; 6 percent of digital receipts or 8 percent of cash receipts; not applicable to LLPs.</li>
                    <li><strong>Section 44AB</strong> - tax audit threshold for professionals - Rs 75 lakh gross receipts; Form 3CB-3CD audit report.</li>
                    <li><strong>Section 32</strong> - depreciation on plant and machinery; available only under ITR-3 regular books, not under Section 44ADA presumptive.</li>
                    <li><strong>Section 37(1)</strong> - general expense deduction; covers Bar Council subscription, ICAI membership, professional indemnity insurance and other operational expenses.</li>
                    <li><strong>Section 194J</strong> - TDS at 10 percent on professional fees paid to specified professionals; 2 percent on technical services under Section 194JB.</li>
                    <li><strong>Section 90 and 91 read with Rule 128</strong> - DTAA relief and unilateral foreign tax credit; Form 67 must be filed BEFORE ITR submission.</li>
                    <li><strong>Section 234A, 234B and 234C</strong> - interest provisions on late filing and advance tax default; 1 percent per month each.</li>
                    <li><strong>Section 234F</strong> - late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh).</li>
                    <li><strong>Section 271A</strong> - penalty up to Rs 25,000 for failure to maintain Rule 6F books.</li>
                    <li><strong>Section 271B</strong> - penalty of 0.5 percent of gross receipts (capped at Rs 1,50,000) for failure to get Section 44AB tax audit done.</li>
                    <li><strong>Section 87A</strong> - rebate for Resident individuals; Rs 60,000 under new regime (zero tax up to Rs 12 lakh), Rs 12,500 under old regime.</li>
                    <li><strong>Section 115BAC</strong> - default new tax regime for AY 2026-27; Form 10-IEA filing for business and professional taxpayers opting out.</li>
                    <li><strong>Section 139AA</strong> - mandatory PAN-Aadhaar linkage.</li>
                    <li><strong>Rule 96A of CGST Rules 2017</strong> - GST LUT regime for service exports without IGST payment; Form RFD-11 annual filing.</li>
                    <li><strong>Rule 89 of CGST Rules and Form GST RFD-01</strong> - IGST refund claim procedure for service exporters with FIRC trail.</li>
                    <li><strong>CBIC Circular No. 37/11/2018-GST</strong> - LUT clarifications and operational guidance.</li>
                    <li><strong>Section 2(6) of the IGST Act 2017</strong> - definition of export of services; requires FIRC for foreign currency receipt.</li>
                    <li><strong>RBI Purpose Codes</strong> - P0802 software exports, P0806 business consultancy, P1006 medical consultancy, P1007 architectural services - mapped to FIRC at receipt classification.</li>
                    <li><strong>CBDT Notification 5/2022 dated 29 July 2022</strong> - 30-day e-verification window; ITR treated as invalid if not verified within window.</li>
                    <li><strong>Black Money (Undisclosed Foreign Income and Assets) Act 2015 Section 42</strong> - Rs 10 lakh penalty for undisclosed foreign assets in Schedule FA.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - <a href="https://incometaxindia.gov.in/Pages/communications/notifications.aspx" target="_blank" rel="noopener">CBDT Notifications</a>.</li>
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
                    <p class="faq-expanded__lead">Long-tail answers on professional ITR filing for AY 2026-27 - form selection between ITR-3 and ITR-4, Section 44ADA eligibility, Rs 50 lakh vs Rs 75 lakh turnover limit, fees, FIRC for freelancers, GST LUT under Rule 96A, due dates and Section 44ADA advance tax.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a professional file for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Professionals opting for Section 44ADA presumptive taxation file ITR-4 Sugam. Professionals with regular books, gross receipts above Rs 75 lakh, capital gains, or foreign assets file ITR-3. Salaried individuals with side professional income must also file ITR-3, not ITR-1. Filing the wrong form triggers a defective return notice under Section 139(9). LLPs and HUFs cannot use ITR-4 and must file ITR-5 with regular books.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can opt for Section 44ADA presumptive taxation?</h3>
                        <div class="faq-expanded__a"><p>Section 44ADA is available to resident individuals and partnership firms (not LLPs or HUFs) carrying on specified professions under Section 44AA(1): legal, medical, engineering, architecture, accountancy, technical consultancy, interior decoration, authorised representative, and film artist. The taxpayer must declare 50 percent of gross receipts as deemed profit. Software developers, content writers, and graphic designers are not specified professions and typically route to Section 44AD instead.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the turnover limit under Section 44ADA for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>The standard limit is Rs 50 lakh of gross receipts. The enhanced limit is Rs 75 lakh if cash receipts do not exceed 5 percent of total receipts, meaning at least 95 percent must come through banking channels, UPI, account payee cheques, or electronic clearing systems. Crossing Rs 75 lakh requires regular ITR-3 with books and triggers Section 44AB tax audit. The enhanced limit was introduced by Budget 2023 effective FY 2023-24 onwards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How much does CA-assisted professional ITR filing cost?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting professional ITR filing starts at Rs 1,499 for Section 44ADA presumptive ITR-4 filing. ITR-3 with regular books starts at Rs 4,999. ITR-3 with Section 44AB tax audit starts at Rs 14,999. Foreign income with FIRC reconciliation and Form 67 DTAA relief starts at Rs 6,999. Annual GST LUT filing in Form RFD-11 is Rs 1,499. IGST refund claims under Rule 89 start at Rs 4,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is FIRC mandatory for freelancers with foreign clients?</h3>
                        <div class="faq-expanded__a"><p>Yes. The Foreign Inward Remittance Certificate or e-FIRA is required to prove that payment was received in convertible foreign currency, which is a mandatory condition under Section 2(6) of the IGST Act for classifying a transaction as export of services. Without FIRC, GST refund claims under Rule 89 are rejected. Banks issue FIRC on wire transfers; PayPal, Stripe, Wise, and Payoneer provide FIRC or transaction statements for digital payouts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is GST LUT and why do freelancers need it?</h3>
                        <div class="faq-expanded__a"><p>Letter of Undertaking in Form RFD-11 is filed under Rule 96A of the CGST Rules allowing GST-registered exporters of services to export without paying 18 percent IGST upfront. Without a valid LUT, 18 percent IGST applies on export invoices with the cash blocked until a refund under Rule 89 is processed. LUT is valid for one financial year and must be renewed before 31 March each year. CBIC Circular No. 37/11/2018-GST clarifies the process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When is professional ITR due for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>For AY 2026-27, ITR-3 and ITR-4 non-audit cases are due 31 August 2026 - a new deadline introduced for AY 2026-27, distinct from the 31 July deadline applicable to ITR-1 and ITR-2. Professionals with gross receipts above Rs 75 lakh requiring Section 44AB tax audit have until 31 October 2026, with the Form 3CB-3CD audit report due by 30 September 2026 - one month before the ITR due date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need to pay advance tax under Section 44ADA?</h3>
                        <div class="faq-expanded__a"><p>Yes. Professionals opting for Section 44ADA can pay 100 percent of their advance tax liability in a single installment by 15 March of the financial year, rather than the four quarterly installments applicable to regular taxpayers. This single-installment route is the key cash-flow advantage of presumptive taxation. Default in advance tax triggers Section 234B and 234C interest at 1 percent per month on the shortfall.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Professional ka ITR kaunsa form bhare AY 2026-27 mein? (Which ITR form should professionals file for AY 2026-27)</h3>
                        <div class="faq-expanded__a"><p>AY 2026-27 ke liye specified professionals (doctor, lawyer, CA, architect, engineer, technical consultant, interior decorator, authorised representative, film artist) Section 44ADA presumptive scheme use kar sakte hain - ITR-4 Sugam file karke 50 percent gross receipts ko taxable profit dikhana hota hai. Limit Rs 50 lakh hai standard, aur Rs 75 lakh enhanced agar 95 percent receipts digital hain. Books nahi maintain karne padte. Regular books wale ya Rs 75 lakh se upar wale ITR-3 file karte hain. Software developers aur non-specified freelancers Section 44AD use karte hain. Due date 31 August 2026 hai non-audit cases ke liye. Patron Accounting Rs 1,499 se start hone wali filing offer karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>When is ITR-3/ITR-4 due for professionals for AY 2026-27?</strong> 31 August 2026 for non-audit cases; 31 October 2026 for audit cases under Section 44AB.</li>
                    <li><strong>What is the 44ADA deemed profit rate?</strong> 50 percent of gross receipts under Section 44ADA, on gross receipts up to Rs 75 lakh (with 95 percent digital condition).</li>
                    <li><strong>What is the TDS rate on professional fees?</strong> Section 194J at 10 percent on professional fees; Section 194JB at 2 percent on technical services.</li>
                    <li><strong>What is the Section 44AB tax audit threshold for professionals?</strong> Rs 75 lakh gross receipts under Section 44AB; Form 3CB-3CD audit report due 30 September.</li>
                    <li><strong>What is the advance tax deadline under Section 44ADA?</strong> Single installment by 15 March of the FY (100 percent of liability).</li>
                    <li><strong>What is the standard FIRC purpose code for software consultancy?</strong> P0802 (computer software services) for software exports; P0806 for business consultancy.</li>
                    <li><strong>What is the GST LUT renewal deadline?</strong> Before 31 March each year; Form RFD-11 valid for one FY only.</li>
                    <li><strong>Can LLPs use Section 44ADA?</strong> No. LLPs are explicitly excluded from Section 44ADA. They must file ITR-5 with regular books.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AY 2026-27 Professional ITR Countdown - Engage by 31 July 2026</h2>
            <div class="content-text">
                
                Statutory due date is 31 August 2026 for ITR-3 and ITR-4 non-audit cases (new AY 2026-27 deadline) and 31 October 2026 for Section 44AB audit cases. Form 3CB-3CD tax audit report must be filed by 30 September 2026 - one month before the ITR due date. Section 44ADA single-installment advance tax was due by 15 March 2026. Annual GST LUT renewal (Form RFD-11) must be filed before 31 March 2026. Late filing triggers Section 234F fee up to Rs 5,000, Section 234A interest at 1 percent per month, and Section 271B penalty at 0.5 percent of gross receipts for tax audit failures. Engage Patron Accounting by 31 July 2026 for non-audit cases or 15 July for audit-track engagements. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 20-minute scoping call - we respond within 2 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 Professional ITR Filing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Professional ITR Filing for AY 2026-27 is the final cycle governed by the Income Tax Act, 1961 before the new Income Tax Act 2025 framework takes effect for Tax Year 2026-27. Section 44ADA opt-in versus regular books decision, FIRC reconciliation for foreign income, GST LUT renewal under Rule 96A of CGST Rules, regime choice under Section 115BAC and advance tax single-installment optimisation are the critical decisions for AY 2026-27 - all locked in before the 31 August 2026 due date for non-audit cases or 31 October 2026 for audit cases.</p>
                <p>Patron Accounting routes every professional scenario - solo practitioner doctor, partnership law firm, CA in practice, architect studio, technical consultant, foreign-income freelancer, mixed salary plus profession - to the correct dedicated CA team. With offices in Pune, Mumbai, Delhi and Gurugram and 15+ years of practice, the firm has filed 2,500+ professional ITRs with zero defective return notices and 99 percent on-time submission in the AY 2025-26 cycle.</p>
                <p>Ready to file your AY 2026-27 professional ITR? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free consultation. We respond within 2 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20professional%20ITR%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pan-India Coverage and Related Patron Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional ITR filing is delivered remotely from our Pune, Mumbai, Delhi and Gurugram offices to professionals across India. The Income Tax e-filing portal is national; registered office location does not constrain the engagement. Explore the master ITR hub and adjacent compliance services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron Services</h3>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR Filing Master Hub</strong><span>All 7 ITR forms; 14 sub-services</span></div>
                    </a>
                    <a href="/itr-filing-for-freelancers-professionals/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Freelancers</strong><span>Software devs, designers via Section 44AD</span></div>
                    </a>
                    <a href="/itr-for-salaries/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Salaries</strong><span>Salary component in mixed ITR-3</span></div>
                    </a>
                    <a href="/itr-for-business/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Business</strong><span>Non-professional businesses ITR-3/ITR-4</span></div>
                    </a>
                    <a href="/tax-audit/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Audit Section 44AB</strong><span>Rs 75 lakh threshold; Form 3CB-3CD</span></div>
                    </a>
                    <a href="/tax-planning-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Planning Services</strong><span>Regime choice, 80C, advance tax</span></div>
                    </a>
                    <a href="/tds-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>TDS Return Filing</strong><span>Form 24Q, 26Q quarterly for firms</span></div>
                    </a>
                    <a href="/income-tax-notice/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Notice Response</strong><span>139(9), 143(1), 142(1), 148</span></div>
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
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 1 quarterly review plus post-Budget and post-CBDT/CBIC notification refresh. Triggers for review: Finance Act amendments affecting Section 44ADA limits or 44AB threshold, CBDT notifications on ITR-3/ITR-4 schema, CBIC circulars on GST LUT and Rule 89 refunds, RBI purpose code changes, Section 234F/234A interest rate changes, Section 194J/194JB TDS rate changes, new Income Tax Act 2025 transitional rules for Tax Year 2026-27 and Schedule FA reporting expansions. Sources: Income Tax Department portal (incometax.gov.in), CBDT notifications (incometaxindia.gov.in), CBIC circulars, Finance Act 2026, ICAI Direct Tax Committee publications and RBI FEMA notifications.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>

<!-- External JS Dependencies (loaded by master layout in production) -->


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
    var phoneVal = phoneInput.value.trim();
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
