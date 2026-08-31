@extends('layouts.service-app')

@section('meta')
<title>FEFO Explained: First Expired, First Out Stock Issue</title>
<meta name="description" content="FEFO issues stock by expiry date rather than by receipt date. In pharma and food it is the discipline that keeps expiry write-offs under proper control.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/fefo">

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
            "name": "FEFO (First Expired, First Out)",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/fefo"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/fefo/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/fefo/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is FEFO different from FIFO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "FIFO issues the oldest received stock first. FEFO issues the stock expiring soonest first, which is not always the oldest. Where shelf lives differ between batches, FIFO can leave shorter-dated stock behind."
            }
        },
        {
            "@type": "Question",
            "name": "Is FEFO a regulatory requirement in India?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For pharmaceutical stock the principle is required in practice through the good manufacturing and distribution requirements under the Drugs and Cosmetics Rules and Schedule M, which exist to keep expired product away from patients."
            }
        },
        {
            "@type": "Question",
            "name": "How is FEFO compliance tested?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By checking whether issues actually followed expiry order, not merely whether a policy exists. Sampling recent issues against the batch expiry available at the time is what reveals whether the discipline holds."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">FEFO (First Expired, First Out)</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">FEFO (First Expired, First Out): Definition</div><div class="definition-box"><p>FEFO is a stock rotation rule under which the batch with the earliest expiry date is issued first, regardless of when it was received. It differs from first-in-first-out, which orders issues by receipt date, and the two diverge whenever a later delivery carries a shorter remaining shelf life. FEFO is the appropriate rule wherever goods expire, because receipt order does not predict expiry order.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is FEFO (First Expired, First Out)?</h2><p>Rotating stock by receipt date is the intuitive rule and it fails wherever goods expire, because the order in which deliveries arrive tells you nothing about the order in which they will become unsaleable. A consignment received this week can carry a shorter remaining life than one received two months ago, depending on when each was manufactured and how long it sat in the supply chain before reaching you.</p><p>Issuing by expiry rather than by receipt closes that gap, and it is the appropriate discipline for pharmaceuticals, food, agricultural inputs and anything else with a dated life. Applying it requires the expiry date to be captured at receipt and held against the stock at location level, since a rule nobody can execute at the shelf is a policy rather than a control. Where a system holds only receipt dates, the picker has no way to comply, and the first evidence of the failure is usually a quantity of expired goods discovered behind newer stock at a count.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use FEFO (First Expired, First Out) and Why</h2><p>It governs any material carrying a dated life, since the sequence goods arrive in tells you nothing about the sequence they will pass out of use.</p><ul class="gloss-bullets"><li>Pharmaceutical manufacturing and distribution, where issuing out of date sequence has consequences well beyond a write-off.</li><li>Food processing and grocery retail, particularly in chilled and fresh categories where the usable window is days.</li><li>Agricultural inputs, where crop protection products and treated seed both carry defined lives.</li><li>Cosmetics and personal care, subject to shelf life and to labelling requirements around it.</li><li>Specialty chemicals and adhesives, where properties degrade on a schedule.</li><li>It is unnecessary in engineering components, metals and most durables, where receipt order is a perfectly adequate rotation rule because nothing expires.</li></ul></section><section id="how-works" class="gl-sec"><h2>How FEFO (First Expired, First Out) Works in Practice</h2><ol><li>Expiry is captured at goods receipt, read from the carton rather than assumed from the delivery date, and held against the specific batch.</li></ol><ol><li>The batch and its date are recorded against the storage position, so the information exists where the picker actually stands rather than only in a central system.</li></ol><ol><li>When an order is allocated, the system selects the batch with the nearest date among those available, regardless of when any of them arrived.</li></ol><ol><li>Physical arrangement supports the instruction. Stock is put away so the nearest-dated cartons sit at the front, since a rule the picker has to fight is a rule that will be broken under pressure.</li></ol><ol><li>Reserve and bulk positions fall under the same rule, since the earliest-dated goods drift to the back as fresher pallets arrive in front of them, and a discipline covering only the pick face abandons precisely that population.</li></ol></section><section id="example" class="gl-sec"><h2>FEFO (First Expired, First Out): A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Batch</th><th>Manufactured</th><th>Expires</th><th>Quantity</th><th>Picked under FIFO</th><th>Picked under FEFO</th></tr></thead><tbody><tr><td>A-114</td><td>12 Jan</td><td>11 Jan next year</td><td>400</td><td>First</td><td>Second</td></tr><tr><td>A-118</td><td>20 Jan</td><td>19 Jul</td><td>350</td><td>Second</td><td>First</td></tr><tr><td>A-121</td><td>02 Feb</td><td>01 Aug</td><td>500</td><td>Third</td><td>Third</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Quantity</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 290 210" width="290" height="210" role="img" aria-label="Quantity"><rect x="26" y="60" width="62" height="120" rx="5" fill="#14365F"/><text x="57" y="52" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">400</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">A-114</text><rect x="114" y="75" width="62" height="105" rx="5" fill="#14365F"/><text x="145" y="67" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">350</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">A-118</text><rect x="202" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="233" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">500</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">A-121</text><line x1="0" y1="181" x2="290" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A distributor holds three batches of the same product with different shelf lives.</p><p>Batch A-118 was made after A-114 and expires six months sooner, because it carries a shorter approved shelf life. Under first in, first out the older batch goes first and A-118 sits until it is close to expiry, at which point 350 units are written off. Under first expired, first out the picking order follows the expiry date and nothing is lost. The two rules coincide only where every batch has an identical shelf life, and that assumption is precisely what breaks down in pharmaceuticals and food. A warehouse system configured for FIFO will follow it silently and correctly, and still produce expiry write-offs nobody can explain.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With FEFO (First Expired, First Out)</h2><p>The rule is easy to adopt and frequently impossible to execute.</p><ul class="gloss-bullets"><li>Adopting the policy while the system holds only receipt dates, which leaves the picker no way to comply and makes the rule an aspiration.</li><li>Capturing expiry at receipt but not against the storage location, so the information exists somewhere nobody standing at the rack can reach it.</li><li>Assuming later deliveries always carry longer life, which is exactly the assumption that fails and the reason the rule exists.</li><li>Applying it to the pick face and ignoring bulk locations, where the oldest stock accumulates behind newer pallets.</li><li>Finding it only at a stocktake, where out-of-date units recovered from behind fresher pallets represent months of accumulated loss.</li><li>Rotating on the shop floor while the replenishment feed ignores the rule, so the discipline lasts exactly as far as the pick face.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Materials that can be retested rather than expired follow a different rule, so <a href="/glossary/stock-audit/retest-date">retest date</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With FEFO (First Expired, First Out)?</h3><p>This page explains the idea. The practical question begins when rotation discipline has to be tested at the shelf, and settling it means fieldwork of the kind <a href="/stock-audit-for-pharmaceutical-manufacturing">pharma stock audit</a> sets out. Scope is built from the sites involved and the state of the underlying records.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-pharmaceutical-manufacturing">pharma stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/retest-date">retest date<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">FEFO (First Expired, First Out) FAQs</h2><p class="faq-expanded__lead">Common questions about FEFO (First Expired, First Out) in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - FEFO (First Expired, First Out)',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "FEFO (First Expired, First Out)", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is FEFO different from FIFO?</h3><div class="faq-expanded__a" id="faq-a1"><p>FIFO issues the oldest received stock first. FEFO issues the stock expiring soonest first, which is not always the oldest. Where shelf lives differ between batches, FIFO can leave shorter-dated stock behind.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Is FEFO a regulatory requirement in India?</h3><div class="faq-expanded__a" id="faq-a2"><p>For pharmaceutical stock the principle is required in practice through the good manufacturing and distribution requirements under the Drugs and Cosmetics Rules and Schedule M, which exist to keep expired product away from patients.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How is FEFO compliance tested?</h3><div class="faq-expanded__a" id="faq-a3"><p>By checking whether issues actually followed expiry order, not merely whether a policy exists. Sampling recent issues against the batch expiry available at the time is what reveals whether the discipline holds.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
