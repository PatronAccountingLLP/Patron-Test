@extends('layouts.service-app')

@section('meta')
<title>Capital Work-in-Progress: Assets Not Yet Ready for Use</title>
<meta name="description" content="CWIP holds spend on assets under construction that are not yet ready for use. It carries no depreciation, and long-standing balances attract attention.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/capital-work-in-progress">

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
            "name": "Capital Work-in-Progress (CWIP)",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/capital-work-in-progress"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/capital-work-in-progress/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/capital-work-in-progress/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "When does CWIP become a fixed asset?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "When the asset is ready for its intended use, at which point it is capitalised and depreciation begins. Assets left in CWIP after they are in use understate depreciation and overstate the CWIP balance."
            }
        },
        {
            "@type": "Question",
            "name": "How is CWIP verified physically?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By inspecting the stage of construction or installation and comparing it with the amount capitalised. Overstatement is common because costs are booked as incurred while physical progress lags behind them."
            }
        },
        {
            "@type": "Question",
            "name": "Why is long-outstanding CWIP a concern?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because it may represent a stalled or abandoned project carried at full cost. Ageing the CWIP balance identifies items that have not moved for years and may need impairment rather than continued capitalisation."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Fixed Assets and Tagging</div><h1 class="gl-h1">Capital Work-in-Progress (CWIP)</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#assets" class="gl-pill">Applied to assets</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Capital Work-in-Progress (CWIP): Definition</div><div class="definition-box"><p>Capital work-in-progress is expenditure incurred on an asset that is being constructed or installed but is not yet ready for its intended use. It is accumulated separately on the balance sheet and carries no depreciation, because depreciation begins only when the asset becomes available for use. At that point the accumulated cost is transferred out of CWIP and capitalised as property, plant and equipment.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Capital Work-in-Progress (CWIP)?</h2><p>Assets under construction occupy an awkward position in a balance sheet. Money has been spent, something physical exists or is being built, and yet nothing is generating any benefit, so the expenditure is accumulated in its own line and left undepreciated until the asset can actually be used. The trigger is availability for use rather than the date of an invoice or a completion certificate.</p><p>Two problems recur in verification. The first is a balance that grows while nothing visible changes on site, which usually resolves into advances paid, costs booked to the wrong project, or a project that stalled without anybody formally closing it. The second is more expensive: an asset that is finished and running but never transferred out. Because nothing in that account depreciates, the charge that should have started when the asset came into use has simply never been made, overstating profit in every period since and requiring a correction that reaches backwards.</p></section><section id="compliance" class="gl-sec"><h2>Capital Work-in-Progress (CWIP) Under Indian Law</h2><p>Position: capital work-in-progress is presented separately on the face of the balance sheet, and since the 2021 amendment to the presentation schedule an ageing disclosure is required alongside it.</p><ul class="gloss-bullets"><li>The ageing is given in four bands: less than one year, one to two years, two to three years, and more than three years. Projects whose completion is overdue, or which have exceeded their original cost, must be disclosed separately.</li><li>Source: Schedule III to the Companies Act 2013, as amended with effect from financial years commencing on or after 1 April 2021.</li><li>Note: the disclosure requires project-level tracking rather than a single balance, and a project sitting in the oldest band is precisely the population a verification examines against what is physically on site.</li></ul></section><section id="assets" class="gl-sec"><h2>How Capital Work-in-Progress (CWIP) Applies to a Fixed Asset Register</h2><p>On the register this is a holding account rather than an asset line, and it behaves differently from everything around it.</p><ul class="gloss-bullets"><li>Entries accumulate against a project reference instead of an identifier, because there is nothing yet to label or locate.</li><li>No life, no rate and no charge attach to the balance, so it sits outside every depreciation run until it moves.</li><li>The transfer out is what creates the real register lines, and it is triggered by availability for use rather than by a closing invoice.</li><li>The pooled figure is then broken apart into separate assets, each picking up its own identifier, location, custodian and expected span, which is where componentisation is decided if it is going to be.</li><li>A balance that never moves is the register's most common defect, since equipment already running is escaping the charge entirely.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Capital Work-in-Progress (CWIP) Works in Practice</h2><ol><li>A project is approved and expenditure begins: civil work, equipment purchases, installation, and the professional costs directly attributable to bringing the asset into being.</li></ol><ol><li>Each cost is accumulated against the project in its own account rather than being expensed or capitalised as a completed asset.</li></ol><ol><li>No depreciation is charged while the balance sits there, because the asset is not yet in the location and condition necessary for it to be used as intended.</li></ol><ol><li>Once the item can actually be put to its intended work, which governs rather than any closing invoice or sign-off note, the pooled expenditure moves across and is brought in as a completed fixed asset.</li></ol><ol><li>Depreciation starts from that point. Where a project is abandoned instead, the accumulated cost is written off in the period the decision was taken rather than carried indefinitely.</li></ol></section><section id="example" class="gl-sec"><h2>Capital Work-in-Progress (CWIP): A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Cost incurred</th><th>Amount</th><th>Capitalise or expense</th></tr></thead><tbody><tr><td>Imported machine, landed</td><td>Rs 3,40,00,000</td><td>Capitalise</td></tr><tr><td>Civil foundation and structure</td><td>Rs 46,00,000</td><td>Capitalise</td></tr><tr><td>Erection and commissioning</td><td>Rs 28,00,000</td><td>Capitalise</td></tr><tr><td>Trial run material, output scrapped</td><td>Rs 9,00,000</td><td>Capitalise</td></tr><tr><td>Staff training on the machine</td><td>Rs 4,00,000</td><td>Expense</td></tr><tr><td>Carried as CWIP at 31 March</td><td>Rs 4,23,00,000</td><td>-</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Amount</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 554 210" width="554" height="210" role="img" aria-label="Amount"><rect x="26" y="59" width="62" height="121" rx="5" fill="#14365F"/><text x="57" y="51" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">34,000,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Imported machine</text><rect x="114" y="164" width="62" height="16" rx="5" fill="#14365F"/><text x="145" y="156" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">4,600,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Civil foundation</text><rect x="202" y="170" width="62" height="10" rx="5" fill="#14365F"/><text x="233" y="162" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,800,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Erection and com</text><rect x="290" y="177" width="62" height="3" rx="5" fill="#14365F"/><text x="321" y="169" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">900,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Trial run materi</text><rect x="378" y="177" width="62" height="3" rx="5" fill="#14365F"/><text x="409" y="169" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">400,000</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Staff training o</text><rect x="466" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="497" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">42,300,000</text><text x="497" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Carried as CWIP </text><line x1="0" y1="181" x2="554" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Halol plant orders a line in October. It is erected by March but commercial production starts in June.</p><p>The balance sits as work in progress at year end. Readiness for use has not been reached, and nothing is depreciated until it is. Four of the five costs are capitalised because they were necessary to bring the machine to working condition, including trial material whose output was scrapped. Training is not: it makes people capable, not the machine. The date that matters is readiness rather than the date production is commercially convenient, so a line finished in March and idle until June starts depreciating in March if it could have run.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Capital Work-in-Progress (CWIP)</h2><p>Assets sit in this account long after they should have left it.</p><ul class="gloss-bullets"><li>Holding equipment in the account after it has gone into service, so no charge has ever been raised against it and putting that right disturbs several closed periods.</li><li>Moving the balance out when the final bill lands or a contractor signs off, rather than when the asset could first be used, which is the test that governs.</li><li>Letting the figure climb with no matching progress anywhere on the ground, commonly money paid on account, expenditure posted against the wrong scheme, or work abandoned without anybody formally ending it.</li><li>Booking indirect and administrative costs into the account that do not belong in the asset's cost at all.</li><li>Carrying a project that has been abandoned, when the accumulated cost should have been written off at the point the decision was taken.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Once the asset is in use, the period it is written off over becomes the question, so <a href="/glossary/stock-audit/useful-life">useful life</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Capital Work-in-Progress (CWIP)?</h3><p>Terminology takes you only as far as the question. Where assets under construction have to be traced to what is physically on site, what follows is attendance, testing and a reconciliation, described under <a href="/fixed-asset-verification">physical verification of fixed assets</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/fixed-asset-verification">physical verification of fixed assets<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/useful-life">useful life<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Capital Work-in-Progress (CWIP) FAQs</h2><p class="faq-expanded__lead">Common questions about Capital Work-in-Progress (CWIP) in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Capital Work-in-Progress (CWIP)</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">When does CWIP become a fixed asset?</h3><div class="faq-expanded__a" id="faq-a1"><p>When the asset is ready for its intended use, at which point it is capitalised and depreciation begins. Assets left in CWIP after they are in use understate depreciation and overstate the CWIP balance.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is CWIP verified physically?</h3><div class="faq-expanded__a" id="faq-a2"><p>By inspecting the stage of construction or installation and comparing it with the amount capitalised. Overstatement is common because costs are booked as incurred while physical progress lags behind them.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why is long-outstanding CWIP a concern?</h3><div class="faq-expanded__a" id="faq-a3"><p>Because it may represent a stalled or abandoned project carried at full cost. Ageing the CWIP balance identifies items that have not moved for years and may need impairment rather than continued capitalisation.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
