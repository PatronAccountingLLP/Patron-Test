@extends('layouts.service-app')

@section('meta')
<title>Micro-Fulfilment Centre: The Unit Quick Commerce Runs On</title>
<meta name="description" content="A micro-fulfilment centre is a small urban site holding a limited range for very fast delivery. It is the unit a quick commerce stock audit is built around.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/micro-fulfilment-centre">

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
            "name": "Micro-Fulfilment Centre (MFC)",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/micro-fulfilment-centre"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/micro-fulfilment-centre/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/micro-fulfilment-centre/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How does an MFC differ from a warehouse for audit purposes?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It holds a narrow, high-rotation range, turns over extremely fast, and cannot pause operations for a full count. Verification therefore has to be continuous and zone-based rather than periodic and site-wide, which changes both the method and the schedule."
            }
        },
        {
            "@type": "Question",
            "name": "How many MFCs should be audited in a network?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A sample weighted by throughput and by prior variance rather than a fixed percentage of sites. Locations with rising shrinkage, recently changed management or a history of unexplained differences warrant more frequent coverage than stable ones."
            }
        },
        {
            "@type": "Question",
            "name": "What is the biggest stock risk in an MFC?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Speed. High order frequency combined with very short cycle times means small handling errors compound quickly, so variance builds between counts far faster than in a conventional warehouse and can become material within days."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Micro-Fulfilment Centre (MFC)</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Micro-Fulfilment Centre (MFC): Definition</div><div class="definition-box"><p>A micro-fulfilment centre is a small stock-holding facility sited close to the customers it serves, carrying a limited range and designed for rapid order assembly rather than for storage or for walk-in trade. It is not open to the public. The format trades range and storage capacity for proximity, which is what makes very short delivery promises physically possible.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Micro-Fulfilment Centre (MFC)?</h2><p>The format exists to solve one problem, which is distance. A delivery promise measured in minutes cannot be met from a regional warehouse however efficient it is, so the stock is pushed out to many small sites close to the customers, each carrying a narrow range chosen for local demand. What is given up is range and storage capacity; what is bought is proximity.</p><p>Everything about verification is harder as a result. There is no window in which the site stands still, because it trades continuously and receives replenishment outside those hours. There are hundreds of locations rather than a handful, so a common count date across the network is expensive to arrange and counts taken weeks apart are not comparable. Stock turns fast enough that a position verified on one date says little about any other. The workable answer is rolling zone counting for control through the period, with a sampled simultaneous count where a network figure has to be stated for a date.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Micro-Fulfilment Centre (MFC) and Why</h2><p>The format exists wherever a delivery promise is short enough that distance becomes the binding constraint.</p><ul class="gloss-bullets"><li>Quick commerce grocery, which is where the model is most fully developed in India and where the promise is measured in minutes.</li><li>Pharmacy delivery, where urgency is genuine and the range is narrow enough to hold locally.</li><li>Restaurant and meal aggregation, operating dark kitchens on the same logic applied to preparation rather than to picking.</li><li>Urban convenience retail, where a small back-of-store operation increasingly serves online orders alongside walk-in trade.</li><li>It has no place in industrial distribution or bulk supply, where order sizes are large, lead times are measured in days and proximity buys nothing worth its cost.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Micro-Fulfilment Centre (MFC) Works in Practice</h2><ol><li>A site is taken close to a dense pocket of demand, sized for throughput rather than storage and stocked with a narrow range chosen from local order history.</li></ol><ol><li>Replenishment arrives from a larger facility on a short cycle, frequently daily, because the site holds only days of cover rather than weeks.</li></ol><ol><li>Orders arrive continuously through trading hours. Picking runs against a promise measured in minutes, with routes optimised so pickers cross the floor as little as possible.</li></ol><ol><li>Verification cannot stop the operation, so counting runs zone by zone. A zone is closed to picking, counted, and released, while fulfilment continues everywhere else on the floor.</li></ol><ol><li>Movements at the zone boundary during the freeze are logged and reconciled afterwards rather than ignored, and the site's results are compared against other sites by category, since a location carrying more high-loss lines will look worse while performing identically.</li></ol></section><section id="example" class="gl-sec"><h2>Micro-Fulfilment Centre (MFC): A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Measure</th><th>Main warehouse</th><th>Micro-fulfilment centre</th></tr></thead><tbody><tr><td>Floor area</td><td>84,000 sq ft</td><td>2,600 sq ft</td></tr><tr><td>SKUs held</td><td>14,000</td><td>1,900</td></tr><tr><td>Stock turns a year</td><td>12</td><td>96</td></tr><tr><td>Average dwell of a unit</td><td>30 days</td><td>Under 4 days</td></tr><tr><td>Counted</td><td>Quarterly</td><td>Weekly</td></tr></tbody></table></div><p>A quick-commerce operator compares one city warehouse against one dark store serving a three kilometre radius.</p><p>The dwell figure is what forces everything else. Stock that turns 96 times a year is entirely replaced roughly every four days, so a quarterly count at a micro site would be counting stock that did not exist at the previous count and will not exist at the next. The count frequency is therefore driven by turnover rather than by size or value. The small SKU range is deliberate: at this velocity every additional line adds picking complexity in a confined space, and the assortment is chosen for what sells within minutes rather than for breadth.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Micro-Fulfilment Centre (MFC)</h2><p>Applying warehouse habits to this format is where most of the trouble starts.</p><ul class="gloss-bullets"><li>Planning a full count that requires the site to stop, when the delivery promise is the product and suspending it withdraws the site from the market.</li><li>Aggregating counts taken weeks apart into a network figure, which describes no moment that ever existed and makes site comparison meaningless.</li><li>Staffing the count with pickers between orders, who will prioritise the order every time and produce sheets nobody should rely on.</li><li>Counting every line at the same frequency, when a small number of fast movers generate almost all the drift.</li><li>Judging a site on its own variance without comparing categories across sites, so a location carrying more high-shrinkage lines looks worse while performing identically.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Getting the right unit off the shelf is the format's dominant failure, so <a href="/glossary/stock-audit/pick-accuracy">pick accuracy</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Micro-Fulfilment Centre (MFC)?</h3><p>A definition describes; it does not verify. Once a network of small sites has to be counted without stopping fulfilment, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit-for-dark-stores">dark store audit</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-dark-stores">dark store audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/pick-accuracy">pick accuracy<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Micro-Fulfilment Centre (MFC) FAQs</h2><p class="faq-expanded__lead">Common questions about Micro-Fulfilment Centre (MFC) in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Micro-Fulfilment Centre (MFC)',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Micro-Fulfilment Centre (MFC)", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does an MFC differ from a warehouse for audit purposes?</h3><div class="faq-expanded__a" id="faq-a1"><p>It holds a narrow, high-rotation range, turns over extremely fast, and cannot pause operations for a full count. Verification therefore has to be continuous and zone-based rather than periodic and site-wide, which changes both the method and the schedule.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How many MFCs should be audited in a network?</h3><div class="faq-expanded__a" id="faq-a2"><p>A sample weighted by throughput and by prior variance rather than a fixed percentage of sites. Locations with rising shrinkage, recently changed management or a history of unexplained differences warrant more frequent coverage than stable ones.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What is the biggest stock risk in an MFC?</h3><div class="faq-expanded__a" id="faq-a3"><p>Speed. High order frequency combined with very short cycle times means small handling errors compound quickly, so variance builds between counts far faster than in a conventional warehouse and can become material within days.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
