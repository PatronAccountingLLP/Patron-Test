@extends('layouts.service-app')

@section('meta')
<title>Fixed Asset Register: The Record Verification Tests</title>
<meta name="description" content="The fixed asset register lists every asset with its cost, location, custodian and depreciation. Physical verification tests reality against this record.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/fixed-asset-register">

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
            "name": "Fixed Asset Register",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/fixed-asset-register"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/fixed-asset-register/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/fixed-asset-register/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What makes a fixed asset register auditable?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unique asset codes, location, custodian, cost, depreciation and net book value, with the last verification date recorded. Without a unique code the register cannot be reconciled to a physical count at all."
            }
        },
        {
            "@type": "Question",
            "name": "How is a fixed asset register rebuilt when it is unreliable?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By verifying what physically exists, constructing the register from that, and reconciling backwards to the accounting records. The old register becomes history rather than the baseline, which is the only workable route when it has drifted too far."
            }
        },
        {
            "@type": "Question",
            "name": "Should low-value assets be in the register individually?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not necessarily. Many organisations group low-value items below a threshold, which keeps the register usable. What matters is that the policy is documented and applied consistently rather than varying by department."
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


<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Fixed Asset Register</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Fixed Assets and Tagging</div><h1 class="gl-h1">Fixed Asset Register</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#assets" class="gl-pill">Applied to assets</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Fixed Asset Register: Definition</div><div class="definition-box"><p>A fixed asset register is the detailed record of every item of property, plant and equipment an entity owns, holding for each one its identification, description, location, custodian, date of capitalisation, cost, useful life, depreciation charged and current carrying value. It is the record against which physical verification is performed, and it supports the single aggregate figure that appears in the financial statements.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Fixed Asset Register?</h2><p>A single line in the balance sheet stands for everything a business owns in the way of plant, equipment, vehicles and fittings, and the register is what sits behind it. Without one there is no way to establish what that figure consists of, no way to compute depreciation by anything other than a blanket rate, and no way to verify that any of it exists.</p><p>What separates a working register from a list is whether it can be used in both directions. Somebody should be able to take any line and find the asset, and take any asset and find its line, which requires an identifier, a description specific enough to distinguish similar items, a location at a level somebody can walk to, and a named custodian. Registers fail most often on description, where dozens of lines read identically and no individual line can be matched to any particular machine. The accounting fields then need to be complete enough to recompute the charge rather than merely to report it.</p></section><section id="assets" class="gl-sec"><h2>How Fixed Asset Register Applies to a Fixed Asset Register</h2><p>The register is the record everything else on these pages is applied to, and it holds four groups of field.</p><ul class="gloss-bullets"><li>Identification: the tag number as printed on the asset, wording specific enough to separate one machine from its neighbour, plus make, model and serial where those exist.</li><li>Control: site, building and area specified closely enough for a person to reach the asset, the custodian, and when each was last altered.</li><li>Accounting: capitalisation date, cost, life, residual, method, rate and accumulated depreciation, with written down value derived rather than stored.</li><li>Status: in use, idle, awaiting disposal or disposed, together with the last verification date and its result.</li><li>The test of whether it works is bidirectional. Any line should lead to an asset and any asset back to a line, and a register that fails in either direction cannot support a verification.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Fixed Asset Register Works in Practice</h2><ol><li>On acquisition a line is opened carrying an identifier that matches the label physically attached to the asset, a description distinctive enough to tell it from similar items, its class, where it stands and who answers for it.</li></ol><ol><li>The financial columns follow: when it was brought in, what it cost, how long it is expected to serve, what will be left at the end, and the method and rate applied, held against the line itself so any individual charge can be recomputed.</li></ol><ol><li>Depreciation is posted each period and accumulated against the line, with the written down value derived from those inputs rather than stored separately.</li></ol><ol><li>Movements, custodian changes, impairments and revaluations are recorded as they occur, with the history retained rather than overwritten, so an asset that cannot be found can be traced through where it has been.</li></ol><ol><li>On disposal the line is closed with the reference and the approval attached, and the register total is reconciled to the general ledger.</li></ol></section><section id="example" class="gl-sec"><h2>Fixed Asset Register: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Column</th><th>Entry</th></tr></thead><tbody><tr><td>Tag number</td><td>PL-CHK-04117</td></tr><tr><td>Description</td><td>Hydraulic press, 250 tonne</td></tr><tr><td>Location</td><td>Chakan, Bay 3</td></tr><tr><td>Custodian</td><td>Maintenance, press shop</td></tr><tr><td>Date ready for use</td><td>14 August 2023</td></tr><tr><td>Gross cost</td><td>Rs 88,40,000</td></tr><tr><td>Life and method</td><td>15 years, straight line</td></tr><tr><td>Accumulated depreciation</td><td>Rs 14,73,000</td></tr><tr><td>Net block</td><td>Rs 73,67,000</td></tr><tr><td>Last physically verified</td><td>11 March 2026</td></tr><tr><td>Condition at verification</td><td>In use, satisfactory</td></tr></tbody></table></div><p>One line from a Chakan register, shown in full rather than as a table of many assets.</p><p>Eleven fields is close to the workable minimum. Every one of them answers a question somebody actually asks: the tag ties the paper to the object, location and custodian make it findable and give somebody responsibility, the date drives depreciation, and the last two rows are what turn a list into evidence. A register carrying cost and depreciation but no location, custodian or verification date reconciles to the accounts and cannot be checked on the floor, which is the common failure. Extra columns are cheap to add and expensive to maintain badly.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Fixed Asset Register</h2><p>Most registers fail on the fields that make matching possible rather than on the accounting ones.</p><ul class="gloss-bullets"><li>Repeating an identical generic description across dozens of lines, leaving no way to tie a given row to a given machine.</li><li>Recording a location too broad to walk to, which turns verification into a search.</li><li>Overwriting the location and custodian on each change instead of retaining the history, which removes the trail that would explain a missing asset.</li><li>Storing the written down value rather than deriving it, so the figure can drift from the inputs that are supposed to produce it.</li><li>Deleting lines on disposal without retaining the reference and approval, which makes the register impossible to reconcile backwards.</li><li>Holding the tag number in one column and an internal code in another, which creates two identifiers for one asset and guarantees they will eventually disagree.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Where an asset stops earning, the carrying value has to be tested, so <a href="/glossary/stock-audit/impairment-testing">impairment testing</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Fixed Asset Register?</h3><p>Terminology takes you only as far as the question. Where a register has never been reconciled to the floor, what follows is attendance, testing and a reconciliation, described under <a href="/fixed-asset-verification">physical verification of fixed assets</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/fixed-asset-verification">physical verification of fixed assets<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/impairment-testing">impairment testing<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Fixed Asset Register FAQs</h2><p class="faq-expanded__lead">Common questions about Fixed Asset Register in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Fixed Asset Register</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What makes a fixed asset register auditable?</h3><div class="faq-expanded__a" id="faq-a1"><p>Unique asset codes, location, custodian, cost, depreciation and net book value, with the last verification date recorded. Without a unique code the register cannot be reconciled to a physical count at all.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is a fixed asset register rebuilt when it is unreliable?</h3><div class="faq-expanded__a" id="faq-a2"><p>By verifying what physically exists, constructing the register from that, and reconciling backwards to the accounting records. The old register becomes history rather than the baseline, which is the only workable route when it has drifted too far.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Should low-value assets be in the register individually?</h3><div class="faq-expanded__a" id="faq-a3"><p>Not necessarily. Many organisations group low-value items below a threshold, which keeps the register usable. What matters is that the policy is documented and applied consistently rather than varying by department.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
