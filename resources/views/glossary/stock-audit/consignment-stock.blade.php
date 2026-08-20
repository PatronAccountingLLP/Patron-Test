@extends('layouts.service-app')

@section('meta')
<title>Consignment Stock: Inventory You Hold but Do Not Own</title>
<meta name="description" content="Consignment stock sits on your premises while title stays with the supplier until it sells. It must be identified and excluded from your own stock figure.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/consignment-stock">

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



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M6G3R8G');</script>
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
            "name": "Consignment Stock",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/consignment-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/consignment-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/consignment-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Who includes consignment stock in inventory?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The consignor, who retains title until sale. The consignee holds it but does not own it, so including it in the consignee inventory overstates that balance sheet and understates the consignor."
            }
        },
        {
            "@type": "Question",
            "name": "What documents evidence consignment stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The consignment agreement establishing that title has not passed, dispatch documents to the consignee, and periodic consignee stock statements. Without the agreement the arrangement can look like a sale, which would move the stock off the consignor books entirely."
            }
        },
        {
            "@type": "Question",
            "name": "What happens when consignment records disagree?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The difference is investigated against sales and dispatch documentation, then settled under the consignment agreement. Where the agreement does not address shortages, the resolution becomes a negotiation rather than a contractual right."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6G3R8G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Consignment Stock</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Stock That Is Not Yours</div><h1 class="gl-h1">Consignment Stock</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#ownership" class="gl-pill">Ownership</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Consignment Stock: Definition</div><div class="definition-box"><p>Consignment stock is inventory placed at another party's premises for sale, where legal title stays with the supplier until a sale to an end customer takes place. The party holding the goods has possession without ownership, so it excludes them from its own inventory, while the supplier continues to report them despite not holding them.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Consignment Stock?</h2><p>The arrangement creates the one situation where physical possession and legal ownership point at different businesses, which is why it produces more accounting errors than almost any other stock position. Delivery to the party who will sell the goods triggers nothing at all: no revenue, no receivable, no transfer of risk in the ordinary sense. Everything waits for the sale to the end customer.</p><p>Two mirror-image mistakes follow from that. The goods can end up on two balance sheets, where the party holding them treats them as bought because that is what the floor suggests, while the supplier correctly continues to report them. Or they can appear on neither, where the supplier books a sale on despatch and the holder properly excludes them. The first can lead to two lenders advancing against identical goods. Detection works from the physical position outward: goods are traced to whoever claims them, and the claim is tested against the written arrangement and the sales records rather than accepted.</p></section><section id="ownership" class="gl-sec"><h2>Who Owns the Stock Under Consignment Stock</h2><p>Ownership stays with the supplier right up to the point a final buyer purchases, whatever the physical position suggests.</p><ul class="gloss-bullets"><li>Whoever has the goods on their floor holds them in trust and owns nothing, so the stock stays off its balance sheet however long it has been on the premises.</li><li>Reporting stays with the supplier, who also shoulders the risk of the goods never finding a buyer, which is the commercial substance of the arrangement.</li><li>The evidence is the written agreement, and where none exists the position falls to be inferred from conduct and correspondence, which is a considerably weaker footing for both sides.</li><li>The risk this creates is double counting: identical goods appearing in two sets of accounts, or vanishing from both where despatch is wrongly treated as the sale.</li><li>A lender advancing against either party's inventory needs the arrangement identified before it relies on the figure.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Consignment Stock Works in Practice</h2><ol><li>A written arrangement is agreed setting out when title passes, how often sales must be reported, who bears the risk of damage, and whether the owner may enter the premises to verify.</li></ol><ol><li>Goods are delivered to the holder against a document that is not an invoice, because no sale has occurred and nothing is yet owed.</li></ol><ol><li>The holder stores them separately or marks them, keeps them out of its own inventory, and records them in memorandum form as goods held for another party.</li></ol><ol><li>Ownership moves at the instant the goods are sold on to a final buyer. The holder reports the sale, the owner recognises revenue and removes the goods from its own stock, and an invoice follows.</li></ol><ol><li>Periodically the position is reconciled: goods delivered, less sales reported, less damages agreed, should equal goods still held, and a physical count at the holder's premises tests that arithmetic.</li></ol></section><section id="example" class="gl-sec"><h2>Consignment Stock: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Location</th><th>Value</th><th>Owner</th><th>Counted by the auditor?</th><th>In the borrower's stock?</th></tr></thead><tbody><tr><td>Own godown, own goods</td><td>Rs 2,80,00,000</td><td>Borrower</td><td>Yes</td><td>Yes</td></tr><tr><td>Own godown, held for a principal</td><td>Rs 74,00,000</td><td>Principal</td><td>Yes, separately</td><td>No</td></tr><tr><td>At a dealer, unsold</td><td>Rs 52,00,000</td><td>Borrower</td><td>Yes, by confirmation</td><td>Yes</td></tr><tr><td>At a dealer, sold not settled</td><td>Rs 16,00,000</td><td>Dealer's customer</td><td>No</td><td>No</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Value</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Value"><rect x="26" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="57" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">28,000,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Own godown, own </text><rect x="114" y="140" width="62" height="40" rx="5" fill="#14365F"/><text x="145" y="132" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">7,400,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Own godown, held</text><rect x="202" y="152" width="62" height="28" rx="5" fill="#14365F"/><text x="233" y="144" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">5,200,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">At a dealer, uns</text><rect x="290" y="171" width="62" height="9" rx="5" fill="#E8712C"/><text x="321" y="163" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">1,600,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">At a dealer, sol</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Ghaziabad appliance brand places stock with dealers and also stores goods for a principal.</p><p>The two middle rows move in opposite directions and are frequently confused. Goods sitting in the borrower's own godown are not automatically the borrower's: Rs 74 lakh belongs to a principal and must be counted, tagged and then excluded. Goods sitting at a dealer's premises may well be the borrower's, because title has not passed until the dealer sells. Ownership follows the agreement, not the address. A drawing power calculation built from a physical count at the borrower's premises alone would overstate by Rs 74 lakh and understate by Rs 52 lakh at the same time.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Consignment Stock</h2><p>Possession and title point at different parties, and almost every error follows from forgetting that.</p><ul class="gloss-bullets"><li>The holder treating the goods as bought because they are physically present, so the identical goods appear in two sets of accounts and two lenders may each advance money against them.</li><li>The supplier booking a sale on despatch, which recognises revenue early and leaves the goods on neither set of books.</li><li>Operating without a written arrangement, so when goods are unsold or damaged the position rests on conduct and correspondence.</li><li>Storing the goods mixed with the holder's own identical stock, which makes any count depend on the very records being tested.</li><li>Reporting sales to the supplier late or not at all, which is the recurring failure on these arrangements rather than goods never delivered.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Identifying each unit individually is what makes this position verifiable, so <a href="/glossary/stock-audit/serial-number-tracking">serial number tracking</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Consignment Stock?</h3><p>A definition describes; it does not verify. Once stock at somebody else's premises has to be counted and attributed, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit-for-electronics-white-goods">auditing high-value electronics stock</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-electronics-white-goods">auditing high-value electronics stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/serial-number-tracking">serial number tracking<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Consignment Stock FAQs</h2><p class="faq-expanded__lead">Common questions about Consignment Stock in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Consignment Stock</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Who includes consignment stock in inventory?</h3><div class="faq-expanded__a" id="faq-a1"><p>The consignor, who retains title until sale. The consignee holds it but does not own it, so including it in the consignee inventory overstates that balance sheet and understates the consignor.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What documents evidence consignment stock?</h3><div class="faq-expanded__a" id="faq-a2"><p>The consignment agreement establishing that title has not passed, dispatch documents to the consignee, and periodic consignee stock statements. Without the agreement the arrangement can look like a sale, which would move the stock off the consignor books entirely.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens when consignment records disagree?</h3><div class="faq-expanded__a" id="faq-a3"><p>The difference is investigated against sales and dispatch documentation, then settled under the consignment agreement. Where the agreement does not address shortages, the resolution becomes a negotiation rather than a contractual right.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
