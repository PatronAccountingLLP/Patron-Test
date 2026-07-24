@extends('layouts.service-app')


@section('meta')
    <title>Tally XML Export: Meaning and Example in Accounting</title>
    <meta name="description" content="Tally's structured export format, used for migration and bulk correction. What it is, how it is measured and who has to report it. Explained by a CA.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/tally-xml-export">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tally XML Export: Meaning and Example in Accounting | Patron Accounting">
    <meta property="og:description" content="Tally's structured export format, used for migration and bulk correction. What it is, how it is measured and who has to report it. Explained by a CA.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/tally-xml-export">
    <meta property="og:image" content="https://www.patronaccounting.com/images/tally-xml-export-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#breadcrumb",
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
          "name": "Tally XML Export",
          "item": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#definedterm",
      "name": "Tally XML Export",
      "description": "Tally XML Export is Tally&#x27;s function for exporting reports, masters or vouchers as an XML file in its Data Interchange format, so the data can be moved into another system or another Tally company. It is run from the Export option on any report. It matters because XML is the structured format used to migrate ledgers and transactions out of Tally cleanly, rather than re-keying them, during a system change or integration.",
      "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to export an XML file in Tally ERP 9?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Open the report to be exported, press Alt+E for Export, set Format to XML (Data Interchange), choose the destination folder and file name, set the period, then accept. Tally writes a .xml file holding the ledger masters or vouchers in that report. Selecting Masters exports ledgers and stock items; selecting Vouchers exports transactions for the chosen date range."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between exporting Tally data as XML and as Excel?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "XML export carries the full data structure, including ledger groups, voucher types and GUIDs, so another system can import it and rebuild the entries, while Excel export produces a flat readable report meant for analysis. Use XML for migration or for pushing data into a portal, and Excel for review, reconciliation or sharing figures with a client."
          }
        },
        {
          "@type": "Question",
          "name": "Can a Tally XML export be used to file GST returns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The GST portal does not accept Tally's XML format; GSTR-1 and GSTR-3B are filed through the JSON file produced by the GST Offline Utility or through a GSP. Tally XML is still useful for moving data into a reconciliation tool that generates that JSON. E-invoice IRNs are generated separately through the Invoice Registration Portal, not from an XML export."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#article",
      "headline": "What Is Tally XML Export? Definition and How It Works",
      "description": "Tally's structured export format, used for migration and bulk correction. What it is, how it is measured and who has to report it. Explained by a CA.",
      "inLanguage": "en-IN",
      "wordCount": 1070,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export",
      "name": "Tally XML Export: Meaning and Example in Accounting",
      "description": "Tally's structured export format, used for migration and bulk correction. What it is, how it is measured and who has to report it. Explained by a CA.",
      "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#definedterm"
      },
      "keywords": [
        "Tally XML Export",
        "what is Tally XML export",
        "tally xml export meaning",
        "tally xml export in accounting",
        "Remote Tally Access",
        "Ledger Mapping Schema",
        "Historical Data Cut-off Date",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-xml-export#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Tally XML Export</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">What Is Tally XML Export? Definition and How It Works</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Tally XML Export: Definition</div><div class="definition-box"><p>Tally XML Export is Tally&#x27;s function for exporting reports, masters or vouchers as an XML file in its Data Interchange format, so the data can be moved into another system or another Tally company. It is run from the Export option on any report. It matters because XML is the structured format used to migrate ledgers and transactions out of Tally cleanly, rather than re-keying them, during a system change or integration.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Tally XML Export?</h2><p>XML export is how Tally hands its data to another program in a structured, machine-readable form. Where a PDF or Excel export is for humans to read, the XML (Data Interchange) format preserves the underlying structure of masters and vouchers — ledgers, groups, dates, amounts and their relationships — so a target system or another Tally company can import them faithfully. It is the backbone of most Tally-to-anything data movements.</p><p>An Indian business meets Tally XML export at a migration or integration. An Indore distributor moving from Tally to Zoho Books or Odoo exports its masters and transactions as XML, which the migration process then maps and loads into the new system. The same format is used to push data between Tally companies or into a custom tool. Getting the export scope and period right is what determines whether the migration is complete.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/remote-tally-access">Remote Tally Access</a> — Reaching the Tally company you are exporting from, remotely.</li><li><a href="/glossary/accounting/ledger-mapping-schema">Ledger Mapping Schema</a> — How exported ledgers map to destination accounts.</li><li><a href="/glossary/accounting/historical-data-cut-off-date">Historical Data Cut-off Date</a> — The date that decides how much history to export.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Tally XML Export Works</h2><p>Data leaves Tally in XML through a short export path:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open the source report</strong><p>Navigate to the report, masters list or Day Book holding the data you want to export.</p></li><li class="step-card"><span class="step-num">2</span><strong>Choose the export scope</strong><p>Decide whether to export the current view or a range, and set the period so the right transactions are included.</p></li><li class="step-card"><span class="step-num">3</span><strong>Select the XML format</strong><p>Pick XML (Data Interchange) as the file format so the output is structured, not just readable.</p></li><li class="step-card"><span class="step-num">4</span><strong>Generate the file</strong><p>Tally writes the XML to the chosen location — the artefact the target system will consume.</p></li><li class="step-card"><span class="step-num">5</span><strong>Import into the target</strong><p>The XML is loaded into another Tally company, a migration tool or an integration, where it is mapped to the destination structure.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Tally XML Export in Tally</h2><p>Export is run from any report using the Export action (TallyPrime; the Alt+E shortcut is unchanged from Tally.ERP 9, but the configuration screen is more interactive):</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Open the report to export</strong><p>Go to the report or list you want — for example Gateway of Tally &gt; Day Book, or a masters list.</p></li><li class="step-card"><span class="step-num">2</span><strong>Press Alt+E (Export)</strong><p>Choose Export from the top menu, then select Current to export the on-screen report/range.</p></li><li class="step-card"><span class="step-num">3</span><strong>Set the file format</strong><p>In the export configuration, open File Format and select XML (Data Interchange).</p></li><li class="step-card"><span class="step-num">4</span><strong>Set the period and scope</strong><p>Confirm the date range and any filters so the export captures exactly the data needed.</p></li><li class="step-card"><span class="step-num">5</span><strong>Choose the export location</strong><p>Set the folder and file name where the XML will be saved.</p></li><li class="step-card"><span class="step-num">6</span><strong>Send the export</strong><p>Press E (Send) to generate the XML file, then verify it opens and contains the expected records.</p></li></ol></section><section id="example" class="gl-sec"><h2>Tally XML Export: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Ledger masters exported (XML)</td><td>—</td><td>Party and account structure preserved</td></tr><tr><td>FY 2025–26 vouchers exported</td><td>2,10,00,000</td><td>Full year&#x27;s transactions in XML</td></tr><tr><td>Imported into new system</td><td>2,10,00,000</td><td>Mapped to destination ledgers</td></tr><tr><td>Reconciled after import</td><td>2,10,00,000</td><td>Totals matched Tally trial balance</td></tr></tbody></table></div><p>An Indore distributor migrating off Tally exports its ledger masters and the full FY 2025–26 voucher set — ₹2,10,00,000 of transactions — as XML in Data Interchange format. The migration tool loads the XML and maps each Tally ledger to the destination account. After import, the new system&#x27;s trial balance is reconciled back to Tally&#x27;s, confirming the XML export carried every record across without re-keying.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>scoped export breaks a migration:</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Tally XML Export</h2><p>An incomplete or mis-scoped export breaks a migration:</p><ul class="gloss-bullets"><li><strong>Wrong period selected</strong> — Exporting only part of the year leaves transactions behind → set the full required date range before exporting.</li><li><strong>Exporting readable formats by mistake</strong> — Choosing Excel or PDF loses the structure needed for import → select XML (Data Interchange) specifically.</li><li><strong>Masters and vouchers exported inconsistently</strong> — Importing vouchers without their masters breaks references → export masters first, then the transactions.</li><li><strong>No post-import reconciliation</strong> — Assuming the export was complete without checking risks silent data loss → reconcile the imported totals to Tally&#x27;s trial balance.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around Tally data movement:</p><ul class="related-terms"><li><a href="/glossary/accounting/remote-tally-access">Remote Tally Access</a> — Reaching the Tally company remotely.</li><li><a href="/glossary/accounting/ledger-mapping-schema">Ledger Mapping Schema</a> — Mapping ledgers to destination accounts.</li><li><a href="/glossary/accounting/historical-data-cut-off-date">Historical Data Cut-off Date</a> — Deciding how much history to move.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Tally XML Export is Tally&amp;#x27;s function for exporting reports, masters or vouchers as an XML file in its Data Interchange format, so the data can be moved into another system or another Tally company. It is run from the Export option on any report. It matters because XML is the structured format used to migrate ledgers and transactions out of Tally cleanly, rather than re-keying them, during a system change or integration.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Tally XML Export?</h3><p>Tally XML Export sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/tally-accounting">Tally Prime Accounting Services &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Tally Prime Accounting Services</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/tally-accounting">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related services</div><ul><li><a href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books<span class="arw">&rarr;</span></a></li><li><a href="/migration-from-tally-to-odoo">Migration: Tally to Odoo<span class="arw">&rarr;</span></a></li><li><a href="/accounting-services">Accounting &amp; Bookkeeping Services in India<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting/remote-tally-access">Remote Tally Access<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/ledger-mapping-schema">Ledger Mapping Schema<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting/historical-data-cut-off-date">Historical Data Cut-off Date<span class="arw">&rarr;</span></a></li><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Tally XML Export FAQs</h2><p class="faq-expanded__lead">Common questions about Tally XML Export for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Tally XML Export</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How to export an XML file in Tally ERP 9?</h3><div class="faq-expanded__a" id="faq-a1"><p>Open the report to be exported, press Alt+E for Export, set Format to XML (Data Interchange), choose the destination folder and file name, set the period, then accept. Tally writes a .xml file holding the ledger masters or vouchers in that report. Selecting Masters exports ledgers and stock items; selecting Vouchers exports transactions for the chosen date range.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between exporting Tally data as XML and as Excel?</h3><div class="faq-expanded__a" id="faq-a2"><p>XML export carries the full data structure, including ledger groups, voucher types and GUIDs, so another system can import it and rebuild the entries, while Excel export produces a flat readable report meant for analysis. Use XML for migration or for pushing data into a portal, and Excel for review, reconciliation or sharing figures with a client.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can a Tally XML export be used to file GST returns?</h3><div class="faq-expanded__a" id="faq-a3"><p>The GST portal does not accept Tally's XML format; GSTR-1 and GSTR-3B are filed through the JSON file produced by the GST Offline Utility or through a GSP. Tally XML is still useful for moving data into a reconciliation tool that generates that JSON. E-invoice IRNs are generated separately through the Invoice Registration Portal, not from an XML export.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Tally Solutions</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: Product guidance – TallyPrime (Export / Data Interchange); record retention under Companies Act 2013 (Section 128). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led accounting &amp; bookkeeping across India.</span><a href="/glossary/accounting">&larr; Back to the accounting glossary</a></div></footer>
</div>
@endverbatim
@endsection
