@extends('layouts.service-app')

@section('meta')
<title>Tagging Coverage Rate: The KPI That Proves Tagging</title>
<meta name="description" content="Tagging coverage rate is the share of register value physically tagged. It is the measure that shows whether a tagging exercise actually finished the job.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/tagging-coverage-rate">

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
            "name": "Tagging Coverage Rate",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/tagging-coverage-rate"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/tagging-coverage-rate/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/tagging-coverage-rate/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is tagging coverage measured?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "As the proportion of fixed asset register value carrying a verified tag, not the proportion of items. Measuring by item count flatters a programme that has tagged thousands of low-value assets."
            }
        },
        {
            "@type": "Question",
            "name": "What coverage is good enough?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "High coverage by value matters far more than universal coverage by count. Most of the assurance comes from tagging the assets that carry the value, with low-value items grouped or sampled."
            }
        },
        {
            "@type": "Question",
            "name": "Why does coverage fall over time?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because new assets are acquired without being tagged, and existing tags degrade, fall off or are removed. Unless tagging is built into the acquisition and capitalisation process, coverage declines steadily every year after the initial project completes."
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


<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Tagging Coverage Rate</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Fixed Assets and Tagging</div><h1 class="gl-h1">Tagging Coverage Rate</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#assets" class="gl-pill">Applied to assets</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Tagging Coverage Rate: Definition</div><div class="definition-box"><p>Tagging coverage rate is the proportion of an asset population that carries a readable identifier matching a line in the register. It is measured against both the register and the physical estate, because coverage computed only against register lines ignores assets standing on the floor that were never recorded. A rate below full coverage identifies exactly how much of the estate cannot yet be verified by identifier.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Tagging Coverage Rate?</h2><p>The figure answers a question management usually cannot answer any other way: how much of the estate is currently in a state where it can be verified at all. An asset without a readable identifier tied to a register line cannot be matched in either direction, so it sits outside every subsequent count regardless of how thoroughly that count is performed.</p><p>How the rate is computed determines whether it means anything. Measured only against register lines, it counts the assets the business already knew about and says nothing about equipment standing on the floor that was never recorded, which is precisely the population a tagging programme exists to find. Computed across the recorded lines and the equipment actually standing on site together, it describes the real position. Reporting it as a single estate-wide number conceals the sites where the work failed, so it is broken down by class and by location, and the exception list of assets that could not be tagged is reported alongside with the reason recorded against each.</p></section><section id="assets" class="gl-sec"><h2>How Tagging Coverage Rate Applies to a Fixed Asset Register</h2><p>The rate is a measure of the register's readiness rather than of the tagging exercise.</p><ul class="gloss-bullets"><li>It is computed from two populations the register itself supplies: the lines it holds, and the assets found that it does not.</li><li>A line whose asset carries no readable label is untestable, so it counts against the rate even though the accounting entry is perfectly correct.</li><li>An asset found with no line pulls the rate down as well, which is what stops the measure being flattered by ignoring whatever the register never knew about.</li><li>Because it is reported by class and by site, it identifies where verification can actually be relied upon and where it cannot.</li><li>A register at full coverage can be verified line by line; below that, some proportion of it can only ever be sampled by description.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Tagging Coverage Rate Works in Practice</h2><ol><li>Two populations are established: every line the register holds, and every item physically found during the walk, including anything the register never carried.</li></ol><ol><li>Each item is tested for a label that is present, legible and matched to a register line. All three conditions have to hold; a worn or painted-over label counts as absent.</li></ol><ol><li>The matched count is divided by the combined population, so equipment discovered on the floor with no accounting entry pulls the figure down rather than being quietly excluded.</li></ol><ol><li>The result is broken out by asset class and by site, because a single number for the whole estate hides exactly the locations where the work fell short.</li></ol><ol><li>Items that could not be labelled are listed separately with a reason recorded against each, whether the surface would not hold adhesive, the asset was in continuous operation, or ownership was in doubt on the day.</li></ol></section><section id="example" class="gl-sec"><h2>Tagging Coverage Rate: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Category</th><th>Assets in register</th><th>Tagged and found</th><th>Coverage</th></tr></thead><tbody><tr><td>Plant and machinery</td><td>1,240</td><td>1,213</td><td>97.8%</td></tr><tr><td>Furniture and fittings</td><td>3,600</td><td>2,304</td><td>64.0%</td></tr><tr><td>IT equipment</td><td>1,850</td><td>1,702</td><td>92.0%</td></tr><tr><td>Vehicles</td><td>46</td><td>46</td><td>100.0%</td></tr><tr><td>Overall</td><td>6,736</td><td>5,265</td><td>78.2%</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Coverage</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Coverage"><rect x="26" y="33" width="62" height="147" rx="5" fill="#14365F"/><text x="57" y="25" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">97.8</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Plant and machin</text><rect x="114" y="84" width="62" height="96" rx="5" fill="#14365F"/><text x="145" y="76" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">64</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Furniture and fi</text><rect x="202" y="42" width="62" height="138" rx="5" fill="#14365F"/><text x="233" y="34" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">92</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">IT equipment</text><rect x="290" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="321" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">100</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Vehicles</text><rect x="378" y="63" width="62" height="117" rx="5" fill="#E8712C"/><text x="409" y="55" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">78.2</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Overall</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Noida verification reports coverage by category rather than as a single figure.</p><p>The overall 78.2% is the least useful number on the table. It hides the fact that machinery, vehicles and IT are all in reasonable shape while furniture is barely two-thirds covered, which points at one specific cause: adhesive tags on fabric and laminate surfaces fall off, and nobody notices because a chair is rarely looked for. Reporting a single blended figure would have prompted a general tagging drive across 6,736 assets. Reporting by category prompts a targeted re-tag of furniture with a different fixing method, which is a fraction of the work and fixes the actual problem.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Tagging Coverage Rate</h2><p>The figure is easy to compute in a way that flatters the programme.</p><ul class="gloss-bullets"><li>Measuring only against register lines, which tallies only what the books already knew of and is silent on machinery standing in the plant that nobody ever entered.</li><li>Publishing a single figure for the whole estate, which buries the locations where tagging went wrong and defeats the point of measuring it at all.</li><li>Counting a tag as coverage when it cannot actually be read, so labels painted over or worn smooth are treated as though they still identify something.</li><li>Dropping the exception schedule, so anything the programme failed to label vanishes from sight rather than landing as a decision for somebody.</li><li>Treating a high rate as assurance about the register, when coverage says a label exists and nothing at all about whether the accounting behind the line is right.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Where line of sight is impossible, the tag type changes, so <a href="/glossary/stock-audit/rfid-tag">rfid tag</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Tagging Coverage Rate?</h3><p>This page explains the idea. The practical question begins when coverage has to be established across a whole estate, and settling it means fieldwork of the kind <a href="/asset-tagging">how we tag and track assets</a> sets out. Scope is built from the sites involved and the state of the underlying records.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/asset-tagging">how we tag and track assets<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/rfid-tag">rfid tag<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Tagging Coverage Rate FAQs</h2><p class="faq-expanded__lead">Common questions about Tagging Coverage Rate in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Tagging Coverage Rate</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is tagging coverage measured?</h3><div class="faq-expanded__a" id="faq-a1"><p>As the proportion of fixed asset register value carrying a verified tag, not the proportion of items. Measuring by item count flatters a programme that has tagged thousands of low-value assets.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What coverage is good enough?</h3><div class="faq-expanded__a" id="faq-a2"><p>High coverage by value matters far more than universal coverage by count. Most of the assurance comes from tagging the assets that carry the value, with low-value items grouped or sampled.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Why does coverage fall over time?</h3><div class="faq-expanded__a" id="faq-a3"><p>Because new assets are acquired without being tagged, and existing tags degrade, fall off or are removed. Unless tagging is built into the acquisition and capitalisation process, coverage declines steadily every year after the initial project completes.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Last reviewed on 20 August 2026 by CA Sundram Gupta (FCA). Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
