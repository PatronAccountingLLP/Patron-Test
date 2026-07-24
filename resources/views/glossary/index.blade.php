@extends('layouts.service-app')


@section('meta')
    <title>Accounting Glossary: 140 Indian, Meaning for Preparers</title>
    <meta name="description" content="Plain-English definitions of the accounting, GST and Ind AS terms Indian businesses meet in their books, each with a worked. With a worked example.">
    <link rel="canonical" href="https://www.patronaccounting.com/glossary">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website"><meta property="og:title" content="Accounting Glossary: 140 Indian, Meaning for Preparers | Patron Accounting"><meta property="og:url" content="https://www.patronaccounting.com/glossary"><meta property="og:site_name" content="Patron Accounting">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"><link rel="stylesheet" href="/css/glossary.css"><script src="/js/glossary.js" defer></script>
@endsection

@section('schema')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/glossary#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.patronaccounting.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Glossary",
          "item": "https://www.patronaccounting.com/glossary"
        }
      ]
    },
    {
      "@type": "DefinedTermSet",
      "@id": "https://www.patronaccounting.com/glossary#set",
      "name": "Accounting Terms Glossary",
      "url": "https://www.patronaccounting.com/glossary",
      "description": "A-Z glossary of Indian accounting, bookkeeping and compliance terms, grouped by the service each supports.",
      "hasDefinedTerm": [
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/85-income-application-rule#definedterm",
          "name": "85% Income Application Rule",
          "url": "https://www.patronaccounting.com/glossary/85-income-application-rule"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/accounts-payable#definedterm",
          "name": "Accounts Payable",
          "url": "https://www.patronaccounting.com/glossary/accounts-payable"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/accounts-receivable#definedterm",
          "name": "Accounts Receivable",
          "url": "https://www.patronaccounting.com/glossary/accounts-receivable"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/accounts-receivable-aging-schedule#definedterm",
          "name": "Accounts Receivable Aging Schedule",
          "url": "https://www.patronaccounting.com/glossary/accounts-receivable-aging-schedule"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/accrual-accounting#definedterm",
          "name": "Accrual Accounting",
          "url": "https://www.patronaccounting.com/glossary/accrual-accounting"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/accrued-liabilities#definedterm",
          "name": "Accrued Liabilities",
          "url": "https://www.patronaccounting.com/glossary/accrued-liabilities"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/assets#definedterm",
          "name": "Assets",
          "url": "https://www.patronaccounting.com/glossary/assets"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/automated-bank-feeds#definedterm",
          "name": "Automated Bank Feeds",
          "url": "https://www.patronaccounting.com/glossary/automated-bank-feeds"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/balance-sheet#definedterm",
          "name": "Balance Sheet",
          "url": "https://www.patronaccounting.com/glossary/balance-sheet"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/bank-clearing-account#definedterm",
          "name": "Bank Clearing Account",
          "url": "https://www.patronaccounting.com/glossary/bank-clearing-account"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/bank-reconciliation#definedterm",
          "name": "Bank Reconciliation",
          "url": "https://www.patronaccounting.com/glossary/bank-reconciliation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/bank-statement-reconstruction#definedterm",
          "name": "Bank Statement Reconstruction",
          "url": "https://www.patronaccounting.com/glossary/bank-statement-reconstruction"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/bill-of-materials-bom-costing#definedterm",
          "name": "Bill of Materials (BOM) Costing",
          "url": "https://www.patronaccounting.com/glossary/bill-of-materials-bom-costing"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/bkc-corporate-accounting-standards#definedterm",
          "name": "BKC Corporate Accounting Standards",
          "url": "https://www.patronaccounting.com/glossary/bkc-corporate-accounting-standards"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/cap-table-dilution#definedterm",
          "name": "Cap Table Dilution",
          "url": "https://www.patronaccounting.com/glossary/cap-table-dilution"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/capital#definedterm",
          "name": "Capital",
          "url": "https://www.patronaccounting.com/glossary/capital"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/cash-accounting#definedterm",
          "name": "Cash Accounting",
          "url": "https://www.patronaccounting.com/glossary/cash-accounting"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/cash-flow-statement#definedterm",
          "name": "Cash Flow Statement",
          "url": "https://www.patronaccounting.com/glossary/cash-flow-statement"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/cash-flow-statement-indirect-method#definedterm",
          "name": "Cash Flow Statement (Indirect Method)",
          "url": "https://www.patronaccounting.com/glossary/cash-flow-statement-indirect-method"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/cash-runway-calculation#definedterm",
          "name": "Cash Runway Calculation",
          "url": "https://www.patronaccounting.com/glossary/cash-runway-calculation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/catch-up-bookkeeping#definedterm",
          "name": "Catch-Up Bookkeeping",
          "url": "https://www.patronaccounting.com/glossary/catch-up-bookkeeping"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/closing-journal-entries#definedterm",
          "name": "Closing Journal Entries",
          "url": "https://www.patronaccounting.com/glossary/closing-journal-entries"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/contribution-margin-dashboard#definedterm",
          "name": "Contribution Margin Dashboard",
          "url": "https://www.patronaccounting.com/glossary/contribution-margin-dashboard"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/cost-of-goods-sold#definedterm",
          "name": "Cost of Goods Sold",
          "url": "https://www.patronaccounting.com/glossary/cost-of-goods-sold"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/current-assets#definedterm",
          "name": "Current Assets",
          "url": "https://www.patronaccounting.com/glossary/current-assets"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/current-liabilities#definedterm",
          "name": "Current Liabilities",
          "url": "https://www.patronaccounting.com/glossary/current-liabilities"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/days-sales-outstanding-dso#definedterm",
          "name": "Days Sales Outstanding (DSO)",
          "url": "https://www.patronaccounting.com/glossary/days-sales-outstanding-dso"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/deferred-revenue-unearned-revenue#definedterm",
          "name": "Deferred Revenue (Unearned Revenue)",
          "url": "https://www.patronaccounting.com/glossary/deferred-revenue-unearned-revenue"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/delhi-nil-professional-tax-regime#definedterm",
          "name": "Delhi Nil Professional Tax Regime",
          "url": "https://www.patronaccounting.com/glossary/delhi-nil-professional-tax-regime"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/depreciation#definedterm",
          "name": "Depreciation",
          "url": "https://www.patronaccounting.com/glossary/depreciation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/direct-vs-indirect-factory-overheads#definedterm",
          "name": "Direct vs Indirect Factory Overheads",
          "url": "https://www.patronaccounting.com/glossary/direct-vs-indirect-factory-overheads"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/double-entry-bookkeeping#definedterm",
          "name": "Double-Entry Bookkeeping",
          "url": "https://www.patronaccounting.com/glossary/double-entry-bookkeeping"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/dunning-letters#definedterm",
          "name": "Dunning Letters",
          "url": "https://www.patronaccounting.com/glossary/dunning-letters"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/ebitda#definedterm",
          "name": "EBITDA",
          "url": "https://www.patronaccounting.com/glossary/ebitda"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/equity#definedterm",
          "name": "Equity",
          "url": "https://www.patronaccounting.com/glossary/equity"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/erp-open-balances#definedterm",
          "name": "ERP Open Balances",
          "url": "https://www.patronaccounting.com/glossary/erp-open-balances"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/esop-intrinsic-value-method#definedterm",
          "name": "ESOP Intrinsic Value Method",
          "url": "https://www.patronaccounting.com/glossary/esop-intrinsic-value-method"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/expenses#definedterm",
          "name": "Expenses",
          "url": "https://www.patronaccounting.com/glossary/expenses"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/fcra-designated-bank-account#definedterm",
          "name": "FCRA Designated Bank Account",
          "url": "https://www.patronaccounting.com/glossary/fcra-designated-bank-account"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/fifo-vs-weighted-average-cost#definedterm",
          "name": "FIFO vs Weighted Average Cost",
          "url": "https://www.patronaccounting.com/glossary/fifo-vs-weighted-average-cost"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/financial-internal-controls#definedterm",
          "name": "Financial Internal Controls",
          "url": "https://www.patronaccounting.com/glossary/financial-internal-controls"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/fixed-assets#definedterm",
          "name": "Fixed Assets",
          "url": "https://www.patronaccounting.com/glossary/fixed-assets"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/food-cost-variance-percentage#definedterm",
          "name": "Food Cost Variance Percentage",
          "url": "https://www.patronaccounting.com/glossary/food-cost-variance-percentage"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/foreign-currency-receivables#definedterm",
          "name": "Foreign Currency Receivables",
          "url": "https://www.patronaccounting.com/glossary/foreign-currency-receivables"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/form-itc-04-job-work-tracking#definedterm",
          "name": "Form ITC-04 Job Work Tracking",
          "url": "https://www.patronaccounting.com/glossary/form-itc-04-job-work-tracking"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation#definedterm",
          "name": "Fuel Fleet Card Reconciliation",
          "url": "https://www.patronaccounting.com/glossary/fuel-fleet-card-reconciliation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/fund-based-accounting#definedterm",
          "name": "Fund-Based Accounting",
          "url": "https://www.patronaccounting.com/glossary/fund-based-accounting"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/general-ledger#definedterm",
          "name": "General Ledger",
          "url": "https://www.patronaccounting.com/glossary/general-ledger"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/gidc-industrial-estate-compliance#definedterm",
          "name": "GIDC Industrial Estate Compliance",
          "url": "https://www.patronaccounting.com/glossary/gidc-industrial-estate-compliance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/gift-city-ifsc-tax-holiday#definedterm",
          "name": "GIFT City IFSC Tax Holiday",
          "url": "https://www.patronaccounting.com/glossary/gift-city-ifsc-tax-holiday"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/goods-transport-agency-gta-rcm#definedterm",
          "name": "Goods Transport Agency (GTA) RCM",
          "url": "https://www.patronaccounting.com/glossary/goods-transport-agency-gta-rcm"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/gross-profit#definedterm",
          "name": "Gross Profit",
          "url": "https://www.patronaccounting.com/glossary/gross-profit"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/gst-history-extraction#definedterm",
          "name": "GST History Extraction",
          "url": "https://www.patronaccounting.com/glossary/gst-history-extraction"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/gstr-2b-input-tax-credit-matching#definedterm",
          "name": "GSTR-2B Input Tax Credit Matching",
          "url": "https://www.patronaccounting.com/glossary/gstr-2b-input-tax-credit-matching"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/gujarat-gst-bhavan-assessment#definedterm",
          "name": "Gujarat GST Bhavan Assessment",
          "url": "https://www.patronaccounting.com/glossary/gujarat-gst-bhavan-assessment"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/hinjewadi-it-park-sez-rules#definedterm",
          "name": "Hinjewadi IT Park SEZ Rules",
          "url": "https://www.patronaccounting.com/glossary/hinjewadi-it-park-sez-rules"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/historical-data-cut-off-date#definedterm",
          "name": "Historical Data Cut-off Date",
          "url": "https://www.patronaccounting.com/glossary/historical-data-cut-off-date"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/hsiidc-plot-and-haryana-e-filing-compliance#definedterm",
          "name": "HSIIDC Plot & Haryana e-Filing Compliance",
          "url": "https://www.patronaccounting.com/glossary/hsiidc-plot-and-haryana-e-filing-compliance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/hubdoc-automation#definedterm",
          "name": "Hubdoc Automation",
          "url": "https://www.patronaccounting.com/glossary/hubdoc-automation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/imt-manesar-industrial-costing#definedterm",
          "name": "IMT Manesar Industrial Costing",
          "url": "https://www.patronaccounting.com/glossary/imt-manesar-industrial-costing"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/ind-as-102-share-based-payment#definedterm",
          "name": "Ind AS 102 Share-based Payment",
          "url": "https://www.patronaccounting.com/glossary/ind-as-102-share-based-payment"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/ind-as-115-revenue-recognition#definedterm",
          "name": "Ind AS 115 Revenue Recognition",
          "url": "https://www.patronaccounting.com/glossary/ind-as-115-revenue-recognition"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/inter-company-ledger-reconciliation#definedterm",
          "name": "Inter-Company Ledger Reconciliation",
          "url": "https://www.patronaccounting.com/glossary/inter-company-ledger-reconciliation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/inventory-shrinkage-provision#definedterm",
          "name": "Inventory Shrinkage Provision",
          "url": "https://www.patronaccounting.com/glossary/inventory-shrinkage-provision"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/inventory-voucher-mapping#definedterm",
          "name": "Inventory Voucher Mapping",
          "url": "https://www.patronaccounting.com/glossary/inventory-voucher-mapping"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/joint-development-agreement-jda#definedterm",
          "name": "Joint Development Agreement (JDA)",
          "url": "https://www.patronaccounting.com/glossary/joint-development-agreement-jda"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/journal-entry#definedterm",
          "name": "Journal Entry",
          "url": "https://www.patronaccounting.com/glossary/journal-entry"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/landing-cost-adjustment#definedterm",
          "name": "Landing Cost Adjustment",
          "url": "https://www.patronaccounting.com/glossary/landing-cost-adjustment"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/lbt-local-body-tax-assessment-history#definedterm",
          "name": "LBT (Local Body Tax) Assessment History",
          "url": "https://www.patronaccounting.com/glossary/lbt-local-body-tax-assessment-history"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/ledger-mapping-schema#definedterm",
          "name": "Ledger Mapping Schema",
          "url": "https://www.patronaccounting.com/glossary/ledger-mapping-schema"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/liabilities#definedterm",
          "name": "Liabilities",
          "url": "https://www.patronaccounting.com/glossary/liabilities"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/maharashtra-stamp-act-provisions#definedterm",
          "name": "Maharashtra Stamp Act Provisions",
          "url": "https://www.patronaccounting.com/glossary/maharashtra-stamp-act-provisions"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/marketplace-settlement-reconciliation#definedterm",
          "name": "Marketplace Settlement Reconciliation",
          "url": "https://www.patronaccounting.com/glossary/marketplace-settlement-reconciliation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/mcd-commercial-trade-licensing#definedterm",
          "name": "MCD Commercial Trade Licensing",
          "url": "https://www.patronaccounting.com/glossary/mcd-commercial-trade-licensing"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/midc-industrial-area-compliance#definedterm",
          "name": "MIDC Industrial Area Compliance",
          "url": "https://www.patronaccounting.com/glossary/midc-industrial-area-compliance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing#definedterm",
          "name": "Milestone vs Retainer Billing",
          "url": "https://www.patronaccounting.com/glossary/milestone-vs-retainer-billing"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/month-end-close-checklist#definedterm",
          "name": "Month-End Close Checklist",
          "url": "https://www.patronaccounting.com/glossary/month-end-close-checklist"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/monthly-burn-rate#definedterm",
          "name": "Monthly Burn Rate",
          "url": "https://www.patronaccounting.com/glossary/monthly-burn-rate"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/monthly-recurring-revenue-mrr#definedterm",
          "name": "Monthly Recurring Revenue (MRR)",
          "url": "https://www.patronaccounting.com/glossary/monthly-recurring-revenue-mrr"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/multi-currency-bank-feed#definedterm",
          "name": "Multi-Currency Bank Feed",
          "url": "https://www.patronaccounting.com/glossary/multi-currency-bank-feed"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/ncr-inter-state-gst-reconciliation#definedterm",
          "name": "NCR Inter-State GST Reconciliation",
          "url": "https://www.patronaccounting.com/glossary/ncr-inter-state-gst-reconciliation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/net-profit#definedterm",
          "name": "Net Profit",
          "url": "https://www.patronaccounting.com/glossary/net-profit"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/notes-to-accounts#definedterm",
          "name": "Notes to Accounts",
          "url": "https://www.patronaccounting.com/glossary/notes-to-accounts"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/odoo-double-entry-engine#definedterm",
          "name": "Odoo Double-Entry Engine",
          "url": "https://www.patronaccounting.com/glossary/odoo-double-entry-engine"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/odoo-fiscal-positions#definedterm",
          "name": "Odoo Fiscal Positions",
          "url": "https://www.patronaccounting.com/glossary/odoo-fiscal-positions"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/online-travel-agency-ota-deductions#definedterm",
          "name": "Online Travel Agency (OTA) Deductions",
          "url": "https://www.patronaccounting.com/glossary/online-travel-agency-ota-deductions"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/operating-cash-runway#definedterm",
          "name": "Operating Cash Runway",
          "url": "https://www.patronaccounting.com/glossary/operating-cash-runway"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/operational-cost-centers#definedterm",
          "name": "Operational Cost Centers",
          "url": "https://www.patronaccounting.com/glossary/operational-cost-centers"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/outstanding-balances-migration#definedterm",
          "name": "Outstanding Balances Migration",
          "url": "https://www.patronaccounting.com/glossary/outstanding-balances-migration"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/outstanding-checks-timing-differences#definedterm",
          "name": "Outstanding Checks / Timing Differences",
          "url": "https://www.patronaccounting.com/glossary/outstanding-checks-timing-differences"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/parent-child-ledger-hierarchy#definedterm",
          "name": "Parent-Child Ledger Hierarchy",
          "url": "https://www.patronaccounting.com/glossary/parent-child-ledger-hierarchy"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/parent-subsidiary-consolidation#definedterm",
          "name": "Parent-Subsidiary Consolidation",
          "url": "https://www.patronaccounting.com/glossary/parent-subsidiary-consolidation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/percentage-of-completion-method-pocm#definedterm",
          "name": "Percentage of Completion Method (POCM)",
          "url": "https://www.patronaccounting.com/glossary/percentage-of-completion-method-pocm"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/pharmacy-stock-expiry-audit#definedterm",
          "name": "Pharmacy Stock Expiry Audit",
          "url": "https://www.patronaccounting.com/glossary/pharmacy-stock-expiry-audit"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit#definedterm",
          "name": "Point-of-Sale (POS) Day-End Audit",
          "url": "https://www.patronaccounting.com/glossary/point-of-sale-pos-day-end-audit"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/prepaid-expense-amortization#definedterm",
          "name": "Prepaid Expense Amortization",
          "url": "https://www.patronaccounting.com/glossary/prepaid-expense-amortization"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/prior-period-adjustments#definedterm",
          "name": "Prior-Period Adjustments",
          "url": "https://www.patronaccounting.com/glossary/prior-period-adjustments"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/profit-and-loss-statement#definedterm",
          "name": "Profit & Loss Statement",
          "url": "https://www.patronaccounting.com/glossary/profit-and-loss-statement"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/project-wise-profitability-margin#definedterm",
          "name": "Project-Wise Profitability Margin",
          "url": "https://www.patronaccounting.com/glossary/project-wise-profitability-margin"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/purchase-order-po-tolerance#definedterm",
          "name": "Purchase Order (PO) Tolerance",
          "url": "https://www.patronaccounting.com/glossary/purchase-order-po-tolerance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/remote-tally-access#definedterm",
          "name": "Remote Tally Access",
          "url": "https://www.patronaccounting.com/glossary/remote-tally-access"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/rera-70-escrow-compliance#definedterm",
          "name": "RERA 70% Escrow Compliance",
          "url": "https://www.patronaccounting.com/glossary/rera-70-escrow-compliance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/restricted-corpus-donations#definedterm",
          "name": "Restricted Corpus Donations",
          "url": "https://www.patronaccounting.com/glossary/restricted-corpus-donations"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/retail-inventory-method#definedterm",
          "name": "Retail Inventory Method",
          "url": "https://www.patronaccounting.com/glossary/retail-inventory-method"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/return-to-origin-rto-provisions#definedterm",
          "name": "Return to Origin (RTO) Provisions",
          "url": "https://www.patronaccounting.com/glossary/return-to-origin-rto-provisions"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/revenue#definedterm",
          "name": "Revenue",
          "url": "https://www.patronaccounting.com/glossary/revenue"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/room-night-occupancy-yield#definedterm",
          "name": "Room Night Occupancy Yield",
          "url": "https://www.patronaccounting.com/glossary/room-night-occupancy-yield"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/schedule-iii-balance-sheet#definedterm",
          "name": "Schedule III Balance Sheet",
          "url": "https://www.patronaccounting.com/glossary/schedule-iii-balance-sheet"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/sebi-financial-reporting-timelines#definedterm",
          "name": "SEBI Financial Reporting Timelines",
          "url": "https://www.patronaccounting.com/glossary/sebi-financial-reporting-timelines"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/section-10-23c-exemption-rules#definedterm",
          "name": "Section 10(23C) Exemption Rules",
          "url": "https://www.patronaccounting.com/glossary/section-10-23c-exemption-rules"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/section-12a-80g-annual-upkeep#definedterm",
          "name": "Section 12A / 80G Annual Upkeep",
          "url": "https://www.patronaccounting.com/glossary/section-12a-80g-annual-upkeep"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/section-194q-tds-on-goods#definedterm",
          "name": "Section 194Q TDS on Goods",
          "url": "https://www.patronaccounting.com/glossary/section-194q-tds-on-goods"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/section-43b-h-msme-clock#definedterm",
          "name": "Section 43B(h) MSME Clock",
          "url": "https://www.patronaccounting.com/glossary/section-43b-h-msme-clock"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/section-44ada-presumptive-cap#definedterm",
          "name": "Section 44ADA Presumptive Cap",
          "url": "https://www.patronaccounting.com/glossary/section-44ada-presumptive-cap"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/section-52-tcs-under-gst#definedterm",
          "name": "Section 52 TCS under GST",
          "url": "https://www.patronaccounting.com/glossary/section-52-tcs-under-gst"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/segmented-chart-of-accounts#definedterm",
          "name": "Segmented Chart of Accounts",
          "url": "https://www.patronaccounting.com/glossary/segmented-chart-of-accounts"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/segregation-of-duties-sod#definedterm",
          "name": "Segregation of Duties (SoD)",
          "url": "https://www.patronaccounting.com/glossary/segregation-of-duties-sod"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/software-export-revenue-section-10aa-sez#definedterm",
          "name": "Software Export Revenue (Section 10AA SEZ)",
          "url": "https://www.patronaccounting.com/glossary/software-export-revenue-section-10aa-sez"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/standard-cost-variance#definedterm",
          "name": "Standard Cost Variance",
          "url": "https://www.patronaccounting.com/glossary/standard-cost-variance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/standard-operating-procedure-sop#definedterm",
          "name": "Standard Operating Procedure (SOP)",
          "url": "https://www.patronaccounting.com/glossary/standard-operating-procedure-sop"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/statutory-vs-internal-audit#definedterm",
          "name": "Statutory vs Internal Audit",
          "url": "https://www.patronaccounting.com/glossary/statutory-vs-internal-audit"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/stpi-softex-export-filing#definedterm",
          "name": "STPI / SOFTEX Export Filing",
          "url": "https://www.patronaccounting.com/glossary/stpi-softex-export-filing"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/tally-vault#definedterm",
          "name": "Tally Vault",
          "url": "https://www.patronaccounting.com/glossary/tally-vault"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/tally-xml-export#definedterm",
          "name": "Tally XML Export",
          "url": "https://www.patronaccounting.com/glossary/tally-xml-export"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/third-party-administrator-tpa-receivables#definedterm",
          "name": "Third-Party Administrator (TPA) Receivables",
          "url": "https://www.patronaccounting.com/glossary/third-party-administrator-tpa-receivables"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/three-way-matching#definedterm",
          "name": "Three-Way Matching",
          "url": "https://www.patronaccounting.com/glossary/three-way-matching"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/transfer-pricing-for-it-services#definedterm",
          "name": "Transfer Pricing for IT Services",
          "url": "https://www.patronaccounting.com/glossary/transfer-pricing-for-it-services"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/trial-balance#definedterm",
          "name": "Trial Balance",
          "url": "https://www.patronaccounting.com/glossary/trial-balance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/trip-wise-profit-and-loss-statement#definedterm",
          "name": "Trip-Wise Profit and Loss Statement",
          "url": "https://www.patronaccounting.com/glossary/trip-wise-profit-and-loss-statement"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/udyog-vihar-sez-vs-dta-compliance#definedterm",
          "name": "Udyog Vihar SEZ vs DTA Compliance",
          "url": "https://www.patronaccounting.com/glossary/udyog-vihar-sez-vs-dta-compliance"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/unbilled-revenue-wip-hours#definedterm",
          "name": "Unbilled Revenue (WIP Hours)",
          "url": "https://www.patronaccounting.com/glossary/unbilled-revenue-wip-hours"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/variance-analysis#definedterm",
          "name": "Variance Analysis",
          "url": "https://www.patronaccounting.com/glossary/variance-analysis"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/vendor-balance-confirmation#definedterm",
          "name": "Vendor Balance Confirmation",
          "url": "https://www.patronaccounting.com/glossary/vendor-balance-confirmation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/vesting-period-graded-amortization#definedterm",
          "name": "Vesting Period Graded Amortization",
          "url": "https://www.patronaccounting.com/glossary/vesting-period-graded-amortization"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/work-in-progress-wip-valuation#definedterm",
          "name": "Work-in-Progress (WIP) Valuation",
          "url": "https://www.patronaccounting.com/glossary/work-in-progress-wip-valuation"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/working-capital#definedterm",
          "name": "Working Capital",
          "url": "https://www.patronaccounting.com/glossary/working-capital"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/xero-bank-rules#definedterm",
          "name": "Xero Bank Rules",
          "url": "https://www.patronaccounting.com/glossary/xero-bank-rules"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/zoho-banking-feeds#definedterm",
          "name": "Zoho Banking Feeds",
          "url": "https://www.patronaccounting.com/glossary/zoho-banking-feeds"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/zoho-custom-modules#definedterm",
          "name": "Zoho Custom Modules",
          "url": "https://www.patronaccounting.com/glossary/zoho-custom-modules"
        },
        {
          "@type": "DefinedTerm",
          "@id": "https://www.patronaccounting.com/glossary/zoho-gstin-mapping#definedterm",
          "name": "Zoho GSTIN Mapping",
          "url": "https://www.patronaccounting.com/glossary/zoho-gstin-mapping"
        }
      ]
    },
    {
      "@type": "CollectionPage",
      "@id": "https://www.patronaccounting.com/glossary",
      "name": "Accounting Glossary: 140 Indian, Meaning for Preparers",
      "description": "Plain-English definitions of the accounting, GST and Ind AS terms Indian businesses meet in their books, each with a worked. With a worked example.",
      "url": "https://www.patronaccounting.com/glossary",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.patronaccounting.com"
      },
      "about": {
        "@id": "https://www.patronaccounting.com/glossary#set"
      },
      "breadcrumb": {
        "@id": "https://www.patronaccounting.com/glossary#breadcrumb"
      },
      "publisher": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": [
        "Organization",
        "AccountingService"
      ],
      "@id": "https://www.patronaccounting.com/#organization",
      "name": "Patron Accounting LLP",
      "legalName": "Patron Accounting LLP",
      "url": "https://www.patronaccounting.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.patronaccounting.com/images/patron-logo.webp"
      },
      "image": "https://www.patronaccounting.com/images/patron-logo.webp",
      "email": "sales@patronaccounting.com",
      "telephone": "+91-94594-56700",
      "foundingDate": "2019",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "RTC Silver, B4-708, Sai Satyam Park, Wagholi",
        "addressLocality": "Pune",
        "addressRegion": "Maharashtra",
        "postalCode": "412207",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-94594-56700",
        "email": "sales@patronaccounting.com",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": [
          "en",
          "hi"
        ]
      },
      "areaServed": "IN",
      "sameAs": [
        "https://www.facebook.com/share/1BqqRYkpJX/",
        "https://www.instagram.com/patronaccounting/",
        "https://x.com/LlpPatron",
        "https://www.youtube.com/@patronaccountingllp7130"
      ]
    },
    {
      "@type": "Organization",
      "@id": "https://www.patronaccounting.com/#team",
      "name": "Patron Accounting - CA & CS Team",
      "parentOrganization": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "member": {
        "@id": "https://www.patronaccounting.com/#reviewer-sundram"
      },
      "employee": {
        "@id": "https://www.patronaccounting.com/#reviewer-sundram"
      }
    },
    {
      "@type": "Person",
      "@id": "https://www.patronaccounting.com/#reviewer-sundram",
      "name": "CA Sundram Gupta",
      "honorificPrefix": "CA",
      "jobTitle": "Founder & Chartered Accountant (FCA)",
      "worksFor": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "credentialCategory": "Fellow Chartered Accountant (FCA), ICAI"
      },
      "url": "https://www.patronaccounting.com/authorhub/ca-sundram-gupta",
      "sameAs": [
        "https://www.patronaccounting.com/authorhub/ca-sundram-gupta"
      ]
    }
  ]
}
</script>
@endverbatim
@endsection

@section('content')
@verbatim
<div class="gl-page"><section class="gl-hero"><div class="gl-wrap"><nav class="gl-crumb"><a href="/">Home</a><span class="sep">&rsaquo;</span><span class="cur">Glossary</span></nav><div class="gl-cat">Patron Accounting &middot; Glossary</div><h1 class="gl-h1">Accounting Terms Glossary</h1><p style="color:#4B5563;font-size:17px;max-width:760px">Browse every accounting term by the service it supports. Pick a service to see the glossaries that explain the concepts behind it.</p></div></section><div class="gl-body"><div class="gl-wrap"><section class="glh-vert"><div class="glh-vert__head"><h2>Accounting &amp; Bookkeeping</h2><span class="glh-vert__tag">Live</span><span class="glh-vert__count">140 glossary terms &middot; 38 services</span></div><h3 class="glh-grp">Core accounting &amp; bookkeeping</h3><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services">Accounting &amp; Bookkeeping Services in India <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/accrual-accounting">Accrual Accounting</a></li><li><a href="/glossary/assets">Assets</a></li><li><a href="/glossary/capital">Capital</a></li><li><a href="/glossary/cash-accounting">Cash Accounting</a></li><li><a href="/glossary/double-entry-bookkeeping">Double-Entry Bookkeeping</a></li><li><a href="/glossary/equity">Equity</a></li><li><a href="/glossary/expenses">Expenses</a></li><li><a href="/glossary/general-ledger">General Ledger</a></li><li><a href="/glossary/journal-entry">Journal Entry</a></li><li><a href="/glossary/liabilities">Liabilities</a></li><li><a href="/glossary/revenue">Revenue</a></li><li><a href="/glossary/trial-balance">Trial Balance</a></li></ul></div><h3 class="glh-grp">Financial reporting &amp; review</h3><div class="glh-svc"><a class="glh-svc__name" href="/financial-statement-preparation-services">Financial Statement Preparation <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/balance-sheet">Balance Sheet</a></li><li><a href="/glossary/cash-flow-statement">Cash Flow Statement</a></li><li><a href="/glossary/cash-flow-statement-indirect-method">Cash Flow Statement (Indirect Method)</a></li><li><a href="/glossary/current-assets">Current Assets</a></li><li><a href="/glossary/current-liabilities">Current Liabilities</a></li><li><a href="/glossary/depreciation">Depreciation</a></li><li><a href="/glossary/fixed-assets">Fixed Assets</a></li><li><a href="/glossary/notes-to-accounts">Notes to Accounts</a></li><li><a href="/glossary/profit-and-loss-statement">Profit &amp; Loss Statement</a></li><li><a href="/glossary/schedule-iii-balance-sheet">Schedule III Balance Sheet</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/mis-reporting-services">MIS Reporting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/contribution-margin-dashboard">Contribution Margin Dashboard</a></li><li><a href="/glossary/ebitda">EBITDA</a></li><li><a href="/glossary/gross-profit">Gross Profit</a></li><li><a href="/glossary/net-profit">Net Profit</a></li><li><a href="/glossary/operating-cash-runway">Operating Cash Runway</a></li><li><a href="/glossary/variance-analysis">Variance Analysis</a></li><li><a href="/glossary/working-capital">Working Capital</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/year-end-closing-finalisation-services">Year-End Closing &amp; Finalisation <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/accrued-liabilities">Accrued Liabilities</a></li><li><a href="/glossary/closing-journal-entries">Closing Journal Entries</a></li><li><a href="/glossary/prepaid-expense-amortization">Prepaid Expense Amortization</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounts-reconciliation-and-audit">Accounts Reconciliation &amp; Audit <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/inter-company-ledger-reconciliation">Inter-Company Ledger Reconciliation</a></li><li><a href="/glossary/statutory-vs-internal-audit">Statutory vs Internal Audit</a></li><li><a href="/glossary/vendor-balance-confirmation">Vendor Balance Confirmation</a></li></ul></div><h3 class="glh-grp">Payables, receivables &amp; bank</h3><div class="glh-svc"><a class="glh-svc__name" href="/accounts-payable-outsourcing-services">Accounts Payable Outsourcing <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/accounts-payable">Accounts Payable</a></li><li><a href="/glossary/purchase-order-po-tolerance">Purchase Order (PO) Tolerance</a></li><li><a href="/glossary/section-43b-h-msme-clock">Section 43B(h) MSME Clock</a></li><li><a href="/glossary/three-way-matching">Three-Way Matching</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounts-receivable-outsourcing-services">Accounts Receivable Outsourcing <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/accounts-receivable">Accounts Receivable</a></li><li><a href="/glossary/accounts-receivable-aging-schedule">Accounts Receivable Aging Schedule</a></li><li><a href="/glossary/days-sales-outstanding-dso">Days Sales Outstanding (DSO)</a></li><li><a href="/glossary/dunning-letters">Dunning Letters</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/bank-credit-card-reconciliation-services">Bank &amp; Credit Card Reconciliation <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/automated-bank-feeds">Automated Bank Feeds</a></li><li><a href="/glossary/bank-clearing-account">Bank Clearing Account</a></li><li><a href="/glossary/bank-reconciliation">Bank Reconciliation</a></li><li><a href="/glossary/outstanding-checks-timing-differences">Outstanding Checks / Timing Differences</a></li></ul></div><h3 class="glh-grp">Accounting software &amp; migration</h3><div class="glh-svc"><a class="glh-svc__name" href="/zoho-books-accounting">Zoho Books Accounting <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/zoho-banking-feeds">Zoho Banking Feeds</a></li><li><a href="/glossary/zoho-custom-modules">Zoho Custom Modules</a></li><li><a href="/glossary/zoho-gstin-mapping">Zoho GSTIN Mapping</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/xero-accounting">Xero Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/hubdoc-automation">Hubdoc Automation</a></li><li><a href="/glossary/multi-currency-bank-feed">Multi-Currency Bank Feed</a></li><li><a href="/glossary/xero-bank-rules">Xero Bank Rules</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/odoo-accounting">Odoo Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/odoo-double-entry-engine">Odoo Double-Entry Engine</a></li><li><a href="/glossary/odoo-fiscal-positions">Odoo Fiscal Positions</a></li><li><a href="/glossary/parent-subsidiary-consolidation">Parent-Subsidiary Consolidation</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/tally-accounting">Tally Prime Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/remote-tally-access">Remote Tally Access</a></li><li><a href="/glossary/tally-vault">Tally Vault</a></li><li><a href="/glossary/tally-xml-export">Tally XML Export</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/migration-from-tally-to-zoho">Migration: Tally to Zoho Books <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/gst-history-extraction">GST History Extraction</a></li><li><a href="/glossary/inventory-voucher-mapping">Inventory Voucher Mapping</a></li><li><a href="/glossary/outstanding-balances-migration">Outstanding Balances Migration</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/migration-from-tally-to-odoo">Migration: Tally to Odoo <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/erp-open-balances">ERP Open Balances</a></li><li><a href="/glossary/historical-data-cut-off-date">Historical Data Cut-off Date</a></li><li><a href="/glossary/ledger-mapping-schema">Ledger Mapping Schema</a></li></ul></div><h3 class="glh-grp">Setup, costing &amp; controls</h3><div class="glh-svc"><a class="glh-svc__name" href="/chart-of-accounts-setup-services">Chart of Accounts Setup <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/operational-cost-centers">Operational Cost Centers</a></li><li><a href="/glossary/parent-child-ledger-hierarchy">Parent-Child Ledger Hierarchy</a></li><li><a href="/glossary/segmented-chart-of-accounts">Segmented Chart of Accounts</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/inventory-accounting-costing-services">Inventory Accounting &amp; Costing <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/bill-of-materials-bom-costing">Bill of Materials (BOM) Costing</a></li><li><a href="/glossary/cost-of-goods-sold">Cost of Goods Sold</a></li><li><a href="/glossary/fifo-vs-weighted-average-cost">FIFO vs Weighted Average Cost</a></li><li><a href="/glossary/standard-cost-variance">Standard Cost Variance</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/sop-drafting-and-implementation">SOP Drafting &amp; Implementation <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/financial-internal-controls">Financial Internal Controls</a></li><li><a href="/glossary/month-end-close-checklist">Month-End Close Checklist</a></li><li><a href="/glossary/segregation-of-duties-sod">Segregation of Duties (SoD)</a></li><li><a href="/glossary/standard-operating-procedure-sop">Standard Operating Procedure (SOP)</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/esop-accounting-ind-as-102">ESOP Accounting (Ind AS 102) <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/esop-intrinsic-value-method">ESOP Intrinsic Value Method</a></li><li><a href="/glossary/ind-as-102-share-based-payment">Ind AS 102 Share-based Payment</a></li><li><a href="/glossary/vesting-period-graded-amortization">Vesting Period Graded Amortization</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/backlog-bookkeeping-catch-up-services">Backlog Bookkeeping / Catch-Up <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/bank-statement-reconstruction">Bank Statement Reconstruction</a></li><li><a href="/glossary/catch-up-bookkeeping">Catch-Up Bookkeeping</a></li><li><a href="/glossary/prior-period-adjustments">Prior-Period Adjustments</a></li></ul></div><h3 class="glh-grp">Industry-specific accounting</h3><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-it-saas">SaaS Accounting Services (IT &amp; SaaS) <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/deferred-revenue-unearned-revenue">Deferred Revenue (Unearned Revenue)</a></li><li><a href="/glossary/ind-as-115-revenue-recognition">Ind AS 115 Revenue Recognition</a></li><li><a href="/glossary/monthly-recurring-revenue-mrr">Monthly Recurring Revenue (MRR)</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/it-sector-accounting-services">IT &amp; Software Company Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/foreign-currency-receivables">Foreign Currency Receivables</a></li><li><a href="/glossary/stpi-softex-export-filing">STPI / SOFTEX Export Filing</a></li><li><a href="/glossary/software-export-revenue-section-10aa-sez">Software Export Revenue (Section 10AA SEZ)</a></li><li><a href="/glossary/transfer-pricing-for-it-services">Transfer Pricing for IT Services</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-startups">Startup Accounting Services India <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/cap-table-dilution">Cap Table Dilution</a></li><li><a href="/glossary/cash-runway-calculation">Cash Runway Calculation</a></li><li><a href="/glossary/monthly-burn-rate">Monthly Burn Rate</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-e-commerce-industry">E-Commerce Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/marketplace-settlement-reconciliation">Marketplace Settlement Reconciliation</a></li><li><a href="/glossary/return-to-origin-rto-provisions">Return to Origin (RTO) Provisions</a></li><li><a href="/glossary/section-52-tcs-under-gst">Section 52 TCS under GST</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-manufacturing">Manufacturing Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/direct-vs-indirect-factory-overheads">Direct vs Indirect Factory Overheads</a></li><li><a href="/glossary/form-itc-04-job-work-tracking">Form ITC-04 Job Work Tracking</a></li><li><a href="/glossary/work-in-progress-wip-valuation">Work-in-Progress (WIP) Valuation</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-trading-industry">Trading Business Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/gstr-2b-input-tax-credit-matching">GSTR-2B Input Tax Credit Matching</a></li><li><a href="/glossary/landing-cost-adjustment">Landing Cost Adjustment</a></li><li><a href="/glossary/section-194q-tds-on-goods">Section 194Q TDS on Goods</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-retail">Retail Accounting Services in India <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/inventory-shrinkage-provision">Inventory Shrinkage Provision</a></li><li><a href="/glossary/point-of-sale-pos-day-end-audit">Point-of-Sale (POS) Day-End Audit</a></li><li><a href="/glossary/retail-inventory-method">Retail Inventory Method</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-the-service-sector-industry">Service Sector Accounting (Project Billing) <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/milestone-vs-retainer-billing">Milestone vs Retainer Billing</a></li><li><a href="/glossary/project-wise-profitability-margin">Project-Wise Profitability Margin</a></li><li><a href="/glossary/unbilled-revenue-wip-hours">Unbilled Revenue (WIP Hours)</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/construction-and-real-estate-accounting-services">Construction &amp; Real Estate Accounting <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/joint-development-agreement-jda">Joint Development Agreement (JDA)</a></li><li><a href="/glossary/percentage-of-completion-method-pocm">Percentage of Completion Method (POCM)</a></li><li><a href="/glossary/rera-70-escrow-compliance">RERA 70% Escrow Compliance</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/healthcare-sector-accounting-services">Healthcare Accounting Services <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/pharmacy-stock-expiry-audit">Pharmacy Stock Expiry Audit</a></li><li><a href="/glossary/section-44ada-presumptive-cap">Section 44ADA Presumptive Cap</a></li><li><a href="/glossary/third-party-administrator-tpa-receivables">Third-Party Administrator (TPA) Receivables</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/hospitality-sector-accounting-services">Hotel &amp; Restaurant Accounting <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/food-cost-variance-percentage">Food Cost Variance Percentage</a></li><li><a href="/glossary/online-travel-agency-ota-deductions">Online Travel Agency (OTA) Deductions</a></li><li><a href="/glossary/room-night-occupancy-yield">Room Night Occupancy Yield</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services-for-education-industry">Accounting Services for Schools &amp; Colleges <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/85-income-application-rule">85% Income Application Rule</a></li><li><a href="/glossary/fund-based-accounting">Fund-Based Accounting</a></li><li><a href="/glossary/section-10-23c-exemption-rules">Section 10(23C) Exemption Rules</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/ngo-and-non-profit-accounting-services">NGO &amp; Non-Profit Accounting <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/fcra-designated-bank-account">FCRA Designated Bank Account</a></li><li><a href="/glossary/restricted-corpus-donations">Restricted Corpus Donations</a></li><li><a href="/glossary/section-12a-80g-annual-upkeep">Section 12A / 80G Annual Upkeep</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/travel-and-logistics-accounting-services">Travel &amp; Logistics Accounting <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/fuel-fleet-card-reconciliation">Fuel Fleet Card Reconciliation</a></li><li><a href="/glossary/goods-transport-agency-gta-rcm">Goods Transport Agency (GTA) RCM</a></li><li><a href="/glossary/trip-wise-profit-and-loss-statement">Trip-Wise Profit and Loss Statement</a></li></ul></div><h3 class="glh-grp">City-specific accounting</h3><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services/mumbai">Accounting &amp; Bookkeeping Services - Mumbai <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/bkc-corporate-accounting-standards">BKC Corporate Accounting Standards</a></li><li><a href="/glossary/maharashtra-stamp-act-provisions">Maharashtra Stamp Act Provisions</a></li><li><a href="/glossary/sebi-financial-reporting-timelines">SEBI Financial Reporting Timelines</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services/pune">Accounting &amp; Bookkeeping Services - Pune <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/hinjewadi-it-park-sez-rules">Hinjewadi IT Park SEZ Rules</a></li><li><a href="/glossary/lbt-local-body-tax-assessment-history">LBT (Local Body Tax) Assessment History</a></li><li><a href="/glossary/midc-industrial-area-compliance">MIDC Industrial Area Compliance</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services/delhi">Accounting &amp; Bookkeeping Services - Delhi <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/delhi-nil-professional-tax-regime">Delhi Nil Professional Tax Regime</a></li><li><a href="/glossary/mcd-commercial-trade-licensing">MCD Commercial Trade Licensing</a></li><li><a href="/glossary/ncr-inter-state-gst-reconciliation">NCR Inter-State GST Reconciliation</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services/ahmedabad">Accounting &amp; Bookkeeping Services - Ahmedabad <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/gidc-industrial-estate-compliance">GIDC Industrial Estate Compliance</a></li><li><a href="/glossary/gift-city-ifsc-tax-holiday">GIFT City IFSC Tax Holiday</a></li><li><a href="/glossary/gujarat-gst-bhavan-assessment">Gujarat GST Bhavan Assessment</a></li></ul></div><div class="glh-svc"><a class="glh-svc__name" href="/accounting-services/gurugram">Accounting &amp; Bookkeeping Services - Gurugram <span class="arw">&rarr;</span></a><ul class="glh-terms"><li><a href="/glossary/hsiidc-plot-and-haryana-e-filing-compliance">HSIIDC Plot &amp; Haryana e-Filing Compliance</a></li><li><a href="/glossary/imt-manesar-industrial-costing">IMT Manesar Industrial Costing</a></li><li><a href="/glossary/udyog-vihar-sez-vs-dta-compliance">Udyog Vihar SEZ vs DTA Compliance</a></li></ul></div></section><section class="gl-sec"><h2>More glossaries coming soon</h2><p style="color:#6B7280">Glossaries for Patron’s other service verticals are being built. Accounting &amp; bookkeeping is live today.</p><div class="glh-soon-grid"><div class="glh-soon"><div class="glh-soon__t">Business Registrations</div><span class="glh-soon__b">Coming soon</span></div><div class="glh-soon"><div class="glh-soon__t">Company Incorporation</div><span class="glh-soon__b">Coming soon</span></div><div class="glh-soon"><div class="glh-soon__t">GST &amp; Indirect Tax</div><span class="glh-soon__b">Coming soon</span></div><div class="glh-soon"><div class="glh-soon__t">Income Tax &amp; TDS</div><span class="glh-soon__b">Coming soon</span></div><div class="glh-soon"><div class="glh-soon__t">ROC &amp; Compliance</div><span class="glh-soon__b">Coming soon</span></div><div class="glh-soon"><div class="glh-soon__t">Payroll &amp; HR</div><span class="glh-soon__b">Coming soon</span></div></div></section></div></div>
<footer class="gl-foot"><div class="gl-foot__in"><span>&copy; 2026 Patron Accounting LLP</span><a href="/accounting-services">Explore accounting services &rarr;</a></div></footer></div>
@endverbatim
@endsection
