@extends('layouts.service-app')

@section('meta')
<title>Retest Date: When Material Is Retested, Not Discarded</title>
<meta name="description" content="A retest date is the point at which material must be re-analysed to confirm it still meets specification. It is quite distinct from an expiry date.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/retest-date">

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
            "name": "Retest Date",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/retest-date"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/retest-date/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/retest-date/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What happens at a retest date?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The material is tested again to confirm it still meets specification. If it passes it may continue in use, usually with a new retest date. If it fails it is rejected."
            }
        },
        {
            "@type": "Question",
            "name": "Does a retest date apply to finished product?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It generally applies to raw materials and active ingredients rather than finished dosage forms, which carry expiry dates instead. Treating the two as equivalent misstates both usability and stock value, because retested material may continue in use while expired product may not."
            }
        },
        {
            "@type": "Question",
            "name": "How is retest status verified during a count?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By checking that material past its retest date has been segregated pending testing rather than remaining available for use. Material in use beyond its retest date is a control finding."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Retest Date</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Retest Date: Definition</div><div class="definition-box"><p>A retest date is the date by which a material must be re-examined to confirm it still meets specification and remains fit for use. It differs from an expiry date, which marks the end of usable life outright: material passing a retest may be used for a further defined period and then retested again. Retest dates are applied to materials whose degradation is gradual and testable.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is a Retest Date?</h2><p>Some materials do not have a point at which they simply stop being usable. Their properties change gradually, and whether they still meet specification is a question that can be answered by testing rather than assumed from the calendar. For those, a retest date marks when the question must be asked again rather than when the material must be discarded.</p><p>That is a meaningfully different regime from expiry. A lot that passes may be drawn on for another stated interval before being put through the process once more, so a single lot can be extended several times on evidence, whereas expired material is finished regardless of how it looks or performs. The distinction matters at a count because the two statuses are handled differently: a lot past its retest date is not written off, it is unavailable for use until tested, which is a quarantine position rather than a loss. Carrying it as freely available overstates what can actually be issued.</p></section><section id="compliance" class="gl-sec"><h2>Retest Date Under Indian Law</h2><p>Position: for active ingredients and raw materials known to be stable, good manufacturing practice permits a retest date in place of an outright expiry. The material is re-examined at that date and may continue in use if it still meets specification.</p><ul class="gloss-bullets"><li>Retesting establishes fitness at the point of testing under the manufacturer's own quality system. It does not extend the shelf life of any finished product made from the material, which is governed by that product's own stability data.</li><li>Source: the good manufacturing practice requirements at Schedule M to the Drugs and Cosmetics Rules 1945.</li><li>Note: Schedule M has been substantially revised, with phased application, so the current text should be checked against the version applicable to the site rather than assumed.</li></ul></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Retest Date and Why</h2><p>It attaches to substances that degrade slowly enough for their condition to be proved in a laboratory instead of inferred from the date.</p><ul class="gloss-bullets"><li>Pharmaceutical manufacturing, where active ingredients and many excipients are governed this way rather than by outright expiry.</li><li>Specialty and fine chemicals, supplied against a specification that can be re-established on examination.</li><li>Laboratory reagents and reference standards, where periodic re-qualification is routine.</li><li>Certain agricultural inputs, where potency is measurable and a lot can be re-certified.</li><li>It does not apply to finished pharmaceutical products intended for patients, which carry a fixed expiry, and it has no application in engineering, retail or general warehousing, where materials either function or do not.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Retest Date Works in Practice</h2><ol><li>Material is received with a certificate of analysis and a date by which it must be examined again, derived from stability data for that substance under defined storage conditions.</li></ol><ol><li>The date is recorded against the batch and a system alert is set, since the whole arrangement depends on the question being asked again on time.</li></ol><ol><li>As the date approaches, a sample is drawn and tested against the original specification.</li></ol><ol><li>A pass extends the material for a further defined interval and a new date is set, and the cycle can repeat several times on evidence. A fail moves the batch to a blocked status pending a disposal decision.</li></ol><ol><li>Material whose date has passed without testing is treated as unavailable rather than as expired. It is neither issued nor written off, but held until the test is performed and the position resolved either way.</li></ol></section><section id="example" class="gl-sec"><h2>Retest Date: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Material</th><th>Manufactured</th><th>Re-analysis due</th><th>Status at 30 Sept</th><th>Treatment</th></tr></thead><tbody><tr><td>API batch 2201</td><td>15 Mar</td><td>15 Sept</td><td>Lapsed, untested</td><td>Quarantine, not written off</td></tr><tr><td>API batch 2209</td><td>02 Jun</td><td>02 Dec</td><td>Within period</td><td>Available</td></tr><tr><td>Excipient batch 4417</td><td>20 Jan</td><td>Expiry 20 Jan next year</td><td>Within period</td><td>Available</td></tr><tr><td>Value in quarantine</td><td>-</td><td>-</td><td>Rs 34,00,000</td></tr></tbody></table></div><p>A formulation plant near Hyderabad holds material past its retest date at the reporting date.</p><p>It is not an expiry date, and treating the two alike is the error the table is built around. Material that has passed the due day is not condemned; it is unusable until it has been re-analysed against specification, after which it may be released with a fresh due day set. So Rs 34 lakh sits in quarantine rather than in a write-off, and the value survives if the analysis passes. It also must not sit in available stock, which is where a system driven only by an expiry field will leave it. Excipients typically carry an expiry instead, which is why the third row behaves differently.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Retest Date</h2><p>Confusing it with expiry runs in both directions and both are costly.</p><ul class="gloss-bullets"><li>Discarding material that has passed the date, when a test may extend its usable life for a further defined period.</li><li>Continuing to issue material past the date without testing, which is the more serious error and puts unverified input into production.</li><li>Showing it as unrestricted while a test is still outstanding, which inflates what production can genuinely draw on.</li><li>Extending a lot on the strength of a test performed on a different lot, which supports nothing about the material in hand.</li><li>Allowing it to slip by because no alert exists, when the entire arrangement rests on the question being put again punctually.</li><li>Applying one interval across every material, when the permitted extension differs by substance and by how it has been stored.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The material this most often applies to is the active ingredient itself, so <a href="/glossary/stock-audit/active-pharmaceutical-ingredient">active pharmaceutical ingredient (api)</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit terms</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Retest Date?</h3><p>Understanding the term is the easy half. The harder half arrives when release status matters as much as quantity, and it is answered on site rather than on paper. <a href="/stock-audit-for-pharmaceutical-manufacturing">auditing pharmaceutical stock</a> sets out how that is done and what has to be ready before anybody travels.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-pharmaceutical-manufacturing">auditing pharmaceutical stock<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/active-pharmaceutical-ingredient">active pharmaceutical ingredient (api)<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Retest Date FAQs</h2><p class="faq-expanded__lead">Common questions about Retest Date in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Retest Date',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What happens at a retest date?</h3><div class="faq-expanded__a" id="faq-a1"><p>The material is tested again to confirm it still meets specification. If it passes it may continue in use, usually with a new retest date. If it fails it is rejected.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Does a retest date apply to finished product?</h3><div class="faq-expanded__a" id="faq-a2"><p>It generally applies to raw materials and active ingredients rather than finished dosage forms, which carry expiry dates instead. Treating the two as equivalent misstates both usability and stock value, because retested material may continue in use while expired product may not.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">How is retest status verified during a count?</h3><div class="faq-expanded__a" id="faq-a3"><p>By checking that material past its retest date has been segregated pending testing rather than remaining available for use. Material in use beyond its retest date is a control finding.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
