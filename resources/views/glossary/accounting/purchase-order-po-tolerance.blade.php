@extends('layouts.service-app')


@section('meta')
    <title>Purchase Order (PO) Tolerance: Meaning and Example</title>
    <meta name="description" content="The permitted gap between ordered and invoiced value before escalation. The definition, the entry it drives and the mistake. Written for preparers.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Purchase Order (PO) Tolerance: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="The permitted gap between ordered and invoiced value before escalation. The definition, the entry it drives and the mistake. Written for preparers.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance">
    <meta property="og:image" content="https://www.patronaccounting.com/images/purchase-order-po-tolerance-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#breadcrumb",
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
          "name": "Purchase Order (PO) Tolerance",
          "item": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#definedterm",
      "name": "Purchase Order (PO) Tolerance",
      "description": "A purchase order (PO) tolerance is the permitted variance, set in percentage or value, between a supplier invoice and its purchase order or goods receipt within which the invoice is approved automatically. It lives in the accounts-payable matching rules. It matters because it lets small, expected differences clear without delay while still routing genuine over-billing for review.",
      "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is a purchase order tolerance limit applied during invoice matching?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The system compares invoice quantity and rate against the purchase order and releases the invoice automatically when the gap falls inside the set tolerance. A common setting is 2 percent on price and 5 percent on quantity, so an invoice of Rs 1,02,000 against a Rs 1,00,000 order clears, while Rs 1,06,000 routes to the buyer for approval."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a price tolerance and a quantity tolerance on a purchase order?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A price tolerance allows the invoice rate to exceed the purchase order rate by a set percentage, while a quantity tolerance allows extra units to be received against the same order. Indian buyers usually keep price tolerance tight, often 2 to 5 percent, and set quantity tolerance wider for bulk materials where weighbridge variation is normal. Both are configured per item category."
          }
        },
        {
          "@type": "Question",
          "name": "How does a PO tolerance affect GST input tax credit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Input tax credit can be taken only on the tax shown in the supplier's invoice as it appears in GSTR-2B, so a price difference passed by tolerance still has to agree with the supplier's reported invoice value. Section 16(2) of the CGST Act also requires payment to the supplier within 180 days, or the credit is reversed with interest."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#article",
      "headline": "What Is a Purchase Order (PO) Tolerance? Meaning and How It Works",
      "description": "The permitted gap between ordered and invoiced value before escalation. The definition, the entry it drives and the mistake. Written for preparers.",
      "inLanguage": "en-IN",
      "wordCount": 1056,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance",
      "name": "Purchase Order (PO) Tolerance: Meaning and Example",
      "description": "The permitted gap between ordered and invoiced value before escalation. The definition, the entry it drives and the mistake. Written for preparers.",
      "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#definedterm"
      },
      "keywords": [
        "purchase order (PO) tolerance",
        "purchase order (po) tolerance meaning",
        "purchase order (po) tolerance in accounting",
        "Section 43B(h) MSME Clock",
        "Accounts Receivable Aging Schedule",
        "Days Sales Outstanding (DSO)",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/purchase-order-po-tolerance#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Purchase Order (PO) Tolerance</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">What Is a Purchase Order (PO) Tolerance? Meaning and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Purchase Order (PO) Tolerance: Definition</div><div class="definition-box"><p>A purchase order (PO) tolerance is the permitted variance, set in percentage or value, between a supplier invoice and its purchase order or goods receipt within which the invoice is approved automatically. It lives in the accounts-payable matching rules. It matters because it lets small, expected differences clear without delay while still routing genuine over-billing for review.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Purchase Order (PO) Tolerance?</h2><p>A PO tolerance is the allowance a business builds into its three-way match so that not every tiny difference stops a payment. Rounding, freight, a minor rate revision or a small quantity variance can make an invoice differ from the order by a few rupees or a percent or two. The tolerance says how much difference is acceptable — say 2% or ₹500 — before the bill has to be investigated rather than auto-approved.</p><p>An Indian business meets PO tolerance inside its accounting or ERP system, wherever purchase invoices are matched. An Ahmedabad chemicals distributor buying in bulk will set a modest tolerance so that weight-based quantity differences clear automatically, while a large discrepancy is held. It is an internal-control setting, not a statutory rule, but a well-judged tolerance is what keeps a payables team from being buried in exceptions or, worse, waving through inflated bills.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/section-43b-h-msme-clock">Section 43B(h) MSME Clock</a> — Payment-timing rule that runs once a tolerant match clears a bill.</li><li><a href="/glossary/accounting/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule</a> — Receivables ageing that mirrors disciplined payables control.</li><li><a href="/glossary/accounting/days-sales-outstanding-dso">Days Sales Outstanding (DSO)</a> — Collection-speed measure on the sales side of the cycle.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why Purchase Order (PO) Tolerance Matters</h2><p>A tolerance set carelessly costs either money or time:</p><ul class="gloss-bullets"><li><strong>Too wide lets over-billing through</strong> — A generous band auto-approves inflated invoices, so overcharges are paid before anyone notices.</li><li><strong>Too tight buries the team</strong> — A near-zero tolerance sends every rounding difference to exception, delaying payments and irritating suppliers.</li><li><strong>Late payments trip the MSME clock</strong> — Bills stuck in exception queues can breach the Section 43B(h) window for micro and small suppliers, deferring the tax deduction.</li><li><strong>Distorted purchase cost</strong> — Auto-approving price creep hides a rising cost base that should have been renegotiated.</li><li><strong>Weak control evidence</strong> — An undocumented or inconsistent tolerance is a finding an auditor will raise on internal controls.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Purchase Order (PO) Tolerance Works - Step by Step</h2><p>Tolerance sits inside the matching engine and decides each invoice&#x27;s path:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Set the tolerance policy</strong><p>Finance defines the acceptable variance in percentage and absolute terms — the control parameter.</p></li><li class="step-card"><span class="step-num">2</span><strong>Configure it in the system</strong><p>The tolerance is entered into the ERP or accounting software&#x27;s matching rules so it applies automatically.</p></li><li class="step-card"><span class="step-num">3</span><strong>Match the invoice</strong><p>On each bill, the system compares invoice value and quantity to the PO and goods receipt.</p></li><li class="step-card"><span class="step-num">4</span><strong>Auto-approve within band</strong><p>Differences inside the tolerance pass straight through and the payable is booked.</p></li><li class="step-card"><span class="step-num">5</span><strong>Route breaches to exception</strong><p>Any variance beyond the band is held and sent to the buyer for approval or a credit note.</p></li><li class="step-card"><span class="step-num">6</span><strong>Review and tune</strong><p>Finance periodically reviews exception patterns and adjusts the tolerance, keeping the control effective.</p></li></ol></section><section id="example" class="gl-sec"><h2>Purchase Order (PO) Tolerance: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Purchase order value</td><td>2,00,000</td><td>Agreed order</td></tr><tr><td>Tolerance set at 2%</td><td>4,000</td><td>Auto-approval band</td></tr><tr><td>Invoice A (2,03,000)</td><td>2,03,000</td><td>Within 2% → auto-approved</td></tr><tr><td>Invoice B (2,12,000)</td><td>2,12,000</td><td>Beyond 2% → held as exception</td></tr><tr><td>Exception resolved via credit note</td><td>10,000</td><td>Over-billing recovered before payment</td></tr></tbody></table></div><p>An Ahmedabad chemicals distributor sets a 2% PO tolerance, a ₹4,000 band on a ₹2,00,000 order. Invoice A at ₹2,03,000 falls inside the band, so it clears automatically and is paid on time — keeping the supplier, who is MSME-registered, within the 43B(h) window. Invoice B at ₹2,12,000 breaches the band and is held; the ₹10,000 overcharge is corrected with a credit note before any payment goes out.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>One blanket band for everything: Using the same tolerance for a ₹5,000 and a ₹50,00,000 order mismatches risk → set percentage and value limits by category.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Purchase Order (PO) Tolerance</h2><p>Tolerance goes wrong when it is set once and never revisited:</p><ul class="gloss-bullets"><li><strong>One blanket band for everything</strong> — Using the same tolerance for a ₹5,000 and a ₹50,00,000 order mismatches risk → set percentage and value limits by category.</li><li><strong>Percentage with no cash cap</strong> — A 2% band on huge orders can auto-approve lakhs of variance → pair the percentage with an absolute rupee ceiling.</li><li><strong>Never reviewing exceptions</strong> — Ignoring what keeps breaching hides a real price or quality problem → analyse exception trends regularly.</li><li><strong>Undocumented changes</strong> — Quietly widening tolerance to clear a queue removes the control → record and approve every change.</li><li><strong>Forgetting the MSME clock</strong> — Letting borderline invoices sit in exception delays MSME payment → prioritise micro/small supplier bills.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms in the same purchase-to-pay and collections cycle:</p><ul class="related-terms"><li><a href="/glossary/accounting/section-43b-h-msme-clock">Section 43B(h) MSME Clock</a> — Payment-timing rule triggered once a bill clears the match.</li><li><a href="/glossary/accounting/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule</a> — Receivables ageing mirroring payables discipline.</li><li><a href="/glossary/accounting/days-sales-outstanding-dso">Days Sales Outstanding (DSO)</a> — Collection-speed measure on the sales side.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A purchase order (PO) tolerance is the permitted variance, set in percentage or value, between a supplier invoice and its purchase order or goods receipt within which the invoice is approved automatically. It lives in the accounts-payable matching rules. It matters because it lets small, expected differences clear without delay while still routing genuine over-billing for review.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Purchase Order (PO) Tolerance?</h3><p>Purchase Order (PO) Tolerance sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounts-payable-outsourcing-services">Accounts Payable Outsourcing &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounts Payable Outsourcing</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounts-payable-outsourcing-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/section-43b-h-msme-clock">Section 43B(h) MSME Clock<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/days-sales-outstanding-dso">Days Sales Outstanding (DSO)<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Purchase Order (PO) Tolerance FAQs</h2><p class="faq-expanded__lead">Common questions about Purchase Order (PO) Tolerance for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Purchase Order (PO) Tolerance</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is a purchase order tolerance limit applied during invoice matching?</h3><div class="faq-expanded__a" id="faq-a1"><p>The system compares invoice quantity and rate against the purchase order and releases the invoice automatically when the gap falls inside the set tolerance. A common setting is 2 percent on price and 5 percent on quantity, so an invoice of Rs 1,02,000 against a Rs 1,00,000 order clears, while Rs 1,06,000 routes to the buyer for approval.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a price tolerance and a quantity tolerance on a purchase order?</h3><div class="faq-expanded__a" id="faq-a2"><p>A price tolerance allows the invoice rate to exceed the purchase order rate by a set percentage, while a quantity tolerance allows extra units to be received against the same order. Indian buyers usually keep price tolerance tight, often 2 to 5 percent, and set quantity tolerance wider for bulk materials where weighbridge variation is normal. Both are configured per item category.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How does a PO tolerance affect GST input tax credit?</h3><div class="faq-expanded__a" id="faq-a3"><p>Input tax credit can be taken only on the tax shown in the supplier's invoice as it appears in GSTR-2B, so a price difference passed by tolerance still has to agree with the supplier's reported invoice value. Section 16(2) of the CGST Act also requires payment to the supplier within 180 days, or the credit is reversed with interest.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Internal financial controls under Companies Act 2013 (Section 143(3)(i)); MSMED Act 2006 (Section 15) for payment timing. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
