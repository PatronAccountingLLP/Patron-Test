@extends('layouts.service-app')

@section('meta')
<title>Planogram Compliance: Shelf Layout Against the Plan</title>
<meta name="description" content="Planogram compliance measures how closely a store's shelves match the layout the brand specified. It is checked alongside stock during a retail audit.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/planogram-compliance">

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
            "name": "Planogram Compliance",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/planogram-compliance"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/planogram-compliance/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/planogram-compliance/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How is planogram compliance measured?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "By comparing the actual shelf against the specified layout, usually by photograph and a scored checklist covering facings, position and adjacency. Partial compliance is more common than outright failure, so scoring needs to reflect degree."
            }
        },
        {
            "@type": "Question",
            "name": "Why is planogram compliance audited with stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Because the two interact. Missing facings often reveal stock the system shows as available but which is not on the shelf, so a compliance failure and a stock error frequently share a cause."
            }
        },
        {
            "@type": "Question",
            "name": "Who is accountable for planogram failures?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Usually the store, but not always. Persistent failures across many outlets often trace to the plan itself being impractical for the fixture, which is a head office issue rather than a store one."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; Sector Vocabulary</div><h1 class="gl-h1">Planogram Compliance</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>4 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#sector" class="gl-pill">By sector</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Planogram Compliance: Definition</div><div class="definition-box"><p>Planogram compliance is the degree to which the merchandise actually on a shelf matches the layout the retailer or brand specified, covering which products are present, in what position, and with how many facings. It is assessed by comparing the shelf as found against the planogram document. Non-compliance affects both sales and any trade agreement that was paid for on the basis of agreed space.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Planogram Compliance?</h2><p>Shelf space is bought and sold. Brands pay retailers for position, for facings and for presence at eye level, and those arrangements are worth something only if the shelf actually looks the way the agreement says. Measuring compliance is how both parties establish whether what was paid for was delivered, which is why the finding has a commercial consequence attached rather than only an operational one.</p><p>Assessment sets what is physically on display beside the layout document, and it covers more than presence. Whether the product is there at all, whether it occupies the position specified, how many facings it holds, and whether adjacent products have encroached are separate questions with different causes. Photographic evidence matters more here than almost anywhere else, because a shelf changes through the trading day and a finding without an image is a claim about a moment nobody else saw. Non-compliance also has an operational reading: a store that cannot hold its layout is usually a store with a replenishment or discipline problem.</p></section><section id="sector" class="gl-sec"><h2>Which Sectors Use Planogram Compliance and Why</h2><p>The term belongs to organised retail and to the brands supplying it.</p><ul class="gloss-bullets"><li>Supermarkets and grocery chains, where shelf position is sold to suppliers and the trade agreement is only worth what the execution delivers.</li><li>Pharmacy and convenience formats, where limited space makes position commercially decisive and regulated categories carry display obligations of their own.</li><li>Consumer goods brands, which pay for space across networks they do not control and need evidence that what was bought was delivered.</li><li>Apparel and footwear retail, where the visual layout drives the buying decision more directly than in most categories.</li><li>It does not travel to warehousing, manufacturing or lending, because those sectors have no shelf whose arrangement anybody has purchased.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Planogram Compliance Works in Practice</h2><ol><li>A layout is issued for the category, specifying which products appear, in what position, at what height and with how many facings.</li></ol><ol><li>Stores execute it on a stated date, and any trade agreement paying for space is written against that specification.</li></ol><ol><li>An auditor attends and photographs the fixture as found, capturing the whole bay rather than isolated products so position and adjacency are visible.</li></ol><ol><li>The image is compared against the layout point by point: presence, position, facing count and any encroachment by neighbouring lines. Each is scored separately, because they have different causes.</li></ol><ol><li>Failures are classified before they are acted on. Merchandise the store does not physically have cannot be put on a shelf and is a supply matter; merchandise present but misplaced is the store's own. Only a pattern across visits supports a commercial claim that space was not delivered.</li></ol></section><section id="example" class="gl-sec"><h2>Planogram Compliance: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Shelf section</th><th>Facings required</th><th>Facings found</th><th>Compliant</th></tr></thead><tbody><tr><td>Eye level, premium range</td><td>12</td><td>7</td><td>No</td></tr><tr><td>Eye level, own label</td><td>8</td><td>13</td><td>No</td></tr><tr><td>Lower shelf, bulk packs</td><td>16</td><td>16</td><td>Yes</td></tr><tr><td>End cap, promoted line</td><td>24</td><td>0</td><td>No, promotion not set up</td></tr><tr><td>Compliance across the aisle</td><td>60 facings</td><td>36 correct</td><td>60%</td></tr></tbody></table></div><p>An audit of one aisle in a Pune supermarket compares the planned layout against what is on the shelf on a Tuesday morning.</p><p>The first two rows are a single event, not two. Five premium facings were quietly replaced by own label, which raises the store's margin and breaches an agreement the brand has paid for. The end cap is the costlier line: a promotion was advertised and the display never went up, so the promotional stock is sitting in the back room while demand generated by the advertising finds nothing. Compliance measured in facings rather than in sections is the more honest figure, since one badly wrong section can otherwise be averaged away by several small correct ones.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Planogram Compliance</h2><p>Payment passes between brand and retailer for position on a shelf, which raises the bar on what will be accepted as proof.</p><ul class="gloss-bullets"><li>Recording a finding without a photograph, since displays shift hour by hour and an assertion about an instant that went unwitnessed is simply disputed.</li><li>Checking presence alone and ignoring position and facings, which are usually what was actually paid for.</li><li>Assessing against a superseded layout, so the outlet is marked down for following the instruction it was most recently given.</li><li>Treating every failure as a store discipline problem, when a line that is out of stock cannot be displayed and the cause sits in replenishment.</li><li>Raising a commercial claim on a single visit, when a pattern across visits is what supports the argument that space was not delivered.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>How fast the merchandise clears is the other half of a shelf review, so <a href="/glossary/stock-audit/sell-through-rate">sell-through rate</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Planogram Compliance?</h3><p>Terminology takes you only as far as the question. Where shelf execution has to be checked outlet by outlet, what follows is attendance, testing and a reconciliation, described under <a href="/stock-audit-for-retail">retail stock audit</a>. Share the site list and the records, and the effort can be sized from them.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit-for-retail">retail stock audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/sell-through-rate">sell-through rate<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Planogram Compliance FAQs</h2><p class="faq-expanded__lead">Common questions about Planogram Compliance in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.bigin-form', [
    'variant'  => 'compact',
    'service'  => 'Glossary - Planogram Compliance',
    'title'    => 'Talk to the stock audit team',
    'subtitle' => 'Tell us where the stock sits and we will scope the count.',
    'note'     => 'This enquiry came from the glossary page "Planogram Compliance", which explains a term rather than selling a service - please ask the client which service they are looking for.',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How is planogram compliance measured?</h3><div class="faq-expanded__a" id="faq-a1"><p>By comparing the actual shelf against the specified layout, usually by photograph and a scored checklist covering facings, position and adjacency. Partial compliance is more common than outright failure, so scoring needs to reflect degree.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Why is planogram compliance audited with stock?</h3><div class="faq-expanded__a" id="faq-a2"><p>Because the two interact. Missing facings often reveal stock the system shows as available but which is not on the shelf, so a compliance failure and a stock error frequently share a cause.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Who is accountable for planogram failures?</h3><div class="faq-expanded__a" id="faq-a3"><p>Usually the store, but not always. Persistent failures across many outlets often trace to the plan itself being impractical for the fixture, which is a head office issue rather than a store one.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
