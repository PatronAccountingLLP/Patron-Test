@extends('layouts.service-app')

@section('meta')
<title>Impairment Testing: Carrying Value Against Recovery</title>
<meta name="description" content="Impairment testing compares an asset's carrying value with the amount recoverable through use or sale. Where recovery is lower, the asset is written down.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/impairment-testing">

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
            "name": "Impairment Testing",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/impairment-testing"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/impairment-testing/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/impairment-testing/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How does physical verification support impairment assessment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By identifying assets that are idle, damaged or no longer in use. An asset that cannot be located or is found decommissioned is evidence of impairment regardless of what the depreciation schedule says."
            }
        },
        {
            "@type": "Question",
            "name": "When is an asset tested for impairment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "When there is an indication that its carrying value may not be recoverable, such as physical damage, obsolescence, idleness or a fall in expected output. Verification often provides the first such indication."
            }
        },
        {
            "@type": "Question",
            "name": "Is impairment the same as depreciation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Depreciation allocates cost over the useful life on a systematic basis. Impairment is a separate write-down when the recoverable amount falls below carrying value, and it can arise at any point in the life."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Fixed Assets and Tagging</div><h1 class="gl-h1">Impairment Testing</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#assets" class="gl-pill">Applied to assets</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Impairment Testing: Definition</div><div class="definition-box"><p>Impairment testing compares an asset's carrying amount with the amount recoverable from it, being the higher of what it would fetch if sold and what it will generate if kept in use. Where the carrying amount is higher, the asset is written down to the recoverable figure. The test is performed when an indication of impairment exists rather than as a routine annual exercise for most assets.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Impairment Testing?</h2><p>Depreciation spreads cost over an expected life on the assumption that the asset will go on earning. Impairment addresses what happens when that assumption fails: the market for the output disappears, the plant is damaged, a process is superseded, or the asset is simply idle. The carrying amount is then compared with what can actually be recovered from it, and any excess is written off.</p><p>Recoverable amount is the higher of two figures, what a sale would fetch after the costs of selling, set against the value of continuing to run it, because any rational owner would choose whichever course pays better. Most assets are examined only where something has signalled a problem, not on an annual cycle, which is why spotting those signals matters so much. A physical verification is where several of them surface: equipment found idle, damaged, or superseded is carrying a value that assumes none of those things, and nobody at a desk would have known.</p></section><section id="compliance" class="gl-sec"><h2>Impairment Testing Under Indian Law</h2><p>Position: an asset is impaired where its carrying amount exceeds its recoverable amount, with the recoverable figure being whichever is greater, a net sale price or the value of keeping it in service.</p><ul class="gloss-bullets"><li>For most assets the examination is triggered by a signal that something has changed, not by the calendar, although goodwill and indefinite-lived intangibles are reviewed annually whatever the signals say. A reversal is permitted where the recoverable amount subsequently rises, except for goodwill.</li><li>Source: Accounting Standard 28 and Ind AS 36, Impairment of Assets.</li><li>Note: a reversal cannot lift the carrying amount above what it would have been, net of depreciation, had no impairment ever been recognised, which is why the original workings have to be retained.</li></ul></section><section id="assets" class="gl-sec"><h2>How Impairment Testing Applies to a Fixed Asset Register</h2><p>The register is both the source of the trigger and the place the result is recorded.</p><ul class="gloss-bullets"><li>Status and condition fields are what surface the indications: assets marked idle, damaged or awaiting disposal are the population a test starts from.</li><li>The last verification date matters as much, since an asset nobody has seen for several years cannot generate an indication of anything.</li><li>Where a charge is taken, it is posted against the individual line rather than to a general provision, so the reduced carrying amount belongs to a specific asset.</li><li>The remaining life is then applied to that reduced amount, which changes the charge going forward and has to be reflected in the line's own fields.</li><li>Any later reversal is capped by reference to what the line would have carried had the charge never been made, which requires the original workings to have been kept.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Impairment Testing Works in Practice</h2><ol><li>At each reporting date the entity looks for signals that an asset may have lost value: idle plant, physical damage, a market in decline, a process superseded, or a unit consistently missing its output plan.</li></ol><ol><li>Where a signal exists, the asset's carrying amount is taken from the register as the figure to be tested against.</li></ol><ol><li>Two recoverable figures are then estimated. One is what a sale would realise after selling costs. The other is what continuing to operate the asset will produce, discounted to today.</li></ol><ol><li>The higher of those two is compared with the carrying amount. Where the carrying amount is greater, the difference is written off immediately as an impairment charge.</li></ol><ol><li>The reduced amount becomes the new base for depreciation over the remaining life. At later dates the position is retested, and where the cause has genuinely reversed the charge can be reversed, capped so the asset never exceeds what it would have been worth had no impairment occurred.</li></ol></section><section id="example" class="gl-sec"><h2>Impairment Testing: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Step</th><th>Amount</th></tr></thead><tbody><tr><td>Carrying value of the unit</td><td>Rs 6,80,00,000</td></tr><tr><td>Value in use, discounted cash flows</td><td>Rs 5,10,00,000</td></tr><tr><td>Fair value less costs to sell</td><td>Rs 5,60,00,000</td></tr><tr><td>Recoverable amount, higher of the two</td><td>Rs 5,60,00,000</td></tr><tr><td>Impairment loss</td><td>Rs 1,20,00,000</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Amount</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Amount"><rect x="26" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="57" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">68,000,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Carrying value o</text><rect x="114" y="68" width="62" height="112" rx="5" fill="#14365F"/><text x="145" y="60" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">51,000,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Value in use, di</text><rect x="202" y="56" width="62" height="124" rx="5" fill="#14365F"/><text x="233" y="48" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">56,000,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Fair value less </text><rect x="290" y="56" width="62" height="124" rx="5" fill="#14365F"/><text x="321" y="48" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">56,000,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Recoverable amou</text><rect x="378" y="154" width="62" height="26" rx="5" fill="#E8712C"/><text x="409" y="146" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">12,000,000</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Impairment loss</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Ludhiana cycle-parts line loses its principal customer and is tested as a single cash generating unit.</p><p>The order of the middle rows is the part that gets reversed. The recoverable figure takes whichever is greater, value in use or fair value less costs to sell, so the comparison is against Rs 5.60 crore. Using the discounted cash flow figure alone would have produced a Rs 1.70 crore loss, Rs 50 lakh too much, because the assets are worth more sold than run. The test is applied to the unit rather than to individual machines, since no single press generates cash on its own. An indicator such as losing a major customer triggers the test; the annual calendar does not.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Impairment Testing</h2><p>The test is skipped far more often than it is performed badly.</p><ul class="gloss-bullets"><li>Waiting for an annual review when the trigger is an indication that something has changed, so a plant idled in June is examined the following March at the earliest.</li><li>Comparing the carrying amount against sale proceeds alone, ignoring that the asset may be worth more kept in use, which writes down equipment that is still earning.</li><li>Treating a physical verification as unrelated to the question, when idle, damaged and superseded equipment found on the floor are exactly the indications that should start it.</li><li>Applying it to an asset that has already been fully depreciated, where there is nothing left to impair and the effort achieves nothing.</li><li>Recording the conclusion without the workings, so a later reviewer cannot tell whether the recoverable figure was estimated or simply asserted.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Assets not yet in use sit outside the charge entirely until they are, so <a href="/glossary/stock-audit/capital-work-in-progress">capital work-in-progress (cwip)</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">A-Z of stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Impairment Testing?</h3><p>Terminology takes you only as far as the question. Where idle or damaged assets are carrying values nobody has questioned, what follows is attendance, testing and a reconciliation, described under <a href="/fixed-asset-verification">asset verification</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/fixed-asset-verification">asset verification<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/capital-work-in-progress">capital work-in-progress (cwip)<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Impairment Testing FAQs</h2><p class="faq-expanded__lead">Common questions about Impairment Testing in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Impairment Testing</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does physical verification support impairment assessment?</h3><div class="faq-expanded__a" id="faq-a1"><p>By identifying assets that are idle, damaged or no longer in use. An asset that cannot be located or is found decommissioned is evidence of impairment regardless of what the depreciation schedule says.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">When is an asset tested for impairment?</h3><div class="faq-expanded__a" id="faq-a2"><p>When there is an indication that its carrying value may not be recoverable, such as physical damage, obsolescence, idleness or a fall in expected output. Verification often provides the first such indication.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Is impairment the same as depreciation?</h3><div class="faq-expanded__a" id="faq-a3"><p>No. Depreciation allocates cost over the useful life on a systematic basis. Impairment is a separate write-down when the recoverable amount falls below carrying value, and it can arise at any point in the life.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
