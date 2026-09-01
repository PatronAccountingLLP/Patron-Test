{{-- /net-worth-certificate
     Generated from Generated Pages/net-worth-certificate/net-worth-certificate.html by Scripts/build_blade.py.
     That file is built from the cluster's signed-off workbooks by build_page.py;
     nothing here is authored. Re-run both rather than editing this file.

     Before this goes live:
       - deploy public/images/networth-cluster/net-worth-certificate/** and public/certificates/**
       - deploy public/css/nwc-spec.css (new to Patron Local)
       - patron-cluster.css and faq.css are already live; do not overwrite them
       - the hero form is partials/enquiry-form.blade.php (Zoho Bigin), swapped in
         at build time with this page's service pre-selected; the FAQ block is a
         CTA that scrolls to it, so there is one Bigin form per page. --}}
@extends('layouts.service-app')

@section('meta')
    <title>Net Worth Certificate Issued by a Chartered Accountant</title>
    <meta name="description" content="A CA-signed statement of your assets less liabilities, carrying a UDIN, prepared for banks, consulates, courts and regulators across India. See what it covers.">
    <link rel="canonical" href="https://www.patronaccounting.com/net-worth-certificate">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Net Worth Certificate, Signed and UDIN-Tagged">
    <meta property="og:description" content="Patron Accounting prepares and certifies your net worth statement for lenders, consulates and regulators.">
    <meta property="og:url" content="https://www.patronaccounting.com/net-worth-certificate">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Net Worth Certificate, Signed and UDIN-Tagged">
    <meta name="twitter:description" content="Patron Accounting prepares and certifies your net worth statement for lenders, consulates and regulators.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "Service",
   "@id": "https://www.patronaccounting.com/net-worth-certificate#service",
   "name": "Net Worth Certificate Issued by a Chartered Accountant",
   "description": "A CA-signed statement of your assets less liabilities, carrying a UDIN, prepared for banks, consulates, courts and regulators across India. See what it covers.",
   "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "areaServed": "India",
   "url": "https://www.patronaccounting.com/net-worth-certificate"
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://www.patronaccounting.com/net-worth-certificate#breadcrumb",
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
     "name": "Net Worth Certificate",
     "item": "https://www.patronaccounting.com/net-worth-certificate"
    }
   ]
  },
  {
   "@type": "FAQPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate#faq",
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-08-03T10:00:00+05:30",
   "mainEntity": [
    {
     "@type": "Question",
     "name": "Whose assets can be included when the certificate covers one individual?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Only assets the individual legally owns on the certificate date. Property in a spouse's or parent's name stays out even where the individual paid for it. So do assets of a firm in which the person is a partner, because those belong to the firm. Jointly held assets enter at the individual's share."
     }
    },
    {
     "@type": "Question",
     "name": "Does the certificate value property at cost or at market value?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Either basis is defensible, but the basis has to be stated. Cost is taken from the sale deed and is easy to evidence; market value needs a registered valuer's report or the applicable circle rate. Mixing the two silently across a schedule is the most common reason a lender sends a certificate back."
     }
    },
    {
     "@type": "Question",
     "name": "Are credit-card dues and personal loans deducted from the figure?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. Every liability outstanding on the certificate date is deducted, including revolving card balances, personal and vehicle loans, and the drawn portion of an overdraft. The CA reconciles them against loan statements and the credit information report, since an undisclosed borrowing that later surfaces makes the whole certificate unreliable."
     }
    },
    {
     "@type": "Question",
     "name": "Can gold and jewellery be counted as assets?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "They can, at a supportable value. Purchase invoices work for recently bought items; for inherited jewellery a valuer's certificate or a bank locker inventory is normally required. Because holdings are hard to verify independently, a schedule leaning heavily on jewellery draws more scrutiny. Embassies and lenders read it less easily than one built on bank and property assets."
     }
    },
    {
     "@type": "Question",
     "name": "Is a provident fund balance part of an individual's net worth?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, the accumulated balance standing to the member's credit is an asset, evidenced by the EPFO passbook or the PPF account statement. Accrued gratuity is different: until it becomes due on separation it is a contingent entitlement rather than an owned asset. So it does not sit in the schedule."
     }
    },
    {
     "@type": "Question",
     "name": "What happens if the declared assets do not match Form 26AS or the AIS?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "The mismatch has to be explained before the certificate is signed. The Annual Information Statement captures interest, dividend, securities transactions and large property registrations. So an asset visible there but missing from the schedule is a gap the CA must resolve. Gifts, inheritances and pre-existing assets are legitimate explanations that get documented."
     }
    },
    {
     "@type": "Question",
     "name": "Can the certificate be drawn up as at a past date?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. Certificates are routinely issued as at 31 March, or as at the date a loan application or court proceeding was filed. The recipient wants the position on that specific day. The evidence then has to be the position on that day, not today's balances, and the date appears on the face of the document."
     }
    },
    {
     "@type": "Question",
     "name": "Can a non-resident Indian obtain a certificate from an Indian chartered accountant?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, and it is common for visa, immigration and property transactions. The CA covers Indian assets from Indian evidence, and includes overseas assets only where the client supplies foreign bank or brokerage statements. Documents can be signed and shared electronically, so physical presence in India is not required."
     }
    },
    {
     "@type": "Question",
     "name": "Does an individual need audited accounts before the certificate can be issued?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "No. Individuals are not required to have their personal affairs audited, and the certificate rests on a statement of affairs the client signs plus the underlying evidence. Where the individual runs a business whose accounts are audited under section 63 of the Income-tax Act 2025, those audited figures feed the business portion of the schedule."
     }
    },
    {
     "@type": "Question",
     "name": "Are inherited assets included before the succession is complete?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Not until title passes. An asset still standing in a deceased parent's name is not the individual's property, however certain the eventual inheritance is. Once a will is probated or a succession or legal heir certificate is issued and mutation is recorded, the asset enters the schedule at the heir's share."
     }
    }
   ]
  },
  {
   "@type": "WebPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate#webpage",
   "url": "https://www.patronaccounting.com/net-worth-certificate",
   "name": "Net Worth Certificate Issued by a Chartered Accountant",
   "description": "A CA-signed statement of your assets less liabilities, carrying a UDIN, prepared for banks, consulates, courts and regulators across India. See what it covers.",
   "isPartOf": {
    "@id": "https://www.patronaccounting.com/#website"
   },
   "publisher": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-08-03T10:00:00+05:30"
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

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">Net Worth Certificate in India</h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI &amp; ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">August 2026</span></span>
                        </span>
                        <a href="https://www.patronaccounting.com/about-us" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4 hero-benefits">
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Holdings tied to their own records</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Issued under the ICAI Guidance Note</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>UDIN on every certificate</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Annexure sent, not withheld</span></p></div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 94594 56700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20a%20Net%20Worth%20Certificate&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20net%20worth%20certificate%20and%20would%20like%20to%20know%20more.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate" target="_blank" rel="noopener" class="btn-sample text-decoration-none">
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
                    'service'  => 'Net Worth Certificate',
                ])
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section">
  <div class="section-container">
    <div class="section-header">
      <h2>What Our Net Worth Certificate Clients Say</h2>
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
            <h2 class="section-title">Net Worth Certificate: Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR &mdash; Net Worth Certificate at a Glance</strong></p>
                    <p>A net worth certificate is a chartered accountant's signed statement of your assets less your liabilities on one named date, carrying a UDIN the recipient can verify. It speaks only to that date: holdings that change the following week do not alter what the certificate says. The statement of affairs behind the figure is annexed, so the reader can see how the total was built.</p>
                </div>
<p>Someone has asked you to <a href="/blog/how-do-i-prove-my-net-worth">prove what you are worth</a>, and a self-declaration will not settle it. It might be a <a href="/net-worth-certificate-for-bank-loan">lender</a>, a registrar, a recognition application or a <a href="/net-owned-fund-certificate-for-nbfc">broking regulator</a>, and each reads the same statement against a different question. The request rarely arrives with instructions. The document itself is the easy part; what will be accepted as evidence behind it is not.</p><p>That evidence is the work. A flat in a co-operative society is proved differently from a freehold plot, and an <a href="/glossary/networth/tangible-net-worth">unlisted shareholding</a> differently from a demat balance. This page sets out which papers support each figure, and where a statement is most often sent back. <a href="/blog/how-to-calculate-net-worth-for-a-net-worth-certificate">Our guide to calculating net worth</a> covers the computation itself, and the <a href="https://udin.icai.org" target="_blank" rel="noopener">ICAI's UDIN portal</a> lets any recipient verify the signature.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">Net Worth Certificate: Definition and Scope</h2>
                <div class="content-text what-is-definition">
<p>A net worth certificate is a statement of an individual's assets less liabilities as at a specified date. It is computed from books, bank records and ownership documents, and attested by a <a href="/blog/how-a-ca-prepares-a-net-worth-certificate">chartered accountant in practice</a>.</p><p>The scope stops there. It is not a valuation: assets are stated on a disclosed basis rather than appraised for market price. It is not an audit, and it carries no opinion on creditworthiness or ability to repay. It speaks to one date and to the records examined, and the certificate names both.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key terms on this page:</strong></p>
                    <div class="key-terms"><ul class="al-list">
                    <li><span class="al-t"><a href="/glossary/networth/tangible-net-worth">Tangible Net Worth</a></span><span class="al-d">Tangible net worth is what remains after every intangible item is removed from the balance sheet total.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/adjusted-net-worth">Adjusted Net Worth</a></span><span class="al-d">Adjusted net worth is net worth after a specific reader's own additions and subtractions have been applied.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/contingent-liability">Contingent Liability</a></span><span class="al-d">A contingent liability is an obligation that may or may not fall due, depending on something that has not yet happened and may never happen.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/fair-market-value-fmv">Fair Market Value (FMV)</a></span><span class="al-d">Fair market value is the price an asset would fetch between a willing buyer and a willing seller, both reasonably informed and neither under compulsion to transact.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/statement-of-affairs">Statement of Affairs</a></span><span class="al-d">A statement of affairs sets out everything an entity owns and owes at a single date, in a form that does not depend on a statutory balance sheet existing.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/succession-certificate">Succession Certificate</a></span><span class="al-d">A succession certificate empowers an heir to collect debts and securities that were owed to a deceased person.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/legal-heir-certificate">Legal Heir Certificate</a></span><span class="al-d">A legal heir certificate records who the surviving family members of a deceased person are.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/form-26as">Form 26AS</a></span><span class="al-d">Form 26AS was rewritten from a tax credit statement into an annual tax statement, and what it carries changed with it.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/annual-information-statement-ais">Annual Information Statement (AIS)</a></span><span class="al-d">The annual information statement reports back to a taxpayer what the department has been told about them by third parties.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/circle-rate">Circle Rate</a></span><span class="al-d">A circle rate is the minimum value at which a property may be registered in a given locality, notified by the state government.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/encumbrance-certificate">Encumbrance Certificate</a></span><span class="al-d">An encumbrance certificate records the transactions registered against a property over a period the applicant chooses.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/stamp-duty">Stamp Duty</a></span><span class="al-d">Stamp duty is a tax on instruments rather than on transactions.</span></li>
                    </ul></div>
                </div>
            </div>
            <div class="column-image"><img src="/images/networth-cluster/net-worth-certificate/what-is.webp" alt="Assets set against liabilities on a stated date, computed from books and ownership records and attested by a CA" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>

<section class="content-section specimen-section" id="specimen-section">
  <div class="content-container">
    <div class="text-content">
      <div class="specimen-item">
        <div class="specimen-caption"><div class="specimen-sticky">
          <h2 class="section-title">What a Net Worth Certificate Looks Like: A Masked Specimen</h2>
          <p class="section-subtitle" style="text-align:left;max-width:100%;">Every figure in the sample below is masked. What it shows is the shape of the document you receive: what it states, on whose authority, and as at which date.</p>
          <div class="specimen-pane is-active" data-spec-pane="0">
            <h3>Certificate of Net Worth</h3>
            <p>The certificate names the person being certified, the date the figure speaks to and the records examined to arrive at it. Assets are set out line by line, liabilities are set against them, and the net worth falls out of the two. The <a href="/net-worth-certificate-by-ca">chartered accountant</a>'s firm registration number and the UDIN appear beneath the signature, which is what lets a recipient verify the certificate independently rather than take it on trust.</p>
            <a class="specimen-download" href="/certificates/01-net-worth-certificate-individual.pdf" download>Download this sample (PDF)</a>
          </div>
          <div class="specimen-pane" data-spec-pane="1">
            <h3>Statement of Affairs annexure</h3>
            <p>The annexure carries the same position in detail, one row per holding, with the basis of each value stated beside it. A bank or a <a href="/net-worth-certificate-for-visa">consulate</a> that will not act on a single total reads this instead, and a reader who disagrees with one figure can see the reasoning behind it without coming back to you for the working.</p>
            <a class="specimen-download" href="/certificates/07-statement-of-affairs-annexure.pdf" download>Download this sample (PDF)</a>
          </div>
          <p class="specimen-masknote">All names, addresses, registration numbers and amounts are replaced with X characters. The sample carries a Patron Accounting watermark and a Specimen badge on every page so that a cropped screenshot still shows what it is.</p>
        </div></div>
        <div class="specimen-stack" id="specimenStack">
          <p class="specimen-stack__title">Sample document</p>
          <div class="specimen-tabs" role="tablist" aria-label="Choose a sample">
            <button type="button" role="tab" class="specimen-tab is-active" data-spec-tab="0" aria-selected="true">Certificate of Net Worth</button>
            <button type="button" role="tab" class="specimen-tab" data-spec-tab="1" aria-selected="false">Statement of Affairs annexure</button>
          </div>
          <div class="specimen-frame" id="specimenFrame" role="button" tabindex="0" aria-label="Enlarge this sample">
            <div class="specimen-doc is-active" data-spec-doc="0"><article class="nwc-spec" aria-label="Net Worth Certificate — Individual (ICAI) - specimen, all values masked, not a valid certificate">
  <svg class="nwc-spec__mark" aria-hidden="true" focusable="false">
    <defs><pattern id="nwcwm-01" width="400" height="230"
      patternUnits="userSpaceOnUse">
      <text x="16" y="150" transform="rotate(-24 16 150)">Patron Accounting</text>
    </pattern></defs>
    <rect width="100%" height="100%" fill="url(#nwcwm-01)"/>
  </svg>
  <div class="nwc-spec__badge">Sample only</div>
  <header class="nwc-spec__lh">
    <span class="nm"><span class="b">XXXXXX XXXXX & XXXXXXXXXX</span></span>
    <span class="desig">Chartered Accountants</span>
    <span class="ln"><span class="b">XXX, XXXXXXX XXXXXXXX, XX XXXX, XXXX XXXXXX</span></span>
    <span class="ln"><span class="b">+XX XX XXXX XXXX</span> &nbsp;&middot;&nbsp; <span class="b">XXXXXX@XXXXXXX.XX</span></span>
    <span class="ln">Firm Registration No.: <span class="b">XXXXXXX</span></span>
  </header>
  <div class="nwc-spec__meta"><span>Ref: <span class="b">XXX/XXXX-XX/XXXX</span></span><span>Date: <span class="b">XX/XX/XXXX</span></span></div>
  <h3>Certificate of Net Worth</h3>
  <div class="nwc-spec__to"><b>To Whomsoever It May Concern</b></div>
  <p>This is to certify that we have examined the Statement of Assets and Liabilities of
  <span class="b">XXXXX XXXXXX XXXXXXXXX</span>, son of <span class="b">XXXXXX XXXXXXXXX</span>, residing at <span class="b">XXXX XX, XXXXXXXX XXXXXXXXX, XXXXXXX, XXXX XXXXXX</span>, holding Permanent Account Number <span class="b">XXXXXXXXXX</span>, as at <span class="b">XX XXXXX XXXX</span>. The Statement
  has been prepared from the books of account, bank statements, investment records, title
  documents and other records produced before us.</p>
<h4>Statement of Assets and Liabilities</h4><table><caption class="nwc-spec__sr">Statement of Assets and Liabilities - all figures masked</caption><thead><tr><th style="width:50px">Sr.</th><th>Particulars</th><th class="num">Amount (INR)</th></tr></thead><tbody><tr class="sub"><td>A</td><td><b>Assets</b></td><td class="num"></td></tr><tr><td>1</td><td>Immovable property &mdash; residential flat</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>2</td><td>Bank balances &mdash; savings accounts</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>3</td><td>Fixed deposits and term deposits</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>4</td><td>Investments &mdash; shares and mutual funds</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>5</td><td>Motor vehicles</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>6</td><td>Jewellery and other valuables</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>7</td><td>Other assets</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr class="sub"><td></td><td><b>Total Assets (A)</b></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr><tr class="sub"><td>B</td><td><b>Liabilities</b></td><td class="num"></td></tr><tr><td>1</td><td>Housing loan &mdash; outstanding</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>2</td><td>Vehicle loan &mdash; outstanding</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>3</td><td>Other borrowings</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>4</td><td>Other liabilities and dues</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr class="sub"><td></td><td><b>Total Liabilities (B)</b></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr><tr class="tot"><td></td><td><b>NET WORTH (A &minus; B)</b></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr></tbody></table>
  <p>On the basis of our examination and the information and explanations given
  to us, we certify that the net worth of <span class="b">XXXXX XXXXXX XXXXXXXXX</span> as at <span class="b">XX XXXXX XXXX</span> is <b>INR <span class="b">X,XX,XX,XXX</span></b>
  (Rupees <span class="b">XXX XXXXX XXXXX-XXXX XXXX</span> only).</p>
  <p>This certificate is issued at the request of the applicant for the purpose of submission to a lending institution and is
  not to be used, referred to or distributed for any other purpose or to any other party
  without our prior written consent.</p>
  <p>The preparation of the Statement is the responsibility of the applicant, including the completeness of the assets and liabilities disclosed. Our responsibility is to certify the Statement on the basis of the records produced before us.</p>
  <p>We conducted our examination in accordance with the Guidance Note on Reports or Certificates for Special Purposes issued by the Institute of Chartered Accountants of India, which requires that we comply with the ethical requirements of the Code of Ethics. We have complied with the relevant requirements of the Standard on Quality Control (SQC) 1.</p>
  <footer class="nwc-spec__sign">
    <div>Place: <span class="b">XXXX</span><br>Date: <span class="b">XX/XX/XXXX</span><br>UDIN: <span class="b">XXXXXXXXXXXXXXXXXX</span></div>
    <div class="rt">
      <span class="for">For</span>
      <span class="nm"><span class="b">XXXXXX XXXXX & XXXXXXXXXX</span></span>
      <span class="desig">Chartered Accountants</span>
      <span>FRN: <span class="b">XXXXXXX</span></span>
      <div class="nwc-spec__sig"></div>
      <div><span class="b">XX XXXXXX XXXXX</span><br>Partner &middot; Membership No.: <span class="b">XXXXXX</span></div>
    </div>
  </footer>
</article></div>
            <div class="specimen-doc" data-spec-doc="1"><article class="nwc-spec" aria-label="Statement of Affairs annexure - specimen, all values masked, not a valid certificate">
  <svg class="nwc-spec__mark" aria-hidden="true" focusable="false">
    <defs><pattern id="nwcwm-07" width="400" height="230"
      patternUnits="userSpaceOnUse">
      <text x="16" y="150" transform="rotate(-24 16 150)">Patron Accounting</text>
    </pattern></defs>
    <rect width="100%" height="100%" fill="url(#nwcwm-07)"/>
  </svg>
  <div class="nwc-spec__badge">Sample only</div>
  <header class="nwc-spec__lh">
    <span class="nm"><span class="b">XXXXXX XXXXX & XXXXXXXXXX</span></span>
    <span class="desig">Chartered Accountants</span>
    <span class="ln"><span class="b">XXX, XXXXXXX XXXXXXXX, XX XXXX, XXXX XXXXXX</span></span>
    <span class="ln"><span class="b">+XX XX XXXX XXXX</span> &nbsp;&middot;&nbsp; <span class="b">XXXXXX@XXXXXXX.XX</span></span>
    <span class="ln">Firm Registration No.: <span class="b">XXXXXXX</span></span>
  </header>
  <div class="nwc-spec__meta"><span>Ref: <span class="b">XXX/XXXX-XX/XXXX</span></span><span>Date: <span class="b">XX/XX/XXXX</span></span></div>
  <h3>Annexure I &mdash; Statement of Affairs as at <span class="b">XX XXXXX XXXX</span></h3>
  <div class="nwc-spec__to"><b>Name:</b> <span class="b">XXXXX XXXXXX XXXXXXXXX</span> &nbsp;&middot;&nbsp; <b>PAN:</b> <span class="b">XXXXXXXXXX</span></div>
  <p>This Annexure forms an integral part of the Certificate of Net Worth dated <span class="b">XX/XX/XXXX</span> bearing UDIN <span class="b">XXXXXXXXXXXXXXXXXX</span>. Each item is supported by the document named against it.</p>
<table><caption class="nwc-spec__sr">Specimen figures - all values masked</caption><thead><tr><th style="width:50px">Sr.</th><th>Particulars</th><th class="num">Value (INR)</th><th>Basis / supporting document</th></tr></thead><tbody><tr class="sub"><td>A</td><td><b>Immovable Property</b></td><td class="num"></td><td></td></tr><tr><td>1</td><td>Residential flat &mdash; area and location</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXX XXXX, XXXXXXXXXX XXXXXX'X XXXXXX</span></td></tr><tr class="sub"><td>B</td><td><b>Financial Assets</b></td><td class="num"></td><td></td></tr><tr><td>2</td><td>Savings bank balances</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXX XXXXXXXXXX, X XXXXXX</span></td></tr><tr><td>3</td><td>Fixed and recurring deposits</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXXXXX XXXXXXX</span></td></tr><tr><td>4</td><td>Listed shares and securities</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXX XXXXXXX XXXXXXXXX</span></td></tr><tr><td>5</td><td>Mutual fund units</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXX / XXXXXXXX XXXXXXXXX</span></td></tr><tr class="sub"><td>C</td><td><b>Movable and Other Assets</b></td><td class="num"></td><td></td></tr><tr><td>6</td><td>Motor vehicle</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XX XXXX, XXXXXXXXXXX XXXX</span></td></tr><tr><td>7</td><td>Jewellery and bullion</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXXXX'X XXXXXXXXXXX</span></td></tr><tr><td>8</td><td>Insurance surrender value and loans given</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXXXXX XXXXXXXXX</span></td></tr><tr class="sub"><td></td><td><b>Total Assets</b></td><td class="num"><b><span class="b b--n">X,XX,XX,XXX</span></b></td><td></td></tr><tr class="sub"><td>D</td><td><b>Liabilities</b></td><td></td><td></td></tr><tr><td>9</td><td>Housing loan &mdash; outstanding</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXXXX XXXXXXXXX XX XXXXXXX</span></td></tr><tr><td>10</td><td>Vehicle loan &mdash; outstanding</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXXXX XXXXXXXXX XX XXXXXXX</span></td></tr><tr><td>11</td><td>Personal and business loans</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXX XXXXXXXXXXXXX</span></td></tr><tr><td>12</td><td>Credit card and other dues</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td><span class="b">XXXX XXXXXXXXXX</span></td></tr><tr class="sub"><td></td><td><b>Total Liabilities</b></td><td class="num"><b><span class="b b--n">X,XX,XX,XXX</span></b></td><td></td></tr><tr class="tot"><td></td><td><b>NET WORTH</b></td><td class="num"><b><span class="b b--n">X,XX,XX,XXX</span></b></td><td></td></tr></tbody></table>
  <p>Immovable property is stated at the registered valuer's estimate; listed securities at market value as at the above date; all other assets at the values appearing in the records produced.</p>
  <p><b>Declaration:</b> I confirm that the assets and liabilities set out above are complete and correct, and that no material asset or liability has been omitted.</p>
  <footer class="nwc-spec__sign"><div>Place: <span class="b">XXXX</span><br>Date: <span class="b">XX/XX/XXXX</span></div><div class="rt"><div class="nwc-spec__sig"></div><div><span class="b">XXXXX XXXXXX XXXXXXXXX</span><br>Signature of the Applicant</div></div></footer>
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
            <h2 class="section-title">Who Needs a Net Worth Certificate in India</h2>
            <div class="why-patron-grid is-4">
                <div><strong>Someone Has Asked for Certification</strong><p>A form has come back marked insufficient, or the request said the statement must be certified by a chartered accountant. The requirement is yours to satisfy, and the person asking rarely explains what would satisfy them.</p></div>
                <div><strong>Your Assets Sit in Several Forms</strong><p>Property, a demat account, deposits and an unlisted holding each prove ownership differently. Nobody has ever added them into one figure on one date, and the request assumes somebody has.</p></div>
                <div><strong>A Regulator Has Set a Threshold</strong><p>A recognition application or a broking registration names a minimum you have to evidence. The threshold is fixed. What varies is which of your holdings count toward it, and on what basis each one is valued.</p></div>
                <div><strong>The Recipient Intends to Verify It</strong><p>The party asking has said the certificate must carry a UDIN, or has asked who signed it and under what <a href="/blog/how-to-verify-a-net-worth-certificate">membership number</a>. That is a check they intend to run, not a formality to be satisfied on paper.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Net Worth Certificate Service: What You Receive</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What&#x27;s included</th><th>Frequency</th></tr></thead>
                    <tbody>
                        <tr><td>Signed net worth certificate</td><td>The certificate on our letterhead, naming the person, the date the figure speaks to and the purpose it was issued for, with a UDIN generated against it.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Statement of assets and liabilities</td><td>An annexure listing every asset and liability on its own line, with the valuation basis beside each; it also shows <a href="/blog/how-to-calculate-net-worth-for-a-net-worth-certificate">how the figure itself is calculated</a>.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Valuation basis note</td><td>A short note giving the basis chosen for each asset with no quoted price, so a reader who disputes a figure can see the reasoning instead of only the number.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Encumbrance and charge summary</td><td>A schedule of which assets carry a <a href="/glossary/networth/encumbrance-certificate">registered charge</a>, and what is left once those charges are set against the borrowings they secure.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Drafting to the recipient's form</td><td>The certificate drawn to the form the bank, consulate, court or tender committee asks for, confirmed with that recipient before anything is signed.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Signed PDF and letterhead copies</td><td>A signed PDF for immediate submission and hard copies on letterhead, with notarisation or <a href="/glossary/networth/stamp-duty">franking</a> arranged where the receiving body expects it.</td><td><span class="badge-included">Per engagement</span></td></tr>
                        <tr><td>Reissue on a changed date</td><td>A fresh certificate where the recipient wants a later date, drawn from updated records and never re-dated from the one already issued.</td><td><span class="badge-included">On request</span></td></tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="advisory-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow">Advisory</span>
            <h2 class="section-title">Advisory: Getting the Statement Right Before It Is Certified</h2>
            <div class="content-text">
                <ul class="al-list">
                    <li><span class="al-t">What a consultant reviews before anything is signed</span><span class="al-d">Most people who look for a net worth certificate consultant are not looking for advice at all. They have been handed a requirement and want somebody to tell them what it actually means. That conversation is the advisory work, and it happens before any record is opened. We establish who is being certified, what the recipient asked for in their own words, and the date the figure has to speak to. Where a client arrives with a figure already in mind, we say plainly whether the records will support it.</span></li>
                    <li><span class="al-t">Valuing property and unlisted holdings</span><span class="al-d">The two entries that need judgement rather than arithmetic are immovable property and shares in a private company. Neither has a quoted price, so both need a basis, and the basis is what a reader will question. For property we work from the registered instrument, comparable transactions and the state's own guidance value, and where the amount justifies it, a registered valuer's report. For unlisted shares we work from the company's <a href="/statutory-audit">audited accounts</a> on a stated method. Both bases go into the annexure rather than staying in our working papers.</span></li>
                    <li><span class="al-t">When a certificate is the wrong document</span><span class="al-d">Advisory sometimes means telling a client not to buy anything. Where a bank has asked for audited accounts, a certificate adds nothing. Where a tender named a sum, a <a href="/solvency-certificate">solvency certificate</a> answers the question and a net worth certificate does not. Where the requirement is a valuation of one asset, a registered valuer is the right professional and a chartered accountant is not. We would rather say that at the first call than issue a document that gets returned.</span></li>
                    <li><span class="al-t">What advisory costs you in time rather than money</span><span class="al-d">The review adds a conversation before the engagement rather than a stage inside it. In most cases it takes one call and changes nothing. Where it does change something, it changes it early. A client discovers the recipient wants a different document. Or that two properties need a valuation basis nobody expected, or that the assumed date is not the one being asked for. Each of those found afterwards means the certificate is reissued. Found first, it costs a question.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="dpiit-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow"><a href="/startup-registration">Startup India</a></span>
            <h2 class="section-title">DPIIT and Startup India Recognition</h2>
            <div class="content-text">
                <ul class="al-list">
                    <li><span class="al-t">Where net worth appears in a DPIIT application</span><span class="al-d">Startup India recognition through the DPIIT portal does not ask for a net worth certificate as a named document in every case. What it asks for is evidence of the entity, its incorporation and its funding position. A certified net worth statement is how founders most often evidence the last of those, when an investor, an incubator or a state scheme asks for it alongside the DPIIT number. The certificate supports the application rather than being the application.</span></li>
                    <li><span class="al-t">Founder net worth against entity net worth</span><span class="al-d">This is where most startup files go wrong. The DPIIT recognition attaches to the entity, so where a scheme asks for the startup's position it means the <a href="/net-worth-certificate-for-company">company or LLP</a>, read from its own accounts. Where an incubator or a state subsidy asks for the founder's position it means the individual, including everything they hold outside the business. The two are different documents with different bases, and a founder who supplies one where the other was asked for is sent back. We establish which is wanted before drafting, because for an early-stage company the entity figure is frequently small and the founder figure is not.</span></li>
                    <li><span class="al-t">What the certificate is asked to show for a startup</span><span class="al-d">For an early-stage company the useful statement is rarely a large one. What a reader wants is a position they can rely on. Paid-up capital actually received rather than subscribed. Any premium sitting in the <a href="/glossary/networth/securities-premium">securities premium</a> account, losses carried forward stated openly, and founder loans identified as a liability rather than capital. That last point causes more confusion than any other in startup files. A founder loan strengthens cash and weakens net worth at the same time, and a certificate that blurs the two is the one an investor questions in diligence. Recognition itself is free; what it unlocks is what the certificate is usually being prepared for. That distinction is worth settling before the statement is drafted.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">How We Issue a Net Worth Certificate, Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Six steps from the scope conversation to a signed certificate carrying a UDIN.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Scope and engagement agreed</h3>
    <p class="step-description">We settle who is being certified, the date the figure will speak to, and the form the recipient has asked for. An engagement letter records that scope, so what the certificate covers and what it deliberately leaves out are both fixed before any record is opened.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate/step-1-scope-and-engagement-agreed.webp" alt="We settle who is being certified, the date the figure will speak to, and the form the recipient has asked for" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Asset records traced</h3>
    <p class="step-description">Each holding is traced to the record that governs it: the sub-registrar entry for land, the society register for a flat, the depository statement for listed securities and the company's own register for unlisted shares. Anything that cannot be traced to a record is raised with you rather than carried.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate/step-2-asset-records-traced.webp" alt="Each holding is traced to the record that governs it, the sub-registrar entry for land, the society register for a flat" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Valuation basis fixed and disclosed</h3>
    <p class="step-description">A basis is chosen for every asset that has no quoted price, and that basis is written into the annexure rather than left implicit. A reader who disagrees with a figure can then see the reasoning behind it instead of only the number.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate/step-3-valuation-basis-fixed-and-disclosed.webp" alt="A basis is chosen for every asset that has no quoted price, and that basis is written into the annexure rather than left" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Liabilities and charges netted</h3>
    <p class="step-description">Borrowings are set against the assets they secure, and any registered charge is shown against the asset it sits on. The result is a position stated after encumbrances, which is what a lender, a court or a consulate is entitled to rely on.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate/step-4-liabilities-and-charges-netted.webp" alt="Borrowings are set against the assets they secure, and any registered charge is shown against the asset it sits on" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Management representation obtained</h3>
    <p class="step-description">You review the <a href="/glossary/networth/statement-of-affairs">statement of affairs</a>, confirm the holdings are complete and sign a <a href="/glossary/networth/management-representation-letter">management representation letter</a>. This is the point at which an omission costs nothing to correct, and after which correcting it means reissuing the certificate.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate/step-5-management-representation-obtained.webp" alt="You review the statement of affairs, confirm the holdings are complete and sign a management representation letter" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Signed and UDIN generated</h3>
    <p class="step-description">A <a href="/net-worth-certificate-by-ca">practising chartered accountant</a> signs the certificate and generates a UDIN against it on the ICAI portal. The annexure is released alongside, so the recipient can verify both the signature and the arithmetic without coming back to you.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate/step-6-signed-and-udin-generated.webp" alt="A practising chartered accountant signs the certificate and generates a UDIN against it on the ICAI portal" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
        </div>
    </div>
</section>

<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for a Net Worth Certificate</h2>
            <div class="content-text">
                <p>Everything below is source material rather than a summary, because each figure in the statement is traced back to the record that governs it. The first list is needed on every engagement; the second applies where you hold those assets.</p>
                <ul>
                    <li>PAN of the person being certified, as it appears on the income tax record</li>
                    <li><a href="/income-tax-return">Income tax returns</a> with the computation of income for the last three years</li>
                    <li>Bank and savings account statements for every account, for the full period, in PDF</li>
                    <li>Registered sale deed or conveyance for each immovable property, with the latest property tax receipt</li>
                    <li>Demat holding statement from CDSL or NSDL as at the certificate date</li>
                    <li>Fixed deposit receipts, with the bank's balance confirmation where one is available</li>
                    <li>Latest statement for every loan, overdraft and credit card, with the sanction letter</li>
                </ul>
                <p><strong>Where they apply:</strong></p>
                <ul>
                    <li>Share certificates or the register of members for unlisted holdings, with that company's latest <a href="/statutory-audit">audited balance sheet</a></li>
                    <li>Insurance policy documents showing the surrender value, where policies are to be counted</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Net Worth Certificate Problems and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Why it happens</th><th>How it is handled</th></tr></thead>
                    <tbody>
                        <tr><td>Certificate returned for the wrong format</td><td>Banks, courts, consulates and tender committees each prescribe their own wording, and a certificate written to a general template matches none of them.</td><td>The recipient's format is confirmed before drafting begins, and the certificate is drawn to it; <a href="/blog/net-worth-certificate-specimens">a masked specimen of the finished certificate</a> shows what the finished document looks like.</td></tr>
                        <tr><td>Holdings counted that cannot be evidenced</td><td>Household gold, money lent to a friend and property standing in a relative's name all feel like wealth, but no record ties them to the person being certified.</td><td>Anything without a traceable record is put back to you, then either evidenced properly or shown on the face of the certificate as excluded.</td></tr>
                        <tr><td>A gross total offered where a <a href="/glossary/networth/adjusted-net-worth">net position</a> was wanted</td><td>Adding up what you own without deducting what is secured against it produces a larger number, and the reader simply performs the subtraction themselves.</td><td>Borrowings are set against the assets securing them and every registered charge is shown, so the figure survives the reader's own arithmetic.</td></tr>
                        <tr><td>No basis given for an unquoted asset</td><td>A number with no stated basis invites the reader to substitute one of their own, and the basis they choose is always the more conservative.</td><td>Every asset without a market price carries its valuation basis in the annexure, so the reasoning is visible even to somebody who disagrees with it.</td></tr>
                        <tr><td>The date it speaks to has drifted</td><td>A certificate fixes a position on one day. No statute sets a <a href="/blog/net-worth-certificate-validity-in-india">validity period</a>, so each recipient imposes its own recency rule and applications sit in queues meanwhile.</td><td>A later date is treated as a new engagement on refreshed records, so the second certificate rests on evidence gathered for it rather than inherited.</td></tr>
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
            <h2 class="section-title">Net Worth Certificate Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Plan</th><th>Fee</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Standard</strong> &mdash; One individual with records in order, a normal spread of bank balances, one or two properties and listed holdings.</td><td>Starting from INR 1999<br><span style="font-size:12px;color:var(--text-muted);">(Exl GST and Govt. Charges)</span></td></tr>
                        <tr><td><strong>Extended</strong> &mdash; Several properties, unlisted shareholdings needing a stated valuation basis, or records that must be reconstructed before anything can be certified.</td><td>On quote</td></tr>
                        <tr><td><strong>Multiple certificates</strong> &mdash; Two or more people certified from a single engagement, such as joint applicants or a family filing together.</td><td>On quote</td></tr>
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
                <p style="margin-top:16px;"><strong>Get a free consultation &mdash; <a href="tel:+919459456700">Call +91 94594 56700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate" target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Why It Matters</div>
            <h2 class="section-title">Why a Net Worth Certificate Matters</h2>
        </div>
        <div class="features-grid is-4">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
  <h3 class="feature-title">A Self-Declaration Gets Sent Back</h3>
  <p class="feature-text">A statement you prepare yourself carries no independent verification, and most recipients will not accept it. The request is usually made once, so a rejected self-declaration costs you the time it takes to commission the certificate you should have sent first.</p>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
  <h3 class="feature-title">An Undated Figure Proves Nothing</h3>
  <p class="feature-text">Net worth changes with every transaction. A figure with no date attached cannot be checked against anything. A recipient who cannot tell when it was true will treat it as an assertion, and act accordingly.</p>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
  <h3 class="feature-title">An Unverifiable Signature Stalls the File</h3>
  <p class="feature-text">Recipients increasingly check a UDIN before acting on a certificate. One issued without a traceable identifier invites a query at exactly the point in the process where you have the least time to answer it.</p>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
  <h3 class="feature-title">Unsupported Entries Reopen the Whole Statement</h3>
  <p class="feature-text">A single figure that cannot be evidenced casts doubt on the ones beside it. Once a reader starts checking, the burden moves from the certificate to you, and the questions rarely stop at the entry that prompted them.</p>
</article>
        </div>
    </div>
</section>

<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Clients Choose Patron for Net Worth Certificates</h2>
            <p class="section-intro">Five things you can check before you commission the certificate. Each is a claim with the proof behind it.</p>
            <div class="why-patron-grid">
                <div><strong>Holdings tied to their own records</strong><p>Nothing reaches the certificate on assurance alone. A flat goes back to the society register, listed shares to the depository statement, land to the registered instrument, and whatever cannot be traced is shown as excluded.</p></div>
                <div><strong>Issued under the ICAI Guidance Note</strong><p>Certificates for special purposes follow the ICAI Guidance Note. The scope, the basis and the limitations appear on the face of the document rather than being left for a reader to infer.</p></div>
                <div><strong>UDIN on every certificate</strong><p>Each certificate carries a UDIN generated on the ICAI portal, so a bank, court or consulate can confirm it came from a practising chartered accountant without contacting us at all.</p></div>
                <div><strong>Annexure sent, not withheld</strong><p>The full computation travels with the certificate. Anyone who wants to check the arithmetic can do it from the document already in front of them.</p></div>
                <div><strong>Fifteen years, three thousand businesses</strong><p>A CA and CS team with 15+ years in practice across 3,000+ businesses and 25,000+ filings completed, so certification sits alongside the audit work the figures are drawn from.</p></div>
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
            <h2 class="section-title">Work Out Your Net Worth Before You Apply</h2>
            <div class="content-text">
                <p>Add your holdings and what you owe against them, and the calculator returns the position a certificate would state. It is an estimate from figures you enter rather than a certified computation, so treat the result as a starting point for the conversation rather than as the number itself.</p>

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
                        <h3 class="nwt-title">Free tool: Net Worth Calculator</h3>

                        <div class="nwt-field">
                            <span class="nwt-label">Amounts entered in</span>
                            <div class="nwt-toggle" id="nwtUnit" role="group" aria-label="Unit">
                                <button type="button" class="nwt-tbtn active" data-unit="rupees">&#8377; Rupees</button>
                                <button type="button" class="nwt-tbtn" data-unit="lakh">&#8377; Lakh</button>
                                <button type="button" class="nwt-tbtn" data-unit="crore">&#8377; Crore</button>
                            </div>
                        </div>

                        <div class="nwt-cols nwt-cols--2">
                            <div class="nwt-col">
                                <h4>What you own</h4>
                                <div class="nwt-row"><label for="nwt-g0-0">Immovable property</label><input class="nwt-input" type="text" id="nwt-g0-0" data-nwt="g0" data-name="Immovable property" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-1">Bank balances</label><input class="nwt-input" type="text" id="nwt-g0-1" data-nwt="g0" data-name="Bank balances" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-2">Fixed and term deposits</label><input class="nwt-input" type="text" id="nwt-g0-2" data-nwt="g0" data-name="Fixed and term deposits" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-3">Listed shares and mutual funds</label><input class="nwt-input" type="text" id="nwt-g0-3" data-nwt="g0" data-name="Listed shares and mutual funds" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-4">Unlisted shareholdings</label><input class="nwt-input" type="text" id="nwt-g0-4" data-nwt="g0" data-name="Unlisted shareholdings" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-5">Provident fund and PPF</label><input class="nwt-input" type="text" id="nwt-g0-5" data-nwt="g0" data-name="Provident fund and PPF" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-6">Jewellery and other valuables</label><input class="nwt-input" type="text" id="nwt-g0-6" data-nwt="g0" data-name="Jewellery and other valuables" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g0-7">Other assets</label><input class="nwt-input" type="text" id="nwt-g0-7" data-nwt="g0" data-name="Other assets" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                            </div>
                            <div class="nwt-col">
                                <h4>What you owe</h4>
                                <div class="nwt-row"><label for="nwt-g1-0">Housing loan outstanding</label><input class="nwt-input" type="text" id="nwt-g1-0" data-nwt="g1" data-name="Housing loan outstanding" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-1">Vehicle loan outstanding</label><input class="nwt-input" type="text" id="nwt-g1-1" data-nwt="g1" data-name="Vehicle loan outstanding" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-2">Personal and business loans</label><input class="nwt-input" type="text" id="nwt-g1-2" data-nwt="g1" data-name="Personal and business loans" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-3">Overdraft drawn</label><input class="nwt-input" type="text" id="nwt-g1-3" data-nwt="g1" data-name="Overdraft drawn" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-4">Credit card balances</label><input class="nwt-input" type="text" id="nwt-g1-4" data-nwt="g1" data-name="Credit card balances" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                                <div class="nwt-row"><label for="nwt-g1-5">Other liabilities</label><input class="nwt-input" type="text" id="nwt-g1-5" data-nwt="g1" data-name="Other liabilities" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                            </div>
                        </div>

                        <button type="button" class="nwt-calc" id="nwtCalc">Calculate Net Worth</button>

                        <div class="nwt-result" id="nwtResult">
                            <div class="nwt-rgrid">
                                <div class="nwt-rcard"><div class="nwt-rlabel">Total assets</div><div class="nwt-rval" id="nwtA">&mdash;</div></div>
                                <div class="nwt-rcard"><div class="nwt-rlabel">Total liabilities</div><div class="nwt-rval" id="nwtB">&mdash;</div></div>
                                
                                <div class="nwt-rcard full"><div class="nwt-rlabel">Estimated net worth</div><div class="nwt-rval" id="nwtNet">&mdash;</div></div>
                                
                            </div>
                            <div class="nwt-break" id="nwtBreak"></div>
                            <div class="nwt-actions">
                                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate" target="_blank" rel="noopener" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="#25D366" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a>
                                <a href="/tools/nwc-document-checklist" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg> NWC Document Checklist</a>
                                <a href="/tools/company-net-worth-calculator" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg> Company Net Worth Calculator</a>
                            </div>
                            <button type="button" class="nwt-reset" id="nwtReset">&#8635; Reset Calculator</button>
                        </div>

                        <p class="nwt-note">An estimate from the figures you enter. It is not a certified computation, carries no UDIN, and no bank, consulate or court will accept it in place of a certificate.</p>
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

                    var SIGNS = [1,-1], DED10 = [0,0], NOF10 = false;
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
                            rows += row('Owned funds', money(subtotal));
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
                            ? rows + row('<strong>Estimated net worth</strong>', '<strong>' + money(net) + '</strong>')
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

                <p style="margin-top:16px;font-size:14px;"><a href="/tools/net-worth-calculator" target="_blank" rel="noopener" style="color:var(--blue);font-weight:600;">Open the full calculator &#8599;</a></p>
                <p style="margin-top:10px;font-size:14px;">Go deeper: </p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Legal and Professional Framework Behind Net Worth Certificates</h2>
            <div class="content-text">
                <p>A net worth certificate is not a creature of any single statute. It is a certificate for a special purpose, and what governs it is the professional framework a chartered accountant works within rather than a section that defines the document itself. That framework is what makes the figure worth anything to a reader who has never met you.</p>
                <p>The law that matters therefore comes from two directions. The pronouncements below govern how the certificate is prepared and signed, while the property and company statutes govern what the underlying holdings actually are and who owns them.</p>
                <ul class="al-list">
                    <li><span class="al-t"><strong>ICAI Guidance Note on Reports or Certificates for Special Purposes (Revised 2016)</strong></span><span class="al-d">governs certificates issued for a special purpose. The scope, the basis of preparation and any limitation appear on the face of the document, and a written representation is taken from the person certified.</span></li>
                    <li><span class="al-t"><strong>ICAI Council direction on UDIN, mandatory from 1 February 2019</strong></span><span class="al-d">requires a Unique Document Identification Number on every certificate signed by a practising chartered accountant, generated on the ICAI portal so that any recipient can confirm the signatory independently.</span></li>
                    <li><span class="al-t"><strong>Section 17, Registration Act 1908</strong></span><span class="al-d">makes the instrument transferring immovable property compulsorily registrable, which is why title is evidenced from the registered document rather than from a tax receipt or an allotment letter.</span></li>
                    <li><span class="al-t"><strong>Transfer of Property Act 1882</strong></span><span class="al-d">governs when title to immovable property actually passes, which matters where a flat is occupied and paid for but the transfer was never completed in the manner the Act requires.</span></li>
                    <li><span class="al-t"><strong>Section 88, Companies Act 2013</strong></span><span class="al-d">requires a company to maintain a register of members, which is the record an unlisted shareholding is verified against where no depository statement exists.</span></li>
                    <li><span class="al-t"><strong>SQC 1, on engagement documentation and retention</strong></span><span class="al-d">requires the working papers behind the certificate to be retained, so the basis for any figure can still be produced long after the engagement has closed.</span></li>
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
                    <h2 class="faq-expanded__title">Net Worth Certificate FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on what goes into the statement, how each figure is evidenced, and what the certificate does and does not say.</p>
                    <a class="faq-expanded__cta" href="https://www.patronaccounting.com/contact-us">Still have a question? Talk to a CA &rarr;</a>
                    <div class="faq-enquiry">
  <h3 class="faq-enquiry__title">Ask about your certificate</h3>
  <p class="faq-enquiry__sub">Send your requirement for a scoped quote.</p>
  <a class="faq-enquiry__btn" href="#consultationFormCard">Get a Callback</a>
</div>
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Whose assets can be included when the certificate covers one individual?</h3>
  <div class="faq-expanded__a"><p>Only assets the individual legally owns on the certificate date. Property in a spouse's or parent's name stays out even where the individual paid for it. So do assets of a firm in which the person is a partner, because those belong to the firm. <a href="/blog/joint-owners-net-worth-certificate-explained">Jointly held</a> assets enter at the individual's share.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does the certificate value property at cost or at market value?</h3>
  <div class="faq-expanded__a"><p>Either basis is defensible, but the basis has to be stated. Cost is taken from the sale deed and is easy to evidence; <a href="/glossary/networth/fair-market-value-fmv">market value</a> needs a registered valuer's report or the applicable <a href="/glossary/networth/circle-rate">circle rate</a>. Mixing the two silently across a schedule is the most common reason a lender sends a certificate back.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Are credit-card dues and personal loans deducted from the figure?</h3>
  <div class="faq-expanded__a"><p>Yes. Every liability outstanding on the certificate date is deducted, including revolving card balances, personal and vehicle loans, and the drawn portion of an overdraft. The CA reconciles them against loan statements and the <a href="/glossary/networth/credit-information-report-cibil">credit information report</a>, since an undisclosed borrowing that later surfaces makes the whole certificate unreliable.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can gold and jewellery be counted as assets?</h3>
  <div class="faq-expanded__a"><p>They can, at a supportable value. Purchase invoices work for recently bought items; for inherited jewellery a valuer's certificate or a bank locker inventory is normally required. Because holdings are hard to verify independently, a schedule leaning heavily on jewellery draws more scrutiny. Embassies and lenders read it less easily than one built on bank and property assets.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is a provident fund balance part of an individual's net worth?</h3>
  <div class="faq-expanded__a"><p>Yes, the accumulated balance standing to the member's credit is an asset, evidenced by the EPFO passbook or the PPF account statement. Accrued gratuity is different: until it becomes due on separation it is a <a href="/glossary/networth/contingent-liability">contingent entitlement</a> rather than an owned asset. So it does not sit in the schedule.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">What happens if the declared assets do not match Form 26AS or the AIS?</h3>
  <div class="faq-expanded__a"><p>The mismatch has to be explained before the certificate is signed. The <a href="/glossary/networth/annual-information-statement-ais">Annual Information Statement</a> captures interest, dividend, securities transactions and large property registrations. So an asset visible there but missing from the schedule is a gap the CA must resolve. Gifts, inheritances and pre-existing assets are legitimate explanations that get documented.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can the certificate be drawn up as at a past date?</h3>
  <div class="faq-expanded__a"><p>Yes. Certificates are routinely issued as at 31 March, or as at the date a loan application or court proceeding was filed. The recipient wants the position on that specific day. The evidence then has to be the position on that day, not today's balances, and the date appears on the face of the document.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can a non-resident Indian obtain a certificate from an Indian chartered accountant?</h3>
  <div class="faq-expanded__a"><p>Yes, and it is common for visa, immigration and property transactions. The CA covers Indian assets from Indian evidence, and includes overseas assets only where the client supplies foreign bank or brokerage statements. Documents can be signed and shared electronically, so physical presence in India is not required.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does an individual need audited accounts before the certificate can be issued?</h3>
  <div class="faq-expanded__a"><p>No. Individuals are not required to have their personal affairs audited, and the certificate rests on a statement of affairs the client signs plus the underlying evidence. Where the individual runs a business whose accounts are audited under section 44AB, those audited figures feed the business portion of the schedule.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Are inherited assets included before the succession is complete?</h3>
  <div class="faq-expanded__a"><p>Not until title passes. An asset still standing in a deceased parent's name is not the individual's property, however certain the eventual inheritance is. Once a will is probated or a <a href="/glossary/networth/succession-certificate">succession</a> or <a href="/glossary/networth/legal-heir-certificate">legal heir certificate</a> is issued and mutation is recorded, the asset enters the schedule at the heir's share.</p></div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Net Worth Certificate Deadlines That Cannot Slip</h2>
            <div class="content-text">
<p>The deadline on a net worth certificate is never statutory. It belongs to the bank, the consulate, the court or the tender committee that asked for one. Establish what date they want the figure to speak to, and whether it has to be legalised, before anything is drafted. Call or WhatsApp <a href="tel:+919459456700">+91 94594 56700</a> and we will confirm both with you.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Net Worth Certificate with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
<p style="color:rgba(255,255,255,0.88);">Most people reach this page holding a requirement somebody else set. The useful next move is not to order a certificate. Go back to whoever asked and settle two things: the form they want, and the date the figure must speak to. Almost every returned certificate failed on one of those rather than on the arithmetic. Send us what the recipient asked for, and we will tell you which of your records the position can actually be built from.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128222; Call +91 94594 56700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20a%20Net%20Worth%20Certificate&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20net%20worth%20certificate%20and%20would%20like%20to%20know%20more.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Speak to a chartered accountant at Patron on <a href="tel:+919459456700">+91 94594 56700</a>, by call or WhatsApp.</p>
        </div>
    </div>
</section>

<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Net Worth Certificates in Five Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Local teams issuing this certificate in these cities.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Cities We Serve</div>
                <div class="pa-block-sub">On-ground teams</div>
                <div class="pa-city-grid"><a href="https://www.patronaccounting.com/net-worth-certificate/ahmedabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M7 21V12h10v9"/><path d="M7 12a5 5 0 0 1 10 0"/><path d="M10 21v-3a2 2 0 1 1 4 0v3"/><path d="M4 21V8M20 21V8"/><path d="M3 8a1 1 0 1 1 2 0M19 8a1 1 0 1 1 2 0"/></svg></div><div><div class="pa-card-title">Ahmedabad</div><div class="pa-card-sub">Gujarat</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a></div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support</div>
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/net-worth-certificate-by-ca" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate by CA</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-bank-loan" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Bank Loan</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-company" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Company</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-partnership-firms" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Partnership Firm</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-sole-proprietorship" class="pa-cross-card"><div class="pa-card-title">CA Certificate for Proprietorship Firm</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Visa</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-rera-registration" class="pa-cross-card"><div class="pa-card-title">CA Certificate for RERA</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-divorce" class="pa-cross-card"><div class="pa-card-title">Net Worth Statement for Divorce</div></a>
<a href="https://www.patronaccounting.com/solvency-certificate" class="pa-cross-card"><div class="pa-card-title">Solvency Certificate</div></a>
<a href="https://www.patronaccounting.com/net-owned-fund-certificate-for-nbfc" class="pa-cross-card"><div class="pa-card-title">Minimum Net Owned Fund for NBFC</div></a>
<a href="https://www.patronaccounting.com/glossary/networth" class="pa-cross-card"><div class="pa-card-title">Net Worth &amp; Solvency Glossary</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">More From Patron Accounting</div>
                <div class="pa-block-sub">Outside this practice, and mentioned on this page</div>
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-title">GST Registration</div></a>
<a href="https://www.patronaccounting.com/statutory-audit" class="pa-cross-card"><div class="pa-card-title">Statutory Audit</div></a>
<a href="https://www.patronaccounting.com/llp-incorporation" class="pa-cross-card"><div class="pa-card-title">LLP Incorporation</div></a>
<a href="https://www.patronaccounting.com/startup-registration" class="pa-cross-card"><div class="pa-card-title">Startup India Registration</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">Read Next</div>
                <div class="pa-block-sub">The detail behind each figure on this page</div>
                <ul class="pa-read-list">
                    <li><a href="/blog/can-cma-issue-a-net-worth-certificate">Can a CMA Issue a Net Worth Certificate? CA vs CMA vs CS</a></li>
                    <li><a href="/blog/net-worth-certificate-statistics">Net Worth Certificate Statistics &amp; Benchmarks</a></li>
                    <li><a href="/blog/balance-sheet-vs-net-worth-certificate">Balance Sheet vs Net Worth Certificate: The Difference</a></li>
                    <li><a href="/blog/documents-required-for-net-worth-certificate">Documents Required for a Net Worth Certificate: Full List</a></li>
                    <li><a href="/blog/net-worth-certificate-vs-itr">Net Worth Certificate vs ITR: Which Proof Works Where</a></li>
                    <li><a href="/blog/affidavit-of-support-vs-net-worth-certificate">Affidavit of Support vs Net Worth Certificate</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="eeat-review-wrap"><div class="eeat-review">
  <div class="eeat-review__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Reviewed by the CA &amp; CS Team, Patron Accounting LLP</div>
  <div class="eeat-review__meta">ICAI &amp; ICSI registered &nbsp;&middot;&nbsp; 15+ years in Indian accounting &amp; certification &nbsp;&middot;&nbsp; Last reviewed 3 August 2026 &nbsp;&middot;&nbsp; Next review 3 November 2026</div>
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
