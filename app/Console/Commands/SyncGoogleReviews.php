<?php

namespace App\Console\Commands;

use App\Models\Testimonial;
use App\Services\GoogleBusinessProfile;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Throwable;

/**
 * Pull reviews from every Google Business Profile location into `testimonials`.
 *
 *   php artisan testimonials:sync                 incremental, all locations
 *   php artisan testimonials:sync --full          re-read every review
 *   php artisan testimonials:sync --location=123  one location
 *   php artisan testimonials:sync --dry-run       report, write nothing
 *
 * Incremental is the default and is nearly free. The reviews endpoint returns
 * newest-first, so the sync walks down a page and stops at the first review it
 * already holds unchanged - normally one API call per location per night.
 *
 * Because the sort is by update time rather than create time, a review its
 * author has rewritten moves back to the top and is caught by the same walk.
 *
 * What the walk cannot see is a deletion, which leaves no trace in an ordered
 * list. So every run compares the stored count against the totalReviewCount
 * Google reports and says so when they disagree; --full then reconciles.
 */
class SyncGoogleReviews extends Command
{
    protected $signature = 'testimonials:sync
                            {--full : Read every review instead of stopping at the first unchanged one}
                            {--location= : Sync only this Google location id}
                            {--dry-run : Report what would change without writing}';

    protected $description = 'Fetch reviews from all Google Business Profile locations into the testimonials table';

    private int $created = 0;
    private int $updated = 0;
    private int $skipped = 0;

    public function handle(GoogleBusinessProfile $gbp): int
    {
        // Artisan resolves a command once and reuses the instance, so a second
        // run inside the same process would otherwise add to the first run's
        // totals. Harmless from the CLI, wrong from the scheduler.
        $this->created = $this->updated = $this->skipped = 0;

        if (!$gbp->configured()) {
            $this->error('Google Business Profile credentials are not set.');
            $this->line('Add GBP_CLIENT_ID, GBP_CLIENT_SECRET and GBP_REFRESH_TOKEN to .env.');
            $this->line('See config/google-business.php for how to obtain the refresh token.');

            return self::FAILURE;
        }

        $dryRun = (bool) $this->option('dry-run');
        $full   = (bool) $this->option('full');

        if ($dryRun) {
            $this->warn('Dry run - nothing will be written.');
        }

        try {
            $accounts = $gbp->accounts();
        } catch (Throwable $e) {
            $this->error($e->getMessage());
            $this->line('');
            $this->line('A 403 here usually means the project has not been granted access.');
            $this->line('Quota of 0 QPM on the Business Profile APIs means "not approved yet",');
            $this->line('and a quota increase is not the fix - submit the basic access request.');

            return self::FAILURE;
        }

        if (empty($accounts)) {
            $this->error('The authorised Google account manages no Business Profile accounts.');

            return self::FAILURE;
        }

        $rows = [];

        foreach ($accounts as $account) {
            $this->info('Account: ' . ($account['accountName'] ?: $account['name']));

            $locations = $gbp->locations($account['name']);

            if ($this->option('location')) {
                $locations = array_filter(
                    $locations,
                    fn ($l) => $l['id'] === $this->option('location')
                );
            }

            if (empty($locations)) {
                $this->warn('  No locations to sync.');
                continue;
            }

            foreach ($locations as $location) {
                $rows[] = $this->syncLocation($gbp, $account['name'], $location, $full, $dryRun);
            }
        }

        $this->line('');
        $this->table(
            ['Location', 'City', 'Google says', 'We hold', 'New', 'Updated', 'Unchanged'],
            $rows
        );

        $this->line('');
        $this->info(sprintf(
            '%d new, %d updated, %d unchanged.',
            $this->created,
            $this->updated,
            $this->skipped
        ));

        if (!$dryRun && $this->created > 0) {
            $this->warn(sprintf(
                '%d new review(s) are saved as "%s" and will not appear on the site until',
                $this->created,
                config('google-business.incoming_status')
            ));
            $this->warn('someone tags them with a service and publishes them in the admin.');
        }

        return self::SUCCESS;
    }

    /**
     * Walk one location's reviews, newest first.
     */
    private function syncLocation(
        GoogleBusinessProfile $gbp,
        string $account,
        array $location,
        bool $full,
        bool $dryRun
    ): array {
        $this->line('  ' . $location['title'] . ' (' . $location['id'] . ')');

        $city = $this->mapCity($location);

        $pageToken = null;
        $total     = 0;
        $new       = 0;
        $changed   = 0;
        $same      = 0;
        $stop      = false;

        do {
            $page = $gbp->reviews($account, $location['id'], $pageToken);
            $total = $page['totalReviewCount'];

            foreach ($page['reviews'] as $review) {
                $id = $review['reviewId'] ?? ($review['name'] ?? null);

                if (!$id) {
                    continue;
                }

                $existing = Testimonial::where('google_review_id', $id)->first();
                $remoteUpdated = $review['updateTime'] ?? null;

                // Sorted newest-first, so the first review we already hold at
                // this exact update time means everything below it is older and
                // equally unchanged. Nothing left to do.
                if ($existing
                    && $remoteUpdated
                    && $existing->google_update_time
                    && $existing->google_update_time->equalTo(Carbon::parse($remoteUpdated))) {
                    $same++;
                    $this->skipped++;

                    if (!$full) {
                        $stop = true;
                        break;
                    }

                    continue;
                }

                if (!$dryRun) {
                    $this->store($review, $id, $location, $city, $existing);
                }

                if ($existing) {
                    $changed++;
                    $this->updated++;
                } else {
                    $new++;
                    $this->created++;
                }
            }

            $pageToken = $stop ? null : $page['nextPageToken'];
        } while ($pageToken);

        $held = Testimonial::where('location_id', $location['id'])->count();

        // A deletion leaves no gap in an ordered list, so this count is the only
        // thing that reveals one.
        if ($total > 0 && $held !== $total && !$full) {
            $this->warn(sprintf(
                '    Google reports %d reviews here but we hold %d. Run --full to reconcile.',
                $total,
                $held
            ));
        }

        return [$location['title'], $city ?: '-', $total, $held, $new, $changed, $same];
    }

    /**
     * Create or update the row for one review.
     *
     * A review typed in by hand is never overwritten: if a row carries the same
     * Google id it came from the sync, and anything else is left alone.
     */
    private function store(array $review, string $id, array $location, ?string $city, ?Testimonial $existing): void
    {
        $reviewer = $review['reviewer'] ?? [];

        $attributes = [
            'name'               => $reviewer['displayName'] ?? 'A Google user',
            'content'            => $review['comment'] ?? '',
            'rating'             => GoogleBusinessProfile::starRating($review['starRating'] ?? null),
            'profile_photo_url'  => $reviewer['profilePhotoUrl'] ?? null,
            'reply'              => $review['reviewReply']['comment'] ?? null,
            'google_create_time' => isset($review['createTime']) ? Carbon::parse($review['createTime']) : null,
            'google_update_time' => isset($review['updateTime']) ? Carbon::parse($review['updateTime']) : null,
            'location_id'        => $location['id'],
            'source'             => 'google',
        ];

        if ($existing) {
            // Keep whatever a human has already decided about this review -
            // its service tags, its city correction, whether it is published.
            $existing->fill($attributes)->save();

            return;
        }

        Testimonial::create($attributes + [
            'google_review_id' => $id,
            'city'             => $city,
            'status'           => config('google-business.incoming_status', 'draft'),
            'sort_order'       => 0,
        ]);
    }

    /**
     * Match a Google location to the city name the site's pages use.
     */
    private function mapCity(array $location): ?string
    {
        $haystack = strtolower($location['city'] . ' ' . $location['title']);

        foreach (config('google-business.city_map', []) as $needle => $city) {
            if (str_contains($haystack, $needle)) {
                return $city;
            }
        }

        return $location['city'] ?: null;
    }
}
