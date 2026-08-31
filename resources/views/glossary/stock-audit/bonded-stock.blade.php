@extends('layouts.service-app')

@section('meta')
<title>Bonded Stock: Imported Goods Held Under Customs Bond</title>
<meta name="description" content="Bonded stock is imported goods stored under customs control with duty not yet paid. It is physically present but restricted, and it is counted separately.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/bonded-stock">

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
            "name": "Bonded Stock",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/bonded-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/bonded-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/bonded-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is bonded stock reported in a stock audit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Separately from duty-paid stock, with the bond register reconciliation shown. The deferred duty affects the value the lender can rely on, so combining the two in one figure obscures the position."
            }
        },
        {
            "@type": "Question",
            "name": "Does bonded stock count as security for a lender?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "That depends on the lender assessment of the deferred duty and the conditions attached to the bond. It is identified separately in the report so the lender can decide rather than discover it later."
            }
        },
        {
            "@type": "Question",
            "name": "Who owns stock in a bonded warehouse?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The importer owns the goods while they remain in bond. Customs duty is deferred until they are cleared for home consumption, so ownership and duty liability are separate questions and the stock is not carried at a duty-paid value while in bond."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Stock That Is Not Yours</div><h1 class="gl-h1">Bonded Stock</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#ownership" class="gl-pill">Ownership</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Bonded Stock: Definition</div><div class="definition-box"><p>Bonded stock is imported goods held in a customs-licensed warehouse where the duty payable has been deferred rather than paid. The goods cannot be released for home consumption until that duty is discharged. The licensee is accountable to customs for everything in the bond, and the stock is reconciled against the bond register rather than against ordinary warehouse records alone.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Bonded Stock?</h2><p>Importers frequently need goods in the country before they need to pay for them, and the bonded warehouse regime exists to allow exactly that. Goods sit in premises licensed by customs with the duty deferred rather than waived, and they can remain there for a defined period while the importer decides what to do with them: clear them for home consumption, re-export them, or move them to another bonded facility.</p><p>The consequence for stock work is that whoever holds the licence answers to the authority for every item inside, and reconciliation runs to what the authority itself holds on record, not to ordinary warehouse paperwork alone. Quantities entered, quantities cleared and quantities remaining must agree with what the authority holds, and a shortfall is a customs matter before it is an inventory one. Valuation needs care as well, since deferred duty is not part of cost until it becomes payable, and stock nearing the end of its permitted bonded period carries a liability that has not yet appeared anywhere in the accounts.</p></section><section id="compliance" class="gl-sec"><h2>Bonded Stock Under Indian Law</h2><p>Position: goods may be deposited in a licensed warehouse with duty deferred rather than paid, and the permitted period depends on who imported them. For export oriented units and similar scheme holders, goods may remain until cleared. For other importers the period is generally one year from the warehousing order, extendable by the Commissioner.</p><ul class="gloss-bullets"><li>Nothing may enter the domestic market until that liability is settled, and interest becomes payable where warehousing extends beyond the prescribed initial period.</li><li>Source: section 61 of the Customs Act 1962, governing the period for which goods may remain warehoused.</li><li>Note: responsibility to the customs for every item inside the warehouse rests with the licence holder, so a shortfall found on the floor becomes a matter for the authority before it reaches the ledger.</li></ul></section><section id="ownership" class="gl-sec"><h2>Who Owns the Stock Under Bonded Stock</h2><p>The importer owns the goods; the warehouse licensee is answerable for them.</p><ul class="gloss-bullets"><li>Ownership is unaffected by the bonding arrangement, so the goods sit in the importer's inventory from the moment title passed under the purchase contract.</li><li>The licensee's obligation runs to the customs authority rather than to the owner, covering everything inside the facility whoever it belongs to.</li><li>What is genuinely different is the encumbrance. Deferred duty attaches to the goods, and nothing may be cleared into the domestic market before that liability is settled, so ownership carries a condition that ordinary stock does not.</li><li>Proof rests on the bill of entry together with the warehouse's own bonded ledger, a copy of which sits with the authority.</li><li>Consignments nearing the expiry of their allowed stay carry a liability the owner's books have often never recorded.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Bonded Stock Works in Practice</h2><ol><li>Imported goods arrive and, instead of being cleared for home consumption, are moved into a warehouse licensed by customs under a bond executed by the licensee.</li></ol><ol><li>The duty payable is deferred rather than waived. The goods are entered in the bond register maintained for the facility, and the authority holds its own record of what went in.</li></ol><ol><li>The goods may remain for a defined period, during which the importer can decide to clear them domestically, re-export them, or transfer them to another bonded facility.</li></ol><ol><li>Nothing leaves for home consumption until the duty is discharged, and the clearance is recorded against the original entry so the register always reconciles.</li></ol><ol><li>Responsibility to the authority for the entire contents rests with the licence holder throughout. Any deficit is dealt with as a customs question ahead of an accounting one, and goods approaching the end of the permitted period carry an obligation that has to be recognised.</li></ol></section><section id="example" class="gl-sec"><h2>Bonded Stock: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Position</th><th>Value</th><th>Duty status</th><th>In the company's stock?</th></tr></thead><tbody><tr><td>Imported, in the bonded warehouse</td><td>Rs 1,74,00,000</td><td>Deferred, unpaid</td><td>Yes</td></tr><tr><td>Cleared this month on payment</td><td>Rs 42,00,000</td><td>Paid, Rs 4,86,000</td><td>Yes, at a higher value</td></tr><tr><td>Duty payable if all were cleared</td><td>Rs 20,12,000</td><td>-</td><td>Not a liability yet</td></tr><tr><td>Bond executed with customs</td><td>Rs 25,00,000</td><td>-</td><td>Contingent</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Value</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Value"><rect x="26" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="57" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">17,400,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Imported, in the</text><rect x="114" y="144" width="62" height="36" rx="5" fill="#14365F"/><text x="145" y="136" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">4,200,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Cleared this mon</text><rect x="202" y="163" width="62" height="17" rx="5" fill="#14365F"/><text x="233" y="155" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,012,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Duty payable if </text><rect x="290" y="158" width="62" height="22" rx="5" fill="#E8712C"/><text x="321" y="150" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,500,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Bond executed wi</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>An importer near Kandla holds goods in a customs-bonded facility and clears them as orders arrive.</p><p>Ownership sits with the importer from the moment the goods land, so the whole Rs 1.74 crore is in the closing figure although duty has not been paid and the goods cannot be removed. The second row shows what clearance does: the value rises by the duty paid, because unrecoverable duty becomes part of cost. The Rs 20.12 lakh in the third row is not a liability and does not belong in the accounts, since it crystallises only on clearance. Verification here needs the customs bond register alongside the count, because the warehouse operator's records and the importer's often differ on what has been cleared.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Bonded Stock</h2><p>The customs dimension is what distinguishes these errors from ordinary warehousing ones.</p><ul class="gloss-bullets"><li>Reconciling only to internal warehouse records, when the position has to agree with what the authority itself holds.</li><li>Including the deferred duty in the cost of the goods before it becomes payable, which overstates the inventory figure.</li><li>Losing track of how long goods have been held, leaving goods near the end of their permitted stay carrying an obligation nothing in the accounts has recognised.</li><li>Treating a shortfall as an inventory difference, when goods missing from a bonded facility are a customs matter first.</li><li>Assuming the goods can be moved or sold like ordinary stock, when clearance for home consumption requires the duty to be discharged first.</li><li>Overlooking the extension formalities where goods will stay beyond the original period, which is cheaper to arrange in advance than to regularise afterwards.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Stock held by an outside operator raises the same ownership question, so <a href="/glossary/stock-audit/third-party-held-stock">third-party / 3pl held stock</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Bonded Stock?</h3><p>A definition describes; it does not verify. Once goods under bond have to be reconciled to the register the authority holds, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit-for-warehouse">warehouse stock audit</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-warehouse">warehouse stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/third-party-held-stock">third-party / 3pl held stock<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Bonded Stock FAQs</h2><p class="faq-expanded__lead">Common questions about Bonded Stock in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Bonded Stock',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Bonded Stock", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is bonded stock reported in a stock audit?</h3><div class="faq-expanded__a" id="faq-a1"><p>Separately from duty-paid stock, with the bond register reconciliation shown. The deferred duty affects the value the lender can rely on, so combining the two in one figure obscures the position.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Does bonded stock count as security for a lender?</h3><div class="faq-expanded__a" id="faq-a2"><p>That depends on the lender assessment of the deferred duty and the conditions attached to the bond. It is identified separately in the report so the lender can decide rather than discover it later.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Who owns stock in a bonded warehouse?</h3><div class="faq-expanded__a" id="faq-a3"><p>The importer owns the goods while they remain in bond. Customs duty is deferred until they are cleared for home consumption, so ownership and duty liability are separate questions and the stock is not carried at a duty-paid value while in bond.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
