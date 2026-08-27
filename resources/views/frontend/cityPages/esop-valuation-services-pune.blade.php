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
    <title>Pune ESOP Valuation: Rule 11UA FMV for SaaS Startups</title>
    <meta name="description" content="ESOP valuation for Pune's Hinjewadi and Kharadi tech startups - DCF, NAV and SEBI merchant banker FMV reports under Rule 11UA, starting at INR 24,999.">
    <meta name="keywords" content="ESOP Valuation Services Pune, ESOP Valuation Services in Pune, ESOP Valuation Services services in Pune, ESOP services Pune, ESOP Valuation Services cost Pune, ESOP Valuation Services consultants Pune, CA firm for ESOP Valuation Services Pune, ESOP advisory Pune">
    <link rel="canonical" href="/esop-valuation-services/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Pune ESOP Valuation: Rule 11UA FMV for SaaS Startups | Patron Accounting">
    <meta property="og:description" content="ESOP valuation for Pune's Hinjewadi and Kharadi tech startups - DCF, NAV and SEBI merchant banker FMV reports under Rule 11UA, starting at INR 24,999.">
    <meta property="og:url" content="/esop-valuation-services/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pune ESOP Valuation: Rule 11UA FMV for SaaS Startups | Patron Accounting">
    <meta name="twitter:description" content="ESOP valuation for Pune's Hinjewadi and Kharadi tech startups - DCF, NAV and SEBI merchant banker FMV reports under Rule 11UA, starting at INR 24,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/esop-valuation-services/pune#service",
      "name": "ESOP Valuation Services in Pune",
      "description": "Rule 11UA-compliant Fair Market Value reports for ESOPs and unquoted shares - DCF, NAV, CCA, CTA and Black-Scholes methodology. Coverage includes IBBI Registered Valuer reports for ESOP grant under Section 247 of the Companies Act 2013 and SEBI Category I Merchant Banker reports for ESOP exercise under Section 17(2)(vi) of the Income Tax Act 1961, plus FEMA NDI cross-border valuations under Rule 21.",
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.patronaccounting.com/esop-valuation-services"
      },
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "sameAs": "https://en.wikipedia.org/wiki/Pune"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Fair Market Value",
          "sameAs": "https://en.wikipedia.org/wiki/Fair_market_value"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "ESOP Valuation Service Plans",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "IBBI Registered Valuer FMV Report (NAV)",
            "priceCurrency": "INR",
            "price": "24999",
            "description": "Net Asset Value methodology for asset-heavy or early-stage companies; ESOP grant under Section 62(1)(b)"
          },
          {
            "@type": "Offer",
            "name": "SEBI Merchant Banker FMV Report (DCF)",
            "priceCurrency": "INR",
            "price": "24999",
            "description": "Discounted Cash Flow methodology by SEBI Category I Merchant Banker; for Rule 11UA(2)(b) and Section 17(2)(vi) at exercise"
          },
          {
            "@type": "Offer",
            "name": "FEMA NDI Cross-Border Valuation",
            "priceCurrency": "INR",
            "price": "24999",
            "description": "Merchant Banker or CA report under Rule 21 of FEMA Non-Debt Instruments Rules 2019 for cross-border share issuance and transfer"
          },
          {
            "@type": "Offer",
            "name": "Annual Valuation Retainer (4 events)",
            "priceCurrency": "INR",
            "price": "24999",
            "description": "Bundled coverage for grant, exercise, funding round and cross-border valuation events with 180-day validity tracking"
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/esop-valuation-services/pune#breadcrumb",
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
          "name": "ESOP Services",
          "item": "https://www.patronaccounting.com/esop-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESOP Services in Pune",
          "item": "https://www.patronaccounting.com/esop-services/pune"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "ESOP Valuation",
          "item": "https://www.patronaccounting.com/esop-valuation-services/pune"
        }
      ]
    },
    {
      "@type": "LocalBusiness",
      "additionalType": "https://schema.org/AccountingService",
      "@id": "https://www.patronaccounting.com/esop-valuation-services/pune#localbusiness",
      "name": "Patron Accounting LLP - ESOP Valuation Services, Pune",
      "url": "https://www.patronaccounting.com/esop-valuation-services/pune",
      "telephone": "+91-9459456700",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "addressCountry": "IN"
      },
      "parentOrganization": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who can do ESOP valuation in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For a Pune company filing with RoC Pune, two valuer regimes apply. For ESOP grant under the Companies Act, an IBBI Registered Valuer under Section 247 or a Merchant Banker may sign. For ESOP exercise under Section 17(2)(vi) of the Income Tax Act, only a SEBI-registered Category I Merchant Banker may sign per Rule 3(8). Chartered Accountants can sign NAV-based reports for Section 56(2)(x) and Section 50CA but cannot sign DCF reports under Rule 11UA(2)(b) after the 2018 amendment. Patron services this remotely for Hinjewadi, Kharadi and Baner companies."
          }
        },
        {
          "@type": "Question",
          "name": "Do Hinjewadi GCCs and captive centres in Pune need a different valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A Hinjewadi or Magarpatta global capability centre whose Indian entity is a subsidiary of a foreign parent usually needs two things - an Ind AS 102 Black-Scholes fair value for the share-based payment expense it recognises in its India P&L, and a FEMA NDI valuation under Rule 21 when shares move between the Indian entity and the overseas parent. This differs from a homegrown Pune startup that mainly needs a grant-date and exercise FMV. Patron scopes the captive-centre and the startup tracks separately."
          }
        },
        {
          "@type": "Question",
          "name": "How much does an ESOP valuation report cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOP valuation services for Pune companies start from INR 24,999 (exclusive of GST and government charges). The exact fee depends on the methodology, the company's stage and the number of valuation events, so stage-based scope is quoted on a free scoping call."
          }
        },
        {
          "@type": "Question",
          "name": "Does a Kharadi or Baner startup need a valuation before its first priced round?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Most Kharadi, Viman Nagar and Baner-Balewadi startups grant ESOPs to early engineers before any priced round, so a grant-date Fair Market Value under Section 247 read with Rule 11UA is needed to set the exercise price. At pre-revenue or seed stage this is usually a Net Asset Value report; as the company builds revenue toward Series A it moves to a DCF basis signed by a Merchant Banker. Doing it early keeps the exercise price low and survives the next investor's diligence."
          }
        },
        {
          "@type": "Question",
          "name": "What is Rule 11UA of the Income Tax Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 11UA of the Income Tax Rules 1962 prescribes how to compute Fair Market Value of unquoted equity shares. Rule 11UA(1) covers NAV-based FMV for Section 56(2)(x) and similar contexts. Rule 11UA(2) covers DCF and other methods (originally for Section 56(2)(viib) angel tax, now abolished) and continues to apply for FEMA NDI valuations and other regulatory purposes."
          }
        },
        {
          "@type": "Question",
          "name": "How often should an ESOP valuation be refreshed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For ESOP exercise FMV under Section 17(2)(vi), the valuation must not be older than 180 days from the exercise date - a Merchant Banker refresh is required at least every 180 days. For grant-date FMV under the Companies Act, refresh on every fresh grant batch. For Ind AS 102 expense recognition, an annual Black-Scholes refresh aligned to the financial year-end is typical. Patron's annual retainer tracks all three cycles."
          }
        },
        {
          "@type": "Question",
          "name": "Is Section 56(2)(viib) angel tax still applicable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 56(2)(viib) has been abolished by the Finance Act 2024 with effect from FY 2025-26 (1 April 2025) for all classes of investors - resident and non-resident. However, Rule 11UA methodology continues to apply for Section 56(2)(x) on the recipient, Section 50CA on the seller, FEMA NDI cross-border valuations, ESOP perquisite tax under Section 17(2)(vi) and Ind AS 102 accounting. Legacy assessments for FY 2023-24 and earlier years remain open."
          }
        },
        {
          "@type": "Question",
          "name": "What valuation is needed for foreign investor share issuance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Rule 21 of the FEMA Non-Debt Instruments Rules 2019, issuance of equity instruments to non-residents must be at a price not less than the Fair Market Value certified by a SEBI-registered Merchant Banker or a Chartered Accountant using internationally accepted pricing methods (most commonly DCF). The report is filed alongside FC-GPR within 30 days of issuance. The 10 percent safe harbour applies for NAV-method valuations to non-residents."
          }
        }
      ],
      "datePublished": "2026-06-24T08:00:00+05:30",
      "dateModified": "2026-06-24T08:00:00+05:30"
    }
  ]
}</script>

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
/* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
#who-section ul li:not(.nav-item) > strong:first-child { flex: 0 0 300px; max-width: 300px; }
@media (max-width: 768px) { section ul li:not(.nav-item) { flex-wrap: wrap; } #who-section ul li:not(.nav-item) > strong:first-child { flex-basis: 100%; max-width: 100%; } }
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
                        ESOP Valuation Services in Pune
                    </h1>

                    <p class="mb-4" style="font-size:17px;color:var(--text-secondary);line-height:1.6;">Rule 11UA-compliant FMV reports for Hinjewadi, Kharadi and Baner-Balewadi startups and Chakan/MIDC manufacturers, with MGT-14, PAS-3 and FC-GPR routed through RoC Pune.</p>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 24 June 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reports:</span> IBBI Registered Valuer FMV at grant; SEBI Merchant Banker FMV at exercise; FEMA NDI valuation for cross-border</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From INR 24,999 (Exl GST and Govt. Charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Methodology:</span> DCF, NAV, CCA, CTA and Black-Scholes under Rule 11UA, Companies Act and FEMA NDI Rules</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 working days from data submission to signed report</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Pan-India coverage from Pune, Mumbai, Delhi and Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20an%20ESOP%20valuation%20scoping%20call." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - ESOP Valuation',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'ESOP Valuation Services', 'label' => 'ESOP Valuation Services', 'selected' => true, 'disabled' => false],
                            ['value' => 'ESOP Services', 'label' => 'ESOP Services', 'selected' => false, 'disabled' => false],
                            ['value' => 'ESOP Scheme Design', 'label' => 'ESOP Scheme Design', 'selected' => false, 'disabled' => false],
                            ['value' => 'ESOP Management and Compliance', 'label' => 'ESOP Management &amp; Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'Actuarial Valuation', 'label' => 'Actuarial Valuation for Employee Benefits', 'selected' => false, 'disabled' => false],
                            ['value' => 'Issue of Shares', 'label' => 'Issue of Shares (PAS-3)', 'selected' => false, 'disabled' => false],
                            ['value' => 'FDI Compliance', 'label' => 'FDI Compliance (FC-GPR, FC-TRS)', 'selected' => false, 'disabled' => false],
                            ['value' => 'Transfer of Shares', 'label' => 'Transfer of Shares', 'selected' => false, 'disabled' => false],
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
        <!-- Testimonial cards rendered below -->

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
                    <p>Trusted by founders, CFOs and CS teams for Rule 11UA-compliant ESOP and share valuation reports.</p>
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
            <a href="#what-section" class="toc-btn">What Is ESOP Valuation</a>
            <a href="#who-section" class="toc-btn">When You Need</a>
            <a href="#services-section" class="toc-btn">Deliverables</a>
            <a href="#procedure-section" class="toc-btn">Procedure</a>
            <a href="#documents-section" class="toc-btn">Data Checklist</a>
            <a href="#challenges-section" class="toc-btn">Issues</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Method Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Valuation Services - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Valuation Services at a Glance</strong></p>
                    <p>ESOP valuation services produce signed Fair Market Value (FMV) reports used to price option grants, compute perquisite tax at exercise, file FEMA cross-border issuances and support Section 50CA and Section 56(2)(x) compliance. Two valuer regimes apply - IBBI-Registered Valuer under Section 247 of the Companies Act 2013 for grant valuations, and SEBI-registered Category I Merchant Banker under Rule 3(8) of the Income Tax Rules for FMV at exercise. Patron coordinates both ends in a single engagement.</p>
                </div>
                <p><div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>Primary Rule</td><td>Rule 11UA, Income Tax Rules 1962 + Section 247, Companies Act 2013 + FEMA NDI Rules 2019</td></tr>
        <tr><td>Valuer at Grant (Companies Act)</td><td>IBBI Registered Valuer under Section 247 or Merchant Banker</td></tr>
        <tr><td>Valuer at Exercise (Income Tax)</td><td>SEBI Category I Merchant Banker only (Rule 3(8) Income Tax Rules)</td></tr>
        <tr><td>Methods Available</td><td>DCF, NAV, CCA, CTA, PWERM, OPM, Milestone, Replacement Cost, Black-Scholes (for Ind AS 102 expense)</td></tr>
        <tr><td>Validity at Exercise</td><td>Not older than 180 days from the exercise date</td></tr>
        <tr><td>Refresh Cycle</td><td>Annual at minimum; refresh on every fresh grant; immediately after a funding round</td></tr>
        <tr><td>Cost</td><td>Quoted on scoping call</td></tr>
    </tbody>
</table>
</div></p>
                <p>For Pune's product and SaaS founders - whether in a Hinjewadi development centre, a Kharadi-Viman Nagar startup, or a Baner-Balewadi venture - ESOP valuation is the technical backbone of every grant, exercise, allotment, transfer and cross-border share movement. Pune teams typically grant options to early engineers well before a priced round, so the grant-date FMV is set on a Net Asset Value or early-DCF basis and refreshed as the company scales toward Series A out of the local venture pipeline. A weak valuation defends nothing at scrutiny; a strong one survives diligence, Income Tax assessment, RBI compounding and Ind AS 102 audit. Patron Accounting LLP issues Rule 11UA-compliant FMV reports through panel IBBI-Registered Valuers and SEBI-registered Category I Merchant Bankers, with the CA and CS team coordinating data flow, methodology choice and downstream filings for companies filing with RoC Pune.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Are ESOP Valuation Services</h2>
                <div class="content-text what-is-definition">
                    
                    <p>When a Hinjewadi SaaS company or a Chakan manufacturer puts a number on its unquoted equity shares, that number has to come from a signed Fair Market Value (FMV) report. ESOP valuation services deliver exactly that - the FMV used to fix the exercise price of stock option grants, to compute the <a href="/esop-perquisite-tax-section-17-2-vi/pune">perquisite tax an employee pays at exercise under Section 17(2)(vi)</a> of the Income Tax Act 1961, and to certify the price at which shares are issued to or transferred from non-residents under the FEMA NDI Rules 2019.</p>
                    <p>What makes a report defensible is the rulebook it follows: Rule 11UA of the Income Tax Rules 1962 for the FMV computation, Section 247 of the Companies Act 2013 read with the Companies (Registered Valuers and Valuation) Rules 2017 for who may sign a Companies Act report, and Rule 21 of the FEMA Non-Debt Instruments Rules 2019 for cross-border pricing.</p>
                    <p>Depending on the purpose, the signing valuer is either an IBBI-Registered Valuer or a SEBI-registered Category I Merchant Banker. A typical Pune founder ends up needing both within the same year, so Patron Accounting LLP runs both tracks under one engagement and keeps every downstream filing routed through RoC Pune - PAS-3, FC-GPR, FC-TRS, MGT-14 and the Section 17(2)(vi) perquisite TDS - tied back to a single, consistent FMV.

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Valuation:</strong></p>
                    <p><strong>Fair Market Value (FMV):</strong> The price an asset would fetch in an arm's-length sale on the valuation date; for unquoted shares, FMV is determined per Rule 11UA.</p>
                    <p><strong>IBBI Registered Valuer:</strong> Valuer registered with the Insolvency and Bankruptcy Board of India under Section 247 of the Companies Act 2013, eligible to issue valuation reports including ESOP grant valuations.</p>
                    <p><strong>Category I Merchant Banker:</strong> SEBI-registered merchant banker eligible to issue valuation reports under Rule 11UA(2) for DCF and Rule 3(8) of Income Tax Rules for ESOP exercise FMV under Section 17(2)(vi).</p>
                    <p><strong>DCF:</strong> Discounted Cash Flow - present value of projected free cash flows discounted at WACC; standard for growth-stage revenue-generating companies.</p>
                    <p><strong>NAV:</strong> Net Asset Value - book value of net assets divided by equity shares; used for asset-heavy companies and default under Rule 11UA(1)(c)(b) for Section 56(2)(x) and Section 50CA.</p>
                    <p><strong>Black-Scholes:</strong> Option pricing model used under Ind AS 102 for share-based payment expense recognition; NOT a grant-date FMV method.

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Valuation</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Two-Valuer Regime</span>
                        <strong>IBBI + SEBI Merchant Banker</strong>
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
            <h2 class="section-title">When You Need an ESOP Valuation</h2>
            <div class="content-text">
                
                <p>For a Pune company, a valuation is rarely a one-off - it gets triggered by a specific event in the cap-table lifecycle. A Baner SaaS startup hits the first two triggers below before it has even raised; a Kharadi GCC subsidiary lives mostly on the cross-border and Ind AS 102 lines. These are the moments Patron is engaged for:</p>
                <ul>
                    <li><strong>When the ESOP scheme is first designed:</strong> a grant-date FMV to set the exercise price formula, signed by an IBBI Registered Valuer under Section 62(1)(b) - the typical starting point for a Hinjewadi seed startup pooling options for its first engineers.</li>
                    <li><strong>When a fresh grant batch goes out:</strong> a refreshed FMV is needed if the last report is more than 180 days old.</li>
                    <li><strong>When an employee exercises:</strong> a Merchant Banker FMV under Section 17(2)(vi) drives the perquisite tax, and it must not be older than 180 days on the exercise date.</li>
                    <li><strong>When a funding round closes with a foreign investor:</strong> an FMV for the FC-GPR filing on issuance to non-residents under Rule 21 of the NDI Rules.</li>
                    <li><strong>When a Chakan or MIDC manufacturer recognises annual share-based pay:</strong> a Black-Scholes fair value of unvested options under Ind AS 102 for the compensation expense.</li>
                    <li><strong>When shares move cross-border between a Pune entity and its overseas parent:</strong> a FEMA NDI valuation, with the 10 percent safe harbour available where the NAV method is used.</li>
                    <li><strong>When a <a href="/esop-secondary-sale-advisory/pune">secondary share transfer</a> happens:</strong> an FMV for Section 50CA on the seller and Section 56(2)(x) on the buyer, plus PAS-3 if there is a fresh allotment.</li>
                    <li><strong>When Income Tax reopens a past fund raise:</strong> scrutiny defence on legacy Section 56(2)(viib) assessments that remain open.</li>
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
            <h2 class="section-title">ESOP Valuation in the Pune Market</h2>
            <div class="content-text" style="margin-bottom:40px;">
                <p>Pune has become one of Maharashtra's densest ESOP-issuing markets outside Mumbai, and the local pattern is distinct. The Hinjewadi Rajiv Gandhi Infotech Park and Magarpatta City house captive development centres and global capability centres whose Indian entities run <a href="/esop-accounting-ind-as-102">Ind AS 102 share-based payment accounting</a> and cross-border FEMA NDI valuations tied to a foreign parent. The Kharadi, Viman Nagar and EON IT Park startup cluster - and the Baner-Balewadi product corridor - is where bootstrapped and seed-stage SaaS founders grant options to engineering teams ahead of their first priced round, which is exactly where an early NAV or DCF grant-date FMV under Section 247 matters most.</p>
                <p>Pune-registered companies file with <strong>RoC Pune</strong> under the jurisdiction of the Ministry of Corporate Affairs, so PAS-3 allotment returns, MGT-14 board resolutions and FC-GPR cross-border filings route through the Pune registry. Patron benchmarks each engagement to the company's stage in the local pipeline: a Hinjewadi GCC subsidiary typically needs a FEMA-aligned report for its parent, while a Kharadi seed startup needs a defensible grant-date FMV that will survive its next Pune-based VC's diligence. We coordinate the IBBI Registered Valuer and SEBI Merchant Banker tracks so the same FMV evidence feeds the grant, the exercise perquisite and any cross-border issuance.</p>
            </div>
            <h2 class="section-title">Patron ESOP Valuation Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IBBI Registered Valuer FMV Report (Companies Act)</td><td>Signed Rule 11UA-compliant FMV report for ESOP grant date pricing under Section 62(1)(b). Methodology selected based on company stage - DCF for growth-stage, NAV for asset-heavy. Includes financial projections, WACC computation, sensitivity analysis and methodology rationale.</td></tr>
<tr><td>Merchant Banker FMV Report (Income Tax at Exercise)</td><td>SEBI Category I Merchant Banker signed FMV report for ESOP exercise under Section 17(2)(vi) and Rule 3(8) of the Income Tax Rules. Generated within 180 days of expected exercise. Drives perquisite tax computation, Form 16 inclusion and TDS calculation.</td></tr>
<tr><td>FEMA NDI Cross-Border Valuation Report</td><td>Merchant Banker or CA valuation report under Rule 21 of the FEMA NDI Rules 2019 for share issuance or transfer involving non-residents. Used for FC-GPR, FC-TRS and Form ESOP filings. For broader cross-border share matters, see <a href="/fdi-compliance/">FDI Compliance</a>.</td></tr>
<tr><td>Ind AS 102 Black-Scholes Expense Computation</td><td>Black-Scholes option pricing for compensation expense recognition over the vesting period - distinct from Rule 11UA FMV. Coordinated with the audit team. For the actuarial methodology, see <a href="/actuarial-valuation-services-for-employee-benefits/">Actuarial Valuation for Employee Benefits</a>.</td></tr>
<tr><td>Annual Valuation Retainer</td><td>Bundled engagement covering up to 4 valuation events per year - typical mix of one grant-date FMV, one exercise FMV, one funding-round FMV and one cross-border FMV. Patron tracks the 180-day validity window for each event and refreshes proactively.</td></tr>
<tr><td>Valuation Defence and Scrutiny Support</td><td>Response to Income Tax notices on prior year FMV (legacy angel tax assessments under Section 56(2)(viib)), RBI compounding queries under FEMA NDI Rules, and Series A diligence Q and A on valuation reports.</td></tr>

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
            <h2 class="section-title">Valuation Engagement Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From the first scoping call to a digitally signed report, Patron runs the same disciplined 8-step workflow for a Hinjewadi SaaS grant valuation and a Chakan manufacturer's cross-border report - both the IBBI Registered Valuer and SEBI Category I Merchant Banker deliverables sit inside one engagement.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Scoping Call</h3>
        <p class="step-description">A 30 to 45 minute call to pin down why the Pune company needs the report - grant, exercise, FEMA cross-border or Ind AS 102 - then the regulatory hook (Rule 11UA(1) vs 11UA(2), Section 247, NDI Rule 21), the valuer required (IBBI vs Merchant Banker) and the timeline.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Purpose confirmed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Valuer mapped</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="10" width="40" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="78" r="4" fill="#14365F"/><rect x="46" y="20" width="28" height="48" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div>
            <span class="illustration-label">Scoping Done</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Engagement Letter and Fee Quote</h3>
        <p class="step-description">Signed mandate with deliverable list, fee, valuation date and turnaround. Clear scope reduces downstream disputes.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fee locked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope frozen</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div>
            <span class="illustration-label">Mandate Live</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Data Request and Submission</h3>
        <p class="step-description">Audited financials for last 3 years, management projections for next 3 to 5 years, current cap table with all share classes, last funding round documents, board minutes, debt schedule and IP register.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Checklist shared</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data received</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="40" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 60 L60 20 M50 30 L60 20 L70 30" stroke="#E8712C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <span class="illustration-label">Data In</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Methodology Selection</h3>
        <p class="step-description">DCF for a revenue-generating Hinjewadi SaaS company, NAV for an asset-heavy Chakan manufacturer or a pre-revenue startup, a hybrid where the facts call for it - and the rationale is documented in the working papers.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Method chosen</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rationale logged</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="22" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="8" fill="#F5A623"/><rect x="56" y="22" width="8" height="10" fill="#14365F" rx="1"/><rect x="56" y="68" width="8" height="10" fill="#14365F" rx="1"/><rect x="22" y="46" width="10" height="8" fill="#14365F" rx="1"/><rect x="88" y="46" width="10" height="8" fill="#14365F" rx="1"/></svg></div>
            <span class="illustration-label">Method Set</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Valuation Build</h3>
        <p class="step-description">Financial projections review, WACC computation, terminal value calculation, sensitivity analysis and peer benchmarking. First-cut FMV report prepared.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> WACC built</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sensitivity run</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="55" width="12" height="22" fill="#E8712C"/><rect x="48" y="42" width="12" height="35" fill="#F5A623"/><rect x="68" y="30" width="12" height="47" fill="#14365F"/><rect x="88" y="22" width="12" height="55" fill="#25D366"/></svg></div>
            <span class="illustration-label">Numbers Done</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Management Review and Q&amp;A</h3>
        <p class="step-description">Share draft report with management; iterate on assumptions; obtain director certification of source data accuracy.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Draft shared</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certification signed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="45" r="22" fill="none" stroke="#14365F" stroke-width="2.5"/><line x1="68" y1="62" x2="92" y2="86" stroke="#E8712C" stroke-width="4" stroke-linecap="round"/><path d="M40 45 L48 53 L62 38" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <span class="illustration-label">Draft Cleared</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Final Signed Report</h3>
        <p class="step-description">Issued by IBBI Registered Valuer (Companies Act purposes) or SEBI Category I Merchant Banker (Income Tax or FEMA NDI purposes), digitally signed and PDF-delivered.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IBBI / MB signed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PDF delivered</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="90" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M84 78 L88 82 L96 73" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line x1="30" y1="30" x2="70" y2="30" stroke="#14365F" stroke-width="2" opacity="0.4"/><line x1="30" y1="45" x2="80" y2="45" stroke="#14365F" stroke-width="2" opacity="0.4"/></svg></div>
            <span class="illustration-label">Report Out</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Downstream Filings Coordination</h3>
        <p class="step-description">Share the report to drive PAS-3, FC-GPR, FC-TRS, MGT-14 or Section 17(2)(vi) perquisite TDS as applicable - all on the same FMV evidence.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAS-3 / FC-GPR</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 / TDS</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="35" height="60" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="20" width="35" height="60" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 50 L68 50 M62 44 L68 50 L62 56" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg></div>
            <span class="illustration-label">Filings Live</span>
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
            <h2 class="section-title">Information and Data Checklist</h2>
            <div class="content-text">
                
                <p>Once the scope is fixed, Patron sends a single consolidated data request. A SaaS startup in Baner will lean on its projections and IP register, while a Chakan manufacturer will lean on its fixed-asset schedule and debt - but the checklist starts the same way:</p>
                <ul>
                    <li>Audited financial statements for the last 3 financial years</li>
                    <li>Management projections for the next 3 to 5 years (revenue, EBITDA, capex, working capital)</li>
                    <li>Current cap table showing all share classes, options outstanding and conversion ratios</li>
                    <li>Existing ESOP scheme document, Board Resolutions and the SH-6 register</li>
                    <li>Latest funding round documents - Term Sheet, SHA, SSPA, PAS-3 and FC-GPR (if applicable)</li>
                    <li>Debt schedule including convertible notes, NCDs and bank borrowings</li>
                    <li>Intellectual property register, key contracts and the management bench profile</li>
                    <li>Prior valuation reports from the last 24 months</li>
                    <li>DPIIT Recognition Certificate (for startups) and the Section 80-IAC IMB Certificate, if obtained</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Valuation Issues and How We Resolve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AO rejecting a Hinjewadi SaaS startup's DCF</td><td>Legacy Section 56(2)(viib) demand additions; methodology disputes at scrutiny</td><td>Patron builds the methodology rationale around the company's stage, its revenue trajectory and SaaS peer benchmarks, and keeps a parallel NAV computation as a fallback defence. Section 56(2)(viib) is abolished from FY 2025-26 by the Finance Act 2024, but prior-year assessments remain open.</td></tr>
<tr><td>A report that has crossed 180 days by exercise date</td><td>Perquisite TDS exposed to reassessment under Rule 3(8); employee TDS may be challenged</td><td>The annual retainer refreshes the Merchant Banker FMV every 180 days or ahead of any exercise batch, with validity tracked automatically so no Pune exercise runs on a stale report.</td></tr>
<tr><td>FEMA FMV and Income Tax FMV not agreeing</td><td>Section 56(2)(x) on the recipient plus FEMA non-compliance on the issuer - dual regulator risk</td><td>Common where a Kharadi GCC issues to its overseas parent. Patron anchors both valuations to the same date and methodology so one report stands up to both regulators.</td></tr>
<tr><td>Treating Black-Scholes output as grant-date FMV</td><td>Founders using a Black-Scholes figure as per-share FMV - rejected at scrutiny</td><td>Black-Scholes gives the Ind AS 102 compensation expense fair value, not the per-share FMV under Rule 11UA. Patron keeps the two computations distinct and produces each where it is actually required.</td></tr>

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
            <h2 class="section-title">ESOP Valuation Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>IBBI Registered Valuer FMV - NAV</td><td>Quoted on scoping call<br><small>ESOP grant at seed stage; asset-heavy companies</small></td></tr>
<tr><td>IBBI Registered Valuer FMV - DCF</td><td>Quoted on scoping call<br><small>ESOP grant at growth stage; revenue-generating</small></td></tr>
<tr><td>SEBI Merchant Banker FMV at Exercise</td><td>Quoted on scoping call<br><small>Section 17(2)(vi) perquisite tax FMV</small></td></tr>
<tr><td>FEMA NDI Valuation Report</td><td>Quoted on scoping call<br><small>Cross-border issuance or transfer; FC-GPR / FC-TRS</small></td></tr>
<tr><td>DCF with Multiple Methods</td><td>Quoted on scoping call<br><small>Series B+ with CCA, CTA, PWERM overlay</small></td></tr>
<tr><td>Black-Scholes (Ind AS 102 Expense)</td><td>Quoted on scoping call<br><small>Annual compensation cost recognition</small></td></tr>
<tr><td>Annual Retainer (4 events)</td><td>Quoted on scoping call<br><small>Bundled grant + exercise + funding + cross-border</small></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Valuation consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20ESOP%20valuation%20scoping%20call." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Valuation Timelines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Day 0</td><td>Scoping call, engagement letter signed, data checklist shared</td></tr>
<tr><td>Day 1 to 3</td><td>Data submission by company; gap analysis by Patron</td></tr>
<tr><td>Day 4 to 7</td><td>Methodology selection, financial projections review, WACC build</td></tr>
<tr><td>Day 7 to 10</td><td>Draft valuation report shared with management</td></tr>
<tr><td>Day 10 to 12</td><td>Management review, assumption Q and A, second draft</td></tr>
<tr><td>Day 12 to 14</td><td>Final signed report issued by IBBI Valuer or Merchant Banker</td></tr>
<tr><td><strong>Total</strong></td><td><strong>7 to 14 working days - scoping to signed report</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Cross-border FEMA NDI valuations involving foreign parent or subsidiary structures may take 14 to 21 days due to additional data flow. All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>

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
            <h2 class="section-title">Why Patron for ESOP Valuation</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4M20 12v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h11"/></svg></div>
    <h3 class="feature-title">Dual-Valuer Coverage</h3>
    <p class="feature-description">A Pune founder usually needs both an IBBI Registered Valuer and a SEBI Cat I Merchant Banker in the same year - Patron runs both under one engagement, so there is no juggling two firms.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
    <h3 class="feature-title">Methodology-Aware</h3>
    <p class="feature-description">DCF for a growth-stage SaaS company, NAV for a Chakan manufacturer, plus CCA, CTA, PWERM, OPM and Black-Scholes - the method is chosen by company stage and report purpose.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3 class="feature-title">End-to-End Filings</h3>
    <p class="feature-description">One firm coordinating the valuation and every RoC Pune filing that follows - MGT-14, PAS-3, FC-GPR, FC-TRS and the Section 17(2)(vi) perquisite filings.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
    <h3 class="feature-title">180-Day Validity Tracking</h3>
    <p class="feature-description">Built into the annual retainer so a Pune exercise never runs on a stale report - no last-minute scramble, because Patron refreshes proactively.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3 class="feature-title">Defensible Documentation</h3>
    <p class="feature-description">Methodology rationale, sensitivity analysis and director certification - the kind of file that holds up when a Pune startup's report meets the next investor's diligence or an AO's scrutiny.</p>
</article>
<article class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
    <h3 class="feature-title">Scrutiny Defence</h3>
    <p class="feature-description">Responses to legacy Section 56(2)(viib) and Section 56(2)(x) Income Tax notices, plus FEMA compounding queries on cross-border issuances from Pune entities.</p>
</article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted Across India</h2>
            <div class="content-text">
                
                <p style="font-size:15px;"><strong>10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Documents Filed &nbsp;|&nbsp; 15+ Years in Practice</strong></p>
                <p style="font-style:italic;">"Patron coordinated three valuations in one engagement - grant-date FMV by IBBI Valuer for our new ESOP pool, exercise FMV by Merchant Banker for departing leadership, and FEMA NDI valuation for our Series B FC-GPR. All three reports landed within 12 working days." - <strong>CFO, Series B fintech (Bengaluru)</strong></p>
                <p style="font-style:italic;">"Income Tax issued a notice on our FY 2023-24 angel tax position. Patron's defence file - methodology rationale, peer benchmarking and sensitivity analysis - moved the case to closure without addition. Worth every rupee of the original valuation engagement." - <strong>Founder, SaaS startup (Mumbai)</strong></p>
                <p><strong>Who we work with:</strong> funded startups and enterprises across SaaS, fintech, edtech and consumer-tech</p>
                <p style="margin-top:16px;"><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Valuation Methodology Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Method</th><th>When Used</th><th>Who Signs</th><th>Strength</th><th>Limitation</th></tr></thead>
                    <tbody>
                        <tr><td>NAV (Net Asset Value)</td><td>Asset-heavy companies; Section 56(2)(x), 50CA; early-stage pre-revenue</td><td>CA or Registered Valuer</td><td>Defensible from balance sheet; AO rarely rejects</td><td>Undervalues high-growth intangible-rich startups</td></tr>
<tr><td>DCF (Discounted Cash Flow)</td><td>Revenue-generating growth-stage; Rule 11UA(2)(b); FEMA NDI; ESOP grant</td><td>SEBI Cat I Merchant Banker</td><td>Captures future growth; aligns with VC valuations</td><td>Subjective; AO can challenge projections</td></tr>
<tr><td>CCA (Comparable Company Analysis)</td><td>Listed peer benchmarking; Series B+</td><td>Merchant Banker</td><td>Market-evidence based</td><td>Limited Indian listed peers in deep tech and SaaS</td></tr>
<tr><td>CTA (Comparable Transaction Analysis)</td><td>Recent M&amp;A or funding round benchmarking</td><td>Merchant Banker</td><td>Transaction-evidence based</td><td>Data scarcity for early-stage Pune startups</td></tr>
<tr><td>PWERM (Probability-Weighted)</td><td>Pre-IPO with multiple exit scenarios</td><td>Merchant Banker</td><td>Captures scenario distribution</td><td>Requires probability assumptions; AO scrutiny</td></tr>
<tr><td>OPM (Option Pricing Method)</td><td>Complex capital structures with multiple share classes</td><td>Merchant Banker</td><td>Allocates value across waterfall</td><td>Mathematically complex</td></tr>
<tr><td>Black-Scholes</td><td>Ind AS 102 share-based payment expense</td><td>CA or actuary</td><td>Globally accepted for ESOP compensation cost</td><td>Not a grant-date FMV under Rule 11UA</td></tr>
<tr><td>Replacement Cost</td><td>Distress or build-from-scratch contexts</td><td>Merchant Banker</td><td>Floor value baseline</td><td>Ignores intangibles and goodwill</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India)</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 247, Companies Act 2013</strong> read with Companies (Registered Valuers and Valuation) Rules 2017 - IBBI Registered Valuer regime. Cross-reference: <a href="https://www.mca.gov.in" target="_blank" rel="noopener nofollow">Ministry of Corporate Affairs (MCA21)</a>.</li>
                    <li><strong>Rule 11UA, Income Tax Rules 1962</strong> - prescribed methodology for FMV of unquoted equity shares. Cross-reference: <a href="https://www.incometax.gov.in" target="_blank" rel="noopener nofollow">Income Tax India</a>.</li>
                    <li><strong>Rule 11UA(1)(c)(b)</strong> - NAV method for Section 56(2)(x), Section 50CA, Section 56(2)(vii) contexts; CA may sign.</li>
                    <li><strong>Rule 11UA(2)(b)</strong> - DCF method requires SEBI Category I Merchant Banker only (post-2018 amendment).</li>
                    <li><strong>Rule 11UA(2)(A)</strong> - 5 additional methods introduced by Finance Act 2023 for non-resident share issuances: PWERM, OPM, Milestone Analysis, Replacement Cost, CCM; 10 percent safe harbour for non-residents.</li>
                    <li><strong>Rule 3(8), Income Tax Rules 1962</strong> - FMV at ESOP exercise for Section 17(2)(vi) perquisite must be certified by SEBI Category I Merchant Banker; valuation not older than 180 days.</li>
                    <li><strong>Section 56(2)(viib), Income Tax Act 1961</strong> - ABOLISHED from FY 2025-26 (1 April 2025) by Finance Act 2024; legacy assessments for prior years remain open.</li>
                    <li><strong>Section 56(2)(x), Income Tax Act 1961</strong> - taxes recipient if shares received below FMV; CONTINUES post angel-tax abolition.</li>
                    <li><strong>Section 50CA, Income Tax Act 1961</strong> - deems FMV as sale consideration for unquoted shares transferred below FMV; Rule 11UA NAV applies.</li>
                    <li><strong>Section 17(2)(vi), Income Tax Act 1961</strong> - perquisite tax on FMV minus exercise price at ESOP exercise (continues for shares allotted before 1 April 2026).</li>
                    <li><strong>Income Tax Act 2025</strong> effective 1 April 2026 - renumbers perquisite and deferral provisions.</li>
                    <li><strong>Rule 21, FEMA Non-Debt Instruments Rules 2019</strong> - cross-border issuance and transfer to non-residents not less than FMV. Cross-reference: <a href="https://www.rbi.org.in" target="_blank" rel="noopener nofollow">Reserve Bank of India</a>.</li>
                    <li><strong>SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021</strong> - listed company ESOP valuation. Cross-reference: <a href="https://www.sebi.gov.in" target="_blank" rel="noopener nofollow">SEBI</a>.</li>
                    <li><strong>Ind AS 102 / ICAI Guidance Note on Accounting for Share-Based Payments 2020</strong> - Black-Scholes for compensation expense recognition over vesting period.</li>
                    <li><strong>IBBI Registered Valuer regime</strong> - <a href="https://www.ibbi.gov.in" target="_blank" rel="noopener nofollow">Insolvency and Bankruptcy Board of India</a> registry of authorised valuers.</li>
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
                    <p class="faq-expanded__lead">Quick answers on ESOP valuation methodology, valuer eligibility, fees and regulatory timelines.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who can do ESOP valuation in Pune?</h3>
                        <div class="faq-expanded__a"><p>For a Pune company filing with RoC Pune, two valuer regimes apply. For ESOP grant under the Companies Act, an IBBI Registered Valuer under Section 247 or a Merchant Banker may sign. For ESOP exercise under Section 17(2)(vi) of the Income Tax Act, only a SEBI-registered Category I Merchant Banker may sign per Rule 3(8). Chartered Accountants can sign NAV-based reports for Section 56(2)(x) and Section 50CA but cannot sign DCF reports under Rule 11UA(2)(b) after the 2018 amendment. Patron services this remotely for Hinjewadi, Kharadi and Baner companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do Hinjewadi GCCs and captive centres in Pune need a different valuation?</h3>
                        <div class="faq-expanded__a"><p>Yes. A Hinjewadi or Magarpatta global capability centre whose Indian entity is a subsidiary of a foreign parent usually needs two things - an Ind AS 102 Black-Scholes fair value for the share-based payment expense it recognises in its India P&amp;L, and a FEMA NDI valuation under Rule 21 when shares move between the Indian entity and the overseas parent. This differs from a homegrown Pune startup that mainly needs a grant-date and exercise FMV. Patron scopes the captive-centre and the startup tracks separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does an ESOP valuation report cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>ESOP valuation services for Pune companies start from INR 24,999 (exclusive of GST and government charges). The exact fee depends on the methodology, the company's stage and the number of valuation events, so stage-based scope is quoted on a free scoping call.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does a Kharadi or Baner startup need a valuation before its first priced round?</h3>
                        <div class="faq-expanded__a"><p>Yes. Most Kharadi, Viman Nagar and Baner-Balewadi startups grant ESOPs to early engineers before any priced round, so a grant-date Fair Market Value under Section 247 read with Rule 11UA is needed to set the exercise price. At pre-revenue or seed stage this is usually a Net Asset Value report; as the company builds revenue toward Series A it moves to a DCF basis signed by a Merchant Banker. Doing it early keeps the exercise price low and survives the next investor's diligence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Rule 11UA of the Income Tax Act?</h3>
                        <div class="faq-expanded__a"><p>Rule 11UA of the Income Tax Rules 1962 prescribes how to compute Fair Market Value of unquoted equity shares. Rule 11UA(1) covers NAV-based FMV for Section 56(2)(x) and similar contexts. Rule 11UA(2) covers DCF and other methods (originally for Section 56(2)(viib) angel tax, now abolished) and continues to apply for FEMA NDI valuations and other regulatory purposes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How often should an ESOP valuation be refreshed?</h3>
                        <div class="faq-expanded__a"><p>For ESOP exercise FMV under Section 17(2)(vi), the valuation must not be older than 180 days from the exercise date - a Merchant Banker refresh is required at least every 180 days. For grant-date FMV under the Companies Act, refresh on every fresh grant batch. For Ind AS 102 expense recognition, an annual Black-Scholes refresh aligned to the financial year-end is typical. Patron's annual retainer tracks all three cycles.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is Section 56(2)(viib) angel tax still applicable?</h3>
                        <div class="faq-expanded__a"><p>No. Section 56(2)(viib) has been abolished by the Finance Act 2024 with effect from FY 2025-26 (1 April 2025) for all classes of investors - resident and non-resident. However, Rule 11UA methodology continues to apply for Section 56(2)(x) on the recipient, Section 50CA on the seller, FEMA NDI cross-border valuations, ESOP perquisite tax under Section 17(2)(vi) and Ind AS 102 accounting. Legacy assessments for FY 2023-24 and earlier years remain open.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What valuation is needed for foreign investor share issuance?</h3>
                        <div class="faq-expanded__a"><p>Under Rule 21 of the FEMA Non-Debt Instruments Rules 2019, issuance of equity instruments to non-residents must be at a price not less than the Fair Market Value certified by a SEBI-registered Merchant Banker or a Chartered Accountant using internationally accepted pricing methods (most commonly DCF). The report is filed alongside FC-GPR within 30 days of issuance. The 10 percent safe harbour applies for NAV-method valuations to non-residents.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is DCF or NAV better for startup valuation?</strong> DCF for revenue-generating growth-stage with reliable projections; NAV for asset-heavy or pre-revenue early stage. DCF must be signed by Merchant Banker.</p>
                <p><strong>What is the validity of an ESOP valuation report?</strong> 180 days from valuation date for Income Tax purposes (perquisite at exercise). Refresh required before any subsequent exercise.</p>
                <p><strong>Does Section 56(2)(x) still apply post angel-tax abolition?</strong> Yes. Section 56(2)(x) on the recipient and Section 50CA on the seller both continue to require Rule 11UA-style FMV documentation.</p>
                <p><strong>What is the 10 percent safe harbour under Rule 11UA?</strong> For non-resident share issuances, the actual issue price may exceed Rule 11UA NAV by up to 10 percent without triggering tax adjustment.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines and Exposure</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Valuation older than 180 days at exercise</strong> - perquisite TDS may be challenged under reassessment proceedings</li>
                    <li><strong>FEMA NDI valuation default</strong> - non-resident issuance below FMV attracts RBI compounding (typically Rs 10,000+ per instance per investor)</li>
                    <li><strong>DCF signed by CA after 2018</strong> - report not acceptable for Section 56 purposes; fresh Merchant Banker report required</li>
                    <li><strong>Section 56(2)(x) on recipient</strong> - unquoted shares received below FMV taxed at slab rate as income from other sources</li>
                    <li><strong>Section 50CA on seller</strong> - unquoted shares transferred below FMV deemed sold at FMV for capital gains tax</li>
                    <li><strong>Legacy Section 56(2)(viib) for FY 2023-24 and prior</strong> - AO may still open assessment within statutory time limit</li>
                </ul>
                <p style="margin-top:16px;"><strong>Need urgent valuation support? <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20urgent%20ESOP%20valuation%20support.">WhatsApp us</a>. Response within 2 hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your ESOP Valuation Done Right</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP valuation is the technical defence layer that determines whether your option grants survive Series A diligence, Income Tax scrutiny, RBI FEMA review and Ind AS 102 audit. A correctly scoped Rule 11UA report - DCF for growth-stage by Merchant Banker, NAV for asset-heavy by Registered Valuer, FEMA NDI for cross-border by Merchant Banker - cuts off most downstream disputes at source.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP coordinates panel IBBI Registered Valuers and SEBI Category I Merchant Bankers under one engagement, with CA, CS and tax workflows pre-mapped. The firm has been advising Indian businesses since 2009 across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20free%20ESOP%20valuation%20scoping%20call." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<!-- RELATED SERVICES -->
<section class="content-section">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">Related Services</h2>
        <div class="content-text"><p>Start with the national ESOP Valuation Services service, then explore complementary ESOP services across India.</p>
        <ul>
                    <li><strong><a href="/esop-valuation-services">ESOP Valuation Services in India</a></strong> - the national parent service</li>
                    <li><strong><a href="/esop-services">ESOP Services Hub</a></strong> - the full ESOP advisory hub - route by stage, scenario or tax</li>
                    <li><strong><a href="/esop-scheme-design">ESOP Scheme Design</a></strong> - design the option pool, vesting schedule and leaver terms</li>
                    <li><strong><a href="/esop-corporate-filings">ESOP Corporate Filings</a></strong> - MGT-14, PAS-3 and Form SH-6 register filings</li>
                    <li><strong><a href="/esop-perquisite-tax-section-17-2-vi">ESOP Perquisite Tax (Sec 17(2)(vi))</a></strong> - perquisite tax and TDS computation at exercise</li>
                    <li><strong><a href="/esop-management-and-compliance-services">ESOP Management and Compliance</a></strong> - end-to-end ESOP administration retainer</li>
        </ul></div>
    </div></div>
</section>

<!-- MORE SERVICES IN CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">More Services in Pune</h2>
        <div class="pa-cross-grid"><a href="/esop-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services Hub</div><div class="pa-card-sub">Pune</div></div></a><a href="/esop-scheme-design/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">Pune</div></div></a><a href="/esop-corporate-filings/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Corporate Filings</div><div class="pa-card-sub">Pune</div></div></a><a href="/esop-perquisite-tax-section-17-2-vi/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Perquisite Tax (Sec 17(2)(vi))</div><div class="pa-card-sub">Pune</div></div></a><a href="/esop-management-and-compliance-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">Pune</div></div></a><a href="/esop-vesting-and-forfeiture-tracking/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Vesting and Forfeiture Tracking</div><div class="pa-card-sub">Pune</div></div></a></div>
    </div></div>
</section>

<!-- SERVICE BY CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">ESOP Valuation Services by City</h2>
        <div class="content-text"><p>Available across our four office cities. You are viewing the Pune page.</p></div>
        <div class="pa-city-grid"><span class="pa-city-card" aria-current="page" style="border-color:var(--orange);background:#FFF7F2;cursor:default;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:10px;right:12px;font-size:10px;font-weight:700;color:var(--orange);letter-spacing:.04em;">YOU'RE HERE</span></span><a href="/esop-valuation-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esop-valuation-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/esop-valuation-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div>
    </div></div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed half-yearly under Patron's Tier 1 freshness protocol. Review triggers include Budget announcements, Income Tax Act 2025 transition milestones, Rule 11UA amendments, FEMA NDI Rules updates, SEBI SBEB amendments and IBBI valuation methodology guidelines.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')

</main>

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

<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->

@endsection