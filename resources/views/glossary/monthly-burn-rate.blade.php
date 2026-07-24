@extends('layouts.service-app')


@section('meta')
    <title>Monthly Burn Rate: Meaning and Example in Accounting</title>
    <meta name="description" content="The net cash a business consumes in a month after all receipts. What it is, how it is measured and who has to report it. With the numbers set out.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/monthly-burn-rate">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Monthly Burn Rate: Meaning and Example in Accounting | Patron Accounting">
    <meta property="og:description" content="The net cash a business consumes in a month after all receipts. What it is, how it is measured and who has to report it. With the numbers set out.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/monthly-burn-rate">
    <meta property="og:image" content="https://www.patronaccounting.com/images/monthly-burn-rate-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#breadcrumb",
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
          "name": "Monthly Burn Rate",
          "item": "https://www.patronaccounting.com/glossary/monthly-burn-rate"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#definedterm",
      "name": "Monthly Burn Rate",
      "description": "Monthly burn rate is the amount of cash a business consumes each month to run, over and above the cash it brings in. It is read from the cash-flow movement, not the profit and loss. It matters because, set against the cash balance, it tells a founder and an investor exactly how many months of funding remain before the next rupee has to be raised.",
      "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to calculate a monthly burn rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Monthly burn rate is the closing cash balance subtracted from the opening cash balance for the month, or total cash outflows less cash inflows. A startup opening January with Rs 1.8 crore and closing at Rs 1.55 crore burned Rs 25 lakh that month. Averaging the last three months smooths one-off payments such as annual insurance or advance rent."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between gross burn and net burn?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gross burn is total cash spent in a month, while net burn is that spend less cash collected from customers. A company spending Rs 40 lakh and collecting Rs 15 lakh has a gross burn of Rs 40 lakh and a net burn of Rs 25 lakh. Runway is calculated on net burn, so quoting gross burn overstates the position."
          }
        },
        {
          "@type": "Question",
          "name": "Should GST paid on expenses be counted in monthly burn rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only the part that cannot be recovered. GST on vendor bills that is available as input tax credit comes back through the electronic credit ledger, so including it overstates burn. Blocked credits under Section 17(5) of the CGST Act, such as GST on staff cabs, food and club memberships, are genuine cash cost and belong in the burn figure."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#article",
      "headline": "What Is Monthly Burn Rate? Meaning and Why It Matters",
      "description": "The net cash a business consumes in a month after all receipts. What it is, how it is measured and who has to report it. With the numbers set out.",
      "inLanguage": "en-IN",
      "wordCount": 1099,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate"
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
      "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate",
      "name": "Monthly Burn Rate: Meaning and Example in Accounting",
      "description": "The net cash a business consumes in a month after all receipts. What it is, how it is measured and who has to report it. With the numbers set out.",
      "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#definedterm"
      },
      "keywords": [
        "monthly burn rate",
        "monthly burn rate meaning",
        "monthly burn rate in accounting",
        "Cash Runway Calculation",
        "Cap Table Dilution",
        "Marketplace Settlement Reconciliation",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Formula",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#formula"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">Monthly Burn Rate</span></nav><div class="gl-cat">Accounting Glossary &middot; Industry</div><h1 class="gl-h1">What Is Monthly Burn Rate? Meaning and Why It Matters</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Advanced</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#formula" class="gl-pill">Formula</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Monthly Burn Rate: Definition</div><div class="definition-box"><p>Monthly burn rate is the amount of cash a business consumes each month to run, over and above the cash it brings in. It is read from the cash-flow movement, not the profit and loss. It matters because, set against the cash balance, it tells a founder and an investor exactly how many months of funding remain before the next rupee has to be raised.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Monthly Burn Rate?</h2><p>Burn rate measures how fast a company is spending its cash reserves. Gross burn is the total monthly cash outflow — salaries, rent, cloud, marketing; net burn is that outflow less cash receipts, so it captures the real monthly drain on the bank balance. A pre-revenue company&#x27;s gross and net burn are almost the same; a company with growing MRR sees net burn fall below gross burn as receipts rise.</p><p>A funded Indian startup meets burn rate at every board meeting and every fundraise. A Gurugram consumer-tech company holding ₹3 crore in the bank and burning ₹25 lakh a month knows it has twelve months of runway, and that framing drives hiring, spend and the timing of the next round. Burn is a cash concept, so it is read from the bank movement rather than accrual profit, which can differ sharply in an early-stage business.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/cash-runway-calculation">Cash Runway Calculation</a> — Cash balance divided by burn — months of survival.</li><li><a href="/glossary/cap-table-dilution">Cap Table Dilution</a> — Ownership given up to raise cash and extend runway.</li><li><a href="/glossary/marketplace-settlement-reconciliation">Marketplace Settlement Reconciliation</a> — Matching payouts so cash receipts feeding burn are accurate.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Monthly Burn Rate Is Used in Financial Analysis</h2><p>Investors read burn as the counterweight to growth:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Take the cash movement</strong><p>Opening less closing cash for the month gives the net cash consumed — the raw input from the bank statement.</p></li><li class="step-card"><span class="step-num">2</span><strong>Separate gross and net</strong><p>Gross burn is total outflow; net burn nets off receipts, showing the true monthly drain.</p></li><li class="step-card"><span class="step-num">3</span><strong>Set it against the balance</strong><p>Dividing cash on hand by net burn converts the number into months of runway.</p></li><li class="step-card"><span class="step-num">4</span><strong>Read burn with growth</strong><p>High burn is acceptable if MRR is compounding; high burn with flat revenue is the warning an investor watches for.</p></li><li class="step-card"><span class="step-num">5</span><strong>Infer the funding clock</strong><p>Runway tells the board when to start raising — typically well before the last few months of cash.</p></li></ol></section><section id="sector" class="gl-sec"><h2>Where Monthly Burn Rate Applies — Funded Startups</h2><p>Burn rate governs decision-making wherever a business is spending investor capital ahead of profit:</p><ul class="gloss-bullets"><li><strong>Venture-funded startups</strong> — Companies living on raised capital track burn as their core survival metric.</li><li><strong>Pre-revenue and early-revenue firms</strong> — Businesses not yet cash-generative watch gross burn closely.</li><li><strong>Scale-ups spending on growth</strong> — Firms deliberately burning to acquire customers justify it against MRR growth.</li><li><strong>Hiring and budget decisions</strong> — Every headcount or marketing commitment is weighed against its effect on burn and runway.</li><li><strong>Fundraise timing</strong> — Founders time the next round off the runway that burn implies.</li></ul><p class="inline-links">See also: <a href="/accounting-services-for-startups">Startup Accounting Services India</a> <a href="/mis-reporting-services">MIS Reporting Services</a></p></section><section id="formula" class="gl-sec"><h2>How to Calculate Monthly Burn Rate</h2><div class="formula-box"><code>Net monthly burn = Total monthly cash outflow − Total monthly cash inflow</code></div><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Input</th><th>Where it comes from</th><th>Sample value (INR)</th></tr></thead><tbody><tr><td>Monthly cash outflow</td><td>Bank statement / cash-flow — salaries, rent, cloud, spend</td><td>32,00,000</td></tr><tr><td>Monthly cash inflow</td><td>Customer receipts for the month</td><td>7,00,000</td></tr><tr><td>Net monthly burn</td><td>Outflow minus inflow</td><td>25,00,000</td></tr></tbody></table></div><p class="worked-result">Net burn = 32,00,000 − 7,00,000 = ₹25,00,000 a month. On a ₹3,00,00,000 balance, that is twelve months of runway.</p></section><section id="example" class="gl-sec"><h2>Monthly Burn Rate: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Cash at bank, 1 Aug 2026</td><td>3,00,00,000</td><td>Opening balance</td></tr><tr><td>Cash outflow in August</td><td>32,00,000</td><td>Gross burn</td></tr><tr><td>Cash receipts in August</td><td>7,00,000</td><td>Netted against outflow</td></tr><tr><td>Net burn for August</td><td>25,00,000</td><td>Monthly cash drain</td></tr><tr><td>Runway at this burn</td><td>12 months</td><td>3,00,00,000 ÷ 25,00,000</td></tr></tbody></table></div><p>A Gurugram consumer-tech startup opens August with ₹3 crore. It spends ₹32,00,000 and collects ₹7,00,000, so net burn is ₹25,00,000 — twelve months of runway. If the team adds five hires that lift outflow to ₹40,00,000 while receipts stay flat, net burn jumps to ₹33,00,000 and runway falls to nine months, which is why every hiring decision is modelled against burn before it is made.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Using profit instead of cash: Reading burn from the P&amp;L ignores timing of receipts and payments → measure burn from actual bank movement.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Monthly Burn Rate</h2><p>Burn is misjudged when cash and accrual are confused:</p><ul class="gloss-bullets"><li><strong>Using profit instead of cash</strong> — Reading burn from the P&amp;L ignores timing of receipts and payments → measure burn from actual bank movement.</li><li><strong>Confusing gross and net burn</strong> — Quoting gross burn while cash is coming in overstates the drain → track net burn for runway.</li><li><strong>Ignoring one-off spikes</strong> — A single large annual payment can distort one month&#x27;s burn → normalise for lumpy items when reading the trend.</li><li><strong>Forgetting upcoming commitments</strong> — Burn based only on the past misses signed but unpaid obligations → model committed spend into forward runway.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Numbers read next to burn:</p><ul class="related-terms"><li><a href="/glossary/cash-runway-calculation">Cash Runway Calculation</a> — Months of cash at the current burn.</li><li><a href="/glossary/cap-table-dilution">Cap Table Dilution</a> — Ownership given up to extend runway.</li><li><a href="/glossary/marketplace-settlement-reconciliation">Marketplace Settlement Reconciliation</a> — Ensures receipts feeding net burn are correct.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Monthly burn rate is the amount of cash a business consumes each month to run, over and above the cash it brings in. It is read from the cash-flow movement, not the profit and loss. It matters because, set against the cash balance, it tells a founder and an investor exactly how many months of funding remain before the next rupee has to be raised.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Monthly Burn Rate?</h3><p>Monthly Burn Rate sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services-for-startups">Startup Accounting Services India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Startup Accounting Services India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services-for-startups">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/mis-reporting-services">MIS Reporting Services<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/cash-runway-calculation">Cash Runway Calculation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/cap-table-dilution">Cap Table Dilution<span class="arw">&rarr;</span></a></li><li><a href="/glossary/marketplace-settlement-reconciliation">Marketplace Settlement Reconciliation<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Monthly Burn Rate FAQs</h2><p class="faq-expanded__lead">Common questions about Monthly Burn Rate for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Monthly Burn Rate</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How to calculate a monthly burn rate?</h3><div class="faq-expanded__a" id="faq-a1"><p>Monthly burn rate is the closing cash balance subtracted from the opening cash balance for the month, or total cash outflows less cash inflows. A startup opening January with Rs 1.8 crore and closing at Rs 1.55 crore burned Rs 25 lakh that month. Averaging the last three months smooths one-off payments such as annual insurance or advance rent.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between gross burn and net burn?</h3><div class="faq-expanded__a" id="faq-a2"><p>Gross burn is total cash spent in a month, while net burn is that spend less cash collected from customers. A company spending Rs 40 lakh and collecting Rs 15 lakh has a gross burn of Rs 40 lakh and a net burn of Rs 25 lakh. Runway is calculated on net burn, so quoting gross burn overstates the position.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Should GST paid on expenses be counted in monthly burn rate?</h3><div class="faq-expanded__a" id="faq-a3"><p>Only the part that cannot be recovered. GST on vendor bills that is available as input tax credit comes back through the electronic credit ledger, so including it overstates burn. Blocked credits under Section 17(5) of the CGST Act, such as GST on staff cabs, food and club memberships, are genuine cash cost and belong in the burn figure.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Management/cash-flow metric; cash flows presented under AS 3 / Ind AS 7. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
