@extends('layouts.service-app')


@section('meta')
    <title>Zoho Banking Feeds: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Zoho Banking Feeds: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds">
    <meta property="og:image" content="https://www.patronaccounting.com/images/zoho-banking-feeds-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#breadcrumb",
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
          "name": "Zoho Banking Feeds",
          "item": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#definedterm",
      "name": "Zoho Banking Feeds",
      "description": "Zoho Banking Feeds are the automatic import of bank and credit-card transactions into Zoho Books, so entries appear in the software without manual typing. They sit in the Banking module, waiting to be matched or categorised against invoices and bills. They matter because they cut data-entry time and make bank reconciliation a review task rather than a re-keying task.",
      "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is a bank feed connected in Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Open the Banking module, choose Add Bank or Credit Card, search for the bank, then either authorise a direct or aggregator-based feed or set the account up for manual statement upload. Once linked, transactions flow in and appear in the uncategorised list for matching. A feed pulls history only from the start date chosen during setup."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between matching and categorising a bank transaction in Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Matching links an imported bank line to an entry that already exists in the books, such as an invoice payment or a recorded expense, so nothing new is created. Categorising creates a fresh entry against a chosen account for a line with no existing record, such as a Rs 3,200 bank charge. Matching first prevents duplicated income and expenses."
          }
        },
        {
          "@type": "Question",
          "name": "How are UPI and payment gateway credits handled in Zoho Books bank feeds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The feed shows only the net amount the gateway settles, so a Rs 1,00,000 day of UPI and card sales may arrive as Rs 97,800 after fees and the GST charged on those fees. Record gross sales from the gateway settlement report, book the commission and its GST separately, then match the net credit, or revenue and input tax credit are both understated."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#article",
      "headline": "Zoho Banking Feeds",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1080,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds",
      "name": "Zoho Banking Feeds: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#definedterm"
      },
      "keywords": [
        "Zoho Banking Feeds",
        "zoho banking feeds meaning",
        "zoho banking feeds in accounting",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/zoho-banking-feeds#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Zoho Banking Feeds</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Zoho Banking Feeds</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Zoho Banking Feeds: Definition</div><div class="definition-box"><p>Zoho Banking Feeds are the automatic import of bank and credit-card transactions into Zoho Books, so entries appear in the software without manual typing. They sit in the Banking module, waiting to be matched or categorised against invoices and bills. They matter because they cut data-entry time and make bank reconciliation a review task rather than a re-keying task.</p></div></section><section id="what-is" class="gl-sec"><h2>What Are Zoho Banking Feeds?</h2><p>A banking feed is a live connection between your bank account and Zoho Books. Once linked, each debit and credit that hits your account flows into the software automatically, usually every day, and lands in a queue where it can be matched to an existing invoice or bill or coded to the right ledger. It replaces the old routine of downloading a statement and typing every line by hand.</p><p>For an Indian business, Zoho Banking Feeds are where month-end reconciliation actually happens. Direct feeds are available for many Indian banks; where a direct feed is not supported, the same queue is fed by importing a statement file. Either way, the accountant works from a matched list rather than a paper statement, which is what makes a clean, GST-ready set of books achievable in a fraction of the time.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/zoho-gstin-mapping">Zoho GSTIN Mapping</a> — Linking each GSTIN to its branch so filings hit the right state.</li><li><a href="/glossary/accounting/zoho-custom-modules">Zoho Custom Modules</a> — Extra fields and record types added for a business&#x27;s own workflow.</li><li><a href="/glossary/accounting/multi-currency-bank-feed">Multi-Currency Bank Feed</a> — Foreign-currency accounts feeding in with the rate applied per line.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Zoho Banking Feeds Work</h2><p>A transaction travels from your bank to your books in a set path:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Transaction hits the bank</strong><p>A payment or receipt is processed by your bank — the source event.</p></li><li class="step-card"><span class="step-num">2</span><strong>Feed imports it</strong><p>Zoho&#x27;s feed pulls the line into the Banking module, typically on a daily refresh, as an uncategorised entry.</p></li><li class="step-card"><span class="step-num">3</span><strong>Zoho suggests a match</strong><p>The software proposes a match to an open invoice, bill or existing transaction based on amount and reference.</p></li><li class="step-card"><span class="step-num">4</span><strong>You confirm or categorise</strong><p>The accountant accepts the match or codes the line to a ledger — the point where human review adds accuracy.</p></li><li class="step-card"><span class="step-num">5</span><strong>Books and bank agree</strong><p>Once matched, the entry is posted and the bank balance in Zoho reconciles to the actual bank balance.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Zoho Banking Feeds in Zoho Books</h2><p>Setting up a feed in Zoho Books (India edition) takes a few minutes:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open the Banking module</strong><p>From the left sidebar, click Banking to reach the banking dashboard.</p></li><li class="step-card"><span class="step-num">2</span><strong>Add the account</strong><p>Click + Add Bank or Credit Card and search for your bank.</p></li><li class="step-card"><span class="step-num">3</span><strong>Connect the feed</strong><p>Choose to connect an automatic feed and authenticate with your bank&#x27;s net-banking credentials; where a direct feed is unavailable, select the manual/import option instead.</p></li><li class="step-card"><span class="step-num">4</span><strong>Set the opening balance</strong><p>Enter the account&#x27;s opening balance and start date so the feed reconciles from a known point.</p></li><li class="step-card"><span class="step-num">5</span><strong>Review the imported queue</strong><p>Transactions appear in the Uncategorised list — match or categorise them, and set bank rules to auto-code recurring lines.</p></li></ol></section><section id="example" class="gl-sec"><h2>Zoho Banking Feeds: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Customer NEFT received, 5 Aug</td><td>1,18,000</td><td>Feed imports; matched to Invoice INV-084</td></tr><tr><td>Supplier payment, 8 Aug</td><td>47,200</td><td>Feed imports; matched to Bill BILL-231</td></tr><tr><td>Bank charges, 31 Aug</td><td>472</td><td>Feed imports; coded to Bank Charges ledger</td></tr><tr><td>Closing bank balance</td><td>reconciled</td><td>Zoho balance equals bank statement</td></tr></tbody></table></div><p>A Bengaluru SaaS firm links its current account to Zoho Books. When a ₹1,18,000 NEFT lands, the feed imports it and Zoho suggests the open invoice INV-084; the accountant confirms the match in one click. Bank charges of ₹472 are coded to the charges ledger via a bank rule. At month-end the Zoho balance already agrees with the statement, so reconciliation is a five-minute review.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Accepting auto-matches blindly: Confirming a wrong suggested match posts a transaction against the wrong invoice → review each match before accepting, especially for round figures.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Zoho Banking Feeds</h2><p>Feeds save time only if they are set up and reviewed with care:</p><ul class="gloss-bullets"><li><strong>Accepting auto-matches blindly</strong> — Confirming a wrong suggested match posts a transaction against the wrong invoice → review each match before accepting, especially for round figures.</li><li><strong>Wrong or missing opening balance</strong> — Starting a feed without the correct opening balance makes the account never reconcile → set the opening balance and start date at setup.</li><li><strong>Duplicate imports</strong> — Importing a statement file over an already-connected feed double-counts transactions → use either the direct feed or manual import for a period, not both.</li><li><strong>Over-broad bank rules</strong> — A bank rule that is too general miscodes unrelated lines → keep rule conditions specific and review what they touch.</li><li><strong>Leaving the queue unreviewed</strong> — Uncategorised entries piling up defeats the purpose → clear the Banking queue on a weekly cadence.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Other Zoho Books concepts worth knowing:</p><ul class="related-terms"><li><a href="/glossary/accounting/zoho-gstin-mapping">Zoho GSTIN Mapping</a> — Maps each GSTIN to its branch for correct state filing.</li><li><a href="/glossary/accounting/zoho-custom-modules">Zoho Custom Modules</a> — Adds bespoke fields and record types to Zoho.</li><li><a href="/glossary/accounting/multi-currency-bank-feed">Multi-Currency Bank Feed</a> — Handles foreign-currency accounts with per-line rates.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Zoho Banking Feeds are the automatic import of bank and credit-card transactions into Zoho Books, so entries appear in the software without manual typing. They sit in the Banking module, waiting to be matched or categorised against invoices and bills. They matter because they cut data-entry time and make bank reconciliation a review task rather than a re-keying task.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Zoho Banking Feeds?</h3><p>Zoho Banking Feeds sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services">Accounting &amp; Bookkeeping Services in India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounting &amp; Bookkeeping Services in India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Zoho Banking Feeds FAQs</h2><p class="faq-expanded__lead">Common questions about Zoho Banking Feeds for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Zoho Banking Feeds</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is a bank feed connected in Zoho Books?</h3><div class="faq-expanded__a" id="faq-a1"><p>Open the Banking module, choose Add Bank or Credit Card, search for the bank, then either authorise a direct or aggregator-based feed or set the account up for manual statement upload. Once linked, transactions flow in and appear in the uncategorised list for matching. A feed pulls history only from the start date chosen during setup.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between matching and categorising a bank transaction in Zoho Books?</h3><div class="faq-expanded__a" id="faq-a2"><p>Matching links an imported bank line to an entry that already exists in the books, such as an invoice payment or a recorded expense, so nothing new is created. Categorising creates a fresh entry against a chosen account for a line with no existing record, such as a Rs 3,200 bank charge. Matching first prevents duplicated income and expenses.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How are UPI and payment gateway credits handled in Zoho Books bank feeds?</h3><div class="faq-expanded__a" id="faq-a3"><p>The feed shows only the net amount the gateway settles, so a Rs 1,00,000 day of UPI and card sales may arrive as Rs 97,800 after fees and the GST charged on those fees. Record gross sales from the gateway settlement report, book the commission and its GST separately, then match the net credit, or revenue and input tax credit are both understated.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Zoho Books Help</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: Product guidance – Zoho Books (India edition); reconciliation practice per AS 1 / Ind AS 1. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
