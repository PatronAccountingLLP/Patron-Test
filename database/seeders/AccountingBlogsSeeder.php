<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * Idempotent upsert of the accounting-cluster blogs from
 * database/seeders/data/accounting_blogs.json. Runs every boot from
 * docker/entrypoint.sh. Each entry = one published Post with web-ready content,
 * key_points, FAQ, meta, featured_image and a category + CA author. Images live
 * under storage/app/public/blog/<slug>/ (served via the storage symlink).
 */
class AccountingBlogsSeeder extends Seeder
{
    public function run(): void
    {
        if (! Schema::hasColumn('posts', 'key_points')) {
            Schema::table('posts', function ($t) { $t->text('key_points')->nullable(); });
        }

        $path = database_path('seeders/data/accounting_blogs.json');
        if (! is_file($path)) return;
        $posts = json_decode(file_get_contents($path), true);
        if (! is_array($posts)) return;

        $now = Carbon::now();

        $userId = DB::table('users')->where('email', 'sundram@patronaccounting.com')->value('id');
        if (! $userId) {
            $userId = DB::table('users')->insertGetId([
                'name' => 'CA Sundram Gupta', 'email' => 'sundram@patronaccounting.com',
                'password' => bcrypt(Str::random(40)), 'role' => 'editor',
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }

        foreach ($posts as $p) {
            $slug = $p['slug'] ?? null;
            if (! $slug) continue;

            $catName = $p['category'] ?: 'Accounting';
            $catSlug = Str::slug($catName);
            $catId = DB::table('post_categories')->where('slug', $catSlug)->value('id');
            if (! $catId) {
                $catId = DB::table('post_categories')->insertGetId([
                    'name' => $catName, 'slug' => $catSlug, 'created_at' => $now, 'updated_at' => $now,
                ]);
            }

            $fields = [
                'title' => $p['title'], 'content' => $p['content'], 'key_points' => $p['key_points'] ?? null,
                'excerpt' => $p['excerpt'] ?? null, 'description' => $p['description'] ?? null,
                'featured_image' => $p['featured_image'] ?? null,
                'meta_title' => $p['meta_title'] ?? null, 'meta_description' => $p['meta_description'] ?? null,
                'meta_keywords' => $p['meta_keywords'] ?? null, 'seo_canonical_url' => $p['seo_canonical_url'] ?? null,
                'faq_enabled' => 1, 'faq_title' => 'Frequently asked questions', 'faq_subtitle' => null,
                'faq_items' => json_encode($p['faq_items'] ?? [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
                'status' => 'published', 'published_at' => $p['published_at'] ?? '2026-07-20 09:30:00',
                'updated_at' => $now,
            ];

            $existing = DB::table('posts')->where('slug', $slug)->first();
            if ($existing) {
                DB::table('posts')->where('id', $existing->id)->update($fields);
                $postId = $existing->id;
            } else {
                $fields['slug'] = $slug; $fields['created_at'] = $now;
                $postId = DB::table('posts')->insertGetId($fields);
            }

            if (! DB::table('post_category_post')->where('post_id', $postId)->where('post_category_id', $catId)->exists()) {
                DB::table('post_category_post')->insert([
                    'post_id' => $postId, 'post_category_id' => $catId, 'created_at' => $now, 'updated_at' => $now,
                ]);
            }
            if (! DB::table('post_user')->where('post_id', $postId)->where('user_id', $userId)->exists()) {
                DB::table('post_user')->insert([
                    'post_id' => $postId, 'user_id' => $userId, 'created_at' => $now, 'updated_at' => $now,
                ]);
            }
        }
    }
}
