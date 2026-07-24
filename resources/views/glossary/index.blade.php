@extends('layouts.service-app')


@section('meta')
    <title>Patron Glossary - Accounting, Tax, GST &amp; Compliance Terms</title>
    <meta name="description" content="Plain-language definitions across every Patron service - accounting and bookkeeping is live now, with GST, income tax, company registration and compliance coming next.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website"><meta property="og:title" content="Patron Glossary - Accounting, Tax, GST &amp; Compliance Terms"><meta property="og:url" content="https://www.patronaccounting.com/glossary"><meta property="og:site_name" content="Patron Accounting">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"><link rel="stylesheet" href="/css/glossary.css">
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
      "name": "Patron Glossary - Accounting, Tax, GST & Compliance Terms",
      "description": "Plain-language definitions across every Patron service - accounting and bookkeeping is live now, with GST, income tax, company registration and compliance coming next.",
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><span class="cur">Glossary</span></nav><div class="gl-cat">Patron Glossary &middot; by service</div><h1 class="gl-h1">The Patron Business Glossary</h1><p class="glh2-lead">Plain-language, CA-reviewed definitions across every service we run for Indian businesses. Choose a service area to browse its glossary.</p></div></section>
  <div class="glh2-body"><div class="gl-wrap"><div class="glh-verts"><a href="/glossary/accounting" class="glh-vcard glh-vcard--live"><div class="glh-vcard__t">Accounting &amp; Bookkeeping</div><div class="glh-vcard__c">140 terms &middot; Live</div><span class="glh-vcard__go">Explore glossary &rarr;</span></a><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">GST</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Income Tax &amp; TDS</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Company Registration</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">ROC &amp; Compliance</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Payroll &amp; Labour</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Licenses &amp; Certificates</div><span class="glh-vcard__soon">Coming soon</span></div><div class="glh-vcard glh-vcard--soon"><div class="glh-vcard__t">Trademark &amp; IP</div><span class="glh-vcard__soon">Coming soon</span></div></div><section class="glh2-cta"><div class="glh2-cta__l"><div class="glh2-cta__ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><div><h3>Rather have experts handle it?</h3><p>CA-led accounting, GST, tax and compliance for Indian businesses.</p></div></div><a class="glh2-cta__btn" href="/accounting-services">Explore Patron Services &rarr;</a></section></div></div>
  <footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP &middot; CA-led services across India.</span><a href="/glossary/accounting">Accounting glossary &rarr;</a></div></footer>
</div>
@endverbatim
@endsection
