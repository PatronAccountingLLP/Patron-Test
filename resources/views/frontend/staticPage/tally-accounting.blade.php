@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

@section('meta')
    <title>Tally Prime Accounting Services for Indian Companies</title>
    <meta name="description" content="Tally data that stays clean - masters rationalised, duplicates killed. Save hours every month and stop chasing your own paperwork. Get a fixed quote.">
    <link rel="canonical" href="https://www.patronaccounting.com/tally-accounting">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Tally Prime Accounting Services for Indian Companies | Patron Accounting">
    <meta property="og:description" content="Tally data that stays clean - masters rationalised, duplicates killed. Save hours every month and stop chasing your own paperwork. Get a fixed quote.">
    <meta property="og:url" content="https://www.patronaccounting.com/tally-accounting">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tally Prime Accounting Services for Indian Companies | Patron Accounting">
    <meta name="twitter:description" content="Tally data that stays clean - masters rationalised, duplicates killed. Save hours every month and stop chasing your own paperwork. Get a fixed quote.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/tally-accounting/#service",
  "name": "Tally Prime Accounting Services",
  "description": "A Tally accountant keeps the data clean: masters rationalised, duplicate ledgers merged and groupings that report correctly first time. GST and TDS returns are prepared from the same company file.",
  "image": "https://www.patronaccounting.com/images/tally-accounting-og.webp",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Tally Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/tally-accounting"
  },
  "areaServed": {
    "@type": "Country",
    "name": "India",
    "sameAs": "https://en.wikipedia.org/wiki/India"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Tally Prime Accounting Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Tally Prime Accounting Services",
          "description": "A Tally accountant keeps the data clean: masters rationalised, duplicate ledgers merged and groupings that report correctly first time. GST and TDS returns are prepared from the same company file.",
          "serviceType": "Tally Accounting Service"
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
      "name": "Tally Prime Accounting Services",
      "item": "https://www.patronaccounting.com/tally-accounting"
    }
  ],
  "@id": "https://www.patronaccounting.com/tally-accounting/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/tally-accounting/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is Tally useful for a business and its accountant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tally Prime handles voucher entry, ledgers, inventory, GST, TDS, payroll and MIS inside a single file, which is why it remains the default for Indian SMEs. For the accountant it removes manual computation, applies GST on each voucher, produces GSTR-1 and GSTR-3B data for filing, and generates the trial balance and financial statements an auditor needs without rework."
      }
    },
    {
      "@type": "Question",
      "name": "Can books be maintained in Tally without daily input from the client team?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Your team scans or forwards invoices to a shared folder or mailbox once, and our team posts the entries directly into your Tally company file, so no daily coordination is needed. A weekly query sheet covers anything unclear. Most clients spend around an hour a month on accounting once the document flow and approval routine are settled."
      }
    },
    {
      "@type": "Question",
      "name": "How is Tally data accessed when it sits on an office computer?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Office hosted Tally data is accessed through Tally on cloud or AWS hosting, through a secure remote desktop session on your machine, or by exchanging encrypted company file backups on an agreed schedule where remote access is not permitted. Hosting is the cleanest option because both teams work on one live file and no version conflict arises at month end."
      }
    },
    {
      "@type": "Question",
      "name": "What does outsourced Tally accounting cost per month?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Outsourced Tally accounting generally costs Rs 6,000 to Rs 12,000 a month for a small business with up to 150 vouchers, and Rs 12,000 to Rs 30,000 a month for higher volumes, multiple GSTINs or payroll processing. The Tally licence and hosting charges are separate and paid directly to Tally or the hosting provider, so there is no markup on software."
      }
    },
    {
      "@type": "Question",
      "name": "Can you clean up an existing Tally company file with wrong balances?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. A cleanup starts with a health check of opening balances, duplicate and unused ledgers, unreconciled bank entries, negative stock and GST mismatches, after which corrections are posted with a documented audit trail rather than by silently editing history. A single company cleanup usually takes 2 to 4 weeks and ends with a signed off trial balance you can rely on."
      }
    },
    {
      "@type": "Question",
      "name": "How are GST returns filed using Tally Prime data?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "GST returns are filed by exporting the GSTR-1 and GSTR-3B data from Tally Prime, running the input credit reconciliation against GSTR-2B, resolving supplier mismatches, then uploading through the GST portal or a filing utility. Errors flagged inside Tally, such as a missing HSN code or an incorrect place of supply, are corrected in the voucher before the return goes out."
      }
    },
    {
      "@type": "Question",
      "name": "Should a business move from Tally to a cloud accounting system?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Move to cloud accounting if you have remote teams, multiple locations, heavy bank and payment gateway feeds, or investors who want live access, and stay on Tally Prime if you have deep inventory needs, a settled in house entry team and no remote access requirement. A migration to Zoho Books normally takes 3 to 4 weeks including two years of history."
      }
    },
    {
      "@type": "Question",
      "name": "How is Tally data backed up and protected?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tally data is backed up daily to encrypted storage with a retention period agreed with you, and access runs through named user logins with Tally security levels, so entry staff cannot alter closed periods or open payroll data. Where the file is hosted, the hosting provider's access logs add a second record of who opened the company and when."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to migrate books into Tally Prime and go live?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A standard migration into Tally Prime takes 2 to 4 weeks: chart of accounts and stock item design in the first week, master and opening balance import in the second, then parallel entry and reconciliation before go live. Carrying prior year transaction history rather than opening balances alone adds roughly another week depending on the volume being imported."
      }
    },
    {
      "@type": "Question",
      "name": "Can you configure Tally for multi godown inventory and cost centre reporting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Multi godown inventory, cost centres, branch wise reporting and user level security are configured inside Tally Prime so each user sees only the vouchers and reports their role requires. Godown wise stock and cost centre profitability then flow straight into the monthly MIS with no manual reallocation, which is what makes branch level margin visible to management."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/tally-accounting",
  "name": "Tally Prime Accounting Services",
  "description": "Tally data that stays clean - masters rationalised, duplicates killed. Save hours every month and stop chasing your own paperwork. Get a fixed quote.",
  "url": "https://www.patronaccounting.com/tally-accounting",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/tally-accounting/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/tally-accounting-og.webp"
  },
  "image": "https://www.patronaccounting.com/images/tally-accounting-og.webp",
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
    "@id": "https://www.patronaccounting.com/tally-accounting/#breadcrumb"
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
                        Tally Prime Accounting Services
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax that follows the master:</span> We set registration type, GSTIN, HSN or SAC and the applicable rate on ledger and stock item masters. Correct tax then attaches on voucher entry.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exception list worked down to nil:</span> TallyPrime separates transactions it can include in a return from those it flags as incomplete. We clear that flagged list before any summary is.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit trail evidence that exists:</span> You keep your company's books on an edit log capable TallyPrime release. The record of changes that company accounting software must retain is.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Entry and alteration rights separated:</span> We set Tally security levels so the person passing vouchers is not the person able to alter or delete them.</p>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tally%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Tally%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20tally%20accounting" target="_blank" class="btn-sample text-decoration-none">
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
                    'service'  => 'Tally Accounting',
                ])
            </div>
        </div>
    </div>
</section>


@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Verified Google reviews from founders and businesses Patron works with across India.',
    'ctaTitle'   => 'Join 3,000+ Founders and Businesses on Patron',
    'ctaText'    => 'Rated 4.9 on Google - trusted for startup accounting since 2019.',
])


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
            <h2 class="section-title">What Tally Prime Accounting Covers — Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Tally Accounting Services at a Glance</strong></p>
                    <p>A Tally accountant keeps the data clean: masters rationalised, duplicate ledgers merged and groupings that report correctly first time. <a href="/blog/gst-returns-using-tally-prime">GST and TDS returns</a> are prepared from the same company file. Patron runs the monthly close in TallyPrime, locks the period and exports the Edit Log evidence Rule 3(1) requires. Appropriate for TallyPrime users, single-user through multi-company.</p>
                </div>
                <p>Eight financial years of books must be preserved under the Companies Act, so the file is closed properly, not merely updated. You send it, or give access, with bank statements and the month's purchase and sales documents. Back comes a closed period: vouchers entered and verified, ledgers regrouped so the balance sheet reports correctly, GST and TDS workings drawn from the same file, and a reconciliation against every bank statement. Traders who value order in a busy company file recognise the routine.</p>
                <p>Inside Tally accounting services sits the recurring cycle: entry, reconciliation, statutory workings, then the locked close. How heavy a month gets turns on voucher volume, the companies held in the same file and whether inventory is maintained alongside. Cleaning up several prior years, migrating data off another system, or wiring the file to the government e-invoicing portal are each scoped as separate pieces of work.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Are Tally Prime Accounting Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Company records must be preserved for eight financial years, with an unbroken edit log under Rule 3(1), and TallyPrime is where many businesses keep them. A Tally accountant is the service that maintains that file to those standards. It rationalises the masters, merges duplicate ledgers and fixes groupings, so the balance sheet reports correctly the first time. The company file itself is kept as the single source, not scattered across spreadsheets alongside it.</p>
<p>Each month the work enters and verifies vouchers, reconciles every bank statement, and draws the GST and TDS workings from the same company file. The period is then closed and the edit-log evidence pulled out. Because the data file sits on a local machine, access is arranged either by sending the file or through a supported remote connection. Tally accounting services cover that recurring close. A Tally accountant does not take on prior-year clean-ups or data migration, which are scoped on their own.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Tally Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/accounting/tally-vault">Tally Vault</a></span><span class="al-d">A Tally password feature that encrypts and hides a company&#x27;s data.</span></li><li><span class="al-t"><a href="/glossary/accounting/tally-xml-export">Tally XML Export</a></span><span class="al-d">Tally&#x27;s built-in feature for extracting its data as an XML file.</span></li><li><span class="al-t"><a href="/glossary/accounting/remote-tally-access">Remote Tally Access</a></span><span class="al-d">Reaching a Tally company file from another location over a network.</span></li><li><span class="al-t"><a href="/glossary/accounting/standard-operating-procedure-sop">Standard Operating Procedure (SOP)</a></span><span class="al-d">A written, step-by-step instruction for how a task should be done.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/tally-accounting/what-is.webp" alt="What Are Tally Prime Accounting Services. Company records must be preserved for eight financial years, with an" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Tally Prime Accounting Services in India?</h2>
            <div class="content-text">
                
                <p>A Tally accountant is for businesses that have chosen to stay on TallyPrime and want the file run properly month after month. The software sits on a desktop in the office, and the books only stay clean when someone owns entry, reconciliation and the close.</p>
  <ul>
    <li>Traders and SMEs running daily books in TallyPrime, needing the month closed on time.</li>
    <li>Owners entering purchase bills themselves after the data-entry assistant left, with nobody reviewing.</li>
    <li>Businesses holding several companies in one Tally file, each needing its own clean close.</li>
    <li>Firms preparing <a href="/blog/gst-returns-using-tally-prime">GST and TDS returns</a> straight from the same company file.</li>
    <li>Businesses raising <a href="/blog/eway-bill-einvoice-in-tally">e-invoices and e-way bills from Tally</a>, needing masters set for it.</li>
    <li>Manufacturers maintaining stock inside Tally, where item masters must group and report right.</li>
    <li>Companies that must produce Edit Log evidence, needing the audit trail left switched on.</li>
    <li>Users on an old release or lapsed TSS, needing Tally support to bring the file current.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Tally Prime Accounting Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Tally Prime setup and masters</td><td>Company masters, GST details and security configured by a Tally accountant on a current release with audit trail enabled <span class="badge-included">One-time (setup)</span></td></tr>
                        <tr><td>Voucher entry and bookkeeping</td><td>Day to day voucher entry, ledgers and inventory maintained accurately, forming the core of our Tally accounting services <span class="badge-included">Weekly</span></td></tr>
                        <tr><td>Bank reconciliation and clearing</td><td>Bank reconciliation performed and uncertain transactions cleared down to a nil exception list each month before reporting <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>GST returns and e-documents</td><td>GST return workings, e-invoices and e-way bills produced from Tally, using <a href="/blog/eway-bill-einvoice-in-tally">e-way bills and e-invoices in Tally</a> guidance <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Backups, security and access control</td><td>Tally Vault security, separated entry and alteration rights, and off-machine backups maintained, with remote Tally support services when needed <span class="badge-included">Weekly</span></td></tr>
                        <tr><td>Period close and MIS reporting</td><td>Books closed each month with the period locked, plus management reports and financial statements prepared for the owner <span class="badge-included">Monthly</span></td></tr>

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
            <h2 class="section-title">How Tally Prime Accounting Services Work — Our Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron delivers tally accounting, step by step from onboarding to a clean monthly close.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Release and audit-trail check</h3>
    <p class="step-description">We first establish which TallyPrime product and release your data is on, because migrating data forward between releases is one-way and cannot be undone. For companies, we confirm the audit trail requirement is met by the edit-log capable product rather than assumed.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-1-release-and-audit-trail-check.webp" alt="Illustration for Release and audit-trail check: We first establish which TallyPrime product and release your data is on," loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">TSS status and access route</h3>
    <p class="step-description">A live Tally Software Services subscription is what enables remote access and the connected e-way bill and e-invoice services. Where TSS has lapsed we agree how the file reaches us instead, and we tell you plainly which features are unavailable until it is renewed.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-2-tss-status-and-access-route.webp" alt="Illustration for TSS status and access route: A live Tally Software Services subscription is what enables remote access and" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Masters, GST details and security</h3>
    <p class="step-description">Ledger and stock item masters are set with GST registration type, GSTIN, HSN or SAC and the applicable rate at the right level. The tax then follows the master rather than the operator. Tally security levels are set so entry and alteration rights are separated.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-3-masters-gst-details-and-security.webp" alt="Illustration for Masters, GST details and security: Ledger and stock item masters are set with GST registration type, GSTIN," loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Voucher entry and bank reconciliation</h3>
    <p class="step-description">Sales, purchase, payment, receipt and journal vouchers are entered for the period against the configured masters. Bank reconciliation is done inside Tally against the imported or keyed statement, with cheques issued but not presented carried as reconciling items.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-4-voucher-entry-and-bank-reconciliation.webp" alt="Illustration for Voucher entry and bank reconciliation: Sales, purchase, payment, receipt and journal vouchers are entered" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Clearing uncertain transactions</h3>
    <p class="step-description">Tally's GST reports separate transactions it can include from those it flags as incomplete or mismatched. We work that exception list down to nil, clearing missing GSTINs, wrong place of supply and rate mismatches, before any return summary is treated as final.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-5-clearing-uncertain-transactions.webp" alt="Illustration for Clearing uncertain transactions: Tally's GST reports separate transactions it can include from those it" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Returns and e-documents from Tally</h3>
    <p class="step-description">Return data is exported from Tally in the portal's format and filed on the GST portal. Where TSS is live, e-invoices and e-way bills are generated directly from the voucher and the IRN and bill number come back onto it.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-6-returns-and-e-documents-from-tally.webp" alt="Illustration for Returns and e-documents from Tally: Return data is exported from Tally in the portal's format and filed on" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">Backups, close and reporting</h3>
    <p class="step-description">Because the data file is local, a dated backup is taken and stored off the machine every period. We then produce the trial balance, profit and loss, balance sheet and outstanding reports, and restrict the period against alteration.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/tally-accounting/step-7-backups-close-and-reporting.webp" alt="Illustration for Backups, close and reporting: Because the data file is local, a dated backup is taken and stored off the" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
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
            <h2 class="section-title">Common Tally Prime Accounting Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Stock summary in Tally never agrees with the closing inventory figure</td><td>Gross profit swings on a valuation nobody can vouch, distorting every month's margin</td><td>Our team reconciles Tally's stock summary to physical counts, fixing item masters so inventory value ties to the books.</td></tr>
                        <tr><td>Negative cash and negative stock balances left running in the file</td><td>Books show impossible positions and any auditor treats the whole ledger as unreliable</td><td>Patron traces negative balances to their missing vouchers, so cash and stock never read below zero.</td></tr>
                        <tr><td>Bill-wise outstanding not maintained, so ageing cannot be produced</td><td>Overdue receivables go unchased and supplier balances drift from their statements</td><td>We enable and back-references bill references, so receivable and payable ageing reports come straight from Tally.</td></tr>
                        <tr><td>Receipts and payments booked as contra, cash entries as journals</td><td>Cash flow and bank reconciliation break, and GST returns pull the wrong values</td><td>Patron corrects voucher classification so payments, receipts and contras post correctly and returns reconcile; <a href="/blog/gst-returns-using-tally-prime">file GST returns using Tally Prime</a>.</td></tr>
                        <tr><td>The company file grows heavy with no backup or integrity check</td><td>One corruption event and years of books are lost, with no clean copy to restore</td><td>Our team runs scheduled backups and data verification, keeping the archived company file intact and recoverable.</td></tr>

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
            <h2 class="section-title">Tally Prime Accounting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one Tally company with routine monthly voucher entry</td><td>INR 2,499<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; higher voucher volume or several companies in Tally</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multi-entity Tally books with custom monthly reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">Keeping one Tally company with a steady flow of vouchers sits at the entry price. As voucher volume rises or you run several companies in Tally, a dedicated tally accountant handles more, so the fee moves up. Book a scope call on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Tally Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20tally%20accounting" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>






<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Professional Tally Prime Accounting Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z" /> <path d="M12 22V12" /> <polyline points="3.29 7 12 12 20.71 7" /> <path d="m7.5 4.27 9 5.15" /> </svg></div>
  <h3 class="feature-title">Tax that follows the master</h3>
  <p class="feature-text">We set registration type, GSTIN, HSN or SAC and the applicable rate on ledger and stock item masters. Correct tax then attaches on voucher entry.</p><ul style="margin-top:12px;"><li>Registration type, GSTIN, HSN or SAC and rate set on masters</li><li>Set on ledger and stock item masters before entry</li><li>Without it operators decide rates and returns are corrected transaction by transaction</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8" /> <path d="M21 3v5h-5" /> <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16" /> <path d="M8 16H3v5" /> </svg></div>
  <h3 class="feature-title">Exception list worked down to nil</h3>
  <p class="feature-text">TallyPrime separates transactions it can include in a return from those it flags as incomplete. We clear that flagged list before any summary is final.</p><ul style="margin-top:12px;"><li>Flagged incomplete or mismatched transactions cleared before filing</li><li>No summary treated as final until the list is nil</li><li>Without it a return omits invoices your customer already claimed credit on</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /> <path d="m9 12 2 2 4-4" /> </svg></div>
  <h3 class="feature-title">Audit trail evidence that exists</h3>
  <p class="feature-text">You keep your company's books on an edit log capable TallyPrime release. The record of changes that company accounting software must retain is genuinely there.</p><ul style="margin-top:12px;"><li>Kept on an Edit Log capable TallyPrime release</li><li>Meets Rule 3(1) of the Companies (Accounts) Rules 2014</li><li>Without it the gap cannot be filled backwards on passed entries</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M3 3v16a2 2 0 0 0 2 2h16" /> <path d="M18 17V9" /> <path d="M13 17V5" /> <path d="M8 17v-3" /> </svg></div>
  <h3 class="feature-title">Entry and alteration rights separated</h3>
  <p class="feature-text">We set Tally security levels so the person passing vouchers is not the person able to alter or delete them.</p><ul style="margin-top:12px;"><li>Security levels split voucher entry from alteration and deletion rights</li><li>Set within the Tally masters and security step</li><li>Without it a correction and a concealment look identical in the file</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M10 18v-7" /> <path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z" /> <path d="M14 18v-7" /> <path d="M18 18v-7" /> <path d="M3 22h18" /> <path d="M6 18v-7" /> </svg></div>
  <h3 class="feature-title">Backups held off the machine</h3>
  <p class="feature-text">Your company file lives on an office desktop. We take a dated backup every period and store it away from that machine.</p><ul style="margin-top:12px;"><li>Dated backup taken each period during close and reporting</li><li>Stored away from the office machine holding the file</li><li>Without it one failed drive loses the year to a rebuild</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" /> <path d="M14 2v5a1 1 0 0 0 1 1h5" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></div>
  <h3 class="feature-title">A period that stays closed</h3>
  <p class="feature-text">Once you have the trial balance, profit and loss, balance sheet and outstanding reports, we restrict the period against alteration.</p><ul style="margin-top:12px;"><li>Period restricted once the core reports are drawn</li><li>Covers trial balance, profit and loss, balance sheet and outstanding</li><li>Without it reported figures move and two printouts disagree</li></ul>
</article>
</div>
    </div>
</section>




<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Choose Patron Accounting for Tally Prime Accounting Services</h2>
            <p class="section-intro">Five things a founder can check before handing over the books. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>Tally data kept clean, masters rationalised and deduplicated</strong><p>We keep your Tally data clean by rationalising masters and removing duplicate ledgers and stock items. Across 15+ years and 3,000+ businesses served, an orderly company file is our baseline.</p></div>
                <div><strong><a href="/blog/tally-prime-vs-erp-9">TallyPrime Edit Log</a> enabled and evidenced for Rule 3(1)</strong><p>We enable the TallyPrime Edit Log and keep evidence that satisfies the Rule 3(1) audit-trail requirement. Meeting statutory checks like this runs through our 25,000+ filings completed.</p></div>
                <div><strong>e-invoicing IRP, e-way bill portal and bank imports connected</strong><p>We connect your TallyPrime to the <a href="/blog/eway-bill-einvoice-in-tally">e-invoicing IRP, the e-way bill portal</a> and your bank imports. We work in the tool you run; we also work across Zoho Books and Xero.</p></div>
                <div><strong>Monthly ledger lock and audit-trail export</strong><p>Each month we lock the ledger once reconciled and hand you an audit-trail export for your records. The monthly close discipline shows in our 4.9 star Google rating.</p></div>
                <div><strong>Tally Prime users among the 3,000+ we serve</strong><p>Businesses running Tally Prime, from single-user setups to multi-company files, sit among the 3,000+ we have served since 2019. Our in-house team of CAs and CS brings 15+ years of experience.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>



<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tally Prime vs Cloud Accounting Software</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Tally Prime</th><th>Cloud Accounting Software</th></tr></thead>
                    <tbody>
                        <tr><td>Deployment</td><td>Desktop on-premise, data held on the local machine</td><td>Hosted online, accessible from any browser or device</td></tr>
                        <tr><td>GST and e-invoice</td><td>Deep native GST, mature e-invoice and e-way generation</td><td>GST and e-invoice built in, quality varies by platform</td></tr>
                        <tr><td>Bank feeds and automation</td><td>Manual entry heavy, automated feeds limited without add-ons</td><td>Automated bank feeds and workflow rules reduce manual entry</td></tr>
                        <tr><td>Multi-user and remote</td><td>Remote access needs cloud hosting or Tally add-on</td><td>Multi-user remote access native to the platform</td></tr>
                        <tr><td>Data control and offline</td><td>Full local data control, works offline without internet</td><td>Depends on internet, data held on vendor servers</td></tr>
                        <tr><td>Pricing model</td><td>One-time licence plus optional annual renewal for updates</td><td>Recurring subscription, cost scales with users and plan</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">A tally accountant suits businesses wanting offline control and a one-time licence. Cloud accounting software suits distributed teams needing remote access and automation. Choose by whether your team works from one office or many. Compare <a href="/zoho-books-accounting">Zoho Books Accounting</a>.</td></tr>

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
            <h2 class="section-title">Legal and Regulatory Framework for Tally Prime Accounting</h2>
            <div class="content-text">
                
                <p>Tally books are kept to the same accounting standards as any other, but the provision that makes the software itself a compliance matter is Rule 3(1) of the Companies (Accounts) Rules: since April 2023 the tool has to keep an unbroken edit log, and Section 128 requires the file it lives in to survive eight years. That is what turns a data-entry package into statutory infrastructure.</p>
<p>So maintaining a Tally company file is governed work. The records must stay retrievable and legible, the invoices must meet the tax-invoice rules, and the archive cannot be pruned to save space. That is why controls like <a href="/glossary/accounting/tally-vault">Tally Vault</a> over access and a disciplined <a href="/glossary/accounting/tally-xml-export">Tally XML Export</a> for backups matter to the auditor, not just the operator. A Tally accountant keeps the file against the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">The software keeps an audit trail of every change with its date, switched on all year and never disabled - the single hard test the tool must pass.</span></li><li><span class="al-t"><strong>Rule 3, Companies (Accounts) Rules 2014 with Section 128(1)</strong></span><span class="al-d">Books held electronically remain accessible in India, legible and backed up, and retrievable for the eight-year retention period - supported by <a href="/glossary/accounting/remote-tally-access">Remote Tally Access</a>.</span></li><li><span class="al-t"><strong>Section 31 with Rule 48, CGST Act 2017</strong></span><span class="al-d">Invoices carry the prescribed tax-invoice fields, and above Rs 5 crore turnover an IRN is generated through the e-invoice portal.</span></li><li><span class="al-t"><strong>Section 128(5), Companies Act 2013</strong></span><span class="al-d">The ledger and its vouchers are preserved for eight years, so a version upgrade or a data repair cannot break the historical trail.</span></li><li><span class="al-t"><strong>Section 44AA, Income-tax Act 1961</strong></span><span class="al-d">The obligation to keep complete books applies to whichever entity runs the file, company or non-corporate alike. Cloud alternatives are covered on the <a href="/zoho-books-accounting">Zoho Books page</a>.</span></li></ul><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></p>

            </div>
        </div>
    </div>
</section>


<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Tally Accounting FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on tally accounting scope, process, documents and pricing for Indian businesses.</p>
                    <a class="faq-expanded__cta" href="/contact">Still have a question? Talk to a CA &rarr;</a>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Tally Accounting',
                        'title'    => 'Ask about your books',
                        'subtitle' => 'Send your requirement for a scoped quote.',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How is Tally useful for a business and its accountant?</h3>
  <div class="faq-expanded__a"><p>Tally Prime handles voucher entry, ledgers, inventory, GST, TDS, payroll and MIS inside a single file, which is why it remains the default for Indian SMEs. For the accountant it removes manual computation, applies GST on each voucher, produces GSTR-1 and GSTR-3B data for filing, and generates the trial balance and financial statements an auditor needs without rework.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can books be maintained in Tally without daily input from the client team?</h3>
  <div class="faq-expanded__a"><p>Yes. Your team scans or forwards invoices to a shared folder or mailbox once, and our team posts the entries directly into your Tally company file, so no daily coordination is needed. A weekly query sheet covers anything unclear. Most clients spend around an hour a month on accounting once the document flow and approval routine are settled.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How is Tally data accessed when it sits on an office computer?</h3>
  <div class="faq-expanded__a"><p>Office hosted Tally data is accessed through Tally on cloud or AWS hosting, through a secure remote desktop session on your machine, or by exchanging encrypted company file backups on an agreed schedule where remote access is not permitted. Hosting is the cleanest option because both teams work on one live file and no version conflict arises at month end.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What does outsourced Tally accounting cost per month?</h3>
  <div class="faq-expanded__a"><p>Outsourced Tally accounting generally costs Rs 6,000 to Rs 12,000 a month for a small business with up to 150 vouchers, and Rs 12,000 to Rs 30,000 a month for higher volumes, multiple GSTINs or payroll processing. The Tally licence and hosting charges are separate and paid directly to Tally or the hosting provider, so there is no markup on software.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can you clean up an existing Tally company file with wrong balances?</h3>
  <div class="faq-expanded__a"><p>Yes. A cleanup starts with a health check of opening balances, duplicate and unused ledgers, unreconciled bank entries, negative stock and GST mismatches, after which corrections are posted with a documented audit trail rather than by silently editing history. A single company cleanup usually takes 2 to 4 weeks and ends with a signed off trial balance you can rely on.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How are GST returns filed using Tally Prime data?</h3>
  <div class="faq-expanded__a"><p>GST returns are filed by exporting the GSTR-1 and GSTR-3B data from Tally Prime, running the input credit reconciliation against GSTR-2B, resolving supplier mismatches, then uploading through the GST portal or a filing utility. Errors flagged inside Tally, such as a missing HSN code or an incorrect place of supply, are corrected in the voucher before the return goes out.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Should a business move from Tally to a cloud accounting system?</h3>
  <div class="faq-expanded__a"><p>Move to cloud accounting if you have remote teams, multiple locations, heavy bank and payment gateway feeds, or investors who want live access, and stay on Tally Prime if you have deep inventory needs, a settled in house entry team and no remote access requirement. A migration to Zoho Books normally takes 3 to 4 weeks including two years of history.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How is Tally data backed up and protected?</h3>
  <div class="faq-expanded__a"><p>Tally data is backed up daily to encrypted storage with a retention period agreed with you, and access runs through named user logins with Tally security levels, so entry staff cannot alter closed periods or open payroll data. Where the file is hosted, the hosting provider's access logs add a second record of who opened the company and when.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How long does it take to migrate books into Tally Prime and go live?</h3>
  <div class="faq-expanded__a"><p>A standard migration into Tally Prime takes 2 to 4 weeks: chart of accounts and stock item design in the first week, master and opening balance import in the second, then parallel entry and reconciliation before go live. Carrying prior year transaction history rather than opening balances alone adds roughly another week depending on the volume being imported.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can you configure Tally for multi godown inventory and cost centre reporting?</h3>
  <div class="faq-expanded__a"><p>Yes. Multi godown inventory, cost centres, branch wise reporting and user level security are configured inside Tally Prime so each user sees only the vouchers and reports their role requires. Godown wise stock and cost centre profitability then flow straight into the monthly MIS with no manual reallocation, which is what makes branch level margin visible to management.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>Eight financial years of books must be preserved under the Companies Act, so the file is closed properly, not merely updated. You send it, or give access, with bank statements and the month's purchase and sales documents. Back comes a closed period: vouchers entered and verified, ledgers regrouped so the balance sheet.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tally Accounting Deadlines You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p>Patron tracks each against your books so nothing is reconstructed after the fact. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Tally Prime Accounting Services with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">The proprietor ends up inside the company file late at night, entering the month&#x27;s purchase bills personally, because the data entry assistant left and nobody was replaced. Work done that way is entered, never reviewed, and the errors survive into the balance sheet. A Tally accountant takes the file off the owner&#x27;s evenings and closes it properly.</p>
<p style="color:rgba(255,255,255,0.88);">Credit decisions follow from that directly. Once outstanding bills are matched against the receipts that actually settled them, Tally accounting services expose a party who has quietly stretched well beyond agreed terms. The credit limit can then be tightened before the next order is accepted rather than after it.</p>
<p style="color:rgba(255,255,255,0.88);">Where the company file physically lives has to be established at the outset, since TallyPrime runs on a desktop in your office. How we reach it, and how many companies sit inside it, follows, as does any case for <a href="/zoho-books-accounting">keeping the ledger in a browser</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20tally%20accounting" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tally%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Tally%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Tally Accounting Near You</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Local teams for tally accounting in these cities.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Cities We Serve</div><div class="pa-block-sub">On-ground teams</div><div class="pa-city-grid"><a href="https://www.patronaccounting.com/tally-accounting/ahmedabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M7 21V12h10v9"/><path d="M7 12a5 5 0 0 1 10 0"/><path d="M10 21v-3a2 2 0 1 1 4 0v3"/><path d="M4 21V8M20 21V8"/><path d="M3 8a1 1 0 1 1 2 0M19 8a1 1 0 1 1 2 0"/></svg></div><div><div class="pa-card-title">Ahmedabad</div><div class="pa-card-sub">Gujarat</div></div></a></div></div>
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

<script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>








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
