@extends('layouts.service-app')

@section('meta')
<title>QIS Statement: Quarterly Information System Returns</title>
<meta name="description" content="A QIS statement is the quarterly return a borrower files with its bank on sales, stock and receivables. Stock audits test whether those figures held up.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/qis-statement">

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
            "name": "QIS Statement",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/qis-statement"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/qis-statement/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/qis-statement/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is the difference between a QIS return and a stock statement?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A stock statement reports inventory and receivables for drawing power, usually monthly. A QIS return reports operating and financial performance against projections on a quarterly basis. The stock audit tests the first, not the second."
            }
        },
        {
            "@type": "Question",
            "name": "Does a stock auditor review QIS submissions?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not normally, but material inconsistency between QIS figures and the stock position found during the count is worth reporting. Divergence between what was projected and what exists is often the reason the audit was ordered."
            }
        },
        {
            "@type": "Question",
            "name": "Why do lenders compare QIS data with the audit result?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because the two should tell a consistent story. Turnover reported in the QIS that cannot be reconciled with the movement in stock found at the audit usually indicates a reporting problem in one of them."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">QIS Statement</span></nav><div class="gl-cat">Stock Audit Glossary &middot; The Lending Trigger</div><h1 class="gl-h1">QIS Statement</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#covenant" class="gl-pill">In the sanction letter</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">QIS Statement: Definition</div><div class="definition-box"><p>A Quarterly Information System statement is a return a working capital borrower files with the lender setting out actual and projected performance for the quarter, covering sales, current assets, current liabilities and the resulting working capital position. It differs from the monthly stock statement in purpose: the stock statement reports what is held now, while the QIS return compares what was projected against what actually happened.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a QIS Statement?</h2><p>Two different returns are routinely confused, and the difference is one of tense. A stock statement reports a position that has already happened: what was held at a date. A quarterly information return does that as well but adds what is expected to happen, setting projected performance for the coming period alongside actual performance for the one just closed. It is a planning document as much as a reporting one.</p><p>The comparison is the point. A borrower whose actuals consistently fall short of its own projections is telling the lender something about either the business or the quality of its forecasting, and neither reading is comfortable. Persistent divergence prompts a reassessment of the working capital limit itself, since the limit was sized on projections of the same kind. The return also brings current assets and current liabilities together in one view, which lets a lender see the working capital cycle rather than only the stock position that the monthly statement reports.</p></section><section id="covenant" class="gl-sec"><h2>Where QIS Statement Appears in a Sanction Letter</h2><p>The obligation is created by covenant and the detail sits in the same place.</p><ul class="gloss-bullets"><li>The information covenant, which imposes the filing requirement and states the frequency, most often quarterly for this return and monthly for the stock statement.</li><li>The due date provision, expressed as a number of days after the period end, which is what makes a submission late rather than merely delayed.</li><li>The format requirement, frequently referring to a prescribed annexure attached to the letter itself rather than describing the layout in the clause.</li><li>The events of default clause, which commonly treats repeated failure to file as a breach in its own right, independently of anything the figures show.</li><li>The review clause, allowing the limit to be reassessed where actual performance falls persistently short of what the borrower projected.</li></ul></section><section id="compliance" class="gl-sec"><h2>QIS Statement Under Indian Law</h2><p>Position: the prescribed Quarterly Information System formats, which accompanied the Tandon and Chore committee lending framework, were withdrawn as part of the deregulation of working capital finance in 1997. There is no current regulatory requirement to file a return in that form.</p><ul class="gloss-bullets"><li>Banks were given freedom to design their own monitoring systems, and most continue to require regular submissions covering stock, book debts and performance in their own formats.</li><li>Source: the RBI circular of April 1997 withdrawing the Maximum Permissible Bank Finance framework, and subsequent master circulars on loans and advances confirming that freedom.</li><li>Note: the obligation a borrower actually faces arises from the sanction letter rather than from regulation. Where a facility calls for a quarterly return, that covenant is enforceable whether or not any regulator requires it.</li></ul></section><section id="how-works" class="gl-sec"><h2>How QIS Statement Works in Practice</h2><ol><li>The sanction letter imposes the obligation and states the format, the due date relative to the period end and what has to accompany the figures.</li></ol><ol><li>At the close of each quarter the borrower prepares actual performance for the period just ended: sales booked, current assets carried, current liabilities standing and the working capital gap that falls out of them.</li></ol><ol><li>Alongside it, projections are set out for the coming period on the same basis.</li></ol><ol><li>The return is filed with the lender, which compares the actuals now reported against the projections filed for that same quarter three months earlier.</li></ol><ol><li>Persistent shortfalls against a borrower's own forecasts prompt a review of the limit, since the facility was originally sized on projections prepared the same way. A close match, sustained across quarters, is one of the stronger arguments available at renewal.</li></ol></section><section id="example" class="gl-sec"><h2>QIS Statement: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Line</th><th>Projected for the quarter</th><th>Actual reported</th><th>Variance</th></tr></thead><tbody><tr><td>Net sales</td><td>Rs 18.00 crore</td><td>Rs 13.20 crore</td><td>-27%</td></tr><tr><td>Closing inventory</td><td>Rs 7.50 crore</td><td>Rs 10.90 crore</td><td>+45%</td></tr><tr><td>Trade receivables</td><td>Rs 6.00 crore</td><td>Rs 6.40 crore</td><td>+7%</td></tr><tr><td>Trade payables</td><td>Rs 4.00 crore</td><td>Rs 7.80 crore</td><td>+95%</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Variance</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Variance"><rect x="26" y="177" width="62" height="3" rx="5" fill="#14365F"/><text x="57" y="169" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">-27</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Net sales</text><rect x="114" y="109" width="62" height="71" rx="5" fill="#14365F"/><text x="145" y="101" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">45</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Closing inventor</text><rect x="202" y="169" width="62" height="11" rx="5" fill="#14365F"/><text x="233" y="161" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">7</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Trade receivable</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">95</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Trade payables</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Surat processing house files its quarterly information for the September quarter. Read line by line, nothing is fatal. Read together, the four lines tell one story.</p><p>Sales came in well below projection while inventory rose sharply, which means production continued into a market that stopped absorbing it. Payables nearly doubled, so the unsold inventory was funded by stretching suppliers rather than by the bank. That combination is the classic build-up pattern, and it is visible a full quarter before it reaches the profit and loss account. Note that these formats were withdrawn in 1997 and now survive as a covenant many sanction letters still carry, so what is filed is whatever the letter specifies rather than a prescribed return.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With QIS Statement</h2><p>The return is misunderstood more often than it is misfiled.</p><ul class="gloss-bullets"><li>Confusing it with the monthly stock statement and submitting one in place of the other, which leaves a condition unmet. They serve different purposes and both are usually required.</li><li>Filing projections that are optimistic rather than realistic, then missing them every quarter, which tells the lender the forecasting cannot be relied on. Project what you expect, not what you hope.</li><li>Carrying forward last quarter's projections unchanged because circumstances have not been reviewed, so the comparison measures inattention rather than performance.</li><li>Completing only the current-asset side and leaving current liabilities thin, which prevents the lender seeing the working capital cycle the return exists to show.</li><li>Treating persistent shortfalls as a reporting nuisance rather than as the trigger for reassessing the limit itself, which is what they usually become.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The running account the return reports against is the facility itself, so <a href="/glossary/stock-audit/cash-credit-limit">cash credit limit</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With QIS Statement?</h3><p>Knowing the term is not the same as knowing the position. Where the figures behind a quarterly submission need independent support, the answer comes from a site rather than from a page, and that is what <a href="/stock-audit">inventory audit</a> covers. Send the location list and whatever records exist, and scope follows from those.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">inventory audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/cash-credit-limit">cash credit limit<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">QIS Statement FAQs</h2><p class="faq-expanded__lead">Common questions about QIS Statement in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>QIS Statement</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What is the difference between a QIS return and a stock statement?</h3><div class="faq-expanded__a" id="faq-a1"><p>A stock statement reports inventory and receivables for drawing power, usually monthly. A QIS return reports operating and financial performance against projections on a quarterly basis. The stock audit tests the first, not the second.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Does a stock auditor review QIS submissions?</h3><div class="faq-expanded__a" id="faq-a2"><p>Not normally, but material inconsistency between QIS figures and the stock position found during the count is worth reporting. Divergence between what was projected and what exists is often the reason the audit was ordered.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why do lenders compare QIS data with the audit result?</h3><div class="faq-expanded__a" id="faq-a3"><p>Because the two should tell a consistent story. Turnover reported in the QIS that cannot be reconciled with the movement in stock found at the audit usually indicates a reporting problem in one of them.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
