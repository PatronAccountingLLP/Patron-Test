{{-- /net-worth-certificate-by-ca
     Generated from Generated Pages/net-worth-certificate-by-ca/net-worth-certificate-by-ca.html by Scripts/build_blade.py.
     That file is built from the cluster's signed-off workbooks by build_page.py;
     nothing here is authored. Re-run both rather than editing this file.

     Before this goes live:
       - deploy public/images/networth-cluster/net-worth-certificate-by-ca/** and public/certificates/**
       - deploy public/css/nwc-spec.css (new to Patron Local)
       - patron-cluster.css and faq.css are already live; do not overwrite them
       - the hero form is partials/enquiry-form.blade.php (Zoho Bigin), swapped in
         at build time with this page's service pre-selected; the FAQ block is a
         CTA that scrolls to it, so there is one Bigin form per page. --}}
@extends('layouts.service-app')

@section('meta')
    <title>Net Worth and Solvency Certificates by a CA in India</title>
    <meta name="description" content="Every net worth, solvency and net owned fund certificate a chartered accountant issues, with a chooser to point you at the document your acceptor asked for.">
    <link rel="canonical" href="https://www.patronaccounting.com/net-worth-certificate-by-ca">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Every CA-Issued Net Worth Certificate, in One Directory">
    <meta property="og:description" content="Not sure which certificate you need? Patron Accounting's directory routes you to the right document in a click.">
    <meta property="og:url" content="https://www.patronaccounting.com/net-worth-certificate-by-ca">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/networth-cluster/og/net-worth-certificate-by-ca.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Every CA-Issued Net Worth Certificate, in One Directory">
    <meta name="twitter:description" content="Not sure which certificate you need? Patron Accounting's directory routes you to the right document in a click.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/networth-cluster/og/net-worth-certificate-by-ca.jpg">
@endsection

@section('schema')
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "Service",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-by-ca#service",
   "name": "Net Worth and Solvency Certificates by a CA in India",
   "description": "Every net worth, solvency and net owned fund certificate a chartered accountant issues, with a chooser to point you at the document your acceptor asked for.",
   "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "areaServed": "India",
   "url": "https://www.patronaccounting.com/net-worth-certificate-by-ca"
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-by-ca#breadcrumb",
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
    }
   ]
  },
  {
   "@type": "WebPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-by-ca#webpage",
   "url": "https://www.patronaccounting.com/net-worth-certificate-by-ca",
   "name": "Net Worth and Solvency Certificates by a CA in India",
   "description": "Every net worth, solvency and net owned fund certificate a chartered accountant issues, with a chooser to point you at the document your acceptor asked for.",
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

/* ============================================================ the hub
   Values from patronmain's accounting-bookkeeping-services.blade.php, the file that serves
   the live /accounting-bookkeeping-services. Production sets them as inline style attributes
   on every element; the same values are set once here. */
body.is-hub{background:#F4F7FB}
.pahub{color:#1F2937}
.pahub a{text-decoration:none;color:inherit}
.hub-wrap{max-width:1320px;margin:0 auto;padding-left:24px;padding-right:24px}

/* --- navy utility strip: search, cities, rating --- */
.hub-top{background:#1B365D}
.hub-top__in{max-width:1320px;margin:0 auto;padding:12px 24px;display:flex;align-items:center;gap:22px}
.hub-top__search{position:relative;flex:1 1 auto;min-width:0}
.hub-top__search .ic{position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#8FA0BC;font-size:15px;pointer-events:none}
.hub-top__search input{width:100%;padding:10px 14px 10px 38px;font-family:inherit;font-size:14px;border:1px solid rgba(255,255,255,.16);border-radius:8px;background:rgba(255,255,255,.06);color:#fff;outline:none}
.hub-top__search input::placeholder{color:#8FA0BC}
.hub-top__search input:focus{border-color:#E8712C;background:rgba(255,255,255,.1)}
.hub-top__cities{display:flex;align-items:center;gap:6px;flex-shrink:0}
.hub-top__cities a{color:#fff;font-size:14px;font-weight:600;padding:4px 6px;border-radius:6px;text-decoration:none}
.hub-top__cities a:hover{color:#E8712C}
.hub-top__sep{color:#5B6E8C;font-size:12px}
.hub-top__rating{display:flex;align-items:center;gap:8px;background:#fff;border-radius:9px;padding:7px 13px;flex-shrink:0}
.hub-top__g{font-weight:700;font-size:14px;letter-spacing:-.3px}
.hub-top__stars{color:#FBBC05;font-size:13px;letter-spacing:1px}
.hub-top__score{font-weight:700;font-size:14px;color:#1B365D}

/* --- hero --- */
.hub-hero{background:linear-gradient(180deg,#FFFFFF 0%,#F7F9FC 100%);border-bottom:1px solid #E9EDF2}
.hub-hero__in{max-width:1320px;margin:0 auto;padding:40px 24px 44px;display:grid;
  grid-template-columns:1.2fr 380px;gap:48px;align-items:start}
.hub-eyebrow{display:flex;align-items:center;gap:8px;margin:0 0 14px;font-size:12px;font-weight:800;
  letter-spacing:1.1px;text-transform:uppercase;color:#E8712C}
.hub-eyebrow::before{content:"";width:7px;height:7px;border-radius:50%;background:#E8712C}
.hub-hero h1{margin:0 0 18px;font-size:clamp(30px,3.4vw,44px);font-weight:800;line-height:1.07;
  letter-spacing:-1px;color:#1B365D}
.hub-hero h1 .accent{color:#E8712C}
.hub-hero__search{position:relative;max-width:500px}
.hub-hero__search .ic{position:absolute;left:20px;top:50%;transform:translateY(-50%);color:#9AA6BC;font-size:19px;pointer-events:none}
.hub-hero__search input{width:100%;padding:16px 46px 16px 50px;font-family:inherit;font-size:15.5px;
  border:1.5px solid #E2E3E8;border-radius:50px;background:#fff;outline:none;color:#1F2937;
  box-shadow:0 10px 26px -16px rgba(27,54,93,0.18)}
.hub-hero__search input:focus{border-color:#E8712C}
.hub-hero__clear{position:absolute;right:16px;top:50%;transform:translateY(-50%);border:none;
  background:#EAECEF;width:26px;height:26px;border-radius:50%;cursor:pointer;color:#6B7280;font-size:16px;line-height:1}

/* --- the quote form, production's compact shape: placeholders not stacked labels, and the
       country code inline with the number. The service pages' form stacks an uppercase label
       over every field, which is twice the height and left a hole beside it here. --- */
.hub-form{background:#fff;border:1px solid #E7E8EC;border-radius:18px;padding:24px;
  box-shadow:0 24px 50px -30px rgba(27,54,93,0.3)}
.hub-form__t{font-size:17px;font-weight:800;color:#1B365D}
.hub-form__s{font-size:12.5px;color:#8A8F99;margin-bottom:14px}
.hub-form form{display:flex;flex-direction:column;gap:11px}
.hub-form input[type=text],.hub-form input[type=tel],.hub-form select{padding:12px 14px;
  border:1px solid #E2E3E8;border-radius:10px;font-family:inherit;font-size:14px;outline:none;
  color:#1F2937;background:#fff;width:100%}
.hub-form input:focus,.hub-form select:focus{border-color:#E8712C}
.hub-form__row{display:flex;gap:8px}
.hub-form__row .cc-select{flex:0 0 90px;padding:12px 8px;font-size:13.5px}
.hub-form__row .ph{flex:1;min-width:0}
.hub-form button{padding:14px;background:#E8712C;color:#fff;border:none;border-radius:50px;
  font-family:inherit;font-size:14.5px;font-weight:700;cursor:pointer}
.hub-form button:hover{background:#1B365D}
.hub-form__note{font-size:11.5px;color:#8A8F99;text-align:center;margin:12px 0 0}

/* --- browse-by chips under the search. Production fills this space with its software logo
       strip; Networth has no software dimension, so the same space carries the six category
       names - navigation, from the DIRECTORY workbook's own grid headings. --- */
.hub-chips{margin-top:26px;max-width:560px}
.hub-chips__t{font-size:11px;font-weight:700;letter-spacing:.7px;text-transform:uppercase;
  color:#9AA1AC;margin:0 0 12px}
.hub-chips__row{display:flex;flex-wrap:wrap;gap:10px}
.hub-chips__row a{display:flex;align-items:center;gap:9px;padding:11px 14px;background:#fff;
  border:1px solid #E7E8EC;border-radius:12px;font-size:13px;font-weight:600;color:#1B365D;
  text-decoration:none;transition:border-color .14s,box-shadow .14s,transform .14s}
.hub-chips__row a:hover{border-color:#E8712C;box-shadow:0 8px 20px -12px rgba(27,54,93,.3);
  transform:translateY(-2px)}
.hub-chips__row .chip{width:26px;height:26px;border-radius:7px}
.hub-chips__row .chip svg{width:15px;height:15px}
.hub-chips__row .n{color:#9AA1AC;font-size:11.5px;font-weight:700}

/* --- body: sidebar + cards --- */
.hub-body{display:flex;gap:26px;align-items:flex-start;padding:32px 0 64px}
.hub-side{width:290px;flex:0 0 290px;position:sticky;top:20px;max-height:calc(100vh - 40px);
  overflow-y:auto;background:#fff;border:1px solid #E7E8EC;border-radius:16px;padding:12px 10px;
  display:flex;flex-direction:column;gap:2px;box-shadow:0 1px 3px rgba(27,54,93,0.05)}
.hub-side__title{display:flex;align-items:center;gap:9px;padding:4px 6px 10px;font-size:11px;
  font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#9AA1AC}
.hub-side__all{display:flex;align-items:center;gap:11px;padding:9px;border-radius:9px;font-size:13.5px;
  font-weight:600;color:#1B365D;background:#FFF3EA;text-decoration:none}
.hub-side__all .chip{background:#FEE7D6;color:#E8712C}
.hub-side__lbl{font-size:10px;font-weight:800;text-transform:uppercase;letter-spacing:1px;
  color:#B4B8C0;padding:12px 10px 5px}
.chip{width:30px;height:30px;border-radius:8px;background:#F1F5FB;color:#1B365D;display:flex;
  align-items:center;justify-content:center;flex-shrink:0}
.chip svg{width:20px;height:20px}
.hub-side-cat{width:100%;text-align:left;background:transparent;border:none;cursor:pointer;display:flex;
  align-items:center;gap:11px;padding:9px;border-radius:9px;font-size:13px;font-weight:700;
  color:#1B365D;font-family:inherit}
.hub-side-cat:hover{background:#F6F8FB}
.hub-side-cat .nm{flex:1;line-height:1.25}
.hub-side-cat .ct{font-size:11px;color:#9AA1AC}
.hub-caret{flex-shrink:0;color:#9AA6BC;font-size:9px;transition:transform .18s;transform:rotate(90deg)}
.hub-side-items{display:flex;flex-direction:column;gap:1px;padding-bottom:6px}
.hub-side-items a{display:block;padding:5px 10px 5px 42px;font-size:11.5px;color:#5A6373;
  border-radius:7px;line-height:1.45;text-decoration:none}
.hub-side-items a:hover{background:#F6F8FB;color:#1B365D}
.hub-side__cta{display:block;margin-top:10px;padding:11px;border-radius:10px;background:#E8712C;
  color:#fff;text-align:center;font-size:13.5px;font-weight:700}
.hub-side__cta:hover{background:#1B365D;color:#fff}

.hub-main{flex:1;min-width:0}
.hub-cat{margin-bottom:34px;scroll-margin-top:150px}
.hub-cat__head{display:flex;align-items:center;gap:12px;margin-bottom:16px}
.hub-cat__ic{width:38px;height:38px;border-radius:11px;background:#FEE7D6;color:#E8712C;
  display:flex;align-items:center;justify-content:center;flex-shrink:0}
.hub-cat__ic svg{width:20px;height:20px}
.hub-cat h2{font-size:22px;font-weight:800;color:#1B365D;margin:0;letter-spacing:-.3px}
.hub-cards{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
.hub-card,.hub-side__cta{text-decoration:none}
.hub-card{display:flex;gap:14px;align-items:flex-start;padding:18px;background:#fff;
  border:1px solid #E7E8EC;border-radius:14px;position:relative;
  transition:transform .16s,box-shadow .16s,border-color .16s}
.hub-card:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(27,54,93,0.13);border-color:#E8712C}
.hub-card__ic{width:42px;height:42px;border-radius:11px;flex-shrink:0;display:flex;align-items:center;
  justify-content:center;background:#F1F5FB;color:#1B365D}
.hub-card__ic svg{width:20px;height:20px}
.hub-card__txt{flex:1;min-width:0;padding-right:14px}
.hub-card__t{display:block;font-size:14.5px;font-weight:700;color:#1F2937;line-height:1.3}
.hub-card__d{display:block;margin-top:5px;font-size:12.5px;color:#6B7280;line-height:1.55}
.hub-card__fee{display:block;margin-top:8px;font-size:12px;font-weight:700;color:#E8712C}
.hub-card__go{position:absolute;top:14px;right:14px;color:#C7CCD6;font-size:13px;
  transition:color .16s,transform .16s}
.hub-card:hover .hub-card__go{color:#E8712C;transform:translate(2px,-2px)}
.hub-noresult{display:none;padding:26px;background:#fff;border:1px solid #E7E8EC;border-radius:14px;
  color:#6B7280;font-size:15px}
.hub-noresult button{border:0;background:none;color:#1B365D;font:inherit;font-weight:700;
  text-decoration:underline;cursor:pointer;padding:0}
.visually-hidden{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0)}

@media(max-width:1200px){.hub-cards{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:1024px){
  .hub-hero__in{grid-template-columns:1fr;gap:30px;padding:34px 20px 38px}
  .hub-body{flex-direction:column;padding-top:24px}
  .hub-side{width:100%;flex-basis:auto;position:static;max-height:none}
  .hub-wrap{padding-left:18px;padding-right:18px}}
@media(max-width:900px){
  .hub-top__in{flex-wrap:wrap;gap:12px;padding:12px 18px}
  .hub-top__search{order:3;flex:1 1 100%}
  .hub-top__cities{gap:2px}
  .hub-top__cities a{font-size:13px;padding:3px 4px}}
@media(max-width:640px){.hub-cards{grid-template-columns:1fr}}
@media(max-width:560px){.hub-top__rating{display:none}}
</style>
<main>
<div class="pahub" id="hub-top">

<div class="hub-hero">
  <div class="hub-hero__in">
    <div>
      <p class="hub-eyebrow">Net Worth Certificate by CA Hub &mdash; India</p>
      <h1>Net Worth Certificates by a CA:<span class="accent"> The Complete Directory</span></h1>
      
      <div class="hub-hero__search">
        <span class="ic" aria-hidden="true">&#8981;</span>
        <label class="visually-hidden" for="hubSearch">Search this directory</label>
        <input id="hubSearch" type="search" autocomplete="off"
               placeholder="Search net worth and solvency services&hellip;">
        <button type="button" id="hubClear" class="hub-hero__clear" hidden
                aria-label="Clear the search">&times;</button>
      </div>
      <div class="hub-chips">
        <p class="hub-chips__t">Browse by</p>
        <div class="hub-chips__row"><a href="#cat-net-worth-certificates"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span>Net Worth Certificates<span class="n">4</span></a><a href="#cat-certificates-by-purpose"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>Certificates by Purpose<span class="n">4</span></a><a href="#cat-related-certificates"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1 1"/><path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1-1"/></svg></span>Related Certificates<span class="n">2</span></a><a href="#cat-free-tools"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span>Free Tools<span class="n">7</span></a><a href="#cat-certificates-in-your-city"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span>Certificates in Your City<span class="n">15</span></a><a href="#cat-guides-and-references"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span>Guides and References<span class="n">5</span></a></div>
      </div>
    </div>
    
    <div class="hub-form">
      <div class="hub-form__t">Get a Free Quote</div>
      <div class="hub-form__s">Talk to a CA / CS expert &mdash; no obligation.</div>
      <iframe name="hubFormFrame" style="display:none" title="submit target"></iframe>
      <form action="https://bigin.zoho.in/crm/WebToRecordForm" name="BiginWebToRecordForm2"
            method="POST" target="hubFormFrame" accept-charset="UTF-8"
            onsubmit="var cc=this.querySelector('.cc-select').value;this.querySelector('.mob').value=cc+this.querySelector('.ph').value;">
        <input type="text" style="display:none" name="xnQsjsdp" value="e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79">
        <input type="hidden" name="zc_gad" value="">
        <input type="text" style="display:none" name="xmIwtLD" value="2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843">
        <input type="text" style="display:none" name="actionType" value="UG90ZW50aWFscw==">
        <input type="hidden" name="rmsg" value="true">
        <input type="text" style="display:none" name="returnURL" value="null">
        <input type="hidden" name="Potential Name" value="Website Enquiry - Net Worth Certificate by CA">
        <input type="hidden" name="Pipeline" value="Sales Pipeline Standard">
        <input type="hidden" name="Stage" value="Qualification">
        <input type="hidden" name="Contacts.Lead Source" value="Website Enquiry - Net Worth Certificate by CA">
        <input name="Contacts.Last Name" type="text" maxlength="80" placeholder="Full name" required>
        <div class="hub-form__row">
          <select class="cc-select"><option value="+91">IN +91</option><option value="+1">US +1</option><option value="+44">UK +44</option><option value="+971">AE +971</option></select>
          <input class="ph" type="tel" maxlength="15" placeholder="Phone number" required>
        </div>
        <input type="hidden" name="Contacts.Mobile" class="mob" value="">
        <input name="Contacts.Mailing City" type="text" maxlength="100" placeholder="City">
        <select name="Contacts.Description">
          <option value="" disabled selected>Certificate needed</option>
        <option>Net Worth Certificate</option>
        <option>Net Worth Certificate for Company</option>
        <option>Net Worth Certificate for Partnership Firm</option>
        <option>CA Certificate for Proprietorship Firm</option>
        <option>Net Worth Certificate for Visa</option>
        <option>Net Worth Certificate for Bank Loan</option>
        <option>CA Certificate for RERA</option>
        <option>Net Worth Statement for Divorce</option>
        <option>Solvency Certificate</option>
        <option>Minimum Net Owned Fund for NBFC</option>
          <option>Other</option>
        </select>
        <button type="submit">Get Free Quote &rarr;</button>
      </form>
      <p class="hub-form__note">100% secure &middot; No spam &middot; Quick response</p>
    </div>

  </div>
</div>

<div class="hub-wrap">
  <div class="hub-body">
    <aside class="hub-side" aria-label="Browse the directory">
      <div class="hub-side__title">Browse certificates</div>
      <a class="hub-side__all" href="#hub-top"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg></span>All 37 pages</a>
      <div class="hub-side__lbl">Categories</div>
        <button type="button" class="hub-side-cat" onclick="paHubToggle(this)" aria-expanded="false" data-cat="cat-net-worth-certificates"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span><span class="nm">Net Worth Certificates</span><span class="ct">4</span><span class="hub-caret">&#9654;</span></button>
        <div class="hub-side-items" style="display:none"><a href="/net-worth-certificate">Net Worth Certificate</a><a href="/net-worth-certificate-for-company">For a Company</a><a href="/net-worth-certificate-for-partnership-firms">For a Partnership Firm</a><a href="/net-worth-certificate-sole-proprietorship">For a Proprietorship Firm</a></div>
        <button type="button" class="hub-side-cat" onclick="paHubToggle(this)" aria-expanded="false" data-cat="cat-certificates-by-purpose"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><span class="nm">Certificates by Purpose</span><span class="ct">4</span><span class="hub-caret">&#9654;</span></button>
        <div class="hub-side-items" style="display:none"><a href="/net-worth-certificate-for-visa">For a Visa Application</a><a href="/net-worth-certificate-for-bank-loan">For a Bank Loan</a><a href="/net-worth-certificate-for-rera-registration">For RERA Registration</a><a href="/net-worth-certificate-for-divorce">For Court and Divorce Proceedings</a></div>
        <button type="button" class="hub-side-cat" onclick="paHubToggle(this)" aria-expanded="false" data-cat="cat-related-certificates"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1 1"/><path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1-1"/></svg></span><span class="nm">Related Certificates</span><span class="ct">2</span><span class="hub-caret">&#9654;</span></button>
        <div class="hub-side-items" style="display:none"><a href="/solvency-certificate">Solvency Certificate</a><a href="/net-owned-fund-certificate-for-nbfc">Net Owned Fund for an NBFC</a></div>
        <button type="button" class="hub-side-cat" onclick="paHubToggle(this)" aria-expanded="false" data-cat="cat-free-tools"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="nm">Free Tools</span><span class="ct">7</span><span class="hub-caret">&#9654;</span></button>
        <div class="hub-side-items" style="display:none"><a href="/tools/net-worth-calculator">Net Worth Calculator</a><a href="/tools/company-net-worth-calculator">Company Net Worth Calculator</a><a href="/tools/nof-calculator">Net Owned Fund Calculator</a><a href="/tools/solvency-ratio-calculator">Solvency Ratio Calculator</a><a href="/tools/nwc-document-checklist">Document Checklist</a><a href="/tools/embassy-nwc-format-library">Embassy Format Library</a><a href="/tools/visa-nwc-currency-converter">Visa Currency Converter</a></div>
        <button type="button" class="hub-side-cat" onclick="paHubToggle(this)" aria-expanded="false" data-cat="cat-certificates-in-your-city"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="nm">Certificates in Your City</span><span class="ct">15</span><span class="hub-caret">&#9654;</span></button>
        <div class="hub-side-items" style="display:none"><a href="/net-worth-certificate/mumbai">Net Worth in Mumbai</a><a href="/net-worth-certificate/delhi">Net Worth in Delhi</a><a href="/net-worth-certificate/pune">Net Worth in Pune</a><a href="/net-worth-certificate/gurugram">Net Worth in Gurugram</a><a href="/net-worth-certificate/ahmedabad">Net Worth in Ahmedabad</a><a href="/net-worth-certificate-for-visa/mumbai">Visa Files in Mumbai</a><a href="/net-worth-certificate-for-visa/delhi">Visa Files in Delhi</a><a href="/net-worth-certificate-for-visa/pune">Visa Files in Pune</a><a href="/net-worth-certificate-for-visa/gurugram">Visa Files in Gurugram</a><a href="/net-worth-certificate-for-visa/ahmedabad">Visa Files in Ahmedabad</a><a href="/solvency-certificate/mumbai">Solvency in Mumbai</a><a href="/solvency-certificate/delhi">Solvency in Delhi</a><a href="/solvency-certificate/pune">Solvency in Pune</a><a href="/solvency-certificate/gurugram">Solvency in Gurugram</a><a href="/solvency-certificate/ahmedabad">Solvency in Ahmedabad</a></div>
        <button type="button" class="hub-side-cat" onclick="paHubToggle(this)" aria-expanded="false" data-cat="cat-guides-and-references"><span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="nm">Guides and References</span><span class="ct">5</span><span class="hub-caret">&#9654;</span></button>
        <div class="hub-side-items" style="display:none"><a href="/blog/how-a-ca-prepares-a-net-worth-certificate">How a CA Prepares One</a><a href="/blog/icai-guidelines-for-ca-certificates">ICAI Guidelines for CA Certificates</a><a href="/blog/net-worth-certificate-specimens">Specimen Library</a><a href="/blog/net-worth-certificate-statistics">Statistics and Benchmarks</a><a href="/glossary/networth">Glossary of Terms</a></div>
      <a class="hub-side__cta" href="tel:+919459456700">&#9742; Talk to a CA</a>
    </aside>
    <div class="hub-main" id="hub-cards">
      <section class="hub-cat" id="cat-net-worth-certificates">
        <div class="hub-cat__head">
          <span class="hub-cat__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span>
          <h2>Net Worth Certificates</h2>
        </div>
        <div class="hub-cards">
          <a href="/net-worth-certificate" data-name="net worth certificate the general certificate for an individual, computed on one named date and issued with a udin." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth Certificate</span><span class="hub-card__d">The general certificate for an individual, computed on one named date and issued with a UDIN.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-company" data-name="for a company follows the section 2(57) definition, so paid-up capital and reserves count but revaluation does not." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For a Company</span><span class="hub-card__d">Follows the Section 2(57) definition, so paid-up capital and reserves count but revaluation does not.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-partnership-firms" data-name="for a partnership firm totals partner capital and current accounts, with the deed read against the books before signing." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For a Partnership Firm</span><span class="hub-card__d">Totals partner capital and current accounts, with the deed read against the books before signing.</span><span class="hub-card__fee">Starting from INR 1499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-sole-proprietorship" data-name="for a proprietorship firm certifies the proprietor rather than the business, because in law the two are one person." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For a Proprietorship Firm</span><span class="hub-card__d">Certifies the proprietor rather than the business, because in law the two are one person.</span><span class="hub-card__fee">Starting from INR 1499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
        </div>
      </section>
      <section class="hub-cat" id="cat-certificates-by-purpose">
        <div class="hub-cat__head">
          <span class="hub-cat__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
          <h2>Certificates by Purpose</h2>
        </div>
        <div class="hub-cards">
          <a href="/net-worth-certificate-for-visa" data-name="for a visa application consulates test the source and traceability of funds, not only the total, and often want a second currency." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For a Visa Application</span><span class="hub-card__d">Consulates test the source and traceability of funds, not only the total, and often want a second currency.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-bank-loan" data-name="for a bank loan credit teams read it for exposure: what is realisable, what is pledged, and who else stands behind the file." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For a Bank Loan</span><span class="hub-card__d">Credit teams read it for exposure: what is realisable, what is pledged, and who else stands behind the file.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-rera-registration" data-name="for rera registration state authorities weigh promoter net worth against estimated project cost, and each publishes its own format." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For RERA Registration</span><span class="hub-card__d">State authorities weigh promoter net worth against estimated project cost, and each publishes its own format.</span><span class="hub-card__fee">Starting from INR 7999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-divorce" data-name="for court and divorce proceedings built to survive cross-examination, with the basis of every valuation stated on the face of the schedule." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">For Court and Divorce Proceedings</span><span class="hub-card__d">Built to survive cross-examination, with the basis of every valuation stated on the face of the schedule.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
        </div>
      </section>
      <section class="hub-cat" id="cat-related-certificates">
        <div class="hub-cat__head">
          <span class="hub-cat__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1 1"/><path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1-1"/></svg></span>
          <h2>Related Certificates</h2>
        </div>
        <div class="hub-cards">
          <a href="/solvency-certificate" data-name="solvency certificate certifies solvency up to a named amount rather than reporting an open figure. tenders, licences and court sureties ask for this one." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1 1"/><path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1-1"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency Certificate</span><span class="hub-card__d">Certifies solvency up to a named amount rather than reporting an open figure. Tenders, licences and court sureties ask for this one.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-owned-fund-certificate-for-nbfc" data-name="net owned fund for an nbfc a regulatory capital floor set by the reserve bank. group exposure is deducted, so it usually lands below net worth." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1 1"/><path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1-1"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Owned Fund for an NBFC</span><span class="hub-card__d">A regulatory capital floor set by the Reserve Bank. Group exposure is deducted, so it usually lands below net worth.</span><span class="hub-card__fee">Starting from INR 14999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
        </div>
      </section>
      <section class="hub-cat" id="cat-free-tools">
        <div class="hub-cat__head">
          <span class="hub-cat__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span>
          <h2>Free Tools</h2>
        </div>
        <div class="hub-cards">
          <a href="/tools/net-worth-calculator" data-name="net worth calculator enter assets and liabilities to see the figure before a chartered accountant certifies it." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth Calculator</span><span class="hub-card__d">Enter assets and liabilities to see the figure before a chartered accountant certifies it.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/tools/company-net-worth-calculator" data-name="company net worth calculator applies the statutory computation to audited figures, flagging the reserves that have to be excluded." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Company Net Worth Calculator</span><span class="hub-card__d">Applies the statutory computation to audited figures, flagging the reserves that have to be excluded.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/tools/nof-calculator" data-name="net owned fund calculator works the rbi formula, including the deduction for investment in and credit to group companies." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Owned Fund Calculator</span><span class="hub-card__d">Works the RBI formula, including the deduction for investment in and credit to group companies.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/tools/solvency-ratio-calculator" data-name="solvency ratio calculator tests whether assets cover liabilities at the amount a tender or bond actually names." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency Ratio Calculator</span><span class="hub-card__d">Tests whether assets cover liabilities at the amount a tender or bond actually names.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/tools/nwc-document-checklist" data-name="document checklist the papers a chartered accountant will ask for, so nothing is missing when the work starts." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Document Checklist</span><span class="hub-card__d">The papers a chartered accountant will ask for, so nothing is missing when the work starts.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/tools/embassy-nwc-format-library" data-name="embassy format library what each destination expects of a funds document, gathered in one place by country." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Embassy Format Library</span><span class="hub-card__d">What each destination expects of a funds document, gathered in one place by country.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/tools/visa-nwc-currency-converter" data-name="visa currency converter converts the certified total to the currency a mission works in, at a stated reference rate." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Visa Currency Converter</span><span class="hub-card__d">Converts the certified total to the currency a mission works in, at a stated reference rate.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
        </div>
      </section>
      <section class="hub-cat" id="cat-certificates-in-your-city">
        <div class="hub-cat__head">
          <span class="hub-cat__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span>
          <h2>Certificates in Your City</h2>
        </div>
        <div class="hub-cards">
          <a href="/net-worth-certificate/mumbai" data-name="net worth in mumbai society records, the mumbai sub-registrar and sebi intermediary filings." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth in Mumbai</span><span class="hub-card__d">Society records, the Mumbai sub-registrar and SEBI intermediary filings.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate/delhi" data-name="net worth in delhi dda allotments, freehold conversions and filings at patiala house and saket." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth in Delhi</span><span class="hub-card__d">DDA allotments, freehold conversions and filings at Patiala House and Saket.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate/pune" data-name="net worth in pune haveli and pune district sub-registrar records, collected locally in wagholi." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth in Pune</span><span class="hub-card__d">Haveli and Pune district sub-registrar records, collected locally in Wagholi.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate/gurugram" data-name="net worth in gurugram hsvp and huda allotment chains, matched to the current gurugram tehsil record." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth in Gurugram</span><span class="hub-card__d">HSVP and HUDA allotment chains, matched to the current Gurugram tehsil record.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate/ahmedabad" data-name="net worth in ahmedabad ahmedabad sub-registrar records, and a separate basis for gift city units." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Net Worth in Ahmedabad</span><span class="hub-card__d">Ahmedabad sub-registrar records, and a separate basis for GIFT City units.</span><span class="hub-card__fee">Starting from INR 1999</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-visa/mumbai" data-name="visa files in mumbai the consulates at bkc and nariman point, each with its own documentation expectations." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Visa Files in Mumbai</span><span class="hub-card__d">The consulates at BKC and Nariman Point, each with its own documentation expectations.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-visa/delhi" data-name="visa files in delhi embassies in chanakyapuri, with mea apostille taken before submission." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Visa Files in Delhi</span><span class="hub-card__d">Embassies in Chanakyapuri, with MEA apostille taken before submission.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-visa/pune" data-name="visa files in pune timed to your vfs appointment at viman nagar, with student files handled together." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Visa Files in Pune</span><span class="hub-card__d">Timed to your VFS appointment at Viman Nagar, with student files handled together.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-visa/gurugram" data-name="visa files in gurugram cyber city deputations and dependant applications raised through employer hr." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Visa Files in Gurugram</span><span class="hub-card__d">Cyber City deputations and dependant applications raised through employer HR.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/net-worth-certificate-for-visa/ahmedabad" data-name="visa files in ahmedabad study applications assembled with a gujarat education consultant." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Visa Files in Ahmedabad</span><span class="hub-card__d">Study applications assembled with a Gujarat education consultant.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/solvency-certificate/mumbai" data-name="solvency in mumbai bmc and midc bids on the maharashtra portal, and sureties before the sessions court." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency in Mumbai</span><span class="hub-card__d">BMC and MIDC bids on the Maharashtra portal, and sureties before the sessions court.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/solvency-certificate/delhi" data-name="solvency in delhi cpwd and mcd tenders, gem portal listings, and sureties before the district courts." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency in Delhi</span><span class="hub-card__d">CPWD and MCD tenders, GeM portal listings, and sureties before the district courts.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/solvency-certificate/pune" data-name="solvency in pune pmc and maharashtra pwd notices, contractor licence renewals and court sureties." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency in Pune</span><span class="hub-card__d">PMC and Maharashtra PWD notices, contractor licence renewals and court sureties.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/solvency-certificate/gurugram" data-name="solvency in gurugram hsvp and municipal corporation bids floated on the haryana e-tender portal." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency in Gurugram</span><span class="hub-card__d">HSVP and Municipal Corporation bids floated on the Haryana e-tender portal.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/solvency-certificate/ahmedabad" data-name="solvency in ahmedabad nprocure listings, amc works contracts and gift city subcontractor conditions." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Solvency in Ahmedabad</span><span class="hub-card__d">nProcure listings, AMC works contracts and GIFT City subcontractor conditions.</span><span class="hub-card__fee">Starting from INR 2499</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
        </div>
      </section>
      <section class="hub-cat" id="cat-guides-and-references">
        <div class="hub-cat__head">
          <span class="hub-cat__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span>
          <h2>Guides and References</h2>
        </div>
        <div class="hub-cards">
          <a href="/blog/how-a-ca-prepares-a-net-worth-certificate" data-name="how a ca prepares one the method behind the signature: engagement, evidence, valuation basis and the representation letter." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">How a CA Prepares One</span><span class="hub-card__d">The method behind the signature: engagement, evidence, valuation basis and the representation letter.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/blog/icai-guidelines-for-ca-certificates" data-name="icai guidelines for ca certificates the guidance notes and standards a chartered accountant must follow, cited clause by clause." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">ICAI Guidelines for CA Certificates</span><span class="hub-card__d">The guidance notes and standards a chartered accountant must follow, cited clause by clause.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/blog/net-worth-certificate-specimens" data-name="specimen library masked samples of every certificate type, so you can see the layout before commissioning one." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Specimen Library</span><span class="hub-card__d">Masked samples of every certificate type, so you can see the layout before commissioning one.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/blog/net-worth-certificate-statistics" data-name="statistics and benchmarks who commissions these certificates and what the market charges, with sources cited for each figure." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Statistics and Benchmarks</span><span class="hub-card__d">Who commissions these certificates and what the market charges, with sources cited for each figure.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
          <a href="/glossary/networth" data-name="glossary of terms every term that appears on a certificate, defined once and linked from where it is used." class="hub-card"><span class="hub-card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="hub-card__txt"><span class="hub-card__t">Glossary of Terms</span><span class="hub-card__d">Every term that appears on a certificate, defined once and linked from where it is used.</span></span><span class="hub-card__go" aria-hidden="true">&#8599;</span></a>
        </div>
      </section>
      <div class="hub-noresult" id="hub-noresult">Nothing matches that.
        <button type="button" id="hubReset">Show everything</button></div>
    </div>
  </div>
</div>
</div>
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">More From Patron Accounting</div>
                <div class="pa-block-sub">Outside this practice, and mentioned on this page</div>
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/partnership-firm-registration" class="pa-cross-card"><div class="pa-card-title">Partnership Firm Registration</div></a>
<a href="https://www.patronaccounting.com/proprietorship-registration" class="pa-cross-card"><div class="pa-card-title">Proprietorship Registration</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">Read Next</div>
                <div class="pa-block-sub">The detail behind each figure on this page</div>
                <ul class="pa-read-list">
                    <li><a href="/blog/can-cma-issue-a-net-worth-certificate">Can a CMA Issue a Net Worth Certificate? CA vs CMA vs CS</a></li>
                    <li><a href="/blog/how-to-verify-a-net-worth-certificate">How to Verify a Net Worth Certificate (UDIN Check Guide)</a></li>
                    <li><a href="/blog/valuation-certificate-vs-net-worth-certificate">Valuation Certificate vs Net Worth Certificate</a></li>
                    <li><a href="/blog/affidavit-of-support-vs-net-worth-certificate">Affidavit of Support vs Net Worth Certificate</a></li>
                    <li><a href="/blog/balance-sheet-vs-net-worth-certificate">Balance Sheet vs Net Worth Certificate: The Difference</a></li>
                    <li><a href="/glossary/networth/certificate-of-practice-cop">Certificate of Practice (COP)</a></li>
                    <li><a href="/glossary/networth/attestation">Attestation</a></li>
                    <li><a href="/glossary/networth/management-representation-letter">Management Representation Letter</a></li>
                    <li><a href="/glossary/networth/form-15cb">Form 15CB</a></li>
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
<script>
function paHubToggle(b){
  var it = b.nextElementSibling; if(!it) return;
  var open = it.style.display !== 'none';
  it.style.display = open ? 'none' : 'flex';
  b.setAttribute('aria-expanded', open ? 'false' : 'true');
  var c = b.querySelector('.hub-caret');
  if(c) c.style.transform = open ? 'rotate(0deg)' : 'rotate(90deg)';
}
(function(){
  var boxes = [document.getElementById('hubSearch'), document.getElementById('hubSearchTop')]
                .filter(Boolean);
  if(!boxes.length) return;
  var cards = [].slice.call(document.querySelectorAll('.hub-card'));
  var cats  = [].slice.call(document.querySelectorAll('.hub-cat'));
  var none  = document.getElementById('hub-noresult');
  var clear = document.getElementById('hubClear');
  function run(q){
    q = (q || '').trim().toLowerCase();
    var any = false;
    cards.forEach(function(c){
      var hit = !q || (c.getAttribute('data-name') || '').indexOf(q) > -1;
      c.style.display = hit ? '' : 'none';
      if(hit) any = true;
    });
    cats.forEach(function(s){
      var vis = s.querySelectorAll('.hub-card:not([style*="display: none"])').length;
      s.style.display = (q && !vis) ? 'none' : '';
    });
    if(none) none.style.display = (q && !any) ? 'block' : 'none';
    if(clear) clear.hidden = !q;
    boxes.forEach(function(b){ if(b.value !== q && document.activeElement !== b) b.value = q; });
  }
  boxes.forEach(function(b){ b.addEventListener('input', function(){ run(b.value); }); });
  if(clear) clear.addEventListener('click', function(){ boxes.forEach(function(b){ b.value=''; }); run(''); });
  var reset = document.getElementById('hubReset');
  if(reset) reset.addEventListener('click', function(){ boxes.forEach(function(b){ b.value=''; }); run(''); });
})();
</script>
@endsection
