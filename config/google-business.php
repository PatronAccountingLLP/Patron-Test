<?php

/*
 * Google Business Profile - credentials and sync settings.
 * ---------------------------------------------------------------------------
 * Reviews are pulled by `php artisan testimonials:sync`. Nothing here is read
 * at page-render time; the site always renders from the testimonials table.
 *
 * The Business Profile APIs need OAuth as a user who manages the profile - a
 * service account cannot read reviews. Authorise once, keep the refresh token,
 * and the sync exchanges it for an access token on each run.
 *
 * To get a refresh token:
 *   1. Cloud console > APIs & Services > Credentials > OAuth client ID
 *      (type "Web application"). Note the client ID and secret.
 *   2. Send the managing Google account to:
 *      https://accounts.google.com/o/oauth2/v2/auth
 *        ?client_id=<CLIENT_ID>
 *        &redirect_uri=<REDIRECT>
 *        &response_type=code
 *        &scope=https://www.googleapis.com/auth/business.manage
 *        &access_type=offline
 *        &prompt=consent
 *      access_type=offline AND prompt=consent are both required, or Google
 *      returns an access token with no refresh token and the sync can only
 *      run once.
 *   3. Exchange the returned ?code= at https://oauth2.googleapis.com/token
 *      and store the refresh_token below.
 *
 * Access is NOT granted by enabling the APIs. A new Cloud project has a quota
 * of 0 QPM on these APIs, which means "not approved" - see
 * https://developers.google.com/my-business/content/prereqs and submit the
 * basic access application. Approval is manual and takes days to weeks.
 */

return [

    'client_id'     => env('GBP_CLIENT_ID'),
    'client_secret' => env('GBP_CLIENT_SECRET'),
    'refresh_token' => env('GBP_REFRESH_TOKEN'),

    /*
     * The three hosts the old monolithic My Business API was split into.
     * Reviews were never migrated to v1 - they are still only on v4, and that
     * endpoint wants the full accounts/{a}/locations/{l} path, while the
     * locations API returns bare locations/{l} names. The service class
     * reassembles them.
     */
    'endpoints' => [
        'accounts'  => 'https://mybusinessaccountmanagement.googleapis.com/v1',
        'locations' => 'https://mybusinessbusinessinformation.googleapis.com/v1',
        'reviews'   => 'https://mybusiness.googleapis.com/v4',
        'token'     => 'https://oauth2.googleapis.com/token',
    ],

    /*
     * Which listings to pull reviews from. Comma-separated location ids.
     *
     * Normally just Pune: clients from all over India leave their reviews on
     * that listing, because it is the profile people find. The other city
     * listings hold almost nothing, and syncing them adds API calls for no
     * reviews.
     *
     * Leave GBP_LOCATION_IDS empty to sync every location on the account.
     *
     * To find the id, once API access is granted:
     *     php artisan testimonials:sync --list
     */
    'locations' => array_filter(array_map('trim', explode(',', (string) env('GBP_LOCATION_IDS', '')))),

    /*
     * Maximums the APIs enforce. Asking for more is an error, not a bigger page.
     */
    'page_size' => [
        'locations' => 100,
        'reviews'   => 50,
    ],

    /*
     * Synced reviews land with this status so they queue in the admin for a
     * human to tag with a service and publish. 'published' would put an
     * untagged review, of any rating, straight onto every service page.
     */
    'incoming_status' => 'draft',

    /*
     * Map a Google location to the city your pages use, so a review can be
     * shown on the city page it belongs to. Keys are matched against the
     * location's title and its storefront locality, case-insensitively.
     */
    'city_map' => [
        'pune'      => 'Pune',
        'mumbai'    => 'Mumbai',
        'delhi'     => 'Delhi',
        'new delhi' => 'Delhi',
        'gurugram'  => 'Gurugram',
        'gurgaon'   => 'Gurugram',
        'ahmedabad' => 'Ahmedabad',
    ],

];
