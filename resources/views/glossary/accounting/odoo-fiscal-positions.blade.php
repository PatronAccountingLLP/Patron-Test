@extends('layouts.service-app')


@section('meta')
    <title>Odoo Fiscal Positions: Meaning, Definition and Example</title>
    <meta name="description" content="Rules that swap tax and account mappings by customer location. What it means, why it matters and where you will meet it. Current Indian practice.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Odoo Fiscal Positions: Meaning, Definition and Example | Patron Accounting">
    <meta property="og:description" content="Rules that swap tax and account mappings by customer location. What it means, why it matters and where you will meet it. Current Indian practice.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions">
    <meta property="og:image" content="https://www.patronaccounting.com/images/odoo-fiscal-positions-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#breadcrumb",
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
          "name": "Odoo Fiscal Positions",
          "item": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#definedterm",
      "name": "Odoo Fiscal Positions",
      "description": "Odoo Fiscal Positions are rules that automatically remap the default taxes and accounts on a transaction based on a customer or vendor&#x27;s situation — such as inter-state, SEZ or export. They are configured in Odoo Accounting and attached to a contact. They matter because they apply the correct GST treatment (IGST versus CGST/SGST, or zero-rated) automatically, instead of relying on the user to pick the right tax each time.",
      "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does an Odoo fiscal position change the tax on an invoice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A fiscal position maps the default tax and account set on a product to a different one based on the customer record, and Odoo applies it automatically once the partner is selected. A product carrying 18 percent GST as CGST plus SGST switches to 18 percent IGST when the out of state fiscal position applies, without anyone editing the product master."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a fiscal position and a tax in Odoo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A tax record defines the rate itself, such as GST 18 percent, and how it is reported, while a fiscal position is a rule that swaps one tax or account for another depending on who is being billed. Deleting or editing a tax disturbs entries already posted, whereas a fiscal position change affects only invoices raised afterwards."
          }
        },
        {
          "@type": "Question",
          "name": "Which fiscal positions does an Indian business need in Odoo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most Indian setups need at least four: intra state for CGST plus SGST, inter state for IGST, export or SEZ supply at zero rate against a letter of undertaking, and reverse charge for notified inward supplies. Place of supply drives the choice, so the state code in the customer GSTIN must be right or the wrong tax lands in GSTR-1."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#article",
      "headline": "What Are Odoo Fiscal Positions? Definition and How It Works",
      "description": "Rules that swap tax and account mappings by customer location. What it means, why it matters and where you will meet it. Current Indian practice.",
      "inLanguage": "en-IN",
      "wordCount": 1049,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions",
      "name": "Odoo Fiscal Positions: Meaning, Definition and Example",
      "description": "Rules that swap tax and account mappings by customer location. What it means, why it matters and where you will meet it. Current Indian practice.",
      "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#definedterm"
      },
      "keywords": [
        "Odoo Fiscal Positions",
        "what are Odoo Fiscal Positions",
        "odoo tax mapping",
        "odoo fiscal positions meaning",
        "odoo fiscal positions in accounting",
        "Parent-Subsidiary Consolidation",
        "Tally Vault",
        "Tally XML Export",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/odoo-fiscal-positions#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Odoo Fiscal Positions</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Are Odoo Fiscal Positions? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Odoo Fiscal Positions: Definition</div><div class="definition-box"><p>Odoo Fiscal Positions are rules that automatically remap the default taxes and accounts on a transaction based on a customer or vendor&#x27;s situation — such as inter-state, SEZ or export. They are configured in Odoo Accounting and attached to a contact. They matter because they apply the correct GST treatment (IGST versus CGST/SGST, or zero-rated) automatically, instead of relying on the user to pick the right tax each time.</p></div></section><section id="what-is" class="gl-sec"><h2>What Are Odoo Fiscal Positions?</h2><p>A fiscal position is Odoo&#x27;s mechanism for saying &quot;for this kind of party, swap the default tax and account for this other one.&quot; A product carries a default tax — say GST 18% intra-state — but when it is sold to an out-of-state customer, the fiscal position remaps that to 18% IGST, and to a customer in an SEZ or abroad it remaps to a zero-rated tax. The rule does the substitution so the user does not have to remember it.</p><p>An Indian business on Odoo meets fiscal positions the moment it sells across state lines. A Coimbatore textile manufacturer selling within Tamil Nadu charges CGST+SGST, but the same product to a Karnataka buyer must attract IGST; a fiscal position mapped to the customer&#x27;s state makes Odoo apply the right one automatically. It is the difference between correct GST by design and correct GST by everyone remembering the rule.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a> — Combining group accounts, each with its own tax setup.</li><li><a href="/glossary/accounting/tally-vault">Tally Vault</a> — Tally&#x27;s company data encryption feature.</li><li><a href="/glossary/accounting/tally-xml-export">Tally XML Export</a> — Exporting Tally data in XML for interchange and migration.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Odoo Fiscal Positions Work</h2><p>A fiscal position sits between the default tax and the transaction, swapping in the correct treatment:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Define the mapping</strong><p>A fiscal position lists which default taxes and accounts map to which replacements — the rule itself.</p></li><li class="step-card"><span class="step-num">2</span><strong>Attach it to a contact</strong><p>The position is set on a customer or vendor (or auto-detected by state/country), telling Odoo when to apply it.</p></li><li class="step-card"><span class="step-num">3</span><strong>Create a document</strong><p>An invoice or bill is raised for that contact, carrying products with their default taxes.</p></li><li class="step-card"><span class="step-num">4</span><strong>Remap on the fly</strong><p>Odoo substitutes the mapped tax and account — for example IGST in place of CGST/SGST — on each line.</p></li><li class="step-card"><span class="step-num">5</span><strong>Post the correct entry</strong><p>The double-entry engine posts the remapped tax to the right GST account, so returns pull correct figures.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Odoo Fiscal Positions in Odoo</h2><p>Fiscal positions are configured in Accounting and then applied to contacts (Odoo Accounting, v17/18):</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open the Accounting app</strong><p>From the Odoo apps, open Accounting.</p></li><li class="step-card"><span class="step-num">2</span><strong>Go to Fiscal Positions</strong><p>Navigate to Configuration &gt; Fiscal Positions to see existing positions.</p></li><li class="step-card"><span class="step-num">3</span><strong>Create a position</strong><p>Click New and name it (for example Inter-State / IGST or SEZ / Zero-rated).</p></li><li class="step-card"><span class="step-num">4</span><strong>Add tax and account mappings</strong><p>In the Tax Mapping and Account Mapping tabs, set which default tax/account maps to which replacement.</p></li><li class="step-card"><span class="step-num">5</span><strong>Set auto-detection (optional)</strong><p>Enable Detect Automatically and set the country/state so Odoo applies the position based on the customer&#x27;s location.</p></li><li class="step-card"><span class="step-num">6</span><strong>Apply on the contact</strong><p>Open the customer or vendor, go to the Sales &amp; Purchase tab, and select the Fiscal Position under Fiscal Information.</p></li></ol></section><section id="example" class="gl-sec"><h2>Odoo Fiscal Positions: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Sale within Tamil Nadu</td><td>1,00,000</td><td>Default: CGST 9% + SGST 9% = ₹18,000</td></tr><tr><td>Same sale to Karnataka buyer</td><td>1,00,000</td><td>Fiscal position remaps to IGST 18% = ₹18,000</td></tr><tr><td>Sale to SEZ unit</td><td>1,00,000</td><td>Fiscal position remaps to zero-rated (₹0 GST)</td></tr><tr><td>Tax posted</td><td>varies</td><td>Correct GST account by rule, not by memory</td></tr></tbody></table></div><p>A Coimbatore textile manufacturer sells the same ₹1,00,000 order three ways. Within Tamil Nadu, Odoo applies CGST+SGST of ₹18,000; to a Karnataka buyer, the inter-state fiscal position remaps it to ₹18,000 IGST; to an SEZ unit, the zero-rated position drops GST to nil. The user picks the customer and Odoo applies the right treatment automatically — no manual tax selection, and each posts to the correct GST account.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>No position on a contact: An out-of-state customer left without a fiscal position keeps the default intra-state tax → assign the correct position or enable auto-detection.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Odoo Fiscal Positions</h2><p>Fiscal positions misfire when the mappings or triggers are wrong:</p><ul class="gloss-bullets"><li><strong>No position on a contact</strong> — An out-of-state customer left without a fiscal position keeps the default intra-state tax → assign the correct position or enable auto-detection.</li><li><strong>Incomplete tax mapping</strong> — Mapping only some taxes leaves others un-remapped → cover every default tax the position should change.</li><li><strong>Wrong auto-detect geography</strong> — A mis-set country/state applies the wrong position automatically → verify the detection rules against real customer locations.</li><li><strong>Forgetting zero-rated accounts</strong> — SEZ/export sales without a zero-rated mapping overstate GST → set up the zero-rated position explicitly.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around Odoo tax handling and Tally interchange:</p><ul class="related-terms"><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a> — Combining group entities&#x27; accounts.</li><li><a href="/glossary/accounting/tally-vault">Tally Vault</a> — Company data encryption in Tally.</li><li><a href="/glossary/accounting/tally-xml-export">Tally XML Export</a> — Exporting Tally data as XML.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Odoo Fiscal Positions are rules that automatically remap the default taxes and accounts on a transaction based on a customer or vendor&amp;#x27;s situation — such as inter-state, SEZ or export. They are configured in Odoo Accounting and attached to a contact. They matter because they apply the correct GST treatment (IGST versus CGST/SGST, or zero-rated) automatically, instead of relying on the user to pick the right tax each time.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Odoo Fiscal Positions?</h3><p>Odoo Fiscal Positions sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/odoo-accounting">Odoo Accounting Services &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Odoo Accounting Services</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/odoo-accounting">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/accounting-services-for-manufacturing">Manufacturing Accounting Services<span class="arw">&rarr;</span></a></li><li><a href="/accounting-services">Accounting &amp; Bookkeeping Services in India<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/tally-vault">Tally Vault<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/tally-xml-export">Tally XML Export<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Odoo Fiscal Positions FAQs</h2><p class="faq-expanded__lead">Common questions about Odoo Fiscal Positions for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Odoo Fiscal Positions</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does an Odoo fiscal position change the tax on an invoice?</h3><div class="faq-expanded__a" id="faq-a1"><p>A fiscal position maps the default tax and account set on a product to a different one based on the customer record, and Odoo applies it automatically once the partner is selected. A product carrying 18 percent GST as CGST plus SGST switches to 18 percent IGST when the out of state fiscal position applies, without anyone editing the product master.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between a fiscal position and a tax in Odoo?</h3><div class="faq-expanded__a" id="faq-a2"><p>A tax record defines the rate itself, such as GST 18 percent, and how it is reported, while a fiscal position is a rule that swaps one tax or account for another depending on who is being billed. Deleting or editing a tax disturbs entries already posted, whereas a fiscal position change affects only invoices raised afterwards.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Which fiscal positions does an Indian business need in Odoo?</h3><div class="faq-expanded__a" id="faq-a3"><p>Most Indian setups need at least four: intra state for CGST plus SGST, inter state for IGST, export or SEZ supply at zero rate against a letter of undertaking, and reverse charge for notified inward supplies. Place of supply drives the choice, so the state code in the customer GSTIN must be right or the wrong tax lands in GSTR-1.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Odoo Docs</a><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a></div></div><p class="eeat-note">Applicable framework: GST place-of-supply and zero-rating under CGST/IGST Acts 2017; product guidance – Odoo Accounting. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary/accounting">&larr; Back to the accounting glossary</a></div></footer>
</div>
@endverbatim
@endsection
