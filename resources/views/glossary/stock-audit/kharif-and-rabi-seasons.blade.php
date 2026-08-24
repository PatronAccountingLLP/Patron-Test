@extends('layouts.service-app')

@section('meta')
<title>Kharif and Rabi Seasons: India's Two Cropping Cycles</title>
<meta name="description" content="Kharif is the monsoon-sown crop and Rabi the winter-sown crop. The two cycles set when agro-input stock peaks, and therefore when it should be counted.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/kharif-and-rabi-seasons">

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
            "name": "Kharif and Rabi Seasons",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/kharif-and-rabi-seasons"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/kharif-and-rabi-seasons/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/kharif-and-rabi-seasons/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How do cropping seasons affect stock audit timing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stock peaks before sowing and falls sharply afterwards, so a count taken at the peak is hardest to freeze and least representative. Counting after a season closes gives a cleaner cut-off."
            }
        },
        {
            "@type": "Question",
            "name": "Do Kharif and Rabi affect different products?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, and both the product mix and the timing differ by region as well as by season. The audit calendar therefore has to follow the local crop calendar rather than the financial year alone, or counts land at exactly the wrong moment."
            }
        },
        {
            "@type": "Question",
            "name": "How does seasonality affect carryover valuation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Stock unsold at season end may carry into the next, but only if shelf life, viability and continuing demand support it. Carrying end-of-season stock at full cost is a recurring overstatement in this sector."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Kharif and Rabi Seasons</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Kharif and Rabi Seasons: Definition</div><div class="definition-box"><p>Kharif and rabi are India's two principal cropping seasons. Kharif crops are sown with the arrival of the monsoon and harvested from autumn; rabi crops are sown after the monsoon withdraws and harvested in spring. Agricultural input inventories build ahead of each sowing window and empty rapidly once it opens, so both holdings and their verification follow this calendar rather than the financial year.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Kharif and Rabi Seasons?</h2><p>Indian agriculture runs on two cropping cycles keyed to the monsoon, and every business supplying inputs to farmers is organised around reaching those windows with product in position. Sowing concentrates into a few weeks, demand appears and disappears with it, and a supplier who is late to the window has missed the season rather than merely delayed a sale.</p><p>Stock levels follow that shape rather than the financial calendar. Holdings build steadily through the weeks before each sowing window, peak immediately before the draw, then empty rapidly once it opens, leaving carryover whose condition and viability are separate questions. The timing of a verification therefore determines what it can establish. A count taken at the peak measures the largest exposure of the year at the moment records are under most pressure, which is what a lender financing the trade wants to see. A count taken after the season measures almost nothing, however thoroughly it is performed.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Kharif and Rabi Seasons and Why</h2><p>The calendar governs any business whose demand is created by sowing rather than by trading conditions.</p><ul class="gloss-bullets"><li>Seed, fertiliser and crop protection manufacturers, whose entire production and distribution plan is built backwards from the two windows.</li><li>Agricultural input distributors and dealers, carrying peak stock immediately before each and almost none after.</li><li>Farm equipment and irrigation suppliers, following the same demand pattern with a longer purchase cycle.</li><li>Agri-commodity traders and processors, whose intake is driven by the harvest that follows each season.</li><li>Rural lending, where repayment capacity across a large borrower base moves with the same calendar.</li><li>It has no bearing on urban retail, manufacturing or services, whose demand follows the financial and festival calendars instead.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Kharif and Rabi Seasons Works in Practice</h2><ol><li>Manufacturing and procurement plan backwards from each sowing window, because product that reaches dealers after the window opens has lost the whole cycle, not simply run late.</li></ol><ol><li>Stock builds through the preceding weeks and is pushed out to dealers and retailers, so the holding shifts down the channel before demand appears.</li></ol><ol><li>Sowing opens and the draw happens quickly, over weeks rather than months, and the position empties almost as fast as it filled.</li></ol><ol><li>What remains afterwards becomes carryover, and its condition and viability are assessed separately, because a further season of storage lies ahead of it.</li></ol><ol><li>Verification is timed against this cycle rather than the financial year. Counting ahead of the draw captures the year's peak holding, which is the position a bank lending against this trade actually needs sight of; one taken after the season closes measures an emptied godown.</li></ol></section><section id="example" class="gl-sec"><h2>Kharif and Rabi Seasons: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Month</th><th>Kharif input stock</th><th>Rabi input stock</th><th>Total</th></tr></thead><tbody><tr><td>April</td><td>Rs 2.10 crore</td><td>Rs 0.20 crore</td><td>Rs 2.30 crore</td></tr><tr><td>June</td><td>Rs 4.80 crore</td><td>Rs 0.15 crore</td><td>Rs 4.95 crore</td></tr><tr><td>August</td><td>Rs 0.90 crore</td><td>Rs 1.40 crore</td><td>Rs 2.30 crore</td></tr><tr><td>October</td><td>Rs 0.30 crore</td><td>Rs 5.20 crore</td><td>Rs 5.50 crore</td></tr><tr><td>January</td><td>Rs 0.60 crore</td><td>Rs 1.10 crore</td><td>Rs 1.70 crore</td></tr></tbody></table></div><p>An agri-input dealer's stock across one year, split by the season the goods serve.</p><p>The total swings from Rs 1.70 crore to Rs 5.50 crore, a factor of more than three, without anything being wrong. Stock builds in advance of every sowing window, then drawn down through it. A lender sizing a limit on the January figure under-funds the business twice a year; one sizing on October over-funds it for most of the year. Verification timing carries the same problem in reverse: a count in a trough finds little and confirms little. Which season a holding serves also matters, since kharif material left unsold in October has missed its window and waits a full year.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Kharif and Rabi Seasons</h2><p>Planning against the financial calendar rather than the agricultural one causes most of these.</p><ul class="gloss-bullets"><li>Scheduling verification at the year end, which for many of these businesses measures an emptied godown and establishes almost nothing.</li><li>Applying one national schedule, when the monsoon reaches states weeks apart and a peak in one market coincides with a trough in another.</li><li>Booking a count during the despatch window, where it competes with the season and can cost more than it establishes.</li><li>Treating carryover as ordinary stock, when its viability and condition are the questions that decide whether it can be sold at all.</li><li>Reading strong pre-season despatches as demand, when goods pushed to dealers before a season that disappoints return as claims and credits.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Bulk material is measured rather than counted in this trade, so <a href="/glossary/stock-audit/weighbridge-verification">weighbridge verification</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Kharif and Rabi Seasons?</h3><p>Reading about it settles the meaning and nothing else. The moment a count has to be timed against the season rather than the year end, the position has to be established independently, which is the substance of <a href="/stock-audit-for-seeds-fertiliser-agro-inputs">auditing seed and fertiliser stock</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-seeds-fertiliser-agro-inputs">auditing seed and fertiliser stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/weighbridge-verification">weighbridge verification<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Kharif and Rabi Seasons FAQs</h2><p class="faq-expanded__lead">Common questions about Kharif and Rabi Seasons in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Kharif and Rabi Seasons</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How do cropping seasons affect stock audit timing?</h3><div class="faq-expanded__a" id="faq-a1"><p>Stock peaks before sowing and falls sharply afterwards, so a count taken at the peak is hardest to freeze and least representative. Counting after a season closes gives a cleaner cut-off.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Do Kharif and Rabi affect different products?</h3><div class="faq-expanded__a" id="faq-a2"><p>Yes, and both the product mix and the timing differ by region as well as by season. The audit calendar therefore has to follow the local crop calendar rather than the financial year alone, or counts land at exactly the wrong moment.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How does seasonality affect carryover valuation?</h3><div class="faq-expanded__a" id="faq-a3"><p>Stock unsold at season end may carry into the next, but only if shelf life, viability and continuing demand support it. Carrying end-of-season stock at full cost is a recurring overstatement in this sector.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
