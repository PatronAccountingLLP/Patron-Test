@extends('layouts.service-app')


@section('meta')
    <title>Outstanding Balances Migration: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Outstanding Balances Migration: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration">
    <meta property="og:image" content="https://www.patronaccounting.com/images/outstanding-balances-migration-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#breadcrumb",
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
          "name": "Outstanding Balances Migration",
          "item": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#definedterm",
      "name": "Outstanding Balances Migration",
      "description": "Outstanding balances migration is the process of carrying open, unpaid customer invoices and supplier bills from an old accounting system into a new one, invoice by invoice, rather than as a single lump sum. It is done at go-live. It matters because collections, payments and aging must continue seamlessly — a debtor&#x27;s individual invoices have to exist in the new system so receipts can be matched and reminders sent.",
      "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How are open customer and supplier invoices carried into a new accounting system?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Open invoices are imported one line per unpaid document, with the original invoice number, invoice date and balance amount, posted against a temporary migration suspense account so the ledger stays balanced. The suspense account must net to zero once opening trial balance figures are loaded. Importing only a single lump sum per party destroys ageing and makes later reconciliation impossible."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between migrating outstanding balances and migrating full transaction history?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Migrating outstanding balances brings across only open items and opening balances as at the cut-off date, which takes days, while migrating full transaction history reloads every voucher of earlier years and takes weeks with a high risk of mismatch. Most Indian businesses migrate balances only and keep the old software in read-only mode for historical reference and audit."
          }
        },
        {
          "@type": "Question",
          "name": "Which cut-off date works best for migrating outstanding balances in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "1 April is the cleanest cut-off, because the Indian financial year runs from 1 April to 31 March, so audited closing figures of the previous year become the opening balances with no part year split. A mid-year switch is workable but needs a reconciled trial balance on the cut-off date and matched GST returns for the months already filed."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#article",
      "headline": "Outstanding Balances Migration",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1069,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration",
      "name": "Outstanding Balances Migration: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#definedterm"
      },
      "keywords": [
        "outstanding balances migration",
        "what is outstanding balances migration",
        "outstanding balances migration meaning",
        "outstanding balances migration in accounting",
        "GST History Extraction",
        "Double-Entry Bookkeeping",
        "General Ledger",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/outstanding-balances-migration#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Outstanding Balances Migration</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Outstanding Balances Migration</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div><aside class="gl-rotcta" data-rotate><div class="gl-rotcta__slides"><div class="gl-rotcta__slide is-active"><div class="gl-rotcta__badge">Free consultation</div><h3>Prefer a CA to handle it?</h3><p>CA-led accounting, GST and payroll for Indian businesses, on flat monthly plans.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Recommended</div><h3>Need help with Outstanding Balances Migration?</h3><p>Migration: Tally to Zoho Books - our CA-led team handles it end to end.</p><a class="gl-rotcta__btn" href="/migration-from-tally-to-zoho">Explore the service &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Migration: Tally to Odoo</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/migration-from-tally-to-odoo">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Accounts Reconciliation &amp; Audit</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/accounts-reconciliation-and-audit">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Free 30-min call</div><h3>Questions about Outstanding Balances Migration?</h3><p>Get a free 30-minute call with a Chartered Accountant, no obligation.</p><a class="gl-rotcta__btn" href="/contact-us">Book a free call &rarr;</a></div></div><div class="gl-rotcta__dots"><span class="gl-rotcta__dot is-active" data-i="0"></span><span class="gl-rotcta__dot" data-i="1"></span><span class="gl-rotcta__dot" data-i="2"></span><span class="gl-rotcta__dot" data-i="3"></span><span class="gl-rotcta__dot" data-i="4"></span></div></aside></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Outstanding Balances Migration: Definition</div><div class="definition-box"><p>Outstanding balances migration is the process of carrying open, unpaid customer invoices and supplier bills from an old accounting system into a new one, invoice by invoice, rather than as a single lump sum. It is done at go-live. It matters because collections, payments and aging must continue seamlessly — a debtor&#x27;s individual invoices have to exist in the new system so receipts can be matched and reminders sent.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Outstanding Balances Migration?</h2><p>Outstanding balances migration deals specifically with the open items on the debtor and creditor ledgers — the invoices customers have not yet paid and the bills the business has not yet settled as at the cut-off date. Rather than bring the debtor across as one opening figure, each unpaid invoice is loaded individually, with its date, amount and reference, so the new system can match a later receipt to the right invoice and age the balance correctly.</p><p>An Indian business meets this at go-live on a new system. A Thane services firm with ₹18,00,000 owed across forty customer invoices loads each open invoice into the new software, not just the total. When a customer then pays a specific invoice, the receipt matches cleanly, the aging report stays accurate, and GST already accounted for on those invoices is not double-counted. The same is done for unpaid supplier bills on the payables side.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/gst-history-extraction">GST History Extraction</a> — Extracting GST already accounted on the open invoices.</li><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping</a> — The debit-credit basis the opening items post through.</li><li><a href="/glossary/accounting/general-ledger">General Ledger</a> — Where the migrated party balances are summarised.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Outstanding Balances Migration Works</h2><p>Open items move across and prove out through a defined sequence:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Extract the open items</strong><p>The list of unpaid invoices and bills as at the cut-off date is pulled from the old system — the detail to be migrated.</p></li><li class="step-card"><span class="step-num">2</span><strong>Load each item individually</strong><p>Every open invoice and bill is entered in the new system with its date, amount, party and reference.</p></li><li class="step-card"><span class="step-num">3</span><strong>Set the opening against the party</strong><p>Each item posts to the correct customer or supplier so the party ledger reflects the true open position.</p></li><li class="step-card"><span class="step-num">4</span><strong>Avoid double-counting GST</strong><p>Open items are loaded as balances, not re-issued as fresh taxable invoices, so GST already accounted is not repeated.</p></li><li class="step-card"><span class="step-num">5</span><strong>Reconcile the aging</strong><p>The migrated debtor and creditor totals and their aging are reconciled to the old system before go-live.</p></li></ol></section><section id="software" class="gl-sec"><h2>How Outstanding Balances Migration Is Handled in Accounting Software</h2><p>Each tool lets you load open items as opening documents; the discipline is item-level detail and no GST double-count.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles outstanding balances</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books (India)</td><td>Open invoices/bills are entered with the opening-balance date so payments can be matched to them.</td><td>Entering them as normal invoices re-triggers GST — load them as opening balances/adjustments.</td></tr><tr><td>Tally / TallyPrime</td><td>Bill-wise details on the ledger opening balance capture each pending reference.</td><td>Skipping &#x27;Maintain bill-wise details&#x27; collapses open items into one figure and breaks matching.</td></tr><tr><td>Xero</td><td>Outstanding invoices/bills are entered as at the conversion date via the conversion balances/aged detail.</td><td>Conversion invoices dated wrongly distort aging from day one.</td></tr><tr><td>Odoo</td><td>Open invoices/bills are imported in their open state so residual amounts remain matchable.</td><td>Importing them as paid or as journal-only entries loses the ability to match receipts.</td></tr></tbody></table></div><p class="table-note">The test is the same everywhere: party-wise open items and aging in the new system must match the old.</p></section><section id="example" class="gl-sec"><h2>Outstanding Balances Migration: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Open customer invoices (40 nos.)</td><td>18,00,000</td><td>Loaded invoice by invoice</td></tr><tr><td>Open supplier bills (22 nos.)</td><td>11,00,000</td><td>Loaded bill by bill</td></tr><tr><td>Later receipt against Invoice #A-118</td><td>65,000</td><td>Matched to the specific open invoice</td></tr><tr><td>Aging report after migration</td><td>reconciled</td><td>Ties to old system&#x27;s aging</td></tr></tbody></table></div><p>A Thane services firm migrates ₹18,00,000 of receivables across forty customer invoices and ₹11,00,000 of payables across twenty-two bills — each open item loaded individually. When a customer later pays ₹65,000 against invoice #A-118, the receipt matches that exact invoice, keeping the aging accurate. Because the items were loaded as opening balances rather than re-issued, the GST already accounted on them is not counted twice.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>item migration goes wrong when detail or GST treatment slips:</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Outstanding Balances Migration</h2><p>Open-item migration goes wrong when detail or GST treatment slips:</p><ul class="gloss-bullets"><li><strong>Loading debtors as a lump sum</strong> — A single opening figure with no invoice detail stops receipts matching → load each open invoice and bill individually.</li><li><strong>Re-issuing open invoices as new</strong> — Entering them as fresh taxable invoices double-counts GST → load them as opening balances, not new documents.</li><li><strong>Ignoring bill-wise references</strong> — Dropping invoice references breaks reconciliation and reminders → carry the original reference on each item.</li><li><strong>Not reconciling aging</strong> — Going live without tying the aging to the old system hides missed items → reconcile party-wise aging before go-live.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around migrating open items:</p><ul class="related-terms"><li><a href="/glossary/accounting/gst-history-extraction">GST History Extraction</a> — Extracting GST accounted on open invoices.</li><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping</a> — The basis the opening items post through.</li><li><a href="/glossary/accounting/general-ledger">General Ledger</a> — Where migrated party balances summarise.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Outstanding balances migration is the process of carrying open, unpaid customer invoices and supplier bills from an old accounting system into a new one, invoice by invoice, rather than as a single lump sum. It is done at go-live. It matters because collections, payments and aging must continue seamlessly — a debtor&amp;#x27;s individual invoices have to exist in the new system so receipts can be matched and reminders sent.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Outstanding Balances Migration?</h3><p>Outstanding Balances Migration sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Migration: Tally to Zoho Books</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/migration-from-tally-to-zoho">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/migration-from-tally-to-odoo">Migration: Tally to Odoo<span class="arw">&rarr;</span></a></li><li><a href="/accounts-reconciliation-and-audit">Accounts Reconciliation &amp; Audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/gst-history-extraction">GST History Extraction<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/general-ledger">General Ledger<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Outstanding Balances Migration FAQs</h2><p class="faq-expanded__lead">Common questions about Outstanding Balances Migration for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Outstanding Balances Migration</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How are open customer and supplier invoices carried into a new accounting system?</h3><div class="faq-expanded__a" id="faq-a1"><p>Open invoices are imported one line per unpaid document, with the original invoice number, invoice date and balance amount, posted against a temporary migration suspense account so the ledger stays balanced. The suspense account must net to zero once opening trial balance figures are loaded. Importing only a single lump sum per party destroys ageing and makes later reconciliation impossible.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between migrating outstanding balances and migrating full transaction history?</h3><div class="faq-expanded__a" id="faq-a2"><p>Migrating outstanding balances brings across only open items and opening balances as at the cut-off date, which takes days, while migrating full transaction history reloads every voucher of earlier years and takes weeks with a high risk of mismatch. Most Indian businesses migrate balances only and keep the old software in read-only mode for historical reference and audit.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Which cut-off date works best for migrating outstanding balances in India?</h3><div class="faq-expanded__a" id="faq-a3"><p>1 April is the cleanest cut-off, because the Indian financial year runs from 1 April to 31 March, so audited closing figures of the previous year become the opening balances with no part year split. A mid-year switch is workable but needs a reconciled trial balance on the cut-off date and matched GST returns for the months already filed.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a></div></div><p class="eeat-note">Applicable framework: Migration practice; receivables/payables presentation per AS 1 / Ind AS 1; GST accounting under CGST Act 2017. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
