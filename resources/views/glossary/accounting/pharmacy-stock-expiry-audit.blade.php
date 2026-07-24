@extends('layouts.service-app')


@section('meta')
    <title>Pharmacy Stock Expiry: What It Means in Indian Books</title>
    <meta name="description" content="Checking batch expiry so unsaleable stock is written off, not carried. The definition, the entry it drives and the mistake to avoid. In plain English.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Pharmacy Stock Expiry: What It Means in Indian Books | Patron Accounting">
    <meta property="og:description" content="Checking batch expiry so unsaleable stock is written off, not carried. The definition, the entry it drives and the mistake to avoid. In plain English.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit">
    <meta property="og:image" content="https://www.patronaccounting.com/images/pharmacy-stock-expiry-audit-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#breadcrumb",
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
          "name": "Pharmacy Stock Expiry Audit",
          "item": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#definedterm",
      "name": "Pharmacy Stock Expiry Audit",
      "description": "A pharmacy stock expiry audit is the periodic check of a pharmacy&#x27;s inventory for expired and near-expiry medicines, so they can be written down, returned or destroyed and removed from saleable stock. It appears in the books as an inventory write-down and, where stock is destroyed, a GST input-credit reversal. It matters because carrying expired drugs overstates stock value and breaches drug-safety rules.",
      "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How often should expiry audits be conducted for medication?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A monthly near expiry review plus a full physical expiry audit every quarter is the workable standard for a retail pharmacy, with a daily short expiry check on fast moving and cold chain items. Stock within 90 days of expiry should be flagged for return to the supplier, since most distributors accept returns only three to six months before the expiry date."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between expired stock and slow-moving stock in a pharmacy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Expired stock has passed its labelled expiry date and cannot legally be sold, so it is written off in full, while slow moving stock is still saleable but turning over below the normal rate and is only provided against, typically 25 to 50 percent of cost. Slow moving stock becomes expired stock if it is not returned or discounted in time."
          }
        },
        {
          "@type": "Question",
          "name": "How is expired medicine treated under GST in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Input tax credit on expired medicine that is destroyed or written off must be reversed under Section 17(5)(h) of the CGST Act. If the stock is instead returned to the distributor, the supplier raises a credit note and the credit stands reversed through that route. Destruction should be documented with a stock write-off note and the drug licence record, as the audit trail supports the deduction."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#article",
      "headline": "What Is Pharmacy Stock Expiry Audit? Meaning and Why It Matters",
      "description": "Checking batch expiry so unsaleable stock is written off, not carried. The definition, the entry it drives and the mistake to avoid. In plain English.",
      "inLanguage": "en-IN",
      "wordCount": 1243,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit",
      "name": "Pharmacy Stock Expiry: What It Means in Indian Books",
      "description": "Checking batch expiry so unsaleable stock is written off, not carried. The definition, the entry it drives and the mistake to avoid. In plain English.",
      "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#definedterm"
      },
      "keywords": [
        "pharmacy stock expiry audit",
        "pharmacy stock expiry audit meaning",
        "pharmacy stock expiry audit in accounting",
        "Online Travel Agency (OTA) Deductions",
        "Food Cost Variance Percentage",
        "Room Night Occupancy Yield",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/pharmacy-stock-expiry-audit#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Pharmacy Stock Expiry Audit</span></nav><div class="gl-cat">Accounting Glossary &middot; Industry</div><h1 class="gl-h1">What Is Pharmacy Stock Expiry Audit? Meaning and Why It Matters</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>6 min read</span><span class="sep">&middot;</span><span class="lvl">Advanced</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Pharmacy Stock Expiry Audit: Definition</div><div class="definition-box"><p>A pharmacy stock expiry audit is the periodic check of a pharmacy&#x27;s inventory for expired and near-expiry medicines, so they can be written down, returned or destroyed and removed from saleable stock. It appears in the books as an inventory write-down and, where stock is destroyed, a GST input-credit reversal. It matters because carrying expired drugs overstates stock value and breaches drug-safety rules.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Pharmacy Stock Expiry Audit?</h2><p>Medicines carry an expiry date, after which they cannot legally be sold and have no value. A pharmacy stock expiry audit systematically reviews batches by expiry date, flags what has expired or is close to it, and ensures those items are pulled from the shelf, valued correctly and disposed of or returned to the supplier under the agreed return policy.</p><p>An Indian hospital pharmacy or retail chemist meets this at every physical stock count and month-end close. Expired stock has to be written down to nil in the books under AS 2, which values inventory at the lower of cost and net realisable value. Where expired goods are destroyed rather than returned, the GST input tax credit originally claimed on them must be reversed under Section 17(5)(h) of the CGST Act — so the audit is both an accounting and a GST discipline, not just a housekeeping task.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/online-travel-agency-ota-deductions">Online Travel Agency (OTA) Deductions</a> — Intermediary deductions in hospitality, a separate sector.</li><li><a href="/glossary/accounting/food-cost-variance-percentage">Food Cost Variance Percentage</a> — A restaurant cost-control metric.</li><li><a href="/glossary/accounting/room-night-occupancy-yield">Room Night Occupancy Yield</a> — A hotel performance metric, unrelated to pharmacy stock.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Pharmacy Stock Expiry Audit Works</h2><p>Expired stock moves from shelf to written-off through a controlled path:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Extract the batch-expiry report</strong><p>The pharmacy software produces a report of stock by batch and expiry date — the source artefact for the audit.</p></li><li class="step-card"><span class="step-num">2</span><strong>Physically verify flagged batches</strong><p>The pharmacist and auditor check flagged batches on the shelf against the report and quarantine expired items.</p></li><li class="step-card"><span class="step-num">3</span><strong>Decide return or destroy</strong><p>Items within the supplier&#x27;s return window are booked for return; the rest are marked for destruction.</p></li><li class="step-card"><span class="step-num">4</span><strong>Write down in the books</strong><p>Expired stock is written down to nil under AS 2, hitting the profit and loss account as an inventory loss.</p></li><li class="step-card"><span class="step-num">5</span><strong>Reverse GST and document destruction</strong><p>Where stock is destroyed, the input credit is reversed under Section 17(5)(h) and a destruction record is kept for drug-safety and audit.</p></li></ol></section><section id="sector" class="gl-sec"><h2>Where Pharmacy Stock Expiry Audit Applies — Hospitals and Clinics</h2><p>Expiry control matters wherever medicines are stocked in volume:</p><ul class="gloss-bullets"><li><strong>Hospital in-house pharmacies</strong> — Large drug inventories across wards and stores need routine expiry sweeps to avoid dead stock.</li><li><strong>Retail chemist chains</strong> — Multi-store chemists must reconcile expiry across outlets and manage supplier returns centrally.</li><li><strong>Cold-chain and vaccine stock</strong> — Temperature-sensitive items expire fast and need tight batch tracking.</li><li><strong>Near-expiry FEFO management</strong> — Pharmacies using first-expiry-first-out dispensing catch stock before it expires.</li><li><strong>Supplier return windows</strong> — Providers with buy-back or return terms must claim within the window to recover value.</li></ul><p class="inline-links">See also: <a href="/healthcare-sector-accounting-services">Healthcare Accounting Services</a> <a href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing</a></p></section><section id="compliance" class="gl-sec"><h2>Statutory Position on Pharmacy Stock Expiry Audit</h2><p>Expired pharmacy stock has to be valued at the lower of cost and net realisable value under AS 2 (Valuation of Inventories), which for expired medicines means writing them down to nil. Where the expired goods are destroyed rather than returned, Section 17(5)(h) of the CGST Act 2017 blocks the input tax credit — any ITC earlier claimed on those goods must be reversed in the GST return for the period of destruction. Physical destruction of expired drugs must also follow the disposal requirements under the Drugs and Cosmetics Act 1940 and its Rules, with records retained.</p><ul class="gloss-bullets"><li><strong>Inventory valuation</strong> — AS 2 — write expired stock down to nil (lower of cost and NRV). Law stated as at 22 July 2026.</li><li><strong>GST on destroyed stock</strong> — Section 17(5)(h), CGST Act — reverse the input credit on goods destroyed.</li><li><strong>Drug disposal</strong> — Destruction per the Drugs and Cosmetics Act 1940 / Rules 1945, with documentation.</li><li><strong>Return route</strong> — Stock returned to supplier within the return window is credited, not written off.</li></ul></section><section id="example" class="gl-sec"><h2>Pharmacy Stock Expiry Audit: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Expired stock identified at audit</td><td>1,80,000</td><td>Removed from saleable inventory</td></tr><tr><td>Returnable to supplier</td><td>1,10,000</td><td>Booked as supplier return / credit</td></tr><tr><td>To be destroyed</td><td>70,000</td><td>Written down to nil under AS 2</td></tr><tr><td>GST input credit on destroyed stock (12%)</td><td>8,400</td><td>Reversed under Section 17(5)(h)</td></tr><tr><td>Net loss to P&amp;L</td><td>70,000</td><td>Plus ITC reversal impact</td></tr></tbody></table></div><p>A Kochi hospital pharmacy&#x27;s quarterly expiry audit finds ₹1,80,000 of expired medicines. ₹1,10,000 falls within suppliers&#x27; return windows and is sent back for credit; the remaining ₹70,000 must be destroyed. That ₹70,000 is written down to nil under AS 2, and the ₹8,400 of GST input credit claimed on it is reversed under Section 17(5)(h). Destruction is documented for drug-safety records — turning a shelf clean-up into a clean set of books.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>No batch-wise expiry tracking: Managing stock only by item, not batch, hides which lots are expiring → track expiry at batch level and dispense first-expiry-first-out.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Pharmacy Stock Expiry Audit</h2><p>Expiry audits fail when stock is not tracked by batch or GST is forgotten:</p><ul class="gloss-bullets"><li><strong>No batch-wise expiry tracking</strong> — Managing stock only by item, not batch, hides which lots are expiring → track expiry at batch level and dispense first-expiry-first-out.</li><li><strong>Carrying expired stock at cost</strong> — Leaving expired items at full value overstates inventory and profit → write them down to nil under AS 2.</li><li><strong>Forgetting the ITC reversal</strong> — Destroying stock without reversing GST credit understates GST liability → reverse the credit under Section 17(5)(h).</li><li><strong>Missing supplier return windows</strong> — Failing to return near-expiry stock in time forfeits recoverable value → track and claim returns before the window closes.</li><li><strong>No destruction record</strong> — Destroying drugs without documentation breaches drug-safety rules → keep destruction records per the Drugs and Cosmetics Rules.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms a pharmacy finance team meets alongside expiry control:</p><ul class="related-terms"><li><a href="/glossary/accounting/online-travel-agency-ota-deductions">Online Travel Agency (OTA) Deductions</a> — Intermediary deductions in hospitality.</li><li><a href="/glossary/accounting/food-cost-variance-percentage">Food Cost Variance Percentage</a> — Restaurant cost-control metric.</li><li><a href="/glossary/accounting/room-night-occupancy-yield">Room Night Occupancy Yield</a> — Hotel performance metric.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A pharmacy stock expiry audit is the periodic check of a pharmacy&amp;#x27;s inventory for expired and near-expiry medicines, so they can be written down, returned or destroyed and removed from saleable stock. It appears in the books as an inventory write-down and, where stock is destroyed, a GST input-credit reversal. It matters because carrying expired drugs overstates stock value and breaches drug-safety rules.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Pharmacy Stock Expiry Audit?</h3><p>Pharmacy Stock Expiry Audit sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/healthcare-sector-accounting-services">Healthcare Accounting Services &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Healthcare Accounting Services</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/healthcare-sector-accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/online-travel-agency-ota-deductions">Online Travel Agency (OTA) Deductions<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/food-cost-variance-percentage">Food Cost Variance Percentage<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/room-night-occupancy-yield">Room Night Occupancy Yield<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Pharmacy Stock Expiry Audit FAQs</h2><p class="faq-expanded__lead">Common questions about Pharmacy Stock Expiry Audit for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Pharmacy Stock Expiry Audit</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How often should expiry audits be conducted for medication?</h3><div class="faq-expanded__a" id="faq-a1"><p>A monthly near expiry review plus a full physical expiry audit every quarter is the workable standard for a retail pharmacy, with a daily short expiry check on fast moving and cold chain items. Stock within 90 days of expiry should be flagged for return to the supplier, since most distributors accept returns only three to six months before the expiry date.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between expired stock and slow-moving stock in a pharmacy?</h3><div class="faq-expanded__a" id="faq-a2"><p>Expired stock has passed its labelled expiry date and cannot legally be sold, so it is written off in full, while slow moving stock is still saleable but turning over below the normal rate and is only provided against, typically 25 to 50 percent of cost. Slow moving stock becomes expired stock if it is not returned or discounted in time.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How is expired medicine treated under GST in India?</h3><div class="faq-expanded__a" id="faq-a3"><p>Input tax credit on expired medicine that is destroyed or written off must be reversed under Section 17(5)(h) of the CGST Act. If the stock is instead returned to the distributor, the supplier raises a credit note and the credit stands reversed through that route. Destruction should be documented with a stock write-off note and the drug licence record, as the audit trail supports the deduction.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a><a>CDSCO</a></div></div><p class="eeat-note">Applicable framework: AS 2 (Valuation of Inventories); CGST Act 2017 (Section 17(5)(h)); Drugs and Cosmetics Act 1940. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
