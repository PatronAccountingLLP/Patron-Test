@extends('layouts.service-app')

@section('meta')
<title>SLOB Stock: Slow-Moving and Obsolete Inventory Defined</title>
<meta name="description" content="Slow-moving and obsolete stock is inventory that is not turning and may never sell. Identifying it is what triggers a provisioning discussion at audit.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/slob-stock">

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
            "name": "Slow-Moving and Obsolete Stock (SLOB)",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/slob-stock"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/slob-stock/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/slob-stock/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is stock classified as slow-moving or obsolete?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Slow-moving is defined by a movement threshold over a period; obsolete means there is no realistic future use or sale. The distinction matters because slow-moving stock may still sell, while obsolete stock will not."
            }
        },
        {
            "@type": "Question",
            "name": "What provision policy applies to SLOB stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most businesses apply a graduated provision by age band, increasing as the stock gets older. The policy must be applied consistently and reviewed against what old stock actually realises, otherwise it becomes an arbitrary percentage."
            }
        },
        {
            "@type": "Question",
            "name": "Can slow-moving stock be sold at full value later?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Sometimes, particularly spares supporting equipment still in service. That is why a provision is not a write-off: the stock remains available and any later sale reverses part of the provision rather than creating a gain from nothing."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Valuation and Provisioning</div><h1 class="gl-h1">Slow-Moving and Obsolete Stock (SLOB)</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#valuation" class="gl-pill">Valuation</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Slow-Moving and Obsolete Stock (SLOB): Definition</div><div class="definition-box"><p>SLOB is a reporting category grouping inventory that is either turning over unusually slowly or has ceased to be saleable at anything near its cost. The two conditions are distinct: slow-moving stock still sells, while obsolete stock has been superseded, has expired or no longer has a market. Grouping them signals that the carrying value of the whole category needs examination.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Slow-Moving and Obsolete Stock (SLOB)?</h2><p>The acronym groups two conditions that are worth keeping apart in practice, because they call for different responses. Slow-moving stock is still selling and the question is whether the holding is proportionate to the rate at which it moves. Obsolete stock commands no market at any realistic price, having been superseded or expired, or because the product, customer or process it belonged to has gone. One is a working capital problem and the other is a valuation problem.</p><p>What the grouping is for is triggering examination. A SLOB report identifies the population whose carrying value needs to be tested, and that testing then proceeds item by item against what the goods will actually realise. Reporting the category as a single provision percentage applied to a total is where the discipline usually breaks down, because it produces a number without anybody having looked at what the stock is. Lenders pay particular attention to this line, since stock in either condition is security that will not realise what the statement claims for it.</p></section><section id="valuation" class="gl-sec"><h2>How Slow-Moving and Obsolete Stock (SLOB) Is Measured and Valued</h2><p>Measurement runs in two stages: identify the population by movement, then value it by realisation.</p><ul class="gloss-bullets"><li>Take an item held at 250 per unit with 800 units on hand. Annual consumption has been 100 units, so the holding represents eight years of cover against a policy threshold of two.</li><li>That identifies it. It does not value it, because coverage says nothing about what the goods will fetch.</li><li>Valuation follows item by item. If the part is still fitted to equipment in service, the whole 800 may be worth its cost. If the equipment has been withdrawn, the realistic outlet is scrap at perhaps 20 per unit, and the write-down is 230 across 800 units.</li><li>The measure identifies where to look; the realisation evidence decides the figure. Applying a single percentage to the whole category produces a number nobody has tested against either question.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Slow-Moving and Obsolete Stock (SLOB) Works in Practice</h2><ol><li>Consumption or sales data is run against the holding for each item, producing a coverage figure that expresses the quantity held as a period of expected usage.</li></ol><ol><li>Items whose coverage exceeds a defined threshold, and items with no movement within a defined window, are flagged into the category.</li></ol><ol><li>The flagged population is examined physically rather than analytically, because the data identifies candidates and the floor establishes what they actually are. Damage, supersession and expiry are visible only there.</li></ol><ol><li>Each item is then assessed for realisable value against what its market will pay, and the provision is computed from that assessment rather than from the band it fell into.</li></ol><ol><li>The result feeds two decisions at once: the accounting charge for the period, and an operational question about why the stock was bought in that quantity, which is the part most businesses skip.</li></ol></section><section id="example" class="gl-sec"><h2>Slow-Moving and Obsolete Stock (SLOB): A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Category</th><th>Value</th><th>Last issued</th><th>Classification</th></tr></thead><tbody><tr><td>Current models</td><td>Rs 3,10,00,000</td><td>Within 60 days</td><td>Active</td></tr><tr><td>Superseded but compatible</td><td>Rs 46,00,000</td><td>7 months</td><td>Slow-moving</td></tr><tr><td>Discontinued platform</td><td>Rs 28,00,000</td><td>19 months</td><td>Obsolete</td></tr><tr><td>Engineering samples</td><td>Rs 6,00,000</td><td>31 months</td><td>Obsolete</td></tr><tr><td>Provision carried</td><td>Rs 27,20,000</td><td>-</td><td>-</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Value</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 466 210" width="466" height="210" role="img" aria-label="Value"><rect x="26" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="57" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">31,000,000</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Current models</text><rect x="114" y="158" width="62" height="22" rx="5" fill="#14365F"/><text x="145" y="150" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">4,600,000</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Superseded but c</text><rect x="202" y="166" width="62" height="14" rx="5" fill="#14365F"/><text x="233" y="158" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,800,000</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Discontinued pla</text><rect x="290" y="177" width="62" height="3" rx="5" fill="#14365F"/><text x="321" y="169" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">600,000</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Engineering samp</text><rect x="378" y="167" width="62" height="13" rx="5" fill="#E8712C"/><text x="409" y="159" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">2,720,000</text><text x="409" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Provision carrie</text><line x1="0" y1="181" x2="466" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Manesar component supplier reviews its store against issue history rather than against purchase date.</p><p>The distinction between the middle two rows is the one that carries money. Superseded parts that still fit a platform in the field have a real aftermarket and are provided against lightly. Parts for a platform nobody manufactures or services have no buyer at any price and are provided against in full. Issue history is the better test because purchase date says only when something arrived, while the date it was last consumed says whether anything still uses it. Reviewing on purchase date alone would have classified the engineering samples as merely slow, since a few were bought recently.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Slow-Moving and Obsolete Stock (SLOB)</h2><p>Grouping the categories is useful for reporting and unhelpful for deciding.</p><ul class="gloss-bullets"><li>Applying one provision percentage to the whole grouping, which yields a figure nobody has tested against what the goods in that band actually are.</li><li>Treating slow-moving items as obsolete, when goods that are still selling have a market and a value the ageing does not describe.</li><li>Never running the analysis at all, so the question of whether items still have a market first arises at an audit and arrives as a finding.</li><li>Providing against the balance while continuing to purchase the same lines, which grows the category faster than the provision addresses it.</li><li>Carrying the report but not acting on it, so the same items appear in the same band year after year and the provision becomes a permanent feature rather than a decision.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>Reducing the value while the goods remain is the first response to it, so <a href="/glossary/stock-audit/stock-write-down">stock write-down</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Slow-Moving and Obsolete Stock (SLOB)?</h3><p>A definition describes; it does not verify. Once the obsolete population needs identifying and quantifying, somebody has to attend, count and reconcile, which is the work behind <a href="/stock-audit">stock audit service</a>. The starting point is a list of locations and the records as they currently stand.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">stock audit service<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/stock-write-down">stock write-down<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Slow-Moving and Obsolete Stock (SLOB) FAQs</h2><p class="faq-expanded__lead">Common questions about Slow-Moving and Obsolete Stock (SLOB) in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.faq-enquiry-form', [
    'enquiryTitle'   => 'Talk to the stock audit team',
    'enquirySub'     => 'Tell us where the stock sits and we will scope the count.',
    'enquiryService' => 'Slow-Moving and Obsolete Stock (SLOB)',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is stock classified as slow-moving or obsolete?</h3><div class="faq-expanded__a" id="faq-a1"><p>Slow-moving is defined by a movement threshold over a period; obsolete means there is no realistic future use or sale. The distinction matters because slow-moving stock may still sell, while obsolete stock will not.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">What provision policy applies to SLOB stock?</h3><div class="faq-expanded__a" id="faq-a2"><p>Most businesses apply a graduated provision by age band, increasing as the stock gets older. The policy must be applied consistently and reviewed against what old stock actually realises, otherwise it becomes an arbitrary percentage.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can slow-moving stock be sold at full value later?</h3><div class="faq-expanded__a" id="faq-a3"><p>Sometimes, particularly spares supporting equipment still in service. That is why a provision is not a write-off: the stock remains available and any later sale reverses part of the provision rather than creating a gain from nothing.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
