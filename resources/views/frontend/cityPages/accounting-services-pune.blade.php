@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Accounting Services in Pune: Scope, Fees and Process</title>
    <meta name="description" content="Run for Pune businesses under Maharashtra PTRC/PTEC. Save hours every month, close on time and keep audit season uneventful. Ask for a scope call.">
    <link rel="canonical" href="https://www.patronaccounting.com/accounting-services/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Accounting Services in Pune: Scope, Fees and Process | Patron Accounting">
    <meta property="og:description" content="Run for Pune businesses under Maharashtra PTRC/PTEC. Save hours every month, close on time and keep audit season uneventful. Ask for a scope call.">
    <meta property="og:url" content="https://www.patronaccounting.com/accounting-services/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accounting Services in Pune: Scope, Fees and Process | Patron Accounting">
    <meta name="twitter:description" content="Run for Pune businesses under Maharashtra PTRC/PTEC. Save hours every month, close on time and keep audit season uneventful. Ask for a scope call.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/accounting-services/pune/#service",
  "name": "Accounting Services in Pune",
  "description": "Accounting services in Pune have to speak two languages: export invoicing for Hinjewadi IT firms, and BOM costing for the auto-component plants at Chakan.",
  "image": "https://www.patronaccounting.com/images/og-default-square.png",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/accounting-services/pune"
  },
  "areaServed": {
    "@type": "City",
    "name": "Pune"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting Services in Pune",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting Services in Pune",
          "description": "Accounting services in Pune have to speak two languages: export invoicing for Hinjewadi IT firms, and BOM costing for the auto-component plants at Chakan.",
          "serviceType": "Accounting Service"
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
  "url": "https://www.patronaccounting.com/accounting-services/pune",
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
    "@id": "https://www.patronaccounting.com/accounting-services/pune"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting Services in Pune",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting Services in Pune",
          "description": "Accounting services in Pune have to speak two languages: export invoicing for Hinjewadi IT firms, and BOM costing for the auto-component plants at Chakan.",
          "serviceType": "Accounting Service"
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
      "name": "Accounting Services",
      "item": "https://www.patronaccounting.com/accounting-services"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Pune",
      "item": "https://www.patronaccounting.com/accounting-services/pune"
    }
  ],
  "@id": "https://www.patronaccounting.com/accounting-services/pune/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/accounting-services/pune/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much do accounting services cost in Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Accounting in Pune is normally priced as a monthly retainer rather than an hourly rate, set by transaction volume, the number of bank and payment accounts, payroll headcount, and whether GST and TDS return preparation sits inside the same scope. A dormant private limited company costs a fraction of a three-thousand-invoice trading business. We quote in writing after reviewing one month of statements."
      }
    },
    {
      "@type": "Question",
      "name": "Does the audit trail rule apply to a Pune private limited company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, every company must use accounting software with an edit log that records each change and cannot be switched off, mandatory for financial years beginning 1 April 2023, and the auditor reports on it separately. Proprietorships and partnerships sit outside the rule though lenders increasingly ask anyway. We confirm the audit trail flag is enabled in Tally or Zoho Books before the first entry."
      }
    },
    {
      "@type": "Question",
      "name": "What professional tax must a Pune business register for?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maharashtra needs PTEC for the entity, proprietor or partner at Rs 2,500 a year, payable by 15 June since the February 2026 amendment to Rule 11(3), and PTRC where salaries cross the monthly wage threshold. PTRC returns are monthly where the previous year liability exceeded Rs 1 lakh, otherwise annual. Backdated PTRC returns each carry their own late fee."
      }
    },
    {
      "@type": "Question",
      "name": "When are GST returns due for a business in Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maharashtra is a Category X state, so quarterly GSTR-3B under QRMP is due on the 22nd of the month following the quarter for turnover up to Rs 5 crore, while businesses above that file monthly by the 20th. GSTR-1 is monthly by the 11th or quarterly by the 13th. We close the books by the 5th so filing is never rushed."
      }
    },
    {
      "@type": "Question",
      "name": "How long must books of account and vouchers be preserved?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Companies must preserve books of account and vouchers for eight financial years immediately preceding the current year under Section 128(5) of the Companies Act, while GST records run six years from the annual return due date. Reassessment under Section 149 can reach back three years and three months, or five years and three months where escaped income exceeds Rs 50 lakh."
      }
    },
    {
      "@type": "Question",
      "name": "When does a Pune business need a tax audit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A tax audit under Section 44AB is required once turnover crosses Rs 1 crore, extended to Rs 10 crore where cash receipts and cash payments are each 5% or less of the total. Professionals cross at Rs 50 lakh of gross receipts. Because that relief depends on cash ratios, we monitor the cash percentage monthly rather than discovering the position in September."
      }
    },
    {
      "@type": "Question",
      "name": "What local registrations does a business in Hinjewadi or Kharadi need?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Establishments in Hinjewadi or Kharadi register under the Maharashtra Shops and Establishments Act once they employ ten or more workers, and file only an online Form F intimation below that. A trade licence comes from PMC or PCMC depending on the municipal limit, while parts of Hinjewadi fall under PMRDA, which changes who issues it. Renewal dates differ across the three bodies."
      }
    },
    {
      "@type": "Question",
      "name": "What does a monthly close actually cover?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A monthly close covers bank and card reconciliation, input credit matching against GSTR-2B, a TDS deduction review, the payroll journal, provisions and prepaid entries, stock or work in progress updates where relevant, and a signed trial balance with profit and loss and balance sheet. Pune clients receive it by the 10th, leaving room before the 20th and 22nd GST dates."
      }
    },
    {
      "@type": "Question",
      "name": "How does a handover work when a Pune business already has an in-house accountant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Handover starts with your existing Tally or Zoho Books data file, the last audited balance sheet, GST and TDS portal credentials and an open items list, followed by a two-week parallel run where opening balances are reconciled before we take over. QuickBooks users need a migration since it withdrew from India in 2023. In-house staff usually stay on payments and vendor coordination."
      }
    },
    {
      "@type": "Question",
      "name": "Is an in-person meeting possible in Pune before signing up?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our Pune office at RTC Silver, B4-708, Sai Satyam Park, Wagholi 412207 handles in-person scoping meetings and document handover, and visits to Hinjewadi, Kharadi, Baner or Chakan are arranged when a stock count or auditor walkthrough needs someone present. Routine work runs on a shared drive, so nothing waits on courier movement or traffic across the city."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/accounting-services/pune",
  "name": "Accounting Services in Pune",
  "description": "Run for Pune businesses under Maharashtra PTRC/PTEC. Save hours every month, close on time and keep audit season uneventful. Ask for a scope call.",
  "url": "https://www.patronaccounting.com/accounting-services/pune",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/accounting-services/pune/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/og-default-square.png"
  },
  "image": "https://www.patronaccounting.com/images/og-default-square.png",
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
    "@id": "https://www.patronaccounting.com/accounting-services/pune/#breadcrumb"
  }
}
</script>
@endsection

<link rel="stylesheet" href="/css/patron-cluster.css">

@section('content')
<main>




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
                        Accounting Services in Pune
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
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20in%20Pune" target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                @include('partials.bigin-form', [
                    'service'  => 'Accounting Services in Pune',
                    'city'     => 'Pune',
                ])
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
            <h2 class="section-title">What Accounting Costs and Covers for Pune Businesses</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Accounting Services at a Glance</strong></p>
                    <p>Accounting services in Pune have to speak two languages: export invoicing for Hinjewadi IT firms, and BOM costing for the auto-component plants at Chakan. Maharashtra's monthly GST compliance cycle closes on the 22nd below the Rs 5 crore mark, with professional tax deducted alongside. Patron runs both from an office at Wagholi, closing the month to a published date. Appropriate for IT firms, manufacturers and service businesses across the city.</p>
                </div>
                <p>A close runs late when inputs arrive out of order. Bank statements, sales and purchase invoices, expense bills and payroll inputs go into a shared folder; where the plant sits on the city's periphery, gate registers and job-work challans reach us after the bank and sales data, so posting is sequenced around the slower feed. Back come posted ledgers, tax workings and a dated trial balance, following the monthly MIS checklist.</p>
                <p>Late returns carry interest and a daily late fee, and input credit missed inside the window is rarely recovered, which is the real cost of a slow close. The accounting services that Pune businesses retain from Patron cover posting, reconciliation and return workings, with dates read off the Maharashtra tax portal. Statutory audit and litigation support are separate engagements.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Do Accounting Services Mean for Pune Businesses?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A company&#x27;s books must show, at the close, a position that balances. What the business owns is set against what it owes and what the owners hold, with the period&#x27;s earnings and spending resolved into the same ledger. Accounting services in Pune produce that position each month. Every transaction is posted to its class, and the balances are reconciled before the trial balance is signed.</p>
<p>What the ledger has to stretch to differs by trade. An exporting software firm leans on receivables and foreign receipts. A component maker leans on stock, work in progress and the cost built into each part. Yet both resolve into the same core account classes. The engagement holds the books, the reconciliations and the monthly figures. The statutory audit and the returns filed from them are separate work. Accounting services in Pune end at a signed trial balance that ties, ready for whoever needs it next.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/accounting/assets">Assets</a></span><span class="al-d">Everything the business owns or is owed that carries future economic value.</span></li><li><span class="al-t"><a href="/glossary/accounting/liabilities">Liabilities</a></span><span class="al-d">Amounts the business owes to others, from supplier bills to loans and taxes due.</span></li><li><span class="al-t"><a href="/glossary/accounting/equity">Equity</a></span><span class="al-d">The owners&#x27; residual stake in the business once every liability is subtracted from assets.</span></li><li><span class="al-t"><a href="/glossary/accounting/capital">Capital</a></span><span class="al-d">The funds owners put into the business to start and sustain its operations.</span></li><li><span class="al-t"><a href="/glossary/accounting/revenue">Revenue</a></span><span class="al-d">Income the business earns from selling its goods or services before any costs.</span></li><li><span class="al-t"><a href="/glossary/accounting/expenses">Expenses</a></span><span class="al-d">The costs incurred in running the business and earning its revenue during a period.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/accounting-services/pune/what-is-pune.webp" alt="What Are Accounting Services. Before a business can file a return, raise a loan or answer an auditor, its books have in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Accounting Services in Pune: From Hinjewadi to Growing SMEs</h2>
            <div class="content-text">
                
                <p>Accounting services in Pune are for firms carrying real transaction volume across bank accounts and registrations, yet with nobody owning the monthly close. Most are companies, LLPs and proprietors in Hinjewadi, Baner and Pimpri-Chinchwad that have outgrown occasional help.</p>
  <ul>
    <li>Newly incorporated private limited companies in Wakad now due to file monthly GST and TDS, with no accountant hired.</li>
    <li>Proprietors whose bookkeeper has left mid-year, leaving reconciliations and posting stalled across Baner offices.</li>
    <li>LLPs that took a second state registration, doubling the returns each period now demands.</li>
    <li>Firms whose headcount has grown until PF, ESI and <a href="/blog/maharashtra-professional-tax-shops-act">Maharashtra professional tax</a> each need computing monthly.</li>
    <li>Owner-run businesses still keeping records in spreadsheets, now facing a lender review those files cannot answer.</li>
    <li>Companies approaching their first statutory audit that need a trial balance an auditor accepts without rework.</li>
    <li>Established Pimpri-Chinchwad firms whose ledgers drift because nobody reconciles them between one quarter and the next.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Services Included for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Month-end close for Pune companies</td><td>Steady month-end close and ledger hygiene for IT and services firms in Hinjewadi IT Park, delivering accounting services in Pune built for scale <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>SEZ unit accounting and costing</td><td>Books kept for SEZ units in the Hinjewadi corridor, with cost centres and input credit split cleanly between exempt export income and domestic supply <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Statutory audit preparation</td><td>Schedule III statements, ledgers and working papers readied through the year, so bookkeeping services in Pune move into statutory audit without reopening prior months <span class="badge-included">Annually</span></td></tr>
                        <tr><td>GST return workings and filing support</td><td>GSTR-2B reconciliation and monthly GST return workings, with export and SEZ supplies mapped correctly so refunds and input credit are not lost <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>TDS and PTEC compliance workings</td><td>TDS and TCS computation, 26AS reconciliation and the annual PTEC profession-tax working, keeping salary and vendor deductions matched to filed challans <span class="badge-included">Monthly, PTEC annually</span></td></tr>
                        <tr><td>Online monthly reporting pack</td><td>Management accounts shared through our online accounting services in Pune, suited to the product teams we also support via <a href="/accounting-services-it-saas/pune">SaaS Accounting Services (IT & SaaS) Pune</a> <span class="badge-included">Monthly</span></td></tr>

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
            <h2 class="section-title">How Accounting Services Work in Pune — Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron delivers accounting for Pune businesses, step by step.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Onboarding and records handover</h3>
    <p class="step-description">We agree the entities, bank accounts and periods in scope, then collect the record set listed above for the full period. Access to the accounting file, bank portals and the GST portal is set up with named users before any entry is passed.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-1-onboarding-and-records-handover-pune.webp" alt="Illustration for Onboarding and records handover: We agree the entities, bank accounts and periods in scope, then collect in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Chart of accounts and openings</h3>
    <p class="step-description">The chart of accounts is set to Schedule III groupings so the trial balance maps straight to the financial statements. Opening balances are taken from the prior year's signed accounts. Debtor and creditor detail comes across party by party, not as a single net figure.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-2-chart-of-accounts-and-openings-pune.webp" alt="Illustration for Chart of accounts and openings: The chart of accounts is set to Schedule III groupings so the trial balance in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Recording the month's transactions</h3>
    <p class="step-description">Sales invoices, purchase bills, expenses, credit and debit notes and payroll are posted for the period, each against the correct GST treatment and place of supply. Petty cash goes in only against a signed voucher, not a summary figure.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-3-recording-the-month-s-transactions-pune.webp" alt="Illustration for Recording the month's transactions: Sales invoices, purchase bills, expenses, credit and debit notes and in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Reconciliations before we report</h3>
    <p class="step-description">Every bank account is reconciled to the statement. Purchase input credit is matched against the auto-drafted GSTR-2B, and tax credited at source is matched to Form 26AS and AIS, with the unmatched items listed back to you by vendor.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-4-reconciliations-before-we-report-pune.webp" alt="Illustration for Reconciliations before we report: Every bank account is reconciled to the statement. Purchase input credit in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Statutory workings prepared</h3>
    <p class="step-description">The workings behind each filing are built first: GST summaries by rate and place of supply, deduction schedules by section, and the payroll statutory computation. Maharashtra's profession tax runs on separate registrations for salaries paid and for the business itself, and the welfare fund falls due twice a year.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-5-statutory-workings-prepared-pune.webp" alt="Illustration for Statutory workings prepared: We prepare the workings the filings are built from. That means output and in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Monthly reporting and review</h3>
    <p class="step-description">You receive a trial balance, profit and loss, balance sheet and debtor and creditor ageing for the period, with a short note on anything unusual. We walk through the open items and the entries still waiting on documents from your side.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-6-monthly-reporting-and-review-pune.webp" alt="Illustration for Monthly reporting and review: You receive a trial balance, profit and loss, balance sheet and debtor and in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">Year-end close and audit support</h3>
    <p class="step-description">At year end we pass closing entries for depreciation, provisions, prepayments and accruals, then build the schedules the auditor will ask for. We answer audit queries directly and post the agreed audit adjustments back into the books.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services/pune/step-7-year-end-close-and-audit-support-pune.webp" alt="Illustration for Year-end close and audit support: At year end we pass closing entries for depreciation, provisions, in Pune" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>

        </div>
    </div>
</section>



<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Accounting Services</h2>
            <div class="content-text">
                
                <p>Ordinary bookkeeping records first, then the Maharashtra layer: profession tax enrolment, profession tax registration, and the licence agreement covering the premises.</p>
<ul>
    <li>Bank statements for every business bank account for the full period, in PDF and Excel or CSV</li>
    <li>Sales invoices and tax invoices issued (including e-invoice IRN/QR files where e-invoicing applies)</li>
    <li>Purchase invoices and vendor bills received</li>
    <li>Expense bills, receipts and signed petty-cash vouchers</li>
    <li>Credit notes and debit notes issued and received</li>
    <li>GST data for each tax period: the auto-drafted GSTR-2B, and Form 26AS/AIS for tax credited at source</li>
    <li>TDS/TCS challans, filed returns (24Q/26Q/27Q/27EQ) and Form 16/16A issued</li>
    <li>PTEC certificate (Certificate of Enrolment) under the Maharashtra State Tax on Professions, Trades, Callings and Employments Act, 1975, plus the annual PTEC challan</li>
    <li>PTRC certificate plus monthly/annual PTRC returns and challans</li>
</ul>

            </div>
        </div>
    </div>
</section>


<!-- ============ CLIENT PORTAL / HOW IT WORKS (shared block) ============ -->
<section class="content-section portal-grid-sec" id="client-portal-section" style="background: var(--cream) !important;">
  <div class="section-container">
    <header class="section-header" style="text-align:center;margin-bottom:8px;">
      <span class="section-eyebrow">Client Portal</span>
      <h2 class="section-title">How You Work With Patron</h2>
      <p class="section-subtitle" style="margin:0 auto;">Everything happens in one secure login. You can see your active services, the Patron team on your account, and anything still pending. Once you raise a request, it moves through the same clear steps every time, so you always know exactly where your work stands.</p>
    </header>
    <div class="portal-grid">
      <article class="portal-card">
        <div class="browser-frame"><div class="bbar"><span></span><span></span><span></span></div>
          <img src="/images/accounting-cluster/portal/portal-1-sign-in.webp" alt="Secure client portal login screen" loading="lazy" width="1280" height="627"></div>
        <div class="portal-card__body"><span class="portal-card__num">1</span>
          <h3>Sign in securely</h3><p>Your books, documents and requests all sit behind one private, password protected login. The team handling your account is shown on screen, so nothing sensitive ever needs to travel over email or WhatsApp.</p></div>
      </article>
      <article class="portal-card">
        <div class="browser-frame"><div class="bbar"><span></span><span></span><span></span></div>
          <img src="/images/accounting-cluster/portal/portal-3-request-service.webp" alt="Service catalogue inside the client portal" loading="lazy" width="1280" height="773"></div>
        <div class="portal-card__body"><span class="portal-card__num">2</span>
          <h3>Raise your request</h3><p>Choose the service you need from the menu inside the portal, where the price is shown before you go ahead. Your request is logged the moment you send it, with no phone calls or reminder emails to wait on.</p></div>
      </article>
      <article class="portal-card">
        <div class="browser-frame"><div class="bbar"><span></span><span></span><span></span></div>
          <img src="/images/accounting-cluster/portal/portal-4-gst.webp" alt="GST registration document checklist in the client portal, with an upload button beside each item" loading="lazy" width="1280" height="1012"></div>
        <div class="portal-card__body"><span class="portal-card__num">3</span>
          <h3>Share what the service asks for</h3><p>For every service, the portal lists the exact documents it needs, each with its own upload button. The example shown here is the GST registration checklist. When a service needs nothing from you, it simply asks for nothing.</p></div>
      </article>
      <article class="portal-card">
        <div class="browser-frame"><div class="bbar"><span></span><span></span><span></span></div>
          <img src="/images/accounting-cluster/portal/portal-5-tracker.webp" alt="Live request tracker inside the client portal" loading="lazy" width="1280" height="493"></div>
        <div class="portal-card__body"><span class="portal-card__num">4</span>
          <h3>We review, prepare and file</h3><p>Once your documents are in, your team checks them, prepares the work and files it for you. A live tracker shows each stage as it happens, from review to processing to done, so you never have to ask where things stand.</p></div>
      </article>
      <article class="portal-card">
        <div class="browser-frame"><div class="bbar"><span></span><span></span><span></span></div>
          <img src="/images/accounting-cluster/portal/portal-6-deliverables.webp" alt="Deliverables area of the client portal" loading="lazy" width="1280" height="546"></div>
        <div class="portal-card__body"><span class="portal-card__num">5</span>
          <h3>Collect your finished work</h3><p>Every completed return, computation and certificate is placed in your Deliverables area. You can open, print or download any of them as a PDF whenever you need a copy.</p></div>
      </article>
    </div>
  </div>
  <div class="portal-lightbox" id="portalLightbox" aria-hidden="true" role="dialog" aria-label="Portal screenshot">
    <button type="button" class="portal-lightbox__close" aria-label="Close">&times;</button>
    <img alt="">
  </div>
  <script>
  (function(){
    var lb=document.getElementById('portalLightbox'); if(!lb) return;
    var big=lb.querySelector('img');
    document.querySelectorAll('#client-portal-section .portal-card .browser-frame img').forEach(function(t){
      t.addEventListener('click',function(){ big.src=this.currentSrc||this.src; big.alt=this.alt; lb.classList.add('is-open'); lb.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; });
    });
    function shut(){ lb.classList.remove('is-open'); lb.setAttribute('aria-hidden','true'); document.body.style.overflow=''; big.removeAttribute('src'); }
    lb.addEventListener('click',function(e){ if(e.target===lb||e.target.classList.contains('portal-lightbox__close')) shut(); });
    document.addEventListener('keydown',function(e){ if(e.key==='Escape'&&lb.classList.contains('is-open')) shut(); });
  })();
  </script>
</section>
<!-- ============ /CLIENT PORTAL ============ -->

<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Challenges Specific to Pune: Hinjewadi IT Park SEZ Rules and MIDC Estate Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Hinjewadi IT unit bills SEZ exports and DTA work from one ledger</td><td>Zero-rated export and taxable domestic income mix, so the SEZ return and refund carry wrong figures.</td><td>Split SEZ export and DTA sales into separate ledgers for the Hinjewadi unit, reconciled to the SEZ return each month</td></tr>
                        <tr><td>Bank feeds for Kharadi and Baner operations left part-reconciled</td><td>Unreconciled receipts and charges distort cash, so the close slips past its date</td><td>Reconcile every bank and gateway account to statement before books lock; read <a href="/blog/choosing-accountant-pune">how to choose an accountant in Pune</a></td></tr>
                        <tr><td>Large IT payroll's PF, ESI and profession tax not tied to the ledger</td><td>Statutory deductions in the payroll differ from what is booked and paid, so dues and returns disagree</td><td>Reconcile payroll PF, ESI and Maharashtra profession tax to the ledger and challans every month before books lock</td></tr>
                        <tr><td>Fixed-asset register drifts from the ledger for MIDC-estate plants</td><td>Depreciation and asset balances differ from the schedule, so audit sign-off is delayed</td><td>Reconcile the asset register to the ledger, with block-wise depreciation and MIDC leasehold treatment</td></tr>
                        <tr><td>Milestone-based IT contracts billed unevenly against work actually delivered</td><td>Unbilled revenue and advances from clients go unrecorded, so income and receivables misstate each period</td><td>Recognise unbilled revenue and client advances by milestone, reconciling contract value to billing at every close</td></tr>

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
            <h2 class="section-title">Accounting Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one entity, one GST registration and routine monthly volume</td><td>INR 2,499<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; higher transaction volume, more GST registrations or an added entity</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multi-entity books across locations with custom monthly reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">Accounting services in Pune are billed by scope rather than location, so one entity with a single GST registration and routine volume matches our national <strong>INR 2,499</strong>. Transaction volume, added GST registrations and extra entities move it up. Get a scope-based quotation on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20in%20Pune" target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Compliance Calendar 2026 for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance</th><th>Due Date</th><th>Applies To</th></tr></thead>
                    <tbody>
                        <tr><td>TDS / TCS deposit (Challan ITNS-281)</td><td>7th of every month (30 April for March)</td><td>Every business that deducts tax at source on salaries, rent, contractor or professional fees</td></tr>
                        <tr><td>GSTR-1 (outward supplies)</td><td>11th of every month for monthly filers</td><td>GST-registered Pune businesses filing monthly returns</td></tr>
                        <tr><td>Provident Fund (ECR) and ESI contribution</td><td>15th of every month</td><td>Employers registered under EPF and ESI</td></tr>
                        <tr><td>GSTR-3B (summary return and tax payment)</td><td>20th monthly for turnover above Rs 5 crore; 22nd quarterly under QRMP for turnover up to Rs 5 crore (Category X)</td><td>GST-registered businesses in Pune</td></tr>
                        <tr><td>Professional tax: PTRC monthly return and PTEC</td><td>PTRC by the 15th of every month; PTEC annually by 31 March</td><td>Employers and companies registered for profession tax in Maharashtra (Pune)</td></tr>
                        <tr><td>Advance tax first instalment (15%)</td><td>15 June 2026</td><td>Companies, firms and individuals with a tax liability of Rs 10,000 or more</td></tr>
                        <tr><td>Tax audit report (Form 3CA/3CB-3CD)</td><td>30 September 2026</td><td>Businesses crossing the Section 44AB turnover threshold</td></tr>
                        <tr><td>Income-tax return, audit cases</td><td>31 October 2026</td><td>Companies and audit-liable firms</td></tr>
                        <tr><td>Annual GST return GSTR-9 and reconciliation GSTR-9C</td><td>31 December 2026</td><td>GST-registered Pune businesses above the annual-return and audit thresholds</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>A Pune business files GSTR-3B on the 22nd each quarter and deposits TDS by the 7th monthly. At year-end the audit-trail certification has to be in place. Profession tax under Maharashtra PTRC falls on the 15th monthly. For accounting services in Pune, download Patron's 2026 calendar or call +91 94594 56700; our <a href="/blog/maharashtra-professional-tax-shops-act">local guide</a> has more.</p>

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
            <h2 class="section-title">Why Accounting & Bookkeeping Services Clients in Pune Choose Patron Accounting</h2>
            <p class="section-intro">Five things a founder can check before handing over the books. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>Books that close on time, not books that lag</strong><p>Across 15+ years and 3,000+ businesses, we run a fixed month-end routine so your ledger reconciles and closes each period instead of drifting weeks behind.</p></div>
                <div><strong>Rule 3(1) audit trail live in your ledger</strong><p>The Rule 3(1) audit trail stays switched on and reviewed in your books, part of the same discipline behind our 25,000+ filings, ready before an auditor asks.</p></div>
                <div><strong>We work in Zoho Books, Xero, Tally and Odoo</strong><p>Whether you use Zoho Books, Xero, Tally Prime or Odoo, we work inside it. Your chart of accounts and tax codes are configured inside the tool you already run.</p></div>
                <div><strong>GST, TDS and profession tax filed monthly</strong><p>Each month we prepare and file your GST and TDS returns before the statutory date, and handle <a href="/blog/maharashtra-professional-tax-shops-act">Maharashtra PTRC and PTEC</a> alongside. This routine sits within our 25,000+ filings completed.</p></div>
                <div><strong>Our Pune base spans Kharadi and Baner</strong><p>Our home base is Pune, with offices in Kharadi and Baner and the registered office in Wagholi. From here we cover Hinjewadi, Wakad and the PCMC belt, backed by 15+ years and 3,000+ businesses served since 2019.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>



<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Outsourced vs In-House Accountant vs DIY: for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Outsourced</th><th>In-House Accountant</th></tr></thead>
                    <tbody>
                        <tr><td>SEZ export books</td><td>Team handles Hinjewadi IT SEZ export proceeds and SOFTEX or EDF records reliably</td><td>One accountant can manage SEZ export documentation until unit volume rises</td></tr>
                        <tr><td>Monthly cost</td><td>Retainer expands as billing rises, generally lighter than a salaried Pune hire</td><td>A fixed salary suits only firms with steady, high transaction counts</td></tr>
                        <tr><td>Compliance risk</td><td>GST and TDS due dates are monitored, so returns rarely slip</td><td>Single-owner calendar, so one absence can still miss a filing window</td></tr>
                        <tr><td>Expertise depth</td><td>Ind AS, SEZ and MIDC compliance specialists are available together</td><td>Depth tied to one hire, so niche SEZ queries still go outside</td></tr>
                        <tr><td>Continuity cover</td><td>Firm covers leave and attrition, keeping Hinjewadi books current</td><td>Resignation in a competitive IT market stalls filings for weeks</td></tr>
                        <tr><td>Software and controls</td><td>Cloud ledgers, reconciliations and review controls are part of the engagement</td><td>You own licences, backups and control design internally</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">For most Pune SMEs, from Hinjewadi IT SEZ units to MIDC estate suppliers, outsourced accounting services in pune win on export documentation and continuity. Hire in-house only once volume justifies a salaried desk over <a href="/accounting-services">managed accounting across India</a>.</td></tr>

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
            <h2 class="section-title">Pune Rules for Businesses — Maharashtra PTRC/PTEC, the Audit-Trail Rule</h2>
            <div class="content-text">
                
                <p>A Pune business enrols for profession tax the moment it employs anyone, holding a PTEC for its own liability and a PTRC to deduct tax from wages, a two-registration system unique to Maharashtra. Registration under the state Shops Act follows, and together they set the records the ledger must carry before a single central rule applies.</p>
<p>Over that state layer sits the Companies Act framework that fixes how the books are kept and closed. The audit trail has to stay live all year and Section 44AB decides when a tax audit bites, while local costs like Maharashtra stamp duty are captured here. Accounting services in Pune keep the state and central obligations aligned against the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>Maharashtra State Tax on Professions, Trades, Callings and Employments Act 1975</strong></span><span class="al-d">The entity holds a PTEC for its own profession tax and a PTRC to deduct it from salaries, both reconciled in the payroll ledger.</span></li><li><span class="al-t"><strong>Maharashtra Shops and Establishments (Regulation of Employment and Conditions of Service) Act 2017</strong></span><span class="al-d">The establishment registers under the state Shops Act, which sets the employment records the books must support.</span></li><li><span class="al-t"><strong>Section 128 with Section 129 and Schedule III, Companies Act 2013</strong></span><span class="al-d">The books stay on accrual and double entry and close into Schedule III statements, retained for eight years.</span></li><li><span class="al-t"><strong>Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">The audit trail is switched on through the year, and Section 44AB fixes the tax-audit threshold.</span></li><li><span class="al-t"><strong>Local Body Tax (LBT), discontinued</strong></span><span class="al-d">LBT was withdrawn for most dealers from 1 August 2015 and folded into GST, so only its <a href="/glossary/accounting/lbt-local-body-tax-assessment-history">LBT (Local Body Tax) Assessment History</a> remains relevant. Full national detail sits on the <a href="/accounting-services">India accounting page</a>.</span></li></ul><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></p>

            </div>
        </div>
    </div>
</section>


<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Accounting in Pune FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on accounting for Pune businesses - scope, local compliance, documents and pricing.</p>
                    <a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Accounting Services in Pune',
                        'city'     => 'Pune',
                        'title'    => 'Ask about your books in Pune',
                        'subtitle' => 'Send your requirement for a scoped quote.',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How much do accounting services cost in Pune?</h3>
  <div class="faq-expanded__a"><p>Accounting in Pune is normally priced as a monthly retainer rather than an hourly rate, set by transaction volume, the number of bank and payment accounts, payroll headcount, and whether GST and TDS return preparation sits inside the same scope. A dormant private limited company costs a fraction of a three-thousand-invoice trading business. We quote in writing after reviewing one month of statements.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does the audit trail rule apply to a Pune private limited company?</h3>
  <div class="faq-expanded__a"><p>Yes, every company must use accounting software with an edit log that records each change and cannot be switched off, mandatory for financial years beginning 1 April 2023, and the auditor reports on it separately. Proprietorships and partnerships sit outside the rule though lenders increasingly ask anyway. We confirm the audit trail flag is enabled in Tally or Zoho Books before the first entry.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What professional tax must a Pune business register for?</h3>
  <div class="faq-expanded__a"><p>Maharashtra needs PTEC for the entity, proprietor or partner at Rs 2,500 a year, payable by 15 June since the February 2026 amendment to Rule 11(3), and PTRC where salaries cross the monthly wage threshold. PTRC returns are monthly where the previous year liability exceeded Rs 1 lakh, otherwise annual. Backdated PTRC returns each carry their own late fee.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">When are GST returns due for a business in Pune?</h3>
  <div class="faq-expanded__a"><p>Maharashtra is a Category X state, so quarterly GSTR-3B under QRMP is due on the 22nd of the month following the quarter for turnover up to Rs 5 crore, while businesses above that file monthly by the 20th. GSTR-1 is monthly by the 11th or quarterly by the 13th. We close the books by the 5th so filing is never rushed.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How long must books of account and vouchers be preserved?</h3>
  <div class="faq-expanded__a"><p>Companies must preserve books of account and vouchers for eight financial years immediately preceding the current year under Section 128(5) of the Companies Act, while GST records run six years from the annual return due date. Reassessment under Section 149 can reach back three years and three months, or five years and three months where escaped income exceeds Rs 50 lakh.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">When does a Pune business need a tax audit?</h3>
  <div class="faq-expanded__a"><p>A tax audit under Section 44AB is required once turnover crosses Rs 1 crore, extended to Rs 10 crore where cash receipts and cash payments are each 5% or less of the total. Professionals cross at Rs 50 lakh of gross receipts. Because that relief depends on cash ratios, we monitor the cash percentage monthly rather than discovering the position in September.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What local registrations does a business in Hinjewadi or Kharadi need?</h3>
  <div class="faq-expanded__a"><p>Establishments in Hinjewadi or Kharadi register under the Maharashtra Shops and Establishments Act once they employ ten or more workers, and file only an online Form F intimation below that. A trade licence comes from PMC or PCMC depending on the municipal limit, while parts of Hinjewadi fall under PMRDA, which changes who issues it. Renewal dates differ across the three bodies.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What does a monthly close actually cover?</h3>
  <div class="faq-expanded__a"><p>A monthly close covers bank and card reconciliation, input credit matching against GSTR-2B, a TDS deduction review, the payroll journal, provisions and prepaid entries, stock or work in progress updates where relevant, and a signed trial balance with profit and loss and balance sheet. Pune clients receive it by the 10th, leaving room before the 20th and 22nd GST dates.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How does a handover work when a Pune business already has an in-house accountant?</h3>
  <div class="faq-expanded__a"><p>Handover starts with your existing Tally or Zoho Books data file, the last audited balance sheet, GST and TDS portal credentials and an open items list, followed by a two-week parallel run where opening balances are reconciled before we take over. QuickBooks users need a migration since it withdrew from India in 2023. In-house staff usually stay on payments and vendor coordination.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is an in-person meeting possible in Pune before signing up?</h3>
  <div class="faq-expanded__a"><p>Yes, our Pune office at RTC Silver, B4-708, Sai Satyam Park, Wagholi 412207 handles in-person scoping meetings and document handover, and visits to Hinjewadi, Kharadi, Baner or Chakan are arranged when a stock count or auditor walkthrough needs someone present. Routine work runs on a shared drive, so nothing waits on courier movement or traffic across the city.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>A close runs late when inputs arrive out of order. Bank statements, sales and purchase invoices, expense bills and payroll inputs go into a shared folder; where the plant sits on the city's periphery, gate registers and job-work challans reach us after the bank and sales data, so posting is sequenced around the slower.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting Deadlines in Pune You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p><strong>TDS / TCS deposit (Challan ITNS-281)</strong> is due 7th of every month (30 April for March). <strong>GSTR-1 (outward supplies)</strong> is due 11th of every month for monthly filers. <strong>Provident Fund (ECR) and ESI contribution</strong> is due 15th of every month. Patron tracks each against your books so nothing is reconstructed after the fact. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Accounting Services in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">Reconciliation, not software, is the real constraint here. A firm can own the newest licences available and still close late. The work that takes time is agreeing balances with banks, vendors and the portal record, then explaining the differences that remain. That is what this engagement exists to do, month after month.</p>
<p style="color:rgba(255,255,255,0.88);">Auditors at a component plant test consumption before anything else: material issued against production recorded, and closing stock valued consistently. A ledger carrying those workings month by month turns the year end visit into a check. Where an accounting company in Pune does not keep them, the same numbers are assembled twice.</p>
<p style="color:rgba(255,255,255,0.88);">The delivery challan raised for each job work consignment is where we start: which processes go outside, whose premises the material sits on, and who reconciles the return against it. Scrap generated at the converter is settled in the same review, as our <a href="/accounting-services">wider bookkeeping practice</a> requires.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20in%20Pune" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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

<section class="pa-localmap"><div class="pa-localmap-wrap"><div class="pa-localmap-info"><span class="pa-local2-kicker"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Pune, Maharashtra</span><h2>Visit our Pune office</h2><p>A local CA &amp; CS team for accounting in Pune &mdash; visit our office or work with us online.</p><ul class="pa-localmap-details"><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M19 21V11l-6-3"/><path d="M9 9h.01M9 12h.01M9 15h.01M9 18h.01"/></svg><span>RTC Silver, B4-708, Sai Satyam Park, Wagholi 412207</span></li><li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg><a href="tel:+919459456700">+91 94594 56700</a></li></ul><a class="pa-localmap-btn" href="https://www.google.com/maps/search/?api=1&query=Patron%20Accounting%20LLP%20-%20Pune%2C%20RTC%20Silver%2C%20B4-708%2C%20Sai%20Satyam%20Park%2C%20Wagholi%20412207%2C%20Pune%2C%20Maharashtra%2C%20India" target="_blank" rel="noopener">Get directions<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg></a></div><div class="pa-localmap-frame"><iframe src="https://www.google.com/maps?q=Patron%20Accounting%20LLP%20-%20Pune%2C%20RTC%20Silver%2C%20B4-708%2C%20Sai%20Satyam%20Park%2C%20Wagholi%20412207%2C%20Pune%2C%20Maharashtra%2C%20India&ll=18.5794466,73.9682987&z=16&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Patron Accounting LLP office location on Google Maps"></iframe></div></div></section><section class="content-section pa-sibling-cities"><div class="content-container"><div class="text-content"><h2 class="section-title">Accounting Across Key Cities</h2><p class="section-intro">Your city is highlighted below &mdash; we run the same on-ground service across these cities too.</p><div class="pa-city-grid"><div class="pa-city-card pa-city-card--here"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune<span class="pa-here-badge">You are here</span></div><div class="pa-card-sub">Maharashtra</div></div></div><a href="https://www.patronaccounting.com/accounting-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a><a href="https://www.patronaccounting.com/accounting-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="https://www.patronaccounting.com/accounting-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a></div></div></div></section><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; compliance &nbsp;&middot;&nbsp; Last reviewed 23 July 2026 &nbsp;&middot;&nbsp; Next review 23 October 2026</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a><a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></div></div></div>
</main>
<script>(function(){function init(){var list=document.querySelector('.faq-expanded__list');var items=(list||document).querySelectorAll('.faq-expanded__item');if(!items.length)return;var A=Array.prototype;function allCol(){return A.every.call(items,function(it){return it.classList.contains('is-collapsed');});}var btn=document.createElement('button');btn.type='button';btn.className='faq-expanded__toggle-all';function sync(){btn.textContent=allCol()?'Expand all':'Collapse all';}btn.addEventListener('click',function(){var c=!allCol();A.forEach.call(items,function(it){it.classList.toggle('is-collapsed',c);});sync();});if(list&&!document.querySelector('.faq-expanded__toggle-all'))list.insertBefore(btn,list.firstChild);A.forEach.call(items,function(it){var q=it.querySelector('.faq-expanded__q');if(!q)return;q.setAttribute('role','button');q.setAttribute('tabindex','0');function t(){it.classList.toggle('is-collapsed');sync();}q.addEventListener('click',t);q.addEventListener('keydown',function(e){if(e.key==='Enter'||e.key===' '){e.preventDefault();t();}});});sync();}if(document.readyState!=='loading')init();else document.addEventListener('DOMContentLoaded',init);})();</script>
<script>(function(){function bind(){if(typeof $==='undefined'||!$.fn.slick){return setTimeout(bind,200);}var $s=$('#testimonialSlider');document.querySelectorAll('#testimonialSlider video').forEach(function(v){v.addEventListener('play',function(){try{$s.slick('slickPause');}catch(e){}});v.addEventListener('pause',function(){try{$s.slick('slickPlay');}catch(e){}});v.addEventListener('ended',function(){try{$s.slick('slickPlay');}catch(e){}});});}if(document.readyState!=='loading')bind();else document.addEventListener('DOMContentLoaded',bind);})();</script>
<script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


{{-- Enquiry form markup + JS now in partials/enquiry-form.blade.php --}}

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
