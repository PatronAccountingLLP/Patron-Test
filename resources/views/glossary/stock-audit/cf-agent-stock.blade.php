@extends('layouts.service-app')

@section('meta')
<title>CF Agent Stock: Inventory Held by Your Forwarding Agent</title>
<meta name="description" content="Clearing and forwarding agents hold stock the company still owns, ready for onward despatch. It sits in your books and on somebody else's premises.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/cf-agent-stock">

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
            "name": "CF Agent Stock",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/cf-agent-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cf-agent-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cf-agent-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Who owns stock held by a C&F agent?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The company owns it. The agent holds and dispatches the stock under an agency arrangement rather than buying it, so it remains company inventory and must be included both in the physical count and in the balance sheet."
            }
        },
        {
            "@type": "Question",
            "name": "How is C&F agent stock verified?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By counting at the agent premises and reconciling the result to both the company dispatch records and the agent own stock records. Relying on the agent periodic statement alone leaves any difference between the two entirely invisible."
            }
        },
        {
            "@type": "Question",
            "name": "What is the common failure with C&F stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is excluded from the count because it is not at a company warehouse. That produces an understated inventory balance and an unverified stock position at the very location with least oversight."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">CF Agent Stock</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">CF Agent Stock: Definition</div><div class="definition-box"><p>CF agent stock is inventory held by a carrying and forwarding agent, who stores and dispatches goods on the manufacturer's instructions in return for a fee. The agent handles the goods without ever owning them, so the stock stays on the manufacturer's books throughout. The agent's records are custody records rather than inventory records of the agent's own business.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is CF Agent Stock?</h2><p>The arrangement separates the handling of goods from the trading in them. An agent takes delivery, stores the goods, and despatches them on the principal's instructions, earning a fee for the service, and at no point does the agent buy or sell anything. Ownership stays with the principal throughout, which is what distinguishes the relationship from a distributor's.</p><p>The consequences for both sides are precise. The principal reports the stock as its own inventory despite not holding it, discloses it as held at a third party, and remains exposed to its loss or deterioration. The agent leaves it out altogether, maintaining what amounts to a bailment log instead of stock accounts. Verification is arranged at the agent's premises rather than accepted on report, and the practical difficulty is that a single agent frequently handles goods for more than one principal, so establishing what belongs to whom precedes any counting. Where the agent also trades on its own account, segregation becomes essential rather than merely tidy.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use CF Agent Stock and Why</h2><p>The arrangement suits manufacturers distributing nationally without owning depots in every state.</p><ul class="gloss-bullets"><li>Pharmaceutical manufacturing, where the model is close to standard and state-level presence is needed for regulatory and logistical reasons alike.</li><li>Fast-moving consumer goods, using agents to hold regional stock and serve distributors within a territory.</li><li>Agricultural inputs, where seasonal peaks make owning permanent depot capacity uneconomic.</li><li>Paints, adhesives and building products, distributed through the same regional structure.</li><li>It does not arise in retail, in businesses selling directly from a single location, or wherever the manufacturer has chosen to own its depot network outright and carries the stock on its own premises.</li></ul></section><section id="how-works" class="gl-sec"><h2>How CF Agent Stock Works in Practice</h2><ol><li>A contract appoints the agent to take in, hold and send out consignments as directed, for a fee, with nothing bought or sold between the two parties.</li></ol><ol><li>Goods are sent to the agent's premises under a document that transfers custody and not title, and are receipted into the agent's custody records.</li></ol><ol><li>They stay in the principal's inventory, shown as lying elsewhere under somebody else's roof, while the agent excludes them from its own accounts completely.</li></ol><ol><li>Despatch instructions are issued by the manufacturer, the agent releases goods against them, and the sale is invoiced by the manufacturer directly to the customer.</li></ol><ol><li>The position is reconciled periodically: goods sent, less goods despatched on instruction, less any agreed handling loss, should equal what remains at the agent, and a count at the premises tests that arithmetic independently.</li></ol></section><section id="example" class="gl-sec"><h2>CF Agent Stock: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Location</th><th>Value</th><th>Title</th><th>In the company's books</th><th>Verified how</th></tr></thead><tbody><tr><td>Own depot</td><td>Rs 1.80 crore</td><td>Company</td><td>Yes</td><td>Physical count</td></tr><tr><td>CF agent, Guwahati</td><td>Rs 62,00,000</td><td>Company</td><td>Yes</td><td>Physical count at agent</td></tr><tr><td>CF agent, Jaipur</td><td>Rs 48,00,000</td><td>Company</td><td>Yes</td><td>Confirmation only</td></tr><tr><td>Distributor, outright sale</td><td>Rs 94,00,000</td><td>Distributor</td><td>No</td><td>Not applicable</td></tr></tbody></table></div><p>A pharmaceutical brand's stock at 30 September, spread across four kinds of location.</p><p>The agent locations are the ones that catch people out. A carrying and forwarding agent holds and despatches on the company's behalf and never takes title, so Rs 1.10 crore at the two agents is the company's stock and belongs in its books, even though the goods are on premises the company does not own and staff it does not employ. The distributor's Rs 94 lakh is not, because title passed on sale. The Jaipur position is weaker evidence than Guwahati: a confirmation from the agent covers the amount but is produced by the party holding it.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With CF Agent Stock</h2><p>The agent handles the goods and owns none of them, and errors follow from blurring that.</p><ul class="gloss-bullets"><li>Omitting the stock from the principal's reported figure because it sits elsewhere, when it remains the principal's asset throughout.</li><li>Accepting the agent's periodic statement in place of a count, which is a report by the party holding the goods.</li><li>Leaving the arrangement without a right of access, so verification depends on goodwill at exactly the moment goodwill is under strain.</li><li>Storing the goods alongside stock the agent trades on its own account, which makes attribution rest entirely on the records being tested.</li><li>Holding the agent responsible for shortages without an agreed tolerance for handling loss, which turns every count into a dispute rather than a reconciliation.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Goods coming back through the channel are the other half of the flow, so <a href="/glossary/stock-audit/saleable-returns">saleable returns</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With CF Agent Stock?</h3><p>Reading about it settles the meaning and nothing else. The moment stock at an agent's premises needs counting and attributing, the position has to be established independently, which is the substance of <a href="/stock-audit-for-fmcg">auditing FMCG distributor stock</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-fmcg">auditing FMCG distributor stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/saleable-returns">saleable returns<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">CF Agent Stock FAQs</h2><p class="faq-expanded__lead">Common questions about CF Agent Stock in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.faq-enquiry-form', [
    'enquiryTitle'   => 'Talk to the stock audit team',
    'enquirySub'     => 'Tell us where the stock sits and we will scope the count.',
    'enquiryService' => 'CF Agent Stock',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Who owns stock held by a C&amp;F agent?</h3><div class="faq-expanded__a" id="faq-a1"><p>The company owns it. The agent holds and dispatches the stock under an agency arrangement rather than buying it, so it remains company inventory and must be included both in the physical count and in the balance sheet.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is C&amp;F agent stock verified?</h3><div class="faq-expanded__a" id="faq-a2"><p>By counting at the agent premises and reconciling the result to both the company dispatch records and the agent own stock records. Relying on the agent periodic statement alone leaves any difference between the two entirely invisible.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What is the common failure with C&amp;F stock?</h3><div class="faq-expanded__a" id="faq-a3"><p>It is excluded from the count because it is not at a company warehouse. That produces an understated inventory balance and an unverified stock position at the very location with least oversight.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
