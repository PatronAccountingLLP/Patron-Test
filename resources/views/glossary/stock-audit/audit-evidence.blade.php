@extends('layouts.service-app')

@section('meta')
<title>Audit Evidence: What an Auditor Will and Will Not Accept</title>
<meta name="description" content="Audit evidence is the material an auditor relies on to reach a conclusion. Its strength depends on source, timing and whether it can be checked independently.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/audit-evidence">

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
            "name": "Audit Evidence",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/audit-evidence"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/audit-evidence/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/audit-evidence/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What counts as sufficient audit evidence for stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Direct observation of the count carries more weight than documents, which in turn carry more weight than management explanation. Evidence is judged on relevance and reliability together, not on volume."
            }
        },
        {
            "@type": "Question",
            "name": "Is a management representation letter evidence?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It is corroborative, not primary. A representation supports other evidence but cannot substitute for it, so an auditor who cannot verify stock physically does not resolve that by obtaining a representation."
            }
        },
        {
            "@type": "Question",
            "name": "What happens when evidence cannot be obtained?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The auditor reports a limitation of scope, describing what could not be verified and why. Reporting a clean opinion on stock the auditor was unable to examine is the failure the limitation exists to prevent."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><nav class="gl-crumb" aria-label="Breadcrumb"><a href="https://www.patronaccounting.com/">Home</a><span class="sep">&rsaquo;</span><a href="/glossary/stock-audit">Glossary</a><span class="sep">&rsaquo;</span><a href="/stock-audit">Stock Audit</a><span class="sep">&rsaquo;</span><span class="cur">Audit Evidence</span></nav><div class="gl-cat">Stock Audit Glossary &middot; Records and Evidence</div><h1 class="gl-h1">Audit Evidence</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#evidence" class="gl-pill">Evidence</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Audit Evidence: Definition</div><div class="definition-box"><p>Audit evidence is the information an auditor uses to reach the conclusions on which an opinion is based. It has to be both sufficient in quantity and appropriate in quality, and quality turns on relevance and reliability. Evidence obtained directly by the auditor, such as an item counted personally, is generally more reliable than evidence produced by the entity being audited about itself.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Audit Evidence?</h2><p>Not all information carries the same weight, and the ranking is what an auditor spends most of their judgement on. What an auditor gathers first-hand outranks anything handed over by the entity under examination, since the latter is a party speaking about itself. Evidence from an independent outside source is stronger than internally generated evidence, and original documents are stronger than copies or summaries prepared for the purpose.</p><p>Sufficiency and appropriateness work together rather than substituting for each other. A large quantity of weak evidence does not become strong through accumulation, and a single piece of strong evidence may still not cover enough of the population to support a conclusion. This is why a physical count matters so much in an inventory audit: it is one of the few procedures producing evidence the auditor generated personally, about the physical world, rather than reading a record the client prepared. It is also why management representations are recorded as what they are and never treated as evidence of existence.</p></section><section id="compliance" class="gl-sec"><h2>Audit Evidence Under Indian Law</h2><p>Position: two tests apply together. There has to be enough evidence, and it has to be of the right character, which turns on relevance and on how far it can be relied upon.</p><ul class="gloss-bullets"><li>The standard sets out how reliability varies. Evidence obtained from independent sources outside the entity is more reliable than evidence generated within it. Evidence the auditor obtains directly is more reliable than evidence obtained indirectly or by inference. Evidence in documentary form outranks oral representation, and an original document outranks a copy.</li><li>Source: Standard on Auditing 500, Audit Evidence, together with its application material on the reliability of sources.</li><li>Note: these are principles applied with professional judgement rather than a ranking to be followed mechanically. Evidence from a poorly controlled external source can be weaker than evidence from a well-controlled internal one.</li></ul></section><section id="evidence" class="gl-sec"><h2>What an Auditor Accepts as Evidence of Audit Evidence</h2><p>What is accepted here is the working paper trail itself, since the file has to show how a conclusion was reached.</p><ul class="gloss-bullets"><li>Accepted: procedures documented before they were performed, source documents rather than summaries prepared for the purpose, and observations recorded at the time with the date and the person identified.</li><li>Accepted: confirmations received directly from outside parties, which carry weight precisely because they did not pass through the entity being examined.</li><li>Rejected: a schedule prepared by the entity and adopted without testing, since adopting it makes the entity's assertion the auditor's conclusion.</li><li>Rejected: a representation used to establish existence, which records what management asserts about something the work could not resolve.</li><li>Retained: sufficient material that a reader who never attended could arrive at the identical view, which is precisely what a reviewer probes for.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Audit Evidence Works in Practice</h2><ol><li>The auditor identifies what has to be established about a balance: for inventory, that it exists, is owned, is in saleable condition and is carried at a supportable value.</li></ol><ol><li>Procedures are chosen for each assertion. Attendance at a count addresses existence; purchase records and storage agreements address ownership; inspection addresses condition; market evidence addresses value.</li></ol><ol><li>Information is gathered and weighed rather than merely collected. What the auditor obtained personally outranks what the entity supplied, an outside source outranks an internal one, and originals outrank summaries.</li></ol><ol><li>Sufficiency is then assessed against the risk. A material, high-risk area needs more and better evidence than a small routine one, and volume never compensates for weakness.</li></ol><ol><li>What is retained in the working papers has to let somebody who was not present reach the same conclusion, which is the practical test applied when the file is reviewed.</li></ol></section><section id="example" class="gl-sec"><h2>Audit Evidence: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Source</th><th>Strength</th><th>Why</th></tr></thead><tbody><tr><td>Auditor's own count</td><td>Strongest</td><td>Obtained directly, not through the client</td></tr><tr><td>Bank confirmation of stock held</td><td>Strong</td><td>External, independent of management</td></tr><tr><td>Supplier invoice from the client's file</td><td>Moderate</td><td>External in origin, client-held</td></tr><tr><td>Store ledger printout</td><td>Weaker</td><td>Internal, produced by the party being checked</td></tr><tr><td>Verbal assurance from the storekeeper</td><td>Weakest</td><td>Internal, unrecorded, uncorroborated</td></tr></tbody></table></div><p>A verification at a Ranchi steel stockist gathers all five sources on the same stock.</p><p>They are not interchangeable, and the ranking is about who produced the record and how it reached the file rather than about how convincing it sounds. A ledger printout can be neatly produced and still be the weakest paper in the file, because the party under examination made it. Where a strong source and a weak source disagree, the stronger one prevails unless there is a specific reason to doubt it. The practical consequence is that an exception supported only by the bottom two rows will not survive review, so corroboration is sought before the visit closes rather than afterwards.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Audit Evidence</h2><p>The common errors are about quality rather than quantity.</p><ul class="gloss-bullets"><li>Accumulating a large volume of weak material and treating the volume as strength, since piling up thin material never converts it into something an opinion can rest on.</li><li>Accepting a system report as evidence of physical existence, when it repeats what the system was told and cannot corroborate itself.</li><li>Relying on copies or summaries prepared by the entity when originals were available, which discards the more reliable version for convenience.</li><li>Treating a management representation as evidence that unlocated items exist, when it records an assertion about a population the work could not resolve.</li><li>Gathering sufficient evidence over an immaterial area while leaving a material one thin, which satisfies the file and not the opinion.</li><li>Treating an entity-prepared schedule as independent because it was requested formally, when the source is unchanged by the request.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>How much has to be examined before a conclusion holds is the sampling question, so <a href="/glossary/stock-audit/audit-sampling">audit sampling</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Audit Evidence?</h3><p>This page explains the idea. The practical question begins when evidence over an inventory balance is what is actually needed, and settling it means fieldwork of the kind <a href="/stock-audit">inventory audit</a> sets out. Scope is built from the sites involved and the state of the underlying records.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">inventory audit<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/audit-sampling">audit sampling<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Audit Evidence FAQs</h2><p class="faq-expanded__lead">Common questions about Audit Evidence in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a><form class="faq-enquiry" action="https://www.patronaccounting.com/enquiry" method="post" novalidate><h3 class="faq-enquiry__title">Talk to the stock audit team</h3><p class="faq-enquiry__sub">Tell us where the stock sits and we will scope the count.</p><p class="faq-enquiry__context">Enquiring about: <strong>Audit Evidence</strong></p><input class="faq-enquiry__input" type="text" name="name" placeholder="Your name" required><input class="faq-enquiry__input" type="email" name="email" placeholder="Email" required><div class="faq-enquiry__phone"><span class="faq-enquiry__cc">+91</span><input class="faq-enquiry__input faq-enquiry__input--phone" type="tel" name="phone" placeholder="Mobile" required></div><button class="faq-enquiry__btn" type="submit">Get a Callback</button><p class="faq-enquiry__msg" role="status" aria-live="polite"></p><div class="faq-enquiry__badges"><span class="faq-enquiry__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>CA-led team</span></div></form></aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">What counts as sufficient audit evidence for stock?</h3><div class="faq-expanded__a" id="faq-a1"><p>Direct observation of the count carries more weight than documents, which in turn carry more weight than management explanation. Evidence is judged on relevance and reliability together, not on volume.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Is a management representation letter evidence?</h3><div class="faq-expanded__a" id="faq-a2"><p>It is corroborative, not primary. A representation supports other evidence but cannot substitute for it, so an auditor who cannot verify stock physically does not resolve that by obtaining a representation.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">What happens when evidence cannot be obtained?</h3><div class="faq-expanded__a" id="faq-a3"><p>The auditor reports a limitation of scope, describing what could not be verified and why. Reporting a clean opinion on stock the auditor was unable to examine is the failure the limitation exists to prevent.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
