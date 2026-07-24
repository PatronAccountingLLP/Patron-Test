@extends('layouts.service-app')


@section('meta')
    <title>Milestone vs Retainer Billing: Meaning and Example</title>
    <meta name="description" content="Billing on delivery events versus a fixed recurring fee. A plain-English definition with a worked example from Indian books. A practitioner guide.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Milestone vs Retainer Billing: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="Billing on delivery events versus a fixed recurring fee. A plain-English definition with a worked example from Indian books. A practitioner guide.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing">
    <meta property="og:image" content="https://www.patronaccounting.com/images/milestone-vs-retainer-billing-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#breadcrumb",
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
          "name": "Milestone vs Retainer Billing",
          "item": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#definedterm",
      "name": "Milestone vs Retainer Billing",
      "description": "Milestone vs retainer billing describes two ways a services firm charges clients: milestone billing invoices on defined deliverables or stages, while retainer billing charges a fixed recurring fee for ongoing access to services. Both drive how and when revenue is recognised. The choice matters because it shapes cash flow, revenue timing and how unbilled and deferred amounts arise.",
      "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does milestone billing affect the timing of a GST invoice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For a continuous supply of services, the tax invoice is due on or before the date the milestone payment becomes due under the contract, so GST can fall due before the money arrives. A Rs 20 lakh contract billed across four milestones creates four invoices, each carrying GST at its milestone date. Delaying the invoice does not delay liability."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between milestone billing and time and materials billing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Milestone billing fixes an amount for a defined deliverable and invoices when that deliverable is accepted, while time and materials billing invoices actual hours at agreed rates plus recoverable costs. Milestones shift overrun risk to the supplier and create unbilled revenue between stages; time and materials tracks effort and needs approved timesheets behind every invoice."
          }
        },
        {
          "@type": "Question",
          "name": "Is TDS deducted under Section 194J on a monthly retainer paid to a consultant?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A monthly professional retainer attracts TDS at 10% under Section 194J once payments in the financial year cross the prescribed threshold, and at 2% where the service is technical rather than professional. A Rs 1 lakh monthly retainer means Rs 10,000 deducted each month, deposited by the seventh of the following month."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#article",
      "headline": "What Is Milestone vs Retainer Billing? Meaning and Why It Matters",
      "description": "Billing on delivery events versus a fixed recurring fee. A plain-English definition with a worked example from Indian books. A practitioner guide.",
      "inLanguage": "en-IN",
      "wordCount": 1014,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing"
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
      "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing",
      "name": "Milestone vs Retainer Billing: Meaning and Example",
      "description": "Billing on delivery events versus a fixed recurring fee. A plain-English definition with a worked example from Indian books. A practitioner guide.",
      "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#definedterm"
      },
      "keywords": [
        "milestone vs retainer billing",
        "retainer billing",
        "milestone vs retainer billing meaning",
        "milestone vs retainer billing in accounting",
        "Project-Wise Profitability Margin",
        "GSTR-2B Input Tax Credit Matching",
        "Section 194Q TDS on Goods",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#example"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">Milestone vs Retainer Billing</span></nav><div class="gl-cat">Accounting Glossary &middot; Industry</div><h1 class="gl-h1">What Is Milestone vs Retainer Billing? Meaning and Why It Matters</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Advanced</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Milestone vs Retainer Billing: Definition</div><div class="definition-box"><p>Milestone vs retainer billing describes two ways a services firm charges clients: milestone billing invoices on defined deliverables or stages, while retainer billing charges a fixed recurring fee for ongoing access to services. Both drive how and when revenue is recognised. The choice matters because it shapes cash flow, revenue timing and how unbilled and deferred amounts arise.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Milestone vs Retainer Billing?</h2><p>Milestone billing ties invoices to progress: a client is billed when a stage is signed off — design approved, module delivered, phase completed. Retainer billing instead charges a set monthly or quarterly fee for a bundle of ongoing work or availability, regardless of the exact tasks in a given month. One follows deliverables; the other follows the calendar. Each creates a different pattern of earned revenue against billed amounts.</p><p>An Indian agency, consultancy or IT firm meets both models, often on the same client. A Pune design studio may bill a website build on three milestones while charging a ₹75,000-a-month retainer for ongoing support. Milestones tend to create unbilled revenue when work runs ahead of a sign-off, while retainers can create deferred revenue when the fee is collected before the month&#x27;s service is delivered. Matching revenue recognition to the model under Ind AS 115 is what keeps the accounts accurate.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/project-wise-profitability-margin">Project-Wise Profitability Margin</a> — Profit measured per project across billing models.</li><li><a href="/glossary/gstr-2b-input-tax-credit-matching">GSTR-2B Input Tax Credit Matching</a> — Input-credit reconciliation from the auto-drafted statement.</li><li><a href="/glossary/section-194q-tds-on-goods">Section 194Q TDS on Goods</a> — TDS on high-value goods purchases, a related tax touchpoint.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Milestone vs Retainer Billing Works</h2><p>Each model runs from engagement to recognised revenue on its own path:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Agree the billing model</strong><p>The engagement letter fixes whether billing is milestone-based, retainer-based or a mix — the governing document.</p></li><li class="step-card"><span class="step-num">2</span><strong>Define milestones or the retainer scope</strong><p>Milestones set deliverables and amounts; retainers set the fee and the services covered.</p></li><li class="step-card"><span class="step-num">3</span><strong>Deliver and track</strong><p>Work is delivered against milestones or through the retainer month, with hours or progress recorded.</p></li><li class="step-card"><span class="step-num">4</span><strong>Invoice per the model</strong><p>Milestone invoices go out on sign-off; retainer invoices go out each period on the fixed fee.</p></li><li class="step-card"><span class="step-num">5</span><strong>Recognise revenue correctly</strong><p>Milestone revenue is recognised as each obligation is satisfied; retainer revenue is recognised across the service period, creating unbilled or deferred balances as needed.</p></li></ol></section><section id="sector" class="gl-sec"><h2>Where Milestone vs Retainer Billing Applies — Professional Services Firms</h2><p>The two models are the backbone of services-firm billing:</p><ul class="gloss-bullets"><li><strong>Project-based agencies</strong> — Design, build and campaign work suits milestone billing on deliverables.</li><li><strong>Ongoing advisory and support</strong> — Consultants and IT support charge retainers for continuous availability.</li><li><strong>Law and compliance firms</strong> — Matters may be milestone-billed while annual compliance runs on retainer.</li><li><strong>Blended engagements</strong> — Many clients carry both a project milestone plan and a support retainer.</li><li><strong>Revenue-recognition-sensitive firms</strong> — Any Ind AS entity must match recognition to the billing model.</li></ul><p class="inline-links">See also: <a href="/accounting-services-for-the-service-sector-industry">Service Sector Accounting (Project Billing)</a> <a href="/accounts-receivable-outsourcing-services">Accounts Receivable Outsourcing</a></p></section><section id="example" class="gl-sec"><h2>Milestone vs Retainer Billing: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Website build — Milestone 1 (design)</td><td>1,50,000</td><td>Billed on sign-off; revenue recognised</td></tr><tr><td>Milestone 2 (development)</td><td>2,50,000</td><td>Billed on delivery</td></tr><tr><td>Milestone 3 (go-live)</td><td>1,00,000</td><td>Billed on launch</td></tr><tr><td>Support retainer</td><td>75,000 / month</td><td>Recognised across the month</td></tr><tr><td>Retainer collected in advance</td><td>75,000</td><td>Deferred until the month is served</td></tr></tbody></table></div><p>A Pune design studio bills a ₹5,00,000 website build across three milestones — ₹1,50,000, ₹2,50,000 and ₹1,00,000 — recognising revenue as each stage is signed off. Alongside, it charges a ₹75,000 monthly support retainer; when that fee is collected in advance, it is held as deferred revenue and released as the month is served. The two models sit on one client, each recognised on its own basis so the studio&#x27;s monthly revenue is stated correctly.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>model errors distort revenue and strain cash:</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Milestone vs Retainer Billing</h2><p>Billing-model errors distort revenue and strain cash:</p><ul class="gloss-bullets"><li><strong>Recognising milestone revenue too early</strong> — Booking a milestone before the deliverable is accepted overstates revenue → recognise as each obligation is satisfied.</li><li><strong>Treating retainer advances as income</strong> — Booking a prepaid retainer as revenue on receipt overstates the month → defer and release across the service period.</li><li><strong>No unbilled tracking on milestones</strong> — Ignoring work done ahead of a milestone understates revenue → recognise unbilled WIP between milestones.</li><li><strong>Scope creep on retainers</strong> — Absorbing out-of-scope work into a fixed retainer erodes margin → bill extra scope separately.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms read alongside billing models:</p><ul class="related-terms"><li><a href="/glossary/project-wise-profitability-margin">Project-Wise Profitability Margin</a> — Profit measured per project.</li><li><a href="/glossary/gstr-2b-input-tax-credit-matching">GSTR-2B Input Tax Credit Matching</a> — Input-credit reconciliation.</li><li><a href="/glossary/section-194q-tds-on-goods">Section 194Q TDS on Goods</a> — TDS on high-value goods purchases.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Milestone vs retainer billing describes two ways a services firm charges clients: milestone billing invoices on defined deliverables or stages, while retainer billing charges a fixed recurring fee for ongoing access to services. Both drive how and when revenue is recognised. The choice matters because it shapes cash flow, revenue timing and how unbilled and deferred amounts arise.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Milestone vs Retainer Billing?</h3><p>Milestone vs Retainer Billing sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services-for-the-service-sector-industry">Service Sector Accounting (Project Billing) &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Service Sector Accounting (Project Billing)</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services-for-the-service-sector-industry">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounts-receivable-outsourcing-services">Accounts Receivable Outsourcing<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/project-wise-profitability-margin">Project-Wise Profitability Margin<span class="arw">&rarr;</span></a></li><li><a href="/glossary/gstr-2b-input-tax-credit-matching">GSTR-2B Input Tax Credit Matching<span class="arw">&rarr;</span></a></li><li><a href="/glossary/section-194q-tds-on-goods">Section 194Q TDS on Goods<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Milestone vs Retainer Billing FAQs</h2><p class="faq-expanded__lead">Common questions about Milestone vs Retainer Billing for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Milestone vs Retainer Billing</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does milestone billing affect the timing of a GST invoice?</h3><div class="faq-expanded__a" id="faq-a1"><p>For a continuous supply of services, the tax invoice is due on or before the date the milestone payment becomes due under the contract, so GST can fall due before the money arrives. A Rs 20 lakh contract billed across four milestones creates four invoices, each carrying GST at its milestone date. Delaying the invoice does not delay liability.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between milestone billing and time and materials billing?</h3><div class="faq-expanded__a" id="faq-a2"><p>Milestone billing fixes an amount for a defined deliverable and invoices when that deliverable is accepted, while time and materials billing invoices actual hours at agreed rates plus recoverable costs. Milestones shift overrun risk to the supplier and create unbilled revenue between stages; time and materials tracks effort and needs approved timesheets behind every invoice.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Is TDS deducted under Section 194J on a monthly retainer paid to a consultant?</h3><div class="faq-expanded__a" id="faq-a3"><p>Yes. A monthly professional retainer attracts TDS at 10% under Section 194J once payments in the financial year cross the prescribed threshold, and at 2% where the service is technical rather than professional. A Rs 1 lakh monthly retainer means Rs 10,000 deducted each month, deposited by the seventh of the following month.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a></div></div><p class="eeat-note">Applicable framework: Ind AS 115 (Revenue from Contracts with Customers) / AS 9; GST time of supply under CGST Act 2017. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
