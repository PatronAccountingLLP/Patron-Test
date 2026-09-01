{{-- /net-worth-certificate-for-visa
     Generated from Generated Pages/net-worth-certificate-for-visa/net-worth-certificate-for-visa.html by Scripts/build_blade.py.
     That file is built from the cluster's signed-off workbooks by build_page.py;
     nothing here is authored. Re-run both rather than editing this file.

     Before this goes live:
       - deploy public/images/networth-cluster/net-worth-certificate-for-visa/** and public/certificates/**
       - deploy public/css/nwc-spec.css (new to Patron Local)
       - patron-cluster.css and faq.css are already live; do not overwrite them
       - the hero form is partials/enquiry-form.blade.php (Zoho Bigin), swapped in
         at build time with this page's service pre-selected; the FAQ block is a
         CTA that scrolls to it, so there is one Bigin form per page. --}}
@extends('layouts.service-app')

@section('meta')
    <title>Net Worth Certificate for Visa Applications in India</title>
    <meta name="description" content="A CA-certified statement of funds for consulates, presented in rupees and a second currency where the mission asks for it, with apostille and the UDIN handled.">
    <link rel="canonical" href="https://www.patronaccounting.com/net-worth-certificate-for-visa">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Visa Net Worth Certificates, Consulate-Ready">
    <meta property="og:description" content="Certified proof of funds for your visa file, prepared to the mission's own expectations and timed to your appointment.">
    <meta property="og:url" content="https://www.patronaccounting.com/net-worth-certificate-for-visa">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Visa Net Worth Certificates, Consulate-Ready">
    <meta name="twitter:description" content="Certified proof of funds for your visa file, prepared to the mission's own expectations and timed to your appointment.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "Service",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-visa#service",
   "name": "Net Worth Certificate for Visa Applications in India",
   "description": "A CA-certified statement of funds for consulates, presented in rupees and a second currency where the mission asks for it, with apostille and the UDIN handled.",
   "provider": {
    "@id": "https://www.patronaccounting.com/#organization"
   },
   "areaServed": "India",
   "url": "https://www.patronaccounting.com/net-worth-certificate-for-visa"
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-visa#breadcrumb",
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
     "name": "Net Worth Certificate for Visa",
     "item": "https://www.patronaccounting.com/net-worth-certificate-for-visa"
    }
   ]
  },
  {
   "@type": "FAQPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-visa#faq",
   "datePublished": "2026-07-30T10:00:00+05:30",
   "dateModified": "2026-08-05T10:00:00+05:30",
   "mainEntity": [
    {
     "@type": "Question",
     "name": "Does the certificate have to show amounts in a foreign currency as well as rupees?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Many consulates prefer it. A dual-currency presentation shows each asset in rupees and the total converted into the destination currency, so the visa officer is not left doing arithmetic. The conversion rate and its date are printed alongside, because a total quoted without a stated rate is not verifiable."
     }
    },
    {
     "@type": "Question",
     "name": "Which exchange rate is used to convert the net worth figure?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "A published reference rate as at the certificate date, most often the Reserve Bank of India's reference rate or the bank's telegraphic transfer buying rate. Whichever is used is named in the certificate. Using a rate from a random website, or an undated rate, is the flaw consulates pick up on most often."
     }
    },
    {
     "@type": "Question",
     "name": "Do consulates accept a certificate issued several months earlier?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Rarely. Most missions treat financial evidence as current only for a short window. Many ask for documents dated within three months of the application, and some within one month. Because the certificate states the position on a single date, an old one is easy to reject, so it is usually obtained after the appointment is booked."
     }
    },
    {
     "@type": "Question",
     "name": "Can a sponsor's certificate be used when the applicant has few assets of their own?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, and it is the normal route for students and dependent applicants. The sponsor's own net worth certificate is filed alongside proof of the relationship and the sponsor's consent to fund the trip. The applicant's own position is still disclosed, because a mission assessing intent looks at both sides."
     }
    },
    {
     "@type": "Question",
     "name": "Is a separate certificate needed for each traveller in a family application?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Not where one person funds the trip. A single certificate in the funding member's name, listing the dependants being sponsored, covers a family application in most missions. Where two spouses each hold assets and both are being assessed on their own means, two certificates are cleaner than one joint document."
     }
    },
    {
     "@type": "Question",
     "name": "Does the certificate have to be apostilled before it is submitted?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "For a visa application, almost never. Missions accept the original signed certificate and verify the UDIN themselves. Apostille under the 1961 Hague Convention comes into play for immigration, court and university filings where the foreign authority needs the document legalised. It is obtained through the Ministry of External Affairs."
     }
    },
    {
     "@type": "Question",
     "name": "Can a student's parents' assets be certified for a study visa?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, and this is the usual arrangement. The parents' net worth certificate demonstrates the family's capacity to fund tuition and living costs. It is read with the sponsor's undertaking and the loan sanction letter where an education loan is involved. Universities and missions both look at the same document."
     }
    },
    {
     "@type": "Question",
     "name": "Can a visa be refused even when the certified net worth is high?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. A net worth certificate answers only whether the funds exist; it says nothing about whether the money is liquid, lawfully sourced or genuinely available for the trip. Refusals commonly cite unexplained recent deposits, funds locked in illiquid property, or weak ties to India rather than an inadequate total."
     }
    },
    {
     "@type": "Question",
     "name": "Can a visa be refused because of outstanding debt?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Debt alone rarely decides an application, but it is read alongside everything else. A certificate showing borrowings close to the value of the assets tells a mission that little is genuinely free to fund the trip. Undisclosed debt that surfaces in the bank statements does more damage than the borrowing itself, because it goes to credibility."
     }
    },
    {
     "@type": "Question",
     "name": "Are assets held outside India included in a visa net worth certificate?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "They can be, provided the client produces foreign bank, brokerage or property evidence the CA can verify. Overseas holdings also carry a disclosure trail, since resident individuals report foreign assets in Schedule FA of the income tax return. A foreign asset in the certificate but absent from Schedule FA invites exactly the scrutiny the applicant wants to avoid."
     }
    }
   ]
  },
  {
   "@type": "WebPage",
   "@id": "https://www.patronaccounting.com/net-worth-certificate-for-visa#webpage",
   "url": "https://www.patronaccounting.com/net-worth-certificate-for-visa",
   "name": "Net Worth Certificate for Visa Applications in India",
   "description": "A CA-certified statement of funds for consulates, presented in rupees and a second currency where the mission asks for it, with apostille and the UDIN handled.",
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
@php(config(['pa.testimonials_rendered' => true])) {{-- this page builds its own testimonials; the layout stands down --}}
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

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">Net Worth Certificate for Visa</h1>

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
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Origin established for each balance</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Legalisation sequenced correctly</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Checkable by the mission itself</span></p></div>
                        <div class="hero-benefit"><span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span><p class="mb-0 text-dark benefit-paragraph"><span>Both currencies, rate dated</span></p></div>
                    </div>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 94594 56700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20a%20Net%20Worth%20Certificate%20for%20Visa&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20net%20worth%20certificate%20for%20visa%20and%20would%20like%20to%20know%20more.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate%20for%20visa" target="_blank" rel="noopener" class="btn-sample text-decoration-none">
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
                    'service'  => 'Net Worth Certificate for Visa',
                ])
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section">
  <div class="section-container">
    <div class="section-header">
      <h2>What Our Visa Net Worth Certificate Clients Say</h2>
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
            <a href="#comparison-section" class="toc-btn">Comparison</a>
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
            <h2 class="section-title">Visa Net Worth Certificate: Scope, Deliverables and Who It Suits</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR &mdash; Net Worth Certificate for Visa at a Glance</strong></p>
                    <p>A net worth certificate for visa applications tells a consulate what the applicant or sponsor is actually worth, certified rather than declared. Missions differ: some publish a figure, others only ask that funds be demonstrably yours and traceable. The certificate states assets and liabilities on one date, shows the total in rupees and a second currency where required, and carries a UDIN.</p>
                </div>
<p>Funds evidence is where otherwise straightforward applications stall. Applicants assume there is one figure to hit, then find the mission's checklist asks about the source and traceability of the money, not only its size. A recent transfer into an account raises the very question it was meant to answer. A sponsor's position has to be evidenced as carefully as the applicant's own, and neither is helped by a balance that cannot be traced to a source.</p><p>Order matters more than most people expect. Where a document has to be legalised, the <a href="/glossary/networth/apostille">apostille</a> attaches to the signed original. So the certificate is drawn in final form before it goes near the <a href="https://www.mea.gov.in" target="_blank" rel="noopener">Ministry of External Affairs</a>. <a href="/tools/embassy-nwc-format-library">What each destination expects</a> differs, from student files to business visitors, and an affidavit of support sits alongside the certificate where the funds are someone else's.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is a Net Worth Certificate for a Visa Application?</h2>
                <div class="content-text what-is-definition">
<p>For a visa file, the certificate records the applicant's or sponsor's assets and liabilities as a <a href="/net-worth-certificate-by-ca">chartered accountant</a> has verified them. It is submitted to a mission alongside the rest of a funds file.</p><p>It is worth being clear about what it is not. It is not a bank statement, and it does not by itself show that funds are liquid or available for transfer. It reports holdings on one date, not income, and not the maintenance of a balance over a qualifying period. Missions that require funds to have been held for a stated number of months look to statements for that.</p>
                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key terms on this page:</strong></p>
                    <div class="key-terms"><ul class="al-list">
                    <li><span class="al-t"><a href="/glossary/networth/liquid-assets">Liquid Assets</a></span><span class="al-d">Liquid assets are holdings that can be converted into cash quickly and at a value that can be predicted in advance.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/proof-of-funds-pof">Proof of Funds (POF)</a></span><span class="al-d">Proof of funds is evidence that an applicant has money available for a stated purpose.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/blocked-account">Blocked Account</a></span><span class="al-d">A blocked account is a bank account opened in the destination country into which a student deposits a year's living costs before the visa is granted.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/source-of-funds">Source of Funds</a></span><span class="al-d">Source of funds and proof of balance answer different questions, and files fail on the difference more often than on the amount.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/liberalised-remittance-scheme-lrs">Liberalised Remittance Scheme (LRS)</a></span><span class="al-d">The liberalised remittance scheme permits a resident individual to remit money abroad up to a limit in each financial year, for a defined set of purposes.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/foreign-inward-remittance-certificate-firc">Foreign Inward Remittance Certificate (FIRC)</a></span><span class="al-d">A foreign inward remittance certificate evidences that money arriving in an Indian account came from abroad, naming the remitter, the amount, the currency, the date and the purpose declared for the transfer.</span></li>
                    <li><span class="al-t"><a href="/glossary/networth/apostille">Apostille</a></span><span class="al-d">An apostille certifies that a signature on a public document is genuine and that the person who signed held the office they claimed.</span></li>
                    </ul></div>
                </div>
            </div>
            <div class="column-image"><img src="/images/networth-cluster/net-worth-certificate-for-visa/what-is.webp" alt="Holdings on one date verified for a funds file, distinct from the bank statements a mission reads for balances" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);box-shadow:var(--shadow-md);"></div>
        </div>
    </div>
</section>

<section class="content-section specimen-section" id="specimen-section">
  <div class="content-container">
    <div class="text-content">
      <div class="specimen-item">
        <div class="specimen-caption"><div class="specimen-sticky">
          <h2 class="section-title">What a Net Worth Certificate for a Visa Looks Like: A Masked Specimen</h2>
          <p class="section-subtitle" style="text-align:left;max-width:100%;">Every figure in the sample below is masked. What it shows is the shape of the document you receive: what it states, on whose authority, and as at which date.</p>
          <div class="specimen-pane is-active" data-spec-pane="0">
            <h3>Dual currency certificate for a visa file</h3>
            <p>The sample carries the position in rupees and again in the currency the mission works in, with the reference rate and its own date printed beside the conversion. That leaves nothing for a consular officer to convert at a rate of their choosing. It states the date the holdings are certified as at, which is what distinguishes it from the bank statements filed alongside it.</p>
            <a class="specimen-download" href="/certificates/05-net-worth-certificate-visa-dual-currency.pdf" download>Download this sample (PDF)</a>
          </div>
          <p class="specimen-masknote">All names, addresses, registration numbers and amounts are replaced with X characters. The sample carries a Patron Accounting watermark and a Specimen badge on every page so that a cropped screenshot still shows what it is.</p>
        </div></div>
        <div class="specimen-stack" id="specimenStack">
          <p class="specimen-stack__title">Sample document</p>
          <div class="specimen-tabs" role="tablist" aria-label="Choose a sample">
            <button type="button" role="tab" class="specimen-tab is-active" data-spec-tab="0" aria-selected="true">Dual currency certificate for a visa file</button>
          </div>
          <div class="specimen-frame" id="specimenFrame" role="button" tabindex="0" aria-label="Enlarge this sample">
            <div class="specimen-doc is-active" data-spec-doc="0"><article class="nwc-spec" aria-label="Net Worth Certificate — Visa / Embassy (dual currency) - specimen, all values masked, not a valid certificate">
  <svg class="nwc-spec__mark" aria-hidden="true" focusable="false">
    <defs><pattern id="nwcwm-05" width="400" height="230"
      patternUnits="userSpaceOnUse">
      <text x="16" y="150" transform="rotate(-24 16 150)">Patron Accounting</text>
    </pattern></defs>
    <rect width="100%" height="100%" fill="url(#nwcwm-05)"/>
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
  <div class="nwc-spec__to"><b>To,</b><br>The Visa Officer<br><span class="b">XXXXXXXXX XXXXXXX XX XXX XXXXXX XXXXXX XX XXXXXXX</span><br><span class="b">XXXXXX</span></div>
  <p>This is to certify that we have examined the Statement of Assets and Liabilities of
  <span class="b">XXXXX XXXXXX XXXXXXXXX</span>, holder of Indian Passport No. <span class="b">XXXXXXXX</span>, residing at <span class="b">XXXX XX, XXXXXXXX XXXXXXXXX, XXXXXXX, XXXX XXXXXX</span>, holding Permanent Account Number <span class="b">XXXXXXXXXX</span>,
  as at <span class="b">XX XXXXX XXXX</span>.</p>
  <p>Amounts are stated in Indian Rupees and converted into US Dollars at the reference rate of
  <b>1 USD = INR <span class="b">XX.XX</span></b> published by the Reserve Bank of India on <span class="b">XX XXXXX XXXX</span>.</p>
<h4>Statement of Assets and Liabilities</h4><table><caption class="nwc-spec__sr">Statement of Assets and Liabilities - all figures masked</caption><thead><tr><th style="width:50px">Sr.</th><th>Particulars</th><th class="num">Amount (INR)</th><th class="num">Amount (USD)</th></tr></thead><tbody><tr class="sub"><td>A</td><td><b>Assets</b></td><td class="num"></td><td class="num"></td></tr><tr><td>1</td><td>Immovable property &mdash; residential flat</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>2</td><td>Bank balances &mdash; savings accounts</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>3</td><td>Fixed deposits and term deposits</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>4</td><td>Investments &mdash; shares and mutual funds</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>5</td><td>Motor vehicles</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>6</td><td>Jewellery and other valuables</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>7</td><td>Other assets</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr class="sub"><td></td><td><b>Total Assets (A)</b></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr><tr class="sub"><td>B</td><td><b>Liabilities</b></td><td class="num"></td><td class="num"></td></tr><tr><td>1</td><td>Housing loan &mdash; outstanding</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>2</td><td>Vehicle loan &mdash; outstanding</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>3</td><td>Other borrowings</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr><td>4</td><td>Other liabilities and dues</td><td class="num"><span class="b b--n">XX,XX,XXX</span></td><td class="num"><span class="b b--n">XX,XX,XXX</span></td></tr><tr class="sub"><td></td><td><b>Total Liabilities (B)</b></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr><tr class="tot"><td></td><td><b>NET WORTH (A &minus; B)</b></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td><td class="num"><span class="b b--n">X,XX,XX,XXX</span></td></tr></tbody></table>
  <p>On the basis of our examination and the information and explanations given
  to us, we certify that the net worth of <span class="b">XXXXX XXXXXX XXXXXXXXX</span> as at <span class="b">XX XXXXX XXXX</span> is <b>INR <span class="b">X,XX,XX,XXX</span></b>
  (Rupees <span class="b">XXX XXXXX XXXXX-XXXX XXXX</span> only).</p>
  <p>The above net worth is equivalent to <b>USD <span class="b">X,XX,XXX</span></b> at the rate stated. Of this, assets
  aggregating <b>INR <span class="b">XX,XX,XXX</span></b> are unencumbered, readily realisable and free from any lien,
  charge or encumbrance.</p>
  <p>This certificate is issued at the request of the applicant for the purpose of submission in support of a visitor visa application and is
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
            <h2 class="section-title">Who Needs a Net Worth Certificate for a Visa in India</h2>
            <div class="why-patron-grid">
                <div><strong>The Checklist Says Funds Must Be Evidenced</strong><p>The mission's document list asks for proof of finances without saying what form it takes. A certified statement of position is what most consulates mean, submitted alongside the statements themselves.</p></div>
                <div><strong>The Money Arrived Recently</strong><p>A balance appeared shortly before the application, from a sale, a gift or a family transfer. Where it came from is now the question, and the paperwork has to answer it convincingly.</p></div>
                <div><strong>Somebody Else Is Funding the Application</strong><p>A parent, spouse or employer is standing behind the costs. Their holdings come under the same scrutiny the applicant's would, usually alongside an affidavit of support.</p></div>
                <div><strong>The Document Has to Be Legalised</strong><p>The destination requires apostille or <a href="/glossary/networth/attestation">attestation</a> before submission. That fixes the order of work, because the apostille attaches to the signed original and not to a copy made later.</p></div>
                <div><strong>The Mission Works in Another Currency</strong><p>The figure has to be readable in the destination's currency as well as in rupees. The reference rate and its date are stated on the certificate rather than left to the reader to choose.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Visa Net Worth Certificate Service: What You Receive</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What&#x27;s included</th><th>Frequency</th></tr></thead>
                    <tbody>
                        <tr><td>Certificate in the mission's expected form</td><td>The <a href="/net-worth-certificate">net worth certificate</a> drawn to what the destination asks of a funds document for a visa application, established before any balance is looked at.</td><td><span class="badge-included">On each application</span></td></tr>
                        <tr><td>Dual currency presentation</td><td>The total shown both in rupees and in the destination's own currency, at a stated reference rate with the rate's date printed beside it.</td><td><span class="badge-included">On each application</span></td></tr>
                        <tr><td><a href="/glossary/networth/source-of-funds">Source of funds</a> annexure</td><td>Each balance traced back to where it came from, so a recent credit raises no question the file cannot answer; <a href="/blog/documents-required-for-net-worth-certificate">what a funds file has to contain</a>.</td><td><span class="badge-included">On each application</span></td></tr>
                        <tr><td>Sponsor certificate and affidavit support</td><td>A sponsor's own holdings certified to the same standard, presented so they drop straight into whatever support undertaking the destination requires.</td><td><span class="badge-included">Where applicable</span></td></tr>
                        <tr><td><a href="/glossary/networth/liquidity">Liquidity</a> split</td><td>Balances and deposits shown apart from property, since missions weigh what can be reached quickly differently from what cannot.</td><td><span class="badge-included">On each application</span></td></tr>
                        <tr><td>Apostille or attestation coordination</td><td>The signed original routed for MEA apostille or embassy attestation. This is a facilitation service; the legalisation itself is the ministry's act, not ours.</td><td><span class="badge-included">Where applicable</span></td></tr>
                        <tr><td>Reissue closer to the appointment</td><td>A fresh certificate where the appointment moves and the mission wants a document nearer the interview date.</td><td><span class="badge-included">On request</span></td></tr>
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
            <h2 class="section-title">How We Issue a Net Worth Certificate for a Visa, Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Six steps from the scope conversation to a signed certificate carrying a UDIN.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 1</span>
    <h3 class="step-title">Destination requirement established</h3>
    <p class="step-description">We establish which mission the file goes to and what that mission asks of a funds document, because the requirement varies and several publish no figure at all. That answer decides the form of the certificate before a single balance is looked at.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-visa/step-1-destination-requirement-established.webp" alt="We establish which mission the file goes to and what that mission asks of a funds document" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 2</span>
    <h3 class="step-title">Source of funds evidenced</h3>
    <p class="step-description">Each balance is traced back to where it came from, since a recent credit with no visible origin raises exactly the question the evidence was meant to close. Gifts, property sales and family transfers are documented at source rather than asserted.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-visa/step-2-source-of-funds-evidenced.webp" alt="Each balance is traced back to where it came from, since a recent credit with no visible origin raises exactly the question" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 3</span>
    <h3 class="step-title">Sponsor position certified</h3>
    <p class="step-description">Where somebody else is funding the application, their holdings are certified on the same basis as the applicant's own. The figures are set out in the form an affidavit of support calls for, where the destination expects a formal commitment.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-visa/step-3-sponsor-position-certified.webp" alt="Where somebody else is funding the application, their holdings are certified on the same basis as the applicant's own" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 4</span>
    <h3 class="step-title">Dual currency figures fixed</h3>
    <p class="step-description">The total is presented in rupees and in the currency the mission works in, at a reference rate carrying its own date on the certificate. Nothing is left for a consular officer to convert at a rate and date of their own choosing.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-visa/step-4-dual-currency-figures-fixed.webp" alt="The total is presented in rupees and in the currency the mission works in" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 5</span>
    <h3 class="step-title">Signed in final form</h3>
    <p class="step-description">A <a href="/net-worth-certificate-by-ca">practising chartered accountant</a> signs the certificate and generates the <a href="/blog/how-to-verify-a-net-worth-certificate">UDIN</a> while the document is in its final state. Legalisation attaches to that signed original, so the order cannot be reversed without producing the whole thing again.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-visa/step-5-signed-in-final-form.webp" alt="A practising chartered accountant signs the certificate and generates the UDIN while the document is in its final state" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
            <div class="step-card">
  <div class="step-content">
    <span class="step-badge">Step 6</span>
    <h3 class="step-title">Apostille or attestation arranged</h3>
    <p class="step-description">Where the destination is a Hague Convention country the signed original goes for apostille through the Ministry of External Affairs. Where it is not, the longer chain ending in embassy attestation applies instead, and the route is confirmed before submission.</p>
  </div>
  <div class="step-visual"><div class="step-illustration" style="padding:0;background:none;"><img src="/images/networth-cluster/net-worth-certificate-for-visa/step-6-apostille-or-attestation-arranged.webp" alt="Where the destination is a Hague Convention country the signed original goes for apostille through the Ministry of External" loading="lazy" width="1200" height="896" style="width:100%;height:auto;border-radius:var(--radius-xl);"></div></div>
</div>
        </div>
    </div>
</section>

<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for a Net Worth Certificate for a Visa</h2>
            <div class="content-text">
                <p>Everything below is source material rather than a summary, because each figure in the statement is traced back to the record that governs it. The first list is needed on every engagement; the second applies where you hold those assets.</p>
                <ul>
                    <li>Passport bio page of the applicant, and of the sponsor where one is funding the trip</li>
                    <li><a href="/income-tax-return">Income tax returns</a> with the computation of income for the last three years</li>
                    <li>Bank statements for the last six months for every account being shown</li>
                    <li>Documentary source for any large recent credit: gift deed, sale agreement or loan sanction</li>
                    <li>Fixed deposit receipts, with the bank's balance confirmation</li>
                    <li>Registered sale deed and the latest property tax receipt for each property shown</li>
                    <li>Demat holding statement, and mutual fund statements where units are held</li>
                    <li>The sponsor's own income and asset documents, with proof of the relationship</li>
                </ul>
                <p><strong>Where they apply:</strong></p>
                <ul>
                    <li>Salary slips for the last three months and the latest Form 16</li>
                    <li>Two passport-size photographs, where the mission requires one affixed to the certificate</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Visa Net Worth Certificate Problems and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Why it happens</th><th>How it is handled</th></tr></thead>
                    <tbody>
                        <tr><td>Funds appear only weeks before the application</td><td>Money is moved in from family or a sale precisely because the application needs it, which is exactly the pattern consular officers are trained to notice.</td><td>Every balance is traced to a documented origin before it goes on the certificate; <a href="/blog/documents-required-for-net-worth-certificate">what a funds file needs to contain</a> sets out what evidences each source.</td></tr>
                        <tr><td>The total is shown in rupees alone</td><td>The records are all in rupees and converting feels like the officer's job, so nobody does it at our end.</td><td>The figure is presented in both currencies at a stated reference rate with that rate's own date beside it, leaving nothing to be assumed.</td></tr>
                        <tr><td>Property counted as though it could be reached quickly</td><td>It is usually the largest holding, so it dominates the total, but a mission asking about funds is asking what can be spent abroad.</td><td>Balances and deposits are shown apart from immovable property, so the reader can weigh each on the terms that matter to them.</td></tr>
                        <tr><td>Legalisation attempted before the document was final</td><td>The apostille queue is long, so it gets started early, and the certificate is still being adjusted when it arrives at the counter.</td><td>The certificate is finished and signed first, because legalisation attaches to that signed original and cannot be moved to a later version.</td></tr>
                        <tr><td>The sponsor's position asserted rather than certified</td><td>A letter from a relative abroad feels like support, but it carries no independent verification of anything it claims.</td><td>A sponsor's holdings are certified on the same footing as the applicant's, so both sides of the funding rest on examined records.</td></tr>
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
            <h2 class="section-title">Visa Net Worth Certificate Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Plan</th><th>Fee</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Standard</strong> &mdash; One applicant, one destination, funds already evidenced and no sponsor to certify.</td><td>Starting from INR 2499<br><span style="font-size:12px;color:var(--text-muted);">(Exl GST and Govt. Charges)</span></td></tr>
                        <tr><td><strong>Extended</strong> &mdash; A sponsor to certify as well, fund sources to document, or apostille and attestation to arrange through the ministry.</td><td>On quote</td></tr>
                        <tr><td><strong>Multiple certificates</strong> &mdash; A family applying together, each applicant certified from the same underlying records.</td><td>On quote</td></tr>
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
                <p style="margin-top:16px;"><strong>Get a free consultation &mdash; <a href="tel:+919459456700">Call +91 94594 56700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate%20for%20visa" target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Why It Matters</div>
            <h2 class="section-title">Why a Net Worth Certificate for a Visa Matters</h2>
        </div>
        <div class="features-grid is-4">
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
  <h3 class="feature-title">Untraceable Funds Read as Borrowed</h3>
  <p class="feature-text">A balance that appears shortly before the application, with no visible source, raises the exact suspicion the evidence was meant to remove. Missions look for the history of the money, not only its presence on the day.</p>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
  <h3 class="feature-title">A Sponsor Left Unevidenced Fails the Test</h3>
  <p class="feature-text">Where the applicant's own funds are thin, the sponsor becomes the subject of the assessment. Naming a sponsor without certifying their position leaves the strongest part of the case unproved.</p>
</article>
<article class="feature-card">
  <div class="feature-icon feature-icon--blue"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#19355E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
  <h3 class="feature-title">Legalising a Copy Wastes the Apostille</h3>
  <p class="feature-text">An apostille attaches to the signed original. A document legalised in the wrong order has to be reissued and relegalised from the start, and appointment dates rarely move to accommodate the rework.</p>
</article>
<article class="feature-card">
  <div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#F76722" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
  <h3 class="feature-title">One Currency Invites a Conversion Dispute</h3>
  <p class="feature-text">A total shown only in rupees leaves the mission to convert it at a rate and date of its choosing. That conversion is rarely in your favour, and there is no stage at which you get to contest it.</p>
</article>
        </div>
    </div>
</section>

<section class="content-section" id="why-patron-section" style="background: var(--cream) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Clients Choose Patron for Visa Net Worth Certificates</h2>
            <p class="section-intro">Five things you can check before you commission the certificate. Each is a claim with the proof behind it.</p>
            <div class="why-patron-grid">
                <div><strong>Origin established for each balance</strong><p>Funds arriving just ahead of an application draw the sharpest questions. A gift, a property sale or a family transfer is evidenced from its origin before drafting begins.</p></div>
                <div><strong>Legalisation sequenced correctly</strong><p>Apostille under the Hague Convention attaches to the signed original, so signing comes first and the route is confirmed against the destination rather than assumed from the last file.</p></div>
                <div><strong>Checkable by the mission itself</strong><p>The UDIN lets a consular officer confirm the certifying accountant on the <a href="/blog/how-to-verify-a-net-worth-certificate">ICAI portal</a>, which matters where the certificate corroborates bank statements rather than replacing them.</p></div>
                <div><strong>Both currencies, rate dated</strong><p>The total appears in rupees and in the destination's currency, with the conversion rate and the day it was taken both printed, so no officer converts it themselves.</p></div>
                <div><strong>Files for every major destination</strong><p>15+ years of certification work covering Schengen, UK, US, Canadian and Australian requirements, so a destination's own expectations are established before a balance is looked at.</p></div>
            </div>
            <p class="why-patron-note">Figures reflect Patron Accounting LLP engagements since 2019. Scope is confirmed in your engagement letter.</p>
        </div>
    </div>
</section>

<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow">Choosing a basis</span>
            <h2 class="section-title">What Each Destination Asks For: Requirements Compared</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
<table class="nwc-comparison"><thead><tr><th>Criterion</th><th>Schengen states</th><th>United Kingdom</th><th>United States</th></tr></thead><tbody>
  <tr><td>Is a fixed sum published</td><td>Member states publish their own per-day maintenance figures, which differ.</td><td>No fixed sum for visitors; the funds must be credible for the stated trip.</td><td>No fixed sum; the officer weighs ties and funds together at interview.</td></tr>
  <tr><td>Who may certify the position</td><td>A practising chartered accountant, with the certificate carrying a UDIN.</td><td>A practising chartered accountant; bank statements usually carry more weight.</td><td>A practising chartered accountant, supporting rather than replacing bank proof.</td></tr>
  <tr><td>How long funds must be held</td><td>No holding period is prescribed; the balance must be credible for the itinerary shown.</td><td>The student route requires funds held for twenty-eight consecutive days before applying.</td><td>No holding period, but a recent unexplained credit is questioned at interview.</td></tr>
  <tr><td>How recent it should be</td><td>Aligned to the appointment; consulates expect a current position.</td><td>Recent, and read alongside six months of bank statements.</td><td>Recent, with the source of any large credit evidenced.</td></tr>
  <tr><td>How a sponsor is treated</td><td>A sponsor's own position and a formal undertaking are both expected.</td><td>The sponsor's finances are assessed directly, often in preference.</td><td>Support undertakings are common, and the sponsor's position is certified too.</td></tr>
  <tr class="verdict"><td>Verdict</td><td colspan="3">No mission treats a certificate as a substitute for bank statements; it is corroboration, and a file resting on the certificate alone is weak. Establish the destination's own checklist first, then draw the certificate to it. All three routes legalise by apostille, so that is not the variable. <a href="/tools/embassy-nwc-format-library">the format each mission expects</a>.</td></tr>
</tbody></table>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="content-section" id="requirements-country-by-country-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow"></span>
            <h2 class="section-title">Requirements Country by Country</h2>
            <div class="content-text">
                <ul class="al-list">
                    <li><span class="al-t">Australia</span><span class="al-d">Australian student and visitor applications are assessed on genuine access to funds rather than on a published balance. The Department looks for money that is available to the applicant, evidenced over a period, and it examines the source of anything that appeared recently. A <a href="/net-worth-certificate">certified net worth</a> statement supports the file by setting out what is held and on what basis, alongside the bank statements that carry the balances. Where a parent or relative is funding the application their position is certified on the same footing.</span></li>
                    <li><span class="al-t">Canada</span><span class="al-d">Canadian study permit applications work to a published cost-of-living requirement that sits on top of tuition, and proof of funds is assessed against it. The Guaranteed Investment Certificate route is the most common evidence for the student direct stream, and a net worth certificate sits alongside it rather than replacing it. Where an applicant is funded by family, the certificate covers the sponsor and is read with the relationship evidence.</span></li>
                    <li><span class="al-t">United Kingdom</span><span class="al-d">The UK Student route carries the strictest holding rule of any destination here. Maintenance funds must be held for twenty-eight consecutive days, and the period must end within thirty-one days of the application. A certificate that states a balance on one date does not satisfy that rule on its own, so it is prepared alongside statements covering the full window. For standard visitor applications no fixed sum is published and the funds must simply be credible for the trip described.</span></li>
                    <li><span class="al-t">United States</span><span class="al-d">No fixed sum is published for any US visitor or student category. A consular officer weighs funds together with ties to India at interview, under the presumption that an applicant intends to immigrate until they show otherwise. A certificate is corroborating evidence: it demonstrates standing rather than availability. A large recent credit with no visible origin attracts a question at the counter, so its source is documented before the file is assembled.</span></li>
                    <li><span class="al-t">Schengen states</span><span class="al-d">There is no single Schengen figure. Each member state publishes its own per-day maintenance amount and they differ materially. The requirement is therefore read from the state actually issuing the visa, not from the Schengen area as a concept. All members are parties to the Hague Convention, so the certificate is legalised by apostille through the Ministry of External Affairs.</span></li>
                    <li><span class="al-t">Germany</span><span class="al-d">German student applications typically evidence funds through a <a href="/glossary/networth/blocked-account">blocked account</a> opened before the visa appointment, funded to the amount the Federal Foreign Office specifies for the year. The blocked account carries the maintenance requirement; the net worth certificate supports the wider financial picture and the source of the money that went into it. Both are usually submitted together, and the certificate is apostilled like any other Schengen destination.</span></li>
                    <li><span class="al-t">Ireland</span><span class="al-d">Ireland is not a Schengen member and runs its own immigration system, so a Schengen checklist does not apply to an Irish application. Study applications are assessed against published maintenance figures for the first year and evidence of ability to fund subsequent years. Ireland is a party to the Hague Convention, so apostille through the Ministry of External Affairs is the correct legalisation route.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="student-visas-and-education-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow"></span>
            <h2 class="section-title">Student Visas and Education Loan Applications</h2>
            <div class="content-text">
                <ul class="al-list">
                    <li><span class="al-t">University admission proof and the funds question</span><span class="al-d">A student file answers two financial questions at once, and they are not the same question. The university wants to know that tuition can be paid. The mission wants to know that tuition and living costs can be met without the student working unlawfully. An admission letter fixes the first figure, and the certificate is drawn against the total of both rather than against tuition alone.</span></li>
                    <li><span class="al-t">An education loan sanction alongside the visa file</span><span class="al-d">Where an education loan has been sanctioned, the <a href="/net-worth-certificate-for-bank-loan">sanction letter</a> is part of the funds evidence and changes what the certificate needs to show. Most missions accept a sanctioned loan as proof of funds to the extent of the sanction, so the certificate covers the balance the family is funding directly. Indian lenders sanctioning an education loan will separately ask for a net worth certificate for the co-applicant, which is the same document prepared for a different reader.</span></li>
                    <li><span class="al-t">Sponsored against self-funded, and funds held by parents</span><span class="al-d">Very few student applicants hold the money in their own name, and no mission expects them to. Where funds sit with a parent, the parent's position is certified and the relationship is evidenced, because a balance in somebody else's account proves nothing about the applicant on its own. Where the student holds funds directly, the source of anything transferred in recently is documented. Both routes are acceptable; what is not acceptable is a statement that leaves the reader unsure which one applies.</span></li>
                    <li><span class="al-t">Funds already committed to tuition</span><span class="al-d">One error recurs across student files and it is easy to avoid. Money already paid to the university, or blocked against a deposit, is no longer available to fund living costs. A certificate that counts it twice overstates the position by exactly that amount. The statement shows what has been paid, what remains committed and what is genuinely free. Missions assessing maintenance are looking at the last of the three, and a file that separates them clearly is read faster than one that presents a single total.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="affidavit-of-support-and-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow"></span>
            <h2 class="section-title">Affidavit of Support and Sponsored Applications</h2>
            <div class="content-text">
                <ul class="al-list">
                    <li><span class="al-t">Who can sponsor, and what their certificate must show</span><span class="al-d">A sponsor is usually a parent, a sibling or a spouse, and for some destinations an employer. What the mission is testing is whether the sponsor can genuinely carry the cost without hardship, so the certificate covers their whole position rather than a single balance. It states what is held, what is owed, and what is realisable, on the same basis it would be prepared for the applicant.</span></li>
                    <li><span class="al-t">An affidavit against a certificate</span><span class="al-d">These are different instruments and each does something the other cannot. An affidavit of support is a legal undertaking by the sponsor, sworn and usually notarised, in which they commit to meeting costs. A net worth certificate is an independent professional's statement of what the sponsor holds. The affidavit is the promise; the certificate is the evidence that the promise is capable of being kept. A chartered accountant prepares the second and sets out the figures the first relies on, but drafting the affidavit itself is legal work.</span></li>
                    <li><span class="al-t">Joint sponsorship</span><span class="al-d">Where two people sponsor together, each position is certified separately rather than combined into one figure. Missions assess sponsors individually, and a combined total hides whether either could carry the commitment alone. Where the sponsors are married and hold assets jointly, those items are shown once with the share attributable to each. The same asset is not counted twice across two certificates.</span></li>
                    <li><span class="al-t">Sponsors resident abroad</span><span class="al-d">Where the sponsor lives outside India the evidence changes shape. A chartered accountant here can certify Indian assets and Indian income, and says so explicitly rather than implying a wider scope. Overseas holdings are evidenced by documents from that jurisdiction, and the certificate states which portion of the position it covers. A document that appears to certify worldwide assets from Indian records alone is the kind of overreach a consular officer notices, and it undermines the parts that were properly evidenced. Stating the scope on the face of the document costs a line and protects everything else on it.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="presenting-net-worth-in-section">
    <div class="content-container">
        <div class="text-content">
            <span class="section-eyebrow"></span>
            <h2 class="section-title">Presenting Net Worth in Two Currencies</h2>
            <div class="content-text">
                <ul class="al-list">
                    <li><span class="al-t">Which reference rate, and the date it was taken</span><span class="al-d">A dual currency or double currency net worth format states the position in rupees and in the currency the mission works in, and the conversion is the part that gets questioned. The certificate names the reference rate used and the date it was taken, printed beside the converted figure rather than left in a footnote. Rates move daily, so a figure without its date is a figure the reader cannot reproduce.</span></li>
                    <li><span class="al-t">RBI reference rates against consulate-specified rates</span><span class="al-d">Where a mission specifies a rate or a source, that is the rate used and the certificate says so. Where none is specified, the <a href="/net-owned-fund-certificate-for-nbfc">Reserve Bank</a>'s reference rate for the date is the defensible choice, because it is published, dated and independent of us. What is not acceptable is a bank's card rate or an aggregator quote, both of which move within the day and neither of which the reader can verify afterwards.</span></li>
                    <li><span class="al-t">Rupees and the destination currency, side by side</span><span class="al-d">The presentation puts both columns on the same line so no arithmetic is left to the officer. Rupee figures stay primary, because that is what the underlying records carry. The converted column is labelled as a convenience translation at the stated rate. Where a mission asks for a single currency only, the certificate is issued in that currency alone. An unrequested second column invites a question about which figure governs.</span></li>
                    <li><span class="al-t">Why the rupee figure governs</span><span class="al-d">The certificate states plainly that the rupee position is the certified figure and the converted column is a translation. That matters because currencies move between the date the certificate speaks to and the date it is read. If the rupee weakens by the time the file reaches a counter, the converted figure is stale while the certified figure remains correct. Naming which one governs, and on what date it was converted, is what prevents an officer treating ordinary currency movement as an inconsistency in the document.</span></li>
                </ul>
            </div>
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
            <h2 class="section-title">Convert Your Net Worth Into the Currency the Consulate Wants</h2>
            <div class="content-text">
                <p>Enter your position in rupees and choose the destination currency. The converter returns both figures together, with the rate used and the day it was taken printed beneath, which is the presentation a consular officer expects.</p>

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
                        <h3 class="nwt-title">Free tool: Visa Net Worth Currency Converter</h3>

                        <div class="nwt-field">
                            <span class="nwt-label">Amounts entered in</span>
                            <div class="nwt-toggle" id="nwtUnit" role="group" aria-label="Unit">
                                <button type="button" class="nwt-tbtn active" data-unit="rupees">&#8377; Rupees</button>
                                <button type="button" class="nwt-tbtn" data-unit="lakh">&#8377; Lakh</button>
                                <button type="button" class="nwt-tbtn" data-unit="crore">&#8377; Crore</button>
                            </div>
                        </div>

                        <div class="nwt-cols">
                            <div class="nwt-col">
                                <h4>Your position in rupees</h4>
                                <div class="nwt-row"><label for="nwt-inr">Net worth (INR)</label>
                                <input class="nwt-input" type="text" id="nwt-inr" inputmode="decimal" autocomplete="off" placeholder="0"></div>
                            </div>
                            <div class="nwt-col">
                                <h4>The rate you will print on the document</h4>
                                <div class="nwt-row"><label for="nwt-ccy">Destination currency</label>
                                <select class="nwt-input" id="nwt-ccy" style="width:150px;text-align:left;">
                                    <option value="USD">USD</option>
                                    <option value="GBP">GBP</option>
                                    <option value="EUR">EUR</option>
                                    <option value="CAD">CAD</option>
                                    <option value="AUD">AUD</option>
                                    <option value="NZD">NZD</option>
                                    <option value="SGD">SGD</option>
                                    <option value="AED">AED</option>
                                    <option value="CHF">CHF</option>
                                    <option value="JPY">JPY</option>
                                </select></div>
                                <div class="nwt-row"><label for="nwt-rate">Rupees per 1 unit</label>
                                <input class="nwt-input" type="text" id="nwt-rate" inputmode="decimal" autocomplete="off" placeholder="0.00"></div>
                                <div class="nwt-row"><label for="nwt-rdate">Date the rate was taken</label>
                                <input class="nwt-input" type="date" id="nwt-rdate" style="width:170px;text-align:left;"></div>
                            </div>
                        </div>

                        <button type="button" class="nwt-calc" id="nwtCalc">Convert</button>

                        <div class="nwt-result" id="nwtResult">
                            <div class="nwt-rgrid">
                                <div class="nwt-rcard"><div class="nwt-rlabel">Position in rupees</div><div class="nwt-rval" id="nwtA">&mdash;</div></div>
                                <div class="nwt-rcard"><div class="nwt-rlabel">Rate applied</div><div class="nwt-rval" id="nwtB">&mdash;</div></div>
                                <div class="nwt-rcard full"><div class="nwt-rlabel">Position in the destination currency</div><div class="nwt-rval" id="nwtNet">&mdash;</div></div>
                            </div>
                            <div class="nwt-break" id="nwtBreak"></div>
                            <div class="nwt-actions">
                                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate%20for%20visa" target="_blank" rel="noopener" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="#25D366" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg> Ask a CA</a>
                                <a href="/tools/visa-nwc-currency-converter" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg> Visa NWC Currency Converter</a>
                                <a href="/tools/company-net-worth-calculator" class="nwt-abtn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18M6 21V8h5v13M13 21V3h5v18"/></svg> Company Net Worth Calculator</a>
                            </div>
                            <button type="button" class="nwt-reset" id="nwtReset">&#8635; Reset Calculator</button>
                        </div>

                        <p class="nwt-note">The converter applies the rate you enter. It publishes no rate of its own: the rate on the document must be one the reader can verify, and its date goes on the face of the document beside it.</p>
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

                    function calculate(){
                        var m = mult();
                        var inr = parseINR($('nwt-inr').value) * m;
                        var rate = parseINR($('nwt-rate').value);
                        var ccy = $('nwt-ccy').value;
                        var d = $('nwt-rdate').value;
                        if(!isFinite(inr) || !isFinite(rate) || rate <= 0){
                            $('nwtNet').textContent = 'Enter a position and a rate';
                            $('nwtA').textContent = '\u2014'; $('nwtB').textContent = '\u2014';
                            $('nwtBreak').innerHTML = '';
                            show(); return;
                        }
                        var conv = inr / rate;
                        $('nwtA').textContent = money(inr);
                        $('nwtB').textContent = '\u20B9' + rate.toLocaleString('en-IN', {maximumFractionDigits:4}) + ' / 1 ' + ccy;
                        $('nwtNet').textContent = ccy + ' ' + conv.toLocaleString('en-IN', {maximumFractionDigits:2});
                        $('nwtBreak').innerHTML =
                            row('Rupee position (governs)', money(inr)) +
                            row('Rate applied', '\u20B9' + rate.toLocaleString('en-IN', {maximumFractionDigits:4}) + ' per ' + ccy) +
                            row('Date the rate was taken', d ? d : 'not stated \u2014 it must go on the document') +
                            row('<strong>' + ccy + ' equivalent</strong>', '<strong>' + ccy + ' ' + conv.toLocaleString('en-IN', {maximumFractionDigits:2}) + '</strong>');
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

                <p style="margin-top:16px;font-size:14px;"><a href="/tools/embassy-nwc-format-library" target="_blank" rel="noopener" style="color:var(--blue);font-weight:600;">Open the full calculator &#8599;</a></p>
                <p style="margin-top:10px;font-size:14px;">Go deeper: <a href="/tools/net-worth-calculator">the net worth calculator</a></p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" id="legal-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The Legal and Professional Framework Behind Visa Net Worth Certificates</h2>
            <div class="content-text">
                <p>No Indian statute requires a net worth certificate for a visa. The requirement comes from the destination, and what Indian law governs is who may sign the document and how it is authenticated for use abroad. Those two questions decide the whole sequence.</p>
                <p>Because legalisation attaches to a signed original, the order of work is fixed by law rather than by preference. The certificate is completed and signed first, and only then does it go for apostille or attestation.</p>
                <ul class="al-list">
                    <li><span class="al-t"><strong>ICAI Guidance Note on Reports or Certificates for Special Purposes (Revised 2016)</strong></span><span class="al-d">governs the certificate, and matters here because a mission is relying on a document prepared under a framework it cannot itself inspect.</span></li>
                    <li><span class="al-t"><strong>ICAI Council direction on UDIN, mandatory from 1 February 2019</strong></span><span class="al-d">gives a consular officer a way to confirm the certifying accountant on the ICAI portal without contacting the firm, which is the practical value of the number abroad.</span></li>
                    <li><span class="al-t"><strong>Hague Apostille Convention 1961</strong></span><span class="al-d">provides for apostille between member states. All Schengen states, the United Kingdom and the United States are parties, so the route is apostille through the Ministry of External Affairs rather than embassy attestation.</span></li>
                    <li><span class="al-t"><strong>Section 139, Income-tax Act 1961</strong></span><span class="al-d">produces the returns a mission reads beside the balances. Money that never appeared in declared income is the first thing an officer asks about, and the return is where that is answered.</span></li>
                    <li><span class="al-t"><strong>Section 203, Income-tax Act 1961 read with Rule 31, Income-tax Rules 1962</strong></span><span class="al-d">prescribes Form 16, which evidences continuing salaried income and answers a different question from the one the balances answer.</span></li>
                    <li><span class="al-t"><strong>Section 17, Registration Act 1908</strong></span><span class="al-d">makes the registered instrument the evidence of title for any immovable property shown in the total, which a mission may weigh differently from liquid funds.</span></li>
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
                    <h2 class="faq-expanded__title">Visa Net Worth Certificate FAQs</h2>
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
  <h3 class="faq-expanded__q">Does the certificate have to show amounts in a foreign currency as well as rupees?</h3>
  <div class="faq-expanded__a"><p>Many consulates prefer it. A dual-currency presentation shows each asset in rupees and the total converted into the destination currency, so the visa officer is not left doing arithmetic. The conversion rate and its date are printed alongside, because a total quoted without a stated rate is not verifiable.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Which exchange rate is used to convert the net worth figure?</h3>
  <div class="faq-expanded__a"><p>A published reference rate as at the certificate date, most often the Reserve Bank of India's reference rate or the bank's telegraphic transfer buying rate. Whichever is used is named in the certificate. Using a rate from a random website, or an undated rate, is the flaw consulates pick up on most often.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Do consulates accept a certificate issued several months earlier?</h3>
  <div class="faq-expanded__a"><p>Rarely. Most missions treat financial evidence as current only for a short window. Many ask for documents dated within three months of the application, and some within one month. Because the certificate states the position on a single date, an old one is easy to reject, so it is usually obtained after the appointment is booked.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can a sponsor's certificate be used when the applicant has few assets of their own?</h3>
  <div class="faq-expanded__a"><p>Yes, and it is the normal route for students and dependent applicants. The sponsor's own net worth certificate is filed alongside proof of the relationship and the sponsor's consent to fund the trip. The applicant's own position is still disclosed, because a mission assessing intent looks at both sides.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Is a separate certificate needed for each traveller in a family application?</h3>
  <div class="faq-expanded__a"><p>Not where one person funds the trip. A single certificate in the funding member's name, listing the dependants being sponsored, covers a family application in most missions. Where two spouses each hold assets and both are being assessed on their own means, two certificates are cleaner than one joint document.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Does the certificate have to be apostilled before it is submitted?</h3>
  <div class="faq-expanded__a"><p>For a visa application, almost never. Missions accept the original signed certificate and verify the UDIN themselves. Apostille under the 1961 Hague Convention comes into play for immigration, court and university filings where the foreign authority needs the document legalised. It is obtained through the Ministry of External Affairs.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can a student's parents' assets be certified for a study visa?</h3>
  <div class="faq-expanded__a"><p>Yes, and this is the usual arrangement. The parents' net worth certificate demonstrates the family's capacity to fund tuition and living costs. It is read with the sponsor's undertaking and the loan sanction letter where an education loan is involved. Universities and missions both look at the same document.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can a visa be refused even when the certified net worth is high?</h3>
  <div class="faq-expanded__a"><p>Yes. A net worth certificate answers only whether the funds exist; it says nothing about whether the money is liquid, lawfully sourced or genuinely available for the trip. Refusals commonly cite unexplained recent deposits, funds locked in illiquid property, or weak ties to India rather than an inadequate total.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Can a visa be refused because of outstanding debt?</h3>
  <div class="faq-expanded__a"><p>Debt alone rarely decides an application, but it is read alongside everything else. A certificate showing borrowings close to the value of the assets tells a mission that little is genuinely free to fund the trip. Undisclosed debt that surfaces in the bank statements does more damage than the borrowing itself, because it goes to credibility.</p></div>
</div>
                    <div class="faq-expanded__item">
  <h3 class="faq-expanded__q">Are assets held outside India included in a visa net worth certificate?</h3>
  <div class="faq-expanded__a"><p>They can be, provided the client produces foreign bank, brokerage or property evidence the CA can verify. Overseas holdings also carry a disclosure trail, since resident individuals report foreign assets in Schedule FA of the <a href="/income-tax-return">income tax return</a>. A foreign asset in the certificate but absent from Schedule FA invites exactly the scrutiny the applicant wants to avoid.</p></div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Visa Net Worth Certificate Deadlines That Cannot Slip</h2>
            <div class="content-text">
<p>Your appointment is the only deadline that counts here, and legalisation has to fit inside it. Apostille cannot begin until the certificate is signed, and it cannot be transferred to a corrected version afterwards. That makes the order of work fixed. Call or WhatsApp <a href="tel:+919459456700">+91 94594 56700</a> with the date you already hold and we will build back from it.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Visa Net Worth Certificate with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
<p style="color:rgba(255,255,255,0.88);">The destination decides everything here, so find out what your mission asks of a funds document before commissioning a certificate. Where somebody else is funding the trip, their position needs certifying on the same footing as yours, and legalisation has to follow signing rather than run alongside it. Tell us the destination and the appointment you already hold, and we will work the whole sequence backwards from that date.</p>
            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128222; Call +91 94594 56700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%2C%20I%20need%20a%20net%20worth%20certificate%20for%20visa" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20a%20Net%20Worth%20Certificate%20for%20Visa&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20net%20worth%20certificate%20for%20visa%20and%20would%20like%20to%20know%20more.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Speak to a chartered accountant at Patron on <a href="tel:+919459456700">+91 94594 56700</a>, by call or WhatsApp.</p>
        </div>
    </div>
</section>

<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Visa Net Worth Certificates in Five Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Local teams issuing this certificate in these cities.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Cities We Serve</div>
                <div class="pa-block-sub">On-ground teams</div>
                <div class="pa-city-grid"><a href="https://www.patronaccounting.com/net-worth-certificate-for-visa/ahmedabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M7 21V12h10v9"/><path d="M7 12a5 5 0 0 1 10 0"/><path d="M10 21v-3a2 2 0 1 1 4 0v3"/><path d="M4 21V8M20 21V8"/><path d="M3 8a1 1 0 1 1 2 0M19 8a1 1 0 1 1 2 0"/></svg></div><div><div class="pa-card-title">Ahmedabad</div><div class="pa-card-sub">Gujarat</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 19h16"/><path d="M5 19V7h14v12"/><path d="M9 19v-6a3 3 0 0 1 6 0v6"/><path d="M5 7V5h14v2"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M4 21V9h6v12"/><path d="M9 21V4h6v17"/><path d="M14 21V12h6v9"/><path d="M7 12h.01M7 16h.01M12 7h.01M12 11h.01M12 15h.01M17 15h.01M17 18h.01"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M8 21V10h8v11"/><path d="M10 21v-6a2 2 0 1 1 4 0v6"/><path d="M8 10a4 4 0 0 1 8 0"/><path d="M4 21V14h3v7"/><path d="M17 21V14h3v7"/><path d="M4 14a1.5 1.5 0 0 1 3 0"/><path d="M17 14a1.5 1.5 0 0 1 3 0"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-visa/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="2" y1="21" x2="22" y2="21"/><path d="M3 21V8h18v13"/><path d="M9 21v-5a3 3 0 0 1 6 0v5"/><path d="M3 8V6h3v2h3V6h3v2h3V6h3v2"/><line x1="3" y1="13" x2="21" y2="13"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a></div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support</div>
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/net-worth-certificate" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-bank-loan" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Bank Loan</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-company" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Company</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-divorce" class="pa-cross-card"><div class="pa-card-title">Net Worth Statement for Divorce</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-by-ca" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate by CA</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-partnership-firms" class="pa-cross-card"><div class="pa-card-title">Net Worth Certificate for Partnership Firm</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-sole-proprietorship" class="pa-cross-card"><div class="pa-card-title">CA Certificate for Proprietorship Firm</div></a>
<a href="https://www.patronaccounting.com/net-worth-certificate-for-rera-registration" class="pa-cross-card"><div class="pa-card-title">CA Certificate for RERA</div></a>
<a href="https://www.patronaccounting.com/solvency-certificate" class="pa-cross-card"><div class="pa-card-title">Solvency Certificate</div></a>
<a href="https://www.patronaccounting.com/net-owned-fund-certificate-for-nbfc" class="pa-cross-card"><div class="pa-card-title">Minimum Net Owned Fund for NBFC</div></a>
<a href="https://www.patronaccounting.com/glossary/networth" class="pa-cross-card"><div class="pa-card-title">Net Worth &amp; Solvency Glossary</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">More From Patron Accounting</div>
                <div class="pa-block-sub">Outside this practice, and mentioned on this page</div>
                <div class="pa-cross-grid"><a href="https://www.patronaccounting.com/gst-registration" class="pa-cross-card"><div class="pa-card-title">GST Registration</div></a>
<a href="https://www.patronaccounting.com/income-tax-return" class="pa-cross-card"><div class="pa-card-title">Income Tax Return Filing</div></a>
<a href="https://www.patronaccounting.com/llp-incorporation" class="pa-cross-card"><div class="pa-card-title">LLP Incorporation</div></a></div>
            </div>
            <div class="pa-city-block" style="margin-top:36px;">
                <div class="pa-block-title">Read Next</div>
                <div class="pa-block-sub">The detail behind each figure on this page</div>
                <ul class="pa-read-list">
                    <li><a href="/blog/how-to-calculate-net-worth-for-a-net-worth-certificate">How to Calculate Net Worth for a Net Worth Certificate</a></li>
                    <li><a href="/blog/affidavit-of-support-vs-net-worth-certificate">Affidavit of Support vs Net Worth Certificate</a></li>
                    <li><a href="/blog/fd-property-and-shares-as-proof-of-funds">FD, Property and Shares as Proof of Funds: What Counts</a></li>
                    <li><a href="/blog/how-embassies-verify-proof-of-funds">How Embassies Verify Proof of Funds</a></li>
                    <li><a href="/blog/how-much-bank-balance-do-visa-applications-need">How Much Bank Balance Do Visa Applications Need?</a></li>
                    <li><a href="/blog/is-itr-required-for-visa-applications">Is ITR Required for Visa Applications?</a></li>
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
