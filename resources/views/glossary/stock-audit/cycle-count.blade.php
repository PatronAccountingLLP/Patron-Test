@extends('layouts.service-app')

@section('meta')
<title>Cycle Count: Counting Stock in Rotation, Not All at Once</title>
<meta name="description" content="A cycle count verifies part of the stock at a time on a rolling schedule, so the site never stops. It is the alternative to a full wall-to-wall count.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/cycle-count">

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
            "name": "Cycle Count",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/cycle-count"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cycle-count/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cycle-count/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is a cycle count schedule built?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By classifying items on value and movement, then counting high-value fast-moving lines most often and the long tail least. The schedule must still cover every item within the period, otherwise coverage cannot be evidenced."
            }
        },
        {
            "@type": "Question",
            "name": "Does cycle counting satisfy an auditor?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It can, where coverage across the full range within the period is documented and variances were investigated. A cycle programme with gaps or with variances written off unexamined generally does not."
            }
        },
        {
            "@type": "Question",
            "name": "What is the main weakness of cycle counting?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Selection bias. Teams tend to count accessible, tidy locations repeatedly and defer congested or awkward ones, so coverage looks complete while the stock most likely to carry error is counted least."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Count</div><h1 class="gl-h1">Cycle Count</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#at-the-count" class="gl-pill">At the count</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Cycle Count: Definition</div><div class="definition-box"><p>A cycle count verifies a portion of inventory on a rolling schedule, so that the whole population is covered over a period while the operation continues running. Locations or item classes are counted in turn, often weighted so high-value lines are visited more frequently. It produces continuous assurance rather than a single dated position, which is its advantage and also its limitation.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Cycle Count?</h2><p>Counting a portion of the inventory at a time solves a problem full counting cannot. A business that cannot stop trading, or for which stopping is expensive, has no window in which everything stands still, and a rolling programme allows verification to happen without ever closing the operation. Coverage is achieved over a period rather than at a moment, and the schedule is normally weighted so that high-value and fast-moving lines are reached far more often than slow ones.</p><p>What it produces is continuous assurance about a process rather than a position at a date. Differences surface soon after they arise, while the transactions that caused them are still traceable, which is the real advantage over an annual count where a year of error appears at once with no way to attribute it. The limitation follows from the same feature: because different areas are counted at different moments, no single date exists on which the whole site was verified, and a reader who needs a dated position will need something else.</p></section><section id="at-the-count" class="gl-sec"><h2>What Cycle Count Means at a Physical Count</h2><p>Where a business runs a rolling programme, the count team examines that programme as well as the stock.</p><ul class="gloss-bullets"><li>Establishing how much of the site, measured both by position and by money, the rotation has genuinely covered, and when each category last came round.</li><li>Looking for categories that have quietly dropped out of the rotation, which is the commonest failure and is invisible in an activity report.</li><li>Testing whether zones were genuinely frozen while counted, because a zone counted while picking continued produces numbers nobody can reconcile.</li><li>Examining what happened to the differences found: investigated and posted, or adjusted away, because writing them off turns a genuine check into mere ledger tidying.</li><li>Recounting a sample of recently cycled locations independently, which tests the programme rather than the stock.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Cycle Count Works in Practice</h2><ol><li>The population is divided into groups, by location, by category or by value band, and each group is assigned a counting frequency. Groups that turn quickly, or that carry most of the money, come round on a much tighter rotation.</li></ol><ol><li>On the day, the group due is closed to picking and replenishment for the duration, so nothing moves while it is being counted.</li></ol><ol><li>Counting is performed against the system position for those locations, ideally without the counter being shown the expected quantity.</li></ol><ol><li>Differences are recounted immediately, while the goods are still accessible, then investigated rather than adjusted. The transaction history for the item is examined to find what caused the gap.</li></ol><ol><li>The corrected position is posted and the cause recorded. Coverage is tracked across the cycle, so the programme can state what proportion of locations and of value it has reached and how recently each group was last visited.</li></ol></section><section id="example" class="gl-sec"><h2>Cycle Count: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Class</th><th>SKUs</th><th>Share of value</th><th>Count frequency</th><th>Counts per year</th></tr></thead><tbody><tr><td>A</td><td>180</td><td>72%</td><td>Monthly</td><td>2,160</td></tr><tr><td>B</td><td>540</td><td>22%</td><td>Quarterly</td><td>2,160</td></tr><tr><td>C</td><td>2,880</td><td>6%</td><td>Annually</td><td>2,880</td></tr><tr><td>Total</td><td>3,600</td><td>100%</td><td>-</td><td>7,200</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Counts per year</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Counts per year"><rect x="26" y="135" width="62" height="45" rx="5" fill="#14365F"/><text x="57" y="127" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,160</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">A</text><rect x="114" y="135" width="62" height="45" rx="5" fill="#14365F"/><text x="145" y="127" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,160</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">B</text><rect x="202" y="120" width="62" height="60" rx="5" fill="#14365F"/><text x="233" y="112" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,880</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">C</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">7,200</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Total</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Hyderabad distribution centre replaces its single annual shutdown with a rolling programme.</p><p>The design point is in the last column. All three classes absorb broadly similar counting effort, but that effort buys very different coverage of value. The 180 A-class items carry 72% of the value and are looked at twelve times a year, so an error in them is caught within a month. The 2,880 C-class items carry 6% and are seen once. The total of 7,200 counts is achievable with a small team spread across the year, whereas a wall-to-wall count of 3,600 SKUs needs the site stopped. What the programme gives up is a single point-in-time figure for the whole warehouse, which is why most sites keep one full count at year end alongside it.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Cycle Count</h2><p>A rolling programme fails quietly, which is what makes these errors expensive.</p><ul class="gloss-bullets"><li>Counting every line at the same frequency, so most of the effort lands on slow items where nothing has changed. Weight the schedule by value and movement.</li><li>Adjusting differences without investigating them, which converts a control into a bookkeeping routine and guarantees the same difference recurs.</li><li>Counting a zone while picking continues in it, producing a result nobody can reconcile. Freeze the area properly for the duration.</li><li>Claiming a dated position from a rolling programme, when the whole point of the model is that verification is spread across weeks and no one day covers the site.</li><li>Letting categories quietly fall out of the rotation, so the programme reports high activity while parts of the range have not been reached for several cycles.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The full-count alternative produces a dated position a rolling programme cannot, so <a href="/glossary/stock-audit/wall-to-wall-count">wall-to-wall count</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Cycle Count?</h3><p>Knowing the term is not the same as knowing the position. Where a dated position is needed alongside the rolling programme, the answer comes from a site rather than from a page, and that is what <a href="/stock-audit">how we run a stock audit</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">how we run a stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/wall-to-wall-count">wall-to-wall count<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Cycle Count FAQs</h2><p class="faq-expanded__lead">Common questions about Cycle Count in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Cycle Count',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Cycle Count", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is a cycle count schedule built?</h3><div class="faq-expanded__a" id="faq-a1"><p>By classifying items on value and movement, then counting high-value fast-moving lines most often and the long tail least. The schedule must still cover every item within the period, otherwise coverage cannot be evidenced.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Does cycle counting satisfy an auditor?</h3><div class="faq-expanded__a" id="faq-a2"><p>It can, where coverage across the full range within the period is documented and variances were investigated. A cycle programme with gaps or with variances written off unexamined generally does not.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What is the main weakness of cycle counting?</h3><div class="faq-expanded__a" id="faq-a3"><p>Selection bias. Teams tend to count accessible, tidy locations repeatedly and defer congested or awkward ones, so coverage looks complete while the stock most likely to carry error is counted least.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
