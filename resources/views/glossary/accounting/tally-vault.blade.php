@extends('layouts.service-app')


@section('meta')
    <title>Tally Vault: Meaning and Example</title>
    <meta name="description" content="">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/accounting/tally-vault">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Tally Vault: Meaning and Example | Patron Accounting">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/accounting/tally-vault">
    <meta property="og:image" content="https://www.patronaccounting.com/images/tally-vault-og.webp">
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#breadcrumb",
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
          "name": "Tally Vault",
          "item": "https://www.patronaccounting.com/glossary/accounting/tally-vault"
        }
      ]
    },
    {
      "@type": "DefinedTerm",
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#definedterm",
      "name": "Tally Vault",
      "description": "Tally Vault (officially TallyVault) is a security feature that encrypts an entire company&#x27;s data in Tally so it cannot be read or opened without the vault password. It is set at company creation or applied to an existing company. It matters because it protects sensitive accounting data at rest — even someone with the data files cannot access the accounts without the password, and there is no way to recover a lost one.",
      "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault",
      "inDefinedTermSet": {
        "@type": "DefinedTermSet",
        "@id": "https://www.patronaccounting.com/glossary/accounting#set",
        "name": "Accounting Terms Glossary",
        "url": "https://www.patronaccounting.com/glossary/accounting"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#faq",
      "datePublished": "2026-07-22T10:00:00+05:30",
      "dateModified": "2026-07-22T10:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to remove a Tally Vault password?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Open Tally, press Alt+F3 for company info, choose Change Tally Vault, select the company, enter the existing Vault password and leave the new password blank, then confirm. Tally rewrites the data into a fresh unencrypted company folder with a new company number. The old encrypted folder stays on disk and should be deleted only after the new one is verified."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Tally Vault and a Tally company password?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A company password controls who can log in but leaves the data files readable, while Tally Vault encrypts the company data itself so the folder cannot be opened and the company name is not even visible without the key. Tally Vault has no recovery option, so a forgotten key means the data is lost permanently. Most businesses use both layers."
          }
        },
        {
          "@type": "Question",
          "name": "Can a statutory auditor access data locked with Tally Vault?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only if the company hands over the Vault password. Section 128(3) of the Companies Act 2013 gives directors a right of inspection of the books, and Section 143(1) gives the auditor access to books and vouchers at all times, so withholding the encryption key blocks the audit and invites a qualification. The key should sit with a director too."
          }
        }
      ]
    },
    {
      "@type": "Article",
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#article",
      "headline": "Tally Vault",
      "description": "",
      "inLanguage": "en-IN",
      "wordCount": 1048,
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#definedterm"
      },
      "mainEntityOfPage": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault",
      "name": "Tally Vault: Meaning and Example",
      "description": "",
      "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#definedterm"
      },
      "mainEntity": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#definedterm"
      },
      "keywords": [
        "Tally Vault",
        "what is Tally Vault",
        "tallyvault password",
        "tally vault meaning",
        "tally vault in accounting",
        "Accounting",
        "Bookkeeping"
      ],
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#breadcrumb"
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
      "@id": "https://www.patronaccounting.com/glossary/accounting/tally-vault#toc",
      "name": "On this page",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Definition",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#definition"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "What it is",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#what-is"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How it works",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#how-works"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "In software",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#software"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Example",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#example"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Mistakes",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#mistakes"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "FAQs",
          "url": "https://www.patronaccounting.com/glossary/accounting/tally-vault#faq-section"
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
  <section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary">Glossary</a><span class="sep">&rsaquo;</span><a href="/glossary/accounting">Accounting</a><span class="sep">&rsaquo;</span><span class="cur">Tally Vault</span></nav><div class="gl-cat">Accounting Glossary &middot; Core / Software</div><h1 class="gl-h1">Tally Vault</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>Last updated 22 Jul 2026</span><span class="sep">&middot;</span><span>5 min read</span><span class="sep">&middot;</span><span class="lvl">Intermediate</span></div></div></section>
  <div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#how-works" class="gl-pill">How it works</a><a href="#software" class="gl-pill">In software</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div>
  <div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Tally Vault: Definition</div><div class="definition-box"><p>Tally Vault (officially TallyVault) is a security feature that encrypts an entire company&#x27;s data in Tally so it cannot be read or opened without the vault password. It is set at company creation or applied to an existing company. It matters because it protects sensitive accounting data at rest — even someone with the data files cannot access the accounts without the password, and there is no way to recover a lost one.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Tally Vault?</h2><p>Tally Vault is Tally&#x27;s encryption layer for a company&#x27;s books. When enabled, the whole company database is encrypted and the company name itself is masked in the list, so the data is unreadable to anyone without the vault password. It is distinct from ordinary user logins: a normal password controls who can operate a company, while the vault password is what actually decrypts the underlying data.</p><p>An Indian business reaches for Tally Vault where the accounting data is genuinely sensitive — a Jaipur jeweller or a professional firm holding client financials on a shared machine. The trade-off is strict: TallyVault has no back door, so a forgotten vault password means the data cannot be recovered. That makes it powerful for confidentiality and unforgiving of poor password management, which is why it is paired with disciplined backups.</p><div class="key-terms"><p class="key-terms__title">Key terms</p><ul><li><a href="/glossary/accounting/tally-xml-export">Tally XML Export</a> — Exporting Tally data as XML for interchange or migration.</li><li><a href="/glossary/accounting/remote-tally-access">Remote Tally Access</a> — Accessing a Tally company securely from another location.</li><li><a href="/glossary/accounting/ledger-mapping-schema">Ledger Mapping Schema</a> — The map of source ledgers to destination accounts in a migration.</li></ul></div></section><section id="how-works" class="gl-sec"><h2>How Tally Vault Works</h2><p>Tally Vault wraps a company&#x27;s data in encryption tied to a password:</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>Choose to encrypt</strong><p>The vault is enabled either during company creation or later on an existing company — the decision point.</p></li><li class="step-card"><span class="step-num">2</span><strong>Set the vault password</strong><p>A strong password is set; this key, not a user login, is what encrypts and decrypts the data.</p></li><li class="step-card"><span class="step-num">3</span><strong>Company is encrypted</strong><p>Tally encrypts the database and masks the company name in the selection list.</p></li><li class="step-card"><span class="step-num">4</span><strong>Decrypt on open</strong><p>Opening the company requires the vault password; without it the data is unreadable.</p></li><li class="step-card"><span class="step-num">5</span><strong>Back up separately</strong><p>Because there is no password recovery, encrypted backups are kept so a lost password does not mean lost data — though the backup is itself vault-protected.</p></li></ol></section><section id="software" class="gl-sec"><h2>How to Set Up Tally Vault in Tally</h2><p>TallyVault can be set when creating a company or applied afterwards (TallyPrime; note the menu moved from Alt+F3 in Tally.ERP 9 to Alt+K in TallyPrime):</p><ol class="step-cards"><li class="step-card"><span class="step-num">1</span><strong>At company creation</strong><p>On the Create Company screen, in the Security section set &#x27;Set TallyVault password to encrypt company data&#x27; to Yes and enter a strong password.</p></li><li class="step-card"><span class="step-num">2</span><strong>For an existing company (open Company menu)</strong><p>From the Gateway of Tally, press Alt+K (Company).</p></li><li class="step-card"><span class="step-num">3</span><strong>Select TallyVault</strong><p>Choose TallyVault from the Company menu, then select the company you want to encrypt.</p></li><li class="step-card"><span class="step-num">4</span><strong>Set and confirm the password</strong><p>Enter and confirm the vault password; Tally creates a new encrypted company and preserves the original.</p></li><li class="step-card"><span class="step-num">5</span><strong>Verify the mask</strong><p>Confirm the company name now shows masked in the company list, indicating encryption is active.</p></li><li class="step-card"><span class="step-num">6</span><strong>Secure a backup</strong><p>Take and safely store a backup, remembering the vault password cannot be recovered if lost.</p></li></ol></section><section id="example" class="gl-sec"><h2>Tally Vault: A Practical Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Particulars</th><th>Amount (INR)</th><th>Treatment</th></tr></thead><tbody><tr><td>Company books value at risk</td><td>82,00,000</td><td>Sensitive turnover and party data</td></tr><tr><td>TallyVault enabled</td><td>—</td><td>Company data encrypted, name masked</td></tr><tr><td>Access without password</td><td>—</td><td>Data unreadable — protection working</td></tr><tr><td>Cost of a lost password</td><td>82,00,000 data</td><td>Unrecoverable — backups essential</td></tr></tbody></table></div><p>A Jaipur jeweller keeps ₹82,00,000 of turnover and client data in Tally on a shared office machine. Enabling TallyVault encrypts the company and masks its name, so even a person copying the data files cannot open the books without the vault password. The same feature is unforgiving: if the password is lost there is no recovery, which is why the firm pairs the vault with a disciplined, protected backup routine.</p></section><div class="gl-callout gl-callout--error"><span class="gl-callout__ic">!</span><div><div class="gl-callout__label">Common error</div><p>No record of the vault password: A forgotten password makes the data permanently unrecoverable → store the password securely and redundantly.</p></div></div><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Tally Vault</h2><p>TallyVault&#x27;s strength is also its risk if handled loosely:</p><ul class="gloss-bullets"><li><strong>No record of the vault password</strong> — A forgotten password makes the data permanently unrecoverable → store the password securely and redundantly.</li><li><strong>Confusing vault with user login</strong> — Assuming a user password protects the data leaves it unencrypted → use TallyVault for actual encryption, user roles for access control.</li><li><strong>No backups</strong> — Relying on a single encrypted copy risks total loss → keep regular, protected backups.</li><li><strong>Weak vault password</strong> — An easy password undermines the encryption → use a strong, unique password.</li></ul></section><section id="related" class="gl-sec"><h2>Related Accounting Terms</h2><p>Terms around Tally data handling:</p><ul class="related-terms"><li><a href="/glossary/accounting/tally-xml-export">Tally XML Export</a> — Exporting Tally data as XML.</li><li><a href="/glossary/accounting/remote-tally-access">Remote Tally Access</a> — Reaching a Tally company remotely.</li><li><a href="/glossary/accounting/ledger-mapping-schema">Ledger Mapping Schema</a> — Mapping source ledgers to destination accounts.</li><li><a href="/glossary/accounting">Accounting Terms Glossary</a> — Browse every accounting term in one place.</li></ul></section><div class="gl-callout gl-callout--summary"><span class="gl-callout__ic">&#10003;</span><div><div class="gl-callout__label">Quick summary</div><p>Tally Vault (officially TallyVault) is a security feature that encrypts an entire company&amp;#x27;s data in Tally so it cannot be read or opened without the vault password. It is set at company creation or applied to an existing company. It matters because it protects sensitive accounting data at rest — even someone with the data files cannot access the accounts without the password, and there is no way to recover a lost one.</p></div></div><section class="gl-cta"><div class="gl-cta__t"><h3>Need help with Tally Vault?</h3><p>Tally Vault sits inside your day-to-day books. Patron's CA-led team keeps them accurate, compliant and audit-ready.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/accounting-services">Accounting &amp; Bookkeeping Services in India &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Accounting &amp; Bookkeeping Services in India</div><p>CA-led bookkeeping, compliance and reporting for Indian businesses.</p><a class="gl-card__cta" href="/accounting-services">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/accounting">Accounting Terms Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div>
  <section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Tally Vault FAQs</h2><p class="faq-expanded__lead">Common questions about Tally Vault for Indian businesses.</p><a class="faq-expanded__cta" href="/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to a CA about your books</h3><p class="faq-enquiry__sub">Share your accounting software and we'll scope the work.</p><p class="faq-enquiry__context">Enquiring about: <strong>Tally Vault</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How to remove a Tally Vault password?</h3><div class="faq-expanded__a" id="faq-a1"><p>Open Tally, press Alt+F3 for company info, choose Change Tally Vault, select the company, enter the existing Vault password and leave the new password blank, then confirm. Tally rewrites the data into a fresh unencrypted company folder with a new company number. The old encrypted folder stays on disk and should be deleted only after the new one is verified.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between Tally Vault and a Tally company password?</h3><div class="faq-expanded__a" id="faq-a2"><p>A company password controls who can log in but leaves the data files readable, while Tally Vault encrypts the company data itself so the folder cannot be opened and the company name is not even visible without the key. Tally Vault has no recovery option, so a forgotten key means the data is lost permanently. Most businesses use both layers.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can a statutory auditor access data locked with Tally Vault?</h3><div class="faq-expanded__a" id="faq-a3"><p>Only if the company hands over the Vault password. Section 128(3) of the Companies Act 2013 gives directors a right of inspection of the books, and Section 143(1) gives the auditor access to books and vouchers at all times, so withholding the encryption key blocks the audit and invites a qualification. The key should sit with a director too.</p></div></div></div></div></section>
  <section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 22 Jul 2026 &nbsp;&middot;&nbsp; Next review 22 Jan 2027</div><div class="eeat-review__sources"><span>Official sources:</span> <a>Tally Solutions</a><a href="https://icai.org" target="_blank" rel="noopener">ICAI</a></div></div><p class="eeat-note">Applicable framework: Product guidance – TallyPrime (TallyVault); data-security practice; record retention under Companies Act 2013 (Section 128). For general information only, not professional advice. Verify the current position for your entity before acting.</p></div></section>
  <footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/accounting">&larr; Back to full glossary</a></div></footer>
</div>
@endverbatim
@endsection
