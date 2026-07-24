@extends('layouts.service-app')


@section('meta')
    <title>Fuel Fleet Card Reconciliation: Meaning and Example</title>
    <meta name="description" content="Fuel card statements matched to trips, vehicles and drivers. What it is, how it is measured and who has to report it. With the disclosure checklist.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Fuel Fleet Card Reconciliation: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="Fuel card statements matched to trips, vehicles and drivers. What it is, how it is measured and who has to report it. With the disclosure checklist.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation">
    <meta property="og:image" content="https://www.patronaccounting.com/images/fuel-fleet-card-reconciliation-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#breadcrumb",
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
          "name": "Fuel Fleet Card Reconciliation",
          "item": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#definedterm",
      "name": "Fuel Fleet Card Reconciliation",
      "description": "Fuel fleet card reconciliation is the periodic matching of a fleet&#x27;s fuel-card statement to its own vehicle and trip records, so every litre billed can be tied to a genuine vehicle, driver and trip. It appears in the books as verified fuel expense and any recoverable discrepancy. It matters because fuel is a fleet&#x27;s biggest controllable cost, and cards are a common route for leakage and pilferage.",
      "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to do a fuel reconciliation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Match three sources for the period: the fuel card statement from the issuer, the vehicle wise fuel log or odometer reading, and the expense entries in the books. Compare litres and value per vehicle, then investigate transactions off route, above tank capacity or outside working hours. A 300 litre tank showing a 340 litre fill needs explanation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a fuel card statement and the vehicle log book?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The fuel card statement is the issuer's record of what was charged to the card, while the log book is the driver's record of kilometres run and litres taken. The statement proves the spend; the log book proves the consumption was genuine. Reconciling both gives mileage per vehicle and exposes cards used on personal vehicles."
          }
        },
        {
          "@type": "Question",
          "name": "Can input tax credit be claimed on petrol and diesel bought on a fleet card?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Petrol and diesel stay outside GST and carry state VAT and central excise instead, so there is no GST on the fuel invoice to claim as input tax credit. Card issuer service charges do carry GST and that portion is claimable for business use. Credit relating to motor vehicles is separately restricted by Section 17(5)."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#article",
      "headline": "What Is Fuel Fleet Card Reconciliation? Meaning and Why It Matters",
      "description": "Fuel card statements matched to trips, vehicles and drivers. What it is, how it is measured and who has to report it. With the disclosure checklist.",
      "inLanguage": "en-IN",
      "wordCount": 1062,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation"
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
      "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation",
      "name": "Fuel Fleet Card Reconciliation: Meaning and Example",
      "description": "Fuel card statements matched to trips, vehicles and drivers. What it is, how it is measured and who has to report it. With the disclosure checklist.",
      "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#definedterm"
      },
      "keywords": [
        "fuel fleet card reconciliation",
        "fuel fleet card reconciliation meaning",
        "fuel fleet card reconciliation in accounting",
        "STPI / SOFTEX Export Filing",
        "Software Export Revenue (Section 10AA SEZ)",
        "Foreign Currency Receivables",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">Fuel Fleet Card Reconciliation</span></nav><div class="gl-cat">Accounting Glossary &middot; Industry</div><h1 class="gl-h1">What Is Fuel Fleet Card Reconciliation? Meaning and Why It Matters</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Advanced</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Fuel Fleet Card Reconciliation: Definition</div><div class="definition-box"><p>Fuel fleet card reconciliation is the periodic matching of a fleet&#x27;s fuel-card statement to its own vehicle and trip records, so every litre billed can be tied to a genuine vehicle, driver and trip. It appears in the books as verified fuel expense and any recoverable discrepancy. It matters because fuel is a fleet&#x27;s biggest controllable cost, and cards are a common route for leakage and pilferage.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Fuel Fleet Card Reconciliation?</h2><p>Fleet operators issue fuel cards so drivers can refuel without cash, and the fuel company sends a consolidated statement of every transaction. Fuel fleet card reconciliation is the control that checks each carded transaction against the fleet&#x27;s own records — which vehicle, which driver, which trip, how many litres, at what mileage — so that billed fuel matches fuel actually used for legitimate journeys.</p><p>An Indian transport or logistics operator meets this every fuel-card billing cycle. The finance team matches the card statement to trip sheets and odometer readings, checks litres against expected consumption, and investigates cards fuelling on non-trip days, refills exceeding tank capacity or mileage that does not add up. Only the verified fuel is accepted as expense; the rest is queried or recovered. Done monthly, it turns the single largest running cost from a blind spot into a controlled line.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/stpi-softex-export-filing">STPI / SOFTEX Export Filing</a> — A software-export declaration, a separate sector concept.</li><li><a href="/glossary/software-export-revenue-section-10aa-sez">Software Export Revenue (Section 10AA SEZ)</a> — An SEZ export-profit deduction for IT firms.</li><li><a href="/glossary/foreign-currency-receivables">Foreign Currency Receivables</a> — Export receivables in foreign currency, an IT-sector concept.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Fuel Fleet Card Reconciliation Works</h2><p>Carded fuel moves from statement to verified expense through a set path:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Download the card statement</strong><p>The fuel company&#x27;s transaction statement for the period is the source document listing every card refill.</p></li><li class="step-card"><span class="step-num">2</span><strong>Map cards to vehicles and drivers</strong><p>Each card is tied to a specific vehicle and driver in the fleet master, so transactions can be attributed.</p></li><li class="step-card"><span class="step-num">3</span><strong>Match to trip sheets and odometer</strong><p>Refills are matched to trips and mileage; litres are tested against expected consumption for the distance.</p></li><li class="step-card"><span class="step-num">4</span><strong>Flag and query exceptions</strong><p>Non-trip-day refills, over-capacity fills or abnormal mileage are flagged and queried with the driver or vendor.</p></li><li class="step-card"><span class="step-num">5</span><strong>Post verified expense and recover the rest</strong><p>Verified fuel is booked as expense; discrepancies are recovered from drivers or disputed with the fuel vendor.</p></li></ol></section><section id="sector" class="gl-sec"><h2>Where Fuel Fleet Card Reconciliation Applies — Travel and Logistics Operators</h2><p>Card reconciliation matters wherever fuel is a large, distributed spend:</p><ul class="gloss-bullets"><li><strong>Multi-vehicle fleets</strong> — Operators running many trucks on fuel cards need reconciliation to catch leakage across vehicles.</li><li><strong>Long-haul trucking</strong> — Distances and multiple refills per trip make manual checking impractical without a structured match.</li><li><strong>Passenger transport fleets</strong> — Bus and cab fleets on cards reconcile fuel against routes and duty logs.</li><li><strong>Driver-operated cards</strong> — Where drivers hold cards, the risk of misuse makes reconciliation essential.</li><li><strong>Cost-plus contracts</strong> — Operators billing clients for fuel must reconcile to substantiate the pass-through.</li></ul><p class="inline-links">See also: <a href="/travel-and-logistics-accounting-services">Travel &amp; Logistics Accounting</a> <a href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation</a></p></section><section id="example" class="gl-sec"><h2>Fuel Fleet Card Reconciliation: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Fuel-card statement total</td><td>6,00,000</td><td>Fuel billed for the month</td></tr><tr><td>Matched to trips and mileage</td><td>5,72,000</td><td>Verified as legitimate fuel expense</td></tr><tr><td>Non-trip-day refills flagged</td><td>18,000</td><td>Queried with driver</td></tr><tr><td>Over-capacity fill discrepancy</td><td>10,000</td><td>Recovered / disputed</td></tr><tr><td>Fuel expense accepted</td><td>5,72,000</td><td>Booked after reconciliation</td></tr></tbody></table></div><p>A Gurugram logistics operator&#x27;s fuel card is billed ₹6,00,000 in a month. Matching each refill to trip sheets and odometer readings verifies ₹5,72,000 as genuine. Two refills of ₹18,000 fall on days the vehicle was idle, and a ₹10,000 fill exceeds the tank&#x27;s capacity. The operator books only the verified ₹5,72,000 as expense, queries the ₹18,000 with the driver and disputes the ₹10,000 with the vendor — recovering cost that a simple statement-to-ledger posting would have quietly absorbed.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>card control fails when the statement is trusted without matching:</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Fuel Fleet Card Reconciliation</h2><p>Fuel-card control fails when the statement is trusted without matching:</p><ul class="gloss-bullets"><li><strong>Posting the statement as-is</strong> — Booking the whole card statement as expense with no matching absorbs all leakage → reconcile each transaction to a trip and vehicle.</li><li><strong>No mileage or consumption check</strong> — Accepting litres without testing against distance hides pilferage → compare litres to expected mileage per vehicle.</li><li><strong>Cards not mapped to vehicles</strong> — Unmapped cards make attribution impossible → maintain a card-to-vehicle-and-driver master.</li><li><strong>Ignoring odd-hour or idle-day fills</strong> — Overlooking non-trip-day refills lets misuse pass → flag refills when the vehicle was not running.</li><li><strong>Not recovering discrepancies</strong> — Finding leakage but never recovering it wastes the exercise → recover from drivers or dispute with the fuel vendor.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Controls a fleet finance team runs alongside fuel-card reconciliation:</p><ul class="related-terms"><li><a href="/glossary/stpi-softex-export-filing">STPI / SOFTEX Export Filing</a> — Software-export declaration filing.</li><li><a href="/glossary/software-export-revenue-section-10aa-sez">Software Export Revenue (Section 10AA SEZ)</a> — SEZ export-profit deduction.</li><li><a href="/glossary/foreign-currency-receivables">Foreign Currency Receivables</a> — Export receivables in foreign currency.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Fuel fleet card reconciliation is the periodic matching of a fleet&amp;#x27;s fuel-card statement to its own vehicle and trip records, so every litre billed can be tied to a genuine vehicle, driver and trip. It appears in the books as verified fuel expense and any recoverable discrepancy. It matters because fuel is a fleet&amp;#x27;s biggest controllable cost, and cards are a common route for leakage and pilferage.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Fuel Fleet Card Reconciliation?</h3><p>Fuel Fleet Card Reconciliation sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/travel-and-logistics-accounting-services">Travel &amp; Logistics Accounting &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Travel &amp; Logistics Accounting</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/travel-and-logistics-accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stpi-softex-export-filing">STPI / SOFTEX Export Filing<span class="arw">&rarr;</span></a></li><li><a href="/glossary/software-export-revenue-section-10aa-sez">Software Export Revenue (Section 10AA SEZ)<span class="arw">&rarr;</span></a></li><li><a href="/glossary/foreign-currency-receivables">Foreign Currency Receivables<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Fuel Fleet Card Reconciliation FAQs</h2><p class="faq-expanded__lead">Common questions about Fuel Fleet Card Reconciliation for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Fuel Fleet Card Reconciliation</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How to do a fuel reconciliation?</h3><div class="faq-expanded__a" id="faq-a1"><p>Match three sources for the period: the fuel card statement from the issuer, the vehicle wise fuel log or odometer reading, and the expense entries in the books. Compare litres and value per vehicle, then investigate transactions off route, above tank capacity or outside working hours. A 300 litre tank showing a 340 litre fill needs explanation.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a fuel card statement and the vehicle log book?</h3><div class="faq-expanded__a" id="faq-a2"><p>The fuel card statement is the issuer's record of what was charged to the card, while the log book is the driver's record of kilometres run and litres taken. The statement proves the spend; the log book proves the consumption was genuine. Reconciling both gives mileage per vehicle and exposes cards used on personal vehicles.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can input tax credit be claimed on petrol and diesel bought on a fleet card?</h3><div class="faq-expanded__a" id="faq-a3"><p>No. Petrol and diesel stay outside GST and carry state VAT and central excise instead, so there is no GST on the fuel invoice to claim as input tax credit. Card issuer service charges do carry GST and that portion is claimable for business use. Credit relating to motor vehicles is separately restricted by Section 17(5).</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: Internal control / cost accounting practice for fleet fuel management; AS-based expense recognition. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
