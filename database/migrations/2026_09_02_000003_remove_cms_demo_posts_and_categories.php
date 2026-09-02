<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * The CMS shipped with demo content and it is still on the site: "Welcome to SequelZone LLP",
 * "Getting Started with Laravel", "Building a CMS with Laravel" and two more, filed under
 * Programming, Technology, Web Development, Tutorial, Laravel and News. On a chartered
 * accountancy site they read as broken pages, and moving the listing onto paths gave each of
 * those categories a working URL.
 *
 * All five posts and all six categories are seed data: every post in those categories is one
 * of the five, and none of the five is filed anywhere real. They are removed outright rather
 * than unpublished, so nothing has to be maintained around them.
 *
 * Deleting the category rows means these URLs answer 404 rather than the 410 that the
 * empty-category rule would give them. That is the right answer here: these are not pages that
 * were retired, they are pages that should never have been published, and they were only
 * reachable at all from today's move to path URLs, so there is no indexed history to retire.
 *
 * Matched on exact slugs, and a category is only dropped once it holds nothing, so this cannot
 * take real content with it. Idempotent, and a no-op where the rows are absent -- production
 * never had the posts, only the empty categories.
 *
 * One-way: down() cannot restore deleted content, and this is demo data nobody wants back.
 */
return new class extends Migration
{
    private const SEED_POSTS = [
        'welcome-to-sequelzone-llp',
        'getting-started-with-laravel',
        'building-a-cms-with-laravel',
        'laravel-vs-other-php-frameworks',
        'advanced-laravel-features',
    ];

    private const SEED_CATEGORIES = [
        'programming',
        'web-development',
        'technology',
        'tutorial',
        'laravel',
        'news',
    ];

    public function up(): void
    {
        $postIds = DB::table('posts')->whereIn('slug', self::SEED_POSTS)->pluck('id')->all();

        if ($postIds) {
            DB::table('post_category_post')->whereIn('post_id', $postIds)->delete();
            DB::table('post_user')->whereIn('post_id', $postIds)->delete();
            DB::table('posts')->whereIn('id', $postIds)->delete();
        }

        foreach (self::SEED_CATEGORIES as $slug) {
            $categoryId = DB::table('post_categories')->where('slug', $slug)->value('id');
            if (! $categoryId) {
                continue;
            }

            // Never drop a category that still holds something -- if a real post was filed
            // here after this was written, the category stays and only the demo posts go.
            $stillUsed = DB::table('post_category_post')
                ->where('post_category_id', $categoryId)
                ->exists();

            if (! $stillUsed) {
                DB::table('post_categories')->where('id', $categoryId)->delete();
            }
        }
    }

    public function down(): void
    {
        // Demo content, deliberately unrecoverable.
    }
};
