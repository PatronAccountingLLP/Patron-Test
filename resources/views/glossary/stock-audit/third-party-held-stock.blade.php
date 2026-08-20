@extends('layouts.service-app')

@section('meta')
<title>Third-Party Held Stock: Inventory Stored Elsewhere</title>
<meta name="description" content="Third-party or 3PL held stock is inventory you own that another company stores and handles. It widens audit scope to every site holding your goods.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/third-party-held-stock">

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
            "name": "Third-Party / 3PL Held Stock",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/third-party-held-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/third-party-held-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/third-party-held-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Does stock at a 3PL stay on your balance sheet?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A storage arrangement does not transfer ownership, so stock held by a logistics provider remains your inventory and must be counted and reconciled, even though day-to-day physical control sits with someone else entirely."
            }
        },
        {
            "@type": "Question",
            "name": "How are 3PL stock differences resolved?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the service agreement, which should define liability for shortages and the inspection rights needed to support a claim. Writing off a difference internally without raising it forfeits a contractual remedy that may still have been available."
            }
        },
        {
            "@type": "Question",
            "name": "How often should third-party held stock be counted?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "At least as often as your own warehouses, and arguably more, because you have less day-to-day visibility. Relying on the provider periodic statement without independent counting is the common gap."
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


<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Third-Party / 3PL Held Stock</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Stock That Is Not Yours</div><h1 class="gl-h1">Third-Party / 3PL Held Stock</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#ownership" class="gl-pill">Ownership</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Third-Party / 3PL Held Stock: Definition</div><div class="definition-box"><p>Third-party held stock is inventory owned by a business but stored at a logistics provider's facility under a warehousing agreement. Ownership is unaffected by the arrangement, so the goods remain on the owner's balance sheet. Because one facility typically holds goods for several principals at once, establishing whose stock is whose is a precondition of any count conducted there.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Third-Party / 3PL Held Stock?</h2><p>Outsourcing warehousing does not outsource ownership. Goods sitting in a warehouse run by an outside operator remain the property of the business that put them there, stay on its balance sheet, and remain its security if a lender has taken a charge over them. What changes is that nobody from the owning business sees the stock from one month to the next, and the position is known only through reports the operator produces.</p><p>That is precisely why these locations are verified rather than accepted on report. One building will commonly be storing consignments belonging to a number of different owners at the same time, often of much the same description, so sorting out who owns what has to happen before counting begins rather than as a refinement afterwards. The storage agreement, the receiving records and the physical markings are what settle it. A count that produces a total for a building without resolving ownership within it has produced a number no lender can advance against and no auditor can rely on.</p></section><section id="ownership" class="gl-sec"><h2>Who Owns the Stock Under Third-Party / 3PL Held Stock</h2><p>The depositor owns the goods throughout; the operator holds them under a contract for storage.</p><ul class="gloss-bullets"><li>Nothing about placing goods in somebody else's building transfers any interest in them, so they remain in the depositor's inventory and subject to any charge a lender has registered.</li><li>What the operator keeps amounts to a bailment log, not stock accounts of its own, and none of it belongs in its balance sheet.</li><li>The evidence is the storage agreement, the receiving documentation and any physical markings or segregation at the location.</li><li>What complicates it is that a single building commonly stores consignments for a number of different owners, often looking much alike, so working out whose is whose has to come before any quantity means anything.</li><li>A count producing a building total without resolving whose each portion is has produced a figure no lender can advance against.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Third-Party / 3PL Held Stock Works in Practice</h2><ol><li>A storage agreement is signed setting out what the operator will hold, how it will be reported, who bears risk of loss, and the owner's right to attend and verify.</li></ol><ol><li>Consignments arrive and are booked in. Nothing about title changes, so the goods continue to sit in the depositor's accounts and under whatever charge a lender has registered.</li></ol><ol><li>The operator stores them, ideally in marked or segregated space, and maintains custody records that are not inventory records of its own business.</li></ol><ol><li>Position reports are issued periodically, and the owner reconciles them against its own despatch and receipt records.</li></ol><ol><li>Because those reports come from the party holding the goods, the position is tested by attending and counting. The count establishes quantity, and the agreement, receiving records and markings together establish that what is there belongs to the owner rather than to another principal.</li></ol></section><section id="example" class="gl-sec"><h2>Third-Party / 3PL Held Stock: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Evidence</th><th>Obtained</th><th>Weight</th></tr></thead><tbody><tr><td>Warehouse operator's stock statement</td><td>Yes</td><td>Low, produced by the holder</td></tr><tr><td>Written confirmation to the auditor</td><td>Yes</td><td>Moderate, external but on request</td></tr><tr><td>Auditor's attendance at the 3PL count</td><td>Yes, one of four sites</td><td>Strong for that site</td></tr><tr><td>Independent count at the other three</td><td>No</td><td>Nil</td></tr><tr><td>Value covered by attendance</td><td>Rs 1,90,00,000 of Rs 6,40,00,000</td><td>30%</td></tr></tbody></table></div><p>A Bhiwandi third-party operator holds Rs 6.40 crore across four sites for a consumer goods company.</p><p>The table is really about how much of the number is actually supported. Confirmation from the operator covers everything on paper but comes from whoever has custody of them, so it is corroboration rather than proof. Attendance at one site gives strong evidence for Rs 1.90 crore and none whatever for the remaining Rs 4.50 crore. Where a lender's security sits largely at third-party premises, coverage by value is the figure to report, because a statement that all four sites were confirmed reads as far more assurance than 30% attendance provides.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Third-Party / 3PL Held Stock</h2><p>Outsourcing the storage does not outsource the responsibility, and the errors follow from acting as though it did.</p><ul class="gloss-bullets"><li>Accepting the operator's periodic report in place of verification, when the report is a statement by the party holding the goods.</li><li>Omitting the stock from the reported figure because it is not on the premises, when it remains the business's asset and its security.</li><li>Counting a building total without establishing whose each part is, leaving a figure that supports no lending decision at all.</li><li>Storing goods without markings or a segregated area, so attribution depends entirely on the operator's own records.</li><li>Negotiating the storage agreement without a right of access for verification, which leaves a reluctant operator with a straightforward basis to refuse.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Goods that pass straight through are the hardest version of the same problem, so <a href="/glossary/stock-audit/cross-docking">cross-docking</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Third-Party / 3PL Held Stock?</h3><p>Understanding the term is the easy half. The harder half arrives when stock sits at a facility nobody from the business visits, and it is answered on site rather than on paper. <a href="/stock-audit-for-warehouse">auditing warehouse and 3PL stock</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-warehouse">auditing warehouse and 3PL stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/cross-docking">cross-docking<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Third-Party / 3PL Held Stock FAQs</h2><p class="faq-expanded__lead">Common questions about Third-Party / 3PL Held Stock in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Third-Party / 3PL Held Stock</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Does stock at a 3PL stay on your balance sheet?</h3><div class="faq-expanded__a" id="faq-a1"><p>Yes. A storage arrangement does not transfer ownership, so stock held by a logistics provider remains your inventory and must be counted and reconciled, even though day-to-day physical control sits with someone else entirely.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How are 3PL stock differences resolved?</h3><div class="faq-expanded__a" id="faq-a2"><p>Under the service agreement, which should define liability for shortages and the inspection rights needed to support a claim. Writing off a difference internally without raising it forfeits a contractual remedy that may still have been available.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How often should third-party held stock be counted?</h3><div class="faq-expanded__a" id="faq-a3"><p>At least as often as your own warehouses, and arguably more, because you have less day-to-day visibility. Relying on the provider periodic statement without independent counting is the common gap.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
