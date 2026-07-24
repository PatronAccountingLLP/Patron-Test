@extends('layouts.service-app')


@section('meta')
    <title>Hubdoc Automation: Meaning and Example in Accounting</title>
    <meta name="description" content="Bills captured from email, then published to the ledger with the document. What it means, why it matters and where you will meet it. In plain English.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/hubdoc-automation">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Hubdoc Automation: Meaning and Example in Accounting | Patron Accounting">
    <meta property="og:description" content="Bills captured from email, then published to the ledger with the document. What it means, why it matters and where you will meet it. In plain English.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/hubdoc-automation">
    <meta property="og:image" content="https://www.patronaccounting.com/images/hubdoc-automation-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#breadcrumb",
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
          "name": "Hubdoc Automation",
          "item": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#definedterm",
      "name": "Hubdoc Automation",
      "description": "Hubdoc Automation is the capture-and-publish flow where Hubdoc reads bills and receipts, extracts the key data, and pushes them into Xero as ready-to-reconcile transactions. It runs between the document inbox and the Xero ledger. It matters because it removes manual data entry from accounts payable — a photographed bill becomes a coded transaction with the source document attached, without anyone typing it in.",
      "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does a document uploaded to Hubdoc reach the accounting ledger?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hubdoc reads the supplier name, date, amount and tax from an uploaded bill or bank statement, matches it to a saved supplier rule, and publishes it to Xero as a draft bill with the image attached. The draft still needs a human to approve the coding, so the tool removes typing, not review."
          }
        },
        {
          "@type": "Question",
          "name": "Is Hubdoc better than Dext?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hubdoc is included free with a Xero subscription and is strongest at fetching statements and bills directly from supplier portals, while Dext is a paid tool with sharper extraction, better line item capture and support for more accounting systems. For a business already on Xero with modest volumes, Hubdoc is usually enough; heavy document volumes justify Dext."
          }
        },
        {
          "@type": "Question",
          "name": "Does Hubdoc capture GST details from an Indian tax invoice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hubdoc captures the invoice value and a single tax amount, but it does not split CGST, SGST and IGST or validate the supplier GSTIN, so Indian GST coding has to be set through Xero tax rates and reviewed manually. Original invoices must still be preserved for eight financial years under Section 128(5) of the Companies Act 2013."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#article",
      "headline": "What Is Hubdoc Automation? Definition and How It Works",
      "description": "Bills captured from email, then published to the ledger with the document. What it means, why it matters and where you will meet it. In plain English.",
      "inLanguage": "en-IN",
      "wordCount": 1032,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation",
      "name": "Hubdoc Automation: Meaning and Example in Accounting",
      "description": "Bills captured from email, then published to the ledger with the document. What it means, why it matters and where you will meet it. In plain English.",
      "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#definedterm"
      },
      "keywords": [
        "Hubdoc Automation",
        "what is Hubdoc Automation",
        "hubdoc automation meaning",
        "hubdoc automation in accounting",
        "Odoo Double-Entry Engine",
        "Odoo Fiscal Positions",
        "Parent-Subsidiary Consolidation",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/hubdoc-automation#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Hubdoc Automation</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Is Hubdoc Automation? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Hubdoc Automation: Definition</div><div class="definition-box"><p>Hubdoc Automation is the capture-and-publish flow where Hubdoc reads bills and receipts, extracts the key data, and pushes them into Xero as ready-to-reconcile transactions. It runs between the document inbox and the Xero ledger. It matters because it removes manual data entry from accounts payable — a photographed bill becomes a coded transaction with the source document attached, without anyone typing it in.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Hubdoc Automation?</h2><p>Hubdoc is a document-capture tool, included with Xero business plans, that turns bills and receipts into data. You email, scan or photograph a document into Hubdoc; it reads the supplier, date, amount and tax, and — once configured — publishes a matching transaction into Xero with the original document attached. Automation is the part that lets this happen without re-keying: a supplier&#x27;s bills, once set up, flow through on their own.</p><p>An Indian business using Xero meets Hubdoc at the accounts-payable desk. An Ahmedabad trading firm receiving dozens of supplier bills a week photographs them into Hubdoc rather than typing each into Xero; the data is extracted, the GST is picked up, and the bill lands in Xero coded and ready to pay and reconcile. The document itself stays attached, which is exactly the audit trail an assessment or review expects.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/odoo-double-entry-engine">Odoo Double-Entry Engine</a> — The posting engine an equivalent capture tool would feed in Odoo.</li><li><a href="/glossary/accounting/odoo-fiscal-positions">Odoo Fiscal Positions</a> — Automatic tax and account mapping applied to posted bills.</li><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a> — Combining group entities&#x27; accounts, each fed by its own bookkeeping.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Hubdoc Automation Works</h2><p>A bill travels from paper to a reconciled Xero transaction with little human input:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Capture the document</strong><p>A bill or receipt is emailed, scanned or photographed into Hubdoc — the source event.</p></li><li class="step-card"><span class="step-num">2</span><strong>Extract the data</strong><p>Hubdoc reads the supplier, date, amount and tax from the document into structured fields.</p></li><li class="step-card"><span class="step-num">3</span><strong>Apply the supplier setup</strong><p>The saved publishing rules for that supplier decide the account, tax rate and contact to use.</p></li><li class="step-card"><span class="step-num">4</span><strong>Publish to Xero</strong><p>A bill or spend-money transaction is created in Xero with the document attached.</p></li><li class="step-card"><span class="step-num">5</span><strong>Match and reconcile</strong><p>The published transaction is matched to the bank feed line and reconciled, closing the loop.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Hubdoc Automation in Hubdoc / Xero</h2><p>Hubdoc is connected to Xero from within Hubdoc, then auto-publishing is set per supplier (Hubdoc is included with Xero Business Edition plans):</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open Hubdoc settings</strong><p>In Hubdoc, click the Gear icon (Settings) in the top-right corner.</p></li><li class="step-card"><span class="step-num">2</span><strong>Go to Integrations</strong><p>Select the Integrations tab, find Xero and click Connect.</p></li><li class="step-card"><span class="step-num">3</span><strong>Authorise in Xero</strong><p>You are redirected to Xero — choose the correct organisation and click Allow access; Hubdoc then appears under Xero&#x27;s Connected apps.</p></li><li class="step-card"><span class="step-num">4</span><strong>Open a supplier&#x27;s document</strong><p>In Hubdoc, open a document from the supplier you want to automate; the publishing pane appears on the right.</p></li><li class="step-card"><span class="step-num">5</span><strong>Configure the publishing fields</strong><p>Set Publish As (bill or spend money), the contact, account and tax rate for that supplier.</p></li><li class="step-card"><span class="step-num">6</span><strong>Turn on Auto-sync</strong><p>Tick Auto-sync at the bottom of the pane and Save &amp; Close; future documents from that supplier with the same setup publish to Xero automatically.</p></li></ol></section><section id="example" class="gl-sec"><h2>Hubdoc Automation: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Supplier bill photographed into Hubdoc</td><td>41,300</td><td>Data extracted: supplier, date, GST</td></tr><tr><td>Published to Xero as a bill</td><td>41,300</td><td>Coded to Purchases, GST 18% (₹6,300)</td></tr><tr><td>Document attached in Xero</td><td>—</td><td>Audit trail preserved</td></tr><tr><td>Matched to bank payment</td><td>41,300</td><td>Reconciled in one step</td></tr></tbody></table></div><p>An Ahmedabad trading firm photographs a ₹41,300 supplier bill into Hubdoc. Hubdoc extracts the supplier, date and ₹6,300 GST, and — because the supplier is set to auto-sync — publishes a coded bill into Xero with the image attached. When the payment clears the bank feed, it matches the bill and reconciles in a single step, and the original document is available if an assessment ever asks for it.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Auto-syncing before verifying extraction: Turning on auto-sync while Hubdoc still misreads amounts posts wrong bills → confirm extraction accuracy for a supplier before enabling auto-sync.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Hubdoc Automation</h2><p>Automation without review can push errors straight into the ledger:</p><ul class="gloss-bullets"><li><strong>Auto-syncing before verifying extraction</strong> — Turning on auto-sync while Hubdoc still misreads amounts posts wrong bills → confirm extraction accuracy for a supplier before enabling auto-sync.</li><li><strong>Wrong default tax rate</strong> — A supplier set to the wrong GST rate repeats the error on every bill → check the tax rate in the publishing setup.</li><li><strong>Duplicate documents</strong> — Emailing and photographing the same bill creates duplicate transactions → use one capture channel per document.</li><li><strong>Ignoring the review queue</strong> — Letting captured documents pile up unpublished defeats the automation → clear the Hubdoc queue regularly.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Related posting and grouping concepts:</p><ul class="related-terms"><li><a href="/glossary/accounting/odoo-double-entry-engine">Odoo Double-Entry Engine</a> — Automatic balanced posting in Odoo.</li><li><a href="/glossary/accounting/odoo-fiscal-positions">Odoo Fiscal Positions</a> — Automatic tax and account mapping.</li><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a> — Combining group entities&#x27; accounts.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Hubdoc Automation is the capture-and-publish flow where Hubdoc reads bills and receipts, extracts the key data, and pushes them into Xero as ready-to-reconcile transactions. It runs between the document inbox and the Xero ledger. It matters because it removes manual data entry from accounts payable — a photographed bill becomes a coded transaction with the source document attached, without anyone typing it in.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Hubdoc Automation?</h3><p>Hubdoc Automation sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/xero-accounting">Xero Accounting Services &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Xero Accounting Services</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/xero-accounting">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounts-payable-outsourcing-services">Accounts Payable Outsourcing<span class="arw">&rarr;</span></a></li><li><a href="/accounting-services">Accounting &amp; Bookkeeping Services in India<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/odoo-double-entry-engine">Odoo Double-Entry Engine<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/odoo-fiscal-positions">Odoo Fiscal Positions<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Hubdoc Automation FAQs</h2><p class="faq-expanded__lead">Common questions about Hubdoc Automation for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Hubdoc Automation</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does a document uploaded to Hubdoc reach the accounting ledger?</h3><div class="faq-expanded__a" id="faq-a1"><p>Hubdoc reads the supplier name, date, amount and tax from an uploaded bill or bank statement, matches it to a saved supplier rule, and publishes it to Xero as a draft bill with the image attached. The draft still needs a human to approve the coding, so the tool removes typing, not review.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Is Hubdoc better than Dext?</h3><div class="faq-expanded__a" id="faq-a2"><p>Hubdoc is included free with a Xero subscription and is strongest at fetching statements and bills directly from supplier portals, while Dext is a paid tool with sharper extraction, better line item capture and support for more accounting systems. For a business already on Xero with modest volumes, Hubdoc is usually enough; heavy document volumes justify Dext.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Does Hubdoc capture GST details from an Indian tax invoice?</h3><div class="faq-expanded__a" id="faq-a3"><p>Hubdoc captures the invoice value and a single tax amount, but it does not split CGST, SGST and IGST or validate the supplier GSTIN, so Indian GST coding has to be set through Xero tax rates and reviewed manually. Original invoices must still be preserved for eight financial years under Section 128(5) of the Companies Act 2013.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Xero Central</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: Product guidance – Hubdoc / Xero; record retention under Companies Act 2013 (Section 128) and CGST Act 2017 (Section 36). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary/accounting">&larr; Back to the accounting glossary</a></div></footer>
</div>
@endverbatim
@endsection
