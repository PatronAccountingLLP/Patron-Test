@extends('layouts.app')
@section('meta')
    <title>GST Invoice Generator India | Free GST Invoice Maker</title>
    <meta name="description" content="GST invoice generator: create tax invoices with CGST, SGST and IGST breakdowns, HSN/SAC codes and all mandatory fields per CGST Rules. Download as PDF, free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gst-invoice-generator">
    <meta property="og:title" content="GST Invoice Generator India &mdash; Free Invoice Maker 2026">
    <meta property="og:description" content="GST Invoice Generator creates tax invoices with CGST, SGST, IGST breakdowns, HSN/SAC codes, and mandatory fields per CGST Rules. Download as PDF free!">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/gst-invoice-generator">
    <meta property="og:image" content="/tools/gst-invoice-generator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Invoice Generator India &mdash; Free Invoice Maker 2026">
    <meta name="twitter:description" content="Create GST-compliant invoices with automatic tax calculations. Download as PDF. Try now!">
    <meta name="twitter:image" content="/tools/gst-invoice-generator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context":"https://schema.org","@type":"WebApplication",
      "name":"GST Invoice Generator India",
      "description":"GST Invoice Generator creates fully compliant tax invoices with automatic CGST, SGST, and IGST breakdowns, HSN/SAC code fields, place of supply, and all mandatory fields per Rule 46 of the CGST Rules 2017. Supports intra-state and inter-state invoices with PDF download.",
      "url":"/tools/gst-invoice-generator",
      "applicationCategory":"UtilityApplication","operatingSystem":"Any",
      "datePublished":"2026-03-05","dateModified":"2026-03-05",
      "offers":{"@type":"Offer","price":"0","priceCurrency":"INR"},
      "author":{"@type":"Person","@id":"/#team","name":"CA & CS Patron Accounting Team","jobTitle":"Chartered Accountants & Company Secretaries","url":"/contact-page","sameAs":["https://www.linkedin.com/company/patron-accounting"],"hasCredential":[{"@type":"EducationalOccupationalCredential","credentialCategory":"Professional Certification","name":"Chartered Accountant (CA)","recognizedBy":{"@type":"Organization","name":"Institute of Chartered Accountants of India","sameAs":"https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"}}]},
      "publisher":{"@type":"Organization","name":"Patron Accounting LLP","url":"/","logo":{"@type":"ImageObject","url":"/logo.png"}},
      "provider":{"@id":"/#organization"}
    }
    </script>
<script type="application/ld+json">
    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"/"},{"@type":"ListItem","position":2,"name":"Free Tools","item":"/tools/"},{"@type":"ListItem","position":3,"name":"GST Invoice Generator","item":"/tools/gst-invoice-generator"}]}
    </script>
<script type="application/ld+json">
    {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
      {"@type":"Question","name":"What mandatory fields must a GST invoice contain in India?","acceptedAnswer":{"@type":"Answer","text":"Under Rule 46 of CGST Rules 2017, a GST invoice must contain supplier name, address, GSTIN, unique sequential invoice number, date, recipient name, address, GSTIN for B2B, place of supply with state code, HSN or SAC codes, item description and quantity, taxable value, GST rates, CGST/SGST or IGST amounts, total value in figures and words, and authorised signature."}},
      {"@type":"Question","name":"What is the difference between a tax invoice and a bill of supply?","acceptedAnswer":{"@type":"Answer","text":"A tax invoice is issued by registered taxpayers for taxable supplies and includes GST breakdowns enabling ITC claims. A bill of supply is issued when the supplier cannot charge GST, either under the composition scheme or for exempt supplies. Bills of supply do not show tax amounts separately. Our generator creates both formats based on your selection."}},
      {"@type":"Question","name":"When should I use CGST/SGST versus IGST on my invoice?","acceptedAnswer":{"@type":"Answer","text":"Use CGST plus SGST when supplier and place of supply are in the same state, called intra-state supply. Each component equals half the total GST rate. Use IGST when they are in different states, called inter-state supply, or for exports. IGST equals the full GST rate. Place of supply rules under IGST Act 2017 determine which tax applies."}},
      {"@type":"Question","name":"Is it mandatory to mention HSN/SAC codes on GST invoices?","acceptedAnswer":{"@type":"Answer","text":"Yes, per CGST Notification 78/2020 effective April 2021, HSN codes for goods and SAC codes for services are mandatory. Businesses with turnover up to five crore use 4-digit codes on B2B invoices. Above five crore must use 6-digit codes on all invoices. For imports and exports, 8-digit HSN codes are compulsory regardless of turnover."}},
      {"@type":"Question","name":"What is the time limit for issuing a GST invoice in India?","acceptedAnswer":{"@type":"Answer","text":"For goods, issue the invoice on or before the date of removal or delivery. For services, issue within 30 days from the date of supply. Banking and financial services have 45 days. For advance payments received for services, issue a receipt voucher at the time of receipt. Late issuance affects time of supply determination under CGST Act."}},
      {"@type":"Question","name":"What is e-invoicing under GST and who needs to comply?","acceptedAnswer":{"@type":"Answer","text":"E-invoicing is electronic generation and validation of invoices through the GST Invoice Registration Portal. As of 2026, businesses with annual aggregate turnover exceeding five crore rupees must comply. The system generates an Invoice Reference Number and QR code per invoice. Non-compliance results in penalties and recipient losing ITC eligibility."}},
      {"@type":"Question","name":"Can I issue a GST invoice without the recipient GSTIN?","acceptedAnswer":{"@type":"Answer","text":"Yes, for B2C transactions where the recipient is unregistered, GSTIN is not required. However, if invoice value exceeds fifty thousand rupees, recipient name, address, and state with state code are mandatory. For B2B transactions between registered persons, the recipient GSTIN is always mandatory to enable Input Tax Credit claims."}},
      {"@type":"Question","name":"What is the correct format for a GST invoice number?","acceptedAnswer":{"@type":"Answer","text":"A GST invoice number must be unique, sequential within a financial year, and can contain alphabets, numerals, hyphens, and slashes. Maximum length is 16 characters. Numbers must not repeat across financial years. Common formats include INV/2025-26/001 or PA-001-2526. The numbering series should restart at the beginning of each financial year."}},
      {"@type":"Question","name":"What are the penalties for not issuing a proper GST invoice?","acceptedAnswer":{"@type":"Answer","text":"Under Section 122 of CGST Act 2017, failure to issue a proper invoice attracts a penalty of ten thousand rupees or the tax amount involved, whichever is higher. The recipient may lose their right to claim Input Tax Credit. Incorrect invoices also trigger demand notices during GST audits and assessments under Sections 73 and 74."}},
      {"@type":"Question","name":"How many copies of a GST invoice are required?","acceptedAnswer":{"@type":"Answer","text":"For goods, three copies: original for recipient, duplicate for transporter, triplicate for supplier records. For services, two copies: original for recipient and duplicate for supplier. Our generator creates a professional PDF that you can print in the required number of copies as needed for your business records."}},
      {"@type":"Question","name":"Can I include multiple GST rates in a single invoice?","acceptedAnswer":{"@type":"Answer","text":"Yes, a single GST invoice can include items with different GST rates. The tax calculation must be shown separately for each rate. The invoice should display taxable value, GST rate, and tax amount for each line item. Total CGST, SGST, and IGST must appear separately in the summary. Our generator handles multiple rates automatically."}},
      {"@type":"Question","name":"Is a digital signature required on a GST invoice?","acceptedAnswer":{"@type":"Answer","text":"A GST invoice must be signed or verified by the supplier or authorised representative. The signature can be handwritten or digital per the Information Technology Act 2000. For e-invoices, digital signature is embedded via the Invoice Registration Portal. Computer-generated invoices with authentication codes are also accepted under GST rules."}}
    ]}
    </script>
@endsection

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        :root{--primary:#1B4D3E;--primary-light:#2A7A5F;--primary-dark:#0F2E25;--accent:#F59E0B;--accent-light:#FCD34D;--surface:#FAFAF8;--surface-alt:#F0EFEB;--card:#FFFFFF;--text:#1A1A1A;--text-secondary:#555555;--text-muted:#888888;--border:#E5E5E0;--success:#059669;--info:#0EA5E9;--danger:#DC2626;--radius:12px;--radius-lg:20px;--shadow-sm:0 1px 3px rgba(0,0,0,.06);--shadow-md:0 4px 16px rgba(0,0,0,.08);--shadow-lg:0 8px 32px rgba(0,0,0,.1);--font-body:'DM Sans',sans-serif;--font-mono:'Space Mono',monospace}
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}html{scroll-behavior:smooth}
        body{font-family:var(--font-body);background:var(--surface);color:var(--text);line-height:1.65;-webkit-font-smoothing:antialiased}
        .toc-nav{background:var(--primary-dark);position:sticky;top:0;z-index:100;overflow-x:auto;white-space:nowrap;box-shadow:0 2px 8px rgba(0,0,0,.15)}
        .toc-nav-inner{max-width:1200px;margin:0 auto;padding:0 20px;display:flex}
        .toc-nav a{color:rgba(255,255,255,.75);text-decoration:none;font-size:13px;font-weight:500;padding:12px 16px;border-bottom:2px solid transparent;display:inline-block;transition:all .2s}
        .toc-nav a:hover,.toc-nav a.active{color:#fff;border-bottom-color:var(--accent)}
        .breadcrumb{max-width:1200px;margin:0 auto;padding:16px 20px 0;font-size:13px;color:var(--text-muted)}
        .breadcrumb a{color:var(--primary-light);text-decoration:none}.breadcrumb a:hover{text-decoration:underline}.breadcrumb span{margin:0 6px}
        .hero{max-width:1200px;margin:0 auto;padding:32px 20px 24px}
        .hero-meta{display:flex;flex-wrap:wrap;align-items:center;gap:12px;margin-bottom:16px}
        .badge-updated{background:var(--primary);color:#fff;font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px}
        .author-byline{font-size:13px;color:var(--text-secondary)}.author-byline strong{color:var(--primary);font-weight:600}
        .hero h1{font-size:clamp(28px,5vw,42px);font-weight:700;color:var(--primary-dark);line-height:1.2;margin-bottom:16px}
        .hero h1 em{color:var(--accent);font-style:normal}
        .tldr{background:var(--card);border-left:4px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;padding:20px 24px;margin:0 auto 32px;max-width:1200px;box-shadow:var(--shadow-sm)}
        .tldr-label{font-family:var(--font-mono);font-size:12px;font-weight:700;color:var(--accent);text-transform:uppercase;letter-spacing:1px;margin-bottom:8px}
        .tldr p{font-size:15px;color:var(--text-secondary);line-height:1.7}
        .main-layout{max-width:1200px;margin:0 auto;padding:0 20px 40px;display:grid;grid-template-columns:1fr;gap:32px}
        @media(min-width:900px){.main-layout{grid-template-columns:1fr 320px;gap:40px}}
        .content-col{min-width:0}.sidebar-col{min-width:0}

        /* INVOICE FORM CARD */
        .inv-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);padding:32px;margin-bottom:40px;border:1px solid var(--border)}
        .inv-card h2{font-size:22px;font-weight:700;color:var(--primary-dark);margin-bottom:20px}
        .sec-title{font-size:14px;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:.5px;margin:24px 0 12px;padding-bottom:6px;border-bottom:2px solid var(--accent)}
        .sec-title:first-of-type{margin-top:0}
        .form-row{display:grid;grid-template-columns:1fr;gap:12px;margin-bottom:12px}
        @media(min-width:600px){.fr2{grid-template-columns:1fr 1fr}.fr3{grid-template-columns:1fr 1fr 1fr}.fr4{grid-template-columns:1fr 1fr 1fr 1fr}}
        .form-group label{display:block;font-size:11px;font-weight:600;color:var(--text-secondary);margin-bottom:3px;text-transform:uppercase;letter-spacing:.3px}
        .form-group input,.form-group select,.form-group textarea{width:100%;padding:9px 12px;border:2px solid var(--border);border-radius:8px;font-family:var(--font-body);font-size:14px;color:var(--text);background:var(--surface);outline:none;transition:border-color .2s}
        .form-group input:focus,.form-group select:focus,.form-group textarea:focus{border-color:var(--primary)}
        .form-group textarea{resize:vertical;min-height:50px}
        .form-group input[type="number"]{font-family:var(--font-mono);font-weight:600}
        .toggle-group{display:flex;background:var(--surface-alt);border-radius:var(--radius);padding:4px;gap:4px;margin-bottom:16px}
        .toggle-btn{flex:1;padding:10px 14px;border:none;border-radius:8px;font-family:var(--font-body);font-size:13px;font-weight:600;color:var(--text-muted);background:transparent;cursor:pointer;transition:all .25s}
        .toggle-btn *{pointer-events:none}
        .toggle-btn.active{background:var(--card);color:var(--primary);box-shadow:var(--shadow-sm)}

        /* Line items table */
        .items-table{width:100%;border-collapse:collapse;font-size:13px;margin:12px 0}
        .items-table thead th{background:var(--primary);color:#fff;padding:10px 8px;text-align:left;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.3px}
        .items-table thead th:first-child{border-radius:8px 0 0 0}.items-table thead th:last-child{border-radius:0 8px 0 0}
        .items-table tbody td{padding:6px 4px;border-bottom:1px solid var(--border);vertical-align:middle}
        .items-table tbody input,.items-table tbody select{padding:7px 8px;font-size:13px;border:1px solid var(--border);border-radius:6px;background:var(--surface)}
        .items-table tbody input:focus,.items-table tbody select:focus{border-color:var(--primary);outline:none}
        .items-table .col-desc{width:28%}.items-table .col-hsn{width:12%}.items-table .col-qty{width:8%}.items-table .col-unit{width:8%}
        .items-table .col-rate{width:12%}.items-table .col-gst{width:10%}.items-table .col-amt{width:14%}.items-table .col-act{width:8%}
        .items-table .row-total{font-family:var(--font-mono);font-weight:700;font-size:13px;color:var(--primary-dark);text-align:right;padding-right:8px}
        .btn-add{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border:2px dashed var(--primary-light);border-radius:8px;background:transparent;color:var(--primary-light);font-family:var(--font-body);font-size:13px;font-weight:600;cursor:pointer;transition:all .2s;margin-top:4px}
        .btn-add:hover{background:rgba(27,77,62,.05);border-color:var(--primary)}
        .btn-del{background:none;border:none;color:var(--danger);cursor:pointer;font-size:18px;font-weight:700;padding:4px 8px;border-radius:4px;transition:background .2s}
        .btn-del:hover{background:#FEE2E2}

        /* Summary */
        .inv-summary{background:var(--surface);border-radius:var(--radius);padding:16px 20px;margin-top:16px}
        .sum-row{display:flex;justify-content:space-between;padding:6px 0;font-size:14px;color:var(--text-secondary)}
        .sum-row:not(:last-child){border-bottom:1px dashed var(--border)}
        .sum-row.total{font-weight:700;font-size:16px;color:var(--primary-dark);border-top:2px solid var(--primary);padding-top:10px;margin-top:4px}
        .sum-row .val{font-family:var(--font-mono);font-weight:700}
        .words-row{font-size:12px;color:var(--text-muted);font-style:italic;margin-top:8px;text-align:right}

        /* Action buttons */
        .btn-primary{width:100%;padding:14px;background:var(--primary);color:#fff;border:none;border-radius:var(--radius);font-family:var(--font-body);font-size:16px;font-weight:700;cursor:pointer;transition:background .2s,transform .1s;margin-top:16px}
        .btn-primary:hover{background:var(--primary-light)}.btn-primary:active{transform:scale(.98)}
        .btn-secondary{display:inline-flex;align-items:center;gap:6px;margin-top:10px;padding:10px 20px;border:2px solid var(--primary);border-radius:var(--radius);background:var(--card);color:var(--primary);font-family:var(--font-body);font-size:14px;font-weight:600;cursor:pointer;transition:all .2s}
        .btn-secondary:hover{background:var(--primary);color:#fff}
        .btn-reset{display:inline-flex;align-items:center;gap:6px;margin-top:10px;padding:8px 16px;border:1px solid var(--border);border-radius:8px;background:var(--card);color:var(--text-muted);font-family:var(--font-body);font-size:13px;font-weight:500;cursor:pointer;transition:all .2s;margin-left:8px}
        .btn-reset:hover{border-color:var(--danger);color:var(--danger)}
        .action-row{display:flex;flex-wrap:wrap;gap:8px;align-items:center;margin-top:16px}

        /* INVOICE PREVIEW */
        .preview-overlay{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.6);z-index:200;overflow-y:auto;padding:20px}
        .preview-overlay.visible{display:flex;justify-content:center;align-items:flex-start}
        .preview-container{background:#fff;width:100%;max-width:800px;margin:20px auto;border-radius:var(--radius-lg);box-shadow:0 20px 60px rgba(0,0,0,.3);position:relative}
        .preview-toolbar{position:sticky;top:0;background:var(--primary-dark);color:#fff;padding:12px 24px;border-radius:var(--radius-lg) var(--radius-lg) 0 0;display:flex;justify-content:space-between;align-items:center;z-index:10}
        .preview-toolbar button{padding:8px 20px;border:none;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:600;cursor:pointer;transition:all .2s}
        .btn-print{background:var(--accent);color:var(--primary-dark)}.btn-print:hover{background:var(--accent-light)}
        .btn-close-preview{background:rgba(255,255,255,.15);color:#fff}.btn-close-preview:hover{background:rgba(255,255,255,.25)}

        /* Invoice print layout */
        .invoice-page{padding:40px;font-family:var(--font-body);color:#1A1A1A;font-size:13px;line-height:1.5}
        .inv-header{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:24px;padding-bottom:16px;border-bottom:3px solid var(--primary)}
        .inv-header-left h2{font-size:24px;color:var(--primary-dark);margin-bottom:4px;font-weight:700}
        .inv-header-right{text-align:right}
        .inv-label{font-size:11px;color:var(--text-muted);text-transform:uppercase;letter-spacing:.5px;font-weight:600}
        .inv-val{font-size:14px;font-weight:600;color:var(--text)}
        .inv-party-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:24px}
        .inv-party{padding:16px;border:1px solid var(--border);border-radius:8px}
        .inv-party h4{font-size:11px;color:var(--primary);text-transform:uppercase;letter-spacing:.5px;margin-bottom:8px;font-weight:700}
        .inv-party p{font-size:13px;margin-bottom:2px;color:var(--text-secondary)}
        .inv-party p strong{color:var(--text)}
        .inv-items-table{width:100%;border-collapse:collapse;margin-bottom:20px}
        .inv-items-table thead th{background:var(--primary);color:#fff;padding:10px 12px;font-size:11px;text-transform:uppercase;text-align:left;font-weight:600}
        .inv-items-table tbody td{padding:10px 12px;border-bottom:1px solid var(--border);font-size:13px}
        .inv-items-table tbody tr:nth-child(even){background:#F9F9F7}
        .inv-items-table tfoot td{padding:8px 12px;font-weight:700;border-top:2px solid var(--primary)}
        .inv-summary-box{display:flex;justify-content:flex-end;margin-bottom:20px}
        .inv-summary-inner{width:320px}
        .inv-sum-r{display:flex;justify-content:space-between;padding:5px 0;font-size:13px}
        .inv-sum-r.total-final{font-size:16px;font-weight:700;color:var(--primary-dark);border-top:2px solid var(--primary);padding-top:8px;margin-top:4px}
        .inv-words{font-size:12px;color:var(--text-secondary);margin-bottom:20px;padding:10px 16px;background:var(--surface);border-radius:8px;font-style:italic}
        .inv-footer{display:flex;justify-content:space-between;align-items:flex-end;padding-top:16px;border-top:1px solid var(--border);margin-top:24px}
        .inv-footer-left{font-size:12px;color:var(--text-muted);max-width:400px}
        .inv-footer-right{text-align:right}
        .inv-footer-right .sig-line{width:180px;border-top:1px solid var(--text-muted);margin-bottom:4px;margin-left:auto}
        .inv-footer-right p{font-size:12px;color:var(--text-muted)}

        @media print{
            body *{visibility:hidden}
            .invoice-page,.invoice-page *{visibility:visible}
            .invoice-page{position:absolute;left:0;top:0;width:100%;padding:20px}
            .preview-toolbar{display:none}
        }

        /* CONTENT SECTIONS */
        .content-section{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:32px;margin-bottom:32px;border:1px solid var(--border)}
        .content-section h2{font-size:24px;font-weight:700;color:var(--primary-dark);margin-bottom:16px;line-height:1.3}
        .content-section h3{font-size:18px;font-weight:700;color:var(--primary-dark);margin:20px 0 10px}
        .content-section p{font-size:15px;color:var(--text-secondary);margin-bottom:14px;line-height:1.75}
        .content-section a{color:var(--primary-light);text-decoration:underline;text-underline-offset:2px}
        .content-section a:hover{color:var(--primary)}
        .rate-table{width:100%;border-collapse:collapse;margin:16px 0;font-size:14px}
        .rate-table thead th{background:var(--primary);color:#fff;padding:12px 16px;text-align:left;font-weight:600;font-size:13px;text-transform:uppercase}
        .rate-table thead th:first-child{border-radius:var(--radius) 0 0 0}.rate-table thead th:last-child{border-radius:0 var(--radius) 0 0}
        .rate-table tbody td{padding:12px 16px;border-bottom:1px solid var(--border);color:var(--text-secondary)}
        .rate-table tbody tr:nth-child(even){background:var(--surface)}
        .callout{background:#EFF6FF;border-left:4px solid var(--info);border-radius:0 var(--radius) var(--radius) 0;padding:16px 20px;margin:16px 0}
        .callout p{color:#1E40AF;margin-bottom:0;font-size:14px}.callout strong{color:#1E3A8A}
        .callout.warn{background:#FFFBEB;border-left-color:var(--accent)}.callout.warn p{color:#92400E}.callout.warn strong{color:#78350F}

        /* FAQ */
        .faq-item{background:var(--surface);border-radius:var(--radius);margin-bottom:10px;border:1px solid var(--border);overflow:hidden;transition:box-shadow .2s}
        .faq-item:hover{box-shadow:var(--shadow-sm)}
        .faq-question{display:flex;justify-content:space-between;align-items:center;width:100%;padding:16px 20px;border:none;background:none;font-family:var(--font-body);font-size:15px;font-weight:600;color:var(--text);cursor:pointer;text-align:left;line-height:1.4;gap:12px}
        .faq-question *{pointer-events:none}
        .faq-icon{flex-shrink:0;width:24px;height:24px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;transition:transform .3s}
        .faq-item.open .faq-icon{transform:rotate(45deg)}
        .faq-answer{max-height:0;overflow:hidden;transition:max-height .35s ease}
        .faq-item.open .faq-answer{max-height:500px}
        .faq-answer-inner{padding:0 20px 16px;font-size:14px;color:var(--text-secondary);line-height:1.75}

        /* SIDEBAR */
        .sidebar-card{background:var(--card);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:24px;margin-bottom:24px;border:1px solid var(--border)}
        .sidebar-card h3{font-size:16px;font-weight:700;color:var(--primary-dark);margin-bottom:14px}
        .sidebar-link{display:block;padding:10px 14px;border-radius:8px;font-size:14px;font-weight:500;color:var(--text-secondary);text-decoration:none;transition:all .2s;margin-bottom:4px}
        .sidebar-link:hover{background:var(--surface-alt);color:var(--primary)}
        .sidebar-link .arrow{float:right;color:var(--text-muted)}
        .cta-card{background:linear-gradient(135deg,var(--primary-dark) 0%,var(--primary) 100%);color:#fff;border-radius:var(--radius-lg);padding:28px 24px;margin-bottom:24px;text-align:center}
        .cta-card h3{color:#fff;font-size:18px;margin-bottom:10px}
        .cta-card p{font-size:14px;color:rgba(255,255,255,.85);margin-bottom:16px;line-height:1.6}
        .cta-btn{display:inline-block;padding:12px 28px;background:var(--accent);color:var(--primary-dark);font-weight:700;font-size:14px;border-radius:8px;text-decoration:none;transition:background .2s}
        .cta-btn:hover{background:var(--accent-light)}
        .office-strip{background:var(--primary-dark);text-align:center;padding:20px;color:rgba(255,255,255,.7);font-size:14px}
        .office-strip .offices{font-weight:600;color:#fff;margin-bottom:4px}
        .office-strip .trust{color:var(--accent);font-weight:600}
        .footer{background:var(--primary-dark);border-top:1px solid rgba(255,255,255,.1);text-align:center;padding:16px 20px;font-size:13px;color:rgba(255,255,255,.5)}
        .footer a{color:rgba(255,255,255,.7);text-decoration:none}.footer a:hover{color:#fff}
        .noscript-box{background:#FEE2E2;border:2px solid #DC2626;border-radius:var(--radius);padding:20px;text-align:center;color:#991B1B;font-weight:600}
        @media(max-width:899px){.hero h1{font-size:26px}.inv-card{padding:20px}.content-section{padding:20px}.toc-nav a{padding:10px 12px;font-size:12px}.items-table{font-size:12px}.items-table thead th{padding:8px 4px;font-size:10px}.items-table tbody td{padding:4px 2px}.inv-party-grid{grid-template-columns:1fr}}
    
/* ====== RESPONSIVE - SIDEBAR STACK (max 899px) ====== */
@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}

/* ====== RESPONSIVE - TABLET (max 1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE - SMALL TABLET (max 899px) ====== */
@media(max-width:899px){
.hero h1{font-size:26px}
.calc-card{padding:20px}
.content-section{padding:20px}
.toc-nav a{padding:10px 12px;font-size:12px}
.toggle-group{flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:0;padding:10px 12px;font-size:13px}
.toggle-btn small{display:none}
.rate-table thead th{padding:10px 12px;font-size:11px}
.rate-table tbody td{padding:10px 12px;font-size:13px}
.result-value{font-size:18px}
.sidebar-col{order:2}
.formula-box{padding:16px 18px;font-size:13px}
}

/* ====== RESPONSIVE - MOBILE (max 480px) ====== */
@media(max-width:480px){
.hero{padding:20px 14px 16px}
.hero h1{font-size:22px}
.hero-meta{gap:8px}
.badge-updated{font-size:11px;padding:3px 10px}
.author-byline{font-size:12px}
.tldr{padding:16px 18px;margin-left:14px;margin-right:14px}
.tldr p{font-size:14px}
.main-layout{padding:0 14px 24px;gap:24px}
.calc-card{padding:16px;margin-bottom:24px}
.calc-card h2{font-size:19px;margin-bottom:16px}
.content-section{padding:16px;margin-bottom:24px}
.content-section h2{font-size:20px}
.content-section h3{font-size:16px}
.content-section p{font-size:14px}
.toggle-group{flex-direction:column}
.toggle-btn{padding:12px 14px;font-size:14px;text-align:center}
.toggle-btn small{display:inline}
.calc-row{gap:14px;margin-bottom:14px}
.form-group label{font-size:12px}
.form-group input,.form-group select{padding:10px 14px;font-size:15px}
.form-group input[type="number"]{font-size:16px}
.btn-calculate{padding:12px;font-size:15px}
.rate-table{font-size:12px}
.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}
.rate-table tbody td{padding:8px 10px;font-size:12px}
.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}
.callout{padding:14px 16px}
.callout p{font-size:13px}
.faq-question{padding:14px 16px;font-size:14px}
.faq-answer-inner{padding:0 16px 14px;font-size:13px}
.faq-icon{width:22px;height:22px;font-size:14px}
.sidebar-card{padding:20px}
.sidebar-card h3{font-size:15px}
.sidebar-link{padding:8px 12px;font-size:13px}
.cta-card{padding:22px 20px}
.cta-card h3{font-size:16px}
.cta-card p{font-size:13px}
.cta-btn{padding:10px 24px;font-size:13px}
.breadcrumb{font-size:12px;padding:12px 14px 0}
.toc-nav a{padding:8px 10px;font-size:11px}
.result-value{font-size:18px}
}

/* ====== RESPONSIVE - VERY SMALL (max 360px) ====== */
@media(max-width:360px){
.hero h1{font-size:20px}
.calc-card{padding:14px}
.content-section{padding:14px}
.content-section h2{font-size:18px}
.rate-table thead th{font-size:9px;padding:6px 8px}
.rate-table tbody td{font-size:11px;padding:6px 8px}
.toggle-btn{font-size:13px;padding:10px 12px}
}
</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
    <a href="#generator">Generator</a>
    <a href="#how-to-use">How to Use</a>
    <a href="#mandatory-fields">Mandatory Fields</a>
    <a href="#invoice-types">Invoice Types</a>
    <a href="#compliance">Compliance</a>
    <a href="#faqs">FAQs</a>
</div></nav>

{{-- <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>&rsaquo;</span>
    <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
    GST Invoice Generator
</nav> --}}

<header class="hero" id="generator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: March 2026</span>
        <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
    </div>
    <h1>GST Invoice Generator &mdash; <em>Free Online Invoice Maker</em> for Indian Businesses</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This GST Invoice Generator creates fully compliant tax invoices with all 16 mandatory fields required under Rule 46 of the CGST Rules, 2017. It automatically calculates CGST, SGST, or IGST based on your transaction type, supports HSN/SAC codes, multiple line items with different GST rates, and generates a professional PDF you can download and print. Built and reviewed by a practising Chartered Accountant.</p>
</div>

<div class="main-layout">
<div class="content-col">

<!-- ====== INVOICE GENERATOR ====== -->
<div class="inv-card">
    <h2>Create GST Invoice</h2>
    <noscript><div class="noscript-box">This invoice generator requires JavaScript. Please enable it or use our <a href="/gst-returns">GST filing services</a>.</div></noscript>

    <!-- Transaction Type -->
    <div class="sec-title">Transaction Type</div>
    <div class="toggle-group">
        <button type="button" class="toggle-btn active" data-value="intra" onclick="setTxn(this)">Intra-State<br><small style="font-weight:400;font-size:11px;opacity:.7">CGST + SGST</small></button>
        <button type="button" class="toggle-btn" data-value="inter" onclick="setTxn(this)">Inter-State<br><small style="font-weight:400;font-size:11px;opacity:.7">IGST</small></button>
    </div>

    <!-- Supplier Details -->
    <div class="sec-title">Supplier Details (Your Business)</div>
    <div class="form-row fr2">
        <div class="form-group"><label>Business Name *</label><input type="text" id="supName" placeholder="e.g. ABC Trading Co."></div>
        <div class="form-group"><label>GSTIN *</label><input type="text" id="supGSTIN" placeholder="e.g. 27AABCU9603R1ZM" maxlength="15" style="text-transform:uppercase"></div>
    </div>
    <div class="form-row fr2">
        <div class="form-group"><label>Address *</label><input type="text" id="supAddr" placeholder="Full address"></div>
        <div class="form-group"><label>State *</label>
            <select id="supState"><option value="">Select State</option></select>
        </div>
    </div>
    <div class="form-row fr2">
        <div class="form-group"><label>Phone</label><input type="text" id="supPhone" placeholder="e.g. 9876543210"></div>
        <div class="form-group"><label>Email</label><input type="email" id="supEmail" placeholder="e.g. info@abc.com"></div>
    </div>

    <!-- Buyer Details -->
    <div class="sec-title">Buyer / Recipient Details</div>
    <div class="form-row fr2">
        <div class="form-group"><label>Buyer Name *</label><input type="text" id="buyName" placeholder="e.g. XYZ Pvt Ltd"></div>
        <div class="form-group"><label>GSTIN (if registered)</label><input type="text" id="buyGSTIN" placeholder="Leave blank for B2C" maxlength="15" style="text-transform:uppercase"></div>
    </div>
    <div class="form-row fr2">
        <div class="form-group"><label>Address *</label><input type="text" id="buyAddr" placeholder="Full address"></div>
        <div class="form-group"><label>Place of Supply (State) *</label>
            <select id="buyState"><option value="">Select State</option></select>
        </div>
    </div>

    <!-- Invoice Details -->
    <div class="sec-title">Invoice Details</div>
    <div class="form-row fr3">
        <div class="form-group"><label>Invoice Number *</label><input type="text" id="invNo" placeholder="e.g. INV/2025-26/001"></div>
        <div class="form-group"><label>Invoice Date *</label><input type="date" id="invDate"></div>
        <div class="form-group"><label>Due Date</label><input type="date" id="dueDate"></div>
    </div>

    <!-- Line Items -->
    <div class="sec-title">Line Items</div>
    <div style="overflow-x:auto;">
    <table class="items-table" id="itemsTable">
        <thead><tr>
            <th class="col-desc">Description</th>
            <th class="col-hsn">HSN/SAC</th>
            <th class="col-qty">Qty</th>
            <th class="col-unit">Unit</th>
            <th class="col-rate">Rate (&#8377;)</th>
            <th class="col-gst">GST %</th>
            <th class="col-amt">Amount (&#8377;)</th>
            <th class="col-act"></th>
        </tr></thead>
        <tbody id="itemsBody"></tbody>
    </table>
    </div>
    <button class="btn-add" onclick="addItem()">+ Add Line Item</button>

    <!-- Summary -->
    <div class="inv-summary" id="summarySection">
        <div class="sum-row"><span>Subtotal (Taxable Value)</span><span class="val" id="sumSubtotal">&#8377;0.00</span></div>
        <div class="sum-row" id="sumCGSTRow"><span>CGST</span><span class="val" id="sumCGST">&#8377;0.00</span></div>
        <div class="sum-row" id="sumSGSTRow"><span>SGST</span><span class="val" id="sumSGST">&#8377;0.00</span></div>
        <div class="sum-row" id="sumIGSTRow" style="display:none"><span>IGST</span><span class="val" id="sumIGST">&#8377;0.00</span></div>
        <div class="sum-row total"><span>Total Invoice Value</span><span class="val" id="sumTotal">&#8377;0.00</span></div>
        <div class="words-row" id="sumWords"></div>
    </div>

    <!-- Notes -->
    <div class="sec-title">Additional Details</div>
    <div class="form-row fr2">
        <div class="form-group"><label>Notes / Bank Details</label><textarea id="invNotes" placeholder="e.g. Bank: SBI, A/c: 123456, IFSC: SBIN000123"></textarea></div>
        <div class="form-group"><label>Terms &amp; Conditions</label><textarea id="invTerms" placeholder="e.g. Payment due within 30 days. Interest at 18% p.a. on late payments."></textarea></div>
    </div>

    <!-- Actions -->
    <button class="btn-primary" onclick="generateInvoice()">&#128196; Generate Invoice &amp; Preview</button>
    <div class="action-row">
        <button class="btn-reset" onclick="resetForm()">&#8634; Reset Form</button>
    </div>
</div>

<!-- ====== HOW TO USE ====== -->
<section class="content-section" id="how-to-use">
    <h2>How to Create a GST Invoice Using This Tool</h2>
    <p>This free GST invoice generator is built for Indian businesses, freelancers, traders, and service providers. It creates invoices that comply with all mandatory requirements under Rule 46 of the <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act, 2017</a> and the <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">CBIC</a> guidelines.</p>
    <h3>Step 1: Select Transaction Type</h3>
    <p>Choose <strong>Intra-State</strong> if the supplier and buyer are in the same state &mdash; the tool will split GST into equal CGST and SGST components. Choose <strong>Inter-State</strong> if they are in different states &mdash; the full rate will be applied as IGST. This classification follows the place of supply rules under the <a href="https://www.indiacode.nic.in/handle/123456789/2246" target="_blank" rel="noopener">IGST Act, 2017</a>.</p>
    <h3>Step 2: Enter Supplier and Buyer Details</h3>
    <p>Fill in your business name, GSTIN, address, and state. Then enter the buyer's details. For B2B transactions, the buyer's GSTIN is mandatory to enable them to claim <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">Input Tax Credit</a>. For B2C transactions, the GSTIN field can be left blank.</p>
    <h3>Step 3: Add Line Items</h3>
    <p>Enter each product or service with its description, HSN or SAC code, quantity, unit price, and applicable GST rate. The tool automatically calculates the taxable value and GST for each line item, supporting multiple rates in a single invoice. Verify HSN/SAC codes using our <a href="/tools/hsn-sac-code-finder">HSN/SAC Code Finder</a> tool.</p>
    <h3>Step 4: Generate and Download</h3>
    <p>Click "Generate Invoice & Preview" to see a professional invoice layout. Print it directly or save as PDF using your browser's print-to-PDF feature. The generated invoice includes all 16 mandatory fields, amount in words, and space for an authorised signature.</p>
    <div class="callout">
        <p><strong>CA Tip:</strong> Always verify that your GSTIN is active on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal</a> before issuing invoices. Invoices from cancelled or suspended GSTINs are treated as invalid, and the recipient cannot claim ITC. The <a href="https://www.icai.org/post/gst-and-indirect-taxes-committee" target="_blank" rel="noopener">ICAI</a> recommends maintaining a master invoice template with pre-filled supplier details to avoid errors.</p>
    </div>
</section>

<!-- ====== MANDATORY FIELDS ====== -->
<section class="content-section" id="mandatory-fields">
    <h2>16 Mandatory Fields in a GST Tax Invoice</h2>
    <p>Under <a href="https://cbic-gst.gov.in/" target="_blank" rel="noopener">Rule 46 of the CGST Rules, 2017</a>, every tax invoice must contain the following fields. Our generator includes all of them:</p>
    <table class="rate-table">
        <thead><tr><th>#</th><th>Field</th><th>Description</th></tr></thead>
        <tbody>
            <tr><td>1</td><td><strong>Supplier Name</strong></td><td>Legal name of the registered person issuing the invoice</td></tr>
            <tr><td>2</td><td><strong>Supplier Address</strong></td><td>Registered place of business address</td></tr>
            <tr><td>3</td><td><strong>Supplier GSTIN</strong></td><td>15-digit GST Identification Number</td></tr>
            <tr><td>4</td><td><strong>Invoice Number</strong></td><td>Unique sequential number, max 16 chars, valid for one financial year</td></tr>
            <tr><td>5</td><td><strong>Invoice Date</strong></td><td>Date of issue of the invoice</td></tr>
            <tr><td>6</td><td><strong>Recipient Name</strong></td><td>Name of the buyer or recipient</td></tr>
            <tr><td>7</td><td><strong>Recipient GSTIN</strong></td><td>GSTIN of buyer (mandatory for B2B; optional for B2C)</td></tr>
            <tr><td>8</td><td><strong>Recipient Address</strong></td><td>Address of the buyer; mandatory if invoice > &#8377;50,000 for unregistered</td></tr>
            <tr><td>9</td><td><strong>Place of Supply</strong></td><td>State name with code &mdash; determines CGST/SGST vs IGST</td></tr>
            <tr><td>10</td><td><strong>HSN / SAC Code</strong></td><td>Product/service classification code per turnover rules</td></tr>
            <tr><td>11</td><td><strong>Item Description</strong></td><td>Description of goods or services supplied</td></tr>
            <tr><td>12</td><td><strong>Quantity &amp; Unit</strong></td><td>Number of units and UQC (Unique Quantity Code)</td></tr>
            <tr><td>13</td><td><strong>Taxable Value</strong></td><td>Value of supply before tax</td></tr>
            <tr><td>14</td><td><strong>Tax Rate &amp; Amount</strong></td><td>CGST, SGST, or IGST rate and amount for each item</td></tr>
            <tr><td>15</td><td><strong>Total Invoice Value</strong></td><td>Total amount payable including tax, in figures and words</td></tr>
            <tr><td>16</td><td><strong>Signature</strong></td><td>Authorised signatory (handwritten or digital per IT Act 2000)</td></tr>
        </tbody>
    </table>
    <div class="callout warn">
        <p><strong>Note:</strong> For reverse charge supplies, the invoice must also mention "Tax payable under reverse charge" prominently. For exports, mention "Supply meant for export on payment of IGST" or "under bond/LUT without payment of IGST". Non-compliant invoices attract penalties under <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">Section 122 of the CGST Act</a>.</p>
    </div>
</section>

<!-- ====== INVOICE TYPES ====== -->
<section class="content-section" id="invoice-types">
    <h2>Types of GST Invoices in India</h2>
    <p>The GST framework prescribes different document types depending on the nature of supply. Understanding which document to issue is critical for compliance and for the recipient's ability to claim Input Tax Credit.</p>
    <h3>Tax Invoice</h3>
    <p>The standard invoice issued by registered suppliers for taxable supplies of goods or services. It contains all mandatory fields including GST breakdowns. This is the only document that enables the recipient to claim ITC. Our generator creates this format by default.</p>
    <h3>Bill of Supply</h3>
    <p>Issued when GST cannot be charged separately &mdash; either by composition scheme dealers or for exempt/nil-rated supplies. It contains the same details as a tax invoice except GST rate and tax amount columns. No ITC can be claimed on bills of supply.</p>
    <h3>Debit Note</h3>
    <p>Issued by the supplier when the taxable value or tax charged in the original invoice needs to be increased &mdash; for example, due to a price revision upward. The debit note must reference the original invoice number.</p>
    <h3>Credit Note</h3>
    <p>Issued when the taxable value or tax needs to be reduced &mdash; for example, due to sales returns, deficiency in services, or price revision downward. Credit notes must be issued before 30th November of the following financial year or the date of filing the annual return, whichever is earlier.</p>
    <h3>E-Invoice</h3>
    <p>For businesses with turnover exceeding &#8377;5 crore, e-invoicing through the <a href="https://einvoice1.gst.gov.in/" target="_blank" rel="noopener">Invoice Registration Portal (IRP)</a> is mandatory. The IRP generates an Invoice Reference Number (IRN) and QR code that must appear on the invoice. Our tool generates the base invoice data; for e-invoicing, this data must be uploaded to the IRP to obtain the IRN.</p>
</section>

<!-- ====== COMPLIANCE ====== -->
<section class="content-section" id="compliance">
    <h2>GST Invoice Compliance and Best Practices</h2>
    <h3>Time Limits for Issuing Invoices</h3>
    <p>The <a href="https://www.indiacode.nic.in/handle/123456789/2247" target="_blank" rel="noopener">CGST Act</a> prescribes strict timelines: for goods, the invoice must be issued at or before the time of removal/delivery; for services, within 30 days from the date of supply (45 days for banking and financial services). Late issuance affects the time of supply, potentially creating interest liability.</p>
    <h3>Invoice Numbering Rules</h3>
    <p>Invoice numbers must be unique, sequential, and contain no more than 16 characters. They can include alphabets, numerals, hyphens, and slashes. The series must be specific to a financial year. Businesses with multiple branches may use different series per branch, each registered as a separate GSTIN or as an additional place of business on the <a href="https://www.gst.gov.in/" target="_blank" rel="noopener">GST Portal</a>.</p>
    <h3>Record Retention</h3>
    <p>Under Section 36 of the CGST Act, invoices and related records must be retained for at least 6 years from the due date of filing the annual return for the relevant year. The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a> recommends maintaining both physical and digital copies in a systematic filing system.</p>
    <div class="callout">
        <p><strong>Need Professional Invoicing Help?</strong> Patron Accounting helps businesses set up compliant invoicing systems, GST registration, and monthly return filing across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20setting%20up%20GST%20compliant%20invoicing%20for%20my%20business." target="_blank" rel="noopener">Get expert GST invoicing help &rarr;</a></p>
    </div>
</section>

<!-- ====== FAQ ====== -->
<section class="content-section" id="faqs">
    <h2>Frequently Asked Questions About GST Invoices</h2>
    <div id="faqContainer"></div>
</section>

</div>

<!-- ====== SIDEBAR ====== -->
<aside class="sidebar-col">
    <div class="cta-card"><h3>Need GST Help?</h3><p>Our CAs handle GST registration, invoicing setup, return filing, and audits for businesses across India.</p><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20GST%20compliance." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a></div>
    <div class="sidebar-card"><h3>Related Free Tools</h3>
        <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
        <a href="/tools/hsn-sac-code-finder" class="sidebar-link">HSN/SAC Code Finder <span class="arrow">&rarr;</span></a>
        <a href="/tools/tds-rate-finder" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a>
        <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">&rarr;</span></a>
    </div>
    <div class="sidebar-card"><h3>GST Services</h3>
        <a href="/gst-registration" class="sidebar-link">GST Registration <span class="arrow">&rarr;</span></a>
        <a href="/gst-returns" class="sidebar-link">GST Returns Filing <span class="arrow">&rarr;</span></a>
        <a href="/gst-audit" class="sidebar-link">GST Audit Services <span class="arrow">&rarr;</span></a>
        <a href="/gst-notice" class="sidebar-link">GST Notice Assistance <span class="arrow">&rarr;</span></a>
    </div>
    <div class="sidebar-card"><h3>From the Blog</h3>
        <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance for Companies <span class="arrow">&rarr;</span></a>
        <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
    </div>
</aside>
</div>

<!-- Invoice Preview Overlay -->
<div class="preview-overlay" id="previewOverlay">
    <div class="preview-container">
        <div class="preview-toolbar">
            <span style="font-weight:700">Invoice Preview</span>
            <div style="display:flex;gap:8px">
                <button class="btn-print" onclick="window.print()">&#128424; Print / Save PDF</button>
                <button class="btn-close-preview" onclick="closePreview()">&#10005; Close</button>
            </div>
        </div>
        <div class="invoice-page" id="invoicePage"></div>
    </div>
</div><span class="trust">25,000+ Businesses Trust Us</span></div>

<script>
// Indian States
const states=[{c:"01",n:"Jammu & Kashmir"},{c:"02",n:"Himachal Pradesh"},{c:"03",n:"Punjab"},{c:"04",n:"Chandigarh"},{c:"05",n:"Uttarakhand"},{c:"06",n:"Haryana"},{c:"07",n:"Delhi"},{c:"08",n:"Rajasthan"},{c:"09",n:"Uttar Pradesh"},{c:"10",n:"Bihar"},{c:"11",n:"Sikkim"},{c:"12",n:"Arunachal Pradesh"},{c:"13",n:"Nagaland"},{c:"14",n:"Manipur"},{c:"15",n:"Mizoram"},{c:"16",n:"Tripura"},{c:"17",n:"Meghalaya"},{c:"18",n:"Assam"},{c:"19",n:"West Bengal"},{c:"20",n:"Jharkhand"},{c:"21",n:"Odisha"},{c:"22",n:"Chhattisgarh"},{c:"23",n:"Madhya Pradesh"},{c:"24",n:"Gujarat"},{c:"26",n:"Dadra & Nagar Haveli and Daman & Diu"},{c:"27",n:"Maharashtra"},{c:"28",n:"Andhra Pradesh"},{c:"29",n:"Karnataka"},{c:"30",n:"Goa"},{c:"31",n:"Lakshadweep"},{c:"32",n:"Kerala"},{c:"33",n:"Tamil Nadu"},{c:"34",n:"Puducherry"},{c:"35",n:"Andaman & Nicobar"},{c:"36",n:"Telangana"},{c:"37",n:"Andhra Pradesh (New)"},{c:"38",n:"Ladakh"}];

function populateStates(){
    ['supState','buyState'].forEach(id=>{
        const sel=document.getElementById(id);
        states.forEach(s=>{const o=document.createElement('option');o.value=s.c+'-'+s.n;o.textContent=s.c+' - '+s.n;sel.appendChild(o);});
    });
}
populateStates();

let txnType='intra';
let itemCount=0;

function setTxn(btn){
    txnType=btn.dataset.value;
    btn.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('sumCGSTRow').style.display=txnType==='intra'?'':'none';
    document.getElementById('sumSGSTRow').style.display=txnType==='intra'?'':'none';
    document.getElementById('sumIGSTRow').style.display=txnType==='inter'?'':'none';
    recalculate();
}

function addItem(){
    itemCount++;
    const id=itemCount;
    const tr=document.createElement('tr');
    tr.id='item-'+id;
    tr.innerHTML=`
        <td><input type="text" placeholder="Item description" onchange="recalculate()"></td>
        <td><input type="text" placeholder="HSN/SAC" style="font-family:var(--font-mono)"></td>
        <td><input type="number" value="1" min="0" step="1" onchange="recalculate()" oninput="recalculate()"></td>
        <td><select><option>Nos</option><option>Kg</option><option>Ltr</option><option>Mtr</option><option>Sqm</option><option>Set</option><option>Hrs</option><option>Pcs</option></select></td>
        <td><input type="number" value="0" min="0" step="0.01" onchange="recalculate()" oninput="recalculate()"></td>
        <td><select onchange="recalculate()"><option value="0">0%</option><option value="5">5%</option><option value="12">12%</option><option value="18" selected>18%</option><option value="28">28%</option><option value="3">3%</option><option value="0.25">0.25%</option></select></td>
        <td class="row-total">\u20B90.00</td>
        <td><button class="btn-del" onclick="removeItem(${id})" title="Remove">\u00D7</button></td>
    `;
    document.getElementById('itemsBody').appendChild(tr);
    recalculate();
}

function removeItem(id){
    const row=document.getElementById('item-'+id);
    if(row)row.remove();
    recalculate();
}

function fmt(n){return '\u20B9'+n.toLocaleString('en-IN',{minimumFractionDigits:2,maximumFractionDigits:2});}

function recalculate(){
    let subtotal=0,totalCGST=0,totalSGST=0,totalIGST=0;
    const rows=document.getElementById('itemsBody').querySelectorAll('tr');
    rows.forEach(row=>{
        const inputs=row.querySelectorAll('input');
        const selects=row.querySelectorAll('select');
        const qty=parseFloat(inputs[2]?.value)||0;
        const rate=parseFloat(inputs[3]?.value)||0;
        const gstRate=parseFloat(selects[1]?.value)||0;
        const taxableVal=qty*rate;
        const gstAmt=taxableVal*(gstRate/100);
        subtotal+=taxableVal;
        if(txnType==='intra'){totalCGST+=gstAmt/2;totalSGST+=gstAmt/2;}
        else{totalIGST+=gstAmt;}
        const totalCell=row.querySelector('.row-total');
        if(totalCell) totalCell.textContent=fmt(taxableVal+gstAmt);
    });
    const total=subtotal+totalCGST+totalSGST+totalIGST;
    document.getElementById('sumSubtotal').textContent=fmt(subtotal);
    document.getElementById('sumCGST').textContent=fmt(totalCGST);
    document.getElementById('sumSGST').textContent=fmt(totalSGST);
    document.getElementById('sumIGST').textContent=fmt(totalIGST);
    document.getElementById('sumTotal').textContent=fmt(total);
    document.getElementById('sumWords').textContent=total>0?'Amount in words: '+numberToWords(Math.round(total*100)/100):'';
}

function numberToWords(n){
    if(n===0) return 'Zero Rupees';
    const ones=['','One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen'];
    const tens=['','','Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];
    function w(num){
        if(num<20) return ones[num];
        if(num<100) return tens[Math.floor(num/10)]+(num%10?' '+ones[num%10]:'');
        if(num<1000) return ones[Math.floor(num/100)]+' Hundred'+(num%100?' and '+w(num%100):'');
        if(num<100000) return w(Math.floor(num/1000))+' Thousand'+(num%1000?' '+w(num%1000):'');
        if(num<10000000) return w(Math.floor(num/100000))+' Lakh'+(num%100000?' '+w(num%100000):'');
        return w(Math.floor(num/10000000))+' Crore'+(num%10000000?' '+w(num%10000000):'');
    }
    const rupees=Math.floor(n);
    const paise=Math.round((n-rupees)*100);
    let result=w(rupees)+' Rupees';
    if(paise>0) result+=' and '+w(paise)+' Paise';
    return result+' Only';
}

function generateInvoice(){
    // Validate
    const supName=document.getElementById('supName').value.trim();
    const supGSTIN=document.getElementById('supGSTIN').value.trim().toUpperCase();
    const buyName=document.getElementById('buyName').value.trim();
    const invNo=document.getElementById('invNo').value.trim();
    const invDate=document.getElementById('invDate').value;
    if(!supName||!invNo||!invDate||!buyName){alert('Please fill in all required fields marked with *.');return;}

    const supAddr=document.getElementById('supAddr').value.trim();
    const supState=document.getElementById('supState').value;
    const supPhone=document.getElementById('supPhone').value.trim();
    const supEmail=document.getElementById('supEmail').value.trim();
    const buyGSTIN=document.getElementById('buyGSTIN').value.trim().toUpperCase();
    const buyAddr=document.getElementById('buyAddr').value.trim();
    const buyState=document.getElementById('buyState').value;
    const dueDate=document.getElementById('dueDate').value;
    const notes=document.getElementById('invNotes').value.trim();
    const terms=document.getElementById('invTerms').value.trim();

    // Collect items
    const items=[];
    let subtotal=0,totalCGST=0,totalSGST=0,totalIGST=0;
    const rows=document.getElementById('itemsBody').querySelectorAll('tr');
    rows.forEach(row=>{
        const inputs=row.querySelectorAll('input');
        const selects=row.querySelectorAll('select');
        const desc=inputs[0]?.value||'';
        const hsn=inputs[1]?.value||'';
        const qty=parseFloat(inputs[2]?.value)||0;
        const unit=selects[0]?.value||'Nos';
        const rate=parseFloat(inputs[3]?.value)||0;
        const gstRate=parseFloat(selects[1]?.value)||0;
        const taxableVal=qty*rate;
        const gstAmt=taxableVal*(gstRate/100);
        subtotal+=taxableVal;
        let cgst=0,sgst=0,igst=0;
        if(txnType==='intra'){cgst=gstAmt/2;sgst=gstAmt/2;totalCGST+=cgst;totalSGST+=sgst;}
        else{igst=gstAmt;totalIGST+=igst;}
        items.push({desc,hsn,qty,unit,rate,gstRate,taxableVal,cgst,sgst,igst,total:taxableVal+gstAmt});
    });
    if(items.length===0){alert('Please add at least one line item.');return;}
    const grandTotal=subtotal+totalCGST+totalSGST+totalIGST;

    // Build invoice HTML
    const dateStr=invDate?new Date(invDate+'T00:00:00').toLocaleDateString('en-IN',{day:'2-digit',month:'short',year:'numeric'}):'';
    const dueDateStr=dueDate?new Date(dueDate+'T00:00:00').toLocaleDateString('en-IN',{day:'2-digit',month:'short',year:'numeric'}):'';
    const supStateName=supState?supState.split('-')[1]:'';
    const buyStateName=buyState?buyState.split('-')[1]:'';
    const buyStateCode=buyState?buyState.split('-')[0]:'';

    let taxHeaders='';
    if(txnType==='intra') taxHeaders=`<th style="text-align:right">CGST</th><th style="text-align:right">SGST</th>`;
    else taxHeaders=`<th style="text-align:right">IGST</th>`;

    let itemRows=items.map((it,i)=>{
        let taxCols='';
        if(txnType==='intra') taxCols=`<td style="text-align:right;font-family:var(--font-mono)">${fmt(it.cgst)}<br><small style="color:#888">${(it.gstRate/2)}%</small></td><td style="text-align:right;font-family:var(--font-mono)">${fmt(it.sgst)}<br><small style="color:#888">${(it.gstRate/2)}%</small></td>`;
        else taxCols=`<td style="text-align:right;font-family:var(--font-mono)">${fmt(it.igst)}<br><small style="color:#888">${it.gstRate}%</small></td>`;
        return `<tr>
            <td>${i+1}</td>
            <td>${it.desc}</td>
            <td style="font-family:var(--font-mono)">${it.hsn}</td>
            <td style="text-align:center">${it.qty} ${it.unit}</td>
            <td style="text-align:right;font-family:var(--font-mono)">${fmt(it.rate)}</td>
            <td style="text-align:right;font-family:var(--font-mono)">${fmt(it.taxableVal)}</td>
            ${taxCols}
            <td style="text-align:right;font-family:var(--font-mono);font-weight:700">${fmt(it.total)}</td>
        </tr>`;
    }).join('');

    let sumRows='';
    sumRows+=`<div class="inv-sum-r"><span>Subtotal</span><span style="font-family:var(--font-mono);font-weight:600">${fmt(subtotal)}</span></div>`;
    if(txnType==='intra'){
        sumRows+=`<div class="inv-sum-r"><span>Total CGST</span><span style="font-family:var(--font-mono)">${fmt(totalCGST)}</span></div>`;
        sumRows+=`<div class="inv-sum-r"><span>Total SGST</span><span style="font-family:var(--font-mono)">${fmt(totalSGST)}</span></div>`;
    } else {
        sumRows+=`<div class="inv-sum-r"><span>Total IGST</span><span style="font-family:var(--font-mono)">${fmt(totalIGST)}</span></div>`;
    }
    sumRows+=`<div class="inv-sum-r total-final"><span>Total Invoice Value</span><span style="font-family:var(--font-mono)">${fmt(grandTotal)}</span></div>`;

    document.getElementById('invoicePage').innerHTML=`
        <div class="inv-header">
            <div class="inv-header-left">
                <h2>${supName}</h2>
                <p style="font-size:13px;color:var(--text-secondary)">${supAddr}</p>
                ${supStateName?`<p style="font-size:13px;color:var(--text-secondary)">${supStateName}</p>`:''}
                ${supPhone?`<p style="font-size:12px;color:var(--text-muted)">Phone: ${supPhone}</p>`:''}
                ${supEmail?`<p style="font-size:12px;color:var(--text-muted)">Email: ${supEmail}</p>`:''}
                <p style="font-size:13px;margin-top:4px"><strong>GSTIN: ${supGSTIN||'N/A'}</strong></p>
            </div>
            <div class="inv-header-right">
                <p style="font-size:22px;font-weight:700;color:var(--primary-dark);margin-bottom:12px">TAX INVOICE</p>
                <p><span class="inv-label">Invoice No:</span><br><span class="inv-val">${invNo}</span></p>
                <p style="margin-top:6px"><span class="inv-label">Date:</span><br><span class="inv-val">${dateStr}</span></p>
                ${dueDateStr?`<p style="margin-top:6px"><span class="inv-label">Due Date:</span><br><span class="inv-val">${dueDateStr}</span></p>`:''}
            </div>
        </div>

        <div class="inv-party-grid">
            <div class="inv-party">
                <h4>Bill To</h4>
                <p><strong>${buyName}</strong></p>
                <p>${buyAddr}</p>
                ${buyStateName?`<p>${buyStateName} (${buyStateCode})</p>`:''}
                ${buyGSTIN?`<p><strong>GSTIN: ${buyGSTIN}</strong></p>`:'<p style="color:var(--text-muted)">Unregistered (B2C)</p>'}
            </div>
            <div class="inv-party">
                <h4>Place of Supply</h4>
                <p><strong>${buyStateName||'\u2014'}</strong> ${buyStateCode?'(Code: '+buyStateCode+')':''}</p>
                <p style="margin-top:8px;font-size:12px;color:var(--text-muted)">Transaction Type: <strong>${txnType==='intra'?'Intra-State (CGST+SGST)':'Inter-State (IGST)'}</strong></p>
            </div>
        </div>

        <table class="inv-items-table">
            <thead><tr>
                <th>#</th><th>Description</th><th>HSN/SAC</th><th style="text-align:center">Qty</th>
                <th style="text-align:right">Rate</th><th style="text-align:right">Taxable Value</th>
                ${taxHeaders}
                <th style="text-align:right">Total</th>
            </tr></thead>
            <tbody>${itemRows}</tbody>
        </table>

        <div class="inv-summary-box"><div class="inv-summary-inner">${sumRows}</div></div>

        <div class="inv-words">${numberToWords(Math.round(grandTotal*100)/100)}</div>

        ${notes?`<div style="margin-bottom:12px"><p style="font-size:11px;font-weight:700;color:var(--primary);text-transform:uppercase;margin-bottom:4px">Bank Details / Notes</p><p style="font-size:12px;color:var(--text-secondary);white-space:pre-wrap">${notes}</p></div>`:''}
        ${terms?`<div style="margin-bottom:12px"><p style="font-size:11px;font-weight:700;color:var(--primary);text-transform:uppercase;margin-bottom:4px">Terms & Conditions</p><p style="font-size:12px;color:var(--text-secondary);white-space:pre-wrap">${terms}</p></div>`:''}

        <div class="inv-footer">
            <div class="inv-footer-left">
                <p>This is a computer-generated invoice.</p>
                <p style="margin-top:4px">Generated using <strong>Patron Accounting</strong> GST Invoice Generator</p>
            </div>
            <div class="inv-footer-right">
                <div class="sig-line"></div>
                <p>Authorised Signatory</p>
                <p style="font-weight:600;color:var(--text)">${supName}</p>
            </div>
        </div>
    `;

    document.getElementById('previewOverlay').classList.add('visible');
    document.body.style.overflow='hidden';
}

function closePreview(){
    document.getElementById('previewOverlay').classList.remove('visible');
    document.body.style.overflow='';
}

function resetForm(){
    if(!confirm('Reset all fields? This cannot be undone.')) return;
    document.querySelectorAll('.inv-card input, .inv-card textarea').forEach(el=>{if(el.type==='date')el.value='';else el.value='';});
    document.querySelectorAll('.inv-card select').forEach(el=>el.selectedIndex=0);
    document.getElementById('itemsBody').innerHTML='';
    txnType='intra';
    document.querySelectorAll('.toggle-btn').forEach((b,i)=>b.classList.toggle('active',i===0));
    document.getElementById('sumCGSTRow').style.display='';
    document.getElementById('sumSGSTRow').style.display='';
    document.getElementById('sumIGSTRow').style.display='none';
    addItem();
    recalculate();
}

// FAQ data and render
const faqs=[
    {q:"What mandatory fields must a GST invoice contain in India?",a:"Under Rule 46 of CGST Rules 2017, a GST invoice must contain supplier name, address, GSTIN, unique sequential invoice number, date, recipient name, address, GSTIN (for B2B), place of supply with state code, HSN or SAC codes, item description and quantity, taxable value, GST rates, CGST/SGST or IGST amounts, total value in figures and words, and authorised signature."},
    {q:"What is the difference between a tax invoice and a bill of supply?",a:"A tax invoice is issued for taxable supplies and includes GST breakdowns enabling ITC claims. A bill of supply is issued when GST cannot be charged separately \u2014 by composition scheme dealers or for exempt supplies. Bills of supply don't show tax amounts. Both must include supplier and buyer details, invoice number, date, and item descriptions."},
    {q:"When should I use CGST/SGST versus IGST?",a:"Use CGST plus SGST when supplier and place of supply are in the same state (intra-state). Each component equals half the GST rate. Use IGST when they are in different states (inter-state) or for exports. IGST equals the full GST rate. Place of supply rules under IGST Act 2017 determine which applies."},
    {q:"Is it mandatory to mention HSN/SAC codes on GST invoices?",a:"Yes, per CGST Notification 78/2020 effective April 2021, HSN codes for goods and SAC codes for services are mandatory. Businesses with turnover up to \u20B95 crore use 4-digit codes on B2B invoices. Above \u20B95 crore must use 6-digit codes on all invoices. For imports and exports, 8-digit codes are always compulsory."},
    {q:"What is the time limit for issuing a GST invoice?",a:"For goods, issue the invoice at or before the date of removal or delivery. For services, within 30 days from the supply date. Banking and financial services have 45 days. For advance payments on services, issue a receipt voucher at the time of receipt. Late issuance affects time of supply determination."},
    {q:"What is e-invoicing and who must comply?",a:"E-invoicing is electronic generation and validation of invoices via the GST Invoice Registration Portal. As of 2026, businesses with annual turnover exceeding \u20B95 crore must comply. The system generates an Invoice Reference Number and QR code per invoice. Non-compliance results in penalties and the recipient losing ITC."},
    {q:"Can I issue a GST invoice without the recipient's GSTIN?",a:"Yes, for B2C transactions where the recipient is unregistered, GSTIN is not required. However, if invoice value exceeds \u20B950,000, the recipient's name, address, and state with code are mandatory. For B2B transactions, the recipient's GSTIN is always mandatory to enable them to claim Input Tax Credit."},
    {q:"What is the correct format for a GST invoice number?",a:"Invoice numbers must be unique, sequential within a financial year, and can contain alphabets, numerals, hyphens, and slashes. Maximum length is 16 characters. Numbers must not repeat across financial years. Common formats include INV/2025-26/001 or PA-001-2526. Restart the series each financial year."},
    {q:"What are the penalties for not issuing a proper GST invoice?",a:"Under Section 122 of CGST Act 2017, failure to issue a proper invoice attracts a penalty of \u20B910,000 or the tax amount involved, whichever is higher. The recipient may also lose ITC eligibility. Incorrect invoices can trigger demand notices during GST audits under Sections 73 and 74 with interest at 18% per annum."},
    {q:"How many copies of a GST invoice are required?",a:"For goods supply, three copies: original for recipient, duplicate for transporter, triplicate for supplier records. For service supply, two copies: original for recipient and duplicate for supplier. Our generator creates a professional PDF you can print in the required number of copies."},
    {q:"Can I include multiple GST rates in a single invoice?",a:"Yes, a single invoice can include items with different GST rates. Tax calculation must be shown separately for each rate. The invoice should display taxable value, rate, and tax amount per line item. Total CGST, SGST, and IGST must appear separately in the summary section."},
    {q:"Is a digital signature required on a GST invoice?",a:"A GST invoice must be signed by the supplier or authorised representative. The signature can be handwritten or digital per the IT Act 2000. For e-invoices, digital signatures are embedded via the Invoice Registration Portal. Computer-generated invoices with authentication codes are also accepted."}
];

const faqContainer=document.getElementById('faqContainer');
faqs.forEach(f=>{
    faqContainer.innerHTML+=`<div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>${f.q}</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">${f.a}</div></div></div>`;
});

function toggleFaq(e){const item=e.closest('.faq-item');const open=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));if(!open)item.classList.add('open');}

// Set today's date
document.getElementById('invDate').value=new Date().toISOString().split('T')[0];

// Add first item
addItem();

// Sticky nav active
const sections=document.querySelectorAll('[id]');
const navLinks=document.querySelectorAll('.toc-nav a');
window.addEventListener('scroll',()=>{let current='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)current=s.getAttribute('id');});navLinks.forEach(l=>l.classList.toggle('active',l.getAttribute('href')==='#'+current));});

// Close preview on Escape
document.addEventListener('keydown',e=>{if(e.key==='Escape')closePreview();});
</script>
@endsection
