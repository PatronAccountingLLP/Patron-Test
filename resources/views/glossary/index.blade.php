@extends('layouts.service-app')


@section('meta')
    <title>Accounting, Tax, GST &amp; Compliance Glossary | Patron Accounting</title>
    <meta name="description" content="India-specific, CA-reviewed definitions of accounting, tax, GST and compliance terms for Indian businesses. The accounting glossary is live; more service areas are coming.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website"><meta property="og:title" content="Accounting, Tax, GST &amp; Compliance Glossary | Patron Accounting"><meta property="og:url" content="https://www.patronaccounting.com/glossary"><meta property="og:site_name" content="Patron Accounting">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"><link rel="stylesheet" href="/css/glossary.css"><script src="/js/glossary.js" defer></script>
@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/glossary#breadcrumb",
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
        }
      ]
    },
    {
      "@type": "CollectionPage",
      "@id": "https://www.patronaccounting.com/glossary",
      "name": "Accounting, Tax, GST & Compliance Glossary | Patron Accounting",
      "description": "India-specific, CA-reviewed definitions of accounting, tax, GST and compliance terms for Indian businesses. The accounting glossary is live; more service areas are coming.",
      "url": "https://www.patronaccounting.com/glossary",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "hasPart": {
        "@id": "https://www.patronaccounting.com/glossary/accounting#set"
      },
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary#breadcrumb"
      },
      "publisher": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are some basic accounting terms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common ones are assets (what a business owns), liabilities (what it owes), equity (the owners' stake), revenue (income earned) and expenses (costs incurred), plus the general ledger, journal entry and trial balance that record them. This glossary defines each in plain English with an Indian example."
          }
        },
        {
          "@type": "Question",
          "name": "What are the 5 basic elements of accounting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The five elements are assets, liabilities, equity, income (revenue) and expenses. Every transaction affects at least two of them under double-entry; together they build the balance sheet (assets, liabilities and equity) and the profit and loss statement (income and expenses). Each has its own entry in this glossary."
          }
        },
        {
          "@type": "Question",
          "name": "How can I learn and remember accounting terms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Start with the fundamentals - assets, liabilities, equity, income and expenses - then use each term in context: read its worked example in INR, see how it is handled in Tally or Zoho Books, and follow the related-term links. Looking terms up here as questions come up makes them stick better than memorising a list."
          }
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
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><span class="cur">Glossary</span></nav><div class="gl-cat">Patron Accounting &middot; Glossary</div><h1 class="gl-h1">Accounting, Tax &amp; Compliance Glossary</h1><p class="glh2-lead">Clear, India-specific definitions of the accounting, tax, GST and compliance terms that come up when you run a business, each written and reviewed by our Chartered Accountants and Company Secretaries. Choose a service area below to browse its glossary.</p><div class="gl-herobadges"><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>India-specific examples in INR</span><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA &amp; CS reviewed</span><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Updated for FY 2026-27</span><span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Free to use</span></div><div class="gl-popular"><span class="gl-popular__l">Popular</span><a href="/glossary/accounting/general-ledger">General Ledger</a><a href="/glossary/accounting/trial-balance">Trial Balance</a><a href="/glossary/accounting/depreciation">Depreciation</a><a href="/glossary/accounting/ebitda">EBITDA</a><a href="/glossary/accounting/working-capital">Working Capital</a><a href="/glossary/accounting/bank-reconciliation">Bank Reconciliation</a><a href="/glossary/accounting/accounts-payable">Accounts Payable</a></div></div><aside class="gl-herocta"><div class="gl-herocta__badge">Free consultation</div><h3>Prefer a CA to handle it?</h3><p>CA-led accounting, GST, tax and payroll for Indian businesses, on flat monthly plans.</p><a class="gl-herocta__btn" href="/contact-us">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; 3,000+ businesses served</div></aside></div></section>
  <div class="glh2-body"><div class="gl-wrap"><div class="glh-verts"><a href="/glossary/accounting" class="glh-vcard glh-vcard--live"><div class="glh-vcard__t">Accounting &amp; Bookkeeping</div><div class="glh-vcard__d">Definitions for the ledgers, GST, reconciliation and reporting terms behind clean books.</div><span class="glh-vcard__go">Explore glossary &rarr;</span></a><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">GST</div><div class="glh-vcard__d">Registration, returns, input tax credit, e-invoicing and TCS terminology.</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Income Tax &amp; TDS</div><div class="glh-vcard__d">ITR, TDS/TCS, advance tax and assessment terms.</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Company Registration</div><div class="glh-vcard__d">Incorporation, DIN, MOA/AOA and post-registration terms.</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">ROC &amp; Compliance</div><div class="glh-vcard__d">Annual filings, MCA forms and corporate compliance terms.</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Payroll &amp; Labour</div><div class="glh-vcard__d">PF, ESI, gratuity and payroll-processing terms.</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Licenses &amp; Certificates</div><div class="glh-vcard__d">FSSAI, ISO, IEC and trade-licence terms.</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Trademark &amp; IP</div><div class="glh-vcard__d">Trademark, copyright and IP-protection terms.</div><span class="glh-vcard__soon">Coming soon</span></div></div><section class="glh2-cta"><div class="glh2-cta__l"><div class="glh2-cta__ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><div><h3>Rather have experts handle it?</h3><p>CA-led accounting, GST, tax and compliance for Indian businesses.</p></div></div><a class="glh2-cta__btn" href="/accounting-services">Explore Patron Services &rarr;</a></section></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">About the glossary</h2><p class="faq-expanded__lead">What the Patron glossary is and how to get the most from it.</p><a class="faq-expanded__cta" href="/contact-us">Have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a Patron expert</h3><p class="faq-enquiry__sub">Tell us what you need and a CA will get back to you.</p><p class="faq-enquiry__context">Enquiring about: <strong>Patron Accounting services</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="gfaq-1">What are some basic accounting terms?</h3><div class="faq-expanded__a" id="gfaq-1"><p>Common ones are assets (what a business owns), liabilities (what it owes), equity (the owners' stake), revenue (income earned) and expenses (costs incurred), plus the general ledger, journal entry and trial balance that record them. This glossary defines each in plain English with an Indian example.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="gfaq-2">What are the 5 basic elements of accounting?</h3><div class="faq-expanded__a" id="gfaq-2"><p>The five elements are assets, liabilities, equity, income (revenue) and expenses. Every transaction affects at least two of them under double-entry; together they build the balance sheet (assets, liabilities and equity) and the profit and loss statement (income and expenses). Each has its own entry in this glossary.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="gfaq-3">How can I learn and remember accounting terms?</h3><div class="faq-expanded__a" id="gfaq-3"><p>Start with the fundamentals - assets, liabilities, equity, income and expenses - then use each term in context: read its worked example in INR, see how it is handled in Tally or Zoho Books, and follow the related-term links. Looking terms up here as questions come up makes them stick better than memorising a list.</p></div></div></div></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">Accounting glossary &rarr;</a></div></footer>
</div>
@endverbatim
@endsection
