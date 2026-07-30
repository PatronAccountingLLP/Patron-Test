{{-- Global identity schema: defines the #organization, #team and #website nodes that
     page-level schemas (provider/author/publisher/isPartOf) reference by @id.
     Included ONCE sitewide from layouts/service-app.blade.php <head>. Do not include per page.
     No org-level aggregateRating by design: ratings are per-city GBP listings on each LocalBusiness. --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://www.patronaccounting.com/#organization",
  "name": "Patron Accounting LLP",
  "alternateName": "Patron Accounting",
  "url": "https://www.patronaccounting.com",
  "logo": {
    "@type": "ImageObject",
    "url": "https://www.patronaccounting.com/images/patron-logo.webp"
  },
  "image": "https://www.patronaccounting.com/images/patron-logo.webp",
  "description": "CA & CS-led accounting, bookkeeping, tax, GST and compliance services for businesses across India.",
  "foundingDate": "2019",
  "email": "sales@patronaccounting.com",
  "telephone": "+91 94594 56700",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "RTC Silver, B4-708, Sai Satyam Park, Wagholi",
    "addressLocality": "Pune",
    "addressRegion": "Maharashtra",
    "postalCode": "412207",
    "addressCountry": "IN"
  },
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+91 94594 56700",
      "email": "sales@patronaccounting.com",
      "contactType": "customer service",
      "areaServed": "IN",
      "availableLanguage": [
        "en",
        "hi"
      ]
    }
  ],
  "sameAs": [
    "https://in.linkedin.com/company/patron-accounting-llp",
    "https://www.instagram.com/patronaccounting/",
    "https://www.facebook.com/share/1BqqRYkpJX/",
    "https://www.youtube.com/@patronaccountingllp7130",
    "https://x.com/LlpPatron"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "@id": "https://www.patronaccounting.com/#team",
  "name": "Patron Accounting LLP - CA & CS Team",
  "parentOrganization": {
    "@id": "https://www.patronaccounting.com/#organization"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "@id": "https://www.patronaccounting.com/#website",
  "name": "Patron Accounting",
  "url": "https://www.patronaccounting.com",
  "publisher": {
    "@id": "https://www.patronaccounting.com/#organization"
  },
  "inLanguage": "en-IN"
}
</script>
