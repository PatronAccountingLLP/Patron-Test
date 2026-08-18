<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * Gives /about-us a real title and meta description.
 *
 * /about-us is a DB-driven page rendered through <x-seo-meta>, which falls back
 * to $page->title and $page->excerpt when no seo_meta row exists. No row existed,
 * so production was serving <title>about-us</title> and the seeded placeholder
 * description "Eveniet ut vitae ar" into the SERP, OG and Twitter tags alike.
 *
 * seo_meta is a morph table (page_type = App\Models\Page), so this targets the
 * about-us page by slug rather than a hardcoded id.
 *
 * Idempotent: updates the row if one already exists, inserts otherwise, and
 * no-ops where the about-us page is absent.
 */
return new class extends Migration
{
    private const SLUG = 'about-us';
    private const TYPE = 'App\Models\Page';

    private const TITLE = 'About Patron Accounting | Our Story, Team & Expertise';
    private const DESCRIPTION = 'Patron Accounting LLP is an MCA-registered CA firm founded in 2019 by CA Sundram Gupta, with offices in Pune, Mumbai, Delhi and Gurugram serving India.';
    private const CANONICAL = 'https://www.patronaccounting.com/about-us';

    public function up(): void
    {
        $pageId = DB::table('pages')->where('slug', self::SLUG)->value('id');

        if (! $pageId) {
            return;
        }

        $now = Carbon::now('Asia/Kolkata');

        $existing = DB::table('seo_meta')
            ->where('page_type', self::TYPE)
            ->where('page_id', $pageId)
            ->first();

        $payload = [
            'meta_title'       => self::TITLE,
            'meta_description' => self::DESCRIPTION,
            'canonical_url'    => self::CANONICAL,
            'updated_at'       => $now,
        ];

        if ($existing) {
            DB::table('seo_meta')->where('id', $existing->id)->update($payload);

            return;
        }

        DB::table('seo_meta')->insert($payload + [
            'page_type'  => self::TYPE,
            'page_id'    => $pageId,
            'created_at' => $now,
        ]);
    }

    public function down(): void
    {
        $pageId = DB::table('pages')->where('slug', self::SLUG)->value('id');

        if (! $pageId) {
            return;
        }

        DB::table('seo_meta')
            ->where('page_type', self::TYPE)
            ->where('page_id', $pageId)
            ->where('meta_title', self::TITLE)
            ->delete();
    }
};
