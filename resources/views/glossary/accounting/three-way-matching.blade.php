@extends('layouts.service-app')


@section('meta')
    <title>Three-Way Matching: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/three-way-matching">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Three-Way Matching: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/three-way-matching">
    <meta property="og:image" content="https://www.patronaccounting.com/images/three-way-matching-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#breadcrumb",
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
          "name": "Three-Way Matching",
          "item": "https://www.patronaccounting.com/glossary/accounting/three-way-matching"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#definedterm",
      "name": "Three-Way Matching",
      "description": "Three-way matching is the accounts-payable control that checks a supplier invoice against the purchase order and the goods receipt note before the bill is approved for payment. It sits in the purchase-to-pay cycle, gating every vendor payment. It matters because it stops overbilling, duplicate payments and payment for goods never received, protecting both cash and the accuracy of purchase records.",
      "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does three-way matching work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The purchase order, the goods receipt note and the supplier invoice are compared on quantity, rate and item before any payment is released. A purchase order for 100 units at Rs 500, a receipt of 98 units and an invoice for 100 units fails the match, so only Rs 49,000 is passed and the balance is held."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between two-way and three-way matching?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two way matching compares only the purchase order and the invoice, so it checks price and quantity ordered but never confirms what was actually received. Three way matching adds the goods receipt note, proving delivery before payment is released. Services with no physical delivery normally use two way matching against an approved milestone or timesheet instead."
          }
        },
        {
          "@type": "Question",
          "name": "How does three-way matching protect input tax credit under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Holding payment until the invoice matches the purchase order and receipt also forces a check that the supplier invoice carries a valid GSTIN and appears in GSTR-2B, since credit can only be taken on invoices reflected there. Withholding the GST portion of a disputed bill until the supplier files prevents credit being reversed with interest."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#article",
      "headline": "Three-Way Matching",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1036,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching",
      "name": "Three-Way Matching: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#definedterm"
      },
      "keywords": [
        "three-way matching",
        "what is three-way matching",
        "three-way matching meaning",
        "three-way matching in accounting",
        "Purchase Order (PO) Tolerance",
        "Section 43B(h) MSME Clock",
        "Accounts Receivable Aging Schedule",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/three-way-matching#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Three-Way Matching</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">Three-Way Matching</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div><aside class="gl-rotcta" data-rotate><div class="gl-rotcta__slides"><div class="gl-rotcta__slide is-active"><div class="gl-rotcta__badge">Free consultation</div><h3>Prefer a CA to handle it?</h3><p>CA-led accounting, GST and payroll for Indian businesses, on flat monthly plans.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Recommended</div><h3>Need help with Three-Way Matching?</h3><p>Accounts Payable Outsourcing - our CA-led team handles it end to end.</p><a class="gl-rotcta__btn" href="/accounts-payable-outsourcing-services">Explore the service &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Related service</div><h3>Accounts Reconciliation &amp; Audit</h3><p>A closely related service to keep your books and filings in order.</p><a class="gl-rotcta__btn" href="/accounts-reconciliation-and-audit">Learn more &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Free 30-min call</div><h3>Questions about Three-Way Matching?</h3><p>Get a free 30-minute call with a Chartered Accountant, no obligation.</p><a class="gl-rotcta__btn" href="/contact-us">Book a free call &rarr;</a></div><div class="gl-rotcta__slide"><div class="gl-rotcta__badge">Talk to us</div><h3>Rather have experts handle it?</h3><p>CA-led accounting, tax and compliance for Indian businesses.</p><a class="gl-rotcta__btn" href="/contact-us">Talk to an Expert &rarr;</a></div></div><div class="gl-rotcta__dots"><span class="gl-rotcta__dot is-active" data-i="0"></span><span class="gl-rotcta__dot" data-i="1"></span><span class="gl-rotcta__dot" data-i="2"></span><span class="gl-rotcta__dot" data-i="3"></span><span class="gl-rotcta__dot" data-i="4"></span></div></aside></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Three-Way Matching: Definition</div><div class="definition-box"><p>Three-way matching is the accounts-payable control that checks a supplier invoice against the purchase order and the goods receipt note before the bill is approved for payment. It sits in the purchase-to-pay cycle, gating every vendor payment. It matters because it stops overbilling, duplicate payments and payment for goods never received, protecting both cash and the accuracy of purchase records.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Three-Way Matching?</h2><p>Three-way matching compares three documents that should agree: the purchase order that says what was ordered and at what price, the goods receipt note that confirms what actually arrived, and the supplier invoice that asks for payment. Only when quantity and value line up across all three is the invoice released for payment. Where they do not, the bill is held as an exception for someone to investigate.</p><p>An Indian business meets three-way matching wherever purchases run through a proper procurement process — a Bengaluru electronics manufacturer receiving components, or a hospital ordering consumables. It is the control that catches a supplier who invoices for 100 units when 90 were delivered, and it underpins accurate input-tax-credit claims, because GST credit should only be taken on goods actually received.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/purchase-order-po-tolerance">Purchase Order (PO) Tolerance</a> — The permitted variance within which a match auto-approves.</li><li><a href="/glossary/accounting/section-43b-h-msme-clock">Section 43B(h) MSME Clock</a> — Payment-timing rule that starts once an invoice is matched.</li><li><a href="/glossary/accounting/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule</a> — The receivables mirror of disciplined payables control.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why Three-Way Matching Matters</h2><p>Skipping the match is where most avoidable payables losses begin:</p><ul class="gloss-bullets"><li><strong>Overpayment on inflated bills</strong> — Paying an invoice that exceeds the PO or the goods received hands money to the supplier that is never recovered.</li><li><strong>Duplicate payments</strong> — Without a match check, the same invoice can be paid twice, and chasing a refund can take months.</li><li><strong>Wrong input-tax credit</strong> — Claiming GST credit on goods not actually received exposes the business to reversal and interest on scrutiny.</li><li><strong>Overstated purchases and stock</strong> — Booking invoices with no receipt inflates purchases and inventory, distorting profit and margins.</li><li><strong>Weak audit trail</strong> — An auditor treats unmatched payments as a control weakness, widening the scope and cost of the audit.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Three-Way Matching Works - Step by Step</h2><p>A bill passes through the match before any payment leaves the business:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Raise the purchase order</strong><p>Procurement issues a PO stating item, quantity and agreed price — the first reference document.</p></li><li class="step-card"><span class="step-num">2</span><strong>Record goods receipt</strong><p>On delivery, the store records a goods receipt note for the quantity actually received — the second reference.</p></li><li class="step-card"><span class="step-num">3</span><strong>Receive the invoice</strong><p>The supplier submits an invoice for payment — the third document to be tested.</p></li><li class="step-card"><span class="step-num">4</span><strong>Match the three</strong><p>AP compares quantity and value across PO, GRN and invoice; agreement within tolerance passes the match.</p></li><li class="step-card"><span class="step-num">5</span><strong>Route exceptions</strong><p>Any mismatch beyond tolerance is held and sent to the buyer or store for resolution before payment.</p></li><li class="step-card"><span class="step-num">6</span><strong>Approve and pay</strong><p>A clean match is approved, the liability is booked, and payment is scheduled within the supplier&#x27;s terms.</p></li></ol></section><section id="example" class="gl-sec"><h2>Three-Way Matching: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Purchase order (100 units @ 500)</td><td>50,000</td><td>Ordered value</td></tr><tr><td>Goods receipt note (90 units received)</td><td>45,000</td><td>Value actually received</td></tr><tr><td>Supplier invoice (100 units billed)</td><td>50,000</td><td>Amount claimed</td></tr><tr><td>Matched and approved for payment</td><td>45,000</td><td>Paid for goods received</td></tr><tr><td>Held as exception</td><td>5,000</td><td>Short-supplied 10 units investigated</td></tr></tbody></table></div><p>A Bengaluru electronics maker orders 100 components at ₹500 each, so the PO is ₹50,000. Only 90 arrive, giving a goods receipt of ₹45,000, yet the supplier invoices for the full ₹50,000. The three-way match catches the ₹5,000 gap: only ₹45,000 is approved and paid, and the ₹5,000 short-supply is routed as an exception for a credit note. The control prevents both the overpayment and an overstated stock figure.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Paying before goods receipt: Approving an invoice without a GRN means paying for goods that may never arrive → require a receipt before release.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Three-Way Matching</h2><p>The control fails quietly when steps are bypassed under time pressure:</p><ul class="gloss-bullets"><li><strong>Paying before goods receipt</strong> — Approving an invoice without a GRN means paying for goods that may never arrive → require a receipt before release.</li><li><strong>Matching on value only</strong> — Checking the amount but not the quantity misses short deliveries at the right rate → match quantity and value.</li><li><strong>Blanket tolerance too wide</strong> — A large auto-approval band lets inflated bills through unchecked → keep tolerance tight and reviewed.</li><li><strong>No PO for urgent buys</strong> — Off-system emergency purchases skip the match entirely → back-fill a PO and GRN even for rush orders.</li><li><strong>Claiming GST before matching</strong> — Taking input credit on an unmatched invoice risks reversal → match first, then claim.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Controls and measures that work alongside the match:</p><ul class="related-terms"><li><a href="/glossary/accounting/purchase-order-po-tolerance">Purchase Order (PO) Tolerance</a> — The variance band within which a match auto-approves.</li><li><a href="/glossary/accounting/section-43b-h-msme-clock">Section 43B(h) MSME Clock</a> — Payment-timing rule that starts once a bill is matched.</li><li><a href="/glossary/accounting/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule</a> — The receivables-side discipline that mirrors payables control.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Three-way matching is the accounts-payable control that checks a supplier invoice against the purchase order and the goods receipt note before the bill is approved for payment. It sits in the purchase-to-pay cycle, gating every vendor payment. It matters because it stops overbilling, duplicate payments and payment for goods never received, protecting both cash and the accuracy of purchase records.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Three-Way Matching?</h3><p>Three-Way Matching sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounts-payable-outsourcing-services">Accounts Payable Outsourcing &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounts Payable Outsourcing</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounts-payable-outsourcing-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounts-reconciliation-and-audit">Accounts Reconciliation &amp; Audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/purchase-order-po-tolerance">Purchase Order (PO) Tolerance<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/section-43b-h-msme-clock">Section 43B(h) MSME Clock<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Three-Way Matching FAQs</h2><p class="faq-expanded__lead">Common questions about Three-Way Matching for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Three-Way Matching</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does three-way matching work?</h3><div class="faq-expanded__a" id="faq-a1"><p>The purchase order, the goods receipt note and the supplier invoice are compared on quantity, rate and item before any payment is released. A purchase order for 100 units at Rs 500, a receipt of 98 units and an invoice for 100 units fails the match, so only Rs 49,000 is passed and the balance is held.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between two-way and three-way matching?</h3><div class="faq-expanded__a" id="faq-a2"><p>Two way matching compares only the purchase order and the invoice, so it checks price and quantity ordered but never confirms what was actually received. Three way matching adds the goods receipt note, proving delivery before payment is released. Services with no physical delivery normally use two way matching against an approved milestone or timesheet instead.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How does three-way matching protect input tax credit under GST?</h3><div class="faq-expanded__a" id="faq-a3"><p>Holding payment until the invoice matches the purchase order and receipt also forces a check that the supplier invoice carries a valid GSTIN and appears in GSTR-2B, since credit can only be taken on invoices reflected there. Withholding the GST portion of a disputed bill until the supplier files prevents credit being reversed with interest.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a></div></div><p class="eeat-note">Applicable framework: Internal financial controls under Companies Act 2013 (Section 143(3)(i)); AS 2 / Ind AS 2 for inventory; CGST Act 2017 for input credit. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
