@extends('layouts.service-app')


@section('meta')
    <title>Bank Clearing Account: Meaning, Definition and Example</title>
    <meta name="description" content="A holding account for payments in transit between initiation and clearing. What it means, why it matters and where you will meet it. In plain English.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/bank-clearing-account">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bank Clearing Account: Meaning, Definition and Example | Patron Accounting">
    <meta property="og:description" content="A holding account for payments in transit between initiation and clearing. What it means, why it matters and where you will meet it. In plain English.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/bank-clearing-account">
    <meta property="og:image" content="https://www.patronaccounting.com/images/bank-clearing-account-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#breadcrumb",
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
          "name": "Bank Clearing Account",
          "item": "https://www.patronaccounting.com/glossary/bank-clearing-account"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#definedterm",
      "name": "Bank Clearing Account",
      "description": "A bank clearing account is a temporary holding ledger where a payment sits between the moment it is recorded and the moment it actually clears the bank. It appears as a short-lived balance in the books, meant to net to zero. It matters because it keeps timing differences out of the main bank ledger, so reconciliation stays clean and in-transit money is never double-counted.",
      "url": "https://www.patronaccounting.com/glossary/bank-clearing-account",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is a bank clearing account reconciled at month end?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A bank clearing account must net to zero once every transaction routed through it has settled. If Rs 2,50,000 of card sales sat in the clearing account on 31 March and the payment gateway remitted Rs 2,46,000 after charges, the balance is cleared by posting Rs 4,000 to bank charges and Rs 2,46,000 to the bank account."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a clearing account and a suspense account?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A clearing account holds transactions that are known and expected to settle within days, such as card or gateway receipts, while a suspense account holds entries whose correct treatment is not yet known. A clearing account should return to zero at every period end, whereas a suspense balance must be investigated and cleared before the financial statements are signed."
          }
        },
        {
          "@type": "Question",
          "name": "How is a bank clearing account shown in the balance sheet?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A debit balance in a bank clearing account is shown under other current assets and a credit balance under other current liabilities in Schedule III of the Companies Act 2013, and it is never netted against the bank balance. Auditors treat an unexplained clearing balance carried past the year end as a reconciliation failure, so it should be cleared before 31 March."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#article",
      "headline": "What Is a Bank Clearing Account? Meaning and How It Works",
      "description": "A holding account for payments in transit between initiation and clearing. What it means, why it matters and where you will meet it. In plain English.",
      "inLanguage": "en-IN",
      "wordCount": 1075,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account"
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
      "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account",
      "name": "Bank Clearing Account: Meaning, Definition and Example",
      "description": "A holding account for payments in transit between initiation and clearing. What it means, why it matters and where you will meet it. In plain English.",
      "url": "https://www.patronaccounting.com/glossary/bank-clearing-account",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#definedterm"
      },
      "keywords": [
        "bank clearing account",
        "bank clearing account meaning",
        "bank clearing account in accounting",
        "Outstanding Checks / Timing Differences",
        "Automated Bank Feeds",
        "Schedule III Balance Sheet",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">Bank Clearing Account</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">What Is a Bank Clearing Account? Meaning and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Bank Clearing Account: Definition</div><div class="definition-box"><p>A bank clearing account is a temporary holding ledger where a payment sits between the moment it is recorded and the moment it actually clears the bank. It appears as a short-lived balance in the books, meant to net to zero. It matters because it keeps timing differences out of the main bank ledger, so reconciliation stays clean and in-transit money is never double-counted.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Bank Clearing Account?</h2><p>A bank clearing account — sometimes called an undeposited-funds or transit account — is a bridge ledger. When a business records a receipt or payment that has not yet hit the bank, the entry lands in the clearing account first. Once the bank confirms the transaction, it is moved out of clearing into the actual bank ledger. A well-run clearing account is always emptying: balances arrive and leave as items clear.</p><p>An Indian business meets a clearing account most often with card settlements, payment-gateway collections and batched cheque deposits. A Pune restaurant taking card and UPI payments sees the day&#x27;s takings recorded immediately, but the gateway settles the money two or three days later, net of charges. The clearing account holds those takings until the settlement lands, so the main bank ledger only ever shows money that is really there.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/outstanding-checks-timing-differences">Outstanding Checks / Timing Differences</a> — The timing gaps a clearing account is designed to hold.</li><li><a href="/glossary/automated-bank-feeds">Automated Bank Feeds</a> — Feeds that clear items out of the transit account when they settle.</li><li><a href="/glossary/schedule-iii-balance-sheet">Schedule III Balance Sheet</a> — Where any residual clearing balance must be classified correctly.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why Bank Clearing Account Matters</h2><p>A clearing account that is not managed becomes a hiding place for errors:</p><ul class="gloss-bullets"><li><strong>In-transit cash double-counted</strong> — Without a clearing account, recording a receipt straight to the bank before it settles overstates the real balance.</li><li><strong>A stale balance hides problems</strong> — A clearing account that never nets to zero can mask unmatched receipts, gateway shortfalls or lost deposits.</li><li><strong>Reconciliation gets messy</strong> — Mixing in-transit items into the main bank ledger clutters the reconciliation with differences that should sit elsewhere.</li><li><strong>Gateway charges lost</strong> — Payment-gateway fees deducted at settlement go unbooked if the clearing difference is not investigated.</li><li><strong>Misclassified on the balance sheet</strong> — A leftover clearing balance dumped into cash misstates liquidity in the Schedule III presentation.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Bank Clearing Account Works - Step by Step</h2><p>A transaction passes through clearing on its way to the real bank ledger:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Record to clearing</strong><p>A receipt or payment not yet settled is booked to the clearing account rather than the bank — the holding step.</p></li><li class="step-card"><span class="step-num">2</span><strong>Await settlement</strong><p>The item sits in clearing while the gateway, card network or clearing house processes it.</p></li><li class="step-card"><span class="step-num">3</span><strong>Match the settlement</strong><p>When the bank feed shows the actual credit or debit, it is matched to the clearing entry.</p></li><li class="step-card"><span class="step-num">4</span><strong>Book the charges</strong><p>Any gateway or bank fee deducted at settlement is posted, explaining the gap between gross and net.</p></li><li class="step-card"><span class="step-num">5</span><strong>Clear to bank</strong><p>The item is moved from clearing into the bank ledger, and the clearing balance for it returns to zero.</p></li><li class="step-card"><span class="step-num">6</span><strong>Review the residual</strong><p>At period-end, any balance left in clearing is investigated, as it should net to nil.</p></li></ol></section><section id="example" class="gl-sec"><h2>Bank Clearing Account: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Card takings recorded, 30 Aug</td><td>1,00,000</td><td>Booked to bank clearing account</td></tr><tr><td>Gateway settlement, 2 Sep</td><td>98,200</td><td>Net amount credited to bank</td></tr><tr><td>Gateway charges</td><td>1,800</td><td>Expensed on settlement</td></tr><tr><td>Clearing account after match</td><td>0</td><td>Nets to zero once cleared</td></tr></tbody></table></div><p>A Pune restaurant records ₹1,00,000 of card takings on 30 August, posting them to the bank clearing account because the gateway has not yet paid out. On 2 September the gateway settles ₹98,200 into the current account after deducting ₹1,800 of charges. Matching the settlement clears the ₹1,00,000 out of the holding account and books the ₹1,800 fee, leaving the clearing account at zero — exactly where it should be.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Never clearing the balance: Letting items pile up leaves a permanent balance that hides errors → match and empty the account each period.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Bank Clearing Account</h2><p>Clearing accounts cause trouble when they are opened but never worked:</p><ul class="gloss-bullets"><li><strong>Never clearing the balance</strong> — Letting items pile up leaves a permanent balance that hides errors → match and empty the account each period.</li><li><strong>Booking receipts straight to bank</strong> — Skipping the clearing account overstates the bank balance before money settles → route unsettled items through clearing.</li><li><strong>Ignoring gateway charges</strong> — Not booking the fee deducted at settlement leaves a stuck residual → post charges when matching the settlement.</li><li><strong>Using one account for everything</strong> — Mixing card, cheque and transfer transit in one ledger makes matching impossible → keep separate clearing accounts by channel.</li><li><strong>Misclassifying the residual</strong> — Reporting a leftover clearing balance as cash misstates liquidity → investigate and reclassify before finalising.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms that interact with a clearing account:</p><ul class="related-terms"><li><a href="/glossary/outstanding-checks-timing-differences">Outstanding Checks / Timing Differences</a> — The timing gaps clearing accounts hold.</li><li><a href="/glossary/automated-bank-feeds">Automated Bank Feeds</a> — Feeds that clear items out as they settle.</li><li><a href="/glossary/schedule-iii-balance-sheet">Schedule III Balance Sheet</a> — Where a residual clearing balance is classified.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A bank clearing account is a temporary holding ledger where a payment sits between the moment it is recorded and the moment it actually clears the bank. It appears as a short-lived balance in the books, meant to net to zero. It matters because it keeps timing differences out of the main bank ledger, so reconciliation stays clean and in-transit money is never double-counted.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Bank Clearing Account?</h3><p>Bank Clearing Account sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Bank &amp; Credit Card Reconciliation</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/bank-credit-card-reconciliation-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/chart-of-accounts-setup-services">Chart of Accounts Setup<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/outstanding-checks-timing-differences">Outstanding Checks / Timing Differences<span class="arw">&rarr;</span></a></li><li><a href="/glossary/automated-bank-feeds">Automated Bank Feeds<span class="arw">&rarr;</span></a></li><li><a href="/glossary/schedule-iii-balance-sheet">Schedule III Balance Sheet<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Bank Clearing Account FAQs</h2><p class="faq-expanded__lead">Common questions about Bank Clearing Account for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Bank Clearing Account</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is a bank clearing account reconciled at month end?</h3><div class="faq-expanded__a" id="faq-a1"><p>A bank clearing account must net to zero once every transaction routed through it has settled. If Rs 2,50,000 of card sales sat in the clearing account on 31 March and the payment gateway remitted Rs 2,46,000 after charges, the balance is cleared by posting Rs 4,000 to bank charges and Rs 2,46,000 to the bank account.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a clearing account and a suspense account?</h3><div class="faq-expanded__a" id="faq-a2"><p>A clearing account holds transactions that are known and expected to settle within days, such as card or gateway receipts, while a suspense account holds entries whose correct treatment is not yet known. A clearing account should return to zero at every period end, whereas a suspense balance must be investigated and cleared before the financial statements are signed.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How is a bank clearing account shown in the balance sheet?</h3><div class="faq-expanded__a" id="faq-a3"><p>A debit balance in a bank clearing account is shown under other current assets and a credit balance under other current liabilities in Schedule III of the Companies Act 2013, and it is never netted against the bank balance. Auditors treat an unexplained clearing balance carried past the year end as a reconciliation failure, so it should be cleared before 31 March.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: AS 1 / Ind AS 1 presentation; Schedule III, Companies Act 2013 for cash and bank classification. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
