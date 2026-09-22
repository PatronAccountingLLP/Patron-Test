<?php

/*
 * Analytics - the third-party measurement tags the public site loads.
 * ---------------------------------------------------------------------------
 * One place to switch a tag on or off, so nobody has to hunt through three
 * layouts to find out what is running.
 *
 * Every value here is read from the environment and defaults to null. A tag
 * with no id does not render at all, which is deliberate: local and test
 * environments stay out of the production reporting unless somebody sets the
 * id on purpose, and a missing value can never emit a half-built script tag.
 *
 * Adding a tag here is not free. Each one is a third-party connection on every
 * page - a DNS lookup, a TLS handshake and a script competing with the page's
 * own JavaScript - and on an Indian mobile network that is real time. The GTM
 * container this site already loads is ~131 KB over the wire and gtag.js
 * another ~148 KB, so weigh a new tag against what is already there.
 */

return [

    /*
     * Microsoft Clarity - clarity.microsoft.com
     * ------------------------------------------------------------------
     * Session recordings, heatmaps and frustration signals (rage clicks,
     * dead clicks, excessive scrolling). Free with no traffic limit and no
     * paid tier; Microsoft's return is the data itself, which is why the
     * privacy policy has to say so.
     *
     * The project id is the ten-character string Clarity shows under
     * Settings > Overview, e.g. 'qx7m2p9kdz'. Set CLARITY_PROJECT_ID in
     * .env to switch recording on. Leave it empty and nothing renders.
     *
     * Loaded directly in the layout head rather than through GTM: the tag
     * fires earlier, and it is one less thing that breaks when a container
     * is edited or blocked.
     */
    /*
     * MASTER OFF SWITCH for Visitor Radar. Default FALSE.
     * ------------------------------------------------------------------
     * The beacon partial is @include-d in all three public layouts, which are
     * tracked files. This flag - not the presence of the include - decides
     * whether tracking actually happens, so those layouts are safe to promote
     * to production at any time: nothing tracks until RADAR_ENABLED is flipped
     * to true in the prod environment on purpose. When false the beacon renders
     * nothing AND the collector refuses to write.
     */
    'enabled' => (bool) env('RADAR_ENABLED', false),

    'clarity' => [
        'project_id' => env('CLARITY_PROJECT_ID'),
    ],

    /*
     * Privacy (Phase 2). Recorder masking is ALWAYS on: input/textarea/select
     * values are never read. This allowlist is the only way to permit an
     * element's text to be recorded - CSS selectors, matched with closest().
     * Default empty, so nothing a visitor types is ever captured. Add a selector
     * here only for an element you are certain carries no personal data.
     */
    'text_allowlist' => [
        // 'input#site-search',   // example: a public search box, no PII
    ],

    /*
     * Sampling. 1 = record every visit. Any session that touches a form is
     * always recorded regardless of this, because those are the ones that matter.
     */
    'sample_rate' => (float) env('RADAR_SAMPLE_RATE', 1),

    /*
     * Retention (Phase 8). The prune command (radar:prune, scheduled nightly
     * after the rollup) deletes raw sessions/events older than this, but never a
     * day the rollup has not yet processed. Both windows configurable.
     */
    'raw_retention_days' => (int) env('RADAR_RAW_RETENTION_DAYS', 60),

    /*
     * Rollup tables are tiny; keep them forever by default. Set a day count to
     * also prune old page_daily* rows (null = never).
     */
    'rollup_retention_days' => env('RADAR_ROLLUP_RETENTION_DAYS') !== null
        ? (int) env('RADAR_ROLLUP_RETENTION_DAYS') : null,

    /*
     * Business conversions for the GA4-style Events report.
     * ------------------------------------------------------------------
     * The standard events (page_view, scroll, click, phone_click,
     * whatsapp_click, file_download, form_start/submit, generate_lead,
     * lead_submit, video_*, first_visit, session_start, contact_us) are
     * detected automatically and need nothing here.
     *
     * These are the ones only YOU can define, because they depend on the
     * funnel. Each rule: 'path' = a URL fragment the page must contain, 'on'
     * = which captured events count. Fill in the real triggers and they start
     * counting; left as-is they simply report nothing rather than guess.
     *
     * Examples once you confirm the funnel:
     *   'consultation_booking' => ['path' => '/book',           'on' => ['form_submit']],
     *   'consultation_start'   => ['path' => '/book',           'on' => ['form_start']],
     *   'ads_conversion_Sign_Up_1' => ['path' => '/thank-you',  'on' => ['page_view']],
     */
    'events' => [
        // 'consultation_booking' => ['path' => '', 'on' => ['form_submit']],
        // 'consultation_start'   => ['path' => '', 'on' => ['form_start']],
        // 'ads_conversion_Sign_Up_1' => ['path' => '', 'on' => ['page_view']],
    ],

];
