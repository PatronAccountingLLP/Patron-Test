@extends('layouts.service-app')

@section('meta')
<title>Cash Credit Limit: How a CC Account Actually Works</title>
<meta name="description" content="A cash credit limit is a revolving working capital facility secured on stock and receivables. Stock audits exist to protect the lender's position in it.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/cash-credit-limit">

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
            "name": "Cash Credit Limit",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/cash-credit-limit"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cash-credit-limit/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/cash-credit-limit/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Does a stock audit change the cash credit limit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not directly. The audit reports what exists; the lender decides whether that affects drawing power, the limit at next review, or neither. A clean audit rarely increases a limit, but an adverse one frequently restricts availability."
            }
        },
        {
            "@type": "Question",
            "name": "How does a cash credit limit relate to stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The limit is the maximum the lender will lend; availability within it is governed by the value of stock and eligible receivables. Stock falling does not reduce the limit, but it does reduce what can actually be drawn."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between limit and drawing power?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The limit is sanctioned once. Drawing power is recalculated from the current stock and receivables position, and is capped by the limit. A borrower can have a large limit and very little availability if stock has fallen."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Lending Trigger</div><h1 class="gl-h1">Cash Credit Limit</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#covenant" class="gl-pill">In the sanction letter</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Cash Credit Limit: Definition</div><div class="definition-box"><p>A cash credit limit is the maximum a borrower is sanctioned to draw on a running working capital account secured against current assets. It is a ceiling rather than an entitlement: what can actually be drawn on any day is the lower of the sanctioned limit and the drawing power computed from the latest stock and receivables position. Interest is charged only on the balance actually outstanding.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Cash Credit Limit?</h2><p>A cash credit account works as a running facility rather than as a loan with a repayment schedule. The borrower draws as working capital requires and repays as collections arrive, so the balance moves continuously and interest is charged only on what is actually outstanding. That flexibility is what makes it suit a trading business whose cash requirement rises and falls through the year.</p><p>What is sanctioned is a maximum and not a promise: the sum genuinely at the borrower's disposal on any given day is whichever is smaller, the sanctioned figure or the drawing power derived from the most recent stock and receivables position. A borrower who assumes the sanctioned figure is available has misread the facility, and the gap between the two becomes apparent when an independent verification revises the position downward. The account is also expected to be operated, with regular credits from sales, since a balance that sits permanently near the limit without turnover suggests the facility is funding something other than working capital.</p></section><section id="covenant" class="gl-sec"><h2>Where Cash Credit Limit Appears in a Sanction Letter</h2><p>This is the facility the letter is about, so it is named at the top and qualified throughout.</p><ul class="gloss-bullets"><li>The facility clause, stating the amount sanctioned, the purpose it may be used for and the period until review.</li><li>The drawing power clause, which is where the practical ceiling actually lives, because entitlement is capped by whichever comes out smaller, the approved amount or the calculated one.</li><li>The interest clause, setting the rate, how it is reset, and the penal rate applying where the account is irregular.</li><li>The operations covenant, requiring the account to be routed with sales proceeds and to show turnover, which is what distinguishes a working capital facility from a standing loan.</li><li>The renewal clause, fixing the date by which the facility must be reassessed and the papers the borrower has to submit for it.</li></ul></section><section id="compliance" class="gl-sec"><h2>Cash Credit Limit Under Indian Law</h2><p>Position: the assessment of working capital limits is not prescribed. The Maximum Permissible Bank Finance framework derived from the Tandon and Chore committees, including the three methods of lending, ceased to be mandatory in 1997. Banks set their own assessment methodology under board-approved policy.</p><ul class="gloss-bullets"><li>Many continue to use approaches derived from that framework, including turnover-based methods and projected cash flow assessment, but they do so by choice rather than by direction.</li><li>Source: the RBI circular of April 1997 withdrawing the Maximum Permissible Bank Finance framework.</li><li>Note: what binds the borrower is the sanction letter. Assessment methodology explains how the limit was arrived at; the covenant explains what must now be done to keep it.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Cash Credit Limit Works in Practice</h2><ol><li>A ceiling is approved against current assets and a charge registered over them. What opens is a revolving account, not a sum paid out in one go.</li></ol><ol><li>Drawings rise and fall with trading, collections push the balance back down, and interest attaches only to whatever sits unpaid on each particular day.</li></ol><ol><li>Each period the stock and receivables position is reported, and the lender computes the drawing power from it after exclusions and margin.</li></ol><ol><li>What may actually be taken is whichever is lower, the sanctioned figure or that computed drawing power, so the ceiling moves with the security even though the sanction does not.</li></ol><ol><li>The account is expected to turn over, with regular credits from sales. A balance parked near the limit with few credits invites a review, because it points to money being applied somewhere the approval never envisaged.</li></ol></section><section id="example" class="gl-sec"><h2>Cash Credit Limit: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Component</th><th>Amount</th><th>Margin</th><th>Drawing power</th></tr></thead><tbody><tr><td>Paid stock (net of creditors)</td><td>Rs 6,00,00,000</td><td>25%</td><td>Rs 4,50,00,000</td></tr><tr><td>Eligible book debt</td><td>Rs 2,00,00,000</td><td>40%</td><td>Rs 1,20,00,000</td></tr><tr><td>Computed drawing power</td><td>-</td><td>-</td><td>Rs 5,70,00,000</td></tr><tr><td>Sanctioned limit</td><td>-</td><td>-</td><td>Rs 5,00,00,000</td></tr><tr><td>Permitted drawing</td><td>-</td><td>-</td><td>Rs 5,00,00,000</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Drawing power</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Drawing power"><rect x="26" y="62" width="62" height="118" rx="5" fill="#14365F"/><text x="57" y="54" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">45,000,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Paid stock (net </text><rect x="114" y="148" width="62" height="32" rx="5" fill="#14365F"/><text x="145" y="140" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">12,000,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Eligible book de</text><rect x="202" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="233" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">57,000,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Computed drawing</text><rect x="290" y="48" width="62" height="132" rx="5" fill="#14365F"/><text x="321" y="40" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">50,000,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Sanctioned limit</text><rect x="378" y="48" width="62" height="132" rx="5" fill="#E8712C"/><text x="409" y="40" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">50,000,000</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Permitted drawin</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>An Aurangabad packaging company holds a Rs 5 crore facility. Its September statement supports a computed drawing power of Rs 5.70 crore.</p><p>The last two lines are the ones to read carefully. Drawing is capped at the lower of the computed figure and the sanctioned limit, so the borrower may draw Rs 5 crore and not a rupee more. The Rs 70 lakh of headroom above the limit buys nothing on its own; it only provides a cushion, so that a fall in stock next month does not immediately pull the permitted drawing below what is already outstanding. Two deductions are easy to miss in the first line. Unpaid creditors come off before the margin is applied, and applying the margin first inflates the result.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Cash Credit Limit</h2><p>Almost every error here comes from confusing the ceiling with what is actually available.</p><ul class="gloss-bullets"><li>Budgeting against the sanctioned figure when the usable amount is whichever is lower of that and the computed drawing power. Work from the computation, not the sanction.</li><li>Drawing to the limit and then discovering that a verification has reduced the eligible stock, leaving the account over-drawn against its security without anybody having acted deliberately.</li><li>Operating the account as a term loan, with a balance that sits near the limit and few credits, which signals to a reviewer that the money is paying for something the limit was never sanctioned against.</li><li>Forgetting that interest accrues on the outstanding balance daily, so idle drawn funds cost money that a properly operated account would not incur.</li><li>Submitting the stock statement late and assuming the previous drawing power stands, when a stale figure can freeze the account.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Drawing power moves with whatever a count establishes, so <a href="/glossary/stock-audit/physical-verification">physical verification</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Cash Credit Limit?</h3><p>Understanding the term is the easy half. The harder half arrives when what is actually available against a limit depends on a verified position, and it is answered on site rather than on paper. <a href="/stock-audit">how we run a stock audit</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">how we run a stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/physical-verification">physical verification<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Cash Credit Limit FAQs</h2><p class="faq-expanded__lead">Common questions about Cash Credit Limit in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Cash Credit Limit</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Does a stock audit change the cash credit limit?</h3><div class="faq-expanded__a" id="faq-a1"><p>Not directly. The audit reports what exists; the lender decides whether that affects drawing power, the limit at next review, or neither. A clean audit rarely increases a limit, but an adverse one frequently restricts availability.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How does a cash credit limit relate to stock?</h3><div class="faq-expanded__a" id="faq-a2"><p>The limit is the maximum the lender will lend; availability within it is governed by the value of stock and eligible receivables. Stock falling does not reduce the limit, but it does reduce what can actually be drawn.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What is the difference between limit and drawing power?</h3><div class="faq-expanded__a" id="faq-a3"><p>The limit is sanctioned once. Drawing power is recalculated from the current stock and receivables position, and is capped by the limit. A borrower can have a large limit and very little availability if stock has fallen.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
