@extends('layouts.service-app')

@section('meta')
<title>Net Realisable Value: The Lower-of Test Under AS 2</title>
<meta name="description" content="Net realisable value is the expected selling price less the costs to complete and sell. AS 2 requires stock to be carried at the lower of cost and NRV.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/net-realisable-value">

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



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6G3R8G');</script>
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
            "name": "Net Realisable Value (NRV)",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/net-realisable-value"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/net-realisable-value/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/net-realisable-value/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is net realisable value calculated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Estimated selling price in the ordinary course of business, less the costs still to be incurred to complete and sell the item. It is an entity-specific estimate, not a market price."
            }
        },
        {
            "@type": "Question",
            "name": "When does NRV fall below cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "When the item is damaged, obsolete, superseded, or when selling prices have fallen. Inventory is then written down to NRV, and the write-down is recognised in the period the value fell rather than when the stock is finally sold."
            }
        },
        {
            "@type": "Question",
            "name": "Is NRV assessed item by item?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Generally yes, or by group where items are related and cannot sensibly be valued separately. Assessing NRV across the whole inventory in aggregate hides individual write-downs behind items carrying a margin."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6G3R8G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Net Realisable Value (NRV)</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Valuation and Provisioning</div><h1 class="gl-h1">Net Realisable Value (NRV)</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#valuation" class="gl-pill">Valuation</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Net Realisable Value (NRV): Definition</div><div class="definition-box"><p>Net realisable value is the price an item is expected to fetch in the ordinary course of business, less the costs still to be incurred to complete it and to sell it. Inventory is carried at the lower of cost and this figure, so where realisable value falls below cost the difference is written down. The estimate is made for the goods in their actual present condition.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Net Realisable Value (NRV)?</h2><p>Inventory is one of the few assets whose carrying value is capped by what it will fetch rather than by what it cost, and the rule exists because goods can lose their market while remaining physically intact. Measurement rests on the goods as they actually stand at the reporting date, supported by evidence of what the relevant market will pay rather than a policy percentage applied for convenience.</p><p>Two features of the calculation are frequently missed. The costs to sell are deducted, so a realisable value equal to cost still produces a write-down once transport, handling and any commission to the clearance channel are taken into account. And the assessment is made item by item rather than across the inventory as a whole, except where items in the same product line have similar purposes and can reasonably be grouped, which prevents a profitable line from concealing a loss-making one. Where a write-down is later reversed because the market has recovered, the reversal is limited to what was originally written down.</p></section><section id="compliance" class="gl-sec"><h2>Net Realisable Value (NRV) Under Indian Law</h2><p>Position: measurement is capped by realisation. Inventories are stated at whichever is less, what they cost or what they will bring in. That second figure is the price expected on a normal sale, reduced by whatever remains to be spent finishing the goods and getting them sold.</p><ul class="gloss-bullets"><li>The comparison is ordinarily made item by item, though items inside a single range doing much the same job may be grouped where that is defensible.</li><li>Source: paragraph 5 of Accounting Standard 2 for entities applying the Accounting Standards, and paragraph 9 of Ind AS 2 for those applying Indian Accounting Standards.</li><li>Note: the estimate is made against the condition the goods are actually in at the reporting date. A blanket percentage, applied without support for the price the goods will actually command, does not meet the basis.</li></ul></section><section id="valuation" class="gl-sec"><h2>How Net Realisable Value (NRV) Is Measured and Valued</h2><p>The basis is expected selling price, less costs of completion, less costs necessary to make the sale.</p><ul class="gloss-bullets"><li>Take a finished line held at a cost of 400 per unit. The clearance channel that will take it is currently paying 360. Transport to that channel runs at 15 per unit and the channel's commission at 25.</li><li>Selling price 360, less completion nil since the goods are finished, less selling costs of 40, gives a realisable figure of 320.</li><li>Against a cost of 400 that is a shortfall of 80 per unit, and the carrying amount comes down to 320 with 80 taken to the profit and loss account in the period the fall occurred.</li><li>Every input is named and evidenced: the 360 from prices actually achieved on comparable goods, the 15 from the freight rate, the 25 from the channel agreement. A percentage applied by policy evidences none of them.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Net Realisable Value (NRV) Works in Practice</h2><ol><li>Inventory is grouped for assessment. The unit is the individual item, unless several lines within one range do much the same job and grouping them is defensible.</li></ol><ol><li>For each unit the price the goods should fetch through normal trading is fixed from evidence: prices recently achieved, offers held, or a documented assessment where no market transaction exists.</li></ol><ol><li>Costs still to be incurred are deducted. Where the goods need finishing, the cost of completion comes off; so does everything necessary to make the sale, including transport, handling and any channel margin.</li></ol><ol><li>The resulting figure is compared with cost, and the lower of the two becomes the carrying amount. Any reduction is charged as an expense in the period the value fell.</li></ol><ol><li>At a later reporting date the assessment is repeated. Where circumstances have reversed, the earlier write-down is reversed, but only up to the amount originally written down.</li></ol></section><section id="example" class="gl-sec"><h2>Net Realisable Value (NRV): A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Line</th><th>Per unit</th><th>1,200 units</th></tr></thead><tbody><tr><td>Cost</td><td>Rs 4,800</td><td>Rs 57,60,000</td></tr><tr><td>Expected selling price</td><td>Rs 5,100</td><td>Rs 61,20,000</td></tr><tr><td>Less: rework to make saleable</td><td>Rs 340</td><td>Rs 4,08,000</td></tr><tr><td>Less: freight and selling cost</td><td>Rs 260</td><td>Rs 3,12,000</td></tr><tr><td>Net realisable value</td><td>Rs 4,500</td><td>Rs 54,00,000</td></tr><tr><td>Write-down required</td><td>Rs 300</td><td>Rs 3,60,000</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>1,200 units</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 554 210" width="554" height="210" role="img" aria-label="1,200 units"><rect x="26" y="39" width="62" height="141" rx="5" fill="#14365F"/><text x="57" y="31" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">5,760,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Cost</text><rect x="114" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="145" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">6,120,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Expected selling</text><rect x="202" y="170" width="62" height="10" rx="5" fill="#14365F"/><text x="233" y="162" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">408,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Less: rework to </text><rect x="290" y="172" width="62" height="8" rx="5" fill="#14365F"/><text x="321" y="164" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">312,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Less: freight an</text><rect x="378" y="48" width="62" height="132" rx="5" fill="#14365F"/><text x="409" y="40" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">5,400,000</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Net realisable v</text><rect x="466" y="171" width="62" height="9" rx="5" fill="#E8712C"/><text x="497" y="163" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">360,000</text><text x="497" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Write-down requi</text><line x1="0" y1="181" x2="554" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Baddi appliance maker holds 1,200 units of a superseded model. The selling price still sits above cost, which is why the position looks safe until the deductions are made.</p><p>The two subtractions decide the answer. Rework and selling costs of Rs 600 a unit pull the realisable figure below the Rs 4,800 cost, so a Rs 3.60 lakh write-down is required even though the goods will sell at a headline profit. Selling price on its own is not the test. The comparison is cost against price minus whatever must yet be spent to finish the goods and move them, and it is made line by line rather than across the whole category, because a profitable line cannot be used to absorb a loss-making one.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Net Realisable Value (NRV)</h2><p>The measurement is straightforward and the application is where it goes wrong.</p><ul class="gloss-bullets"><li>Forgetting to deduct the costs of selling, so goods expected to fetch exactly what they cost are treated as needing no reduction, before transport, handling and channel margin come off.</li><li>Assessing across the whole inventory rather than item by item, which lets a profitable line conceal a loss-making one.</li><li>Using a policy percentage instead of evidence of what the goods will fetch, when prior realisations and offers received are available and objective.</li><li>Estimating on the goods as they were rather than as they actually are, ignoring damage, ageing or a broken assortment.</li><li>Reversing a previous write-down beyond the amount originally written down, which pushes the carrying value above original cost and is not permitted.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The category that most often needs this test applied is the slow-moving one, so <a href="/glossary/stock-audit/slob-stock">slow-moving and obsolete stock (slob)</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Net Realisable Value (NRV)?</h3><p>Understanding the term is the easy half. The harder half arrives when a carrying value has to be supported rather than asserted, and it is answered on site rather than on paper. <a href="/stock-audit">how we run a stock audit</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">how we run a stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/slob-stock">slow-moving and obsolete stock (slob)<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Net Realisable Value (NRV) FAQs</h2><p class="faq-expanded__lead">Common questions about Net Realisable Value (NRV) in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Net Realisable Value (NRV)</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is net realisable value calculated?</h3><div class="faq-expanded__a" id="faq-a1"><p>Estimated selling price in the ordinary course of business, less the costs still to be incurred to complete and sell the item. It is an entity-specific estimate, not a market price.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">When does NRV fall below cost?</h3><div class="faq-expanded__a" id="faq-a2"><p>When the item is damaged, obsolete, superseded, or when selling prices have fallen. Inventory is then written down to NRV, and the write-down is recognised in the period the value fell rather than when the stock is finally sold.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Is NRV assessed item by item?</h3><div class="faq-expanded__a" id="faq-a3"><p>Generally yes, or by group where items are related and cannot sensibly be valued separately. Assessing NRV across the whole inventory in aggregate hides individual write-downs behind items carrying a margin.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
