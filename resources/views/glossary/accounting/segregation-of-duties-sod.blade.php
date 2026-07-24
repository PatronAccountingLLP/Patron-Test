@extends('layouts.service-app')


@section('meta')
    <title>Segregation of Duties: What It Means in Indian Books</title>
    <meta name="description" content="No one person able to initiate, approve and record the same transaction. Explained simply, with the ledger entry that goes with it. Explained by a CA.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Segregation of Duties: What It Means in Indian Books | Patron Accounting">
    <meta property="og:description" content="No one person able to initiate, approve and record the same transaction. Explained simply, with the ledger entry that goes with it. Explained by a CA.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod">
    <meta property="og:image" content="https://www.patronaccounting.com/images/segregation-of-duties-sod-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#breadcrumb",
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
          "name": "Segregation of Duties (SoD)",
          "item": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#definedterm",
      "name": "Segregation of Duties (SoD)",
      "description": "Segregation of Duties (SoD) is the control principle of dividing a transaction&#x27;s key tasks — authorising, recording, and holding the related asset — among different people, so no one individual controls it end to end. It is built into how roles and system access are assigned. It matters because concentrating those tasks in one person is the single biggest opening for fraud and undetected error in a finance function.",
      "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is segregation of duties applied in a small accounts team?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Even a three person team can split the four incompatible functions: authorising a transaction, holding custody of the asset, recording the entry and reconciling the balance. The person who creates a vendor master should not approve the payment, and the person who posts the bank entry should not perform the bank reconciliation. Where headcount is short, the owner performs the review step."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between segregation of duties and maker-checker?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Segregation of duties is a design principle that keeps authorisation, custody, recording and reconciliation in different hands, while maker-checker is one control that implements it by requiring a second person to approve what the first person prepared. Maker-checker alone does not achieve segregation if the same user can create a vendor, raise the bill and release payment across systems."
          }
        },
        {
          "@type": "Question",
          "name": "Do Indian companies have to document segregation of duties?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes for companies where internal financial controls are reportable, because Section 143(3)(i) of the Companies Act 2013 requires the statutory auditor to state whether the company has adequate internal financial controls over financial reporting and whether they operated effectively. Segregation of duties is a core control in that assessment, so an access matrix and approval limits are documented and tested each year."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#article",
      "headline": "What Is Segregation of Duties (SoD)? Meaning and How It Works",
      "description": "No one person able to initiate, approve and record the same transaction. Explained simply, with the ledger entry that goes with it. Explained by a CA.",
      "inLanguage": "en-IN",
      "wordCount": 1029,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod",
      "name": "Segregation of Duties: What It Means in Indian Books",
      "description": "No one person able to initiate, approve and record the same transaction. Explained simply, with the ledger entry that goes with it. Explained by a CA.",
      "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#definedterm"
      },
      "keywords": [
        "segregation of duties",
        "segregation of duties (sod) meaning",
        "segregation of duties (sod) in accounting",
        "Month-End Close Checklist",
        "Ind AS 102 Share-based Payment",
        "Vesting Period Graded Amortization",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/segregation-of-duties-sod#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Segregation of Duties (SoD)</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">What Is Segregation of Duties (SoD)? Meaning and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Segregation of Duties (SoD): Definition</div><div class="definition-box"><p>Segregation of Duties (SoD) is the control principle of dividing a transaction&#x27;s key tasks — authorising, recording, and holding the related asset — among different people, so no one individual controls it end to end. It is built into how roles and system access are assigned. It matters because concentrating those tasks in one person is the single biggest opening for fraud and undetected error in a finance function.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Segregation of Duties (SoD)?</h2><p>Segregation of Duties splits the incompatible parts of a transaction so that carrying out a fraud or hiding an error would need two or more people to collude. The classic separation is between authorising a transaction, recording it in the books, and having custody of the asset involved. If the person who approves a payment cannot also enter it and release the funds, a fabricated payment becomes far harder to push through.</p><p>An Indian business meets SoD as a core internal control that auditors look for when assessing internal financial controls. It is expressly recognised as a control activity in the ICAI&#x27;s Standards on Auditing (SA 315) and the Guidance Note on internal financial controls. The challenge is sharpest in small teams, where one accountant may naturally do everything — which is exactly where compensating controls and owner review become essential.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/month-end-close-checklist">Month-End Close Checklist</a> — A close routine where SoD over review and posting applies.</li><li><a href="/glossary/accounting/ind-as-102-share-based-payment">Ind AS 102 Share-based Payment</a> — Complex accounting needing controlled, separated review.</li><li><a href="/glossary/accounting/vesting-period-graded-amortization">Vesting Period Graded Amortization</a> — An ESOP calculation that benefits from independent review.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why Segregation of Duties (SoD) Matters</h2><p>Concentrating duties in one person is where most internal frauds begin:</p><ul class="gloss-bullets"><li><strong>Undetected fraud</strong> — One person who can approve, record and pay can create and conceal a fictitious payment with nobody to catch it.</li><li><strong>Errors with no second check</strong> — A mistake made and recorded by the same person passes straight into the accounts unreviewed.</li><li><strong>Control weakness in the audit</strong> — Auditors treat missing segregation as a control deficiency, which can affect the internal financial controls report.</li><li><strong>Asset misappropriation</strong> — Custody of cash or stock combined with recording lets shortages be hidden by adjusting the books.</li><li><strong>Key-person risk</strong> — A single person controlling a whole cycle makes the business hostage to their honesty and their availability.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Segregation of Duties (SoD) Works - Step by Step</h2><p>SoD is applied by mapping and splitting the incompatible tasks in each cycle:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Map the transaction cycle</strong><p>The key tasks — authorise, record, custody, reconcile — are identified for each process such as procure-to-pay.</p></li><li class="step-card"><span class="step-num">2</span><strong>Identify incompatible combinations</strong><p>Tasks that must not sit with one person, like approving and paying, are flagged — the SoD matrix.</p></li><li class="step-card"><span class="step-num">3</span><strong>Assign tasks to different roles</strong><p>Duties are distributed across staff so no single role spans an incompatible combination.</p></li><li class="step-card"><span class="step-num">4</span><strong>Enforce through system access</strong><p>Accounting-software roles and approval limits are set so the split is enforced technically, not just on paper.</p></li><li class="step-card"><span class="step-num">5</span><strong>Add compensating controls where needed</strong><p>In small teams, owner review, bank-statement scrutiny or maker-checker steps compensate for unavoidable overlaps.</p></li></ol></section><section id="example" class="gl-sec"><h2>Segregation of Duties (SoD): A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Purchase invoice entered by Accountant A</td><td>3,20,000</td><td>Recording duty</td></tr><tr><td>Payment approved by Finance Manager</td><td>3,20,000</td><td>Authorisation duty (separate person)</td></tr><tr><td>Funds released by Accountant B</td><td>3,20,000</td><td>Custody/execution duty (third person)</td></tr><tr><td>Bank reconciliation by Accountant A</td><td>-</td><td>Reviewed independently by Finance Manager</td></tr></tbody></table></div><p>A Pune manufacturing firm splits a ₹3,20,000 supplier payment across three people: Accountant A records the invoice, the Finance Manager approves it, and Accountant B releases the funds. No single person can both create and pay a bill. When A prepares the bank reconciliation, the Finance Manager reviews it — a compensating check that keeps segregation intact even in a lean team.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>One person owning the whole cycle: Letting an accountant approve, record and pay concentrates fraud risk → split at least authorisation from execution and recording.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Segregation of Duties (SoD)</h2><p>SoD breaks down quietly, usually as teams grow or shrink:</p><ul class="gloss-bullets"><li><strong>One person owning the whole cycle</strong> — Letting an accountant approve, record and pay concentrates fraud risk → split at least authorisation from execution and recording.</li><li><strong>Segregation on paper only</strong> — Roles look separate but shared logins let one person do everything → enforce the split through individual system access.</li><li><strong>No compensating control in small teams</strong> — Accepting overlap in a lean team without any review leaves the gap open → add owner review or maker-checker steps.</li><li><strong>Ignoring access creep</strong> — Access rights accumulate as people change roles, quietly recombining duties → review system roles periodically.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Controls and calculations that lean on segregation:</p><ul class="related-terms"><li><a href="/glossary/accounting/month-end-close-checklist">Month-End Close Checklist</a> — A close routine where SoD over review and posting applies.</li><li><a href="/glossary/accounting/ind-as-102-share-based-payment">Ind AS 102 Share-based Payment</a> — Complex accounting needing controlled, separated review.</li><li><a href="/glossary/accounting/vesting-period-graded-amortization">Vesting Period Graded Amortization</a> — An ESOP calculation that benefits from independent review.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Segregation of Duties (SoD) is the control principle of dividing a transaction&amp;#x27;s key tasks — authorising, recording, and holding the related asset — among different people, so no one individual controls it end to end. It is built into how roles and system access are assigned. It matters because concentrating those tasks in one person is the single biggest opening for fraud and undetected error in a finance function.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Segregation of Duties (SoD)?</h3><p>Segregation of Duties (SoD) sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/sop-drafting-and-implementation">SOP Drafting &amp; Implementation &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">SOP Drafting &amp; Implementation</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/sop-drafting-and-implementation">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounts-payable-outsourcing-services">Accounts Payable Outsourcing<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/month-end-close-checklist">Month-End Close Checklist<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/ind-as-102-share-based-payment">Ind AS 102 Share-based Payment<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/vesting-period-graded-amortization">Vesting Period Graded Amortization<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Segregation of Duties (SoD) FAQs</h2><p class="faq-expanded__lead">Common questions about Segregation of Duties (SoD) for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Segregation of Duties (SoD)</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is segregation of duties applied in a small accounts team?</h3><div class="faq-expanded__a" id="faq-a1"><p>Even a three person team can split the four incompatible functions: authorising a transaction, holding custody of the asset, recording the entry and reconciling the balance. The person who creates a vendor master should not approve the payment, and the person who posts the bank entry should not perform the bank reconciliation. Where headcount is short, the owner performs the review step.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between segregation of duties and maker-checker?</h3><div class="faq-expanded__a" id="faq-a2"><p>Segregation of duties is a design principle that keeps authorisation, custody, recording and reconciliation in different hands, while maker-checker is one control that implements it by requiring a second person to approve what the first person prepared. Maker-checker alone does not achieve segregation if the same user can create a vendor, raise the bill and release payment across systems.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Do Indian companies have to document segregation of duties?</h3><div class="faq-expanded__a" id="faq-a3"><p>Yes for companies where internal financial controls are reportable, because Section 143(3)(i) of the Companies Act 2013 requires the statutory auditor to state whether the company has adequate internal financial controls over financial reporting and whether they operated effectively. Segregation of duties is a core control in that assessment, so an access matrix and approval limits are documented and tested each year.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: ICAI Standards on Auditing (SA 315) and Guidance Note on Internal Financial Controls; Companies Act 2013 (IFC). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary/accounting">&larr; Back to the accounting glossary</a></div></footer>
</div>
@endverbatim
@endsection
