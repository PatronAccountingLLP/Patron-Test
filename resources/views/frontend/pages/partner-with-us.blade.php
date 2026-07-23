@extends('layouts.app')

@section('title', 'Partner With Patron Accounting | CA Firm Partner Program')

@push('styles')
  <title>Partner With Patron Accounting | CA Firm Partner Program</title>
  <meta name="description" content="Partner with Patron Accounting. GST, ITR, Payroll &amp; Company Registration across India. Referral &amp; white-label programs for CAs, lawyers and consultants.">
  <link rel="canonical" href="/partner-with-us">
  <meta property="og:title" content="Partner With Patron Accounting | CA Firm Partner Program">
  <meta property="og:description" content="Partner with Patron Accounting. GST, ITR, Payroll & Company Registration across India. Referral & white-label programs for CAs, lawyers and consultants.">
  <meta property="og:url" content="/partner-with-us">
  <meta property="og:type" content="website">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --ink:        #0c1628;
      --ink-mid:    #3d4f6b;
      --ink-soft:   #64748b;
      --border:     #e2e8f0;
      --bg:         #ffffff;
      --bg-alt:     #f7f9fc;
      --bg-dark:    #0c1628;
      --accent:     #0c1628;
      --accent-h:   #1e3a5f;
      --accent-lt:  #eef2f9;
      --green:      #15803d;
      --green-bg:   #f0fdf4;
      --r:          10px;
      --r-lg:       16px;
      --font-head:  'DM Serif Display', Georgia, serif;
      --font-body:  'DM Sans', system-ui, sans-serif;
      --shadow-sm:  0 1px 3px rgba(12,22,40,.07), 0 1px 2px rgba(12,22,40,.05);
      --shadow-md:  0 4px 16px rgba(12,22,40,.09);
      --shadow-lg:  0 12px 40px rgba(12,22,40,.13);
      --max:        1120px;
    }

    html { scroll-behavior: smooth; }
    body { font-family: var(--font-body); color: var(--ink); background: var(--bg); font-size: 16px; line-height: 1.6; -webkit-font-smoothing: antialiased; }

    /* ── Utilities ── */
    .container { max-width: var(--max); margin: 0 auto; padding: 0 24px; }
    .badge {
      display: inline-block; font-size: 12px; font-weight: 600; letter-spacing: .06em;
      text-transform: uppercase; color: var(--ink-mid); background: var(--accent-lt);
      border: 1px solid var(--border); border-radius: 99px; padding: 4px 14px; margin-bottom: 14px;
    }
    .section { padding: 80px 0; }
    .section-alt { background: var(--bg-alt); }
    .section-dark { background: var(--bg-dark); color: #fff; }
    .section-title { font-family: var(--font-head); font-size: clamp(28px, 4vw, 40px); color: var(--ink); line-height: 1.2; margin-bottom: 14px; }
    .section-title.light { color: #fff; }
    .section-sub { font-size: 17px; color: var(--ink-soft); max-width: 580px; line-height: 1.7; }
    .section-sub.light { color: rgba(255,255,255,.72); }
    .text-center { text-align: center; }
    .text-center .section-sub { margin: 0 auto; }

    /* ── Buttons ── */
    .btn { display: inline-flex; align-items: center; gap: 8px; font-family: var(--font-body); font-size: 15px; font-weight: 600; border-radius: var(--r); padding: 13px 26px; cursor: pointer; text-decoration: none; transition: all .2s; border: 2px solid transparent; white-space: nowrap; }
    .btn-primary { background: var(--accent); color: #fff; border-color: var(--accent); }
    .btn-primary:hover { background: var(--accent-h); border-color: var(--accent-h); transform: translateY(-1px); box-shadow: var(--shadow-md); }
    .btn-outline { background: transparent; color: var(--accent); border-color: var(--accent); }
    .btn-outline:hover { background: var(--accent-lt); transform: translateY(-1px); }
    .btn-white { background: #fff; color: var(--accent); border-color: #fff; }
    .btn-white:hover { background: #f1f5f9; transform: translateY(-1px); }
    .btn-outline-white { background: transparent; color: #fff; border-color: rgba(255,255,255,.5); }
    .btn-outline-white:hover { background: rgba(255,255,255,.1); border-color: #fff; transform: translateY(-1px); }
    .btn-green { background: #16a34a; color: #fff; border-color: #16a34a; }
    .btn-green:hover { background: #15803d; transform: translateY(-1px); box-shadow: var(--shadow-md); }
    .btn svg { width: 18px; height: 18px; flex-shrink: 0; }

    /* ── HERO ── */
    .hero { padding: 80px 0 72px; border-bottom: 1px solid var(--border); }
    .hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
    .hero-eyebrow { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; }
    .hero-rating { font-size: 13px; font-weight: 600; color: var(--ink-mid); display: flex; align-items: center; gap: 4px; }
    .hero h1 { font-family: var(--font-head); font-size: clamp(32px, 4.5vw, 50px); line-height: 1.15; color: var(--ink); margin-bottom: 20px; }
    .hero-sub { font-size: 17px; color: var(--ink-soft); line-height: 1.75; margin-bottom: 28px; max-width: 500px; }
    .hero-sub strong { color: var(--ink); font-weight: 600; }
    .hero-stats { display: flex; gap: 0; margin-bottom: 32px; border: 1px solid var(--border); border-radius: var(--r); overflow: hidden; width: fit-content; }
    .hero-stat { padding: 12px 22px; text-align: center; border-right: 1px solid var(--border); }
    .hero-stat:last-child { border-right: none; }
    .hero-stat-val { font-size: 18px; font-weight: 700; color: var(--ink); display: block; }
    .hero-stat-label { font-size: 11px; color: var(--ink-soft); letter-spacing: .04em; text-transform: uppercase; font-weight: 500; }
    .hero-ctas { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 24px; }
    .hero-refer-link { font-size: 13.5px; color: var(--ink-soft); }
    .hero-refer-link a { color: var(--ink-mid); font-weight: 600; text-decoration: underline; text-underline-offset: 3px; }
    .hero-refer-link a:hover { color: var(--ink); }

    /* Hero right — definition card */
    .hero-card { background: var(--bg-alt); border: 1px solid var(--border); border-radius: var(--r-lg); padding: 32px; }
    .hero-card-label { font-size: 11px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: var(--ink-soft); margin-bottom: 10px; }
    .hero-card h2 { font-family: var(--font-head); font-size: 22px; color: var(--ink); margin-bottom: 14px; }
    .hero-card p { font-size: 15px; color: var(--ink-mid); line-height: 1.75; margin-bottom: 20px; }
    .hero-card-pillars { display: flex; flex-direction: column; gap: 10px; }
    .hero-card-pillar { display: flex; align-items: flex-start; gap: 10px; font-size: 14px; color: var(--ink-mid); }
    .hero-card-pillar-dot { width: 7px; height: 7px; background: var(--ink); border-radius: 50%; flex-shrink: 0; margin-top: 6px; }
    .hero-card-pillar strong { color: var(--ink); font-weight: 600; }

    /* ── WHO CAN PARTNER ── */
    .professions-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 48px; }
    .profession-card { background: var(--bg); border: 1px solid var(--border); border-radius: var(--r); padding: 24px 20px; display: flex; align-items: flex-start; gap: 14px; transition: all .2s; cursor: default; }
    .profession-card:hover { border-color: var(--ink); box-shadow: var(--shadow-md); transform: translateY(-2px); }
    .profession-icon { width: 42px; height: 42px; background: var(--accent-lt); border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .profession-icon svg { width: 20px; height: 20px; color: var(--ink); }
    .profession-card h3 { font-size: 15px; font-weight: 700; color: var(--ink); margin-bottom: 4px; }
    .profession-card p { font-size: 13px; color: var(--ink-soft); line-height: 1.55; }

    /* ── HOW IT WORKS ── */
    .steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; margin-top: 52px; position: relative; }
    .steps::before { content: ''; position: absolute; top: 30px; left: calc(16.67% + 20px); right: calc(16.67% + 20px); height: 2px; background: var(--border); z-index: 0; }
    .step { position: relative; z-index: 1; text-align: center; padding: 0 24px; }
    .step-num { width: 56px; height: 56px; border-radius: 50%; background: var(--ink); color: #fff; font-size: 22px; font-weight: 700; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-family: var(--font-head); }
    .step h3 { font-size: 17px; font-weight: 700; color: var(--ink); margin-bottom: 10px; }
    .step p { font-size: 14.5px; color: var(--ink-soft); line-height: 1.65; }
    .pro-tip { margin-top: 44px; background: var(--green-bg); border: 1px solid #bbf7d0; border-radius: var(--r); padding: 18px 24px; display: flex; gap: 12px; align-items: flex-start; }
    .pro-tip-icon { font-size: 18px; flex-shrink: 0; margin-top: 1px; }
    .pro-tip p { font-size: 14px; color: #166534; line-height: 1.6; }
    .pro-tip strong { font-weight: 700; }

    /* ── PARTNERSHIP MODELS ── */
    .models-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 48px; }
    .model-card { border: 1px solid var(--border); border-radius: var(--r-lg); padding: 32px 28px; position: relative; transition: all .2s; }
    .model-card:hover { border-color: var(--ink); box-shadow: var(--shadow-lg); transform: translateY(-3px); }
    .model-card.featured { border-color: var(--ink); background: var(--bg-dark); }
    .model-tag { font-size: 11px; font-weight: 700; letter-spacing: .07em; text-transform: uppercase; color: var(--ink-soft); margin-bottom: 16px; }
    .model-tag.light { color: rgba(255,255,255,.5); }
    .model-card h3 { font-family: var(--font-head); font-size: 22px; color: var(--ink); margin-bottom: 12px; line-height: 1.2; }
    .model-card h3.light { color: #fff; }
    .model-card p { font-size: 14.5px; color: var(--ink-soft); line-height: 1.7; margin-bottom: 20px; }
    .model-card p.light { color: rgba(255,255,255,.65); }
    .model-list { list-style: none; display: flex; flex-direction: column; gap: 9px; }
    .model-list li { font-size: 14px; color: var(--ink-mid); display: flex; align-items: flex-start; gap: 8px; }
    .model-list li.light { color: rgba(255,255,255,.8); }
    .model-list li::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--ink); flex-shrink: 0; margin-top: 7px; }
    .model-list li.light::before { background: rgba(255,255,255,.5); }
    .models-note { text-align: center; margin-top: 28px; font-size: 14px; color: var(--ink-soft); }
    .models-note strong { color: var(--ink); }

    /* ── SERVICES TABLE ── */
    .services-table-wrap { margin-top: 48px; overflow: hidden; border: 1px solid var(--border); border-radius: var(--r-lg); }
    table { width: 100%; border-collapse: collapse; }
    thead th { background: var(--ink); color: #fff; font-size: 13px; font-weight: 600; letter-spacing: .04em; text-transform: uppercase; padding: 14px 20px; text-align: left; }
    tbody tr { border-bottom: 1px solid var(--border); }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: var(--accent-lt); }
    tbody td { padding: 14px 20px; font-size: 14.5px; vertical-align: top; }
    tbody td:first-child { font-weight: 600; color: var(--ink); width: 220px; }
    tbody td:last-child { color: var(--ink-mid); }

    /* ── FORM ── */
    .form-wrap { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: start; margin-top: 0; }
    .form-info { padding-top: 8px; }
    .form-info h3 { font-family: var(--font-head); font-size: 26px; color: var(--ink); margin-bottom: 14px; }
    .form-info p { font-size: 15px; color: var(--ink-soft); line-height: 1.75; margin-bottom: 24px; }
    .form-bullets { display: flex; flex-direction: column; gap: 12px; }
    .form-bullet { display: flex; align-items: flex-start; gap: 10px; font-size: 14.5px; color: var(--ink-mid); }
    .form-bullet-dot { width: 22px; height: 22px; background: var(--accent-lt); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px; }
    .form-bullet-dot svg { width: 12px; height: 12px; color: var(--ink); }
    .form-bullet strong { color: var(--ink); font-weight: 600; }
    .partner-form { background: var(--bg); border: 1px solid var(--border); border-radius: var(--r-lg); padding: 36px; box-shadow: var(--shadow-md); }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    .form-group { display: flex; flex-direction: column; gap: 6px; margin-bottom: 18px; }
    .form-group:last-of-type { margin-bottom: 0; }
    .form-group label { font-size: 13px; font-weight: 600; color: var(--ink); }
    .form-group input,
    .form-group select,
    .form-group textarea {
      font-family: var(--font-body); font-size: 14.5px; color: var(--ink);
      border: 1.5px solid var(--border); border-radius: var(--r); padding: 11px 14px;
      background: var(--bg); outline: none; transition: border-color .2s;
      width: 100%;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus { border-color: var(--ink); }
    .form-group textarea { resize: vertical; min-height: 100px; }
    .phone-wrap { display: flex; gap: 8px; }
    .phone-prefix { background: var(--bg-alt); border: 1.5px solid var(--border); border-radius: var(--r); padding: 11px 12px; font-size: 14.5px; font-weight: 600; color: var(--ink-mid); white-space: nowrap; flex-shrink: 0; }
    .form-submit { margin-top: 22px; }
    .form-submit .btn { width: 100%; justify-content: center; font-size: 15px; padding: 15px; }
    .form-note { font-size: 12px; color: var(--ink-soft); text-align: center; margin-top: 10px; }
    .form-success { display: none; text-align: center; padding: 32px 24px; }
    .form-success .success-icon { font-size: 48px; margin-bottom: 12px; }
    .form-success h3 { font-family: var(--font-head); font-size: 24px; color: var(--ink); margin-bottom: 8px; }
    .form-success p { font-size: 15px; color: var(--ink-soft); }

    /* ── FAQ ── */
    .faq-list { margin-top: 48px; max-width: 780px; margin-left: auto; margin-right: auto; }
    .faq-item { border: 1px solid var(--border); border-radius: var(--r); margin-bottom: 10px; overflow: hidden; }
    .faq-q { display: flex; justify-content: space-between; align-items: center; gap: 16px; padding: 20px 24px; cursor: pointer; font-size: 16px; font-weight: 600; color: var(--ink); background: var(--bg); transition: background .15s; user-select: none; }
    .faq-q:hover { background: var(--bg-alt); }
    .faq-icon { width: 28px; height: 28px; border-radius: 50%; background: var(--accent-lt); display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: transform .25s, background .2s; }
    .faq-icon svg { width: 14px; height: 14px; color: var(--ink); transition: transform .25s; }
    .faq-item.open .faq-icon { background: var(--ink); }
    .faq-item.open .faq-icon svg { color: #fff; transform: rotate(45deg); }
    .faq-a { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
    .faq-a-inner { padding: 0 24px 20px; font-size: 15px; color: var(--ink-soft); line-height: 1.75; border-top: 1px solid var(--border); padding-top: 16px; }
    .faq-item.open .faq-a { max-height: 300px; }
    .faq-a-inner a { color: var(--ink); font-weight: 600; text-underline-offset: 3px; }

    /* ── BOTTOM CTA ── */
    .cta-strip { padding: 72px 0; }
    .cta-strip-inner { text-align: center; }
    .cta-strip h2 { font-family: var(--font-head); font-size: clamp(28px, 3.5vw, 40px); color: #fff; margin-bottom: 12px; }
    .cta-strip p { font-size: 17px; color: rgba(255,255,255,.65); margin-bottom: 36px; }
    .cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

    /* ── Responsive ── */
    @media (max-width: 960px) {
      .hero-inner { grid-template-columns: 1fr; }
      .hero-card { display: none; }
      .professions-grid { grid-template-columns: repeat(2, 1fr); }
      .models-grid { grid-template-columns: 1fr; }
      .form-wrap { grid-template-columns: 1fr; }
      .form-info { display: none; }
    }
    @media (max-width: 700px) {
      .section { padding: 56px 0; }
      .steps { grid-template-columns: 1fr; gap: 36px; }
      .steps::before { display: none; }
      .professions-grid { grid-template-columns: 1fr; }
      .form-row { grid-template-columns: 1fr; }
      .hero-stats { flex-direction: column; width: 100%; }
      .hero-stat { border-right: none; border-bottom: 1px solid var(--border); }
      .hero-stat:last-child { border-bottom: none; }
      .cta-btns { flex-direction: column; align-items: center; }
      .partner-form { padding: 24px 18px; }
    }
  </style>
@endpush

@push('scripts-head')
  <!-- Schema Markup -->
  <script type="application/ld+json">
  [
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Partner With Patron Accounting | CA Firm Partner Program",
      "description": "Partner with Patron Accounting. GST, ITR, Payroll & Company Registration across India. Referral & white-label programs for CAs, lawyers and consultants.",
      "url": "/partner-with-us",
      "publisher": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "/",
        "logo": "/images/site-logo.svg",
        "foundingDate": "2019",
        "founder": { "@type": "Person", "name": "CA Sundram Gupta" },
        "areaServed": "IN",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+91-945-945-6700",
          "contactType": "partner enquiry",
          "email": "sales@patronaccounting.com"
        },
        "sameAs": [
          "https://www.instagram.com/patronaccounting/",
          "https://in.linkedin.com/company/patron-accounting-llp"
        ]
      }
    },
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Partner With Us", "item": "/partner-with-us" }
      ]
    },
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who can partner with Patron Accounting?",
          "acceptedAnswer": { "@type": "Answer", "text": "Patron Accounting's partner program is open to CAs, CSs, CMAs, lawyers, tax consultants, HR consultants, financial advisors, freelancers, and business advisors across India. Both practicing professionals and consultants with an active client base are eligible to apply." }
        },
        {
          "@type": "Question",
          "name": "What types of partnerships does Patron Accounting offer?",
          "acceptedAnswer": { "@type": "Answer", "text": "Patron offers three engagement models: Referral (you refer clients, we deliver, you earn a fee), White-Label (we work under your brand, you keep the margin), and Co-Delivery (we collaborate openly with your clients on complementary services). Terms are discussed case-to-case based on your practice." }
        },
        {
          "@type": "Question",
          "name": "How is the Patron Partner Program different from the Refer & Earn program?",
          "acceptedAnswer": { "@type": "Answer", "text": "The Refer & Earn program is open to everyone for casual, one-off referrals with fixed rewards up to ₹2,000. The Partner Program is for professionals who want a structured, ongoing arrangement — with referral fees, white-label delivery, or co-delivery options tailored to their practice." }
        },
        {
          "@type": "Question",
          "name": "Is the partner arrangement exclusive?",
          "acceptedAnswer": { "@type": "Answer", "text": "No. Patron's partner arrangements are non-exclusive by default. You can continue your own practice and other collaborations while partnering with us. Exclusivity can be discussed if relevant to your arrangement, but it is not a standard requirement." }
        },
        {
          "@type": "Question",
          "name": "How are partner earnings structured?",
          "acceptedAnswer": { "@type": "Answer", "text": "Earnings depend on the partnership model. Referral partners earn a fee per successful client conversion. White-label partners earn the margin between what they charge clients and what they pay Patron. Co-delivery revenue splits are agreed upfront per engagement. All terms are discussed and agreed before onboarding." }
        },
        {
          "@type": "Question",
          "name": "Can I refer clients from outside my city?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Patron Accounting operates across India with offices in Pune, Mumbai, Delhi, and Gurgaon, and serves clients pan-India through in-person and virtual engagement. Partners can refer or collaborate on clients from any city in India." }
        },
        {
          "@type": "Question",
          "name": "Does a professional need to share client data to partner?",
          "acceptedAnswer": { "@type": "Answer", "text": "No sensitive client data sharing is required to initiate a partnership. For white-label or co-delivery engagements, relevant information is shared only after mutual non-disclosure arrangements are in place and both parties agree on the scope." }
        },
        {
          "@type": "Question",
          "name": "How quickly can I start as a Patron partner?",
          "acceptedAnswer": { "@type": "Answer", "text": "Once you submit the application form, our team reviews it and schedules a brief call — typically within 2 working days. After the discussion, onboarding and the first engagement can begin within the same week depending on the model agreed." }
        }
      ]
    }
  ]
  </script>


@endpush

@section('content')
<section class="hero">
  <div class="container">
    <div class="hero-inner">

      <!-- Left -->
      <div>
        <div class="hero-eyebrow">
          <span class="badge">Partner Program</span>
          <span class="hero-rating">⭐ 4.9 Google Rated</span>
        </div>
        <h1>Partner With Patron Accounting — Grow Together Across India</h1>
        <p class="hero-sub">
          Your clients need <strong>GST, Income Tax, Payroll, and Company Registration</strong> — we handle all of it. Multi-disciplinary compliance services for startups and SMEs across India, delivered on Zoho Books.
        </p>

        <div class="hero-stats">
          <div class="hero-stat">
            <span class="hero-stat-val">150+</span>
            <span class="hero-stat-label">Services</span>
          </div>
          <div class="hero-stat">
            <span class="hero-stat-val">Pan-India</span>
            <span class="hero-stat-label">4 City Offices</span>
          </div>
          <div class="hero-stat">
            <span class="hero-stat-val">Est. 2019</span>
            <span class="hero-stat-label">Founded by CA</span>
          </div>
        </div>

        <div class="hero-ctas">
          <a href="#apply" class="btn btn-primary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            Apply to Partner
          </a>
          <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20know%20more%20about%20the%20Patron%20Partner%20Program." class="btn btn-green" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.528 5.858L0 24l6.335-1.51C8.01 23.455 9.974 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.891 0-3.667-.495-5.2-1.362l-.374-.222-3.863.921.976-3.768-.243-.388A9.937 9.937 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
            WhatsApp Us
          </a>
        </div>

        <p class="hero-refer-link">
          Looking for a one-off referral reward?
          <a href="/refer-and-earn">Try our Refer &amp; Earn program →</a>
        </p>
      </div>

      <!-- Right — AEO Definition Card -->
      <div class="hero-card">
        <div class="hero-card-label">What is the Patron Partner Program?</div>
        <h2>A Professional Collaboration Framework — Not Just a Referral Link</h2>
        <p>
          The Patron Partner Program is a structured arrangement for professionals who want to expand their service offering, monetise overflow clients, or co-deliver compliance services under a trusted CA firm. Founded by <strong>CA Sundram Gupta</strong>, Patron Accounting LLP is a Zoho Books-certified, MCA-registered firm serving 500+ businesses from offices in Pune, Mumbai, Delhi &amp; Gurgaon.
        </p>
        <div class="hero-card-pillars">
          <div class="hero-card-pillar">
            <div class="hero-card-pillar-dot"></div>
            <span><strong>Referral Partner</strong> — You connect, we deliver, you earn</span>
          </div>
          <div class="hero-card-pillar">
            <div class="hero-card-pillar-dot"></div>
            <span><strong>White-Label</strong> — We work under your brand, you keep the margin</span>
          </div>
          <div class="hero-card-pillar">
            <div class="hero-card-pillar-dot"></div>
            <span><strong>Co-Delivery</strong> — We collaborate, both visible to the client</span>
          </div>
          <div class="hero-card-pillar">
            <div class="hero-card-pillar-dot"></div>
            <span>All terms discussed case to case — no fixed template</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════
     WHO CAN PARTNER
════════════════════════════════════ -->
<section class="section section-alt">
  <div class="container">
    <div class="text-center">
      <span class="badge">Open to Professionals</span>
      <h2 class="section-title">Who Can Partner With Us?</h2>
      <p class="section-sub">If your work touches business, finance, law, or compliance — there's a partnership model that works for you.</p>
    </div>

    <div class="professions-grid">

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/><path d="M16 3.5A4 4 0 0120 7"/></svg>
        </div>
        <div>
          <h3>Chartered Accountant (CA)</h3>
          <p>Refer overflow clients or co-deliver services outside your current scope — tax, GST, ROC, payroll and more.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
        </div>
        <div>
          <h3>Company Secretary (CS)</h3>
          <p>Your clients need GST, ITR, and accounting alongside secretarial services. We handle what's outside your practice.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <div>
          <h3>Cost & Management Accountant (CMA)</h3>
          <p>White-label our compliance services or refer clients needing GST, ROC filings, and income tax support.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div>
          <h3>Lawyer / Advocate</h3>
          <p>Corporate clients incorporating companies or resolving GST disputes need a CA firm. Refer or co-deliver with us.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
        </div>
        <div>
          <h3>Tax Consultant</h3>
          <p>Expand client services beyond individual ITR into GST, payroll, ROC compliance, and business registration.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
        </div>
        <div>
          <h3>Business Advisor / Consultant</h3>
          <p>Your startup and SME clients need compliance support. Partner with Patron to deliver it without building a CA practice.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
        </div>
        <div>
          <h3>Freelancer / Independent Consultant</h3>
          <p>Refer clients from your network — fellow entrepreneurs, founders, or professionals who need CA services.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
        </div>
        <div>
          <h3>HR & Payroll Consultant</h3>
          <p>Clients using your HR services also need PF/ESI compliance, TDS on salary, and statutory filing. We co-deliver seamlessly.</p>
        </div>
      </div>

      <div class="profession-card">
        <div class="profession-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
        </div>
        <div>
          <h3>Financial Planner / Advisor</h3>
          <p>Investment, insurance, and wealth clients need ITR filing, capital gains reporting, and tax planning alongside your advice.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════
     HOW IT WORKS
════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="text-center">
      <span class="badge">Simple Process</span>
      <h2 class="section-title">How to Become a Patron Partner</h2>
      <p class="section-sub">No lengthy onboarding, no paperwork upfront. Three steps from application to your first engagement.</p>
    </div>

    <div class="steps">
      <div class="step">
        <div class="step-num">1</div>
        <h3>Apply</h3>
        <p>Fill out the partner application form with your professional background, practice area, and what you're looking for from the collaboration.</p>
      </div>
      <div class="step">
        <div class="step-num">2</div>
        <h3>We Connect</h3>
        <p>Our team reviews your application and schedules a brief 15-minute call — typically within 2 working days — to understand your practice and propose a model.</p>
      </div>
      <div class="step">
        <div class="step-num">3</div>
        <h3>You Partner</h3>
        <p>We agree on an engagement model — referral, white-label, or co-delivery — and you're onboarded. Your first engagement can begin within the same week.</p>
      </div>
    </div>

    <div class="pro-tip">
      <div class="pro-tip-icon">💡</div>
      <p><strong>Pro Tip:</strong> When applying, be specific about the type of clients in your network and the services they typically need. This helps us propose the most relevant partnership model in our first call — saving both our time.</p>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════
     PARTNERSHIP MODELS
════════════════════════════════════ -->
<section class="section section-alt">
  <div class="container">
    <div class="text-center">
      <span class="badge">Engagement Models</span>
      <h2 class="section-title">Three Ways to Partner</h2>
      <p class="section-sub">Choose the model that fits how you work. Terms are discussed and agreed based on your practice — no fixed formula.</p>
    </div>

    <div class="models-grid">

      <!-- Referral -->
      <div class="model-card">
        <div class="model-tag">Model 01</div>
        <h3 class="section-title" style="font-size:22px;margin-bottom:10px;">Referral Partner</h3>
        <p>You connect a client to Patron. We handle the entire delivery. You earn a referral fee when the engagement is confirmed.</p>
        <ul class="model-list">
          <li>Zero delivery responsibility on your end</li>
          <li>Earnings per successful conversion</li>
          <li>Suitable for any professional with a client network</li>
          <li>No minimum commitment required</li>
        </ul>
      </div>

      <!-- White-Label (Featured) -->
      <div class="model-card featured">
        <div class="model-tag light">Model 02 · Most Popular</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:22px;color:#fff;margin-bottom:10px;">White-Label</h3>
        <p class="light">Your client, your relationship, your brand. Patron works silently in the background. You bill the client. You keep the margin between your rate and ours.</p>
        <ul class="model-list">
          <li class="light">Client never knows Patron is involved</li>
          <li class="light">You price and invoice as you wish</li>
          <li class="light">Best for CAs, CSs, and consultants expanding their service offering</li>
          <li class="light">NDA and confidentiality guaranteed</li>
        </ul>
      </div>

      <!-- Co-Delivery -->
      <div class="model-card">
        <div class="model-tag">Model 03</div>
        <h3 class="section-title" style="font-size:22px;margin-bottom:10px;">Co-Delivery</h3>
        <p>You and Patron work jointly on a client — both visible. You bring domain expertise (law, HR, finance). We bring CA/CS compliance delivery. Revenue is split by scope agreed upfront.</p>
        <ul class="model-list">
          <li>Both parties visible to the client</li>
          <li>Complementary expertise, one seamless service</li>
          <li>Ideal for lawyers, HR consultants, financial advisors</li>
          <li>Revenue split agreed per engagement</li>
        </ul>
      </div>

    </div>

    <p class="models-note">All terms — fees, timelines, scope, and confidentiality — are <strong>discussed and agreed before any engagement begins.</strong></p>
  </div>
</section>


<!-- ════════════════════════════════════
     SERVICES TABLE
════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="text-center">
      <span class="badge">150+ Services</span>
      <h2 class="section-title">What Your Clients Need — We Deliver</h2>
      <p class="section-sub">Every business and professional in your network is a potential collaboration. Here's what we cover.</p>
    </div>

    <div class="services-table-wrap">
      <table>
        <thead>
          <tr>
            <th>Category</th>
            <th>Services Covered</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>GST Services</td>
            <td>GST Registration, GSTR-1, GSTR-3B, GSTR-9, GST Audit, ITC Reconciliation, E-Invoicing, GST Notices & Litigation, GSTAT Appeals</td>
          </tr>
          <tr>
            <td>Income Tax</td>
            <td>ITR Filing (all types), Advance Tax Planning, Capital Gains, ESOP Taxation, NRI Tax, Section 143 & 148 Notices</td>
          </tr>
          <tr>
            <td>Payroll & EOR</td>
            <td>Payroll Processing, PF/ESI Compliance, TDS on Salary, Employer of Record (EOR) for Foreign Companies, Payslips & Form 16</td>
          </tr>
          <tr>
            <td>Business Registration</td>
            <td>Private Limited, LLP, OPC, Partnership Firm, Startup India, 26QB TDS on Property, ESOP Advisory</td>
          </tr>
          <tr>
            <td>Accounting</td>
            <td>Zoho Books Setup & Migration, Monthly Bookkeeping, Bank Reconciliation, MIS Reports, Chart of Accounts</td>
          </tr>
          <tr>
            <td>Corporate Compliance</td>
            <td>ROC Filings (AOC-4, MGT-7), Director KYC, Board Resolutions, Share Transfers, CS Retainership</td>
          </tr>
          <tr>
            <td>Registrations & Licences</td>
            <td>FSSAI, Trademark, Copyright, PAN, TAN, DSC, IEC, MSME, 12A/80G for NGOs</td>
          </tr>
          <tr>
            <td>Audit & Certificates</td>
            <td>Tax Audit, Statutory Audit, Internal Audit, Net Worth Certificates, CA Certificates (48-hr turnaround)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════
     APPLICATION FORM
════════════════════════════════════ -->
<section class="section section-alt" id="apply">
  <div class="container">

    <div class="text-center" style="margin-bottom:52px;">
      <span class="badge">Apply Now</span>
      <h2 class="section-title">Partner Application Form</h2>
      <p class="section-sub">Tell us about your practice. We'll review your application and schedule a brief call within 2 working days.</p>
    </div>

    <div class="form-wrap">

      <!-- Left info -->
      <div class="form-info">
        <h3>What Happens After You Apply?</h3>
        <p>Our team personally reviews every application. We don't run automated onboarding — a real person from Patron will reach out to understand your practice before proposing a model.</p>
        <div class="form-bullets">
          <div class="form-bullet">
            <div class="form-bullet-dot">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span><strong>Review within 2 working days</strong> — a dedicated partner manager reviews your form</span>
          </div>
          <div class="form-bullet">
            <div class="form-bullet-dot">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span><strong>15-minute intro call</strong> — we discuss your practice and propose the right model</span>
          </div>
          <div class="form-bullet">
            <div class="form-bullet-dot">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span><strong>Terms agreed before anything begins</strong> — no commitments until both parties are aligned</span>
          </div>
          <div class="form-bullet">
            <div class="form-bullet-dot">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span><strong>Non-exclusive by default</strong> — continue your current practice without restriction</span>
          </div>
          <div class="form-bullet">
            <div class="form-bullet-dot">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span><strong>Full confidentiality</strong> — NDA available for white-label and co-delivery arrangements</span>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="partner-form" id="partner-form-wrap">
        <div id="form-fields">
          <div class="form-row">
            <div class="form-group">
              <label for="f-name">Full Name *</label>
              <input type="text" id="f-name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label for="f-email">Email Address *</label>
              <input type="email" id="f-email" placeholder="you@email.com" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="f-phone">Phone Number *</label>
              <div class="phone-wrap">
                <span class="phone-prefix">+91</span>
                <input type="tel" id="f-phone" placeholder="9876543210" maxlength="10" required style="flex:1;">
              </div>
            </div>
            <div class="form-group">
              <label for="f-city">City *</label>
              <input type="text" id="f-city" placeholder="Pune, Mumbai, Delhi…" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="f-profession">Profession *</label>
              <select id="f-profession" required>
                <option value="" disabled selected>Select profession</option>
                <option>Chartered Accountant (CA)</option>
                <option>Company Secretary (CS)</option>
                <option>Cost &amp; Management Accountant (CMA)</option>
                <option>Lawyer / Advocate</option>
                <option>Tax Consultant</option>
                <option>Business Advisor / Consultant</option>
                <option>HR &amp; Payroll Consultant</option>
                <option>Financial Planner / Advisor</option>
                <option>Freelancer / Independent Consultant</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="f-exp">Years of Experience *</label>
              <select id="f-exp" required>
                <option value="" disabled selected>Select range</option>
                <option>Less than 1 year</option>
                <option>1 – 3 years</option>
                <option>3 – 7 years</option>
                <option>7 – 15 years</option>
                <option>15+ years</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="f-area">Practice / Specialisation Area</label>
            <input type="text" id="f-area" placeholder="e.g. GST litigation, startup incorporation, payroll…">
          </div>

          <div class="form-group">
            <label for="f-message">Tell Us About Your Practice *</label>
            <textarea id="f-message" placeholder="Briefly describe your practice, the type of clients you serve, and what you're looking for from a partnership with Patron…" required></textarea>
          </div>

          <div class="form-submit">
            <button type="button" class="btn btn-primary" onclick="submitPartnerForm()">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
              Submit Application
            </button>
            <p class="form-note">By submitting, you agree to be contacted by our team. We do not share your information with third parties.</p>
          </div>
        </div>

        <div class="form-success" id="form-success">
          <div class="success-icon">🎉</div>
          <h3>Application Received!</h3>
          <p>Thank you for applying to partner with Patron Accounting. Our team will review your application and reach out within <strong>2 working days</strong> to schedule a brief call.</p>
          <br>
          <p style="font-size:13px;color:#94a3b8;">Questions in the meantime? WhatsApp us at <strong>+91 945 945 6700</strong></p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════
     FAQ
════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="text-center">
      <span class="badge">Common Questions</span>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-sub">Everything you need to know about partnering with Patron Accounting.</p>
    </div>

    <div class="faq-list">

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>1. Who can partner with Patron Accounting?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">Patron Accounting's partner program is open to CAs, CSs, CMAs, lawyers, tax consultants, HR consultants, financial advisors, freelancers, and business advisors across India. Both practicing professionals and consultants with an active client base are eligible to apply.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>2. What types of partnerships does Patron offer?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">Patron offers three engagement models: <strong>Referral</strong> (you refer clients, we deliver, you earn a fee), <strong>White-Label</strong> (we work under your brand, you keep the margin), and <strong>Co-Delivery</strong> (we collaborate openly with your clients on complementary services). Terms are discussed case-to-case based on your practice.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>3. How is this different from the Refer &amp; Earn program?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">The <a href="/refer-and-earn">Refer &amp; Earn program</a> is open to everyone for casual, one-off referrals with fixed rewards up to ₹2,000. The Partner Program is for professionals who want a structured, ongoing arrangement — with referral fees, white-label delivery, or co-delivery options tailored to their practice and client base.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>4. Is the partner arrangement exclusive?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">No. Patron's partner arrangements are non-exclusive by default. You can continue your own practice and other collaborations freely. Exclusivity can be discussed if relevant to your arrangement, but it is not a standard or required condition.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>5. How are partner earnings structured?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">Earnings depend on the model. Referral partners earn a fee per confirmed client engagement. White-label partners earn the margin between their billing rate and Patron's wholesale rate. Co-delivery revenue splits are agreed upfront per engagement. All terms are discussed and documented before onboarding.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>6. Can I refer or collaborate on clients from outside my city?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">Yes. Patron Accounting operates across India with offices in Pune, Mumbai, Delhi, and Gurgaon, and serves clients pan-India through in-person and virtual engagement. Partners can refer or collaborate on clients from any city in India.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>7. Do I need to share client data to partner?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">No sensitive client data sharing is required to initiate a partnership. For white-label or co-delivery engagements, relevant information is shared only after mutual non-disclosure arrangements are in place and both parties agree on the scope of the engagement.</div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <span>8. How quickly can I start as a Patron partner?</span>
          <div class="faq-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
        </div>
        <div class="faq-a">
          <div class="faq-a-inner">Once you submit the application form, our team reviews it and schedules a brief call — typically within 2 working days. After the discussion, onboarding and the first engagement can begin within the same week, depending on the model agreed.</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ════════════════════════════════════
     BOTTOM CTA STRIP
════════════════════════════════════ -->
<section class="section section-dark cta-strip">
  <div class="container">
    <div class="cta-strip-inner">
      <h2>Ready to Partner with Patron?</h2>
      <p>Join professionals across India who grow their practice by collaborating with a full-stack CA firm. Apply today — it takes less than 3 minutes.</p>
      <div class="cta-btns">
        <a href="#apply" class="btn btn-white">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          Apply to Partner
        </a>
        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20know%20more%20about%20the%20Patron%20Partner%20Program." class="btn btn-green" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.126 1.528 5.858L0 24l6.335-1.51C8.01 23.455 9.974 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.891 0-3.667-.495-5.2-1.362l-.374-.222-3.863.921.976-3.768-.243-.388A9.937 9.937 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
          WhatsApp Us
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Partner Program Enquiry" class="btn btn-outline-white">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          Email Us
        </a>
      </div>
    </div>
  </div>
</section>


<script>
  // FAQ toggle
  function toggleFaq(el) {
    const item = el.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  }

  // Form submit
  function submitPartnerForm() {
    const name    = document.getElementById('f-name').value.trim();
    const email   = document.getElementById('f-email').value.trim();
    const phone   = document.getElementById('f-phone').value.trim();
    const city    = document.getElementById('f-city').value.trim();
    const prof    = document.getElementById('f-profession').value;
    const exp     = document.getElementById('f-exp').value;
    const message = document.getElementById('f-message').value.trim();

    if (!name || !email || !phone || !city || !prof || !exp || !message) {
      alert('Please fill in all required fields before submitting.');
      return;
    }
    if (!/^\S+@\S+\.\S+$/.test(email)) {
      alert('Please enter a valid email address.');
      return;
    }
    if (!/^\d{10}$/.test(phone)) {
      alert('Please enter a valid 10-digit phone number.');
      return;
    }

    document.getElementById('form-fields').style.display = 'none';
    document.getElementById('form-success').style.display = 'block';
  }
</script>

@endsection
