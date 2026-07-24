@extends('layouts.service-app')


@section('meta')
    <title>Point-of-Sale (POS) Day-End Audit: Meaning and Example</title>
    <meta name="description" content="Tying each till's day-end takings to banking and to the sales ledger. The definition, the entry it drives and the mistake to avoid. Explained by a CA.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Point-of-Sale (POS) Day-End Audit: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="Tying each till's day-end takings to banking and to the sales ledger. The definition, the entry it drives and the mistake to avoid. Explained by a CA.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit">
    <meta property="og:image" content="https://www.patronaccounting.com/images/point-of-sale-pos-day-end-audit-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#breadcrumb",
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
          "name": "Point-of-Sale (POS) Day-End Audit",
          "item": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#definedterm",
      "name": "Point-of-Sale (POS) Day-End Audit",
      "description": "A Point-of-Sale (POS) day-end audit is the daily check that reconciles a retail store&#x27;s recorded sales, cash, card and digital collections against the physical cash and settlement reports at close. It produces a signed day-end summary feeding the books. It matters because it catches till shortages, miskeyed sales and unbanked cash the same day, before errors compound into the month.",
      "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is cash variance calculated at POS day end?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Compare the physical cash counted in the drawer with the expected cash, which is the opening float plus cash sales less refunds and payouts. A drawer opening with a Rs 5,000 float and taking Rs 42,000 of cash sales should hold Rs 47,000; counting Rs 46,600 leaves a Rs 400 shortage posted to cash short or over."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a POS X-report and a Z-report?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An X-report is a mid shift read showing sales so far without closing the register, and it can be printed any number of times. A Z-report closes the day, resets the counters to zero and is the document tied into the books. Only the Z-report total, split by tender type, should be journalised as the day's sales."
          }
        },
        {
          "@type": "Question",
          "name": "How long must POS day-end reports be preserved in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 128(5) of the Companies Act 2013 requires books of account and relevant papers, which include day-end POS summaries, to be kept for eight financial years immediately preceding the current year. Section 36 of the CGST Act separately requires records to be retained for 72 months from the annual return due date, so a retail chain follows the longer period."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#article",
      "headline": "What Is Point-of-Sale (POS) Day-End Audit? Meaning and Why It Matters",
      "description": "Tying each till's day-end takings to banking and to the sales ledger. The definition, the entry it drives and the mistake to avoid. Explained by a CA.",
      "inLanguage": "en-IN",
      "wordCount": 1207,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit"
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
      "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit",
      "name": "Point-of-Sale (POS) Day-End Audit: Meaning and Example",
      "description": "Tying each till's day-end takings to banking and to the sales ledger. The definition, the entry it drives and the mistake to avoid. Explained by a CA.",
      "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#definedterm"
      },
      "keywords": [
        "POS day-end audit",
        "point-of-sale (pos) day-end audit meaning",
        "point-of-sale (pos) day-end audit in accounting",
        "Inventory Shrinkage Provision",
        "Retail Inventory Method",
        "Unbilled Revenue (WIP Hours)",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">Point-of-Sale (POS) Day-End Audit</span></nav><div class="gl-cat">Accounting Glossary &middot; Industry</div><h1 class="gl-h1">What Is Point-of-Sale (POS) Day-End Audit? Meaning and Why It Matters</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Advanced</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Point-of-Sale (POS) Day-End Audit: Definition</div><div class="definition-box"><p>A Point-of-Sale (POS) day-end audit is the daily check that reconciles a retail store&#x27;s recorded sales, cash, card and digital collections against the physical cash and settlement reports at close. It produces a signed day-end summary feeding the books. It matters because it catches till shortages, miskeyed sales and unbanked cash the same day, before errors compound into the month.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Point-of-Sale (POS) Day-End Audit?</h2><p>At the end of each trading day a retailer closes its POS terminals and pulls a Z-report — the total of the day&#x27;s sales by tender type. The day-end audit matches that report to the cash counted in the till, the card settlements from the payment terminals, and the UPI and wallet collections, so every rupee of recorded sale is traced to a form of money received. Any difference is a shortage or overage to be explained before the day is signed off.</p><p>An Indian retailer meets this control every single evening across every outlet. A Mumbai apparel store reconciles a ₹1,85,000 sales day across cash, card and UPI, banks the cash next morning, and files the day-end summary that later rolls into the GST records. Because it underpins the sales figures and the cash and GST records the law requires a business to keep, a disciplined day-end audit is both a fraud control and the foundation of clean books.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/inventory-shrinkage-provision">Inventory Shrinkage Provision</a> — Provision for stock lost between book and physical count.</li><li><a href="/glossary/retail-inventory-method">Retail Inventory Method</a> — A technique for estimating retail inventory cost.</li><li><a href="/glossary/unbilled-revenue-wip-hours">Unbilled Revenue (WIP Hours)</a> — Earned but uninvoiced services revenue.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How a Point-of-Sale (POS) Day-End Audit Works</h2><p>A trading day is closed and reconciled through a set routine:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Close the terminals and pull the Z-report</strong><p>Each POS terminal is closed and prints the day&#x27;s sales by tender type — the source record for the audit.</p></li><li class="step-card"><span class="step-num">2</span><strong>Count the physical cash</strong><p>The cashier counts the till and separates the opening float from the day&#x27;s cash sales.</p></li><li class="step-card"><span class="step-num">3</span><strong>Match card and digital settlements</strong><p>Card terminal batch totals and UPI/wallet collections are agreed to the Z-report by tender.</p></li><li class="step-card"><span class="step-num">4</span><strong>Explain the variance</strong><p>Any shortage or overage is investigated and noted, so the difference is understood the same day.</p></li><li class="step-card"><span class="step-num">5</span><strong>Sign off and post</strong><p>The reconciled day-end summary is signed, the cash is banked, and the figures post to the sales, cash and GST records.</p></li></ol></section><section id="sector" class="gl-sec"><h2>Where Point-of-Sale (POS) Day-End Audit Applies — Retail Businesses</h2><p>Day-end audit is a core control wherever cash and card cross a counter:</p><ul class="gloss-bullets"><li><strong>Multi-outlet retail chains</strong> — Stores reconcile each outlet daily so head office sees clean, comparable numbers.</li><li><strong>High cash-volume stores</strong> — Grocery and food retail with heavy cash need a tight daily count.</li><li><strong>Card and UPI-heavy formats</strong> — Fashion and electronics reconcile settlements across many tender types.</li><li><strong>Franchise operations</strong> — Franchisees report audited day-end figures to the brand.</li><li><strong>GST-registered retailers</strong> — Any retailer must keep sales and cash records that a day-end audit supports.</li></ul><p class="inline-links">See also: <a href="/accounting-services-for-retail">Retail Accounting Services in India</a> <a href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation</a></p></section><section id="compliance" class="gl-sec"><h2>Statutory Position on Point-of-Sale (POS) Day-End Audit</h2><p>No single statute mandates a &#x27;POS day-end audit&#x27; by that name, but it is the practical control that lets a retailer meet its record-keeping duties. Section 35 of the CGST Act 2017 with Rule 56 requires every registered person to keep true accounts of production, inward and outward supplies, stock and output tax, and Section 31 requires a tax invoice or bill of supply for sales. Under the Income Tax Act, Section 44AA and Rule 6F require books to be maintained. A reliable day-end reconciliation is how a retailer evidences the sales and cash figures behind all of these.</p><ul class="gloss-bullets"><li><strong>GST records</strong> — Section 35, CGST Act 2017 with Rule 56 — true accounts of supplies, stock and output tax. Law stated as at 22 July 2026.</li><li><strong>Invoicing</strong> — Section 31, CGST Act 2017 — tax invoice or bill of supply for each sale, including consolidated invoices for small cash sales where permitted.</li><li><strong>Income-tax books</strong> — Section 44AA with Rule 6F — maintenance of books of account.</li><li><strong>Nature</strong> — A day-end audit is an internal control that supports these records, not a separate statutory filing.</li></ul></section><section id="example" class="gl-sec"><h2>Point-of-Sale (POS) Day-End Audit: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Z-report total sales</td><td>1,85,000</td><td>Recorded sales for the day</td></tr><tr><td>Cash counted (net of float)</td><td>62,000</td><td>Matched to cash sales</td></tr><tr><td>Card settlements</td><td>78,500</td><td>Matched to terminal batch</td></tr><tr><td>UPI / wallet collections</td><td>44,000</td><td>Matched to payment report</td></tr><tr><td>Variance (short)</td><td>-500</td><td>Investigated and noted</td></tr></tbody></table></div><p>A Mumbai apparel store closes a ₹1,85,000 sales day. The day-end audit matches ₹62,000 of counted cash, ₹78,500 of card settlements and ₹44,000 of UPI against the Z-report, leaving a ₹500 shortage that is traced to a miskeyed refund and corrected. The cash is banked next morning and the signed day-end summary flows into the sales and GST records — so the month closes on figures that were verified the day they arose.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>end discipline lets errors and losses accumulate:</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Point-of-Sale (POS) Day-End Audit</h2><p>Weak day-end discipline lets errors and losses accumulate:</p><ul class="gloss-bullets"><li><strong>Not reconciling daily</strong> — Leaving reconciliation to month-end lets shortages become untraceable → reconcile every terminal at close each day.</li><li><strong>Ignoring small variances</strong> — Waving through a daily short adds up and hides theft → investigate and log every difference.</li><li><strong>Not splitting tender types</strong> — Reconciling only a total misses a card or UPI mismatch → match each tender separately to the Z-report.</li><li><strong>Delayed banking of cash</strong> — Holding cash for days invites loss and breaks the trail → bank the reconciled cash promptly.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms read alongside the day-end audit:</p><ul class="related-terms"><li><a href="/glossary/inventory-shrinkage-provision">Inventory Shrinkage Provision</a> — Provision for stock lost between book and count.</li><li><a href="/glossary/retail-inventory-method">Retail Inventory Method</a> — A retail cost-estimation technique.</li><li><a href="/glossary/unbilled-revenue-wip-hours">Unbilled Revenue (WIP Hours)</a> — Earned but uninvoiced revenue.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A Point-of-Sale (POS) day-end audit is the daily check that reconciles a retail store&amp;#x27;s recorded sales, cash, card and digital collections against the physical cash and settlement reports at close. It produces a signed day-end summary feeding the books. It matters because it catches till shortages, miskeyed sales and unbanked cash the same day, before errors compound into the month.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Point-of-Sale (POS) Day-End Audit?</h3><p>Point-of-Sale (POS) Day-End Audit sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services-for-retail">Retail Accounting Services in India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Retail Accounting Services in India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services-for-retail">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/inventory-shrinkage-provision">Inventory Shrinkage Provision<span class="arw">&rarr;</span></a></li><li><a href="/glossary/retail-inventory-method">Retail Inventory Method<span class="arw">&rarr;</span></a></li><li><a href="/glossary/unbilled-revenue-wip-hours">Unbilled Revenue (WIP Hours)<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Point-of-Sale (POS) Day-End Audit FAQs</h2><p class="faq-expanded__lead">Common questions about Point-of-Sale (POS) Day-End Audit for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Point-of-Sale (POS) Day-End Audit</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is cash variance calculated at POS day end?</h3><div class="faq-expanded__a" id="faq-a1"><p>Compare the physical cash counted in the drawer with the expected cash, which is the opening float plus cash sales less refunds and payouts. A drawer opening with a Rs 5,000 float and taking Rs 42,000 of cash sales should hold Rs 47,000; counting Rs 46,600 leaves a Rs 400 shortage posted to cash short or over.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a POS X-report and a Z-report?</h3><div class="faq-expanded__a" id="faq-a2"><p>An X-report is a mid shift read showing sales so far without closing the register, and it can be printed any number of times. A Z-report closes the day, resets the counters to zero and is the document tied into the books. Only the Z-report total, split by tender type, should be journalised as the day's sales.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How long must POS day-end reports be preserved in India?</h3><div class="faq-expanded__a" id="faq-a3"><p>Section 128(5) of the Companies Act 2013 requires books of account and relevant papers, which include day-end POS summaries, to be kept for eight financial years immediately preceding the current year. Section 36 of the CGST Act separately requires records to be retained for 72 months from the annual return due date, so a retail chain follows the longer period.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Dept</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: CGST Act 2017 (Sections 31, 35 with Rule 56); Income Tax Act 1961 (Section 44AA, Rule 6F). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
