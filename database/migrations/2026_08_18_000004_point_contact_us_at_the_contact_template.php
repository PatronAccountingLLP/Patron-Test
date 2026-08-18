<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * Points the Patron Local contact-us stub at the real contact template.
 *
 * Production's contact page row renders through frontend.pages.templates.contact
 * -- a 632-line page with the enquiry form and the office addresses -- and takes
 * its H1 from pages.title. Patron Local carries an unrelated 429-character stub
 * that already occupied the contact-us slug, sitting on the default template, so
 * after the consolidation the test site served an empty page: the generic
 * template's testimonial block with nothing behind it.
 *
 * The stub is why 2026_08_18_000003's rename correctly skipped on Patron Local:
 * the slug was taken. This fixes the stub itself rather than the rename.
 *
 * Scoped tightly to that stub -- it acts only on a row that is BOTH titled
 * 'Contact Us' AND still on the default template. Production's row is titled
 * "Let's Simplify Your Accounting & Compliance Needs" and already uses the
 * contact template, so both guards fail there and this is a no-op.
 *
 * The template ignores pages.content, so no content is written. Only the H1 and
 * the template matter. The SEO title is unaffected: it comes from seo_meta via
 * <x-seo-meta>, which takes precedence over this template's @section('title').
 */
return new class extends Migration
{
    private const SLUG = 'contact-us';
    private const STUB_TITLE = 'Contact Us';
    private const HEADLINE = 'Let’s Simplify Your Accounting & Compliance Needs';

    public function up(): void
    {
        $page = DB::table('pages')->where('slug', self::SLUG)->first();

        if (! $page) {
            return;
        }

        // Both guards must hold, or this is somebody's real contact page.
        if ($page->title !== self::STUB_TITLE) {
            return;
        }

        if (($page->template ?? 'default') !== 'default') {
            return;
        }

        DB::table('pages')->where('id', $page->id)->update([
            'title'      => self::HEADLINE,
            'template'   => 'contact',
            'updated_at' => Carbon::now('Asia/Kolkata'),
        ]);
    }

    public function down(): void
    {
        $page = DB::table('pages')->where('slug', self::SLUG)->first();

        if (! $page || $page->title !== self::HEADLINE) {
            return;
        }

        DB::table('pages')->where('id', $page->id)->update([
            'title'      => self::STUB_TITLE,
            'template'   => 'default',
            'updated_at' => Carbon::now('Asia/Kolkata'),
        ]);
    }
};
