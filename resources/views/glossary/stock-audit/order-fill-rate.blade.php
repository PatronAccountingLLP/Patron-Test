@extends('layouts.service-app')

@section('meta')
<title>Order Fill Rate: Where Phantom Stock Shows Up First</title>
<meta name="description" content="Order fill rate is the share of orders fulfilled complete and on time. Falling fill rates against healthy system stock usually mean the system is wrong.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/order-fill-rate">

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
            "name": "Order Fill Rate",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/order-fill-rate"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/order-fill-rate/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/order-fill-rate/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What does order fill rate measure?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The proportion of orders fulfilled complete and on time, without substitution or short supply. It is a customer-facing measure that also happens to be a strong indicator of stock record accuracy."
            }
        },
        {
            "@type": "Question",
            "name": "Why is a falling fill rate a stock warning?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because repeated short-fills on items the system shows as available is the clearest sign of phantom stock. The fill rate usually starts deteriorating well before a scheduled count would reveal the underlying variance, which makes it an early warning."
            }
        },
        {
            "@type": "Question",
            "name": "Is a high fill rate always good?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not if it is achieved by holding excess stock. Fill rate read alongside stock turn shows whether service is being bought with working capital, which is the trade-off the measure alone conceals."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Order Fill Rate</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Order Fill Rate: Definition</div><div class="definition-box"><p>Order fill rate is the proportion of customer demand satisfied from stock on hand, without a shortfall, a substitution or a delay. It is a measure of availability rather than of accuracy, so an order assembled correctly but short of one line counts against it. Read together with accuracy it distinguishes a stock problem from a picking problem.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is an Order Fill Rate?</h2><p>Availability and accuracy are different failures with different causes, and separating them is what this measure is for. An order picked flawlessly yet missing a single line damages this measure while leaving accuracy untouched; an order complete in quantity but containing the wrong item does the reverse. Businesses that track only one of the two regularly misdiagnose which part of the operation is failing.</p><p>The measure also depends on the stock record being right, which creates a circularity worth understanding. A line the system believes is available but which is physically absent produces a failed pick and a fill rate penalty, and the root cause is inventory accuracy rather than replenishment. Conversely a line physically present but recorded at a location the system does not associate with it is unavailable in practice while appearing available in the data. In both cases a fill rate reported without a recent physical verification behind it is measuring the record rather than the shelf.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Order Fill Rate and Why</h2><p>The measure belongs to businesses that promise availability rather than merely offer it.</p><ul class="gloss-bullets"><li>Consumer goods supplying organised retail, where the buyer measures the supplier on it and repeated shortfalls cost listings.</li><li>Pharmaceutical distribution, where a missing line is not substitutable and the consequence falls on a patient.</li><li>Automotive after-sales, where a vehicle stays off the road until the part arrives and the measure drives dealer stocking policy.</li><li>Third-party logistics, where it commonly sits in the contract alongside accuracy as a service level with money attached.</li><li>It matters less in project-based or made-to-order manufacturing, where nothing is expected from stock and the equivalent question is about lead time rather than availability.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Order Fill Rate Works in Practice</h2><ol><li>Demand is captured as it was originally placed, before any amendment, because measuring against a revised order quietly removes the failures.</li></ol><ol><li>Each line is assembled and marked complete, short, substituted or unavailable.</li></ol><ol><li>The measure is computed as lines satisfied in full from stock over lines demanded. Substitutions are excluded from the satisfied count, since the customer did not receive what was ordered.</li></ol><ol><li>Failures are then traced to a cause. A line the system believed available and the shelf did not hold is an inventory accuracy failure; a line correctly recorded as zero is a replenishment or forecasting failure. The two sit with different functions.</li></ol><ol><li>The measure is reported alongside pick accuracy, because availability and correctness fail independently, and a business tracking only one of them will consistently address the wrong part of the operation.</li></ol></section><section id="example" class="gl-sec"><h2>Order Fill Rate: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Measure</th><th>Calculation</th><th>Result</th></tr></thead><tbody><tr><td>Orders complete in full</td><td>8,640 of 10,000</td><td>86.4%</td></tr><tr><td>Lines supplied in full</td><td>43,900 of 46,000</td><td>95.4%</td></tr><tr><td>Units supplied</td><td>1,84,000 of 1,90,000</td><td>96.8%</td></tr><tr><td>Value supplied</td><td>Rs 4.62 crore of Rs 4.80 crore</td><td>96.3%</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Result</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Result"><rect x="26" y="46" width="62" height="134" rx="5" fill="#14365F"/><text x="57" y="38" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">86.4</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Orders complete </text><rect x="114" y="32" width="62" height="148" rx="5" fill="#14365F"/><text x="145" y="24" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">95.4</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Lines supplied i</text><rect x="202" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="233" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">96.8</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Units supplied</text><rect x="290" y="31" width="62" height="149" rx="5" fill="#E8712C"/><text x="321" y="23" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">96.3</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Value supplied</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>One month at a Bhiwandi distributor, the same performance expressed four ways.</p><p>All four numbers are correct and they differ by ten percentage points. Order fill is the harshest because a single missing line fails the whole order, and it is also the one the customer experiences. Unit fill is the kindest and is the figure most often quoted internally. Neither is wrong, but a distributor reporting 96.8% while its customers experience 86.4% has a reporting problem before it has a supply problem. Which measure is used should be fixed in the contract, because the gap between them widens as orders carry more lines.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Order Fill Rate</h2><p>The measure gets blamed on the wrong function more often than not.</p><ul class="gloss-bullets"><li>Treating every failure as a buying or replenishment problem, when a line recorded as available and physically absent is an inventory accuracy failure.</li><li>Tracking it without tracking accuracy alongside, so nobody can tell an availability problem from a picking one.</li><li>Counting a substitution as a fill, which flatters the figure and conceals that the customer did not get what was ordered.</li><li>Measuring against what was promised after the order was amended, rather than against the original demand, which quietly removes the failures.</li><li>Publishing the figure with no recent count standing behind the stock data, so the number characterises the database and not the aisle.</li><li>Setting the target without segmenting by category, which lets steady lines mask the ones customers actually could not get.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The format where both measures are hardest to hold is the small local site, so <a href="/glossary/stock-audit/micro-fulfilment-centre">micro-fulfilment centre (mfc)</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Order Fill Rate?</h3><p>Knowing the term is not the same as knowing the position. Where availability and accuracy need distinguishing at site level, the answer comes from a site rather than from a page, and that is what <a href="/stock-audit-for-dark-stores">stock audit for quick commerce</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-dark-stores">stock audit for quick commerce<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/micro-fulfilment-centre">micro-fulfilment centre (mfc)<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Order Fill Rate FAQs</h2><p class="faq-expanded__lead">Common questions about Order Fill Rate in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Order Fill Rate</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What does order fill rate measure?</h3><div class="faq-expanded__a" id="faq-a1"><p>The proportion of orders fulfilled complete and on time, without substitution or short supply. It is a customer-facing measure that also happens to be a strong indicator of stock record accuracy.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Why is a falling fill rate a stock warning?</h3><div class="faq-expanded__a" id="faq-a2"><p>Because repeated short-fills on items the system shows as available is the clearest sign of phantom stock. The fill rate usually starts deteriorating well before a scheduled count would reveal the underlying variance, which makes it an early warning.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Is a high fill rate always good?</h3><div class="faq-expanded__a" id="faq-a3"><p>Not if it is achieved by holding excess stock. Fill rate read alongside stock turn shows whether service is being bought with working capital, which is the trade-off the measure alone conceals.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
