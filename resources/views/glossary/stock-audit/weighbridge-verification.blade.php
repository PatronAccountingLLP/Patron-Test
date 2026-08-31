@extends('layouts.service-app')

@section('meta')
<title>Weighbridge Verification: Testing the Scale Itself</title>
<meta name="description" content="Where stock is measured by weight, the weighbridge is a control that must itself be verified. Calibration records and tare discipline are what get tested.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/weighbridge-verification">

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
            "name": "Weighbridge Verification",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/weighbridge-verification"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/weighbridge-verification/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/weighbridge-verification/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Can an unverified weighbridge invalidate a stock count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It undermines every quantity derived from that equipment, however carefully the weighing was carried out. Where weight-based stock is material, the auditor reports the limitation and may require re-weighing on verified equipment before the figures can be relied on at all."
            }
        },
        {
            "@type": "Question",
            "name": "How often must a weighbridge be verified?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Verification and stamping under the Legal Metrology Act is typically on an annual cycle for equipment used in trade. The current stamp and its validity date are what an auditor checks."
            }
        },
        {
            "@type": "Question",
            "name": "What is tare weight and why does it matter?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tare is the weight of the empty vehicle, deducted to arrive at net load. A tare value that is assumed rather than measured introduces a systematic error into every load weighed against it."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Records and Evidence</div><h1 class="gl-h1">Weighbridge Verification</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#evidence" class="gl-pill">Evidence</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Weighbridge Verification: Definition</div><div class="definition-box"><p>Weighbridge verification establishes that a platform scale used to weigh vehicles and bulk loads is producing accurate readings, by checking its legal metrology stamp and by testing it against a known load. Where stock is measured by weight rather than counted, the instrument forms part of the evidence, so an unverified weighbridge makes every quantity derived from it unsupported.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Weighbridge Verification?</h2><p>In trades where goods arrive and leave by the lorry load, nobody counts anything. Fertiliser, grain, coal and scrap are handled in bulk, and every quantity the business has ever recorded originated as a number on a platform scale. Whatever error that platform carries is therefore embedded in the entire inventory history, which is a very different exposure from a miscount on one line.</p><p>Two checks address it. The statutory one is the periodic stamping regime, which establishes that an authority found the equipment accurate on a stated date, and an out-of-date stamp puts every subsequent figure in doubt. The practical one is a test weighing during the count, using a known load or a second platform, because equipment can drift out of tolerance the day after it was certified and nothing in the statutory cycle would reveal it. Tare discipline is examined alongside, since a tare taken from a table rather than measured produces an error of a consistent size on every single load.</p></section><section id="compliance" class="gl-sec"><h2>Weighbridge Verification Under Indian Law</h2><p>Position: every weighing instrument used in trade or commerce must be verified and stamped before use and re-verified periodically. For weighbridges the re-verification period is ordinarily twelve months, and verification is carried out by the legal metrology authority rather than by the owner or a private calibrator.</p><ul class="gloss-bullets"><li>Using an unverified or out-of-stamp instrument in trade is an offence, and readings taken on one are open to challenge.</li><li>Source: the Legal Metrology Act 2009 and the Legal Metrology (General) Rules 2011 governing verification and stamping periodicity.</li><li>Note: enforcement sits with state legal metrology departments and points of detail can vary by state. A private calibration certificate is useful evidence of accuracy but is not a substitute for the statutory stamp.</li></ul></section><section id="evidence" class="gl-sec"><h2>What an Auditor Accepts as Evidence of Weighbridge Verification</h2><p>Where quantity comes from an instrument, the instrument's condition is part of the evidence.</p><ul class="gloss-bullets"><li>Accepted: the current legal metrology stamp, along with proof of accuracy spanning every month whose readings are in question, not merely the most recent one.</li><li>Accepted: an independent re-weighing carried out while on site, against a reference mass or another bridge, which catches movement the statutory cycle would miss.</li><li>Accepted: tare weights measured on the day for the vehicles involved, because an assumed empty weight puts the same fixed error into every consignment weighed.</li><li>Rejected: weighbridge slips alone, which record what the machine reported and say nothing about whether it was right.</li><li>Rejected: an adjustment factor applied after the reading, varying between transactions or running in one direction only.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Weighbridge Verification Works in Practice</h2><ol><li>The instrument's legal metrology stamp is examined first, confirming that an authority found it accurate and that the certification has not expired.</li></ol><ol><li>The calibration certificates covering the whole period whose weights are being relied on are collected, not merely the current one, since a question about last quarter's tonnage is answered by last quarter's certificate.</li></ol><ol><li>A test weighing is performed independently, taking a known load or the same vehicle across the platform a second time, which tests for drift the periodic cycle cannot detect.</li></ol><ol><li>Tare discipline is examined: whether tare weights are measured each time or assumed from a table, and whether the same vehicle produces consistent results.</li></ol><ol><li>Any variance found is applied to the period rather than to the single reading, because a platform out of tolerance was out of tolerance for every load it weighed since it was last proved.</li></ol></section><section id="example" class="gl-sec"><h2>Weighbridge Verification: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Check</th><th>Result</th><th>Bearing on the count</th></tr></thead><tbody><tr><td>Stamping validity</td><td>Expired 4 months ago</td><td>Readings not legally reliable</td></tr><tr><td>Test with 10 tonne known weight</td><td>Showed 10.31 tonnes</td><td>Over-reads by about 3.1%</td></tr><tr><td>Coal stock by survey</td><td>4,180 tonnes</td><td>-</td></tr><tr><td>Same stock at weighbridge readings</td><td>4,310 tonnes</td><td>Overstated by 130 tonnes</td></tr><tr><td>Value of the gap</td><td>Rs 11,05,000</td><td>-</td></tr></tbody></table></div><p>A captive power plant near Korba weighs incoming coal across a bridge whose verification stamp has lapsed.</p><p>Two separate problems sit in the first two rows and they need separating. The expired stamp does not mean the bridge is broken; it means readings from it are not legally reliable and can be challenged, whatever they show. The test with a known weight is what establishes that this bridge also over-reads, by roughly 3.1%. Applied across the stock, that is 130 tonnes and about Rs 11.05 lakh of value that was never there. Re-stamping fixes the legal position. Only recalibration fixes the figures, and stock received during the lapsed period stays suspect.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Weighbridge Verification</h2><p>Where the instrument is the record, its condition is not a detail.</p><ul class="gloss-bullets"><li>Accepting readings from equipment whose stamp has expired, which leaves every figure taken since open to challenge.</li><li>Taking tare weights from a table rather than measuring them, so every single load is out by the same amount, which no averaging will correct.</li><li>Relying on the periodic stamping cycle alone, since equipment can fall outside its permitted error a day after being stamped, with nothing in the legal cycle catching it.</li><li>Converting weight to a standard basis without a moisture reading taken at the time, so wet and dry lots are compared as though identical.</li><li>Applying adjustment factors selected after the result is known, or in one direction only, which is no longer a measurement convention.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Where seed is the commodity, viability matters as much as weight, so <a href="/glossary/stock-audit/germination-loss">germination loss</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Weighbridge Verification?</h3><p>Terminology takes you only as far as the question. Where quantities measured rather than counted have to be verified, what follows is attendance, testing and a reconciliation, described under <a href="/stock-audit-for-seeds-fertiliser-agro-inputs">stock audit for agro-inputs</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-seeds-fertiliser-agro-inputs">stock audit for agro-inputs<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/germination-loss">germination loss<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Weighbridge Verification FAQs</h2><p class="faq-expanded__lead">Common questions about Weighbridge Verification in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Weighbridge Verification',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Can an unverified weighbridge invalidate a stock count?</h3><div class="faq-expanded__a" id="faq-a1"><p>It undermines every quantity derived from that equipment, however carefully the weighing was carried out. Where weight-based stock is material, the auditor reports the limitation and may require re-weighing on verified equipment before the figures can be relied on at all.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How often must a weighbridge be verified?</h3><div class="faq-expanded__a" id="faq-a2"><p>Verification and stamping under the Legal Metrology Act is typically on an annual cycle for equipment used in trade. The current stamp and its validity date are what an auditor checks.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What is tare weight and why does it matter?</h3><div class="faq-expanded__a" id="faq-a3"><p>Tare is the weight of the empty vehicle, deducted to arrive at net load. A tare value that is assumed rather than measured introduces a systematic error into every load weighed against it.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
