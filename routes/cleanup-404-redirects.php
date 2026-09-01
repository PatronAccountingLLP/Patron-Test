<?php

use Illuminate\Support\Facades\Route;

/*
 * GSC 404 cleanup - 301 redirects and 410 removals.
 *
 * Each city goes to its own city page where one exists. Where none does, it goes
 * to the service's India page - never to a different city. Someone searching for
 * Bangalore is better served by the national page than by one that says Pune
 * throughout.
 *
 * Targets point at the final destination, never at another redirect. Fourteen
 * rules aimed at a city URL that the city-grid work later moved, which would have
 * cost every visitor two hops.
 *
 * Blog URLs redirect to blog URLs. Fourteen rules here sent a /blog/ URL to a
 * tool or a service page; a reader who clicked an article link wants the article.
 * Each now points at the post covering the same subject, matched on concept
 * rather than slug, and every target was verified 200 on 2026-08-25.
 *
 * Trimmed 2026-08-25: 25 redirects and 7 removals were dropped because phases 0.1
 * to 0.5 had already given those URLs a better answer. /authorhub is the one that
 * mattered most - this file would have 410'd a page that went live that morning.
 * The rest were hub-level redirects (/blog, /tools) replaced by concept matches,
 * and five URLs now pointed at a real page instead of being declared gone.
 * Source: "retired pages/FINAL-Cleanup-Plan_2026-08-21_REVISED.xlsx", sheet "404 actions",
 * columns "FINAL action" and "FINAL target". Auto-generated - edit the sheet and regenerate.
 *
 * Registered early (before the page/city routes and before the /{post} catch-all at the
 * bottom of web.php) so these paths resolve here instead of falling through to a 404.
 *
 * Every source and every target was re-tested live as Googlebot on 2026-08-21:
 *   - all redirect targets returned 200
 *   - no source is a live page
 *   - no chains, no redirects into a 410, no collisions with the accounting/networth/
 *     stock-audit cluster redirect files
 *
 * Trailing slashes are deliberately absent. The server 301s "/pune/" to "/pune" before
 * Laravel routes, so a rule written with the slash would never fire.
 *
 * NOT here, on purpose:
 *   - the 218 /ifsc-code/{bank} index pages - one route in web.php covers them
 *   - 8 URLs containing a space, &, <, ] or ${...}. They cannot be route literals and
 *     already 404. They come from unescaped markup and unrendered template literals
 *     leaking into hrefs - that is a template bug, fix it at source.
 *   - /insurance-marketing-firm-registration - held until the IMF cluster ships.
 */

$cleanup404Redirects = [
    // Step 4 / Step 7 of the cleanup plan, added 2026-08-21 from the Link graph
    // fixes and Dup-no-canonical sheets rather than the 404 actions sheet.
    // /import-export-code is the wrong slug for a live page and carries 5,245
    // internal links - the largest single broken target after the icon files.
    ['/import-export-code', '/iec-registration'],
    // /index.php is a 200 duplicate of the homepage with no canonical. This is
    // the whole of GSC's "Duplicate without user-selected canonical" row.
    // /index.php is handled by App\Http\Middleware\RedirectIndexPhp as of Phase
    // 1.1.2, which runs long before routing. The rule that sat here could never
    // fire and stating it twice invites the two from drifting apart.
    ['/LLP-registration', '/llp-incorporation'],
    ['/annual-compliance-llp', '/pvt-llp-compliance'],
    ['/blog/esic-registration-online-india-2025', '/blog/esic-registration-in-india'],
    // the same section 17(2)(vi) perquisite, as a post
    ['/blog/esop-perquisite-tax-section-17', '/blog/esop-perquisite-tax-employees'],
    ['/blog/export-of-services-gst', '/blog/gst-on-it-software-services-export'],
    // entering India as a foreign company means registering a subsidiary
    ['/blog/foreign-company-india-entry', '/blog/foreign-subsidiary-registration-in-india'],
    ['/blog/gstat-appeal-procedure', '/blog/how-to-file-gstat-appeal'],
    ['/education-accounting-services', '/accounting-services-for-education-industry'],
    ['/eor-services', '/eor-india'],
    ['/esop-vs-bonus', '/esop-vs-profit-sharing-and-bonus'],
    ['/foreign-company-registration', '/foreign-subsidiary-registration-india'],
    ['/glossary/expenses', '/glossary/accounting/expenses'],
    ['/gratuity-calculations-and-compliance', '/gratuity-calculation-and-compliance-services'],
    ['/gratuity-calculations-compliance', '/gratuity-calculation-and-compliance-services'],
    ['/healthcare-accounting-services', '/healthcare-sector-accounting-services'],
    ['/hospitality-accounting-services', '/hospitality-sector-accounting-services'],
    ['/iec-code-registration', '/iec-registration'],
    ['/iso-registration/gurugram', '/iso-registration-certification-services/gurugram'],
    ['/itr-filing-for-salary/delhi', '/itr-for-salary/delhi'],
    ['/itr-filingfor-freelancers-professionals', '/itr-for-professionals'],
    ['/ngo-accounting-services', '/ngo-and-non-profit-accounting-services'],
    ['/payroll-ecommerce', '/e-commerce-sector-payroll-processing-services'],
    ['/payroll-ngo', '/payroll-services-for-ngonon-profit-industry'],
    ['/pf-calculator', '/tools/epf-pf-calculator'],
    ['/pf-esi-registration', '/pf-registration'],
    ['/pvt-limited-company-compliance', '/private-limited-company-compliance'],
    ['/service-sector-accounting', '/accounting-services-for-the-service-sector-industry'],
    ['/tax-planning/pune', '/tax-planning-services/pune'],
    ['/trading-accounting-services', '/accounting-services-for-trading-industry'],
    ['/transfer-pricing', '/blog/transfer-pricing-rules-2026'],
    ['/80g-registration/bangalore', '/80g-registration'],
    ['/Actuarial-valuation', '/actuarial-valuation-services-for-employee-benefits'],
    ['/Appointment-of-Director-in-Private-Limited-Company', '/appointment-of-director'],
    ['/accounting-services-for-education', '/accounting-services-for-education-industry'],
    ['/accounting-services-for-non-profit-ngo', '/ngo-and-non-profit-accounting-services'],
    // The actuarial cluster runs on two URL patterns. /actuarial-valuation/{city}
    // carries delhi and mumbai; /actuarial-valuation-services-for-employee-benefits/{city}
    // carries pune and gurugram. No city exists under both, so an old-pattern URL
    // can only be redirected where the new-pattern page actually exists.
    //
    // /actuarial-valuation/pune previously pointed at /actuarial-valuation/delhi,
    // which answered a Pune search with a Delhi page while a real Pune page was
    // live and ranking at position 5.
    ['/actuarial-valuation', '/actuarial-valuation-services-for-employee-benefits'],
    ['/actuarial-valuation/pune', '/actuarial-valuation-services-for-employee-benefits/pune'],
    ['/actuarial-valuation/gurugram', '/actuarial-valuation-services-for-employee-benefits/gurugram'],
    // delhi and mumbai were the last two pages left on the older pattern. Their
    // equivalents under the real one were created on 2026-08-25 by copying the page
    // and rewriting its six self-referential URLs, so the whole cluster now addresses
    // itself one way and the breadcrumb no longer points at /actuarial-valuation,
    // which is a 404. The old view files are left in place rather than deleted: the
    // working tree carries an unrelated uncommitted change across 1,226 city pages,
    // and removing files from that set risks entangling this change with it. With
    // these rules registered the old views are unreachable either way.
    ['/actuarial-valuation/delhi', '/actuarial-valuation-services-for-employee-benefits/delhi'],
    ['/actuarial-valuation/mumbai', '/actuarial-valuation-services-for-employee-benefits/mumbai'],
    ['/adt-1-filing-services/delhi', '/adt-1-filing-services'],
    ['/adt-1-filing-services/gurugram', '/adt-1-filing-services'],
    ['/adt-1-filing-services/mumbai', '/adt-1-filing-services'],
    ['/adt-1-filing-services/pune', '/adt-1-filing-services'],
    ['/annual-compliance-opc', '/annual-compliance-small-vs-startup-vs-opc'],
    ['/annual-compliance-private-limited', '/private-limited-company-compliance'],
    ['/annual-compliance-small-vs-startup-vs-opc/delhi', '/annual-compliance-small-vs-startup-vs-opc'],
    ['/annual-compliance-small-vs-startup-vs-opc/gurugram', '/annual-compliance-small-vs-startup-vs-opc'],
    ['/annual-compliance-small-vs-startup-vs-opc/mumbai', '/annual-compliance-small-vs-startup-vs-opc'],
    ['/annual-compliance-small-vs-startup-vs-opc/pune', '/annual-compliance-small-vs-startup-vs-opc'],
    ['/aoc-4-filing-services/delhi', '/aoc-4-filing-services'],
    ['/aoc-4-filing-services/gurugram', '/aoc-4-filing-services'],
    ['/aoc-4-filing-services/mumbai', '/aoc-4-filing-services'],
    ['/aoc-4-filing-services/pune', '/aoc-4-filing-services'],
    ['/backlog-filings-3-year-cleanup/delhi', '/backlog-filings-3-year-cleanup'],
    ['/backlog-filings-3-year-cleanup/gurugram', '/backlog-filings-3-year-cleanup'],
    ['/backlog-filings-3-year-cleanup/mumbai', '/backlog-filings-3-year-cleanup'],
    ['/backlog-filings-3-year-cleanup/pune', '/backlog-filings-3-year-cleanup'],
    ['/blog/advance-pricing-agreement-apa-rules-2026-application-process-timeline', '/blog/transfer-pricing-rules-2026'],
    ['/blog/annual-general-meeting-agm-business-post-agm-filings-guide', '/blog/annual-general-meeting-agm-when-to-hold-business-to-transact-what-to'],
    ['/blog/appeal-cit-a-itat-new-rules-2026-forms-procedures', '/blog/appeal-cit-itat-rules-2026-forms-procedures'],
    ['/blog/authorized-vs-paid-up-capital-everything-startups-must-know', '/blog/authorized-capital-vs-paid-up-capital'],
    ['/blog/caro-2020-clause-ii-inventories', '/blog/caro-2020-inventory-auditor-verification'],
    ['/blog/caro-2020-clause-x-public-issues-term-loans', '/blog/caro-2020-inventory-auditor-verification'],
    ['/blog/caro-2020-inventory-auditor-verification-reporting-guide', '/blog/caro-2020-inventory-auditor-verification'],
    ['/blog/carry-forward-losses-old-act-1961-new-act-2025', '/blog/carry-forward-losses-old-act-1961-act-2025'],
    // the cash conversion cycle is the core working capital metric
    ['/blog/cash-conversion-cycle', '/blog/working-capital-management-indian-sme-liquidity-guide'],
    // a category listing goes to the listing
    ['/blog/category/startup-business-registration', '/blog'],
    ['/blog/chg-1-chg-4-register-satisfy-charge-roc-guide', '/blog/chg-1-chg-4-how-to-register-satisfy-charge-roc-mortgage-pledge'],
    ['/blog/clubbing-income-new-vs-old-tax-regime-ay-2026-27', '/blog/clubbing-income-vs-old-tax-regime-ay-2026-27'],
    // the Code's headline rule, and the reason anyone reads about it
    ['/blog/code-on-wages-2019', '/blog/50-percent-basic-wage-rule-labour-code-salary-structure'],
    ['/blog/companies-act-section-62-rule-12-esop', '/blog/books-of-account-rules-2026-rule-46-section-62-income-tax'],
    ['/blog/days-inventory-outstanding-dio', '/blog/dso-days-sales-outstanding-reduce'],
    // deemed exports are a GST refund category; no post covers them alone
    ['/blog/deemed-exports-gst', '/blog/gst-refund-meaning-requirements-how-to-apply'],
    ['/blog/dir-11-resigning-director-roc-intimation-guide', '/blog/dir-11-resigning-director-s-intimation-to-roc-what-why'],
    ['/blog/draft-income-tax-rules-2026-complete-summary-key-changes', '/blog/draft-income-tax-rules-2026-summary-key-changes'],
    ['/blog/esop-dilution-math-startup-founders', '/blog/how-to-apply-dpiit-startup-recognition-founders-playbook'],
    // nearest ESOP-for-startups post; none covers pool sizing
    ['/blog/esop-pool-size-startups-india', '/blog/esop-tax-startup-employees-when-how-much-dpiit-deferral'],
    // vesting periods and how they are accounted for
    ['/blog/esop-vesting-schedule-cliff-explained', '/blog/esop-expense-vesting-period-accounting'],
    // the refund process, start to finish
    ['/blog/gst-refund-process-and-procedure', '/blog/gst-refund-meaning-requirements-how-to-apply'],
    ['/blog/gst-refund-rejection-appeal', '/blog/gstat-appeal-exporters-refund-rejection-track-status'],
    ['/blog/gstat-powers-confirm-modify-annul-remand-explained', '/blog/gstat-powers-confirm-modify-annul-remand'],
    ['/blog/gstat-single-member-vs-division-bench', '/blog/gstat-principal-vs-state-bench'],
    ['/blog/inc-22-registered-office-change-documents-rejections-guide', '/blog/inc-22-filing-office-change-documents-common-rejections-post-change'],
    // inventory turnover is a working capital measure
    ['/blog/inventory-turnover-ratio', '/blog/working-capital-management-indian-sme-liquidity-guide'],
    // inverted duty is a refund type; no post covers it alone
    ['/blog/inverted-duty-structure-gst', '/blog/gst-refund-meaning-requirements-how-to-apply'],
    ['/blog/labour-welfare-fund', '/blog/labour-welfare-fund-india-contribution-rates-due-dates'],
    // filing the LUT itself
    ['/blog/letter-of-undertaking-lut-gst', '/blog/lut-filing-it-exporters-refund'],
    ['/blog/market-valuation-ratios-complete-guide', '/blog/form-spice-complete-guide-to-company-incorporation-in-india'],
    ['/blog/mgt-14-resolutions-filed-roc-guide', '/blog/mgt-14-which-board-resolutions-must-be-filed-roc-within-what-time'],
    // running payroll across states is this compliance calendar
    ['/blog/multi-state-payroll-india', '/blog/monthly-payroll-compliance-checklist-india-deadlines'],
    ['/blog/net-worth-certificate-process-and-requirements', '/blog/guarantor-net-worth-requirements'],
    ['/blog/new-labour-codes-2025', '/blog/4-labour-codes-2025-employer-guide-india'],
    ['/blog/old-regime-vs-new-regime-ay-2026-27', '/blog/clubbing-income-vs-old-tax-regime-ay-2026-27'],
    ['/blog/payroll-setup-india-comprehensive-guide-for-businesses', '/blog/zoho-books-payroll-setup-india-guide'],
    ['/blog/private-limited-company-registration-india-what-works-what-fails-expert-advice', '/blog/private-limited-company-registration-india-what-works-what-fails'],
    ['/blog/private-limited-company-vs-llp-which-is-right-for-your-startup', '/blog/private-limited-company-vs-llp'],
    ['/blog/professional-tax-india', '/blog/professional-tax-india-state-wise-rates-slabs'],
    // section 107 is the first appeal against a demand order
    ['/blog/section-107-gst-appeal', '/blog/gst-demand-order-appeal-process'],
    ['/blog/section-80-iac-esop-deferment-startup', '/blog/section-80-iac-startup-tax-holiday'],
    ['/blog/significant-economic-presence-sep-rules-2026-thresholds-non-resident-taxation', '/blog/significant-economic-presence-sep-rules-2026-thresholds-non-resident'],
    ['/blog/state-minimum-wages-india', '/blog/minimum-wages-india-2026-state-wise-rates-non-compliance'],
    ['/blog/trademark-classes-india-all-45-nice-classification-explained', '/blog/trademark-classes-india-all-45-nice-classification'],
    ['/blog/trademark-for-startups-dpiit-fee-filing-strategy-class-selection', '/blog/trademark-startups-dpiit-fee-filing-strategy-class-selection'],
    ['/blog/transfer-pricing-rules-2026-arms-length-price-methods-documentation', '/blog/transfer-pricing-rules-2026'],
    ['/blog/what-is-esop-india-startup-guide', '/blog/what-is-startup-registration-guide-indian-businesses'],
    ['/blog/zoho-books-gstr-1-gstr-3b-filing-guide', '/blog/zoho-books-tds-india-guide'],
    ['/change-in-authorized-capital-of-a-company', '/change-in-authorised-capital'],
    ['/change-name-of-company', '/change-in-name-of-company'],
    ['/change-registered-office', '/change-in-registered-office'],
    ['/change-registered-office/bangalore', '/change-in-registered-office'],
    ['/change-registered-office/chennai', '/change-in-registered-office'],
    ['/change-registered-office/gurugram', '/change-in-registered-office/gurugram'],
    ['/change-registered-office/hyderabad', '/change-in-registered-office'],
    ['/change-registered-office/kolkata', '/change-in-registered-office'],
    ['/change-registered-office/mumbai', '/change-in-registered-office/mumbai'],
    ['/condonation-of-delay-roc-filings/delhi', '/condonation-of-delay-roc-filings'],
    ['/condonation-of-delay-roc-filings/gurugram', '/condonation-of-delay-roc-filings'],
    ['/condonation-of-delay-roc-filings/mumbai', '/condonation-of-delay-roc-filings'],
    ['/condonation-of-delay-roc-filings/pune', '/condonation-of-delay-roc-filings'],
    ['/conversion-llp-to-private-limited', '/convert-llp-to-private-limited-company'],
    ['/copyright-artistic-work', '/copyright-registration-for-artistic-work'],
    ['/director-disqualification-removal', '/removal-of-director'],
    ['/dpt-3-filing', '/dpt-3-filing-services'],
    ['/dpt-3-filing-services/delhi', '/dpt-3-filing-services'],
    ['/dpt-3-filing-services/gurugram', '/dpt-3-filing-services'],
    ['/dpt-3-filing-services/mumbai', '/dpt-3-filing-services'],
    ['/dpt-3-filing-services/pune', '/dpt-3-filing-services'],
    ['/due-diligence', '/esop-due-diligence-prep-for-funding-and-ma'],
    ['/eor-india-services', '/eor-india'],
    ['/esic-calculation-compliance', '/esic-calculation-and-compliance-services'],
    ['/esic-returns', '/esic-return'],
    ['/first-statutory-auditor-appointment-checklist', '/first-year-statutory-audit-checklist'],
    ['/fssai-registration/ahmedabad', '/fssai-registration'],
    ['/fssai-registration/amritsar', '/fssai-registration'],
    ['/fssai-registration/aurangabad', '/fssai-registration'],
    ['/fssai-registration/bengaluru', '/fssai-registration'],
    ['/fssai-registration/bhubaneswar', '/fssai-registration'],
    ['/fssai-registration/bilaspur', '/fssai-registration'],
    ['/fssai-registration/chandigarh', '/fssai-registration'],
    ['/fssai-registration/cuttack', '/fssai-registration'],
    ['/fssai-registration/dehradun', '/fssai-registration'],
    ['/fssai-registration/faridabad', '/fssai-registration'],
    ['/fssai-registration/ghaziabad', '/fssai-registration'],
    ['/fssai-registration/haridwar', '/fssai-registration'],
    ['/fssai-registration/indore', '/fssai-registration'],
    ['/fssai-registration/jaipur', '/fssai-registration'],
    ['/fssai-registration/jalandhar', '/fssai-registration'],
    ['/fssai-registration/jodhpur', '/fssai-registration'],
    ['/fssai-registration/kanpur', '/fssai-registration'],
    ['/fssai-registration/kota', '/fssai-registration'],
    ['/fssai-registration/lucknow', '/fssai-registration'],
    ['/fssai-registration/ludhiana', '/fssai-registration'],
    ['/fssai-registration/meerut', '/fssai-registration'],
    ['/fssai-registration/nagpur', '/fssai-registration'],
    ['/fssai-registration/noida', '/fssai-registration'],
    ['/fssai-registration/patna', '/fssai-registration'],
    ['/fssai-registration/raipur', '/fssai-registration'],
    ['/fssai-registration/rajkot', '/fssai-registration'],
    ['/fssai-registration/ranchi', '/fssai-registration'],
    ['/fssai-registration/surat', '/fssai-registration'],
    ['/fssai-registration/udaipur', '/fssai-registration'],
    ['/fssai-registration/vadodara', '/fssai-registration'],
    ['/fssai-registration/varanasi', '/fssai-registration'],
    ['/glossary/general-ledger', '/glossary/accounting/general-ledger'],
    ['/glossary/ind-as-102-share-based-payment', '/glossary/accounting/ind-as-102-share-based-payment'],
    ['/gratuity-calculation-compliance', '/gratuity-calculation-and-compliance-services'],
    ['/gst-returns-for-freelancers/mumbai', '/gst-returns-for-freelancers'],
    ['/hsn-code/48', '/hsn-code/48239090'],
    ['/income-tax-notice-response', '/income-tax-notice'],
    ['/income-tax-notice/bangalore', '/income-tax-notice'],
    ['/income-tax-notice/chennai', '/income-tax-notice'],
    ['/income-tax-notice/hyderabad', '/income-tax-notice'],
    ['/income-tax-notices', '/income-tax-notices-under-section-148'],
    ['/income-tax-return-filing', '/income-tax-return'],
    ['/index', '/'],
    // A city name on its own is not a page here and never has been - no view, no
    // route, not in any sitemap, and the strings do not appear in web.php at all.
    // They reach the site two ways: 192 city cards on 48 pages lost their service
    // prefix and link /gurugram instead of /{service}/gurugram, and outside links
    // arrive with a doubled slash. Both landed on a 404.
    //
    // The //city form needs no rule of its own. CollapseDuplicateSlashes turns it
    // into /city first, so these eight cover both shapes in a single hop.
    //
    // This does NOT touch /{service}/{city}. Laravel matches the whole path, so a
    // one-segment rule cannot catch a two-segment URL - /service-sector-accounting
    // redirects today while /service-sector-accounting/mumbai stays 200.
    ['/bangalore', '/'],
    ['/chennai', '/'],
    ['/delhi', '/'],
    ['/gurugram', '/'],
    ['/hyderabad', '/'],
    ['/kolkata', '/'],
    ['/mumbai', '/'],
    ['/pune', '/'],
    ['/irdai-imf-registration', '/imf-irdai-registration-process'],
    ['/itr-capital-gains', '/itr-for-capital-gains'],
    ['/itr-filing', '/itr-filing-proprietorship'],
    ['/itr-filing-proprietorship/delhi', '/itr-filing-proprietorship'],
    ['/itr-filing-proprietorship/gurugram', '/itr-filing-proprietorship'],
    ['/itr-filing-proprietorship/pune', '/itr-filing-proprietorship'],
    ['/itr-for-construction-firms/delhi', '/itr-for-construction-firms'],
    ['/itr-for-construction-firms/gurugram', '/itr-for-construction-firms'],
    ['/itr-for-construction-firms/mumbai', '/itr-for-construction-firms'],
    ['/itr-for-construction-firms/pune', '/itr-for-construction-firms'],
    ['/itr-for-doctors/delhi', '/itr-for-doctors'],
    ['/itr-for-doctors/gurugram', '/itr-for-doctors'],
    ['/itr-for-doctors/mumbai', '/itr-for-doctors'],
    ['/itr-for-doctors/pune', '/itr-for-doctors'],
    ['/itr-for-ecommerce-sellers/delhi', '/itr-for-ecommerce-sellers'],
    ['/itr-for-ecommerce-sellers/gurugram', '/itr-for-ecommerce-sellers'],
    ['/itr-for-ecommerce-sellers/mumbai', '/itr-for-ecommerce-sellers'],
    ['/itr-for-ecommerce-sellers/pune', '/itr-for-ecommerce-sellers'],
    ['/itr-for-esop-employees/delhi', '/itr-for-esop-employees'],
    ['/itr-for-esop-employees/gurugram', '/itr-for-esop-employees'],
    ['/itr-for-esop-employees/mumbai', '/itr-for-esop-employees'],
    ['/itr-for-esop-employees/pune', '/itr-for-esop-employees'],
    ['/itr-for-fno-trader/delhi', '/itr-for-fno-trader'],
    ['/itr-for-fno-trader/gurugram', '/itr-for-fno-trader'],
    ['/itr-for-fno-trader/mumbai', '/itr-for-fno-trader'],
    ['/itr-for-fno-trader/pune', '/itr-for-fno-trader'],
    ['/itr-for-fo-traders/delhi', '/itr-for-fno-trader'],
    ['/itr-for-fo-traders/gurugram', '/itr-for-fno-trader'],
    ['/itr-for-fo-traders/pune', '/itr-for-fno-trader'],
    ['/itr-for-foreign-income/delhi', '/itr-for-foreign-income'],
    ['/itr-for-foreign-income/gurugram', '/itr-for-foreign-income'],
    ['/itr-for-foreign-income/mumbai', '/itr-for-foreign-income'],
    ['/itr-for-foreign-income/pune', '/itr-for-foreign-income'],
    ['/itr-for-llp-partnership/delhi', '/itr-for-llp-partnership'],
    ['/itr-for-llp-partnership/gurugram', '/itr-for-llp-partnership'],
    ['/itr-for-llp-partnership/mumbai', '/itr-for-llp-partnership'],
    ['/itr-for-llp-partnership/pune', '/itr-for-llp-partnership'],
    ['/itr-for-pharma-businesses/delhi', '/itr-for-pharma-businesses'],
    ['/itr-for-pharma-businesses/gurugram', '/itr-for-pharma-businesses'],
    ['/itr-for-pharma-businesses/mumbai', '/itr-for-pharma-businesses'],
    ['/itr-for-pharma-businesses/pune', '/itr-for-pharma-businesses'],
    ['/itr-for-professionals/bangalore', '/itr-for-professionals'],
    ['/itr-for-professionals/pune', '/itr-for-professionals'],
    ['/itr-for-restaurants/delhi', '/itr-for-restaurants'],
    ['/itr-for-restaurants/gurugram', '/itr-for-restaurants'],
    ['/itr-for-restaurants/mumbai', '/itr-for-restaurants'],
    ['/itr-for-restaurants/pune', '/itr-for-restaurants'],
    ['/itr-for-senior-citizens/delhi', '/itr-for-senior-citizens'],
    ['/itr-for-senior-citizens/gurugram', '/itr-for-senior-citizens'],
    ['/itr-for-senior-citizens/mumbai', '/itr-for-senior-citizens'],
    ['/itr-for-senior-citizens/pune', '/itr-for-senior-citizens'],
    ['/itr-for-startup-founders/delhi', '/itr-for-startup-founders'],
    ['/itr-for-startup-founders/gurugram', '/itr-for-startup-founders'],
    ['/itr-for-startup-founders/mumbai', '/itr-for-startup-founders'],
    ['/itr-for-startup-founders/pune', '/itr-for-startup-founders'],
    ['/itr-for-textile-manufacturers/delhi', '/itr-for-textile-manufacturers'],
    ['/itr-for-textile-manufacturers/gurugram', '/itr-for-textile-manufacturers'],
    ['/itr-for-textile-manufacturers/mumbai', '/itr-for-textile-manufacturers'],
    ['/itr-for-textile-manufacturers/pune', '/itr-for-textile-manufacturers'],
    ['/llp-form-11-filing', '/llp-form-11-form-8-filing'],
    ['/llp-form-11-form-8-filing/delhi', '/llp-form-11-form-8-filing'],
    ['/llp-form-11-form-8-filing/gurugram', '/llp-form-11-form-8-filing'],
    ['/llp-form-11-form-8-filing/mumbai', '/llp-form-11-form-8-filing'],
    ['/llp-form-11-form-8-filing/pune', '/llp-form-11-form-8-filing'],
    ['/llp-form-8-filing', '/llp-form-11-form-8-filing'],
    ['/llp-strike-off', '/llp-strike-off-form-24'],
    ['/llp-strike-off-form-24/delhi', '/llp-strike-off-form-24'],
    ['/llp-strike-off-form-24/gurugram', '/llp-strike-off-form-24'],
    ['/llp-strike-off-form-24/mumbai', '/llp-strike-off-form-24'],
    ['/llp-strike-off-form-24/pune', '/llp-strike-off-form-24'],
    ['/mgt-7-filing-services/delhi', '/mgt-7-filing-services'],
    ['/mgt-7-filing-services/gurugram', '/mgt-7-filing-services'],
    ['/mgt-7-filing-services/mumbai', '/mgt-7-filing-services'],
    ['/mgt-7-filing-services/pune', '/mgt-7-filing-services'],
    ['/msds-certificate', '/msds-certificate-services'],
    ['/msds-certificate/mumbai', '/msds-certificate-services/mumbai'],
    ['/msds-certificate/pune', '/msds-certificate-services/pune'],
    ['/nbfc-registration', '/nbfc-registration-rbi-applicability-and-process'],
    ['/ngo-registration/12a-registration/mumbai', '/12a-registration/mumbai'],
    ['/ngo-registration/80g-registration/mumbai', '/80g-registration/mumbai'],
    ['/ngo-registration/ahmedabad', '/ngo-registration'],
    ['/ngo-registration/amritsar', '/ngo-registration'],
    ['/ngo-registration/aurangabad', '/ngo-registration'],
    ['/ngo-registration/bengaluru', '/ngo-registration'],
    ['/ngo-registration/bhubaneswar', '/ngo-registration'],
    ['/ngo-registration/bilaspur', '/ngo-registration'],
    ['/ngo-registration/chandigarh', '/ngo-registration'],
    ['/ngo-registration/cuttack', '/ngo-registration'],
    ['/ngo-registration/dehradun', '/ngo-registration'],
    ['/ngo-registration/faridabad', '/ngo-registration'],
    ['/ngo-registration/ghaziabad', '/ngo-registration'],
    ['/ngo-registration/haridwar', '/ngo-registration'],
    ['/ngo-registration/indore', '/ngo-registration'],
    ['/ngo-registration/jaipur', '/ngo-registration'],
    ['/ngo-registration/jalandhar', '/ngo-registration'],
    ['/ngo-registration/jodhpur', '/ngo-registration'],
    ['/ngo-registration/kanpur', '/ngo-registration'],
    ['/ngo-registration/kota', '/ngo-registration'],
    ['/ngo-registration/lucknow', '/ngo-registration'],
    ['/ngo-registration/ludhiana', '/ngo-registration'],
    ['/ngo-registration/meerut', '/ngo-registration'],
    ['/ngo-registration/nagpur', '/ngo-registration'],
    ['/ngo-registration/noida', '/ngo-registration'],
    ['/ngo-registration/patna', '/ngo-registration'],
    ['/ngo-registration/raipur', '/ngo-registration'],
    ['/ngo-registration/rajkot', '/ngo-registration'],
    ['/ngo-registration/ranchi', '/ngo-registration'],
    ['/ngo-registration/surat', '/ngo-registration'],
    ['/ngo-registration/udaipur', '/ngo-registration'],
    ['/ngo-registration/vadodara', '/ngo-registration'],
    ['/ngo-registration/varanasi', '/ngo-registration'],
    ['/payroll-construction-real-estate', '/payroll-services-for-construction-real-estate-industry'],
    ['/payroll-education', '/payroll-services-for-education'],
    ['/payroll-healthcare', '/payroll-services-for-healthcare'],
    ['/payroll-hospitality', '/payroll-services-for-hospitality'],
    ['/payroll-hospitality/gurugram', '/payroll-services-for-the-hospitality-industry/gurugram'],
    ['/payroll-hospitality/pune', '/payroll-services-for-the-hospitality-industry/pune'],
    ['/payroll-logistics-transport', '/payroll-services-for-travel-and-logistics-industry'],
    ['/payroll-management-services', '/payroll-processing-and-management-services'],
    ['/payroll-processing-services-for-the-education-industry', '/payroll-processing-services-for-education-industry'],
    ['/payroll-security-agencies', '/payroll-services-for-security-agencies'],
    ['/payroll-service-sector', '/payroll-services-for-service-sector-businesses'],
    ['/payroll-services-for-construction-and-real-estate', '/payroll-services-for-construction-real-estate-industry'],
    ['/payroll-services-for-construction-and-real-estate-industry', '/payroll-services-for-construction-real-estate-industry'],
    ['/payroll-services-for-ecommerce', '/e-commerce-sector-payroll-processing-services'],
    ['/payroll-services-for-education/mumbai', '/payroll-services-for-education'],
    ['/payroll-services-for-education/pune', '/payroll-services-for-education'],
    ['/payroll-services-for-ngo', '/payroll-services-for-ngonon-profit-industry'],
    ['/payroll-services-for-service-sector', '/payroll-services-for-service-sector-businesses'],
    ['/payroll-services-it-software-companies', '/payroll-services-for-it-software'],
    ['/pf-returns', '/pf-return'],
    ['/private-limited-company-registration-in-india', '/private-limited-company-registration'],
    ['/private-limited-company-registration/varanasi', '/private-limited-company-registration'],
    ['/provident-fund-registration/gurugram', '/pf-registration/gurugram'],
    ['/provident-fund-registration/mumbai', '/pf-registration/mumbai'],
    ['/pvt-ltd-company-compliance', '/convert-partnership-to-pvt-ltd-company'],
    ['/restore-struck-off-company-mca/delhi', '/restore-struck-off-company-mca'],
    ['/restore-struck-off-company-mca/gurugram', '/restore-struck-off-company-mca'],
    ['/restore-struck-off-company-mca/mumbai', '/restore-struck-off-company-mca'],
    ['/restore-struck-off-company-mca/pune', '/restore-struck-off-company-mca'],
    ['/roc-notice/kolkata', '/roc-notice'],
    ['/small-company-compliance-family-vehicles/delhi', '/small-company-compliance-family-vehicles'],
    ['/small-company-compliance-family-vehicles/gurugram', '/small-company-compliance-family-vehicles'],
    ['/small-company-compliance-family-vehicles/mumbai', '/small-company-compliance-family-vehicles'],
    ['/small-company-compliance-family-vehicles/pune', '/small-company-compliance-family-vehicles'],
    ['/small-company-compliance-holding-companies/delhi', '/small-company-compliance-holding-companies'],
    ['/small-company-compliance-holding-companies/gurugram', '/small-company-compliance-holding-companies'],
    ['/small-company-compliance-holding-companies/mumbai', '/small-company-compliance-holding-companies'],
    ['/small-company-compliance-holding-companies/pune', '/small-company-compliance-holding-companies'],
    ['/small-company-compliance-startups-pre-revenue/delhi', '/small-company-compliance-startups-pre-revenue'],
    ['/small-company-compliance-startups-pre-revenue/gurugram', '/small-company-compliance-startups-pre-revenue'],
    ['/small-company-compliance-startups-pre-revenue/mumbai', '/small-company-compliance-startups-pre-revenue'],
    ['/small-company-compliance-startups-pre-revenue/pune', '/small-company-compliance-startups-pre-revenue'],
    // Three slugs were built for one service. This one is a live 200 page that
    // already names the no-s page as its canonical - a duplicate Google has to
    // crawl before it can be told to ignore it. The redirect says so up front.
    // The line below it is a plain dead URL.
    ['/migration-from-tally-to-zohos', '/migration-from-tally-to-zoho'],
    ['/tally-to-zoho-migration', '/migration-from-tally-to-zoho'],
    // The two city pages under that dead parent. They were live 200s hanging off a
    // 404, which is why Google had them indexed with no route in from the site.
    // Sent to the India page by decision, not to their own city: /migration-from-
    // tally-to-zoho/{city} is a real page but is still redirected away by
    // accounting-cluster-redirects.php, so pointing here would have been a chain.
    ['/tally-to-zoho-migration/mumbai', '/migration-from-tally-to-zoho'],
    ['/tally-to-zoho-migration/pune', '/migration-from-tally-to-zoho'],
    ['/tax-audit-under-section-44ab', '/tax-audit'],
    ['/tds-return-filing-24q/delhi', '/tds-return-filing-24q'],
    ['/tds-return-filing-24q/gurugram', '/tds-return-filing-24q'],
    ['/tds-return-filing-24q/mumbai', '/tds-return-filing-24q'],
    ['/tds-return-filing-24q/pune', '/tds-return-filing-24q'],
    ['/tools/board-resolution-for-gst-generator', '/tools/download-format/board-resolution-generator'],
    ['/tools/cash-flow-projection-tool', '/tools/cash-flow-calculator'],
    // /tools/csr-applicability-checker pointed at /tools/ind-as-applicability-checker,
    // which is a different subject: Section 135 CSR applicability versus which
    // accounting standards a company must follow. Phase 0.4 removed the tile that
    // linked it, on the finding that no live tool computes CSR applicability, so
    // sending searchers to an unrelated checker would contradict that. Zero
    // impressions in the ninety days to 2026-08-24, so nothing is lost by leaving
    // it a 404.
    ['/tools/ctc-to-in-hand-calculator', '/tools/ctc-to-in-hand-salary-calculator'],
    ['/tools/dir-3-kyc-reminder', '/tools/dir3-kyc-reminder'],
    ['/tools/eway-bill-validity-calculator', '/tools/e-way-bill-calculator'],
    ['/tools/free-stamp-duty-calculator-for-llp-and-company-registration', '/tools/stamp-duty-calculator'],
    ['/tools/gst-interest-calculator', '/tools/gst-refund-interest-calculator'],
    ['/tools/gst-inverted-duty-refund-calculator', '/tools/inverted-duty-refund-calculator'],
    ['/tools/gstr-2a-3b-reconciliation', '/tools/gstr-2a-vs-3b-reconciliation'],
    ['/tools/hra-calculator', '/tools/hra-exemption-calculator'],
    ['/tools/income-tax-', '/tools/income-tax-calculator'],
    ['/tools/itc-eligibility-calculator', '/tools/itc-eligibility-checker'],
    ['/tools/pf-calculator', '/tools/epf-pf-calculator'],
    ['/tools/profit-margin-calculator', '/tools/ebitda-margin-calculator'],
    ['/tools/rent-receipt-generator', '/tools/rent-agreement-generator'],
    ['/tools/startup-india-eligibility-checker', '/tools/startup-india-eligibility'],
    ['/tools/take-home-salary-calculator', '/tools/tds-on-salary-calculator'],
    ['/trademark-notice-reply', '/trademark-notice'],
    ['/turnover-certificate-current-account', '/turnover-certificate-for-current-account'],
    ['/turnover-certificate-current-account/mumbai', '/turnover-certificate-for-current-account/mumbai'],
    ['/turnover-certificate-current-account/pune', '/turnover-certificate-for-current-account/pune'],
    ['/turnover-certificate-for-tender/bangalore', '/turnover-certificate-for-tender'],
    ['/turnover-certificate-for-tender/chennai', '/turnover-certificate-for-tender'],
    ['/turnover-certificate-for-tender/hyderabad', '/turnover-certificate-for-tender'],
    // /udyam-registration.xml was here, sending a retired SITEMAP file to the Udyam
    // service page. Wrong on two counts: a sitemap is not a page, so a searcher was
    // never going to land on it, and no sitemap index references it any more. A
    // retired sitemap file should simply be gone. Production already answers 404 -
    // nginx serves .xml itself and the request never reaches Laravel - so the rule
    // could not fire there anyway, and it only ever misfired on the test server.
    ['/wholly-owned-subsidiary-registration', '/wholly-owned-subsidiary-of-foreign-company-india'],
    ['/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026', '/blog/annual-compliance-requirements-for-companies-in-india'],
];

foreach ($cleanup404Redirects as $__r) {
    Route::redirect($__r[0], $__r[1], 301);
}

/*
 * 410 Gone. These pages are retired with no equivalent to send anyone to. 410 rather
 * than 404 so Google stops re-crawling them.
 */
$cleanup404Gone = [
    // The 231 URLs originally earmarked here still ship separately as Phase 1.1.4.
    //
    // The fourteen below are a different case and were added after a full crawl.
    // They were never published - each was linked from a "related services" block
    // written against a service line that was planned and never built - so there
    // is no page to redirect to and nothing live that means the same thing. Every
    // candidate destination was checked and returns 404 too. A 410 says so plainly
    // and stops Google re-crawling them; the 29 internal links that pointed here
    // are removed in the same change, so nothing on the site reaches these now.
    '/aif-registration',
    '/audit-assurance-services',
    '/audit-services',
    '/business-valuation-services',
    '/capital-gains-tax-advisory',
    '/compounding-of-offences',
    '/direct-tax-services',
    '/duns-number-service',
    '/fema-compliance',
    '/gstat-litigation-services',
    '/income-tax-litigation',
    '/international-fema-services',
    '/scrutiny-assessment',
    '/section-8-compliance',
];

foreach ($cleanup404Gone as $__g) {
    Route::get($__g, function () {
        abort(410);
    });
}
