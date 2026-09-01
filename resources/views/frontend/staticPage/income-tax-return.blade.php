@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Return Filing India: Forms, Deadlines, ITR Guide</title>
    <meta name="description" content="AY 2026-27 ITR filing - all 7 forms (ITR-1 to ITR-7), due dates, new vs old regime, AIS reconciliation, NRI Schedule FA. From Rs 1,499 onwards.">
    <link rel="canonical" href="/income-tax-return">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Return Filing India: Forms, Deadlines, ITR Guide | Patron Accounting">
    <meta property="og:description" content="AY 2026-27 ITR filing - all 7 forms (ITR-1 to ITR-7), due dates, new vs old regime, AIS reconciliation, NRI Schedule FA. From Rs 1,499 onwards.">
    <meta property="og:url" content="/income-tax-return/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Return Filing India: Forms, Deadlines, ITR Guide | Patron Accounting">
    <meta name="twitter:description" content="AY 2026-27 ITR filing - all 7 forms (ITR-1 to ITR-7), due dates, new vs old regime, AIS reconciliation, NRI Schedule FA. From Rs 1,499 onwards.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/income-tax-return/#breadcrumb",
      "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" }
          ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/income-tax-return/#faq",
      "datePublished": "2026-05-11T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the last date to file ITR for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For AY 2026-27, the due date for non-audit individuals filing ITR-1 or ITR-2 is 31 July 2026. ITR-3 and ITR-4 (non-audit business and profession) is 31 August 2026. Audit cases under Section 44AB filing ITR-5, ITR-6, or ITR-7 must be filed by 31 October 2026. Transfer pricing cases under Section 92E have until 30 November 2026. Belated returns under Section 139(4) can be filed until 31 December 2026; revised returns under Section 139(5) until 31 March 2027."
          }
        },
        {
          "@type": "Question",
          "name": "Who must file an Income Tax Return in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Filing is mandatory if your total income exceeds Rs 4 lakh under the new regime or Rs 2.5 lakh under the old regime for individuals below 60. All companies, LLPs, firms, and trusts must file regardless of profit. Filing is also mandatory if you have foreign assets, want to claim a TDS refund, carry forward losses, or your bank deposits, electricity bill, or foreign travel cross specified thresholds under Section 139(1) Seventh Proviso."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I use for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 (Sahaj) is for residents with income up to Rs 50 lakh from salary, one or two house properties, and other sources. ITR-2 covers capital gains, more than two house properties, foreign income, or unlisted shares. ITR-3 is for business and professional income. ITR-4 (Sugam) is for presumptive taxation under Sections 44AD, 44ADA, or 44AE. ITR-5 is firms and LLPs, ITR-6 is companies, ITR-7 is trusts. Selecting the wrong form triggers a Section 139(9) defective return notice."
          }
        },
        {
          "@type": "Question",
          "name": "How much does CA-assisted ITR filing cost in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting CA-assisted ITR filing starts at Rs 1,499 for salaried individuals filing ITR-1 with a single Form 16. ITR-2 with capital gains starts at Rs 2,999. ITR-3 for business owners, F and O traders, or crypto investors starts at Rs 4,999. ITR-6 company filing starts at Rs 9,999. NRI returns with Schedule FA start at Rs 5,999. Tax audit fees under Section 44AB are quoted separately based on turnover and complexity."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late filing of ITR for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 234F, the late filing fee is Rs 1,000 if your total income is up to Rs 5 lakh and Rs 5,000 if it exceeds Rs 5 lakh. Additionally, Section 234A levies interest at 1 percent per month on unpaid tax from the due date until you file. Belated returns under Section 139(4) can be filed until 31 December 2026, but you lose the right to carry forward certain losses under Section 72."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file a revised ITR for AY 2026-27 if I find an error?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 139(5), you can file a revised return any number of times until 31 March 2027 for AY 2026-27. The Budget 2026 extended this from 31 December to 31 March of the next year. If you need to correct undisclosed income beyond this window, you can file an Updated Return (ITR-U) under Section 139(8A) within 48 months from the end of the assessment year, with additional tax."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to file ITR if my employer has already deducted TDS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, TDS deduction does not exempt you from filing. ITR filing is mandatory if your income exceeds the basic exemption limit under Section 139(1). Filing also lets you claim a refund of excess TDS, carry forward losses, and provides documentary proof for visa, home loan, or credit card applications. Banks, insurers, and registrars also require ITR copies for high-value transaction verification."
          }
        },
        {
          "@type": "Question",
          "name": "Is the new tax regime mandatory for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The new regime is the default under Section 115BAC, but you can opt out and choose the old regime. Salaried taxpayers can choose regime each year directly in the ITR before the due date under Section 139(1). Business and professional taxpayers must file Form 10-IEA to opt out, and switching back is restricted to once in a lifetime. Compare regime liabilities side by side before deciding - many taxpayers with substantial Section 80C, Section 24 home loan interest and Section 80D claims pay less under the old regime."
          }
        },
        {
          "@type": "Question",
          "name": "What is ITR-U Updated Return and how long can I file it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-U (Updated Return) is a corrective filing mechanism under Section 139(8A) of the Income Tax Act 1961. It lets you disclose previously undisclosed income within 48 months from the end of the relevant assessment year. For AY 2026-27, ITR-U can be filed until 31 March 2031. Additional tax payable is 25 percent if filed within 12 months of AY end, 50 percent within 24 months, 60 percent within 36 months and 70 percent within 48 months, plus regular tax and interest. ITR-U cannot be used to reduce tax or claim refunds."
          }
        },
        {
          "@type": "Question",
          "name": "How do I disclose foreign assets in Schedule FA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule FA in ITR-2 and ITR-3 is mandatory for Resident and Ordinarily Resident (ROR) taxpayers. Report each foreign asset with initial value (acquisition cost in INR at the time of acquisition), peak value during the financial year (highest INR-converted value) and closing balance. Categories covered include foreign bank accounts (Table A2), foreign equity (Table A3 - including vested RSUs from foreign parent companies), foreign cash value insurance, foreign trusts and any other foreign financial interest. Non-disclosure attracts a Rs 10 lakh penalty under Black Money Act 2015 Section 42 plus prosecution up to 10 years."
          }
        },
        {
          "@type": "Question",
          "name": "Who qualifies for the Section 87A rebate and zero tax up to Rs 12 lakh?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 87A rebate is available only to Resident individuals (not NRIs, HUFs, firms or companies). Under the new regime (Section 115BAC), the rebate is Rs 60,000 yielding zero tax up to Rs 12 lakh of total income. For salaried taxpayers, the Rs 75,000 standard deduction pushes this threshold to Rs 12.75 lakh. Under the old regime, the rebate is Rs 12,500 yielding zero tax up to Rs 5 lakh. The rebate is non-refundable - it cannot reduce tax below zero or generate a refund."
          }
        },
        {
          "@type": "Question",
          "name": "Is F and O income speculative or non-speculative?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "F and O (futures and options) income is non-speculative business income under Explanation 2 to Section 28 of the Income Tax Act 1961, as F and O contracts are settled by physical or cash settlement on a recognised exchange. It is reported under ITR-3 in the business head. Losses can be set off against any income head except salary under Section 70/71 in the same year, and unabsorbed loss carries forward for 8 years under Section 72. This is different from intraday equity speculation under Explanation to Section 73, which is speculative business income with only 4-year carry-forward."
          }
        },
        {
          "@type": "Question",
          "name": "How is cryptocurrency taxed in India under Section 115BBH?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Income from transfer of Virtual Digital Assets (VDA) is taxed at a flat 30 percent under Section 115BBH of the Income Tax Act 1961, irrespective of holding period. No deduction is allowed except cost of acquisition. Losses from VDA cannot be set off against any other income (including VDA losses from a different coin) and cannot be carried forward. A 1 percent TDS applies on VDA transfers above Rs 50,000 (Rs 10,000 for specified persons) under Section 194S. Reporting is in ITR-3 with the Schedule VDA disclosure of buy and sell values per coin."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Section 44AD and Section 44ADA presumptive taxation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 44AD applies to eligible businesses (proprietorship, partnership firms but not LLPs or companies) with turnover up to Rs 3 crore where cash receipts are not more than 5 percent. Presumed profit is 8 percent of turnover (6 percent for digital receipts). Section 44ADA applies to specified professionals (CA, CS, doctor, lawyer, architect, technical consultant, interior decorator) with gross receipts up to Rs 75 lakh. Presumed profit is 50 percent of gross receipts. Both presumptive schemes use ITR-4 (Sugam) and waive Section 44AB tax audit. Opting out for 5 years is restricted under Section 44AD(4)."
          }
        },
        {
          "@type": "Question",
          "name": "How do I e-verify my ITR within the 30-day window?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR must be e-verified within 30 days of filing per CBDT Notification 5/2022 dated 29 July 2022 - otherwise the return is treated as invalid (never filed). Five e-verification methods are available - Aadhaar OTP sent to the Aadhaar-linked mobile, Net banking authentication through your bank login, Bank account EVC generated via pre-validated bank account, Demat account EVC generated via pre-validated demat account and Digital Signature Certificate (DSC) - mandatory for tax audit cases and companies. Sending signed ITR-V to CPC Bangalore by post is the legacy method and still valid within the 30-day window."
          }
        },
        {
          "@type": "Question",
          "name": "ITR file karne ki last date kya hai AY 2026-27 ke liye? (What is ITR filing last date for AY 2026-27)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AY 2026-27 ke liye ITR-1 aur ITR-2 ki last date 31 July 2026 hai. ITR-3 aur ITR-4 (non-audit business aur profession) ki last date 31 August 2026 hai. Section 44AB audit cases (ITR-5, ITR-6, ITR-7) ki last date 31 October 2026 hai. Section 92E transfer pricing cases ki last date 30 November 2026 hai. Belated return Section 139(4) ke under 31 December 2026 tak file kar sakte hain (Rs 5,000 late fee under Section 234F, plus 1 percent per month interest under Section 234A). Revised return Section 139(5) ke under 31 March 2027 tak file kar sakte hain. ITR-U updated return Section 139(8A) ke under 48 mahine tak file kar sakte hain - AY 2026-27 ke liye 31 March 2031 tak. Patron Accounting Rs 1,499 se start hone wali CA-assisted filing offer karta hai. Call +91 945 945 6700."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/income-tax-return/#service",
      "name": "Income Tax Return Filing",
      "url": "https://www.patronaccounting.com/income-tax-return/",
      "description": "Master hub for CA-assisted Income Tax Return filing in India under Section 139 of the Income Tax Act 1961 for AY 2026-27. Hub-and-spoke practice covering all seven ITR forms (ITR-1 Sahaj, ITR-2, ITR-3, ITR-4 Sugam, ITR-5, ITR-6, ITR-7) and routing every scenario - salaried, business and profession, freelancer, capital gains, property sale, F and O traders, crypto and VDA under Section 115BBH, social media influencers, professionals under Section 44ADA, NRIs with Schedule FA, firms and LLPs, companies, trusts - to the correct dedicated CA team. Includes Form 16 review, AIS and Form 26AS reconciliation, regime arbitrage under Section 115BAC, loss carry-forward optimisation, Form 10-IEA filing, Schedule FA Black Money Act compliance, Form 67 DTAA foreign tax credit, ITR-U updated return support and 12 months of post-filing notice support for Sections 139(9), 143(1), 142(1), 148 notices.",
      "serviceType": "Income Tax Return Filing - Master Hub",
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Income tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"
        },
        {
          "@type": "Thing",
          "name": "Tax return",
          "sameAs": "https://en.wikipedia.org/wiki/Tax_return"
        },
        {
          "@type": "Thing",
          "name": "Central Board of Direct Taxes",
          "sameAs": "https://en.wikipedia.org/wiki/Central_Board_of_Direct_Taxes"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "ITR Filing Tiers (AY 2026-27)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Salaried ITR-1 Sahaj",
            "priceCurrency": "INR",
            "price": "1499",
            "description": "Form 16 review, deductions optimisation, AIS and Form 26AS reconciliation; income up to Rs 50 lakh from salary and one or two house properties"
          },
          {
            "@type": "Offer",
            "name": "Salaried ITR-2 with Capital Gains",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "Shares, mutual funds, capital gains, multiple house properties, indexation impact, Section 54/54EC/54F exemptions, unlisted shares"
          },
          {
            "@type": "Offer",
            "name": "ITR-3 Business (F and O, crypto, intraday)",
            "priceCurrency": "INR",
            "price": "4999",
            "description": "F and O business income, VDA at 30 percent under Section 115BBH, intraday speculation, regime arbitrage, Schedule VDA disclosure"
          },
          {
            "@type": "Offer",
            "name": "ITR-4 Sugam Presumptive",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "Presumptive taxation under Section 44AD (business 8 or 6 percent) or Section 44ADA (professional 50 percent up to Rs 75 lakh)"
          },
          {
            "@type": "Offer",
            "name": "ITR-5 Firm and LLP Filing",
            "priceCurrency": "INR",
            "price": "7500",
            "description": "Partnership firm or LLP filing with partner-wise allocation, Section 40(b) interest and remuneration, Schedule AL"
          },
          {
            "@type": "Offer",
            "name": "ITR-6 Company Filing",
            "priceCurrency": "INR",
            "price": "9999",
            "description": "Pvt Ltd or OPC company ITR with Schedule III reconciliation, MAT under Section 115JB, tax audit support where applicable"
          },
          {
            "@type": "Offer",
            "name": "ITR-7 Trust and Section 8 Company",
            "priceCurrency": "INR",
            "price": "12500",
            "description": "Trust or Section 8 company filing with Schedule I, Section 12A and 80G compliance, FCRA reporting where applicable"
          },
          {
            "@type": "Offer",
            "name": "NRI Return with Schedule FA and DTAA",
            "priceCurrency": "INR",
            "price": "5999",
            "description": "Schedule FA disclosure, DTAA relief under Section 90/91, Form 67 foreign tax credit filed before ITR, FATCA-CRS compliance"
          }
        ]
      }
    }
  ]
}
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
]])
</div>

<style>/* ============================================
           CSS VARIABLES
           ============================================ */
:root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }
body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }
h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
h3 { color: var(--blue); font-size: 1.5rem; }
p { color: var(--text-secondary); }
section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
section a:hover { color: var(--orange-dark); }
section ul { list-style: none; padding-left: 0; margin: 0; }
section ul li:not(.nav-item) {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
section ul li:not(.nav-item)::before {
            content: ""; width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
main section h3 { color: #14365F !important; }
main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
main section table thead tr th {
            border: none !important; color: #fff !important; font-size: 14px; font-weight: 700;
            background-color: #14365F !important; padding: 14px 18px; text-align: left;
        }
main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
main section table tbody tr td {
            padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary);
            background: var(--white);
            border: none !important;
            border-bottom: 1px solid var(--gray-200) !important;
            vertical-align: top;
        }
main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
main section table tbody tr:last-child td { border-bottom: none !important; }
main section table tbody tr td:first-child {
            font-weight: 700; color: var(--text-primary);
            min-width: 160px;
        }
/* Amount column  -  right-align only on tables with .table-amount class */
.table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* Section 8 / primary entity highlight column in comparison tables */
.table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
.table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
/* Badge pills for service status cells */
td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
.table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
.table-responsive-wrapper table { margin: 0; border: none; }
.table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
.table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
.table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
.table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
.table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
           ============================================ */
.expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
.expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
.expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
.expert-attribution-box .eab-meta {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
        }
.expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
.expert-attribution-box .eab-link {
            font-size: 12px; color: var(--orange); text-decoration: none;
            font-weight: 600; transition: color 0.2s;
        }
.expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }
/* ============================================
           HERO SECTION
           ============================================ */
.hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
.hero-badge svg { width: 14px; height: 14px; }
.private-registration-heading {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 700 !important;
            font-size: 48px !important;
            line-height: 100% !important;
            color: #14365F !important;
            margin-bottom: 1.5rem !important;
        }
@media (max-width: 768px) {.private-registration-heading { font-size: 32px !important; line-height: 110% !important; }}
@media (max-width: 480px) {.private-registration-heading { font-size: 28px !important; }}
.check-icon {
            width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;
            background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0;
        }
.check-icon svg { width: 12px; height: 12px; color: var(--green); }
.benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
.benefit-paragraph span { font-weight: 700; }
/* Hero CTA Buttons */
.hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }
.btn-video {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 20px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
.btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
.btn-video .play-circle {
            width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
            background: var(--orange); border-radius: 50%; transition: transform 0.25s ease;
        }
.btn-video:hover .play-circle { transform: scale(1.08); }
.btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }
.btn-sample {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; background: transparent;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
.btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
.btn-sample svg { width: 16px; height: 16px; }
/* Trust Section */
.trust-section { display: flex; flex-direction: column; gap: 20px; }
.trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
.trust-item { display: flex; align-items: center; gap: 10px; }
.trust-icon {
            width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
            background: var(--gray-50); border-radius: var(--radius-sm);
        }
.trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
.trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
.trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }
.google-rating {
            display: inline-flex; align-items: center; gap: 12px;
            background: var(--white); border: 1px solid var(--gray-200);
            padding: 10px 16px; border-radius: var(--radius-md);
        }
.rating-content { display: flex; flex-direction: column; gap: 2px; }
.rating-stars { display: flex; align-items: center; gap: 2px; }
.rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
.rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
.rating-count { font-size: 11px; color: var(--text-muted); }
/* ============================================
           FORM CARD
           ============================================ */
.form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0;
            margin: 0 auto;
        }
@keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
/* Select */
.form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
/* Phone Group + Country Dropdown */
.phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
.selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
/* Country Dropdown List */
.country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
/* Phone Input Override */
.phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
/* Submit Button */
.btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
/* Form Footer */
.form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
/* Error States */
.form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
/* Success State */
.form-success { text-align: center; padding: 40px 20px; }
/* ============================================
           STATS BAR
           ============================================ */
.stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
.stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap;
        }
.stat-item { display: flex; align-items: center; gap: 12px; }
.stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md);
        }
.stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
.stat-content { display: flex; flex-direction: column; }
.stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
.stat-label { font-size: 12px; color: var(--text-muted); }
.certifications {
            display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200);
        }
.cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
.cert-item svg { width: 18px; height: 18px; }
/* ============================================
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
.toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
.toc-container {
            max-width: 1320px; margin: 0 auto; padding: 0 32px;
            display: flex; align-items: center;
        }
.toc-wrapper {
            display: flex; align-items: center; gap: 10px;
            overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px;
        }
.toc-wrapper::-webkit-scrollbar { display: none; }
.toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
.toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
.toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
.toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
.toc-arrow {
            border: none; cursor: pointer; font-size: 22px;
            width: 45px; height: 45px; border-radius: 50%; background: transparent;
        }
.toc-arrow.left { margin-right: 8px; }
.toc-arrow.right { margin-left: 8px; }
/* ============================================
           CONTENT SECTIONS
           ============================================ */
.content-section { padding: 64px 32px; background: var(--white); }
.content-section:nth-child(even) { background: var(--gray-50); }
.content-container { max-width: 1320px; margin: 0 auto; }
.section-container { max-width: 1320px; margin: 0 auto; }
.text-content { max-width: 100%; }
.section-title {
            font-size: clamp(26px, 3vw, 32px); font-weight: 800;
            color: var(--blue); margin-bottom: 24px; line-height: 1.25;
        }
.content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
.content-text p { margin-bottom: 16px; text-align: left; }
.content-text strong { color: var(--text-primary); font-weight: 600; }
.content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }
.two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
.column-content { max-width: 100%; }
.column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }
.highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
.highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
.highlight-box p:last-child { margin-bottom: 0; }
.illustration-placeholder {
            width: 100%; max-width: 420px; aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden;
        }
.illustration-icon {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
        }
.illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
.illustration-badge {
            background: var(--white); padding: 12px 20px; border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); text-align: center;
        }
.illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
.illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }
/* Section Eyebrow */
.section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
.section-eyebrow svg { width: 18px; height: 18px; }
.section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }
/* Steps Section */
.steps-section { padding: 72px 32px; background: var(--gray-50); }
.steps-container { display: flex; flex-direction: column; gap: 32px; }
.step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;
            background: var(--white); border-radius: var(--radius-xl); padding: 40px;
            border: 1px solid var(--gray-200); transition: all 0.3s ease;
        }
.step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
.step-card:nth-child(even) { direction: rtl; }
.step-card:nth-child(even) > * { direction: ltr; }
.step-content { display: flex; flex-direction: column; }
.step-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--orange); color: var(--white);
            padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content;
        }
.step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
.step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
.step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
.highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted);
        }
.highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
.step-visual { display: flex; justify-content: center; align-items: center; }
.step-illustration {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden;
        }
.step-illustration .illustration-icon {
            width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px;
            background: none; box-shadow: none;
        }
.step-illustration .illustration-icon svg { width: 100%; height: 100%; }
.illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
.step-number-large {
            position: absolute; bottom: 16px; right: 20px;
            font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
.process-screenshot-details { margin-top: 14px; }
.process-screenshot-details summary {
            font-size: 13px; font-weight: 600; color: var(--orange); cursor: pointer;
            display: inline-flex; align-items: center; gap: 6px;
        }
.process-screenshot-details summary:hover { color: var(--orange-dark); }
.process-screenshot-details .screenshot-img {
            max-width: 100%; border-radius: 8px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm); margin-top: 10px;
        }
.process-screenshot-details .screenshot-note {
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }
/* Why Choose Section */
.why-choose-section { padding: 72px 32px; background: var(--gray-50); }
.why-choose-header { text-align: center; margin-bottom: 48px; }
.features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.feature-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease;
        }
.feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
.feature-icon {
            width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
        }
.feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
.feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
.feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }
/* Reviews CTA */
.btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
.btn-cta:hover { background: var(--orange-light); color: var(--orange); }
.btn-cta svg { width: 16px; height: 16px; }
/* ============================================
           CITY & CROSS-SELL GRID CARDS
           ============================================ */
.pa-city-block { }
.pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
.pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
.pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
.pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
.pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
.pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 10px;
            padding: 14px 16px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            text-decoration: none; transition: all 0.25s ease;
        }
.pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
.pa-card-icon {
            width: 32px; height: 32px; background: var(--orange-light);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
.pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
.pa-card-sub    { font-size: 11px; color: var(--text-muted); }
@media (max-width: 768px) {.pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
.pa-cross-grid { grid-template-columns: repeat(2, 1fr); }}
@media (max-width: 480px) {.pa-city-grid  { grid-template-columns: 1fr; }
.pa-cross-grid { grid-template-columns: 1fr; }}
/* Slick overrides */
/* Video Testimonial Card */
/* Quote Testimonial Card */
/* Loading state */
@keyframes spin { to { transform: rotate(360deg); } }
/* ============================================
           RESPONSIVE
           ============================================ */
@media (max-width: 1024px) {.two-column { grid-template-columns: 1fr; gap: 40px; }
.features-grid { grid-template-columns: repeat(2, 1fr); }
.stats-container { gap: 32px; }
.certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }}
@media (max-width: 900px) {.step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
.step-card:nth-child(even) { direction: ltr; }
.step-visual { order: -1; }}
@media (max-width: 768px) {.content-section { padding: 40px 16px; }
.hero-cta { flex-direction: column; }
.btn-video, .btn-sample { width: 100%; justify-content: center; }
.stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
.stat-item { width: 100%; }
.features-grid { grid-template-columns: 1fr; gap: 16px; }
.content-text { font-size: 14px; }
.accordion-body { text-align: left; }
main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
.table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
.col-lg-4 { margin-top: 24px; }
.form-card { max-width: 100%; }
.private-registration-heading { margin-bottom: 1rem !important; }
.benefit-paragraph { font-size: 0.9rem; }
.hero-badge { font-size: 12px; padding: 6px 12px; }
.expert-attribution-box { padding: 10px 14px; }
.expert-attribution-box .eab-title { font-size: 12px; }
.expert-attribution-box .eab-meta { font-size: 11px; }
.trust-section { gap: 12px; }
.trust-row { gap: 16px; }
.google-rating { width: 100%; }
section ul li:not(.nav-item) { font-size: 14px; }}
/* Smooth scroll offset */
.content-section[id] { scroll-margin-top: 80px; }
/* Animation */
@keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
/* Trust Badge Descriptions */
.stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
.cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }
/* City Interlinking Grid */
@media (max-width: 768px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }}
@media (max-width: 480px) {.content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }}
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
            padding: 8px 22px; background: #fff; color: #25D366;
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            border: none; border-radius: 50px; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
        }
.wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
.wa-sticky-bar-close {
            background: none; border: none; cursor: pointer;
            color: rgba(255,255,255,0.7); font-size: 22px; line-height: 1;
            padding: 4px 8px; transition: color 0.2s; flex-shrink: 0;
            font-family: 'Barlow', sans-serif; font-weight: 300;
        }
.wa-sticky-bar-close:hover { color: #fff; }
@media (max-width: 768px) {.wa-sticky-bar { padding: 8px 12px; gap: 8px; }
.wa-sticky-bar-text { font-size: 13px; }
.wa-sticky-bar-btn { padding: 7px 16px; font-size: 13px; }
.wa-sticky-bar-icon { width: 30px; height: 30px; }
.wa-sticky-bar-icon svg { width: 16px; height: 16px; }}
@media (max-width: 480px) {.wa-sticky-bar-text { display: none; }
.wa-sticky-bar-btn { font-size: 14px; padding: 10px 24px; }
.wa-sticky-bar-btn::before { content: 'Join Community'; }
.wa-sticky-bar-btn span { display: none; }}</style>
<main>


<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Income Tax Return Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>All 7 ITR Forms:</span> ITR-1 Sahaj, ITR-2, ITR-3, ITR-4 Sugam, ITR-5 firms/LLP, ITR-6 companies, ITR-7 trusts - dedicated CA team per form</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>AY 2026-27 Deadline Matrix:</span> 31 Jul (ITR-1/2), 31 Aug (ITR-3/4), 31 Oct (audit), 30 Nov (TP) - all four dates tracked per client</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Every Scenario Routed:</span> Salaried, business, F and O, crypto, capital gains, NRI, property sale, influencers, company, trust - hub-and-spoke practice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starts at Rs 1,499:</span> Salaried ITR-1 from Rs 1,499; full pricing matrix below; 12 months notice support included on every filing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">25,000+ ITRs Filed | 4.9 Google Rating | 15+ Years in Practice | 98.7% On-Time Submission Rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20AY%202026-27%20ITR%20filing." target="_blank" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Income Tax Return Filing (Hub)',
                                        ])

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Salaried ITR-1, ITR-2, business ITR-3, F and O traders, crypto under Section 115BBH, capital gains, NRI Schedule FA, companies ITR-6, trusts ITR-7. Every scenario routed to the right CA team. 25,000+ ITRs filed. 98.7 percent on-time submission rate.',
])

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">All 7 ITR Forms</a>
            <a href="#who-section" class="toc-btn">Audience Segments</a>
            <a href="#services-section" class="toc-btn">Routing Matrix</a>
            <a href="#process-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Complete Deadlines</a>
            <a href="#comparison-section" class="toc-btn">Old vs New Regime</a>
            <a href="#legal-section" class="toc-btn">Legal Framework</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Return Filing - Master Hub for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing Services at a Glance</strong></p>
                    <p>Income Tax Return Filing is the annual reporting of income, deductions, and taxes to the Income Tax Department under Section 139 of the Income Tax Act, 1961. For AY 2026-27 (covering FY 2025-26 income), ITR-1 and ITR-2 are due 31 July 2026; ITR-3 and ITR-4 by 31 August 2026; audit cases by 31 October 2026; transfer pricing by 30 November 2026. Belated returns under Section 139(4) until 31 December 2026, revised under Section 139(5) until 31 March 2027, ITR-U Updated Return under Section 139(8A) until 31 March 2031. Seven ITR forms (ITR-1 to ITR-7) plus ITR-V acknowledgement and ITR-U corrective filing. This hub routes every scenario to the right sub-service and the right form.</p>
                </div>
                <p>This is the master orchestration page for Income Tax Return filing at Patron Accounting. Whether you are a salaried employee with a single Form 16, a senior IC with foreign parent RSU vesting and Schedule FA disclosure obligations, a proprietor under Section 44AD presumptive taxation, an F and O trader claiming Section 72 carry-forward of non-speculative business loss, a crypto investor reporting Schedule VDA under Section 115BBH, a property seller computing LTCG with Section 54 reinvestment, an NRI claiming Form 67 DTAA Foreign Tax Credit, a Pvt Ltd company filing ITR-6 with Schedule III reconciliation, or a trust filing ITR-7 with Section 12A and 80G compliance - this page lands you on the correct dedicated team.</p>
                <p>Patron Accounting operates a hub-and-spoke ITR filing practice with 15+ years of experience. Across the AY 2025-26 filing season, the firm processed 4,200+ individual and company ITRs with a 98.7 percent on-time submission rate and zero adverse intimations under Section 143(1)(a) on filed returns. With offices in Pune, Mumbai, Delhi, and Gurugram and pan-India remote engagement, every ITR filing comes with regime arbitrage analysis (old vs new under Section 115BAC), AIS and Form 26AS reconciliation, loss carry-forward optimisation under Sections 70 to 72, and 12 months of post-filing notice support for Sections 139(9), 143(1), 142(1) and 148 notices at no extra cost.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">All 7 ITR Forms Explained - ITR-1 to ITR-7</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An Income Tax Return (ITR) is a statutory form filed under Section 139 of the Income Tax Act, 1961, declaring income, deductions, tax paid, and any refund or tax payable for a financial year. The Income Tax Department issues seven numbered ITR forms (ITR-1 to ITR-7) plus ITR-V (acknowledgement generated post-filing) and ITR-U (Updated Return under Section 139(8A) for corrective disclosure). Form selection depends on the source and quantum of income, residential status, and whether tax audit applies under Section 44AB. The wrong form triggers a Section 139(9) defective return notice with a 15-day correction window.</p>
                    <p><strong>ITR-1 (Sahaj):</strong> The simplest form. For Resident individuals with total income up to Rs 50 lakh from salary, one or two house properties, family pension and other sources (interest, dividends). Cannot be used if you have capital gains, more than one house property loss, foreign income, agricultural income above Rs 5,000, or are a director in a company. Most salaried first-time filers use ITR-1.</p>
                    <p><strong>ITR-2:</strong> For individuals and HUFs not having income from business or profession. Covers capital gains (shares, mutual funds, property), more than two house properties, foreign income and foreign assets (Schedule FA), unlisted shares and director-of-company cases. Senior employees with vested foreign parent RSUs file ITR-2.</p>
                    <p><strong>ITR-3:</strong> For individuals and HUFs having income from business or profession. F and O traders (non-speculative business income), crypto traders (Schedule VDA under Section 115BBH), intraday speculators, proprietors with maintained books, partners in firms with remuneration and interest. Includes full P and L, Balance Sheet, Schedule AL (assets and liabilities) for high-income taxpayers.</p>
                    <p><strong>ITR-4 (Sugam):</strong> For Resident individuals, HUFs and partnership firms (not LLPs) opting for presumptive taxation under Section 44AD (business with turnover up to Rs 3 crore - 8 percent or 6 percent digital), Section 44ADA (specified professionals up to Rs 75 lakh receipts - 50 percent deemed profit) or Section 44AE (transport operators). Section 44AB tax audit waived.</p>
                    <p><strong>ITR-5:</strong> For partnership firms, LLPs, AOPs (Association of Persons), BOIs (Body of Individuals), Section 8 partnership-like entities and similar. Includes partner-wise allocation, Section 40(b) interest and remuneration computations, Schedule AL for partner capital.</p>
                    <p><strong>ITR-6:</strong> For all companies other than those claiming exemption under Section 11 (charitable trusts). Includes Schedule III reconciliation with the financial statements, MAT (Minimum Alternate Tax) computation under Section 115JB, Section 115BAA (22 percent) or Section 115BAB (15 percent) regime selection, Section 92E transfer pricing if applicable.</p>
                    <p><strong>ITR-7:</strong> For trusts, political parties, research institutions, news agencies and Section 8 companies claiming exemption under Sections 11 to 13. Includes Schedule I (income exempt under Section 11), Section 12A registration confirmation, 80G donation receipts, FCRA reporting where foreign contributions received.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing:</strong></p>
                    <p><strong>AY (Assessment Year):</strong> Year following the financial year in which income is assessed. FY 2025-26 income is assessed in AY 2026-27.</p>
                    <p><strong>AIS (Annual Information Statement):</strong> Pre-filled report of financial transactions reported to the Income Tax Department under Rule 114E - includes interest, dividends, securities transactions, property sales, high-value cash deposits and other reportable transactions. Must be reconciled before filing to avoid Section 143(1) demand notices.</p>
                    <p><strong>Form 26AS:</strong> Tax credit statement showing TDS, TCS, advance tax, and self-assessment tax paid against your PAN. Must reconcile with AIS and your own records before filing.</p>
                    <p><strong>Section 87A Rebate:</strong> Rs 60,000 under the new regime (zero tax up to Rs 12 lakh of total income, Rs 12.75 lakh for salaried after Rs 75,000 standard deduction) or Rs 12,500 under the old regime (zero tax up to Rs 5 lakh).</p>
                    <p><strong>Section 115BAC New Regime:</strong> Default regime for AY 2026-27 with concessional rates and limited deductions (only 80CCD(2) employer NPS, standard deduction Rs 75,000 for salaried, Section 24 home loan interest restricted). Opt out via Form 10-IEA for business/professional taxpayers.</p>
                    <p><strong>Form 10-IEA:</strong> Statutory declaration filed by business and professional taxpayers opting out of the default new regime in favour of the old regime. Must be filed before the Section 139(1) due date. Once opted out, switching back is restricted to once in a lifetime.</p>
                    <p><strong>ITR-V:</strong> One-page acknowledgement generated post-filing with a 15-digit acknowledgement number. E-verification within 30 days mandatory per CBDT Notification 5/2022 dated 29 July 2022.</p>
                    <p><strong>ITR-U (Updated Return):</strong> Corrective filing under Section 139(8A) within 48 months from end of AY. Additional tax 25 to 70 percent depending on filing window. Cannot be used to reduce tax or claim refunds.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Source</span>
                        <strong>Section 139</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Must File - Audience Segments and Statutory Triggers</h2>
            <div class="content-text">
                
                <p>ITR filing is mandatory under Section 139(1) of the Income Tax Act 1961 if your total income exceeds Rs 4 lakh under the new regime or Rs 2.5 lakh under the old regime for individuals below 60. The Seventh Proviso to Section 139(1) was expanded in recent years to capture high-value transactions even where headline income is below the exemption threshold. Filing is also mandatory for refund claims, foreign asset disclosure and loss carry-forward.</p>
                <p><strong>Salaried Individuals:</strong> Single Form 16 with no other income files ITR-1 (Sahaj). Multiple Form 16, capital gains, more than two house properties, foreign RSUs or unlisted shares files ITR-2. Mandatory filing if total salary above basic exemption irrespective of TDS already deducted by the employer. <a href="/itr-for-salaries/">View salaried ITR service &rarr;</a></p>
                <p><strong>Business Owners (Proprietors, Firms, LLPs):</strong> Proprietorship or partnership firm with turnover up to Rs 3 crore (cash receipts under 5 percent) can opt for presumptive taxation under Section 44AD via ITR-4 - presumed profit at 8 percent (6 percent for digital receipts). Above the threshold or where books are maintained, ITR-3 with full P and L. LLPs always file ITR-5 and cannot use Section 44AD. Section 44AB tax audit applies if turnover crosses Rs 1 crore (Rs 10 crore with 95 percent digital). <a href="/itr-for-business/">View business ITR service &rarr;</a></p>
                <p><strong>Professionals (CA, CS, Doctor, Lawyer, Architect, Technical Consultant):</strong> Specified professionals with gross receipts up to Rs 75 lakh can opt for Section 44ADA presumptive taxation - 50 percent deemed profit on ITR-4. Above the threshold or where actual profit is lower, ITR-3 with full schedule. <a href="/itr-for-professionals/">View professionals ITR service &rarr;</a></p>
                <p><strong>Freelancers and Consultants:</strong> Independent professionals not in the Section 44ADA specified list file ITR-3 with business income, or ITR-4 under Section 44AD if eligible. GST applicability check at Rs 20 lakh annual turnover. <a href="/itr-filing-for-freelancers-professionals/">View freelancer ITR service &rarr;</a></p>
                <p><strong>F and O Traders:</strong> F and O is non-speculative business income under Explanation 2 to Section 28. Reported under ITR-3 with set-off under Section 70 against other heads except salary and 8-year carry-forward under Section 72. Section 44AB audit applies based on turnover (absolute sum of profits and losses). Intraday equity is separately speculative under Section 73. <a href="/itr-for-fno-trader/">View F and O ITR service &rarr;</a></p>
                <p><strong>Crypto and VDA Investors:</strong> Flat 30 percent tax under Section 115BBH irrespective of holding period. No deduction except cost of acquisition. No set-off or carry-forward of VDA losses. 1 percent TDS under Section 194S on transfers above Rs 50,000. Reporting in ITR-3 Schedule VDA. <a href="/itr-for-crypto-traders/">View crypto ITR service &rarr;</a></p>
                <p><strong>Capital Gains Investors:</strong> Shares, mutual funds, bonds - Section 112A (equity, 12.5 percent above Rs 1.25 lakh) or Section 112 (debt and other) - reported in ITR-2 (no other business income) or ITR-3 (alongside business). Indexation removed post Finance Act 2024 for most assets. <a href="/itr-for-capital-gains/">View capital gains ITR service &rarr;</a></p>
                <p><strong>Property Sellers:</strong> LTCG on house property held over 24 months with optional 1 April 2001 FMV cost basis. Section 54 reinvestment exemption for residential reinvestment, Section 54EC (Rs 50 lakh cap on NHAI/REC bonds), Section 54F for non-residential sale with residential reinvestment. <a href="/itr-for-property-sale/">View property sale ITR service &rarr;</a></p>
                <p><strong>Social Media Influencers and Content Creators:</strong> Brand collaboration income, AdSense revenue, sponsorship, content licensing under business head. Section 194R 10 percent TDS on benefits in kind. GST applicability at Rs 20 lakh turnover. ITR-3 with detailed P and L. <a href="/itr-for-influencers/">View influencer ITR service &rarr;</a></p>
                <p><strong>Companies (Pvt Ltd, OPC, Public Ltd):</strong> ITR-6 filing mandatory regardless of profit or loss; nil ITR mandatory even in dormant years. Schedule III reconciliation with financial statements. MAT under Section 115JB. Section 115BAA (22 percent) or Section 115BAB (15 percent for manufacturing) regime selection. <a href="/itr-for-companies/">View company ITR service &rarr;</a></p>
                <p><strong>NRIs and Foreign Income Holders:</strong> NRI ITR mandatory if Indian-source income above basic exemption or for refund claims. Schedule FA mandatory only for Resident and Ordinarily Resident (ROR) - not NRI or RNOR. Form 67 DTAA Foreign Tax Credit filed before ITR. Form 1042-S (US dividends) and country-specific tax certificates attached.</p>
                <p><strong>Trusts, Section 8 Companies and NGOs:</strong> ITR-7 mandatory for trusts claiming Section 11/12 exemption. Schedule I for exempt income, Section 12A registration confirmation, 80G donation receipts, FCRA reporting for foreign contributions, Form 10B audit report for trust corpus.</p>
                <p><strong>High-Value Transaction Triggers (Seventh Proviso):</strong> Current account deposits above Rs 1 crore, savings deposits above Rs 50 lakh, electricity bill above Rs 1 lakh, foreign travel spend above Rs 2 lakh - mandatory filing irrespective of income.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Routing Matrix - 14 Dedicated Sub-Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Salaried with Form 16 (single or multiple)</strong></td><td>ITR-1 Sahaj for income up to Rs 50 lakh with no capital gains; ITR-2 for capital gains, foreign assets, unlisted shares or multiple house properties. Form 16 review, HRA reconciliation, deductions optimisation, AIS and Form 26AS match. Regime arbitrage built-in.</td><td><a href="/itr-for-salaries/" style="color:var(--orange);font-weight:600;">ITR for Salaries &rarr;</a></td></tr>
                        <tr><td><strong>Freelancer, Consultant, Independent Professional</strong></td><td>ITR-4 Sugam under Section 44ADA presumptive taxation at 50 percent deemed profit for specified professionals (CA, CS, doctor, lawyer, architect, technical consultant) with gross receipts up to Rs 75 lakh. ITR-3 with full books above threshold. GST applicability check at Rs 20 lakh.</td><td><a href="/itr-filing-for-freelancers-professionals/" style="color:var(--orange);font-weight:600;">ITR for Freelancers &rarr;</a></td></tr>
                        <tr><td><strong>Business Owner (Proprietor, Partnership)</strong></td><td>ITR-3 with full books or ITR-4 under Section 44AD presumptive taxation at 8 percent (6 percent digital receipts) for turnover up to Rs 3 crore. Section 44AB tax audit assessment - mandatory above Rs 1 crore turnover (Rs 10 crore with 95 percent digital).</td><td><a href="/itr-for-business/" style="color:var(--orange);font-weight:600;">ITR for Business &rarr;</a></td></tr>
                        <tr><td><strong>Doctor, Lawyer, Architect, Technical Consultant</strong></td><td>Section 44ADA presumptive at 50 percent up to Rs 75 lakh receipts via ITR-4. Above threshold or where actual profit is lower, ITR-3 with full schedule. Practice income segregation from passive income.</td><td><a href="/itr-for-professionals/" style="color:var(--orange);font-weight:600;">ITR for Professionals &rarr;</a></td></tr>
                        <tr><td><strong>Pvt Ltd, OPC or Public Limited Company</strong></td><td>ITR-6 filing with Schedule III reconciliation, tax audit under Section 44AB, transfer pricing under Section 92E if applicable, MAT computation under Section 115JB, dividend distribution. Section 115BAA (22 percent) or 115BAB (15 percent manufacturing) regime selection.</td><td><a href="/itr-for-companies/" style="color:var(--orange);font-weight:600;">ITR for Companies &rarr;</a></td></tr>
                        <tr><td><strong>Capital Gains - Shares, Mutual Funds, Bonds</strong></td><td>STCG (under 12 months equity, under 24 months other) and LTCG under Section 112A (equity, 12.5 percent above Rs 1.25 lakh) and Section 112 (debt and other). Indexation removal impact post Finance Act 2024. Section 54/54EC/54F exemption planning.</td><td><a href="/itr-for-capital-gains/" style="color:var(--orange);font-weight:600;">ITR for Capital Gains &rarr;</a></td></tr>
                        <tr><td><strong>Property Sale (Residential or Commercial)</strong></td><td>LTCG with optional 1 April 2001 FMV cost basis. Section 54 reinvestment in residential property within 2 years (or construction within 3 years). Section 54EC bonds (NHAI/REC) with Rs 50 lakh cap. Section 54F for non-residential property sale.</td><td><a href="/itr-for-property-sale/" style="color:var(--orange);font-weight:600;">ITR for Property Sale &rarr;</a></td></tr>
                        <tr><td><strong>F and O Traders (Futures and Options)</strong></td><td>F and O is non-speculative business income under ITR-3. Set-off under Section 70 against other heads except salary; 8-year carry-forward under Section 72. Turnover computation (absolute sum of profits and losses). Section 44AB audit if turnover crosses threshold.</td><td><a href="/itr-for-fno-trader/" style="color:var(--orange);font-weight:600;">ITR for F and O Traders &rarr;</a></td></tr>
                        <tr><td><strong>Crypto and VDA Traders</strong></td><td>30 percent flat tax under Section 115BBH; no deduction except cost of acquisition; no set-off of crypto losses against other income or carry-forward; 1 percent TDS under Section 194S above Rs 50,000 transfers. ITR-3 with Schedule VDA disclosure per coin.</td><td><a href="/itr-for-crypto-traders/" style="color:var(--orange);font-weight:600;">ITR for Crypto Traders &rarr;</a></td></tr>
                        <tr><td><strong>Social Media Influencer, Content Creator, YouTuber</strong></td><td>Brand collaborations, AdSense revenue, sponsorship, affiliate income, content licensing. Section 194R 10 percent TDS on benefits in kind (product samples, hotel stays). GST applicability check. ITR-3 with detailed P and L and separate disclosure of platform revenue.</td><td><a href="/itr-for-influencers/" style="color:var(--orange);font-weight:600;">ITR for Influencers &rarr;</a></td></tr>
                        <tr><td><strong>Tax Audit (Section 44AB)</strong></td><td>Mandatory if business turnover exceeds Rs 1 crore (Rs 10 crore with 95 percent digital receipts), or professional gross receipts exceed Rs 75 lakh. Form 3CA-3CD or 3CB-3CD audit report. Filed before ITR-3, ITR-5 or ITR-6.</td><td><a href="/tax-audit/" style="color:var(--orange);font-weight:600;">Tax Audit Service &rarr;</a></td></tr>
                        <tr><td><strong>Income Tax Notice Response</strong></td><td>Section 139(9) defective return notice (15-day response window), Section 143(1) demand notice from CPC, Section 142(1) enquiry notice, Section 143(3) scrutiny assessment, Section 147/148 reassessment proceedings. Named CA partner representation.</td><td><a href="/income-tax-notice/" style="color:var(--orange);font-weight:600;">Income Tax Notice &rarr;</a></td></tr>
                        <tr><td><strong>TDS Return Filing (Form 24Q, 26Q)</strong></td><td>Quarterly TDS compliance for employers and deductors. Form 24Q (salary), Form 26Q (other than salary), Form 27Q (NRI payments), Form 27EQ (TCS). Form 16 and Form 16A generation; TRACES portal reconciliation.</td><td><a href="/tds-return/" style="color:var(--orange);font-weight:600;">TDS Return Service &rarr;</a></td></tr>
                        <tr><td><strong>Tax Planning Services (Pre-Year-End)</strong></td><td>Structure investments and salary components before year-end to optimise regime selection. Section 80C maximisation, Section 80D health insurance, Section 24 home loan interest, NPS Section 80CCD, ESOP and RSU planning, capital gains harvesting.</td><td><a href="/tax-planning-services/" style="color:var(--orange);font-weight:600;">Tax Planning &rarr;</a></td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">7-Step ITR Filing Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron filing workflow runs through seven structured steps on the Income Tax e-filing portal at incometax.gov.in. Each step is owned by a named CA with documented hand-off, ensuring AIS reconciliation, regime arbitrage and e-verification all happen before the statutory due date.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Document Collection</h3>
                    <p class="step-description">Share PAN, Aadhaar, Form 16 (salaried), Form 16A/B/C (TDS on other incomes), bank statements, capital gains statements from brokers and investment proofs. Secure shared workspace with named CA point of contact.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Document checklist sent</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Workspace activated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Documents In</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">AIS and Form 26AS Reconciliation</h3>
                    <p class="step-description">Download Annual Information Statement and Form 26AS from the e-filing portal under e-File > Income Tax Returns > View AIS. Resolve every mismatch before filing - submit AIS feedback for incorrect entries.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS variances closed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS reconciled</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">AIS Cleaned</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Regime Selection (Old vs New)</h3>
                    <p class="step-description">Compare old vs new regime liability using a CA-prepared computation. For business and professional cases under ITR-3, file Form 10-IEA before the due date if opting out of the new regime - switching back is restricted to once in a lifetime.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Both regimes computed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 10-IEA if needed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Regime Locked</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Form Selection and Pre-Fill</h3>
                    <p class="step-description">Choose the correct ITR form (ITR-1 to ITR-7) based on income heads, residential status and Section 44AB applicability. The portal pre-fills salary, TDS, and reported transactions from AIS. CA-led to prevent 139(9) defective return notices.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Right form selected</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pre-fill verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Form Selected</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Validation</h3>
                    <p class="step-description">Run the in-portal validator. Resolve every error and warning. Validate Schedule TR, Schedule FA (for residents with foreign assets), Schedule CG (capital gains) and Schedule VDA (crypto). Variance notes filed in the working paper file.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Validator passed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schedules complete</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Validated</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Submission</h3>
                    <p class="step-description">File the return electronically before the statutory due date under Section 139(1). The portal generates ITR-V with a 15-digit acknowledgement number. Tax computation sheet with regime comparison delivered.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-V generated</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 15-digit ack number</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">E-Verification (within 30 days)</h3>
                    <p class="step-description">Verify via Aadhaar OTP, net banking, bank account EVC, demat account EVC or DSC. ITR is invalid until e-verified per CBDT Notification 5/2022. Refund processing by CPC follows e-verification within 7 to 45 days.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-Verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Refund tracking live</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Verified</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist by Segment</h2>
            <div class="content-text">
                
                <p>The Patron document checklist is scenario-specific and shared on day 1 of engagement. Universal documents cover identification and tax credit reconciliation; scenario-specific documents are added based on the selected form. Every assessee receives the same set of standardised outputs at filing close.</p>
                <ul>
                    <li><strong>Universal (every ITR):</strong> PAN, Aadhaar (linked under Section 139AA), bank account details for refund, login credentials for the Income Tax e-filing portal (incometax.gov.in), AIS download, Form 26AS download.</li>
                    <li><strong>Salaried ITR-1 / ITR-2:</strong> Form 16 (Part A and B) from each employer, salary slips, HRA receipts under Section 10(13A), Section 80C investment proofs (PPF, ELSS, life insurance, principal repayment of home loan), Section 80D health insurance premium receipts, Section 80G donation receipts, Section 24 home loan interest certificate.</li>
                    <li><strong>Capital Gains (ITR-2 / ITR-3):</strong> Broker capital gains statement (Zerodha, Groww, ICICIdirect, Upstox), mutual fund consolidated account statement (CAMS or KFintech), purchase and sale deeds for property transactions, indexation working under Section 48 (where still applicable), Section 54/54EC/54F reinvestment proofs.</li>
                    <li><strong>Business and Professional (ITR-3 / ITR-4):</strong> Profit and Loss account, Balance Sheet, GST return summary (GSTR-1 and GSTR-3B), books of accounts, fixed asset register, depreciation working under Section 32, partner remuneration documentation for firms, Form 3CA/3CB-3CD tax audit report if Section 44AB applies.</li>
                    <li><strong>F and O and Crypto (ITR-3):</strong> Trading P and L from broker, contract notes, exchange ledger, F and O turnover computation (absolute sum), VDA exchange statement with INR conversion per coin (for Schedule VDA), Section 194S TDS certificate.</li>
                    <li><strong>NRI and Foreign Income (ITR-2 / ITR-3):</strong> Residential status determination working, foreign country tax certificates, Form 1042-S (US dividends), DTAA documentation, Form 67 working before ITR submission, Schedule FA detail (Tables A1 to A5) for each foreign asset.</li>
                    <li><strong>Company ITR-6:</strong> Audited financial statements (BS, P&amp;L, Cash Flow, Notes), Form 3CA-3CD tax audit report, transfer pricing study under Section 92E (if applicable), MAT working under Section 115JB, Schedule III line-by-line reconciliation.</li>
                    <li><strong>Trust ITR-7:</strong> Section 12A registration certificate, 80G certificate, audited accounts, Form 10B audit report, FCRA registration and quarterly returns (if foreign contributions received), donation receipts ledger.</li>
                </ul>
                <p><strong>Key Outputs You Receive at Filing Close:</strong> Filed ITR acknowledgement (ITR-V) with e-verification confirmation. Tax computation sheet with regime comparison (old vs new) and chosen regime justification. Working paper covering AIS, Form 26AS, Form 27D reconciliation with variance notes. Loss carry-forward schedule under Sections 70, 71, 72 (where applicable). Refund tracking with intimation under Section 143(1) follow-up.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ITR Filing Mistakes and How We Avoid Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>AIS mismatch triggering Section 143(1) demand notice</strong></td><td>The AIS contains all reported transactions - bank interest, dividends, securities sales, property registrations, high-value cash deposits. Filing without reconciling AIS first generates an automated Section 143(1) demand notice from CPC Bangalore.</td><td>Patron reconciles AIS line-by-line, files AIS feedback for incorrect entries via the portal, and the filed ITR matches the corrected AIS exactly. Zero adverse 143(1)(a) intimations on filed returns in the AY 2025-26 cohort.</td></tr>
                        <tr><td><strong>Schedule FA non-disclosure (Black Money Act risk)</strong></td><td>Resident and Ordinarily Resident taxpayers must disclose all foreign assets in Schedule FA - foreign bank accounts, foreign equity holdings (vested RSUs), foreign trusts, foreign cash value insurance. Non-disclosure attracts Rs 10 lakh penalty under Black Money Act Section 42 plus prosecution up to 10 years.</td><td>Patron Schedule FA workflow captures initial value, peak value during FY and closing balance for each foreign asset. CRS and FATCA data cross-checked. Form 67 filed before ITR submission for Foreign Tax Credit.</td></tr>
                        <tr><td><strong>Selecting wrong ITR form</strong></td><td>Filing ITR-1 when capital gains exist (must be ITR-2), or ITR-4 presumptive when business turnover crosses Rs 3 crore (must be ITR-3 with books). Triggers Section 139(9) defective return notice with 15-day correction window - missing this turns the return invalid.</td><td>CA-led form selection on day 1 based on income heads and quantum. Section 44AB applicability assessed before form selection. Director status, foreign income, unlisted shares all flagged in scoping.</td></tr>
                        <tr><td><strong>Regime decision sub-optimal</strong></td><td>Default new regime applied without comparing old regime. Many taxpayers with Section 80C maxed, Section 24 home loan interest and Section 80D health insurance pay more tax under the new regime. Business taxpayers cannot reverse without Form 10-IEA timing.</td><td>Side-by-side tax computation under both regimes. Patron files Form 10-IEA for business assessees opting out of default new regime, before the Section 139(1) due date. Lifetime impact noted in the recommendation.</td></tr>
                        <tr><td><strong>F and O loss mishandled as speculative</strong></td><td>F and O is non-speculative business income under Explanation 2 to Section 28. Some accountants file it as speculative under ITR-2, losing carry-forward under Section 73 (only 4 years) instead of Section 72 (8 years for non-speculative).</td><td>Patron reports F and O under ITR-3 as non-speculative business income, claims set-off under Section 70 against other heads except salary, carries forward unabsorbed loss for 8 years under Section 72.</td></tr>
                        <tr><td><strong>Crypto loss claimed as set-off (Section 115BBH violation)</strong></td><td>Section 115BBH explicitly prohibits set-off of VDA losses against any other income, including against profits from other coins. Some preparers offset crypto losses against equity capital gains - this triggers Section 143(1)(a) intimation.</td><td>Patron Schedule VDA workflow keeps each coin's transactions separate. Losses parked as expense items, not adjustment items. Section 115BBH 30 percent applied to net positive gain per transfer.</td></tr>
                        <tr><td><strong>Loss carry-forward lost due to belated filing</strong></td><td>Belated returns under Section 139(4) cannot carry forward business loss, capital loss or speculative loss - only house property loss. Engaging at 28 July for a 31 July due date often misses the window.</td><td>Patron recommended engagement window is 4 to 6 weeks before due date. AY 2025-26 cohort had 98.7 percent on-time submission rate.</td></tr>
                        <tr><td><strong>E-verification not completed within 30 days</strong></td><td>ITR is treated as invalid (not filed) if e-verification is not completed within 30 days of filing per CBDT Notification 5/2022. The taxpayer is then deemed to have filed a belated return when verification eventually happens.</td><td>Patron tracks e-verification status post-submission and prompts the client until verification is complete - via Aadhaar OTP, net banking, bank account EVC, demat account EVC or DSC.</td></tr>
                        <tr><td><strong>Property sale Section 54 reinvestment timeline missed</strong></td><td>Section 54 requires reinvestment within 2 years (purchase) or 3 years (construction) - or deposit in Capital Gains Account Scheme before the ITR due date. Missing the CGAS deposit before filing forfeits the exemption.</td><td>Patron drafts the Section 54 reinvestment roadmap at the time of sale. CGAS account opened before filing if reinvestment is still pending. Section 54EC Rs 50 lakh NHAI/REC bond timing co-ordinated.</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Fees (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Salaried, single Form 16, no capital gains</td><td>ITR-1 (Sahaj) with Form 16 review, deductions optimisation, AIS and 26AS reconciliation, regime arbitrage</td><td class="table-amount">Rs 1,499</td></tr>
                        <tr><td>Salaried with capital gains or 2+ house properties</td><td>ITR-2 with capital gains schedule, indexation, multiple house properties, Section 54/54EC/54F</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>Freelancer or professional (Section 44ADA presumptive)</td><td>ITR-4 (Sugam) with presumptive taxation at 50 percent for eligible professionals; up to Rs 75 lakh receipts</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>Business owner, F and O trader, crypto, intraday</td><td>ITR-3 with full P and L, F and O turnover computation, Schedule VDA for crypto, Section 70/72 carry-forward</td><td class="table-amount">Rs 4,999</td></tr>
                        <tr><td>Property sale with Section 54 reinvestment planning</td><td>ITR-2 or ITR-3 with LTCG computation, 1 April 2001 FMV cost basis, Section 54/54EC/54F exemption</td><td class="table-amount">Rs 3,999</td></tr>
                        <tr><td>Partnership firm or LLP</td><td>ITR-5 with partner-wise allocation, Section 40(b) interest and remuneration, Schedule AL</td><td class="table-amount">Rs 7,500</td></tr>
                        <tr><td>Pvt Ltd or OPC company</td><td>ITR-6 with Schedule III reconciliation, MAT under Section 115JB, tax audit support where applicable</td><td class="table-amount">Rs 9,999</td></tr>
                        <tr><td>Trust or Section 8 company</td><td>ITR-7 with Schedule I, Section 12A and 80G compliance, FCRA reporting where applicable</td><td class="table-amount">Rs 12,500</td></tr>
                        <tr><td>NRI return with Schedule FA and DTAA</td><td>ITR-2 or ITR-3 with foreign asset disclosure, DTAA relief, Form 67 foreign tax credit</td><td class="table-amount">Rs 5,999</td></tr>
                        <tr><td>ITR-U Updated Return (Section 139(8A))</td><td>Corrective filing for prior AYs within 48 months; additional tax 25 to 70 percent depending on filing window</td><td class="table-amount">Rs 3,999 onwards</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for salaried ITR-1 filing; tax audit fees under Section 44AB additional and quoted on review</td><td class="table-amount"><strong>Starting from INR 1,499 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20Income%20Tax%20Return%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Complete AY 2026-27 Deadline Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Original Returns - Section 139(1)</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>ITR-1 Sahaj and ITR-2 (non-audit individuals and HUFs)</td><td class="table-amount">31 July 2026</td></tr>
                        <tr><td>ITR-3 and ITR-4 (non-audit business and profession) - new for AY 2026-27</td><td class="table-amount">31 August 2026</td></tr>
                        <tr><td>Audit cases under Section 44AB (ITR-3, ITR-5, ITR-6, ITR-7)</td><td class="table-amount">31 October 2026</td></tr>
                        <tr><td>Transfer pricing cases under Section 92E (ITR-3, ITR-5, ITR-6)</td><td class="table-amount">30 November 2026</td></tr>
                        <tr><td><strong>Belated, Revised and Updated Returns</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Belated return under Section 139(4) - Section 234F fee applies</td><td class="table-amount">31 December 2026</td></tr>
                        <tr><td>Revised return under Section 139(5) - no fee, unlimited revisions</td><td class="table-amount">31 March 2027</td></tr>
                        <tr><td>Updated Return (ITR-U) under Section 139(8A) - 48 months from end of AY</td><td class="table-amount">31 March 2031</td></tr>
                        <tr><td><strong>Processing and Post-Filing</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>E-verification window per CBDT Notification 5/2022</td><td class="table-amount">30 days from filing</td></tr>
                        <tr><td>Refund processing by CPC Bangalore post e-verification</td><td class="table-amount">7 to 45 days</td></tr>
                        <tr><td>Section 139(9) defective return response window</td><td class="table-amount">15 days from notice</td></tr>
                        <tr><td><strong>Patron Engagement Turnaround</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Salaried ITR-1 (single Form 16, no capital gains)</td><td class="table-amount">24 to 48 hours</td></tr>
                        <tr><td>ITR-2 with capital gains, multiple house properties</td><td class="table-amount">3 to 5 working days</td></tr>
                        <tr><td>ITR-3 business or F and O trader</td><td class="table-amount">5 to 7 working days</td></tr>
                        <tr><td>ITR-6 company with Schedule III reconciliation</td><td class="table-amount">7 to 10 working days post audit</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Filing belated under Section 139(4) costs Rs 5,000 fee under Section 234F and forfeits business loss carry-forward under Section 72 (8 years), capital loss carry-forward under Section 74 and speculative loss carry-forward under Section 73 (4 years). Only house property loss carry-forward survives a belated filing. Patron recommended engagement window is 4 to 6 weeks before the due date - engaging by 15 July 2026 avoids the last-week portal congestion for ITR-1 and ITR-2 filers.

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why CA-Assisted ITR Filing</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Correct Form Selection Day 1</h3><p>Avoids Section 139(9) defective return notices. CA-led decision based on income heads, residential status and Section 44AB applicability - not portal auto-suggestion. Wrong form is the most common avoidable error.</p></article>
    <article class="feature-card"><h3>Regime Arbitrage Documented</h3><p>Side-by-side old vs new regime computation prepared and retained. Form 10-IEA filed for business assessees opting out of default new regime before the due date. Lifetime opt-out impact noted in recommendation.</p></article>
    <article class="feature-card"><h3>AIS and Form 26AS Reconciliation</h3><p>Line-by-line AIS variance report. AIS feedback filed for incorrect entries before ITR submission. Reduces Section 143(1) demand notice rate to near-zero. Zero adverse intimations in the AY 2025-26 cohort.</p></article>
    <article class="feature-card"><h3>Loss Carry-Forward Protection</h3><p>Section 70 set-off within heads, Section 71 inter-head, Section 72 carry-forward for 8 years (non-speculative business loss), Section 73 (4 years speculative), Section 74 (capital loss). Lost if return is belated - timely filing protects future tax savings.</p></article>
    <article class="feature-card"><h3>Schedule FA Black Money Act Defence</h3><p>Foreign asset disclosure done correctly. Avoids Rs 10 lakh penalty under Black Money Act 2015 Section 42. CRS and FATCA data cross-referenced. Form 67 DTAA Foreign Tax Credit filed before ITR submission, not after.</p></article>
    <article class="feature-card"><h3>Notice Support Included 12 Months</h3><p>Section 139(9) defective return, Section 143(1) demand from CPC, Section 142(1) enquiry, Section 143(3) scrutiny, Section 148 reassessment - all covered by named CA for 12 months post-filing at no extra cost.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted Across India for ITR Filing</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Processed | 15+ Years in Practice | 25,000+ ITRs Filed | 98.7 percent On-Time Submission Rate</strong></p>
                <p>Filed our 200+ employee Form 16 reconciliation and ITRs through Patron for three years running. AIS mismatches caught before submission, zero 143(1) demand notices in our cohort. - HR Head, mid-size IT services firm, Pune.</p>
                <p>F and O loss of Rs 18 lakh carried forward correctly under Section 72 and set off against business income next year. The earlier accountant had filed it as speculative - Patron team revised the return and saved the carry-forward. - Independent F and O trader, Mumbai.</p>
                <p><strong>Outcome Proof:</strong> Across the AY 2025-26 filing season, Patron processed 4,200+ individual and company ITRs with a 98.7 percent on-time submission rate and zero adverse intimations under Section 143(1)(a) on filed returns.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Old Regime vs New Regime - AY 2026-27 Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Old Tax Regime</th>
                            <th>New Tax Regime (Section 115BAC) - Default for AY 2026-27</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Basic Exemption Limit</strong></td><td>Rs 2.5 lakh (below 60), Rs 3 lakh (60 to 80), Rs 5 lakh (above 80)</td><td>Rs 4 lakh for all individuals; Section 87A rebate Rs 60,000 yields zero tax up to Rs 12 lakh</td></tr>
                        <tr><td><strong>Section 87A Rebate</strong></td><td>Rs 12,500 (zero tax up to Rs 5 lakh)</td><td>Rs 60,000 (zero tax up to Rs 12 lakh; Rs 12.75 lakh for salaried with Rs 75,000 standard deduction)</td></tr>
                        <tr><td><strong>Standard Deduction (Salaried)</strong></td><td>Rs 50,000</td><td>Rs 75,000</td></tr>
                        <tr><td><strong>Section 80C (PPF, ELSS, life insurance, NPS)</strong></td><td>Available up to Rs 1.5 lakh</td><td>NOT available (except 80CCD(2) employer NPS contribution)</td></tr>
                        <tr><td><strong>Section 80D (Health Insurance)</strong></td><td>Available up to Rs 1 lakh (self + parents)</td><td>NOT available</td></tr>
                        <tr><td><strong>Section 24 (Home Loan Interest)</strong></td><td>Self-occupied: Rs 2 lakh; Let-out: full amount</td><td>Self-occupied: NOT available; Let-out: full amount available</td></tr>
                        <tr><td><strong>HRA Exemption Section 10(13A)</strong></td><td>Available based on lower of three formulae</td><td>NOT available</td></tr>
                        <tr><td><strong>LTA Section 10(5)</strong></td><td>Available twice in a block of 4 years</td><td>NOT available</td></tr>
                        <tr><td><strong>Form 10-IEA Requirement</strong></td><td>NOT applicable - was the default earlier</td><td>Default regime; business/professional taxpayers file Form 10-IEA to opt OUT to old regime before the Section 139(1) due date</td></tr>
                        <tr><td><strong>Switching Restriction</strong></td><td>Salaried can switch each year (in ITR before due date)</td><td>Salaried can switch each year; Business and professional taxpayers opting out via Form 10-IEA - switching back limited to once in lifetime</td></tr>
                        <tr><td><strong>Best For</strong></td><td>Taxpayers with substantial 80C + 80D + Section 24 home loan interest + HRA claims</td><td>Taxpayers with minimal deductions, ESOP and RSU recipients, freelancers without home loan, NPS-only investors</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Adjacent Patron Services and Free Tax Tools</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong><a href="/tax-planning-services/">Tax Planning Services</a></strong> - structure investments and salary components before year-end to optimise regime selection and 80C, 80D, 80CCD usage. Pre-March planning protects against last-week regime regret.</li>
                    <li><strong><a href="/tax-audit/">Tax Audit under Section 44AB</a></strong> - mandatory if business turnover exceeds Rs 1 crore (or Rs 10 crore with 95 percent digital) or professional gross receipts exceed Rs 75 lakh. Form 3CA-3CD or 3CB-3CD audit report.</li>
                    <li><strong><a href="/tds-return/">TDS Return Filing (Form 24Q, 26Q)</a></strong> - quarterly TDS compliance for employers and deductors. Form 16 and Form 16A generation; TRACES portal reconciliation.</li>
                    <li><strong><a href="/income-tax-notice/">Income Tax Notice Response</a></strong> - representation for Sections 139(9), 143(1), 142(1), 143(3) scrutiny, 147 reassessment, 148 reopening notices.</li>
                    <li><strong><a href="/tools/income-tax-calculator/">Income Tax Calculator</a></strong> - compare old vs new regime for AY 2026-27 in 60 seconds with Section 87A rebate applied.</li>
                    <li><strong><a href="/tools/hra-calculator/">HRA Calculator</a></strong> - compute exempt HRA under Section 10(13A) by city tier (metro vs non-metro) and three-formula lower.</li>
                    <li><strong><a href="/tools/advance-tax-calculator/">Advance Tax Calculator</a></strong> - 234B and 234C interest projection across four instalments (15 June, 15 September, 15 December, 15 March).</li>
                    <li><strong><a href="/tools/capital-gains-calculator/">Capital Gains Calculator</a></strong> - LTCG and STCG across asset classes with indexation logic (where still applicable post Finance Act 2024).</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Income Tax Act, 1961</strong> - governing statute for AY 2026-27 returns. The new Income Tax Act 2025 takes effect from 1 April 2026 and applies to Tax Year 2026-27 returns due in 2027. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department e-filing portal</a>.</li>
                    <li><strong>Section 139(1)</strong> - mandatory return filing for income above basic exemption limit; due dates by assessee category and audit applicability.</li>
                    <li><strong>Section 139(4)</strong> - belated return until 31 December 2026 for AY 2026-27, with Section 234F late filing fee.</li>
                    <li><strong>Section 139(5)</strong> - revised return until 31 March 2027 for AY 2026-27 (Budget 2026 extended from 31 December).</li>
                    <li><strong>Section 139(8A)</strong> - Updated Return (ITR-U) within 48 months from end of AY; additional tax 25 to 70 percent per Section 140B.</li>
                    <li><strong>Section 139(9)</strong> - defective return notice; respond within 15 days else the return is treated as never filed.</li>
                    <li><strong>Section 139AA</strong> - mandatory PAN-Aadhaar linkage for all assessees.</li>
                    <li><strong>Section 44AB</strong> - tax audit threshold: business turnover above Rs 1 crore (Rs 10 crore if 95 percent digital) or professional receipts above Rs 75 lakh.</li>
                    <li><strong>Section 44AD</strong> - presumptive taxation for eligible businesses (turnover up to Rs 3 crore, cash receipts under 5 percent); 8 percent or 6 percent digital deemed profit; ITR-4.</li>
                    <li><strong>Section 44ADA</strong> - presumptive taxation for specified professionals (gross receipts up to Rs 75 lakh); 50 percent deemed profit; ITR-4.</li>
                    <li><strong>Section 115BAC</strong> - default new tax regime for AY 2026-27; Section 87A rebate Rs 60,000 yields zero tax up to Rs 12 lakh.</li>
                    <li><strong>Section 115BAA</strong> - 22 percent corporate tax regime for companies opting out of deductions/exemptions; no MAT.</li>
                    <li><strong>Section 115BAB</strong> - 15 percent corporate tax regime for new manufacturing companies.</li>
                    <li><strong>Section 115JB</strong> - Minimum Alternate Tax (MAT) at 15 percent of book profits; not applicable to Section 115BAA/115BAB regimes.</li>
                    <li><strong>Section 115BBH</strong> - 30 percent flat tax on Virtual Digital Assets (crypto); no set-off of VDA losses; Section 194S 1 percent TDS.</li>
                    <li><strong>Section 234F</strong> - late filing fee Rs 1,000 if total income up to Rs 5 lakh, Rs 5,000 otherwise.</li>
                    <li><strong>Section 234A</strong> - interest at 1 percent per month or part thereof on unpaid tax from due date until filing date.</li>
                    <li><strong>Section 234B</strong> - interest at 1 percent per month for default in payment of advance tax (90 percent threshold).</li>
                    <li><strong>Section 234C</strong> - interest at 1 percent per month for deferment of advance tax instalments (15 June, 15 September, 15 December, 15 March).</li>
                    <li><strong>Section 87A</strong> - rebate for Resident individuals; Rs 60,000 new regime or Rs 12,500 old regime; non-refundable.</li>
                    <li><strong>Section 80C, 80D, 80G, Section 24</strong> - chapter VI-A and house property deductions available under old regime; restricted under new regime.</li>
                    <li><strong>Section 54, 54EC, 54F</strong> - capital gains reinvestment exemptions for property and other assets.</li>
                    <li><strong>Section 92E</strong> - transfer pricing report Form 3CEB for international and specified domestic transactions; due date 30 November.</li>
                    <li><strong>Section 192 read with Section 192(2A)</strong> - employer TDS on salary including perquisite from foreign parent equity (RSU, ESOP).</li>
                    <li><strong>Section 194S</strong> - 1 percent TDS on Virtual Digital Asset transfer above Rs 50,000 (Rs 10,000 specified persons).</li>
                    <li><strong>Section 194R</strong> - 10 percent TDS on benefits or perquisites arising from business (influencer brand collaboration in kind).</li>
                    <li><strong>Section 90 and 91 read with Rule 128</strong> - Foreign Tax Credit; Form 67 must be filed BEFORE ITR submission for FTC claim.</li>
                    <li><strong>Black Money (Undisclosed Foreign Income and Assets) Act 2015 Section 42</strong> - Rs 10 lakh penalty for undisclosed foreign assets in Schedule FA plus prosecution up to 10 years.</li>
                    <li><strong>Rule 114E, Income Tax Rules 1962</strong> - Statement of Financial Transactions (SFT) reporting feeding into the Annual Information Statement.</li>
                    <li><strong>CBDT Notification 5/2022 dated 29 July 2022</strong> - 30-day e-verification window; ITR treated as invalid if not verified within window.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - administrative authority. <a href="https://incometaxindia.gov.in/Pages/communications/notifications.aspx" target="_blank" rel="noopener">CBDT Notifications</a>.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Long-tail answers on AY 2026-27 ITR filing - due dates by form, who must file, all 7 form selection, fees, late filing under Section 234F, revised and updated returns, regime selection under Section 115BAC, Schedule FA for foreign assets, Section 87A rebate, F and O tax treatment, crypto under Section 115BBH, presumptive taxation under Sections 44AD/44ADA and 30-day e-verification.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Income Tax Return Filing (Hub)',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the last date to file ITR for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>For AY 2026-27, the due date for non-audit individuals filing ITR-1 or ITR-2 is 31 July 2026. ITR-3 and ITR-4 (non-audit business and profession) is 31 August 2026. Audit cases under Section 44AB filing ITR-5, ITR-6, or ITR-7 must be filed by 31 October 2026. Transfer pricing cases under Section 92E have until 30 November 2026. Belated returns under Section 139(4) can be filed until 31 December 2026; revised returns under Section 139(5) until 31 March 2027.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who must file an Income Tax Return in India?</h3>
                        <div class="faq-expanded__a"><p>Filing is mandatory if your total income exceeds Rs 4 lakh under the new regime or Rs 2.5 lakh under the old regime for individuals below 60. All companies, LLPs, firms, and trusts must file regardless of profit. Filing is also mandatory if you have foreign assets, want to claim a TDS refund, carry forward losses, or your bank deposits, electricity bill, or foreign travel cross specified thresholds under Section 139(1) Seventh Proviso.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which ITR form should I use for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 (Sahaj) is for residents with income up to Rs 50 lakh from salary, one or two house properties, and other sources. ITR-2 covers capital gains, more than two house properties, foreign income, or unlisted shares. ITR-3 is for business and professional income. ITR-4 (Sugam) is for presumptive taxation under Sections 44AD, 44ADA, or 44AE. ITR-5 is firms and LLPs, ITR-6 is companies, ITR-7 is trusts. Selecting the wrong form triggers a Section 139(9) defective return notice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How much does CA-assisted ITR filing cost in India?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting CA-assisted ITR filing starts at Rs 1,499 for salaried individuals filing ITR-1 with a single Form 16. ITR-2 with capital gains starts at Rs 2,999. ITR-3 for business owners, F and O traders, or crypto investors starts at Rs 4,999. ITR-6 company filing starts at Rs 9,999. NRI returns with Schedule FA start at Rs 5,999. Tax audit fees under Section 44AB are quoted separately based on turnover and complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of ITR for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Under Section 234F, the late filing fee is Rs 1,000 if your total income is up to Rs 5 lakh and Rs 5,000 if it exceeds Rs 5 lakh. Additionally, Section 234A levies interest at 1 percent per month on unpaid tax from the due date until you file. Belated returns under Section 139(4) can be filed until 31 December 2026, but you lose the right to carry forward certain losses under Section 72.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I file a revised ITR for AY 2026-27 if I find an error?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 139(5), you can file a revised return any number of times until 31 March 2027 for AY 2026-27. The Budget 2026 extended this from 31 December to 31 March of the next year. If you need to correct undisclosed income beyond this window, you can file an Updated Return (ITR-U) under Section 139(8A) within 48 months from the end of the assessment year, with additional tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do I need to file ITR if my employer has already deducted TDS?</h3>
                        <div class="faq-expanded__a"><p>Yes, TDS deduction does not exempt you from filing. ITR filing is mandatory if your income exceeds the basic exemption limit under Section 139(1). Filing also lets you claim a refund of excess TDS, carry forward losses, and provides documentary proof for visa, home loan, or credit card applications. Banks, insurers, and registrars also require ITR copies for high-value transaction verification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is the new tax regime mandatory for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>No. The new regime is the default under Section 115BAC, but you can opt out and choose the old regime. Salaried taxpayers can choose regime each year directly in the ITR before the due date under Section 139(1). Business and professional taxpayers must file Form 10-IEA to opt out, and switching back is restricted to once in a lifetime. Compare regime liabilities side by side before deciding - many taxpayers with substantial Section 80C, Section 24 home loan interest and Section 80D claims pay less under the old regime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is ITR-U Updated Return and how long can I file it?</h3>
                        <div class="faq-expanded__a"><p>ITR-U (Updated Return) is a corrective filing mechanism under Section 139(8A) of the Income Tax Act 1961. It lets you disclose previously undisclosed income within 48 months from the end of the relevant assessment year. For AY 2026-27, ITR-U can be filed until 31 March 2031. Additional tax payable is 25 percent if filed within 12 months of AY end, 50 percent within 24 months, 60 percent within 36 months and 70 percent within 48 months, plus regular tax and interest. ITR-U cannot be used to reduce tax or claim refunds.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">How do I disclose foreign assets in Schedule FA?</h3>
                        <div class="faq-expanded__a"><p>Schedule FA in ITR-2 and ITR-3 is mandatory for Resident and Ordinarily Resident (ROR) taxpayers. Report each foreign asset with initial value (acquisition cost in INR at the time of acquisition), peak value during the financial year (highest INR-converted value) and closing balance. Categories covered include foreign bank accounts (Table A2), foreign equity (Table A3 - including vested RSUs from foreign parent companies), foreign cash value insurance, foreign trusts and any other foreign financial interest. Non-disclosure attracts a Rs 10 lakh penalty under Black Money Act 2015 Section 42 plus prosecution up to 10 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-11">
                        <h3 class="faq-expanded__q">Who qualifies for the Section 87A rebate and zero tax up to Rs 12 lakh?</h3>
                        <div class="faq-expanded__a"><p>Section 87A rebate is available only to Resident individuals (not NRIs, HUFs, firms or companies). Under the new regime (Section 115BAC), the rebate is Rs 60,000 yielding zero tax up to Rs 12 lakh of total income. For salaried taxpayers, the Rs 75,000 standard deduction pushes this threshold to Rs 12.75 lakh. Under the old regime, the rebate is Rs 12,500 yielding zero tax up to Rs 5 lakh. The rebate is non-refundable - it cannot reduce tax below zero or generate a refund.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-12">
                        <h3 class="faq-expanded__q">Is F and O income speculative or non-speculative?</h3>
                        <div class="faq-expanded__a"><p>F and O (futures and options) income is non-speculative business income under Explanation 2 to Section 28 of the Income Tax Act 1961, as F and O contracts are settled by physical or cash settlement on a recognised exchange. It is reported under ITR-3 in the business head. Losses can be set off against any income head except salary under Section 70/71 in the same year, and unabsorbed loss carries forward for 8 years under Section 72. This is different from intraday equity speculation under Explanation to Section 73, which is speculative business income with only 4-year carry-forward.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-13">
                        <h3 class="faq-expanded__q">How is cryptocurrency taxed in India under Section 115BBH?</h3>
                        <div class="faq-expanded__a"><p>Income from transfer of Virtual Digital Assets (VDA) is taxed at a flat 30 percent under Section 115BBH of the Income Tax Act 1961, irrespective of holding period. No deduction is allowed except cost of acquisition. Losses from VDA cannot be set off against any other income (including VDA losses from a different coin) and cannot be carried forward. A 1 percent TDS applies on VDA transfers above Rs 50,000 (Rs 10,000 for specified persons) under Section 194S. Reporting is in ITR-3 with the Schedule VDA disclosure of buy and sell values per coin.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-14">
                        <h3 class="faq-expanded__q">What is the difference between Section 44AD and Section 44ADA presumptive taxation?</h3>
                        <div class="faq-expanded__a"><p>Section 44AD applies to eligible businesses (proprietorship, partnership firms but not LLPs or companies) with turnover up to Rs 3 crore where cash receipts are not more than 5 percent. Presumed profit is 8 percent of turnover (6 percent for digital receipts). Section 44ADA applies to specified professionals (CA, CS, doctor, lawyer, architect, technical consultant, interior decorator) with gross receipts up to Rs 75 lakh. Presumed profit is 50 percent of gross receipts. Both presumptive schemes use ITR-4 (Sugam) and waive Section 44AB tax audit. Opting out for 5 years is restricted under Section 44AD(4).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-15">
                        <h3 class="faq-expanded__q">How do I e-verify my ITR within the 30-day window?</h3>
                        <div class="faq-expanded__a"><p>ITR must be e-verified within 30 days of filing per CBDT Notification 5/2022 dated 29 July 2022 - otherwise the return is treated as invalid (never filed). Five e-verification methods are available - Aadhaar OTP sent to the Aadhaar-linked mobile, Net banking authentication through your bank login, Bank account EVC generated via pre-validated bank account, Demat account EVC generated via pre-validated demat account and Digital Signature Certificate (DSC) - mandatory for tax audit cases and companies. Sending signed ITR-V to CPC Bangalore by post is the legacy method and still valid within the 30-day window.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-16">
                        <h3 class="faq-expanded__q">ITR file karne ki last date kya hai AY 2026-27 ke liye? (What is ITR filing last date for AY 2026-27)</h3>
                        <div class="faq-expanded__a"><p>AY 2026-27 ke liye ITR-1 aur ITR-2 ki last date 31 July 2026 hai. ITR-3 aur ITR-4 (non-audit business aur profession) ki last date 31 August 2026 hai. Section 44AB audit cases (ITR-5, ITR-6, ITR-7) ki last date 31 October 2026 hai. Section 92E transfer pricing cases ki last date 30 November 2026 hai. Belated return Section 139(4) ke under 31 December 2026 tak file kar sakte hain (Rs 5,000 late fee under Section 234F, plus 1 percent per month interest under Section 234A). Revised return Section 139(5) ke under 31 March 2027 tak file kar sakte hain. ITR-U updated return Section 139(8A) ke under 48 mahine tak file kar sakte hain - AY 2026-27 ke liye 31 March 2031 tak. Patron Accounting Rs 1,499 se start hone wali CA-assisted filing offer karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>When is ITR due for AY 2026-27?</strong> ITR-1 and ITR-2 by 31 July 2026; ITR-3 and ITR-4 by 31 August 2026; audit cases by 31 October 2026; transfer pricing by 30 November 2026.</li>
                    <li><strong>What is the zero-tax threshold under the new regime?</strong> Rs 12 lakh for individuals after Section 87A rebate of Rs 60,000; Rs 12.75 lakh for salaried after Rs 75,000 standard deduction.</li>
                    <li><strong>What is the penalty under Section 234F?</strong> Rs 1,000 if total income up to Rs 5 lakh, Rs 5,000 otherwise.</li>
                    <li><strong>How long can I file an updated return?</strong> Up to 48 months from the end of the assessment year under Section 139(8A) - until 31 March 2031 for AY 2026-27. Additional tax 25 to 70 percent depending on filing window.</li>
                    <li><strong>What is the e-verification window?</strong> 30 days from filing per CBDT Notification 5/2022; ITR treated as invalid if not verified within window.</li>
                    <li><strong>Can NRIs claim Section 87A rebate?</strong> No. Section 87A rebate is available only to Resident individuals.</li>
                    <li><strong>What is the new IT Act 2025 effective date?</strong> 1 April 2026; applies to Tax Year 2026-27 returns due in 2027. AY 2026-27 remains under the Income Tax Act 1961.</li>
                    <li><strong>Is Form 10-IEA mandatory for all taxpayers?</strong> No. Only for business and professional taxpayers opting OUT of the default new regime; salaried taxpayers can switch each year directly in the ITR.</li>
                    <li><strong>What is the Section 44AB tax audit threshold?</strong> Business turnover above Rs 1 crore (Rs 10 crore with 95 percent digital receipts) or professional gross receipts above Rs 75 lakh.</li>
                    <li><strong>Can I file ITR after due date if I have a refund?</strong> Yes via belated return under Section 139(4) until 31 December 2026, but Section 234F fee applies and most loss carry-forwards are forfeited.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AY 2026-27 Due Date Countdown - Engage by 15 July 2026</h2>
            <div class="content-text">
                
                Statutory due date is 31 July 2026 for ITR-1 and ITR-2; 31 August 2026 for ITR-3 and ITR-4 non-audit cases. Late filing triggers Section 234F fee up to Rs 5,000 plus Section 234A interest at 1 percent per month. Belated returns under Section 139(4) forfeit business loss carry-forward under Section 72 (8 years), capital loss carry-forward under Section 74 and speculative loss carry-forward under Section 73. Engage Patron Accounting by 15 July 2026 to avoid the last-week portal congestion and preserve loss carry-forward rights. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 20-minute scoping call - we respond within 2 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 ITR Filing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Income Tax Return Filing for AY 2026-27 is the final year governed by the Income Tax Act, 1961 before the new Income Tax Act, 2025 takes effect for Tax Year 2026-27. Form selection (ITR-1 Sahaj through ITR-7), regime choice under Section 115BAC, AIS reconciliation, Schedule FA disclosure, Form 67 DTAA Foreign Tax Credit, Section 87A rebate optimisation, presumptive taxation under Sections 44AD/44ADA, and loss carry-forward decisions made this year determine your tax position for the next compliance cycle.</p>
                <p>Patron Accounting LLP routes every scenario - salaried, business, capital gains, property sale, F and O, crypto under Section 115BBH, influencer income, NRI Schedule FA, company ITR-6, trust ITR-7 - to the correct dedicated team. With offices in Pune, Mumbai, Delhi, and Gurugram and 15+ years of practice, the firm has filed 25,000+ Income Tax Returns across individual and corporate clients with a 98.7 percent on-time submission rate.</p>
                <p>Ready to file your AY 2026-27 ITR? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free consultation. We respond within 2 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20Income%20Tax%20Return%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Browse All ITR Sub-Services and Adjacent Pages</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Comprehensive navigation across all 14 ITR sub-services, related compliance services and free tax tools. ITR filing is delivered remotely from our Pune, Mumbai, Delhi and Gurugram offices to individuals and businesses across India - the Income Tax e-filing portal is national.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">ITR Sub-Services by Audience</h3>
                <div class="pa-cross-grid">
                    <a href="/itr-for-salaries/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Salaries</strong><span>ITR-1 Sahaj / ITR-2 with Form 16</span></div>
                    </a>
                    <a href="/itr-for-business/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Business</strong><span>ITR-3 / ITR-4 Section 44AD presumptive</span></div>
                    </a>
                    <a href="/itr-for-companies/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Companies</strong><span>ITR-6 with Schedule III, MAT 115JB</span></div>
                    </a>
                    <a href="/itr-filing-for-freelancers-professionals/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Freelancers</strong><span>Section 44ADA presumptive at 50 percent</span></div>
                    </a>
                    <a href="/itr-for-professionals/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Professionals</strong><span>CA, CS, doctor, lawyer, architect</span></div>
                    </a>
                    <a href="/itr-for-capital-gains/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Capital Gains</strong><span>Shares, MF, Section 112A LTCG</span></div>
                    </a>
                    <a href="/itr-for-property-sale/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Property Sale</strong><span>Section 54 / 54EC / 54F reinvestment</span></div>
                    </a>
                    <a href="/itr-for-fno-trader/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for F and O Traders</strong><span>ITR-3 non-speculative business income</span></div>
                    </a>
                    <a href="/itr-for-crypto-traders/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Crypto Traders</strong><span>Section 115BBH 30 percent flat tax</span></div>
                    </a>
                    <a href="/itr-for-influencers/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Influencers</strong><span>Brand deals, AdSense, Section 194R TDS</span></div>
                    </a>
                </div>
                <h3 class="pa-cross-title" style="margin-top:32px;">Adjacent Compliance Services</h3>
                <div class="pa-cross-grid">
                    <a href="/tax-planning-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Planning Services</strong><span>Pre-year-end regime arbitrage</span></div>
                    </a>
                    <a href="/tax-audit/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Audit Section 44AB</strong><span>Turnover above Rs 1 cr or profession above Rs 75 L</span></div>
                    </a>
                    <a href="/tds-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>TDS Return Filing</strong><span>Form 24Q, 26Q, 27Q quarterly</span></div>
                    </a>
                    <a href="/income-tax-notice/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Notice Response</strong><span>139(9), 143(1), 142(1), 148</span></div>
                    </a>
                </div>
                <h3 class="pa-cross-title" style="margin-top:32px;">Free Tax Calculators</h3>
                <div class="pa-cross-grid">
                    <a href="/tools/income-tax-calculator/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Calculator</strong><span>Old vs new regime in 60 seconds</span></div>
                    </a>
                    <a href="/tools/hra-calculator/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>HRA Calculator</strong><span>Section 10(13A) three-formula lower</span></div>
                    </a>
                    <a href="/tools/advance-tax-calculator/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Advance Tax Calculator</strong><span>234B and 234C instalment projection</span></div>
                    </a>
                    <a href="/tools/capital-gains-calculator/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Capital Gains Calculator</strong><span>LTCG, STCG, Section 112A, 112</span></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 1 half-yearly review. Triggers for review: Finance Act amendments affecting ITR forms or tax rates, CBDT notifications on due dates and Section 139 timelines, ITR form schema updates by the e-filing portal, new IT Act 2025 transitional rules taking effect from Tax Year 2026-27, AIS and TIS feature changes, Section 234F and 234A interest rate changes, Section 87A rebate threshold changes, presumptive taxation threshold changes (Section 44AD/44ADA), Section 115BAC slab changes and Schedule FA reporting expansions. Sources: Income Tax Department portal (incometax.gov.in), CBDT notifications (incometaxindia.gov.in), Finance Act 2026 and ICAI Direct Tax Committee publications.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<!-- <div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> -->
@include('layouts.itr-season-strip')
   
</main>







<script>

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>

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
<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
