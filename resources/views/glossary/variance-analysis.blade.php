@extends('layouts.service-app')


@section('meta')
    <title>Variance Analysis: Meaning and Example in Accounting</title>
    <meta name="description" content="Explaining the gap between what was budgeted and what actually happened. What it means, why it matters and where you will meet it. Explained by a CA.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/variance-analysis">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Variance Analysis: Meaning and Example in Accounting | Patron Accounting">
    <meta property="og:description" content="Explaining the gap between what was budgeted and what actually happened. What it means, why it matters and where you will meet it. Explained by a CA.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/variance-analysis">
    <meta property="og:image" content="https://www.patronaccounting.com/images/variance-analysis-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/variance-analysis#breadcrumb",
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
          "name": "Variance Analysis",
          "item": "https://www.patronaccounting.com/glossary/variance-analysis"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/variance-analysis#definedterm",
      "name": "Variance Analysis",
      "description": "Variance analysis is the comparison of actual financial results against a budget or standard, measuring and explaining each difference. It is a management-accounting tool drawn from the ledgers, not a statutory statement. It matters because it turns a gap between plan and reality into a cause — higher prices, more volume, cost overruns — that managers can act on rather than guess at.",
      "url": "https://www.patronaccounting.com/glossary/variance-analysis",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/variance-analysis#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to do variance analysis?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Variance analysis compares each actual figure with its budget or standard, then splits the gap into a rate element and a quantity element so the cause is visible. If material was budgeted at Rs 10,00,000 for 2,000 kg at Rs 500 and actual spend was Rs 11,20,000 for 2,100 kg at Rs 533, the Rs 1,20,000 adverse variance is Rs 50,000 usage and Rs 70,000 price."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a favourable and an adverse variance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A favourable variance means actual results improved profit against the standard, such as spending less or selling more, while an adverse variance means profit was reduced. Sign conventions flip between cost and revenue lines: lower actual cost is favourable, but lower actual revenue is adverse. Reporting both as absolute rupee amounts with a clear label avoids the most common reading error."
          }
        },
        {
          "@type": "Question",
          "name": "Are variance records required under Indian cost audit rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Companies covered by the Companies (Cost Records and Audit) Rules 2014 must maintain cost records in Form CRA-1, which specifically requires standards, actuals and the reconciliation of variances for material, labour and overheads. Those records also have to be reconciled with the audited financial statements, so a variance left unexplained in the cost sheet becomes an audit qualification rather than a management issue."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/variance-analysis#article",
      "headline": "What Is Variance Analysis? Meaning and How It Works",
      "description": "Explaining the gap between what was budgeted and what actually happened. What it means, why it matters and where you will meet it. Explained by a CA.",
      "inLanguage": "en-IN",
      "wordCount": 1135,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/variance-analysis#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/variance-analysis"
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
      "@id": "https://www.patronaccounting.com/glossary/variance-analysis",
      "name": "Variance Analysis: Meaning and Example in Accounting",
      "description": "Explaining the gap between what was budgeted and what actually happened. What it means, why it matters and where you will meet it. Explained by a CA.",
      "url": "https://www.patronaccounting.com/glossary/variance-analysis",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/variance-analysis#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/variance-analysis#definedterm"
      },
      "keywords": [
        "variance analysis",
        "what is variance analysis",
        "variance analysis meaning",
        "variance analysis in accounting",
        "Contribution Margin Dashboard",
        "Operating Cash Runway",
        "Closing Journal Entries",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/variance-analysis#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/variance-analysis#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Formula",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#formula"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><span class="cur">Variance Analysis</span></nav><div class="gl-cat">Accounting Glossary &middot; Process</div><h1 class="gl-h1">What Is Variance Analysis? Meaning and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#formula" class="gl-pill">Formula</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Variance Analysis: Definition</div><div class="definition-box"><p>Variance analysis is the comparison of actual financial results against a budget or standard, measuring and explaining each difference. It is a management-accounting tool drawn from the ledgers, not a statutory statement. It matters because it turns a gap between plan and reality into a cause — higher prices, more volume, cost overruns — that managers can act on rather than guess at.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Variance Analysis?</h2><p>Variance analysis measures the difference between what a business planned and what actually happened, then breaks that difference into its drivers. A total cost overrun might split into a price variance — inputs cost more than budgeted — and a quantity variance — more inputs were used. A favourable variance means results beat plan; an adverse one means they fell short. The point is not the number but the story behind it.</p><p>An Indian business meets variance analysis in its monthly MIS. A Hyderabad manufacturer comparing budgeted and actual production costs uses it to see whether a margin dip came from a supplier price rise or from wastage on the shop floor. Because it is a management tool rather than a statutory one, the format is flexible — but a disciplined variance report is what lets owners correct course mid-year instead of discovering the problem at the annual audit.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/contribution-margin-dashboard">Contribution Margin Dashboard</a> — Tracks the margin whose swings variance analysis explains.</li><li><a href="/glossary/operating-cash-runway">Operating Cash Runway</a> — Liquidity measure that adverse variances can shorten.</li><li><a href="/glossary/closing-journal-entries">Closing Journal Entries</a> — Period-end entries that finalise the actuals being compared.</li></ul></div></section><section id="why-matters" class="gl-sec"><h2>Why Variance Analysis Matters</h2><p>Without variance analysis, a budget is just a forgotten forecast:</p><ul class="gloss-bullets"><li><strong>Margin erosion goes unexplained</strong> — A falling margin with no variance breakdown leaves managers unable to tell a price problem from a wastage problem.</li><li><strong>Late course correction</strong> — Discovering an overrun only at year-end removes any chance to fix it during the year, magnifying the loss.</li><li><strong>Budgets lose credibility</strong> — A budget that is never compared to actuals stops driving behaviour and becomes a paper exercise.</li><li><strong>Poor pricing decisions</strong> — Without isolating a price variance, a business may cut selling prices when the real problem was input cost.</li><li><strong>Weak accountability</strong> — Unanalysed variances make it impossible to hold a department responsible for the results it controls.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Variance Analysis Is Used in Financial Analysis</h2><p>Managers move from raw figures to an action in a short sequence:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Set the budget or standard</strong><p>A budget or standard cost is agreed at the start of the period — the benchmark every variance is measured against.</p></li><li class="step-card"><span class="step-num">2</span><strong>Capture the actuals</strong><p>Actual revenues and costs come from the closed ledgers for the period, once closing entries are posted.</p></li><li class="step-card"><span class="step-num">3</span><strong>Compute the variances</strong><p>Actual less budget gives each variance, flagged favourable or adverse and split into price and quantity where relevant.</p></li><li class="step-card"><span class="step-num">4</span><strong>Investigate the drivers</strong><p>Material variances are traced to a cause — a rate rise, a volume change, wastage — the insight a manager acts on.</p></li><li class="step-card"><span class="step-num">5</span><strong>Report and act</strong><p>The variance report goes to management, who adjust pricing, purchasing or operations before the next period.</p></li></ol></section><section id="formula" class="gl-sec"><h2>How to Calculate Variance Analysis</h2><div class="formula-box"><code>Variance = Actual amount − Budgeted (standard) amount   (positive = adverse for costs, favourable for revenue)</code></div><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Input</th><th>Where it comes from</th><th>Sample value (INR)</th></tr></thead><tbody><tr><td>Budgeted material cost</td><td>Approved budget / standard cost card</td><td>20,00,000</td></tr><tr><td>Actual material cost</td><td>Purchase ledger for the period</td><td>23,00,000</td></tr><tr><td>Cost variance</td><td>Actual minus budget</td><td>3,00,000 adverse</td></tr></tbody></table></div><p class="worked-result">Variance = 23,00,000 − 20,00,000 = ₹3,00,000 adverse. Split further: if 5% came from a price rise and the rest from extra usage, the price variance is ₹1,00,000 and the usage variance ₹2,00,000.</p></section><section id="example" class="gl-sec"><h2>Variance Analysis: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Budgeted material cost</td><td>20,00,000</td><td>Benchmark from the budget</td></tr><tr><td>Actual material cost</td><td>23,00,000</td><td>From the purchase ledger</td></tr><tr><td>Price variance</td><td>1,00,000</td><td>Adverse — supplier rate rose</td></tr><tr><td>Usage variance</td><td>2,00,000</td><td>Adverse — wastage on the line</td></tr><tr><td>Total cost variance</td><td>3,00,000</td><td>Adverse — investigated and actioned</td></tr></tbody></table></div><p>A Hyderabad manufacturer budgets ₹20,00,000 for materials but spends ₹23,00,000. Variance analysis splits the ₹3,00,000 adverse gap into a ₹1,00,000 price variance from a supplier rate rise and a ₹2,00,000 usage variance from shop-floor wastage. The split matters: the price piece calls for renegotiation, the usage piece for a process fix. A single overrun figure would have hidden both actions.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Comparing to an unrealistic budget: Measuring against a budget nobody believed makes every variance meaningless → set a realistic, agreed benchmark.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Variance Analysis</h2><p>Variance analysis misleads when it is done mechanically:</p><ul class="gloss-bullets"><li><strong>Comparing to an unrealistic budget</strong> — Measuring against a budget nobody believed makes every variance meaningless → set a realistic, agreed benchmark.</li><li><strong>Not splitting price from quantity</strong> — A single cost variance hides whether the cause is rate or usage → decompose into price and quantity variances.</li><li><strong>Chasing every small variance</strong> — Investigating trivial differences wastes effort → apply a materiality threshold and focus on the big movers.</li><li><strong>Explaining without acting</strong> — Naming a cause but changing nothing repeats the loss → convert each material variance into a decision.</li><li><strong>Comparing to actuals not yet closed</strong> — Running variances before closing entries are posted uses incomplete figures → analyse only closed-period actuals.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms used with variance reporting:</p><ul class="related-terms"><li><a href="/glossary/contribution-margin-dashboard">Contribution Margin Dashboard</a> — Tracks the margin whose swings variances explain.</li><li><a href="/glossary/operating-cash-runway">Operating Cash Runway</a> — Liquidity measure adverse variances can shorten.</li><li><a href="/glossary/closing-journal-entries">Closing Journal Entries</a> — Period-end entries that finalise the actuals compared.</li><li><a href="/glossary">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Variance analysis is the comparison of actual financial results against a budget or standard, measuring and explaining each difference. It is a management-accounting tool drawn from the ledgers, not a statutory statement. It matters because it turns a gap between plan and reality into a cause — higher prices, more volume, cost overruns — that managers can act on rather than guess at.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Variance Analysis?</h3><p>Variance Analysis sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/mis-reporting-services">MIS Reporting Services &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">MIS Reporting Services</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/mis-reporting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/contribution-margin-dashboard">Contribution Margin Dashboard<span class="arw">&rarr;</span></a></li><li><a href="/glossary/operating-cash-runway">Operating Cash Runway<span class="arw">&rarr;</span></a></li><li><a href="/glossary/closing-journal-entries">Closing Journal Entries<span class="arw">&rarr;</span></a></li><li><a href="/glossary">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Variance Analysis FAQs</h2><p class="faq-expanded__lead">Common questions about Variance Analysis for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Variance Analysis</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How to do variance analysis?</h3><div class="faq-expanded__a" id="faq-a1"><p>Variance analysis compares each actual figure with its budget or standard, then splits the gap into a rate element and a quantity element so the cause is visible. If material was budgeted at Rs 10,00,000 for 2,000 kg at Rs 500 and actual spend was Rs 11,20,000 for 2,100 kg at Rs 533, the Rs 1,20,000 adverse variance is Rs 50,000 usage and Rs 70,000 price.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a favourable and an adverse variance?</h3><div class="faq-expanded__a" id="faq-a2"><p>A favourable variance means actual results improved profit against the standard, such as spending less or selling more, while an adverse variance means profit was reduced. Sign conventions flip between cost and revenue lines: lower actual cost is favourable, but lower actual revenue is adverse. Reporting both as absolute rupee amounts with a clear label avoids the most common reading error.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Are variance records required under Indian cost audit rules?</h3><div class="faq-expanded__a" id="faq-a3"><p>Companies covered by the Companies (Cost Records and Audit) Rules 2014 must maintain cost records in Form CRA-1, which specifically requires standards, actuals and the reconciliation of variances for material, labour and overheads. Those records also have to be reconciled with the audited financial statements, so a variance left unexplained in the cost sheet becomes an audit qualification rather than a management issue.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a></div></div><p class="eeat-note">Applicable framework: Management and cost accounting practice; AS 1 / Ind AS 1 for the underlying actual figures. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
