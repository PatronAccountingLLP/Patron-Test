@extends('layouts.service-app')

@section('meta')
<title>Consortium Banking: When Several Banks Fund One Borrower</title>
<meta name="description" content="In consortium banking several lenders fund one borrower under a common agreement. It widens stock audit scope, since every member bank relies on the count.">
<link rel="canonical" href="https://www.patronaccounting.com/glossary/stock-audit/consortium-banking">

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
            "name": "Consortium Banking",
            "item": "https://www.patronaccounting.com/glossary/stock-audit/consortium-banking"
        }
    ],
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/consortium-banking/#breadcrumb"
}
</script><script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "@id": "https://www.patronaccounting.com/glossary/stock-audit/consortium-banking/#faq",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How does consortium lending affect a stock audit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The lead bank normally sets one audit cycle and one scope for all members, so the borrower faces a single count rather than several. Without that coordination the same stock can be audited repeatedly for different lenders."
            }
        },
        {
            "@type": "Question",
            "name": "Who receives the stock audit report in a consortium?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The lead bank, which circulates it to members. Borrowers occasionally send copies directly to individual members as well, but the report is commissioned through the lead and its format follows that lender requirement."
            }
        },
        {
            "@type": "Question",
            "name": "Can two lenders hold security over the same stock?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under a consortium arrangement they share a charge on the same current assets in agreed proportion. The audit reports the stock once; how the security is shared is a matter for the inter-se agreement between the banks."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap gl-herogrid"><div class="gl-heromain"><div class="gl-cat">Stock Audit Glossary &middot; The Lending Trigger</div><h1 class="gl-h1">Consortium Banking</h1><div class="gl-byline"><span class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><span class="who">Reviewed by CA &amp; CS Team, Patron Accounting LLP</span><span class="sep">&middot;</span><span>5 min read</span></div></div><aside class="gl-herocta"><div class="gl-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div><h3>Prefer a CA to run the count?</h3><p>This term describes something an auditor has to establish on site. That is the work we do.</p><a class="gl-herocta__btn" href="/stock-audit">Talk to an Expert &rarr;</a><div class="gl-herocta__trust"><span class="star">&#9733;</span> 4.9 on Google &middot; UDIN on every report</div></aside></div></section><div class="gl-tocbar"><div class="gl-wrap gl-toc"><a href="#definition" class="gl-pill is-active">Definition</a><a href="#what-is" class="gl-pill">What it is</a><a href="#covenant" class="gl-pill">In the sanction letter</a><a href="#compliance" class="gl-pill">Under Indian law</a><a href="#how-works" class="gl-pill">How it works</a><a href="#example" class="gl-pill">Example</a><a href="#mistakes" class="gl-pill">Mistakes</a><a href="#related" class="gl-pill">Related terms</a><a href="#faq-section" class="gl-pill">FAQs</a></div></div><div class="gl-body"><div class="gl-wrap"><div class="gl-grid"><div class="gl-main"><section id="definition" class="gl-sec"><div class="gl-eyebrow">Consortium Banking: Definition</div><div class="definition-box"><p>Consortium banking is an arrangement in which several banks jointly finance one borrower under a common set of terms, with one bank acting as lead. The security is shared between them in agreed proportions rather than held separately. Because every member is exposed to the same assets, monitoring is generally coordinated through the lead bank, and verification of the security is arranged once for all members rather than repeated.</p></div></section><section id="what-is" class="gl-sec"><h2>What Is Consortium Banking?</h2><p>Large working capital requirements are often beyond what one bank will take on alone, and consortium arrangements exist to spread that exposure without fragmenting the borrower's relationship. Member banks agree common terms, share the security in proportion to their participation, and appoint a lead bank to coordinate assessment, documentation and monitoring. For the borrower it means one set of covenants rather than several conflicting ones.</p><p>The arrangement is distinct from multiple banking, where a business borrows from several lenders independently, each with its own terms and each unaware of what the others require. Consortium members meet, share information and act together, which makes the borrower's reporting simpler and its position harder to misrepresent. Verification is normally arranged once for the whole consortium rather than repeated by each member, with the report circulated to all, and that single point of examination is one of the practical advantages of the structure for everybody involved.</p></section><section id="covenant" class="gl-sec"><h2>Where Consortium Banking Appears in a Sanction Letter</h2><p>A consortium facility is documented differently from a bilateral one, and the differences are visible on the face of the letter.</p><ul class="gloss-bullets"><li>The participation schedule, naming every member and the share each has taken, which determines how any recovery is divided.</li><li>The lead bank clause, appointing one member to coordinate assessment, hold documents and receive information on behalf of all.</li><li>The pari passu clause, establishing that the security ranks equally between members so none can enforce ahead of the others.</li><li>The common covenants, applying identical terms to every participant, which is the borrower's principal advantage over borrowing separately.</li><li>The inspection clause, generally providing that verification is arranged once and the report shared, so the borrower is not counted several times over for the same security.</li></ul></section><section id="compliance" class="gl-sec"><h2>Consortium Banking Under Indian Law</h2><p>Position: formal consortium arrangements with a mandated lead bank are no longer required by regulation. What is required instead is information sharing. Lenders must report borrower data, including signs of stress, to the Central Repository of Information on Large Credits for exposures at or above five crore rupees in aggregate.</p><ul class="gloss-bullets"><li>The emphasis has moved from procedural rules about how lenders organise themselves to substantive disclosure between them, aimed at earlier detection of stress and of borrowing across multiple banks.</li><li>Source: RBI circulars establishing and governing the Central Repository of Information on Large Credits.</li><li>Note: consortium structures remain common by agreement between lenders. What changed is that the structure is now commercial rather than regulatory.</li></ul></section><section id="how-works" class="gl-sec"><h2>How Consortium Banking Works in Practice</h2><ol><li>A borrower's requirement exceeds what one bank is prepared to carry alone, so several lenders agree to participate, each taking a stated share.</li></ol><ol><li>One member is appointed lead. It coordinates the assessment, holds the documentation and acts as the point through which information flows to the rest.</li></ol><ol><li>Common terms are agreed and applied by all members, leaving the borrower with a single rulebook instead of several that may pull against each other.</li></ol><ol><li>The security is charged in favour of the group and shared in the agreed proportions, which means no member holds a separate claim it can enforce alone.</li></ol><ol><li>Oversight is channelled through the lead. A single examination of the charged assets is commissioned and its report goes out to every member, and any gap that emerges belongs to every participant at once, handled jointly rather than by whoever spotted it first.</li></ol></section><section id="example" class="gl-sec"><h2>Consortium Banking: A Worked Example</h2><div class="gloss-table-wrap"><table class="gloss-table"><thead><tr><th>Bank</th><th>Share of limit</th><th>Sanctioned limit</th><th>Role</th></tr></thead><tbody><tr><td>Lead bank</td><td>40%</td><td>Rs 20.00 crore</td><td>Convenes, appoints the auditor</td></tr><tr><td>Second member</td><td>30%</td><td>Rs 15.00 crore</td><td>Relies on the common report</td></tr><tr><td>Third member</td><td>20%</td><td>Rs 10.00 crore</td><td>Relies on the common report</td></tr><tr><td>Fourth member</td><td>10%</td><td>Rs 5.00 crore</td><td>Relies on the common report</td></tr></tbody></table></div><figure class="pa-chart"><figcaption>Share of limit</figcaption><div class="pa-chart-scroll"><svg viewBox="0 0 378 210" width="378" height="210" role="img" aria-label="Share of limit"><rect x="26" y="30" width="62" height="150" rx="5" fill="#14365F"/><text x="57" y="22" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">40</text><text x="57" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Lead bank</text><rect x="114" y="68" width="62" height="112" rx="5" fill="#14365F"/><text x="145" y="60" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">30</text><text x="145" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Second member</text><rect x="202" y="105" width="62" height="75" rx="5" fill="#14365F"/><text x="233" y="97" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">20</text><text x="233" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Third member</text><rect x="290" y="142" width="62" height="38" rx="5" fill="#E8712C"/><text x="321" y="134" text-anchor="middle" font-size="12" font-weight="700" fill="#14365F">10</text><text x="321" y="198" text-anchor="middle" font-size="11" fill="#6B7280">Fourth member</text><line x1="0" y1="181" x2="378" y2="181" stroke="#E5E7EB" stroke-width="1"/></svg></div></figure><p>A Rajkot casting group holds a Rs 50 crore working capital facility across four banks under a consortium arrangement. One charge is created over the same pool of stock, ranking equally between them.</p><p>What follows is a single verification exercise, not four. The lead bank appoints, the report is circulated to all members, and each member sizes its own drawing power from the same stock figure applied to its own share. The arrangement fails in a specific way worth watching: if one member sanctions an ad hoc enhancement outside the common documentation, the security cover supporting the enhanced amount was never re-verified. The stock has not grown to match it, and the shortfall surfaces at the next count rather than at the point the money was released.</p></section><section id="mistakes" class="gl-sec"><h2>Common Mistakes With Consortium Banking</h2><p>The failures here are almost all failures of coordination rather than of substance.</p><ul class="gloss-bullets"><li>Sending different figures to different members, usually because each request was answered separately and nobody compared the responses. Prepare one set and circulate it to all.</li><li>Dealing only with the lead bank and assuming the others are informed, when a member that feels bypassed will raise its own queries. Keep the whole group on the same information.</li><li>Arranging separate verifications for each member at the borrower's own cost, when one exercise circulated to all satisfies the arrangement. Ask before commissioning duplicates.</li><li>Treating the shared security as though each bank held its own portion, which it does not. A shortfall found by one member is a shortfall for the whole group and is handled collectively.</li></ul></section><section id="related" class="gl-sec"><h2>Related Stock Audit Terms</h2><p>The periodic return members read is the one that carries projections as well as actuals, so <a href="/glossary/stock-audit/qis-statement">qis statement</a> is the entry to read next. Every other term in this cluster is listed in the <a href="/glossary/stock-audit">stock audit glossary</a>, grouped by the part of the work it belongs to.</p></section><section class="gl-cta"><div class="gl-cta__t"><h3>Need Help With Consortium Banking?</h3><p>This page explains the idea. The practical question begins when a shared facility needs one verification the whole consortium can rely on, and settling it means fieldwork of the kind <a href="/stock-audit">stock audit service</a> sets out. Scope is built from the sites involved and the state of the underlying records.</p></div><div class="gl-cta__btns"><a class="gl-cta__primary" href="/stock-audit">How we run a stock audit &rarr;</a><a class="gl-cta__phone" href="tel:+919459456700">Book a consultation: +91 94594 56700</a></div></section></div><aside class="gl-aside"><div class="gl-card gl-card--service"><div class="gl-card__eyebrow">Related service</div><div class="gl-card__name">Stock Audit</div><p>CA-led stock and inventory counts for lenders and borrowers across India.</p><a class="gl-card__cta" href="/stock-audit">Explore the service &rarr;</a></div><div class="gl-card"><div class="gl-card__eyebrow">Where it is applied</div><ul><li><a href="/stock-audit">stock audit service<span class="arw">&rarr;</span></a></li></ul></div><div class="gl-card"><div class="gl-card__eyebrow">Related terms</div><ul><li><a href="/glossary/stock-audit/qis-statement">qis statement<span class="arw">&rarr;</span></a></li><li><a href="/glossary/stock-audit">Stock Audit Glossary<span class="arw">&rarr;</span></a></li></ul></div></aside></div></div></div><section id="faq-section" class="gl-faq-section"><div class="faq-expanded"><aside class="faq-expanded__aside"><h2 class="faq-expanded__title">Consortium Banking FAQs</h2><p class="faq-expanded__lead">Common questions about Consortium Banking in a stock audit.</p><a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>@endverbatim
@include('partials.faq-enquiry-form', [
    'enquiryTitle'   => 'Talk to the stock audit team',
    'enquirySub'     => 'Tell us where the stock sits and we will scope the count.',
    'enquiryService' => 'Consortium Banking',
])
@verbatim</aside><div class="faq-expanded__list"><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a1">How does consortium lending affect a stock audit?</h3><div class="faq-expanded__a" id="faq-a1"><p>The lead bank normally sets one audit cycle and one scope for all members, so the borrower faces a single count rather than several. Without that coordination the same stock can be audited repeatedly for different lenders.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a2">Who receives the stock audit report in a consortium?</h3><div class="faq-expanded__a" id="faq-a2"><p>The lead bank, which circulates it to members. Borrowers occasionally send copies directly to individual members as well, but the report is commissioned through the lead and its format follows that lender requirement.</p></div></div><div class="faq-expanded__item"><h3 class="faq-expanded__q" aria-expanded="true" aria-controls="faq-a3">Can two lenders hold security over the same stock?</h3><div class="faq-expanded__a" id="faq-a3"><p>Under a consortium arrangement they share a charge on the same current assets in agreed proportion. The audit reports the stock once; how the security is shared is a matter for the inter-se agreement between the banks.</p></div></div></div></div></section><section class="gl-eeat-sec"><div class="eeat-review-wrap"><div class="eeat-review"><div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div><div class="eeat-review__sources"><span>Official sources:</span> <a href="https://icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://rbi.org.in" target="_blank" rel="noopener">RBI</a></div><div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; Reviewed by CA Sundram Gupta (FCA) &nbsp;&middot;&nbsp; Last reviewed 20 August 2026 &nbsp;&middot;&nbsp; Next review 20 November 2026</div></div><p class="eeat-note">Definitions are reviewed against the standard or lender practice they describe, and restated when that moves.</p></div></section><footer class="gl-foot"><div class="gl-foot__in"><a href="/glossary/stock-audit">&larr; Back to the stock audit glossary</a></div></footer></div>
@endverbatim
@endsection
