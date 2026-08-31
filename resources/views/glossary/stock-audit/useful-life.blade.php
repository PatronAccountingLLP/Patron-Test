@extends('layouts.service-app')

@section('meta')
<title>Useful Life: The Basis Depreciation Is Calculated On</title>
<meta name="description" content="Useful life is the period an asset is expected to stay in productive use. Auditors compare the life assumed in the books against the condition they observe.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/useful-life">

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
            "name": "Useful Life",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/useful-life"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/useful-life/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/useful-life/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How does physical verification inform useful life?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By revealing condition. An asset in visibly poor condition well before the end of its assumed life, or one still in good order beyond it, is evidence the estimate needs revisiting."
            }
        },
        {
            "@type": "Question",
            "name": "Who determines the useful life of an asset?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Management, having regard to the expected pattern of use and to the lives prescribed under Schedule II where applicable. Departures from prescribed lives are permitted but require disclosure and justification."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if actual life differs from the estimate?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The estimate is revised prospectively and the remaining carrying value depreciated over the revised remaining life. Prior periods are not restated, because the change is an estimate revision rather than an error."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Fixed Assets and Tagging</div><h1 class="gl-h1">Useful Life</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#assets" class="gl-pill">Applied to assets</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Useful Life: Definition</div><div class="definition-box"><p>Useful life is the period over which an asset is expected to be available for use by the entity, and it determines the rate at which the asset's cost is depreciated. It is an estimate about the entity's own expected use, not about how long the asset could physically last. Schedule II to the Companies Act 2013 gives indicative lives by class of asset, applied unless a different life is justified by technical assessment.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Useful Life?</h2><p>The estimate is about the entity rather than about the equipment. A machine capable of running for twenty years has a useful life of eight if the business intends to replace it at eight, and the depreciation follows that intention rather than the engineering. This is why two companies operating identical assets can properly depreciate them over different periods without either being wrong.</p><p>Schedule II supplies indicative lives by class, which most companies adopt because doing so is straightforward and defensible. Departing from them is permitted where a technical assessment supports a different period, and the assessment then has to exist as a document rather than as an assertion. The estimate is not fixed for the asset's life either: where expectations change materially, through heavier usage, a change in the production plan or a technological shift, the remaining life is revised and the charge adjusted prospectively rather than restated. Residual value is set alongside it, and a life estimate paired with an optimistic residual understates the annual charge twice over.</p></section><section id="compliance" class="gl-sec"><h2>Useful Life Under Indian Law</h2><p>Position: the useful lives set out in the schedule are indicative rather than binding. A company may adopt a longer or shorter life where it is justified on technical grounds.</p><ul class="gloss-bullets"><li>Where a different life is used, the justification has to be supported by a technical assessment and disclosed in the financial statements. The departure is permitted; an undisclosed and unsupported departure is not.</li><li>Source: the depreciation schedule to the Companies Act 2013, Part A.</li><li>Note: adopting the indicative life is the simplest defensible position and is what most companies do. The question an auditor asks is not why the schedule was followed but, where it was not, what assessment supports the alternative and where that assessment is recorded.</li></ul></section><section id="assets" class="gl-sec"><h2>How Useful Life Applies to a Fixed Asset Register</h2><p>The life is a field held against every line, and how it is stored decides whether the register can be checked.</p><ul class="gloss-bullets"><li>It belongs on the line itself rather than being applied by class from a separate schedule, so any individual charge can be recomputed without rebuilding the whole calculation.</li><li>It is paired with a residual value, and the depreciable amount is the difference, which means an optimistic residual quietly depresses the charge as effectively as a long life does.</li><li>Where the figure departs from the indicative schedule, the technical justification is referenced against the line rather than filed elsewhere.</li><li>Revisions are recorded with their effective date and the reason, since the remaining balance is spread forward rather than restated backwards.</li><li>A register holding only an accumulated figure, with no life against the line, cannot be tested at all.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Useful Life Works in Practice</h2><ol><li>At the point of capitalisation somebody estimates how long the business expects to keep drawing service from the item, weighing how hard it will be run, how fast it will wear, how soon it may be superseded and any legal ceiling on its operation.</li></ol><ol><li>The Companies Act schedule sets out suggested spans for each category, and most businesses simply take them. Where a different period is used, a technical assessment supporting it is documented at the time.</li></ol><ol><li>A residual value is estimated alongside, and the depreciable amount is cost less that residual.</li></ol><ol><li>The charge is computed and posted each period on the chosen method, applied consistently.</li></ol><ol><li>The estimate is reviewed rather than fixed. Where expectations change materially, because equipment is worked harder, output plans are redrawn or technology moves, the balance still on the books is spread over the new remaining period going forward, without restating any period already closed.</li></ol></section><section id="example" class="gl-sec"><h2>Useful Life: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Asset</th><th>Life adopted</th><th>Schedule II indicative</th><th>Basis for the difference</th></tr></thead><tbody><tr><td>General plant, single shift</td><td>15 years</td><td>15 years</td><td>None, adopted as indicated</td></tr><tr><td>Same plant, triple shift</td><td>9 years</td><td>15 years, shift-adjusted</td><td>Documented shift working</td></tr><tr><td>Moulds and dies</td><td>4 years</td><td>15 years</td><td>Technical assessment of output</td></tr><tr><td>Office computers</td><td>3 years</td><td>3 years</td><td>None</td></tr></tbody></table></div><p>A Chakan press shop runs three shifts and sets lives against actual working rather than a table.</p><p>The second and third rows are where the judgement sits. Schedule II lives are indicative rather than prescribed, so a company may adopt a different life provided the reason is documented and disclosed. Triple-shift working genuinely consumes a machine faster, and a mould rated for a finite number of strokes is exhausted by output rather than by time. What cannot happen is a shorter life chosen because it suits the tax or profit position, with no technical support. At verification the question asked is not whether the life differs from the schedule but whether the file explains why.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Useful Life</h2><p>The estimate concerns the business's own expected use, and errors follow from forgetting that.</p><ul class="gloss-bullets"><li>Adopting the indicative schedule lives without considering whether they describe your actual usage, particularly where equipment runs multiple shifts.</li><li>Departing from them without documenting the technical assessment, which leaves the shorter or longer life unsupported when it is questioned.</li><li>Never revising the estimate, though running equipment harder, reshaping the output plan, or a shift in technology each call for the remaining charge to be recomputed.</li><li>Pairing a long life with an optimistic residual value, which depresses the yearly figure from both ends at once.</li><li>Restating prior periods when the estimate changes, rather than adjusting the remaining charge prospectively as a change in estimate requires.</li><li>Applying one life across a class containing equipment used very differently between sites, which averages away the distinction the estimate exists to capture.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Splitting an asset into parts with different lives changes the whole calculation, so <a href="/glossary/stock-audit/componentisation">componentisation</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Useful Life?</h3><p>Knowing the term is not the same as knowing the position. Where a register's lives and values need testing against the assets themselves, the answer comes from a site rather than from a page, and that is what <a href="/fixed-asset-verification">asset verification</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/fixed-asset-verification">asset verification<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/componentisation">componentisation<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Useful Life FAQs</h2><p class="faq-expanded__lead">Common questions about Useful Life in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Useful Life',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does physical verification inform useful life?</h3><div class="faq-expanded__a" id="faq-a1"><p>By revealing condition. An asset in visibly poor condition well before the end of its assumed life, or one still in good order beyond it, is evidence the estimate needs revisiting.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Who determines the useful life of an asset?</h3><div class="faq-expanded__a" id="faq-a2"><p>Management, having regard to the expected pattern of use and to the lives prescribed under Schedule II where applicable. Departures from prescribed lives are permitted but require disclosure and justification.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens if actual life differs from the estimate?</h3><div class="faq-expanded__a" id="faq-a3"><p>The estimate is revised prospectively and the remaining carrying value depreciated over the revised remaining life. Prior periods are not restated, because the change is an estimate revision rather than an error.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
