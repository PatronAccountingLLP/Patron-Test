@extends('layouts.service-app')

@section('meta')
<title>NPA Classification: When a Loan Turns Non-Performing</title>
<meta name="description" content="An account becomes a non-performing asset once dues stay unpaid beyond the prescribed period. It is the stage after SMA, and it drives lender urgency.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/npa-classification">

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
            "name": "NPA Classification",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/npa-classification"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/npa-classification/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/npa-classification/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How does NPA status affect a stock audit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Scope usually widens and frequency increases. The lender is no longer only monitoring value but establishing what can be realised, so verification of ownership, condition and saleability matters more than a routine quantity reconciliation."
            }
        },
        {
            "@type": "Question",
            "name": "When does an account become an NPA?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "When the overdue period passes ninety days, following the SMA sequence. From an audit perspective the significance is that scrutiny of the underlying stock intensifies well before that point rather than at it."
            }
        },
        {
            "@type": "Question",
            "name": "Is a stock auditor involved in NPA classification?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Classification is a lender decision based on account servicing. The stock auditor reports on inventory, and that report may inform the lender view of security cover, but it does not determine classification."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Lending Trigger</div><h1 class="gl-h1">NPA Classification</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#covenant" class="gl-pill">In the sanction letter</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">NPA Classification: Definition</div><div class="definition-box"><p>A non-performing asset is a loan on which the bank has stopped recognising income because principal or interest has remained overdue beyond a prescribed period. Classification moves an account out of the standard category and into a graded scale that determines how much the bank must provide against it. For a borrower, the consequence reaches beyond one facility, because the status attaches to the borrower rather than to a single account.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is NPA Classification?</h2><p>Classification is an accounting discipline imposed on lenders rather than a judgement about a borrower's character. Once an account crosses the prescribed overdue period, the bank must stop recognising income on it and must set aside capital against the exposure, and the amount set aside increases the longer the position persists. That provisioning cost is why lenders act well before the threshold is reached, and it explains a great deal of behaviour that borrowers experience as sudden.</p><p>The classification then hardens through further stages as time passes, with the provisioning requirement rising at each. Because the grading is recorded against the borrower and not merely against one facility, a single impaired account reaches every other line that borrower holds with the lender, and the grading goes across to the credit bureaux under the framework that applies, where other lenders are likely to encounter it. Recovering standard status requires the overdue amounts to be cleared, and the account will generally remain under close observation afterwards rather than returning immediately to ordinary monitoring.</p></section><section id="covenant" class="gl-sec"><h2>Where NPA Classification Appears in a Sanction Letter</h2><p>The consequences sit across several clauses rather than in one place.</p><ul class="gloss-bullets"><li>The events of default clause, which is where sustained non-payment entitles the bank to accelerate the facility and demand repayment in full.</li><li>The cross-default provision, under which impairment on one line places every other facility with that lender in breach, which is how a single account reaches the whole relationship.</li><li>The security enforcement clause, setting out the bank's right to take possession of the charged assets and realise them.</li><li>The reporting clause, permitting disclosure of the borrower's conduct to credit information companies and to other lenders in a consortium.</li><li>The restructuring provisions, where the facility can be reworked instead of enforced, which is the route a viable business wants to reach before enforcement begins.</li></ul></section><section id="compliance" class="gl-sec"><h2>NPA Classification Under Indian Law</h2><p>Position: an advance is non-performing where interest or principal remains overdue for more than 90 days. Once classified, it moves through three categories. Substandard covers an asset that has remained non-performing for up to twelve months. Doubtful applies once it has stayed substandard for twelve months. Loss is an asset regarded as uncollectible, whatever salvage value may remain.</p><ul class="gloss-bullets"><li>Provisioning rises at each stage, which is the mechanism that makes classification consequential for the lender rather than merely descriptive.</li><li>Source: RBI Master Circular on Prudential Norms on Income Recognition, Asset Classification and Provisioning pertaining to Advances.</li><li>Note: a bank may classify an account as doubtful or loss directly where the borrower's position warrants it, without the account first serving the full period in each preceding category.</li></ul></section><section id="how-works" class="gl-sec"><h2>How NPA Classification Works in Practice</h2><ol><li>An amount remains overdue past the prescribed period. At that point the bank must stop treating income on the account as earned, whether or not it has been booked.</li></ol><ol><li>A provision is charged against the bank's own capital, sized by the grade. That proportion steps up as the position ages through each successive stage.</li></ol><ol><li>The grading is applied at borrower level, so every other line held with that lender is reclassified in the same movement.</li></ol><ol><li>Where the reporting framework requires it, the outcome goes to the credit bureaux, and it will then ordinarily show up on a search by any lender approached afterwards.</li></ol><ol><li>Recovery follows the bank's policy, restructuring a viable business or enforcing against the charge where it is not. Paying down the arrears returns the account to standard, usually with a watching period attached before ordinary monitoring resumes.</li></ol></section><section id="example" class="gl-sec"><h2>NPA Classification: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Facility</th><th>Outstanding</th><th>First overdue</th><th>Days at 30 Sept</th><th>Status</th></tr></thead><tbody><tr><td>Cash credit</td><td>Rs 5.40 crore</td><td>12 June</td><td>110</td><td>NPA</td></tr><tr><td>Term loan</td><td>Rs 2.10 crore</td><td>Serviced</td><td>0</td><td>Standard, but tainted</td></tr><tr><td>Total exposure</td><td>Rs 7.50 crore</td><td>-</td><td>-</td><td>Both treated as NPA</td></tr></tbody></table></div><p>A Ludhiana textile borrower services its term loan punctually all year. Its cash credit account, however, remains continuously out of order from 12 June: the outstanding stays above the sanctioned limit and no credits sufficient to cover the interest are received.</p><p>At 30 September the cash credit has been irregular for 110 days, past the ninety-day threshold. The table shows the consequence people most often miss. Classification attaches to the borrower, not to the facility. The term loan is current and would look healthy read on its own, but it is downgraded with the rest of the exposure. Provisioning then applies across the full Rs 7.50 crore, and the security position over inventory becomes the bank's immediate question rather than a routine one.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With NPA Classification</h2><p>The recurring errors concern what the status affects and how it is cleared.</p><ul class="gloss-bullets"><li>Believing that clearing the arrears immediately restores standard status, when the account will generally stay under close observation for a further period. Plan for scrutiny beyond the payment itself.</li><li>Assuming other lenders will not see it, when the framework requires it to go across to the bureaux, and a new lender will ordinarily pull that history before deciding. Disclose it rather than let it be discovered.</li><li>Allowing the security position to deteriorate at the same time, so that a lender examining an impaired account also finds stock it cannot rely on. Keep verification current precisely when the account is stressed.</li><li>Treating the provisioning cost as the bank's problem alone, when it is the reason limits are reviewed and pricing changes. It shapes what the lender can offer next.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>What a lender takes as security is what it looks at first once an account slips, so <a href="/glossary/stock-audit/primary-security">primary security</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">the glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With NPA Classification?</h3><p>Reading about it settles the meaning and nothing else. The moment the stock behind a stressed facility has to be established independently, the position has to be established independently, which is the substance of <a href="/stock-audit">stock audit service</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">stock audit service<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/primary-security">primary security<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">NPA Classification FAQs</h2><p class="faq-expanded__lead">Common questions about NPA Classification in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - NPA Classification',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "NPA Classification", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does NPA status affect a stock audit?</h3><div class="faq-expanded__a" id="faq-a1"><p>Scope usually widens and frequency increases. The lender is no longer only monitoring value but establishing what can be realised, so verification of ownership, condition and saleability matters more than a routine quantity reconciliation.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">When does an account become an NPA?</h3><div class="faq-expanded__a" id="faq-a2"><p>When the overdue period passes ninety days, following the SMA sequence. From an audit perspective the significance is that scrutiny of the underlying stock intensifies well before that point rather than at it.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Is a stock auditor involved in NPA classification?</h3><div class="faq-expanded__a" id="faq-a3"><p>No. Classification is a lender decision based on account servicing. The stock auditor reports on inventory, and that report may inform the lender view of security cover, but it does not determine classification.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
