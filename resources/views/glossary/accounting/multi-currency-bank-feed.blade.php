@extends('layouts.service-app')


@section('meta')
    <title>Multi-Currency Bank Feed: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Multi-Currency Bank Feed: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed">
    <meta property="og:image" content="https://www.patronaccounting.com/images/multi-currency-bank-feed-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#breadcrumb",
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
          "name": "Multi-Currency Bank Feed",
          "item": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#definedterm",
      "name": "Multi-Currency Bank Feed",
      "description": "A multi-currency bank feed is an automatic import of transactions from a foreign-currency bank account into accounting software, with each line carried at the currency it was transacted in and converted at the applicable exchange rate. It appears in the software&#x27;s banking module. It matters because exporters and importers must record foreign receipts and payments, and the resulting exchange gain or loss, accurately.",
      "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is a foreign currency bank feed reconciled in accounting software?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The feed imports each transaction in the foreign currency and the software converts it at the exchange rate on the transaction date to post the rupee value. A USD 5,000 receipt on a day when the rate is Rs 83.20 posts as Rs 4,16,000. Any difference against the rate used on the invoice goes to foreign exchange gain or loss."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a realised and an unrealised exchange difference?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A realised difference arises when a foreign currency balance is actually settled, while an unrealised difference arises on restating an open balance at the closing rate on the reporting date. An invoice of USD 10,000 raised at Rs 83 and still open on 31 March when the rate is Rs 84 shows an unrealised gain of Rs 10,000 until receipt."
          }
        },
        {
          "@type": "Question",
          "name": "Which exchange rate applies to GST on an export invoice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For GST the value of an export supply is converted at the rate notified by the Central Board of Indirect Taxes and Customs under Rule 34 of the CGST Rules, while the accounting entry under AS 11 uses the actual transaction rate, so the two rupee figures rarely match. The GST value is fixed at the invoice date and later movement goes to exchange difference."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#article",
      "headline": "Multi-Currency Bank Feed",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1077,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed",
      "name": "Multi-Currency Bank Feed: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#definedterm"
      },
      "keywords": [
        "multi-currency bank feed",
        "multi-currency bank feed meaning",
        "multi-currency bank feed in accounting",
        "Xero Bank Rules",
        "Hubdoc Automation",
        "Odoo Double-Entry Engine",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/multi-currency-bank-feed#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Multi-Currency Bank Feed</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Multi-Currency Bank Feed</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div><aside class="gl-rotcta" data-rotate><div class="gl-rotcta__slides"><div class="gl-rotcta__slide is-active"><div class="gl-rotcta__badge">Free consultation</div><h3>Prefer a CA to handle it?</h3><p>CA-led accounting, GST and payroll for Indian businesses, on flat monthly plans.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Recommended</div><h3>Need help with Multi-Currency Bank Feed?</h3><p>Xero Accounting Services - our CA-led team handles it end to end.</p><a class="gl-rotcta__btn" href="/xero-accounting">Explore the service &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Bank &amp; Credit Card Reconciliation</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/bank-credit-card-reconciliation-services">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>SaaS Accounting Services (IT &amp; SaaS)</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/accounting-services-it-saas">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Free 30-min call</div><h3>Questions about Multi-Currency Bank Feed?</h3><p>Get a free 30-minute call with a Chartered Accountant, no obligation.</p><a class="gl-rotcta__btn" href="/contact-us">Book a free call &rarr;</a></div></div><div class="gl-rotcta__dots"><span class="gl-rotcta__dot is-active" data-i="0"></span><span class="gl-rotcta__dot" data-i="1"></span><span class="gl-rotcta__dot" data-i="2"></span><span class="gl-rotcta__dot" data-i="3"></span><span class="gl-rotcta__dot" data-i="4"></span></div></aside></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Multi-Currency Bank Feed: Definition</div><div class="definition-box"><p>A multi-currency bank feed is an automatic import of transactions from a foreign-currency bank account into accounting software, with each line carried at the currency it was transacted in and converted at the applicable exchange rate. It appears in the software&#x27;s banking module. It matters because exporters and importers must record foreign receipts and payments, and the resulting exchange gain or loss, accurately.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Multi-Currency Bank Feed?</h2><p>A multi-currency bank feed extends the ordinary bank feed to accounts that hold or transact in a foreign currency. Each imported line keeps its original currency — USD, EUR, GBP — and the software applies an exchange rate to state it in the home currency for the books. Because rates move between the day an invoice is raised and the day it is paid, the feed is also where exchange gains and losses are surfaced.</p><p>An Indian exporter meets this on every dollar receipt. A Bengaluru software company invoicing a US client in USD receives payment into an EEFC or export account; the feed imports the dollar amount, converts it at the rate on the receipt date, and the difference from the invoice-date rate becomes a realised exchange gain or loss. Getting this right matters for both the accounts and the RBI/FEMA reporting that follows an export.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/xero-bank-rules">Xero Bank Rules</a> — Rules that auto-code recurring lines, including in the feed.</li><li><a href="/glossary/accounting/hubdoc-automation">Hubdoc Automation</a> — Document capture that pairs bills with feed transactions.</li><li><a href="/glossary/accounting/odoo-double-entry-engine">Odoo Double-Entry Engine</a> — The engine that posts the balanced entry, including forex differences.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How a Multi-Currency Bank Feed Works</h2><p>A foreign-currency transaction moves from bank to books with an extra conversion step:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Enable the foreign-currency account</strong><p>The account is set up in its transaction currency in the software — the master that tells the feed which currency to expect.</p></li><li class="step-card"><span class="step-num">2</span><strong>Import the line in its currency</strong><p>The feed pulls the transaction at its original foreign-currency value.</p></li><li class="step-card"><span class="step-num">3</span><strong>Apply the exchange rate</strong><p>The software converts the line to the home currency at the rate for the transaction date.</p></li><li class="step-card"><span class="step-num">4</span><strong>Match to the invoice or bill</strong><p>The line is matched to the open foreign-currency invoice or bill it settles.</p></li><li class="step-card"><span class="step-num">5</span><strong>Post the exchange difference</strong><p>Any gap between the invoice-date and payment-date rates is booked as a realised exchange gain or loss.</p></li></ol></section><section id="software" class="gl-sec"><h2>How Multi-Currency Bank Feed Is Handled in Accounting Software</h2><p>Multi-currency support varies by tool and plan; all convert to the base currency and track forex differences.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles a multi-currency bank feed</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books (India)</td><td>Foreign-currency bank accounts import in their currency and convert at the set rate; realised gains/losses post automatically.</td><td>Multi-currency is a higher-plan feature — confirm it is enabled before adding a forex account.</td></tr><tr><td>Xero</td><td>Handles the feed per currency and calculates realised and unrealised forex gains/losses.</td><td>Multi-currency is available only on the Established plan — lower plans cannot use it.</td></tr><tr><td>Tally / TallyPrime</td><td>Multi-currency must be enabled in features; forex vouchers record the rate and difference.</td><td>Rates are entered/maintained manually — a stale rate table misstates the conversion.</td></tr><tr><td>Odoo</td><td>Currencies are enabled in Accounting settings; rates can auto-update and differences post to a forex account.</td><td>If automatic rate updates are off, conversions rely on manually entered rates.</td></tr></tbody></table></div><p class="table-note">Whatever the tool, the exchange gain or loss is only as accurate as the rate applied on each date.</p></section><section id="example" class="gl-sec"><h2>Multi-Currency Bank Feed: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Export invoice USD 12,000 at ₹83.00</td><td>9,96,000</td><td>Recorded at invoice-date rate</td></tr><tr><td>USD 12,000 received at ₹83.50</td><td>10,02,000</td><td>Feed converts at receipt-date rate</td></tr><tr><td>Realised exchange gain</td><td>6,000</td><td>Difference booked to forex gain</td></tr><tr><td>Bank (INR equivalent) increased</td><td>10,02,000</td><td>Home-currency value of the receipt</td></tr></tbody></table></div><p>A Hyderabad IT services firm raises a USD 12,000 export invoice when the rate is ₹83.00, booking ₹9,96,000. The dollars arrive when the rate is ₹83.50, and the multi-currency feed converts the receipt to ₹10,02,000. The ₹6,000 difference is posted as a realised exchange gain — the feed does the conversion, but the firm still reconciles it to its FEMA-compliant export records.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Stale or manual exchange rates: Converting at an outdated rate misstates both the balance and the gain/loss → keep the rate table current or use auto-updating rates.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With a Multi-Currency Bank Feed</h2><p>Forex feeds go wrong when the rate discipline slips:</p><ul class="gloss-bullets"><li><strong>Stale or manual exchange rates</strong> — Converting at an outdated rate misstates both the balance and the gain/loss → keep the rate table current or use auto-updating rates.</li><li><strong>Recording only the INR amount</strong> — Losing the original foreign-currency value breaks the invoice match → keep each line in its transaction currency.</li><li><strong>Ignoring unrealised differences</strong> — Not revaluing open foreign balances at year-end misstates the position → run a period-end forex revaluation.</li><li><strong>Confusing bank charges with forex loss</strong> — Booking bank conversion charges as exchange loss distorts the forex account → separate charges from the rate difference.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms alongside foreign-currency banking:</p><ul class="related-terms"><li><a href="/glossary/accounting/xero-bank-rules">Xero Bank Rules</a> — Auto-coding of recurring feed lines.</li><li><a href="/glossary/accounting/hubdoc-automation">Hubdoc Automation</a> — Capturing bills to match feed lines.</li><li><a href="/glossary/accounting/odoo-double-entry-engine">Odoo Double-Entry Engine</a> — Posts the balanced entry including forex.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A multi-currency bank feed is an automatic import of transactions from a foreign-currency bank account into accounting software, with each line carried at the currency it was transacted in and converted at the applicable exchange rate. It appears in the software&amp;#x27;s banking module. It matters because exporters and importers must record foreign receipts and payments, and the resulting exchange gain or loss, accurately.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Multi-Currency Bank Feed?</h3><p>Multi-Currency Bank Feed sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/xero-accounting">Xero Accounting Services &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Xero Accounting Services</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/xero-accounting">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation<span class="arw">&rarr;</span></a></li><li><a href="/accounting-services-it-saas">SaaS Accounting Services (IT &amp; SaaS)<span class="arw">&rarr;</span></a></li><li><a href="/accounting-services">Accounting &amp; Bookkeeping Services in India<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/xero-bank-rules">Xero Bank Rules<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/hubdoc-automation">Hubdoc Automation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/odoo-double-entry-engine">Odoo Double-Entry Engine<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Multi-Currency Bank Feed FAQs</h2><p class="faq-expanded__lead">Common questions about Multi-Currency Bank Feed for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Multi-Currency Bank Feed</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is a foreign currency bank feed reconciled in accounting software?</h3><div class="faq-expanded__a" id="faq-a1"><p>The feed imports each transaction in the foreign currency and the software converts it at the exchange rate on the transaction date to post the rupee value. A USD 5,000 receipt on a day when the rate is Rs 83.20 posts as Rs 4,16,000. Any difference against the rate used on the invoice goes to foreign exchange gain or loss.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a realised and an unrealised exchange difference?</h3><div class="faq-expanded__a" id="faq-a2"><p>A realised difference arises when a foreign currency balance is actually settled, while an unrealised difference arises on restating an open balance at the closing rate on the reporting date. An invoice of USD 10,000 raised at Rs 83 and still open on 31 March when the rate is Rs 84 shows an unrealised gain of Rs 10,000 until receipt.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Which exchange rate applies to GST on an export invoice?</h3><div class="faq-expanded__a" id="faq-a3"><p>For GST the value of an export supply is converted at the rate notified by the Central Board of Indirect Taxes and Customs under Rule 34 of the CGST Rules, while the accounting entry under AS 11 uses the actual transaction rate, so the two rupee figures rarely match. The GST value is fixed at the invoice date and later movement goes to exchange difference.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.rbi.org.in" target="_blank" rel="noopener">RBI</a><a>Xero Central</a></div></div><p class="eeat-note">Applicable framework: Foreign-currency accounting per AS 11 / Ind AS 21; FEMA export realisation; product guidance – Xero, Zoho Books. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
