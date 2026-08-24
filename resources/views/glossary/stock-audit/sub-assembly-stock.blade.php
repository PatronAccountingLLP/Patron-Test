@extends('layouts.service-app')

@section('meta')
<title>Sub-Assembly Stock: Between Raw Material and Finished</title>
<meta name="description" content="Sub-assemblies are part-built units that are no longer raw material but not yet finished goods. They need their own counting and costing treatment.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/sub-assembly-stock">

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
            "name": "Sub-Assembly Stock",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/sub-assembly-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/sub-assembly-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/sub-assembly-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is sub-assembly stock valued?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "At material cost plus the conversion cost incurred to the stage reached. Valuing it as raw material understates it and valuing it as finished goods overstates it, and either error distorts the work-in-progress position and the margin reported."
            }
        },
        {
            "@type": "Question",
            "name": "Why is sub-assembly stock easy to miss in a count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because it sits on the shop floor between processes rather than in a store, so counters focused on stores and finished goods walk past it. It is frequently the largest uncounted category in a plant."
            }
        },
        {
            "@type": "Question",
            "name": "How is the stage of a sub-assembly established?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "From the route card or operation record showing which operations have been completed, corroborated by physical inspection on the shop floor. A route card accepted without physical confirmation is a management representation rather than audit evidence."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Sub-Assembly Stock</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Sub-Assembly Stock: Definition</div><div class="definition-box"><p>Sub-assembly stock is components that have been combined into a completed intermediate unit which is held for later use in a higher assembly. It differs from work-in-progress in being complete at its own level rather than partway through an operation, which makes it countable as whole units and valuable at a determinable cost instead of at an estimated stage of completion.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Sub-Assembly Stock?</h2><p>Between raw components and finished product sits a category that is complete at its own level while still being an input to something else. A motor built and tested, a wiring harness assembled, or a pump ready for installation are each finished articles waiting to become part of a larger one, and they are held deliberately rather than caught mid-process.</p><p>That completeness is what separates them from work in progress and it simplifies both counting and valuation considerably. A sub-assembly can be counted as whole units, because it either exists or it does not, and it can be valued at a determinable cost, because every operation contributing to it has been completed and absorbed. Work in progress requires a stage of completion to be assessed and a proportion of cost attributed to it, and both halves are open to argument. Where a business holds a large sub-assembly balance, the questions that arise are about obsolescence and ageing rather than about how far through the process anything is.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Sub-Assembly Stock and Why</h2><p>The category appears wherever a product is built in stages and intermediate units are held between them.</p><ul class="gloss-bullets"><li>Automotive component manufacturing, where modules are built ahead of final assembly and buffered.</li><li>Engineering and machine tools, holding completed gearboxes, spindles and hydraulic units awaiting a machine build.</li><li>Electronics manufacturing, where populated boards are finished, tested and stocked before going into an enclosure.</li><li>White goods assembly, buffering motors, compressors and control units against line demand.</li><li>Capital equipment manufacture, where long build cycles make intermediate stocking necessary rather than optional.</li><li>It has no application in process industries producing a continuous output, nor in trading and distribution, where nothing is built and every item arrives complete.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Sub-Assembly Stock Works in Practice</h2><ol><li>Components are drawn from stores against a works order and built into an intermediate unit through a defined sequence of operations.</li></ol><ol><li>The unit is tested or inspected at completion and booked into stock under its own part number, because it is finished at its own level even though it is destined to become part of something larger.</li></ol><ol><li>Cost is absorbed and settled at that point. Material, labour and overhead for every contributing operation are complete, so a determinable cost attaches to the unit rather than an estimated stage of completion.</li></ol><ol><li>It is held until a higher assembly requires it, at which point it is issued exactly like a purchased component.</li></ol><ol><li>The holding is analysed by age, because units made for a line that has since been dropped have nowhere left to go. Those are identified and written down, which is the main valuation question this category raises.</li></ol></section><section id="example" class="gl-sec"><h2>Sub-Assembly Stock: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Level</th><th>Description</th><th>Quantity</th><th>Value each</th><th>Total</th></tr></thead><tbody><tr><td>Raw material</td><td>Sheet, bar, castings</td><td>-</td><td>-</td><td>Rs 62,00,000</td></tr><tr><td>Sub-assembly</td><td>Gearbox, built and tested</td><td>340</td><td>Rs 18,400</td><td>Rs 62,56,000</td></tr><tr><td>Sub-assembly</td><td>Control panel, wired</td><td>290</td><td>Rs 9,700</td><td>Rs 28,13,000</td></tr><tr><td>Finished goods</td><td>Complete machine</td><td>74</td><td>Rs 1,84,000</td><td>Rs 1,36,16,000</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Total</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Total"><rect x="26" y="112" width="62" height="68" rx="5" fill="#14365F"/><text x="57" y="104" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">6,200,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Raw material</text><rect x="114" y="111" width="62" height="69" rx="5" fill="#14365F"/><text x="145" y="103" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">6,256,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Sub-assembly</text><rect x="202" y="149" width="62" height="31" rx="5" fill="#14365F"/><text x="233" y="141" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,813,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Sub-assembly</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">13,616,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Finished goods</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Coimbatore machine builder holds stock at four levels on the same shop floor.</p><p>The two middle rows are the ones that get lost. A gearbox that is built, tested and waiting is neither raw material nor a finished machine, and if the record recognises only those two states its Rs 62.56 lakh either disappears or is counted at raw material value. Sub-assemblies also consume labour and overhead that must be in the valuation, so they cannot be valued from the purchase ledger. At a count they are physically obvious and easy to classify wrongly, since a tested gearbox on a rack looks much like one still being worked on.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Sub-Assembly Stock</h2><p>Its completeness is an advantage that is frequently thrown away.</p><ul class="gloss-bullets"><li>Reporting it inside work in progress, which drags a countable population into a category requiring stage assessment and makes both harder to verify.</li><li>Valuing it with an estimated completion percentage, when every contributing operation is finished and a determinable cost exists.</li><li>Overlooking ageing, since assemblies built for a product that has been discontinued will never be consumed and are carried at full cost.</li><li>Counting the assemblies without checking they are complete, so units missing a component are recorded as finished.</li><li>Carrying heavy balances to buffer the line and never revisiting them, which commits working capital by default rather than by decision.</li><li>Building assemblies to a forecast rather than to firm demand, which is how the obsolete portion of the balance is created.</li><li>Storing them without protection, so units complete on paper need rework before they can be used.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Material out at a processor is the same population in somebody else's hands, so <a href="/glossary/stock-audit/job-work-stock">job work stock</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Sub-Assembly Stock?</h3><p>A definition describes; it does not verify. Once completed intermediates have to be counted and valued, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit-for-auto-components">stock audit for auto components</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-auto-components">stock audit for auto components<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/job-work-stock">job work stock<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Sub-Assembly Stock FAQs</h2><p class="faq-expanded__lead">Common questions about Sub-Assembly Stock in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Sub-Assembly Stock</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is sub-assembly stock valued?</h3><div class="faq-expanded__a" id="faq-a1"><p>At material cost plus the conversion cost incurred to the stage reached. Valuing it as raw material understates it and valuing it as finished goods overstates it, and either error distorts the work-in-progress position and the margin reported.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Why is sub-assembly stock easy to miss in a count?</h3><div class="faq-expanded__a" id="faq-a2"><p>Because it sits on the shop floor between processes rather than in a store, so counters focused on stores and finished goods walk past it. It is frequently the largest uncounted category in a plant.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How is the stage of a sub-assembly established?</h3><div class="faq-expanded__a" id="faq-a3"><p>From the route card or operation record showing which operations have been completed, corroborated by physical inspection on the shop floor. A route card accepted without physical confirmation is a management representation rather than audit evidence.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
