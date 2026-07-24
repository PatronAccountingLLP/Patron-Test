@extends('layouts.service-app')


@section('meta')
    <title>FIFO vs Weighted Average Cost: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="FIFO vs Weighted Average Cost: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost">
    <meta property="og:image" content="https://www.patronaccounting.com/images/fifo-vs-weighted-average-cost-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#breadcrumb",
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
          "name": "FIFO vs Weighted Average Cost",
          "item": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#definedterm",
      "name": "FIFO vs Weighted Average Cost",
      "description": "FIFO vs Weighted Average Cost is the choice between two allowed ways of valuing inventory: FIFO assumes the oldest stock is sold first, while Weighted Average pools all units at a blended cost. The choice sits in the inventory valuation policy behind the balance sheet. It matters because, when prices move, the two methods give different closing stock, cost of goods sold and reported profit from the same purchases.",
      "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is the weighted average cost per unit calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Divide the total cost of goods available by the total units available. Opening stock of 100 units at Rs 50 plus a purchase of 300 units at Rs 60 gives Rs 23,000 for 400 units, a weighted average of Rs 57.50 per unit. Under FIFO the first 100 units issued would instead be charged out at Rs 50 each."
          }
        },
        {
          "@type": "Question",
          "name": "What is weighted average cost vs FIFO vs LIFO?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FIFO charges out the oldest cost first, weighted average blends every cost into one rate, and LIFO charges out the newest cost first. When prices are rising, FIFO reports the lowest cost of goods sold and the highest closing stock, weighted average sits between the two, and LIFO the opposite. LIFO is not permitted in India."
          }
        },
        {
          "@type": "Question",
          "name": "Which inventory cost formula is allowed under AS 2 in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 2 and Ind AS 2 permit only FIFO or weighted average cost for interchangeable items, and LIFO is not allowed. The formula chosen must be applied consistently to all inventories of a similar nature. Closing stock is still carried at the lower of cost and net realisable value, so the formula never overrides a writedown to realisable value."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#article",
      "headline": "FIFO vs Weighted Average Cost",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1149,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost",
      "name": "FIFO vs Weighted Average Cost: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#definedterm"
      },
      "keywords": [
        "FIFO vs Weighted Average Cost",
        "fifo vs weighted average cost meaning",
        "fifo vs weighted average cost in accounting",
        "Standard Cost Variance",
        "Inter-Company Ledger Reconciliation",
        "Vendor Balance Confirmation",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Formula",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#formula"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/fifo-vs-weighted-average-cost#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">FIFO vs Weighted Average Cost</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">FIFO vs Weighted Average Cost</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div><aside class="gl-rotcta" data-rotate><div class="gl-rotcta__slides"><div class="gl-rotcta__slide is-active"><div class="gl-rotcta__badge">Free consultation</div><h3>Prefer a CA to handle it?</h3><p>CA-led accounting, GST and payroll for Indian businesses, on flat monthly plans.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Recommended</div><h3>Need help with FIFO vs Weighted Average Cost?</h3><p>Inventory Accounting &amp; Costing - our CA-led team handles it end to end.</p><a class="gl-rotcta__btn" href="/inventory-accounting-costing-services">Explore the service &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Trading Business Accounting Services</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/accounting-services-for-trading-industry">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Free 30-min call</div><h3>Questions about FIFO vs Weighted Average Cost?</h3><p>Get a free 30-minute call with a Chartered Accountant, no obligation.</p><a class="gl-rotcta__btn" href="/contact-us">Book a free call &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Talk to us</div><h3>Rather have experts handle it?</h3><p>CA-led accounting, tax and compliance for Indian businesses.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div></div><div class="gl-rotcta__dots"><span class="gl-rotcta__dot is-active" data-i="0"></span><span class="gl-rotcta__dot" data-i="1"></span><span class="gl-rotcta__dot" data-i="2"></span><span class="gl-rotcta__dot" data-i="3"></span><span class="gl-rotcta__dot" data-i="4"></span></div></aside></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#formula" class="gl-pill">Formula</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">FIFO vs Weighted Average Cost: Definition</div><div class="definition-box"><p>FIFO vs Weighted Average Cost is the choice between two allowed ways of valuing inventory: FIFO assumes the oldest stock is sold first, while Weighted Average pools all units at a blended cost. The choice sits in the inventory valuation policy behind the balance sheet. It matters because, when prices move, the two methods give different closing stock, cost of goods sold and reported profit from the same purchases.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is FIFO vs Weighted Average Cost?</h2><p>Both FIFO and Weighted Average are cost formulas for assigning a value to inventory when identical items were bought at different prices. FIFO — first in, first out — charges the earliest costs to cost of goods sold, leaving the most recent costs in closing stock. Weighted Average recalculates a single average cost across all units held, so each issue carries that blended rate. Neither tracks the physical goods; both are accounting assumptions about cost flow.</p><p>An Indian business meets this choice when it sets its inventory policy under AS 2 or Ind AS 2, both of which permit FIFO and Weighted Average but prohibit LIFO. In a period of rising material prices, FIFO reports a higher closing stock and profit, while Weighted Average smooths the effect. The chosen method must be applied consistently, because switching it changes profit and invites both audit and tax scrutiny.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/standard-cost-variance">Standard Cost Variance</a> — An alternative costing basis compared against actual cost.</li><li><a href="/glossary/accounting/inter-company-ledger-reconciliation">Inter-Company Ledger Reconciliation</a> — Reconciling stock transferred between group companies.</li><li><a href="/glossary/accounting/vendor-balance-confirmation">Vendor Balance Confirmation</a> — Confirming supplier balances that underlie purchase costs.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why FIFO vs Weighted Average Cost Matters</h2><p>The method chosen changes the numbers, not just the paperwork:</p><ul class="gloss-bullets"><li><strong>Different reported profit</strong> — With prices rising, FIFO shows higher profit than Weighted Average from the same purchases, changing tax payable.</li><li><strong>Different closing stock value</strong> — The balance-sheet inventory figure shifts with the method, affecting current assets and ratios lenders watch.</li><li><strong>Consistency requirement</strong> — AS 2 requires consistent application; an unjustified switch is an accounting-policy change needing disclosure and scrutiny.</li><li><strong>Tax exposure on method change</strong> — Changing method to lower profit can be challenged by the assessing officer as a device to defer tax.</li><li><strong>Comparability with peers</strong> — Two firms on different methods are not directly comparable, so analysts must adjust before benchmarking.</li></ul></section><section id="how-works" class="gl-sec"><h2>How FIFO vs Weighted Average Cost Works - Step by Step</h2><p>Each method assigns cost to issues and closing stock differently:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Record purchases at cost</strong><p>Every receipt is logged with its quantity and rate — the stock ledger that both methods read from.</p></li><li class="step-card"><span class="step-num">2</span><strong>Choose the cost formula</strong><p>The inventory policy fixes FIFO or Weighted Average, applied consistently across the period.</p></li><li class="step-card"><span class="step-num">3</span><strong>Value each issue</strong><p>FIFO charges the oldest rate to each sale; Weighted Average charges the running average rate.</p></li><li class="step-card"><span class="step-num">4</span><strong>Recompute the average (WAC only)</strong><p>Under Weighted Average, a fresh average is struck after each purchase, updating the issue rate.</p></li><li class="step-card"><span class="step-num">5</span><strong>Value closing stock</strong><p>Remaining units are valued at recent cost (FIFO) or the final average (WAC), flowing to the balance sheet.</p></li></ol></section><section id="formula" class="gl-sec"><h2>How to Calculate FIFO vs Weighted Average Cost</h2><div class="formula-box"><code>Weighted average cost per unit = Total cost of units available ÷ Total units available</code></div><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Input</th><th>Where it comes from</th><th>Sample value (INR)</th></tr></thead><tbody><tr><td>Opening + purchases (cost)</td><td>Stock ledger</td><td>2,20,000</td></tr><tr><td>Opening + purchases (units)</td><td>Stock ledger</td><td>1,000 units</td></tr><tr><td>Units issued / sold</td><td>Sales / production records</td><td>600 units</td></tr></tbody></table></div><p class="worked-result">Weighted average = 2,20,000 ÷ 1,000 = ₹220 per unit, so 600 units issued cost ₹1,32,000 and 400 units close at ₹88,000. Under FIFO, the same issues would be priced at the earliest purchase rates instead.</p></section><section id="example" class="gl-sec"><h2>FIFO vs Weighted Average Cost: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Opening 400 units @ ₹200</td><td>80,000</td><td>In stock ledger</td></tr><tr><td>Purchase 600 units @ ₹233.33</td><td>1,40,000</td><td>In stock ledger</td></tr><tr><td>Issue 600 units - FIFO (400@200 + 200@233.33)</td><td>1,26,667</td><td>COGS under FIFO</td></tr><tr><td>Issue 600 units - Weighted Average (@₹220)</td><td>1,32,000</td><td>COGS under WAC</td></tr><tr><td>Closing stock difference (FIFO vs WAC)</td><td>5,333</td><td>Higher profit under FIFO</td></tr></tbody></table></div><p>A Delhi electronics trader holds 400 units at ₹200 and buys 600 more at ₹233.33. Selling 600 units, FIFO charges ₹1,26,667 to cost of goods sold while Weighted Average charges ₹1,32,000. FIFO leaves a higher closing stock and about ₹5,333 more profit for the period — the same goods, a different number, driven only by the cost formula chosen.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Switching method to flatter profit: Changing from Weighted Average to FIFO to lift profit without cause is a policy change that draws tax and audit challenge → keep the method consistent and disclose any genuine change.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With FIFO vs Weighted Average Cost</h2><p>Inventory costing errors usually trace back to method discipline:</p><ul class="gloss-bullets"><li><strong>Switching method to flatter profit</strong> — Changing from Weighted Average to FIFO to lift profit without cause is a policy change that draws tax and audit challenge → keep the method consistent and disclose any genuine change.</li><li><strong>Using LIFO</strong> — Applying last-in-first-out is not permitted under AS 2 or Ind AS 2 → use FIFO or Weighted Average only.</li><li><strong>Not updating the average</strong> — Failing to recompute the weighted average after each purchase issues stock at a stale rate → recalculate on every receipt.</li><li><strong>Mixing methods across items</strong> — Costing similar inventory on different formulas breaks comparability → apply one formula to items of similar nature and use.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Costing and reconciliation terms that sit around inventory valuation:</p><ul class="related-terms"><li><a href="/glossary/accounting/standard-cost-variance">Standard Cost Variance</a> — An alternative costing basis compared against actual.</li><li><a href="/glossary/accounting/inter-company-ledger-reconciliation">Inter-Company Ledger Reconciliation</a> — Reconciling stock moved between group companies.</li><li><a href="/glossary/accounting/vendor-balance-confirmation">Vendor Balance Confirmation</a> — Confirming supplier balances behind purchase costs.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>FIFO vs Weighted Average Cost is the choice between two allowed ways of valuing inventory: FIFO assumes the oldest stock is sold first, while Weighted Average pools all units at a blended cost. The choice sits in the inventory valuation policy behind the balance sheet. It matters because, when prices move, the two methods give different closing stock, cost of goods sold and reported profit from the same purchases.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with FIFO vs Weighted Average Cost?</h3><p>FIFO vs Weighted Average Cost sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Inventory Accounting &amp; Costing</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/inventory-accounting-costing-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounting-services-for-trading-industry">Trading Business Accounting Services<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/standard-cost-variance">Standard Cost Variance<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/inter-company-ledger-reconciliation">Inter-Company Ledger Reconciliation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/vendor-balance-confirmation">Vendor Balance Confirmation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">FIFO vs Weighted Average Cost FAQs</h2><p class="faq-expanded__lead">Common questions about FIFO vs Weighted Average Cost for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>FIFO vs Weighted Average Cost</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is the weighted average cost per unit calculated?</h3><div class="faq-expanded__a" id="faq-a1"><p>Divide the total cost of goods available by the total units available. Opening stock of 100 units at Rs 50 plus a purchase of 300 units at Rs 60 gives Rs 23,000 for 400 units, a weighted average of Rs 57.50 per unit. Under FIFO the first 100 units issued would instead be charged out at Rs 50 each.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is weighted average cost vs FIFO vs LIFO?</h3><div class="faq-expanded__a" id="faq-a2"><p>FIFO charges out the oldest cost first, weighted average blends every cost into one rate, and LIFO charges out the newest cost first. When prices are rising, FIFO reports the lowest cost of goods sold and the highest closing stock, weighted average sits between the two, and LIFO the opposite. LIFO is not permitted in India.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Which inventory cost formula is allowed under AS 2 in India?</h3><div class="faq-expanded__a" id="faq-a3"><p>AS 2 and Ind AS 2 permit only FIFO or weighted average cost for interchangeable items, and LIFO is not allowed. The formula chosen must be applied consistently to all inventories of a similar nature. Closing stock is still carried at the lower of cost and net realisable value, so the formula never overrides a writedown to realisable value.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: AS 2 / Ind AS 2 (inventory valuation; FIFO and Weighted Average permitted, LIFO prohibited). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
