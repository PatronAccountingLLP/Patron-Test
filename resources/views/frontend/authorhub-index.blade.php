@extends('layouts.app')

{{--
  Author Hub index - /authorhub

  Built from "Author Hub Page Design.zip" (Claude Design export, 2026-08-24).
  The design shipped as a standalone page with its own <header> and <footer>;
  both were dropped so the site layout supplies them, and its canvas-only tags
  were converted: <sc-if> unwrapped, <sc-for> to @foreach, {{ authorCount }} to
  $authorCount, and the onError placeholder to a real handler. Absolute URLs
  were made relative, per the Patron Local convention.

  Known gap, deliberately not invented: CA Poonam Kadge carries ~16.7% of the
  blog bylines - about 163 of 976 posts, third most prolific - and is not on
  this page. Adding her needs her real credentials and bio, and a profile page
  at /authorhub/ca-poonam-kadge, which has never existed. Until then the
  "more authors joining" card covers the gap.
--}}

@section('meta')
    <title>Author Hub - Meet Our CA Experts | Patron Accounting LLP</title>
    <meta name="description" content="The Chartered Accountants behind every Patron Accounting article. Meet the CA and CS team writing on GST, income tax, audit, valuation and compliance in India.">
    <link rel="canonical" href="https://www.patronaccounting.com/authorhub">
    <meta property="og:title" content="Author Hub - Meet Our CA Experts | Patron Accounting LLP">
    <meta property="og:description" content="The Chartered Accountants behind every Patron Accounting article.">
    <meta property="og:url" content="https://www.patronaccounting.com/authorhub">
    <meta property="og:type" content="website">

    {{-- BreadcrumbList, matching the shape ca-sundram-gupta.blade.php uses. Those
         profile pages already name /authorhub at position 2, which was a 404
         until this page existed - their breadcrumb schema now resolves. --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/authorhub#breadcrumbs",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
        { "@type": "ListItem", "position": 2, "name": "Author Hub" }
      ]
    }
    </script>
@endsection

@section('content')
@php
    // Every URL below was checked live on 2026-08-24 and returns 200. This page
    // exists to fix broken author links, so it must not introduce new ones -
    // re-test before adding a topic.
    $topics = [
        ['name' => 'GST Registration',        'url' => '/gst-registration'],
        ['name' => 'Income Tax Return',       'url' => '/income-tax-return'],
        ['name' => 'TDS Returns',             'url' => '/tds-return'],
        ['name' => 'Statutory Audit',         'url' => '/statutory-audit'],
        ['name' => 'Internal Audit',          'url' => '/internal-audit'],
        ['name' => 'Stock Audit',             'url' => '/stock-audit'],
        ['name' => 'Accounting Services',     'url' => '/accounting-services'],
        ['name' => 'Payroll Services',        'url' => '/payroll-services'],
        ['name' => 'Virtual CFO',             'url' => '/virtual-cfo-services'],
        ['name' => 'Company Registration',    'url' => '/private-limited-company-registration'],
        ['name' => 'Trademark Registration',  'url' => '/trademark-registration'],
        ['name' => 'Net Worth Certificate',   'url' => '/net-worth-certificate'],
        ['name' => '12A Registration',        'url' => '/12a-registration'],
        ['name' => '80G Registration',        'url' => '/80g-registration'],
        ['name' => 'IEC Registration',        'url' => '/iec-registration'],
    ];

    // Profile pages that actually exist. Keep this in step with the author
    // cards below and with the routes in web.php.
    $authorCount = 2;
@endphp

{{-- Fonts and base rules the design depends on. The layout supplies charset,
     viewport and og:locale; the title and canonical come from @section('meta'),
     so only these are carried over from the design's <helmet> block. --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  .pa-authorhub { background:#f6f7f9; font-family:'Inter',sans-serif; color:#122442; -webkit-font-smoothing:antialiased; }
  .pa-authorhub a { color:#122442; text-decoration:none; }
  .pa-authorhub a:hover { color:#f26b21; }
</style>
<div class="pa-authorhub">

{{-- No breadcrumb include here. The layout renders it for every page from
     resources/breadcrumbs.php; this page's trail is the 'frontend.authorhub-index'
     entry. That also replaced the design's "AUTHOR HUB · PATRON ACCOUNTING LLP"
     eyebrow, which used to sit at the top of the hero below. --}}
<div style="min-height:100vh; background:#f6f7f9;">
  

  <section style="background:#ffffff; color:#122442; border-bottom:1px solid #e4e8ee; padding:72px 28px 64px;">
    <div style="max-width:1160px; margin:0 auto;">
      <h1 style="font-size:clamp(34px,4.6vw,56px); line-height:1.08; font-weight:800; margin:0 0 18px; max-width:760px; letter-spacing:-0.02em; text-wrap:pretty; color:#0b2242;">The experts behind every article.</h1>
      <p style="font-size:17px; line-height:1.65; color:#5a6a82; max-width:640px; margin:0 0 36px;">Every article carries the byline of a practising Chartered Accountant. Their writing draws on live client engagements: audits, tribunal representations, valuations and filings. The guidance you read reflects how the law is applied today.</p>
      <div style="display:flex; flex-wrap:wrap; gap:12px;">
        <div style="border:1px solid #e4e8ee; background:#f6f7f9; border-radius:8px; padding:14px 22px; min-width:130px;">
          <div style="font-size:24px; font-weight:800; color:#0b2242;">{{ $authorCount }}</div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.1em; color:#8a97ab; margin-top:4px;">EXPERT AUTHORS</div>
        </div>
        <div style="border:1px solid #e4e8ee; background:#f6f7f9; border-radius:8px; padding:14px 22px; min-width:130px;">
          <div style="font-size:24px; font-weight:800; color:#0b2242;">4.9★</div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.1em; color:#8a97ab; margin-top:4px;">500+ GOOGLE REVIEWS</div>
        </div>
        <div style="border:1px solid #e4e8ee; background:#f6f7f9; border-radius:8px; padding:14px 22px; min-width:130px;">
          <div style="font-size:24px; font-weight:800; color:#0b2242;">25K+</div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.1em; color:#8a97ab; margin-top:4px;">BUSINESSES SERVED</div>
        </div>
        <div style="border:1px solid #e4e8ee; background:#f6f7f9; border-radius:8px; padding:14px 22px; min-width:130px;">
          <div style="font-size:24px; font-weight:800; color:#0b2242;">4+</div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.1em; color:#8a97ab; margin-top:4px;">OFFICES · PAN-INDIA</div>
        </div>
      </div>
    </div>
  </section>

  <section style="padding:64px 28px;">
    <div style="max-width:1160px; margin:0 auto;">
      <div style="font-family:'JetBrains Mono',monospace; font-size:12px; letter-spacing:0.14em; color:#f26b21; margin-bottom:10px;">01 · THE AUTHORS</div>
      <h2 style="font-size:30px; font-weight:800; margin:0 0 40px; letter-spacing:-0.01em;">Practitioners, not publishers.</h2>
      <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(420px, 1fr)); gap:28px;">

        <article style="background:#ffffff; border:1px solid #e4e8ee; border-radius:12px; overflow:hidden; display:flex; flex-direction:column;">
          <div style="display:flex; gap:20px; padding:26px 26px 0;">
            <div style="width:104px; height:130px; border-radius:8px; background:#0b2242; flex-shrink:0; overflow:hidden; display:flex; align-items:center; justify-content:center;">
              <span style="position:absolute; font-family:'JetBrains Mono',monospace; font-size:22px; color:#8fa3bd;">SG</span>
              <img src="/images/ca-sundram-gupta.jpg" alt="CA Sundram Gupta" onerror="this.style.display='none'" style="width:104px; height:130px; object-fit:cover; position:relative; z-index:1;">
            </div>
            <div style="min-width:0;">
              <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.12em; color:#f26b21; margin-bottom:6px;">FOUNDER &amp; PARTNER</div>
              <h3 style="font-size:22px; font-weight:800; margin:0 0 6px; letter-spacing:-0.01em;"><a href="/authorhub/ca-sundram-gupta">CA Sundram Gupta</a></h3>
              <div style="display:flex; flex-wrap:wrap; gap:6px; margin-bottom:10px;">
                <span style="font-family:'JetBrains Mono',monospace; font-size:10px; background:#eef1f5; border-radius:4px; padding:3px 8px; color:#3c4c66;">CA (ICAI)</span>
                <span style="font-family:'JetBrains Mono',monospace; font-size:10px; background:#eef1f5; border-radius:4px; padding:3px 8px; color:#3c4c66;">FORENSIC AUDITOR</span>
                <span style="font-family:'JetBrains Mono',monospace; font-size:10px; background:#eef1f5; border-radius:4px; padding:3px 8px; color:#3c4c66;">15+ YEARS</span>
              </div>
              <p style="font-size:14px; line-height:1.6; color:#5a6a82; margin:0;">Founder of Patron Accounting LLP. Chartered Accountant and forensic auditor advising startups and SMEs across auditing, GST, income tax and accounting.</p>
            </div>
          </div>
          <div style="padding:18px 26px 22px; margin-top:auto;">
            <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.1em; color:#8a97ab; margin-bottom:8px;">WRITES ON</div>
            <div style="display:flex; flex-wrap:wrap; gap:6px; margin-bottom:18px;">
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">GST</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">Income Tax</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">ITR Filing</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">Startup Compliance</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">Virtual CFO</span>
            </div>
            <a href="/authorhub/ca-sundram-gupta" style="display:inline-flex; align-items:center; gap:8px; font-size:14px; font-weight:700; color:#f26b21;">View author profile →</a>
          </div>
        </article>

        <article style="background:#ffffff; border:1px solid #e4e8ee; border-radius:12px; overflow:hidden; display:flex; flex-direction:column;">
          <div style="display:flex; gap:20px; padding:26px 26px 0;">
            <div style="width:104px; height:130px; border-radius:8px; background:#0b2242; flex-shrink:0; overflow:hidden; display:flex; align-items:center; justify-content:center;">
              <span style="position:absolute; font-family:'JetBrains Mono',monospace; font-size:22px; color:#8fa3bd;">PP</span>
              <img src="/images/ca-puja-pradhan.jpg" alt="CA Puja Pradhan" onerror="this.style.display='none'" style="width:104px; height:130px; object-fit:cover; position:relative; z-index:1;">
            </div>
            <div style="min-width:0;">
              <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.12em; color:#f26b21; margin-bottom:6px;">FINANCE &amp; BUSINESS MANAGER</div>
              <h3 style="font-size:22px; font-weight:800; margin:0 0 6px; letter-spacing:-0.01em;"><a href="/authorhub/ca-puja-pradhan">CA Puja Pradhan</a></h3>
              <div style="display:flex; flex-wrap:wrap; gap:6px; margin-bottom:10px;">
                <span style="font-family:'JetBrains Mono',monospace; font-size:10px; background:#eef1f5; border-radius:4px; padding:3px 8px; color:#3c4c66;">CA (ICAI)</span>
                <span style="font-family:'JetBrains Mono',monospace; font-size:10px; background:#eef1f5; border-radius:4px; padding:3px 8px; color:#3c4c66;">B.COM</span>
                <span style="font-family:'JetBrains Mono',monospace; font-size:10px; background:#eef1f5; border-radius:4px; padding:3px 8px; color:#3c4c66;">4+ YEARS</span>
              </div>
              <p style="font-size:14px; line-height:1.6; color:#5a6a82; margin:0;">80+ statutory audits, 90+ tax audits, and direct representation before CIT(A), ITAT and GSTAT. Leads a 20+ member team at Patron's Pune branch.</p>
            </div>
          </div>
          <div style="padding:18px 26px 22px; margin-top:auto;">
            <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.1em; color:#8a97ab; margin-bottom:8px;">WRITES ON</div>
            <div style="display:flex; flex-wrap:wrap; gap:6px; margin-bottom:18px;">
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">Statutory Audit</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">Valuation</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">Transfer Pricing</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">GST Litigation</span>
              <span style="font-size:12px; border:1px solid #e4e8ee; border-radius:99px; padding:4px 11px; color:#3c4c66;">NGO &amp; Trust</span>
            </div>
            <a href="/authorhub/ca-puja-pradhan" style="display:inline-flex; align-items:center; gap:8px; font-size:14px; font-weight:700; color:#f26b21;">View author profile →</a>
          </div>
        </article>

        
          <article style="border:1.5px dashed #c3ccd8; border-radius:12px; display:flex; flex-direction:column; align-items:flex-start; justify-content:center; padding:32px 30px; background:transparent;">
            <div style="font-family:'JetBrains Mono',monospace; font-size:10px; letter-spacing:0.12em; color:#8a97ab; margin-bottom:10px;">MORE AUTHORS JOINING</div>
            <h3 style="font-size:19px; font-weight:700; margin:0 0 8px; color:#3c4c66;">New expert profiles are on the way.</h3>
            <p style="font-size:14px; line-height:1.6; color:#5a6a82; margin:0 0 16px;">Patron's CA &amp; CS team is growing. Until then, browse the complete article archive on the blog.</p>
            <a href="/blog" style="font-size:14px; font-weight:700; color:#f26b21;">Browse the blog →</a>
          </article>
        
      </div>
    </div>
  </section>

  <section style="padding:0 28px 64px;">
    <div style="max-width:1160px; margin:0 auto; background:#ffffff; border:1px solid #e4e8ee; border-radius:12px; padding:44px 40px;">
      <div style="font-family:'JetBrains Mono',monospace; font-size:12px; letter-spacing:0.14em; color:#f26b21; margin-bottom:10px;">02 · WHY NAMED AUTHORS</div>
      <h2 style="font-size:26px; font-weight:800; margin:0 0 28px; letter-spacing:-0.01em;">How Patron content gets written.</h2>
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:28px;">
        <div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:13px; color:#f26b21; margin-bottom:8px;">i.</div>
          <div style="font-size:15px; font-weight:700; margin-bottom:6px;">Written by practitioners</div>
          <p style="font-size:14px; line-height:1.6; color:#5a6a82; margin:0;">Every article carries the byline of the CA who does this work daily — with a public profile you can verify.</p>
        </div>
        <div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:13px; color:#f26b21; margin-bottom:8px;">ii.</div>
          <div style="font-size:15px; font-weight:700; margin-bottom:6px;">Grounded in client work</div>
          <p style="font-size:14px; line-height:1.6; color:#5a6a82; margin:0;">Case studies, formats and timelines come from live engagements — audits, appeals, valuations and filings.</p>
        </div>
        <div>
          <div style="font-family:'JetBrains Mono',monospace; font-size:13px; color:#f26b21; margin-bottom:6px;">iii.</div>
          <div style="font-size:15px; font-weight:700; margin-bottom:6px;">Kept current</div>
          <p style="font-size:14px; line-height:1.6; color:#5a6a82; margin:0;">Articles are updated when the law changes — each page shows its last-updated date, not just a publish date.</p>
        </div>
      </div>
    </div>
  </section>

  
    <section style="padding:0 28px 64px;">
      <div style="max-width:1160px; margin:0 auto;">
        <div style="font-family:'JetBrains Mono',monospace; font-size:12px; letter-spacing:0.14em; color:#f26b21; margin-bottom:10px;">03 · TOPICS COVERED</div>
        <h2 style="font-size:26px; font-weight:800; margin:0 0 22px; letter-spacing:-0.01em;">What the team writes about.</h2>
        <div style="display:flex; flex-wrap:wrap; gap:10px;">
          @foreach ($topics as $t)
            <a href="{{ $t['url'] }}" style="font-size:13px; border:1px solid #dbe1e9; background:#ffffff; border-radius:99px; padding:7px 15px; color:#3c4c66;">{{ $t['name'] }}</a>
          @endforeach
        </div>
      </div>
    </section>
  

  <section style="padding:0 28px 72px;">
    <div style="max-width:1160px; margin:0 auto; background:#0b2242; border-radius:12px; padding:48px 40px; color:#ffffff; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; gap:24px;">
      <div style="max-width:560px;">
        <h2 style="font-size:26px; font-weight:800; margin:0 0 8px; letter-spacing:-0.01em;">Need a real CA, not a chatbot?</h2>
        <p style="font-size:15px; line-height:1.6; color:#c6d2e2; margin:0;">The Patron team handles 25,000+ businesses across India — accounting, tax, GST, audit and litigation.</p>
      </div>
      <div style="display:flex; gap:12px; flex-wrap:wrap;">
        <a href="tel:+919459456700" style="background:#f26b21; color:#ffffff; font-size:14px; font-weight:700; padding:13px 22px; border-radius:8px;">Call +91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20found%20the%20Author%20Hub%20and%20would%20like%20to%20discuss%20my%20business%20requirements." style="border:1px solid #3d5a83; color:#ffffff; font-size:14px; font-weight:700; padding:13px 22px; border-radius:8px;">WhatsApp</a>
      </div>
    </div>
  </section>

  
</div>
</div>

@endsection
