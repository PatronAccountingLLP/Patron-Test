@extends('layouts.service-app')


@section('meta')
    <title>Zoho GSTIN Mapping: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Zoho GSTIN Mapping: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping">
    <meta property="og:image" content="https://www.patronaccounting.com/images/zoho-gstin-mapping-og.webp">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/glossary.css">
    <script src="/js/glossary.js" defer></script>
@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#breadcrumb",
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
          "name": "Glossary",
          "item": "https://www.patronaccounting.com/glossary"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Accounting",
          "item": "https://www.patronaccounting.com/glossary/accounting"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Zoho GSTIN Mapping",
          "item": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#definedterm",
      "name": "Zoho GSTIN Mapping",
      "description": "Zoho GSTIN Mapping is the setup in Zoho Books that ties each of a business&#x27;s GSTINs to its own branch and state, so every invoice, bill and return is attributed to the correct registration. It lives in the Branches settings of the organisation. It matters because a business with GSTINs in several states must file each return separately, and mapping keeps each state&#x27;s transactions cleanly apart.",
      "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How are multiple GSTINs set up in Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Each GSTIN registered in a different state is added as a separate branch under GST settings, with its own address, place of supply and invoice series. Transactions are then tagged to a branch, so an invoice raised from the Maharashtra branch to a Karnataka customer picks up IGST automatically while a Maharashtra customer picks up CGST and SGST."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a branch and a separate organisation in Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A branch shares one chart of accounts, customer list and set of books while filing a separate GST return for its own GSTIN. A separate organisation keeps its own books entirely and is billed as another subscription. Use branches when one legal entity holds several state registrations, and separate organisations for companies with different PANs."
          }
        },
        {
          "@type": "Question",
          "name": "Why must a customer GSTIN be mapped correctly in Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The first two digits of a GSTIN are the state code and drive place of supply, so a wrong GSTIN puts CGST and SGST on an inter state invoice and the buyer loses the credit. GSTR-1 is filed from these values, and the mismatch surfaces in the buyer's GSTR-2B, which under Section 16(2) blocks credit until the invoice is amended."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#article",
      "headline": "Zoho GSTIN Mapping",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1080,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping"
      },
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "author": {
        "@id": "https://www.patronaccounting.com/#team"
      },
      "reviewedBy": {
        "@id": "https://www.patronaccounting.com/#reviewer-sundram"
      },
      "publisher": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping",
      "name": "Zoho GSTIN Mapping: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#definedterm"
      },
      "keywords": [
        "Zoho GSTIN Mapping",
        "what is Zoho GSTIN Mapping",
        "zoho gstin mapping meaning",
        "zoho gstin mapping in accounting",
        "Zoho Custom Modules",
        "Multi-Currency Bank Feed",
        "Xero Bank Rules",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#breadcrumb"
      },
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "lastReviewed": "2026-07-22",
      "author": {
        "@id": "https://www.patronaccounting.com/#team"
      },
      "reviewedBy": {
        "@id": "https://www.patronaccounting.com/#reviewer-sundram"
      },
      "publisher": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "ItemList",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-gstin-mapping#faq-section"
        }
      ]
    },
    {
      "@type": [
        "Organization",
        "AccountingService"
      ],
      "@id": "https://www.patronaccounting.com/#organization",
      "name": "Patron Accounting LLP",
      "legalName": "Patron Accounting LLP",
      "url": "https://www.patronaccounting.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.patronaccounting.com/images/patron-logo.webp"
      },
      "image": "https://www.patronaccounting.com/images/patron-logo.webp",
      "email": "sales@patronaccounting.com",
      "telephone": "+91-94594-56700",
      "foundingDate": "2019",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "RTC Silver, B4-708, Sai Satyam Park, Wagholi",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "postalCode": "412207",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-94594-56700",
        "email": "sales@patronaccounting.com",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": [
          "en",
          "hi"
        ]
      },
      "areaServed": "IN",
      "sameAs": [
        "https://www.facebook.com/share/1BqqRYkpJX/",
        "https://www.instagram.com/patronaccounting/",
        "https://x.com/LlpPatron",
        "https://www.youtube.com/@patronaccountingllp7130"
      ]
    },
    {
      "@type": "Organization",
      "@id": "https://www.patronaccounting.com/#team",
      "name": "Patron Accounting - CA & CS Team",
      "parentOrganization": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "member": {
        "@id": "https://www.patronaccounting.com/#reviewer-sundram"
      },
      "employee": {
        "@id": "https://www.patronaccounting.com/#reviewer-sundram"
      }
    },
    {
      "@type": "Person",
      "@id": "https://www.patronaccounting.com/#reviewer-sundram",
      "name": "CA Sundram Gupta",
      "honorificPrefix": "CA",
      "jobTitle": "Founder & Chartered Accountant (FCA)",
      "worksFor": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "credentialCategory": "Fellow Chartered Accountant (FCA), ICAI"
      },
      "url": "https://www.patronaccounting.com/authorhub/ca-sundram-gupta",
      "sameAs": [
        "https://www.patronaccounting.com/authorhub/ca-sundram-gupta"
      ]
    }
  ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page">
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Zoho GSTIN Mapping</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Zoho GSTIN Mapping</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div><aside class="gl-rotcta" data-rotate><div class="gl-rotcta__slides"><div class="gl-rotcta__slide is-active"><div class="gl-rotcta__badge">Free consultation</div><h3>Prefer a CA to handle it?</h3><p>CA-led accounting, GST and payroll for Indian businesses, on flat monthly plans.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Recommended</div><h3>Need help with Zoho GSTIN Mapping?</h3><p>Zoho Books Accounting - our CA-led team handles it end to end.</p><a class="gl-rotcta__btn" href="/zoho-books-accounting">Explore the service &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Migration: Tally to Zoho Books</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/migration-from-tally-to-zoho">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Accounting &amp; Bookkeeping Services in India</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/accounting-services">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Free 30-min call</div><h3>Questions about Zoho GSTIN Mapping?</h3><p>Get a free 30-minute call with a Chartered Accountant, no obligation.</p><a class="gl-rotcta__btn" href="/contact-us">Book a free call &rarr;</a></div></div><div class="gl-rotcta__dots"><span class="gl-rotcta__dot is-active" data-i="0"></span><span class="gl-rotcta__dot" data-i="1"></span><span class="gl-rotcta__dot" data-i="2"></span><span class="gl-rotcta__dot" data-i="3"></span><span class="gl-rotcta__dot" data-i="4"></span></div></aside></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Zoho GSTIN Mapping: Definition</div><div class="definition-box"><p>Zoho GSTIN Mapping is the setup in Zoho Books that ties each of a business&#x27;s GSTINs to its own branch and state, so every invoice, bill and return is attributed to the correct registration. It lives in the Branches settings of the organisation. It matters because a business with GSTINs in several states must file each return separately, and mapping keeps each state&#x27;s transactions cleanly apart.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Zoho GSTIN Mapping?</h2><p>Under GST, a business registered in more than one state holds a separate GSTIN for each, and every GSTIN is a distinct taxpayer that files its own GSTR-1 and GSTR-3B. Zoho GSTIN Mapping is how Zoho Books models this: each registration is set up as a branch with its GSTIN and address, and every transaction is tagged to the branch it belongs to. The mapping is the link between a document and the return it will eventually sit in.</p><p>A multi-state Indian business meets this the moment it adds a second warehouse or office in another state. A Gurugram head office selling out of a Maharashtra fulfilment centre needs its Haryana and Maharashtra GSTINs kept separate, because a Maharashtra sale filed under the Haryana GSTIN is a filing error. Correct GSTIN mapping is what makes each branch&#x27;s GST reports pull the right transactions at return time.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/zoho-custom-modules">Zoho Custom Modules</a> — Extra record types added alongside the standard Zoho modules.</li><li><a href="/glossary/accounting/multi-currency-bank-feed">Multi-Currency Bank Feed</a> — Foreign-currency accounts feeding in with per-line exchange rates.</li><li><a href="/glossary/accounting/xero-bank-rules">Xero Bank Rules</a> — Xero&#x27;s equivalent automation for coding recurring bank lines.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Zoho GSTIN Mapping Works</h2><p>A transaction is routed to the right GSTIN through a defined chain:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Register the branch</strong><p>Each state registration is created as a branch carrying its own GSTIN and place of business — the master record the mapping hangs on.</p></li><li class="step-card"><span class="step-num">2</span><strong>Tag the transaction</strong><p>When an invoice or bill is raised, it is assigned to a branch, which fixes the GSTIN it belongs to.</p></li><li class="step-card"><span class="step-num">3</span><strong>Apply place-of-supply logic</strong><p>Zoho uses the branch state and the customer state to decide CGST/SGST versus IGST on the line.</p></li><li class="step-card"><span class="step-num">4</span><strong>Segregate the reports</strong><p>Each branch&#x27;s GST summary pulls only its own transactions, so GSTR-1 and GSTR-3B figures are branch-specific.</p></li><li class="step-card"><span class="step-num">5</span><strong>File per GSTIN</strong><p>The return for each GSTIN is prepared and filed separately, matching the branch-wise data.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Zoho GSTIN Mapping in Zoho Books</h2><p>Branch-based GSTIN mapping is set up under organisation settings (Branches is available on the Professional plan and above of the India edition):</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open Settings</strong><p>Click the Gear icon (Settings) in the top-right corner of Zoho Books.</p></li><li class="step-card"><span class="step-num">2</span><strong>Go to Branches</strong><p>Under the Organisation section, select Branches — this is where each GSTIN is managed. Flag: the Branches feature is an India-edition, Professional-plan-and-above capability.</p></li><li class="step-card"><span class="step-num">3</span><strong>Add a new branch</strong><p>Click + New Branch and enter the branch name, its GSTIN and its registered state and address.</p></li><li class="step-card"><span class="step-num">4</span><strong>Set the GST treatment</strong><p>Confirm the branch&#x27;s GST registration details so place-of-supply and tax rates apply correctly to its transactions.</p></li><li class="step-card"><span class="step-num">5</span><strong>Assign transactions to the branch</strong><p>When creating invoices and bills, select the correct branch so each document is mapped to the right GSTIN.</p></li><li class="step-card"><span class="step-num">6</span><strong>Pull branch-wise GST reports</strong><p>Use the GST filing section per branch so each GSTIN&#x27;s GSTR-1 and GSTR-3B contain only its own data.</p></li></ol></section><section id="example" class="gl-sec"><h2>Zoho GSTIN Mapping: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Sale from Haryana branch to Delhi customer</td><td>2,00,000</td><td>IGST 18% under Haryana GSTIN</td></tr><tr><td>IGST collected</td><td>36,000</td><td>Reported in Haryana GSTR-1/3B</td></tr><tr><td>Sale from Maharashtra branch to Pune customer</td><td>1,50,000</td><td>CGST+SGST 18% under Maharashtra GSTIN</td></tr><tr><td>CGST + SGST collected</td><td>27,000</td><td>Reported in Maharashtra GSTR-1/3B</td></tr></tbody></table></div><p>A Gurugram retailer runs two GSTINs in Zoho Books — one for Haryana, one for a Maharashtra branch. A ₹2,00,000 sale to a Delhi customer is mapped to the Haryana branch and attracts ₹36,000 IGST; a ₹1,50,000 sale within Maharashtra is mapped to that branch as CGST+SGST of ₹27,000. Each amount flows only into its own GSTIN&#x27;s returns, so both filings reconcile cleanly.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>One GSTIN for a multi-state business: Recording all states under a single branch mixes registrations and produces wrong returns → create a branch per GSTIN.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Zoho GSTIN Mapping</h2><p>Mapping errors surface as returns that will not reconcile:</p><ul class="gloss-bullets"><li><strong>One GSTIN for a multi-state business</strong> — Recording all states under a single branch mixes registrations and produces wrong returns → create a branch per GSTIN.</li><li><strong>Transactions tagged to the wrong branch</strong> — A Maharashtra sale booked under the Haryana branch misstates both returns → confirm the branch on each document.</li><li><strong>Wrong place of supply</strong> — An incorrect customer state flips IGST and CGST/SGST → check the ship-to state, not just the billing name.</li><li><strong>Ignoring the plan requirement</strong> — Expecting branch mapping on a lower plan leaves you without the feature → use the Professional plan or above of the India edition.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Other Zoho and bank-feed concepts worth knowing:</p><ul class="related-terms"><li><a href="/glossary/accounting/zoho-custom-modules">Zoho Custom Modules</a> — Bespoke record types added to Zoho.</li><li><a href="/glossary/accounting/multi-currency-bank-feed">Multi-Currency Bank Feed</a> — Foreign-currency accounts with per-line rates.</li><li><a href="/glossary/accounting/xero-bank-rules">Xero Bank Rules</a> — Xero&#x27;s recurring-line coding automation.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Zoho GSTIN Mapping is the setup in Zoho Books that ties each of a business&amp;#x27;s GSTINs to its own branch and state, so every invoice, bill and return is attributed to the correct registration. It lives in the Branches settings of the organisation. It matters because a business with GSTINs in several states must file each return separately, and mapping keeps each state&amp;#x27;s transactions cleanly apart.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Zoho GSTIN Mapping?</h3><p>Zoho GSTIN Mapping sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/zoho-books-accounting">Zoho Books Accounting &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Zoho Books Accounting</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/zoho-books-accounting">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books<span class="arw">&rarr;</span></a></li><li><a href="/accounting-services">Accounting &amp; Bookkeeping Services in India<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/zoho-custom-modules">Zoho Custom Modules<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/multi-currency-bank-feed">Multi-Currency Bank Feed<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/xero-bank-rules">Xero Bank Rules<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Zoho GSTIN Mapping FAQs</h2><p class="faq-expanded__lead">Common questions about Zoho GSTIN Mapping for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Zoho GSTIN Mapping</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How are multiple GSTINs set up in Zoho Books?</h3><div class="faq-expanded__a" id="faq-a1"><p>Each GSTIN registered in a different state is added as a separate branch under GST settings, with its own address, place of supply and invoice series. Transactions are then tagged to a branch, so an invoice raised from the Maharashtra branch to a Karnataka customer picks up IGST automatically while a Maharashtra customer picks up CGST and SGST.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a branch and a separate organisation in Zoho Books?</h3><div class="faq-expanded__a" id="faq-a2"><p>A branch shares one chart of accounts, customer list and set of books while filing a separate GST return for its own GSTIN. A separate organisation keeps its own books entirely and is billed as another subscription. Use branches when one legal entity holds several state registrations, and separate organisations for companies with different PANs.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why must a customer GSTIN be mapped correctly in Zoho Books?</h3><div class="faq-expanded__a" id="faq-a3"><p>The first two digits of a GSTIN are the state code and drive place of supply, so a wrong GSTIN puts CGST and SGST on an inter state invoice and the buyer loses the credit. GSTR-1 is filed from these values, and the mismatch surfaces in the buyer's GSTR-2B, which under Section 16(2) blocks credit until the invoice is amended.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Zoho Books Help</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a></div></div><p class="eeat-note">Applicable framework: Product guidance – Zoho Books (India edition); CGST/IGST Acts 2017 (place of supply, GSTR-1/GSTR-3B). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
