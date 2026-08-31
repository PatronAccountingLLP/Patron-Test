@extends('layouts.service-app')

@section('meta')
<title>GSM Fabric Weight: Grams per Square Metre Explained</title>
<meta name="description" content="GSM measures fabric weight in grams per square metre. It is how textile stock is quantified and valued when counting by length alone would mislead.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/gsm-fabric-weight">

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
            "name": "GSM Fabric Weight",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/gsm-fabric-weight"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/gsm-fabric-weight/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/gsm-fabric-weight/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What does a GSM figure represent?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSM is grams per square metre, the standard weight measure for fabric. It is a property of the cloth itself rather than of the quantity held, and it sits in the item master so that a holding expressed in one unit can be restated in another."
            }
        },
        {
            "@type": "Question",
            "name": "How is GSM verified in practice?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By cutting and weighing a standard sample area from a roll and comparing against the specification. Relying on the master data without sample verification carries the risk that the specification itself is wrong."
            }
        },
        {
            "@type": "Question",
            "name": "Does moisture affect GSM measurement?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It can, particularly for natural fibres such as cotton, so significant weight-based reconciliations should take storage conditions into account. Comparing weights taken in very different humidity produces apparent differences that are not stock losses at all."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">GSM Fabric Weight</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">GSM Fabric Weight: Definition</div><div class="definition-box"><p>GSM is grams per square metre, the standard measure of a fabric's weight and therefore of its substance and intended use. It allows weight and length to be converted into each other once width is known, which is what makes it central to verification: a roll's stated length can be checked against its actual weight, and a discrepancy points to one of the two figures being wrong.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is GSM Fabric Weight?</h2><p>Fabric is specified by weight for a practical reason: it is the one property that can be measured directly, repeatably and without reference to how the cloth was made. Two fabrics of the same fibre and construction but different weights behave differently, drape differently and suit different garments, so the figure is a specification for the buyer as much as a measurement for the mill.</p><p>In stock work its value is arithmetic. Because weight, length and width are related through it, any one can be checked against the other two, and that is what makes a textile count testable rather than dependent on tickets nobody has verified. The length written on a ticket can be set against what the roll actually weighs, and a material discrepancy means one of the two figures is wrong. Where the comparison fails consistently across a lot, the fault usually lies in the construction rather than in the counting, and it points to fabric that will not perform to the specification it was sold against.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use GSM Fabric Weight and Why</h2><p>The measure is standard across textiles and in a few adjacent industries measuring sheet material the same way.</p><ul class="gloss-bullets"><li>Weaving and knitting, where it is a core specification and the basis on which cloth is bought and sold.</li><li>Garment manufacturing, where it determines suitability for a given product and drape.</li><li>Home textiles, where it is the headline specification quoted to consumers for towels and bedding.</li><li>Paper and packaging, which uses the same measure under its own name for board and sheet.</li><li>Nonwovens and technical textiles, where performance is specified against it directly.</li><li>The figure also underpins verification, because it ties together mass, running metres and cloth width so that knowing two of the three fixes the last.</li></ul></section><section id="how-works" class="gl-sec"><h2>How GSM Fabric Weight Works in Practice</h2><ol><li>A circular sample of known area is cut from the fabric using a template, taken from the body of the roll rather than the end, which is frequently unrepresentative.</li></ol><ol><li>The sample is weighed on a calibrated balance and the reading scaled up to grams per square metre.</li></ol><ol><li>The result is compared against the specification the cloth was bought or sold against, and a consistent shortfall across a lot indicates fabric that will not perform as promised.</li></ol><ol><li>The figure then links weight, length and width arithmetically. Knowing any two allows the third to be derived, which is what lets a cloth count be proved instead of resting on labels no one has tested.</li></ol><ol><li>During a count the length printed on a ticket is checked against what the roll physically weighs through that relationship. Where the two will not agree, one of them is untrue, and the reconciliation settles which before any conclusion is drawn.</li></ol></section><section id="example" class="gl-sec"><h2>GSM Fabric Weight: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Basis</th><th>Recorded</th><th>Actual</th><th>Difference</th></tr></thead><tbody><tr><td>Nominal GSM</td><td>180</td><td>168</td><td>-6.7%</td></tr><tr><td>Roll length</td><td>100 m</td><td>100 m</td><td>Nil</td></tr><tr><td>Width</td><td>1.5 m</td><td>1.5 m</td><td>Nil</td></tr><tr><td>Weight per roll</td><td>27.0 kg</td><td>25.2 kg</td><td>-1.8 kg</td></tr><tr><td>400 rolls, at Rs 310 per kg</td><td>Rs 33,48,000</td><td>Rs 31,24,800</td><td>-Rs 2,23,200</td></tr></tbody></table></div><p>A knitted fabric holding is recorded by length and valued by weight.</p><p>Nothing is missing from the floor. All 400 rolls are present, each is a full 100 metres, and a count by length agrees with the records exactly. The stock is still overstated by Rs 2.23 lakh, because the fabric was manufactured 6.7% lighter than its nominal specification and the value follows weight rather than length. This is why fabric is weighed rather than measured at verification. A length-based count on a weight-based valuation confirms the wrong dimension and will report a clean result on a position that is materially wrong.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With GSM Fabric Weight</h2><p>The figure is a control and is often treated as a label.</p><ul class="gloss-bullets"><li>Recording it from the specification rather than measuring it, which assumes the mill delivered exactly what was ordered.</li><li>Failing to use it to cross-check length against weight, which forfeits the one arithmetic test that makes a textile count verifiable at all.</li><li>Waving through a gap that repeats across a whole lot, when a consistent shortfall signals cloth that will fall short of what the buyer was promised.</li><li>Rounding the measure to the nearest convenient figure, which removes exactly the precision the cross-check depends on.</li><li>Comparing it across different constructions as though a higher figure always meant better cloth, when suitability depends on the intended garment.</li><li>Measuring on a sample cut from the roll end, which is frequently unrepresentative of the body of the material.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Output that fails the specification is valued on a different basis, so <a href="/glossary/stock-audit/seconds-and-rejects">seconds and rejects</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With GSM Fabric Weight?</h3><p>A definition describes; it does not verify. Once fabric quantities have to be checked rather than read off tickets, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit-for-textile">textile stock audit</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-textile">textile stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/seconds-and-rejects">seconds and rejects<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">GSM Fabric Weight FAQs</h2><p class="faq-expanded__lead">Common questions about GSM Fabric Weight in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'GSM Fabric Weight',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What does a GSM figure represent?</h3><div class="faq-expanded__a" id="faq-a1"><p>GSM is grams per square metre, the standard weight measure for fabric. It is a property of the cloth itself rather than of the quantity held, and it sits in the item master so that a holding expressed in one unit can be restated in another.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is GSM verified in practice?</h3><div class="faq-expanded__a" id="faq-a2"><p>By cutting and weighing a standard sample area from a roll and comparing against the specification. Relying on the master data without sample verification carries the risk that the specification itself is wrong.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Does moisture affect GSM measurement?</h3><div class="faq-expanded__a" id="faq-a3"><p>It can, particularly for natural fibres such as cotton, so significant weight-based reconciliations should take storage conditions into account. Comparing weights taken in very different humidity produces apparent differences that are not stock losses at all.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
