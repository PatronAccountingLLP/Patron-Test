@extends('layouts.service-app')

@section('meta')
<title>Sell-Through Rate: How Quickly Received Stock Sells</title>
<meta name="description" content="Sell-through rate is the share of received stock sold within a period. It is the ageing signal in retail, driving mark-down and provisioning decisions.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/sell-through-rate">

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
            "name": "Sell-Through Rate",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/sell-through-rate"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/sell-through-rate/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/sell-through-rate/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is sell-through rate calculated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Units sold divided by units received for the period, expressed as a percentage. It measures how much of what arrived actually sold, which is more useful for buying decisions than closing stock alone."
            }
        },
        {
            "@type": "Question",
            "name": "What does a low sell-through rate indicate?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Either over-buying, the wrong assortment for that location, poor availability on the shelf, or pricing. The rate establishes that a problem exists; separating those four causes requires the stock position and planogram compliance data alongside it."
            }
        },
        {
            "@type": "Question",
            "name": "How does sell-through relate to stock provisioning?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Persistently low sell-through on a line signals that the stock will age and eventually need writing down. Watching the rate gives earlier warning than an ageing report, which only reacts after the stock has sat."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Sell-Through Rate</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Sell-Through Rate: Definition</div><div class="definition-box"><p>Sell-through rate is the proportion of stock received in a period that was sold within that period, expressed as a percentage of the quantity available. It measures how quickly merchandise is clearing rather than how much was sold in absolute terms, which makes it the standard measure for seasonal ranges where anything unsold at the season's end will realise less than cost.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Sell-Through Rate?</h2><p>Absolute sales figures conceal the thing a merchandiser most needs to know, which is whether stock is clearing at the pace the buying assumed. Expressing sales as a proportion of what was available answers that directly, and it makes ranges of very different sizes comparable, since a large delivery selling slowly and a small one selling out are distinguishable on this measure and identical on volume.</p><p>It matters most where merchandise has a commercial life shorter than its physical one. Seasonal apparel, festival ranges and promotional lines all lose value on a schedule the market sets, so the rate part-way through a season is a forecast of what will remain when the season closes and therefore of the write-down likely to follow. Read weekly it also drives markdown timing, since a line tracking behind its expected curve is cheaper to reduce early than to clear at the end. The measure depends entirely on the availability figure being right, which makes it only as reliable as the stock record behind it.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Sell-Through Rate and Why</h2><p>It earns its place wherever goods stop being sellable long before they stop being usable.</p><ul class="gloss-bullets"><li>Apparel and footwear, where a collection has a defined season and whatever remains at its close will only clear at a discount.</li><li>Consumer electronics, where a model is superseded on a manufacturer's calendar rather than by wearing out.</li><li>Festival and seasonal ranges across general retail, which have a demand window measured in weeks.</li><li>Books, toys and other title-driven categories, where each item is effectively its own product with its own curve.</li><li>It is far less useful in staples and industrial supply, where an item sells at a steady rate indefinitely and a coverage figure answers the same question more directly.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Sell-Through Rate Works in Practice</h2><ol><li>For a defined period, the quantity available is established: opening stock plus everything received, which is the denominator.</li></ol><ol><li>The quantity sold in that same period is taken as the numerator, from the till or order data rather than from a stock movement, so returns are netted where the business treats them that way.</li></ol><ol><li>The ratio is expressed as a percentage and computed at the level a buyer can act on, meaning by style, colour and size rather than by department.</li></ol><ol><li>It is tracked week by week against the curve the buying assumed. A line running behind that curve at week four will be behind it at week twelve, only with more stock left.</li></ol><ol><li>Markdown timing follows from the tracking. Reducing early on a line that is clearly lagging recovers more than clearing it at the season's end, and the same data feeds the provision on whatever remains unsold.</li></ol></section><section id="example" class="gl-sec"><h2>Sell-Through Rate: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Line</th><th>Received</th><th>Sold in 8 weeks</th><th>Sell-through</th><th>Read</th></tr></thead><tbody><tr><td>Style A</td><td>1,200</td><td>1,044</td><td>87%</td><td>Under-bought</td></tr><tr><td>Style B</td><td>900</td><td>468</td><td>52%</td><td>On plan</td></tr><tr><td>Style C</td><td>1,500</td><td>405</td><td>27%</td><td>Over-bought</td></tr><tr><td>Style D</td><td>600</td><td>588</td><td>98%</td><td>Lost sales likely</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Sell-through</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Sell-through"><rect x="26" y="47" width="62" height="133" rx="5" fill="#14365F"/><text x="57" y="39" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">87</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Style A</text><rect x="114" y="100" width="62" height="80" rx="5" fill="#14365F"/><text x="145" y="92" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">52</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Style B</text><rect x="202" y="139" width="62" height="41" rx="5" fill="#14365F"/><text x="233" y="131" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">27</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Style C</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">98</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Style D</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Bengaluru apparel retailer reviews four styles eight weeks into a twelve-week season.</p><p>The extremes are both problems, which is the point that gets missed. Style C at 27% will end the season needing a mark-down, and the cost of that is visible. Style D at 98% looks like a success and is not: the line sold out with a third of the season left, so the shortfall is invisible revenue rather than visible discount. Neither figure means anything without the weeks elapsed alongside it, since 52% at week eight of twelve is healthy while the same number at week eleven is not. Sell-through is read against the season clock or not at all.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Sell-Through Rate</h2><p>The measure is simple and its inputs frequently are not.</p><ul class="gloss-bullets"><li>Computing it from a stock record that has never been verified, so the availability figure underneath is wrong and the rate inherits the error.</li><li>Reading it at the end of a season, when its value is as an early signal and a line tracking behind its curve is far cheaper to reduce in week four than in week twelve.</li><li>Comparing rates across categories with different natural lifecycles, which says more about the merchandise than about the buying.</li><li>Ignoring goods still in transit or held at a distribution centre, which understates what was genuinely available and flatters the result.</li><li>Treating a high rate as unambiguously good, when selling out early can equally mean the range was bought too thin.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>A permanent price reduction is what follows when the rate falls behind, so <a href="/glossary/stock-audit/mark-down">mark-down</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Sell-Through Rate?</h3><p>Terminology takes you only as far as the question. Where season-end stock has to be valued on what it will realise, what follows is attendance, testing and a reconciliation, described under <a href="/stock-audit-for-retail">auditing multi-store retail stock</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-retail">auditing multi-store retail stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/mark-down">mark-down<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Sell-Through Rate FAQs</h2><p class="faq-expanded__lead">Common questions about Sell-Through Rate in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Sell-Through Rate',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is sell-through rate calculated?</h3><div class="faq-expanded__a" id="faq-a1"><p>Units sold divided by units received for the period, expressed as a percentage. It measures how much of what arrived actually sold, which is more useful for buying decisions than closing stock alone.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What does a low sell-through rate indicate?</h3><div class="faq-expanded__a" id="faq-a2"><p>Either over-buying, the wrong assortment for that location, poor availability on the shelf, or pricing. The rate establishes that a problem exists; separating those four causes requires the stock position and planogram compliance data alongside it.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How does sell-through relate to stock provisioning?</h3><div class="faq-expanded__a" id="faq-a3"><p>Persistently low sell-through on a line signals that the stock will age and eventually need writing down. Watching the rate gives earlier warning than an ageing report, which only reacts after the stock has sat.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
