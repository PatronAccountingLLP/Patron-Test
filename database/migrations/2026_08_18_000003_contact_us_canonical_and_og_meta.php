<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * Consolidates the contact pages onto /contact-us and gives it real meta.
 *
 * There were two live contact URLs. /contact-page (a DB page, served by the root
 * catch-all) held 1,712 impressions and 19 clicks over the 90 days to 2026-08-17
 * and was the URL in sitemap-pages.xml. /contact (a blade route) held 5 impressions
 * and 0 clicks but was what the navigation and footer linked to. Both returned 200
 * and both self-canonicalised, so one intent was split across two competing URLs.
 *
 * Resolution: /contact-us becomes the single canonical URL, carrying the content
 * that was on /contact-page. routes/web.php 301s both old URLs to it.
 *
 * Also backfills og_title / og_description for /about-us so the DB-driven pages
 * follow the same SERP-copy vs social-copy split as the blade-routed pages.
 *
 * Idempotent: the rename no-ops once the slug is already contact-us (which is the
 * case in Patron Local), and the seo_meta writes update in place when a row exists.
 */
return new class extends Migration
{
    private const TYPE = 'App\Models\Page';

    private const META = [
        'contact-us' => [
            'meta_title'       => 'Contact Patron Accounting | CA Firm Offices in India',
            'meta_description' => 'Get in touch with Patron Accounting LLP for accounting, GST, ITR or compliance help. Visit our Pune, Mumbai, Delhi or Gurugram office, or send an enquiry.',
            'og_title'         => 'Contact Patron Accounting LLP - Pune, Mumbai, Delhi, Gurugram',
            'og_description'   => 'Send an enquiry about your accounting, tax or compliance requirement, or visit one of our five offices across four cities: Pune, Mumbai, Delhi and Gurugram.',
            'canonical_url'    => 'https://www.patronaccounting.com/contact-us',
        ],
        'about-us' => [
            'og_title'       => 'About Patron Accounting LLP - Our Story, Team & Offices',
            'og_description' => 'Founded in 2019 by CA Sundram Gupta. An in-house CA & CS team handling accounting, GST, tax and compliance from Pune, Mumbai, Delhi and Gurugram.',
        ],
    ];

    public function up(): void
    {
        $this->renameContactPage();

        foreach (self::META as $slug => $payload) {
            $this->writeSeoMeta($slug, $payload);
        }
    }

    /**
     * Renames the contact-page slug to contact-us. Skips if contact-us already
     * exists, so a half-applied environment cannot end up with a slug collision.
     */
    private function renameContactPage(): void
    {
        $old = DB::table('pages')->where('slug', 'contact-page')->first();

        if (! $old) {
            return;
        }

        if (DB::table('pages')->where('slug', 'contact-us')->exists()) {
            return;
        }

        DB::table('pages')->where('id', $old->id)->update([
            'slug'       => 'contact-us',
            'updated_at' => Carbon::now('Asia/Kolkata'),
        ]);
    }

    private function writeSeoMeta(string $slug, array $payload): void
    {
        $pageId = DB::table('pages')->where('slug', $slug)->value('id');

        if (! $pageId) {
            return;
        }

        $now = Carbon::now('Asia/Kolkata');

        $existing = DB::table('seo_meta')
            ->where('page_type', self::TYPE)
            ->where('page_id', $pageId)
            ->first();

        if ($existing) {
            DB::table('seo_meta')
                ->where('id', $existing->id)
                ->update($payload + ['updated_at' => $now]);

            return;
        }

        DB::table('seo_meta')->insert($payload + [
            'page_type'  => self::TYPE,
            'page_id'    => $pageId,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }

    /**
     * Deliberately does not rename contact-us back to contact-page. Rolling the
     * slug back would resurrect the duplicate the 301s exist to remove.
     */
    public function down(): void
    {
        foreach (array_keys(self::META) as $slug) {
            $pageId = DB::table('pages')->where('slug', $slug)->value('id');

            if (! $pageId) {
                continue;
            }

            DB::table('seo_meta')
                ->where('page_type', self::TYPE)
                ->where('page_id', $pageId)
                ->update(['og_title' => null, 'og_description' => null]);
        }
    }
};
