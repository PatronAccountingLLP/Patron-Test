@extends('layouts.service-app')

@section('meta')
<title>Greige Fabric: Unfinished Cloth Straight Off the Loom</title>
<meta name="description" content="Greige fabric is woven or knitted cloth before bleaching, dyeing or finishing. It is the first countable stage in a textile stock hierarchy, measured by weight.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/greige-fabric">

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
            "name": "Greige Fabric",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/greige-fabric"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/greige-fabric/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/greige-fabric/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is greige fabric valued?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "At cost to the greige stage, which covers yarn and weaving but not dyeing or finishing. Valuing it as finished fabric overstates inventory by the entire conversion cost still to be incurred."
            }
        },
        {
            "@type": "Question",
            "name": "Why is greige counted separately from finished fabric?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because greige and finished fabric are not interchangeable and carry very different values, since the conversion cost still to be incurred is significant. Combining them into one line item makes both the quantity and the valuation meaningless."
            }
        },
        {
            "@type": "Question",
            "name": "Does greige fabric deteriorate in storage?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It can, through moisture, staining and handling damage, and long-held greige may also become unsuitable for current orders. Ageing greige stock is worth reviewing for provisioning as much as finished fabric."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Greige Fabric</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Greige Fabric: Definition</div><div class="definition-box"><p>Greige fabric is woven or knitted cloth in its unfinished state, as it comes off the loom or machine before bleaching, dyeing, printing or finishing. It is handled and traded by weight rather than by length, because both width and weight per unit area vary within a lot, and its value reflects the processing still to be carried out on it.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Greige Fabric?</h2><p>Cloth leaves the loom in a state that is finished as a textile and unfinished as a product. It has been woven or knitted but not bleached, dyed, printed or treated, so its eventual appearance and much of its value are still to be determined by processes that have not happened yet. Trading in it is trading in an intermediate.</p><p>That unfinished state governs how it is handled at a count. Roll length varies within a lot because of loom stoppages and joins, and the ticket records what the machine reported rather than what a measuring table would confirm, so quantity is established by weight and the ticket length is treated as corroboration. Converting that weight into a saleable length requires the weight per unit area and the width, both of which vary within a lot, so the conversion is an approximation whose reliability depends on how tightly the construction was controlled. Moisture complicates it further, since fabric stored in damp conditions weighs more without any additional cloth being present.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Greige Fabric and Why</h2><p>The term belongs entirely to textile manufacturing and the trade around it.</p><ul class="gloss-bullets"><li>Weaving and knitting mills, for whom it is the output and the point at which cloth is first traded.</li><li>Processing houses that dye, print and finish it, holding substantial quantities belonging to other parties.</li><li>Composite textile manufacturers running spinning through to finishing, where it is an internal stage rather than a traded product.</li><li>Fabric traders and agents, who buy and sell it in this state precisely because the finishing decision can be deferred.</li><li>Garment manufacturers buying unfinished cloth to have processed to their own specification.</li><li>Outside textiles the term has no meaning, and a counting team unfamiliar with it will measure it by length and produce a figure the trade cannot use.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Greige Fabric Works in Practice</h2><ol><li>Cloth comes off the loom or knitting machine and is rolled, with the machine's recorded length written onto a ticket attached to the roll.</li></ol><ol><li>Each roll is weighed, because length varies within a lot through stoppages and joins while weight can be measured directly and repeated.</li></ol><ol><li>Rolls are stored by construction and lot, raised off the floor and away from damp, since absorbed moisture changes the weight without adding any cloth.</li></ol><ol><li>At a count the weight is established physically and the ticket length treated as corroboration rather than as the figure. Where the two disagree consistently across a lot, the construction is questioned rather than the counting.</li></ol><ol><li>The material then goes for processing. Only after bleaching, dyeing or finishing does it become saleable by length, so its carrying value before that point reflects the conversion cost still to be incurred.</li></ol></section><section id="example" class="gl-sec"><h2>Greige Fabric: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Stage</th><th>Quantity</th><th>Rate</th><th>Value</th></tr></thead><tbody><tr><td>Greige, as woven</td><td>18,000 m</td><td>Rs 96 per m</td><td>Rs 17,28,000</td></tr><tr><td>After processing, 6% shrinkage</td><td>16,920 m</td><td>-</td><td>-</td></tr><tr><td>Processing cost added</td><td>-</td><td>Rs 34 per m</td><td>Rs 5,75,280</td></tr><tr><td>Finished, at cost</td><td>16,920 m</td><td>Rs 136 per m</td><td>Rs 23,03,280</td></tr></tbody></table></div><p>A Bhilwara mill holds unprocessed cloth straight off the loom at a reporting date.</p><p>Two things change between the first and last rows and both must move together. The metreage falls by 6% in processing, and the cost per metre rises as dyeing and finishing are added. Valuing greige at the finished rate would overstate the holding by roughly Rs 5.75 lakh; valuing finished cloth at the greige rate understates it by the same. The shrinkage is the part more often missed, because a count taken in metres before processing does not survive to the finished stage, and reconciling a greige count against a finished despatch without applying the loss produces a shortfall that was never real.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Greige Fabric</h2><p>Treating unfinished cloth like finished cloth causes most of the errors.</p><ul class="gloss-bullets"><li>Counting it by the length written on the roll ticket, which records what the loom reported and was never independently checked.</li><li>Using a single ratio for every cloth type, so mass is turned into metres by a relationship that does not describe the lot being counted.</li><li>Ignoring moisture, when fabric stored damp weighs more without a single additional metre being present.</li><li>Mixing it with processed fabric in the count, which combines populations measured on different bases into a total that means nothing.</li><li>Pricing it as if processing were behind it, when dyeing and finishing spend still stands between the cloth and any sale.</li><li>Leaving it stacked directly on a floor that draws damp, which changes both its weight and its condition.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Once dyed, the batch it came from decides what it can be sold with, so <a href="/glossary/stock-audit/shade-lot">shade lot</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Greige Fabric?</h3><p>Knowing the term is not the same as knowing the position. Where fabric has to be counted by weight, length and lot, the answer comes from a site rather than from a page, and that is what <a href="/stock-audit-for-textile">auditing fabric and apparel stock</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-textile">auditing fabric and apparel stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/shade-lot">shade lot<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Greige Fabric FAQs</h2><p class="faq-expanded__lead">Common questions about Greige Fabric in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Greige Fabric',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Greige Fabric", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is greige fabric valued?</h3><div class="faq-expanded__a" id="faq-a1"><p>At cost to the greige stage, which covers yarn and weaving but not dyeing or finishing. Valuing it as finished fabric overstates inventory by the entire conversion cost still to be incurred.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Why is greige counted separately from finished fabric?</h3><div class="faq-expanded__a" id="faq-a2"><p>Because greige and finished fabric are not interchangeable and carry very different values, since the conversion cost still to be incurred is significant. Combining them into one line item makes both the quantity and the valuation meaningless.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Does greige fabric deteriorate in storage?</h3><div class="faq-expanded__a" id="faq-a3"><p>It can, through moisture, staining and handling damage, and long-held greige may also become unsuitable for current orders. Ageing greige stock is worth reviewing for provisioning as much as finished fabric.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
