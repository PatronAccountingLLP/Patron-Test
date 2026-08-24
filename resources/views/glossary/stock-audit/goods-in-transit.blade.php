@extends('layouts.service-app')

@section('meta')
<title>Goods-in-Transit: Stock You Own but Cannot See Yet</title>
<meta name="description" content="Goods-in-transit are owned but not physically present at the count date. Whether they belong in your figure depends on shipping terms and on the cut-off.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/goods-in-transit">

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
            "name": "Goods-in-Transit",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/goods-in-transit"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/goods-in-transit/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/goods-in-transit/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "When does ownership of goods in transit pass?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It depends on the delivery terms agreed. The terms determine whose inventory the goods sit in at the cut-off date, which is why the audit examines the contract rather than assuming the physical location decides it."
            }
        },
        {
            "@type": "Question",
            "name": "How is goods in transit evidenced at a count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By dispatch documents, carrier records and an acknowledgement from the receiving location, with the document numbers recorded at cut-off. A list of in-transit items presented without those supporting documents is a management assertion rather than audit evidence."
            }
        },
        {
            "@type": "Question",
            "name": "Why is goods in transit double counted so often?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because the dispatching location removes it late and the receiving location books it early, or both. Without a common cut-off and matched document references, the same stock legitimately appears in two places."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Stock That Is Not Yours</div><h1 class="gl-h1">Goods-in-Transit</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#ownership" class="gl-pill">Ownership</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Goods-in-Transit: Definition</div><div class="definition-box"><p>Goods-in-transit are items that have left the seller's premises but not yet arrived at the buyer's, so they are physically at neither location on the date of a count. Ownership at that moment is settled by the delivery terms agreed between the parties, not by where the goods happen to be. Whichever party holds title must include them in its own inventory.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Goods-in-Transit?</h2><p>At any cut-off there is always some inventory that is nowhere. It has left one warehouse and not reached the next, so a count at either end will miss it entirely, and yet it belongs to somebody and appears on somebody's accounts. Which party carries it turns on whatever shipping terms the two sides struck, and never on where the lorry happens to be.</p><p>The balance is examined more closely than its size usually warrants, because it is the one account where a difference can sit and look legitimate. Goods genuinely on a lorry clear within a predictable period, so a transit figure that persists across successive period ends, or that is a similar size at each one, is not describing a journey. Evidence is required from both ends: a despatch note from the sending location and an acknowledgement from the receiving one. A transit balance supported only by the gap between two records is not evidence of transit at all.</p></section><section id="ownership" class="gl-sec"><h2>Who Owns the Stock Under Goods-in-Transit</h2><p>Title turns on the delivery basis the parties contracted on, not on the vehicle's position.</p><ul class="gloss-bullets"><li>Where the terms pass risk at the seller's premises, the buyer owns the goods from loading and carries them in inventory throughout the journey, including at any cut-off falling inside it.</li><li>Where risk passes on arrival, the seller retains them until they are received and must include them despite having despatched them.</li><li>The practical test is the contract and the transport documentation, since a consignment note showing who bears the risk settles the question faster than any argument about where the lorry is.</li><li>The balance sheet consequence is symmetrical: exactly one party should be carrying the goods. Both carrying them, or neither, is the error this test exists to catch.</li><li>Whichever party carries them also carries the insurance exposure for the journey.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Goods-in-Transit Works in Practice</h2><ol><li>Goods leave the seller's premises against a despatch document and a transporter's consignment note, and where the value requires it an electronic movement permit is generated.</li></ol><ol><li>Ownership while the consignment moves follows the delivery basis struck in the contract, nothing else. That, and not the vehicle's position, decides whose inventory they belong to at any moment.</li></ol><ol><li>At a cut-off, whichever party holds title includes them in its reported stock even though a count at either location will not find them.</li></ol><ol><li>Supporting evidence is assembled from both ends: the despatch note from the sender and the acknowledgement from the receiver once the goods arrive.</li></ol><ol><li>The balance clears when the goods are received and booked. Anything still sitting in the account after a normal transit period is investigated as a difference rather than carried forward as a timing item.</li></ol></section><section id="example" class="gl-sec"><h2>Goods-in-Transit: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Consignment</th><th>Terms</th><th>Despatched</th><th>Received</th><th>In whose stock at 31 March</th></tr></thead><tbody><tr><td>Inbound, Rs 34,00,000</td><td>Ex-works</td><td>27 March</td><td>3 April</td><td>Buyer's, though not on site</td></tr><tr><td>Inbound, Rs 18,00,000</td><td>Delivered</td><td>29 March</td><td>2 April</td><td>Seller's</td></tr><tr><td>Outbound, Rs 46,00,000</td><td>Ex-works</td><td>30 March</td><td>4 April</td><td>Customer's</td></tr><tr><td>Outbound, Rs 12,00,000</td><td>Delivered</td><td>31 March</td><td>5 April</td><td>Still the despatcher's</td></tr></tbody></table></div><p>A Jamnagar brass unit has four consignments on the road at year end.</p><p>Possession is not the test; the delivery term is. The first line sits in the buyer's stock although nobody at the buyer's site has seen it, because title passed at the seller's gate. The last line is still the despatcher's despite having left the premises. A count of what is physically present will therefore miss Rs 34 lakh that belongs in the figure and may wrongly include Rs 12 lakh that has gone. The reconciliation is done from despatch documents and the terms on each order, and it is the single largest source of year-end differences between a physical count and a book figure.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Goods-in-Transit</h2><p>The balance is small, easy to justify and therefore easy to abuse.</p><ul class="gloss-bullets"><li>Supporting it only with the difference between two records, which is not evidence that anything is actually on a vehicle.</li><li>Determining ownership from where the goods physically are rather than from the shipping terms the parties agreed.</li><li>Letting the balance persist across successive period ends, when goods genuinely in transit clear within a predictable window.</li><li>Counting the same consignment at both ends because the two locations were counted on different dates, which inflates the consolidated position.</li><li>Omitting it entirely from the reported figure, so stock the business owns and has paid for appears nowhere at all.</li><li>Treating a persistent balance as a timing difference rather than investigating it, when goods that never arrive are a loss and not a delay.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Goods sitting under a customs licence are a different kind of not-yours, so <a href="/glossary/stock-audit/bonded-stock">bonded stock</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Goods-in-Transit?</h3><p>Reading about it settles the meaning and nothing else. The moment stock is spread across locations and somebody has to reconcile it, the position has to be established independently, which is the substance of <a href="/stock-audit-for-warehouse">warehouse stock audit</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-warehouse">warehouse stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/bonded-stock">bonded stock<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Goods-in-Transit FAQs</h2><p class="faq-expanded__lead">Common questions about Goods-in-Transit in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Goods-in-Transit</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">When does ownership of goods in transit pass?</h3><div class="faq-expanded__a" id="faq-a1"><p>It depends on the delivery terms agreed. The terms determine whose inventory the goods sit in at the cut-off date, which is why the audit examines the contract rather than assuming the physical location decides it.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is goods in transit evidenced at a count?</h3><div class="faq-expanded__a" id="faq-a2"><p>By dispatch documents, carrier records and an acknowledgement from the receiving location, with the document numbers recorded at cut-off. A list of in-transit items presented without those supporting documents is a management assertion rather than audit evidence.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why is goods in transit double counted so often?</h3><div class="faq-expanded__a" id="faq-a3"><p>Because the dispatching location removes it late and the receiving location books it early, or both. Without a common cut-off and matched document references, the same stock legitimately appears in two places.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
