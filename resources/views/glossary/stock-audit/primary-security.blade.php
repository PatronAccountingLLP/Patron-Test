@extends('layouts.service-app')

@section('meta')
<title>Primary Security: The Asset That Directly Secures a Loan</title>
<meta name="description" content="Primary security is the asset a facility is created against. On a cash credit limit that asset is your stock, which is precisely why it gets audited.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/primary-security">

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
            "name": "Primary Security",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/primary-security"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/primary-security/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/primary-security/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is the difference between primary and collateral security?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Primary security is the asset the facility directly finances, which for a working capital limit is usually stock and receivables. Collateral is additional security taken to strengthen the position, such as property. A stock audit tests the primary security."
            }
        },
        {
            "@type": "Question",
            "name": "Why does a lender audit primary security more often?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because it moves. Property does not change month to month, but stock is bought, converted and sold continuously, so its value can fall far faster than the facility secured against it."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if primary security is found short?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The lender reassesses drawing power and may restrict availability. The immediate consequence is usually financial rather than legal, but a large unexplained shortfall also raises questions about the reliability of the stock statements filed earlier."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Lending Trigger</div><h1 class="gl-h1">Primary Security</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#covenant" class="gl-pill">In the sanction letter</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Primary Security: Definition</div><div class="definition-box"><p>Primary security is the asset created out of the borrowed money itself, and it is the lender's first recourse if the facility is not repaid. On a working capital facility that means the inventory and receivables the finance was advanced against. It is distinguished from collateral security, which is any additional asset pledged to support the same facility but not generated by it, such as property or a fixed deposit.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Primary Security?</h2><p>The line between this and collateral governs what a lender actually monitors. The trading stock and receivables of a working business fluctuate continuously, rising and falling with purchases, production and collections. That movement is precisely why they have to be reported on and verified: a charge over an asset that changes every day is only as good as the last reliable measurement of it.</p><p>Collateral behaves differently. Property, deposits and personal guarantees are static, can be valued periodically, and do not require monthly reporting. A lender therefore takes comfort from collateral and takes work from the trading assets, which is why the stock statement, the drawing power computation and periodic independent verification all attach to that side. Where a facility is secured on both, deterioration on the trading side is what triggers a review, even where the collateral remains ample, because the facility was sized on the trading assets rather than on the property behind them.</p></section><section id="covenant" class="gl-sec"><h2>Where Primary Security Appears in a Sanction Letter</h2><p>This is one of the terms the document names directly, and it appears in four places.</p><ul class="gloss-bullets"><li>The security clause, describing the charge created over stock and receivables and distinguishing it from any collateral offered alongside.</li><li>The drawing power clause, setting out how the amount available is computed from the reported position, including the exclusions and the margin applied.</li><li>The insurance covenant, requiring the charged assets to be insured for their full value, at the addresses they actually occupy, with the bank's interest noted.</li><li>The inspection clause, permitting the lender or its appointed representative to enter the premises and verify the assets, which is the authority behind every independent verification that follows.</li><li>A borrower reading only the first of those has read the security and none of its conditions.</li></ul></section><section id="compliance" class="gl-sec"><h2>Primary Security Under Indian Law</h2><p>Position: the distinction between primary and collateral security is a matter of banking practice rather than statute. What is statutory is the registration of the charge. Where the borrower is a company, particulars of a charge created over its property must be registered with the Registrar of Companies within thirty days of creation.</p><ul class="gloss-bullets"><li>Late registration is possible within an extended window on payment of additional and ad valorem fees, but a charge that is never registered is void against a liquidator and other creditors in a winding up.</li><li>Source: section 77 of the Companies Act 2013, filed in Form CHG-1.</li><li>Note: the practical consequence for a lender is that an unregistered charge over stock leaves it an unsecured creditor precisely when the security matters most.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Primary Security Works in Practice</h2><ol><li>A facility is sanctioned against the current assets the advance will fund, and a charge is created over them so the lender has a claim if repayment fails.</li></ol><ol><li>The borrower reports the position periodically, stating stock by category and location together with receivables and the creditors attributable to unpaid goods.</li></ol><ol><li>The lender computes what may actually be drawn from those figures, applying the exclusions and the margin the sanction specifies.</li></ol><ol><li>Because the asset fluctuates daily, the reported figure is tested from time to time by an independent count, and the verified position replaces the reported one in the computation.</li></ol><ol><li>Where verification finds less than was reported, the entitlement moves down accordingly, and a pattern of gaps between reported and verified figures becomes a question about the reporting rather than about the stock.</li></ol></section><section id="example" class="gl-sec"><h2>Primary Security: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Item</th><th>Book value</th><th>Charged as</th><th>Available to the lender</th></tr></thead><tbody><tr><td>Raw material and finished goods</td><td>Rs 3.80 crore</td><td>Primary, hypothecated</td><td>Yes</td></tr><tr><td>Trade receivables under 90 days</td><td>Rs 2.10 crore</td><td>Primary, hypothecated</td><td>Yes</td></tr><tr><td>Factory land and building</td><td>Rs 6.00 crore</td><td>Collateral, mortgaged</td><td>Yes, but secondary</td></tr><tr><td>Promoter residence</td><td>Rs 2.50 crore</td><td>Collateral</td><td>Yes, but secondary</td></tr></tbody></table></div><p>A Coimbatore pump manufacturer borrows against stock and receivables. The table separates what the facility is actually lent against from what merely backs it up.</p><p>The distinction matters at verification. The Rs 5.90 crore of stock and receivables is the asset the limit is sized on, so it is counted, aged and valued every cycle. The land and the residence are worth more on paper but no verification of inventory ever reaches them: they are realised only if the facility fails. A borrower who assumes the Rs 6 crore factory makes the position comfortable has misread which asset the lender is watching. Erosion in the first two lines changes the drawing power immediately. Erosion in the last two does not show up until enforcement.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Primary Security</h2><p>Most errors here come from treating a fluctuating asset as though it were a fixed one.</p><ul class="gloss-bullets"><li>Assuming that ample collateral compensates for a weak trading position, because the limit was set against stock and receivables, so a review follows their decline no matter how much property stands behind it.</li><li>Including goods held on consignment, at a job worker, or for a third party in the reported figure, which overstates what the lender can actually look to. Exclude anything the business does not own.</li><li>Reporting a figure without deducting creditors for unpaid stock, so goods financed by a supplier are counted as though financed by the bank. Deduct them before the statement goes.</li><li>Leaving a location undisclosed because it is small or recently added, which turns an ordinary godown into a finding the moment it is discovered.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Receivables sit alongside stock as the other half of what a working capital facility rests on, so <a href="/glossary/stock-audit/book-debt">book debt</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Primary Security?</h3><p>Understanding the term is the easy half. The harder half arrives when the security behind a facility needs counting and confirming, and it is answered on site rather than on paper. <a href="/stock-audit">inventory audit</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">inventory audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/book-debt">book debt<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Primary Security FAQs</h2><p class="faq-expanded__lead">Common questions about Primary Security in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.faq-enquiry-form', [
    'enquiryTitle'   => 'Talk to the stock audit team',
    'enquirySub'     => 'Tell us where the stock sits and we will scope the count.',
    'enquiryService' => 'Primary Security',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What is the difference between primary and collateral security?</h3><div class="faq-expanded__a" id="faq-a1"><p>Primary security is the asset the facility directly finances, which for a working capital limit is usually stock and receivables. Collateral is additional security taken to strengthen the position, such as property. A stock audit tests the primary security.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Why does a lender audit primary security more often?</h3><div class="faq-expanded__a" id="faq-a2"><p>Because it moves. Property does not change month to month, but stock is bought, converted and sold continuously, so its value can fall far faster than the facility secured against it.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens if primary security is found short?</h3><div class="faq-expanded__a" id="faq-a3"><p>The lender reassesses drawing power and may restrict availability. The immediate consequence is usually financial rather than legal, but a large unexplained shortfall also raises questions about the reliability of the stock statements filed earlier.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
