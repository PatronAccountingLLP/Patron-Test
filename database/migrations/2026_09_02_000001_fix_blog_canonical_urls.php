<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Four published posts carry a seo_canonical_url that de-indexes them.
 *
 * Screaming Frog "Canonicals: Canonicalised" (crawl 2026-09-02) flagged them: each
 * points at a URL that is either a different article or a slug that 301s onward to a
 * third, unrelated article, so the indexing signals for a full-length post are being
 * handed to a page it has nothing to do with.
 *
 *  - startup-registrations-trends-in-india        -> an IEC registration guide (unrelated)
 *  - gstat-single-member-division-bench           -> own slug variant that 301s to
 *                                                    gstat-principal-vs-state-bench
 *  - advance-pricing-agreement-...-process        -> own slug variant that 301s to
 *                                                    transfer-pricing-rules-2026
 *  These three are self-canonical: the target was a typo of the post's own slug, or
 *  simply the wrong URL.
 *
 *  - draft-income-tax-rules is a genuine near-duplicate of
 *    draft-income-tax-rules-2026-summary-key-changes, so the consolidation is kept and
 *    only repointed off the stale slug (…-complete-summary-key-changes) onto the live
 *    301 destination.
 *
 * Written to be safe to run against any environment: each row is matched on slug AND on
 * the exact known-bad value, so it no-ops if the row is absent (Patron Local holds none
 * of these four) or if the value has already been corrected by hand.
 */
return new class extends Migration
{
    /** slug => [known-bad canonical, corrected canonical] */
    private const FIXES = [
        'startup-registrations-trends-in-india' => [
            'https://www.patronaccounting.com/blog/a-guide-to-import-export-code-registration-online',
            'https://www.patronaccounting.com/blog/startup-registrations-trends-in-india',
        ],
        'draft-income-tax-rules' => [
            'https://www.patronaccounting.com/blog/draft-income-tax-rules-2026-complete-summary-key-changes',
            'https://www.patronaccounting.com/blog/draft-income-tax-rules-2026-summary-key-changes',
        ],
        'gstat-single-member-division-bench' => [
            'https://www.patronaccounting.com/blog/gstat-single-member-vs-division-bench',
            'https://www.patronaccounting.com/blog/gstat-single-member-division-bench',
        ],
        'advance-pricing-agreement-apa-rules-2026-application-process' => [
            'https://www.patronaccounting.com/blog/advance-pricing-agreement-apa-rules-2026-application-process-timeline',
            'https://www.patronaccounting.com/blog/advance-pricing-agreement-apa-rules-2026-application-process',
        ],
    ];

    public function up(): void
    {
        foreach (self::FIXES as $slug => [$bad, $good]) {
            DB::table('posts')
                ->where('slug', $slug)
                ->where('seo_canonical_url', $bad)
                ->update(['seo_canonical_url' => $good]);
        }
    }

    public function down(): void
    {
        foreach (self::FIXES as $slug => [$bad, $good]) {
            DB::table('posts')
                ->where('slug', $slug)
                ->where('seo_canonical_url', $good)
                ->update(['seo_canonical_url' => $bad]);
        }
    }
};
