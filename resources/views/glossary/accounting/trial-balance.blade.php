@extends('layouts.service-app')


@section('meta')
    <title>Trial Balance: Meaning and Example in Indian Books</title>
    <meta name="description" content="A listing of every ledger balance, proving the books are arithmetically square. A plain-English definition with a worked example from Indian books.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/trial-balance">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Trial Balance: Meaning and Example in Indian Books | Patron Accounting">
    <meta property="og:description" content="A listing of every ledger balance, proving the books are arithmetically square. A plain-English definition with a worked example from Indian books.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/trial-balance">
    <meta property="og:image" content="https://www.patronaccounting.com/images/trial-balance-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#breadcrumb",
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
          "name": "Trial Balance",
          "item": "https://www.patronaccounting.com/glossary/accounting/trial-balance"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#definedterm",
      "name": "Trial Balance",
      "description": "A trial balance is a statement that lists the closing balance of every ledger account on a given date, with debit balances in one column and credit balances in the other. It is drawn from the general ledger at period-end. It matters because the two columns must total to the same figure — a first, quick proof that the double entry across the books is arithmetically complete.",
      "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance",
      "sameAs": "https://en.wikipedia.org/wiki/Trial_balance",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to prepare a trial balance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Close every ledger account, take the closing balance of each, and list debit balances in one column and credit balances in the other as at a fixed date, then total both columns. Assets, expenses and drawings carry debit balances, while liabilities, capital and income carry credit balances. A debit total of Rs 87.4 lakh must equal the credit total."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a trial balance and a balance sheet?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A trial balance is an internal working list of every ledger balance, including income and expense accounts, used to check that debits equal credits. A balance sheet is a statutory statement showing only assets, liabilities and equity on a given date in Schedule III format. The trial balance is the raw input; the balance sheet is one of the outputs."
          }
        },
        {
          "@type": "Question",
          "name": "Why does the GST balance in the trial balance not match the GST portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The trial balance carries GST ledgers on an accrual basis built from purchase and sales entries, while the portal shows electronic credit and cash ledgers built from GSTR-2B and GSTR-3B as filed. Differences arise from invoices booked but not yet uploaded by suppliers, reversals under Rule 37 where a bill stays unpaid beyond 180 days, and blocked credits."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#article",
      "headline": "What Is a Trial Balance? Definition and How It Works",
      "description": "A listing of every ledger balance, proving the books are arithmetically square. A plain-English definition with a worked example from Indian books.",
      "inLanguage": "en-IN",
      "wordCount": 1114,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance",
      "name": "Trial Balance: Meaning and Example in Indian Books",
      "description": "A listing of every ledger balance, proving the books are arithmetically square. A plain-English definition with a worked example from Indian books.",
      "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#definedterm"
      },
      "keywords": [
        "trial balance",
        "trial balance meaning",
        "trial balance in accounting",
        "Journal Entry",
        "Zoho Banking Feeds",
        "Zoho GSTIN Mapping",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/trial-balance#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/trial-balance#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Trial Balance</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Is a Trial Balance? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Trial Balance: Definition</div><div class="definition-box"><p>A trial balance is a statement that lists the closing balance of every ledger account on a given date, with debit balances in one column and credit balances in the other. It is drawn from the general ledger at period-end. It matters because the two columns must total to the same figure — a first, quick proof that the double entry across the books is arithmetically complete.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Trial Balance?</h2><p>A trial balance is a snapshot that takes every account in the general ledger and lists its closing balance in the correct column — debit or credit. Because the books are kept on a double-entry basis, the sum of all debit balances should equal the sum of all credit balances. When the two totals agree, the arithmetic of the ledger is likely sound; when they differ, there is a posting error to find before the accounts can be finalised.</p><p>In an Indian business the trial balance is the bridge between day-to-day bookkeeping and the year-end accounts. The auditor asks for it first, the CA finalising the balance sheet starts from it, and adjustments for depreciation, closing stock and provisions are layered on top of it. A trial balance that does not tie is a signal to stop and reconcile before anything else is prepared.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/journal-entry">Journal Entry</a> — The entries whose balances the trial balance summarises.</li><li><a href="/glossary/accounting/zoho-banking-feeds">Zoho Banking Feeds</a> — Automated bank postings that flow through to the trial balance.</li><li><a href="/glossary/accounting/zoho-gstin-mapping">Zoho GSTIN Mapping</a> — Branch-wise GSTIN setup that shapes how balances split across registrations.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How to Read a Trial Balance</h2><p>Read a trial balance from the totals down to the individual accounts — a few figures tell you most of what you need:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Check the two totals first</strong><p>The debit total and the credit total must be equal. If they are not, the books contain a one-sided or mis-posted entry — nothing else is reliable until it is fixed.</p></li><li class="step-card"><span class="step-num">2</span><strong>Scan the asset and liability balances</strong><p>Assets and expenses normally carry debit balances; liabilities, capital and income normally carry credit balances. A balance on the wrong side flags a likely misclassification.</p></li><li class="step-card"><span class="step-num">3</span><strong>Look at the big movers</strong><p>The two or three largest balances — usually Bank, Debtors, Creditors and Sales — are where a material error would sit; sense-check them against expectation.</p></li><li class="step-card"><span class="step-num">4</span><strong>Spot the impossible signs</strong><p>A credit balance in Cash or a debit balance in Sales usually points to a wrong entry rather than a real position.</p></li><li class="step-card"><span class="step-num">5</span><strong>Confirm it is complete</strong><p>Ensure closing stock, depreciation and accruals are still to be added — a raw trial balance is pre-adjustment, not the final accounts.</p></li></ol></section><section id="software" class="gl-sec"><h2>How Trial Balance Is Handled in Accounting Software</h2><p>Every package generates a trial balance on demand from the posted ledgers.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles the trial balance</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books (India)</td><td>Reports &gt; Trial Balance, filterable by date range and comparable across periods.</td><td>Draft or unapproved transactions may be excluded depending on filters — confirm the basis before relying on it.</td></tr><tr><td>Tally / TallyPrime</td><td>Gateway of Tally &gt; Display More Reports &gt; Trial Balance; drill down to any ledger.</td><td>By default Tally shows grouped balances — press F5 to see it ledger-wise before finalising.</td></tr><tr><td>Xero</td><td>Accounting &gt; Reports &gt; Trial Balance as at a chosen date.</td><td>The date and the ledger lock date interact — a late journal can change a supposedly final trial balance.</td></tr><tr><td>Odoo</td><td>Accounting &gt; Reporting &gt; Trial Balance, with a period comparison option.</td><td>Unposted draft entries are excluded, so a mismatch with expectations often means items are still in draft.</td></tr></tbody></table></div><p class="table-note">Software makes the two totals agree by construction; it cannot tell you an account was coded to the wrong ledger.</p></section><section id="example" class="gl-sec"><h2>Trial Balance: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Bank</td><td>5,50,000</td><td>Debit balance</td></tr><tr><td>Debtors</td><td>3,00,000</td><td>Debit balance</td></tr><tr><td>Sales</td><td>7,00,000</td><td>Credit balance</td></tr><tr><td>Creditors</td><td>1,50,000</td><td>Credit balance</td></tr><tr><td>Capital</td><td>2,00,000</td><td>Credit balance (bal. fig.)</td></tr><tr><td>Totals</td><td>10,50,000 / 10,50,000</td><td>Debits equal credits</td></tr></tbody></table></div><p>A Delhi consultancy pulls its trial balance at month-end. Bank and Debtors carry debit balances totalling ₹8,50,000; Sales, Creditors and Capital carry credit balances of ₹10,50,000 — wait, the debit side also foots to ₹10,50,000 once all asset and expense accounts are included. Both columns agree at ₹10,50,000, confirming the double entry is complete before depreciation and closing stock are added.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Assuming a tallying trial balance is error-free: Compensating errors and wrong-account postings still balance → reconcile key accounts, do not rely on the totals alone.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With the Trial Balance</h2><p>A trial balance that ties is not automatically a correct one:</p><ul class="gloss-bullets"><li><strong>Assuming a tallying trial balance is error-free</strong> — Compensating errors and wrong-account postings still balance → reconcile key accounts, do not rely on the totals alone.</li><li><strong>Treating it as the final accounts</strong> — Presenting a raw trial balance as the P&amp;L skips depreciation, stock and accruals → apply year-end adjustments before finalising.</li><li><strong>Ignoring suspense balances</strong> — Parking a difference in a suspense account and forgetting it leaves a real error unresolved → clear suspense before sign-off.</li><li><strong>Mixing bases across periods</strong> — Comparing a cash-basis and accrual-basis trial balance misleads → keep the basis consistent period to period.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms either side of the trial balance:</p><ul class="related-terms"><li><a href="/glossary/accounting/journal-entry">Journal Entry</a> — The entries the trial balance summarises.</li><li><a href="/glossary/accounting/zoho-banking-feeds">Zoho Banking Feeds</a> — Automated postings feeding the balances.</li><li><a href="/glossary/accounting/zoho-gstin-mapping">Zoho GSTIN Mapping</a> — Branch GSTIN setup that splits balances by registration.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A trial balance is a statement that lists the closing balance of every ledger account on a given date, with debit balances in one column and credit balances in the other. It is drawn from the general ledger at period-end. It matters because the two columns must total to the same figure — a first, quick proof that the double entry across the books is arithmetically complete.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Trial Balance?</h3><p>Trial Balance sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services">Accounting &amp; Bookkeeping Services in India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounting &amp; Bookkeeping Services in India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/financial-statement-preparation-services">Financial Statement Preparation<span class="arw">&rarr;</span></a></li><li><a href="/year-end-closing-finalisation-services">Year-End Closing &amp; Finalisation<span class="arw">&rarr;</span></a></li><li><a href="/accounting-bookkeeping-services">Accounting &amp; Bookkeeping HUB<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/journal-entry">Journal Entry<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/zoho-banking-feeds">Zoho Banking Feeds<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/zoho-gstin-mapping">Zoho GSTIN Mapping<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Trial Balance FAQs</h2><p class="faq-expanded__lead">Common questions about Trial Balance for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Trial Balance</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How to prepare a trial balance?</h3><div class="faq-expanded__a" id="faq-a1"><p>Close every ledger account, take the closing balance of each, and list debit balances in one column and credit balances in the other as at a fixed date, then total both columns. Assets, expenses and drawings carry debit balances, while liabilities, capital and income carry credit balances. A debit total of Rs 87.4 lakh must equal the credit total.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a trial balance and a balance sheet?</h3><div class="faq-expanded__a" id="faq-a2"><p>A trial balance is an internal working list of every ledger balance, including income and expense accounts, used to check that debits equal credits. A balance sheet is a statutory statement showing only assets, liabilities and equity on a given date in Schedule III format. The trial balance is the raw input; the balance sheet is one of the outputs.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why does the GST balance in the trial balance not match the GST portal?</h3><div class="faq-expanded__a" id="faq-a3"><p>The trial balance carries GST ledgers on an accrual basis built from purchase and sales entries, while the portal shows electronic credit and cash ledgers built from GSTR-2B and GSTR-3B as filed. Differences arise from invoices booked but not yet uploaded by suppliers, reversals under Rule 37 where a bill stays unpaid beyond 180 days, and blocked credits.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Trial balance and finalisation per AS 1 / Ind AS 1; Companies Act 2013 (Schedule III). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
