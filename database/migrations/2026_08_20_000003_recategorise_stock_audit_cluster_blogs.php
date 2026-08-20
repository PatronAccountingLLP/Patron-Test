<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Puts every Stock Audit cluster blog under the Stock Audit category.
 *
 * The insert migration is idempotent per slug: a post already on the site is skipped whole.
 * Two of the 69 cluster slugs were already published under "Accounting and Bookkeeping"
 * (perpetual-vs-periodic-inventory and retail-inventory-method-vs-cost-method), so they kept
 * that category while the other 67 arrived under Stock Audit - the same cluster showing two
 * different categories to a reader moving between its own pages.
 *
 * Attaches the Stock Audit category to the payload's slugs and detaches the others, so the
 * badge and breadcrumb agree with the cluster the URL belongs to. Idempotent.
 *
 * TWO SLUGS ARE EXCLUDED. perpetual-vs-periodic-inventory and
 * retail-inventory-method-vs-cost-method are Accounting cluster posts, published from
 * Accounting Cluster/Generated Blogs (112_ and 024_) long before this cluster existed. They
 * appear in the Stock Audit register too, which is a conflict in the register rather than a
 * mistake on the site: whoever owns a URL owns its category, and that is Accounting. Moving
 * them here would take two posts off another cluster.
 */
return new class extends Migration
{
    private function slugs(): array
    {
        $path = database_path('data/stock-audit-cluster-blogs.json');
        if (! is_file($path)) {
            return [];
        }
        return array_column(json_decode(file_get_contents($path), true) ?: [], 'slug');
    }

    /** Slugs another cluster published first. Owned there, categorised there. */
    private const OWNED_ELSEWHERE = [
        'perpetual-vs-periodic-inventory',
        'retail-inventory-method-vs-cost-method',
    ];

    public function up(): void
    {
        $slugs = array_diff($this->slugs(), self::OWNED_ELSEWHERE);
        $catId = DB::table('post_categories')->where('slug', 'stock-audit')->value('id');
        if (! $slugs || ! $catId) {
            return;
        }
        $now = now();
        $ids = DB::table('posts')->whereIn('slug', $slugs)->pluck('id');
        foreach ($ids as $postId) {
            DB::table('post_category_post')
                ->where('post_id', $postId)
                ->where('post_category_id', '!=', $catId)
                ->delete();
            $linked = DB::table('post_category_post')
                ->where('post_id', $postId)
                ->where('post_category_id', $catId)
                ->exists();
            if (! $linked) {
                DB::table('post_category_post')->insert([
                    'post_id' => $postId, 'post_category_id' => $catId,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }
    }

    public function down(): void
    {
        // Category membership only; the insert migration's down() removes the posts.
    }
};
