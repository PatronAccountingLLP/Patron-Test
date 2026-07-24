@extends('layouts.service-app')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Startup Accounting Services in India for Indian SMEs | Patron Accounting</title>
    <meta name="description" content="Cap table and books that agree - before a diligence finds out they do not. Avoid audit delays and free your team from the ledger. Get a fixed quote.">
    <link rel="canonical" href="https://www.patronaccounting.com/accounting-services-for-startups">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Startup Accounting Services in India for Indian SMEs | Patron Accounting">
    <meta property="og:description" content="Cap table and books that agree - before a diligence finds out they do not. Avoid audit delays and free your team from the ledger. Get a fixed quote.">
    <meta property="og:url" content="https://www.patronaccounting.com/accounting-services-for-startups">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og/accounting-services-for-startups-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Startup Accounting Services in India for Indian SMEs | Patron Accounting">
    <meta name="twitter:description" content="Cap table and books that agree - before a diligence finds out they do not. Avoid audit delays and free your team from the ledger. Get a fixed quote.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og/accounting-services-for-startups-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "@id": "https://www.patronaccounting.com/accounting-services-for-startups/#service",
  "name": "Startup Accounting Services in India",
  "description": "Startup accounting services keep the cap table and the books agreeing before a diligence discovers they do not.",
  "image": "https://www.patronaccounting.com/images/accounting-services-for-startups-og.webp",
  "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "serviceType": "Startup Accounting Service",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.patronaccounting.com/accounting-services-for-startups"
  },
  "areaServed": {
    "@type": "Country",
    "name": "India",
    "sameAs": "https://en.wikipedia.org/wiki/India"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Startup Accounting Services in India",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Startup Accounting Services in India",
          "description": "Startup accounting services keep the cap table and the books agreeing before a diligence discovers they do not.",
          "serviceType": "Startup Accounting Service"
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
      "name": "Startup Accounting Services India",
      "item": "https://www.patronaccounting.com/accounting-services-for-startups"
    }
  ],
  "@id": "https://www.patronaccounting.com/accounting-services-for-startups/#breadcrumb"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.patronaccounting.com/accounting-services-for-startups/#faq",
  "datePublished": "2026-07-24T08:00:00+05:30",
  "dateModified": "2026-07-24T08:00:00+05:30",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What should you look for in a startup tax accountant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Look for a firm that files your GST and TDS returns and also handles founder-level items such as ESOP perquisite tax, share allotment reporting and investor diligence packs. Ask how many funded startups they keep books for, which software they work in, and who signs off. Cheap data entry with no tax review surfaces as a diligence problem later."
      }
    },
    {
      "@type": "Question",
      "name": "What should an AI startup look for in an accountant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An AI startup needs an accountant who can treat GPU and cloud spend correctly, decide what is expensed against what is capitalised as an intangible, and handle withholding under Section 195 on payments to foreign compute and model providers. Add transfer pricing if any group entity sits offshore. Few generic bookkeeping firms cover all three together."
      }
    },
    {
      "@type": "Question",
      "name": "Does a startup need an accountant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, a private limited startup needs an accountant from incorporation, because TDS returns, annual ROC filings and the income tax return all begin whether or not there is revenue, and GST returns start the month you register. Spreadsheets survive the first few months, but investor diligence, ESOP accounting and reconciled statutory dues need a qualified reviewer. Most founders switch to a firm at the first institutional round."
      }
    },
    {
      "@type": "Question",
      "name": "What monthly reports do the board and investors receive?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You get a monthly pack by the 15th of the following month covering profit and loss, balance sheet, cash flow, burn rate, runway in months and a statutory dues status. Investor-specific views such as departmental spend or unit economics are added where the term sheet requires them. The same pack feeds quarterly board reporting without rework."
      }
    },
    {
      "@type": "Question",
      "name": "How do you handle ESOP accounting and the tax when employees exercise?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ESOP cost is charged to the profit and loss over the vesting period using a valuation, and on exercise the difference between fair market value and exercise price is a perquisite on which the company deducts TDS from salary. Eligible recognised startups can defer that deduction. We also maintain the grant register and the perquisite disclosure."
      }
    },
    {
      "@type": "Question",
      "name": "What is startup accounting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Startup accounting is bookkeeping and reporting built around burn, runway and investor requirements rather than statutory filing alone. It covers monthly books in Zoho Books or Tally, GST and TDS returns, payroll, the ESOP grant register, cap table support, a monthly MIS showing burn and runway, and a standing diligence folder of signed financials, reconciliations and board minutes so a term sheet never triggers a three week scramble."
      }
    },
    {
      "@type": "Question",
      "name": "What does startup accounting cost in the first year?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Early-stage startups usually pay Rs 8,000 to Rs 15,000 a month for bookkeeping, GST and TDS returns and a monthly MIS, with annual ROC filings and the income tax return quoted on top. Funded companies running payroll, multiple GST registrations and investor reporting move to Rs 25,000 upward. We quote after seeing one month of volume."
      }
    },
    {
      "@type": "Question",
      "name": "What extra compliance does DPIIT startup recognition create?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Recognition brings annual reporting on the Startup India portal and access to the Section 80-IAC tax holiday, which needs separate approval from the inter-ministerial board and is never automatic. Ordinary Companies Act, GST and TDS compliance continues unchanged alongside it. We track which exemptions you have actually been granted rather than assuming recognition covers everything."
      }
    },
    {
      "@type": "Question",
      "name": "How quickly can a startup's books be taken over from a previous accountant?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Handover normally completes in 10 to 15 working days from receipt of the trial balance, ledgers, bank statements and software credentials. We reconcile opening balances before posting anything new and list every difference we find in writing. Where the earlier accountant has gone quiet, the ledgers are reconstructed from banking records and the returns already on the GST portal."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if a startup has missed ROC and TDS filings?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Missed filings are cleared in order of penalty exposure, because ROC forms carry an additional fee that keeps accruing daily while TDS defaults attract interest plus a late filing fee. We first list every open default from the MCA and TRACES portals, then file oldest first. Directors are told the total cost before work starts."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://www.patronaccounting.com/accounting-services-for-startups",
  "name": "Startup Accounting Services in India",
  "description": "Cap table and books that agree - before a diligence finds out they do not. Avoid audit delays and free your team from the ledger. Get a fixed quote.",
  "url": "https://www.patronaccounting.com/accounting-services-for-startups",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
  },
  "about": {
    "@id": "https://www.patronaccounting.com/accounting-services-for-startups/#service"
  },
  "primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/accounting-services-for-startups-og.webp"
  },
  "image": "https://www.patronaccounting.com/images/accounting-services-for-startups-og.webp",
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
    "@id": "https://www.patronaccounting.com/accounting-services-for-startups/#breadcrumb"
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
                <a href="https://www.patronaccounting.com/accounting-bookkeeping-services/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Accounting & Bookkeeping Services</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">Startup Accounting Services</span></li>
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
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Startup Accounting Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Cap table the register supports:</span> Your working cap table, the statutory register of members and the share capital in the books all carry the same holdings.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Option grants that stand up:</span> Your option grants, vesting, exercises and lapses sit in the Form SH-6 register, with board and shareholder approvals behind them.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Investor metrics traceable to ledger:</span> Your burn, runway and revenue metrics are rebuilt from the trial balance on your own definitions. Any gap against the deck is explained.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Convertible instruments in the right place:</span> We classify compulsorily convertible preference shares or debentures from the actual instrument terms, and treat round costs on a stated basis.</p>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Startup%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Startup%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20startups" target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Startup Accounting'/>
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
                                <option value="accounting-services-for-startups" selected>Startup Accounting</option>
                                    <option value="accounting-services">All Accounting Services</option>
                                    <option value="accounting-services-for-e-commerce-industry">E-Commerce Accounting</option>
                                    <option value="financial-statement-preparation-services">Financial Statement Preparation</option>
                                    <option value="mis-reporting-services">MIS Reporting</option>
                                    <option value="backlog-bookkeeping-catch-up-services">Backlog Bookkeeping Catch-up</option>
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
            <h2 class="section-title">What Startup Accounting Covers — Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Startup Accounting Services at a Glance</strong></p>
                    <p>Startup accounting services keep the cap table and the books agreeing before a diligence discovers they do not. Patron maintains investor MIS on burn, runway and cohort performance, and handles DPIIT recognition, Section 80-IAC claims and ESOP perquisite timing. Statutory filings run alongside founder reporting instead of trailing behind it. Common among funded and bootstrapped Indian startups heading towards a priced round.</p>
                </div>
                <p>The founder keeps the decisions and the bank logins; the <a href="/blog/section-80-iac-startup-tax-holiday">startup accounting</a> work Patron runs covers the ledger, the payroll run and the compliance calendar. In practice that means your operations team raises invoices in the billing tool and stops there, while classification, accruals and the period close happen behind it. The board pack and the statutory filings are drawn from one set of books, not two. How Mumbai fintech founders split it follows the same pattern.</p>
                <p>An ESOP perquisite deducted in the wrong month becomes an employee's tax notice and the company's default at once. A recognition claim filed after the window closes cannot be reopened. That exposure, more than transaction count, is what sets effort in accounting for startups. Eligibility is checked against the Startup India portal criteria. Valuation reports and diligence responses are separate engagements.</p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Are Startup Accounting Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A funded company&#x27;s ledger has to agree, at all times, with its cap table and its investor commitments. Startup accounting services are the function that keeps those two records in step and the books ready for diligence.</p>
<p>In practice, it runs the general ledger, the payroll and the monthly close. On top of that sits the reporting a funded business is judged by: burn, runway and cohort performance in a format investors recognise. It handles the recognition timing on employee share awards, where a charge booked in the wrong month creates a problem for both company and employee. For subscription businesses, it also spreads deferred revenue across the term it belongs to. This function also tracks the conditions attached to recognised-startup benefits, so a claim is not lost to a missed window. Accounting for startups, then, is ordinary bookkeeping carried out to a standard a priced round will test. Preparing valuation reports or fielding diligence responses falls outside this engagement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Startup Accounting:</strong></p>
                    <div class="key-terms"><ul class="al-list"><li><span class="al-t"><a href="/glossary/monthly-burn-rate">Monthly Burn Rate</a></span><span class="al-d">How much cash the business spends over and above what it brings in monthly.</span></li><li><span class="al-t"><a href="/glossary/cash-runway-calculation">Cash Runway Calculation</a></span><span class="al-d">How many months the cash on hand will last at the current burn.</span></li><li><span class="al-t"><a href="/glossary/cap-table-dilution">Cap Table Dilution</a></span><span class="al-d">How much each shareholder&#x27;s percentage falls when new shares are issued.</span></li><li><span class="al-t"><a href="/glossary/operating-cash-runway">Operating Cash Runway</a></span><span class="al-d">Runway measured from operating cash flow alone, ignoring one-off funding inflows.</span></li><li><span class="al-t"><a href="/glossary/ind-as-102-share-based-payment">Ind AS 102 Share-based Payment</a></span><span class="al-d">The accounting standard for recording the cost of shares given to employees.</span></li><li><span class="al-t"><a href="/glossary/vesting-period-graded-amortization">Vesting Period Graded Amortization</a></span><span class="al-d">Spreading an ESOP cost across the years employees earn their options.</span></li><li><span class="al-t"><a href="/glossary/deferred-revenue-unearned-revenue">Deferred Revenue (Unearned Revenue)</a></span><span class="al-d">Money collected upfront for goods or services not yet delivered.</span></li><li><span class="al-t"><a href="/glossary/monthly-recurring-revenue-mrr">Monthly Recurring Revenue (MRR)</a></span><span class="al-d">The predictable subscription income a business expects to earn each month.</span></li></ul></div>

                </div>
            </div>
            <div class="column-image"><img src="/images/accounting-cluster/accounting-services-for-startups/what-is.webp" alt="What Are Startup Accounting Services. A funded company's ledger has to agree, at all times, with its cap table and" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>


<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs Startup Accounting Services in India?</h2>
            <div class="content-text">
                
                <p>Startup accounting services fit companies where the share register and investor promises drive the books as much as trade does. Most are DPIIT-recognised and funded ventures heading towards a priced round, where founders answer to their investors as closely as to the tax department.</p>
  <ul>
    <li>DPIIT-recognised startups planning to claim <a href="/blog/section-80-iac-startup-tax-holiday">the Section 80-IAC tax holiday</a>, who must keep every eligibility condition met.</li>
    <li>Ventures that have just closed a round on convertible notes or CCPS and must book the instrument correctly.</li>
    <li>Founders who granted stock options on a handshake and now need a proper option register behind them.</li>
    <li>Companies whose funds ask for monthly numbers on burn and runway drawn straight from the ledger.</li>
    <li>Bootstrapped startups nearing their first funding diligence, who need <a href="/blog/due-diligence-ready-books-startups">books an investor will not pick apart</a>.</li>
    <li>Early companies carrying foreign investor accounts and founder loans that belong on the related-party record.</li>
    <li>Startups where the founder still holds every bank login while nobody closes the month behind them.</li>
  </ul>

            </div>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Startup Accounting Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Cap table and share register upkeep</td><td>Share allotments posted and the cap table reconciled to the statutory register of members, so ownership and dilution always agree <span class="badge-included">On event / as needed</span></td></tr>
                        <tr><td>Funding round instrument accounting</td><td>CCPS, CCD and convertible notes recorded in the right class, with share premium papered so each round sits correctly in the books <span class="badge-included">On event / as needed</span></td></tr>
                        <tr><td>Investor MIS, burn and runway</td><td>Burn, runway and MRR reported to your investors and tied back to the ledger. See <a href="/blog/burn-rate-runway-explained-founders">burn rate and runway explained</a> <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>ESOP charge and option register</td><td>Option grants captured in the register and the share-based payment charge amortised across the vesting period, with startup bookkeeping kept audit-ready <span class="badge-included">Monthly</span></td></tr>
                        <tr><td>DPIIT and 80-IAC condition tracking</td><td>Eligibility conditions for DPIIT recognition and any Section 80-IAC claim tracked, with supporting schedules maintained through the year as applicable <span class="badge-included">Annually</span></td></tr>
                        <tr><td>Monthly bookkeeping and founder MIS</td><td>Day-to-day bookkeeping, bank reconciliation and statutory workings delivered as monthly startup accounting services, giving founders one clean set of numbers <span class="badge-included">Monthly</span></td></tr>

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
            <h2 class="section-title">How Startup Accounting Services Work — Our Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">How Patron delivers startup accounting, step by step from onboarding to a clean monthly close.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Cap table to register tie-out</h3>
    <p class="step-description">The working cap table is agreed to the statutory register of members and to every allotment record, then to share capital and securities premium in the books. Where the three disagree, the statutory register governs and the cap table is corrected.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-1-cap-table-to-register-tie-out.webp" alt="Illustration for Cap table to register tie-out: The working cap table is agreed to the statutory register of members and to" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Funding round instrument accounting</h3>
    <p class="step-description">Term sheet, SHA or SSA and the instrument terms are read to decide how compulsorily convertible preference shares or debentures sit in the balance sheet, and how round costs are treated. The valuation relied on at each round is filed with the working.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-2-funding-round-instrument-accounting.webp" alt="Illustration for Funding round instrument accounting: Term sheet, SHA or SSA and the instrument terms are read to decide how" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Share premium position papering</h3>
    <p class="step-description">For rounds closed before 1 April 2025 the valuation basis and investor detail are preserved, because the premium provision applied to those years and assessments remain open. Rounds from that date onward are documented as outside it.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-3-share-premium-position-papering.webp" alt="Illustration for Share premium position papering: For rounds closed before 1 April 2025 the valuation basis and investor" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">ESOP charge and option register</h3>
    <p class="step-description">Grant letters, the scheme document and the board and shareholder approvals give the vesting schedule, from which the share-based payment charge is spread. Grants, vesting, exercises and lapses are entered in the Register of Employee Stock Options in Form SH-6.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-4-esop-charge-and-option-register.webp" alt="Illustration for ESOP charge and option register: Grant letters, the scheme document and the board and shareholder approvals" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Investor MIS tie-back</h3>
    <p class="step-description">Burn, runway and the revenue metrics already reported to investors are rebuilt from the ledger using the definitions the company itself uses. Where the deck and the trial balance disagree, the difference is reconciled rather than restated.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-5-investor-mis-tie-back.webp" alt="Illustration for Investor MIS tie-back: Burn, runway and the revenue metrics already reported to investors are rebuilt from" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Founder and related party review</h3>
    <p class="step-description">Founder agreements, director current accounts and any loan to or from a director are examined against the restrictions on loans to directors and on related-party transactions. The approvals actually obtained are matched to the entries in the books.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-6-founder-and-related-party-review.webp" alt="Illustration for Founder and related party review: Founder agreements, director current accounts and any loan to or from a" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 7</span>
    <h3 class="step-title">DPIIT and deduction condition tracking</h3>
    <p class="step-description">DPIIT recognition and, where obtained, the Section 80-IAC approval are checked each year against the conditions attached to them, including turnover and incorporation-date limits. The year in which the deduction is claimed is then a decision on record.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/accounting-cluster/accounting-services-for-startups/step-7-dpiit-and-deduction-condition-tracking.webp" alt="Illustration for DPIIT and deduction condition tracking: DPIIT recognition and, where obtained, the Section 80-IAC approval" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>

        </div>
    </div>
</section>



<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Startup Accounting Services</h2>
            <div class="content-text">
                
                <p>A funded company carries two extra sets of paperwork, the cap table and the investor agreements, and both change how ordinary transactions are recorded.</p>
<ul>
    <li>Cap table with the share register (Section 88 register of members) and all share allotment records</li>
    <li>Investment documents: term sheet, SHA/SSA, CCPS or CCD terms, and the valuation used at each round</li>
    <li>ESOP scheme document, board and shareholder approvals, grant letters, and the Register of Employee Stock Options in Form SH-6</li>
    <li>Investor reporting pack and MIS definitions: the burn, runway, MRR and cohort metrics already reported to investors</li>
    <li>DPIIT recognition certificate and, if claimed, the Section 80-IAC approval</li>
    <li>Founder and related-party agreements, and any director loan or current-account records</li>
    <li>Bank statements for all accounts, including foreign currency and any overseas subsidiary account</li>
    <li>Sales invoices and customer contracts</li>
    <li>Purchase and expense bills, including cloud, SaaS subscriptions and marketing spend, with corporate card statements</li>
</ul>

            </div>
        </div>
    </div>
</section>


<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Startup Accounting Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Founder spends and company costs share personal cards</td><td>Books overstate profit and diligence flags related-party leakage, denting the valuation before a priced round.</td><td>Our team separates founder drawings into a director's current account and codes reimbursements against an approved policy.</td></tr>
                        <tr><td>Annual prepaid deals booked as revenue upfront</td><td>Reported revenue inflates, then reverses, spooking investors halfway through diligence and distorting MRR.</td><td>We build a deferred revenue schedule that recognises each subscription month by month.</td></tr>
                        <tr><td>ESOP charge not accrued as options vest</td><td>The share-based cost is understated, overstating profit and distorting the company's tax deduction at exercise.</td><td>Patron runs an Ind AS 102 charge schedule so the expense accrues evenly across the vesting period.</td></tr>
                        <tr><td>Convertible notes and SAFEs left unclassified on the balance sheet</td><td>Auditors requalify them as liabilities, restating equity right before the raise closes.</td><td>We classify each instrument correctly and reconcile it to the cap table at every close.</td></tr>
                        <tr><td>Burn and runway reported off a stale ledger</td><td>The board sees a stale runway figure and misjudges the timing of the next raise.</td><td>Our team closes monthly to a fixed date and reports burn from reconciled numbers; see the <a href="/blog/startup-accounting-checklist-year-one">year-one startup accounting needs</a>.</td></tr>

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
            <h2 class="section-title">Startup Accounting Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Starter</strong> &mdash; one early-stage entity with steady monthly burn lines</td><td>INR 2,499 per month<br><span style="font-size:12px;color:var(--text-muted);">Excl. GST & Government Charges</span></td></tr>
                        <tr><td><strong>Growth</strong> &mdash; later funding stage, cap-table events or an added group entity</td><td>On quote</td></tr>
                        <tr><td><strong>Managed</strong> &mdash; multiple entities with investor-ready monthly MIS and custom reporting</td><td>On quote</td></tr>

                    </tbody>
                </table>
                </div><p style="margin-top:14px;font-size:14px;">Early founders begin at <strong>INR 2,499 per month</strong> for one entity with steady monthly books and a clean ledger. The price rises with entity stage, cap-table events and growing burn lines as the work broadens. Ask for a <strong>fixed quote</strong> on <a href="tel:+919459456700">+91 94594 56700</a>.</p><p style="margin-top:8px;font-size:12px;color:var(--text-muted);">Fees <strong>exclude GST and government charges</strong>. Final quote confirmed after a scoping review.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Professional accounting and compliance charges</strong> are scoped to your <strong>number of entities, funding stage and monthly transaction volume</strong>, and are separate from statutory and government charges. <a href="https://www.patronaccounting.com/contact">Contact us</a> for a detailed, <strong>fixed quote</strong>.</p>
                <p style="margin-top:16px;"><strong>Get a free Startup Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20startups" target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>


<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Startup Accounting Compliance Calendar 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance</th><th>Due Date</th><th>Applies To</th></tr></thead>
                    <tbody>
                        <tr><td>TDS / TCS deposit (Challan ITNS-281)</td><td>7th of every month (30 April for March)</td><td>Every business that deducts tax at source on salaries, rent, contractor or professional fees</td></tr>
                        <tr><td>Provident Fund (ECR) and ESI contribution</td><td>15th of every month</td><td>Employers registered under EPF and ESI</td></tr>
                        <tr><td>GSTR-3B (summary return and tax payment)</td><td>20th of every month for monthly filers</td><td>GST-registered businesses filing monthly; QRMP filers pay via PMT-06</td></tr>
                        <tr><td>ESOP perquisite TDS deposit on allotment</td><td>7th of the month after allotment</td><td>Employers allotting shares under an approved ESOP</td></tr>
                        <tr><td>Advance tax first instalment (15%)</td><td>15 June 2026</td><td>Companies, firms and individuals with a tax liability of Rs 10,000 or more</td></tr>
                        <tr><td>Director KYC (DIR-3 KYC)</td><td>30 September 2026</td><td>Every director holding a DIN as on 31 March</td></tr>
                        <tr><td>Income-tax return, audit cases</td><td>31 October 2026</td><td>Companies and audit-liable firms</td></tr>
                        <tr><td>Financial statements filing (Form AOC-4)</td><td>Within 30 days of the AGM (by 29 October 2026 for a 30 September AGM)</td><td>Companies filing audited financials with the ROC</td></tr>
                        <tr><td>Annual return (Form MGT-7 / MGT-7A)</td><td>Within 60 days of the AGM (by 28 November 2026 for a 30 September AGM)</td><td>Companies filing the annual return with the ROC</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p>For a funded startup the sharpest dates are the ESOP perquisite TDS on the 7th after allotment and the ROC filings, AOC-4 by 29 October and MGT-7 by 28 November. Director KYC is due 30 September. Patron's <a href="/blog/section-80-iac-startup-tax-holiday">startup accounting</a> team runs board and tax dates on one calendar so nothing slips before a diligence. Request a consultation on +91 94594 56700 to set filing reminders.</p>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Professional Startup Accounting Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M16 7h6v6" /> <path d="m22 7-8.5 8.5-5-5L2 17" /> </svg></div>
  <h3 class="feature-title">Cap table the register supports</h3>
  <p class="feature-text">Your working cap table, the statutory register of members and the share capital in the books all carry the same holdings.</p><ul style="margin-top:12px;"><li>working cap table tied to the Section 88 register of members</li><li>share capital and securities premium in the books agree</li><li>Without it, allotments retraced under an investor's counsel in diligence</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915" /> <circle cx="12" cy="12" r="3" /> </svg></div>
  <h3 class="feature-title">Option grants that stand up</h3>
  <p class="feature-text">Your option grants, vesting, exercises and lapses sit in the Form SH-6 register, with board and shareholder approvals behind them.</p><ul style="margin-top:12px;"><li>grants, vesting, exercises and lapses in the Form SH-6 register</li><li>share-based payment charge spread over the vesting schedule</li><li>Without it, informal email grants leave options the company cannot evidence</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M3 3v16a2 2 0 0 0 2 2h16" /> <path d="M18 17V9" /> <path d="M13 17V5" /> <path d="M8 17v-3" /> </svg></div>
  <h3 class="feature-title">Investor metrics traceable to ledger</h3>
  <p class="feature-text">Your burn, runway and revenue metrics are rebuilt from the trial balance on your own definitions. Any gap against the deck is explained.</p><ul style="margin-top:12px;"><li>burn, runway and revenue rebuilt from the trial balance</li><li>your own definitions used, gap against the deck explained</li><li>Without it, a fund's analyst arrives at a different figure</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M10 18v-7" /> <path d="M11.119 2.205a2 2 0 0 1 1.762 0l7.84 3.846A.5.5 0 0 1 20.5 7h-17a.5.5 0 0 1-.22-.949z" /> <path d="M14 18v-7" /> <path d="M18 18v-7" /> <path d="M3 22h18" /> <path d="M6 18v-7" /> </svg></div>
  <h3 class="feature-title">Convertible instruments in the right place</h3>
  <p class="feature-text">We classify compulsorily convertible preference shares or debentures from the actual instrument terms, and treat round costs on a stated basis.</p><ul style="margin-top:12px;"><li>CCPS and CCD terms read to decide balance sheet treatment</li><li>round costs treated on a stated basis</li><li>Without it, equity misread by a lender or later investor</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M8 3 4 7l4 4" /> <path d="M4 7h16" /> <path d="m16 21 4-4-4-4" /> <path d="M20 17H4" /> </svg></div>
  <h3 class="feature-title">Related party dealings on record</h3>
  <p class="feature-text">You know which founder dealings the company actually approved. We match director accounts, founder agreements and director loans to the approvals obtained.</p><ul style="margin-top:12px;"><li>director current accounts, founder agreements and director loans matched to approvals</li><li>loans to directors tested against approvals obtained</li><li>Without it, an unapproved entry left standing for auditors and reviewers</li></ul>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" > <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /> <path d="m9 12 2 2 4-4" /> </svg></div>
  <h3 class="feature-title">A deduction claim you can support</h3>
  <p class="feature-text">You claim the Section 80-IAC deduction in a year on record, because we test DPIIT recognition and its conditions each year.</p><ul style="margin-top:12px;"><li>DPIIT recognition and 80-IAC conditions tested each year</li><li>turnover and incorporation-date limits checked before the claim</li><li>Without it, a claim made in a year the company no longer qualifies</li></ul>
</article>
</div>
    </div>
</section>




<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Choose Patron Accounting for Startup Accounting Services India</h2>
            <p class="section-intro">Five things a founder can check before handing over the books. Each is a claim with the proof behind it.</p>
            
            <div class="why-patron-grid">
                <div><strong>Cap table and books that agree before diligence</strong><p>With 15+ years across 3,000+ businesses, we keep your equity register and ledger tied together, so convertible notes, CCPS and option grants reconcile long before an investor's diligence opens them.</p></div>
                <div><strong>DPIIT recognition, Section 80-IAC and ESOP timing</strong><p>DPIIT recognition, <a href="/blog/section-80-iac-startup-tax-holiday">the Section 80-IAC tax holiday</a> and ESOP perquisite timing are routine filings for us, part of the 25,000+ filings completed, kept correct so an eligibility condition never slips.</p></div>
                <div><strong>Zoho Books or Xero set up to scale</strong><p>We work across Zoho Books and Xero, and we set the chart of accounts, classes and reporting to hold from seed through a priced round without a rebuild.</p></div>
                <div><strong>Investor MIS on burn, runway and cohort</strong><p>Every month your investors get an MIS on <a href="/blog/burn-rate-runway-explained-founders">burn rate and runway</a> drawn straight from the ledger, the monthly cadence behind our 4.9 star Google rating.</p></div>
                <div><strong>Funded startups among 3,000+ businesses served</strong><p>Funded startups sit among the 3,000+ businesses we have served since 2019. Our in-house team of CAs and CS, with 15+ years of experience, backs them, reflected in our 4.9 star Google rating.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope and turnaround are confirmed in your engagement letter.</p>
        </div>
    </div>
</section>



<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Founder-Led Books vs Outsourced Startup Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Founder-Led Books</th><th>Outsourced Startup Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly cost</td><td>No fee, but founder hours move away from product and fundraising</td><td>A monthly engagement fee buys a finance function without a full salary</td></tr>
                        <tr><td>Compliance risk</td><td>Missed returns and messy ledgers are common when founders self-record</td><td>Deadline tracking and review cut the risk of late or wrong filings</td></tr>
                        <tr><td>Investor readiness</td><td>Cap table and metrics often lack a clean ledger trail</td><td>Books map to a supportable cap table and investor metrics</td></tr>
                        <tr><td>Scalability</td><td>Works at seed stage, strains once transactions and headcount rise</td><td>Capacity grows with the company through each funding round</td></tr>
                        <tr><td>Founder time</td><td>Consumes evenings and weekends better spent on growth</td><td>Frees the founder to focus on customers and runway</td></tr>
                        <tr><td>Software and controls</td><td>Usually a spreadsheet with no segregation of duties</td><td>Cloud accounting with approval controls built in from the start</td></tr>
                        <tr><td><strong>Verdict</strong></td><td colspan="2">Founder-led books suit the earliest pre-revenue weeks. Once you raise or bill customers, outsourced startup accounting services protect your runway and cap table, as <a href="/blog/when-startup-should-hire-ca">when a startup should hire</a> sets out.</td></tr>

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
            <h2 class="section-title">Legal and Regulatory Framework for Startup Accounting</h2>
            <div class="content-text">
                
                <p>Incorporating as a private limited company is what pulls a startup into the fullest version of the framework: Section 128 books, Schedule III statements and a live audit trail apply from day one, well before there is revenue to report. On top of that sits a set of reliefs that only a recognised startup can claim, which is where the specialised work begins.</p>
<p>Those reliefs turn on records kept prospectively, not reconstructed later. A <a href="/glossary/cap-table-dilution">Cap Table Dilution</a> history, the grant terms behind each ESOP and the <a href="/glossary/monthly-burn-rate">Monthly Burn Rate</a> that lenders and boards read all have to be evidenced as they happen. Startup accounting services keep the statutory books and this second layer in step, against the provisions below.</p>
<ul class="al-list"><li><span class="al-t"><strong>DPIIT recognition under the Startup India notification</strong></span><span class="al-d">A DPIIT-recognised startup unlocks the tax and compliance reliefs that follow, and the recognition is the reference point every later claim is checked against. Eligibility runs off the DPIIT Startup India notification and CBDT's recognition-linked exemption notifications.</span></li><li><span class="al-t"><strong>Section 80-IAC, Income-tax Act 1961</strong></span><span class="al-d">An eligible DPIIT startup can claim a 100% deduction of profits for three consecutive years out of its first ten.</span></li><li><span class="al-t"><strong>Section 17(2)(vi) with Section 192, Income-tax Act 1961</strong></span><span class="al-d">An ESOP is a perquisite taxed on exercise, and an eligible startup may defer the TDS under Section 191(2)/192(1C) to ease the employee's cash flow.</span></li><li><span class="al-t"><strong>Section 56(2)(viib), Income-tax Act 1961</strong></span><span class="al-d">The angel-tax charge on share premium above fair value no longer applies from AY 2025-26, though the valuation records behind earlier rounds are still worth keeping.</span></li><li><span class="al-t"><strong>Section 128, Companies Act 2013</strong></span><span class="al-d">Books stay on accrual and double entry at the registered office from incorporation and are retained for eight years.</span></li><li><span class="al-t"><strong>Rule 3(1), Companies (Accounts) Rules 2014</strong></span><span class="al-d">The audit trail is enabled from the first entry, so a diligence team can rely on the edit history. Incorporation itself is handled on the <a href="/accounting-bookkeeping-services">hub page</a>.</span></li></ul>
<p class="compliance-note"><strong>Practical note:</strong> During due diligence, the two things most often flagged are a cap table that does not tie back to the books and ESOP grants recorded without board approval or a fair-value working.</p><p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a> &middot; <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> &middot; <a href="https://www.startupindia.gov.in" target="_blank" rel="noopener">Startup India (DPIIT)</a></p>

            </div>
        </div>
    </div>
</section>


<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Startup Accounting FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on startup accounting scope, process, documents and pricing for Indian businesses.</p>
                    <a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    <form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate>
  <h3 class="faq-enquiry__title">Ask about your books</h3>
  <p class="faq-enquiry__sub">Send your requirement for a scoped quote.</p>
  <p class="faq-enquiry__context">Enquiring about: <strong>Startup Accounting</strong></p>
  <input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required>
  <input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required>
  <div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div>
  <button class="faq-enquiry__btn" type="submit">Get a Callback</button>
  <p class="faq-enquiry__msg" role="status" aria-live="polite"></p>
</form>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What should you look for in a startup tax accountant?</h3>
  <div class="faq-expanded__a"><p>Look for a firm that files your GST and TDS returns and also handles founder-level items such as ESOP perquisite tax, share allotment reporting and investor diligence packs. Ask how many funded startups they keep books for, which software they work in, and who signs off. Cheap data entry with no tax review surfaces as a diligence problem later.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What should an AI startup look for in an accountant?</h3>
  <div class="faq-expanded__a"><p>An AI startup needs an accountant who can treat GPU and cloud spend correctly, decide what is expensed against what is capitalised as an intangible, and handle withholding under Section 195 on payments to foreign compute and model providers. Add transfer pricing if any group entity sits offshore. Few generic bookkeeping firms cover all three together.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does a startup need an accountant?</h3>
  <div class="faq-expanded__a"><p>Yes, a private limited startup needs an accountant from incorporation, because TDS returns, annual ROC filings and the income tax return all begin whether or not there is revenue, and GST returns start the month you register. Spreadsheets survive the first few months, but investor diligence, ESOP accounting and reconciled statutory dues need a qualified reviewer. Most founders switch to a firm at the first institutional round.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What monthly reports do the board and investors receive?</h3>
  <div class="faq-expanded__a"><p>You get a monthly pack by the 15th of the following month covering profit and loss, balance sheet, cash flow, burn rate, runway in months and a statutory dues status. Investor-specific views such as departmental spend or unit economics are added where the term sheet requires them. The same pack feeds quarterly board reporting without rework.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How do you handle ESOP accounting and the tax when employees exercise?</h3>
  <div class="faq-expanded__a"><p>ESOP cost is charged to the profit and loss over the vesting period using a valuation, and on exercise the difference between fair market value and exercise price is a perquisite on which the company deducts TDS from salary. Eligible recognised startups can defer that deduction. We also maintain the grant register and the perquisite disclosure.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What is startup accounting?</h3>
  <div class="faq-expanded__a"><p>Startup accounting is bookkeeping and reporting built around burn, runway and investor requirements rather than statutory filing alone. It covers monthly books in Zoho Books or Tally, GST and TDS returns, payroll, the ESOP grant register, cap table support, a monthly MIS showing burn and runway, and a standing diligence folder of signed financials, reconciliations and board minutes so a term sheet never triggers a three week scramble.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What does startup accounting cost in the first year?</h3>
  <div class="faq-expanded__a"><p>Early-stage startups usually pay Rs 8,000 to Rs 15,000 a month for bookkeeping, GST and TDS returns and a monthly MIS, with annual ROC filings and the income tax return quoted on top. Funded companies running payroll, multiple GST registrations and investor reporting move to Rs 25,000 upward. We quote after seeing one month of volume.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What extra compliance does DPIIT startup recognition create?</h3>
  <div class="faq-expanded__a"><p>Recognition brings annual reporting on the Startup India portal and access to the <a href="/blog/section-80-iac-startup-tax-holiday">Section 80-IAC tax holiday</a>, which needs separate approval from the inter-ministerial board and is never automatic. Ordinary Companies Act, GST and TDS compliance continues unchanged alongside it. We track which exemptions you have actually been granted rather than assuming recognition covers everything.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">How quickly can a startup's books be taken over from a previous accountant?</h3>
  <div class="faq-expanded__a"><p>Handover normally completes in 10 to 15 working days from receipt of the trial balance, ledgers, bank statements and software credentials. We reconcile opening balances before posting anything new and list every difference we find in writing. Where the earlier accountant has gone quiet, the ledgers are reconstructed from banking records and the returns already on the GST portal.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What happens if a startup has missed ROC and TDS filings?</h3>
  <div class="faq-expanded__a"><p>Missed filings are cleared in order of penalty exposure, because ROC forms carry an additional fee that keeps accruing daily while TDS defaults attract interest plus a late filing fee. We first list every open default from the MCA and TRACES portals, then file oldest first. Directors are told the total cost before work starts.</p></div>
</div>
                </div>
            </div>

            
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p>The founder keeps the decisions and the bank logins; the startup accounting work Patron runs covers the ledger, the payroll run and the compliance calendar. In practice that means your operations team raises invoices in the billing tool and stops there, while classification, accruals and the period close happen behind.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Startup Accounting Deadlines You Cannot Afford to Miss</h2>
            <div class="content-text">
                
                <p><strong>TDS / TCS deposit (Challan ITNS-281)</strong> is due 7th of every month (30 April for March). <strong>Provident Fund (ECR) and ESI contribution</strong> is due 15th of every month. <strong>GSTR-3B (summary return and tax payment)</strong> is due 20th of every month for monthly filers. Patron tracks each against your books so nothing is reconstructed after the fact. Call <a href="tel:+919459456700">+91 94594 56700</a> to set up a filing-reminder schedule.</p>

            </div>
        </div>
    </div>
</section>


<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Startup Accounting Services with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.88);">Nobody decides to take their books seriously on a quiet Tuesday. It happens when a term sheet is close, because diligence runs on the investor&#x27;s calendar rather than on yours. The ledger you present is then the one you already kept, not one assembled afterwards in a hurry, and that difference shows immediately.</p>
<p style="color:rgba(255,255,255,0.88);">Investor updates stop being a fortnight of work once accounting for startups runs continuously. Every number a fund queries traces to a schedule that already exists, closed and dated, so a follow-up email causes a lookup rather than a rebuild. Founder time goes back to the business it was raised for.</p>
<p style="color:rgba(255,255,255,0.88);">The cap table is where we start: what was issued, on what terms, and whether the register in your books reflects it. Option grants made informally come next, along with any recognition claim you intend to make, as they do for <a href="/accounting-services-it-saas">companies billing on subscription</a>.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20accounting%20services%20for%20startups" target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Startup%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Startup%20Accounting%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Startup Accounting Near You</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Local teams for startup accounting in these cities.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Cities We Serve</div><div class="pa-block-sub">On-ground teams</div><div class="pa-city-grid"><a href="https://www.patronaccounting.com/accounting-services-for-startups/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-startups/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-startups/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="https://www.patronaccounting.com/accounting-services-for-startups/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a></div></div>
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
