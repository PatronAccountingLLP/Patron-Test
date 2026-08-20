<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * Injects the Stock Audit cluster's 69 supporting blogs as CMS posts.
 *
 * Records live in database/data/stock-audit-cluster-blogs.json, generated from the same
 * workbooks and packets the built pages come from, so the CMS copy and the page copy
 * cannot drift. Idempotent per slug: a blog already present is skipped, so re-running
 * on a deploy that already has them does nothing.
 */
return new class extends Migration
{
    private function records(): array
    {
        $path = database_path('data/stock-audit-cluster-blogs.json');
        if (! is_file($path)) {
            return [];
        }
        return json_decode(file_get_contents($path), true) ?: [];
    }

    public function up(): void
    {
        $rows = $this->records();
        if (! $rows) {
            return;
        }
        $now = Carbon::now();

        $catId = DB::table('post_categories')->where('slug', 'stock-audit')->value('id');
        if (! $catId) {
            $catId = DB::table('post_categories')->insertGetId([
                'name' => 'Stock Audit',
                'slug' => 'stock-audit',
                'description' => 'Stock audit, inventory verification and fixed asset explainers for Indian businesses and lenders.',
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }

        $userId = DB::table('users')->where('email', 'sundram@patronaccounting.com')->value('id');
        if (! $userId) {
            $userId = DB::table('users')->insertGetId([
                'name' => 'CA Sundram Gupta',
                'email' => 'sundram@patronaccounting.com',
                'password' => bcrypt(Str::random(40)),
                'role' => 'editor',
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }

        foreach ($rows as $r) {
            if (DB::table('posts')->where('slug', $r['slug'])->exists()) {
                continue; // already injected
            }

            $postId = DB::table('posts')->insertGetId([
                'title' => $r['title'],
                'slug' => $r['slug'],
                'content' => $r['content'],
                'excerpt' => $r['excerpt'],
                'description' => $r['excerpt'],
                'featured_image' => $r['featured_image'] ?? null,
                'meta_title' => $r['meta_title'],
                'meta_description' => $r['meta_description'],
                'meta_keywords' => $r['meta_keywords'],
                'seo_canonical_url' => $r['canonical'],
                'faq_enabled' => $r['faq_items'] ? 1 : 0,
                'faq_title' => 'Frequently asked questions',
                'faq_items' => json_encode($r['faq_items'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                'status' => 'published',
                'published_at' => '2026-08-20 09:30:00',
                'created_at' => $now, 'updated_at' => $now,
            ]);

            DB::table('post_category_post')->insert([
                'post_id' => $postId, 'post_category_id' => $catId,
                'created_at' => $now, 'updated_at' => $now,
            ]);
            DB::table('post_user')->insert([
                'post_id' => $postId, 'user_id' => $userId,
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }
    }

    public function down(): void
    {
        foreach ($this->records() as $r) {
            $postId = DB::table('posts')->where('slug', $r['slug'])->value('id');
            if ($postId) {
                DB::table('post_category_post')->where('post_id', $postId)->delete();
                DB::table('post_user')->where('post_id', $postId)->delete();
                DB::table('posts')->where('id', $postId)->delete();
            }
        }
    }
};
