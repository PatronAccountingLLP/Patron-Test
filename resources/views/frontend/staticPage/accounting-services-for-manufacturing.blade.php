@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Manufacturing Accounting Services in India, CA Managed</title>
    <meta name="description" content="BOM-level costing and WIP valuation, not a single factory-overhead lump. Avoid audit delays and free your team from the ledger. Ask for a scope call.">
    <link rel="canonical" href="https://www.patronaccounting.com/accounting-services-for-manufacturing">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Manufacturing Accounting Services in India, CA Managed | Patron Accounting">
    <meta property="og:description" content="BOM-level costing and WIP valuation, not a single factory-overhead lump. Avoid audit delays and free your team from the ledger. Ask for a scope call.">
    <meta property="og:url" content="https://www.patronaccounting.com/accounting-services-for-manufacturing">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Manufacturing Accounting Services in India, CA Managed | Patron Accounting">
    <meta name="twitter:description" content="BOM-level costing and WIP valuation, not a single factory-overhead lump. Avoid audit delays and free your team from the ledger. Ask for a scope call.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing/#service",
  "name": "Manufacturing Accounting Services in India",
  "description": "Manufacturing accounting services value work in progress at BOM level instead of writing factory overheads off as one lump. The ITC-04 job-work return is reconciled to the stock ledger each quarter.",
  "image": "https://www.patronaccounting.com/images/accounting-services-for-manufacturing-og.webp",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Manufacturing Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing"
  },
  "areaServed": {
    "@type": "Country",
    "name": "India",
    "sameAs": "https://en.wikipedia.org/wiki/India"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Manufacturing Accounting Services in India",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Manufacturing Accounting Services in India",
          "description": "Manufacturing accounting services value work in progress at BOM level instead of writing factory overheads off as one lump. The ITC-04 job-work return is reconciled to the stock ledger each quarter.",
          "serviceType": "Manufacturing Accounting Service"
        },
        "eligibleRegion": {
          "@type": "Country",
          "name": "India"
        }
      }
    ]
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
      "name": "Manufacturing Accounting Services",
      "item": "https://www.patronaccounting.com/accounting-services-for-manufacturing"
    }
  ],
  "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What does a manufacturing accountant do?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A manufacturing accountant maintains the cost and financial records of a factory, covering raw material and stores accounting, work in progress and finished goods valuation, unit costing, GST and TDS workings, the fixed asset register, payroll entries and monthly MIS. The role also reconciles shop floor production and stock records against the ledger, then closes the books and prepares the year end financial statements."
      }
    },
    {
      "@type": "Question",
      "name": "How do you value raw material, work in progress and finished goods?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Inventory is valued at the lower of cost and net realisable value under AS 2, with cost built from material, conversion labour and a normal allocation of factory overhead. We agree the basis at the start, either job costing for made to order runs or process costing for continuous output, and apply it consistently so margins stay comparable month to month."
      }
    },
    {
      "@type": "Question",
      "name": "Can plant inventory records be reconciled with the books?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, physical stock records, bin cards and production reports are reconciled against the stock ledger every month and the variance is reported item by item. Differences usually come from unrecorded issues to production, scrap not written off, rejections and goods received without an invoice. Each line is cleared with your stores team before the month is closed."
      }
    },
    {
      "@type": "Question",
      "name": "How is depreciation on plant and machinery calculated for a factory?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Depreciation is computed on the useful life prescribed in Schedule II of the Companies Act, adjusted where your plant runs double or triple shifts. We maintain a component wise fixed asset register with capitalisation dates, additions, disposals and residual value, and keep a separate block wise computation under the Income Tax Act, since the two rarely give the same number."
      }
    },
    {
      "@type": "Question",
      "name": "What GST issues come up for manufacturers and how do you handle them?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Manufacturers most often struggle with input tax credit mismatches, job work movement, e-way bill discipline and credit treatment on scrap and free samples. Your purchase register is matched against GSTR-2B every month, suppliers who have not filed are chased in writing, goods sent for job work are tracked against returns received, and the periodic returns are prepared from that reconciled base."
      }
    },
    {
      "@type": "Question",
      "name": "How do you account for goods sent out for job work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Goods sent for job work remain your inventory and are tracked in a separate job work register carrying challan reference, quantity sent, quantity received back and process loss. The job worker charges are booked as conversion cost, TDS is deducted on the processing bill, and the return timelines under GST are monitored so that credit is not put at risk."
      }
    },
    {
      "@type": "Question",
      "name": "What do manufacturing accounting services cost each month?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Manufacturing accounting typically costs Rs 15,000 to Rs 60,000 a month, depending on voucher volume, number of SKUs, plants and GST registrations. A single unit with one GSTIN and about 400 vouchers a month sits at the lower end. Costing support, inventory valuation and the monthly MIS pack are quoted on top once we have seen one month of live data."
      }
    },
    {
      "@type": "Question",
      "name": "How long does handover of manufacturing books from an existing accountant take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Takeover normally takes 10 to 15 working days from the day we receive your data backup. We review the Tally or ERP data, trial balance, last filed GST and TDS returns and the previous year audited statements, run a health check, hand you a written list of open items, then start live entries from an agreed cut off date."
      }
    },
    {
      "@type": "Question",
      "name": "Which accounting software is best for a manufacturing company?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tally Prime suits most Indian manufacturers because it handles stock, batch, job work and GST returns natively, while multi plant units with heavy bill of material and shop floor needs are better on an ERP such as SAP Business One or Odoo. Zoho Books fits lighter assembly operations. QuickBooks is not an option in India, since Intuit withdrew the product for Indian users in 2023."
      }
    },
    {
      "@type": "Question",
      "name": "What type of accounting is used in manufacturing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Manufacturing uses cost accounting run alongside standard financial accounting, so the same transactions produce both statutory accounts and a per unit cost. Job costing is applied to made to order runs and process costing to continuous output, with inventory valued at the lower of cost and net realisable value under AS 2. Prescribed industries above the notified turnover limits must also maintain cost records under the Companies Act."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing",
  "name": "Manufacturing Accounting Services in India",
  "description": "BOM-level costing and WIP valuation, not a single factory-overhead lump. Avoid audit delays and free your team from the ledger. Ask for a scope call.",
  "url": "https://www.patronaccounting.com/accounting-services-for-manufacturing",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/accounting-services-for-manufacturing-og.webp"
  },
  "image": "https://www.patronaccounting.com/images/accounting-services-for-manufacturing-og.webp",
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
    "@id": "https://www.patronaccounting.com/accounting-services-for-manufacturing/#breadcrumb"
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
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Manufacturing Accounting Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>A defensible cost per unit:</span> You get a cost per unit built from the rates material is actually issued at and current conversion cost.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stock valued stage by stage:</span> You value raw material, work in progress, finished goods, stores and scrap each against count sheets, not one closing figure.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stock statement agreed to the ledger:</span> The stock and receivables statement you file with your bank agrees to the ledger on the same date.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Job-work quantities fully accounted:</span> Material lying with job workers stays on your books, challan by challan, so what returns reconciles to what you sent.</p>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Manufacturing%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Manufacturing%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20manufacturing" target="_blank" class="btn-sample text-decoration-none">
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
                @include('partials.enquiry-form', [
                    'selected' => 'accounting-services-for-manufacturing',
                    'options'  => [
                        'accounting-services-for-manufacturing' => 'Manufacturing Accounting',
                        'accounting-services' => 'All Accounting Services',
                        'accounting-services-for-e-commerce-industry' => 'E-Commerce Accounting',
                        'financial-statement-preparation-services' => 'Financial Statement Preparation',
                        'mis-reporting-services' => 'MIS Reporting',
                        'backlog-bookkeeping-catch-up-services' => 'Backlog Bookkeeping Catch-up',
                        'other' => 'Other',
                    ],
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
                    <a href="#tool-section" class="toc-btn">Calculator</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>


<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Manufacturing Accounting Covers — Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Manufacturing Accounting Services at a Glance</strong></p>
                    <p>Manufacturing accounting services value work in progress at BOM level instead of writing factory overheads off as one lump. The ITC-04 job-work return is reconciled to the stock ledger each quarter. Patron maintains the Section 148 cost records specified industries must keep, alongside plant-wise cost sheets and machine-hour absorption rates. Frequently used by units across MIDC and GIDC industrial estates.</p>
                </div>
                <p>One plant generates more paperwork in a month than most service businesses see in a year. Goods receipt notes, material issue slips, job-work challans, scrap sales, e-way bills and production reports all have to reach the ledger before a cost per unit means anything at all. Patron takes those feeds in bulk, posts them against the bill of materials, and closes each month with a variance run. Working out cost per unit is set out separately.</p>
                <p>Cost per unit goes wrong when the stock ledger lags the shop floor, so the workload tracks stock item count, bill-of-materials depth, job-work volume and each plant reporting separately. Costing, the stock ledger and the schedules behind them sit inside scope, with movement data drawn from the e-way bill portal. Cost audit certification, valuation opinions and attendance at the physical count are commissioned apart.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Are Manufacturing Accounting Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>At the close of a manufacturing month, the books have to show one number above all others: what it actually costs to make each unit. Manufacturing accounting services are the discipline that produces that number and stands behind it.</p>
<p>Stock is valued at each stage, raw material, work in progress and finished goods, so factory overheads are absorbed into cost rather than written off as a lump. Each valuation carries the date and the stage it represents. It ties the movement of goods sent out for job work back to the stock ledger, and it maintains the plant-wise cost sheets and machine-hour rates a costed quotation depends on. This function also keeps the cost records that certain notified industries are required to maintain. Accounting for manufacturers, in short, is bookkeeping organised around production rather than around invoices. Cost audit certification, valuation opinions and the physical stock count sit outside this engagement and are commissioned separately.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Manufacturing Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/accounting/work-in-progress-wip-valuation">Work-in-Progress (WIP) Valuation</a></span><span class="al-d">Putting a rupee value on goods that are part-made at period close.</span></li><li><span class="al-t"><a href="/glossary/accounting/form-itc-04-job-work-tracking">Form ITC-04 Job Work Tracking</a></span><span class="al-d">A quarterly GST return reporting goods sent to and returned from job workers.</span></li><li><span class="al-t"><a href="/glossary/accounting/direct-vs-indirect-factory-overheads">Direct vs Indirect Factory Overheads</a></span><span class="al-d">Splitting factory costs between those tied to a product and shared plant costs.</span></li><li><span class="al-t"><a href="/glossary/accounting/odoo-fiscal-positions">Odoo Fiscal Positions</a></span><span class="al-d">Odoo settings that apply the right tax treatment automatically to each transaction.</span></li><li><span class="al-t"><a href="/glossary/accounting/bill-of-materials-bom-costing">Bill of Materials (BOM) Costing</a></span><span class="al-d">Building a product&#x27;s cost from the parts and labour listed in its recipe.</span></li><li><span class="al-t"><a href="/glossary/accounting/standard-cost-variance">Standard Cost Variance</a></span><span class="al-d">The gap between what production was expected to cost and what it did.</span></li><li><span class="al-t"><a href="/glossary/accounting/midc-industrial-area-compliance">MIDC Industrial Area Compliance</a></span><span class="al-d">Compliance duties for units located in Maharashtra&#x27;s MIDC industrial estates.</span></li><li><span class="al-t"><a href="/glossary/accounting/gidc-industrial-estate-compliance">GIDC Industrial Estate Compliance</a></span><span class="al-d">Compliance duties for units located in Gujarat&#x27;s GIDC industrial estates.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/what-is.webp" alt="What Are Manufacturing Accounting Services. At the close of a manufacturing month, the books have to show one number" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Manufacturing Accounting Services in India?</h2>
            <div class="content-text">
                
                <p>Manufacturing accounting services fit plants where the cost of a unit depends on how material, labour and overhead move through the floor. These businesses share one trait. Their books only make sense once production, stock and job work are posted together.</p>
  <ul>
    <li>Batch and process plants where yield and scrap shift from one run to the next.</li>
    <li>Units sending <a href="/blog/itc-04-job-work-gst-guide">materials to job workers</a>, needing every challan returned tied to the stock ledger.</li>
    <li>Assembly makers with multi-level bills of material, where one wrong rate distorts every finished good.</li>
    <li>Manufacturers borrowing against stock, whose bank stock statement must agree to the ledger.</li>
    <li>Firms in sectors where cost records are mandatory, needing machine-hour rates maintained monthly.</li>
    <li>Multi-plant units where each factory reports separately and consolidation hides where margin leaks.</li>
    <li>MSME suppliers caught by the <a href="/blog/section-43bh-msme-payment-rule">43B(h) 45-day payment rule</a> on what they owe vendors.</li>
    <li>Foundries and engineering shops with heavy scrap, where abnormal loss must stay out of cost.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Manufacturing Accounting Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>BOM and standard cost maintenance</td><td>Bill of materials and standard cost sheets maintained per SKU, so a defensible cost per unit underpins your manufacturing accounting services <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Production and yield posting</td><td>Daily production, batch output, yield and scrap posted, with abnormal loss kept out of product cost for accurate valuation <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Job-work movement control</td><td>Goods sent to and returned from job workers tracked on Rule 55 challans, using <a href="/blog/itc-04-job-work-gst-guide">ITC-04 and job work</a> reporting <span class="badge-included">Quarterly</span></td></tr>
                        <tr><td>Stage-wise stock valuation</td><td>Raw material, work-in-progress and finished goods valued stage by stage, with overheads absorbed on normal capacity for reliable stock figures <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Bank stock statement reconciliation</td><td>Monthly stock and receivables statements for your working-capital lender reconciled to the ledger, so drawing-power figures agree with the books <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Cost records and manufacturer MIS</td><td>Cost records in Form CRA-1 maintained where applicable and MIS delivered, giving manufacturers e-way and GRN reconciled numbers each month <span class="badge-included">Monthly</span></td></tr>

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
            <h2 class="section-title">How Manufacturing Accounting Services Work — Our Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron delivers manufacturing accounting, step by step from onboarding to a clean monthly close.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Bill of materials validation</h3>
    <p class="step-description">The bill of materials and standard cost per SKU are tested against the rates at which material is actually being issued and against current conversion cost. Standards that have gone stale are refreshed, because a stale standard makes every variance meaningless.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-1-bill-of-materials-validation.webp" alt="Illustration for Bill of materials validation: The bill of materials and standard cost per SKU are tested against the rates" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Production and yield posting</h3>
    <p class="step-description">Daily production reports and batch or job cards are posted so raw material converts into work-in-progress and then finished goods at each stage. Yield is measured against standard, and normal wastage is separated from abnormal loss.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-2-production-and-yield-posting.webp" alt="Illustration for Production and yield posting: Daily production reports and batch or job cards are posted so raw material" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Job work movement control</h3>
    <p class="step-description">Goods sent to and returned from job workers are tracked challan by challan under the delivery challan rule. Quantities are reconciled including waste retained by the job worker, and the position is carried into the periodic job-work return already filed.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-3-job-work-movement-control.webp" alt="Illustration for Job work movement control: Goods sent to and returned from job workers are tracked challan by challan under" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Overhead absorption on capacity</h3>
    <p class="step-description">Power, fuel and utility consumption is allocated on the stated basis, and fixed factory overhead is absorbed using normal operating capacity. In a low-output month the unabsorbed portion is expensed rather than buried in the value of stock.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-4-overhead-absorption-on-capacity.webp" alt="Illustration for Overhead absorption on capacity: Power, fuel and utility consumption is allocated on the stated basis, and" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Stage-wise stock valuation</h3>
    <p class="step-description">Physical count sheets are compared with book stock separately for raw material, work-in-progress, finished goods, stores and scrap. Differences are investigated by stage, and each stage is valued at the lower of cost and net realisable value.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-5-stage-wise-stock-valuation.webp" alt="Illustration for Stage-wise stock valuation: Physical count sheets are compared with book stock separately for raw material," loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Bank stock statement reconciliation</h3>
    <p class="step-description">The stock and receivables statement submitted to the bank for drawing power is reconciled to the ledger for the same date. Differences in valuation basis, goods at job workers and creditor deductions are explained in writing rather than left open.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-6-bank-stock-statement-reconciliation.webp" alt="Illustration for Bank stock statement reconciliation: The stock and receivables statement submitted to the bank for drawing" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">Cost records upkeep</h3>
    <p class="step-description">Where the company's product falls within the prescribed list and it crosses the turnover trigger, cost records are maintained in the prescribed form through the year. They are reconciled to the financial accounts, so the year-end reconciliation is not built from scratch.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-manufacturing/step-7-cost-records-upkeep.webp" alt="Illustration for Cost records upkeep: Where the company's product falls within the prescribed list and it crosses the" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>

        </div>
    </div>
</section>



<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Manufacturing Accounting Services</h2>
            <div class="content-text">
                
                <p>Cost flows through a factory long before it reaches the ledger, so the list starts with production: what went in, what came out, and what was scrapped.</p>
<ul>
    <li>Bill of Materials and standard costing sheet per product or SKU</li>
    <li>Production and manufacture records: daily production report, batch or job cards, yield and scrap/wastage report</li>
    <li>Stock records for raw material, work-in-progress, finished goods, stores/spares and scrap, with physical verification sheets</li>
    <li>Job-work records: delivery challans under Rule 55 for goods sent to and returned from job workers, and Form ITC-04 already filed</li>
    <li>Cost records in Form CRA-1, where applicable</li>
    <li>Power, fuel and utility bills with consumption units, and factory overhead allocation basis</li>
    <li>Purchase invoices, GRNs and e-way bills</li>
    <li>Sales invoices, and e-invoice/IRN records where turnover exceeds Rs 5 crore</li>
    <li>Bank statements, loan and working-capital accounts with sanction letters and stock statements filed with the bank</li>
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
            <h2 class="section-title">Common Manufacturing Accounting Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Standard costs never updated against actual material and labour rates</td><td>Quoted margins look healthy while jobs quietly lose money on the shop floor</td><td>We run monthly cost variance analysis and updates standards, so quotation margins reflect real material and labour consumption.</td></tr>
                        <tr><td>Raw material valued inconsistently as prices swing between purchase lots</td><td>Closing stock and cost of goods sold both misstate, distorting gross margin every period</td><td>Weighted-average valuation applied per material code so <a href="/blog/how-to-calculate-cogs-manufacturing">calculating manufacturing COGS</a> ties issues and closing stock to the stores ledger.</td></tr>
                        <tr><td>Rejections and rework costs absorbed silently into the next batch</td><td>True yield stays hidden and loss-making product lines keep running unquestioned</td><td>Patron captures rejection and rework entries separately, so scrap and yield loss report against each production order.</td></tr>
                        <tr><td>Purchase invoices booked before the goods receipt note is matched</td><td>Payables overstate and input credit is claimed on material still sitting in transit</td><td>Our team runs a three-way match of purchase order, GRN and invoice before booking, so payables tie to goods received.</td></tr>
                        <tr><td>Capital spend on plant expensed instead of capitalised to fixed assets</td><td>Profit is understated now and depreciation and the asset register stay wrong for years</td><td>Patron tracks capital work in progress separately and capitalises it on commissioning, feeding a maintained depreciation schedule.</td></tr>

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
            <h2 class="section-title">Manufacturing Accounting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one plant, a single production line and routine voucher volume</td><td>INR 3,499 per month<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; deeper bills of material, several cost centres and higher output</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multi-plant books with custom WIP valuation and monthly reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">The entry fee covers a single plant on monthly books: purchases, production entries and stock movement all posted. Manufacturing accounting services move up as your bill of materials deepens, cost centres multiply or work-in-progress valuation grows complex. Get a scope-based quotation on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Manufacturing Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20manufacturing" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Manufacturing Accounting Compliance Calendar 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance</th><th>Due Date</th><th>Applies To</th></tr></thead>
                    <tbody>
                        <tr><td>TDS / TCS deposit (Challan ITNS-281)</td><td>7th of every month (30 April for March)</td><td>Every business that deducts tax at source on salaries, rent, contractor or professional fees</td></tr>
                        <tr><td>GSTR-1 (outward supplies)</td><td>11th of every month for monthly filers</td><td>GST-registered businesses filing monthly returns</td></tr>
                        <tr><td>GSTR-3B (summary return and tax payment)</td><td>20th of every month for monthly filers</td><td>GST-registered businesses filing monthly; QRMP filers pay via PMT-06</td></tr>
                        <tr><td>Advance tax first instalment (15%)</td><td>15 June 2026</td><td>Companies, firms and individuals with a tax liability of Rs 10,000 or more</td></tr>
                        <tr><td>Tax audit report (Form 3CA/3CB-3CD)</td><td>30 September 2026</td><td>Businesses crossing the Section 44AB turnover threshold</td></tr>
                        <tr><td>Income-tax return, audit cases</td><td>31 October 2026</td><td>Companies and audit-liable firms</td></tr>
                        <tr><td>Job-work movement return (ITC-04)</td><td>25 October 2026 (Apr-Sep) and 25 April (Oct-Mar) for turnover above Rs 5 crore; annually otherwise</td><td>Manufacturers sending inputs or capital goods to job workers</td></tr>
                        <tr><td>Annual GST return GSTR-9 and reconciliation GSTR-9C</td><td>31 December 2026</td><td>GST-registered businesses above the annual-return and audit thresholds</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>For a manufacturer the ITC-04 job-work return on 25 October is the date most often missed, sitting beside the tax audit on 30 September. Cost records close alongside the year-end. Patron maps input movement and <a href="/blog/itc-04-job-work-gst-guide">job-work accounting</a> to each due date so credit on goods sent out is never lost. Call +91 94594 56700 for a 2026 calendar mapped to your books.</p>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Professional Manufacturing Accounting Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /> <path d="m9 12 2 2 4-4" /> </svg></div>
  <h3 class="feature-title">A defensible cost per unit</h3>
  <p class="feature-text">You get a cost per unit built from the rates material is actually issued at and current conversion cost.</p><ul style="margin-top:12px;"><li>We refresh stale standard costs from current issue and conversion rates</li><li>Grounded in the bill of materials and per SKU standard costing sheet</li><li>Without it you quote a revised rate off a stale standard</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" /> <path d="M12 22V12" /> <polyline points="3.29 7 12 12 20.71 7" /> <path d="m7.5 4.27 9 5.15" /> </svg></div>
  <h3 class="feature-title">Stock valued stage by stage</h3>
  <p class="feature-text">You value raw material, work in progress, finished goods, stores and scrap each against count sheets, not one closing figure.</p><ul style="margin-top:12px;"><li>Value each stage against count sheets, not a single closing number</li><li>Held in stock records with physical verification sheets</li><li>Without it an unexplained difference repeats at every physical count</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M10 18v-7" /> <path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z" /> <path d="M14 18v-7" /> <path d="M18 18v-7" /> <path d="M3 22h18" /> <path d="M6 18v-7" /> </svg></div>
  <h3 class="feature-title">Stock statement agreed to the ledger</h3>
  <p class="feature-text">The stock and receivables statement you file with your bank agrees to the ledger on the same date.</p><ul style="margin-top:12px;"><li>Reconciled against the ledger on the statement date</li><li>Valuation basis, job worker goods and creditor deductions each explained in writing</li><li>Without it you give the bank reason to reduce drawing power mid season</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M12 17V7" /> <path d="M16 8h-6a2 2 0 0 0 0 4h4a2 2 0 0 1 0 4H8" /> <path d="M4 3a1 1 0 0 1 1-1 1.3 1.3 0 0 1 .7.2l.933.6a1.3 1.3 0 0 0 1.4 0l.934-.6a1.3 1.3 0 0 1 1.4 0l.933.6a1.3 1.3 0 0 0 1.4 0l.933-.6a1.3 1.3 0 0 1 1.4 0l.934.6a1.3 1.3 0 0 0 1.4 0l.933-.6A1.3 1.3 0 0 1 19 2a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1 1.3 1.3 0 0 1-.7-.2l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.934.6a1.3 1.3 0 0 1-1.4 0l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-1.4 0l-.934-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-.7.2 1 1 0 0 1-1-1z" /> </svg></div>
  <h3 class="feature-title">Job-work quantities fully accounted</h3>
  <p class="feature-text">Material lying with job workers stays on your books, challan by challan, so what returns reconciles to what you sent.</p><ul style="margin-top:12px;"><li>Waste retained by the worker included in the reconciliation</li><li>Tracked on Rule 55 delivery challans and Form ITC-04 filed</li><li>Without it goods written out never return on paper</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M13.744 17.736a6 6 0 1 1-7.48-7.48" /> <path d="M15 6h1v4" /> <path d="m6.134 14.768.866-.5 2 3.464" /> <circle cx="16" cy="8" r="6" /> </svg></div>
  <h3 class="feature-title">Abnormal loss kept out of cost</h3>
  <p class="feature-text">We measure yield against standard, so normal wastage stays in product cost while abnormal loss comes out on its own.</p><ul style="margin-top:12px;"><li>Yield measured against standard on the yield and scrap report</li><li>Abnormal loss shown separately, out of product cost</li><li>Without it a bad month reads as an expensive product</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M8 3 4 7l4 4" /> <path d="M4 7h16" /> <path d="m16 21 4-4-4-4" /> <path d="M20 17H4" /> </svg></div>
  <h3 class="feature-title">Cost records kept through the year</h3>
  <p class="feature-text">Where your product is listed and you cross the turnover trigger, you hold cost records in the prescribed form all year.</p><ul style="margin-top:12px;"><li>Records tie back to the financial accounts throughout the year</li><li>Kept in Form CRA-1 under Section 148 and the Cost Records and Audit Rules 2014</li><li>Without them you rebuild cost records retrospectively under audit</li></ul>
</article>
</div>
    </div>
</section>




<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Choose Patron Accounting for Manufacturing Accounting Services</h2>
            <p class="section-intro">Five things a founder can check before handing over the books. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>BOM-level costing and WIP valuation</strong><p>We <a href="/blog/process-costing-vs-job-costing">cost each finished good</a> from its bill of materials and value work in progress at each stage of production. Our 15+ years across 3,000+ businesses served keep this routine.</p></div>
                <div><strong>Section 148 cost records, ITC-04 and AS 2 valuation</strong><p>We maintain cost records under Section 148, file <a href="/blog/itc-04-job-work-gst-guide">ITC-04 for every job-work challan</a> and value stock to AS 2. This sits within the 25,000+ filings we have completed.</p></div>
                <div><strong>Tally Prime and Odoo modules configured to your routing</strong><p>We work in your Zoho Books, Xero, Tally Prime or Odoo, setting up manufacturing modules to match your routing and BOM structure.</p></div>
                <div><strong>Plant-wise cost sheet and variance report each month</strong><p>Each month you receive a plant-wise cost sheet and a variance report that ties to the stock ledger. Our monthly cadence is reflected in a 4.9 star Google rating.</p></div>
                <div><strong>Manufacturers among the 3,000+ businesses we serve</strong><p>Manufacturers across MIDC, GIDC and IMT estates sit among the 3,000+ businesses we have served since 2019. Our in-house team of CAs and CS backs them with 15+ years of experience.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>



<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Job Costing vs Process Costing for Your Plant</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Job Costing</th><th>Process Costing for Your Plant</th></tr></thead>
                    <tbody>
                        <tr><td>What it is</td><td>Costs collected per job, order or batch that stays identifiable throughout.</td><td>Costs pooled by process, then averaged across all units produced in a period.</td></tr>
                        <tr><td>Best-suited output</td><td>Custom or made-to-order work, engineering, fabrication and short runs.</td><td>Continuous mass production of identical units like chemicals, food or cement.</td></tr>
                        <tr><td>WIP valuation</td><td>WIP is the cost accumulated on each open job at period end.</td><td>WIP uses equivalent units, valuing partly finished output stage by stage.</td></tr>
                        <tr><td>Cost accuracy</td><td>Direct traceability gives a precise cost per job but heavier record-keeping.</td><td>Averaging is simpler yet hides variation between individual units.</td></tr>
                        <tr><td>Overhead and MIS</td><td>Overhead absorbed per job supports quoting and job-level margin review.</td><td>Overhead spread per process supports yield, wastage and per-unit MIS.</td></tr>
                        <tr><td>Records and compliance</td><td>Job cards and BOM support stock valuation and any cost-record duty.</td><td>Process cost sheets and normal-loss norms underpin the closing stock figure.</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">The method follows how you actually produce. Job costing fits custom and batch work; process costing fits continuous identical output. Many plants run both, so manufacturing accounting services should map costing to each line. See <a href="/blog/process-costing-vs-job-costing">process costing vs job costing</a>.</td></tr>

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
            <h2 class="section-title">Legal and Regulatory Framework for Manufacturing Accounting</h2>
            <div class="content-text">
                
                <p>The record the statute insists exists in a factory is the cost record - the traceable link between raw material, work in progress and finished goods - and Section 148 of the Companies Act 2013 is where that demand originates for notified industries. Above it sits the ordinary company framework, but the manufacturing overlay is what makes these books distinct.</p>
<p>Two figures carry most of the risk: the value of inventory at the year end and the cost of the plant that made it. Both are measured under accounting standards and then re-measured under tax law, so <a href="/glossary/accounting/work-in-progress-wip-valuation">Work-in-Progress (WIP) Valuation</a> and the split between <a href="/glossary/accounting/direct-vs-indirect-factory-overheads">Direct vs Indirect Factory Overheads</a> are not accounting niceties but the inputs to a cost audit. Manufacturing accounting services keep the stock ledger, the fixed-asset register and the GST credit records tied together against the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>Section 148, Companies Act 2013 with the Companies (Cost Records and Audit) Rules 2014</strong></span><span class="al-d">Notified manufacturers maintain cost records and, above the thresholds, undergo a cost audit reported in Form CRA-3. The Companies (Cost Records and Audit) Rules 2014 prescribe Forms CRA-1 to CRA-4 for the record and reporting formats.</span></li><li><span class="al-t"><strong>AS 2 / Ind AS 2, Valuation of Inventories</strong></span><span class="al-d">Raw material, WIP and finished goods are valued at the lower of cost and net realisable value, with production overheads absorbed on normal capacity.</span></li><li><span class="al-t"><strong>Schedule II, Companies Act 2013 with Section 32, Income-tax Act 1961</strong></span><span class="al-d">Plant and machinery is depreciated over useful life for the books and on block-of-assets rates for tax, and the two are reconciled.</span></li><li><span class="al-t"><strong>Sections 16 and 17, CGST Act 2017</strong></span><span class="al-d">Input tax credit on inputs and capital goods is claimed and, where required, reversed, tying the stock ledger to the GST returns - the basis of <a href="/glossary/accounting/form-itc-04-job-work-tracking">Form ITC-04 Job Work Tracking</a>.</span></li><li><span class="al-t"><strong>Section 128, Companies Act 2013</strong></span><span class="al-d">The underlying books stay on accrual and double entry at the registered office, retained for eight years.</span></li><li><span class="al-t"><strong>Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">The ERP's audit trail remains switched on, so a change to a costing entry or a stock adjustment is always logged. Filing itself sits on the <a href="/accounting-bookkeeping-services">hub page</a>.</span></li></ul>
<p class="compliance-note"><strong>Practical note:</strong> cost records are often written up too late; the CRA-3 cost audit then surfaces gaps that should have been captured month by month.</p><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" id="tool-section" style="background-color:var(--blue-lighter);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Free tool: Depreciation Calculator</h2>
            <div class="content-text">
                <p>Compute depreciation on plant and machinery under the Companies Act and Income-tax Act.</p>
                <style>
                /* Depreciation calculator — inlined & themed to the manufacturing page tokens (dep- namespace) */
                #tool-section .dep-wrap{--dep-navy:var(--blue,#1B365D);--dep-navy-light:#2a4d78;--dep-orange:var(--orange,#E8712C);--dep-surface:var(--blue-lighter,#F4F7FB);--dep-border:var(--gray-200,#E5E7EB);--dep-text:var(--text-secondary,#4B5563);--dep-muted:var(--text-muted,#6B7280);--dep-mono:ui-monospace,'Space Mono',SFMono-Regular,Menlo,Consolas,monospace;margin-top:22px;}
                #tool-section .dep-card{background:#fff;border:1px solid var(--dep-border);border-radius:16px;box-shadow:0 10px 30px rgba(27,54,93,.08);padding:28px;}
                #tool-section .dep-title{font-size:20px;font-weight:700;color:var(--dep-navy);margin:0 0 20px;line-height:1.3;}
                #tool-section .dep-label{display:block;font-size:12px;font-weight:700;color:var(--dep-muted);text-transform:uppercase;letter-spacing:.5px;margin-bottom:8px;}
                #tool-section .dep-chips{display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:8px;margin-bottom:18px;}
                #tool-section .dep-chip{padding:10px 12px;border:2px solid var(--dep-border);border-radius:10px;font:inherit;font-size:13px;font-weight:700;color:var(--dep-muted);background:#fff;cursor:pointer;text-align:center;transition:all .2s;line-height:1.3;}
                #tool-section .dep-chip:hover{border-color:var(--dep-navy);color:var(--dep-navy);}
                #tool-section .dep-chip.active{border-color:var(--dep-navy);color:var(--dep-navy);background:var(--dep-surface);}
                #tool-section .dep-chip small{display:block;font-size:10px;font-weight:600;opacity:.7;margin-top:2px;}
                #tool-section .dep-sgroup{margin-bottom:20px;}
                #tool-section .dep-srow{display:flex;align-items:center;gap:12px;}
                #tool-section .dep-range{flex:1;-webkit-appearance:none;appearance:none;height:6px;border-radius:3px;background:var(--dep-border);outline:none;}
                #tool-section .dep-range::-webkit-slider-thumb{-webkit-appearance:none;width:20px;height:20px;border-radius:50%;background:var(--dep-navy);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,.2);}
                #tool-section .dep-range::-moz-range-thumb{width:20px;height:20px;border-radius:50%;background:var(--dep-navy);cursor:pointer;border:3px solid #fff;}
                #tool-section .dep-sval{min-width:120px;padding:11px 14px;border:2px solid var(--dep-border);border-radius:10px;font-family:var(--dep-mono);font-size:15px;font-weight:700;color:var(--dep-navy);background:var(--dep-surface);text-align:right;outline:none;transition:border-color .2s;}
                #tool-section .dep-sval:focus{border-color:var(--dep-navy);}
                #tool-section .dep-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px;margin-bottom:18px;}
                #tool-section .dep-toggle{display:flex;gap:4px;background:var(--dep-surface);border-radius:10px;padding:4px;}
                #tool-section .dep-tbtn{flex:1;padding:10px 8px;border:0;border-radius:7px;font:inherit;font-size:13.5px;font-weight:700;color:var(--dep-muted);background:transparent;cursor:pointer;transition:all .2s;line-height:1.35;}
                #tool-section .dep-tbtn.active{background:#fff;color:var(--dep-navy);box-shadow:0 1px 3px rgba(0,0,0,.1);}
                #tool-section .dep-tbtn small{font-weight:400;font-size:11px;opacity:.7;}
                #tool-section .dep-field{margin-bottom:18px;}
                #tool-section .dep-num{width:100%;max-width:140px;padding:11px 14px;border:2px solid var(--dep-border);border-radius:10px;font:inherit;font-size:16px;font-weight:700;font-family:var(--dep-mono);color:var(--dep-navy);background:var(--dep-surface);outline:none;transition:border-color .2s;}
                #tool-section .dep-num:focus{border-color:var(--dep-navy);}
                #tool-section .dep-calc{width:100%;padding:15px;background:var(--dep-navy);color:#fff;border:0;border-radius:10px;font:inherit;font-size:16px;font-weight:700;cursor:pointer;transition:background .2s,transform .1s;margin-top:6px;}
                #tool-section .dep-calc:hover{background:var(--dep-navy-light);}
                #tool-section .dep-calc:active{transform:scale(.99);}
                #tool-section .dep-reset{margin-top:14px;padding:9px 18px;border:1px solid var(--dep-border);border-radius:8px;background:#fff;color:var(--dep-muted);font:inherit;font-size:13px;font-weight:600;cursor:pointer;transition:all .2s;}
                #tool-section .dep-reset:hover{border-color:var(--dep-orange);color:var(--dep-orange);}
                #tool-section .dep-result{display:none;margin-top:26px;padding-top:24px;border-top:1px solid var(--dep-border);}
                #tool-section .dep-result.show{display:block;}
                #tool-section .dep-hero{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:14px;margin:0 0 18px;}
                #tool-section .dep-box{border-radius:12px;padding:20px;text-align:center;color:#fff;}
                #tool-section .dep-box.annual{background:linear-gradient(135deg,var(--dep-navy),var(--dep-navy-light));}
                #tool-section .dep-box.total{background:linear-gradient(135deg,var(--dep-orange),#f0925a);}
                #tool-section .dep-box.wdv{background:linear-gradient(135deg,#2a4d78,#3a6098);}
                #tool-section .dep-box .db-label{font-size:11px;font-weight:700;opacity:.85;text-transform:uppercase;letter-spacing:.5px;}
                #tool-section .dep-box .db-value{font-family:var(--dep-mono);font-size:clamp(1.2rem,2.5vw,1.6rem);font-weight:800;margin-top:4px;}
                #tool-section .dep-box .db-sub{font-size:11px;opacity:.85;margin-top:2px;}
                #tool-section .dep-note{background:#FFF3E9;border-left:4px solid var(--dep-orange);border-radius:0 10px 10px 0;padding:14px 18px;margin:0 0 18px;}
                #tool-section .dep-note p{margin:0;font-size:14px;color:#7a4a24;line-height:1.6;}
                #tool-section .dep-note strong{color:#5f3717;}
                #tool-section .dep-rcard{background:#fff;border:1px solid var(--dep-border);border-radius:12px;margin-bottom:16px;overflow:hidden;}
                #tool-section .dep-rcard-hd{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 18px;border-bottom:1px solid var(--dep-border);background:var(--dep-surface);}
                #tool-section .dep-rcard-hd h4{font-size:15px;font-weight:700;color:var(--dep-navy);margin:0;}
                #tool-section .dep-badge{font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;text-transform:uppercase;letter-spacing:.5px;background:#fff;color:var(--dep-navy);border:1px solid var(--dep-border);white-space:nowrap;}
                #tool-section .dep-rcard-bd{padding:18px;}
                #tool-section .dep-table{width:100%;border-collapse:collapse;font-size:14px;margin:0;}
                #tool-section .dep-table td{padding:10px 14px;border-bottom:1px solid var(--dep-border);color:var(--dep-text);}
                #tool-section .dep-table tr:last-child td{border-bottom:0;}
                #tool-section .dep-table tr:nth-child(even){background:var(--dep-surface);}
                #tool-section .dep-table td:last-child{font-family:var(--dep-mono);text-align:right;font-weight:700;color:var(--dep-navy);}
                #tool-section .dep-table .hi{color:var(--dep-orange);}
                #tool-section .dep-yr{max-height:420px;overflow:auto;border:1px solid var(--dep-border);border-radius:10px;}
                #tool-section .dep-yr table{width:100%;border-collapse:collapse;font-size:13px;}
                #tool-section .dep-yr th{background:var(--dep-navy);color:#fff;padding:10px 12px;text-align:right;font-weight:600;font-size:11px;text-transform:uppercase;letter-spacing:.3px;position:sticky;top:0;}
                #tool-section .dep-yr th:first-child{text-align:center;}
                #tool-section .dep-yr td{padding:8px 12px;border-bottom:1px solid var(--dep-border);text-align:right;font-family:var(--dep-mono);font-size:12px;color:var(--dep-text);}
                #tool-section .dep-yr td:first-child{text-align:center;font-family:inherit;font-weight:700;color:var(--dep-navy);}
                #tool-section .dep-yr td.hi{color:var(--dep-orange);font-weight:700;}
                #tool-section .dep-yr tr:nth-child(even){background:var(--dep-surface);}
                #tool-section .dep-actions{display:flex;gap:12px;margin-top:18px;flex-wrap:wrap;}
                #tool-section .dep-abtn{display:inline-flex;align-items:center;gap:8px;padding:11px 18px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;transition:all .2s;border:1.5px solid var(--dep-border);color:var(--dep-navy);background:#fff;}
                #tool-section .dep-abtn:hover{border-color:var(--dep-navy);transform:translateY(-1px);}
                #tool-section .dep-abtn svg{width:18px;height:18px;flex-shrink:0;}
                </style>

                <div class="dep-wrap">
                    <div class="dep-card">
                        <h3 class="dep-title">Calculate Depreciation</h3>

                        <span class="dep-label">Asset Category</span>
                        <div class="dep-chips" id="dep-assetType">
                            <button type="button" class="dep-chip active" data-val="pm15">Plant &amp; Machinery<small>15% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="comp40">Computers / Software<small>40% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="vehicle15">Motor Vehicles<small>15% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="bldg10">Building (Non-Res)<small>10% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="bldg5">Building (Residential)<small>5% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="furn10">Furniture &amp; Fittings<small>10% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="intang25">Intangible Assets<small>25% WDV</small></button>
                            <button type="button" class="dep-chip" data-val="custom">Custom Rate<small>Enter manually</small></button>
                        </div>

                        <div class="dep-sgroup">
                            <label class="dep-label" for="dep-valCost">Asset Cost (&#8377;)</label>
                            <div class="dep-srow">
                                <input type="range" class="dep-range" id="dep-sliderCost" min="10000" max="100000000" step="10000" value="1000000" aria-label="Asset cost slider">
                                <input type="text" class="dep-sval" id="dep-valCost" value="10,00,000" inputmode="numeric" autocomplete="off" aria-label="Asset cost">
                            </div>
                        </div>

                        <div class="dep-sgroup">
                            <label class="dep-label" for="dep-valRate">Depreciation Rate (% p.a.)</label>
                            <div class="dep-srow">
                                <input type="range" class="dep-range" id="dep-sliderRate" min="1" max="100" step="0.5" value="15" aria-label="Depreciation rate slider">
                                <input type="text" class="dep-sval" id="dep-valRate" value="15" style="min-width:80px" inputmode="decimal" autocomplete="off" aria-label="Depreciation rate">
                            </div>
                        </div>

                        <div class="dep-grid">
                            <div>
                                <span class="dep-label">Method</span>
                                <div class="dep-toggle" id="dep-method" role="group" aria-label="Depreciation method">
                                    <button type="button" class="dep-tbtn active" data-val="wdv">WDV<br><small>IT Act (mandatory)</small></button>
                                    <button type="button" class="dep-tbtn" data-val="slm">SLM<br><small>Companies Act</small></button>
                                </div>
                            </div>
                            <div>
                                <span class="dep-label">Used 180+ days in Year 1?</span>
                                <div class="dep-toggle" id="dep-halfYear" role="group" aria-label="Half-year rule">
                                    <button type="button" class="dep-tbtn active" data-val="full">Yes<br><small>Full rate</small></button>
                                    <button type="button" class="dep-tbtn" data-val="half">No<br><small>Half rate</small></button>
                                </div>
                            </div>
                        </div>

                        <div class="dep-field">
                            <label class="dep-label" for="dep-inYears">Number of Years</label>
                            <input type="number" class="dep-num" id="dep-inYears" value="10" min="1" max="50">
                        </div>

                        <button type="button" class="dep-calc" id="dep-calcBtn">Calculate Depreciation</button>
                        <button type="button" class="dep-reset" id="dep-resetBtn">&#8634; Reset</button>

                        <div class="dep-result" id="dep-resPanel"><div id="dep-resBody"></div></div>
                    </div>
                </div>

                <script>
                (function(){
                    var root = document.getElementById('tool-section');
                    if(!root || root.dataset.depInit) return;
                    root.dataset.depInit = '1';
                    function $(id){ return document.getElementById(id); }
                    var RATES = {pm15:15,comp40:40,vehicle15:15,bldg10:10,bldg5:5,furn10:10,intang25:25,custom:15};
                    function fmt(n){ return '₹' + Math.round(n).toLocaleString('en-IN'); }
                    function fmtL(n){ if(n>=10000000) return '₹'+(n/10000000).toFixed(2)+' Cr'; if(n>=100000) return '₹'+(n/100000).toFixed(2)+' L'; return fmt(n); }
                    function getTg(id){ var g=$(id); var a=g.querySelector('.dep-tbtn.active'); return a?a.getAttribute('data-val'):''; }

                    root.querySelectorAll('#dep-assetType .dep-chip').forEach(function(el){
                        el.addEventListener('click', function(){
                            root.querySelectorAll('#dep-assetType .dep-chip').forEach(function(c){ c.classList.remove('active'); });
                            el.classList.add('active');
                            var r = RATES[el.getAttribute('data-val')];
                            $('dep-sliderRate').value = r; $('dep-valRate').value = r;
                        });
                    });

                    ['dep-method','dep-halfYear'].forEach(function(gid){
                        root.querySelectorAll('#'+gid+' .dep-tbtn').forEach(function(btn){
                            btn.addEventListener('click', function(){
                                $(gid).querySelectorAll('.dep-tbtn').forEach(function(b){ b.classList.remove('active'); });
                                btn.classList.add('active');
                            });
                        });
                    });

                    $('dep-sliderCost').addEventListener('input', function(){ var v=parseInt($('dep-sliderCost').value); $('dep-valCost').value=v.toLocaleString('en-IN'); });
                    $('dep-valCost').addEventListener('input', function(){ var v=parseInt($('dep-valCost').value.replace(/[^0-9]/g,''))||0; $('dep-sliderCost').value=v; $('dep-valCost').value=v?v.toLocaleString('en-IN'):''; });
                    $('dep-sliderRate').addEventListener('input', function(){ $('dep-valRate').value=$('dep-sliderRate').value; });
                    $('dep-valRate').addEventListener('input', function(){ $('dep-sliderRate').value=parseFloat($('dep-valRate').value)||0; });

                    function resetForm(){
                        root.querySelectorAll('#dep-assetType .dep-chip').forEach(function(c,i){ c.classList.toggle('active', i===0); });
                        $('dep-sliderCost').value=1000000; $('dep-valCost').value='10,00,000';
                        $('dep-sliderRate').value=15; $('dep-valRate').value='15';
                        $('dep-inYears').value=10;
                        ['dep-method','dep-halfYear'].forEach(function(g){ $(g).querySelectorAll('.dep-tbtn').forEach(function(b,i){ b.classList.toggle('active', i===0); }); });
                        $('dep-resPanel').classList.remove('show');
                    }

                    function calcDep(){
                        var cost = parseInt($('dep-valCost').value.replace(/[^0-9]/g,''))||0;
                        var rate = parseFloat($('dep-valRate').value)||0;
                        var years = parseInt($('dep-inYears').value)||10;
                        var isWDV = getTg('dep-method')==='wdv';
                        var isHalf = getTg('dep-halfYear')==='half';
                        if(!cost || !rate){ alert('Please enter asset cost and depreciation rate.'); return; }

                        var yearData=[];
                        var wdv=cost, totalDep=0;
                        for(var y=1;y<=years;y++){
                            var r=rate;
                            if(y===1&&isHalf)r=rate/2;
                            var dep;
                            if(isWDV){dep=Math.round(wdv*r/100);}
                            else{dep=Math.round(cost*r/100);if(y===1&&isHalf)dep=Math.round(cost*r/200);}
                            if(isWDV&&dep>wdv)dep=Math.round(wdv);
                            if(!isWDV){var remaining=cost-totalDep;if(dep>remaining)dep=Math.round(remaining);}
                            totalDep+=dep;
                            var closing=isWDV?(wdv-dep):Math.max(0,cost-totalDep);
                            yearData.push({year:y,opening:Math.round(isWDV?wdv:(cost-totalDep+dep)),dep:dep,accumulated:Math.round(totalDep),closing:Math.round(closing),rateUsed:r});
                            if(isWDV)wdv-=dep;
                            if(closing<=0)break;
                        }

                        var yr1Dep=yearData[0]?yearData[0].dep:0;
                        var finalWDV=yearData.length?yearData[yearData.length-1].closing:cost;

                        var h='';
                        h+='<div class="dep-hero"><div class="dep-box annual"><div class="db-label">Year 1 Depreciation</div><div class="db-value">'+fmt(yr1Dep)+'</div><div class="db-sub">'+(isHalf?'Half rate: '+(rate/2)+'%':'Full rate: '+rate+'%')+'</div></div>';
                        h+='<div class="dep-box total"><div class="db-label">Total Depreciation ('+yearData.length+' yrs)</div><div class="db-value">'+fmtL(totalDep)+'</div><div class="db-sub">'+Math.round(totalDep/cost*100)+'% of cost</div></div>';
                        h+='<div class="dep-box wdv"><div class="db-label">'+(isWDV?'Closing WDV':'Book Value')+'</div><div class="db-value">'+fmtL(finalWDV)+'</div><div class="db-sub">After '+yearData.length+' years</div></div></div>';

                        var taxRate=25;
                        var yr1Save=Math.round(yr1Dep*taxRate/100);
                        h+='<div class="dep-note"><p><strong>Year 1 Tax Saving (at '+taxRate+'% rate):</strong> '+fmt(yr1Dep)+' depreciation saves '+fmt(yr1Save)+' in tax. Effective asset cost in year 1: '+fmt(cost-yr1Save)+'. Total depreciation of '+fmtL(totalDep)+' over '+yearData.length+' years saves ~'+fmtL(Math.round(totalDep*taxRate/100))+' in total tax.</p></div>';

                        h+='<div class="dep-rcard"><div class="dep-rcard-hd"><h4>Depreciation Summary</h4><span class="dep-badge">'+(isWDV?'WDV':'SLM')+'</span></div><div class="dep-rcard-bd"><table class="dep-table"><tbody>';
                        h+='<tr><td>Asset Cost</td><td>'+fmt(cost)+'</td></tr>';
                        h+='<tr><td>Rate</td><td>'+rate+'% '+(isWDV?'WDV':'SLM')+'</td></tr>';
                        h+='<tr><td>Method</td><td>'+(isWDV?'Written Down Value':'Straight Line')+'</td></tr>';
                        h+='<tr><td>Half-Year Rule</td><td>'+(isHalf?'Applied (Year 1 at '+rate/2+'%)':'Not applied')+'</td></tr>';
                        h+='<tr><td>Year 1 Depreciation</td><td class="hi">'+fmt(yr1Dep)+'</td></tr>';
                        h+='<tr><td>Total Depreciation</td><td>'+fmt(totalDep)+'</td></tr>';
                        h+='<tr><td>'+(isWDV?'Final WDV':'Final Book Value')+'</td><td>'+fmt(finalWDV)+'</td></tr>';
                        h+='</tbody></table></div></div>';

                        h+='<div class="dep-rcard"><div class="dep-rcard-hd"><h4>Year-Wise Depreciation Schedule</h4><span class="dep-badge">Schedule</span></div><div class="dep-rcard-bd"><div class="dep-yr"><table><thead><tr><th>Year</th><th>Opening</th><th>Rate</th><th>Depreciation</th><th>Accumulated</th><th>Closing</th></tr></thead><tbody>';
                        yearData.forEach(function(d){ h+='<tr><td>'+d.year+'</td><td>'+fmt(d.opening)+'</td><td>'+d.rateUsed+'%</td><td class="hi">'+fmt(d.dep)+'</td><td>'+fmt(d.accumulated)+'</td><td>'+fmt(d.closing)+'</td></tr>'; });
                        h+='</tbody></table></div></div></div>';

                        h+='<div class="dep-actions"><a href="https://wa.me/919459456700?text=Hi%2C%20I%20used%20the%20Depreciation%20Calculator.%20I%20need%20help%20with%20fixed%20asset%20depreciation%20and%20tax." target="_blank" rel="noopener" class="dep-abtn"><svg viewBox="0 0 24 24" fill="#25D366" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a><a href="/tools/income-tax-calculator" class="dep-abtn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8M8 10h8M8 14h5"/></svg> Income Tax Calculator</a></div>';

                        $('dep-resBody').innerHTML = h;
                        var rp = $('dep-resPanel'); rp.classList.add('show'); rp.scrollIntoView({behavior:'smooth',block:'nearest'});
                    }

                    $('dep-calcBtn').addEventListener('click', calcDep);
                    $('dep-resetBtn').addEventListener('click', resetForm);
                    root.querySelector('.dep-card').addEventListener('keydown', function(e){ if(e.key==='Enter' && e.target.tagName==='INPUT'){ e.preventDefault(); calcDep(); } });
                })();
                </script>
                <p style="margin-top:14px;font-size:14px;"><a href="/tools/depreciation-calculator" target="_blank" rel="noopener" style="color:var(--blue);font-weight:600;">Open the full calculator &#8599;</a></p>
            </div>
        </div>
    </div>
</section>
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Manufacturing Accounting FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on manufacturing accounting scope, process, documents and pricing for Indian businesses.</p>
                    <a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    <form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate>
  <h3 class="faq-enquiry__title">Ask about your books</h3>
  <p class="faq-enquiry__sub">Send your requirement for a scoped quote.</p>
  <p class="faq-enquiry__context">Enquiring about: <strong>Manufacturing Accounting</strong></p>
  <input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required>
  <input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required>
  <div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div>
  <button class="faq-enquiry__btn" type="submit">Get a Callback</button>
  <p class="faq-enquiry__msg" role="status" aria-live="polite"></p>
</form>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What does a manufacturing accountant do?</h3>
  <div class="faq-expanded__a"><p>A manufacturing accountant maintains the cost and financial records of a factory, covering raw material and stores accounting, work in progress and finished goods valuation, unit costing, GST and TDS workings, the fixed asset register, payroll entries and monthly MIS. The role also reconciles shop floor production and stock records against the ledger, then closes the books and prepares the year end financial statements.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How do you value raw material, work in progress and finished goods?</h3>
  <div class="faq-expanded__a"><p>Inventory is valued at the lower of cost and net realisable value under AS 2, with cost built from material, conversion labour and a normal allocation of factory overhead. We agree the basis at the start, either job costing for made to order runs or process costing for continuous output, and apply it consistently so margins stay comparable month to month.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can plant inventory records be reconciled with the books?</h3>
  <div class="faq-expanded__a"><p>Yes, physical stock records, bin cards and production reports are reconciled against the stock ledger every month and the variance is reported item by item. Differences usually come from unrecorded issues to production, scrap not written off, rejections and goods received without an invoice. Each line is cleared with your stores team before the month is closed.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How is depreciation on plant and machinery calculated for a factory?</h3>
  <div class="faq-expanded__a"><p>Depreciation is computed on the useful life prescribed in Schedule II of the Companies Act, adjusted where your plant runs double or triple shifts. We maintain a component wise fixed asset register with capitalisation dates, additions, disposals and residual value, and keep a separate block wise computation under the Income Tax Act, since the two rarely give the same number.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What GST issues come up for manufacturers and how do you handle them?</h3>
  <div class="faq-expanded__a"><p>Manufacturers most often struggle with input tax credit mismatches, job work movement, e-way bill discipline and credit treatment on scrap and free samples. Your purchase register is matched against GSTR-2B every month, suppliers who have not filed are chased in writing, goods sent for job work are tracked against returns received, and the periodic returns are prepared from that reconciled base.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How do you account for goods sent out for job work?</h3>
  <div class="faq-expanded__a"><p>Goods sent for job work remain your inventory and are tracked in a separate job work register carrying challan reference, quantity sent, quantity received back and process loss. The job worker charges are booked as conversion cost, TDS is deducted on the processing bill, and the return timelines under GST are monitored so that credit is not put at risk.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What do manufacturing accounting services cost each month?</h3>
  <div class="faq-expanded__a"><p>Manufacturing accounting typically costs Rs 15,000 to Rs 60,000 a month, depending on voucher volume, number of SKUs, plants and GST registrations. A single unit with one GSTIN and about 400 vouchers a month sits at the lower end. Costing support, inventory valuation and the monthly MIS pack are quoted on top once we have seen one month of live data.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How long does handover of manufacturing books from an existing accountant take?</h3>
  <div class="faq-expanded__a"><p>Takeover normally takes 10 to 15 working days from the day we receive your data backup. We review the Tally or ERP data, trial balance, last filed GST and TDS returns and the previous year audited statements, run a health check, hand you a written list of open items, then start live entries from an agreed cut off date.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Which accounting software is best for a manufacturing company?</h3>
  <div class="faq-expanded__a"><p>Tally Prime suits most Indian manufacturers because it handles stock, batch, job work and GST returns natively, while multi plant units with heavy bill of material and shop floor needs are better on an ERP such as SAP Business One or Odoo. Zoho Books fits lighter assembly operations. QuickBooks is not an option in India, since Intuit withdrew the product for Indian users in 2023.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What type of accounting is used in manufacturing?</h3>
  <div class="faq-expanded__a"><p>Manufacturing uses cost accounting run alongside standard financial accounting, so the same transactions produce both statutory accounts and a per unit cost. Job costing is applied to made to order runs and process costing to continuous output, with inventory valued at the lower of cost and net realisable value under AS 2. Prescribed industries above the notified turnover limits must also maintain cost records under the Companies Act.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>One plant generates more paperwork in a month than most service businesses see in a year. Goods receipt notes, material issue slips, job-work challans, scrap sales, e-way bills and production reports all have to reach the ledger before a cost per unit means anything at all. Patron takes those feeds in bulk, posts them.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Manufacturing Accounting Deadlines You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p><strong>TDS / TCS deposit (Challan ITNS-281)</strong> is due 7th of every month (30 April for March). <strong>GSTR-1 (outward supplies)</strong> is due 11th of every month for monthly filers. <strong>GSTR-3B (summary return and tax payment)</strong> is due 20th of every month for monthly filers. Patron tracks each against your books so nothing is reconstructed after the fact. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Manufacturing Accounting Services with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">Your largest buyer demands a rate revision, and the gap shows immediately. Nobody in the room can prove what the item costs to make, and the quotation goes out on a number carried forward from last year. Sometimes it is a second shed instead, or a lender asking for cost line by line.</p>
<p style="color:rgba(255,255,255,0.88);">Accounting for manufacturers moves shop floor numbers into the middle of the month rather than the year end. Consumption against standard, scrap against yield and stock against what the floor reports arrive already tied together. The meeting then turns on why a figure moved instead of whether it is real.</p>
<p style="color:rgba(255,255,255,0.88);">What nobody can answer yet is where your production data actually sits. Issue slips and receipt notes may reach a system, or only a register. We also settle who owns the stock ledger, and how <a href="/accounting-services-it-saas">a software or subscription arm</a> is treated if you run one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20manufacturing" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Manufacturing%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Manufacturing%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Manufacturing Accounting Near You</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Local teams for manufacturing accounting in these cities.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Cities We Serve</div><div class="pa-block-sub">On-ground teams</div><div class="pa-city-grid"><a href="https://www.patronaccounting.com/accounting-services-for-manufacturing/ahmedabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M7 21V12h10v9"/><path d="M7 12a5 5 0 0 1 10 0"/><path d="M10 21v-3a2 2 0 1 1 4 0v3"/><path d="M4 21V8M20 21V8"/><path d="M3 8a1 1 0 1 1 2 0M19 8a1 1 0 1 1 2 0"/></svg></div><div><div class="pa-card-title">Ahmedabad</div><div class="pa-card-sub">Gujarat</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-manufacturing/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-manufacturing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-manufacturing/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-manufacturing/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support</div><div class="pa-cross-grid"><a href="https://www.patronaccounting.com/accounting-services" class="pa-cross-card"><div class="pa-card-title">All Accounting Services</div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-e-commerce-industry" class="pa-cross-card"><div class="pa-card-title">E-Commerce Accounting</div></a>
<a href="https://www.patronaccounting.com/financial-statement-preparation-services" class="pa-cross-card"><div class="pa-card-title">Financial Statement Preparation</div></a>
<a href="https://www.patronaccounting.com/mis-reporting-services" class="pa-cross-card"><div class="pa-card-title">MIS Reporting</div></a></div></div>
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

<div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; compliance &nbsp;&middot;&nbsp; Last reviewed 23 July 2026 &nbsp;&middot;&nbsp; Next review 23 October 2026</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a><a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></div></div></div>
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
