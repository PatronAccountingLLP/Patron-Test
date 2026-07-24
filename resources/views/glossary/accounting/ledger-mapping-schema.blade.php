@extends('layouts.service-app')


@section('meta')
    <title>Ledger Mapping Schema: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ledger Mapping Schema: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema">
    <meta property="og:image" content="https://www.patronaccounting.com/images/ledger-mapping-schema-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#breadcrumb",
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
          "name": "Ledger Mapping Schema",
          "item": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#definedterm",
      "name": "Ledger Mapping Schema",
      "description": "A ledger mapping schema is the documented plan that matches each ledger or account in an old accounting system to the correct account in a new one, so data migrates without misclassification. It is built before a migration and used to drive the import. It matters because two systems rarely share the same chart of accounts, and an unmapped or wrongly mapped ledger corrupts the opening books in the new software.",
      "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is a ledger mapping schema built before an accounting software migration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Export the trial balance from the old system, list every ledger with its group, and map each one to a single target account in a sheet before any data moves. Three supplier ledgers for the same vendor collapse into one, and GST ledgers map to the destination tax accounts. Any unmapped ledger should stop the import rather than land in suspense."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a chart of accounts and a ledger mapping schema?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A chart of accounts is the list of accounts a system posts to, while a ledger mapping schema is the translation table saying which source ledger becomes which target account, including one to many splits. The chart of accounts is a permanent structure, whereas the mapping schema is used whenever two systems or two entities must be made to agree."
          }
        },
        {
          "@type": "Question",
          "name": "Why must CGST, SGST and IGST be mapped to separate ledgers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Input and output accounts for CGST, SGST, IGST and cess each need their own ledger because set off follows a statutory order under Sections 49, 49A and 49B of the CGST Act, with IGST credit used before CGST or SGST. Merging them into a single GST account makes the electronic credit ledger impossible to reconcile against GSTR-3B."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#article",
      "headline": "Ledger Mapping Schema",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1079,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema",
      "name": "Ledger Mapping Schema: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#definedterm"
      },
      "keywords": [
        "ledger mapping schema",
        "ledger mapping schema meaning",
        "ledger mapping schema in accounting",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/ledger-mapping-schema#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Ledger Mapping Schema</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Ledger Mapping Schema</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Ledger Mapping Schema: Definition</div><div class="definition-box"><p>A ledger mapping schema is the documented plan that matches each ledger or account in an old accounting system to the correct account in a new one, so data migrates without misclassification. It is built before a migration and used to drive the import. It matters because two systems rarely share the same chart of accounts, and an unmapped or wrongly mapped ledger corrupts the opening books in the new software.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Ledger Mapping Schema?</h2><p>A ledger mapping schema is essentially a translation table. Every source ledger — say Tally&#x27;s grouped ledgers — is listed against the destination account it should become in the new system, along with the group it belongs to and any consolidation of duplicates. It captures the decisions a migration depends on: what merges, what splits, and where each historical balance and transaction should land.</p><p>An Indian business meets the mapping schema at the heart of any software migration. A Kochi services company moving from Tally to Zoho Books cannot simply dump data across — Tally&#x27;s chart of accounts and Zoho&#x27;s differ, so each ledger is mapped deliberately: sundry debtors to Accounts Receivable, each expense head to its Zoho equivalent, GST ledgers to the right tax accounts. The schema is what makes the migrated trial balance tie back to the old system.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/historical-data-cut-off-date">Historical Data Cut-off Date</a> — The date deciding how much history the mapping must cover.</li><li><a href="/glossary/accounting/erp-open-balances">ERP Open Balances</a> — The opening balances the mapping routes into the new system.</li><li><a href="/glossary/accounting/inventory-voucher-mapping">Inventory Voucher Mapping</a> — The equivalent mapping for stock and inventory vouchers.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How a Ledger Mapping Schema Works</h2><p>A mapping schema is built and applied through a structured migration sequence:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Extract the source chart</strong><p>The full list of ledgers and groups is pulled from the old system — the inventory of what must be mapped.</p></li><li class="step-card"><span class="step-num">2</span><strong>Design the destination chart</strong><p>The new system&#x27;s chart of accounts is defined so there is a target for every source ledger.</p></li><li class="step-card"><span class="step-num">3</span><strong>Map ledger to account</strong><p>Each source ledger is matched to a destination account, with duplicates merged and mis-grouped items corrected.</p></li><li class="step-card"><span class="step-num">4</span><strong>Validate the mapping</strong><p>The schema is reviewed so no ledger is unmapped and no balance is orphaned before import.</p></li><li class="step-card"><span class="step-num">5</span><strong>Drive the import</strong><p>The migration tool uses the schema to load balances and transactions into the right accounts.</p></li><li class="step-card"><span class="step-num">6</span><strong>Reconcile after load</strong><p>The new trial balance is tied back to the old one to confirm the mapping was complete and correct.</p></li></ol></section><section id="software" class="gl-sec"><h2>How Ledger Mapping Schema Is Handled in Accounting Software</h2><p>Tools provide import templates and field-mapping screens, but the mapping decisions remain a human responsibility.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles ledger mapping</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books (India)</td><td>CSV/Excel import for the Chart of Accounts lets you map source ledgers to Zoho accounts field by field.</td><td>Zoho will import an unmapped or mis-grouped ledger as-is — validate the map before loading.</td></tr><tr><td>Tally / TallyPrime</td><td>XML import of masters recreates ledgers under specified groups.</td><td>Group assignment in the XML must be correct, or ledgers land under the wrong heads.</td></tr><tr><td>Xero</td><td>Chart of Accounts import via template maps codes to accounts.</td><td>Account codes must be planned; clashing or missing codes reject rows on import.</td></tr><tr><td>Odoo</td><td>Account import maps external codes to Odoo accounts during migration.</td><td>External-ID mismatches create duplicate accounts instead of mapping to existing ones.</td></tr></tbody></table></div><p class="table-note">Every tool imports what the schema tells it to — a wrong map produces a clean import of wrong data.</p></section><section id="example" class="gl-sec"><h2>Ledger Mapping Schema: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Tally &#x27;Sundry Debtors&#x27; balance</td><td>12,00,000</td><td>Mapped to Zoho &#x27;Accounts Receivable&#x27;</td></tr><tr><td>Tally &#x27;Sundry Creditors&#x27; balance</td><td>8,00,000</td><td>Mapped to Zoho &#x27;Accounts Payable&#x27;</td></tr><tr><td>Two duplicate expense ledgers</td><td>3,50,000</td><td>Merged into one Zoho expense account</td></tr><tr><td>Migrated trial balance</td><td>tie-out</td><td>Reconciled to Tally before go-live</td></tr></tbody></table></div><p>A Kochi services company migrating from Tally to Zoho Books builds a mapping schema: ₹12,00,000 of Sundry Debtors maps to Accounts Receivable, ₹8,00,000 of Sundry Creditors to Accounts Payable, and two duplicate expense ledgers totalling ₹3,50,000 merge into a single Zoho account. Because every ledger has a defined destination, the migrated trial balance ties back to Tally exactly, and the new books open clean.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Unmapped ledgers: Leaving a source ledger without a destination drops its balance → ensure every ledger is mapped before import.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With a Ledger Mapping Schema</h2><p>Mapping errors are the most common cause of a broken migration:</p><ul class="gloss-bullets"><li><strong>Unmapped ledgers</strong> — Leaving a source ledger without a destination drops its balance → ensure every ledger is mapped before import.</li><li><strong>Wrong group assignment</strong> — Mapping a liability into an income account distorts the new accounts → confirm the destination group, not just the name.</li><li><strong>Not merging duplicates</strong> — Carrying over duplicate ledgers clutters the new chart → consolidate duplicates in the schema.</li><li><strong>Skipping reconciliation</strong> — Going live without tying the new trial balance to the old hides mapping errors → reconcile before go-live.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around a migration mapping:</p><ul class="related-terms"><li><a href="/glossary/accounting/historical-data-cut-off-date">Historical Data Cut-off Date</a> — How much history the mapping covers.</li><li><a href="/glossary/accounting/erp-open-balances">ERP Open Balances</a> — The opening balances routed by the mapping.</li><li><a href="/glossary/accounting/inventory-voucher-mapping">Inventory Voucher Mapping</a> — Mapping for stock vouchers.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A ledger mapping schema is the documented plan that matches each ledger or account in an old accounting system to the correct account in a new one, so data migrates without misclassification. It is built before a migration and used to drive the import. It matters because two systems rarely share the same chart of accounts, and an unmapped or wrongly mapped ledger corrupts the opening books in the new software.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Ledger Mapping Schema?</h3><p>Ledger Mapping Schema sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services">Accounting &amp; Bookkeeping Services in India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounting &amp; Bookkeeping Services in India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Ledger Mapping Schema FAQs</h2><p class="faq-expanded__lead">Common questions about Ledger Mapping Schema for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Ledger Mapping Schema</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is a ledger mapping schema built before an accounting software migration?</h3><div class="faq-expanded__a" id="faq-a1"><p>Export the trial balance from the old system, list every ledger with its group, and map each one to a single target account in a sheet before any data moves. Three supplier ledgers for the same vendor collapse into one, and GST ledgers map to the destination tax accounts. Any unmapped ledger should stop the import rather than land in suspense.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a chart of accounts and a ledger mapping schema?</h3><div class="faq-expanded__a" id="faq-a2"><p>A chart of accounts is the list of accounts a system posts to, while a ledger mapping schema is the translation table saying which source ledger becomes which target account, including one to many splits. The chart of accounts is a permanent structure, whereas the mapping schema is used whenever two systems or two entities must be made to agree.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why must CGST, SGST and IGST be mapped to separate ledgers?</h3><div class="faq-expanded__a" id="faq-a3"><p>Input and output accounts for CGST, SGST, IGST and cess each need their own ledger because set off follows a statutory order under Sections 49, 49A and 49B of the CGST Act, with IGST credit used before CGST or SGST. Merging them into a single GST account makes the electronic credit ledger impossible to reconcile against GSTR-3B.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Migration practice; chart-of-accounts presentation per Companies Act 2013 (Schedule III) and AS 1 / Ind AS 1. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
