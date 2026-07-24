@extends('layouts.service-app')


@section('meta')
    <title>GST History Extraction: What Preparers Should Know</title>
    <meta name="description" content="Pulling filed return data out of the portal before a system change. What it is, how it is measured and who has to report it. With a worked example.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/gst-history-extraction">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="GST History Extraction: What Preparers Should Know | Patron Accounting">
    <meta property="og:description" content="Pulling filed return data out of the portal before a system change. What it is, how it is measured and who has to report it. With a worked example.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/gst-history-extraction">
    <meta property="og:image" content="https://www.patronaccounting.com/images/gst-history-extraction-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#breadcrumb",
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
          "name": "GST History Extraction",
          "item": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#definedterm",
      "name": "GST History Extraction",
      "description": "GST history extraction is the process of pulling a business&#x27;s past GST data — filed returns, tax ledgers, input credit and output liability — out of an old system or the GST portal, so it can be preserved or carried into a new one. It is done during a migration or a records review. It matters because GST records must be retained for years and must reconcile, even after the accounting software changes.",
      "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is GST return history extracted from the GST portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to the GST portal, open Services, then Returns, then View e-Filed Returns, choose the financial year and period, and download the filed GSTR-1, GSTR-3B or GSTR-9 as PDF or JSON. Bulk history is pulled through the returns offline tool or a GSP API, which is far faster where 36 or more return periods are needed."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between GSTR-2A and GSTR-2B in extracted GST history?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-2A is a dynamic statement that keeps changing as suppliers file or amend returns, so a copy pulled today will not match one pulled last year. GSTR-2B is a static monthly statement generated on the 14th of the following month and never changes afterwards. Input tax credit is reconciled against GSTR-2B, so that is the version to archive."
          }
        },
        {
          "@type": "Question",
          "name": "How many years of GST history does a business have to keep?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST records must be retained for 72 months, that is six years, from the due date of the annual return for that year, under Section 36 of the CGST Act. Records for FY 2024-25, whose annual return falls due on 31 December 2025, must therefore survive until December 2031. Extracting history before a software change protects that period."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#article",
      "headline": "What Is GST History Extraction? Definition and How It Works",
      "description": "Pulling filed return data out of the portal before a system change. What it is, how it is measured and who has to report it. With a worked example.",
      "inLanguage": "en-IN",
      "wordCount": 1092,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction",
      "name": "GST History Extraction: What Preparers Should Know",
      "description": "Pulling filed return data out of the portal before a system change. What it is, how it is measured and who has to report it. With a worked example.",
      "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#definedterm"
      },
      "keywords": [
        "GST history extraction",
        "what is GST history extraction",
        "gst history extraction meaning",
        "gst history extraction in accounting",
        "Double-Entry Bookkeeping",
        "General Ledger",
        "Trial Balance",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/gst-history-extraction#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">GST History Extraction</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Is GST History Extraction? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">GST History Extraction: Definition</div><div class="definition-box"><p>GST history extraction is the process of pulling a business&#x27;s past GST data — filed returns, tax ledgers, input credit and output liability — out of an old system or the GST portal, so it can be preserved or carried into a new one. It is done during a migration or a records review. It matters because GST records must be retained for years and must reconcile, even after the accounting software changes.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is GST History Extraction?</h2><p>GST history extraction is about securing the GST trail before it becomes hard to reach. When a business changes software, its GST ledgers, filed GSTR-1 and GSTR-3B data, input tax credit records and reconciliations sit in the old system and on the GST portal. Extraction gathers this into a preserved, structured form — so the history is available for reconciliation, assessment or audit long after the old software is retired.</p><p>An Indian business meets this at a migration and again whenever an assessment looks back. A Visakhapatnam wholesaler moving off its old system extracts its GST ledgers and return history so its input credit and output tax reconcile in the new software from day one. The retention stakes are real: under Section 36 of the CGST Act, GST accounts and records must be kept for seventy-two months from the due date of the annual return, so extraction is a compliance safeguard, not just a migration convenience.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping</a> — The basis the extracted GST entries were posted through.</li><li><a href="/glossary/accounting/general-ledger">General Ledger</a> — Where GST tax ledgers sit and are extracted from.</li><li><a href="/glossary/accounting/trial-balance">Trial Balance</a> — Where GST ledger balances appear at period-end.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How GST History Extraction Works</h2><p>GST history is gathered and reconciled through a structured sequence:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Identify the GST data</strong><p>Filed returns, tax ledgers, input credit registers and reconciliations are identified as the records to extract.</p></li><li class="step-card"><span class="step-num">2</span><strong>Pull from system and portal</strong><p>Data is exported from the old software and downloaded from the GST portal (GSTR-1, GSTR-3B, GSTR-2B) for completeness.</p></li><li class="step-card"><span class="step-num">3</span><strong>Structure and preserve it</strong><p>The extracted data is organised into a retained, reconcilable form — the archive that supports future queries.</p></li><li class="step-card"><span class="step-num">4</span><strong>Reconcile the position</strong><p>Output liability and input credit are reconciled between the books, the returns and the portal.</p></li><li class="step-card"><span class="step-num">5</span><strong>Carry balances forward</strong><p>The reconciled GST balances feed the opening position in the new system so filings continue cleanly.</p></li></ol></section><section id="software" class="gl-sec"><h2>How GST History Extraction Is Handled in Accounting Software</h2><p>Software exports the GST ledgers and returns data; the GST portal remains the authoritative source for filed returns.</p><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Software</th><th>How it handles GST history extraction</th><th>Watch-out</th></tr></thead><tbody><tr><td>Zoho Books (India)</td><td>GST reports (GSTR-1, GSTR-3B summaries) and tax ledgers export to Excel; filed data is downloaded from the portal.</td><td>In-software summaries must be reconciled to the portal — the portal is the record of what was actually filed.</td></tr><tr><td>Tally / TallyPrime</td><td>GST returns, computation and tax ledgers export via Excel/XML.</td><td>Uncertain periods (before GST features were correctly enabled) may need manual rebuild.</td></tr><tr><td>Xero</td><td>GST reports export, but Indian statutory returns are typically prepared/filed outside Xero.</td><td>Do not treat Xero&#x27;s summary as the filed return — reconcile to the portal.</td></tr><tr><td>Odoo</td><td>GST/tax reports export; localisation modules produce return summaries.</td><td>Localisation setup affects report accuracy — verify against the portal filings.</td></tr></tbody></table></div><p class="table-note">Whatever the tool, filed returns on the GST portal are the source of truth; software extracts must reconcile to them.</p></section><section id="example" class="gl-sec"><h2>GST History Extraction: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Output tax per books, FY 2025–26</td><td>24,00,000</td><td>Extracted from tax ledgers</td></tr><tr><td>Output tax per GSTR-3B (portal)</td><td>24,00,000</td><td>Downloaded from GST portal</td></tr><tr><td>Input tax credit reconciled to GSTR-2B</td><td>9,50,000</td><td>Matched books to auto-drafted statement</td></tr><tr><td>Carried to new system</td><td>balances</td><td>Opening GST position reconciles</td></tr></tbody></table></div><p>A Visakhapatnam wholesaler extracts its GST history before switching software. It pulls ₹24,00,000 of output tax from its tax ledgers and confirms it against the filed GSTR-3B on the portal, then reconciles ₹9,50,000 of input credit to GSTR-2B. The reconciled balances carry into the new system as the opening GST position. Because the records are preserved in a structured form, they remain available for the seventy-two-month retention period the CGST Act requires.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>Trusting software summaries over the portal: Treating an in-app GST report as the filed return misses portal adjustments → reconcile to the GST portal, the source of truth.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With GST History Extraction</h2><p>GST extraction fails when the books and the portal are not tied together:</p><ul class="gloss-bullets"><li><strong>Trusting software summaries over the portal</strong> — Treating an in-app GST report as the filed return misses portal adjustments → reconcile to the GST portal, the source of truth.</li><li><strong>Skipping input-credit reconciliation</strong> — Not matching credit to GSTR-2B risks claiming or losing ITC wrongly → reconcile ITC to the auto-drafted statement.</li><li><strong>Extracting returns but not ledgers</strong> — Keeping returns without the underlying tax ledgers leaves gaps at assessment → extract both.</li><li><strong>Not retaining for the full period</strong> — Discarding records before seventy-two months breaches Section 36 → preserve GST records for the full retention period.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around GST records and the ledger:</p><ul class="related-terms"><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping</a> — The basis GST entries post through.</li><li><a href="/glossary/accounting/general-ledger">General Ledger</a> — Where GST tax ledgers sit.</li><li><a href="/glossary/accounting/trial-balance">Trial Balance</a> — Where GST balances appear at period-end.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>GST history extraction is the process of pulling a business&amp;#x27;s past GST data — filed returns, tax ledgers, input credit and output liability — out of an old system or the GST portal, so it can be preserved or carried into a new one. It is done during a migration or a records review. It matters because GST records must be retained for years and must reconcile, even after the accounting software changes.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with GST History Extraction?</h3><p>GST History Extraction sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Migration: Tally to Zoho Books</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/migration-from-tally-to-zoho">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/migration-from-tally-to-odoo">Migration: Tally to Odoo<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/double-entry-bookkeeping">Double-Entry Bookkeeping<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/general-ledger">General Ledger<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/trial-balance">Trial Balance<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">GST History Extraction FAQs</h2><p class="faq-expanded__lead">Common questions about GST History Extraction for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>GST History Extraction</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is GST return history extracted from the GST portal?</h3><div class="faq-expanded__a" id="faq-a1"><p>Log in to the GST portal, open Services, then Returns, then View e-Filed Returns, choose the financial year and period, and download the filed GSTR-1, GSTR-3B or GSTR-9 as PDF or JSON. Bulk history is pulled through the returns offline tool or a GSP API, which is far faster where 36 or more return periods are needed.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between GSTR-2A and GSTR-2B in extracted GST history?</h3><div class="faq-expanded__a" id="faq-a2"><p>GSTR-2A is a dynamic statement that keeps changing as suppliers file or amend returns, so a copy pulled today will not match one pulled last year. GSTR-2B is a static monthly statement generated on the 14th of the following month and never changes afterwards. Input tax credit is reconciled against GSTR-2B, so that is the version to archive.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How many years of GST history does a business have to keep?</h3><div class="faq-expanded__a" id="faq-a3"><p>GST records must be retained for 72 months, that is six years, from the due date of the annual return for that year, under Section 36 of the CGST Act. Records for FY 2024-25, whose annual return falls due on 31 December 2025, must therefore survive until December 2031. Extracting history before a software change protects that period.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC GST</a><a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: GST records retention under CGST Act 2017 (Section 36, 72 months); GSTR-1/GSTR-3B/GSTR-2B reconciliation. For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary/accounting">&larr; Back to the accounting glossary</a></div></footer>
</div>
@endverbatim
@endsection
