{{-- /net-worth-certificate-for-divorce
     Generated from Generated Pages/net-worth-certificate-for-divorce/net-worth-certificate-for-divorce.html by Scripts/build_blade.py.
     That file is built from the cluster's signed-off workbooks by build_page.py;
     nothing here is authored. Re-run both rather than editing this file.

     Before this goes live:
       - deploy public/images/networth-cluster/net-worth-certificate-for-divorce/** and public/certificates/**
       - deploy public/css/nwc-spec.css (new to Patron Local)
       - patron-cluster.css and faq.css are already live; do not overwrite them
       - the hero form is partials/enquiry-form.blade.php (Zoho Bigin), swapped in
         at build time with this page's service pre-selected; the FAQ block is a
         CTA that scrolls to it, so there is one Bigin form per page. --}}
@extends('layouts.service-app')

@section('meta')
    <title>Net Worth Statement for Divorce Cases in Indian Courts</title>
    <meta name="description" content="A court-ready schedule of assets, liabilities and income, certified by a CA and prepared to withstand scrutiny from opposing counsel and the bench.">
    <link rel="canonical" href="https://www.patronaccounting.com/net-worth-certificate-for-divorce">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Court-Ready Net Worth Statements, Certified">
    <meta property="og:description" content="Full and frank disclosure, assembled from records and certified for filing in matrimonial proceedings.">
    <meta property="og:url" content="https://www.patronaccounting.com/net-worth-certificate-for-divorce">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Court-Ready Net Worth Statements, Certified">
    <meta name="twitter:description" content="Full and frank disclosure, assembled from records and certified for filing in matrimonial proceedings.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "Service",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-divorce#service",
   "name": "Net Worth Statement for Divorce Cases in Indian Courts",
   "description": "A court-ready schedule of assets, liabilities and income, certified by a CA and prepared to withstand scrutiny from opposing counsel and the bench.",
   "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "areaServed": "India",
   "url": "https://www.patronaccounting.com/net-worth-certificate-for-divorce"
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-divorce#breadcrumb",
   "itemListElement": [
    {
     "@type": "ListItem",
     "position": 1,
     "name": "Home",
     "item": "https://www.patronaccounting.com"
    },
    {
     "@type": "ListItem",
     "position": 2,
     "name": "Net Worth Certificate by CA",
     "item": "https://www.patronaccounting.com/net-worth-certificate-by-ca"
    },
    {
     "@type": "ListItem",
     "position": 3,
     "name": "Net Worth Statement for Divorce",
     "item": "https://www.patronaccounting.com/net-worth-certificate-for-divorce"
    }
   ]
  },
  {
   "@type": "FAQPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-divorce#faq",
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-08-05T10:00:00+05:30",
   "mainEntity": [
    {
     "@type": "Question",
     "name": "Can the chartered accountant be called to depose about the statement?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. A statement filed in a matrimonial proceeding can be put to proof. The certifying member may be summoned to explain the basis of valuation and the evidence examined. This is why working papers matter more here than in a routine engagement, and why unsupported valuations are struck out of the schedule before signature."
     }
    },
    {
     "@type": "Question",
     "name": "Does the statement have to be sworn before a notary or an oath commissioner?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "The party's disclosure is filed on affidavit, sworn before an oath commissioner or notary, and the chartered accountant's certificate is annexed to it. The two are distinct: the affidavit is the litigant's sworn word, the certificate is the professional's verification. Courts read them together and treat a bare affidavit as weaker."
     }
    },
    {
     "@type": "Question",
     "name": "Can one spouse obtain a certificate of the other spouse's net worth?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "No chartered accountant can certify a person's affairs without that person's records and consent. What the other side can do is seek discovery. The court can direct the spouse to file the disclosure affidavit the Supreme Court made mandatory in maintenance proceedings in Rajnesh v. Neha. The remedy is procedural, not professional."
     }
    },
    {
     "@type": "Question",
     "name": "Are assets held in a Hindu undivided family included in a spouse's statement?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "The individual's share is disclosed, not the whole corpus. A coparcener's interest in an HUF is an undivided share that crystallises only on partition. So it is stated as an interest with the basis explained rather than as an owned asset. Courts expect the interest to be disclosed even though it cannot be valued precisely."
     }
    },
    {
     "@type": "Question",
     "name": "Does stridhan appear on the statement?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, and it is listed separately. Stridhan is the woman's absolute property, and Indian courts have consistently held that the husband and his family hold it in trust and must return it. Because a return of stridhan is often claimed alongside maintenance, the statement itemises it rather than folding it into general assets."
     }
    },
    {
     "@type": "Question",
     "name": "What period of past transactions does the statement have to cover?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "The disclosure is a position on a date, but courts routinely look back further where dissipation is alleged. Three years of bank statements and returns is a common ask, and transfers made after the dispute arose are examined closely. The statement is therefore prepared with the transaction history behind it, not just the closing balances."
     }
    },
    {
     "@type": "Question",
     "name": "Is the statement shared with the opposing party?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. The disclosure affidavit is served on the other side and forms part of the court record. So it is not a confidential document between the client and the CA. Anything stated in it can be cross-examined, which is why understating a liability or omitting an asset carries a far higher cost here than elsewhere."
     }
    },
    {
     "@type": "Question",
     "name": "Can the figures be revised after the statement is filed?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "A supplementary affidavit can be filed with the court's leave, and the CA issues a revised certificate with a fresh date. What the revision cannot do is quietly replace the earlier document, since both remain on record. Courts read an unexplained revision as a credibility question rather than a clerical fix."
     }
    },
    {
     "@type": "Question",
     "name": "Does a mutual consent settlement need a certified statement?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "It is not compulsory, but it protects the settlement. Section 13B of the Hindu Marriage Act 1955 provides for divorce by mutual consent. Where that settlement involves a lump sum or a transfer of property, a certified statement helps. It makes the bargain informed for both parties. Settlements later challenged for concealment are the ones that lacked it."
     }
    },
    {
     "@type": "Question",
     "name": "Are assets standing in the names of children or parents disclosed?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "They are disclosed where the party funded them or retains control, even though legal title sits elsewhere. Courts look at benami and nominee arrangements when testing a disclosure, and the Prohibition of Benami Property Transactions Act 1988 makes such holdings independently actionable. The statement notes them with the ownership position explained."
     }
    }
   ]
  },
  {
   "@type": "WebPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-divorce#webpage",
   "url": "https://www.patronaccounting.com/net-worth-certificate-for-divorce",
   "name": "Net Worth Statement for Divorce Cases in Indian Courts",
   "description": "A court-ready schedule of assets, liabilities and income, certified by a CA and prepared to withstand scrutiny from opposing counsel and the bench.",
   "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
   },
   "publisher": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-08-05T10:00:00+05:30"
  }
 ]
}
</script>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/patron-cluster.css') }}?v={{ @filemtime(public_path('css/patron-cluster.css')) ?: '20260804' }}">
    <link rel="stylesheet" href="{{ asset('css/nwc-spec.css') }}?v={{ @filemtime(public_path('css/nwc-spec.css')) ?: '20260804' }}">
@endpush

@section('content')
<style>
/* the sticky site header (.pa-h ~70px) and the pill TOC beneath it stack to ~150px, so a
   jump from the TOC would otherwise land with
   the heading tucked underneath. Clear it for every anchor target on the page. */
main section,main [id]{scroll-margin-top:160px}

/* Hero benefits: four short claims, two across on a laptop and up. They were four
   claim-plus-proof paragraphs stacked, which filled the hero and pushed the call row below
   the fold. The proof sentences live in the Why Patron section, which is where they were
   written for. */
.hero-benefits{display:grid;grid-template-columns:1fr;gap:10px 28px;margin-bottom:4px}
@media(min-width:992px){.hero-benefits{grid-template-columns:repeat(2,minmax(0,1fr))}}
.hero-benefit{display:flex;align-items:center}
.hero-benefit .benefit-paragraph{font-size:15px;line-height:1.45;font-weight:600}
.hero-benefit .benefit-paragraph span{font-weight:600;color:var(--text-dark,#14365F)}
.hero-benefit .check-icon{flex-shrink:0}

/* 4 cards must read as 2x2 or 4-across, never 3 + 1 orphan */
.features-grid.is-4,.why-patron-grid.is-4{grid-template-columns:repeat(2,minmax(0,1fr))}
@media(min-width:1200px){.why-patron-grid.is-4{grid-template-columns:repeat(4,minmax(0,1fr))}}
@media(max-width:760px){.features-grid.is-4,.why-patron-grid.is-4{grid-template-columns:1fr}}

/* The city the reader is already on. Same card, but flat and not a link: it marks the set as
   complete without offering a click that goes nowhere. */
.pa-city-grid .pa-city-card.is-here{background:var(--cream,#FDF8F3);border-color:var(--orange,#F26522);
  cursor:default;box-shadow:none}
.pa-city-grid .pa-city-card.is-here .pa-card-sub{color:var(--orange,#F26522);font-weight:700}
/* Office: the address and the map share the row rather than stacking, so the five short
   address lines stop sitting in two thirds of a column of whitespace. Stacks on a phone,
   where side-by-side would make both halves too narrow to read. */
.nwc-office-split{display:grid;grid-template-columns:minmax(0,1fr);gap:28px;align-items:start}
@media(min-width:900px){.nwc-office-split{grid-template-columns:minmax(0,1fr) minmax(0,1.05fr);gap:36px}}
.nwc-office-map{margin:0}
.nwc-office-map iframe{min-height:320px}
/* the five city cards wrap 4 + 1 in the shared grid; one row reads as a set */
.pa-city-grid{display:flex;flex-wrap:nowrap;gap:16px}
.pa-city-grid .pa-city-card{flex:1 1 0;min-width:0}
/* two up all the way down to the narrowest phone: a city name and its state fit side by
   side comfortably, and five full-width rows made the block far longer than it deserves */
@media(max-width:900px){.pa-city-grid{flex-wrap:wrap;gap:12px}
  .pa-city-grid .pa-city-card{flex:0 1 calc(50% - 6px);min-width:0}
  .pa-city-grid .pa-card-title,.pa-city-grid .pa-card-sub{overflow-wrap:anywhere}}

/* the Frequency cell is two short words; let it keep its line */
.badge-included{white-space:nowrap}

/* The card shelves were leaving two kinds of blank space.
   1. patron-cluster.css caps .pa-city-grid/.pa-cross-grid at max-width:1100px, but the column
      they sit in is 1320px - so 220px of every row was dead space on the right at any viewport
      above 1400px. The cap is released here rather than in the estate stylesheet, which is
      live and shared.
   2. A service page's shelf carries 11 cards - the hub, nine siblings and the glossary - and
      11 does not divide by any sensible column count, so a 4-across grid left an empty cell.
      Flex rather than grid: the last row's cards grow to fill the width instead of leaving a
      hole. Two-up at 900px, one-up on a phone. */
.pa-city-grid,.pa-cross-grid{max-width:none}
.pa-cross-grid{display:flex;flex-wrap:wrap;gap:18px}
.pa-cross-grid .pa-cross-card{flex:1 1 calc(25% - 14px);min-width:225px}
@media(max-width:1100px){.pa-cross-grid .pa-cross-card{flex:1 1 calc(33.333% - 12px)}}
@media(max-width:820px){.pa-cross-grid .pa-cross-card{flex:1 1 calc(50% - 9px)}}
@media(max-width:520px){.pa-cross-grid .pa-cross-card{flex:1 1 100%}}

/* ------------------------------------------------------------------ the hub directory
   Modelled on the accounting cluster's own hub template: a category rail that scrolls with
   the reader on the left, the categories and their cards on the right. Six flat grids stacked
   one after another gave nobody a way to reach "Free Tools" without scrolling past thirty
   cards. */
.hub-layout{display:grid;grid-template-columns:264px minmax(0,1fr);gap:34px;align-items:start}
.hub-rail{position:sticky;top:160px;background:#fff;border:1px solid var(--gray-200);
  border-radius:14px;padding:16px 14px;max-height:calc(100vh - 128px);overflow:auto}
.hub-rail__title{font-size:11.5px;font-weight:700;letter-spacing:.9px;text-transform:uppercase;
  color:var(--text-muted);margin:0 0 10px;padding-left:6px}
.hub-search{display:block;margin-bottom:12px}
.hub-search input{width:100%;padding:9px 12px;border:1px solid var(--gray-200);border-radius:9px;
  font:inherit;font-size:13.5px;background:var(--gray-50);outline:none}
.hub-search input:focus{border-color:var(--blue);background:#fff}
.hub-rail__item{display:flex;align-items:center;gap:9px;padding:9px 10px;border-radius:9px;
  color:var(--text-secondary);text-decoration:none;font-size:13.5px;font-weight:600;line-height:1.3}
.hub-rail__item:hover{background:var(--gray-50);color:var(--blue)}
.hub-rail__item.is-active{background:var(--orange-lighter);color:var(--blue)}
.hub-rail__ic{flex-shrink:0;width:26px;height:26px;border-radius:7px;background:var(--gray-50);
  display:flex;align-items:center;justify-content:center;color:var(--orange)}
.hub-rail__item.is-active .hub-rail__ic{background:var(--orange);color:#fff}
.hub-rail__ic svg{width:15px;height:15px}
.hub-rail__n{margin-left:auto;font-size:11.5px;font-weight:700;color:var(--text-muted)}
.hub-block{margin-bottom:34px;scroll-margin-top:120px}
.hub-block__head{display:flex;align-items:center;gap:11px;margin-bottom:14px}
.hub-block__ic{width:36px;height:36px;border-radius:10px;background:var(--orange-lighter);
  display:flex;align-items:center;justify-content:center;color:var(--orange);flex-shrink:0}
.hub-block__ic svg{width:19px;height:19px}
.hub-block__h2{font-size:21px;font-weight:700;color:var(--blue);margin:0}
.hub-rail__cta{display:block;margin-top:14px;padding:11px 14px;border-radius:10px;
  background:var(--orange);color:#fff;text-align:center;font-size:14px;font-weight:700;
  text-decoration:none}
.hub-rail__cta:hover{background:var(--blue);color:#fff}

/* the live hub's card: category mark on the left, text beside it, corner arrow */
/* fixed thirds, NOT flex-grow. The live hub keeps every card the same width and lets a short
   row end early - Core Accounting there has one card at a third of the width. Growing the last
   row is right for the service pages' Related Services shelf and wrong here: these cards sit in
   a scannable column of equal tiles. */
.hub-directory .nwc-card{flex:0 1 calc(33.333% - 12px);min-width:250px;padding:0}
.hub-directory .nwc-card a{display:flex;gap:13px;align-items:flex-start;padding:18px 19px;
  position:relative}
.nwc-card__ic{flex-shrink:0;width:34px;height:34px;border-radius:9px;background:var(--gray-50);
  display:flex;align-items:center;justify-content:center;color:var(--orange)}
.nwc-card__ic svg{width:17px;height:17px}
.nwc-card:hover .nwc-card__ic{background:var(--orange-lighter)}
.nwc-card__txt{min-width:0}
.nwc-card__go{position:absolute;top:14px;right:15px;color:var(--gray-400);font-size:14px;
  transition:color .22s ease,transform .22s ease}
.nwc-card:hover .nwc-card__go{color:var(--orange);transform:translate(2px,-2px)}
.nwc-card__fee{display:block;margin-top:9px;font-size:12.5px;font-weight:700;color:var(--orange)}
@media(max-width:1250px){.hub-directory .nwc-card{flex:0 1 calc(50% - 9px)}}
@media(max-width:640px){.hub-directory .nwc-card{flex:0 1 100%}}
.hub-empty{margin:8px 0 0;color:var(--text-muted);font-size:14.5px}
.hub-empty button{border:0;background:none;color:var(--blue);font:inherit;font-weight:700;
  text-decoration:underline;cursor:pointer;padding:0}
.visually-hidden{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);white-space:nowrap}
@media(max-width:1000px){.hub-layout{grid-template-columns:1fr;gap:20px}
  .hub-rail{position:static;max-height:none;display:flex;flex-wrap:wrap;gap:8px}
  .hub-rail__title{width:100%}
  .hub-search{width:100%;order:-1}
  .hub-rail__item{flex:0 1 auto;border:1px solid var(--gray-200)}}

/* The hub's directory grids. The DIRECTORY workbook ships each card as
   <article class="nwc-card"> with the title as an H3 inside the anchor and the body under it;
   the layout is the page's. Four across on a laptop, and the last row's cards grow rather than
   leaving a hole - "Free Tools" has 7 and "Certificates in Your City" has 15. */
.nwc-card-grid{display:flex;flex-wrap:wrap;gap:18px;margin-top:8px}
.nwc-card{flex:1 1 calc(25% - 14px);min-width:236px;background:#fff;border:1px solid var(--gray-200);
  border-radius:14px;padding:20px 22px;transition:border-color .22s ease,box-shadow .22s ease,transform .22s ease}
.nwc-card:hover{border-color:var(--orange);box-shadow:0 6px 20px rgba(232,113,44,.12);transform:translateY(-2px)}
.nwc-card a{text-decoration:none;display:block}
.nwc-card h3{font-size:16px;font-weight:700;color:var(--blue);margin:0 0 8px;line-height:1.35}
.nwc-card:hover h3{color:var(--orange)}
.nwc-card p{margin:0;font-size:13.5px;line-height:1.6;color:var(--text-secondary)}
@media(max-width:1100px){.nwc-card{flex:1 1 calc(33.333% - 12px)}}
@media(max-width:820px){.nwc-card{flex:1 1 calc(50% - 9px)}}
@media(max-width:520px){.nwc-card{flex:1 1 100%}}

/* Read Next: a reading list, not a card wall. Two columns where there is room.
   GRID, not `columns:2`. The estate's own `section ul li:not(.nav-item)` makes every prose
   <li> a flex row with an orange check chip, and it outranks anything set here (0,1,4 against
   0,1,2), so an absolute ::before marker of our own was being ignored while the flex items
   were also being fragmented by the multi-column container - which is what put the chip on
   top of the first letter. So: keep the estate's chip, which is the same one the documents
   list uses, and lay the items out with grid, which flex children survive. */
.pa-read-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:2px 32px;
  list-style:none;padding:0;margin:0}
.pa-read-list li{margin-bottom:0!important;font-size:14.5px}
.pa-read-list a{color:var(--blue);text-decoration:none;font-weight:500}
.pa-read-list a:hover{text-decoration:underline}
@media(max-width:760px){.pa-read-list{grid-template-columns:1fr}}

/* Four portal cards in ONE row. The shared rule is flex:0 1 340px / max-width:362px, which
   wraps 3 + 1 at this container width, so the basis is recomputed from the row instead. */
.portal-grid-sec .portal-grid{flex-wrap:nowrap;align-items:stretch}
.portal-grid-sec .portal-card{flex:1 1 0;max-width:none;min-width:0}
/* and the whole screenshot, not the shared 172px top crop: the captures are fitted into one
   1280x720 canvas by normalise_portal_shots.py, so contain shows all of each one and every
   card still lines up. Click opens the portal lightbox for the detail. */
.portal-grid-sec .browser-frame img{height:auto;aspect-ratio:16/9;object-fit:contain;background:#0f1120}
/* the shared rule caps the intro at a reading column; here it should run the card row's width */
.portal-grid-sec .section-header{max-width:none}
.portal-grid-sec .section-subtitle{max-width:none;text-align:center}
@media(max-width:1100px){.portal-grid-sec .portal-grid{flex-wrap:wrap}
  .portal-grid-sec .portal-card{flex:0 1 calc(50% - 13px)}}
@media(max-width:640px){.portal-grid-sec .portal-card{flex:0 1 100%}}

/* page-local only: the four things patron-cluster.css has no rule for */
/* testimonial slider: vanilla, so the standalone page needs no jQuery or Slick */
.nwc-slider{position:relative}
.nwc-slider__track{display:flex;gap:20px;overflow-x:auto;scroll-snap-type:x mandatory;
  scroll-behavior:smooth;scrollbar-width:none;padding:4px 0 8px}
.nwc-slider__track::-webkit-scrollbar{display:none}
.nwc-slide{flex:0 0 calc((100% - 60px)/4);scroll-snap-align:start;display:flex}
.nwc-slide>*{width:100%;height:100%}
.nwc-slider__track .testi-video-area video{width:100%;display:block;border-radius:12px 12px 0 0}
/* the play overlay, so a video card shows a poster and a button rather than raw controls */
.nwc-slider__track .testi-video-area{position:relative;cursor:pointer}
.nwc-slider__track .testi-play-overlay{position:absolute;inset:0;display:flex;align-items:center;
  justify-content:center;background:rgba(15,23,42,.28);transition:opacity .2s}
.nwc-slider__track .testi-video-area.playing .testi-play-overlay{opacity:0;pointer-events:none}
.nwc-slider__track .testi-play-btn{width:56px;height:56px;border-radius:50%;background:#fff;
  display:flex;align-items:center;justify-content:center;box-shadow:0 6px 20px rgba(15,23,42,.28)}
.nwc-slider__track .testi-play-btn svg{width:24px;height:24px;color:var(--orange,#f26522);margin-left:3px}
/* 4 / 3 / 2 / 1, the same breakpoints the accounting slick config uses */
@media(max-width:1200px){.nwc-slide{flex:0 0 calc((100% - 40px)/3)}}
@media(max-width:900px){.nwc-slide{flex:0 0 calc((100% - 20px)/2)}}
@media(max-width:600px){.nwc-slide{flex:0 0 100%}}

/* tabbed sample card on the right; the copy is sticky and the document scrolls past it.
   96px clears the sticky TOC bar, so the pinned text never tucks underneath it. */
/* the caption cell STRETCHES to the row height and an inner wrapper does the sticking.
   Put position:sticky on the grid item itself and it has nowhere to travel, because
   align-items:start shrinks the item's box to its own content. */
.specimen-item{margin:0;display:grid;grid-template-columns:minmax(0,1fr) 470px;gap:40px;align-items:stretch}
.specimen-caption{min-width:0}
/* clears the sticky header (~70px) + pill TOC (~80px); pinned any higher and the
   specimen's first lines sit behind the TOC bar */
.specimen-sticky{position:sticky;top:160px}
.specimen-sticky .section-title{margin-top:0}
/* both captions stay readable; the active one is marked, not the other one hidden */
.specimen-pane{padding:14px 0 14px 16px;border-left:3px solid transparent;transition:border-color .25s,opacity .25s;opacity:.62}
.specimen-pane.is-active{border-left-color:var(--orange,#f26522);opacity:1}
/* Patron's own segmented control - the same one the calculator uses for Rupees/Lakh/Crore -
   rather than a copy of the dark tab bar on the reference site. */
.specimen-stack__title{font-weight:700;color:var(--blue,#14365f);font-size:13px;
  letter-spacing:.6px;text-transform:uppercase;margin:0 0 10px}
.specimen-tabs{display:flex;gap:4px;background:var(--gray-100,#f1f5f9);border-radius:10px;padding:4px;margin-bottom:14px}
.specimen-tab{flex:1;padding:10px 12px;border:0;border-radius:7px;background:transparent;
  color:var(--text-muted,#64748b);font:inherit;font-size:14px;font-weight:700;line-height:1.3;
  cursor:pointer;transition:background .2s,color .2s}
.specimen-tab:hover{color:var(--blue,#14365f)}
.specimen-tab.is-active{background:#fff;color:var(--blue,#14365f);box-shadow:0 1px 3px rgba(15,23,42,.12)}
.specimen-tab:focus-visible{outline:2px solid var(--orange,#f26522);outline-offset:2px}
/* The document is SCALED TO FIT its column, never scrolled. specimen.js measures the
   sample's natural content width once and sets --spec-zoom from the frame's own width, so
   the whole page fits edge to edge at any screen size and the frame's height follows the
   content - no horizontal bar, no vertical bar, no dead space. `zoom` is used rather than
   `transform:scale` precisely because it reflows: a transform would leave the frame at its
   unscaled height and open a gap under every sample. */
.specimen-frame{position:relative;background:var(--gray-50,#f8fafc);padding:14px;
  border:1px solid var(--gray-200,#e2e8f0);border-radius:12px;
  cursor:zoom-in;overflow:hidden;max-width:100%;zoom:var(--spec-zoom,.55)}
/* The sample must lay out at the width it was DESIGNED for and then be scaled down whole.
   Left fluid it reflows instead: the table's amount column gets pushed out of the box and
   overflow:hidden silently eats it, so the sample renders without any figures on it. */
.specimen-frame .nwc-spec{width:860px;max-width:none;margin:0}
/* nwc-spec.css narrows the document below a 640px VIEWPORT: the table turns into a
   display:block strip that shrinks to its content and stops well short of the right margin,
   and the page padding and body size drop too. Those rules exist for a document rendered at
   the viewport's width. Here it is always laid out at its designed 860px and then scaled, so
   the viewport is the wrong thing to respond to - the sample must look identical at every
   size, only smaller. Hold the design values inside the frame and the lightbox. */
@media(max-width:640px){
  .specimen-frame .nwc-spec,.specimen-lightbox .nwc-spec{
    --pad-x:42px;--pad-y:38px;--pad-b:30px;--fs-body:14px}
  .specimen-frame .nwc-spec table,.specimen-lightbox .nwc-spec table{
    display:table;overflow-x:visible;white-space:normal;width:100%}
  .specimen-frame .nwc-spec__meta,.specimen-lightbox .nwc-spec__meta{flex-direction:row}
  .specimen-frame .nwc-spec__sign,.specimen-lightbox .nwc-spec__sign{
    flex-direction:row;align-items:flex-end}
}
.specimen-frame:focus-visible{outline:2px solid var(--orange,#f26522);outline-offset:3px}
.specimen-doc{display:none}
.specimen-doc.is-active{display:block}
.specimen-zoom{position:sticky;float:right;right:14px;bottom:14px;top:calc(160px/.55);
  background:rgba(20,54,95,.92);color:#fff;font-family:'Barlow',sans-serif;font-size:22px;
  padding:8px 18px;border-radius:50px;z-index:2}
.specimen-hint{display:none;align-items:center;justify-content:space-between;gap:12px;
  margin:12px 0 0;font-size:13px;color:var(--text-muted,#64748b)}
.specimen-open{border:0;border-radius:50px;background:var(--blue,#14365f);color:#fff;
  font:inherit;font-size:13px;font-weight:700;padding:10px 18px;cursor:pointer;white-space:nowrap}
.specimen-caption h3{font-size:18px;margin:0 0 10px}
.specimen-download{display:inline-block;margin-top:4px;font-weight:600}
.specimen-masknote{font-size:13px;color:var(--text-muted,#64748b);border-top:1px solid var(--gray-200,#e2e8f0);padding-top:14px;margin-top:18px}
.specimen-lightbox{position:fixed;inset:0;background:rgba(15,23,42,.86);z-index:9999;
  display:none;overflow:auto;padding:40px 16px}
.specimen-lightbox.is-open{display:block}
/* the full-size view fits the viewport WIDTH and scrolls vertically only: at 860px design
   width it otherwise ran off the right edge of a phone and had to be dragged sideways */
.specimen-lightbox{overflow-x:hidden}
.specimen-lightbox__inner{max-width:900px;margin:0 auto;zoom:var(--lb-zoom,1)}
.specimen-lightbox__inner .nwc-spec{width:860px;max-width:none;margin:0 auto}
.specimen-lightbox__close{position:fixed;top:14px;right:20px;width:40px;height:40px;border-radius:50%;
  border:0;background:#fff;color:var(--blue,#14365f);font-size:24px;line-height:1;cursor:pointer}
@media(max-width:980px){.specimen-item{grid-template-columns:minmax(0,1fr)}
  .specimen-sticky{position:static}
  .specimen-stack{max-width:min(640px,100%);min-width:0}}

/* PHONES. The fit is handled by --spec-zoom, so nothing here touches scale. Both captions
   go full-opacity: once they stack, the dimmed inactive one reads as broken rather than as
   inactive. */
@media(max-width:700px){
  .specimen-frame{padding:8px}
  .specimen-zoom{display:none}
  .specimen-pane{opacity:1;padding:12px 0 12px 14px}
  .specimen-hint{display:flex}
  .specimen-tab{font-size:13px;padding:11px 8px}
  .specimen-caption .section-subtitle{margin-bottom:4px}
}
.nwc-doc-list{list-style:none;padding:0;margin:0 0 8px}
.nwc-doc-list li{display:block!important;padding:12px 0 12px 26px;border-bottom:1px solid var(--gray-200,#e2e8f0);font-weight:600;position:relative}
.nwc-doc-list li::before{content:"";position:absolute;left:0;top:19px;width:8px;height:8px;border-radius:50%;background:var(--orange,#f26522)}
.nwc-doc-list .al-d{display:block;font-weight:400;font-size:14px;color:var(--text-muted,#64748b);margin-top:4px}
</style>
<main>


<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        UDIN on every certificate
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">Net Worth Statement for Divorce</h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI &amp; ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">August 2026</span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us/" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4 hero-benefits">
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Holdings you do not legally own</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Built to the Rajnesh format</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Valuation basis stated, UDIN attached</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Working papers kept in full</span></p></div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 94594 56700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20a%20Net%20Worth%20Statement%20for%20Divorce&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20net%20worth%20statement%20for%20divorce%20and%20would%20like%20to%20know%20more.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20statement%20for%20divorce" target="_blank" rel="noopener" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>In practice</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA &amp; CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><span class="rating-score">4.9</span></div>
                                <span class="rating-count">Based on real Google reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.bigin-form', [
                    'service'  => 'Net Worth Statement for Court',
                ])
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section">
  <div class="section-container">
    <div class="section-header">
      <h2>What Our Court Net Worth Statement Clients Say</h2>
      <p>Verified Google reviews from the individuals and businesses Patron works with across India.</p>
    </div>
    <div class="nwc-slider" id="testiSlider">
      <div class="nwc-slider__track" role="group" aria-label="Client testimonials">
        <div class="nwc-slide"><div class="testi-video-card">
  <div class="testi-video-area">
    <video preload="metadata" playsinline poster="https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg">
      <source src="https://www.patronaccounting.com/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4">
    </video>
    <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
    <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
  </div>
  <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
    <div class="testi-avatar"><img src="https://www.patronaccounting.com/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
    <div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-video-card">
  <div class="testi-video-area">
    <video preload="metadata" playsinline poster="https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg">
      <source src="https://www.patronaccounting.com/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4">
    </video>
    <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
    <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
  </div>
  <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
    <div class="testi-avatar"><img src="https://www.patronaccounting.com/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
    <div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-quote-card">
  <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
  <p class="testi-quote-text">Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially filing the ITR.</p>
  <div class="testi-footer">
    <div class="testi-author">
      <div class="testi-avatar ">A</div>
      <div><div class="testi-name">Anita Gaur</div></div>
    </div>
    <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-quote-card">
  <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
  <p class="testi-quote-text">I've had an outstanding experience working with Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process smooth and stress-free. Highly recommended for anyone seeking reliable and knowledgeable financial guidance!</p>
  <div class="testi-footer">
    <div class="testi-author">
      <div class="testi-avatar blue">S</div>
      <div><div class="testi-name">Subhendu Mishra</div></div>
    </div>
    <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-quote-card">
  <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
  <p class="testi-quote-text">I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really impressed by their acumen. And it's not expensive at all. Good guidance while filling was given as well.</p>
  <div class="testi-footer">
    <div class="testi-author">
      <div class="testi-avatar teal">R</div>
      <div><div class="testi-name">Rajib Dutta</div></div>
    </div>
    <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-quote-card">
  <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
  <p class="testi-quote-text">I have been taking services of Patron Accounting from 5 years and found them highly professional and the best people for all taxation related work be it individual or company services. Highly recommended.</p>
  <div class="testi-footer">
    <div class="testi-author">
      <div class="testi-avatar purple">A</div>
      <div><div class="testi-name">Ayushi Garg</div></div>
    </div>
    <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-quote-card">
  <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
  <p class="testi-quote-text">From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge, attention to detail, and a genuine willingness to help. It gave me immense confidence and peace of mind.</p>
  <div class="testi-footer">
    <div class="testi-author">
      <div class="testi-avatar ">P</div>
      <div><div class="testi-name">Preeti Singh Rathor</div></div>
    </div>
    <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div>
  </div>
</div></div>
        <div class="nwc-slide"><div class="testi-quote-card">
  <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
  <p class="testi-quote-text">I got financial services from them for my private limited company. They are having good and qualified staff to provide services in a professional manner which is beneficial for me.</p>
  <div class="testi-footer">
    <div class="testi-author">
      <div class="testi-avatar blue">M</div>
      <div><div class="testi-name">Monika Sharma</div></div>
    </div>
    <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div></div>
  </div>
</div></div>
      </div>
    </div>
    <div class="reviews-cta" style="margin-top:30px;">
      <div class="reviews-cta-content">
        <div class="reviews-cta-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
        <div class="reviews-cta-text"><h3 class="text-white">Join 3,000+ Founders and Businesses on Patron</h3><p>Rated 4.9 on Google &mdash; trusted for CA certification since 2019.</p></div>
      </div>
      <a href="tel:+919459456700" class="btn-cta" style="text-decoration:none;">Talk to an Expert <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:16px;height:16px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
    </div>
  </div>
</section>

<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">3,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">Certification, audit and compliance work across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years in Practice</span><span class="stat-desc">A CA and CS team signing certificates for special purposes.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">25,000+</span><span class="stat-label">Filings Completed</span><span class="stat-desc">Returns, certificates and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Verified Google reviews from real engagements.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>UDIN Verified<span class="cert-desc">Every certificate carries a UDIN generated on the ICAI portal.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial records are transferred and held securely.</span></div>
        </div>
    </div>
</div>

<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#specimen-section" class="toc-btn">Specimen</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">What You Receive</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Problems</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#benefits-section" class="toc-btn">Why It Matters</a>
            <a href="#why-patron-section" class="toc-btn">Why Patron</a>
            <a href="#tool-section" class="toc-btn">Calculator</a>
            <a href="#legal-section" class="toc-btn">Legal Framework</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Court Net Worth Statement: Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR &mdash; Net Worth Statement for Divorce at a Glance</strong></p>
                    <p>A net worth statement for divorce sets out one spouse's assets, liabilities and income for filing in maintenance or settlement proceedings. Since Rajnesh v. Neha in 2020, courts expect disclosure in a prescribed affidavit form. Every figure in it has to rest on a document, because opposing counsel will test the schedule line by line. The chartered accountant records the basis of each valuation and what fell outside the scope.</p>
                </div>
<p>Financial disclosure in a matrimonial matter is read by someone looking for what is missing. A figure without a document behind it invites a question in cross-examination, and an omission found later damages more than the number it concealed. The schedule is not written to persuade. It is written to survive being gone through line by line.</p><p>One item is contested more than any other. A share in a private business has no market price, so the basis chosen decides the figure, and the other side will propose a different basis. The answer is to state the basis used, the records it rests on, and what fell outside the scope. <a href="/blog/documents-required-for-net-worth-certificate">The evidence needed</a> is listed separately, alongside the provisions on <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is a Net Worth Statement Filed in Court?</h2>
                <div class="content-text what-is-definition">
<p>A <a href="/net-worth-certificate">net worth statement</a> filed in court is a schedule of one party's assets, liabilities and income. It is prepared to support a disclosure affidavit in maintenance or settlement proceedings.</p><p>The chartered accountant's role stops at the figures. The statement records what is held and what is owed, on evidence, with the basis of each valuation disclosed. It expresses no view on what either party is entitled to, on how assets should be divided, or on whether a claimed liability is genuine. Those are questions for the court. Where a value is contested, the statement says so and states the basis used.</p>
                </div>
            </div>
            <div class="column-image"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/what-is.webp" alt="Assets and liabilities scheduled on evidence to support a disclosure affidavit, with the basis of each value shown" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>

<section class="content-section specimen-section" id="specimen-section">
  <div class="content-container">
    <div class="text-content">
      <div class="specimen-item">
        <div class="specimen-caption"><div class="specimen-sticky">
          <h2 class="section-title">What a Net Worth Statement for Court Looks Like: A Masked Specimen</h2>
          <p class="section-subtitle" style="text-align:left;max-width:100%;">Every figure in the sample below is masked. What it shows is the shape of the document you receive: what it states, on whose authority, and as at which date.</p>
          <div class="specimen-pane is-active" data-spec-pane="0">
            <h3>Net worth statement for filing</h3>
            <p>The sample schedules assets, liabilities and income together, which is the shape a disclosure affidavit is expected to take. <a href="/blog/joint-owners-net-worth-certificate-explained">Jointly held</a> property and holdings in another name are set out on their own terms rather than folded into one total, and the basis of every contested value is stated. It records figures and expresses no view on what either party is entitled to.</p>
            <a class="specimen-download" href="/certificates/11-net-worth-statement-for-divorce.pdf" download>Download this sample (PDF)</a>
          </div>
          <p class="specimen-masknote">All names, addresses, registration numbers and amounts are replaced with X characters. The sample carries a Patron Accounting watermark and a Specimen badge on every page so that a cropped screenshot still shows what it is.</p>
        </div></div>
        <div class="specimen-stack" id="specimenStack">
          <p class="specimen-stack__title">Sample document</p>
          <div class="specimen-tabs" role="tablist" aria-label="Choose a sample">
            <button type="button" role="tab" class="specimen-tab is-active" data-spec-tab="0" aria-selected="true">Net worth statement for filing</button>
          </div>
          <div class="specimen-frame" id="specimenFrame" role="button" tabindex="0" aria-label="Enlarge this sample">
            <div class="specimen-doc is-active" data-spec-doc="0"><article class="nwc-spec" aria-label="Net Worth Statement for Court - specimen, all values masked, not a valid certificate">
  <svg class="nwc-spec__mark" aria-hidden="true" focusable="false">
    <defs><pattern id="nwcwm-11" width="400" height="230"
      patternUnits="userSpaceOnUse">
      <text x="16" y="150" transform="rotate(-24 16 150)">Patron Accounting</text>
    </pattern></defs>
    <rect width="100%" height="100%" fill="url(#nwcwm-11)"/>
  </svg>
  <div class="nwc-spec__badge">Sample only</div>
  <header class="nwc-spec__lh">
    <span class="nm"><span class="b">XXXXXX XXXXX &amp; XXXXXXXXXX</span></span>
    <span class="desig">Chartered Accountants</span>
    <span class="ln"><span class="b">XXX, XXXXXXX XXXXXXXX, XX XXXX, XXXX XXXXXX</span></span>
    <span class="ln"><span class="b">+XX XX XXXX XXXX</span> &nbsp;&middot;&nbsp; <span class="b">XXXXXX@XXXXXXX.XX</span></span>
    <span class="ln">Firm Registration No.: <span class="b">XXXXXXX</span></span>
  </header>
  <div class="nwc-spec__meta"><span>Ref: <span class="b">XXX/XXXX-XX/XXXX</span></span><span>Date: <span class="b">XX/XX/XXXX</span></span></div>
  <h3>Statement of Net Worth</h3>
  <div class="nwc-spec__to"><b>To,</b><br>The Hon'ble <span class="b">XXXXXX XXXXX XX XXXXXX</span><br>In the matter of <span class="b">XXXXXXXXX XX. XXX XX XXXX</span></div>
  <p>This is to certify that we have examined the Statement of Assets and Liabilities of
  <span class="b">XXXXX XXXXXX XXXXXXXXX</span>, residing at <span class="b">XXXX XX, XXXXXXXX XXXXXXXXX, XXXXXXX, XXXX XXXXXX</span>, holding Permanent
  Account Number <span class="b">XXXXXXXXXX</span>, as at <span class="b">XX XXXXX XXXX</span>, on the basis of income tax returns, bank
  statements, title documents, demat statements and other records produced before us.</p>
  <h4>Statement of Assets and Liabilities</h4>
  <table><caption class="nwc-spec__sr">Statement of assets and liabilities - all values masked</caption><thead><tr><th style="width:50px">Sr.</th><th>Particulars</th><th>Held as</th><th class="num">Amount (INR)</th></tr></thead><tbody>
    <tr class="sub"><td>A</td><td><b>Assets</b></td><td></td><td class="num"></td></tr>
    <tr><td>1</td><td>Immovable property &mdash; residential</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr>
    <tr><td>2</td><td>Immovable property &mdash; other</td><td><span class="b">XXXXX XXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>3</td><td>Bank balances and deposits</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>4</td><td>Shares, mutual funds and securities</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>5</td><td>Retirement and provident fund balances</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>6</td><td>Motor vehicles</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>7</td><td>Jewellery and other valuables</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>8</td><td>Business or professional interest</td><td><span class="b">XXXXX XXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr class="sub"><td></td><td><b>Total Assets (A)</b></td><td></td><td class="num"><b><span class="b b--n">X,XX,XX,XXX</span></b></td></tr>
    <tr class="sub"><td>B</td><td><b>Liabilities</b></td><td></td><td class="num"></td></tr>
    <tr><td>9</td><td>Housing loan &mdash; outstanding</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>10</td><td>Vehicle and personal loans</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>11</td><td>Other borrowings and dues</td><td><span class="b">XXXX XXXXXXXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr class="sub"><td></td><td><b>Total Liabilities (B)</b></td><td></td><td class="num"><b><span class="b b--n">X,XX,XX,XXX</span></b></td></tr>
    <tr class="tot"><td></td><td><b>NET WORTH (A &minus; B)</b></td><td></td><td class="num"><b><span class="b b--n">X,XX,XX,XXX</span></b></td></tr>
  </tbody></table>
  <h4>Disclosures</h4>
  <table><caption class="nwc-spec__sr">Disclosures - all values masked</caption><tbody>
    <tr><td>Assets disposed of in the preceding thirty-six months</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>Assets held jointly, and the extent of the share stated</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>Contingent liabilities and guarantees given</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
    <tr><td>Income declared in the return for the latest assessment year</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr>
  </tbody></table>
  <p>The assets and liabilities stated above are as disclosed by the applicant and verified
  against the records produced before us. Where an asset is held jointly, the extent of the
  applicant's share is stated as disclosed.</p>
  <p>On the basis of our examination and the information and explanations given to us, we
  certify that the net worth of <span class="b">XXXXX XXXXXX XXXXXXXXX</span> as at <span class="b">XX XXXXX XXXX</span> is
  <b>INR <span class="b">X,XX,XX,XXX</span></b> (Rupees <span class="b">XXX XXXXX XXXXX XXXX XXXX</span> only).</p>
  <p>This certificate is issued at the request of the applicant for the purpose of submission
  before the Hon'ble Court in the proceedings referred to above, and is not to be used,
  referred to or distributed for any other purpose or to any other party without our prior
  written consent.</p>
  <p>The preparation of the Statement is the responsibility of the applicant, including the completeness of the assets and liabilities disclosed. Our responsibility is to certify the Statement on the basis of the records produced before us. We express no opinion on the ownership, valuation or divisibility of any asset, which are matters for the Hon'ble Court.</p>
  <p>We conducted our examination in accordance with the Guidance Note on Reports or Certificates for Special Purposes issued by the Institute of Chartered Accountants of India, which requires that we comply with the ethical requirements of the Code of Ethics. We have complied with the relevant requirements of the Standard on Quality Control (SQC) 1.</p>
  <footer class="nwc-spec__sign">
    <div>Place: <span class="b">XXXX</span><br>Date: <span class="b">XX/XX/XXXX</span><br>UDIN: <span class="b">XXXXXXXXXXXXXXXXXX</span></div>
    <div class="rt">
      <span class="for">For</span>
      <span class="nm"><span class="b">XXXXXX XXXXX &amp; XXXXXXXXXX</span></span>
      <span class="desig">Chartered Accountants</span>
      <span>FRN: <span class="b">XXXXXXX</span></span>
      <div class="nwc-spec__sig"></div>
      <div><span class="b">XX XXXXXX XXXXX</span><br>Partner &middot; Membership No.: <span class="b">XXXXXX</span></div>
    </div>
  </footer>
</article></div>
            <span class="specimen-zoom">Click to enlarge</span>
          </div>
          <p class="specimen-hint">
            <span>Tap the sample to open it full size</span>
            <button type="button" class="specimen-open" id="specimenOpen">Open full size</button>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="specimen-lightbox" id="specimenLightbox" aria-hidden="true" role="dialog" aria-label="Sample document, full size">
    <button type="button" class="specimen-lightbox__close" aria-label="Close">&times;</button>
    <div class="specimen-lightbox__inner"></div>
  </div>
</section>

<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Is Asked for a Court-Ready Statement</h2>
            <div class="why-patron-grid is-4">
                <div><strong>Disclosure Has Been Directed or Expected</strong><p>Maintenance or settlement proceedings require an affidavit of assets and liabilities. The schedule behind it has to be built from documents, because it will be read by someone looking for what is absent.</p></div>
                <div><strong>A Business Interest Is Involved</strong><p>A shareholding in a private company or a share in a firm has no market price. The basis chosen decides the figure, and it will be contested by whoever that basis does not suit.</p></div>
                <div><strong>Assets Are Held Jointly or Elsewhere</strong><p>Property in joint names, holdings in a family member's name, or contributions to an asset registered to somebody else. Each needs stating on its own terms rather than absorbing quietly into a total.</p></div>
                <div><strong>The Other Side's Figures Are Contested</strong><p>A statement has been filed that appears incomplete or optimistic. Responding to it requires your own position documented to the same standard it will itself be tested against.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Court Net Worth Statement Service: What You Receive</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What&#x27;s included</th><th>Frequency</th></tr></thead>
                    <tbody>
                        <tr><td>Statement of assets, liabilities and income</td><td>A net worth statement covering all three limbs, since a divorce is weighed on earning ability as much as on what is owned; <a href="/net-worth-certificate-by-ca">the full certificate directory</a>.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td><a href="/blog/how-to-calculate-net-worth-for-a-net-worth-certificate">Valuation basis</a> declaration</td><td>The basis used for anything without a market price stated on the face of the schedule, since a valuation whose reasoning is invisible is the one attacked.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Joint and indirect holding schedule</td><td>Property held jointly, anything standing in a relative's name, and money you put into assets registered to someone else.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Expenditure schedule</td><td>Monthly household and personal outgoings presented alongside income, which is the limb most often missing from a schedule prepared without help.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Affidavit-ready formatting</td><td>The statement laid out to support the disclosure affidavit rather than as a free-form list the other side can pick apart.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Retained working paper file</td><td>The basis behind every figure kept in full, because it may be questioned long after the statement was filed.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Updated statement for a later hearing</td><td>A refreshed schedule where proceedings run on and the court wants the position as at a more recent date.</td><td><span class="badge-included">On request</span></td></tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How We Issue a Net Worth Statement for Court, Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Six steps from the scope conversation to a signed certificate carrying a UDIN.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Scope and limitations set</h3>
    <p class="step-description">We agree what is being examined and, as importantly, what is not. The scope appears on the statement itself, so nobody can later suggest that something outside it was quietly overlooked rather than deliberately excluded.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/step-1-scope-and-limitations-set.webp" alt="We agree what is being examined and, as importantly, what is not" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Every entry documented</h3>
    <p class="step-description">Each asset and liability is supported by a document rather than an assertion, because the schedule will be read by somebody looking for the gap. Where a document cannot be produced, the statement records that fact instead of omitting the item.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/step-2-every-entry-documented.webp" alt="Each asset and liability is supported by a document rather than an assertion" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Valuation bases declared</h3>
    <p class="step-description">For anything without a market price the basis used is stated on the face of the schedule. A shareholding in a private company valued on one basis rather than another is defensible only where the choice and its reasoning are visible.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/step-3-valuation-bases-declared.webp" alt="For anything without a market price the basis used is stated on the face of the schedule" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Joint and indirect holdings separated</h3>
    <p class="step-description">Property in joint names, holdings in another's name and contributions to assets registered elsewhere are each set out on their own terms. Folding them into a single total is what invites the cross-examination the schedule exists to survive.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/step-4-joint-and-indirect-holdings-separated.webp" alt="Property in joint names, holdings in another's name and contributions to assets registered elsewhere are each set out on" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Income schedule prepared</h3>
    <p class="step-description">Income is presented alongside assets and liabilities, since maintenance proceedings turn on capacity as much as on holdings. The affidavit format the courts expect asks for all three together rather than any one alone.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/step-5-income-schedule-prepared.webp" alt="Income is presented alongside assets and liabilities, since maintenance proceedings turn on capacity as much as on holdings" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Signed for filing</h3>
    <p class="step-description">The statement is signed by a practising chartered accountant with a <a href="/blog/how-to-verify-a-net-worth-certificate">UDIN</a>, in a form that supports the disclosure affidavit. Working papers are retained in full, because the basis behind any figure may be questioned later.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-divorce/step-6-signed-for-filing.webp" alt="The statement is signed by a practising chartered accountant with a UDIN, in a form that supports the disclosure affidavit" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
        </div>
    </div>
</section>

<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for a Net Worth Statement for Court</h2>
            <div class="content-text">
                <p>Everything below is source material rather than a summary, because each figure in the statement is traced back to the record that governs it.</p>
                <ul>
                    <li><a href="/income-tax-return">Income tax returns</a> with the computation of income for the last three years</li>
                    <li>Form 16 and salary slips, or the statement of professional receipts</li>
                    <li>Bank statements for every account for the last three years</li>
                    <li>Registered title documents for every immovable property, including those held jointly</li>
                    <li>Demat holding statement, mutual fund statements and any portfolio account statement</li>
                    <li>Details of shareholding in private companies, with the latest <a href="/statutory-audit">audited accounts</a> of each</li>
                    <li>Loan statements, sanction letters and details of any guarantee given</li>
                    <li>Insurance policies with surrender values, and PPF, EPF and NPS statements</li>
                    <li>Details of any asset in a relative's name to which you contributed</li>
                    <li>Statement of monthly household and personal expenditure</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Court Net Worth Statement Problems and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Why it happens</th><th>How it is handled</th></tr></thead>
                    <tbody>
                        <tr><td>Assets standing in a relative's name left out</td><td>They are not legally yours, so leaving them out feels correct, until the other side produces the bank trail that funded them.</td><td>Indirect holdings and contributions to assets registered elsewhere are set out openly, which is far safer than having them discovered; <a href="/net-worth-certificate-by-ca">the full range of certificate types</a>.</td></tr>
                        <tr><td>No basis given for a private company shareholding</td><td>There is no market price, so a number gets chosen, and the reasoning behind it stays in somebody's head.</td><td>The basis appears in the schedule itself, since a figure nobody can follow back is the entry opposing counsel will target first.</td></tr>
                        <tr><td>Income left out of a statement about assets</td><td>The request is usually framed as a net worth question, so the answer arrives as a list of holdings.</td><td>Assets, liabilities and income are prepared together, because a court assessing maintenance looks at what can be earned, not only at what is owned.</td></tr>
                        <tr><td>Only recent bank records produced</td><td>Six months is what a bank would ask for, and that expectation carries over into a matrimonial file.</td><td>Records are gathered over a longer period, because a transfer made in contemplation of proceedings is precisely what the schedule is read for.</td></tr>
                        <tr><td>Liabilities left understated on purpose</td><td>Showing less capacity feels tactically useful, and an informal borrowing from family leaves no paper to contradict it.</td><td>Liabilities are evidenced on the same footing as assets, because a schedule that collapses on one entry loses credibility on all of them.</td></tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Court Net Worth Statement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Plan</th><th>Fee</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Standard</strong> &mdash; One party, records available, holdings straightforward and no business interest to value.</td><td>Starting from INR 2499<br><span style="font-size:12px;color:var(--text-muted);">(Exl GST and Govt. Charges)</span></td></tr>
                        <tr><td><strong>Extended</strong> &mdash; A private company shareholding to value, indirect holdings to establish, or three years of records to assemble.</td><td>On quote</td></tr>
                        <tr><td><strong>Multiple certificates</strong> &mdash; An updated statement for a later hearing, prepared from refreshed records rather than the earlier one.</td><td>On quote</td></tr>
                    </tbody>
                </table>
                </div>
                <ul style="margin-top:14px;">
  <li>The fee covers one certificate speaking to one date. A later date is a fresh engagement on updated records, not a re-dating of the first.</li>
  <li>Goods and services tax and any government charge are additional, as the footnote on the table states.</li>
  <li>Where records have to be reconstructed before certification can begin, that work is quoted separately and agreed before it starts.</li>
  <li>City pages carry the same fee as the national service. Certification does not cost more in one city than in another.</li>
  <li>An On quote row means the scope decides the fee. It is not a higher tier waiting to be sold; some engagements simply cannot be priced before the records are seen.</li>
</ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees listed are indicative only and do not constitute a binding offer. The final amount depends on the scope of records to be examined.</p>
                <p style="margin-top:16px;"><strong>Get a free consultation &mdash; <a href="tel:+919459456700">Call +91 94594 56700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20statement%20for%20divorce" target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Why It Matters</div>
            <h2 class="section-title">Why a Net Worth Statement for Court Matters</h2>
        </div>
        <div class="features-grid">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
  <h3 class="feature-title">An Omission Found Later Costs More</h3>
  <p class="feature-text">An asset left out and discovered in cross-examination damages every figure that was disclosed correctly. Credibility, once questioned on one entry, is rarely restored for the rest of the schedule.</p>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
  <h3 class="feature-title">An Undisclosed Valuation Basis Is Attacked</h3>
  <p class="feature-text">A value stated without saying how it was arrived at invites the other side to propose their own basis unopposed. The court then has one reasoned figure in front of it, and it is not yours.</p>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
  <h3 class="feature-title">Estimates Presented as Facts Unravel</h3>
  <p class="feature-text">A figure offered with certainty it does not have will not survive questioning. Once one estimate is exposed as a guess, every other number in the schedule is treated as one until proved otherwise.</p>
</article>
        </div>
    </div>
</section>

<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Clients Choose Patron for Court Net Worth Statements</h2>
            <p class="section-intro">Five things you can check before you commission the certificate. Each is a claim with the proof behind it.</p>
            <div class="why-patron-grid">
                <div><strong>Holdings you do not legally own</strong><p>Property funded by you but registered elsewhere is where disclosure disputes concentrate. It is set out openly, because the alternative is having it produced by the other side later.</p></div>
                <div><strong>Built to the Rajnesh format</strong><p>Assets, liabilities and income are presented together in the form matrimonial proceedings expect following Rajnesh v. Neha (2020) 2 SCC 324, rather than as a bare list of what is owned.</p></div>
                <div><strong>Valuation basis stated, UDIN attached</strong><p>Anything without a market price carries the basis it was valued on, and the UDIN is checkable on the <a href="/blog/how-to-verify-a-net-worth-certificate">ICAI portal</a>, so neither the figure nor its author is open to doubt.</p></div>
                <div><strong>Working papers kept in full</strong><p>The reasoning behind each figure is retained, because a schedule that cannot be defended two years on is worth very little on the day it is filed.</p></div>
                <div><strong>Discretion as a matter of course</strong><p>A CA and CS team with 15+ years of certification work, accustomed to engagements where the schedule is read by somebody looking for what is missing from it.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope is confirmed in your engagement letter.</p>
        </div>
    </div>
</section>

<!-- Tool section follows the accounting cluster's house pattern, verified against the LIVE
     accounting-services-for-startups / -manufacturing / accounts-receivable-outsourcing pages
     in Patron Local: inlined and namespaced rather than an iframe; blue-lighter background;
     all styles scoped under #tool-section; an explicit Calculate button revealing a result
     panel; an action row after the result; a dataset init guard; and the
     "Open the full calculator" link last. -->
<section class="content-section" id="tool-section" style="background-color:var(--blue-lighter);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Draft Your Asset and Liability Schedule First</h2>
            <div class="content-text">
                <p>Set out assets, liabilities and income in the three columns the disclosure affidavit expects. The tool produces a draft schedule you can work through before the engagement, including the entries you are unsure about rather than only the ones you are certain of.</p>

                <style>
                /* Inlined and themed to this page's tokens (nwt- namespace) */
                #tool-section .nwt-wrap{--nwt-navy:var(--blue,#1B365D);--nwt-orange:var(--orange,#E8712C);--nwt-surface:var(--blue-lighter,#F4F7FB);--nwt-border:var(--gray-200,#E5E7EB);--nwt-muted:var(--text-muted,#6B7280);--nwt-mono:ui-monospace,SFMono-Regular,Menlo,Consolas,monospace;margin-top:22px;}
                #tool-section .nwt-card{background:#fff;border:1px solid var(--nwt-border);border-radius:16px;box-shadow:0 10px 30px rgba(27,54,93,.08);padding:28px;}
                #tool-section .nwt-title{font-size:20px;font-weight:700;color:var(--nwt-navy);margin:0 0 20px;line-height:1.3;}
                #tool-section .nwt-label{display:block;font-size:12px;font-weight:700;color:var(--nwt-muted);text-transform:uppercase;letter-spacing:.5px;margin-bottom:7px;}
                #tool-section .nwt-field{margin-bottom:18px;}
                #tool-section .nwt-toggle{display:flex;gap:4px;background:var(--nwt-surface);border-radius:10px;padding:4px;max-width:420px;}
                #tool-section .nwt-tbtn{flex:1;padding:10px 8px;border:0;border-radius:7px;font:inherit;font-size:14px;font-weight:700;color:var(--nwt-muted);background:transparent;cursor:pointer;transition:all .2s;}
                #tool-section .nwt-tbtn.active{background:#fff;color:var(--nwt-navy);box-shadow:0 1px 3px rgba(0,0,0,.1);}
                #tool-section .nwt-cols{display:grid;grid-template-columns:1fr 1fr;gap:28px;}
                #tool-section .nwt-col h4{font-size:14px;font-weight:700;color:var(--nwt-navy);margin:0 0 12px;padding-bottom:8px;border-bottom:2px solid var(--nwt-surface);}
                #tool-section .nwt-row{display:flex;justify-content:space-between;align-items:center;gap:12px;padding:5px 0;font-size:14px;}
                #tool-section .nwt-row label{flex:1;margin:0;}
                #tool-section .nwt-input{width:150px;padding:9px 12px;border:2px solid var(--nwt-border);border-radius:9px;font:inherit;font-size:15px;font-weight:700;font-family:var(--nwt-mono);color:var(--nwt-navy);background:var(--nwt-surface);text-align:right;outline:none;transition:border-color .2s;}
                #tool-section .nwt-input:focus{border-color:var(--nwt-navy);}
                #tool-section .nwt-calc{width:100%;margin-top:22px;padding:15px;border:0;border-radius:10px;background:var(--nwt-navy);color:#fff;font:inherit;font-size:16px;font-weight:700;cursor:pointer;transition:background .2s;}
                #tool-section .nwt-calc:hover{background:var(--nwt-orange);}
                #tool-section .nwt-result{display:none;margin-top:24px;padding-top:22px;border-top:1px solid var(--nwt-border);}
                #tool-section .nwt-result.show{display:block;}
                #tool-section .nwt-rgrid{display:grid;grid-template-columns:1fr 1fr;gap:14px;}
                #tool-section .nwt-rcard{background:var(--nwt-surface);border-radius:12px;padding:16px 18px;}
                #tool-section .nwt-rcard.full{grid-column:1/-1;background:var(--nwt-navy);}
                #tool-section .nwt-rcard.full .nwt-rlabel{color:rgba(255,255,255,.72);}
                #tool-section .nwt-rcard.full .nwt-rval{color:#fff;font-size:26px;}
                #tool-section .nwt-rlabel{font-size:12px;font-weight:700;color:var(--nwt-muted);text-transform:uppercase;letter-spacing:.5px;}
                #tool-section .nwt-rval{font-size:20px;font-weight:700;color:var(--nwt-navy);font-family:var(--nwt-mono);margin-top:6px;}
                #tool-section .nwt-break{margin-top:18px;}
                #tool-section .nwt-brow{display:flex;justify-content:space-between;gap:16px;padding:8px 0;border-bottom:1px dashed var(--nwt-border);font-size:14px;}
                #tool-section .nwt-blabel{color:var(--nwt-muted);}
                #tool-section .nwt-bval{font-family:var(--nwt-mono);font-weight:700;color:var(--nwt-navy);}
                #tool-section .nwt-actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:20px;}
                #tool-section .nwt-abtn{display:inline-flex;align-items:center;gap:7px;padding:10px 16px;border-radius:8px;background:var(--nwt-surface);color:var(--nwt-navy);font-size:13.5px;font-weight:700;text-decoration:none;line-height:1;}
                #tool-section .nwt-abtn:hover{background:var(--nwt-navy);color:#fff;}
                #tool-section .nwt-abtn svg{width:15px;height:15px;flex-shrink:0;}
                #tool-section .nwt-reset{margin-top:16px;padding:9px 18px;border:1px solid var(--nwt-border);background:#fff;border-radius:50px;font:inherit;font-size:13.5px;font-weight:600;color:var(--nwt-muted);cursor:pointer;}
                #tool-section .nwt-note{font-size:13px;color:var(--nwt-muted);margin-top:16px;}
                @media(max-width:760px){#tool-section .nwt-cols{grid-template-columns:1fr;gap:22px;}
                  #tool-section .nwt-rgrid{grid-template-columns:1fr;}
                  #tool-section .nwt-card{padding:20px;}
                  #tool-section .nwt-input{width:120px;}}

                #tool-section .nwt-cols--3{grid-template-columns:repeat(3,minmax(0,1fr));}
                #tool-section .nwt-cols--4{grid-template-columns:repeat(2,minmax(0,1fr));}
                #tool-section .nwt-compare{margin-top:18px;padding-top:16px;border-top:1px dashed var(--nwt-border);}
                #tool-section .nwt-splitwrap{overflow-x:auto;margin-top:20px;}
                /* table-layout:fixed with the inputs at width:100%. Left to auto layout the
                   inputs kept their own 130px while the cells stretched to a quarter of a
                   1320px column each, so every row was a small box against 300px of blank
                   cell - which is what the partner table shipped as. */
                #tool-section .nwt-split{width:100%;table-layout:fixed;border-collapse:collapse;font-size:14px;}
                #tool-section .nwt-split th{text-align:left;font-size:12px;font-weight:700;color:var(--nwt-muted);text-transform:uppercase;letter-spacing:.4px;padding:8px 10px 10px 0;border-bottom:2px solid var(--nwt-surface);}
                #tool-section .nwt-split thead th{background:var(--nwt-navy);color:#fff;padding:12px 14px;}
                #tool-section .nwt-split thead th:first-child{border-radius:8px 0 0 0;}
                #tool-section .nwt-split thead th:last-child{border-radius:0 8px 0 0;}
                #tool-section .nwt-split col.nwt-c1{width:22%;}
                #tool-section .nwt-split tbody th{font-size:14px;text-transform:none;letter-spacing:0;color:var(--nwt-navy);border-bottom:1px solid var(--nwt-border);padding:8px 14px 8px 4px;}
                #tool-section .nwt-split td{padding:8px 14px 8px 0;border-bottom:1px solid var(--nwt-border);}
                #tool-section .nwt-split td:last-child{padding-right:4px;}
                #tool-section .nwt-split .nwt-input{width:100%;}
                #tool-section .nwt-split tbody tr:nth-child(even){background:var(--nwt-surface);}
                @media(max-width:900px){#tool-section .nwt-cols--3{grid-template-columns:1fr 1fr;}}
                @media(max-width:760px){#tool-section .nwt-cols--3,#tool-section .nwt-cols--4{grid-template-columns:1fr;}
                  #tool-section .nwt-split{table-layout:auto;min-width:520px;}
                  #tool-section .nwt-split col.nwt-c1{width:auto;}}
                </style>

                <div class="nwt-wrap">
                    <div class="nwt-card">
                        <h3 class="nwt-title">Free tool: Asset and Liability Schedule</h3>

                        <div class="nwt-field">
                            <span class="nwt-label">Amounts entered in</span>
                            <div class="nwt-toggle" id="nwtUnit" role="group" aria-label="Unit">
                                <button type="button" class="nwt-tbtn active" data-unit="rupees">&#8377; Rupees</button>
                                <button type="button" class="nwt-tbtn" data-unit="lakh">&#8377; Lakh</button>
                                <button type="button" class="nwt-tbtn" data-unit="crore">&#8377; Crore</button>
                            </div>
                        </div>

                        <div class="nwt-cols nwt-cols--3">
                            <div class="nwt-col">
                                <h4>Assets</h4>
                                <div class="nwt-row"><label for="nwt-g0-0">Immovable property</label><input class="nwt-input" type="text" id="nwt-g0-0" data-nwt="g0" data-name="Immovable property" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-1">Bank balances</label><input class="nwt-input" type="text" id="nwt-g0-1" data-nwt="g0" data-name="Bank balances" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-2">Fixed and term deposits</label><input class="nwt-input" type="text" id="nwt-g0-2" data-nwt="g0" data-name="Fixed and term deposits" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-3">Shares, mutual funds and securities</label><input class="nwt-input" type="text" id="nwt-g0-3" data-nwt="g0" data-name="Shares, mutual funds and securities" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-4">Business or partnership interest</label><input class="nwt-input" type="text" id="nwt-g0-4" data-nwt="g0" data-name="Business or partnership interest" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-5">Jewellery and other valuables</label><input class="nwt-input" type="text" id="nwt-g0-5" data-nwt="g0" data-name="Jewellery and other valuables" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-6">Vehicles</label><input class="nwt-input" type="text" id="nwt-g0-6" data-nwt="g0" data-name="Vehicles" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                            </div>
                            <div class="nwt-col">
                                <h4>Liabilities</h4>
                                <div class="nwt-row"><label for="nwt-g1-0">Housing loan outstanding</label><input class="nwt-input" type="text" id="nwt-g1-0" data-nwt="g1" data-name="Housing loan outstanding" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-1">Vehicle loan outstanding</label><input class="nwt-input" type="text" id="nwt-g1-1" data-nwt="g1" data-name="Vehicle loan outstanding" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-2">Personal and business loans</label><input class="nwt-input" type="text" id="nwt-g1-2" data-nwt="g1" data-name="Personal and business loans" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-3">Other liabilities</label><input class="nwt-input" type="text" id="nwt-g1-3" data-nwt="g1" data-name="Other liabilities" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                            </div>
                            <div class="nwt-col">
                                <h4>Income for the year (memo, stated separately)</h4>
                                <div class="nwt-row"><label for="nwt-g2-0">Salary or professional income</label><input class="nwt-input" type="text" id="nwt-g2-0" data-nwt="g2" data-name="Salary or professional income" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g2-1">Business income</label><input class="nwt-input" type="text" id="nwt-g2-1" data-nwt="g2" data-name="Business income" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g2-2">Rental income</label><input class="nwt-input" type="text" id="nwt-g2-2" data-nwt="g2" data-name="Rental income" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g2-3">Interest and dividend income</label><input class="nwt-input" type="text" id="nwt-g2-3" data-nwt="g2" data-name="Interest and dividend income" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                            </div>
                        </div>

                        <button type="button" class="nwt-calc" id="nwtCalc">Calculate</button>

                        <div class="nwt-result" id="nwtResult">
                            <div class="nwt-rgrid">
                                <div class="nwt-rcard"><div class="nwt-rlabel">Total assets</div><div class="nwt-rval" id="nwtA">&mdash;</div></div>
                                <div class="nwt-rcard"><div class="nwt-rlabel">Total liabilities</div><div class="nwt-rval" id="nwtB">&mdash;</div></div>
                                <div class="nwt-rcard"><div class="nwt-rlabel">Annual income (disclosed separately, never netted)</div><div class="nwt-rval" id="nwtMemo">&mdash;</div></div>
                                <div class="nwt-rcard full"><div class="nwt-rlabel">Net worth for the schedule</div><div class="nwt-rval" id="nwtNet">&mdash;</div></div>
                                
                            </div>
                            <div class="nwt-break" id="nwtBreak"></div>
                            <div class="nwt-actions">
                                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20statement%20for%20divorce" target="_blank" rel="noopener" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="#25D366" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a>
                                <a href="/tools/net-worth-calculator" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg> Net Worth Calculator</a>
                            </div>
                            <button type="button" class="nwt-reset" id="nwtReset">&#8635; Reset Calculator</button>
                        </div>

                        <p class="nwt-note">Income is stated separately because the affidavit asks for it as its own column, not as part of net worth. Enter the entries you are unsure about too; a draft with a question against a line is more use to a CA than a tidy one that omits it. An estimate carrying no UDIN.</p>
                    </div>
                </div>

                <script>

                (function(){
                    var root = document.getElementById('tool-section');
                    if(!root || root.dataset.nwtInit) return;
                    root.dataset.nwtInit = '1';
                    var unit = 'rupees';
                    function mult(){ return unit === 'crore' ? 1e7 : unit === 'lakh' ? 1e5 : 1; }
                    function parseINR(raw){ if(raw==null) return NaN; var c=String(raw).replace(/[,\s\u20B9]/g,''); if(c==='') return NaN; var n=parseFloat(c); return isFinite(n)?n:NaN; }
                    function money(n){ var s='\u20B9'+Math.round(Math.abs(n)).toLocaleString('en-IN'); return n<0 ? '-'+s : s; }
                    function row(l,v){ return '<div class="nwt-brow"><span class="nwt-blabel">'+l+'</span><span class="nwt-bval">'+v+'</span></div>'; }
                    function $(id){ return document.getElementById(id); }
                    function show(){ var rs=$('nwtResult'); rs.classList.add('show'); rs.scrollIntoView({behavior:'smooth', block:'nearest'}); }

                    var unitBar = root.querySelector('#nwtUnit');
                    if(unitBar){
                        unitBar.querySelectorAll('.nwt-tbtn').forEach(function(b){
                            b.addEventListener('click', function(){
                                unit = b.dataset.unit;
                                unitBar.querySelectorAll('.nwt-tbtn').forEach(function(x){ x.classList.remove('active'); });
                                b.classList.add('active');
                            });
                        });
                    }

                    var SIGNS = [1,-1,0], DED10 = [0,0,0], NOF10 = false;
                    function calculate(){
                        var m = mult(), plus = 0, minus = 0, memo = 0, rows = '';
                        var gt = [];
                        SIGNS.forEach(function(s, gi){
                            var sub = 0, block = '';
                            root.querySelectorAll('[data-nwt="g'+gi+'"]').forEach(function(i){
                                var v = parseINR(i.value);
                                if(!isFinite(v) || v <= 0) return;
                                sub += v*m;
                                block += row(i.dataset.name, (s < 0 ? '-' : '') + money(v*m));
                            });
                            gt[gi] = sub;
                            if(s > 0){ plus += sub; } else if(s < 0){ minus += sub; } else { memo += sub; }
                            rows += block;
                        });
                        var subtotal = plus - minus;
                        var ded = 0;
                        if(NOF10){
                            var exposure = 0;
                            DED10.forEach(function(f, gi){ if(f) exposure += gt[gi]; });
                            var cap = subtotal * 0.10;
                            ded = Math.max(0, exposure - cap);
                            rows += row('<a href="/net-owned-fund-certificate-for-nbfc">Owned funds</a>', money(subtotal));
                            rows += row('Exposure to group and subsidiary companies', money(exposure));
                            rows += row('Ten per cent of owned funds', money(cap));
                            rows += row('Deducted: exposure above ten per cent', '-' + money(ded));
                        }
                        var net = subtotal - ded;
                        $('nwtA').textContent = money(plus);
                        $('nwtB').textContent = money(minus);
                        if($('nwtSub')) $('nwtSub').textContent = money(subtotal);
                        if($('nwtMemo')) $('nwtMemo').textContent = money(memo);
                        $('nwtNet').textContent = money(net);
                        if($('nwtCmp')){
                            var target = parseINR($('nwt-cmp').value) * m;
                            if(isFinite(target) && target !== 0){
                                var diff = net - target;
                                $('nwtCmpLabel').textContent = diff >= 0 ? '' : '';
                                $('nwtCmp').textContent = money(Math.abs(diff));
                                rows += row('', money(target));
                            } else {
                                $('nwtCmpLabel').textContent = 'Enter the figure to compare against';
                                $('nwtCmp').textContent = '\u2014';
                            }
                        }
                        $('nwtBreak').innerHTML = rows
                            ? rows + row('<strong>Net worth for the schedule</strong>', '<strong>' + money(net) + '</strong>')
                            : '';
                        show();
                    }

                    $('nwtCalc').addEventListener('click', calculate);
                    root.querySelector('.nwt-card').addEventListener('keydown', function(e){
                        if(e.key === 'Enter' && e.target.tagName === 'INPUT'){ e.preventDefault(); calculate(); }
                    });
                    $('nwtReset').addEventListener('click', function(){
                        root.querySelectorAll('.nwt-input').forEach(function(i){ i.value = ''; });
                        $('nwtResult').classList.remove('show');
                    });
                })();
                </script>

                <p style="margin-top:16px;font-size:14px;"><a href="/tools/company-net-worth-calculator" target="_blank" rel="noopener" style="color:var(--blue);font-weight:600;">Open the full calculator &#8599;</a></p>
                <p style="margin-top:10px;font-size:14px;">Go deeper: </p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Legal and Professional Framework Behind Court Net Worth Statements</h2>
            <div class="content-text">
                <p>Matrimonial proceedings do not ask for a <a href="/net-worth-certificate">net worth certificate</a> as such. They ask for disclosure, and the Supreme Court has prescribed the form that disclosure takes. A chartered accountant's statement exists to support that affidavit, not to replace it.</p>
                <p>The consequence is that the statement covers more than holdings. Income and expenditure belong in it too, because maintenance is assessed on capacity as much as on what is owned, and a schedule missing a limb is incomplete rather than merely brief.</p>
                <ul class="al-list">
                    <li><span class="al-t"><strong>Rajnesh v. Neha, Supreme Court of India, judgment dated 4 November 2020</strong></span><span class="al-d">directs that an affidavit disclosing assets, liabilities, income and expenditure be filed in all maintenance proceedings, and that affidavit is what the accountant's statement is prepared to support.</span></li>
                    <li><span class="al-t"><strong>Section 139, Income-tax Act 1961</strong></span><span class="al-d">produces the returns the other side will obtain in any event, so the statement is prepared to sit consistently with them rather than to be read against them.</span></li>
                    <li><span class="al-t"><strong>Section 203, Income-tax Act 1961 read with Rule 31, Income-tax Rules 1962</strong></span><span class="al-d">prescribes Form 16, which evidences salaried income for the income limb of the affidavit where the party is employed.</span></li>
                    <li><span class="al-t"><strong>Section 88, Companies Act 2013</strong></span><span class="al-d">requires a company to keep a register of members, which is how a shareholding in a private company is established where it is disputed.</span></li>
                    <li><span class="al-t"><strong>Section 17, Registration Act 1908</strong></span><span class="al-d">makes the registered instrument the evidence of title, including for property held jointly, which is set out on its own terms rather than folded into a single total.</span></li>
                    <li><span class="al-t"><strong>SQC 1, on engagement documentation and retention</strong></span><span class="al-d">requires the working papers to be retained, which matters unusually here because the basis for a figure may be questioned years after the statement was filed.</span></li>
                </ul>
                <p style="margin-top:20px;padding-top:16px;border-top:1px solid var(--gray-200);font-size:13px;color:var(--text-muted);"><strong>Official sources:</strong> <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a> &middot; <a href="https://udin.icai.org" target="_blank" rel="noopener">ICAI UDIN Portal</a> &middot; <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> &middot; <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a></p>
            </div>
        </div>
    </div>
</section>

<section id="faq-section" class="content-section" style="background-color:#ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Court Net Worth Statement FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on what goes into the statement, how each figure is evidenced, and what the certificate does and does not say.</p>
                    <a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact">Still have a question? Talk to a CA &rarr;</a>
                    <div class="faq-enquiry">
  <h3 class="faq-enquiry__title">Ask about your certificate</h3>
  <p class="faq-enquiry__sub">Send your requirement for a scoped quote.</p>
  <a class="faq-enquiry__btn" href="#consultationFormCard">Get a Callback</a>
</div>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can the chartered accountant be called to depose about the statement?</h3>
  <div class="faq-expanded__a"><p>Yes. A statement filed in a matrimonial proceeding can be put to proof. The certifying member may be summoned to explain the basis of valuation and the evidence examined. This is why working papers matter more here than in a routine engagement, and why unsupported valuations are struck out of the schedule before signature.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does the statement have to be sworn before a notary or an oath commissioner?</h3>
  <div class="faq-expanded__a"><p>The party's disclosure is filed on affidavit, sworn before an oath commissioner or notary, and the chartered accountant's certificate is annexed to it. The two are distinct: the affidavit is the litigant's sworn word, the certificate is the professional's verification. Courts read them together and treat a bare affidavit as weaker.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can one spouse obtain a certificate of the other spouse's net worth?</h3>
  <div class="faq-expanded__a"><p>No chartered accountant can certify a person's affairs without that person's records and consent. What the other side can do is seek discovery. The court can direct the spouse to file the disclosure affidavit the Supreme Court made mandatory in maintenance proceedings in Rajnesh v. Neha. The remedy is procedural, not professional.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Are assets held in a Hindu undivided family included in a spouse's statement?</h3>
  <div class="faq-expanded__a"><p>The individual's share is disclosed, not the whole corpus. A coparcener's interest in an HUF is an undivided share that crystallises only on partition. So it is stated as an interest with the basis explained rather than as an owned asset. Courts expect the interest to be disclosed even though it cannot be valued precisely.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does stridhan appear on the statement?</h3>
  <div class="faq-expanded__a"><p>Yes, and it is listed separately. Stridhan is the woman's absolute property, and Indian courts have consistently held that the husband and his family hold it in trust and must return it. Because a return of stridhan is often claimed alongside maintenance, the statement itemises it rather than folding it into general assets.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What period of past transactions does the statement have to cover?</h3>
  <div class="faq-expanded__a"><p>The disclosure is a position on a date, but courts routinely look back further where dissipation is alleged. Three years of bank statements and returns is a common ask, and transfers made after the dispute arose are examined closely. The statement is therefore prepared with the transaction history behind it, not just the closing balances.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is the statement shared with the opposing party?</h3>
  <div class="faq-expanded__a"><p>Yes. The disclosure affidavit is served on the other side and forms part of the court record. So it is not a confidential document between the client and the CA. Anything stated in it can be cross-examined, which is why understating a liability or omitting an asset carries a far higher cost here than elsewhere.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can the figures be revised after the statement is filed?</h3>
  <div class="faq-expanded__a"><p>A supplementary affidavit can be filed with the court's leave, and the CA issues a revised certificate with a fresh date. What the revision cannot do is quietly replace the earlier document, since both remain on record. Courts read an unexplained revision as a credibility question rather than a clerical fix.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does a mutual consent settlement need a certified statement?</h3>
  <div class="faq-expanded__a"><p>It is not compulsory, but it protects the settlement. Section 13B of the Hindu Marriage Act 1955 provides for divorce by mutual consent. Where that settlement involves a lump sum or a transfer of property, a certified statement helps. It makes the bargain informed for both parties. Settlements later challenged for concealment are the ones that lacked it.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Are assets standing in the names of children or parents disclosed?</h3>
  <div class="faq-expanded__a"><p>They are disclosed where the party funded them or retains control, even though legal title sits elsewhere. Courts look at benami and nominee arrangements when testing a disclosure, and the Prohibition of Benami Property Transactions Act 1988 makes such holdings independently actionable. The statement notes them with the ownership position explained.</p></div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Court Net Worth Statement Deadlines That Cannot Slip</h2>
            <div class="content-text">
<p>The date belongs to the court. A schedule filed incomplete and corrected later costs considerably more credibility than the time it saved, because the correction is what gets examined. Assemble the records before the hearing rather than during it, including the entries you are unsure about. Call or WhatsApp <a href="tel:+919459456700">+91 94594 56700</a> to start.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Court Net Worth Statement with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
<p style="color:rgba(255,255,255,0.88);">A disclosure schedule is read by somebody looking for what is missing from it, so completeness protects you considerably better than restraint does. Indirect holdings, and contributions to assets standing in another name, belong in it rather than outside it. Bring what you have including the entries you are unsure about, and we will tell you which of them belong in the schedule and which properly sit outside its scope.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128222; Call +91 94594 56700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20statement%20for%20divorce" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20a%20Net%20Worth%20Statement%20for%20Divorce&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20net%20worth%20statement%20for%20divorce%20and%20would%20like%20to%20know%20more.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Speak to a chartered accountant at Patron on <a href="tel:+919459456700">+91 94594 56700</a>, by call or WhatsApp.</p>
        </div>
    </div>
</section>

<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:8px;">Related Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:36px;">Every certificate Patron issues in this practice.</p>
            <div class="pa-city-block">
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/net-worth-certificate" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-bank-loan" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Bank Loan</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-company" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Company</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-partnership-firms" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Partnership Firm</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-by-ca" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate by CA</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-sole-proprietorship" class="pa-cross-card"><div class="pa-card-title">CA Certificate for Proprietorship Firm</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Visa</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-rera-registration" class="pa-cross-card"><div class="pa-card-title">CA Certificate for RERA</div></a>
<a href="https://www.patronaccounting.com/solvency-certificate" class="pa-cross-card"><div class="pa-card-title">Solvency Certificate</div></a>
<a href="https://www.patronaccounting.com/net-owned-fund-certificate-for-nbfc" class="pa-cross-card"><div class="pa-card-title">Minimum Net Owned Fund for NBFC</div></a>
<a href="https://www.patronaccounting.com/glossary/networth" class="pa-cross-card"><div class="pa-card-title">Net Worth &amp; Solvency Glossary</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">More From Patron Accounting</div>
                <div class="pa-block-sub">Outside this practice, and mentioned on this page</div>
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-title">GST Registration</div></a>
<a href="https://www.patronaccounting.com/statutory-audit" class="pa-cross-card"><div class="pa-card-title">Statutory Audit</div></a>
<a href="https://www.patronaccounting.com/llp-incorporation" class="pa-cross-card"><div class="pa-card-title">LLP Incorporation</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">Read Next</div>
                <div class="pa-block-sub">The detail behind each figure on this page</div>
                <ul class="pa-read-list">
                    <li><a href="/blog/forensic-review-of-a-spouses-net-worth">Forensic Review of a Spouse&#x27;s Net Worth: What It Involves</a></li>
                    <li><a href="/blog/how-courts-use-net-worth-in-maintenance-cases">How Courts Use Net Worth in Maintenance and Alimony Cases</a></li>
                    <li><a href="/blog/how-to-write-a-statement-of-net-worth">How to Write a Statement of Net Worth for Court</a></li>
                    <li><a href="/blog/net-worth-disclosure-obligations-in-divorce">Net Worth Disclosure Obligations in Divorce</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="eeat-review-wrap"><div class="eeat-review">
  <div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div>
  <div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; certification &nbsp;&middot;&nbsp; Last reviewed 5 August 2026 &nbsp;&middot;&nbsp; Next review 5 November 2026</div>
  <div class="eeat-review__sources"><span>Official sources:</span> <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a><a href="https://udin.icai.org" target="_blank" rel="noopener">ICAI UDIN Portal</a><a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a></div>
</div></div>

</main>

{{-- Page JS. Kept HERE and deliberately NOT pushed to the scripts stack: the
     service-app layout renders that stack twice, so anything pushed to it
     loads twice. That is the accounting cluster's known porting bug. --}}
<script>
/* The bar pins fine on its own; what it did not do was follow the reader. This marks the
   section currently in view, keeps that pill scrolled into the strip, and wires the two
   arrows, which the standalone page has no layout JS to bind. */
(function(){
  var bar=document.querySelector('.toc-section'); if(!bar) return;
  var wrap=bar.querySelector('.toc-wrapper');
  var btns=[].slice.call(bar.querySelectorAll('.toc-btn'));
  if(!btns.length) return;
  var targets=btns.map(function(b){
    var id=(b.getAttribute('href')||'').slice(1);
    return id ? document.getElementById(id) : null;
  });

  function mark(i){
    if(btns[i].classList.contains('active')) return;
    btns.forEach(function(b){ b.classList.remove('active'); });
    btns[i].classList.add('active');
    // keep the active pill inside the horizontal strip without moving the page
    var r=btns[i].getBoundingClientRect(), w=wrap.getBoundingClientRect();
    if(r.left < w.left+8) wrap.scrollBy({left:r.left-w.left-16,behavior:'smooth'});
    else if(r.right > w.right-8) wrap.scrollBy({left:r.right-w.right+16,behavior:'smooth'});
  }

  var ticking=false;
  function spy(){
    ticking=false;
    // a quarter-viewport below the bar, not right under it: with the bar's own
    // 88px plus a section's lead paragraph, a line hugging the bar flips the pill
    // while the previous section still fills most of the screen
    var line=bar.getBoundingClientRect().bottom + window.innerHeight*0.25, best=0;
    for(var i=0;i<targets.length;i++){
      if(targets[i] && targets[i].getBoundingClientRect().top <= line) best=i;
    }
    // at the very bottom the last section may never cross the line
    if(window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 4)
      best=targets.length-1;
    mark(best);
  }
  window.addEventListener('scroll',function(){
    if(!ticking){ ticking=true; window.requestAnimationFrame(spy); }
  },{passive:true});
  window.addEventListener('resize',spy,{passive:true});
  spy();

  function nudge(dir){ wrap.scrollBy({left:dir*Math.round(wrap.clientWidth*0.7),behavior:'smooth'}); }
  var l=document.getElementById('tocLeft'), r2=document.getElementById('tocRight');
  if(l) l.addEventListener('click',function(){nudge(-1);});
  if(r2) r2.addEventListener('click',function(){nudge(1);});
})();
</script>
<script></script>
<script>
/* Same behaviour as the accounting cluster's slick config - 4/3/2/1 across, autoplay 4500ms
   (3000 on mobile), no arrows, pause on hover and on focus, swipe - but written against
   scroll-snap so the standalone page needs neither jQuery nor Slick. */
(function(){
  var box=document.getElementById('testiSlider'); if(!box) return;
  var track=box.querySelector('.nwc-slider__track');
  var slides=track.querySelectorAll('.nwc-slide'); if(!slides.length) return;
  function step(){ var a=slides[0].getBoundingClientRect().width;
    return a + parseFloat(getComputedStyle(track).gap||20); }
  function atEnd(){ return track.scrollLeft + track.clientWidth >= track.scrollWidth - 4; }
  function go(dir){
    if(dir>0 && atEnd()) track.scrollTo({left:0});
    else track.scrollBy({left:dir*step()});
  }
  var timer=null, held=false;
  function speed(){ return window.matchMedia('(max-width:600px)').matches ? 3000 : 4500; }
  function play(){ if(timer) return; timer=setInterval(function(){ if(!held) go(1); },speed()); }
  function hold(v){ held=v; }
  box.addEventListener('mouseenter',function(){hold(true);});
  box.addEventListener('mouseleave',function(){hold(false);});
  box.addEventListener('focusin',function(){hold(true);});
  box.addEventListener('focusout',function(){hold(false);});

  // click a video to play it, exactly as toggleTestiVideo does on the accounting pages:
  // any other video pauses first, and the slider holds while one is running
  track.querySelectorAll('.testi-video-area').forEach(function(area){
    var v=area.querySelector('video'); if(!v) return;
    area.addEventListener('click',function(){
      if(v.paused){
        track.querySelectorAll('.testi-video-area video').forEach(function(o){
          o.pause(); o.parentElement.classList.remove('playing'); });
        v.play(); area.classList.add('playing');
      } else { v.pause(); area.classList.remove('playing'); }
    });
    v.addEventListener('play',function(){hold(true);});
    v.addEventListener('pause',function(){hold(false); area.classList.remove('playing');});
    v.addEventListener('ended',function(){hold(false); area.classList.remove('playing');});
  });
  if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches) play();
})();
</script>
<script>
(function(){
  var stack=document.getElementById('specimenStack'),
      frame=document.getElementById('specimenFrame'),
      lb=document.getElementById('specimenLightbox');
  if(!stack||!frame||!lb) return;
  var tabs=stack.querySelectorAll('.specimen-tab'),
      docs=frame.querySelectorAll('.specimen-doc'),
      panes=document.querySelectorAll('.specimen-pane'),
      n=tabs.length, at=0, timer=null, paused=false, stopped=false;

  function show(i){
    at=i;
    for(var k=0;k<n;k++){
      var on=(k===i);
      tabs[k].classList.toggle('is-active',on);
      tabs[k].setAttribute('aria-selected',on?'true':'false');
      if(docs[k]) docs[k].classList.toggle('is-active',on);
      if(panes[k]) panes[k].classList.toggle('is-active',on);
    }
    if(typeof window.__nwcSpecFit==='function') window.__nwcSpecFit();
  }
  // auto-advance so a reader who never touches the tabs still sees both samples
  function play(){ if(timer||n<2) return; timer=setInterval(function(){
    if(!paused && !stopped) show((at+1)%n); },7000); }
  function stop(){ stopped=true; if(timer){ clearInterval(timer); timer=null; } }

  for(var i=0;i<n;i++){ (function(i){
    tabs[i].addEventListener('click',function(){ stop(); show(i); });
  })(i); }
  stack.addEventListener('mouseenter',function(){ paused=true; });
  stack.addEventListener('mouseleave',function(){ paused=false; });
  stack.addEventListener('focusin',function(){ paused=true; });
  stack.addEventListener('focusout',function(){ paused=false; });
  if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches) play();

  // scale the sample to fit the frame exactly, at any screen size
  // Fit the WIDTH. Capping by viewport height as well was tried and reverted: it shrank the
  // sample to fit one screen, which made it unreadable at every size to solve a problem
  // nobody had - a long document scrolling with the page is normal.
  function fit(){
    var doc=frame.querySelector('.specimen-doc.is-active'); if(!doc) return;
    frame.style.zoom=1;                                   // measure unscaled
    var cs=getComputedStyle(frame);
    var avail=frame.clientWidth
              - parseFloat(cs.paddingLeft) - parseFloat(cs.paddingRight);
    var natural=Math.max(doc.scrollWidth, doc.getBoundingClientRect().width);
    frame.style.zoom = (natural>0 && avail>0) ? Math.min(1, avail/natural) : '';
  }
  var rt=null;
  window.addEventListener('resize',function(){ clearTimeout(rt); rt=setTimeout(fit,120); });
  if(window.ResizeObserver) new ResizeObserver(function(){ fit(); }).observe(frame.parentNode);
  window.__nwcSpecFit=fit;
  fit();

  var inner=lb.querySelector('.specimen-lightbox__inner');
  function open(){
    var live=frame.querySelector('.specimen-doc.is-active');
    if(!live) return;
    // the watermark <pattern> carries an id; suffix it so the clone cannot collide
    // with the one still in the page and blank both fills out
    inner.innerHTML=live.innerHTML.replace(/nwcwm-(\d+)/g,'nwcwm-$1-lb');
    lb.classList.add('is-open'); lb.setAttribute('aria-hidden','false');
    document.body.style.overflow='hidden';
    // measured AFTER is-open: the lightbox is display:none until then, so clientWidth is 0
    // and the scale comes out negative. Fits the full-size view to the viewport width;
    // a no-op at zoom 1 on a wide screen.
    inner.style.setProperty('--lb-zoom', Math.min(1, (lb.clientWidth-32)/880));
  }
  function shut(){
    lb.classList.remove('is-open'); lb.setAttribute('aria-hidden','true');
    document.body.style.overflow=''; inner.innerHTML='';
  }
  frame.addEventListener('click',open);
  frame.addEventListener('keydown',function(e){
    if(e.key==='Enter'||e.key===' '){ e.preventDefault(); open(); }});
  var openBtn=document.getElementById('specimenOpen');
  if(openBtn) openBtn.addEventListener('click',function(e){ e.stopPropagation(); open(); });
  lb.addEventListener('click',function(e){
    if(e.target===lb||e.target.classList.contains('specimen-lightbox__close')) shut();});
  document.addEventListener('keydown',function(e){
    if(e.key==='Escape'&&lb.classList.contains('is-open')) shut();});
})();
</script>
<script></script>
@endsection
