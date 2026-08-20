<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * Fixes /contact-us returning 404 in production.
 *
 * 2026_08_18_000003 renames the contact-page row to contact-us, but guards
 * against a slug collision by returning early if a contact-us row already
 * exists. Production has exactly that: an unpublished contact-us row, which is
 * also why /contact-us was "a hard 404" when the 2026-08-11 redirect was added.
 *
 * So on deploy the rename silently skipped while the new 301s went live, leaving
 * /contact and /contact-page both redirecting to a 404. FrontendController@contactUs
 * calls published()->firstOrFail(), so an unpublished row cannot satisfy it.
 *
 * This parks the stray under a suffixed slug rather than deleting it -- it may be
 * someone's draft -- and then promotes the real contact-page row onto contact-us.
 *
 * No-ops where contact-page is absent, which is the case in Patron Local, where
 * the real page already sits on the contact-us slug.
 */
return new class extends Migration
{
    public function up(): void
    {
        $source = DB::table('pages')->where('slug', 'contact-page')->first();

        // Nothing to promote. Either this environment never had the split, or a
        // previous run already resolved it.
        if (! $source) {
            return;
        }

        $now = Carbon::now('Asia/Kolkata');
        $stray = DB::table('pages')->where('slug', 'contact-us')->first();

        if ($stray) {
            DB::table('pages')->where('id', $stray->id)->update([
                'slug'       => 'contact-us-superseded-' . $stray->id,
                'status'     => 'draft',
                'updated_at' => $now,
            ]);
        }

        DB::table('pages')->where('id', $source->id)->update([
            'slug'       => 'contact-us',
            'updated_at' => $now,
        ]);

        // The page must be published or contactUs() 404s on firstOrFail().
        if (($source->status ?? null) !== 'published') {
            DB::table('pages')->where('id', $source->id)->update([
                'status'       => 'published',
                'published_at' => $source->published_at ?? $now,
                'updated_at'   => $now,
            ]);
        }
    }

    /**
     * Deliberately not reversed. Putting the slug back would restore a 404 at
     * /contact-us while /contact and /contact-page still redirect there.
     */
    public function down(): void
    {
        //
    }
};
