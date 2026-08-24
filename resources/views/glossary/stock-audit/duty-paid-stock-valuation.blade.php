@extends('layouts.service-app')

@section('meta')
<title>Duty-Paid Stock Valuation: Does Duty Sit in the Value?</title>
<meta name="description" content="Whether duty paid on stock forms part of its carrying value changes the balance sheet figure. It is a recurring adjustment in manufacturing stock audits.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/duty-paid-stock-valuation">

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
            "name": "Excise / Duty-Paid Stock Valuation",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/duty-paid-stock-valuation"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/duty-paid-stock-valuation/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/duty-paid-stock-valuation/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Why does duty treatment affect a stock audit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because it changes the value of the security a lender is relying on. Two identical quantities of stock can carry materially different values depending on whether duty is included, which is why the basis is stated in the report."
            }
        },
        {
            "@type": "Question",
            "name": "Should excise or customs duty be included in stock value?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Duty that has been paid and is not recoverable forms part of the cost of inventory. Duty that is recoverable as credit does not. Getting this wrong misstates both inventory and the tax position."
            }
        },
        {
            "@type": "Question",
            "name": "How is duty treated for stock in a bonded warehouse?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Duty is deferred until clearance, so the stock is not carried at a duty-paid value while it remains in bond. The eventual liability is disclosed rather than capitalised into the stock value prematurely."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Valuation and Provisioning</div><h1 class="gl-h1">Excise / Duty-Paid Stock Valuation</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#valuation" class="gl-pill">Valuation</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Excise / Duty-Paid Stock Valuation: Definition</div><div class="definition-box"><p>Duty-paid stock valuation is the question of whether inventory is carried at a value that includes indirect taxes paid on it, or at a value net of any tax that will be recovered as input credit. Where the tax is recoverable it does not form part of cost and must be excluded, otherwise inventory and profit are both overstated. Non-recoverable duties do form part of cost.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Excise / Duty-Paid Stock Valuation?</h2><p>Taxes paid on goods entering a business fall into two categories, and inventory valuation depends entirely on which category applies. Where a tax is recoverable as input credit it is no cost of the goods at all, being instead a receivable from the authority, and including it in inventory overstates both the closing stock and the profit that flows from it. A tax that cannot be recovered is a genuine cost of bringing the goods to their present condition and forms part of their value.</p><p>The practical difficulty is that the same payment can fall either way depending on the goods and the business. Customs duty on an import is generally not recoverable and belongs in cost; goods and services tax paid by a registered business generally is recoverable and does not. Where credit is available but has not been claimed, or where the goods are used for a purpose that blocks the credit, the position changes again. The valuation therefore has to follow the actual recoverability rather than the tax's name.</p></section><section id="compliance" class="gl-sec"><h2>Excise / Duty-Paid Stock Valuation Under Indian Law</h2><p>Position: the cost of purchase includes duties and taxes that are not subsequently recoverable from the taxing authorities. A charge the business can reclaim is excluded from cost entirely and carried as a receivable instead.</p><ul class="gloss-bullets"><li>In current terms, import duty is ordinarily irrecoverable and belongs inside the carrying value, whereas goods and services tax carrying an available credit does not.</li><li>Source: paragraph 6 of Accounting Standard 2 and paragraph 11 of Ind AS 2.</li><li>Note: where credit is blocked for the particular use the goods are put to, that portion of the tax becomes non-recoverable and must be added to cost. What governs is whether the money actually comes back, not what the charge is called.</li></ul></section><section id="valuation" class="gl-sec"><h2>How Excise / Duty-Paid Stock Valuation Is Measured and Valued</h2><p>Cost includes non-recoverable taxes and excludes anything reclaimable, so each charge on the invoice is classified before anything is totalled.</p><ul class="gloss-bullets"><li>Take an import invoiced at 500 per unit. Customs duty of 50 is charged and is not recoverable. Integrated tax of 90 is charged and is fully creditable. Freight and handling to the warehouse come to 30.</li><li>Cost per unit is 500 plus the non-recoverable 50 plus the 30 of bringing the goods in, giving 580.</li><li>The 90 does not enter cost at all. It is posted as a receivable from the authority, because the business will recover it.</li><li>Had the goods been destined for a use where that credit is blocked, the same 90 would become a real cost and the unit would carry 670.</li><li>The classification therefore follows the actual use rather than the name printed on the invoice.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Excise / Duty-Paid Stock Valuation Works in Practice</h2><ol><li>Goods are received and the taxes and duties charged on them are identified from the purchase documents.</li></ol><ol><li>Each charge is classified by whether it can be recovered. A tax the business is entitled to reclaim as input credit is a receivable from the authority; one that cannot be reclaimed forms part of what it took to bring the goods to the state they are in.</li></ol><ol><li>Recoverable amounts are stripped out and posted to the credit account. Non-recoverable amounts stay with the goods and form part of the inventory value.</li></ol><ol><li>The classification is checked against the actual use of the goods rather than the name of the tax, because credit blocked for a particular use converts a recoverable charge into a real cost.</li></ol><ol><li>Where the credit position later changes, the treatment is revisited, since a valuation built on a recoverability assumption that no longer holds is wrong by the whole of the amount involved.</li></ol></section><section id="example" class="gl-sec"><h2>Excise / Duty-Paid Stock Valuation: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Element</th><th>Amount per tonne</th><th>Included in stock value?</th></tr></thead><tbody><tr><td>Ex-works cost</td><td>Rs 62,000</td><td>Yes</td></tr><tr><td>Duty paid on clearance</td><td>Rs 7,400</td><td>Yes, if not recoverable</td></tr><tr><td>Freight to the bonded store</td><td>Rs 1,800</td><td>Yes</td></tr><tr><td>Input tax credit available</td><td>Rs 11,160</td><td>No, excluded</td></tr><tr><td>Carrying value</td><td>Rs 71,200</td><td>-</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Amount per tonne</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Amount per tonne"><rect x="26" y="49" width="62" height="131" rx="5" fill="#14365F"/><text x="57" y="41" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">62,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Ex-works cost</text><rect x="114" y="164" width="62" height="16" rx="5" fill="#14365F"/><text x="145" y="156" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">7,400</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Duty paid on cle</text><rect x="202" y="176" width="62" height="4" rx="5" fill="#14365F"/><text x="233" y="168" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">1,800</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Freight to the b</text><rect x="290" y="156" width="62" height="24" rx="5" fill="#14365F"/><text x="321" y="148" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">11,160</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Input tax credit</text><rect x="378" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="409" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">71,200</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Carrying value</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Mangalore trading arm holds 320 tonnes cleared from a bonded warehouse on payment of duty.</p><p>The rule the table applies is simple to state and easy to get wrong in practice: a tax is part of cost only when it cannot be recovered. Duty that will not be refunded stays in the value, so the carrying figure is Rs 71,200 rather than the Rs 63,800 ex-works and freight alone. Credit that can be set off does not, which is why the Rs 11,160 sits outside. On 320 tonnes the difference between the two treatments is around Rs 23.68 lakh of reported stock, and it also changes the paid-stock figure a lender works from.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Excise / Duty-Paid Stock Valuation</h2><p>The errors here all come from following the tax's name rather than its recoverability.</p><ul class="gloss-bullets"><li>Including recoverable input tax in the cost of inventory, inflating closing stock and, through it, the reported margin.</li><li>Excluding a duty that is not in fact recoverable, such as customs duty on an import, which understates cost and the margin computed from it.</li><li>Applying one treatment across all goods, when the same payment can be recoverable for one use and blocked for another within the same business.</li><li>Failing to adjust where credit was available but never claimed, so a receivable that will not be realised sits inside the inventory figure.</li><li>Carrying the treatment forward unchanged after a change in the tax position, which quietly makes every subsequent valuation wrong by the same amount.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>What an auditor will accept in support of any of it is a separate standard, so <a href="/glossary/stock-audit/audit-evidence">audit evidence</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Excise / Duty-Paid Stock Valuation?</h3><p>A definition describes; it does not verify. Once a valuation basis needs testing against what the facility requires, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit">stock audit service</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">stock audit service<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/audit-evidence">audit evidence<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Excise / Duty-Paid Stock Valuation FAQs</h2><p class="faq-expanded__lead">Common questions about Excise / Duty-Paid Stock Valuation in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Excise / Duty-Paid Stock Valuation</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Why does duty treatment affect a stock audit?</h3><div class="faq-expanded__a" id="faq-a1"><p>Because it changes the value of the security a lender is relying on. Two identical quantities of stock can carry materially different values depending on whether duty is included, which is why the basis is stated in the report.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Should excise or customs duty be included in stock value?</h3><div class="faq-expanded__a" id="faq-a2"><p>Duty that has been paid and is not recoverable forms part of the cost of inventory. Duty that is recoverable as credit does not. Getting this wrong misstates both inventory and the tax position.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How is duty treated for stock in a bonded warehouse?</h3><div class="faq-expanded__a" id="faq-a3"><p>Duty is deferred until clearance, so the stock is not carried at a duty-paid value while it remains in bond. The eventual liability is disclosed rather than capitalised into the stock value prematurely.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
