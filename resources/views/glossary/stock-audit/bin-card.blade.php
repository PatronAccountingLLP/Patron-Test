@extends('layouts.service-app')

@section('meta')
<title>Bin Card: The Running Stock Record Kept at the Rack</title>
<meta name="description" content="A bin card is the running quantity record kept at the storage location itself, updated as stock moves. It is checked against the stores ledger at audit.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/bin-card">

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
            "name": "Bin Card",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/bin-card"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/bin-card/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/bin-card/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What information does a bin card carry?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Item identity, location, and a running record of receipts and issues with dates, maintained at the storage point itself. It captures the movement at the moment it happens, which is what makes it useful."
            }
        },
        {
            "@type": "Question",
            "name": "Are bin cards obsolete with modern systems?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Only where the system is updated at the bin in real time. Where posting happens later or centrally, the bin card still captures movements that the system has not yet recorded."
            }
        },
        {
            "@type": "Question",
            "name": "What does a bin card to physical difference indicate?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "That stock moved without being recorded even at the point of custody. This is more serious than a ledger difference, because the bin card is maintained by the person handling the stock."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Records and Evidence</div><h1 class="gl-h1">Bin Card</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#evidence" class="gl-pill">Evidence</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Bin Card: Definition</div><div class="definition-box"><p>A bin card is a quantity-only record kept at the physical storage location itself, written up by the storekeeper as material is received into or issued from that bin. It carries no values. Its purpose is immediate: anybody at the bin can read the balance that should be present, which makes it the record most directly comparable with what is physically standing there.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Bin Card?</h2><p>A bin card is deliberately simple. It sits at the storage location, carries quantity only, and is filled in by whoever handles the goods at the instant they move, which makes it the record closest to reality and the one that lines up most tightly against the goods physically present. Somebody standing at the rack can see what ought to be there without opening a system or asking anyone.</p><p>Its value depends entirely on being maintained contemporaneously. A card written up at the end of a shift from memory, or from slips that may or may not have survived, is no better than any other retrospective record, and the failure mode is specific: urgent issues made against a verbal instruction, where material leaves and nothing is written anywhere. Where the discipline holds, the card is the fastest way to identify whether a difference arose on the floor or in the accounts office, because it and the stores ledger were written by different people from different sources and only one of them can agree with a count.</p></section><section id="evidence" class="gl-sec"><h2>What an Auditor Accepts as Evidence of Bin Card</h2><p>What gives the card its value is contemporaneity, so that is what gets examined.</p><ul class="gloss-bullets"><li>Accepted: entries in different hands and different inks accumulated over time, which is what a record written as material moved actually looks like.</li><li>Accepted: agreement with the physical quantity at the position, tested on a sample chosen by value and by movement rather than by convenience.</li><li>Accepted: a divergence from the accounting record that can be explained by a specific document in transit, since that is the ordinary and expected condition.</li><li>Rejected: a card completed in one hand at one sitting, which is a reconstruction whatever the balances say.</li><li>Rejected: a card that agrees perfectly with the accounting record on every line, because two records maintained independently from different sources do not behave that way.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Bin Card Works in Practice</h2><ol><li>A card is opened for each item at each storage position, showing the item, the location and the opening quantity.</li></ol><ol><li>Every time material physically arrives at that position, the storekeeper writes the quantity in and computes the new balance, at the moment it happens rather than afterwards.</li></ol><ol><li>Every time material physically leaves, the same is done in reverse. No exception is allowed, not even for a rush withdrawal authorised by word of mouth, which is exactly the sort that otherwise leaves no trace.</li></ol><ol><li>The card therefore always shows what should be standing in that position, and anybody at the rack can read it without consulting a system or asking a person.</li></ol><ol><li>At a count, the physical quantity is compared with the card and with the accounting record. Since each was compiled by a different person working from a different input, setting them side by side reveals which one is genuinely being kept up.</li></ol></section><section id="example" class="gl-sec"><h2>Bin Card: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Date</th><th>In</th><th>Out</th><th>Balance shown</th><th>Physical</th><th>Agrees?</th></tr></thead><tbody><tr><td>11 Sept</td><td>240</td><td>-</td><td>640</td><td>640</td><td>Yes</td></tr><tr><td>13 Sept</td><td>-</td><td>180</td><td>460</td><td>460</td><td>Yes</td></tr><tr><td>17 Sept</td><td>-</td><td>120</td><td>340</td><td>316</td><td>No, short 24</td></tr><tr><td>19 Sept</td><td>300</td><td>-</td><td>640</td><td>616</td><td>No, short 24</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Physical</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Physical"><rect x="26" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="57" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">640</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">11 Sept</text><rect x="114" y="72" width="62" height="108" rx="5" fill="#14365F"/><text x="145" y="64" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">460</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">13 Sept</text><rect x="202" y="106" width="62" height="74" rx="5" fill="#14365F"/><text x="233" y="98" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">316</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">17 Sept</text><rect x="290" y="36" width="62" height="144" rx="5" fill="#E8712C"/><text x="321" y="28" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">616</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">19 Sept</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A card hangs on the rack at a Hosur electronics store and is written up by the storekeeper at each movement.</p><p>The card carries quantity only, no value, and it sits at the point of movement rather than in an office. That is its strength and its limit. It captures the 17 September shortage on the day it appears, days before a month-end reconciliation would, because the person handling the material records the balance in front of them. But it proves nothing about cost, and it is written by the custodian of the goods, so a card that agrees with the ledger is corroboration rather than independent confirmation. The shortage persisting on 19 September is the useful signal: a one-day discrepancy is usually a timing error, one that carries forward is not.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Bin Card</h2><p>Its whole value rests on being written at the moment of movement.</p><ul class="gloss-bullets"><li>Filling it in after the fact, from recollection or from slips that may have gone astray, which strips it of the one advantage it had.</li><li>Exempting urgent issues from the discipline, which is precisely the category where material leaves with nothing written anywhere.</li><li>Allowing anybody to write on it, so entries cannot be attributed and a difference cannot be traced to a person.</li><li>Treating a disagreement with the accounting record as a card error by default, when the card is frequently the more accurate of the two and the physical count is what settles it.</li><li>Abandoning it once a system is installed, which removes the one independent record available for comparison.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Small tooling is the category this record was never designed to control, so <a href="/glossary/stock-audit/tool-crib">tool crib</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Bin Card?</h3><p>Reading about it settles the meaning and nothing else. The moment stores discipline needs testing against an independent count, the position has to be established independently, which is the substance of <a href="/stock-audit-for-engineering-machine-tools">engineering stock audit</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-engineering-machine-tools">engineering stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/tool-crib">tool crib<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Bin Card FAQs</h2><p class="faq-expanded__lead">Common questions about Bin Card in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Bin Card',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Bin Card", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What information does a bin card carry?</h3><div class="faq-expanded__a" id="faq-a1"><p>Item identity, location, and a running record of receipts and issues with dates, maintained at the storage point itself. It captures the movement at the moment it happens, which is what makes it useful.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Are bin cards obsolete with modern systems?</h3><div class="faq-expanded__a" id="faq-a2"><p>Only where the system is updated at the bin in real time. Where posting happens later or centrally, the bin card still captures movements that the system has not yet recorded.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What does a bin card to physical difference indicate?</h3><div class="faq-expanded__a" id="faq-a3"><p>That stock moved without being recorded even at the point of custody. This is more serious than a ledger difference, because the bin card is maintained by the person handling the stock.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
