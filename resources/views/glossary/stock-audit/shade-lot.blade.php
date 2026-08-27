@extends('layouts.service-app')

@section('meta')
<title>Shade Lot: Why Two Rolls of the Same SKU Are Not Equal</title>
<meta name="description" content="A shade lot identifies fabric dyed in a single batch. Rolls from different lots vary visibly in colour, so they cannot be used interchangeably in one order.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/shade-lot">

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
            "name": "Shade Lot",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/shade-lot"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/shade-lot/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/shade-lot/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Why does shade lot affect usable stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because fabric from different dye lots varies in shade and cannot be mixed within one order. Stock sufficient in total may still be unusable if it is split across lots too small to fulfil a requirement."
            }
        },
        {
            "@type": "Question",
            "name": "How is shade lot recorded during a count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "As a sub-level beneath the article, so quantity is held per lot. If the count sheet has no lot field the information is lost at the moment of counting and cannot be reconstructed afterwards."
            }
        },
        {
            "@type": "Question",
            "name": "What happens to residual shade lots?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "They accumulate as short lengths that cannot meet bulk orders, and their realisable value falls well below the article cost. Ageing by lot size rather than by date is what surfaces this."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Shade Lot</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Shade Lot: Definition</div><div class="definition-box"><p>A shade lot is a quantity of fabric or yarn dyed together in one batch, and therefore matching in colour throughout. Material of the same specification from a different lot will differ in shade to a degree that is visible when placed side by side. Because garments cut across lots show that difference, saleable quantity is counted within a lot rather than across the item code.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Shade Lot?</h2><p>Dyeing is a batch process, and colour is matched within a batch rather than across batches. The variation between one batch and the next is small enough to pass most quality standards and large enough to be visible when two pieces are placed side by side, which is the only test that matters commercially. A garment cut across two batches shows the difference at a seam.</p><p>The consequence for stock records is that an item code is not a saleable quantity. A system reporting a substantial holding of one code, spread across a dozen small batches, is reporting material that cannot fill a single ordinary order, because the customer needs matched cloth rather than a total. Counting therefore has to capture the batch identifier alongside the quantity, and a count that records only the code produces a figure that is arithmetically correct and commercially meaningless. Small residual batches accumulate quietly, age without moving, and realise a fraction of cost, which is where the valuation questions in this trade concentrate.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Shade Lot and Why</h2><p>Wherever colour is applied in batches and the variation between batches is visible in the finished article.</p><ul class="gloss-bullets"><li>Textile processing and garment manufacturing, where panels taken from separate dye charges reveal the mismatch along a seam and the buyer sends the order back.</li><li>Ceramic tiles, where the same issue arises across a floor and batch is printed on every carton for that reason.</li><li>Paints and coatings, where a wall finished from two batches shows a line.</li><li>Yarn and thread manufacture, feeding the same problem into everything made downstream.</li><li>Laminates, veneers and decorative surfaces, subject to the identical constraint.</li><li>It has no application where colour is not a product attribute, which is most of engineering, food and general distribution.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Shade Lot Works in Practice</h2><ol><li>Cloth or thread goes through the dye vessel together as one charge, and an identifier is allocated to that charge at the point of dyeing.</li></ol><ol><li>The identifier is printed onto the ticket of every roll from the batch and entered against the stock record, so it survives beyond the physical label.</li></ol><ol><li>Rolls are stored grouped by that identifier, since separating them physically is what makes matched quantity readable off the rack rather than reconstructed from paperwork.</li></ol><ol><li>When an order is filled, the requirement is met from a single batch or from batches deliberately matched, because colour drifts between batches enough to show at a seam.</li></ol><ol><li>At a count, quantity is recorded against the batch rather than only the item code, and the closing position is read as saleable quantities per batch. Leftover part-batches are pulled aside, because cloth insufficient to meet a customer's smallest order fetches only a portion of the going rate.</li></ol></section><section id="example" class="gl-sec"><h2>Shade Lot: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Lot</th><th>Metres</th><th>Usable together</th><th>Value</th></tr></thead><tbody><tr><td>Lot 4417-A</td><td>2,400</td><td>Yes, within tolerance</td><td>Rs 3,26,400</td></tr><tr><td>Lot 4417-B</td><td>1,850</td><td>Yes, within tolerance</td><td>Rs 2,51,600</td></tr><tr><td>Lot 4419-C</td><td>1,200</td><td>No, visible variation</td><td>Rs 1,63,200</td></tr><tr><td>Total same design</td><td>5,450</td><td>4,250 usable as one</td><td>-</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Metres</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Metres"><rect x="26" y="114" width="62" height="66" rx="5" fill="#14365F"/><text x="57" y="106" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,400</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Lot 4417-A</text><rect x="114" y="129" width="62" height="51" rx="5" fill="#14365F"/><text x="145" y="121" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">1,850</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Lot 4417-B</text><rect x="202" y="147" width="62" height="33" rx="5" fill="#14365F"/><text x="233" y="139" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">1,200</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Lot 4419-C</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">5,450</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Total same desig</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A garment unit in Tiruppur holds 5,450 metres of one printed design across three dye lots.</p><p>The system shows a single code with 5,450 metres available, which is why an order for 5,000 metres is accepted. It cannot be filled. Lot 4419-C differs visibly enough that panels cut from it will not match panels from the other two in the same garment, so the real availability against that order is 4,250 metres. Fabric is fungible only within a lot. Where lot identity is not held in the record, a stock figure that is arithmetically correct is commercially wrong, and the discovery happens at cutting rather than at counting.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Shade Lot</h2><p>Reporting quantity without lot identity produces a figure no order can be filled from.</p><ul class="gloss-bullets"><li>Adding a code up across every batch and offering the result as available, when an order has to be filled from colour that matches rather than from a total.</li><li>Recording the batch on the ticket but not in the system, so the information dies with the label.</li><li>Re-ticketing rolls after inspection without carrying the batch reference forward, which destroys the identity permanently.</li><li>Consolidating remnants onto a single ticket, so several batches become one and none of them can be matched afterwards.</li><li>Stacking mixed batches in one bay and reading the shelf label instead of the tickets, which fixes the total and leaves the make-up unprovable.</li><li>Carrying small orphan batches at full rate, when material that cannot fill a minimum order realises a fraction of it.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The weight per unit area is what ties length and weight together, so <a href="/glossary/stock-audit/gsm-fabric-weight">gsm fabric weight</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Shade Lot?</h3><p>Knowing the term is not the same as knowing the position. Where lot identity has to be captured at the count, the answer comes from a site rather than from a page, and that is what <a href="/stock-audit-for-textile">stock audit for textile mills</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-textile">stock audit for textile mills<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/gsm-fabric-weight">gsm fabric weight<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Shade Lot FAQs</h2><p class="faq-expanded__lead">Common questions about Shade Lot in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.faq-enquiry-form', [
    'enquiryTitle'   => 'Talk to the stock audit team',
    'enquirySub'     => 'Tell us where the stock sits and we will scope the count.',
    'enquiryService' => 'Shade Lot',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Why does shade lot affect usable stock?</h3><div class="faq-expanded__a" id="faq-a1"><p>Because fabric from different dye lots varies in shade and cannot be mixed within one order. Stock sufficient in total may still be unusable if it is split across lots too small to fulfil a requirement.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is shade lot recorded during a count?</h3><div class="faq-expanded__a" id="faq-a2"><p>As a sub-level beneath the article, so quantity is held per lot. If the count sheet has no lot field the information is lost at the moment of counting and cannot be reconstructed afterwards.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens to residual shade lots?</h3><div class="faq-expanded__a" id="faq-a3"><p>They accumulate as short lengths that cannot meet bulk orders, and their realisable value falls well below the article cost. Ageing by lot size rather than by date is what surfaces this.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
