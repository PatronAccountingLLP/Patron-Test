<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Brings the Stock Audit blogs' publish time back into the past.
 *
 * The insert migration stamped published_at as 2026-08-20 09:30:00. The container runs on
 * UTC and was at 09:06 when it booted, so every one of the 69 rows was inserted correctly
 * and then hidden: blogShowPost() requires published_at <= now(), and 09:30 had not arrived.
 * Each post 404'd while the blog index happily listed the ones that were already live.
 *
 * Idempotent, and scoped by slug to this cluster's own rows.
 */
return new class extends Migration
{
    private function slugs(): array
    {
        $path = database_path('data/stock-audit-cluster-blogs.json');
        if (! is_file($path)) {
            return [];
        }
        $rows = json_decode(file_get_contents($path), true) ?: [];
        return array_column($rows, 'slug');
    }

    public function up(): void
    {
        $slugs = $this->slugs();
        if (! $slugs) {
            return;
        }
        DB::table('posts')
            ->whereIn('slug', $slugs)
            ->update(['published_at' => '2026-08-19 09:30:00', 'status' => 'published']);
    }

    public function down(): void
    {
        // Nothing to undo: this only corrects a timestamp the insert migration set.
    }
};
