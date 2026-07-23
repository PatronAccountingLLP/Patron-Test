@extends('layouts.app')
@section('meta')
<title>DIN Verifier | Director Identification Number Check</title>
<meta name="description" content="Free DIN verifier: check a Director Identification Number's 8-digit format and structure offline, then follow a guided checklist for official MCA verification.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="/tools/din-authenticity-verifier">

<meta property="og:title" content="DIN Authenticity Verifier — Free DIN Format Check Tool">
<meta property="og:description" content="Validate a Director Identification Number's 8-digit format and structure instantly, then follow a guided checklist for official MCA DIN verification. Free and India-specific.">
<meta property="og:type" content="website">
<meta property="og:url" content="/tools/din-authenticity-verifier">
<meta property="og:image" content="/tools/din-authenticity-verifier-og.png">
<meta property="og:site_name" content="Patron Accounting LLP">
<meta property="og:locale" content="en_IN">
<meta name="theme-color" content="#15365f">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="DIN Authenticity Verifier — Free DIN Format Check Tool">
<meta name="twitter:description" content="Validate a Director Identification Number's 8-digit format instantly, then follow a guided checklist for official MCA verification.">
<meta name="twitter:image" content="/tools/din-authenticity-verifier-og.png">

<link rel="icon" href="/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">

@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "DIN Authenticity Verifier",
  "description": "The DIN Authenticity Verifier validates the format and structure of a Director Identification Number issued by the Ministry of Corporate Affairs under Section 153 of the Companies Act 2013, checking that it is a valid 8-digit numeric identifier, and then guides the user through the official MCA portal verification steps and a due-diligence checklist. It is an offline format pre-check, not a live MCA database lookup.",
  "url": "/tools/din-authenticity-verifier",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Any",
  "inLanguage": "en-IN",
  "isAccessibleForFree": true,
  "datePublished": "2026-05-16T08:00:00+05:30",
  "dateModified": "2026-05-16T08:00:00+05:30",
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
  "provider": { "@id": "/#organization" }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
    {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
    {"@type": "ListItem", "position": 3, "name": "DIN Authenticity Verifier", "item": "/tools/din-authenticity-verifier"}
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
      "name": "What is the DIN Authenticity Verifier?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is a free tool that checks whether a Director Identification Number is in the correct format and structure issued by the Ministry of Corporate Affairs, and then guides you through the official MCA verification steps and a due-diligence checklist. It is an offline format pre-check that runs in your browser; it does not query the live MCA database."
      }
    },
    {
      "@type": "Question",
      "name": "What is a DIN?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Director Identification Number is a unique 8-digit number allotted by the Ministry of Corporate Affairs to an individual who intends to become or is a director of an Indian company. It is issued under Section 153 of the Companies Act 2013, is person-specific, and has lifetime validity, similar to a PAN."
      }
    },
    {
      "@type": "Question",
      "name": "How many digits is a valid DIN?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A valid DIN is exactly 8 digits, entirely numeric, with no letters or special characters. Any value that is not an 8-digit number fails the format check. The verifier confirms the length and that all characters are digits, which is the first sanity check before an official MCA lookup."
      }
    },
    {
      "@type": "Question",
      "name": "Can this tool confirm a DIN is genuine and active?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The tool can only confirm the format is structurally valid. Whether a DIN actually exists, who it belongs to, and whether it is active, deactivated or disqualified can only be confirmed on the official MCA portal using the Enquire DIN Status and Verify DIN-PAN services. The tool routes you to these and provides a checklist."
      }
    },
    {
      "@type": "Question",
      "name": "How do I verify a DIN on the MCA portal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Go to mca.gov.in, open MCA Services, then DIN Services. Use Enquire DIN Status to see whether the 8-digit DIN is approved, deactivated or disqualified, and use Verify DIN-PAN Details of Director to confirm the DIN matches the director's name, date of birth and PAN in the MCA database."
      }
    },
    {
      "@type": "Question",
      "name": "What are the possible DIN statuses?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Common statuses include Approved or Active, Deactivated due to non-filing of DIR-3 KYC, Disqualified under Section 164, Lapsed, and Surrendered or Cancelled via Form DIR-5. A director with a deactivated or disqualified DIN cannot validly sign MCA forms or be appointed, so status matters as much as format."
      }
    },
    {
      "@type": "Question",
      "name": "Why would a DIN be deactivated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The most common reason is non-filing of the annual DIR-3 KYC, which must be filed by 30 September each year. A deactivated DIN cannot be used for any MCA filing until the KYC is filed with the applicable late fee and the DIN is reactivated. Disqualification under Section 164 is a separate, more serious status."
      }
    },
    {
      "@type": "Question",
      "name": "Is PAN required to verify a DIN?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To fully authenticate a DIN against a person, yes. The MCA Verify DIN-PAN service cross-checks the DIN against the director's name, date of birth and PAN. A format check alone does not tie a DIN to an individual, so for due diligence you should always complete the DIN-PAN match on the MCA portal."
      }
    },
    {
      "@type": "Question",
      "name": "Why verify a director's DIN before a transaction?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Investors, lenders, auditors and counterparties verify a DIN to confirm the person is a validly identified, non-disqualified director before signing agreements, lending, or onboarding a vendor. A fabricated or deactivated DIN is a red flag for fraud or non-compliance, so DIN verification is a standard due-diligence step."
      }
    },
    {
      "@type": "Question",
      "name": "Does a DIN ever expire?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The DIN itself has lifetime validity and is never re-issued to another person. However, it becomes unusable if it is deactivated for non-filing of DIR-3 KYC, or if the director is disqualified. So a DIN never expires as a number, but its usability depends on annual KYC compliance and the director's standing."
      }
    },
    {
      "@type": "Question",
      "name": "Does this tool store the DIN I enter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The DIN Authenticity Verifier runs entirely in your browser. The DIN you enter is never transmitted to any server or stored anywhere. Refreshing the page clears the input, so you can run a confidential format pre-check before proceeding to official MCA verification."
      }
    },
    {
      "@type": "Question",
      "name": "Is the DIN format check legally conclusive?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. A passing format check only means the value could be a valid DIN structurally. It is not legal confirmation. The authoritative source is the MCA portal, and for legal or transactional reliance you should obtain and retain a screenshot or report of the MCA DIN status and DIN-PAN match, ideally reviewed by a professional."
      }
    },
    {
      "@type": "Question",
      "name": "Is the DIN Authenticity Verifier free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a due-diligence aid for founders, finance teams and professionals. For full director compliance, DIR-3 KYC filing or handling an ROC notice, our Chartered Accountants and Company Secretaries assist companies across India."
      }
    }
  ]
}
</script>
@endsection
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

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
        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        .toc-nav {
            background: var(--primary-dark);
            position: sticky;
            top: 0;
            z-index: 100;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 0;
        }
        .toc-nav a {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 16px;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
            display: inline-block;
        }
        .toc-nav a:hover, .toc-nav a.active {
            color: #fff;
            border-bottom-color: var(--accent);
        }

        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px 24px;
        }
        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .badge-updated {
            background: var(--primary);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.3px;
        }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span { color: var(--accent); display: inline; }

        .tldr {
            background: var(--card);
            border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 20px 24px;
            margin: 0 auto 32px;
            max-width: 1200px;
            box-shadow: var(--shadow-sm);
        }
        .tldr-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }

        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }
        @media (min-width: 768px) {
            .main-layout { grid-template-columns: 1fr 320px; gap: 40px; }
        }
        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

        .calc-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 40px;
            border: 1px solid var(--border);
        }
        .calc-card h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }
        .calc-card .step-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 24px 0 12px;
        }

        .form-group { margin-bottom: 20px; }
        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .din-input-wrap { position: relative; }
        .form-group input {
            width: 100%;
            padding: 16px 18px;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-family: var(--font-mono);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 4px;
            color: var(--text);
            background: var(--surface);
            transition: border-color 0.2s;
        }
        .form-group input:focus { border-color: var(--primary); }
        .field-hint {
            font-size: 11px;
            color: var(--text-muted);
            margin-top: 6px;
            text-transform: none;
            letter-spacing: 0;
            font-weight: 400;
        }

        .live-flag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 10px;
            font-size: 13px;
            font-weight: 600;
            font-family: var(--font-mono);
        }
        .live-flag.ok { color: var(--success); }
        .live-flag.bad { color: var(--danger); }
        .live-flag.idle { color: var(--text-muted); }

        .check-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
            margin: 8px 0 20px;
        }
        .check-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 12px 14px;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            -webkit-tap-highlight-color: transparent;
        }
        .check-item:hover { border-color: var(--primary-light); }
        .check-item.checked { background: #ECFDF5; border-color: var(--success); }
        .check-item input { margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0; accent-color: var(--primary); }
        .check-item label { font-size: 14px; color: var(--text-secondary); cursor: pointer; line-height: 1.5; }

        .btn-calculate {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 8px;
        }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-secondary {
            display: block;
            width: 100%;
            padding: 13px;
            background: var(--surface-alt);
            color: var(--primary);
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
        }
        .btn-secondary:hover { background: var(--border); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .verdict-card {
            border-radius: var(--radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            border: 1px solid var(--border);
        }
        .verdict-card.valid { background: #ECFDF5; border-color: var(--success); }
        .verdict-card.invalid { background: #FEF2F2; border-color: var(--danger); }
        .verdict-headline { font-size: 20px; font-weight: 700; margin-bottom: 6px; }
        .verdict-card.valid .verdict-headline { color: var(--success); }
        .verdict-card.invalid .verdict-headline { color: var(--danger); }
        .verdict-reason { font-size: 14px; color: var(--text-secondary); }

        .result-breakdown {
            margin-top: 16px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 16px 20px;
        }
        .breakdown-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            font-size: 14px;
            gap: 12px;
        }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value { font-family: var(--font-mono); font-weight: 700; color: var(--text); text-align: right; }
        .breakdown-value.ok { color: var(--success); }
        .breakdown-value.bad { color: var(--danger); }

        .btn-reset {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 16px;
            padding: 8px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--card);
            color: var(--text-muted);
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        .content-section {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 32px;
            margin-bottom: 32px;
            border: 1px solid var(--border);
        }
        .content-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 16px;
            line-height: 1.3;
        }
        .content-section h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-dark);
            margin: 20px 0 10px;
        }
        .content-section p {
            font-size: 15px;
            color: var(--text-secondary);
            margin-bottom: 14px;
            line-height: 1.75;
        }
        .content-section ul, .content-section ol {
            margin: 0 0 14px 22px;
            color: var(--text-secondary);
            font-size: 15px;
            line-height: 1.75;
        }
        .content-section li { margin-bottom: 6px; }
        .content-section a {
            color: var(--primary-light);
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        .rate-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0;
            font-size: 14px;
        }
        .rate-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
            vertical-align: top;
        }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }

        .formula-box {
            background: var(--primary-dark);
            color: #fff;
            border-radius: var(--radius);
            padding: 20px 24px;
            margin: 16px 0;
            font-family: var(--font-mono);
            font-size: 14px;
            line-height: 1.8;
            overflow-x: auto;
        }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }

        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        .faq-item {
            background: var(--surface);
            border-radius: var(--radius);
            margin-bottom: 10px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 16px 20px;
            border: none;
            background: none;
            font-family: var(--font-body);
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            text-align: left;
            line-height: 1.4;
            gap: 12px;
            -webkit-tap-highlight-color: transparent;
        }
        .faq-question * { pointer-events: none; }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: transform 0.3s;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, padding 0.35s ease;
        }
        .faq-item.open .faq-answer { max-height: 600px; }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        .sidebar-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
        }
        .sidebar-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 14px;
        }
        .sidebar-link {
            display: block;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 4px;
            -webkit-tap-highlight-color: rgba(0,0,0,0.05);
            touch-action: manipulation;
        }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--accent);
            color: var(--primary-dark);
            font-weight: 700;
            font-size: 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1);
            touch-action: manipulation;
        }
        .cta-btn:hover { background: var(--accent-light); }

        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }

        .footer {
            background: var(--primary-dark);
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            padding: 16px 20px;
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box {
            background: #FEE2E2;
            border: 2px solid #DC2626;
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
            color: #991B1B;
            font-weight: 600;
            margin-bottom: 20px;
        }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .form-group input { font-size: 18px; letter-spacing: 2px; }
        }


/* ===== CTA SYSTEM ===== */
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

/* ===== FOCUS-VISIBLE ===== */
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

/* ===== REDUCED MOTION ===== */
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

/* ===== PRINT ===== */
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
        <a href="#verifier">Verifier</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#what-is-din">What Is a DIN</a>
        <a href="#mca-verify">Official MCA Check</a>
        <a href="#statuses">DIN Statuses</a>
        <a href="#red-flags">Red Flags</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    DIN Authenticity Verifier
</nav>

<header class="hero" id="verifier">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>DIN Authenticity Verifier — <span>8-Digit Format Check & MCA Verification Guide</span></h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">DIN deactivated or notice received? <strong>Talk to an expert in 30 seconds.</strong> Free consultation, no obligation.</div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20DIN%20Authenticity%20Verifier.%20Please%20connect%20me%20with%20an%20expert." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=DIN%20Authenticity%20Verifier%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20DIN%20verification%2C%20DIR-3%20KYC%20or%20an%20ROC%20notice.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This free tool helps you sanity-check a Director Identification Number before relying on it. Step 1 instantly validates the DIN's format and structure — exactly 8 numeric digits, no letters or symbols — entirely in your browser. Step 2 gives you a due-diligence checklist and direct routing to the official MCA Enquire DIN Status and Verify DIN-PAN services, because only the MCA database can confirm a DIN is real, active and tied to a specific director. Built and reviewed by Chartered Accountants at Patron Accounting LLP. This is an offline format pre-check, not a live MCA lookup.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Verify a Director Identification Number</h2>
            <noscript>
                <div class="noscript-box">
                    This tool requires JavaScript. Please enable JavaScript, or verify the DIN directly on the MCA portal under MCA Services › DIN Services.
                </div>
            </noscript>

            <div class="step-label">Step 1 — DIN Format Check</div>

            <div class="form-group">
                <label for="dinInput">Director Identification Number (DIN)</label>
                <div class="din-input-wrap">
                    <input type="text" id="dinInput" placeholder="00123456" inputmode="numeric" maxlength="8" autocomplete="off" oninput="liveCheck()">
                </div>
                <div class="field-hint">Enter the 8-digit DIN. Format is checked live; this is not an MCA database lookup.</div>
                <div class="live-flag idle" id="liveFlag">Awaiting input…</div>
            </div>

            <button class="btn-calculate" onclick="verifyDin()">Check DIN Format</button>

            <div class="step-label">Step 2 — Authenticity Due-Diligence Checklist</div>
            <p style="font-size:13px;color:var(--text-muted);margin-bottom:10px;">A passing format check is not proof of authenticity. Complete these on the official MCA portal, then tick each step done.</p>
            <div class="check-list" id="checkList"></div>
            <a class="btn-secondary" href="https://www.mca.gov.in/" target="_blank" rel="noopener">Open MCA Portal → DIN Services ↗</a>
            <button class="btn-secondary" onclick="scoreChecklist()">Score Due-Diligence</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-headline" id="verdictHeadline">—</div>
                    <div class="verdict-reason" id="verdictReason">—</div>
                </div>

                <div class="result-breakdown" id="breakdownSection">
                    <div class="breakdown-row">
                        <span class="breakdown-label">Entered value</span>
                        <span class="breakdown-value" id="bdValue">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Length = 8</span>
                        <span class="breakdown-value" id="bdLen">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">All digits (0-9)</span>
                        <span class="breakdown-value" id="bdNum">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Not all-zero / trivial</span>
                        <span class="breakdown-value" id="bdTrivial">—</span>
                    </div>
                    <div class="breakdown-row">
                        <span class="breakdown-label">Due-diligence steps done</span>
                        <span class="breakdown-value" id="bdChecklist">—</span>
                    </div>
                </div>

                <div class="callout warn" style="margin-top:16px;">
                    <p><strong>Format pre-check only.</strong> A valid structure does not mean the DIN exists, is active, or belongs to a specific person. Always confirm on the MCA portal before relying on a DIN for any transaction.</p>
                </div>

                <div class="post-result-cta" id="postResultCTA">
                    <div class="post-result-cta-head">Need help with DIN KYC, reactivation or an ROC notice?</div>
                    <div class="post-result-cta-sub">Free 15-min call with a Chartered Accountant / Company Secretary — DIR-3 KYC, DIN reactivation, director compliance and ROC notice response, no obligation.</div>
                    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20DIN%20Authenticity%20Verifier.%20Please%20help%20me%20with%20DIN%20verification%20%2F%20KYC%20%2F%20reactivation." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=DIN%20Authenticity%20Verifier%20%E2%80%94%20Assistance%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20DIN%20Authenticity%20Verifier%20and%20need%20help%20with%20DIN%20status%2C%20KYC%20or%20reactivation.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
                </div>
                <button class="btn-reset" onclick="resetCalc()">↺ Reset Tool</button>
            </div>
        </div>

        <section class="content-section" id="how-to-use">
            <h2>How to Use the DIN Authenticity Verifier</h2>
            <p>This tool is built for founders, finance teams, investors, lenders and professionals running due diligence on a company director before a transaction, appointment or onboarding.</p>
            <ol>
                <li><strong>Enter the DIN.</strong> As you type, the tool live-checks the structure: exactly 8 characters, all digits, no letters or symbols.</li>
                <li><strong>Run the format check.</strong> You get a clear pass or fail with the specific reason — wrong length, non-numeric, or trivial value.</li>
                <li><strong>Complete the MCA steps.</strong> Use the checklist to run Enquire DIN Status and Verify DIN-PAN on the official portal, because only MCA can confirm the DIN is genuine and active.</li>
                <li><strong>Score your due diligence.</strong> Tick each official step completed to confirm you have done a defensible verification, not just a format check.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> A format pass tells you the value <em>could</em> be a DIN; it never tells you the DIN is real. The single most common due-diligence failure is stopping at the format check and never running the MCA DIN-PAN match.</p>
            </div>
        </section>

        <section class="content-section" id="what-is-din">
            <h2>What Is a Director Identification Number?</h2>
            <p>A Director Identification Number is a unique 8-digit number allotted by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> to an individual who is, or intends to become, a director of an Indian company. It is issued under Section 153 of the Companies Act 2013 (with Rule 9 of the Companies (Appointment and Qualification of Directors) Rules 2014); the concept was first introduced by the Companies (Amendment) Act 2006.</p>
            <ul>
                <li><strong>Unique and person-specific.</strong> One individual holds exactly one DIN for life, regardless of how many companies they direct.</li>
                <li><strong>Lifetime validity.</strong> The number is never re-issued to another person, similar to a PAN.</li>
                <li><strong>Mandatory for filings.</strong> The DIN must be quoted under a director's signature on returns, board resolutions and MCA e-forms.</li>
                <li><strong>Applied via</strong> Form DIR-3 (existing company) or SPICe+ INC-32 (new incorporation); updated via DIR-6; surrendered via DIR-5.</li>
            </ul>
            <div class="formula-box">
                <span class="label">Valid DIN structure:</span> exactly 8 characters<br>
                <span class="label">Character set:</span> digits 0-9 only — no letters, spaces or symbols<br>
                <span class="label">Example shape:</span> 0XXXXXXX / 1XXXXXXX (8 numerals)<br><br>
                Structure valid ≠ DIN genuine — only <span class="label">MCA</span> can confirm existence & status
            </div>
            <p>The law and rules are administered by the MCA and available via <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code</a>. For director compliance support, see our <a href="/director-kyc">Director KYC</a> service.</p>
        </section>

        <section class="content-section" id="mca-verify">
            <h2>How to Verify a DIN on the Official MCA Portal</h2>
            <p>The structural check in this tool is a first filter only. Authoritative verification is always done on the MCA portal, which is the single source of truth for whether a DIN exists, who it belongs to, and its current status.</p>
            <ol>
                <li>Go to the MCA portal and open <strong>MCA Services › DIN Services</strong>.</li>
                <li>Use <strong>Enquire DIN Status</strong> — enter the 8-digit DIN to see whether it is Approved, Deactivated, Disqualified, Lapsed or Surrendered.</li>
                <li>Use <strong>Verify DIN-PAN Details of Director / Designated Partner</strong> — this cross-checks the DIN against the director's name, date of birth and PAN in the MCA database.</li>
                <li>For company linkage, use <strong>Master Data › View Company/LLP Master Data</strong> to list a company's directors and their DINs.</li>
                <li>Retain a dated screenshot or report of the DIN status and DIN-PAN match for your records.</li>
            </ol>
            <div class="callout">
                <p><strong>CA Tip:</strong> The MCA name match is character-by-character. If the DIN-PAN check returns a mismatch, it is often a data entry difference, not fraud — but it must be resolved (the director files DIR-6) before you rely on the DIN. Document the resolution.</p>
            </div>
        </section>

        <section class="content-section" id="statuses">
            <h2>DIN Statuses and What They Mean</h2>
            <p>A correctly formatted DIN can still be unusable. The status returned by the MCA portal determines whether the director can validly sign and be appointed.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Status</th><th>Meaning & Action</th></tr>
                </thead>
                <tbody>
                    <tr><td>Approved / Active</td><td>Valid and usable for filings and appointment</td></tr>
                    <tr><td>Deactivated</td><td>Usually DIR-3 KYC not filed; reactivate via KYC + late fee</td></tr>
                    <tr><td>Disqualified</td><td>Director disqualified under Section 164; cannot act</td></tr>
                    <tr><td>Lapsed</td><td>Application not completed; DIN not allotted</td></tr>
                    <tr><td>Surrendered / Cancelled</td><td>Given up via DIR-5 or cancelled by MCA</td></tr>
                </tbody>
            </table>
            <p>Annual <strong>DIR-3 KYC</strong> by 30 September keeps a DIN active, as administered by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>. Non-filing is the most common cause of a deactivated DIN. See our guides on <a href="/blog/din-kyc-filing-complete-guide-to-dir-3-kyc-form-for-company-directors">DIR-3 KYC filing</a> and <a href="/blog/dir-3-kyc-din-deactivation-reactivation">DIN deactivation and reactivation</a>.</p>
        </section>

        <section class="content-section" id="red-flags">
            <h2>DIN Red Flags in Due Diligence</h2>
            <p>When verifying a counterparty's director, certain signals warrant a closer look before you proceed.</p>
            <ul>
                <li><strong>Wrong structure.</strong> Anything that is not exactly 8 digits is not a DIN — a fabricated or mistyped value.</li>
                <li><strong>DIN-PAN mismatch on MCA.</strong> The DIN does not tie to the claimed name, DOB or PAN.</li>
                <li><strong>Deactivated or disqualified status.</strong> The person cannot validly act as a director until cured.</li>
                <li><strong>DIN not linked to the claimed company.</strong> Master Data does not list the person as a director of that entity.</li>
                <li><strong>Reluctance to share the DIN.</strong> A genuine director's DIN is a routine, shareable identifier.</li>
            </ul>
            <div class="callout warn">
                <p><strong>Note:</strong> This tool performs a client-side format check only and is not legal advice or a substitute for official MCA verification. For a defensible director due-diligence file, complete the MCA checks and have them reviewed. Our team assists with <a href="/registrar-of-companies">ROC notices</a>, <a href="/director-kyc">Director KYC</a> and <a href="/private-limited-company-compliance">private limited company compliance</a>, with the corporate registry overseen by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a>.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>DIN KYC, Reactivation or ROC Notice Help</h3>
    <p>Patron Accounting LLP handles DIR-3 KYC, DIN reactivation and ROC notice responses — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20DIN%20Authenticity%20Verifier.%20I%20need%20help%20with%20DIN%20KYC%2C%20reactivation%20or%20an%20ROC%20notice.%20Please%20connect%20me%20with%20an%20expert." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
            <a href="mailto:sales@patronaccounting.com?subject=DIN%20Authenticity%20Verifier%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20DIN%20verification%2C%20DIR-3%20KYC%20or%20an%20ROC%20notice.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
        </div>
</div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About DIN Verification</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is the DIN Authenticity Verifier?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">It is a free tool that checks whether a Director Identification Number is in the correct format and structure issued by the Ministry of Corporate Affairs, and then guides you through the official MCA verification steps and a due-diligence checklist. It is an offline format pre-check that runs in your browser; it does not query the live MCA database.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What is a DIN?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">A Director Identification Number is a unique 8-digit number allotted by the Ministry of Corporate Affairs to an individual who intends to become or is a director of an Indian company. It is issued under Section 153 of the Companies Act 2013, is person-specific, and has lifetime validity, similar to a PAN.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How many digits is a valid DIN?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">A valid DIN is exactly 8 digits, entirely numeric, with no letters or special characters. Any value that is not an 8-digit number fails the format check. The verifier confirms the length and that all characters are digits, which is the first sanity check before an official MCA lookup.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can this tool confirm a DIN is genuine and active?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The tool can only confirm the format is structurally valid. Whether a DIN actually exists, who it belongs to, and whether it is active, deactivated or disqualified can only be confirmed on the official MCA portal using the Enquire DIN Status and Verify DIN-PAN services. The tool routes you to these and provides a checklist.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How do I verify a DIN on the MCA portal?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Go to mca.gov.in, open MCA Services, then DIN Services. Use Enquire DIN Status to see whether the 8-digit DIN is approved, deactivated or disqualified, and use Verify DIN-PAN Details of Director to confirm the DIN matches the director's name, date of birth and PAN in the MCA database.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What are the possible DIN statuses?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Common statuses include Approved or Active, Deactivated due to non-filing of DIR-3 KYC, Disqualified under Section 164, Lapsed, and Surrendered or Cancelled via Form DIR-5. A director with a deactivated or disqualified DIN cannot validly sign MCA forms or be appointed, so status matters as much as format.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Why would a DIN be deactivated?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The most common reason is non-filing of the annual DIR-3 KYC, which must be filed by 30 September each year. A deactivated DIN cannot be used for any MCA filing until the KYC is filed with the applicable late fee and the DIN is reactivated. Disqualification under Section 164 is a separate, more serious status.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is PAN required to verify a DIN?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">To fully authenticate a DIN against a person, yes. The MCA Verify DIN-PAN service cross-checks the DIN against the director's name, date of birth and PAN. A format check alone does not tie a DIN to an individual, so for due diligence you should always complete the DIN-PAN match on the MCA portal.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Why verify a director's DIN before a transaction?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Investors, lenders, auditors and counterparties verify a DIN to confirm the person is a validly identified, non-disqualified director before signing agreements, lending, or onboarding a vendor. A fabricated or deactivated DIN is a red flag for fraud or non-compliance, so DIN verification is a standard due-diligence step.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does a DIN ever expire?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">The DIN itself has lifetime validity and is never re-issued to another person. However, it becomes unusable if it is deactivated for non-filing of DIR-3 KYC, or if the director is disqualified. So a DIN never expires as a number, but its usability depends on annual KYC compliance and the director's standing.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does this tool store the DIN I enter?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The DIN Authenticity Verifier runs entirely in your browser. The DIN you enter is never transmitted to any server or stored anywhere. Refreshing the page clears the input, so you can run a confidential format pre-check before proceeding to official MCA verification.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the DIN format check legally conclusive?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">No. A passing format check only means the value could be a valid DIN structurally. It is not legal confirmation. The authoritative source is the MCA portal, and for legal or transactional reliance you should obtain and retain a screenshot or report of the MCA DIN status and DIN-PAN match, ideally reviewed by a professional.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is the DIN Authenticity Verifier free?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, it is completely free with no sign-up or usage limit. Patron Accounting LLP provides it as a due-diligence aid for founders, finance teams and professionals. For full director compliance, DIR-3 KYC filing or handling an ROC notice, our Chartered Accountants and Company Secretaries assist companies across India.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>DIN Deactivated or ROC Notice Received?</h3>
            <p>DIR-3 KYC, DIN reactivation & ROC notice response across India — fixed-fee.</p>
            <div class="brand-cta-stack">
                <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20DIN%20Authenticity%20Verifier.%20I%20need%20help%20with%20DIN%20KYC%2C%20reactivation%20or%20an%20ROC%20notice.%20Please%20connect%20me%20with%20an%20expert." class="brand-cta-btn brand-cta-btn-wa" aria-label="WhatsApp us" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg> WhatsApp</a>
                <a href="mailto:sales@patronaccounting.com?subject=DIN%20Authenticity%20Verifier%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20DIN%20verification%2C%20DIR-3%20KYC%20or%20an%20ROC%20notice.%20Please%20get%20in%20touch.%0A%0AThanks%2C" class="brand-cta-btn brand-cta-btn-email" aria-label="Email us"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> Email</a>
            </div>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/director-kyc" class="sidebar-link">Director KYC (DIR-3 KYC) <span class="arrow">→</span></a>
            <a href="/registrar-of-companies" class="sidebar-link">ROC Notice Response <span class="arrow">→</span></a>
            <a href="/private-limited-company-compliance" class="sidebar-link">Pvt Ltd Company Compliance <span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor <span class="arrow">→</span></a>
            <a href="/private-limited-company-registration-in-india" class="sidebar-link">Pvt Ltd Registration <span class="arrow">→</span></a>
            <a href="/small-company-annual-compliance" class="sidebar-link">Small Company Compliance <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/annual-compliance-cost-estimator" class="sidebar-link">Annual Compliance Cost Estimator <span class="arrow">→</span></a>
            <a href="/tools/caro-2020-self-assessment" class="sidebar-link">CARO 2020 Self-Assessment <span class="arrow">→</span></a>
            <a href="/tools/ifc-framework-readiness" class="sidebar-link">IFC Framework Readiness <span class="arrow">→</span></a>
            <a href="/tools/schedule-iii-compliance-checker" class="sidebar-link">Schedule III Compliance Checker <span class="arrow">→</span></a>
            <a href="/tools/statutory-audit-fee-estimator" class="sidebar-link">Statutory Audit Fee Estimator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/din-kyc-filing-complete-guide-to-dir-3-kyc-form-for-company-directors" class="sidebar-link">DIR-3 KYC Filing Guide <span class="arrow">→</span></a>
            <a href="/blog/director-disqualification-under-section-164-complete-guide" class="sidebar-link">Director Disqualification (Sec 164) <span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>
<footer class="footer">© 2026 Patron Accounting LLP. All rights reserved.</footer>

<script>
    var CHECK_STEPS = [
        "Ran 'Enquire DIN Status' on MCA — status is Approved/Active",
        "Ran 'Verify DIN-PAN Details' — name, DOB & PAN match",
        "Confirmed DIN is linked to the claimed company (Master Data)",
        "Checked director is not disqualified (Section 164)",
        "Saved a dated MCA screenshot / report for records"
    ];

    var formatOK = null;

    (function buildChecklist() {
        var list = document.getElementById('checkList');
        var html = '';
        for (var i = 0; i < CHECK_STEPS.length; i++) {
            var n = i + 1;
            html += '<div class="check-item" onclick="toggleCheck(this, event)">' +
                '<input type="checkbox" id="ck' + n + '" onclick="event.stopPropagation();syncCheck(this)">' +
                '<label for="ck' + n + '">' + CHECK_STEPS[i] + '</label></div>';
        }
        list.innerHTML = html;
    })();

    function toggleCheck(div, e) {
        var cb = div.querySelector('input[type="checkbox"]');
        if (e && e.target === cb) return;
        cb.checked = !cb.checked;
        div.classList.toggle('checked', cb.checked);
    }
    function syncCheck(cb) {
        cb.closest('.check-item').classList.toggle('checked', cb.checked);
    }

    function cleanDin() {
        return String(document.getElementById('dinInput').value || '').replace(/\s/g, '');
    }

    function analyse(din) {
        var lenOK = din.length === 8;
        var numOK = /^[0-9]+$/.test(din);
        var trivialOK = false;
        if (numOK && lenOK) {
            // reject all-same-digit and 00000000 as obviously non-genuine
            trivialOK = !/^(\d)\1{7}$/.test(din);
        }
        return { lenOK: lenOK, numOK: numOK, trivialOK: trivialOK, pass: (lenOK && numOK && trivialOK) };
    }

    function liveCheck() {
        var el = document.getElementById('dinInput');
        el.value = el.value.replace(/[^0-9]/g, '').slice(0, 8);
        var din = el.value;
        var flag = document.getElementById('liveFlag');
        if (din.length === 0) {
            flag.className = 'live-flag idle';
            flag.textContent = 'Awaiting input…';
            return;
        }
        if (din.length < 8) {
            flag.className = 'live-flag idle';
            flag.textContent = din.length + '/8 digits';
            return;
        }
        var r = analyse(din);
        if (r.pass) {
            flag.className = 'live-flag ok';
            flag.textContent = '✓ Structurally valid 8-digit format';
        } else {
            flag.className = 'live-flag bad';
            flag.textContent = '✗ Not a valid DIN structure';
        }
    }

    function showResult() {
        var rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        requestAnimationFrame(function(){
            requestAnimationFrame(function(){
                rs.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
        });
    }

    function yn(b) { return b ? '✓ Yes' : '✗ No'; }
    function setCell(id, ok) {
        var el = document.getElementById(id);
        el.textContent = yn(ok);
        el.className = 'breakdown-value ' + (ok ? 'ok' : 'bad');
    }

    function verifyDin() {
        var din = cleanDin();
        if (din.length === 0) { alert('Please enter a DIN to check.'); return; }
        var r = analyse(din);
        formatOK = r.pass;

        var vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card ' + (r.pass ? 'valid' : 'invalid');
        document.getElementById('verdictHeadline').textContent = r.pass ? 'FORMAT VALID — verify on MCA next' : 'FORMAT INVALID';

        var reason;
        if (r.pass) {
            reason = 'This value is a structurally valid 8-digit DIN. This is not confirmation it exists — complete the MCA Enquire DIN Status and Verify DIN-PAN checks below.';
        } else if (!r.lenOK) {
            reason = 'A DIN must be exactly 8 digits. You entered ' + din.length + ' character(s). This is not a valid DIN.';
        } else if (!r.numOK) {
            reason = 'A DIN is entirely numeric (0-9). The value contains non-numeric characters, so it is not a valid DIN.';
        } else {
            reason = 'The value is 8 digits but trivial (all identical digits). This is not a genuine DIN pattern.';
        }
        document.getElementById('verdictReason').textContent = reason;

        document.getElementById('bdValue').textContent = din || '—';
        setCell('bdLen', r.lenOK);
        setCell('bdNum', r.numOK);
        setCell('bdTrivial', r.trivialOK);
        document.getElementById('bdChecklist').textContent = '0 / ' + CHECK_STEPS.length;

        showResult();
    }

    function scoreChecklist() {
        var total = CHECK_STEPS.length, done = 0;
        for (var i = 1; i <= total; i++) {
            if (document.getElementById('ck' + i).checked) done++;
        }
        document.getElementById('bdChecklist').textContent = done + ' / ' + total;

        var vc = document.getElementById('verdictCard');
        if (formatOK === null) {
            vc.className = 'verdict-card';
            document.getElementById('verdictHeadline').textContent = 'Due-diligence scored';
            document.getElementById('verdictReason').textContent = 'Run Step 1 to also format-check the DIN. ' + done + ' of ' + total + ' official MCA verification steps marked done.';
            document.getElementById('bdValue').textContent = '—';
        } else if (done === total && formatOK) {
            vc.className = 'verdict-card valid';
            document.getElementById('verdictHeadline').textContent = 'FORMAT VALID + MCA due-diligence complete';
            document.getElementById('verdictReason').textContent = 'Structure is valid and all official MCA verification steps are marked done. Retain your MCA evidence.';
        } else if (formatOK) {
            vc.className = 'verdict-card';
            document.getElementById('verdictHeadline').textContent = 'Format valid — MCA steps incomplete';
            document.getElementById('verdictReason').textContent = done + ' of ' + total + ' official MCA steps done. Complete all of them before relying on this DIN.';
        }
        showResult();
    }

    function resetCalc() {
        document.getElementById('dinInput').value = '';
        for (var i = 1; i <= CHECK_STEPS.length; i++) {
            var cb = document.getElementById('ck' + i);
            cb.checked = false;
            cb.closest('.check-item').classList.remove('checked');
        }
        formatOK = null;
        var flag = document.getElementById('liveFlag');
        flag.className = 'live-flag idle';
        flag.textContent = 'Awaiting input…';
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('dinInput').addEventListener('keydown', function(e){
        if (e.key === 'Enter') verifyDin();
    });

    function toggleFaq(e) {
        var btn = e.closest ? (e.closest('.faq-question') || e) : e;
        var item = btn.closest('.faq-item');
        if (!item) return;
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(function(it){ it.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    }

    var sections = document.querySelectorAll('[id]');
    var navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', function() {
        var current = '';
        sections.forEach(function(s){
            var top = s.offsetTop - 80;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(function(link){
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
</script>


<style>
/* ============================================
       STICKY WHATSAPP BAR
       ============================================ */
    .wa-sticky-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #0F6E56;
        z-index: 9999;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
        transition: transform 0.35s ease;
    }
    .wa-sticky-bar.hidden { transform: translateY(100%); }
    .wa-sticky-bar-content {
        display: flex;
        align-items: center;
        gap: 12px;
        max-width: 1320px;
        width: 100%;
        justify-content: center;
    }
    .wa-sticky-bar-icon {
        width: 36px; height: 36px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        background: rgba(255,255,255,0.2); border-radius: 50%;
    }
    .wa-sticky-bar-icon svg { width: 20px; height: 20px; color: #fff; fill: #fff; }
    .wa-sticky-bar-text {
        font-family: 'Barlow', sans-serif;
        font-size: 15px; color: #fff; font-weight: 500;
    }
    .wa-sticky-bar-text strong { font-weight: 700; }
    .wa-sticky-bar-btn {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 8px 22px; background: #fff; color: #0F6E56;
        font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
        border: none; border-radius: 50px; cursor: pointer;
        text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
    }
    .wa-sticky-bar-btn:hover { background: #E1F5EE; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .wa-sticky-bar-close {
        background: none; border: none; cursor: pointer;
        color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
        padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
        font-family: 'Barlow', sans-serif; font-weight: 300;
    }
    .wa-sticky-bar-close:hover { color: #fff; }
    @media (max-width: 768px) {
        .wa-sticky-bar { padding: 8px 12px; gap: 8px; }
        .wa-sticky-bar-text { font-size: 13px; }
        .wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
        .wa-sticky-bar-icon { width: 30px; height: 30px; }
        .wa-sticky-bar-icon svg { width: 16px; height: 16px; }
    }
    @media (max-width: 480px) {
        .wa-sticky-bar-text { display: none; }
        .wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
        .wa-sticky-bar-btn::before { content: 'CA-Assisted ITR Filing Open'; }
        .wa-sticky-bar-btn span { display: none; }
    }
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>
@endsection
