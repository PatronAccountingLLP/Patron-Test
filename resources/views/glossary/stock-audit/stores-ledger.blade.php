@extends('layouts.service-app')

@section('meta')
<title>Stores Ledger: The Perpetual Record of Material Moves</title>
<meta name="description" content="The stores ledger is the running record of material receipts, issues and balances kept in the office. It is reconciled to bin cards and to physical stock.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/stores-ledger">

<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/glossary.css">
<link rel="stylesheet" href="/css/faq.css">
<script src="/js/glossary.js" defer></script>


<style>
/* faq.css sets a font on the components it names and lets the rest inherit, which works on
   live because the Blade layout sets Barlow on the page root. A standalone preview has no
   layout, so everything faq.css does not name explicitly fell back to the browser default
   serif: list items, answers, and every form control. The font belongs here, not in faq.css.
   Tag names are deliberately not written inside this comment - the porter splits head from
   body on those markers and a mention here would split the page in the wrong place. */
body{margin:0;font-family:'Barlow',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,
  sans-serif;color:#1F2937;background:#F8FAFC;-webkit-font-smoothing:antialiased}
input,button,select,textarea{font-family:inherit}
.pa-field{display:inline-block;padding:1px 7px;border-radius:5px;background:#FDEBDD;
  color:#B4530F;font-weight:600;font-size:.94em;white-space:nowrap}
.gloss-table-wrap{overflow-x:auto;margin:18px 0}
.gloss-table{width:100%;border-collapse:collapse;font-size:14.5px}
.gloss-table th,.gloss-table td{border:1px solid #E5E7EB;padding:10px 12px;text-align:left;
  vertical-align:top}
.gloss-table th{background:#F8FAFC;color:#14365F;font-weight:700}
.pa-offsite{text-decoration:underline;text-underline-offset:2px}
.pa-chart{margin:16px 0 22px;padding:16px 4px 6px;background:#F8FAFC;border:1px solid #E5E7EB;
  border-radius:14px}
.pa-chart figcaption{font-size:11.5px;font-weight:800;letter-spacing:.06em;
  text-transform:uppercase;color:#14365F;padding:0 14px 4px}
.pa-chart-scroll{overflow-x:auto}
.pa-chart svg{display:block;min-width:100%;max-width:100%;height:auto}
</style>
@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
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
            "name": "Stock Audit",
            "item": "https://www.patronaccounting.com/glossary/stock-audit"
        },
        {
            "@type": "ListItem",
            "position": 4,
            "name": "Stores Ledger",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/stores-ledger"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/stores-ledger/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/stores-ledger/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What should a stores ledger record?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Receipts, issues, returns and the running balance for each item, with the document reference for every movement. Without the document reference a variance cannot be traced and the ledger becomes a balance rather than a record."
            }
        },
        {
            "@type": "Question",
            "name": "How is the stores ledger tested during an audit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By tracing a sample of movements to supporting documents in both directions, and by comparing the balance to the physical count and to the bin card. Testing only the balance misses the process failure that produced it."
            }
        },
        {
            "@type": "Question",
            "name": "Who should maintain the stores ledger?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Someone other than the person with physical custody of the stock, so that recording and custody are separated. Where the same person does both, the ledger provides little independent assurance."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Stores Ledger</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Records and Evidence</div><h1 class="gl-h1">Stores Ledger</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#evidence" class="gl-pill">Evidence</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Stores Ledger: Definition</div><div class="definition-box"><p>A stores ledger is the accounting record of materials held, maintained by the accounts function from supporting documents and showing both quantity and value for each item, with receipts, issues and the running balance. Because it carries value as well as quantity, it is the record that links physical materials to the general ledger, and it is compiled from paperwork rather than at the point goods move.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Stores Ledger?</h2><p>The stores ledger is where materials stop being a physical matter and become an accounting one. Kept in the accounts office and written up from paperwork, it is the one record in a stores function that carries money as well as quantities, which is what lets material on the floor be tied back to the figures in the general ledger. Nothing else in the store does that job.</p><p>Because it is written up from paperwork rather than from movement, it is always slightly behind the physical position, and the gap widens wherever documents are slow to arrive or are never raised at all. That is not a defect so much as a characteristic, and it is why the ledger is reconciled periodically against the records kept at the bin and against a physical count. Where all three agree, the material control process is working; where the ledger alone disagrees, the failure is in the flow of documents between the store and the accounts office rather than on the floor.</p></section><section id="evidence" class="gl-sec"><h2>What an Auditor Accepts as Evidence of Stores Ledger</h2><p>The ledger is tested rather than accepted, because it is an internally produced record.</p><ul class="gloss-bullets"><li>Accepted: postings traced to the underlying goods receipt notes, issue documents and invoices, sampled by value and by movement.</li><li>Accepted: a reconciliation of the ledger's total to the general ledger, since a stores record that does not tie to the accounts supports nothing in them.</li><li>Accepted: agreement with a physical count, which is the only evidence in this area not generated inside the business.</li><li>Rejected: a balance carried forward with no supporting document, however consistent it looks across periods.</li><li>Rejected: an adjustment posted to make the ledger agree with a count, where the transactions responsible were never identified, since that conceals the control failure rather than correcting it.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Stores Ledger Works in Practice</h2><ol><li>Goods are received at the store and a goods receipt note is raised. The document travels to the accounts office.</li></ol><ol><li>The receipt is posted against the item, adding both quantity and value, and the running balance is updated.</li></ol><ol><li>Material issued to production or to a job generates an issue document, which follows the same path and is posted as a reduction, valued on whichever cost formula the business applies consistently.</li></ol><ol><li>The balance for each item is carried forward, and the totals across all items are reconciled to the inventory figure in the general ledger, which is the ledger's whole purpose.</li></ol><ol><li>From time to time the balance is set against the rack record and against an actual count. When all three differ, counting settles what is true, and the pattern of disagreement shows whether the fault sits in the store or in the paperwork chain.</li></ol></section><section id="example" class="gl-sec"><h2>Stores Ledger: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Date</th><th>Receipt</th><th>Issue</th><th>Balance</th><th>Rate</th><th>Value</th></tr></thead><tbody><tr><td>1 Aug</td><td>-</td><td>-</td><td>400 kg</td><td>Rs 310</td><td>Rs 1,24,000</td></tr><tr><td>6 Aug</td><td>600 kg</td><td>-</td><td>1,000 kg</td><td>Rs 328</td><td>Rs 3,20,800</td></tr><tr><td>14 Aug</td><td>-</td><td>750 kg</td><td>250 kg</td><td>-</td><td>Rs 80,200</td></tr><tr><td>22 Aug</td><td>500 kg</td><td>-</td><td>750 kg</td><td>Rs 335</td><td>Rs 2,47,700</td></tr><tr><td>29 Aug</td><td>-</td><td>300 kg</td><td>450 kg</td><td>-</td><td>Rs 1,48,700</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Value</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Value"><rect x="26" y="122" width="62" height="58" rx="5" fill="#14365F"/><text x="57" y="114" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">124,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">1 Aug</text><rect x="114" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="145" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">320,800</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">6 Aug</text><rect x="202" y="142" width="62" height="38" rx="5" fill="#14365F"/><text x="233" y="134" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">80,200</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">14 Aug</text><rect x="290" y="64" width="62" height="116" rx="5" fill="#14365F"/><text x="321" y="56" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">247,700</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">22 Aug</text><rect x="378" y="110" width="62" height="70" rx="5" fill="#E8712C"/><text x="409" y="102" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">148,700</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">29 Aug</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Faridabad forging unit maintains a running record for one alloy grade through August.</p><p>The ledger's distinguishing feature is the last two columns. It carries value alongside quantity, which a floor-level record does not, so it can be tied directly to the general ledger without an intermediate valuation. That is what makes it the document a verification starts from. It is also what makes it a derived record rather than a primary one: the entries are posted from receipts and issue notes, sometimes days later, so a ledger that agrees perfectly with the floor on the day of a count is confirming the posting discipline as much as the stock.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Stores Ledger</h2><p>The record is only as good as the paperwork reaching it, and that is where it fails.</p><ul class="gloss-bullets"><li>Posting from documents in batches long after the movements happened, so the ledger describes a position that is permanently several days stale.</li><li>Allowing issues to be made against verbal instruction with no slip raised, so material leaves and the ledger never learns of it.</li><li>Maintaining it in a different unit from the record kept at the rack, which produces a permanent divergence that looks like a quantity difference and is arithmetic.</li><li>Reconciling only at the year end, when a month's divergence can be traced to the documents that caused it and a year's cannot.</li><li>Adjusting to agree with a physical count without identifying the transactions responsible, which conceals the control failure and guarantees its recurrence.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The quantity-only record kept at the rack is the one to reconcile it against, so <a href="/glossary/stock-audit/bin-card">bin card</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Stores Ledger?</h3><p>Knowing the term is not the same as knowing the position. Where two records disagree and the physical stock has to settle it, the answer comes from a site rather than from a page, and that is what <a href="/stock-audit-for-engineering-machine-tools">stock audit for engineering plants</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-engineering-machine-tools">stock audit for engineering plants<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/bin-card">bin card<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Stores Ledger FAQs</h2><p class="faq-expanded__lead">Common questions about Stores Ledger in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Stores Ledger</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What should a stores ledger record?</h3><div class="faq-expanded__a" id="faq-a1"><p>Receipts, issues, returns and the running balance for each item, with the document reference for every movement. Without the document reference a variance cannot be traced and the ledger becomes a balance rather than a record.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is the stores ledger tested during an audit?</h3><div class="faq-expanded__a" id="faq-a2"><p>By tracing a sample of movements to supporting documents in both directions, and by comparing the balance to the physical count and to the bin card. Testing only the balance misses the process failure that produced it.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Who should maintain the stores ledger?</h3><div class="faq-expanded__a" id="faq-a3"><p>Someone other than the person with physical custody of the stock, so that recording and custody are separated. Where the same person does both, the ledger provides little independent assurance.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
