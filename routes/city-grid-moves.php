<?php

use Illuminate\Support\Facades\Route;

/*
 * City pages moved onto their own service's slug.
 *
 * A card in a city grid claims "this service, in this city". Where a page was
 * live under a slug that is not itself an India page, it has been moved onto the
 * service that lists it and the old URL redirects here.
 *
 * The parent was read from each India page's own city grid, never inferred from
 * the slug. That mattered: /irdai-imf-registration/mumbai belongs to
 * /irda-imf-business-registration, a pairing no amount of text matching would
 * have produced, but the IMF page links it directly.
 *
 * A page whose slug redirects is NOT stranded - it is a real service under an old
 * name. /itr-filing-for-freelancers-professionals 301s to /itr-for-freelancers,
 * so its city pages are ITR pages and stay there rather than being relabelled as
 * freelancer business registration.
 *
 * Must stay above the /{post} catch-all in web.php.
 */

$cityGridMoves = [
    ['/actuarial-valuation/delhi', '/actuarial-valuation-services-for-employee-benefits/delhi'],
    ['/actuarial-valuation/mumbai', '/actuarial-valuation-services-for-employee-benefits/mumbai'],
    ['/change-name-of-company/delhi', '/change-in-name-of-company/delhi'],
    ['/change-name-of-company/pune', '/change-in-name-of-company/pune'],
    ['/change-registered-office/delhi', '/change-in-registered-office/delhi'],
    ['/change-registered-office/pune', '/change-in-registered-office/pune'],
    ['/esic-calculation-compliance/delhi', '/esic-calculation-and-compliance-services/delhi'],
    ['/esic-calculation-compliance/gurugram', '/esic-calculation-and-compliance-services/gurugram'],
    ['/esic-calculation-compliance/mumbai', '/esic-calculation-and-compliance-services/mumbai'],
    ['/esic-calculation-compliance/pune', '/esic-calculation-and-compliance-services/pune'],
    ['/esic-returns/delhi', '/esic-return/delhi'],
    ['/esic-returns/gurugram', '/esic-return/gurugram'],
    ['/esic-returns/mumbai', '/esic-return/mumbai'],
    ['/esic-returns/pune', '/esic-return/pune'],
    ['/gratuity-calculation-compliance/delhi', '/gratuity-calculation-and-compliance-services/delhi'],
    ['/gratuity-calculation-compliance/pune', '/gratuity-calculation-and-compliance-services/pune'],
    ['/gratuity-calculations-and-compliance/gurugram', '/gratuity-calculation-and-compliance-services/gurugram'],
    ['/gratuity-calculations-compliance/mumbai', '/gratuity-calculation-and-compliance-services/mumbai'],
    ['/iso-registration/delhi', '/iso-registration-certification-services/delhi'],
    ['/iso-registration/mumbai', '/iso-registration-certification-services/mumbai'],
    ['/iso-registration/pune', '/iso-registration-certification-services/pune'],
    ['/llp-compliance/delhi', '/pvt-llp-compliance/delhi'],
    ['/llp-compliance/gurugram', '/pvt-llp-compliance/gurugram'],
    ['/llp-compliance/mumbai', '/pvt-llp-compliance/mumbai'],
    ['/llp-compliance/pune', '/pvt-llp-compliance/pune'],
    ['/msds-certificate/delhi', '/msds-certificate-services/delhi'],
    ['/msds-certificate/gurugram', '/msds-certificate-services/gurugram'],
    ['/partnership-to-private-limited/pune', '/convert-partnership-to-pvt-ltd-company/pune'],
    ['/payroll-construction-real-estate/mumbai', '/payroll-services-for-construction-real-estate-industry/mumbai'],
    ['/payroll-ecommerce/mumbai', '/e-commerce-sector-payroll-processing-services/mumbai'],
    ['/payroll-education/mumbai', '/payroll-processing-services-for-education-industry/mumbai'],
    ['/payroll-healthcare/mumbai', '/payroll-processing-for-the-healthcare-industry/mumbai'],
    ['/payroll-hospitality/mumbai', '/payroll-services-for-the-hospitality-industry/mumbai'],
    ['/payroll-it-software/mumbai', '/payroll-services-for-it-and-software-industry/mumbai'],
    ['/payroll-logistics-transport/mumbai', '/payroll-services-for-travel-and-logistics-industry/mumbai'],
    ['/payroll-ngo/mumbai', '/payroll-services-for-ngonon-profit-industry/mumbai'],
    ['/payroll-processing-and-management/delhi', '/payroll-processing-and-management-services/delhi'],
    ['/payroll-security-agencies/mumbai', '/payroll-services-for-security-agencies/mumbai'],
    ['/payroll-service-sector/mumbai', '/payroll-services-for-service-sector-businesses/mumbai'],
    ['/payroll-services-for-construction-and-real-estate-industry/delhi', '/payroll-services-for-construction-real-estate-industry/delhi'],
    ['/payroll-services-for-construction-and-real-estate/gurugram', '/payroll-services-for-construction-real-estate-industry/gurugram'],
    ['/payroll-services-for-construction-and-real-estate/pune', '/payroll-services-for-construction-real-estate-industry/pune'],
    ['/payroll-services-for-ecommerce/delhi', '/e-commerce-sector-payroll-processing-services/delhi'],
    ['/payroll-services-for-ngo/delhi', '/payroll-services-for-ngonon-profit-industry/delhi'],
    ['/payroll-services-for-service-sector/delhi', '/payroll-services-for-service-sector-businesses/delhi'],
    ['/pf-returns/delhi', '/pf-return/delhi'],
    ['/pf-returns/mumbai', '/pf-return/mumbai'],
    ['/pf-returns/pune', '/pf-return/pune'],
    ['/provident-fund-registration/delhi', '/pf-registration/delhi'],
    ['/provident-fund-registration/pune', '/pf-registration/pune'],
    ['/public-limited-company-registration/delhi', '/public-company-registration/delhi'],
    ['/public-limited-company-registration/mumbai', '/public-company-registration/mumbai'],
    ['/section-8-company-registration/pune', '/section8-company-registration/pune'],
    ['/sole-proprietorship-registration/mumbai', '/proprietorship-registration/mumbai'],
    ['/tally-to-zoho-migration/mumbai', '/migration-from-tally-to-zohos/mumbai'],
    ['/tally-to-zoho-migration/pune', '/migration-from-tally-to-zohos/pune'],
    ['/tax-planning/delhi', '/tax-planning-services/delhi'],
    ['/tax-planning/mumbai', '/tax-planning-services/mumbai'],
    ['/tds-returns/delhi', '/tds-return/delhi'],
    ['/tds-returns/gurugram', '/tds-return/gurugram'],
    ['/tds-returns/mumbai', '/tds-return/mumbai'],
    ['/tds-returns/pune', '/tds-return/pune'],
    ['/trademark-notice-reply/delhi', '/trademark-notice/delhi'],
    ['/trademark-notice-reply/gurugram', '/trademark-notice/gurugram'],
    ['/trademark-notice-reply/mumbai', '/trademark-notice/mumbai'],
    ['/trademark-notice-reply/pune', '/trademark-notice/pune'],
    ['/turnover-certificate-current-account/delhi', '/turnover-certificate-for-current-account/delhi'],
    ['/turnover-certificate-current-account/gurugram', '/turnover-certificate-for-current-account/gurugram'],
];

foreach ($cityGridMoves as $__m) {
    Route::permanentRedirect($__m[0], $__m[1]);
}
