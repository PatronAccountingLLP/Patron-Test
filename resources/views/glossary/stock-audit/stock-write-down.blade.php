@extends('layouts.service-app')

@section('meta')
<title>Stock Write-Down: Reducing Value Without Removing It</title>
<meta name="description" content="A write-down lowers the carrying value of stock you still hold and can still sell. It is distinct from a write-off, which removes the item altogether.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/stock-write-down">

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
            "name": "Stock Write-Down",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/stock-write-down"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/stock-write-down/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/stock-write-down/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is the difference between a write-down and a write-off?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A write-down reduces the carrying value while the stock remains in inventory and can still be sold. A write-off removes it entirely because it has no remaining value or no longer exists."
            }
        },
        {
            "@type": "Question",
            "name": "Who approves a stock write-down?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Management approves it, within the authority levels set internally for write-downs of that size. The auditor tests whether the write-down is supported by evidence and applied consistently with stated policy, but does not make the valuation decision itself."
            }
        },
        {
            "@type": "Question",
            "name": "Can a write-down be reversed?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Where the circumstances that caused it no longer apply and the stock is still held, a previously recognised write-down can be reversed up to the original cost. It cannot be reversed above cost."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Valuation and Provisioning</div><h1 class="gl-h1">Stock Write-Down</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#valuation" class="gl-pill">Valuation</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Stock Write-Down: Definition</div><div class="definition-box"><p>A stock write-down reduces the carrying value of inventory that still exists to the amount it is now expected to realise. The goods remain on the floor and remain in the records; only the value attached to them changes. It is recognised in the period the reduction in value occurred, and it can be reversed in a later period if the circumstances that caused it no longer apply.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Stock Write-Down?</h2><p>A write-down changes what the inventory is worth without changing what is there. The goods stay on the floor, stay available to sell, and stay in the records; what alters is the value attached to them, reduced to whatever they will now fetch. That distinction matters because it preserves the ability to sell the stock and to reverse the reduction if the market recovers, which a removal from the books does not.</p><p>Timing is what most often goes wrong. The reduction belongs to the period in which the value actually fell, not the period in which somebody eventually assessed it, so a business that reviews obsolescence once a year will systematically recognise write-downs late and overstate profit in the intervening periods. Because the judgement is one of the more elastic in a set of accounts, the evidence expected is specific: what comparable goods actually realised, offers received, or a documented assessment of the market, rather than a percentage applied by policy without reference to any of it.</p></section><section id="compliance" class="gl-sec"><h2>Stock Write-Down Under Indian Law</h2><p>Position: where net realisable value falls below cost, the shortfall is charged to profit in whichever period the value dropped. If the value subsequently recovers, the earlier write-down is reversed, capped at whatever was taken off in the first place, so book value can never climb past what was paid.</p><ul class="gloss-bullets"><li>For tax, valuing closing stock at cost or market value whichever is lower is a long-accepted method of arriving at real business profit, and the resulting reduction is not treated as a notional loss.</li><li>Source: paragraph 28 of Accounting Standard 2 and paragraph 34 of Ind AS 2 on reversal; Chainrup Sampatram v CIT, 24 ITR 481, on the tax position.</li><li>Note: a general provision computed as a percentage is treated very differently from an item-wise write-down supported by evidence of realisation, and the second is what survives scrutiny.</li></ul></section><section id="valuation" class="gl-sec"><h2>How Stock Write-Down Is Measured and Valued</h2><p>The amount is the excess of carrying value over what the goods will now realise, computed per item.</p><ul class="gloss-bullets"><li>Take 1,200 units carried at 90 each, a book value of 108,000. The line has been superseded and the remaining outlet will pay 55 per unit, with 6 per unit to get the goods there.</li><li>Realisable value is 49 per unit, so the write-down is 41 per unit, or 49,200 in total.</li><li>Book value drops to 58,800 and the 49,200 hits the accounts as soon as the deterioration happened, rather than waiting for a sale.</li><li>The goods remain in stock and remain saleable at the reduced figure, so selling them later at 49 produces no further charge.</li><li>If the market recovers before disposal, the write-down can be reversed, but only up to the original 41 per unit, so the carrying value never climbs back above 90.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Stock Write-Down Works in Practice</h2><ol><li>An indication arises that goods will not realise what they cost: ageing, damage, a superseded specification, a market price that has fallen, or a season that has closed.</li></ol><ol><li>Realisable value is established for the affected items, net of what it will cost to complete and to sell them, supported by evidence of what comparable goods actually fetched.</li></ol><ol><li>The shortfall against cost is computed item by item and charged as an expense in the period the value fell, not the period somebody assessed it.</li></ol><ol><li>The goods stay physically in stock and remain in the records at the reduced carrying amount. They can still be sold, and selling them at the reduced value produces no further charge.</li></ol><ol><li>At each subsequent reporting date the assessment is revisited. If the market recovers the reduction is reversed, capped at the amount originally written down so the carrying value never rises above original cost.</li></ol></section><section id="example" class="gl-sec"><h2>Stock Write-Down: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Step</th><th>Effect on stock</th><th>Effect on profit</th><th>Reversible?</th></tr></thead><tbody><tr><td>Carrying value before</td><td>Rs 92,00,000</td><td>-</td><td>-</td></tr><tr><td>Write-down to realisable value</td><td>-Rs 14,00,000</td><td>-Rs 14,00,000</td><td>Yes</td></tr><tr><td>Carrying value after</td><td>Rs 78,00,000</td><td>-</td><td>-</td></tr><tr><td>Market recovers next year</td><td>+Rs 9,00,000</td><td>+Rs 9,00,000</td><td>Capped at original cost</td></tr></tbody></table></div><p>A Tiruppur knitwear exporter reduces the carrying value of unsold seasonal stock after a buyer cancellation.</p><p>Two features separate this from a write-off. Nothing leaves the racking, and the records keep carrying it at the lower figure, so they are still counted, still verified and still available to sell. And the reduction can be reversed if the realisable value recovers, though only up to the original cost, never above it. The reversal in the last row is the part most often handled wrongly: the Rs 9 lakh recovery is credited in the year the value returns, and the stock cannot be written back to a figure higher than what it cost, however strong the market becomes.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Stock Write-Down</h2><p>Timing and evidence are where this goes wrong, rather than the arithmetic.</p><ul class="gloss-bullets"><li>Booking the charge when somebody got round to reviewing it instead of when the market moved, so every period in between reports a profit it did not earn.</li><li>Reviewing obsolescence once a year, which guarantees late recognition by construction.</li><li>Supporting the figure with a policy percentage alone, when what is expected is evidence of what comparable goods realised or what has been offered.</li><li>Treating it as a removal and striking the goods out entirely, which forfeits both the chance to sell them and any later recovery if prices improve.</li><li>Applying the policy differently in a difficult year, which produces a charge that measures the revision rather than the stock and is the first thing an auditor looks for.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Removing the goods entirely is the other response, and it works differently, so <a href="/glossary/stock-audit/stock-write-off">stock write-off</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Stock Write-Down?</h3><p>Understanding the term is the easy half. The harder half arrives when a provision or a removal needs independent support, and it is answered on site rather than on paper. <a href="/stock-audit">inventory audit</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">inventory audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/stock-write-off">stock write-off<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Stock Write-Down FAQs</h2><p class="faq-expanded__lead">Common questions about Stock Write-Down in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Stock Write-Down',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Stock Write-Down", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What is the difference between a write-down and a write-off?</h3><div class="faq-expanded__a" id="faq-a1"><p>A write-down reduces the carrying value while the stock remains in inventory and can still be sold. A write-off removes it entirely because it has no remaining value or no longer exists.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Who approves a stock write-down?</h3><div class="faq-expanded__a" id="faq-a2"><p>Management approves it, within the authority levels set internally for write-downs of that size. The auditor tests whether the write-down is supported by evidence and applied consistently with stated policy, but does not make the valuation decision itself.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can a write-down be reversed?</h3><div class="faq-expanded__a" id="faq-a3"><p>Where the circumstances that caused it no longer apply and the stock is still held, a previously recognised write-down can be reversed up to the original cost. It cannot be reversed above cost.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
