@extends('layouts.service-app')

@section('meta')
<title>Seconds and Rejects: Quality-Downgraded Textile Stock</title>
<meta name="description" content="Seconds and rejects are goods with defects that cannot be sold at full value. They must be identified and valued separately during a textile stock count.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/seconds-and-rejects">

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
            "name": "Seconds and Rejects",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/seconds-and-rejects"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/seconds-and-rejects/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/seconds-and-rejects/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How are seconds valued?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "At the price that grade can realistically achieve in the market, which is below first quality. Carrying seconds and rejects at full first-quality cost is one of the most common and most material overstatements found in textile inventory."
            }
        },
        {
            "@type": "Question",
            "name": "How should seconds be segregated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Physically separated and coded distinctly in the system, so they cannot be picked against a first-quality order. Marking without a separate code leaves the error possible at the pick face."
            }
        },
        {
            "@type": "Question",
            "name": "Who decides the grade of rejected stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Quality control, against defined criteria. Where grading is left to individual judgement at the point of packing, the same defect is graded differently over time and the valuation becomes unreliable."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Seconds and Rejects</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Seconds and Rejects</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Seconds and Rejects: Definition</div><div class="definition-box"><p>Seconds are goods carrying a defect that leaves them saleable at a reduced price, while rejects fail specification to the point of being unsaleable as the intended product. The distinction is a valuation boundary: seconds are carried at what the discounted channel will pay, and rejects at scrap or recovery value. Recording them together conceals which of the two the stock actually is.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Seconds and Rejects?</h2><p>Manufacturing produces output that falls short of specification, and the useful question is by how much. Goods with a visible flaw that a customer will accept at a lower price remain saleable merchandise, moving through discount channels, factory outlets or bulk buyers. Goods that fail the specification outright are not merchandise at all; they are material with a recovery value.</p><p>Grouping the two together is where valuation goes wrong, because they sit at opposite ends of the realisation range and combining them produces an average describing neither. The first is carried at what the discount channel actually pays, evidenced by what comparable goods realised previously; the second at scrap or reprocessing value. Both categories also attract attention for a control reason. Output diverted into the seconds category, or written off as rejects, leaves the ordinary sales flow, so a business whose reject rate drifts upward without a process change is describing something other than quality, and the trend rather than any individual entry is what supports the finding.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Seconds and Rejects and Why</h2><p>Any manufacturer produces both, but the terms carry commercial weight where a visible market for flawed goods exists.</p><ul class="gloss-bullets"><li>Textiles and garments, where a fabric fault or a stitching defect still leaves a saleable article at a lower price.</li><li>Ceramic tiles and sanitaryware, where grading into quality bands is standard trade practice with published price differentials.</li><li>Glass and crockery, sold through outlet channels on the same basis.</li><li>Footwear and leather goods, where cosmetic marks are common and tolerated at a discount.</li><li>Engineering and machined components, where the distinction is sharper: a part either meets tolerance or it is scrap, with far less middle ground.</li><li>In food and pharmaceuticals the category barely exists, since goods failing specification cannot be sold at any price.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Seconds and Rejects Works in Practice</h2><ol><li>Output is inspected against the quality specification at a defined point in the process, and anything failing is pulled from the main flow.</li></ol><ol><li>Each failed unit is classified. Where the defect is cosmetic or minor and a buyer will still take it at a reduced price, it becomes a second. Where the unit cannot serve its intended purpose, it is a reject.</li></ol><ol><li>The two are physically separated and recorded under different codes, since combining them produces a blended value describing neither.</li></ol><ol><li>Flawed but sellable units are carried at the price the clearance route genuinely returns, supported by what earlier disposals achieved, and are sold through a route that does not compete with the primary range. Rejects are valued at recovery or scrap value.</li></ol><ol><li>Rates are monitored over time. A failure rate drifting upward while the process is unchanged is treated as a control question rather than a quality one, and disposal routes are documented so value cannot leave outside the sales ledger.</li></ol></section><section id="example" class="gl-sec"><h2>Seconds and Rejects: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Grade</th><th>Units</th><th>Cost</th><th>Realisable</th><th>Carrying value</th></tr></thead><tbody><tr><td>A grade, first quality</td><td>8,400</td><td>Rs 420</td><td>Rs 690</td><td>Rs 35,28,000</td></tr><tr><td>Seconds, minor defects</td><td>960</td><td>Rs 420</td><td>Rs 250</td><td>Rs 2,40,000</td></tr><tr><td>Rejects, sold by weight</td><td>310</td><td>Rs 420</td><td>Rs 40</td><td>Rs 12,400</td></tr><tr><td>Total</td><td>9,670</td><td>-</td><td>-</td><td>Rs 37,80,400</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Carrying value</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Carrying value"><rect x="26" y="40" width="62" height="140" rx="5" fill="#14365F"/><text x="57" y="32" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">3,528,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">A grade, first q</text><rect x="114" y="170" width="62" height="10" rx="5" fill="#14365F"/><text x="145" y="162" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">240,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Seconds, minor d</text><rect x="202" y="177" width="62" height="3" rx="5" fill="#14365F"/><text x="233" y="169" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">12,400</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Rejects, sold by</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">3,780,400</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Total</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A ceramics unit near Morbi separates a production run into three grades at the end of the line.</p><p>Every unit cost the same to make, and that is the trap. Carrying all 9,670 units at the Rs 420 production cost would value the holding at Rs 40.61 lakh, Rs 2.81 lakh above what it will realise, because seconds and rejects are written down to what they will actually fetch. Seconds sell through a discount channel at a loss against cost but well above scrap. Rejects are sold by weight as material. The grading has to happen at production and be carried in the record, since a count taken weeks later cannot reliably tell a second from a first.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Seconds and Rejects</h2><p>Combining two categories with very different values is the root of most errors.</p><ul class="gloss-bullets"><li>Showing both under a single heading, which yields a blended figure fitting neither the sellable flawed units nor the material fit only for recovery.</li><li>Carrying rejects at the cost absorbed up to the point of failure, when their value is whatever the material recovers.</li><li>Grading optimistically to avoid a write-down, so goods classified as saleable seconds sit for years without moving.</li><li>Overlooking a failure rate climbing while the process stays put, which points somewhere other than quality and belongs to control.</li><li>Disposing of rejected output through informal channels, where value leaves the business without ever passing through the sales ledger.</li><li>Selling seconds through a channel that competes with the main range, which recovers value on the disposal and costs more on the primary line.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Unfinished cloth is where the process loss reconciliation starts, so <a href="/glossary/stock-audit/greige-fabric">greige fabric</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Seconds and Rejects?</h3><p>This page explains the idea. The practical question begins when substandard output has to be separated and valued, and settling it means fieldwork of the kind <a href="/stock-audit-for-textile">auditing fabric and apparel stock</a> sets out. Scope is built from the sites involved and the state of the underlying records.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-textile">auditing fabric and apparel stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/greige-fabric">greige fabric<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Seconds and Rejects FAQs</h2><p class="faq-expanded__lead">Common questions about Seconds and Rejects in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Seconds and Rejects</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How are seconds valued?</h3><div class="faq-expanded__a" id="faq-a1"><p>At the price that grade can realistically achieve in the market, which is below first quality. Carrying seconds and rejects at full first-quality cost is one of the most common and most material overstatements found in textile inventory.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How should seconds be segregated?</h3><div class="faq-expanded__a" id="faq-a2"><p>Physically separated and coded distinctly in the system, so they cannot be picked against a first-quality order. Marking without a separate code leaves the error possible at the pick face.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Who decides the grade of rejected stock?</h3><div class="faq-expanded__a" id="faq-a3"><p>Quality control, against defined criteria. Where grading is left to individual judgement at the point of packing, the same defect is graded differently over time and the valuation becomes unreliable.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
