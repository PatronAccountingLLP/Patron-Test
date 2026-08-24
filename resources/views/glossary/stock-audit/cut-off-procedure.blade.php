@extends('layouts.service-app')

@section('meta')
<title>Cut-Off Procedure: Why the Count Date Decides Accuracy</title>
<meta name="description" content="Cut-off procedures fix which receipts and despatches fall before the count date and which fall after. It is the most common single source of count error.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/cut-off-procedure">

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
            "name": "Cut-Off Procedure",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/cut-off-procedure"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cut-off-procedure/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cut-off-procedure/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is a cut-off error?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A cut-off error occurs when a movement is recorded in the wrong period relative to the count, so stock is counted twice or missed entirely. Goods received but not booked, or dispatched but not removed, are the usual causes."
            }
        },
        {
            "@type": "Question",
            "name": "How is cut-off controlled during a count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By freezing movements, recording the last document numbers for receipts and dispatches before counting starts, and reconciling anything that moved during the count against those numbers. Without the document reference the reconciliation cannot be tested."
            }
        },
        {
            "@type": "Question",
            "name": "Why is cut-off the most common count dispute?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because it produces a difference that is real in the records but not in the warehouse. Both parties can be counting correctly and still disagree, which is why the document reference matters more than recounting."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Count</div><h1 class="gl-h1">Cut-Off Procedure</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#at-the-count" class="gl-pill">At the count</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Cut-Off Procedure: Definition</div><div class="definition-box"><p>A cut-off procedure fixes the precise moment that separates transactions belonging to one accounting period from those belonging to the next, and tests that goods movements were recorded on the correct side of it. It is applied to receipts and dispatches around a period end, because an item physically moved before the cut-off but invoiced after it will otherwise be counted twice or missed entirely.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Cut-Off Procedure?</h2><p>Every reporting period ends at a moment, and goods do not stop moving to accommodate it. Consignments leave on the last afternoon and are invoiced the following week; deliveries arrive at night and are booked the next morning. Each of those creates a window in which the physical position and the recorded position describe different things, and the cut-off procedure exists to establish which side of the line each movement belongs to.</p><p>The consequence of getting it wrong is not a rounding difference. Goods dispatched before the period end but not removed from stock are counted as held and also recognised as sold, overstating both. Goods received and not booked are physically present with no corresponding liability, understating stock and creditors together. Because the errors are concentrated in a few days of documents, testing is directed at exactly those days: the goods receipt notes, despatch challans and invoices either side of the date, examined individually rather than sampled.</p></section><section id="at-the-count" class="gl-sec"><h2>What Cut-Off Procedure Means at a Physical Count</h2><p>This is the part of the count that happens at the gate rather than in the aisles.</p><ul class="gloss-bullets"><li>Noting where the inward and outward document series had reached when counting began, and photographing the register page that proves it.</li><li>Halting movement for the duration where the site can manage it, and where it cannot, logging every vehicle in and out with its documentation.</li><li>Walking the receiving bay and the despatch bay specifically, since goods staged there belong on one side of the line or the other and are the items most often counted twice or missed.</li><li>Gathering the paperwork covering the surrounding days, every item of which is read rather than sampled.</li><li>Agreeing with the site, in advance and in writing, which side any staged consignment falls on.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Cut-Off Procedure Works in Practice</h2><ol><li>A date and, where the operation runs continuously, a time are fixed as the boundary. Everything is measured against that instant.</li></ol><ol><li>The last document numbers issued before the boundary are recorded on both the receiving and despatch sides: the final goods receipt note, the final delivery challan, the final invoice.</li></ol><ol><li>Movements during the counting window are either suspended or logged separately, so anything that shifts while the work proceeds can be reconciled rather than argued about.</li></ol><ol><li>The documents for the days either side are then examined individually rather than sampled, because that narrow band is where the errors concentrate.</li></ol><ol><li>Each movement is assigned to its correct period. Goods despatched before the boundary leave stock and are recognised as sold; goods received before it enter stock with a matching liability. Anything on the wrong side is adjusted before the position is reported.</li></ol></section><section id="example" class="gl-sec"><h2>Cut-Off Procedure: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Document</th><th>Dated</th><th>Goods physically</th><th>Counted?</th><th>Correct treatment</th></tr></thead><tbody><tr><td>GRN 4417</td><td>31 March</td><td>In the yard, not received</td><td>Yes, in error</td><td>Exclude, value Rs 8,40,000</td></tr><tr><td>Invoice 2290</td><td>31 March</td><td>Despatched 1 April</td><td>No</td><td>Include, value Rs 11,20,000</td></tr><tr><td>GRN 4419</td><td>1 April</td><td>Received 31 March</td><td>No</td><td>Include, value Rs 3,60,000</td></tr><tr><td>Invoice 2288</td><td>30 March</td><td>Despatched 30 March</td><td>No</td><td>Correct as recorded</td></tr></tbody></table></div><p>A Vadodara chemicals unit closes its year on 31 March. Four documents around the boundary decide whether the closing figure is right.</p><p>Each of the first three lines is a timing error rather than a missing-goods problem, and the combined effect is an overstatement of Rs 8.40 lakh against understatements of Rs 14.80 lakh. The stock is not wrong; the date attached to it is. The last line is included deliberately as the control case: a document where the paperwork and the movement agree, which is what the other three should look like. Fixing cut-off means matching each movement to the day it physically happened, and the yard and despatch bay are where the mismatches concentrate.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Cut-Off Procedure</h2><p>Errors here are concentrated in a handful of days and are entirely avoidable.</p><ul class="gloss-bullets"><li>Continuing to receive and despatch during the count without logging the movements, leaving nobody able to say afterwards where any given consignment belonged.</li><li>Recording a despatch as a sale while the goods are still physically on the floor, which counts the same stock as both held and sold.</li><li>Accepting goods into the yard at the period end without booking them, producing stock that is present with no matching liability.</li><li>Filing the goods receipt notes and challans for the boundary days out of sequence, which turns a ten-minute reconciliation into a day of searching.</li><li>Applying the cut-off at the head office date rather than the site date where the two differ, which shifts every movement at that location by a day.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Counting a portion at a time is the alternative where an operation cannot stop, so <a href="/glossary/stock-audit/cycle-count">cycle count</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Cut-Off Procedure?</h3><p>Reading about it settles the meaning and nothing else. The moment cut-off has to be tested rather than assumed, the position has to be established independently, which is the substance of <a href="/stock-audit">inventory audit</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">inventory audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/cycle-count">cycle count<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Cut-Off Procedure FAQs</h2><p class="faq-expanded__lead">Common questions about Cut-Off Procedure in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Cut-Off Procedure</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What is a cut-off error?</h3><div class="faq-expanded__a" id="faq-a1"><p>A cut-off error occurs when a movement is recorded in the wrong period relative to the count, so stock is counted twice or missed entirely. Goods received but not booked, or dispatched but not removed, are the usual causes.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is cut-off controlled during a count?</h3><div class="faq-expanded__a" id="faq-a2"><p>By freezing movements, recording the last document numbers for receipts and dispatches before counting starts, and reconciling anything that moved during the count against those numbers. Without the document reference the reconciliation cannot be tested.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why is cut-off the most common count dispute?</h3><div class="faq-expanded__a" id="faq-a3"><p>Because it produces a difference that is real in the records but not in the warehouse. Both parties can be counting correctly and still disagree, which is why the document reference matters more than recounting.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
