@extends('layouts.service-app')


@section('meta')
    <title>ERP Open Balances: Meaning and Example in Accounting</title>
    <meta name="description" content="The unsettled debtor, creditor and stock balances a new ERP starts from. What it means, why it matters and where you will meet it. See related terms.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/erp-open-balances">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ERP Open Balances: Meaning and Example in Accounting | Patron Accounting">
    <meta property="og:description" content="The unsettled debtor, creditor and stock balances a new ERP starts from. What it means, why it matters and where you will meet it. See related terms.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/erp-open-balances">
    <meta property="og:image" content="https://www.patronaccounting.com/images/erp-open-balances-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#breadcrumb",
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
          "name": "ERP Open Balances",
          "item": "https://www.patronaccounting.com/glossary/erp-open-balances"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#definedterm",
      "name": "ERP Open Balances",
      "description": "ERP open balances are the starting balances loaded into a new ERP or accounting system at go-live — the closing balances of every account, debtor, creditor and stock item carried over from the old system as at the cut-off date. They are entered as opening entries. They matter because they are the foundation the new books are built on; if they do not tie to the old system, every later report inherits the error.",
      "url": "https://www.patronaccounting.com/glossary/erp-open-balances",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How are open balances migrated into a new ERP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Load open items rather than net totals: each unpaid sales invoice, purchase bill, bank line and stock item is entered separately with its original date and document number, posted against an opening balance equity or suspense account that must finish at zero. A supplier owed Rs 3 lakh across four bills is loaded as four open items."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between open item balances and net balances in an ERP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An open item balance lists every unsettled invoice separately so receipts and payments can be knocked off bill by bill, while a net balance carries only the total owed. Only open item data supports ageing reports, GST reconciliation and vendor confirmations. Migrating a Rs 3 lakh vendor balance as one figure destroys the ageing permanently."
          }
        },
        {
          "@type": "Question",
          "name": "Must ERP opening balances agree with the audited balance sheet of the previous year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Opening balances loaded at go live must tie to the audited or filed balance sheet of the previous financial year, since that figure is already reported to the MCA and the Income Tax Department. Any difference has to be traced rather than written off to suspense. Accounting software must also maintain an unalterable audit trail."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#article",
      "headline": "What Are ERP Open Balances? Definition and How It Works",
      "description": "The unsettled debtor, creditor and stock balances a new ERP starts from. What it means, why it matters and where you will meet it. See related terms.",
      "inLanguage": "en-IN",
      "wordCount": 1080,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/erp-open-balances"
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
      "@id": "https://www.patronaccounting.com/glossary/erp-open-balances",
      "name": "ERP Open Balances: Meaning and Example in Accounting",
      "description": "The unsettled debtor, creditor and stock balances a new ERP starts from. What it means, why it matters and where you will meet it. See related terms.",
      "url": "https://www.patronaccounting.com/glossary/erp-open-balances",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#definedterm"
      },
      "keywords": [
        "ERP open balances",
        "what are ERP open balances",
        "erp open balances meaning",
        "erp open balances in accounting",
        "Inventory Voucher Mapping",
        "Outstanding Balances Migration",
        "GST History Extraction",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">ERP Open Balances</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Are ERP Open Balances? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">ERP Open Balances: Definition</div><div class="definition-box"><p>ERP open balances are the starting balances loaded into a new ERP or accounting system at go-live — the closing balances of every account, debtor, creditor and stock item carried over from the old system as at the cut-off date. They are entered as opening entries. They matter because they are the foundation the new books are built on; if they do not tie to the old system, every later report inherits the error.</p></div></section><section id="what-is" class="gl-sec"><h2>What Are ERP Open Balances?</h2><p>Open balances are the numbers a new system starts life with. Rather than re-creating years of transactions, a migration loads the position as at the cut-off date: ledger balances, the list of unpaid customer invoices and supplier bills, stock on hand and tax balances. These become the opening entries, so the new ERP begins from exactly where the old one left off.</p><p>An Indian business meets open balances on the first day of a new system. A Lucknow retailer going live on a new ERP loads ₹15,00,000 of debtors, ₹9,00,000 of creditors, its closing stock and its GST balances as opening figures. The test of a good open-balance load is simple: the new system&#x27;s opening trial balance must equal the old system&#x27;s closing trial balance. Until that ties, the migration is not complete, however good the setup otherwise looks.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/inventory-voucher-mapping">Inventory Voucher Mapping</a> — Mapping stock vouchers that feed opening inventory.</li><li><a href="/glossary/outstanding-balances-migration">Outstanding Balances Migration</a> — Bringing open debtor and creditor items in as opening balances.</li><li><a href="/glossary/gst-history-extraction">GST History Extraction</a> — Extracting GST data and balances for the opening position.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How ERP Open Balances Work</h2><p>Open balances are loaded and proven through a controlled sequence:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Finalise the old system</strong><p>Closing balances at the cut-off date are locked so the opening figures are firm.</p></li><li class="step-card"><span class="step-num">2</span><strong>Extract the closing position</strong><p>Ledger, party, stock and tax balances as at the cut-off are pulled from the old system.</p></li><li class="step-card"><span class="step-num">3</span><strong>Load the opening entries</strong><p>Those balances are entered into the ERP as opening balances against the correct accounts.</p></li><li class="step-card"><span class="step-num">4</span><strong>Carry open items in detail</strong><p>Unpaid invoices and bills are loaded individually so aging and collection continue seamlessly.</p></li><li class="step-card"><span class="step-num">5</span><strong>Prove the trial balance</strong><p>The new opening trial balance is reconciled to the old closing trial balance until they agree.</p></li></ol></section><section id="software" class="gl-sec"><h2>How ERP Open Balances Is Handled in Accounting Software</h2><p>Each system provides a route to enter opening balances; the discipline is making them tie and using a suspense account only temporarily.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles open balances</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books (India)</td><td>Opening balances are entered per account with an opening-balance date; a temporary adjustment account holds any difference.</td><td>Leaving a balance in the opening-balance adjustment account means the load has not fully tied.</td></tr><tr><td>Tally / TallyPrime</td><td>Opening balances are set on each ledger; the difference in opening balances shows if it does not net to zero.</td><td>A non-zero &#x27;Difference in opening balances&#x27; flags an incomplete or wrong load.</td></tr><tr><td>Xero</td><td>Conversion balances are entered as at the conversion date.</td><td>Mis-dated conversion balances or missing accounts leave the opening position wrong.</td></tr><tr><td>Odoo</td><td>Opening balances are posted as a journal entry to an opening/equity account.</td><td>An unbalanced opening journal blocks a clean start until corrected.</td></tr></tbody></table></div><p class="table-note">In every tool the same proof applies: opening balances must equal the old system&#x27;s closing balances, with no residual in a suspense account.</p></section><section id="example" class="gl-sec"><h2>ERP Open Balances: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Opening debtors loaded</td><td>15,00,000</td><td>Detailed by unpaid invoice</td></tr><tr><td>Opening creditors loaded</td><td>9,00,000</td><td>Detailed by unpaid bill</td></tr><tr><td>Opening stock loaded</td><td>22,00,000</td><td>From closing stock valuation</td></tr><tr><td>Opening trial balance</td><td>tie-out</td><td>Equals old system&#x27;s closing TB</td></tr></tbody></table></div><p>A Lucknow retailer goes live on a new ERP by loading its opening position: ₹15,00,000 debtors (invoice by invoice), ₹9,00,000 creditors (bill by bill) and ₹22,00,000 of closing stock. The opening entries are posted and the new opening trial balance is reconciled to the old system&#x27;s closing trial balance. Only when the two agree exactly — no residual left in a suspense account — is the migration treated as complete.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>balance errors quietly undermine everything built on top:</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With ERP Open Balances</h2><p>Open-balance errors quietly undermine everything built on top:</p><ul class="gloss-bullets"><li><strong>Balances that do not tie</strong> — An opening trial balance that differs from the old closing one starts the books wrong → reconcile until they match exactly.</li><li><strong>Loading debtors as a lump sum</strong> — A single opening figure with no invoice detail breaks aging and collections → load open items individually.</li><li><strong>Leaving a suspense residual</strong> — Parking a difference in a suspense or adjustment account hides an unresolved error → clear it before go-live.</li><li><strong>Wrong opening-balance date</strong> — Dating opening balances inconsistently with the cut-off distorts the first period → align the opening date with the cut-off.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around a go-live load:</p><ul class="related-terms"><li><a href="/glossary/inventory-voucher-mapping">Inventory Voucher Mapping</a> — Mapping stock vouchers into opening inventory.</li><li><a href="/glossary/outstanding-balances-migration">Outstanding Balances Migration</a> — Open items brought in as opening balances.</li><li><a href="/glossary/gst-history-extraction">GST History Extraction</a> — Extracting GST data for the opening position.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>ERP open balances are the starting balances loaded into a new ERP or accounting system at go-live — the closing balances of every account, debtor, creditor and stock item carried over from the old system as at the cut-off date. They are entered as opening entries. They matter because they are the foundation the new books are built on; if they do not tie to the old system, every later report inherits the error.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with ERP Open Balances?</h3><p>ERP Open Balances sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/migration-from-tally-to-odoo">Migration: Tally to Odoo &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Migration: Tally to Odoo</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/migration-from-tally-to-odoo">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books<span class="arw">&rarr;</span></a></li><li><a href="/odoo-accounting">Odoo Accounting Services<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/inventory-voucher-mapping">Inventory Voucher Mapping<span class="arw">&rarr;</span></a></li><li><a href="/glossary/outstanding-balances-migration">Outstanding Balances Migration<span class="arw">&rarr;</span></a></li><li><a href="/glossary/gst-history-extraction">GST History Extraction<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">ERP Open Balances FAQs</h2><p class="faq-expanded__lead">Common questions about ERP Open Balances for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>ERP Open Balances</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How are open balances migrated into a new ERP?</h3><div class="faq-expanded__a" id="faq-a1"><p>Load open items rather than net totals: each unpaid sales invoice, purchase bill, bank line and stock item is entered separately with its original date and document number, posted against an opening balance equity or suspense account that must finish at zero. A supplier owed Rs 3 lakh across four bills is loaded as four open items.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between open item balances and net balances in an ERP?</h3><div class="faq-expanded__a" id="faq-a2"><p>An open item balance lists every unsettled invoice separately so receipts and payments can be knocked off bill by bill, while a net balance carries only the total owed. Only open item data supports ageing reports, GST reconciliation and vendor confirmations. Migrating a Rs 3 lakh vendor balance as one figure destroys the ageing permanently.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Must ERP opening balances agree with the audited balance sheet of the previous year?</h3><div class="faq-expanded__a" id="faq-a3"><p>Yes. Opening balances loaded at go live must tie to the audited or filed balance sheet of the previous financial year, since that figure is already reported to the MCA and the Income Tax Department. Any difference has to be traced rather than written off to suspense. Accounting software must also maintain an unalterable audit trail.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Migration practice; opening-balance presentation per AS 1 / Ind AS 1; Companies Act 2013 (Schedule III). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
