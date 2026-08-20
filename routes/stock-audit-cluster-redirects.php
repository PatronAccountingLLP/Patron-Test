<?php

use Illuminate\Support\Facades\Route;

// Stock Audit cluster 301 redirects - source: SEO Infra/Redirects/Stock-Audit-Redirects_v3_2026-08-14.xlsx
// Registered early (before page routes) so old paths 301 instead of rendering.
// The 15 rows marked HOLD in v3 were retired on 2026-08-20 and are included below.
$stockAuditRedirects = [
    ['/stock-audit/bengaluru', '/stock-audit/bangalore'],
    ['/blog/inventory-valuation-as2-manufacturing', '/blog/ind-as-2-vs-icds-ii-inventory-valuation-financial-reporting-tax'],
    ['/blog/stock-valuation-trading-business', '/blog/ind-as-2-vs-icds-ii-inventory-valuation-financial-reporting-tax'],
    ['/blog/abc-analysis-stock-audit-high-value-inventory', '/blog/stock-audit-sampling-methods-how-auditors-select-items'],
    ['/blog/abc-analysis-inventory', '/blog/stock-audit-sampling-methods-how-auditors-select-items'],
    ['/blog/perpetual-vs-periodic-inventory-system-stock-audit', '/blog/perpetual-vs-periodic-inventory'],
    ['/blog/multi-location-stock-audit-warehouses-branches', '/stock-audit-for-warehouse'],
    ['/blog/stock-audit-professional-advice-free-resources', '/stock-audit'],
    ['/blog/technology-in-stock-audit', '/stock-audit'],
    ['/blog/importance-of-stock-audit', '/stock-audit'],
    ['/blog/guidelines-to-conduct-stock-audit-in-india', '/stock-audit'],

    // The fifteen orphan city pages, retired 2026-08-20. Never in the 179-URL plan,
    // live and indexed, folded into the pillar. Also removed from sitemap-410.xml:
    // a URL cannot be both permanently gone and permanently moved.
    ['/stock-audit/chandigarh', '/stock-audit'],
    ['/stock-audit/indore', '/stock-audit'],
    ['/stock-audit/nagpur', '/stock-audit'],
    ['/stock-audit/bhubaneswar', '/stock-audit'],
    ['/stock-audit/jodhpur', '/stock-audit'],
    ['/stock-audit/surat', '/stock-audit'],
    ['/stock-audit/vadodara', '/stock-audit'],
    ['/stock-audit/bhopal', '/stock-audit'],
    ['/stock-audit/faridabad', '/stock-audit'],
    ['/stock-audit/sonipat', '/stock-audit'],
    ['/stock-audit/rajkot', '/stock-audit'],
    ['/stock-audit/ranchi', '/stock-audit'],
    ['/stock-audit/varanasi', '/stock-audit'],
    ['/stock-audit/jaipur', '/stock-audit'],
    ['/stock-audit/jalandhar', '/stock-audit'],
];

foreach ($stockAuditRedirects as $__r) {
    Route::redirect($__r[0], $__r[1], 301);
}
