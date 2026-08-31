@extends('layouts.service-app')

@section('meta')
<title>Physical Verification: Counting What Is Actually There</title>
<meta name="description" content="Physical verification means going to the floor and counting, rather than relying on a report. It is the core procedure behind every stock and asset audit.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/physical-verification">

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
            "name": "Physical Verification",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/physical-verification"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/physical-verification/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/physical-verification/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Who should perform physical verification?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Management is responsible for the programme; an independent party may perform the count on its behalf. Where the verification supports a lender requirement, the lender usually specifies that the party performing it must be independent of the borrower."
            }
        },
        {
            "@type": "Question",
            "name": "What makes physical verification unreliable?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Counting while stock is moving, counting from the system rather than the shelf, unlabelled locations, and counting performed by the person responsible for the stock. Any one of these turns the exercise into confirmation rather than verification."
            }
        },
        {
            "@type": "Question",
            "name": "Is a system report acceptable instead of a physical count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. A system report is the record being tested, not evidence about it. Substituting the report for the count removes the only independent element of the exercise, which is why lenders and auditors do not accept it."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Count</div><h1 class="gl-h1">Physical Verification</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#at-the-count" class="gl-pill">At the count</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Physical Verification: Definition</div><div class="definition-box"><p>Physical verification is the act of establishing by direct observation that an asset recorded in the books actually exists, in the quantity, condition and location the records state. It is distinct from reconciliation, which compares one record against another and can be performed without anybody leaving a desk. Verification requires somebody to see and, where relevant, count or measure the asset itself.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Physical Verification?</h2><p>The reason verification cannot be replaced by better record-keeping is that a record is a claim, and a claim cannot corroborate itself. A system that has been told an asset exists will continue to report it faithfully whether or not the asset is there, and internal consistency proves only that the entries agree with each other. Somebody has to look, and that observation is a different kind of evidence from anything the records can generate.</p><p>What the exercise establishes is more than presence. Condition is observed, since goods that exist but cannot be sold do not support the value attached to them, and location is confirmed, since an asset nobody can find is unavailable whatever the record says. The work runs in both directions to be complete: from the record to the item, which finds what has gone, and from the item to the record, which finds what was never entered. Only the second direction reveals goods received and never booked.</p></section><section id="compliance" class="gl-sec"><h2>Physical Verification Under Indian Law</h2><p>Position: no statute requires a business to count its inventory on a fixed timetable. The obligation arrives through reporting. Where the order applies, the auditor must state whether physical verification of inventory has been conducted at reasonable intervals by management, and whether in the auditor's opinion the coverage and procedure were appropriate.</p><ul class="gloss-bullets"><li>The auditor must further report whether discrepancies of ten per cent or more in the aggregate for each class of inventory were noticed and, if so, whether they have been properly dealt with in the books of account.</li><li>Source: clause 3(ii)(a) of the Companies (Auditor's Report) Order 2020, issued under section 143(11) of the Companies Act 2013.</li><li>Note: the duty to verify sits with management and the duty to report with the auditor. The threshold applies per class in aggregate, not item by item.</li></ul></section><section id="at-the-count" class="gl-sec"><h2>What Physical Verification Means at a Physical Count</h2><p>On the floor, this is what the counting team is actually doing rather than a concept.</p><ul class="gloss-bullets"><li>Working from a frozen extract printed before anybody travelled, so the population cannot shift underneath the exercise.</li><li>Covering both directions across the day: some hours spent chasing records to goods, some spent chasing goods back to records, because a team that only ever does the first will never find unrecorded stock.</li><li>Capturing condition as they go, since damaged, obsolete and unsaleable goods are visible only to somebody standing in front of them.</li><li>Marking anything that cannot be resolved rather than guessing, so it reaches the exception list intact.</li><li>Recounting differences before the sheets close, which costs minutes on the day and hours a week later.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Physical Verification Works in Practice</h2><ol><li>The record is frozen at a cut-off date and an extract taken, because a count against a moving population cannot be reconciled afterwards.</li></ol><ol><li>Items are selected on a stated basis, weighted toward value where the population is skewed, with high-value lines commonly examined completely rather than sampled.</li></ol><ol><li>The floor work runs in both directions. A line is picked and the goods hunted down, exposing anything absent; then goods are picked and the line hunted down, exposing anything never entered.</li></ol><ol><li>Condition, location and custodian are captured at the same time, since none of them can be established later from a desk.</li></ol><ol><li>Differences are recounted before the sheets close, then reconciled against the frozen extract. What cannot be resolved is quantified at value, reported as its own figure, and a representation obtained on the residue.</li></ol></section><section id="example" class="gl-sec"><h2>Physical Verification: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Location</th><th>Book quantity</th><th>Counted</th><th>Variance</th><th>Value of variance</th></tr></thead><tbody><tr><td>Main store</td><td>4,180 units</td><td>4,166 units</td><td>-14</td><td>Rs 1,26,000</td></tr><tr><td>Bonded area</td><td>900 units</td><td>900 units</td><td>Nil</td><td>Nil</td></tr><tr><td>Shop floor, WIP</td><td>610 units</td><td>648 units</td><td>+38</td><td>Rs 2,58,000</td></tr><tr><td>Despatch bay</td><td>320 units</td><td>296 units</td><td>-24</td><td>Rs 2,16,000</td></tr></tbody></table></div><p>A Chennai electricals plant is counted on a single day with the stores frozen from the previous evening.</p><p>The interesting number is not the main store shortage. It is the pairing of the shop floor surplus with the despatch bay shortage, which usually means goods were physically moved but the issue was never posted, rather than that anything is missing. Netting the four lines gives a variance close to zero and hides exactly that. The value column is why each location is reported separately: a small unit count on a high-value item outweighs a larger count on cheap stock. Reporting quantity alone would have made the despatch bay look like the smallest of the three problems when by value it is comparable to the largest.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Physical Verification</h2><p>Four errors turn a genuine exercise into one that establishes very little.</p><ul class="gloss-bullets"><li>Working in one direction only, ledger outward, which surfaces what has disappeared and is structurally blind to anything that was never entered. Walk both directions or accept the gap.</li><li>Counting without a frozen record, so the population moves while the work proceeds and the reconciliation afterwards cannot be performed at all. Freeze the extract before anybody travels.</li><li>Recording presence and nothing else, when condition and location bear directly on whether the recorded value is supportable. Capture both while standing in front of the item.</li><li>Having the count performed by the people responsible for the stock and treating the result as independent evidence. It is a useful internal control and it is not independent, however carefully it was done.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Where the period boundary falls decides which movements the count captures, so <a href="/glossary/stock-audit/cut-off-procedure">cut-off procedure</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Physical Verification?</h3><p>A definition describes; it does not verify. Once an independent count is needed rather than an internal one, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit">stock audit service</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">stock audit service<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/cut-off-procedure">cut-off procedure<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Physical Verification FAQs</h2><p class="faq-expanded__lead">Common questions about Physical Verification in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Physical Verification',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Who should perform physical verification?</h3><div class="faq-expanded__a" id="faq-a1"><p>Management is responsible for the programme; an independent party may perform the count on its behalf. Where the verification supports a lender requirement, the lender usually specifies that the party performing it must be independent of the borrower.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What makes physical verification unreliable?</h3><div class="faq-expanded__a" id="faq-a2"><p>Counting while stock is moving, counting from the system rather than the shelf, unlabelled locations, and counting performed by the person responsible for the stock. Any one of these turns the exercise into confirmation rather than verification.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Is a system report acceptable instead of a physical count?</h3><div class="faq-expanded__a" id="faq-a3"><p>No. A system report is the record being tested, not evidence about it. Substituting the report for the count removes the only independent element of the exercise, which is why lenders and auditors do not accept it.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
