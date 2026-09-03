@extends('layouts.app')

{{--
    Contact Us  |  /contact-us  (DB page slug "contact-us", template "contact")
    --------------------------------------------------------------------------
    Rebuilt 2026-09-03. What this replaces and why:

      - The old template dropped partials/bigin-form WITHOUT variant => 'bare'
        inside its own .contact-form card, so the page rendered a card inside a
        card and two headings ("Send us a Message" wrapping "Get Free
        Consultation"). The partial documents 'bare' for exactly that case.
      - Two stray </div> after that include closed .row and .container early, so
        the offices, sidebar and map escaped the grid and the page scrolled
        sideways.
      - The FAQ form was fine and is kept: partials/bigin-form is meant to run
        twice per page, full card in the hero and compact beside the FAQ.
        Both are passed the same service so the page files under one entry.
      - ~50 lines of commented-out <form> markup, plus a @push('scripts')
        validator bound to document.querySelector('form') and to fields
        (first_name, last_name) that had not existed for months. Both gone.
        Nothing is pushed to the 'scripts' stack from here: layouts/app.blade.php
        renders @stack('scripts') TWICE, so anything pushed runs twice.

    The form is partials/bigin-form in its default 'card' variant, which is the
    variant written for a hero column. Leads go to Zoho Bigin via
    route('lead.capture'); this page files them under "General Enquiry".

    Styling is scoped to .pa-cu-* so it cannot collide with the global
    enquiry-form.css / faq.css contracts. The form card itself is styled by
    /css/enquiry-form.css, which layouts/app loads on every page.
--}}

@section('title', $page->title)

@section('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'      => 'ContactPage',
            '@id'        => url()->current().'#webpage',
            'url'        => url()->current(),
            'name'       => $page->title,
            'isPartOf'   => ['@id' => 'https://www.patronaccounting.com/#website'],
            'about'      => ['@id' => 'https://www.patronaccounting.com/#organization'],
            'publisher'  => ['@id' => 'https://www.patronaccounting.com/#organization'],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id'   => url()->current().'#breadcrumb',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',       'item' => 'https://www.patronaccounting.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact Us', 'item' => url()->current()],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@push('styles')
<style>
/* ==========================================================================
   Contact Us: scoped page styles (pa-cu = patron contact us)
   ========================================================================== */
.pa-cu { --navy:#14365F; --navy-deep:#0F2544; --orange:#F26522;
         --ink:#47535F; --muted:#6B7683; --line:#DDE3EA; --wash:#F7F9FC; }
.pa-cu-wrap { max-width:1200px; margin:0 auto; padding:0 20px; }

/* ---- Hero: copy + contact rails on the left, form card on the right ---- */
.pa-cu-hero {
    background:linear-gradient(135deg,#0F2544 0%,#1E3A63 55%,#24467A 100%);
    color:#fff; padding:56px 0 64px; position:relative; overflow:hidden;
}
.pa-cu-hero::after {
    content:''; position:absolute; inset:auto -80px -140px auto;
    width:420px; height:420px; border-radius:50%;
    background:radial-gradient(circle,rgba(242,101,34,.18) 0%,rgba(242,101,34,0) 70%);
    pointer-events:none;
}
.pa-cu-hero-grid {
    display:grid; grid-template-columns:minmax(0,1fr) 420px; gap:48px;
    align-items:start; position:relative; z-index:1;
}
.pa-cu-eyebrow {
    display:inline-block; font-size:12px; font-weight:700; letter-spacing:.10em;
    text-transform:uppercase; color:#FFC9A8; margin-bottom:14px;
}
.pa-cu-h1 {
    font-family:'Barlow',sans-serif; font-weight:700; color:#fff;
    font-size:clamp(30px,4vw,46px); line-height:1.15; margin:0 0 16px;
}
.pa-cu-lead {
    font-size:16px; line-height:1.7; color:#D6E0EE; margin:0 0 26px; max-width:60ch;
}
.pa-cu-trust { display:flex; flex-wrap:wrap; gap:10px; margin-bottom:28px; }
.pa-cu-chip {
    display:inline-flex; align-items:center; gap:7px; padding:7px 13px;
    border:1px solid rgba(255,255,255,.22); border-radius:999px;
    background:rgba(255,255,255,.07); font-size:13px; font-weight:600; color:#EAF1F9;
}
.pa-cu-chip i { color:#FFB27A; }

/* Direct-contact rails: call / whatsapp / email */
.pa-cu-rails { display:grid; gap:12px; max-width:520px; }
.pa-cu-rail {
    display:flex; align-items:center; gap:14px; padding:14px 16px;
    border:1px solid rgba(255,255,255,.18); border-radius:12px;
    background:rgba(255,255,255,.06); text-decoration:none; color:#fff;
    transition:background .2s ease, border-color .2s ease, transform .2s ease;
}
.pa-cu-rail:hover {
    background:rgba(255,255,255,.13); border-color:rgba(242,101,34,.55);
    transform:translateY(-2px); color:#fff;
}
.pa-cu-rail-ico {
    flex:0 0 42px; width:42px; height:42px; border-radius:10px;
    display:flex; align-items:center; justify-content:center;
    background:rgba(242,101,34,.18); color:#FFB27A; font-size:19px;
}
.pa-cu-rail-k { display:block; font-size:12px; color:#AFC1D6; margin-bottom:2px; }
.pa-cu-rail-v { display:block; font-size:16px; font-weight:700; letter-spacing:.01em; }
.pa-cu-rail-go { margin-left:auto; color:#FFB27A; font-size:18px; }

/* ---- "What happens next" strip ---- */
.pa-cu-steps { background:var(--wash); border-bottom:1px solid var(--line); padding:36px 0; }
.pa-cu-steps-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:26px; }
.pa-cu-step { display:flex; gap:14px; align-items:flex-start; }
.pa-cu-step-n {
    flex:0 0 34px; width:34px; height:34px; border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    background:var(--navy); color:#fff; font-weight:700; font-size:14px;
}
.pa-cu-step-t {
    font-family:'Barlow',sans-serif; font-weight:700; color:var(--navy);
    font-size:16px; margin:5px 0 5px;
}
.pa-cu-step-d { font-size:14px; line-height:1.65; color:var(--muted); margin:0; }

/* ---- Section furniture ---- */
.pa-cu-sec { padding:56px 0; }
.pa-cu-sec--wash { background:var(--wash); }
.pa-cu-sec-head { margin-bottom:30px; max-width:70ch; }
.pa-cu-h2 {
    font-family:'Barlow',sans-serif; font-weight:700; color:var(--navy);
    font-size:clamp(22px,2.4vw,30px); margin:0 0 10px;
}
.pa-cu-sec-lead { font-size:15px; line-height:1.7; color:var(--muted); margin:0; }

/* ---- Offices ---- */
.pa-cu-offices { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
.pa-cu-off {
    background:#fff; border:1px solid var(--line); border-radius:14px; padding:22px;
    display:flex; flex-direction:column; transition:border-color .2s ease, box-shadow .2s ease, transform .2s ease;
}
.pa-cu-off:hover {
    border-color:rgba(242,101,34,.45); box-shadow:0 10px 26px rgba(20,54,95,.09);
    transform:translateY(-3px);
}
.pa-cu-off--hq { border-color:rgba(242,101,34,.45); box-shadow:0 8px 22px rgba(20,54,95,.07); }
.pa-cu-off-top { display:flex; align-items:center; gap:9px; margin-bottom:12px; }
.pa-cu-off-city {
    font-family:'Barlow',sans-serif; font-weight:700; color:var(--navy);
    font-size:18px; margin:0;
}
.pa-cu-badge {
    font-size:10px; font-weight:800; letter-spacing:.08em; text-transform:uppercase;
    color:var(--orange); background:#FFF1E8; border-radius:5px; padding:3px 7px;
}
.pa-cu-off-addr { font-size:14px; line-height:1.65; color:var(--ink); margin:0 0 14px; flex:1; }
.pa-cu-off-foot {
    display:flex; align-items:center; justify-content:space-between; gap:12px;
    flex-wrap:wrap; padding-top:13px; border-top:1px solid #EEF2F6; font-size:13px;
}
.pa-cu-off-hours { color:var(--muted); display:inline-flex; align-items:center; gap:6px; }
.pa-cu-link { color:var(--orange); font-weight:600; text-decoration:none; }
.pa-cu-link:hover { color:var(--navy); text-decoration:underline; }

/* ---- Hours + map ---- */
.pa-cu-split { display:grid; grid-template-columns:340px minmax(0,1fr); gap:26px; align-items:stretch; }
.pa-cu-hours {
    background:#fff; border:1px solid var(--line); border-radius:14px; padding:24px;
}
.pa-cu-hours h3 {
    font-family:'Barlow',sans-serif; font-weight:700; color:var(--navy);
    font-size:18px; margin:0 0 16px;
}
.pa-cu-hrow {
    display:flex; justify-content:space-between; gap:12px; padding:10px 0;
    border-bottom:1px dashed #E6EBF1; font-size:14px;
}
.pa-cu-hrow:last-of-type { border-bottom:0; }
.pa-cu-hrow span:first-child { color:var(--ink); font-weight:600; }
.pa-cu-hrow span:last-child { color:var(--muted); text-align:right; }
.pa-cu-hnote {
    margin:14px 0 0; font-size:12.5px; line-height:1.6; color:var(--muted);
    background:var(--wash); border-left:3px solid var(--orange);
    border-radius:0 8px 8px 0; padding:10px 12px;
}
.pa-cu-map { border-radius:14px; overflow:hidden; border:1px solid var(--line); min-height:360px; }
.pa-cu-map iframe { display:block; width:100%; height:100%; min-height:360px; border:0; }

/* ---- Service chips ---- */
.pa-cu-links { display:flex; flex-wrap:wrap; gap:10px; }
.pa-cu-pill {
    display:inline-block; padding:9px 16px; border-radius:999px;
    border:1px solid var(--line); background:#fff; color:var(--navy);
    font-size:14px; font-weight:600; text-decoration:none;
    transition:border-color .2s ease, color .2s ease, background .2s ease;
}
.pa-cu-pill:hover { border-color:var(--orange); color:var(--orange); background:#FFF7F3; }

/* ---- Responsive ---- */
@media (max-width:1024px) {
    .pa-cu-hero-grid { grid-template-columns:1fr; gap:36px; }
    .pa-cu-hero-form { justify-self:center; width:100%; max-width:420px; }
    .pa-cu-offices { grid-template-columns:repeat(2,1fr); }
    .pa-cu-split { grid-template-columns:1fr; }
}
@media (max-width:768px) {
    .pa-cu-hero { padding:40px 0 48px; }
    .pa-cu-steps-grid { grid-template-columns:1fr; gap:20px; }
    .pa-cu-sec { padding:42px 0; }
}
@media (max-width:560px) {
    .pa-cu-offices { grid-template-columns:1fr; }
    .pa-cu-rail-v { font-size:15px; }
}
/* The hero form card fades in via enquiry-form.css; nothing here overrides it. */
</style>
@endpush

@section('content')
@php
    // Single source for the page's contact points. Matches partials/header,
    // partials/footer and the #organization schema. Change them together.
    $paPhone     = '+919459456700';
    $paPhoneShow = '+91 94594 56700';
    $paMail      = 'sales@patronaccounting.com';
    $paWa        = 'https://wa.me/919459456700';

    $paOffices = [
        [
            'city'  => 'Pune', 'hq' => true,
            'addr'  => 'Office No B4, RTC Silver,<br>Wagholi, Pune,<br>Maharashtra &ndash; 412207',
            'hours' => 'Mon&ndash;Sat',
            'map'   => 'https://www.google.com/maps/search/?api=1&query=Patron+Accounting+LLP+RTC+Silver+Sai+Satyam+Park+Wagholi+Pune+412207',
        ],
        [
            'city'  => 'Mumbai', 'hq' => false,
            'addr'  => '104, Rajshila Building,<br>597 J.S.S. Rd, Marine Lines,<br>Mumbai &ndash; 400002',
            'hours' => 'Mon&ndash;Sat 9&ndash;5',
            'map'   => 'https://www.google.com/maps/search/?api=1&query=Patron+Accounting+LLP+Rajshila+Building+597+JSS+Road+Marine+Lines+Mumbai+400002',
        ],
        [
            'city'  => 'Delhi', 'hq' => false,
            'addr'  => '3rd Floor, B-6/154-155,<br>Sector 5, Rohini,<br>Delhi &ndash; 110085',
            'hours' => 'Open 24/7',
            'map'   => 'https://www.google.com/maps/search/?api=1&query=Patron+Accounting+LLP+B-6+154-155+Sector+5+Rohini+Delhi+110085',
        ],
        [
            'city'  => 'Gurugram', 'hq' => false,
            'addr'  => 'Pioneer Urban Square, B109,<br>Golf Course Ext Rd, Sector 62,<br>Gurugram &ndash; 122098',
            'hours' => 'Mon&ndash;Sun 9&ndash;7',
            'map'   => 'https://www.google.com/maps/search/?api=1&query=Patron+Accounting+LLP+Pioneer+Urban+Square+B109+Golf+Course+Ext+Road+Sector+62+Gurugram+122098',
        ],
        [
            'city'  => 'Ahmedabad', 'hq' => false,
            'addr'  => 'Phoenix Tower, 1107,<br>near Commerce Six Road, Drive In Rd,<br>Navrangpura, Ahmedabad &ndash; 380009',
            'hours' => '',
            'map'   => 'https://www.google.com/maps/search/?api=1&query=Patron+Accounting+LLP+Phoenix+Tower+1107+Commerce+Six+Road+Drive+In+Road+Navrangpura+Ahmedabad+380009',
        ],
    ];
@endphp

<div class="pa-cu">

    {{-- ================= HERO: copy + rails, form card alongside ============= --}}
    <section class="pa-cu-hero">
        <div class="pa-cu-wrap">
            <div class="pa-cu-hero-grid">

                <div class="pa-cu-hero-copy">
                    <span class="pa-cu-eyebrow">Contact Patron Accounting</span>
                    <h1 class="pa-cu-h1">{{ $page->title }}</h1>
                    <p class="pa-cu-lead">
                        @if($page->excerpt)
                            {{ $page->excerpt }}
                        @else
                            At Patron Accounting, we believe professional support should be accessible,
                            responsive and reliable. Whether you are a startup, a small business, an NGO
                            or an established organisation, our CA and CS team is here to help with
                            accounting, taxation and compliance.
                        @endif
                    </p>

                    <div class="pa-cu-trust">
                        <span class="pa-cu-chip"><i class="bi bi-star-fill"></i> 4.9 on Google</span>
                        <span class="pa-cu-chip"><i class="bi bi-geo-alt-fill"></i> 5 offices across India</span>
                        <span class="pa-cu-chip"><i class="bi bi-clock-fill"></i> Reply within 1 working day</span>
                    </div>

                    <div class="pa-cu-rails">
                        <a class="pa-cu-rail" href="tel:{{ $paPhone }}">
                            <span class="pa-cu-rail-ico"><i class="bi bi-telephone-fill"></i></span>
                            <span>
                                <span class="pa-cu-rail-k">Call us</span>
                                <span class="pa-cu-rail-v">{{ $paPhoneShow }}</span>
                            </span>
                            <span class="pa-cu-rail-go"><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a class="pa-cu-rail" href="{{ $paWa }}" target="_blank" rel="noopener">
                            <span class="pa-cu-rail-ico"><i class="bi bi-whatsapp"></i></span>
                            <span>
                                <span class="pa-cu-rail-k">WhatsApp</span>
                                <span class="pa-cu-rail-v">Chat with our team</span>
                            </span>
                            <span class="pa-cu-rail-go"><i class="bi bi-arrow-right"></i></span>
                        </a>
                        <a class="pa-cu-rail" href="mailto:{{ $paMail }}">
                            <span class="pa-cu-rail-ico"><i class="bi bi-envelope-fill"></i></span>
                            <span>
                                <span class="pa-cu-rail-k">Email us</span>
                                <span class="pa-cu-rail-v">{{ $paMail }}</span>
                            </span>
                            <span class="pa-cu-rail-go"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                {{-- The one enquiry form on this page. Default 'card' variant:
                     it brings its own heading and shell, so it must NOT be
                     wrapped in another card. --}}
                <div class="pa-cu-hero-form" id="contact-form">
                    @include('partials.bigin-form', [
                        'service'  => 'General Enquiry',
                        'title'    => 'Send us a message',
                        'subtitle' => 'Tell us what you need and a CA or CS will call you back.',
                    ])
                </div>

            </div>
        </div>
    </section>

    {{-- ================= WHAT HAPPENS NEXT ================================== --}}
    <section class="pa-cu-steps">
        <div class="pa-cu-wrap">
            <div class="pa-cu-steps-grid">
                <div class="pa-cu-step">
                    <span class="pa-cu-step-n">1</span>
                    <div>
                        <h3 class="pa-cu-step-t">You send the details</h3>
                        <p class="pa-cu-step-d">Use the form, call, or WhatsApp us. Tell us the service you need and where your business is based.</p>
                    </div>
                </div>
                <div class="pa-cu-step">
                    <span class="pa-cu-step-n">2</span>
                    <div>
                        <h3 class="pa-cu-step-t">A CA reviews it</h3>
                        <p class="pa-cu-step-d">Your enquiry goes to the team that handles that service, not a call centre. We come back within one working day.</p>
                    </div>
                </div>
                <div class="pa-cu-step">
                    <span class="pa-cu-step-n">3</span>
                    <div>
                        <h3 class="pa-cu-step-t">You get a clear scope</h3>
                        <p class="pa-cu-step-d">A written scope of work, the documents needed, timelines and a quote, before any work starts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= OFFICES =========================================== --}}
    <section class="pa-cu-sec">
        <div class="pa-cu-wrap">
            <div class="pa-cu-sec-head">
                <h2 class="pa-cu-h2">Our offices</h2>
                <p class="pa-cu-sec-lead">Walk in at any of our five offices, or work with us entirely online. Most of our clients never need to visit.</p>
            </div>
            <div class="pa-cu-offices">
                @foreach($paOffices as $off)
                    <div class="pa-cu-off{{ $off['hq'] ? ' pa-cu-off--hq' : '' }}">
                        <div class="pa-cu-off-top">
                            <h3 class="pa-cu-off-city">{{ $off['city'] }}</h3>
                            @if($off['hq'])<span class="pa-cu-badge">Head office</span>@endif
                        </div>
                        <p class="pa-cu-off-addr">{!! $off['addr'] !!}</p>
                        <div class="pa-cu-off-foot">
                            @if($off['hours'])
                                <span class="pa-cu-off-hours"><i class="bi bi-clock"></i> {!! $off['hours'] !!}</span>
                            @else
                                <span></span>
                            @endif
                            <a class="pa-cu-link" href="{{ $off['map'] }}" target="_blank" rel="noopener">View on Maps &rarr;</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ================= HOURS + MAP ======================================= --}}
    <section class="pa-cu-sec pa-cu-sec--wash">
        <div class="pa-cu-wrap">
            <div class="pa-cu-sec-head">
                <h2 class="pa-cu-h2">Business hours &amp; head office</h2>
                <p class="pa-cu-sec-lead">Our Pune head office, and the hours the phone lines are staffed.</p>
            </div>
            <div class="pa-cu-split">
                <div class="pa-cu-hours">
                    <h3>When we are open</h3>
                    <div class="pa-cu-hrow"><span>Monday &ndash; Friday</span><span>9:00 AM &ndash; 6:00 PM</span></div>
                    <div class="pa-cu-hrow"><span>Saturday</span><span>10:00 AM &ndash; 4:00 PM</span></div>
                    <div class="pa-cu-hrow"><span>Sunday</span><span>Closed</span></div>
                    <p class="pa-cu-hnote">Closed on the 1st and 4th Saturday of each month. Outside these hours, send the form or WhatsApp us and we will pick it up the next working day.</p>
                </div>
                <div class="pa-cu-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60509.59755125826!2d73.9638807!3d18.580807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c159ec4ca057%3A0xa3321f8b681f20cb!2sPatron%20Accounting%20LLP!5e0!3m2!1sen!2sin!4v1769110200524!5m2!1sen!2sin"
                        width="100%" height="400" style="border:0;" allowfullscreen=""
                        loading="lazy" title="Patron Accounting LLP head office on Google Maps"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= FAQ ==============================================
         The FAQ column carries the compact form, which is the sitewide pattern
         (partials/bigin-form: "a page usually renders this twice, hero and FAQ.
         Pass the SAME service to both"). enquiryService is passed explicitly so
         both forms file under "General Enquiry" and the pipeline report does not
         split this page in two.

         Not passing ctaUrl/ctaText: faq-section computes them but never renders
         them, so they would be dead weight here.
    ==================================================================== --}}
    @include('partials.faq-section', [
        'faqs' => [
            ['question' => 'How quickly do you respond to messages?',
             'answer'   => 'We respond to enquiries within one working day. For anything urgent, call us on +91 94594 56700 during business hours and you will reach the team directly.'],
            ['question' => 'What should I include in my message?',
             'answer'   => 'The service you need, the city your business operates from, and your entity type (proprietorship, LLP, private limited, NGO, and so on). That is enough for us to come back with a scope and a quote rather than more questions.'],
            ['question' => 'Do you offer phone or video consultations?',
             'answer'   => 'Yes. Consultations are by appointment, on a call or over video. Mention your preference in the form and we will book a slot that suits you.'],
            ['question' => 'Do I have to visit an office to work with you?',
             'answer'   => 'No. Most of our clients work with us entirely online, with documents shared digitally and filings done electronically. Our offices in Pune, Mumbai, Delhi, Gurugram and Ahmedabad are there if you prefer to meet in person.'],
        ],
        'lead'           => 'Quick answers to what we are asked most. Prefer to talk it through? Leave your number and a CA will call you back.',
        'sectionId'      => 'contact-faq',
        'includeSchema'  => true,
        'enquiryService' => 'General Enquiry',
    ])

    {{-- ================= SERVICE LINKS =====================================
         Replaces the CMS "Related Topics" chips, which pointed at
         /page-categories/*, a listing route and not somewhere a visitor on the
         contact page wants to land.
    ==================================================================== --}}
    <section class="pa-cu-sec">
        <div class="pa-cu-wrap">
            <div class="pa-cu-sec-head">
                <h2 class="pa-cu-h2">Not sure who to ask for?</h2>
                <p class="pa-cu-sec-lead">Start with the service you need. Each page tells you what is included, what it costs and how long it takes.</p>
            </div>
            <div class="pa-cu-links">
                <a class="pa-cu-pill" href="/accounting-bookkeeping-services">Accounting &amp; Bookkeeping</a>
                <a class="pa-cu-pill" href="/business-registration-services">Company Registration</a>
                <a class="pa-cu-pill" href="/gst-registration">GST Registration</a>
                <a class="pa-cu-pill" href="/itr-services">ITR Filing</a>
                <a class="pa-cu-pill" href="/payroll-services">Payroll &amp; EOR</a>
                <a class="pa-cu-pill" href="/statutory-audit">Statutory Audit</a>
                <a class="pa-cu-pill" href="/net-worth-certificate-by-ca">Net Worth Certificate</a>
                <a class="pa-cu-pill" href="/trademark-registration">Trademark Registration</a>
            </div>
        </div>
    </section>

</div>
@endsection
