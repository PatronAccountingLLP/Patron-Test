<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Five networth blog posts embed a diagram that was never produced.
 *
 * Only hero.webp exists in those five image directories, so
 * /images/networth-cluster/blog/<slug>/diagram-0.webp has always 404'd. It is
 * the last real client error in the crawl - five broken images on five live
 * posts, each rendering an empty figure with a caption under it.
 *
 * The <figure> was already removed from database/data/networth-cluster-blogs.json,
 * but that file is read by 2026_08_04_000001_insert_networth_cluster_blogs, which
 * has run and in any case skips a slug whose post already exists. The seed data
 * and the live rows had therefore drifted apart, and editing the JSON could never
 * reach a reader. This closes that gap on the rows themselves.
 *
 * Deliberately narrow: it matches the figure by the exact 404ing image path, so
 * it cannot touch the 40 diagrams on other posts whose images do exist, and it
 * is a no-op on a database where it has already run.
 *
 * Irreversible by design - down() cannot put back a figure whose image does not
 * exist, and restoring it would only re-break the page.
 */
return new class extends Migration
{
    private const SLUGS = [
        'how-a-solvency-certificate-is-calculated',
        'how-to-calculate-net-owned-fund',
        'how-to-calculate-net-worth-for-a-net-worth-certificate',
        'how-to-calculate-net-worth-of-a-pvt-ltd-company',
        'partnership-firm-net-worth-capital-accounts',
    ];

    public function up(): void
    {
        foreach (self::SLUGS as $slug) {
            $post = DB::table('posts')->where('slug', $slug)->first();

            if (! $post || ! isset($post->content)) {
                continue;
            }

            $pattern = '~<figure class="blog-figure"><img src="/images/networth-cluster/blog/'
                . preg_quote($slug, '~')
                . '/diagram-0\.webp".*?</figure>\s*~s';

            $content = preg_replace($pattern, '', $post->content, -1, $count);

            if ($count === 0 || $content === null || $content === $post->content) {
                continue;
            }

            DB::table('posts')->where('id', $post->id)->update([
                'content'    => $content,
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        // No rollback: the images these figures pointed at do not exist.
    }
};
