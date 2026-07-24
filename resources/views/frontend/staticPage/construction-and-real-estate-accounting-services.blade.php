@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Accounting for Construction and Real Estate Companies | Patron Accounting</title>
    <meta name="description" content="Project-wise books - every cost traceable to a tower, wing and unit. Know where you stand before your accountant tells you. Get a compliance review.">
    <link rel="canonical" href="https://www.patronaccounting.com/construction-and-real-estate-accounting-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Accounting for Construction and Real Estate Companies | Patron Accounting">
    <meta property="og:description" content="Project-wise books - every cost traceable to a tower, wing and unit. Know where you stand before your accountant tells you. Get a compliance review.">
    <meta property="og:url" content="https://www.patronaccounting.com/construction-and-real-estate-accounting-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/construction-and-real-estate-accounting-services-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accounting for Construction and Real Estate Companies | Patron Accounting">
    <meta name="twitter:description" content="Project-wise books - every cost traceable to a tower, wing and unit. Know where you stand before your accountant tells you. Get a compliance review.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/construction-and-real-estate-accounting-services-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services/#service",
  "name": "Accounting for Construction and Real Estate Companies",
  "description": "Accounting for a construction company runs project-wise, with every cost traceable to a tower, wing and unit. Revenue recognition follows Ind AS 115 on the basis your project structure actually supports.",
  "image": "https://www.patronaccounting.com/images/construction-and-real-estate-accounting-services-og.webp",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Construction and Real Estate Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services"
  },
  "areaServed": {
    "@type": "Country",
    "name": "India",
    "sameAs": "https://en.wikipedia.org/wiki/India"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Accounting for Construction and Real Estate Companies",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Accounting for Construction and Real Estate Companies",
          "description": "Accounting for a construction company runs project-wise, with every cost traceable to a tower, wing and unit. Revenue recognition follows Ind AS 115 on the basis your project structure actually supports.",
          "serviceType": "Construction and Real Estate Accounting Service"
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
      "name": "Construction & Real Estate Accounting",
      "item": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services"
    }
  ],
  "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What type of accounting is used in construction?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Construction uses project based accrual accounting, where every contract is a separate cost centre and revenue is recognised by stage of completion rather than when money is received. Work in progress, retention money, mobilisation advances and running account bills are tracked contract by contract. Companies reporting under Ind AS apply Ind AS 115, and companies on AS follow AS 7 for contract revenue."
      }
    },
    {
      "@type": "Question",
      "name": "How do you keep project wise books for multiple sites?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Each site is set up as a separate cost centre in Tally, Zoho Books or your ERP, so material, labour, subcontractor and overhead costs are tagged at the point of entry. You receive a project wise cost to date, billed to date and margin statement every month, and the consolidated accounts are built from those without any manual regrouping at year end."
      }
    },
    {
      "@type": "Question",
      "name": "How do you handle RERA reporting and project escrow account tracking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For RERA registered projects the designated project bank account is tracked separately, with collections from allottees mapped into it and withdrawals monitored against the certification requirement set by the regulator. Books are kept project wise so the periodic disclosures and the certificates your CA, architect and engineer must sign can be produced from the ledgers without reconstruction."
      }
    },
    {
      "@type": "Question",
      "name": "What is construction accounting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Construction accounting tracks cost and revenue by individual project instead of only at company level, because every site carries its own budget, billing cycle and margin. It covers work in progress valuation, subcontractor bills, retention money, material issued from stores, plant and machinery cost and GST on works contracts. Ordinary financial accounting closes a clean trial balance but cannot tell you which site is losing money."
      }
    },
    {
      "@type": "Question",
      "name": "What is the role of an accountant in real estate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A real estate accountant keeps project wise books for a developer, covering land and approval cost capitalisation, collections from allottees, movement in the RERA designated project bank account, GST on bookings, TDS on contractor and professional payments, and revenue recognition on handover of units. The role also produces the ledgers behind periodic RERA disclosures and the schedules a statutory auditor tests at year end."
      }
    },
    {
      "@type": "Question",
      "name": "How do you track subcontractor bills, retention money and TDS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Subcontractor bills are booked against the project cost centre with the measurement sheet reference, retention money is parked in a separate liability account and released only when the defect liability period ends, and TDS is deducted at the applicable contractor rate and deposited monthly. Mobilisation advances are tracked and recovered proportionately across running account bills."
      }
    },
    {
      "@type": "Question",
      "name": "What GST issues arise for real estate developers and how do you manage them?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Developers face input tax credit restrictions on residential projects, reverse charge where procurement from registered suppliers falls short, and different treatment for units sold before and after completion. We compute the tax on each booking correctly, prepare the credit reversal working where units are sold after the completion certificate, and reconcile collections against the returns filed every month."
      }
    },
    {
      "@type": "Question",
      "name": "What does construction and real estate accounting cost per month?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Construction and real estate accounting generally costs Rs 20,000 to Rs 75,000 a month. Pricing follows the count of active projects, sites and GST registrations, not turnover, so a single project developer sits near the lower end. RERA reporting support, escrow reconciliation and year end finalisation are quoted separately once we have seen the project structure."
      }
    },
    {
      "@type": "Question",
      "name": "Can you take over part completed project books in the middle of a year?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, mid year takeover of part completed project books is routine and we normally go live within 15 working days. Work starts from the last reconciled trial balance, project wise cost cards are rebuilt from purchase and subcontractor records, collections are reconciled with the project account, and you get a written list of unrecorded items before routine processing begins."
      }
    },
    {
      "@type": "Question",
      "name": "How are land, approval and development costs carried in the books?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Land cost, approval and sanction fees, development expenses, eligible borrowing costs and site overheads are accumulated as project inventory and released to the profit and loss account as revenue is recognised. Costs are allocated across towers or phases on a defensible basis such as saleable area, and the allocation working is documented so your auditor can test it."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services",
  "name": "Accounting for Construction and Real Estate Companies",
  "description": "Project-wise books - every cost traceable to a tower, wing and unit. Know where you stand before your accountant tells you. Get a compliance review.",
  "url": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/construction-and-real-estate-accounting-services-og.webp"
  },
  "image": "https://www.patronaccounting.com/images/construction-and-real-estate-accounting-services-og.webp",
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
    "@id": "https://www.patronaccounting.com/construction-and-real-estate-accounting-services/#breadcrumb"
  }
}
</script>
@endsection

<link rel="stylesheet" href="/css/patron-cluster.css">

@section('content')
<main>


<nav aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="https://www.patronaccounting.com" style="color:var(--text-muted);text-decoration:none;font-weight:500;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="https://www.patronaccounting.com/accounting-services/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Accounting Services</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">Construction & Real Estate Accounting Services</span></li>
        </ol>
    </div>
</nav>


<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 3,000+ Businesses
                    </div>
                        <div class="hero-badge" style="margin-left:8px;background:#EEF4EC;color:#1B4D3E;border-color:#CFE3D2;"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l8 4v6c0 5-3.4 8.3-8 10-4.6-1.7-8-5-8-10V6z"/></svg> RERA 70%-account ready</div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Accounting for Construction and Real Estate Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Project-wise costing:</span> Every rupee of material, labour and subcontractor cost traced to its tower, wing and unit, not pooled across sites.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>RERA 70% account discipline:</span> Collections and withdrawals mapped to the RERA designated account, ready for quarterly engineer, architect and CA certification.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Revenue by stage of completion:</span> Percentage-of-completion revenue under Ind AS 115 / AS 7, with WIP, unbilled revenue and retention tracked per project.</p>
                        </div>
                        </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Construction%20&%20Real%20Estate%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Construction%20&%20Real%20Estate%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20construction%20and%20real%20estate%20accounting%20with%20RERA%20and%20project-wise%20books" target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Construction & Real Estate Accounting'/>
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
                                <option value="construction-and-real-estate-accounting-services" selected>Construction & Real Estate Accounting</option>
                                    <option value="accounting-services">Accounting Services (All)</option>
                                    <option value="corporate-compliance-for-construction-and-real-estate">Compliance for Construction</option>
                                    <option value="itr-for-construction-firms">ITR for Construction Firms</option>
                                    <option value="payroll-services-for-construction-real-estate-industry">Payroll for Construction</option>
                                    <option value="backlog-bookkeeping-catch-up-services">Bookkeeping Catch-up</option>
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


<section class="testimonials-section"><div class="section-container"><div class="section-header"><h2>Real Stories from Real People</h2><p>Verified Google reviews from founders and businesses Patron works with across India.</p></div><div class="testi-loading" id="testiLoading" style="display:none;"></div><div class="testimonial-slider" id="testimonialSlider" style="display:block;"></div><div class="reviews-cta" style="margin-top:30px;"><div class="reviews-cta-content"><div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><div class="reviews-cta-text"><h3 class="text-white">Join 3,000+ Builders and Businesses on Patron</h3><p>Rated 4.9 on Google - trusted for construction &amp; real-estate accounting since 2019.</p></div></div><a href="tel:+919459456700" class="btn-cta" style="text-decoration:none;">Talk to an Expert <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a></div></div></section>


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
                    <a href="#procedure-section" class="toc-btn">Process</a><a href="#tool-section" class="toc-btn">Calculator</a>
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
            <h2 class="section-title">What Construction and Real Estate Accounting Covers — Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Construction & Real Estate Accounting Services at a Glance</strong></p>
                    <p>Accounting for a construction company runs project-wise, with every cost traceable to a tower, wing and unit. Revenue recognition follows Ind AS 115 on the basis your project structure actually supports. Patron reconciles the RERA 70% escrow account, maintains the withdrawal certification trail and reports cost-to-complete each month. Appropriate for RERA-registered developers, contractors and joint-development partners.</p>
                </div>
                <p>Your site team stays with the measurement books, the running account bills and the vendor certifications, because nobody at a desk should be signing off work they have not seen. Patron takes the ledger side: coding each bill to its project and cost head, posting retention and mobilisation advances correctly, running each month's close and preparing the budget-versus-actual workings your management reviews before committing further spend. How project funds must be held sets the boundary on the banking side.</p>
                <p>Scale here is set by the portfolio: how many registered projects run at once, how many SPVs and joint-development partners sit in the group, and whether contracts are fixed-price or cost-plus with escalation clauses. Real estate accounting services cover the books, the escrow schedules and the reporting pack each month. Returns lodged on the government GST portal and RERA filings themselves are taken on their own terms.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Construction and Real Estate Accounting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>By the year&#x27;s close, the accounts of a developer must value each tower, wing and unit at true cost, and count revenue only as it is genuinely earned. Accounting for construction company records is the practice that delivers that position. It ties every supplier bill to a project and cost head, and keeps retention and mobilisation advances posted correctly.</p>
<p>The engagement also measures how far each project has progressed, matching recognised revenue to the work completed rather than to the cash a buyer has paid in. Construction accounting services maintain the project ledgers alongside the schedules for buyer money held in a designated bank account, and report the cost still to be spent. Where a plot is built under a shared arrangement between landowner and builder, the books keep each side&#x27;s entitlement separate. Accounting for construction company work is confined to the ledger; the statutory GST and income-tax filings sit with their own teams.</p><div class="highlight-box"><strong>POCM under Ind AS 115 / AS 7.</strong> Construction contracts recognise revenue by <em>percentage of completion</em> - cost incurred to date over total estimated cost - not on handover. Patron measures each project against its engineer-certified stage, so revenue, WIP and unbilled amounts move with real progress and survive audit.</div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Construction & Real Estate Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/accounting/percentage-of-completion-method-pocm">Percentage of Completion Method (POCM)</a></span><span class="al-d">Recognises project revenue in proportion to how much of the work is finished.</span></li><li><span class="al-t"><a href="/glossary/accounting/rera-70-escrow-compliance">RERA 70% Escrow Compliance</a></span><span class="al-d">Rule requiring seventy per cent of buyer money to stay in a designated project account.</span></li><li><span class="al-t"><a href="/glossary/accounting/joint-development-agreement-jda">Joint Development Agreement (JDA)</a></span><span class="al-d">Contract where a landowner and builder share a project&#x27;s revenue or built area.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/what-is.webp" alt="What Is Construction and Real Estate Accounting. By the year's close, the accounts of a developer must value each" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Construction and Real Estate Accounting in India?</h2>
            <div class="content-text">
                
                <p>Accounting for a construction company becomes unavoidable the moment a project is registered under RERA and buyer money starts flowing through a designated account. It suits developers, civil contractors and joint-development partners whose books must run project by project, not as one pooled ledger.</p>
  <ul>
    <li>RERA-registered residential developers who have just opened a designated project account and must certify every withdrawal from it.</li>
    <li>Civil contractors billing employers on running account certificates, waiting months on retention held back from each bill.</li>
    <li>Promoters running several registered projects at once, each needing its own <a href="/blog/wip-costing-real-estate-developers">phase-wise WIP costing</a>.</li>
    <li>Partners in <a href="/blog/jda-accounting-taxation-real-estate">joint development arrangements</a> sharing land, cost and overheads across a group of SPVs.</li>
    <li>Builders who pre-sell flats and take booking advances long before a tower is ready to hand over.</li>
    <li>Real estate firms drawing a sanctioned project loan in tranches tied to each construction stage.</li>
    <li>Contractors engaging large site labour and subcontractor gangs whose payments carry deduction at source.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Construction and Real Estate Accounting Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Project cost sheet and WIP accounting</td><td>Land, approvals, materials, labour and finance cost captured into a project-wise cost sheet and work-in-progress statement for every site <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Percentage of completion revenue reporting</td><td>Revenue recognised on stage of completion against the engineer's certificate and budgeted cost, so recognised income survives later budget revisions <span class="badge-included">Quarterly</span></td></tr>
                        <tr><td>RERA designated account monitoring</td><td>The 70% designated account tracked against project withdrawals under the <a href="/blog/rera-70-percent-escrow-rule">RERA 70% escrow rule</a>, with schedules ready for the Form 3 certificate <span class="badge-included">Quarterly</span></td></tr>
                        <tr><td>Running account bills and retention</td><td>Running account bills raised on employers and retention money tracked with release dates, giving <a href="/blog/gst-under-construction-vs-completed-property">construction accounting</a> services that hold receivables tight <span class="badge-included">On event / as needed</span></td></tr>
                        <tr><td>Customer collections and advance tracking</td><td>Milestone collections reconciled against the payment schedule and unadjusted advances kept out of revenue, supporting real estate accounting services for developers <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>Monthly close for construction company</td><td>Full accounting for construction company each month covering project ledgers, loan drawdowns, contractor deductions and management accounts across all sites <span class="badge-included">Monthly</span></td></tr>

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
            <h2 class="section-title">How Construction and Real Estate Accounting Works — Our Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How project costs become books you can defend, step by step from the project cost sheet to loan-drawdown tracking.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Building the project cost sheet</h3>
    <p class="step-description">Each project is run as its own cost centre: land and approvals, materials, labour, subcontract, site overheads and finance cost, all kept apart from corporate expenses. Shared costs are allocated on a basis we agree once and apply consistently.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-1-building-the-project-cost-sheet.webp" alt="Illustration for Building the project cost sheet: Each project is run as its own cost centre: land and approvals, materials," loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Measuring stage of completion</h3>
    <p class="step-description">Cost incurred to date is set against the latest budgeted total project cost and cross-checked to the architect's or engineer's completion certificate. Where the budget has been revised, the effect on revenue already recognised is worked out and disclosed.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-2-measuring-stage-of-completion.webp" alt="Illustration for Measuring stage of completion: Cost incurred to date is set against the latest budgeted total project cost" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">RERA designated account discipline</h3>
    <p class="step-description">Collections from allottees are split so that the prescribed share reaches the designated project account, and withdrawals are supported by the engineer, architect and chartered accountant certification the Act requires. The account statement is reconciled to the certified position.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-3-rera-designated-account-discipline.webp" alt="Illustration for RERA designated account discipline: Collections from allottees are split so that the prescribed share" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">RA bills and retention tracking</h3>
    <p class="step-description">Running account bills are tied back to measurement book abstracts and to what the employer actually certified, so the difference between billed and certified is visible. Retention and security deposits are held as receivable with their release dates.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-4-ra-bills-and-retention-tracking.webp" alt="Illustration for RA bills and retention tracking: Running account bills are tied back to measurement book abstracts and to" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Collections against milestone schedule</h3>
    <p class="step-description">Each allottee's payment schedule is compared to what has actually been demanded and received, so overdue milestones and unbilled construction stages surface. Amounts collected ahead of the stage they relate to are carried forward, not taken to revenue.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-5-collections-against-milestone-schedule.webp" alt="Illustration for Collections against milestone schedule: Each allottee's payment schedule is compared to what has actually" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Site labour and contractor deduction</h3>
    <p class="step-description">The site muster and contract-labour register are reconciled to the payroll and to provident fund and insurance challans, including labour engaged through contractors. Payments to work contractors are put through the contract deduction provision.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-6-site-labour-and-contractor-deduction.webp" alt="Illustration for Site labour and contractor deduction: The site muster and contract-labour register are reconciled to the" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">Project loan drawdown tracking</h3>
    <p class="step-description">Drawdowns are traced against the sanctioned purpose and the cost heads they funded, and interest servicing is recorded project by project. This keeps the lender's end-use position and the project cost sheet telling the same story.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/construction-and-real-estate-accounting-services/step-7-project-loan-drawdown-tracking.webp" alt="Illustration for Project loan drawdown tracking: Drawdowns are traced against the sanctioned purpose and the cost heads they" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>

        </div>
    </div>
</section>



<section class="content-section" id="tool-section" style="background:linear-gradient(180deg,var(--blue-lighter) 0%,#ffffff 100%);">
    <div class="content-container">
        <div class="text-content">
            <div style="text-align:center;max-width:760px;margin:0 auto 26px;">
                <span style="display:inline-block;font-size:12px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--orange);background:var(--orange-light);padding:6px 14px;border-radius:999px;">Free interactive tool &middot; Ind AS 116</span>
                <h2 class="section-title" style="margin:14px 0 10px;">Convert a Site or Office Lease into an Ind AS 116 ROU Asset</h2>
                <p style="color:var(--text-secondary);font-size:16px;line-height:1.6;margin:0;">Site cabins, plant, equipment and office leases running beyond 12 months sit on your balance sheet under Ind AS 116. Enter your lease terms below to compute the Right-of-Use asset, lease liability, the year-wise amortisation schedule and the journal entries.</p>
            </div>
            <div style="max-width:920px;margin:0 auto;border:1px solid #dfe5ee;border-radius:18px;overflow:hidden;background:#fff;box-shadow:0 12px 34px rgba(27,54,93,.12);">
                <div style="display:flex;align-items:center;gap:10px;padding:14px 20px;background:var(--blue);color:#fff;"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:0 0 auto;"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="8" y2="10"/><line x1="12" y1="10" x2="12" y2="10"/><line x1="16" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="8" y2="14"/><line x1="12" y1="14" x2="12" y2="14"/><line x1="16" y1="14" x2="16" y2="18"/><line x1="8" y1="18" x2="12" y2="18"/></svg><span style="font-weight:700;font-size:15px;">Lease Accounting Calculator (Ind AS 116)</span>
                    <a href="/tools/lease-accounting-calculator-ind-as-116" target="_blank" rel="noopener" style="margin-left:auto;color:#fff;font-size:13px;font-weight:600;text-decoration:none;white-space:nowrap;opacity:.92;">Open full tool &#8599;</a>
                </div>
                <iframe id="leaseToolFrame" src="/tools/lease-accounting-calculator-ind-as-116?embed=1" title="Convert a Site or Office Lease into an Ind AS 116 ROU Asset" loading="lazy" scrolling="no" style="width:100%;border:0;min-height:880px;display:block;"></iframe>
            </div>
            <p style="text-align:center;margin:16px auto 0;font-size:13px;color:var(--text-muted);max-width:760px;">Estimates only, computed in your browser &mdash; not a substitute for a signed valuation or auditor sign-off.</p>
        </div>
    </div>
</section>
<script>window.addEventListener("message",function(e){var d=e.data;if(d&&d.patronTool==="lease-accounting-calculator-ind-as-116"&&d.height){var f=document.getElementById("leaseToolFrame");if(f){f.style.minHeight=d.height+"px";}}});</script>
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Construction and Real Estate Accounting</h2>
            <div class="content-text">
                
                <p>Project accounting turns on cost incurred against cost expected, so the work-in-progress statement and the current budget revision come before anything else.</p>
<ul>
    <li>Project-wise cost sheet / work-in-progress statement (land, approvals, materials, labour, overheads, finance cost)</li>
    <li>Budgeted total project cost with the latest revision and the architect&#x27;s / engineer&#x27;s stage-of-completion certificate</li>
    <li>Agreements for sale / allotment letters with the payment-milestone schedule and the customer collection register</li>
    <li>RERA designated (70%) separate account statements, plus the chartered accountant&#x27;s Form 3 certificate supporting each withdrawal</li>
    <li>Running Account (RA) bills / interim payment certificates raised on the employer, with measurement-book abstracts</li>
    <li>Retention money and security deposit / bank guarantee register with release dates</li>
    <li>Sales invoice register, purchase bills and bank statements for all project and corporate accounts</li>
    <li>Project loan sanction letters, drawdown and interest statements</li>
    <li>Payroll register with site-staff and contract-labour muster, PF/ESI challans</li>
</ul>

            </div>
        </div>
    </div>
</section>


<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Construction and Real Estate Accounting Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Land and JDA cost not apportioned across saleable units</td><td>Unit-level cost comes out wrong, so pricing and profit per flat are miscalculated from the start.</td><td>We apportion land and <a href="/glossary/accounting/joint-development-agreement-jda">joint development agreement</a> cost per saleable area for each unit.</td></tr>
                        <tr><td>Customer advances parked as income instead of liability</td><td>Booked revenue outpaces construction progress, overstating profit and distorting the project result for the period.</td><td>We hold advances as liabilities and release them to revenue only against certified progress.</td></tr>
                        <tr><td>Retention and mobilisation advances unreconciled with contractors</td><td>Vendor balances drift, so final running-account bill settlements throw up disputed sums.</td><td>Patron reconciles retention and running-account bills to each contractor ledger every month.</td></tr>
                        <tr><td>Input credit on under-construction and completed sales not split</td><td>Blocked ITC on completed-property sales is claimed by mistake, inviting reversal with interest.</td><td>We split input credit between under-construction and completed inventory according to the sale stage.</td></tr>
                        <tr><td>Unsold inventory carried at cost after project completion</td><td>Overvalued closing stock hides a fall in net realisable value and overstates the asset base.</td><td>Our team tests completed unsold units against realisable value and provisions any shortfall.</td></tr>

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
            <h2 class="section-title">Construction and Real Estate Accounting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one entity running a single project ledger</td><td>INR 3,499<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; several active projects with phase-wise WIP tracking</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multiple entities or sites with custom project reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">At <strong>INR 3,499</strong> the entry tier keeps books for one entity on a single project ledger. Fees move with the number of active projects and how deeply you track WIP, which our note on <a href="/blog/wip-costing-real-estate-developers">phase-wise WIP costing</a> unpacks. Accounting for a construction company is quoted by project load. Get a scope-based quotation on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Construction & Real Estate Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20construction%20and%20real%20estate%20accounting%20with%20RERA%20and%20project-wise%20books" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction and Real Estate Accounting Compliance Calendar 2026</h2>
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
                        <tr><td>Financial statements filing (Form AOC-4)</td><td>Within 30 days of the AGM (by 29 October 2026 for a 30 September AGM)</td><td>Companies filing audited financials with the ROC</td></tr>
                        <tr><td>Annual GST return GSTR-9 and reconciliation GSTR-9C</td><td>31 December 2026</td><td>GST-registered businesses above the annual-return and audit thresholds</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>For a builder the tax audit on 30 September and the AOC-4 by 29 October anchor the year, over a monthly GSTR-3B on the 20th. Project revenue needs a percentage-completion cut-off, with RA (running account) bills and work-in-progress tracked. Patron ties <a href="/blog/gst-under-construction-vs-completed-property">construction accounting</a> to each date so works-contract GST and RERA reporting stay in step. Get a filing-reminder schedule set up; call +91 94594 56700.</p>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Professional Construction and Real Estate Accounting Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M12 17V7" /> <path d="M16 8h-6a2 2 0 0 0 0 4h4a2 2 0 0 1 0 4H8" /> <path d="M4 3a1 1 0 0 1 1-1 1.3 1.3 0 0 1 .7.2l.933.6a1.3 1.3 0 0 0 1.4 0l.934-.6a1.3 1.3 0 0 1 1.4 0l.933.6a1.3 1.3 0 0 0 1.4 0l.933-.6a1.3 1.3 0 0 1 1.4 0l.934.6a1.3 1.3 0 0 0 1.4 0l.933-.6A1.3 1.3 0 0 1 19 2a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1 1.3 1.3 0 0 1-.7-.2l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.934.6a1.3 1.3 0 0 1-1.4 0l-.933-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-1.4 0l-.934-.6a1.3 1.3 0 0 0-1.4 0l-.933.6a1.3 1.3 0 0 1-.7.2 1 1 0 0 1-1-1z" /> </svg></div>
  <h3 class="feature-title">Revenue the employer has accepted</h3>
  <p class="feature-text">You report income on a contract at the value the employer has accepted. Whatever is still under argument is carried as a figure you know.</p><ul style="margin-top:12px;"><li>RA bills tied to measurement book abstracts and employer certification</li><li>income reported at the value the employer has accepted</li><li>Without it, the unaccepted portion returns as an unexplained receivable</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M10 12h4" /> <path d="M10 8h4" /> <path d="M14 21v-3a2 2 0 0 0-4 0v3" /> <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2" /> <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16" /> </svg></div>
  <h3 class="feature-title">Retention money with release dates</h3>
  <p class="feature-text">You hold retention and security deposits as receivables, each carrying its release date, with bank guarantees tracked alongside.</p><ul style="margin-top:12px;"><li>retention and security deposit register with release dates</li><li>bank guarantees tracked alongside each receivable</li><li>Without it, released retention nobody claims because nobody knows it exists</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M13.744 17.736a6 6 0 1 1-7.48-7.48" /> <path d="M15 6h1v4" /> <path d="m6.134 14.768.866-.5 2 3.464" /> <circle cx="16" cy="8" r="6" /> </svg></div>
  <h3 class="feature-title">Advance collections kept out of revenue</h3>
  <p class="feature-text">We carry forward money taken from allottees ahead of the construction stage it relates to, rather than show it as earned.</p><ul style="margin-top:12px;"><li>amounts collected ahead of their stage carried forward, not to revenue</li><li>profit shown only against work already built</li><li>Without it, decisions taken on profit not yet earned</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" /> <circle cx="12" cy="12" r="3" /> </svg></div>
  <h3 class="feature-title">Cost separated project by project</h3>
  <p class="feature-text">Land, approvals, materials, labour, subcontract, site overheads and finance cost are held per project, with shared costs on one agreed basis.</p><ul style="margin-top:12px;"><li>each project run as its own cost centre</li><li>shared costs allocated on one agreed basis</li><li>Without it, a weak project masked by a strong one</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" /> <path d="M14 2v5a1 1 0 0 0 1 1h5" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></div>
  <h3 class="feature-title">Revenue that survives budget change</h3>
  <p class="feature-text">A revised cost estimate on a tower flows through to income already reported, so the stage you recognise against stays current.</p><ul style="margin-top:12px;"><li>budget revision flowed through to revenue already recognised</li><li>stage of completion measured against the current estimate</li><li>Without it, several years of correction land in one year</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M8 3 4 7l4 4" /> <path d="M4 7h16" /> <path d="m16 21 4-4-4-4" /> <path d="M20 17H4" /> </svg></div>
  <h3 class="feature-title">Contract labour evidenced in your records</h3>
  <p class="feature-text">Workers on your sites who sit on a contractor's rolls are still counted, costed and evidenced in your own records.</p><ul style="margin-top:12px;"><li>site muster and contract-labour register reconciled to payroll</li><li>reconciled to PF and ESI challans paid</li><li>Without it, principal employer liability for a contractor's unpaid dues</li></ul>
</article>
</div>
    </div>
</section>




<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Choose Patron Accounting for Construction & Real Estate Accounting</h2>
            <p class="section-intro">Five things a builder or developer can check before handing over the project ledgers. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>Project-wise books tracing cost to tower and unit</strong><p>With 15+ years across 3,000+ businesses, we keep project-wise books where every cost ties to a specific tower, wing and unit, so profitability is read one project at a time.</p></div>
                <div><strong>RERA 70% escrow reconciliation and withdrawal certification</strong><p>We reconcile the RERA 70% designated account and maintain the withdrawal certification trail, part of the 25,000+ filings completed, so each drawdown is evidenced before it is made.</p></div>
                <div><strong>Project accounting configured for percentage-of-completion reporting</strong><p>Your existing platform stays in place, whether Zoho Books, Xero, Tally Prime or Odoo, configuring project accounting so percentage-of-completion revenue and WIP report from your own ledger.</p></div>
                <div><strong>Project cost-to-complete and escrow statement every month</strong><p>Every month we produce a project cost-to-complete and escrow statement, with phase-wise WIP costing behind it, the reporting cadence behind our 25,000+ filings and 4.9 star Google rating.</p></div>
                <div><strong>RERA-registered developers among 3,000+ businesses served</strong><p>RERA-registered developers and contractors sit among the 3,000+ businesses we serve under our <a href="/accounting-bookkeeping-services">accounting and bookkeeping services</a>. Our in-house team of CAs and CS, with 15+ years of experience, handles them, reflected in our 4.9 star Google rating.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>
<section class="content-section" id="case-study-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Case Study: Untangling a Two-Tower RERA Project</h2>
            
            <div class="case-study-block">
                <div class="case-study-meta">A mid-sized residential developer in Pune - two RERA-registered towers, ~180 units, books maintained in Tally</div>
                <h3>The situation</h3>
                <p>Costs were pooled across both towers, so nobody could say which one was in profit. Running-account bill retention was untracked, the RERA 70% designated account had drifted from the ledger, and the auditor had flagged revenue booked ahead of the certified stage of completion.</p>
                <h3>What we did</h3>
                <ul><li>Rebuilt the chart of accounts so every cost carries a tower, wing and unit tag.</li><li>Reconstructed the RERA 70% designated account and tied every collection and withdrawal back to the ledger.</li><li>Re-cut revenue on percentage of completion under Ind AS 115 / AS 7, against the engineer-certified stage.</li><li>Set up a retention and RA-bill register with release dates, and put Section 194C TDS on a monthly cadence.</li></ul>
                <h3>The result</h3>
                <p class="case-study-result"><strong>Tower-wise margins visible for the first time; 100% of the RERA 70% account reconciled to the books</strong></p>
                <p>Within two monthly close cycles the developer could read profit per tower, the auditor accepted the revised revenue recognition without a qualification, and the quarterly RERA certification went through on the first submission.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Percentage of Completion vs Completed Contract</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Percentage of Completion</th><th>Completed Contract</th></tr></thead>
                    <tbody>
                        <tr><td>What it is</td><td>Revenue recognised progressively as the project is built, tracking cost or physical progress.</td><td>Revenue recognised only when the project or unit is complete and control passes.</td></tr>
                        <tr><td>When permitted</td><td>Required under AS 7 for construction contracts, and Ind AS 115 when over-time criteria are met.</td><td>Applies only where control transfers at a single point in time.</td></tr>
                        <tr><td>Profit reporting</td><td>Profit emerges each period, smoothing earnings across the build.</td><td>Profit lands in one period, causing lumpy and delayed results.</td></tr>
                        <tr><td>Estimates and risk</td><td>Depends on reliable cost-to-complete estimates that must be revisited each period.</td><td>Avoids estimation, but overstates WIP and hides margin until handover.</td></tr>
                        <tr><td>MIS and stakeholders</td><td>Gives lenders and RERA reviewers a live view of project progress.</td><td>Offers little interim insight, which weakens project monitoring.</td></tr>
                        <tr><td>Advances and escrow</td><td>Buyer advances stay a liability until the related progress is earned.</td><td>All collections sit as advances until completion, inflating liabilities.</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">The standard decides, not preference. Construction contracts follow percentage of completion under AS 7 and Ind AS 115; completed contract applies only where control passes once. Accounting for construction company treats POC as the norm. See phase-wise WIP costing.</td></tr>

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
            <h2 class="section-title">Legal and Regulatory Framework for Construction and Real Estate Accounting</h2>
            <div class="content-text">
                
                <p>The record a developer's statute demands is a project-level account that ties every rupee collected to the construction it funded, and the Real Estate (Regulation and Development) Act 2016 is what forces that account into being. Around it, the revenue standard decides when a sale becomes income and the tax law decides the value a unit is taxed at.</p>
<p>These pull in different directions, so the books have to serve all three at once. Buyer money is ring-fenced before it can be recognised as revenue, and a unit sold below its stamp-duty value is still taxed on that value. That is why <a href="/glossary/accounting/rera-70-escrow-compliance">RERA 70% Escrow Compliance</a> governs the cash and why a <a href="/glossary/accounting/joint-development-agreement-jda">Joint Development Agreement (JDA)</a> needs its own accounting treatment. Accounting for construction company records answers to the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>Real Estate (Regulation and Development) Act 2016</strong></span><span class="al-d">70% of buyer collections sit in a designated RERA escrow account and are drawn only against certified construction cost.</span></li><li><span class="al-t"><strong>Ind AS 115 / AS 7</strong></span><span class="al-d">Revenue is recognised over time as performance obligations are met, replacing the older <a href="/glossary/accounting/percentage-of-completion-method-pocm">Percentage of Completion Method (POCM)</a> for Ind AS reporters. AS reporters apply ICAI's Guidance Note on Accounting for Real Estate Transactions (revised 2012).</span></li><li><span class="al-t"><strong>Notification 03/2019-Central Tax (Rate)</strong></span><span class="al-d">Under-construction residential sales are taxed at 1% for affordable housing or 5% otherwise, without input tax credit and subject to the 80% inward-supply condition.</span></li><li><span class="al-t"><strong>Sections 43CA and 50C, Income-tax Act 1961</strong></span><span class="al-d">Where a sale price falls below the stamp-duty value beyond the safe harbour, the stamp value is deemed the consideration for tax.</span></li><li><span class="al-t"><strong>Section 128, Companies Act 2013</strong></span><span class="al-d">The books stay on accrual and double entry at the registered office, retained for eight years across the length of a project.</span></li><li><span class="al-t"><strong>Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">The audit trail is enabled, so a cost-to-complete revision or a unit re-pricing is logged. General filing runs from the <a href="/accounting-bookkeeping-services">hub page</a>.</span></li></ul>
<p class="compliance-note"><strong>Practical note:</strong> During a RERA or tax review, the escrow withdrawals are reconciled to certified construction cost, and a drawdown ahead of certification is the usual flag.</p><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://maharera.maharashtra.gov.in" target="_blank" rel="noopener">MahaRERA</a></p>

            </div>
        </div>
    </div>
</section>


<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Construction & Real Estate Accounting FAQs</h2>
                    <p class="faq-expanded__lead">Project accounting, the RERA 70% account, POCM revenue, retention, 194C TDS and GST on under-construction property.</p>
                    <a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    <form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate>
  <h3 class="faq-enquiry__title">Ask about your project books</h3>
  <p class="faq-enquiry__sub">Send your number of projects and RERA registrations for a scoped quote.</p>
  <p class="faq-enquiry__context">Enquiring about: <strong>Construction & Real Estate Accounting</strong></p>
  <input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required>
  <input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required>
  <div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div>
  <button class="faq-enquiry__btn" type="submit">Get a Callback</button>
  <p class="faq-enquiry__msg" role="status" aria-live="polite"></p>
</form>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What type of accounting is used in construction?</h3>
  <div class="faq-expanded__a"><p>Construction uses project based accrual accounting, where every contract is a separate cost centre and revenue is recognised by stage of completion rather than when money is received. Work in progress, retention money, mobilisation advances and running account bills are tracked contract by contract. Companies reporting under Ind AS apply Ind AS 115, and companies on AS follow AS 7 for contract revenue.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How do you keep project wise books for multiple sites?</h3>
  <div class="faq-expanded__a"><p>Each site is set up as a separate cost centre in Tally, Zoho Books or your ERP, so material, labour, subcontractor and overhead costs are tagged at the point of entry. You receive a project wise cost to date, billed to date and margin statement every month, and the consolidated accounts are built from those without any manual regrouping at year end.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How do you handle RERA reporting and project escrow account tracking?</h3>
  <div class="faq-expanded__a"><p>For RERA registered projects the designated project bank account is tracked separately, with collections from allottees mapped into it and withdrawals monitored against the certification requirement set by the regulator. Books are kept project wise so the periodic disclosures and the certificates your CA, architect and engineer must sign can be produced from the ledgers without reconstruction.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What is construction accounting?</h3>
  <div class="faq-expanded__a"><p>Construction accounting tracks cost and revenue by individual project instead of only at company level, because every site carries its own budget, billing cycle and margin. It covers work in progress valuation, subcontractor bills, retention money, material issued from stores, plant and machinery cost and GST on works contracts. Ordinary financial accounting closes a clean trial balance but cannot tell you which site is losing money.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What is the role of an accountant in real estate?</h3>
  <div class="faq-expanded__a"><p>A real estate accountant keeps project wise books for a developer, covering land and approval cost capitalisation, collections from allottees, movement in the RERA designated project bank account, GST on bookings, TDS on contractor and professional payments, and revenue recognition on handover of units. The role also produces the ledgers behind periodic RERA disclosures and the schedules a statutory auditor tests at year end.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How do you track subcontractor bills, retention money and TDS?</h3>
  <div class="faq-expanded__a"><p>Subcontractor bills are booked against the project cost centre with the measurement sheet reference, retention money is parked in a separate liability account and released only when the defect liability period ends, and TDS is deducted at the applicable contractor rate and deposited monthly. Mobilisation advances are tracked and recovered proportionately across running account bills.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What GST issues arise for real estate developers and how do you manage them?</h3>
  <div class="faq-expanded__a"><p>Developers face input tax credit restrictions on residential projects, reverse charge where procurement from registered suppliers falls short, and different treatment for units sold before and after completion. We compute the tax on each booking correctly, prepare the credit reversal working where units are sold after the completion certificate, and reconcile collections against the returns filed every month.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What does construction and real estate accounting cost per month?</h3>
  <div class="faq-expanded__a"><p>Construction and real estate accounting generally costs Rs 20,000 to Rs 75,000 a month. Pricing follows the count of active projects, sites and GST registrations, not turnover, so a single project developer sits near the lower end. RERA reporting support, escrow reconciliation and year end finalisation are quoted separately once we have seen the project structure.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can you take over part completed project books in the middle of a year?</h3>
  <div class="faq-expanded__a"><p>Yes, mid year takeover of part completed project books is routine and we normally go live within 15 working days. Work starts from the last reconciled trial balance, project wise cost cards are rebuilt from purchase and subcontractor records, collections are reconciled with the project account, and you get a written list of unrecorded items before routine processing begins.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How are land, approval and development costs carried in the books?</h3>
  <div class="faq-expanded__a"><p>Land cost, approval and sanction fees, development expenses, eligible borrowing costs and site overheads are accumulated as project inventory and released to the profit and loss account as revenue is recognised. Costs are allocated across towers or phases on a defensible basis such as saleable area, and the allocation working is documented so your auditor can test it.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>A construction accountant maintains project-wise cost ledgers, recognises revenue by percentage of completion under Ind AS 115 / AS 7, runs the RERA 70% designated-account discipline, tracks retention and RA bills, and deducts Section 194C TDS on contractors for builders and real-estate developers.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction & Real Estate Deadlines You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p>Two things drive a builder's month: the <strong>Section 194C contractor TDS deposit by the 7th</strong> and keeping the <strong>RERA designated (70%) account</strong> reconciled for its quarterly certification. Miss the RERA certification and withdrawals stall on site; miss the TDS and interest runs at 1.5% a month. Patron closes project books and reconciles the 70% account before each deadline. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Construction and Real Estate Accounting with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">Ledgers at a developer often flatter the position: unsold inventory carried at cost, land advances parked as receivables, and bookings counted well before anything is earned. Disciplined accounting for construction company records closes that distance, so the surplus your management committee reads at each quarter end is the surplus your towers have genuinely produced.</p>
<p style="color:rgba(255,255,255,0.88);">What RERA accounting produces is a margin per sold unit and the cash uncommitted after obligations already contracted for. Those two numbers decide whether the next land parcel is bought this year, whether a slab cycle is accelerated, and what price the remaining inventory can hold without discounting.</p>
<p style="color:rgba(255,255,255,0.88);">Until the registration certificates are settled, nothing else moves: how many projects are live under which promoter entity, which are <a href="/blog/jda-accounting-taxation-real-estate">joint development arrangements</a>, and how overheads shared across SPVs land. Those boundaries shape the ledger, much as they do in our <a href="/accounting-services-it-saas">work with software businesses</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20construction%20and%20real%20estate%20accounting%20with%20RERA%20and%20project-wise%20books" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Construction%20&%20Real%20Estate%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Construction%20&%20Real%20Estate%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Construction & Real Estate Accounting Near You</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">On-ground teams for builders and developers in these cities.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Cities We Serve</div><div class="pa-block-sub">On-ground construction &amp; real-estate accounting teams</div><div class="pa-city-grid"><a href="https://www.patronaccounting.com/construction-and-real-estate-accounting-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="https://www.patronaccounting.com/construction-and-real-estate-accounting-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="https://www.patronaccounting.com/construction-and-real-estate-accounting-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="https://www.patronaccounting.com/construction-and-real-estate-accounting-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for builders and developers</div><div class="pa-cross-grid"><a href="https://www.patronaccounting.com/accounting-services" class="pa-cross-card"><div class="pa-card-title">All Industries</div></a>
<a href="https://www.patronaccounting.com/corporate-compliance-for-construction-and-real-estate" class="pa-cross-card"><div class="pa-card-title">Compliance for Construction</div></a>
<a href="https://www.patronaccounting.com/itr-for-construction-firms" class="pa-cross-card"><div class="pa-card-title">ITR for Construction Firms</div></a>
<a href="https://www.patronaccounting.com/tools/lease-accounting-calculator-ind-as-116" class="pa-cross-card"><div class="pa-card-title">Lease Calculator (Ind AS 116)</div></a></div></div>
        </div>
    </div>
</section>





<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Building or developing property &amp; need project-wise, RERA-ready books?</strong> Talk to our CA team.</span>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20construction%20and%20real%20estate%20accounting" target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Get Free Construction Quote &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

<div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; compliance &nbsp;&middot;&nbsp; Last reviewed 23 July 2026 &nbsp;&middot;&nbsp; Next review 23 October 2026</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a><a href="https://maharera.maharashtra.gov.in" target="_blank" rel="noopener">MahaRERA</a></div></div></div>
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
