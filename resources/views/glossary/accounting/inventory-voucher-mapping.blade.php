@extends('layouts.service-app')


@section('meta')
    <title>Inventory Voucher Mapping: What Preparers Should Know</title>
    <meta name="description" content="Matching each stock movement type to its equivalent in the new system. The definition, the entry it drives and the mistake to avoid. Explained simply.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Inventory Voucher Mapping: What Preparers Should Know | Patron Accounting">
    <meta property="og:description" content="Matching each stock movement type to its equivalent in the new system. The definition, the entry it drives and the mistake to avoid. Explained simply.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping">
    <meta property="og:image" content="https://www.patronaccounting.com/images/inventory-voucher-mapping-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#breadcrumb",
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
          "name": "Inventory Voucher Mapping",
          "item": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#definedterm",
      "name": "Inventory Voucher Mapping",
      "description": "Inventory voucher mapping is the plan that matches each stock voucher type and item in an old system — sales, purchase, stock journal, delivery and receipt notes — to the equivalent transaction and item master in a new one, so inventory migrates accurately. It is set before a stock migration. It matters because inventory drives both the stock ledger and the cost of goods sold, so a mis-mapped voucher distorts valuation and margin.",
      "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are the types of inventory vouchers in Tally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The main inventory vouchers are the Receipt Note for goods received, the Delivery Note for goods despatched, Rejections In and Rejections Out for returns, and the Stock Journal for transfers and manufacturing. Each one is mapped to an accounting voucher, so a Receipt Note maps to the purchase invoice and a Delivery Note to the sales invoice."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between an inventory voucher and an accounting voucher?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An inventory voucher moves quantity and stock value only, while an accounting voucher moves ledger balances and creates the tax liability. A Delivery Note reduces stock when goods leave the godown but records no sale; the sales invoice raised two days later books the receivable and the GST. Mapping the two stops stock leaving without revenue."
          }
        },
        {
          "@type": "Question",
          "name": "How does inventory voucher mapping affect GST reporting in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only accounting vouchers carrying a GST tax ledger flow into GSTR-1, so goods despatched on a Delivery Note that is never converted into a tax invoice leave stock reduced and nothing reported. Goods sent for job work must instead move on a delivery challan under Rule 55 and be tracked in Form ITC-04 rather than treated as a sale."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#article",
      "headline": "What Is Inventory Voucher Mapping? Definition and How It Works",
      "description": "Matching each stock movement type to its equivalent in the new system. The definition, the entry it drives and the mistake to avoid. Explained simply.",
      "inLanguage": "en-IN",
      "wordCount": 1048,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping",
      "name": "Inventory Voucher Mapping: What Preparers Should Know",
      "description": "Matching each stock movement type to its equivalent in the new system. The definition, the entry it drives and the mistake to avoid. Explained simply.",
      "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#definedterm"
      },
      "keywords": [
        "inventory voucher mapping",
        "what is inventory voucher mapping",
        "inventory voucher mapping meaning",
        "inventory voucher mapping in accounting",
        "Outstanding Balances Migration",
        "GST History Extraction",
        "Double-Entry Bookkeeping",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/inventory-voucher-mapping#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Inventory Voucher Mapping</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Is Inventory Voucher Mapping? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Inventory Voucher Mapping: Definition</div><div class="definition-box"><p>Inventory voucher mapping is the plan that matches each stock voucher type and item in an old system — sales, purchase, stock journal, delivery and receipt notes — to the equivalent transaction and item master in a new one, so inventory migrates accurately. It is set before a stock migration. It matters because inventory drives both the stock ledger and the cost of goods sold, so a mis-mapped voucher distorts valuation and margin.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Inventory Voucher Mapping?</h2><p>Inventory voucher mapping is the stock counterpart of ledger mapping. Every inventory movement in the old system is recorded through a voucher — a purchase adds stock, a sale removes it, a stock journal adjusts it — and each of those voucher types, along with every item master and unit of measure, must be matched to its equivalent in the new system. The mapping decides how quantities, rates and valuations carry across.</p><p>An Indian business meets this whenever a stock-carrying entity changes software. A Vadodara trading firm moving systems must map its item masters, units and each stock voucher type so that opening stock, valuation method and item-wise quantities all reconcile after migration. Because inventory feeds cost of goods sold, an error here does not just misstate the stock ledger — it flows straight into gross profit and, ultimately, taxable income.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/outstanding-balances-migration">Outstanding Balances Migration</a> — Bringing open debtor and creditor items across in a migration.</li><li><a href="/glossary/accounting/gst-history-extraction">GST History Extraction</a> — Extracting GST data tied to stock transactions.</li><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping</a> — The debit-credit basis the stock entries ultimately post through.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Inventory Voucher Mapping Works</h2><p>Stock data migrates through a mapping and reconciliation sequence:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>List item masters and units</strong><p>Every stock item, unit of measure and group in the old system is inventoried — the base the mapping works from.</p></li><li class="step-card"><span class="step-num">2</span><strong>Map voucher types</strong><p>Each stock voucher type — purchase, sales, stock journal, delivery/receipt note — is matched to the new system&#x27;s equivalent.</p></li><li class="step-card"><span class="step-num">3</span><strong>Set the valuation method</strong><p>The costing method (FIFO, weighted average) is confirmed so migrated stock is valued consistently.</p></li><li class="step-card"><span class="step-num">4</span><strong>Migrate opening stock</strong><p>Item-wise opening quantities and values are loaded as at the cut-off date.</p></li><li class="step-card"><span class="step-num">5</span><strong>Reconcile stock and value</strong><p>Item-wise quantities and total stock value in the new system are tied back to the old stock summary.</p></li></ol></section><section id="software" class="gl-sec"><h2>How Inventory Voucher Mapping Is Handled in Accounting Software</h2><p>Tools import item masters and stock movements, but voucher-type and valuation choices must be mapped deliberately.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles inventory voucher mapping</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books / Zoho Inventory</td><td>Items import via template; sales/purchase map to invoices and bills, with stock adjustments for journals.</td><td>Zoho&#x27;s valuation is FIFO — a source on weighted average needs its opening values recomputed.</td></tr><tr><td>Tally / TallyPrime</td><td>Stock items, units and inventory vouchers import via XML with their voucher types.</td><td>Godown/batch details must be mapped, or stock lands without location or batch.</td></tr><tr><td>Xero</td><td>Tracked inventory items import via template; not all voucher types have a direct equivalent.</td><td>Xero&#x27;s inventory is lighter — complex stock journals may need manual adjustment.</td></tr><tr><td>Odoo</td><td>Products and stock moves import into Inventory; valuation set per product category.</td><td>Real-time vs periodic valuation setting changes how cost posts — confirm before import.</td></tr></tbody></table></div><p class="table-note">Inventory mapping must reconcile on both quantity and value — matching one without the other still misstates stock.</p></section><section id="example" class="gl-sec"><h2>Inventory Voucher Mapping: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Opening stock, old system (weighted avg)</td><td>22,00,000</td><td>Item-wise quantities and values</td></tr><tr><td>Item masters mapped</td><td>—</td><td>Codes and units matched to new system</td></tr><tr><td>Sales/purchase vouchers mapped</td><td>—</td><td>To new invoices and bills</td></tr><tr><td>Migrated stock value reconciled</td><td>22,00,000</td><td>Ties to old stock summary</td></tr></tbody></table></div><p>A Vadodara trading firm migrates inventory by mapping its item masters, units and each stock voucher type to the new system, and confirming the weighted-average valuation. Its ₹22,00,000 of opening stock is loaded item by item, and both the item-wise quantities and the total value are reconciled back to the old stock summary. Because stock feeds cost of goods sold, this tie-out protects the migrated gross profit as well as the stock ledger.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Mismatched valuation method: Loading weighted-average stock into a FIFO system without recomputing distorts value → align or recompute the valuation before import.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Inventory Voucher Mapping</h2><p>Stock migrations fail quietly when quantity and value drift apart:</p><ul class="gloss-bullets"><li><strong>Mismatched valuation method</strong> — Loading weighted-average stock into a FIFO system without recomputing distorts value → align or recompute the valuation before import.</li><li><strong>Unmapped voucher types</strong> — A stock journal with no destination equivalent drops adjustments → map every voucher type, using stock adjustments where needed.</li><li><strong>Reconciling quantity but not value</strong> — Matching units while value drifts misstates stock and COGS → reconcile both quantity and value.</li><li><strong>Losing batch or godown detail</strong> — Dropping location/batch data breaks traceability → map godowns and batches explicitly.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around a stock migration:</p><ul class="related-terms"><li><a href="/glossary/accounting/outstanding-balances-migration">Outstanding Balances Migration</a> — Open items brought across in a migration.</li><li><a href="/glossary/accounting/gst-history-extraction">GST History Extraction</a> — Extracting GST data tied to stock.</li><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping</a> — The debit-credit basis stock entries post through.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Inventory voucher mapping is the plan that matches each stock voucher type and item in an old system — sales, purchase, stock journal, delivery and receipt notes — to the equivalent transaction and item master in a new one, so inventory migrates accurately. It is set before a stock migration. It matters because inventory drives both the stock ledger and the cost of goods sold, so a mis-mapped voucher distorts valuation and margin.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Inventory Voucher Mapping?</h3><p>Inventory Voucher Mapping sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Migration: Tally to Zoho Books</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/migration-from-tally-to-zoho">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/migration-from-tally-to-odoo">Migration: Tally to Odoo<span class="arw">&rarr;</span></a></li><li><a href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/outstanding-balances-migration">Outstanding Balances Migration<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/gst-history-extraction">GST History Extraction<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Inventory Voucher Mapping FAQs</h2><p class="faq-expanded__lead">Common questions about Inventory Voucher Mapping for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Inventory Voucher Mapping</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What are the types of inventory vouchers in Tally?</h3><div class="faq-expanded__a" id="faq-a1"><p>The main inventory vouchers are the Receipt Note for goods received, the Delivery Note for goods despatched, Rejections In and Rejections Out for returns, and the Stock Journal for transfers and manufacturing. Each one is mapped to an accounting voucher, so a Receipt Note maps to the purchase invoice and a Delivery Note to the sales invoice.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between an inventory voucher and an accounting voucher?</h3><div class="faq-expanded__a" id="faq-a2"><p>An inventory voucher moves quantity and stock value only, while an accounting voucher moves ledger balances and creates the tax liability. A Delivery Note reduces stock when goods leave the godown but records no sale; the sales invoice raised two days later books the receivable and the GST. Mapping the two stops stock leaving without revenue.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How does inventory voucher mapping affect GST reporting in India?</h3><div class="faq-expanded__a" id="faq-a3"><p>Only accounting vouchers carrying a GST tax ledger flow into GSTR-1, so goods despatched on a Delivery Note that is never converted into a tax invoice leave stock reduced and nothing reported. Goods sent for job work must instead move on a delivery challan under Rule 55 and be tracked in Form ITC-04 rather than treated as a sale.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Inventory valuation per AS 2 / Ind AS 2; migration practice; Companies Act 2013 (Schedule III). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary/accounting">&larr; Back to the accounting glossary</a></div></footer>
</div>
@endverbatim
@endsection
