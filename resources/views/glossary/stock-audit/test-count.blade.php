@extends('layouts.service-app')

@section('meta')
<title>Test Count: The Sample That Validates a Client Count</title>
<meta name="description" content="A test count is the auditor's own recount of selected items, checked against the client's count sheet. It decides whether that sheet can be relied upon.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/test-count">

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
            "name": "Test Count",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/test-count"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/test-count/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/test-count/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is the purpose of a test count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It lets the auditor form a view on whether the client count was performed properly, by independently recounting a sample and comparing. It tests the process, not just the number."
            }
        },
        {
            "@type": "Question",
            "name": "How large should a test count sample be?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Large enough to cover a meaningful share of value and to include items from each counting team and area. Sample size follows the assessed risk rather than a fixed percentage of lines."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if test counts show differences?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The auditor extends testing, and where errors persist the client count may be rejected and a recount required. A pattern confined to one team or one area is more informative than the overall error rate."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Count</div><h1 class="gl-h1">Test Count</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#at-the-count" class="gl-pill">At the count</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Test Count: Definition</div><div class="definition-box"><p>A test count is an independent count of selected items performed by an auditor to evaluate whether the client's own counting procedure is producing reliable results. The auditor counts the items personally and compares the result with what the client's team recorded for the same items. It tests the process rather than the population, so it supports a conclusion about the whole count rather than replacing it.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Test Count?</h2><p>An auditor attending a physical count is not there to count the inventory. The counting is management's responsibility and management's staff perform it; the auditor is there to form a view on whether the procedure being followed is capable of producing a reliable result. Selecting items and counting them personally is how that view is obtained, and the evidence is how that result compares with whatever the entity's own staff wrote down against those same items.</p><p>The procedure is deliberately two-directional. Items are selected from the count sheets and located physically, which tests whether recorded quantities exist, and items are selected from the floor and traced to the sheets, which tests whether everything present was actually counted. A one-directional test cannot detect stock that was simply missed. Where differences emerge, the significance is not the individual error but what it says about the process, and a pattern of differences will usually lead to the count being extended or repeated rather than adjusted.</p></section><section id="at-the-count" class="gl-sec"><h2>What Test Count Means at a Physical Count</h2><p>For the attending auditor this is the day's core work, and it is deliberately limited.</p><ul class="gloss-bullets"><li>Observing before counting anything, watching how sheets are issued, how areas are allocated and whether anybody is checking.</li><li>Selecting items personally rather than accepting a list, weighted toward value and toward anything awkward to reach.</li><li>Counting each one without reference to what the sheet says, then comparing afterwards, since seeing the expected figure first shapes what a person counts.</li><li>Running the same exercise in reverse from the shelf to the paperwork, which is what finds areas the teams skipped.</li><li>Recording every difference individually, because the conclusion being formed is about whether the procedure works rather than about the items themselves.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Test Count Works in Practice</h2><ol><li>The auditor is present while the entity's team works, and begins by watching how the exercise is being run rather than by counting.</li></ol><ol><li>Entries are drawn from the finished sheets and the corresponding goods located, testing whether the recorded figures describe anything real.</li></ol><ol><li>The exercise is then run the other way, lifting goods off the rack and hunting for them in the paperwork, which exposes anything skipped entirely.</li></ol><ol><li>Each chosen item is counted by the auditor personally, and that figure is set beside whatever the entity's own team wrote against it, with every difference noted separately.</li></ol><ol><li>The conclusion drawn is about the procedure rather than the population. A clean result supports reliance on the wider count; a pattern of differences leads to the count being extended, repeated, or reported as unreliable, rather than to the individual items simply being corrected.</li></ol></section><section id="example" class="gl-sec"><h2>Test Count: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Auditor sample</th><th>Book</th><th>Counted</th><th>Variance</th><th>Extrapolated?</th></tr></thead><tbody><tr><td>High-value items, 40 lines</td><td>Rs 3,10,00,000</td><td>Rs 3,08,40,000</td><td>-0.52%</td><td>No, 100% of stratum</td></tr><tr><td>Random sample, 60 lines</td><td>Rs 90,00,000</td><td>Rs 88,20,000</td><td>-2.00%</td><td>Yes, to Rs 4.20 crore</td></tr><tr><td>Projected shortfall on the untested balance</td><td>-</td><td>-</td><td>-</td><td>Rs 8,40,000</td></tr></tbody></table></div><p>An auditor attending a Jaipur count at a jewellery manufacturer does not recount the floor. The client's team counts; the auditor independently checks a sample and forms a view on the whole.</p><p>Two strata behave differently and are therefore treated differently. Every high-value line is checked, so its 0.52% variance is a fact about that stratum and is not projected anywhere. The random sample is a sample in the statistical sense, so its 2% variance is extrapolated across the untested balance to give a projected shortfall of Rs 8.40 lakh. That projection, not the sample result, is what the auditor weighs against materiality. A test count that finds a variance the client cannot explain generally leads to a full recount rather than a larger sample.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Test Count</h2><p>The purpose of the procedure is misread more often than the procedure is performed badly.</p><ul class="gloss-bullets"><li>Expecting the auditor to count the inventory, when counting belongs to the entity and the auditor is judging whether its method holds up.</li><li>Selecting only accessible, well-labelled items, which are systematically the ones least likely to be wrong and tell you nothing about the rest.</li><li>Running the check in one direction only, so items that were never written onto a sheet at all remain invisible.</li><li>Treating a difference as an item to be adjusted rather than as evidence about the process. The individual error matters far less than what it says about the count as a whole.</li><li>Continuing with the count after a pattern of differences has emerged, when the sensible response is to stop and recount.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The paperwork discipline that makes any count reconcilable is the tag sequence, so <a href="/glossary/stock-audit/count-tag-control">count tag control</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Test Count?</h3><p>Terminology takes you only as far as the question. Where the counting procedure itself needs testing rather than the stock, what follows is attendance, testing and a reconciliation, described under <a href="/stock-audit">inventory audit</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">inventory audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/count-tag-control">count tag control<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Test Count FAQs</h2><p class="faq-expanded__lead">Common questions about Test Count in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Test Count',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What is the purpose of a test count?</h3><div class="faq-expanded__a" id="faq-a1"><p>It lets the auditor form a view on whether the client count was performed properly, by independently recounting a sample and comparing. It tests the process, not just the number.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How large should a test count sample be?</h3><div class="faq-expanded__a" id="faq-a2"><p>Large enough to cover a meaningful share of value and to include items from each counting team and area. Sample size follows the assessed risk rather than a fixed percentage of lines.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens if test counts show differences?</h3><div class="faq-expanded__a" id="faq-a3"><p>The auditor extends testing, and where errors persist the client count may be rejected and a recount required. A pattern confined to one team or one area is more informative than the overall error rate.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
