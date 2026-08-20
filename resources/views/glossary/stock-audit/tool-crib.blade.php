@extends('layouts.service-app')

@section('meta')
<title>Tool Crib: The Controlled Issue Point for Plant Tooling</title>
<meta name="description" content="A tool crib is the secured store from which tooling is issued and returned against a record. It is the control that stops tooling quietly disappearing.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/tool-crib">

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
            "name": "Tool Crib",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/tool-crib"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/tool-crib/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/tool-crib/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What records should a tool crib maintain?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Issue and return against a job or cost centre, with the item, quantity, date and person recorded. Without the job reference, consumption cannot be attributed and abnormal usage cannot be identified."
            }
        },
        {
            "@type": "Question",
            "name": "How is tool crib stock counted?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By sampling weighted toward high-consumption and high-value items rather than counting every item held. The control objective is detecting abnormal consumption patterns, not valuing each low-value item precisely, so effort follows risk rather than line count."
            }
        },
        {
            "@type": "Question",
            "name": "What indicates a tool crib control failure?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Consumption that moves independently of output, frequent stock-outs of common items despite recorded stock on hand, or issues recorded without a job reference. Any one of these means attribution has broken down and consumption can no longer be questioned."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Tool Crib</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Tool Crib</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Tool Crib: Definition</div><div class="definition-box"><p>A tool crib is a controlled store within a workshop holding tools, cutting inserts, gauges and similar items, issued to operators against a record and in many cases expected back. It exists because these items are individually small, portable and easily lost, so control is applied at the point of issue rather than through periodic counting alone.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Tool Crib?</h2><p>Certain items are too portable and too easily lost to be controlled by counting them periodically. Cutting inserts, gauges, hand tools and measuring equipment disappear one at a time, without any single loss being worth investigating, and a stocktake performed months later can only report an aggregate difference nobody can attribute.</p><p>Controlling at the point of issue solves what counting cannot. Items are handed out against a record naming who took them and for which job, and in many cases against an expectation of return, so accountability attaches at the moment the item leaves rather than being reconstructed afterwards. The practical design question is where to draw the threshold, since requiring a record for every washer paralyses the shop floor and is abandoned within months. Most workable arrangements control the higher-value and returnable items individually and manage the remainder through consumption ratios, which measure the aggregate without recording any single issue.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Tool Crib and Why</h2><p>The arrangement belongs to operations where portable, valuable tooling is issued to people rather than fixed to machines.</p><ul class="gloss-bullets"><li>Engineering and machine tool manufacturing, holding cutting tools, inserts and gauges in constant circulation.</li><li>Automotive component plants, on the same pattern and at higher volume.</li><li>Heavy fabrication and shipbuilding, where hand tools and measuring equipment are issued across large sites.</li><li>Maintenance functions in any process industry, where technicians draw tooling for jobs and return it afterwards.</li><li>Construction, applying the same control to power tools and site equipment.</li><li>It is not used in assembly operations where every tool is fixed to a station, nor in warehousing and retail, where the equipment in circulation is small in value and narrow in range.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Tool Crib Works in Practice</h2><ol><li>A controlled store is established within the workshop with a named keeper, holding tooling, gauges, inserts and measuring equipment.</li></ol><ol><li>A value threshold is set. Items above it are issued individually against a record naming the person and the job; items below it are drawn freely and controlled in aggregate.</li></ol><ol><li>Returnable items are issued with a stated expectation of return, so the record itself prompts somebody to ask where they went.</li></ol><ol><li>Usage under the threshold is watched as a ratio to production, inserts per thousand components for instance, which captures the total drawn without any individual withdrawal being logged.</li></ol><ol><li>Periodic counting covers the higher-value and returnable population properly and samples the remainder. Differences on controlled items are traced through the issue records; movement in the consumption ratio is investigated against production conditions before anything is concluded.</li></ol></section><section id="example" class="gl-sec"><h2>Tool Crib: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Category</th><th>Items</th><th>Value</th><th>Issued against</th><th>Verified</th></tr></thead><tbody><tr><td>Cutting tools, consumable</td><td>4,200</td><td>Rs 18,00,000</td><td>Job card, not returned</td><td>By count</td></tr><tr><td>Gauges and instruments</td><td>310</td><td>Rs 26,00,000</td><td>Named person, returnable</td><td>By count and calibration</td></tr><tr><td>Fixtures and jigs</td><td>96</td><td>Rs 41,00,000</td><td>Machine, semi-permanent</td><td>By sighting</td></tr><tr><td>Total</td><td>4,606</td><td>Rs 85,00,000</td><td>-</td><td>-</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Value</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Value"><rect x="26" y="148" width="62" height="32" rx="5" fill="#14365F"/><text x="57" y="140" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">1,800,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Cutting tools, c</text><rect x="114" y="134" width="62" height="46" rx="5" fill="#14365F"/><text x="145" y="126" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,600,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Gauges and instr</text><rect x="202" y="108" width="62" height="72" rx="5" fill="#14365F"/><text x="233" y="100" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">4,100,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Fixtures and jig</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#E8712C"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">8,500,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Total</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Rajkot machine shop holds tooling in a controlled store rather than on the floor.</p><p>Three categories behave like three different asset classes and cannot be verified the same way. Consumable cutting tools are stock: they are issued, used up and never come back. Gauges are returnable and are also useless if out of calibration, so a count that finds all 310 present proves less than half of what is needed. Fixtures are closer to fixed assets, sitting with a machine for years. A crib treated as one homogeneous store typically counts everything and calibrates nothing, which leaves Rs 26 lakh of instruments present, accounted for and not fit to measure with.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Tool Crib</h2><p>The control fails at the threshold rather than at the counter.</p><ul class="gloss-bullets"><li>Demanding paperwork for every minor item, which stalls production, gets quietly dropped inside a quarter, and leaves nothing behind it.</li><li>Setting the threshold once and never revisiting it, so inflation gradually moves whole categories below the line.</li><li>Holding the crib open without a named keeper, which removes the accountability the arrangement exists to create.</li><li>Controlling nothing because individual values are small, when the annual aggregate reaches a figure that would never be tolerated elsewhere.</li><li>Issuing returnable items without recording an expectation of return, so nothing prompts anybody to ask where they went.</li><li>Counting periodically and adjusting the difference, when issues that were never recorded cannot be traced and the adjustment explains nothing.</li><li>Omitting consumption ratios, which are the only practical measure for the items below whatever threshold is set.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The accounting record behind the store carries the values, so <a href="/glossary/stock-audit/stores-ledger">stores ledger</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Tool Crib?</h3><p>Reading about it settles the meaning and nothing else. The moment stores and tooling have to be brought under a measurable control, the position has to be established independently, which is the substance of <a href="/stock-audit-for-engineering-machine-tools">auditing engineering stores</a>. A location list and the current records are enough to scope it.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-engineering-machine-tools">auditing engineering stores<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/stores-ledger">stores ledger<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Tool Crib FAQs</h2><p class="faq-expanded__lead">Common questions about Tool Crib in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Tool Crib</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What records should a tool crib maintain?</h3><div class="faq-expanded__a" id="faq-a1"><p>Issue and return against a job or cost centre, with the item, quantity, date and person recorded. Without the job reference, consumption cannot be attributed and abnormal usage cannot be identified.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">How is tool crib stock counted?</h3><div class="faq-expanded__a" id="faq-a2"><p>By sampling weighted toward high-consumption and high-value items rather than counting every item held. The control objective is detecting abnormal consumption patterns, not valuing each low-value item precisely, so effort follows risk rather than line count.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What indicates a tool crib control failure?</h3><div class="faq-expanded__a" id="faq-a3"><p>Consumption that moves independently of output, frequent stock-outs of common items despite recorded stock on hand, or issues recorded without a job reference. Any one of these means attribution has broken down and consumption can no longer be questioned.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
