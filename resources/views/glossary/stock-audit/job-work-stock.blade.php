@extends('layouts.service-app')

@section('meta')
<title>Job Work Stock: Your Material at a Vendor's Premises</title>
<meta name="description" content="Job work stock is material you own that sits with a processing vendor. It stays in your books and must be verified where it is, not where you happen to be.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/job-work-stock">

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
            "name": "Job Work Stock",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/job-work-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/job-work-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/job-work-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Whose inventory is job work stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The principal retains ownership throughout the job work process, so the goods remain in the principal inventory and on the principal balance sheet even while they sit physically at the job worker premises and outside the principal direct control."
            }
        },
        {
            "@type": "Question",
            "name": "How is job work stock reconciled?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Quantity sent is compared against quantity returned plus scrap and normal process loss. A gap beyond the agreed tolerance is either recoverable from the job worker or a write-off, and either way needs explanation."
            }
        },
        {
            "@type": "Question",
            "name": "Does the principal have a right to inspect job work stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Access is a contractual right, not an automatic one. Where the job work agreement contains no inspection clause, the principal has no enforceable means of entering the premises to count, and the stock stays unverified however clear its ownership may be."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Stock That Is Not Yours</div><h1 class="gl-h1">Job Work Stock</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#ownership" class="gl-pill">Ownership</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Job Work Stock: Definition</div><div class="definition-box"><p>Job work stock is material a principal sends to a processor for a specified operation, with ownership remaining throughout with the principal who sent it. Custody transfers and title does not, so the goods stay on the principal's balance sheet and must be excluded from the processor's. Movement in each direction is supported by a challan identifying quantity, description and the operation to be performed.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Job Work Stock?</h2><p>Manufacturing rarely happens entirely under one roof. Components go out for machining, fabric goes out for dyeing, and castings go out for finishing, and in each case the sender keeps ownership while somebody else does the work. The processor holds the material as a bailee, may deal with it only as instructed, and must return it or whatever it becomes.</p><p>Under GST the movement travels on a delivery challan rather than an invoice, and the return timelines carry a real consequence. Inputs have to come back within the prescribed period and capital goods within their own longer one, and material not returned in time is treated as having been supplied on the day it originally left, with tax payable accordingly. That is why an aged balance at a processor is a tax exposure and not merely an untidy reconciliation. Verification is complicated by the fact that a processor working for several senders holds physically similar material for each, so segregation is the first thing examined on arrival.</p></section><section id="compliance" class="gl-sec"><h2>Job Work Stock Under Indian Law</h2><p>Position: a principal may send inputs or capital goods to a job worker without payment of tax, moving on a challan issued for the purpose instead of a tax invoice. Inputs must be received back or supplied onward within one year, and capital goods within three years.</p><ul class="gloss-bullets"><li>Where goods are not returned within the applicable period, the transfer is treated as a supply made on the day the goods were originally sent out, and tax becomes payable with interest from that date.</li><li>Source: section 143 of the Central Goods and Services Tax Act 2017, with the delivery challan requirement in rule 55 of the CGST Rules 2017.</li><li>Note: the periods can be extended by the Commissioner, by a further year for inputs and two years for capital goods, on cause being shown. The extension is not automatic and has to be sought.</li></ul></section><section id="ownership" class="gl-sec"><h2>Who Owns the Stock Under Job Work Stock</h2><p>The sender owns the material throughout, and the processor never acquires any interest in it.</p><ul class="gloss-bullets"><li>Custody moves and title does not, because nothing has been sold. Holding it in trust, the processor is confined to the instructions given and remains answerable for every unit.</li><li>It remains within the sender's inventory, flagged as sitting on somebody else's premises, and never appears in the processor's own accounts.</li><li>The evidence is the challan under which it travelled, which describes the material and the work required and is deliberately not an invoice.</li><li>Output made from it belongs to the sender as well, along with recoverable scrap where the arrangement provides for its return.</li><li>The tax position is separate from the ownership one: material not returned within the statutory period is deemed supplied on the original despatch date even though title never moved.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Job Work Stock Works in Practice</h2><ol><li>A challan is issued setting out what is being sent, how much, and what work is wanted, and the consignment moves on that document instead of an invoice.</li></ol><ol><li>Ownership stays with the principal throughout. The material remains in the principal's inventory, disclosed as held at a third party, and is excluded from the processor's own stock entirely.</li></ol><ol><li>The processor performs the operation and returns the output, again under a challan, together with any unused material and, where the arrangement requires, the recoverable scrap.</li></ol><ol><li>The principal reconciles the movement: material sent, less material consumed in what came back, less material returned unprocessed, should equal the balance still lying at the processor, with process loss inside the agreed allowance.</li></ol><ol><li>Statutory return periods are tracked, because anything still outstanding when the permitted window closes is deemed supplied as at the original despatch date.</li></ol></section><section id="example" class="gl-sec"><h2>Job Work Stock: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Movement</th><th>Quantity sent</th><th>Expected return</th><th>Actual return</th><th>Position</th></tr></thead><tbody><tr><td>Castings to machining</td><td>5,000 nos</td><td>5,000</td><td>4,880</td><td>120 unreturned</td></tr><tr><td>Yarn to dyeing</td><td>12,000 kg</td><td>11,400 kg</td><td>11,340 kg</td><td>Within normal loss</td></tr><tr><td>Sheets to fabrication</td><td>800 nos</td><td>800</td><td>640</td><td>160 still at the vendor</td></tr><tr><td>Value at the vendor</td><td>-</td><td>-</td><td>-</td><td>Rs 28,60,000</td></tr></tbody></table></div><p>An Indore engineering unit sends material out for processing under a challan and expects it back in an agreed form.</p><p>Ownership never moves, so all Rs 28.60 lakh remains the sender's stock and belongs in the closing figure even though none of it is on site. Two of the three lines behave differently. Dyeing loses 5% of the yarn as an accepted process loss, so a shortfall there is expected and is written into the challan. The 120 unreturned castings are not a process loss and are either scrap the vendor should have returned or material unaccounted for. Tracking is by challan and by ageing: material outstanding beyond the agreed period is the first place a shortfall is found.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Job Work Stock</h2><p>The tax consequences are what turn an untidy balance into an expensive one.</p><ul class="gloss-bullets"><li>Letting material sit at a processor beyond the permitted period, at which point the law deems a supply to have occurred on the despatch date, and tax falls due on it.</li><li>Removing the material from the books on despatch, when ownership never transferred and the goods remain the sender's asset.</li><li>Moving goods without a delivery challan, or without the e-way bill where the value requires one, which leaves the movement unsupported.</li><li>Accepting the processor's confirmation as verification of a material or long-outstanding balance, when only a physical count establishes that the goods exist.</li><li>Reconciling the balance as a single figure rather than separating material awaiting work, material in process, finished output and scrap, which is where the process loss actually shows.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Completed intermediates held for later use sit next to it on the same floor, so <a href="/glossary/stock-audit/sub-assembly-stock">sub-assembly stock</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Job Work Stock?</h3><p>Understanding the term is the easy half. The harder half arrives when material at a processor has to be verified rather than confirmed by letter, and it is answered on site rather than on paper. <a href="/stock-audit-for-auto-components">stock audit for auto components</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-auto-components">stock audit for auto components<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/sub-assembly-stock">sub-assembly stock<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Job Work Stock FAQs</h2><p class="faq-expanded__lead">Common questions about Job Work Stock in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Job Work Stock',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Whose inventory is job work stock?</h3><div class="faq-expanded__a" id="faq-a1"><p>The principal retains ownership throughout the job work process, so the goods remain in the principal inventory and on the principal balance sheet even while they sit physically at the job worker premises and outside the principal direct control.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is job work stock reconciled?</h3><div class="faq-expanded__a" id="faq-a2"><p>Quantity sent is compared against quantity returned plus scrap and normal process loss. A gap beyond the agreed tolerance is either recoverable from the job worker or a write-off, and either way needs explanation.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Does the principal have a right to inspect job work stock?</h3><div class="faq-expanded__a" id="faq-a3"><p>Access is a contractual right, not an automatic one. Where the job work agreement contains no inspection clause, the principal has no enforceable means of entering the premises to count, and the stock stays unverified however clear its ownership may be.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
