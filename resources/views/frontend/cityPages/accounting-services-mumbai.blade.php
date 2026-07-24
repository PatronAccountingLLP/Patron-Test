@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Accounting Services in Mumbai, Run by a Local CA Team | Patron Accounting</title>
    <meta name="description" content="Run for Mumbai businesses under Maharashtra PTRC/PTEC. One team for your books, your filings and the reporting your board reads. See what it costs.">
    <link rel="canonical" href="https://www.patronaccounting.com/accounting-services/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Accounting Services in Mumbai, Run by a Local CA Team | Patron Accounting">
    <meta property="og:description" content="Run for Mumbai businesses under Maharashtra PTRC/PTEC. One team for your books, your filings and the reporting your board reads. See what it costs.">
    <meta property="og:url" content="https://www.patronaccounting.com/accounting-services/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og/accounting-services-mumbai-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accounting Services in Mumbai, Run by a Local CA Team | Patron Accounting">
    <meta name="twitter:description" content="Run for Mumbai businesses under Maharashtra PTRC/PTEC. One team for your books, your filings and the reporting your board reads. See what it costs.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og/accounting-services-mumbai-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/accounting-services/mumbai/#service",
  "name": "Accounting Services in Mumbai",
  "description": "Accounting services in Mumbai run on a fixed close date: books reconciled, GST and TDS filed, trial balance signed off before the month turns.",
  "image": "https://www.patronaccounting.com/images/mumbai-og.webp",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/accounting-services/mumbai"
  },
  "areaServed": {
    "@type": "City",
    "name": "Mumbai"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting Services in Mumbai",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting Services in Mumbai",
          "description": "Accounting services in Mumbai run on a fixed close date: books reconciled, GST and TDS filed, trial balance signed off before the month turns.",
          "serviceType": "Accounting Service"
        },
        "eligibleRegion": {
          "@type": "City",
          "name": "Mumbai"
        }
      }
    ]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "https://www.patronaccounting.com/mumbai/#localbusiness",
  "name": "Patron Accounting LLP - Mumbai",
  "url": "https://www.patronaccounting.com/accounting-services/mumbai",
  "telephone": "+91 94594 56700",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1st Floor, Rajshila Building, 104/597, Jagannath Shankar Seth Rd, near Maheshwari Bhavan, Marine Lines",
    "addressLocality": "Mumbai",
    "addressRegion": "Maharashtra",
    "postalCode": "400002",
    "addressCountry": "IN"
  },
  "areaServed": [
    {
      "@type": "AdministrativeArea",
      "name": "Mumbai"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Marine Lines"
    }
  ],
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "09:00",
      "closes": "19:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Saturday"
      ],
      "opens": "09:00",
      "closes": "15:00"
    }
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/accounting-services/mumbai"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting Services in Mumbai",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting Services in Mumbai",
          "description": "Accounting services in Mumbai run on a fixed close date: books reconciled, GST and TDS filed, trial balance signed off before the month turns.",
          "serviceType": "Accounting Service"
        },
        "eligibleRegion": {
          "@type": "City",
          "name": "Mumbai"
        }
      }
    ]
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 18.946399299249972,
    "longitude": 72.8274615
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.6",
    "reviewCount": "24",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
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
      "name": "Accounting & Bookkeeping Services",
      "item": "https://www.patronaccounting.com/accounting-bookkeeping-services"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Accounting Services",
      "item": "https://www.patronaccounting.com/accounting-services"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Mumbai",
      "item": "https://www.patronaccounting.com/accounting-services/mumbai"
    }
  ],
  "@id": "https://www.patronaccounting.com/accounting-services/mumbai/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/accounting-services/mumbai/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Which Maharashtra registrations does a Mumbai business need before its books are set up?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "PTEC for the entity and its directors, PTRC once salaried staff are on the roll, Maharashtra Shops and Establishments registration for the premises, and an MCGM trade licence for certain activities. Each carries its own return or renewal. We list them against your entity type in the first week, because the commonest Mumbai penalty is not a wrong entry, it is an unregistered head."
      }
    },
    {
      "@type": "Question",
      "name": "When is GSTR-3B due for a Mumbai business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maharashtra is a Category X state, so QRMP filers with turnover up to Rs 5 crore file quarterly by the 22nd of the month following the quarter, while businesses above Rs 5 crore file monthly by the 20th. QRMP filers still pay tax through PMT-06 by the 25th of each intervening month. We set the calendar to your turnover slab at onboarding."
      }
    },
    {
      "@type": "Question",
      "name": "How long must a Mumbai company preserve its books, and does the audit trail rule apply?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 128(5) of the Companies Act requires books to be preserved for eight financial years immediately preceding the current year. Every company must also use accounting software carrying an edit log that records each change and cannot be disabled, under Rule 3(1) of the Companies (Accounts) Rules. We configure that setting and keep dated backups, because auditors now report on it directly."
      }
    },
    {
      "@type": "Question",
      "name": "Is this service oversized for a small Fort trading firm rather than a BKC corporate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. A Fort or Masjid Bunder trading firm receives the same monthly close, GSTR-2B reconciliation and TDS compliance, priced on volume rather than as a corporate retainer. The work differs in scale, not in standard. Most of our Mumbai clients are owner-managed businesses with five to fifty staff, not listed groups occupying towers in BKC."
      }
    },
    {
      "@type": "Question",
      "name": "Does TDS apply on Rs 2 lakh a month rent for an Andheri office?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. TDS under Section 194-I applies at 10% on rent for land or building once annual payments to one landlord cross the prescribed threshold, and the deduction is deposited by the 7th of the following month. Mumbai commercial rents cross that threshold within a single quarter. We add every landlord to your TDS master at onboarding so month one is not already in default."
      }
    },
    {
      "@type": "Question",
      "name": "What actually happens during your monthly close for a Mumbai client?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bank and card feeds are reconciled, purchase and sales registers matched to GSTR-2B and GSTR-1, TDS computed and challans raised, payroll and statutory dues posted, stock and advances reviewed, then a profit and loss with balance sheet is issued. For most Mumbai clients this lands by the 10th, leaving room before the 20th and 22nd GST dates."
      }
    },
    {
      "@type": "Question",
      "name": "What happens to input credit when a supplier does not file GST returns?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Input credit is available only for invoices appearing in your GSTR-2B, so a supplier who has not filed GSTR-1 costs you real cash that month. We issue a monthly list of missing invoices with supplier names and amounts, so your team can chase before payment is released. Withholding the GST portion of a payment until the invoice appears is the practical fix."
      }
    },
    {
      "@type": "Question",
      "name": "How far back can the department reopen a Mumbai assessment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reassessment under Section 149 can generally reach three years and three months from the end of the relevant assessment year, extending to five years and three months where the escaped income is Rs 50 lakh or more. That is why ledgers, vouchers and bank records are archived rather than discarded. We keep a searchable year-wise archive alongside your live books."
      }
    },
    {
      "@type": "Question",
      "name": "What do monthly accounting services cost in Mumbai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fees are set on monthly transaction volume, the number of bank accounts and GST registrations, payroll headcount and whether year-end audit support is included, not one advertised rate. An owner-managed Fort business with 200 transactions a month costs a fraction of a multi-state group. We quote after reviewing one month of statements. Amounts are exclusive of GST and government charges."
      }
    },
    {
      "@type": "Question",
      "name": "Is a visit to a Mumbai office required, and how does switching from an existing accountant work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No visit is needed. Work is handled remotely, with visits to your BKC, Andheri, Fort or Nariman Point premises arranged when an audit or a stock count needs someone present, and we run no Mumbai office. Switching takes one cycle: we agree opening balances in writing, list open GST and TDS positions, then close the first month in parallel."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/accounting-services/mumbai",
  "name": "Accounting Services in Mumbai",
  "description": "Run for Mumbai businesses under Maharashtra PTRC/PTEC. One team for your books, your filings and the reporting your board reads. See what it costs.",
  "url": "https://www.patronaccounting.com/accounting-services/mumbai",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/accounting-services/mumbai/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/mumbai-og.webp"
  },
  "image": "https://www.patronaccounting.com/images/mumbai-og.webp",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "author": {
    "@id": "https://www.patronaccounting.com/#team"
  },
  "reviewedBy": {
    "@id": "https://www.patronaccounting.com/#team"
  },
  "lastReviewed": "2026-07-24",
  "breadcrumb": {
    "@id": "https://www.patronaccounting.com/accounting-services/mumbai/#breadcrumb"
  }
}
</script>
@endsection

<link rel="stylesheet" href="/css/patron-cluster.css">

@section('content')
<main>


<nav aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;"><li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com" style="color:var(--text-muted);text-decoration:none;font-weight:500;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Home</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li><li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com/accounting-services" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Accounting Services</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li><li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com/accounting-services" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Accounting</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li><li><span style="color:var(--orange);font-weight:600;">Mumbai</span></li></ol>
    </div>
</nav>


<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div><span class="pa-hero-loc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Mumbai, Maharashtra</span>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Accounting Services in Mumbai
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">July 2026</span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Input credit you can keep:</span> You keep the input credit your books can back, vendor by vendor, before it is ever claimed on invoices alone.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statements that map to Schedule III:</span> Your trial balance already carries the groupings financial statements need, so a lender pack or board pack is drawn straight off it.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Party-wise debtor and creditor position:</span> You see who owes you and who you owe, name by name, with ageing. It replaces one net figure on the balance sheet.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Payroll deductions that agree:</span> We compute each month's PF, ESI, Professional Tax and salary TDS off the salary register. Challans paid and the ledger charge then match.</p>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20in%20Mumbai" target="_blank" class="btn-sample text-decoration-none">
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
                                <span class="rating-count">Based on real Google reviews</span>
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

                    <form id='BiginWebToRecordForm208810000001209168'
                          name='BiginWebToRecordForm208810000001209168'
                          action='https://bigin.zoho.in/crm/WebToRecordForm'
                          method='POST'
                          enctype='multipart/form-data'
                          target='hidden208810000001209168Frame'
                          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
                          accept-charset='UTF-8'>

                        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
                        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                        <input type='text' style='display:none;' name='returnURL' value='null' />
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Accounting'/>
                        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
                        <input type='hidden' name='Stage' value='Qualification'/>
                        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-group" id="phoneGroup">
                                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                                    <span class="selected-code" id="selectedCode">+91</span>
                                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    <div class="country-dropdown-list" id="countryDropdownList">
                                        <input type="text" class="country-search-input" id="countrySearchInput"
                                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                                        <div class="country-options" id="countryOptions"></div>
                                    </div>
                                </div>
                                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                                       placeholder='Enter phone number'
                                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                                       onblur='validatePhoneOnBlur(this)'/>
                                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
                            </div>
                            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled selected>Select a service</option>
                                <option value="accounting-services/mumbai" selected>Startup Accounting</option>
                                    <option value="accounting-services">Accounting Services (All)</option>
                                    <option value="accounting-services-for-e-commerce-industry">E-Commerce Accounting</option>
                                    <option value="esop-accounting-ind-as-102">ESOP Accounting (Ind AS 102)</option>
                                    <option value="backlog-bookkeeping-catch-up-services">Backlog Bookkeeping Catch-up</option>
                                    <option value="financial-statement-preparation-services">Financial Statement Preparation</option>
                                    <option value="mis-reporting-services">MIS Reporting</option>
                                    <option value="other">Other</option>

                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
                    </form>

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


<section class="testimonials-section"><div class="section-container"><div class="section-header"><h2>Real Stories from Real People</h2><p>Verified Google reviews from founders and businesses Patron works with across India.</p></div><div class="testi-loading" id="testiLoading" style="display:none;"></div><div class="testimonial-slider" id="testimonialSlider" style="display:block;"></div><div class="reviews-cta" style="margin-top:30px;"><div class="reviews-cta-content"><div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><div class="reviews-cta-text"><h3 class="text-white">Join 3,000+ Founders and Businesses on Patron</h3><p>Rated 4.9 on Google - trusted for startup accounting since 2019.</p></div></div><a href="tel:+919459456700" class="btn-cta" style="text-decoration:none;">Talk to an Expert <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a></div></div></section>


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


<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            
            <a href="#overview-section" class="toc-btn active">Overview</a>
                    <a href="#what-section" class="toc-btn">What Is It</a>
                    <a href="#who-section" class="toc-btn">Who Needs It</a>
                    <a href="#services-section" class="toc-btn">Services</a>
                    <a href="#procedure-section" class="toc-btn">Process</a>
                    <a href="#documents-section" class="toc-btn">Documents</a>
                    <a href="#challenges-section" class="toc-btn">Challenges</a>
                    <a href="#fees-section" class="toc-btn">Fees</a>
                    <a href="#timeline-section" class="toc-btn">Calendar</a>
                    <a href="#benefits-section" class="toc-btn">Benefits</a>
                    <a href="#why-patron-section" class="toc-btn">Why Patron</a>
                    <a href="#comparison-section" class="toc-btn">Comparison</a>
                    <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>


<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Accounting Costs and Covers for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Accounting Services at a Glance</strong></p>
                    <p>Accounting services in Mumbai run on a fixed close date: books reconciled, GST and TDS filed, trial balance signed off before the month turns. Maharashtra sits in GSTR-3B category X, so the return falls due on the 22nd wherever turnover stays under Rs 5 crore, with professional tax deducted alongside. Patron works with businesses across BKC and Nariman Point, from single-office firms to MIDC units. Designed for businesses closing books across the Mumbai Metropolitan Region.</p>
                </div>
                <p>Your books live in one ledger rather than in a spread of parallel spreadsheets. Patron works inside that file: bank feeds mapped, vendor masters cleaned, tax ledgers kept live all month. An office taken on MMRDA lease at Bandra Kurla Complex sits in the books as a capitalised premium amortised over the term, with ground rent expensed, not as a rent line. A checklist of monthly deliverables follows each close.</p>
                <p>Within the first month the load is heavier than those after it: opening balances verified, old reconciliations cleared, masters rebuilt. Steady-state bookkeeping services in Mumbai then run to a fixed calendar, with rates confirmed against Maharashtra's tax department portal. Backlog years are scoped as separate work, and the date of the first close is agreed with you in writing.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Do Accounting Services Mean for Mumbai Businesses?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Return filing is the service most often confused with this one, but they are not the same purchase. A filer works from whatever records arrive at the deadline. Accounting services in Mumbai keep those records themselves, posting each transaction as it happens. It is classified as an asset, a liability, equity, capital or revenue, so the ledger stays current. The return, when it falls due, is drawn from books that were already right.</p>
<p>That distinction is most of the story. The engagement reconciles each balance against the bank and the vendor ledgers, then closes the month to a fixed date. The figures a board or a lender reads have therefore been checked, not assembled at the last minute. Statutory rates and dates are read from the Maharashtra department&#x27;s own record. The audit that later tests these books, and the returns filed from them, are separate engagements. Accounting services in Mumbai end at a signed, reconciled ledger.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/accounting/maharashtra-stamp-act-provisions">Maharashtra Stamp Act Provisions</a></span><span class="al-d">State stamp duty rules that apply to agreements, share transfers and property documents in Maharashtra.</span></li><li><span class="al-t"><a href="/glossary/accounting/assets">Assets</a></span><span class="al-d">Everything the business owns or is owed that carries future economic value.</span></li><li><span class="al-t"><a href="/glossary/accounting/liabilities">Liabilities</a></span><span class="al-d">Amounts the business owes to others, from supplier bills to loans and taxes due.</span></li><li><span class="al-t"><a href="/glossary/accounting/equity">Equity</a></span><span class="al-d">The owners&#x27; residual stake in the business once every liability is subtracted from assets.</span></li><li><span class="al-t"><a href="/glossary/accounting/capital">Capital</a></span><span class="al-d">The funds owners put into the business to start and sustain its operations.</span></li><li><span class="al-t"><a href="/glossary/accounting/revenue">Revenue</a></span><span class="al-d">Income the business earns from selling its goods or services before any costs.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/accounting-services/mumbai/what-is-mumbai.webp" alt="What Are Accounting Services. Before a business can file a return, raise a loan or answer an auditor, its books have in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Accounting Services in Mumbai: From BKC to Growing SMEs</h2>
            <div class="content-text">
                
                <p>Businesses across Bandra Kurla Complex and Andheri outgrow informal help long before they are ready to put an accountant on the payroll. Accounting services in Mumbai fit that middle stage, when transaction volume and tax registrations have outrun what a first bookkeeping hire can hold together.</p>
  <ul>
    <li>Newly incorporated private limited companies now filing monthly GST and TDS with no accountant yet on the rolls.</li>
    <li>Proprietors in Nariman Point whose bookkeeper has left mid-year, leaving reconciliations and posting stalled.</li>
    <li>LLPs that have taken a second state registration, doubling the returns each period now demands.</li>
    <li>Firms whose headcount has grown until <a href="/blog/maharashtra-professional-tax-shops-act">Maharashtra professional tax</a>, PF and ESI each need computing monthly.</li>
    <li>Owner-run businesses keeping records in spreadsheets, now facing a lender's review those files cannot answer.</li>
    <li>Companies approaching a first statutory audit that need a trial balance an auditor will accept.</li>
    <li>Owner-managed firms wanting virtual accounting so the monthly close no longer waits on one desk.</li>
    <li>Corporate subsidiaries whose overseas parents expect books on the <a href="/glossary/accounting/bkc-corporate-accounting-standards">accounting standards</a> their group already reports under.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Services Included for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Month-end close for Mumbai businesses</td><td>Tight month-end close and ledger hygiene for companies across Bandra Kurla Complex, giving you accounting services in Mumbai that suit listed-group reporting calendars <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Group reporting to SEBI timelines</td><td>Financials aligned to the reporting timelines listed groups in Bandra Kurla Complex must meet, with schedules ready for board and auditor review <span class="badge-included">Quarterly</span></td></tr>
                        <tr><td>Statutory audit preparation</td><td>Tie-outs, confirmations and Schedule III statements prepared ahead of your statutory audit, keeping bookkeeping services in Mumbai audit-ready without a year-end rush <span class="badge-included">Annually</span></td></tr>
                        <tr><td>GST return workings and filing support</td><td>GSTR-2B matched input credit and monthly GST return workings, with stamp duty on agreements tracked where Maharashtra levies apply to your transactions <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>TDS and PTEC compliance workings</td><td>TDS computation, 26AS reconciliation and annual PTEC profession-tax working under Maharashtra rules, so payroll deductions agree with the challans actually paid <span class="badge-included">Monthly, PTEC annually</span></td></tr>
                        <tr><td>Reporting for small businesses</td><td>Monthly management accounts through our online accounting services in Mumbai, scaled for owner-run firms and the early ventures we back via <a href="/accounting-services-for-startups/mumbai">Startup Accounting Services India Mumbai</a> <span class="badge-included">Monthly</span></td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How Accounting Services Work in Mumbai — Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron delivers accounting for Mumbai businesses, step by step.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Onboarding and records handover</h3>
    <p class="step-description">We agree the entities, bank accounts and periods in scope, then collect the record set listed above for the full period. Access to the accounting file, bank portals and the GST portal is set up with named users before any entry is passed.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-1-onboarding-and-records-handover-mumbai.webp" alt="Illustration for Onboarding and records handover: We agree the entities, bank accounts and periods in scope, then collect in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Chart of accounts and openings</h3>
    <p class="step-description">The chart of accounts is set to Schedule III groupings so the trial balance maps straight to the financial statements. Opening balances are taken from the prior year's signed accounts. Debtor and creditor detail comes across party by party, not as a single net figure.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-2-chart-of-accounts-and-openings-mumbai.webp" alt="Illustration for Chart of accounts and openings: The chart of accounts is set to Schedule III groupings so the trial balance in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Recording the month's transactions</h3>
    <p class="step-description">Sales invoices, purchase bills, expenses, credit and debit notes and payroll are posted for the period, each against the correct GST treatment and place of supply. Petty cash goes in only against a signed voucher, not a summary figure.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-3-recording-the-month-s-transactions-mumbai.webp" alt="Illustration for Recording the month's transactions: Sales invoices, purchase bills, expenses, credit and debit notes and in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Reconciliations before we report</h3>
    <p class="step-description">Every bank account is reconciled to the statement. Purchase input credit is matched against the auto-drafted GSTR-2B, and tax credited at source is matched to Form 26AS and AIS, with the unmatched items listed back to you by vendor.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-4-reconciliations-before-we-report-mumbai.webp" alt="Illustration for Reconciliations before we report: Every bank account is reconciled to the statement. Purchase input credit in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Statutory workings prepared</h3>
    <p class="step-description">We prepare the workings the filings are built from: GST summaries by rate and place of supply, TDS and TCS schedules by section, and the payroll computation. In Maharashtra that computation carries profession tax twice over, deducted from salaries and owed on the entity's own enrolment, plus a half-yearly welfare fund contribution.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-5-statutory-workings-prepared-mumbai.webp" alt="Illustration for Statutory workings prepared: We prepare the workings the filings are built from. That means output and in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Monthly reporting and review</h3>
    <p class="step-description">You receive a trial balance, profit and loss, balance sheet and debtor and creditor ageing for the period, with a short note on anything unusual. We walk through the open items and the entries still waiting on documents from your side.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-6-monthly-reporting-and-review-mumbai.webp" alt="Illustration for Monthly reporting and review: You receive a trial balance, profit and loss, balance sheet and debtor and in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">Year-end close and audit support</h3>
    <p class="step-description">At year end we pass closing entries for depreciation, provisions, prepayments and accruals, then build the schedules the auditor will ask for. We answer audit queries directly and post the agreed audit adjustments back into the books.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/mumbai/step-7-year-end-close-and-audit-support-mumbai.webp" alt="Illustration for Year-end close and audit support: At year end we pass closing entries for depreciation, provisions, in Mumbai" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>

        </div>
    </div>
</section>



<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Accounting Services</h2>
            <div class="content-text">
                
                <p>To the usual bank, sales and purchase records, Maharashtra adds profession tax on two counts and a registered Leave and Licence agreement for the office.</p>
<ul>
    <li>Bank statements for every business bank account for the full period, in PDF and Excel or CSV</li>
    <li>Sales invoices and tax invoices issued (including e-invoice IRN/QR files where e-invoicing applies)</li>
    <li>Purchase invoices and vendor bills received</li>
    <li>Expense bills, receipts and signed petty-cash vouchers</li>
    <li>Credit notes and debit notes issued and received</li>
    <li>GST data for each tax period: the auto-drafted GSTR-2B, and Form 26AS/AIS for tax credited at source</li>
    <li>TDS/TCS challans, filed returns (24Q/26Q/27Q/27EQ) and Form 16/16A issued</li>
    <li>PTEC certificate (Certificate of Enrolment, Profession Tax) issued under the Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975, plus the annual PTEC payment challan</li>
    <li>PTRC certificate (Certificate of Registration, Profession Tax) plus the monthly/annual PTRC return and payment challans</li>
</ul>

            </div>
        </div>
    </div>
</section>


<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Challenges Specific to Mumbai: BKC Corporate Reporting, SEEPZ SEZ Units and LBT History</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>SEEPZ unit's SEZ and DTA sales booked to one revenue head</td><td>SEZ zero-rated turnover and DTA taxable turnover blur, so net foreign exchange working and refunds go wrong</td><td>Our team keeps SEZ and DTA sales on separate revenue heads and tracks net foreign exchange for the SEEPZ unit</td></tr>
                        <tr><td>Legacy LBT assessment demands raised for years before 2017 still open</td><td>Old local body tax dues sit unprovided, so a demand lands with no liability booked.</td><td>Patron reconciles legacy LBT records to assessment orders and provides for any residual demand from the pre-2017 period</td></tr>
                        <tr><td>Service revenue recognised on invoice date, not on delivery of the work</td><td>Income lands in the wrong period, so monthly results swing and BKC group reporting misstates performance</td><td>Our team recognises revenue on performance and applies cut-off at each close, so BKC reporting reflects the right period</td></tr>
                        <tr><td>Audit schedules assembled in a scramble only when the auditor arrives</td><td>The statutory audit drags on, queries pile up and sign-off slips past the deadline</td><td>Patron keeps audit-ready schedules year round, so Fort and Nariman Point firms start audit from a complete file; see <a href="/blog/choosing-accountant-mumbai">choosing an accountant in Mumbai</a>.</td></tr>
                        <tr><td>Export receivables in foreign currency not revalued at the close rate</td><td>Debtors and forex gain or loss stay at old rates, misstating the balance sheet and margin.</td><td>Our team revalues foreign currency receivables and payables at each close and books the exchange difference to the correct head</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one entity, one GST registration and routine monthly volume</td><td>INR 2,499<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; higher transaction volume, more GST registrations or an added entity</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multi-entity, multi-location books with custom monthly reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">CA fees in Mumbai start at the same <strong>INR 2,499</strong> entry rate as nationally, priced by scope rather than locality. It rises with transaction volume, extra GST registrations or another entity added. Maharashtra profession-tax registration bills separately as a government charge. Schedule a pricing consultation on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20in%20Mumbai" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Compliance Calendar 2026 for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance</th><th>Due Date</th><th>Applies To</th></tr></thead>
                    <tbody>
                        <tr><td>TDS / TCS deposit (Challan ITNS-281)</td><td>7th of every month (30 April for March)</td><td>Every business that deducts tax at source on salaries, rent, contractor or professional fees</td></tr>
                        <tr><td>GSTR-1 (outward supplies)</td><td>11th of every month for monthly filers</td><td>GST-registered Mumbai businesses filing monthly returns</td></tr>
                        <tr><td>Provident Fund (ECR) and ESI contribution</td><td>15th of every month</td><td>Employers registered under EPF and ESI</td></tr>
                        <tr><td>GSTR-3B (summary return and tax payment)</td><td>20th monthly for turnover above Rs 5 crore; 22nd quarterly under QRMP for turnover up to Rs 5 crore (Category X)</td><td>GST-registered businesses in Mumbai</td></tr>
                        <tr><td>Professional tax: PTRC monthly return and PTEC</td><td>PTRC by the 15th of every month; PTEC annually by 31 March</td><td>Employers and companies registered for profession tax in Maharashtra (Mumbai)</td></tr>
                        <tr><td>Advance tax first instalment (15%)</td><td>15 June 2026</td><td>Companies, firms and individuals with a tax liability of Rs 10,000 or more</td></tr>
                        <tr><td>Tax audit report (Form 3CA/3CB-3CD)</td><td>30 September 2026</td><td>Businesses crossing the Section 44AB turnover threshold</td></tr>
                        <tr><td>Income-tax return, audit cases</td><td>31 October 2026</td><td>Companies and audit-liable firms</td></tr>
                        <tr><td>Annual GST return GSTR-9 and reconciliation GSTR-9C</td><td>31 December 2026</td><td>GST-registered Mumbai businesses above the annual-return and audit thresholds</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>In Mumbai, a business tracks the monthly GSTR-3B on the 22nd under QRMP and the 7th TDS deposit. The year-end audit-trail certification is the item owners most often forget. <a href="/blog/maharashtra-professional-tax-shops-act">Maharashtra profession tax</a> (PTRC) is also due by the 15th each month. For accounting services in Mumbai, Patron keeps every date on schedule; book a review on +91 94594 56700 or see our <a href="/blog/cost-of-accounting-services-mumbai-2026">local notes</a>.</p>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Professional Accounting Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M12 17V7" /> <path d="M16 8h-6a2 2 0 0 0 0 4h4a2 2 0 0 1 0 4H8" /> <path d="M4 3a1 1 0 0 1 1-1 1.3 1.3 0 0 1 .7.2l.933.6a1.3 1.3 0 0 0 1.4 0l.934-.6a1.3 1.3 0 0 1 1.4 0l.933.6a1.3 1.3 0 0 0 1.4 0l.933-.6a1.3 1.3 0 0 1 1.4 0l.934.6a1.3 1.3 0 0 0 1.4 0l.933-.6A1.3 1.3 0 0 1 19 2a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1 1.3 1.3 0 0 1-.7-.2l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.934.6a1.3 1.3 0 0 1-1.4 0l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-1.4 0l-.934-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-.7.2 1 1 0 0 1-1-1z" /> </svg></div>
  <h3 class="feature-title">Input credit you can keep</h3>
  <p class="feature-text">You keep the input credit your books can back, vendor by vendor, before it is ever claimed on invoices alone.</p><ul style="margin-top:12px;"><li>vendor by vendor list of credit not in auto-drafted GSTR-2B</li><li>tax deducted that never reached Form 26AS flagged</li><li>Without it, credit claimed on invoices alone and reversed on comparison</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M10 18v-7" /> <path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z" /> <path d="M14 18v-7" /> <path d="M18 18v-7" /> <path d="M3 22h18" /> <path d="M6 18v-7" /> </svg></div>
  <h3 class="feature-title">Statements that map to Schedule III</h3>
  <p class="feature-text">Your trial balance already carries the groupings financial statements need, so a lender pack or board pack is drawn straight off it.</p><ul style="margin-top:12px;"><li>chart set to Schedule III groupings behind the trial balance</li><li>figures for lenders or a board drawn straight off it</li><li>Without it, chart regrouped by hand for every outside request</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" /> <path d="M14 2v5a1 1 0 0 0 1 1h5" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></div>
  <h3 class="feature-title">Party-wise debtor and creditor position</h3>
  <p class="feature-text">You see who owes you and who you owe, name by name, with ageing. It replaces one net figure on the balance sheet.</p><ul style="margin-top:12px;"><li>debtor and creditor detail held party by party, with ageing</li><li>old balances and duplicate payments visible, not netted into one figure</li><li>Without it, stale balances and duplicate payments stay hidden until reconciled</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" /> <path d="M16 3.128a4 4 0 0 1 0 7.744" /> <path d="M22 21v-2a4 4 0 0 0-3-3.87" /> <circle cx="9" cy="7" r="4" /> </svg></div>
  <h3 class="feature-title">Payroll deductions that agree</h3>
  <p class="feature-text">We compute each month's PF, ESI, Professional Tax and salary TDS off the salary register. Challans paid and the ledger charge then match.</p><ul style="margin-top:12px;"><li>PF, ESI, Professional Tax and salary TDS computed off the salary register</li><li>challans paid reconciled to the ledger charge each month</li><li>Otherwise a difference surfaces only when an employee queries Form 16</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M12 7v14" /> <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z" /> </svg></div>
  <h3 class="feature-title">One reconciled set of numbers</h3>
  <p class="feature-text">You report one set of numbers, with bank balances, ledger balances and the figures behind your returns brought to agreement each period.</p><ul style="margin-top:12px;"><li>every bank account reconciled to its statement before reporting</li><li>ledger balances and return figures agreed each period</li><li>Without it, an unposted receipt shifts revenue and the tax position</li></ul>
</article>
</div>
    </div>
</section>




<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Accounting & Bookkeeping Services Clients in Mumbai Choose Patron Accounting</h2>
            <p class="section-intro">Five things a founder can check before handing over the books. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>Books that close on time, not books that lag</strong><p>Across 15+ years and 3,000+ businesses, we run a fixed month-end routine so your ledger reconciles and closes each period instead of drifting weeks behind.</p></div>
                <div><strong>Rule 3(1) audit trail live in your ledger</strong><p>The Rule 3(1) audit trail stays switched on and reviewed in your books, part of the same discipline behind our 25,000+ filings, ready before an auditor asks.</p></div>
                <div><strong>We work in Zoho Books, Xero, Tally and Odoo</strong><p>We set up the software your finance team already runs, whether Zoho Books, Xero, Tally Prime or Odoo. Your chart of accounts and tax codes are configured inside the tool you already run.</p></div>
                <div><strong>GST and TDS filed before every deadline</strong><p>We file your GST and TDS returns before each statutory due date, month after month, alongside Maharashtra PTRC and PTEC. This monthly cadence sits within our 25,000+ filings completed.</p></div>
                <div><strong>On the ground across BKC, Andheri and Fort</strong><p>Our Mumbai team serves businesses in BKC, Andheri and Fort, fluent in Maharashtra profession tax. That reach rests on 15+ years and 3,000+ businesses served since 2019 at a 4.9 star Google rating.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>



<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Outsourced vs In-House Accountant vs DIY: for Mumbai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Outsourced</th><th>In-House Accountant</th></tr></thead>
                    <tbody>
                        <tr><td>Reporting rigour</td><td>Team meets the tight SEBI reporting timelines that BKC group vendors expect each quarter</td><td>One accountant can hit reporting deadlines until listed-group reporting demands multiply</td></tr>
                        <tr><td>Monthly cost</td><td>Retainer keeps pace with volume, usually lighter than a Mumbai salaried hire plus office space</td><td>High city salaries make a full-time hire worthwhile only at steady scale</td></tr>
                        <tr><td>Compliance risk</td><td>GST, TDS and Stamp Act triggers are tracked, so slips stay rare</td><td>A single calendar keeper means one leave gap can miss a deadline</td></tr>
                        <tr><td>Expertise depth</td><td>Reach Ind AS, SEBI reporting and SEEPZ SEZ specialists without separate hires</td><td>One hire's knowledge, so complex listed-group matters still need outside counsel</td></tr>
                        <tr><td>Continuity cover</td><td>Firm covers leave and attrition, keeping monthly books uninterrupted</td><td>Resignation in a tight talent market stalls reporting for weeks</td></tr>
                        <tr><td>Software and controls</td><td>Cloud ledgers, maker checker controls and reconciliations are bundled in</td><td>You fund licences, backups and internal controls yourself</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">For most Mumbai SMEs supplying BKC groups or running SEEPZ SEZ units, outsourced accounting services in mumbai win on reporting discipline and continuity. Build an in-house team only when scale justifies the salary over <a href="/accounting-services">managed accounting across India</a>.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Mumbai Rules for Businesses — Maharashtra PTRC/PTEC, the Audit-Trail Rule</h2>
            <div class="content-text">
                
                <p>A business operating in Mumbai registers under the Maharashtra Shops and Establishments Act before it hires, and that single step sets the payroll records the books must then carry. Maharashtra also levies profession tax on two separate registrations, so the ledger has to account for a liability that most of the national framework never mentions.</p>
<p>On top of that state layer sits the Companies Act, which fixes how the books are kept and closed. The distinctively local costs, from Maharashtra stamp duty on a lease to the two profession-tax lines, are captured here while the wider filing detail belongs to the parent page. Accounting services in Mumbai keep both the state and central obligations aligned against the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>Maharashtra State Tax on Professions, Trades, Callings and Employments Act 1975</strong></span><span class="al-d">Profession tax runs on two registrations - PTEC for the entity's own liability and PTRC to deduct it from salaries - and the payroll ledger carries both.</span></li><li><span class="al-t"><strong>Maharashtra Shops and Establishments (Regulation of Employment and Conditions of Service) Act 2017</strong></span><span class="al-d">The establishment registers under the Maharashtra Shops Act, which sets the employment records the books must support.</span></li><li><span class="al-t"><strong>Maharashtra Stamp Act 1958</strong></span><span class="al-d">Leases, agreements and share transfers are stamped at Maharashtra rates, a cost the books capitalise or expense correctly - see <a href="/glossary/accounting/maharashtra-stamp-act-provisions">Maharashtra Stamp Act Provisions</a>.</span></li><li><span class="al-t"><strong>Section 128 with Section 129 and Schedule III, Companies Act 2013</strong></span><span class="al-d">The books stay on accrual and double entry and close into Schedule III statements, retained for eight years, whichever city they are kept in.</span></li><li><span class="al-t"><strong>Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">The audit trail stays enabled all year, and Section 44AB decides when a tax audit applies. The full national framework sits on the <a href="/accounting-services">India accounting page</a>.</span></li><li><span class="al-t"><strong>Local Body Tax (LBT), discontinued</strong></span><span class="al-d">LBT was withdrawn for most dealers from 1 August 2015 and subsumed into GST, so it survives only as a legacy assessment point, not a live levy.</span></li></ul><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></p>

            </div>
        </div>
    </div>
</section>


<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Accounting in Mumbai FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on accounting for Mumbai businesses - scope, local compliance, documents and pricing.</p>
                    <a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    <form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate>
  <h3 class="faq-enquiry__title">Ask about your books in Mumbai</h3>
  <p class="faq-enquiry__sub">Send your requirement for a scoped quote.</p>
  <p class="faq-enquiry__context">Enquiring about: <strong>Accounting in Mumbai</strong></p>
  <input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required>
  <input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required>
  <div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div>
  <button class="faq-enquiry__btn" type="submit">Get a Callback</button>
  <p class="faq-enquiry__msg" role="status" aria-live="polite"></p>
</form>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Which Maharashtra registrations does a Mumbai business need before its books are set up?</h3>
  <div class="faq-expanded__a"><p>PTEC for the entity and its directors, PTRC once salaried staff are on the roll, Maharashtra Shops and Establishments registration for the premises, and an MCGM trade licence for certain activities. Each carries its own return or renewal. We list them against your entity type in the first week, because the commonest Mumbai penalty is not a wrong entry, it is an unregistered head.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">When is GSTR-3B due for a Mumbai business?</h3>
  <div class="faq-expanded__a"><p>Maharashtra is a Category X state, so QRMP filers with turnover up to Rs 5 crore file quarterly by the 22nd of the month following the quarter, while businesses above Rs 5 crore file monthly by the 20th. QRMP filers still pay tax through PMT-06 by the 25th of each intervening month. We set the calendar to your turnover slab at onboarding.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How long must a Mumbai company preserve its books, and does the audit trail rule apply?</h3>
  <div class="faq-expanded__a"><p>Section 128(5) of the Companies Act requires books to be preserved for eight financial years immediately preceding the current year. Every company must also use accounting software carrying an edit log that records each change and cannot be disabled, under Rule 3(1) of the Companies (Accounts) Rules. We configure that setting and keep dated backups, because auditors now report on it directly.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is this service oversized for a small Fort trading firm rather than a BKC corporate?</h3>
  <div class="faq-expanded__a"><p>No. A Fort or Masjid Bunder trading firm receives the same monthly close, GSTR-2B reconciliation and TDS compliance, priced on volume rather than as a corporate retainer. The work differs in scale, not in standard. Most of our Mumbai clients are owner-managed businesses with five to fifty staff, not listed groups occupying towers in BKC.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does TDS apply on Rs 2 lakh a month rent for an Andheri office?</h3>
  <div class="faq-expanded__a"><p>Yes. TDS under Section 194-I applies at 10% on rent for land or building once annual payments to one landlord cross the prescribed threshold, and the deduction is deposited by the 7th of the following month. Mumbai commercial rents cross that threshold within a single quarter. We add every landlord to your TDS master at onboarding so month one is not already in default.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What actually happens during your monthly close for a Mumbai client?</h3>
  <div class="faq-expanded__a"><p>Bank and card feeds are reconciled, purchase and sales registers matched to GSTR-2B and GSTR-1, TDS computed and challans raised, payroll and statutory dues posted, stock and advances reviewed, then a profit and loss with balance sheet is issued. For most Mumbai clients this lands by the 10th, leaving room before the 20th and 22nd GST dates.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What happens to input credit when a supplier does not file GST returns?</h3>
  <div class="faq-expanded__a"><p>Input credit is available only for invoices appearing in your GSTR-2B, so a supplier who has not filed GSTR-1 costs you real cash that month. We issue a monthly list of missing invoices with supplier names and amounts, so your team can chase before payment is released. Withholding the GST portion of a payment until the invoice appears is the practical fix.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How far back can the department reopen a Mumbai assessment?</h3>
  <div class="faq-expanded__a"><p>Reassessment under Section 149 can generally reach three years and three months from the end of the relevant assessment year, extending to five years and three months where the escaped income is Rs 50 lakh or more. That is why ledgers, vouchers and bank records are archived rather than discarded. We keep a searchable year-wise archive alongside your live books.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What do monthly accounting services cost in Mumbai?</h3>
  <div class="faq-expanded__a"><p>Fees are set on monthly transaction volume, the number of bank accounts and GST registrations, payroll headcount and whether year-end audit support is included, not one advertised rate. An owner-managed Fort business with 200 transactions a month costs a fraction of a multi-state group. We quote after reviewing one month of statements. Amounts are exclusive of GST and government charges.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is a visit to a Mumbai office required, and how does switching from an existing accountant work?</h3>
  <div class="faq-expanded__a"><p>No visit is needed. Work is handled remotely, with visits to your BKC, Andheri, Fort or Nariman Point premises arranged when an audit or a stock count needs someone present, and we run no Mumbai office. Switching takes one cycle: we agree opening balances in writing, list open GST and TDS positions, then close the first month in parallel.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>Your books live in one ledger rather than in a spread of parallel spreadsheets. Patron works inside that file: bank feeds mapped, vendor masters cleaned, tax ledgers kept live all month. An office taken on MMRDA lease at Bandra Kurla Complex sits in the books as a capitalised premium amortised over the term, with.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Deadlines in Mumbai You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p><strong>TDS / TCS deposit (Challan ITNS-281)</strong> is due 7th of every month (30 April for March). <strong>GSTR-1 (outward supplies)</strong> is due 11th of every month for monthly filers. <strong>Provident Fund (ECR) and ESI contribution</strong> is due 15th of every month. Patron tracks each against your books so nothing is reconstructed after the fact. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Accounting Services in Mumbai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">Someone always does the books, appointed or not. In practice it is an office administrator with a spreadsheet, or a director on a Sunday, working from bank statements and memory. The work gets done and the entries exist; what is still missing is anyone qualified checking that they mean what they say.</p>
<p style="color:rgba(255,255,255,0.88);">A net worth certificate, a tender bid or an OD renewal each start from the same place: audited figures that agree to the ledger they came from. Where bookkeeping services in Mumbai have held that link, the accountant signing can do it from the file. Where the link is broken, the request waits.</p>
<p style="color:rgba(255,255,255,0.88);">Bank accounts are counted first: how many are live, which handle collections, which carry the overdraft, which are dormant, and how far back the last reconciled statement goes. That single answer sizes the opening exercise better than turnover or headcount ever does, and shapes the <a href="/accounting-services">monthly bookkeeping routine</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20in%20Mumbai" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>








<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Need investor-ready books &amp; cap table management?</strong> Talk to our CA team.</span>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20startup%20accounting%20and%20investor-ready%20books" target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Get Free Startup Quote &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

<section class="content-section pa-sibling-cities"><div class="content-container"><div class="text-content"><h2 class="section-title">Accounting Across Key Cities</h2><p class="section-intro">Your city is highlighted below &mdash; we run the same on-ground service across these cities too.</p><div class="pa-city-grid"><div class="pa-city-card pa-city-card--here"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai<span class="pa-here-badge">You are here</span></div><div class="pa-card-sub">Maharashtra</div></div></div><a href="https://www.patronaccounting.com/accounting-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a><a href="https://www.patronaccounting.com/accounting-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="https://www.patronaccounting.com/accounting-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a></div></div></div></section><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; compliance &nbsp;&middot;&nbsp; Last reviewed 23 July 2026 &nbsp;&middot;&nbsp; Next review 23 October 2026</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a><a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></div></div></div>
</main>
<script>(function(){function init(){var list=document.querySelector('.faq-expanded__list');var items=(list||document).querySelectorAll('.faq-expanded__item');if(!items.length)return;var A=Array.prototype;function allCol(){return A.every.call(items,function(it){return it.classList.contains('is-collapsed');});}var btn=document.createElement('button');btn.type='button';btn.className='faq-expanded__toggle-all';function sync(){btn.textContent=allCol()?'Expand all':'Collapse all';}btn.addEventListener('click',function(){var c=!allCol();A.forEach.call(items,function(it){it.classList.toggle('is-collapsed',c);});sync();});if(list)list.insertBefore(btn,list.firstChild);A.forEach.call(items,function(it){var q=it.querySelector('.faq-expanded__q');if(!q)return;q.setAttribute('role','button');q.setAttribute('tabindex','0');function t(){it.classList.toggle('is-collapsed');sync();}q.addEventListener('click',t);q.addEventListener('keydown',function(e){if(e.key==='Enter'||e.key===' '){e.preventDefault();t();}});});sync();}if(document.readyState!=='loading')init();else document.addEventListener('DOMContentLoaded',init);})();</script>
<script>(function(){function bind(){if(typeof $==='undefined'||!$.fn.slick){return setTimeout(bind,200);}var $s=$('#testimonialSlider');document.querySelectorAll('#testimonialSlider video').forEach(function(v){v.addEventListener('play',function(){try{$s.slick('slickPause');}catch(e){}});v.addEventListener('pause',function(){try{$s.slick('slickPlay');}catch(e){}});v.addEventListener('ended',function(){try{$s.slick('slickPlay');}catch(e){}});});}if(document.readyState!=='loading')bind();else document.addEventListener('DOMContentLoaded',bind);})();</script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>





<script>
(function() {
    // ============================================
    // CONFIGURATION — Update these values
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
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
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
                        <div class="testi-google-badge"><img src="https://www.patronaccounting.com/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
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
        // Static cards already in DOM — just init Slick if not already done
        if (slider.children.length > 0 && !$(slider).hasClass('slick-initialized')) {
            if (loading) loading.style.display = 'none';
            initSlick(slider);
            return;
        }
        let html = '';

        reviews.forEach(function(review, i) {
            if (review.hasVideo && review.videoUrl) {
                html += buildVideoCard(review);
            } else {
                html += buildQuoteCard(review, i);
            }
        });

        slider.innerHTML = html;
        slider.style.display = 'block';
        loading.style.display = 'none';

        // Init Slick
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
            autoplaySpeed: 4500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            draggable: true,
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered in the desired order - use them as-is and do NOT
        // fetch/regenerate from fallbackReviews or the Google API (that would overwrite the
        // curated order, e.g. video, text, video, then rest).
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
            return; // static cards are authoritative - stop here
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
        return { valid: false, message: 'Enter a valid phone number (7–15 digits)' };
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
        var phoneVal = (document.getElementById('phoneNumberInput')||{value:''}).value.trim(); document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
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


<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll
const tocBtns = document.querySelectorAll('.toc-btn');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', function() {
    let current = '';
    sections.forEach(function(section) {
        const sectionTop = section.offsetTop - 120;
        if (pageYOffset >= sectionTop) { current = section.getAttribute('id'); }
    });
    tocBtns.forEach(function(btn) {
        btn.classList.remove('active');
        if (btn.getAttribute('href') === '#' + current) { btn.classList.add('active'); var _w=document.getElementById('tocWrapper'); if(_w){_w.scrollTo({left:btn.offsetLeft-_w.offsetWidth/2+btn.offsetWidth/2,behavior:'smooth'});} }
    });
});
</script>


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
    if (el1) { el1.textContent = dateStr; }
})();
</script>
@endsection
