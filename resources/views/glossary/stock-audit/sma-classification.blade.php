@extends('layouts.service-app')

@section('meta')
<title>SMA Classification: Special Mention Account Stages</title>
<meta name="description" content="SMA-0, SMA-1 and SMA-2 flag an account showing early stress before it turns non-performing. An SMA flag is a common trigger for a bank-ordered stock audit.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/sma-classification">

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
            "name": "SMA Classification",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/sma-classification"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/sma-classification/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/sma-classification/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Does SMA status trigger a stock audit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It commonly does. Movement into SMA-1 or SMA-2 is one of the clearest signals a lender uses to order an out-of-cycle or focused stock audit, because deteriorating servicing raises the question of whether the underlying security is still there."
            }
        },
        {
            "@type": "Question",
            "name": "What are the SMA day bands?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "SMA-0 covers accounts overdue between one and thirty days, SMA-1 between thirty-one and sixty, and SMA-2 between sixty-one and ninety. Beyond ninety days the account is classified as non-performing. The bands act as an early warning sequence rather than a penalty."
            }
        },
        {
            "@type": "Question",
            "name": "Can an account move back out of SMA?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. SMA classification follows the overdue position, so clearing the overdue amount moves the account back. The audit consequences may lag, because a lender that has already ordered a stock audit will usually still want the report."
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


<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">SMA Classification</span></nav><div class="gl-cat">Stock Audit Glossary &middot; The Lending Trigger</div><h1 class="gl-h1">SMA Classification</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#covenant" class="gl-pill">In the sanction letter</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">SMA Classification: Definition</div><div class="definition-box"><p>Special Mention Account classification is an early-warning grading a bank applies to a loan account that is showing signs of stress but has not yet become non-performing. It is set by how long a payment of principal or interest has remained overdue, and it is graded in bands. The classification is an internal supervisory signal, and it commonly brings closer monitoring of the account, including verification of the security.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is SMA Classification?</h2><p>The grading exists because a loan account rarely fails without warning. Payments slip by a few days, then a few weeks, and the pattern is visible in the account long before anything is formally impaired. Special Mention Account bands capture that period, sorting accounts by how long an amount has been outstanding so that a lender can see deterioration while there is still time to respond to it. The bands are supervisory rather than punitive, and an account can move back out of them as easily as it moved in.</p><p>For a borrower the practical significance is what the grading triggers rather than the label itself. Once an account is flagged, monitoring intensifies across the relationship: statements are scrutinised more closely, verification of the security is commissioned more often, and any request for enhancement or renewal is examined against the flag. Account information also travels to credit information companies where the reporting framework requires it, so the effect commonly reaches beyond the lender that raised the flag. Understanding which band an account sits in, and what would move it, is more useful to a borrower than the terminology.</p></section><section id="covenant" class="gl-sec"><h2>Where SMA Classification Appears in a Sanction Letter</h2><p>The term itself rarely appears by name. What the document carries instead are the clauses the grading activates.</p><ul class="gloss-bullets"><li>The events of default clause, which treats persistent overdue amounts as a breach entitling the bank to review or recall.</li><li>The monitoring clause, permitting the lender to increase the frequency of inspection and verification at its discretion, which is what changes first when an account is flagged.</li><li>The information covenant, requiring statements and returns by stated dates, since a flagged account filing late compounds the position.</li><li>The pricing clause, where the rate is linked to conduct or to internal rating, so a downgrade can carry a cost the borrower did not anticipate.</li><li>Reading these together tells a borrower what a flag will actually trigger, which is more useful than the terminology itself.</li></ul></section><section id="compliance" class="gl-sec"><h2>SMA Classification Under Indian Law</h2><p>Position: the bands are set by day count against the overdue amount. SMA-0 covers principal or interest overdue between 1 and 30 days, SMA-1 between 31 and 60 days, and SMA-2 between 61 and 90 days.</p><ul class="gloss-bullets"><li>Cash credit and overdraft accounts are graded differently. The test is not an overdue instalment but whether the account is out of order, meaning the balance has remained continuously above the sanctioned limit or drawing power, or credits are insufficient to cover the interest debited, across the same 30, 60 and 90 day bands.</li><li>Source: RBI Master Circular on Prudential Norms on Income Recognition, Asset Classification and Provisioning pertaining to Advances, including the out-of-order definition applicable to running accounts.</li><li>Note: these are monitoring and reporting categories, not impairment. An account becomes non-performing only after it passes beyond the 90 day band.</li></ul></section><section id="how-works" class="gl-sec"><h2>How SMA Classification Works in Practice</h2><ol><li>An instalment or interest charge falls due on a working capital or term facility and is not met on the due date. Nothing is flagged that day; the account simply carries an overdue amount.</li></ol><ol><li>The bank's system counts the days that amount stays outstanding. As the count crosses defined thresholds the account moves through successive early-warning bands, each one representing a longer period of non-payment.</li></ol><ol><li>The grading is carried into the bank's watch-list reporting and filed with the bureaus, which puts it in view beyond the relationship.</li></ol><ol><li>Monitoring intensifies. Statements are read more closely, the frequency of verification over the security is reviewed, and anything pending, whether a limit increase or a renewal, is weighed with the flag in view.</li></ol><ol><li>If the overdue amount is cleared, the account steps back out of the bands. If it is not, the count continues until the account crosses into non-performing territory and a different regime applies.</li></ol></section><section id="example" class="gl-sec"><h2>SMA Classification: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Date</th><th>Event</th><th>Amount overdue</th><th>Days overdue</th><th>Band</th></tr></thead><tbody><tr><td>5 April</td><td>Interest debited, not serviced</td><td>Rs 4,20,000</td><td>0</td><td>Standard</td></tr><tr><td>5 May</td><td>Still unpaid</td><td>Rs 4,20,000</td><td>30</td><td>SMA-0 crossed</td></tr><tr><td>20 May</td><td>Part payment received</td><td>Rs 1,80,000</td><td>45</td><td>SMA-1</td></tr><tr><td>5 July</td><td>Balance cleared</td><td>Nil</td><td>-</td><td>Standard</td></tr></tbody></table></div><p>A Nashik engineering unit runs a cash credit limit of Rs 6 crore. Interest for March is debited on 5 April and is not serviced, because a large receivable from a state utility slips. Nothing happens on day one. The overdue amount simply sits there while the system counts.</p><p>The point the table makes is that the classification is driven by elapsed days on an unpaid amount, not by the size of the amount or the health of the business. Rs 4.2 lakh on a Rs 6 crore limit is small. It still moves the account through the early-warning bands on schedule, and it still reaches the bureaus. The part payment on 20 May reduces the exposure but does not reset the clock, because a portion remains outstanding. Only the July clearance returns the account to standard.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With SMA Classification</h2><p>Four errors account for most of the damage borrowers do to themselves here.</p><ul class="gloss-bullets"><li>Treating the flag as an accusation and disputing it, rather than clearing the overdue amount, which wastes the window in which the position is still easily reversed. Ask what is outstanding and pay it.</li><li>Assuming the grading is confined to the one account, when it colours how the whole relationship is reviewed and reaches credit information companies. Expect questions on every facility, not just the flagged one.</li><li>Letting a payment slip a few days each month because no consequence has yet appeared, which builds precisely the pattern the bands were designed to detect. Fix the payment calendar rather than the individual instance.</li><li>Deferring a stock statement or an audit while the account is flagged, which is read as avoidance at the worst possible moment. File on time and let the verification happen.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The next band along is where an account goes if the position does not recover, so <a href="/glossary/stock-audit/npa-classification">npa classification</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With SMA Classification?</h3><p>This page explains the idea. The practical question begins when an account has been flagged and the lender wants the security verified, and settling it means fieldwork of the kind <a href="/stock-audit">how we run a stock audit</a> sets out. Scope is built from the sites involved and the state of the underlying records.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">how we run a stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/npa-classification">npa classification<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">SMA Classification FAQs</h2><p class="faq-expanded__lead">Common questions about SMA Classification in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>SMA Classification</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">Does SMA status trigger a stock audit?</h3><div class="faq-expanded__a" id="faq-a1"><p>It commonly does. Movement into SMA-1 or SMA-2 is one of the clearest signals a lender uses to order an out-of-cycle or focused stock audit, because deteriorating servicing raises the question of whether the underlying security is still there.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What are the SMA day bands?</h3><div class="faq-expanded__a" id="faq-a2"><p>SMA-0 covers accounts overdue between one and thirty days, SMA-1 between thirty-one and sixty, and SMA-2 between sixty-one and ninety. Beyond ninety days the account is classified as non-performing. The bands act as an early warning sequence rather than a penalty.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can an account move back out of SMA?</h3><div class="faq-expanded__a" id="faq-a3"><p>Yes. SMA classification follows the overdue position, so clearing the overdue amount moves the account back. The audit consequences may lag, because a lender that has already ordered a stock audit will usually still want the report.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
