@extends('layouts.service-app')


@section('meta')
    <title>Odoo Double-Entry Engine: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Odoo Double-Entry Engine: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine">
    <meta property="og:image" content="https://www.patronaccounting.com/images/odoo-double-entry-engine-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#breadcrumb",
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
          "name": "Odoo Double-Entry Engine",
          "item": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#definedterm",
      "name": "Odoo Double-Entry Engine",
      "description": "The Odoo double-entry engine is the accounting core that automatically posts a balanced journal entry — equal debits and credits — whenever a business document such as an invoice or payment is confirmed. It works through the Chart of Accounts and Journals in Odoo Accounting. It matters because it keeps the ledger balanced without the user hand-writing debits and credits, while still producing a full, auditable journal.",
      "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does Odoo post a journal entry when a customer invoice is confirmed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Confirming a customer invoice in Odoo posts an entry that debits the receivable account from the customer's account receivable field and credits the income account and tax accounts taken from each invoice line. An invoice of Rs 1,18,000 including 18 percent GST posts Rs 1,18,000 to debtors, Rs 1,00,000 to sales and Rs 18,000 to output GST."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Odoo's double-entry engine and Tally's voucher system?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Odoo generates journal entries automatically from business documents such as sales orders, invoices and stock moves, so the ledger is a by-product of operations, while Tally is built around a user selecting a voucher type and entering the entry directly. Odoo therefore enforces stricter document linkage, and Tally gives faster manual entry for a small accounts team."
          }
        },
        {
          "@type": "Question",
          "name": "Which chart of accounts does Odoo use for an Indian company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Odoo applies the Indian localisation package, l10n_in, which installs an India specific chart of accounts along with CGST, SGST, IGST and cess tax codes and GST return reports. The account groups still have to be mapped to Schedule III heads of the Companies Act 2013 before financial statements can be signed, since the default chart is not laid out in Schedule III order."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#article",
      "headline": "Odoo Double-Entry Engine",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1058,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine",
      "name": "Odoo Double-Entry Engine: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#definedterm"
      },
      "keywords": [
        "Odoo double-entry engine",
        "odoo double-entry engine meaning",
        "odoo double-entry engine in accounting",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-double-entry-engine#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Odoo Double-Entry Engine</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Odoo Double-Entry Engine</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Odoo Double-Entry Engine: Definition</div><div class="definition-box"><p>The Odoo double-entry engine is the accounting core that automatically posts a balanced journal entry — equal debits and credits — whenever a business document such as an invoice or payment is confirmed. It works through the Chart of Accounts and Journals in Odoo Accounting. It matters because it keeps the ledger balanced without the user hand-writing debits and credits, while still producing a full, auditable journal.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is the Odoo Double-Entry Engine?</h2><p>Odoo, like every serious accounting system, is built on double entry — but it hides the mechanics. Rather than call the feature a product, &quot;double-entry engine&quot; is a plain description of how Odoo Accounting posts: confirm a customer invoice and Odoo debits Accounts Receivable and credits Sales and the tax account, all derived from the accounts configured on the product, journal, tax and contact. The user records a business event; the engine translates it into a balanced journal entry.</p><p>An Indian business on Odoo meets the engine every time it validates a document. A Noida electronics distributor confirming a sales invoice never types a debit or credit — Odoo generates the journal items behind the scenes, applies GST from the tax setup, and the entry flows straight to the General Ledger and GST reports. The value is consistency: the same document always posts the same way, provided the underlying account configuration is right.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/odoo-fiscal-positions">Odoo Fiscal Positions</a> — Rules that remap taxes and accounts the engine then posts.</li><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a> — Combining group entities whose books each post via the engine.</li><li><a href="/glossary/accounting/tally-vault">Tally Vault</a> — Tally&#x27;s data-encryption feature, from the other main Indian ledger tool.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How the Odoo Double-Entry Engine Works</h2><p>A document becomes a balanced ledger entry through Odoo&#x27;s posting chain:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Configure the accounts</strong><p>Products, journals, taxes and contacts each carry default accounts — the configuration the engine reads.</p></li><li class="step-card"><span class="step-num">2</span><strong>Create a document</strong><p>A user raises an invoice, bill or payment in draft; no ledger impact yet.</p></li><li class="step-card"><span class="step-num">3</span><strong>Confirm (post) the document</strong><p>On validation, Odoo generates a journal entry with matching debit and credit journal items.</p></li><li class="step-card"><span class="step-num">4</span><strong>Post to the general ledger</strong><p>The journal items update the relevant accounts, feeding the trial balance and reports.</p></li><li class="step-card"><span class="step-num">5</span><strong>Report and reconcile</strong><p>The General Ledger, Trial Balance and GST reports draw from the posted entries; drafts are excluded until posted.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Odoo Double-Entry Engine in Odoo</h2><p>The engine itself is built in; what you set up is the Chart of Accounts and Journals it posts through (Odoo Accounting, v17/18):</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open the Accounting app</strong><p>From the Odoo apps, open Accounting.</p></li><li class="step-card"><span class="step-num">2</span><strong>Review the Chart of Accounts</strong><p>Go to Configuration &gt; Chart of Accounts to see and edit every account the engine can post to.</p></li><li class="step-card"><span class="step-num">3</span><strong>Set up Journals</strong><p>Go to Configuration &gt; Journals to define the sales, purchase, bank and miscellaneous journals entries are booked into.</p></li><li class="step-card"><span class="step-num">4</span><strong>Assign default accounts</strong><p>On products, taxes and contacts, set the income, expense and tax accounts the engine should use — this is what drives the automatic posting.</p></li><li class="step-card"><span class="step-num">5</span><strong>Confirm a test document</strong><p>Create and confirm a sample invoice, then open its journal entry to verify the debit and credit landed on the intended accounts.</p></li><li class="step-card"><span class="step-num">6</span><strong>Check the reports</strong><p>Review Reporting &gt; General Ledger and Trial Balance to confirm posted entries flow through correctly.</p></li></ol></section><section id="example" class="gl-sec"><h2>Odoo Double-Entry Engine: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Sales invoice confirmed</td><td>1,18,000</td><td>Debit Accounts Receivable</td></tr><tr><td>Sales income</td><td>1,00,000</td><td>Credit Sales</td></tr><tr><td>GST 18% output</td><td>18,000</td><td>Credit GST Payable</td></tr><tr><td>Journal entry balance</td><td>1,18,000 / 1,18,000</td><td>Debits equal credits, auto-posted</td></tr></tbody></table></div><p>A Noida electronics distributor confirms a ₹1,18,000 sales invoice in Odoo — ₹1,00,000 goods plus ₹18,000 GST. The double-entry engine posts a debit of ₹1,18,000 to Accounts Receivable and credits of ₹1,00,000 to Sales and ₹18,000 to GST Payable, all without the user entering a single debit or credit. The entry balances, feeds the GST report, and the distributor only had to confirm the invoice.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Wrong default accounts on products: A product pointing to the wrong income account posts every sale to the wrong ledger → set correct income/expense accounts on products and categories.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With the Odoo Double-Entry Engine</h2><p>The engine is reliable; the configuration feeding it is where errors hide:</p><ul class="gloss-bullets"><li><strong>Wrong default accounts on products</strong> — A product pointing to the wrong income account posts every sale to the wrong ledger → set correct income/expense accounts on products and categories.</li><li><strong>Leaving entries in draft</strong> — Unposted draft documents are missing from the ledger and reports → validate documents so their entries post.</li><li><strong>Editing posted entries carelessly</strong> — Force-editing a posted journal breaks the audit trail → use credit notes or reversals rather than altering posted entries.</li><li><strong>Misconfigured tax accounts</strong> — Taxes mapped to the wrong account misstate GST liability → verify the tax configuration before high-volume posting.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around the Odoo accounting core:</p><ul class="related-terms"><li><a href="/glossary/accounting/odoo-fiscal-positions">Odoo Fiscal Positions</a> — Tax and account remapping rules.</li><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a> — Combining group entities&#x27; accounts.</li><li><a href="/glossary/accounting/tally-vault">Tally Vault</a> — Tally&#x27;s company data encryption.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>The Odoo double-entry engine is the accounting core that automatically posts a balanced journal entry — equal debits and credits — whenever a business document such as an invoice or payment is confirmed. It works through the Chart of Accounts and Journals in Odoo Accounting. It matters because it keeps the ledger balanced without the user hand-writing debits and credits, while still producing a full, auditable journal.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Odoo Double-Entry Engine?</h3><p>Odoo Double-Entry Engine sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services">Accounting &amp; Bookkeeping Services in India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounting &amp; Bookkeeping Services in India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Odoo Double-Entry Engine FAQs</h2><p class="faq-expanded__lead">Common questions about Odoo Double-Entry Engine for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Odoo Double-Entry Engine</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does Odoo post a journal entry when a customer invoice is confirmed?</h3><div class="faq-expanded__a" id="faq-a1"><p>Confirming a customer invoice in Odoo posts an entry that debits the receivable account from the customer's account receivable field and credits the income account and tax accounts taken from each invoice line. An invoice of Rs 1,18,000 including 18 percent GST posts Rs 1,18,000 to debtors, Rs 1,00,000 to sales and Rs 18,000 to output GST.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between Odoo's double-entry engine and Tally's voucher system?</h3><div class="faq-expanded__a" id="faq-a2"><p>Odoo generates journal entries automatically from business documents such as sales orders, invoices and stock moves, so the ledger is a by-product of operations, while Tally is built around a user selecting a voucher type and entering the entry directly. Odoo therefore enforces stricter document linkage, and Tally gives faster manual entry for a small accounts team.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Which chart of accounts does Odoo use for an Indian company?</h3><div class="faq-expanded__a" id="faq-a3"><p>Odoo applies the Indian localisation package, l10n_in, which installs an India specific chart of accounts along with CGST, SGST, IGST and cess tax codes and GST return reports. The account groups still have to be mapped to Schedule III heads of the Companies Act 2013 before financial statements can be signed, since the default chart is not laid out in Schedule III order.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Odoo Docs</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a></div></div><p class="eeat-note">Applicable framework: Double-entry accounting per AS 1 / Ind AS 1; GST under CGST/IGST Acts 2017; product guidance – Odoo Accounting. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
