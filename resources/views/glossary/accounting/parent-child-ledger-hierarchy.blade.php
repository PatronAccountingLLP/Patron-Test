@extends('layouts.service-app')


@section('meta')
    <title>Parent-Child Ledger Hierarchy: Meaning and Example</title>
    <meta name="description" content="Ledger groups nested so reports roll up without manual regrouping. A plain-English definition with a worked example. From our accounting glossary.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Parent-Child Ledger Hierarchy: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="Ledger groups nested so reports roll up without manual regrouping. A plain-English definition with a worked example. From our accounting glossary.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy">
    <meta property="og:image" content="https://www.patronaccounting.com/images/parent-child-ledger-hierarchy-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#breadcrumb",
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
          "name": "Parent-Child Ledger Hierarchy",
          "item": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#definedterm",
      "name": "Parent-Child Ledger Hierarchy",
      "description": "A parent-child ledger hierarchy is the way individual ledger accounts (children) are grouped under summary control accounts (parents) so balances roll up automatically. It lives in the chart of accounts inside the accounting software. It matters because it lets a business post at a detailed level yet report at a summary level, keeping the balance sheet and P&amp;L readable while preserving drill-down detail underneath.",
      "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How are ledgers grouped under a parent group in Tally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Each ledger is created under a primary group or sub group, so a supplier ledger sits under Sundry Creditors, which rolls into Current Liabilities. Sub groups can be nested, for example Bank Accounts split into current and overdraft accounts. Balances roll up automatically, so a loan wrongly grouped under creditors silently misstates the balance sheet."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a ledger group and a cost centre?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A ledger group answers what the money was spent on, while a cost centre answers which unit or person spent it. Rent is a ledger under Indirect Expenses; the Pune branch and the Mumbai branch are cost centres splitting that same rent. Groups drive the statutory financials, cost centres drive internal reporting and cannot replace grouping."
          }
        },
        {
          "@type": "Question",
          "name": "How should ledger groups be mapped to Schedule III heads for financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every group must map to a Schedule III line such as trade payables, other current liabilities, short term borrowings or other expenses before the accounts are finalised. Sundry Creditors maps to trade payables, but statutory dues such as GST and TDS payable belong under other current liabilities. A mapping sheet kept with the trial balance saves audit rework."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#article",
      "headline": "What Is a Parent-Child Ledger Hierarchy? Meaning and How It Works",
      "description": "Ledger groups nested so reports roll up without manual regrouping. A plain-English definition with a worked example. From our accounting glossary.",
      "inLanguage": "en-IN",
      "wordCount": 1016,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy",
      "name": "Parent-Child Ledger Hierarchy: Meaning and Example",
      "description": "Ledger groups nested so reports roll up without manual regrouping. A plain-English definition with a worked example. From our accounting glossary.",
      "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#definedterm"
      },
      "keywords": [
        "parent-child ledger hierarchy",
        "parent-child ledger hierarchy meaning",
        "parent-child ledger hierarchy in accounting",
        "Segmented Chart of Accounts",
        "Operational Cost Centers",
        "Bill of Materials (BOM) Costing",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/parent-child-ledger-hierarchy#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Parent-Child Ledger Hierarchy</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">What Is a Parent-Child Ledger Hierarchy? Meaning and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Parent-Child Ledger Hierarchy: Definition</div><div class="definition-box"><p>A parent-child ledger hierarchy is the way individual ledger accounts (children) are grouped under summary control accounts (parents) so balances roll up automatically. It lives in the chart of accounts inside the accounting software. It matters because it lets a business post at a detailed level yet report at a summary level, keeping the balance sheet and P&amp;L readable while preserving drill-down detail underneath.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Parent-Child Ledger Hierarchy?</h2><p>In any real ledger there are dozens of similar accounts — many customers, many expense heads, many bank accounts. A parent-child hierarchy nests each of these detailed accounts under a parent group, so that the parent shows the total while the children hold the transactions. Sundry Debtors is a parent; each customer is a child. The design mirrors how Tally uses groups and ledgers, and how Zoho Books uses account sub-types.</p><p>An Indian business meets this the moment it sets up its books. A well-built hierarchy means the Schedule III balance sheet groups exactly as the format requires, GST ledgers sit together, and management can open a single line to see every underlying entry. A flat, ungrouped ledger, by contrast, produces a trial balance hundreds of lines long that nobody can read.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/segmented-chart-of-accounts">Segmented Chart of Accounts</a> — Adding department and location dimensions to the account code.</li><li><a href="/glossary/accounting/operational-cost-centers">Operational Cost Centers</a> — Cost pools the child ledgers can be tagged to.</li><li><a href="/glossary/accounting/bill-of-materials-bom-costing">Bill of Materials (BOM) Costing</a> — Product costing that rolls up much like a ledger hierarchy.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why Parent-Child Ledger Hierarchy Matters</h2><p>A poor hierarchy shows up as reports nobody trusts and time nobody has:</p><ul class="gloss-bullets"><li><strong>Unreadable financial statements</strong> — Without parent groups the balance sheet lists every child account, breaking the Schedule III presentation an auditor expects.</li><li><strong>Slow, error-prone reconciliations</strong> — Flat ledgers force manual grouping in Excel each month, where sorting mistakes creep in.</li><li><strong>Misgrouped GST and TDS</strong> — Tax ledgers scattered outside their parent make GSTR and TDS returns harder to tie back to the books.</li><li><strong>No clean drill-down</strong> — Management cannot move from a summary total to the underlying entries, so queries stall.</li><li><strong>Painful software migration</strong> — A messy hierarchy carried into a new system multiplies the clean-up when moving from, say, Tally to Zoho Books.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Parent-Child Ledger Hierarchy Works - Step by Step</h2><p>A transaction flows through the hierarchy from entry to statement:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Define the parent groups</strong><p>The accountant sets up control accounts — Sundry Debtors, Direct Expenses, Bank Accounts — following the Schedule III structure.</p></li><li class="step-card"><span class="step-num">2</span><strong>Create child ledgers under each parent</strong><p>Individual customers, expense heads and bank accounts are added as children, inheriting the parent&#x27;s classification.</p></li><li class="step-card"><span class="step-num">3</span><strong>Post at the child level</strong><p>Every voucher hits a specific child ledger, so detail is captured at source.</p></li><li class="step-card"><span class="step-num">4</span><strong>Roll balances up to the parent</strong><p>The software totals the children into the parent automatically — the summary artefact used in reports.</p></li><li class="step-card"><span class="step-num">5</span><strong>Report and drill down</strong><p>The balance sheet shows parent totals; opening a parent reveals the child balances and their entries.</p></li></ol></section><section id="example" class="gl-sec"><h2>Parent-Child Ledger Hierarchy: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Child: Customer A (Sundry Debtors)</td><td>4,20,000</td><td>Posted to child ledger</td></tr><tr><td>Child: Customer B (Sundry Debtors)</td><td>2,80,000</td><td>Posted to child ledger</td></tr><tr><td>Child: Customer C (Sundry Debtors)</td><td>1,00,000</td><td>Posted to child ledger</td></tr><tr><td>Parent: Sundry Debtors (total)</td><td>8,00,000</td><td>Rolled up; single balance-sheet line</td></tr></tbody></table></div><p>A Chennai distribution firm keeps a separate ledger for each of its three key customers under the parent Sundry Debtors. The parent shows ₹8,00,000 on the balance sheet as one clean line, while the accountant can open it to see ₹4,20,000, ₹2,80,000 and ₹1,00,000 owed by Customers A, B and C. Detail for chasing payments, simplicity for reporting.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Posting to parent accounts directly: Entering transactions on a control account instead of a child breaks the reconciliation → post only to child ledgers.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Parent-Child Ledger Hierarchy</h2><p>Structure errors are cheap to avoid and expensive to unwind:</p><ul class="gloss-bullets"><li><strong>Posting to parent accounts directly</strong> — Entering transactions on a control account instead of a child breaks the reconciliation → post only to child ledgers.</li><li><strong>Child under the wrong parent</strong> — Grouping an income ledger under an expense parent misstates the P&amp;L → check each child&#x27;s parent when created.</li><li><strong>Too many or too few levels</strong> — An over-deep tree slows entry while a flat one loses readability → keep the hierarchy shallow but grouped to Schedule III.</li><li><strong>Duplicate child ledgers</strong> — Creating two ledgers for the same customer splits a balance → search before adding a new child.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Design concepts that sit alongside the ledger tree:</p><ul class="related-terms"><li><a href="/glossary/accounting/segmented-chart-of-accounts">Segmented Chart of Accounts</a> — Adding department and location dimensions to codes.</li><li><a href="/glossary/accounting/operational-cost-centers">Operational Cost Centers</a> — Cost pools child ledgers can be tagged to.</li><li><a href="/glossary/accounting/bill-of-materials-bom-costing">Bill of Materials (BOM) Costing</a> — Product costing that rolls up much like a ledger hierarchy.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>A parent-child ledger hierarchy is the way individual ledger accounts (children) are grouped under summary control accounts (parents) so balances roll up automatically. It lives in the chart of accounts inside the accounting software. It matters because it lets a business post at a detailed level yet report at a summary level, keeping the balance sheet and P&amp;amp;L readable while preserving drill-down detail underneath.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Parent-Child Ledger Hierarchy?</h3><p>Parent-Child Ledger Hierarchy sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/chart-of-accounts-setup-services">Chart of Accounts Setup &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Chart of Accounts Setup</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/chart-of-accounts-setup-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounting-services">Accounting &amp; Bookkeeping Services in India<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/segmented-chart-of-accounts">Segmented Chart of Accounts<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/operational-cost-centers">Operational Cost Centers<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/bill-of-materials-bom-costing">Bill of Materials (BOM) Costing<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Parent-Child Ledger Hierarchy FAQs</h2><p class="faq-expanded__lead">Common questions about Parent-Child Ledger Hierarchy for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Parent-Child Ledger Hierarchy</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How are ledgers grouped under a parent group in Tally?</h3><div class="faq-expanded__a" id="faq-a1"><p>Each ledger is created under a primary group or sub group, so a supplier ledger sits under Sundry Creditors, which rolls into Current Liabilities. Sub groups can be nested, for example Bank Accounts split into current and overdraft accounts. Balances roll up automatically, so a loan wrongly grouped under creditors silently misstates the balance sheet.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a ledger group and a cost centre?</h3><div class="faq-expanded__a" id="faq-a2"><p>A ledger group answers what the money was spent on, while a cost centre answers which unit or person spent it. Rent is a ledger under Indirect Expenses; the Pune branch and the Mumbai branch are cost centres splitting that same rent. Groups drive the statutory financials, cost centres drive internal reporting and cannot replace grouping.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How should ledger groups be mapped to Schedule III heads for financial statements?</h3><div class="faq-expanded__a" id="faq-a3"><p>Every group must map to a Schedule III line such as trade payables, other current liabilities, short term borrowings or other expenses before the accounts are finalised. Sundry Creditors maps to trade payables, but statutory dues such as GST and TDS payable belong under other current liabilities. A mapping sheet kept with the trial balance saves audit rework.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Companies Act 2013 (Schedule III presentation); accounting-software chart-of-accounts practice. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
