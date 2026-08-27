{{-- /glossary/networth
     Generated from Generated Glossary/glossary-networth/glossary-networth.html by
     Scripts/build_glossary_page.py. Nothing here is authored: the copy is the
     GLOSSARY-DEFINITIONS and FAQ workbooks', the links are the Interlinking
     workbook's, the schema is SEO Infra's. Re-run the build; do not edit this.

     This is a SUPPORTING page. It carries no form, no price and no phone CTA
     by design - the service page owns commercial intent. The build fails if
     any of those appear. --}}
@extends('layouts.service-app')

@section('meta')
    <title>Net Worth and Solvency Glossary for Indian CA Work</title>
    <meta name="description" content="Definitions of the net worth, solvency and net owned fund terms that appear on CA certificates in India, grouped by what each term actually affects.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary/networth">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="The Net Worth and Solvency Glossary from Patron Accounting">
    <meta property="og:description" content="Every term a chartered accountant uses on a net worth or solvency certificate in India, defined in one place.">
    <meta property="og:url" content="https://www.patronaccounting.com/glossary/networth">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Net Worth and Solvency Glossary from Patron Accounting">
    <meta name="twitter:description" content="Every term a chartered accountant uses on a net worth or solvency certificate in India, defined in one place.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">@include('partials.glossary-inline-assets')
@endsection

@section('schema')
    <script type="application/ld+json">{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "DefinedTermSet",
   "@id": "https://www.patronaccounting.com/glossary/networth#termset",
   "name": "Net Worth and Solvency Glossary for Indian CA Work",
   "description": "Definitions of the net worth, solvency and net owned fund terms that appear on CA certificates in India, grouped by what each term actually affects.",
   "url": "https://www.patronaccounting.com/glossary/networth",
   "hasDefinedTerm": [
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/adjusted-net-worth#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/annual-information-statement-ais#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/apostille#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/attestation#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/bank-guarantee-bg#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/blocked-account#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/capital-to-risk-weighted-assets-ratio-crar#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/certificate-of-practice-cop#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/circle-rate#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/collateral#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/contingent-liability#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/credit-information-report-cibil#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/debt-service-coverage-ratio-dscr#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/debt-to-equity-ratio#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/earnest-money-deposit-emd#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/encumbrance-certificate#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/fair-market-value-fmv#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/foreign-inward-remittance-certificate-firc#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/form-15cb#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/form-26as#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/free-reserves#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/hypothecation#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/legal-heir-certificate#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/letter-of-credit-lc#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/liberalised-remittance-scheme-lrs#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/lien#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/liquid-assets#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/liquidity#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/loan-to-value-ratio-ltv#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/management-representation-letter#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/margin-money#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/moratorium#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/mortgage#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/net-worth-erosion#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/performance-guarantee#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/pledge#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/proof-of-funds-pof#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/revaluation-reserve#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/securities-premium#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/slump-sale#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/solvency-ratio#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/source-of-funds#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/stamp-duty#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/statement-of-affairs#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/succession-certificate#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/surety#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/tangible-net-worth#term"
    },
    {
     "@id": "https://www.patronaccounting.com/glossary/networth/tier-i-capital#term"
    }
   ]
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://www.patronaccounting.com/glossary/networth#breadcrumb",
   "itemListElement": [
    {
     "@type": "ListItem",
     "position": 1,
     "name": "Home",
     "item": "https://www.patronaccounting.com"
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
     "name": "Net Worth & Solvency Glossary",
     "item": "https://www.patronaccounting.com/glossary/networth"
    }
   ]
  },
  {
   "@type": "FAQPage",
   "@id": "https://www.patronaccounting.com/glossary/networth#faq",
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-07-30T10:00:00+05:30",
   "mainEntity": [
    {
     "@type": "Question",
     "name": "Which terms does a net worth and solvency glossary define?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "It defines the vocabulary that appears on net worth, solvency and net owned fund certificates. That spans four groups: how net worth is computed, how certification works, the terms lenders and courts use, and the documents a chartered accountant reads as evidence. Each entry defines one term and links to the page where the term is applied."
     }
    },
    {
     "@type": "Question",
     "name": "Why do lenders, embassies and regulators define net worth differently?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Because each is measuring a different risk. Section 2(57) of the Companies Act 2013 gives a statutory definition for companies. The Reserve Bank applies its own net owned fund formula to NBFCs. A lender strips intangibles to reach tangible net worth. The arithmetic is similar; the inclusions and deductions are not."
     }
    },
    {
     "@type": "Question",
     "name": "Are these definitions the same as the ones in a certificate?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "They explain the terms; the certificate states which definition it applied. A document issued for a Reserve Bank filing follows the regulator's computation, while one for a tender follows the tender's condition. Reading a glossary entry tells you what a term means, not which meaning a particular certificate adopted."
     }
    }
   ]
  },
  {
   "@type": "WebPage",
   "@id": "https://www.patronaccounting.com/glossary/networth#webpage",
   "url": "https://www.patronaccounting.com/glossary/networth",
   "name": "Net Worth and Solvency Glossary for Indian CA Work",
   "description": "Definitions of the net worth, solvency and net owned fund terms that appear on CA certificates in India, grouped by what each term actually affects.",
   "about": {
    "@id": "https://www.patronaccounting.com/glossary/networth#termset"
   },
   "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
   },
   "publisher": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-07-30T10:00:00+05:30"
  }
 ]
}</script>
@endsection


@section('content')
<style>
/* glossary.css supplies the hub wholesale: hero, search, filter pills, group heads, blurbs, the
   card grid and the no-results block. Only two things are left over.

   1. The outline gives this hub ONE H2, so the eight category heads are h3. glossary.css sizes
      .glh2-group__head h2, so the same size is restated for h3 - a tag swap, not a new style.
   2. The anchored definitions have no equivalent in the accounting glossary, where all 140 terms
      have their own page. That block is namespaced nwg- so it can never collide with glossary.css. */
.glh2-group__head h3{font-size:26px;font-weight:800;color:#1B365D;margin:0}

/* One row of filters. This cluster has nine pills against the accounting hub's six, and at the
   shared padding they came to 1333px inside a 1320px wrap - overflowing by 13px and wrapping a
   single pill onto a second line. Trimming the horizontal padding and the gap brings the row to
   about 1230px, so it fits from 1280 up. Below that it stays one row and scrolls sideways,
   which is what .glh2-filters already does (overflow-x:auto); the scrollbar is hidden because
   the row is short enough to swipe. */
.glh2-filterbar .glh2-filters{flex-wrap:nowrap;gap:8px;scrollbar-width:none;-ms-overflow-style:none}
.glh2-filterbar .glh2-filters::-webkit-scrollbar{display:none}
.glh2-filterbar .glh2-fpill{padding:10px 15px;gap:6px;flex:0 0 auto}
/* the accounting hub puts trust badges between the search box and whatever follows; this one
   goes straight to the byline, which then sits flush against the input */
.glh2-search+.gl-byline{margin-top:18px}

.nwg-defs{border:1px solid #E5E7EB;border-left:4px solid #E8712C;border-radius:0 12px 12px 0;
  background:#F9FAFB;padding:6px 22px 4px;margin-top:18px}
.nwg-defs__k{font-size:11px;font-weight:800;letter-spacing:.09em;text-transform:uppercase;
  color:#E8712C;padding:14px 0 4px}
.nwg-dl{margin:0;padding:0}
.nwg-dl dt{font-size:15.5px;font-weight:700;color:#14365F;padding:14px 0 4px;scroll-margin-top:150px}
.nwg-dl dt:first-of-type{padding-top:6px}
.nwg-dl dt a{color:#14365F;text-decoration:none}
.nwg-dl dd{margin:0 0 14px;font-size:14.5px;line-height:1.66;color:#4B5563;
  border-bottom:1px solid #E5E7EB;padding-bottom:14px}
.nwg-dl dd:last-child{border-bottom:0}
/* the jump target the 146 inbound anchor links land on */
.nwg-dl dt:target{background:#FEF4EE;border-radius:6px;box-shadow:0 0 0 8px #FEF4EE}
@media(max-width:640px){.nwg-defs{padding:6px 16px 4px}}
</style>
<main>
<div class="gl-page">
  <section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain">
    <div class="gl-cat">48 terms &middot; CA-reviewed definitions</div>
    <h1 class="gl-h1">Net Worth and Solvency Glossary for Indian CA Certificates</h1>
    <p class="glh2-lead">Definitions of the net worth, solvency and net owned fund terms that appear on CA certificates in India, grouped by what each term actually affects.</p>
    <div class="glh2-search"><span class="ic"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.3-4.3"/></svg></span><input id="glh2-search" type="text" autocomplete="off" placeholder="Search 48 net worth and solvency terms - try &lsquo;lien&rsquo;, &lsquo;solvency&rsquo;, &lsquo;apostille&rsquo;&hellip;"></div>
    <div class="gl-herobadges">
      <span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Indian statute and RBI practice</span>
      <span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA &amp; CS reviewed</span>
      <span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Updated for FY 2026-27</span>
      <span class="gl-hb"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Free to use</span>
    </div>
    <div class="gl-popular"><span class="gl-popular__l">Popular</span>
      <a href="/glossary/networth/capital-to-risk-weighted-assets-ratio-crar">Capital to Risk-weighted Assets Ratio (CRAR)</a>
      <a href="/glossary/networth/foreign-inward-remittance-certificate-firc">Foreign Inward Remittance Certificate (FIRC)</a>
      <a href="/glossary/networth/loan-to-value-ratio-ltv">Loan-to-Value Ratio (LTV)</a>
      <a href="/glossary/networth/certificate-of-practice-cop">Certificate of Practice (COP)</a>
      <a href="/glossary/networth/debt-service-coverage-ratio-dscr">Debt Service Coverage Ratio (DSCR)</a>
      <a href="/glossary/networth/debt-to-equity-ratio">Debt-to-Equity Ratio</a>
      <a href="/glossary/networth/encumbrance-certificate">Encumbrance Certificate</a>
    </div>
  </div>
  <aside class="gl-herocta">
    <div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
    <h3>Prefer a CA to certify it?</h3>
    <p>CA-signed net worth, solvency and net owned fund certificates for banks, consulates, courts and regulators across India.</p>
    <a class="gl-herocta__btn" href="/contact-us">Talk to an Expert &rarr;</a>
    <div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; 3,000+ businesses served</div>
  </aside>
  </div></section>
  <div class="glh2-filterbar"><div class="gl-wrap glh2-filters">
    <button type="button" class="glh2-fpill is-active" data-cat="all">All terms<span class="c">48</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-net-worth-mechanics">Net Worth Mechanics<span class="c">10</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-certification">Certification<span class="c">4</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-visa-finance">Visa Finance<span class="c">6</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-lending">Lending<span class="c">9</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-solvency-courts">Solvency &amp; Courts<span class="c">7</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-entity-finance">Entity Finance<span class="c">5</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-nbfc-rbi">NBFC &amp; RBI<span class="c">2</span></button>
    <button type="button" class="glh2-fpill" data-cat="cat-documents">Documents<span class="c">5</span></button>
  </div></div>
  <div class="glh2-body"><div class="gl-wrap">
    <h2 class="glh2-h2">Terms Grouped by What They Affect</h2>
    <section class="glh2-group" id="cat-net-worth-mechanics" data-group="cat-net-worth-mechanics">
      <div class="glh2-group__head"><h3>Net Worth Mechanics</h3><span class="c"><span class="glh2-livecount">10</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/tangible-net-worth" class="glh2-card" data-term="tangible net worth"><span class="glh2-card__t">Tangible Net Worth</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/adjusted-net-worth" class="glh2-card" data-term="adjusted net worth"><span class="glh2-card__t">Adjusted Net Worth</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/contingent-liability" class="glh2-card" data-term="contingent liability"><span class="glh2-card__t">Contingent Liability</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/liquid-assets" class="glh2-card" data-term="liquid assets"><span class="glh2-card__t">Liquid Assets</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/lien" class="glh2-card" data-term="lien"><span class="glh2-card__t">Lien</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/pledge" class="glh2-card" data-term="pledge"><span class="glh2-card__t">Pledge</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/hypothecation" class="glh2-card" data-term="hypothecation"><span class="glh2-card__t">Hypothecation</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/mortgage" class="glh2-card" data-term="mortgage"><span class="glh2-card__t">Mortgage</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/fair-market-value-fmv" class="glh2-card" data-term="fair market value (fmv)"><span class="glh2-card__t">Fair Market Value (FMV)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/statement-of-affairs" class="glh2-card" data-term="statement of affairs"><span class="glh2-card__t">Statement of Affairs</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-certification" data-group="cat-certification">
      <div class="glh2-group__head"><h3>Certification</h3><span class="c"><span class="glh2-livecount">4</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/certificate-of-practice-cop" class="glh2-card" data-term="certificate of practice (cop)"><span class="glh2-card__t">Certificate of Practice (COP)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/attestation" class="glh2-card" data-term="attestation"><span class="glh2-card__t">Attestation</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/management-representation-letter" class="glh2-card" data-term="management representation letter"><span class="glh2-card__t">Management Representation Letter</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/form-15cb" class="glh2-card" data-term="form 15cb"><span class="glh2-card__t">Form 15CB</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-visa-finance" data-group="cat-visa-finance">
      <div class="glh2-group__head"><h3>Visa Finance</h3><span class="c"><span class="glh2-livecount">6</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/proof-of-funds-pof" class="glh2-card" data-term="proof of funds (pof)"><span class="glh2-card__t">Proof of Funds (POF)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/blocked-account" class="glh2-card" data-term="blocked account"><span class="glh2-card__t">Blocked Account</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/source-of-funds" class="glh2-card" data-term="source of funds"><span class="glh2-card__t">Source of Funds</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/liberalised-remittance-scheme-lrs" class="glh2-card" data-term="liberalised remittance scheme (lrs)"><span class="glh2-card__t">Liberalised Remittance Scheme (LRS)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/foreign-inward-remittance-certificate-firc" class="glh2-card" data-term="foreign inward remittance certificate (firc)"><span class="glh2-card__t">Foreign Inward Remittance Certificate (FIRC)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/apostille" class="glh2-card" data-term="apostille"><span class="glh2-card__t">Apostille</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-lending" data-group="cat-lending">
      <div class="glh2-group__head"><h3>Lending</h3><span class="c"><span class="glh2-livecount">9</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/collateral" class="glh2-card" data-term="collateral"><span class="glh2-card__t">Collateral</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/margin-money" class="glh2-card" data-term="margin money"><span class="glh2-card__t">Margin Money</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/loan-to-value-ratio-ltv" class="glh2-card" data-term="loan-to-value ratio (ltv)"><span class="glh2-card__t">Loan-to-Value Ratio (LTV)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/debt-service-coverage-ratio-dscr" class="glh2-card" data-term="debt service coverage ratio (dscr)"><span class="glh2-card__t">Debt Service Coverage Ratio (DSCR)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/moratorium" class="glh2-card" data-term="moratorium"><span class="glh2-card__t">Moratorium</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/bank-guarantee-bg" class="glh2-card" data-term="bank guarantee (bg)"><span class="glh2-card__t">Bank Guarantee (BG)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/letter-of-credit-lc" class="glh2-card" data-term="letter of credit (lc)"><span class="glh2-card__t">Letter of Credit (LC)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/credit-information-report-cibil" class="glh2-card" data-term="credit information report (cibil)"><span class="glh2-card__t">Credit Information Report (CIBIL)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/debt-to-equity-ratio" class="glh2-card" data-term="debt-to-equity ratio"><span class="glh2-card__t">Debt-to-Equity Ratio</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-solvency-courts" data-group="cat-solvency-courts">
      <div class="glh2-group__head"><h3>Solvency &amp; Courts</h3><span class="c"><span class="glh2-livecount">7</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/solvency-ratio" class="glh2-card" data-term="solvency ratio"><span class="glh2-card__t">Solvency Ratio</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/liquidity" class="glh2-card" data-term="liquidity"><span class="glh2-card__t">Liquidity</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/earnest-money-deposit-emd" class="glh2-card" data-term="earnest money deposit (emd)"><span class="glh2-card__t">Earnest Money Deposit (EMD)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/performance-guarantee" class="glh2-card" data-term="performance guarantee"><span class="glh2-card__t">Performance Guarantee</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/surety" class="glh2-card" data-term="surety"><span class="glh2-card__t">Surety</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/succession-certificate" class="glh2-card" data-term="succession certificate"><span class="glh2-card__t">Succession Certificate</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/legal-heir-certificate" class="glh2-card" data-term="legal heir certificate"><span class="glh2-card__t">Legal Heir Certificate</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-entity-finance" data-group="cat-entity-finance">
      <div class="glh2-group__head"><h3>Entity Finance</h3><span class="c"><span class="glh2-livecount">5</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/free-reserves" class="glh2-card" data-term="free reserves"><span class="glh2-card__t">Free Reserves</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/securities-premium" class="glh2-card" data-term="securities premium"><span class="glh2-card__t">Securities Premium</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/revaluation-reserve" class="glh2-card" data-term="revaluation reserve"><span class="glh2-card__t">Revaluation Reserve</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/slump-sale" class="glh2-card" data-term="slump sale"><span class="glh2-card__t">Slump Sale</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/net-worth-erosion" class="glh2-card" data-term="net worth erosion"><span class="glh2-card__t">Net Worth Erosion</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-nbfc-rbi" data-group="cat-nbfc-rbi">
      <div class="glh2-group__head"><h3>NBFC &amp; RBI</h3><span class="c"><span class="glh2-livecount">2</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/tier-i-capital" class="glh2-card" data-term="tier i capital"><span class="glh2-card__t">Tier I Capital</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/capital-to-risk-weighted-assets-ratio-crar" class="glh2-card" data-term="capital to risk-weighted assets ratio (crar)"><span class="glh2-card__t">Capital to Risk-weighted Assets Ratio (CRAR)</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <section class="glh2-group" id="cat-documents" data-group="cat-documents">
      <div class="glh2-group__head"><h3>Documents</h3><span class="c"><span class="glh2-livecount">5</span> terms</span></div>
      <div class="glh2-grid">
        <a href="/glossary/networth/form-26as" class="glh2-card" data-term="form 26as"><span class="glh2-card__t">Form 26AS</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/annual-information-statement-ais" class="glh2-card" data-term="annual information statement (ais)"><span class="glh2-card__t">Annual Information Statement (AIS)</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/circle-rate" class="glh2-card" data-term="circle rate"><span class="glh2-card__t">Circle Rate</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/encumbrance-certificate" class="glh2-card" data-term="encumbrance certificate"><span class="glh2-card__t">Encumbrance Certificate</span><span class="glh2-card__v">View definition &rarr;</span></a>
        <a href="/glossary/networth/stamp-duty" class="glh2-card" data-term="stamp duty"><span class="glh2-card__t">Stamp Duty</span><span class="glh2-card__v">View definition &rarr;</span></a>
      </div>
    </section>
    <div id="glh2-noresults" class="glh2-noresults" style="display:none"><b>No term matches that.</b>Try a shorter word, or clear the category filter.</div>
  </div></div>
  <div class="gl-wrap"><div class="glh2-cta">
    <div class="glh2-cta__l"><div class="glh2-cta__ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
      <div><h3>Net Worth Certificate by CA</h3></div></div>
    <a class="glh2-cta__btn" href="/net-worth-certificate-by-ca">More about net worth certificate by ca &rarr;</a>
  </div></div>
</div>
</main>
@endsection
