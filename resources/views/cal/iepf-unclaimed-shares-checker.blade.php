@extends('layouts.app')

@section('meta')
<title>IEPF Unclaimed Shares Checker | Form IEPF-5 Claim</title>
<meta name="description" content="IEPF checker: see if your unclaimed shares or dividends moved to the IEPF after 7 years, plus the Form IEPF-5 claim steps and timeline. Free, try now!">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#15365f">
<link rel="canonical" href="/tools/iepf-unclaimed-shares-checker">

<meta property="og:title" content="IEPF Unclaimed Shares & Dividend Checker — Form IEPF-5">
<meta property="og:description" content="Check whether your unclaimed shares or dividends were transferred to the IEPF after 7 years, and get the Form IEPF-5 claim process, documents and where to search officially.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/iepf-unclaimed-shares-checker">
<meta property="og:image" content="/tools/iepf-unclaimed-shares-checker-og.png">
<meta property="og:site_name" content="Patron Accounting">
<meta property="og:locale" content="en_IN">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="IEPF Unclaimed Shares & Dividend Checker — Form IEPF-5">
<meta name="twitter:description" content="See if your unclaimed shares/dividends moved to the IEPF after 7 years and get the Form IEPF-5 claim steps. Free & instant.">
<meta name="twitter:image" content="/tools/iepf-unclaimed-shares-checker-og.png">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "IEPF Unclaimed Shares & Dividend Checker",
  "description": "IEPF Unclaimed Shares and Dividend Checker is a decision tool that takes how long a dividend has gone unclaimed, whether the shareholder is the original holder or a legal heir, and demat status, and indicates whether the shares or dividend have likely been transferred to the Investor Education and Protection Fund under Section 124 of the Companies Act, 2013, then explains the Form IEPF-5 claim process, the documents required and where to verify the position officially on the MCA and IEPF portals.",
  "url": "/tools/iepf-unclaimed-shares-checker",
  "applicationCategory": "BusinessApplication",
  "inLanguage": "en-IN",
  "isAccessibleForFree": true,
  "operatingSystem": "Any",
  "datePublished": "2026-06-05T08:00:00+05:30",
  "dateModified": "2026-06-05T08:00:00+05:30",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "INR"
  },
  "reviewedBy": {
    "@type": "Person",
    "@id": "/#founder",
    "name": "CA Sundram Gupta",
    "jobTitle": "Founder & Chartered Accountant",
    "url": "/contact-page",
    "sameAs": ["https://www.linkedin.com/in/ca-sundram-gupta"],
    "hasCredential": [{
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "Professional Certification",
      "name": "Chartered Accountant (CA)",
      "recognizedBy": {
        "@type": "Organization",
        "name": "Institute of Chartered Accountants of India",
        "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
      }
    }]
  },
  "publisher": { "@id": "/#organization" },
  "provider": {
    "@id": "/#organization"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
    {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
    {"@type": "ListItem", "position": 3, "name": "IEPF Unclaimed Shares & Dividend Checker", "item": "/tools/iepf-unclaimed-shares-checker"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the IEPF and what gets transferred to it?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Investor Education and Protection Fund (IEPF) is a fund under the Ministry of Corporate Affairs, set up under the Companies Act, 2013. Under Section 124, any dividend that remains unpaid or unclaimed for seven consecutive years is transferred to the IEPF, and the underlying shares are also transferred to the IEPF Authority's demat account when dividends on them have gone unclaimed for seven consecutive years. The rightful owner can reclaim them later."
      }
    },
    {
      "@type": "Question",
      "name": "How do I know if my shares or dividends went to the IEPF?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This checker indicates the likely position from your answers, but the authoritative source is official records. Companies publish year-wise lists of shareholders whose shares and unclaimed dividends have been transferred, usually on their website, and the IEPF and MCA portals carry searchable information. You can also ask the company or its Registrar and Transfer Agent for your folio-wise dividend and transfer history. Always verify against these official sources before filing a claim."
      }
    },
    {
      "@type": "Question",
      "name": "Can I actually search for my unclaimed amount inside this tool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. This tool is a guide and eligibility checker, not a live database search. A web page on its own cannot query the IEPF or company records. To look up your specific shares or dividends you must use the official IEPF and MCA portals, the company's published transfer lists, or contact the company's Registrar and Transfer Agent. This checker tells you whether you are likely affected and how to claim, so you know what to search for."
      }
    },
    {
      "@type": "Question",
      "name": "What is the 7-year rule for unclaimed dividends?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "When a dividend is not claimed within 30 days of declaration it becomes unpaid, and the company moves it to a special Unpaid Dividend Account within 7 days. Any amount lying in that account that stays unclaimed for seven years from the date of transfer is then moved to the IEPF. Separately, the shares on which dividends have not been claimed for seven consecutive years are also transferred to the IEPF Authority."
      }
    },
    {
      "@type": "Question",
      "name": "How do I claim shares or dividends back from the IEPF?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You file Form IEPF-5 online on the MCA portal with your shareholder, company, share and demat details. You then send the signed form with supporting documents and an indemnity bond to the company's Nodal Officer at its registered office. The Nodal Officer verifies the claim and sends an e-Verification Report to the IEPF Authority, which on approval credits the shares to your demat account and the dividends to your linked bank account."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are needed for an IEPF-5 claim?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You generally need a PAN card copy as photo identity, proof of an active demat account with an NSDL or CDSL participant, a cancelled cheque showing your name and account number, the original share certificates if held physically, and earlier dividend or holding proofs. An indemnity bond and the acknowledgement of the online IEPF-5 are also required. A legal heir additionally needs transmission documents and an entitlement letter from the company before filing."
      }
    },
    {
      "@type": "Question",
      "name": "Can a legal heir or nominee claim from the IEPF?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Where the registered shareholder has died, the legal heir, nominee or successor can claim, but they must first complete the share transmission with the company and obtain an entitlement letter before filing Form IEPF-5. The claim then proceeds through the same Nodal Officer verification and IEPF Authority approval. Heir claims need succession or legal-heir documents in addition to the standard set, so they usually take longer."
      }
    },
    {
      "@type": "Question",
      "name": "How long does an IEPF claim take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Timelines vary by company and the IEPF Authority. Filing the online IEPF-5 takes a day or two, the Nodal Officer's verification commonly takes a few weeks, and the IEPF Authority's examination and approval can take a couple of months, sometimes longer if additional proofs are sought. Once approved, the credit of shares and dividends typically follows within a few weeks. Accurate documents and a clean folio history speed the process."
      }
    },
    {
      "@type": "Question",
      "name": "Is there a deadline to claim from the IEPF?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Transfer to the IEPF is not a forfeiture. The shares and dividends are held in trust by the IEPF Authority, and the rightful owner or their legal heir can reclaim them at any time by following the prescribed Form IEPF-5 process. There is, however, a practical limit that only one consolidated claim per company can be made in a financial year, so it is best to include all folios of the same company together."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a demat account to claim from the IEPF?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, for shares. Because the IEPF Authority returns shares in dematerialised form, you must have an active demat account with a depository participant registered with NSDL or CDSL, and provide its details in Form IEPF-5. The reclaimed dividends are credited to the bank account linked to that demat account, so the cancelled cheque and bank details must match. If you do not have a demat account you should open one before filing."
      }
    },
    {
      "@type": "Question",
      "name": "Is this IEPF checker free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Patron Accounting IEPF Unclaimed Shares and Dividend Checker is completely free with no signup required. It runs entirely in your browser and stores nothing on our servers. It indicates whether your shares or dividends have likely moved to the IEPF and sets out the Form IEPF-5 claim process and documents. The actual search and the claim filing happen on the official MCA and IEPF portals, which this tool links to."
      }
    }
  ]
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
@endsection
<style>
        :root {
            --primary: #15365f;
            --primary-light: #1f4a7a;
            --primary-dark: #0a2240;
            --accent: #f26522;
            --accent-light: #ff8347;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #414042;
            --text-secondary: #555555;
            --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669;
            --info: #0EA5E9;
            --danger: #DC2626;
            --radius: 12px;
            --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif;
            --font-mono: 'Space Mono', monospace;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: var(--font-body); background: var(--surface); color: var(--text); line-height: 1.65; -webkit-font-smoothing: antialiased; }
        .toc-nav { background: var(--primary-dark); position: sticky; top: 0; z-index: 100; overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
        .toc-nav a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 13px; font-weight: 500; padding: 12px 16px; transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block; }
        .toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }
        .breadcrumb { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0; font-size: 13px; color: var(--text-muted); }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }
        .hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
        .hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
        .badge-updated { background: var(--primary); color: #fff; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px; }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px; }
        .hero h1 span { color: var(--accent); display: inline; }
        .tldr { background: var(--card); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px; box-shadow: var(--shadow-sm); }
        .tldr-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .main-layout { max-width: 1200px; margin: 0 auto; padding: 0 20px 40px; display: grid; grid-template-columns: 1fr; gap: 32px; }
        @media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-card .calc-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; }
        .q-block { margin-bottom: 22px; }
        .q-label { display: block; font-size: 15px; font-weight: 600; color: var(--primary-dark); margin-bottom: 10px; }
        .q-hint { font-size: 12px; color: var(--text-muted); margin-top: 8px; line-height: 1.5; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; flex-wrap: wrap; }
        .toggle-btn { flex: 1; padding: 11px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 90px; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .q-block.disabled { opacity: 0.45; pointer-events: none; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict { border-radius: var(--radius); padding: 22px 24px; border: 1px solid var(--border); border-left: 4px solid var(--primary); background: var(--surface); margin-bottom: 16px; }
        .verdict.likely { border-left-color: var(--accent); background: #FFFBEB; }
        .verdict.notyet { border-left-color: var(--success); background: #F0FDF4; }
        .verdict.heir { border-left-color: var(--info); background: #EFF6FF; }
        .verdict-tag { font-family: var(--font-mono); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); margin-bottom: 8px; }
        .verdict-title { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 10px; line-height: 1.25; }
        .verdict-detail { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .verdict-detail strong { color: var(--text); }
        .next-steps { margin-top: 16px; background: var(--surface-alt); border-radius: var(--radius); padding: 16px 20px; }
        .next-steps h4 { font-size: 13px; text-transform: uppercase; letter-spacing: 1px; color: var(--primary); font-family: var(--font-mono); margin-bottom: 10px; }
        .step-row { display: flex; gap: 10px; align-items: flex-start; padding: 7px 0; font-size: 14px; color: var(--text-secondary); }
        .step-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .step-num { flex-shrink: 0; width: 22px; height: 22px; border-radius: 50%; background: var(--primary); color:#fff; display:flex; align-items:center; justify-content:center; font-size:12px; font-weight:700; margin-top:1px; }
        .official-link { display:inline-block; margin-top:14px; padding: 12px 22px; background: var(--accent); color: var(--primary-dark); font-weight:700; font-size:14px; border-radius:8px; text-decoration:none; }
        .official-link:hover { background: var(--accent-light); }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; margin-left: 10px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }
        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 0 0 14px 20px; color: var(--text-secondary); font-size: 15px; line-height: 1.75; }
        .content-section li { margin-bottom: 6px; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.35s ease, padding 0.35s ease; }
        .faq-item.open .faq-answer { max-height: 700px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        .inline-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color:#fff; border-radius: var(--radius-lg); padding: 28px; text-align:center; margin: 0 0 32px; }
        .inline-cta h3 { color:#fff; font-size:20px; margin-bottom:10px; }
        .inline-cta p { color:rgba(255,255,255,0.85); font-size:15px; margin-bottom:18px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }

/* ===== UPDATE-TOOLS v1 appended blocks ===== */
/* ============================================================================
   PATRON ACCOUNTING — CTA SYSTEM
   4-placement CTA architecture for tool/calculator pages:
     1. Peach top bar (after H1, before TL;DR)
     2. Post-result CTA (inside result section, only fires after calc)
     3. Mid-body CTA (navy gradient, between content sections)
     4. Sidebar CTA card (vertical 3-button stack, in sidebar column)

   Each CTA uses 3 channels: Call (orange) / WhatsApp (green) / Email (white)

   Drop-in: paste these rules at the end of the page's <style> block, after
   the existing component CSS. Requires brand-tokens.css to be loaded first.
   ============================================================================ */

/* === Peach top bar (image-style, static, full-width) === */
.brand-cta-bar {
    background: #FFEDD5;
    border-top: 1px solid #FED7AA;
    border-bottom: 1px solid #FED7AA;
    padding: 14px 20px;
}
.brand-cta-bar-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}
.brand-cta-bar-text {
    flex: 1 1 320px;
    font-size: 14px;
    color: var(--text);
    line-height: 1.45;
}
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

/* === Universal CTA button === */
.brand-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 11px 18px;
    border-radius: 8px;
    font-family: var(--font-body);
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    border: 0;
    cursor: pointer;
    transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease;
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
    white-space: nowrap;
    line-height: 1.2;
    min-height: 44px;        /* WCAG 2.5.5 tap target */
}
.brand-cta-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }

/* === Channel variants === */
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }

.brand-cta-btn-wa { background: #25D366; color: #fff; }   /* Universal WhatsApp green — never change */
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }

.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; color: var(--text); }

/* === Sidebar variant — vertical stack === */
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }

/* === Inside dark body-cta — email button gets a contrasting style === */
.body-cta .brand-cta-bar-actions { justify-content: center; margin-top: 4px; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }

/* === Inside dark sidebar cta-card — same email override === */
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.cta-card .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }

/* === Post-result CTA — orange-bordered soft alert (only visible after calc) === */
.post-result-cta {
    background: #FFF7ED;
    border: 1px solid #FED7AA;
    border-left: 4px solid var(--accent);
    border-radius: var(--radius);
    padding: 18px 20px;
    margin: 20px 0 4px;
}
.post-result-cta-head {
    font-size: 15px;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 4px;
    line-height: 1.4;
}
.post-result-cta-sub {
    font-size: 13px;
    color: var(--text-secondary);
    margin-bottom: 14px;
    line-height: 1.55;
}
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

/* === Mobile breakpoint (≤767px): peach bar restructures, body-cta + post-result stack === */
@media (max-width: 767px) {
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; min-height: 44px; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }   /* Call gets its own row */
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* === Tablet portrait + narrow laptops: 2-col layout makes content column too narrow for 3-button rows === */
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* ============================================================================
   PATRON ACCOUNTING — Focus-visible accessibility (WCAG 2.4.7)

   PROBLEM:
     `outline: none` on inputs/buttons removes the keyboard focus indicator.
     Mouse users don't notice. Keyboard users (tabbing through the form)
     can't see where focus lands. WCAG 2.4.7 Focus Visible failure.

   SOLUTION:
     Use :focus-visible (pseudo-class). It only triggers on KEYBOARD focus,
     not mouse-click focus. So mouse users see a clean visual design,
     keyboard users get a clear focus ring.

   Browser support: Chrome 86+, Safari 15.4+, Firefox 85+, Edge 86+ — all
   our target browsers. No fallback needed.
   ============================================================================ */

/* === Form inputs and selects ===
   Replace any `outline: none` with this transparent-outline pattern.
   The transparent outline is always there (no layout shift on focus),
   only its color changes on keyboard focus. */
.form-group input,
.form-group select {
    outline: 2px solid transparent;
    outline-offset: 1px;
}
.form-group input:focus-visible,
.form-group select:focus-visible {
    outline-color: var(--primary);
}

/* === Buttons and links — universal :focus-visible ring === */
button:focus-visible,
a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: 2px;
    border-radius: 4px;
}

/* === Toggle buttons get primary-color outline (they live on accent-tinted areas) === */
.toggle-btn:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: 2px;
}

/* === TOC nav links: outline goes inward (links are flush with sticky bar edge) === */
.toc-nav a:focus-visible {
    outline: 2px solid var(--accent);
    outline-offset: -2px;
}

/* === FAQ accordion buttons: outline goes inward (buttons span full width) === */
.faq-question:focus-visible {
    outline: 2px solid var(--primary);
    outline-offset: -2px;
}

/* ============================================================================
   PATRON ACCOUNTING — Reduced motion (WCAG 2.3.3)

   Some users (vestibular disorders, motion sensitivity) configure their OS
   to request reduced motion. The browser exposes this via the
   prefers-reduced-motion media query.

   This rule blanket-disables animations, transitions, and smooth-scroll
   for those users. Everyone else gets the normal animated experience.

   Paste at the end of your <style> block. Order matters — must come AFTER
   any rule that defines transitions, otherwise the cascade won't override.
   ============================================================================ */

@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* ============================================================================
   PATRON ACCOUNTING — Print stylesheet for /tools/ pages

   AUDIENCE: A user who has run the calculator and now wants to print the
   working paper / memo / output for inclusion in their audit/tax/accounting
   file. They want clean black-on-white output, no chrome, no CTAs, no
   educational content. Just the result.

   This stylesheet:
   - Hides navigation (TOC, breadcrumb, CTAs, sidebar, content sections, footer)
   - Inverts dark code blocks (working-paper text, formula box) to white-on-black
   - Removes background gradients, replaces with simple borders
   - Sets serif-friendly print typography
   - Avoids page-breaks inside result blocks

   Paste at the end of your <style> block.
   ============================================================================ */

@media print {
    @page { margin: 1.5cm; }

    body {
        background: #fff !important;
        color: #000 !important;
        font-size: 10pt;
        line-height: 1.5;
    }

    /* Hide all navigation and chrome */
    .toc-nav,
    .breadcrumb,
    .brand-cta-bar,
    .post-result-cta,
    .body-cta,
    .cta-card,
    .sidebar-card,
    .sidebar-col,
    .office-strip,
    .footer,
    .btn-calculate,
    .btn-reset,
    .calc-section-title,
    .calc-intro,
    .form-group,
    .toggle-group,
    .conditional-row,
    .noscript-box,
    .content-section {
        display: none !important;
    }

    /* Calc card chrome stripped, but keep the wrapper for results */
    .calc-card {
        box-shadow: none !important;
        border: none !important;
        padding: 0 !important;
    }
    .calc-card h2 { display: none; }

    /* Hero compacted */
    .hero { padding: 0 0 12px !important; }
    .hero h1 {
        font-size: 18pt !important;
        color: #000 !important;
    }
    .hero h1 span { color: #000 !important; }
    .hero-meta { font-size: 9pt; }
    .badge-updated {
        background: transparent !important;
        color: #000 !important;
        border: 1px solid #000;
    }
    .author-byline strong { color: #000 !important; }

    /* TL;DR — keep but flatten */
    .tldr {
        box-shadow: none !important;
        border-left: 3px solid #000 !important;
        padding: 8px 12px !important;
        margin: 0 0 12px !important;
    }
    .tldr-label { color: #000 !important; }
    .tldr p { font-size: 9pt; color: #333 !important; }

    /* Layout becomes single-column in print */
    .main-layout {
        display: block !important;
        padding: 0 !important;
    }

    /* Result blocks — keep crisp, avoid page breaks inside */
    .verdict-card {
        background: #fff !important;
        border: 2px solid #000 !important;
        border-left: 6px solid #000 !important;
        page-break-inside: avoid;
    }
    .verdict-headline,
    .verdict-grid-value { color: #000 !important; }
    .verdict-grid-item {
        background: #fff !important;
        border: 1px solid #999;
    }

    .summary-card {
        background: #fff !important;
        border: 1px solid #999 !important;
    }
    .summary-card.highlight { background: #fff !important; }
    .summary-card.highlight .summary-label,
    .summary-card.highlight .summary-value { color: #000 !important; }
    .summary-value { color: #000 !important; }

    .info-banner {
        background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
    }

    .basis-block {
        background: #fff !important;
        border: 1px solid #000 !important;
        page-break-inside: avoid;
    }
    .basis-label { color: #000 !important; }

    /* Working paper text — invert from dark navy bg to white-on-black */
    .wp-text {
        background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
        page-break-inside: avoid;
        font-size: 9pt;
    }
    .wp-text .wp-label { color: #000 !important; }

    /* Strip link decoration in print */
    a, a:visited {
        color: #000 !important;
        text-decoration: none !important;
    }
}


        </style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#checker">Checker</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is">What Is IEPF</a>
        <a href="#lookup">Official Lookup</a>
        <a href="#why">Why Unclaimed</a>
        <a href="#claim">Claim Process</a>
        <a href="#documents">Documents</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    IEPF Unclaimed Shares & Dividend Checker
</nav>

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: June 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>IEPF Unclaimed Shares & Dividend Checker — <span>Form IEPF-5</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">Shares stuck in the IEPF? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20need%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=IEPF%20unclaimed%20shares%20/%20dividend%20recovery%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20would%20like%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%0A%0AMy%20details%3A%0A-%20Company%20name%3A%0A-%20Original%20holder%20/%20legal%20heir%3A%0A-%20Approx%20years%20unclaimed%3A%0A-%20Folio%20/%20DP%20ID-Client%20ID%20%28if%20known%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
    </div>
</div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Answer a few questions and this checker tells you whether your <strong>unclaimed shares or dividends</strong> have likely been transferred to the <strong>Investor Education and Protection Fund (IEPF)</strong> under the <strong>7-year rule</strong> (Section 124, Companies Act 2013), and sets out the <strong>Form IEPF-5</strong> claim route and documents. <strong>Important:</strong> a web page cannot search live records — the <strong>actual lookup</strong> happens on the official <strong>MCA / IEPF portal</strong> and the company's published lists, which this tool links to.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Check IEPF Transfer & Claim Eligibility</h2>
            <p class="calc-sub">Answer the questions below — later questions unlock based on your answers.</p>
            <noscript>
                <div class="noscript-box">
                    This checker requires JavaScript. Please enable JavaScript, or read the 7-year rule and claim steps further down this page.
                </div>
            </noscript>

            <div class="q-block" id="qb1">
                <label class="q-label">1. For roughly how long has the dividend gone unclaimed?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="years" data-value="under7" onclick="pick(this)">Under 7 years</button>
                    <button type="button" class="toggle-btn" data-q="years" data-value="over7" onclick="pick(this)">7 years or more</button>
                    <button type="button" class="toggle-btn" data-q="years" data-value="unsure" onclick="pick(this)">Not sure</button>
                </div>
                <div class="q-hint">Dividends unclaimed for 7 consecutive years (and the related shares) are transferred to the IEPF.</div>
            </div>

            <div class="q-block disabled" id="qb2">
                <label class="q-label">2. Are you the original shareholder, or claiming as a legal heir?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="who" data-value="self" onclick="pick(this)">Original holder</button>
                    <button type="button" class="toggle-btn" data-q="who" data-value="heir" onclick="pick(this)">Legal heir / nominee</button>
                </div>
                <div class="q-hint">A legal heir must first complete transmission and get an entitlement letter before filing IEPF-5.</div>
            </div>

            <div class="q-block disabled" id="qb3">
                <label class="q-label">3. Do you have an active demat account (NSDL / CDSL)?</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-q="demat" data-value="yes" onclick="pick(this)">Yes</button>
                    <button type="button" class="toggle-btn" data-q="demat" data-value="no" onclick="pick(this)">No / not sure</button>
                </div>
                <div class="q-hint">Reclaimed shares are credited in demat form, so an active demat account is required.</div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Check My Position</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>
                <div id="verdictContainer"></div>
                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Want help getting your shares / dividends back?</div>
                    <div class="post-result-cta-sub">A Chartered Accountant can assemble the Form IEPF-5 documentation, indemnity bond and company-side verification so the claim moves cleanly.</div>
                    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20need%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=IEPF%20unclaimed%20shares%20/%20dividend%20recovery%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20would%20like%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%0A%0AMy%20details%3A%0A-%20Company%20name%3A%0A-%20Original%20holder%20/%20legal%20heir%3A%0A-%20Approx%20years%20unclaimed%3A%0A-%20Folio%20/%20DP%20ID-Client%20ID%20%28if%20known%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use This Checker</h2>
            <ol>
                <li><strong>Tell it how long the dividend has been unclaimed</strong> — the 7-year line is what triggers transfer to the IEPF.</li>
                <li><strong>Say whether you are the original holder or a legal heir</strong> — the heir route needs transmission and an entitlement letter first.</li>
                <li><strong>Confirm demat status</strong> — reclaimed shares come back only in dematerialised form.</li>
                <li><strong>Read the verdict and next steps</strong>, then use the official MCA / IEPF link to look up your actual folio and file Form IEPF-5.</li>
            </ol>
            <p>This is an eligibility and process guide, not a database. For the company-side compliance — board resolutions, transfers and demat — see <a href="/transfer-of-shares">transfer of shares</a> and the guide to <a href="/blog/demat-shares-in-private-limited-company-everything-you-need-to-know">dematerialising shares</a>.</p>
            <div class="callout warn">
                <p><strong>Reality check:</strong> No website can pull your unclaimed-fund records on its own. The authoritative search is on the MCA / IEPF portal and the company's published transfer lists. This tool tells you whether you are likely affected and exactly what to do next.</p>
            </div>
        </section>

        <section class="content-section" id="what-is">
            <h2>What Is the IEPF and the 7-Year Rule?</h2>
            <p>The <strong>Investor Education and Protection Fund (IEPF)</strong> is a statutory fund under the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>, established under the Companies Act, 2013. It holds unclaimed dividends, matured deposits and shares in trust until the rightful owner reclaims them.</p>
            <p>The mechanics under <strong>Section 124</strong>: a dividend not claimed within 30 days of declaration becomes "unpaid" and is moved to a special Unpaid Dividend Account within 7 days. If it then stays unclaimed for <strong>seven consecutive years</strong>, it is transferred to the IEPF — and crucially, the <strong>shares</strong> on which dividends have gone unclaimed for seven consecutive years are also transferred to the IEPF Authority's demat account. Transfer is not forfeiture; you can always reclaim.</p>
        </section>

        <section class="content-section" id="lookup">
            <h2>How to Actually Look Up Your Unclaimed Funds</h2>
            <p>Because this page cannot query live records, here is where the real search happens:</p>
            <ul>
                <li><strong>IEPF / MCA portal</strong> — the <a href="https://www.iepf.gov.in/" target="_blank" rel="noopener">IEPF Authority website</a> and the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA portal</a> carry searchable information and the IEPF-5 form.</li>
                <li><strong>Company website</strong> — companies publish year-wise lists of shareholders whose shares / unclaimed dividends were transferred to the IEPF.</li>
                <li><strong>Registrar & Transfer Agent (RTA)</strong> — ask the company's RTA for your folio-wise dividend and transfer history.</li>
                <li><strong>Your broker / demat statements</strong> — review old holdings and dividend credits to spot gaps.</li>
            </ul>
            <div class="callout">
                <p><strong>Tip:</strong> Note your <strong>folio number / DP ID–Client ID</strong> and the company name before you search — these are what the official records are indexed by.</p>
            </div>
        </section>

        <section class="content-section" id="why">
            <h2>Why Funds Go Unclaimed — and How to Prevent It</h2>
            <p>Most IEPF transfers happen quietly, for ordinary reasons rather than negligence. Understanding the causes helps you both recover past amounts and stop new ones slipping away:</p>
            <ul>
                <li><strong>Change of address</strong> — dividend warrants and notices sent to an old address are never received, so the dividend stays unclaimed and the clock starts.</li>
                <li><strong>Old physical holdings</strong> — shares held in physical form from years ago, often forgotten after a move or a change of bank.</li>
                <li><strong>Inactive demat or bank accounts</strong> — a dormant account means electronic dividend credits bounce or go unnoticed.</li>
                <li><strong>Death of the holder</strong> — heirs are frequently unaware of the deceased's shareholdings, and the dividends accumulate untouched.</li>
                <li><strong>Lack of awareness</strong> — many long-term investors simply do not track small dividends across multiple companies.</li>
            </ul>
            <p>To prevent it: keep your KYC, address and bank mandate current with every company's RTA, consolidate physical holdings into demat (see <a href="/blog/demat-shares-in-private-limited-company-everything-you-need-to-know">dematerialisation of shares</a>), register nominations, and review dividend credits each year. India's investor-protection framework is overseen by <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> alongside the MCA, and depositories such as <a href="https://www.cdslindia.com/" target="_blank" rel="noopener">CDSL</a> and <a href="https://nsdl.co.in/" target="_blank" rel="noopener">NSDL</a> maintain the demat accounts into which reclaimed shares are credited.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help with Recovering Shares & Dividends from the IEPF?</h3>
            <p>Patron Accounting LLP supports investors and legal heirs reclaiming unclaimed shares or dividends — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20need%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=IEPF%20unclaimed%20shares%20/%20dividend%20recovery%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20would%20like%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%0A%0AMy%20details%3A%0A-%20Company%20name%3A%0A-%20Original%20holder%20/%20legal%20heir%3A%0A-%20Approx%20years%20unclaimed%3A%0A-%20Folio%20/%20DP%20ID-Client%20ID%20%28if%20known%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <section class="content-section" id="claim">
            <h2>The Form IEPF-5 Claim Process</h2>
            <ol>
                <li><strong>Get your details</strong> — contact the company / RTA for year-wise dividend entitlement and the shares transferred to the IEPF.</li>
                <li><strong>File Form IEPF-5 online</strong> on the MCA portal with shareholder, company, share and demat details.</li>
                <li><strong>Send physical documents</strong> — the signed form, supporting documents and indemnity bond go to the company's <strong>Nodal Officer</strong> at its registered office.</li>
                <li><strong>Nodal Officer verifies</strong> and sends an e-Verification Report to the IEPF Authority.</li>
                <li><strong>IEPF Authority approves</strong> — shares are credited to your demat account and dividends to your linked bank account.</li>
            </ol>
            <p>Only <strong>one consolidated claim per company per financial year</strong> is allowed, so include all folios of the same company together. Timelines vary: filing takes a day or two, Nodal verification a few weeks, and IEPF approval a couple of months.</p>
        </section>

        <section class="content-section" id="documents">
            <h2>Documents Required</h2>
            <table class="rate-table">
                <thead>
                    <tr><th>Document</th><th>Notes</th></tr>
                </thead>
                <tbody>
                    <tr><td>Form IEPF-5 acknowledgement</td><td>Generated on online filing at the MCA portal.</td></tr>
                    <tr><td>PAN card copy</td><td>Mandatory photo identity proof.</td></tr>
                    <tr><td>Demat account proof</td><td>Active account with an NSDL / CDSL participant.</td></tr>
                    <tr><td>Cancelled cheque</td><td>Showing your printed name and bank account number.</td></tr>
                    <tr><td>Original share certificates</td><td>If shares were held in physical form.</td></tr>
                    <tr><td>Indemnity bond & advance receipt</td><td>On the prescribed format / stamp paper.</td></tr>
                    <tr><td>Legal heir documents</td><td>For heirs: transmission papers + entitlement letter from the company.</td></tr>
                </tbody>
            </table>
            <p>For small dividend-only claims below ₹10,000, the indemnity can be on plain paper, notarised. Always follow the current MCA / IEPF instructions, as formats are periodically updated.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the IEPF and what gets transferred to it?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Investor Education and Protection Fund (IEPF) is a fund under the Ministry of Corporate Affairs, set up under the Companies Act, 2013. Under Section 124, any dividend that remains unpaid or unclaimed for seven consecutive years is transferred to the IEPF, and the underlying shares are also transferred to the IEPF Authority's demat account when dividends on them have gone unclaimed for seven consecutive years. The rightful owner can reclaim them later.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I know if my shares or dividends went to the IEPF?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">This checker indicates the likely position from your answers, but the authoritative source is official records. Companies publish year-wise lists of shareholders whose shares and unclaimed dividends have been transferred, usually on their website, and the IEPF and MCA portals carry searchable information. You can also ask the company or its Registrar and Transfer Agent for your folio-wise dividend and transfer history. Always verify against these official sources before filing a claim.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can I actually search for my unclaimed amount inside this tool?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. This tool is a guide and eligibility checker, not a live database search. A web page on its own cannot query the IEPF or company records. To look up your specific shares or dividends you must use the official IEPF and MCA portals, the company's published transfer lists, or contact the company's Registrar and Transfer Agent. This checker tells you whether you are likely affected and how to claim, so you know what to search for.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the 7-year rule for unclaimed dividends?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">When a dividend is not claimed within 30 days of declaration it becomes unpaid, and the company moves it to a special Unpaid Dividend Account within 7 days. Any amount lying in that account that stays unclaimed for seven years from the date of transfer is then moved to the IEPF. Separately, the shares on which dividends have not been claimed for seven consecutive years are also transferred to the IEPF Authority.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I claim shares or dividends back from the IEPF?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">You file Form IEPF-5 online on the MCA portal with your shareholder, company, share and demat details. You then send the signed form with supporting documents and an indemnity bond to the company's Nodal Officer at its registered office. The Nodal Officer verifies the claim and sends an e-Verification Report to the IEPF Authority, which on approval credits the shares to your demat account and the dividends to your linked bank account.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What documents are needed for an IEPF-5 claim?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">You generally need a PAN card copy as photo identity, proof of an active demat account with an NSDL or CDSL participant, a cancelled cheque showing your name and account number, the original share certificates if held physically, and earlier dividend or holding proofs. An indemnity bond and the acknowledgement of the online IEPF-5 are also required. A legal heir additionally needs transmission documents and an entitlement letter from the company before filing.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can a legal heir or nominee claim from the IEPF?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Where the registered shareholder has died, the legal heir, nominee or successor can claim, but they must first complete the share transmission with the company and obtain an entitlement letter before filing Form IEPF-5. The claim then proceeds through the same Nodal Officer verification and IEPF Authority approval. Heir claims need succession or legal-heir documents in addition to the standard set, so they usually take longer.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How long does an IEPF claim take?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Timelines vary by company and the IEPF Authority. Filing the online IEPF-5 takes a day or two, the Nodal Officer's verification commonly takes a few weeks, and the IEPF Authority's examination and approval can take a couple of months, sometimes longer if additional proofs are sought. Once approved, the credit of shares and dividends typically follows within a few weeks. Accurate documents and a clean folio history speed the process.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is there a deadline to claim from the IEPF?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Transfer to the IEPF is not a forfeiture. The shares and dividends are held in trust by the IEPF Authority, and the rightful owner or their legal heir can reclaim them at any time by following the prescribed Form IEPF-5 process. There is, however, a practical limit that only one consolidated claim per company can be made in a financial year, so it is best to include all folios of the same company together.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Do I need a demat account to claim from the IEPF?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, for shares. Because the IEPF Authority returns shares in dematerialised form, you must have an active demat account with a depository participant registered with NSDL or CDSL, and provide its details in Form IEPF-5. The reclaimed dividends are credited to the bank account linked to that demat account, so the cancelled cheque and bank details must match. If you do not have a demat account you should open one before filing.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is this IEPF checker free?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, the Patron Accounting IEPF Unclaimed Shares and Dividend Checker is completely free with no signup required. It runs entirely in your browser and stores nothing on our servers. It indicates whether your shares or dividends have likely moved to the IEPF and sets out the Form IEPF-5 claim process and documents. The actual search and the claim filing happen on the official MCA and IEPF portals, which this tool links to.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">
        <div class="cta-card">
            <h3>IEPF Claim Assistance</h3>
            <p>Form IEPF-5 documentation, indemnity bond and company-side verification — fixed-fee.</p>
            <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20need%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a>
        <a href="mailto:sales@patronaccounting.com?subject=IEPF%20unclaimed%20shares%20/%20dividend%20recovery%20enquiry&body=Hi%20Patron%20Accounting%2C%0A%0AI%20used%20the%20IEPF%20Unclaimed%20Shares%20%26%20Dividend%20Checker%20and%20would%20like%20help%20recovering%20shares/dividends%20from%20the%20IEPF.%0A%0AMy%20details%3A%0A-%20Company%20name%3A%0A-%20Original%20holder%20/%20legal%20heir%3A%0A-%20Approx%20years%20unclaimed%3A%0A-%20Folio%20/%20DP%20ID-Client%20ID%20%28if%20known%29%3A%0A%0APlease%20get%20in%20touch." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a>
    </div>
        </div>

        <div class="sidebar-card">
            <h3>Official Portals</h3>
            <a href="https://www.iepf.gov.in/" target="_blank" rel="noopener" class="sidebar-link">IEPF Authority <span class="arrow">→</span></a>
            <a href="https://www.mca.gov.in/" target="_blank" rel="noopener" class="sidebar-link">MCA Portal <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/transfer-of-shares" class="sidebar-link">Transfer of Shares <span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/net-worth-calculator" class="sidebar-link">Net Worth Calculator <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/demat-shares-in-private-limited-company-everything-you-need-to-know" class="sidebar-link">Demat of Shares <span class="arrow">→</span></a>
            <a href="/blog/dividend-payout-ratio" class="sidebar-link">Dividend Payout Ratio <span class="arrow">→</span></a>
        </div>
    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    // ===== parseINR (UPDATE-TOOLS v1) =====
    function parseINR(raw){ if(raw===undefined||raw===null) return NaN; const c=String(raw).replace(/[,\s\u20B9]/g,''); if(c==='')return NaN; const n=parseFloat(c); return isFinite(n)?n:NaN; }
    function pickPositive(p,fb){ return (isFinite(p)&&p>0)?p:fb; }

    var ans = { years:null, who:null, demat:null };

    function refreshEnabled() {
        // Q2 unlocks once years answered and not "under7"; Q3 unlocks after who
        setBlock('qb2', ans.years === 'over7' || ans.years === 'unsure');
        setBlock('qb3', (ans.years === 'over7' || ans.years === 'unsure') && ans.who !== null);
    }
    function setBlock(id, enabled) {
        var el = document.getElementById(id);
        if (enabled) el.classList.remove('disabled'); else el.classList.add('disabled');
    }

    function pick(btn) {
        var q = btn.dataset.q, v = btn.dataset.value;
        ans[q] = v;
        btn.parentElement.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        btn.classList.add('active');
        if (q === 'years') { if (v === 'under7') { ans.who = null; ans.demat = null; clearGroup('qb2'); clearGroup('qb3'); } }
        if (q === 'who') { /* keep demat */ }
        refreshEnabled();
    }
    function clearGroup(id){ document.getElementById(id).querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); }); }

    var OFFICIAL = '<a class="official-link" href="https://www.iepf.gov.in/" target="_blank" rel="noopener">Search & file on the IEPF / MCA portal →</a>';

    function verdict(cls, tag, title, detail, steps, showDemat) {
        var html = '<div class="verdict '+cls+'">';
        html += '<div class="verdict-tag">'+tag+'</div>';
        html += '<div class="verdict-title">'+title+'</div>';
        html += '<div class="verdict-detail">'+detail+'</div>';
        html += '</div>';
        if (steps && steps.length) {
            html += '<div class="next-steps"><h4>Next steps</h4>';
            steps.forEach(function(s,i){ html += '<div class="step-row"><span class="step-num">'+(i+1)+'</span><span>'+s+'</span></div>'; });
            html += '</div>';
        }
        if (showDemat && ans.demat === 'no') {
            html += '<div class="callout warn" style="margin-top:14px;"><p><strong>Open a demat account first:</strong> reclaimed shares are credited only in dematerialised form, so you will need an active NSDL/CDSL demat account before filing IEPF-5.</p></div>';
        }
        html += '<div style="margin-top:14px;">'+OFFICIAL+'</div>';
        return html;
    }

    function calculate() {
        if (ans.years === null) { alert('Please answer question 1 (how long the dividend has been unclaimed).'); return; }

        var out = '';
        if (ans.years === 'under7') {
            out = verdict('notyet','Likely not in IEPF yet','Probably still with the company',
                'If the dividend has been unclaimed for <strong>less than 7 years</strong>, it has likely <strong>not</strong> been transferred to the IEPF yet — it should still be recoverable directly from the company or its RTA from the Unpaid Dividend Account. Act before the 7-year line to avoid the IEPF route entirely.',
                ['Contact the company / RTA to claim the unpaid dividend directly.','Update your address, bank and KYC so future dividends are not missed.','Verify the position on the company\u2019s unclaimed-dividend list.'], false);
        } else {
            if (ans.who === null) { alert('Please answer question 2 (original holder or legal heir).'); return; }
            if (ans.demat === null) { alert('Please answer question 3 (demat account).'); return; }
            if (ans.who === 'heir') {
                out = verdict('heir','Likely in IEPF — heir route','Possibly in IEPF; claim as legal heir',
                    'At <strong>7+ years</strong> unclaimed, the shares/dividends were likely transferred to the IEPF. As a <strong>legal heir</strong>, you must first complete <strong>transmission</strong> with the company and obtain an <strong>entitlement letter</strong> before filing Form IEPF-5.',
                    ['Verify the transfer on the company list / IEPF portal (note folio, DP ID\u2013Client ID).','Complete share transmission and get the entitlement letter from the company.','File Form IEPF-5 online on the MCA portal.','Send signed form + indemnity bond + heir documents to the company\u2019s Nodal Officer.','Nodal Officer verifies \u2192 IEPF Authority approves \u2192 credit to demat / bank.'], true);
            } else {
                out = verdict('likely','Likely in IEPF — file IEPF-5','Possibly in IEPF; file Form IEPF-5',
                    'At <strong>7+ years</strong> unclaimed, your shares/dividends were likely transferred to the IEPF. As the <strong>original holder</strong> you can file <strong>Form IEPF-5</strong> to reclaim them — there is no deadline, but only one consolidated claim per company per financial year.',
                    ['Get year-wise dividend / transfer details from the company or RTA.','Verify on the IEPF / MCA portal (note folio, DP ID\u2013Client ID).','File Form IEPF-5 online on the MCA portal.','Send signed form + indemnity bond + documents to the company\u2019s Nodal Officer.','Nodal Officer verifies \u2192 IEPF Authority approves \u2192 credit to demat / bank.'], true);
            }
            if (ans.years === 'unsure') {
                out = '<div class="callout" style="margin-bottom:16px;"><p><strong>Note:</strong> You weren\u2019t sure of the duration, so this assumes the 7-year line may have passed. Confirm the exact dividend years on the company list before filing.</p></div>' + out;
            }
        }

        document.getElementById('verdictContainer').innerHTML = out;
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function resetCalc() {
        ans = { years:null, who:null, demat:null };
        document.querySelectorAll('.toggle-btn').forEach(function(b){ b.classList.remove('active'); });
        ['qb2','qb3'].forEach(function(id){ document.getElementById(id).classList.add('disabled'); });
        document.getElementById('resultSection').classList.remove('visible');
    }

    function toggleFaq(e) {
        var btn = e.closest ? e.closest('.faq-question') || e : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(i){ i.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    var sections = document.querySelectorAll('section[id], header[id]');
    var navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', function() {
        var current = '';
        sections.forEach(function(s){ var top = s.offsetTop - 80; if (window.pageYOffset >= top) current = s.getAttribute('id'); });
        navLinks.forEach(function(link){ link.classList.toggle('active', link.getAttribute('href') === '#' + current); });
    });
</script>
@endsection
