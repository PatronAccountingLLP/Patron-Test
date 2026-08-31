@extends('layouts.service-app')

@section('meta')
<title>Audit Sampling: Testing Part to Conclude on the Whole</title>
<meta name="description" content="Audit sampling tests a selected portion of a population and draws a conclusion about all of it. Sample design decides whether that conclusion is defensible.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/audit-sampling">

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
            "name": "Audit Sampling",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/audit-sampling"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/audit-sampling/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/audit-sampling/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How does an auditor choose a stock sample?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By stratifying on value and risk, testing high-value items heavily and sampling the remainder. Purely random selection across all lines gives the same attention to a pallet of packaging as to a pallet of finished goods."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between statistical and judgemental sampling?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Statistical sampling allows the result to be extrapolated with a measurable confidence level. Judgemental sampling targets items the auditor considers risky but does not support extrapolation to the whole population."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if sample errors are found?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The auditor investigates the cause, considers whether it is isolated or systematic, and usually extends testing. A systematic error found in a sample implies a larger misstatement across the population."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Records and Evidence</div><h1 class="gl-h1">Audit Sampling</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#evidence" class="gl-pill">Evidence</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Audit Sampling: Definition</div><div class="definition-box"><p>Audit sampling applies procedures to less than the whole of a population so that a conclusion can be drawn about the population as a whole. Every item must have a chance of selection for the conclusion to hold. The approach may be statistical, where the risk of a wrong conclusion can be quantified, or judgemental, where selection rests on the auditor's assessment of where misstatement is likely.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Audit Sampling?</h2><p>Examining every item in a large population is neither affordable nor necessary, so procedures are applied to a subset chosen so that what is found can be projected onto the whole. The essential condition is that every item had a chance of selection, because a subset assembled from whatever was convenient supports conclusions about those items and nothing more.</p><p>Two approaches are used and they differ in what they can claim. A statistical approach draws items at random and applies probability theory, which lets the chance of landing on the wrong answer be measured and disclosed. A judgemental approach rests instead on the auditor's own reading of where error is most probable, which often yields the most useful single findings and supports no statement about the population at all. Most inventory work combines the two, with a value-weighted structured sample carrying the conclusion and a judgemental layer directed at whatever looks unusual. Reporting the two together as a single coverage figure overstates the statistical basis of the result, which is why the method section separates them.</p></section><section id="compliance" class="gl-sec"><h2>Audit Sampling Under Indian Law</h2><p>Position: where sampling is used, the sample must be designed and selected so that every item in the population has a chance of selection and the results provide a reasonable basis for a conclusion about the whole.</p><ul class="gloss-bullets"><li>Misstatements found in the sample must be projected to the population, and the auditor must consider the risk that actual misstatement exceeds that projection.</li><li>Source: Standard on Auditing 530, Audit Sampling, covering sample design, size and selection, and the projection of misstatements.</li><li>Note: the standard governs sampling only. It does not apply where an auditor tests a population in full, nor to items selected judgementally because something about them invites attention. Findings from that second group stand on their own and cannot be projected onto anything.</li></ul></section><section id="evidence" class="gl-sec"><h2>What an Auditor Accepts as Evidence of Audit Sampling</h2><p>The evidence is the record of how items were chosen, and it has to predate the results.</p><ul class="gloss-bullets"><li>Accepted: the population definition, stating what was in scope and what was excluded, since a conclusion reaches only as far as the population it was drawn from.</li><li>Accepted: the selection basis written down before counting, covering the value threshold for complete examination, how the remainder was stratified and how items were drawn within bands.</li><li>Accepted: the list of items actually selected, retained in full so the sample can be reperformed.</li><li>Rejected: a rationale written up once the outcome is visible, since nothing separates it from a method picked to fit that outcome.</li><li>Rejected: a coverage percentage quoted without saying whether it measures lines or value, because those two figures diverge sharply and one of them always reads better.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Audit Sampling Works in Practice</h2><ol><li>The population is defined precisely, including which items are excluded and why, since a conclusion can only ever cover what was actually in scope.</li></ol><ol><li>Items above a value threshold are separated out and examined completely, because sampling within them saves little and risks a great deal.</li></ol><ol><li>The remainder is stratified into bands and a number of items is drawn from each, so no band goes entirely unexamined and the effort follows the value.</li></ol><ol><li>Selection within a band is made randomly or at systematic intervals, which removes the pull toward items that are accessible and well labelled and therefore least likely to be wrong.</li></ol><ol><li>A judgemental layer is added for anything that looks unusual, and it is recorded separately. The structured sample supports the conclusion about the balance; the judgemental items support findings about themselves and nothing more.</li></ol></section><section id="example" class="gl-sec"><h2>Audit Sampling: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Stratum</th><th>Population value</th><th>Lines</th><th>Sampled</th><th>Basis</th></tr></thead><tbody><tr><td>Above Rs 5,00,000 a line</td><td>Rs 6,20,00,000</td><td>74</td><td>74</td><td>Every line, no sampling</td></tr><tr><td>Rs 50,000 to Rs 5,00,000</td><td>Rs 2,40,00,000</td><td>610</td><td>68</td><td>Value-weighted</td></tr><tr><td>Below Rs 50,000</td><td>Rs 40,00,000</td><td>3,900</td><td>25</td><td>Random, for coverage</td></tr><tr><td>Total</td><td>Rs 9,00,00,000</td><td>4,584</td><td>167</td><td>-</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Sampled</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Sampled"><rect x="26" y="114" width="62" height="66" rx="5" fill="#14365F"/><text x="57" y="106" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">74</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Above Rs 5,00,00</text><rect x="114" y="119" width="62" height="61" rx="5" fill="#14365F"/><text x="145" y="111" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">68</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Rs 50,000 to Rs </text><rect x="202" y="158" width="62" height="22" rx="5" fill="#14365F"/><text x="233" y="150" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">25</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Below Rs 50,000</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">167</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Total</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Nagpur warehouse holding 4,584 stock lines is tested with 167 of them.</p><p>The coverage that matters is by value, not by line count. Those 167 lines are under 4% of the population but reach roughly 72% of the value, because the top stratum is examined in full rather than sampled. The bottom stratum is sampled thinly and deliberately so: 3,900 lines carrying Rs 40 lakh cannot hold an error large enough to matter on its own, and testing them heavily would consume the time the high-value stratum needs. What the auditor cannot do is project the top stratum's result, since nothing there was left untested.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Audit Sampling</h2><p>Most defects here concern what the sample is later claimed to support.</p><ul class="gloss-bullets"><li>Selecting whatever is accessible and projecting the result onto the population, when items that had no chance of selection cannot be represented by it.</li><li>Reporting the structured and judgemental layers as a single coverage figure, which dresses a judgemental layer up as though it carried measurable confidence.</li><li>Quoting only the proportion of lines examined, or only the proportion of value, when the two diverge sharply and each alone misleads.</li><li>Deciding the basis after the results are known, which cannot be distinguished from choosing a basis that fits the answer.</li><li>Assuming a larger population needs a proportionally larger sample, when the number required rises very slowly once the population is reasonably large. Sizing the sample from the line count alone therefore wastes effort on breadth that adds nothing.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Where the evidence falls short, the opinion says so in a defined way, so <a href="/glossary/stock-audit/qualified-opinion">qualified opinion</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Audit Sampling?</h3><p>Terminology takes you only as far as the question. Where a defensible sample has to be designed before anybody counts, what follows is attendance, testing and a reconciliation, described under <a href="/stock-audit">how we run a stock audit</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">how we run a stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/qualified-opinion">qualified opinion<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Audit Sampling FAQs</h2><p class="faq-expanded__lead">Common questions about Audit Sampling in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Audit Sampling',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Audit Sampling", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does an auditor choose a stock sample?</h3><div class="faq-expanded__a" id="faq-a1"><p>By stratifying on value and risk, testing high-value items heavily and sampling the remainder. Purely random selection across all lines gives the same attention to a pallet of packaging as to a pallet of finished goods.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What is the difference between statistical and judgemental sampling?</h3><div class="faq-expanded__a" id="faq-a2"><p>Statistical sampling allows the result to be extrapolated with a measurable confidence level. Judgemental sampling targets items the auditor considers risky but does not support extrapolation to the whole population.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens if sample errors are found?</h3><div class="faq-expanded__a" id="faq-a3"><p>The auditor investigates the cause, considers whether it is isolated or systematic, and usually extends testing. A systematic error found in a sample implies a larger misstatement across the population.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
