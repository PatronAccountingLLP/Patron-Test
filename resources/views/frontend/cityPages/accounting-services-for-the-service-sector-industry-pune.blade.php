@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Accounting for Consultants and Service, CA Managed | Patron Accounting</title>
    <meta name="description" content="For Pune businesses: Maharashtra PTRC/PTEC handled. Save hours every month, close on time and keep audit season uneventful. Get a compliance review.">
    <link rel="canonical" href="https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Accounting for Consultants and Service, CA Managed | Patron Accounting">
    <meta property="og:description" content="For Pune businesses: Maharashtra PTRC/PTEC handled. Save hours every month, close on time and keep audit season uneventful. Get a compliance review.">
    <meta property="og:url" content="https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og/accounting-services-for-the-service-sector-industry-pune-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accounting for Consultants and Service, CA Managed | Patron Accounting">
    <meta name="twitter:description" content="For Pune businesses: Maharashtra PTRC/PTEC handled. Save hours every month, close on time and keep audit season uneventful. Get a compliance review.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og/accounting-services-for-the-service-sector-industry-pune-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune/#service",
  "name": "Accounting for Consultants and Service Businesses in Pune",
  "description": "Service industry accounting in Pune tracks unbilled revenue and WIP ageing engagement by engagement, so a slipping project shows up before the invoice does.",
  "image": "https://www.patronaccounting.com/images/pune-og.webp",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Service Sector Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune"
  },
  "areaServed": {
    "@type": "City",
    "name": "Pune"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting for Consultants and Service Businesses in Pune",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting for Consultants and Service Businesses in Pune",
          "description": "Service industry accounting in Pune tracks unbilled revenue and WIP ageing engagement by engagement, so a slipping project shows up before the invoice does.",
          "serviceType": "Service Sector Accounting Service"
        },
        "eligibleRegion": {
          "@type": "City",
          "name": "Pune"
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
  "@id": "https://www.patronaccounting.com/pune/#localbusiness",
  "name": "Patron Accounting LLP - Pune (Wagholi HQ)",
  "url": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune",
  "telephone": "+91 94594 56700",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "RTC Silver, B4-708, Sai Satyam Park, Wagholi",
    "addressLocality": "Pune",
    "addressRegion": "Maharashtra",
    "postalCode": "412207",
    "addressCountry": "IN"
  },
  "areaServed": [
    {
      "@type": "AdministrativeArea",
      "name": "Pune"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Wagholi"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Kharadi"
    },
    {
      "@type": "AdministrativeArea",
      "name": "Baner"
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
    "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting for Consultants and Service Businesses in Pune",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting for Consultants and Service Businesses in Pune",
          "description": "Service industry accounting in Pune tracks unbilled revenue and WIP ageing engagement by engagement, so a slipping project shows up before the invoice does.",
          "serviceType": "Service Sector Accounting Service"
        },
        "eligibleRegion": {
          "@type": "City",
          "name": "Pune"
        }
      }
    ]
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 18.57944655,
    "longitude": 73.9682987
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "206",
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
      "name": "Service Sector Accounting (Project Billing)",
      "item": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Pune",
      "item": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune"
    }
  ],
  "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "When is Section 194J TDS on professional fees deposited?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "TDS deducted under Section 194J is deposited by the 7th of the following month, with March allowed until 30 April, and the quarterly statement follows in Form 26Q. The rate is 10% on professional fees and 2% on technical services, call centre payments and certain royalties. Misclassifying a technical service as professional creates a short-deduction demand years afterwards."
      }
    },
    {
      "@type": "Question",
      "name": "How is unbilled revenue on an ongoing engagement recognised?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Revenue on time-and-material and milestone work is recognised as the service is delivered, so effort completed but not yet invoiced sits as unbilled revenue on the balance sheet and reverses when the invoice is raised. GST liability arises at the earlier of invoice or payment, so unbilled revenue is not taxed yet. We reconcile timesheets, WIP and GST registers together monthly."
      }
    },
    {
      "@type": "Question",
      "name": "Which tax applies when the work is done from Baner for clients in Bengaluru and Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For a registered client, place of supply is the client's location, so a Baner consultant billing a Bengaluru or Delhi company charges IGST while a Pune client is billed CGST plus SGST. For unregistered clients, place of supply is the address on record, defaulting to your location where none exists. Charging the wrong head means paying twice, since it cannot simply be transferred."
      }
    },
    {
      "@type": "Question",
      "name": "Does a Pune consultancy pay professional tax on the owner as well as the staff?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Maharashtra charges PTEC of Rs 2,500 a year on the proprietor, partner or company itself, payable by 15 June since the February 2026 amendment to Rule 11(3), while PTRC covers deduction from staff salaries above the wage threshold. A sole consultant with no employees still needs PTEC. Both are set up alongside Shops and Establishment registration."
      }
    },
    {
      "@type": "Question",
      "name": "Are client reimbursements such as travel and hotel liable to GST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Reimbursed travel, hotel and courier costs form part of the taxable value and attract GST at your service rate, unless the strict pure agent conditions in Rule 33 are met, which need the client to be the contractual recipient and the cost recovered at actuals with separate disclosure. Most Pune consultancy contracts fail at least one condition, so tax is charged on the gross."
      }
    },
    {
      "@type": "Question",
      "name": "Can a professional practice use presumptive taxation under Section 44ADA instead of maintaining full books?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Section 44ADA lets specified professionals such as engineers, architects, lawyers, doctors and technical consultants declare 50% of gross receipts as income up to Rs 50 lakh, raised to Rs 75 lakh where at least 95% of receipts are non-cash. It is open to a resident individual or partnership firm, but not to an LLP or company, and it does not remove GST records or TDS obligations."
      }
    },
    {
      "@type": "Question",
      "name": "Is invoicing an overseas client from Pune zero-rated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Export of services is zero-rated where payment arrives in convertible foreign exchange, the recipient is outside India, and supplier and recipient are not merely establishments of the same person. File a Letter of Undertaking in Form RFD-11 at the start of each financial year to invoice without paying IGST, and keep FIRCs matched invoice by invoice for the realisation trail."
      }
    },
    {
      "@type": "Question",
      "name": "Retainer or milestone billing: how does the choice change the books?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Retainers create a predictable monthly invoice with GST charged upfront, and unused hours either lapse or carry forward, which the contract must state or they become a disputed liability. Milestone billing defers cash and grows unbilled revenue, so working capital tightens as delivery lengthens. We model both against your delivery calendar before fixing the invoicing template for the year."
      }
    },
    {
      "@type": "Question",
      "name": "What does accounting for a Pune consultancy cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The monthly retainer is driven by invoice and expense volume, headcount, whether project-wise profitability and unbilled revenue tracking are included, and whether you run export invoicing with FIRC matching. Quotes follow a short review of your last three months of invoices and bank statements. Annual filings, tax audit and TDS return preparation are quoted as separate lines."
      }
    },
    {
      "@type": "Question",
      "name": "Can documents be handed over in person in Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our Pune office at RTC Silver, B4-708, Sai Satyam Park, Wagholi 412207 takes in-person handover and hosts onboarding meetings, and we visit Hinjewadi, Kharadi or Baner offices by arrangement. Most clients simply upload invoices, expense bills and bank statements to a shared folder monthly, then receive the reconciled ledger, TDS working and unbilled revenue schedule by the 10th."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune",
  "name": "Accounting for Consultants and Service Businesses in Pune",
  "description": "For Pune businesses: Maharashtra PTRC/PTEC handled. Save hours every month, close on time and keep audit season uneventful. Get a compliance review.",
  "url": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/pune-og.webp"
  },
  "image": "https://www.patronaccounting.com/images/pune-og.webp",
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
    "@id": "https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/pune/#breadcrumb"
  }
}
</script>
@endsection

<link rel="stylesheet" href="/css/patron-cluster.css">

@section('content')
<main>


<nav aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;"><li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com" style="color:var(--text-muted);text-decoration:none;font-weight:500;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Home</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li><li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com/accounting-services" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Accounting Services</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li><li style="display:flex;align-items:center;gap:8px;"><a href="https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Service Sector Accounting</a><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg></li><li><span style="color:var(--orange);font-weight:600;">Pune</span></li></ol>
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
                    </div><span class="pa-hero-loc"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Pune, Maharashtra</span>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Accounting for Consultants and Service Businesses in Pune
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Revenue tied to the fee basis:</span> How each engagement earns comes from the signed contract, and that basis drives the accounting, not the invoice date.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Unbilled work valued monthly:</span> We value open engagements against the billing plan each month end, so delivered but uninvoiced effort shows as an asset.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Realisation per engagement:</span> Each month closes with fee earned, delivery cost, write-offs and recovery against the contracted rate, engagement by engagement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Client advances kept as liabilities:</span> You hold retainers and advances as liabilities, released only against the invoice they belong to.</p>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Service%20Sector%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Service%20Sector%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20the%20service%20sector%20industry%20in%20Pune" target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Service Sector Accounting'/>
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
                                <option value="accounting-services-for-the-service-sector-industry/pune" selected>Startup Accounting</option>
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
            <h2 class="section-title">What Service Sector Accounting Costs and Covers for Pune Businesses</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Service Sector Accounting Services at a Glance</strong></p>
                    <p><a href="/accounting-services-for-the-service-sector-industry">Service industry accounting in Pune</a> tracks unbilled revenue and WIP ageing engagement by engagement, so a slipping project shows up before the invoice does. Retainer billing, inter-state place of supply and the Section 194J cut-off are handled against the state GST return calendar. Patron reports realisation for agencies and consultancies in Baner and Kalyani Nagar. Suited to professional services firms billing time and milestones.</p>
                </div>
                <p>Section 194J bites when a professional fee is credited in the books, not when it is finally paid, so an accrual raised at close carries a deduction obligation with it. Service industry accounting for Pune consultancies accrues fees engagement by engagement, with tax computed at the moment of posting. An agency billing a tenant inside the Hadapsar SEZ raises zero-rated invoices that sit in their own series, as costing an engineering project properly shows.</p>
                <p>Getting it wrong costs more than the work itself. A late deposit carries interest, a return filed after the due date attracts a late fee, and an expense on which tax was never deducted can be disallowed at assessment. Unbilled work left to age compounds it. Service sector accounting in Pune closes those gaps monthly against the state tax calendar.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Do Service Sector Accounting Mean for Pune Businesses?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Engagement contracts and the ledger that must reflect them are what this service acts on. Service industry accounting in Pune reads each retainer or project agreement into the accounts. It records the billing basis it sets, the work done against it, and the fees still unbilled at any point. Revenue follows the contract and the delivery, so the ledger states income a firm has genuinely earned, not simply what it has invoiced.</p>
<p>Working from those two objects, the accounting keeps unbilled work valued and ageing in view. It separates client advances and pass-through costs from real income, and loads each engagement with its own people and direct costs. What emerges is a margin the firm can read project by project rather than as one blurred total. Service industry accounting in Pune turns a stack of contracts and timesheets into accounts that say, engagement by engagement, what the practice actually made.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Service Sector Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/hinjewadi-it-park-sez-rules">Hinjewadi IT Park SEZ Rules</a></span><span class="al-d">Tax and reporting conditions for firms operating inside the Hinjewadi IT SEZ.</span></li><li><span class="al-t"><a href="/glossary/unbilled-revenue-wip-hours">Unbilled Revenue (WIP Hours)</a></span><span class="al-d">Work delivered and earned that no invoice has yet captured.</span></li><li><span class="al-t"><a href="/glossary/milestone-vs-retainer-billing">Milestone vs Retainer Billing</a></span><span class="al-d">Billing at completed milestones versus a fixed recurring monthly fee.</span></li><li><span class="al-t"><a href="/glossary/project-wise-profitability-margin">Project-Wise Profitability Margin</a></span><span class="al-d">The margin each engagement leaves once its own direct costs are removed.</span></li><li><span class="al-t"><a href="/glossary/contribution-margin-dashboard">Contribution Margin Dashboard</a></span><span class="al-d">A live view of income after variable costs, per project or client.</span></li><li><span class="al-t"><a href="/glossary/ind-as-115-revenue-recognition">Ind AS 115 Revenue Recognition</a></span><span class="al-d">The standard that fixes when service revenue counts as earned.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/what-is-pune.webp" alt="What Is Service Sector Accounting. Accounting for consultants is the engagement that turns time and contracts into a in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Service Sector Accounting in Pune: From Hinjewadi to Growing SMEs</h2>
            <div class="content-text">
                
                <p>Consultancies and engineering-services firms clustered in Hinjewadi IT Park, Kharadi and Magarpatta earn fees on assignments that close long before the paperwork catches up. <a href="/accounting-services-for-the-service-sector-industry">Service industry accounting in Pune</a> puts a monthly value on that unbilled work in progress.</p>
  <ul>
    <li>Engineering and technical consultancies in Kharadi pricing each project stage so unbilled effort stays visible mid-assignment.</li>
    <li>Digital and creative agencies around Magarpatta blending fixed retainers with milestone fees billed on the same account.</li>
    <li>Architecture and interior-design practices near Hadapsar tracking drawings-in-progress against the fee agreed for each site.</li>
    <li>Marketing agencies passing on print and media costs their clients approve only after the campaign ends.</li>
    <li>Boutique advisory firms leaning on associates whose fees belong to the exact engagement that used them.</li>
    <li>Consultancies reconciling the Section 194J TDS clients hold back with every line on Form 26AS.</li>
    <li>Project teams on the payroll at PCMC campuses, with <a href="/blog/maharashtra-professional-tax-shops-act">Maharashtra profession tax</a> cut from salaries.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Accounting Included for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Bookkeeping for Hinjewadi consultancies</td><td>Consulting and agency businesses around Hinjewadi IT Park get monthly books and management accounts, giving service industry accounting in Pune with reviewed ledgers <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Work-in-progress and advance valuation</td><td>Open project work is valued for unbilled revenue every month, while client advances remain liabilities until the matching milestone is invoiced <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>GST and place of supply review</td><td>Billing from SEZ and domestic units is tested for place of supply, with inter-state IGST and GST return workings prepared for your filing <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Engagement profitability review</td><td>Professional services accounting in Pune groups fees against associate and subcontractor costs, reporting realisation and margin for every client engagement <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>TDS, PTEC and debtor tracking</td><td>TDS with 26AS reconciliation, the annual PTEC challan and a debtors report are maintained, with <a href="/accounting-services/pune">bookkeeping services in Pune</a> available for wider needs <span class="badge-included">Monthly, PTEC annually</span></td></tr>
                        <tr><td>Year-end accounts for consultants</td><td>Audit-ready schedules and annual financial statements are compiled, supporting accounting for consultants in Pune with a reconciled close at year end <span class="badge-included">Annually</span></td></tr>

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
            <h2 class="section-title">How Service Sector Accounting Works in Pune — Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron delivers service sector accounting for Pune businesses, step by step.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Reading engagement terms into billing</h3>
    <p class="step-description">We work through each signed engagement letter, SOW and retainer agreement and record how that engagement earns: fixed fee, time and materials, milestone or monthly retainer. That fee basis, not the invoice date, drives how the engagement is accounted for.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-1-reading-engagement-terms-into-billing-pune.webp" alt="Illustration for Reading engagement terms into billing: We work through each signed engagement letter, SOW and retainer in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Matching timesheets to invoices</h3>
    <p class="step-description">The time-tracking export is reconciled by client, project and person against invoices actually raised. Hours recorded but not billed are carried as unbilled; hours abandoned are written off only against a named approval, so realisation is visible rather than hidden.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-2-matching-timesheets-to-invoices-pune.webp" alt="Illustration for Matching timesheets to invoices: The time-tracking export is reconciled by client, project and person in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Valuing unbilled work in progress</h3>
    <p class="step-description">At each month end we value open engagements against the billing plan and recognise revenue as the promised service is delivered, not as bills go out. The unbilled schedule is rolled forward so the balance is explainable line by line.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-3-valuing-unbilled-work-in-progress-pune.webp" alt="Illustration for Valuing unbilled work in progress: At each month end we value open engagements against the billing plan and in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Tracking unadjusted client advances</h3>
    <p class="step-description">Retainers and advances are held as liabilities and adjusted only against the invoice they relate to. Because GST on a service falls due on the earlier of invoice or receipt, we check that receipt vouchers and the advance ledger agree with what was reported.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-4-tracking-unadjusted-client-advances-pune.webp" alt="Illustration for Tracking unadjusted client advances: Retainers and advances are held as liabilities and adjusted only in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Separating pass-through client costs</h3>
    <p class="step-description">Reimbursables are tested against the pure agent conditions: third-party bill in the client's name, client authorisation on record and recovery at actual. Costs that fail the test are treated as your own expense and recovered as taxable value instead.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-5-separating-pass-through-client-costs-pune.webp" alt="Illustration for Separating pass-through client costs: Reimbursables are tested against the pure agent conditions: in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Costing associates and subcontractors</h3>
    <p class="step-description">Associate, freelancer and subcontractor invoices are tagged to the engagement they served, and deduction is applied at the rate their engagement terms call for. This keeps delivery cost against the right revenue instead of pooling it in overheads.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-6-costing-associates-and-subcontractors-pune.webp" alt="Illustration for Costing associates and subcontractors: Associate, freelancer and subcontractor invoices are tagged to the in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">Reporting engagement level profitability</h3>
    <p class="step-description">Each month closes with a view per engagement: fee earned, cost of delivery, write-offs and realisation against the contracted rate. Loss-making engagements and stale unbilled balances are listed for you to price or close.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-the-service-sector-industry/pune/step-7-reporting-engagement-level-profitability-pune.webp" alt="Illustration for Reporting engagement level profitability: Each month closes with a view per engagement: fee earned, cost of in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>

        </div>
    </div>
</section>



<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Service Sector Accounting</h2>
            <div class="content-text">
                
                <p>Retainer agreements and time records lead, with <a href="/blog/maharashtra-professional-tax-shops-act">Maharashtra profession tax</a> following, and an SEZ letter for firms operating out of a notified Pune zone.</p>
<ul>
    <li>Signed engagement letters, SOWs and retainer agreements with fee basis and milestone terms</li>
    <li>Timesheets / time-tracking export by client, project and person</li>
    <li>Unbilled revenue / work-in-progress schedule and the billing plan for open engagements</li>
    <li>Advance / retainer receipts register showing unadjusted client advances</li>
    <li>Reimbursable / pass-through expense records with client approval and supporting third-party bills</li>
    <li>Sales invoices raised, with credit notes and write-offs</li>
    <li>Bank statements for all accounts, and business credit card statements</li>
    <li>PTEC certificate (Certificate of Enrolment) under the Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975, plus the annual PTEC challan</li>
    <li>PTRC certificate plus monthly/annual PTRC returns and challans</li>
    <li>SEZ Letter of Approval from the Development Commissioner (Pune cluster is administered by SEEPZ), with SOFTEX forms (or the Export Declaration Form for periods from 1 October 2026) and the Annual Performance Report, only where the unit is physically inside a notified SEZ</li>
</ul>

            </div>
        </div>
    </div>
</section>


<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Accounting Challenges Specific to Pune: Hinjewadi IT Park SEZ Rules and MIDC Estate Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Milestone invoices raised before delivery drive revenue timing</td><td>Recognising on billing not delivery overstates a period for Aundh and Viman Nagar agencies</td><td>Recognise on percentage completion against effort, so revenue tracks work done, not the invoice date</td></tr>
                        <tr><td>Chargeable hours not measured against staff cost per engagement</td><td>Realisation stays unknown, so under-recovered engagements and idle time quietly erode the firm's margin</td><td>Our team tracks utilisation and realised rate per client; our <a href="/blog/service-sector-accounting-pune-project-costing">project costing for Pune firms</a> shows recovery by engagement</td></tr>
                        <tr><td>Overseas fee receipts converted at settlement rate, not invoice rate</td><td>The exchange difference is buried inside revenue, so the true fee income and FX result both distort</td><td>Patron records fee income at the invoice rate and books the realised exchange gain or loss separately on settlement</td></tr>
                        <tr><td>Foreign-client withholding tax deducted abroad left unclaimed</td><td>Overseas withholding becomes a sunk cost, so foreign tax credit is lost against Indian liability</td><td>Track withholding certificates per invoice, so foreign tax credit is claimed on the return</td></tr>
                        <tr><td>Retention money on Magarpatta contracts booked as receivable in full</td><td>Cash held back by clients ages as normal debtors, so collection risk is masked</td><td>Split retention into a separate ledger with its release milestone, so genuine ageing is visible</td></tr>

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
            <h2 class="section-title">Service Sector Accounting Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one service entity with routine monthly invoicing</td><td>INR 2,499<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; higher invoice volume with active receivable tracking</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multi-entity service books with custom project and receivable reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">One service entity with routine monthly invoicing sits at <strong>INR 2,499</strong> in Pune, the same rate we charge anywhere. Service industry accounting scales with invoice volume and how much receivable tracking you need, not with your address. Profession-tax registration is an excluded government charge. Ask for a <strong>fixed quote</strong> on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Service Sector Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20the%20service%20sector%20industry%20in%20Pune" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Accounting Compliance Calendar 2026 for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance</th><th>Due Date</th><th>Applies To</th></tr></thead>
                    <tbody>
                        <tr><td>TDS / TCS deposit (Challan ITNS-281)</td><td>7th of every month (30 April for March)</td><td>Every business that deducts tax at source on salaries, rent, contractor or professional fees</td></tr>
                        <tr><td>GSTR-1 (outward supplies)</td><td>11th of every month for monthly filers</td><td>GST-registered Pune businesses filing monthly returns</td></tr>
                        <tr><td>GSTR-3B (summary return and tax payment)</td><td>20th monthly for turnover above Rs 5 crore; 22nd quarterly under QRMP for turnover up to Rs 5 crore (Category X)</td><td>GST-registered businesses in Pune</td></tr>
                        <tr><td>GST PMT-06 (QRMP monthly tax payment)</td><td>25th of the month for the first two months of each quarter</td><td>QRMP filers paying tax monthly while filing GSTR-3B quarterly</td></tr>
                        <tr><td>Professional tax: PTRC monthly return and PTEC</td><td>PTRC by the 15th of every month; PTEC annually by 31 March</td><td>Employers and companies registered for profession tax in Maharashtra (Pune)</td></tr>
                        <tr><td>TDS return for Jan-Mar quarter (Form 24Q / 26Q)</td><td>31 May 2026</td><td>Deductors filing quarterly TDS statements</td></tr>
                        <tr><td>Income-tax return, non-audit cases</td><td>31 July 2026</td><td>Proprietors, firms and individuals not liable to tax audit</td></tr>
                        <tr><td>Advance tax second instalment (45% cumulative)</td><td>15 September 2026</td><td>Companies, firms and individuals liable to advance tax</td></tr>
                        <tr><td>Annual GST return GSTR-9 and reconciliation GSTR-9C</td><td>31 December 2026</td><td>GST-registered Pune businesses above the annual-return and audit thresholds</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>In Pune, a service firm deposits 194J TDS by the 7th and files GSTR-3B on the 22nd under QRMP. A firm unbilled-revenue cut-off keeps each close clean. Profession tax under Maharashtra PTRC falls on the 15th monthly. Patron handles service industry accounting in Pune and sets filing reminders; call +91 94594 56700 or read our <a href="/blog/maharashtra-professional-tax-shops-act">local guide</a>.</p>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Professional Service Sector Accounting Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M13.744 17.736a6 6 0 1 1-7.48-7.48" /> <path d="M15 6h1v4" /> <path d="m6.134 14.768.866-.5 2 3.464" /> <circle cx="16" cy="8" r="6" /> </svg></div>
  <h3 class="feature-title">Revenue tied to the fee basis</h3>
  <p class="feature-text">How each engagement earns comes from the signed contract, and that basis drives the accounting, not the invoice date.</p><ul style="margin-top:12px;"><li>Basis read from engagement letters, SOWs and retainer agreements</li><li>Fixed fee, milestone, time and materials or retainer each treated on its terms</li><li>Without it, bill-date accounting lands income in the wrong month</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <rect width="18" height="11" x="3" y="11" rx="2" ry="2" /> <path d="M7 11V7a5 5 0 0 1 10 0v4" /> </svg></div>
  <h3 class="feature-title">Unbilled work valued monthly</h3>
  <p class="feature-text">We value open engagements against the billing plan each month end, so delivered but uninvoiced effort shows as an asset.</p><ul style="margin-top:12px;"><li>Unbilled revenue carried on a rolled-forward WIP schedule</li><li>Without it, a year's leakage surfaces only at the annual accounts</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <circle cx="12" cy="12" r="10" /> <path d="m9 12 2 2 4-4" /> </svg></div>
  <h3 class="feature-title">Realisation per engagement</h3>
  <p class="feature-text">Each month closes with fee earned, delivery cost, write-offs and recovery against the contracted rate, engagement by engagement.</p><ul style="margin-top:12px;"><li>Recovery measured against the rate each engagement was contracted at</li><li>Without it, a loss-making job is repriced only after it finishes</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M8 3 4 7l4 4" /> <path d="M4 7h16" /> <path d="m16 21 4-4-4-4" /> <path d="M20 17H4" /> </svg></div>
  <h3 class="feature-title">Client advances kept as liabilities</h3>
  <p class="feature-text">You hold retainers and advances as liabilities, released only against the invoice they belong to.</p><ul style="margin-top:12px;"><li>Receipt vouchers agreed to the advance and retainer register</li><li>Released against the specific invoice, keeping the tax position supported</li><li>Without it, advances booked as income inflate a good month</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /> <path d="m9 12 2 2 4-4" /> </svg></div>
  <h3 class="feature-title">Pass-through costs tested properly</h3>
  <p class="feature-text">We test each reimbursable against the pure agent conditions, so genuine recharges stay out of your taxable value.</p><ul style="margin-top:12px;"><li>Pure agent conditions: client-name bill, written authorisation, recovery at actual</li><li>Costs that fail the test recovered as taxable value</li><li>Without it, travel and printing recharges become a liability at assessment</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M13 5h8" /> <path d="M13 12h8" /> <path d="M13 19h8" /> <path d="m3 17 2 2 4-4" /> <path d="m3 7 2 2 4-4" /> </svg></div>
  <h3 class="feature-title">Delivery cost against the right revenue</h3>
  <p class="feature-text">We tag associate and subcontractor invoices to the engagement they served rather than pooling them in overheads.</p><ul style="margin-top:12px;"><li>Deduction applied on the terms of each subcontractor's contract</li><li>Without it, true engagement margin stays hidden in overheads</li></ul>
</article>
</div>
    </div>
</section>




<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Service Sector Accounting Clients in Pune Choose Patron Accounting</h2>
            <p class="section-intro">Five things a founder can check before handing over the books. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>Unbilled WIP visible every month, not discovered at year end</strong><p>Retainers and milestone fees leave work unbilled between invoice runs. Across 15+ years serving consultancies, we value unbilled revenue and WIP every month, so realisation is visible long before the year-end review.</p></div>
                <div><strong>Place-of-supply on inter-state work and Section 194J deduction</strong><p>We set place-of-supply correctly on inter-state engagements and deduct Section 194J at source. With 25,000+ filings behind us, clients can claim 194J credit via 26AS without the year-end scramble.</p></div>
                <div><strong>Project billing and time capture wired into the ledger</strong><p>You keep the ledger you already run, Zoho Books, Xero, Tally Prime or Odoo. We wire your project billing and time capture into the ledger, so hours booked flow straight to revenue.</p></div>
                <div><strong>Engagement-wise realisation and WIP ageing monthly</strong><p>Each month we issue an engagement-wise realisation and WIP ageing report for your Pune practice, alongside <a href="/blog/maharashtra-professional-tax-shops-act">PTRC and PTEC</a> on consultant payroll. Producing this on schedule sits within our 25,000+ filings completed.</p></div>
                <div><strong>Pune head office among Baner service firms</strong><p>Headquartered in Pune, with Kharadi and Baner offices and a Wagholi registered address, we sit among the consultancies we serve in Magarpatta, Hadapsar and Wakad. This reach is backed by 15+ years and 3,000+ businesses served.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>



<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Milestone Billing vs Retainer Billing: for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Milestone Billing</th><th>Retainer Billing</th></tr></thead>
                    <tbody>
                        <tr><td>Billing structure</td><td>Invoices raised on completion of set project stages agreed with the client.</td><td>A fixed recurring fee for continuous service, billed monthly regardless of output.</td></tr>
                        <tr><td>How revenue lands</td><td>Recognised as milestones complete, over time or at a point under Ind AS 115.</td><td>Spread across the month evenly as the retained service is delivered.</td></tr>
                        <tr><td>Sector fit</td><td>Suits Hinjewadi IT Park project studios billing per sprint or release.</td><td>Suits MIDC support firms on continuing maintenance or managed service contracts.</td></tr>
                        <tr><td>Cash flow shape</td><td>Lumpy receipts follow releases, so a slipped stage delays the invoice.</td><td>Steady monthly cash smooths payroll across the Hinjewadi talent base.</td></tr>
                        <tr><td>Unbilled revenue</td><td>WIP builds between releases and must be valued at every month end.</td><td>Little unbilled work as the fee accrues with the passing month.</td></tr>
                        <tr><td>Profit visibility</td><td>Margin is clear per release, guiding scope and pricing choices.</td><td>Blended numbers can mask an unprofitable account until the year closes.</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">Hinjewadi IT Park studios billing per release gain sharper margins from milestone billing, while MIDC maintenance firms benefit from steady retainers. Match service industry accounting in pune to your contract rhythm; read the parent <a href="/accounting-services-for-the-service-sector-industry">Service Sector Accounting (Project Billing)</a>.</td></tr>

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
            <h2 class="section-title">Pune Rules for Service Businesses — Maharashtra PTRC/PTEC, Section 194J TDS</h2>
            <div class="content-text">
                
                <p>A Pune consultancy deducts profession tax from its professional staff under PTRC and holds a PTEC for the firm, the state layer that applies before the central rules on how a service is taxed. Beneath it sits a regime built around where a service is supplied and how its fees carry tax.</p>
<p>The central rules then decide taxation by place of supply and payment. Fees are earned as the work is delivered, TDS is withheld on professional payments, and a client in another state makes the supply inter-state, which keeps <a href="/glossary/unbilled-revenue-wip-hours">Unbilled Revenue (WIP Hours)</a> under review. Service industry accounting in Pune answers to the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>Maharashtra State Tax on Professions, Trades, Callings and Employments Act 1975</strong></span><span class="al-d">Profession tax is deducted from professional and support staff under PTRC, with the firm enrolled for PTEC.</span></li><li><span class="al-t"><strong>Sections 12 and 13, IGST Act 2017</strong></span><span class="al-d">Where a service is treated as supplied fixes the intra-state or inter-state character of the invoice, and therefore CGST/SGST against IGST.</span></li><li><span class="al-t"><strong>Section 194J, Income-tax Act 1961</strong></span><span class="al-d">TDS on professional fees runs at 10%, dropping to 2% for technical services, and is matched to the Form 26AS credit.</span></li><li><span class="al-t"><strong>Maharashtra Shops and Establishments Act 2017</strong></span><span class="al-d">The firm registers under the state Shops Act, framing the employment records behind the payroll.</span></li><li><span class="al-t"><strong>AS 9 / Ind AS 115 with Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">Revenue follows delivery of the engagement, and the edit-log audit trail stays switched on all year. Full national detail sits on the <a href="/accounting-services-for-the-service-sector-industry">parent service-sector page</a>.</span></li></ul><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></p>

            </div>
        </div>
    </div>
</section>


<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Service Sector Accounting in Pune FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on service sector accounting for Pune businesses - scope, local compliance, documents and pricing.</p>
                    <a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    <form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate>
  <h3 class="faq-enquiry__title">Ask about your books in Pune</h3>
  <p class="faq-enquiry__sub">Send your requirement for a scoped quote.</p>
  <p class="faq-enquiry__context">Enquiring about: <strong>Service Sector Accounting in Pune</strong></p>
  <input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required>
  <input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required>
  <div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div>
  <button class="faq-enquiry__btn" type="submit">Get a Callback</button>
  <p class="faq-enquiry__msg" role="status" aria-live="polite"></p>
</form>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">When is Section 194J TDS on professional fees deposited?</h3>
  <div class="faq-expanded__a"><p>TDS deducted under Section 194J is deposited by the 7th of the following month, with March allowed until 30 April, and the quarterly statement follows in Form 26Q. The rate is 10% on professional fees and 2% on technical services, call centre payments and certain royalties. Misclassifying a technical service as professional creates a short-deduction demand years afterwards.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How is unbilled revenue on an ongoing engagement recognised?</h3>
  <div class="faq-expanded__a"><p>Revenue on time-and-material and milestone work is recognised as the service is delivered, so effort completed but not yet invoiced sits as unbilled revenue on the balance sheet and reverses when the invoice is raised. GST liability arises at the earlier of invoice or payment, so unbilled revenue is not taxed yet. We reconcile timesheets, WIP and GST registers together monthly.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Which tax applies when the work is done from Baner for clients in Bengaluru and Delhi?</h3>
  <div class="faq-expanded__a"><p>For a registered client, place of supply is the client's location, so a Baner consultant billing a Bengaluru or Delhi company charges IGST while a Pune client is billed CGST plus SGST. For unregistered clients, place of supply is the address on record, defaulting to your location where none exists. Charging the wrong head means paying twice, since it cannot simply be transferred.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does a Pune consultancy pay professional tax on the owner as well as the staff?</h3>
  <div class="faq-expanded__a"><p>Yes. Maharashtra charges PTEC of Rs 2,500 a year on the proprietor, partner or company itself, payable by 15 June since the February 2026 amendment to Rule 11(3), while PTRC covers deduction from staff salaries above the wage threshold. A sole consultant with no employees still needs PTEC. Both are set up alongside Shops and Establishment registration.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Are client reimbursements such as travel and hotel liable to GST?</h3>
  <div class="faq-expanded__a"><p>Reimbursed travel, hotel and courier costs form part of the taxable value and attract GST at your service rate, unless the strict pure agent conditions in Rule 33 are met, which need the client to be the contractual recipient and the cost recovered at actuals with separate disclosure. Most Pune consultancy contracts fail at least one condition, so tax is charged on the gross.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can a professional practice use presumptive taxation under Section 44ADA instead of maintaining full books?</h3>
  <div class="faq-expanded__a"><p>Section 44ADA lets specified professionals such as engineers, architects, lawyers, doctors and technical consultants declare 50% of gross receipts as income up to Rs 50 lakh, raised to Rs 75 lakh where at least 95% of receipts are non-cash. It is open to a resident individual or partnership firm, but not to an LLP or company, and it does not remove GST records or TDS obligations.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is invoicing an overseas client from Pune zero-rated?</h3>
  <div class="faq-expanded__a"><p>Export of services is zero-rated where payment arrives in convertible foreign exchange, the recipient is outside India, and supplier and recipient are not merely establishments of the same person. File a Letter of Undertaking in Form RFD-11 at the start of each financial year to invoice without paying IGST, and keep FIRCs matched invoice by invoice for the realisation trail.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Retainer or milestone billing: how does the choice change the books?</h3>
  <div class="faq-expanded__a"><p>Retainers create a predictable monthly invoice with GST charged upfront, and unused hours either lapse or carry forward, which the contract must state or they become a disputed liability. Milestone billing defers cash and grows unbilled revenue, so working capital tightens as delivery lengthens. We model both against your delivery calendar before fixing the invoicing template for the year.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What does accounting for a Pune consultancy cost?</h3>
  <div class="faq-expanded__a"><p>The monthly retainer is driven by invoice and expense volume, headcount, whether project-wise profitability and unbilled revenue tracking are included, and whether you run export invoicing with FIRC matching. Quotes follow a short review of your last three months of invoices and bank statements. Annual filings, tax audit and TDS return preparation are quoted as separate lines.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can documents be handed over in person in Pune?</h3>
  <div class="faq-expanded__a"><p>Yes, our Pune office at RTC Silver, B4-708, Sai Satyam Park, Wagholi 412207 takes in-person handover and hosts onboarding meetings, and we visit Hinjewadi, Kharadi or Baner offices by arrangement. Most clients simply upload invoices, expense bills and bank statements to a shared folder monthly, then receive the reconciled ledger, TDS working and unbilled revenue schedule by the 10th.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>Section 194J bites when a professional fee is credited in the books, not when it is finally paid, so an accrual raised at close carries a deduction obligation with it. Service industry accounting for Pune consultancies accrues fees engagement by engagement, with tax computed at the moment of posting. An agency billing.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Accounting Deadlines in Pune You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p><strong>TDS / TCS deposit (Challan ITNS-281)</strong> is due 7th of every month (30 April for March). <strong>GSTR-1 (outward supplies)</strong> is due 11th of every month for monthly filers. <strong>GSTR-3B (summary return and tax payment)</strong> is due 20th monthly for turnover above Rs 5 crore; 22nd quarterly under QRMP for turnover up to Rs 5 crore (Category X). Patron tracks each against your books so nothing is reconstructed after the fact. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Service Sector Accounting in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">Eventually a large project that finished months ago still cannot be costed honestly. Someone asks what it earned, and three people give three answers, each drawn from a different sheet that nobody owns. Service industry accounting in Pune is normally taken on in the weeks after that conversation, once the gap is impossible to ignore.</p>
<p style="color:rgba(255,255,255,0.88);">Bench cost is the figure to watch when accounting for agencies in Pune. What a week of unassigned senior time costs can be read straight off the ledger each month, once salaries sit against engagements. A staffing conversation turns on arithmetic rather than instinct or the loudest opinion in the room.</p>
<p style="color:rgba(255,255,255,0.88);">Who inside the practice fields the queries is rarely settled. What that person can approve without a partner, and how fast answers come back, decides whether a close lands early or late. The same point applies directly in <a href="/accounting-services-for-the-service-sector-industry">our national consultancy work</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20the%20service%20sector%20industry%20in%20Pune" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Service%20Sector%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Service%20Sector%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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

<section class="pa-localmap"><div class="pa-localmap-wrap"><div class="pa-localmap-info"><span class="pa-local2-kicker"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Pune, Maharashtra</span><h2>Visit our Pune office</h2><p>A local CA &amp; CS team for service sector accounting in Pune &mdash; visit our office or work with us online.</p><ul class="pa-localmap-details"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-3"/><path d="M9 9h.01M9 12h.01M9 15h.01M9 18h.01"/></svg><span>RTC Silver, B4-708, Sai Satyam Park, Wagholi 412207</span></li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg><a href="tel:+919459456700">+91 94594 56700</a></li></ul><a class="pa-localmap-btn" href="https://www.google.com/maps/search/?api=1&query=Patron%20Accounting%20LLP%20-%20Pune%2C%20RTC%20Silver%2C%20B4-708%2C%20Sai%20Satyam%20Park%2C%20Wagholi%20412207%2C%20Pune%2C%20Maharashtra%2C%20India" target="_blank" rel="noopener">Get directions<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg></a></div><div class="pa-localmap-frame"><iframe src="https://www.google.com/maps?q=Patron%20Accounting%20LLP%20-%20Pune%2C%20RTC%20Silver%2C%20B4-708%2C%20Sai%20Satyam%20Park%2C%20Wagholi%20412207%2C%20Pune%2C%20Maharashtra%2C%20India&ll=18.5794466,73.9682987&z=16&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Patron Accounting LLP office location on Google Maps"></iframe></div></div></section><section class="content-section pa-sibling-cities"><div class="content-container"><div class="text-content"><h2 class="section-title">Service Sector Accounting Across Key Cities</h2><p class="section-intro">Your city is highlighted below &mdash; we run the same on-ground service across these cities too.</p><div class="pa-city-grid"><div class="pa-city-card pa-city-card--here"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune<span class="pa-here-badge">You are here</span></div><div class="pa-card-sub">Maharashtra</div></div></div><a href="https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a><a href="https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="https://www.patronaccounting.com/accounting-services-for-the-service-sector-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a></div></div></div></section><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; compliance &nbsp;&middot;&nbsp; Last reviewed 23 July 2026 &nbsp;&middot;&nbsp; Next review 23 October 2026</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a><a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></div></div></div>
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
