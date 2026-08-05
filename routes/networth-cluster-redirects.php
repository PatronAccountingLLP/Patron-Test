<?php

use Illuminate\Support\Facades\Route;

// Networth Cluster 301 redirects - source: SEO Infra/Redirects/Networth-Cluster-Redirects.csv
// Registered early (before page routes) so they take precedence. Auto-generated; edit the source CSV + regenerate.
$networthClusterRedirects = [
    ['/net-worth-certificate-for-students', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-australia-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-canada-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-uk-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-us-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-schengen-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-germany-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-ireland-visa', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-dual-currency-format', '/net-worth-certificate-for-visa'],
    ['/double-currency-networth-format', '/net-worth-certificate-for-visa'],
    ['/sponsorship-affidavit-and-net-worth-certificate', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-business-loan', '/net-worth-certificate-for-bank-loan'],
    ['/net-worth-certificate-for-home-loan', '/net-worth-certificate-for-bank-loan'],
    ['/networth-certificate-consultant', '/net-worth-certificate'],
    ['/net-worth-certificate-for-startup-india-recognition', '/net-worth-certificate'],
    ['/net-worth-certificate-for-directors-fit-and-proper', '/net-worth-certificate-for-company'],
    ['/net-worth-certificate-for-companies', '/net-worth-certificate-for-company'],
    ['/net-worth-certificate-for-tender-bidding', '/solvency-certificate'],
    ['/net-worth-certificate-for-nbfc-rbi-registration', '/net-owned-fund-certificate-for-nbfc'],
    ['/financial-certificates-services', '/net-worth-certificate-by-ca'],
    ['/net-worth-certificate-for-partnership-firms/delhi', '/net-worth-certificate-for-partnership-firms'],
    ['/net-worth-certificate-for-partnership-firms/gurugram', '/net-worth-certificate-for-partnership-firms'],
    ['/net-worth-certificate-for-partnership-firms/mumbai', '/net-worth-certificate-for-partnership-firms'],
    ['/net-worth-certificate-for-partnership-firms/pune', '/net-worth-certificate-for-partnership-firms'],
    ['/net-worth-certificate-sole-proprietorship/delhi', '/net-worth-certificate-sole-proprietorship'],
    ['/net-worth-certificate-sole-proprietorship/gurugram', '/net-worth-certificate-sole-proprietorship'],
    ['/net-worth-certificate-sole-proprietorship/mumbai', '/net-worth-certificate-sole-proprietorship'],
    ['/net-worth-certificate-sole-proprietorship/pune', '/net-worth-certificate-sole-proprietorship'],
    ['/double-currency-networth-format/pune', '/net-worth-certificate-for-visa'],
    ['/double-currency-networth/delhi', '/net-worth-certificate-for-visa'],
    ['/double-currency-networth/gurugram', '/net-worth-certificate-for-visa'],
    ['/double-currency-networth/mumbai', '/net-worth-certificate-for-visa'],
    ['/net-worth-certificate-for-uae-golden-visa', '/net-worth-certificate-for-visa'],
];

// HELD BACK - traffic guard. Each of these carries real impressions, and the
// section that absorbs it MUST be live on the target page before the 301
// fires, or the traffic soft-404s away. Uncomment one at a time, after
// confirming the absorbing section is live.
// $networthClusterRedirectsHeld = [
//     // 1,051 impr / 31 clicks - the co-applicant/joint-owner section MUST be live on the bank-loan page BEFORE this 301 fires, or the traffic soft-404s away
//     ['/net-worth-certificate-for-joint-owners-in-india', '/net-worth-certificate-for-bank-loan'],
//     // 434 impr / 7 clicks ('networth' spelling - regexes miss it) - guarantor section incl. HDFC-Credila/UDIN vocabulary MUST exist first. REPOINT, not a new rule: confirmed 2026-07-31 it already 301s to /net-worth-certificate, so the existing rule is edited to target the bank-loan page - the parent loses this inherited traffic by design.
//     ['/networth-certificate-for-individual-guarantor', '/net-worth-certificate-for-bank-loan'],
//     // city variant of the guarded joint-owners page; releases only when the parent does
//     ['/net-worth-certificate-for-joint-owners-in-india/delhi', '/net-worth-certificate-for-bank-loan'],
//     // city variant of the guarded joint-owners page; releases only when the parent does
//     ['/net-worth-certificate-for-joint-owners-in-india/gurugram', '/net-worth-certificate-for-bank-loan'],
//     // city variant of the guarded joint-owners page; releases only when the parent does
//     ['/net-worth-certificate-for-joint-owners-in-india/mumbai', '/net-worth-certificate-for-bank-loan'],
//     // city variant of the guarded joint-owners page; releases only when the parent does
//     ['/net-worth-certificate-for-joint-owners-in-india/pune', '/net-worth-certificate-for-bank-loan'],
// ];

foreach ($networthClusterRedirects as $__r) {
    Route::redirect($__r[0], $__r[1], 301);
}
