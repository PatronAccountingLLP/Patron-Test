@extends('layouts.service-app')

@section('meta')
<title>Componentisation: Splitting an Asset by Useful Life</title>
<meta name="description" content="Componentisation splits a large asset into parts with different useful lives, each depreciated separately. Schedule II requires it where parts are material.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/componentisation">

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
            "name": "Componentisation",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/componentisation"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/componentisation/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/componentisation/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "When is componentisation required?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Where a part of an asset has a cost significant relative to the total and a materially different useful life from the rest. That component is then depreciated separately over its own life."
            }
        },
        {
            "@type": "Question",
            "name": "How does componentisation affect verification?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It requires that components identified in the register can actually be distinguished physically. Registers that split assets on paper into components nobody can point to on the ground fail at the first verification."
            }
        },
        {
            "@type": "Question",
            "name": "What happens when a component is replaced?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The carrying value of the old component is derecognised and the new one capitalised. Where components were never separately identified, the replacement is often expensed and the original cost left depreciating, which misstates both."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Componentisation</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Fixed Assets and Tagging</div><h1 class="gl-h1">Componentisation</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#assets" class="gl-pill">Applied to assets</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Componentisation: Definition</div><div class="definition-box"><p>Componentisation is the practice of splitting a single asset into parts that are depreciated separately because they have significantly different useful lives and each part's cost is significant relative to the whole. It matters at replacement: where a component is recorded separately, replacing it removes the old part's remaining value and capitalises the new one, instead of adding cost to an asset that was never split.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Componentisation?</h2><p>Treating a large asset as one indivisible item produces an arithmetic problem the moment part of it is replaced. A furnace lining that lasts three years inside a furnace that lasts twenty, or an aircraft engine inside an airframe, will be replaced several times over the parent asset's life, and each replacement adds cost to an asset whose original cost still includes the part being thrown away.</p><p>Splitting them at the outset avoids that. Each significant part with a materially different life is recorded and depreciated separately, so swapping a part strips out whatever the old one still carried and brings the replacement in cleanly. The threshold is twofold: the lives must differ significantly and the part's cost must be significant relative to the whole, which keeps the exercise from fragmenting a register into unmanageable detail. At a verification the practical test is whether replacements have actually been accounted for this way, since a register that was componentised on paper and then treated as a single asset in practice carries the same double-counting.</p></section><section id="compliance" class="gl-sec"><h2>Componentisation Under Indian Law</h2><p>Position: component accounting is mandatory rather than optional. Where part of an item of property, plant and equipment has a cost significant in relation to the total cost of the item, and a useful life materially different from the rest, that part is depreciated separately.</p><ul class="gloss-bullets"><li>The requirement took effect for financial years beginning on or after 1 April 2015.</li><li>Source: Schedule II to the Companies Act 2013, Part A.</li><li>Note: what counts as significant is a judgement, and it needs a stated policy applied consistently rather than decided asset by asset. The point at which the treatment is tested is replacement, since the carrying amount of the part being replaced must be removed rather than left inside the parent asset's cost.</li></ul></section><section id="assets" class="gl-sec"><h2>How Componentisation Applies to a Fixed Asset Register</h2><p>This is a structural decision about how lines are created, and it is far cheaper to take at capitalisation than afterwards.</p><ul class="gloss-bullets"><li>One physical asset becomes several register lines, each carrying its own identifier, cost allocation, life and rate.</li><li>The lines are linked to a parent reference so the whole asset can still be reported as one item where that is wanted.</li><li>On replacement, the outgoing component's line is closed and its remaining balance removed, and a new line opens for the part fitted, which is the movement the whole approach exists to permit.</li><li>Physical labelling usually stays at parent level, since a component inside a machine cannot carry a readable tag, so verification confirms the parent and the component split is evidenced from the records.</li><li>A register componentised on paper but maintained as single assets carries the same double counting it was meant to prevent.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Componentisation Works in Practice</h2><ol><li>At capitalisation the asset is examined for elements that account for a real share of the total outlay and that will wear out on a noticeably different timetable.</li></ol><ol><li>Where both conditions hold, the cost is allocated between the parts, using the supplier's breakdown where one exists and a reasoned apportionment where it does not.</li></ol><ol><li>Each part is recorded as its own register line with its own life, its own residual and its own depreciation, so the charges run at different rates from the outset.</li></ol><ol><li>When a part reaches the end of its life and is replaced, its remaining carrying amount is removed from the books and the replacement is capitalised as a new component with a fresh life.</li></ol><ol><li>That removal is the step the whole approach exists to enable. Without it the original cost still contains the part being discarded, and the same component is capitalised twice.</li></ol></section><section id="example" class="gl-sec"><h2>Componentisation: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Component</th><th>Cost</th><th>Share</th><th>Life</th><th>Annual depreciation</th></tr></thead><tbody><tr><td>Furnace shell</td><td>Rs 1,80,00,000</td><td>60%</td><td>20 years</td><td>Rs 9,00,000</td></tr><tr><td>Refractory lining</td><td>Rs 75,00,000</td><td>25%</td><td>4 years</td><td>Rs 18,75,000</td></tr><tr><td>Control and instrumentation</td><td>Rs 30,00,000</td><td>10%</td><td>8 years</td><td>Rs 3,75,000</td></tr><tr><td>Ancillary handling</td><td>Rs 15,00,000</td><td>5%</td><td>12 years</td><td>Rs 1,25,000</td></tr><tr><td>Total</td><td>Rs 3,00,00,000</td><td>100%</td><td>-</td><td>Rs 32,75,000</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Annual depreciation</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Annual depreciation"><rect x="26" y="139" width="62" height="41" rx="5" fill="#14365F"/><text x="57" y="131" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">900,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Furnace shell</text><rect x="114" y="94" width="62" height="86" rx="5" fill="#14365F"/><text x="145" y="86" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">1,875,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Refractory linin</text><rect x="202" y="163" width="62" height="17" rx="5" fill="#14365F"/><text x="233" y="155" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">375,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Control and inst</text><rect x="290" y="174" width="62" height="6" rx="5" fill="#14365F"/><text x="321" y="166" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">125,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Ancillary handli</text><rect x="378" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="409" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">3,275,000</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Total</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Raipur induction furnace is recorded as four parts rather than one asset.</p><p>The refractory lining is why. It is a quarter of the cost and lasts a fifth as long as the shell, so treating the furnace as a single twenty-year asset would depreciate Rs 75 lakh over twenty years while the lining is physically replaced roughly five times. Splitting lifts the yearly depreciation, Rs 15 lakh as one asset against Rs 32.75 lakh as four and, more usefully, means each replacement is a straightforward retirement of a fully depreciated part rather than an argument about whether it is repair or capital. The test for splitting is a significantly different life, not a significantly different function.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Componentisation</h2><p>The exercise fails most often after it has been set up, rather than at the design stage.</p><ul class="gloss-bullets"><li>Splitting the asset on paper and then treating it as a single item in practice, so a replacement still capitalises the same part twice.</li><li>Fragmenting the register into parts that are neither significant in cost nor materially different in life, which creates detail nobody can maintain.</li><li>Capitalising a replacement without removing the remaining carrying value of the part being replaced, which is the error the whole approach exists to prevent.</li><li>Applying it only to new acquisitions and leaving the existing estate unsplit, so the register carries two conventions at once.</li><li>Assuming a physically separable part qualifies, when the test is the difference in useful life and the significance of its cost.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The record all of this is applied to is the register itself, so <a href="/glossary/stock-audit/fixed-asset-register">fixed asset register</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Componentisation?</h3><p>Knowing the term is not the same as knowing the position. Where a register needs rebuilding around what is actually there, the answer comes from a site rather than from a page, and that is what <a href="/fixed-asset-verification">how we verify fixed assets</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/fixed-asset-verification">how we verify fixed assets<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/fixed-asset-register">fixed asset register<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Componentisation FAQs</h2><p class="faq-expanded__lead">Common questions about Componentisation in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Componentisation</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">When is componentisation required?</h3><div class="faq-expanded__a" id="faq-a1"><p>Where a part of an asset has a cost significant relative to the total and a materially different useful life from the rest. That component is then depreciated separately over its own life.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How does componentisation affect verification?</h3><div class="faq-expanded__a" id="faq-a2"><p>It requires that components identified in the register can actually be distinguished physically. Registers that split assets on paper into components nobody can point to on the ground fail at the first verification.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens when a component is replaced?</h3><div class="faq-expanded__a" id="faq-a3"><p>The carrying value of the old component is derecognised and the new one capitalised. Where components were never separately identified, the replacement is often expensed and the original cost left depreciating, which misstates both.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
