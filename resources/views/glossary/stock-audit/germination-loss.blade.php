@extends('layouts.service-app')

@section('meta')
<title>Germination Loss: When Seed Stops Being Sellable Seed</title>
<meta name="description" content="Germination loss is the decline in the proportion of seed that will actually sprout. Once viability falls below standard, the stock is no longer seed.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/germination-loss">

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
            "name": "Germination Loss",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/germination-loss"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/germination-loss/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/germination-loss/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is germination loss quantified?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By germination testing a sample from the lot against the certification standard. The result determines whether the lot can still be sold as certified seed or must be downgraded or written off."
            }
        },
        {
            "@type": "Question",
            "name": "What causes germination to decline in storage?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Moisture, temperature and time, acting together. Seed held in humid conditions or through a hot season loses viability faster than the same lot stored correctly, which is why storage records matter alongside the age of the lot."
            }
        },
        {
            "@type": "Question",
            "name": "How does germination affect the value of a seed lot?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Directly, because a lot below the certification threshold cannot be sold as certified seed and moves to a lower grade or a different use. Value therefore follows the test result rather than the quantity physically held."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Germination Loss</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Germination Loss</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Germination Loss: Definition</div><div class="definition-box"><p>Germination loss is the decline in the proportion of a seed lot capable of sprouting, measured by laboratory test against the minimum standard prescribed for that crop. A lot falling below the standard cannot lawfully be sold as seed regardless of its physical condition, so the loss reduces value without reducing quantity, and it is evidenced by a dated test result tied to the specific lot.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Germination Loss?</h2><p>Seed is one of the few inventories where the entire physical quantity can remain intact while the value falls to a fraction of cost. What is being sold is the capacity to sprout, and that capacity declines with storage time, moisture and heat without altering the appearance of the bags in any way. Nothing about a visual inspection reveals it.</p><p>Because the attribute is invisible, the evidence is a laboratory result rather than an observation. A dated test tied to a specific lot number, read against whatever floor the legislation sets for that particular crop, is what establishes whether the lot may lawfully be sold as seed at all. Failing lots do not become worthless, since they generally retain value as grain or feed, so the write-down is to that recovery value rather than to nil. At a count the practical difficulty is that deterioration concentrates where nobody looks: bags at the base of a stack, against a wall, or below a leak.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Germination Loss and Why</h2><p>The concept is confined to the seed trade and to businesses holding seed as stock.</p><ul class="gloss-bullets"><li>Seed production and processing companies, for whom viability is the product attribute being sold.</li><li>Agricultural input distributors and dealers, holding season stock through conditions that determine whether it survives.</li><li>Agri-input retailers, exposed at the point of sale to lots whose viability may have fallen since receipt.</li><li>Contract farming operations supplying seed to growers, where a failed lot has consequences reaching well beyond its value.</li><li>Lenders financing any of these, since a stock statement in this trade can be perfectly accurate on quantity and substantially wrong on value.</li><li>It has no application to grain, pulses or other agricultural commodities held for consumption, where nobody is buying the capacity to grow.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Germination Loss Works in Practice</h2><ol><li>A seed lot is tested on receipt and the result recorded against the lot number, establishing the proportion capable of sprouting at that point.</li></ol><ol><li>The lot is stored under controlled moisture and temperature, with conditions logged, because both drive the rate at which viability falls.</li></ol><ol><li>Testing is repeated periodically through storage and again before the selling season, since the attribute being sold changes while the bags look identical.</li></ol><ol><li>Each result is read against the minimum the legislation sets for that crop. Anything falling under that floor is barred from sale as seed whatever state the bags appear to be in.</li></ol><ol><li>Failed lots are physically segregated, written down to what they will realise as grain or feed rather than to nil, and disposed of through a route that is documented, since seed removed from the books and later sold as seed is a considerably more serious finding than a valuation error.</li></ol></section><section id="example" class="gl-sec"><h2>Germination Loss: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Lot</th><th>Quantity</th><th>Germination at intake</th><th>At 30 Sept</th><th>Saleable as seed</th></tr></thead><tbody><tr><td>Wheat, lot 41</td><td>180 quintal</td><td>92%</td><td>88%</td><td>Yes, above 85%</td></tr><tr><td>Wheat, lot 47</td><td>140 quintal</td><td>89%</td><td>82%</td><td>No, below standard</td></tr><tr><td>Gram, lot 52</td><td>96 quintal</td><td>90%</td><td>86%</td><td>Yes, marginal</td></tr><tr><td>Value reclassified to grain</td><td>140 quintal</td><td>-</td><td>-</td><td>Rs 3,64,000 written down</td></tr></tbody></table></div><p>A seed processor near Jalgaon tests stored lots before the sowing window.</p><p>Lot 47 is physically intact. Nothing has been stolen, spoiled visibly or gone missing, and a count by weight agrees with the records to the quintal. It has nonetheless stopped being seed, because germination has fallen below the standard at which it can be certified and sold as such. It reverts to grain, worth a fraction of seed value, and Rs 3.64 lakh comes off. This is the reason a count alone cannot verify seed stock: quality is a condition of the value, it declines with storage time and humidity, and only a test reveals it.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Germination Loss</h2><p>The attribute being sold is invisible, and the errors follow from forgetting that.</p><ul class="gloss-bullets"><li>Assessing lots by appearance, when bags in perfect physical condition can be commercially finished.</li><li>Supporting a write-down with an internal tray test where the amount is material, which is routinely challenged.</li><li>Using a test result that predates the storage period during which the deterioration occurred, so the evidence describes a different lot condition.</li><li>Sampling only from accessible positions, when the loss concentrates at the base of stacks, against walls and below leaks.</li><li>Reducing the carrying figure to zero, when a failed lot usually still fetches grain or feed prices and only the shortfall is the loss.</li><li>Testing after the count rather than before it, which puts the decision ahead of the evidence meant to support it.</li><li>Leaving failed lots among saleable stock, which risks their being sold as seed.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>When the count happens is set by the sowing calendar, so <a href="/glossary/stock-audit/kharif-and-rabi-seasons">kharif and rabi seasons</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Germination Loss?</h3><p>Understanding the term is the easy half. The harder half arrives when viability has to be tested before a lot can be valued, and it is answered on site rather than on paper. <a href="/stock-audit-for-seeds-fertiliser-agro-inputs">agro-input stock audit</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-seeds-fertiliser-agro-inputs">agro-input stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/kharif-and-rabi-seasons">kharif and rabi seasons<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Germination Loss FAQs</h2><p class="faq-expanded__lead">Common questions about Germination Loss in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Germination Loss</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is germination loss quantified?</h3><div class="faq-expanded__a" id="faq-a1"><p>By germination testing a sample from the lot against the certification standard. The result determines whether the lot can still be sold as certified seed or must be downgraded or written off.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What causes germination to decline in storage?</h3><div class="faq-expanded__a" id="faq-a2"><p>Moisture, temperature and time, acting together. Seed held in humid conditions or through a hot season loses viability faster than the same lot stored correctly, which is why storage records matter alongside the age of the lot.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How does germination affect the value of a seed lot?</h3><div class="faq-expanded__a" id="faq-a3"><p>Directly, because a lot below the certification threshold cannot be sold as certified seed and moves to a lower grade or a different use. Value therefore follows the test result rather than the quantity physically held.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
