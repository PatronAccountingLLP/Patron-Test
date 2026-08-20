<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Refreshes the cluster blogs' bodies so they carry the interlinking the matrix prescribes.
 *
 * The first payload only had the links its prose happened to contain, so the R11 blog ring,
 * the R9 parent link and the R12 glossary links were missing and fifteen of the sixty-nine
 * posts had no inbound link from anywhere in the cluster. The payload now ends each post
 * with those links; this pushes the new bodies onto rows already inserted.
 *
 * Skips the two slugs the Accounting cluster owns and publishes.
 */
return new class extends Migration
{
    private const OWNED_ELSEWHERE = [
        'perpetual-vs-periodic-inventory',
        'retail-inventory-method-vs-cost-method',
    ];

    public function up(): void
    {
        $path = database_path('data/stock-audit-cluster-blogs.json');
        if (! is_file($path)) {
            return;
        }
        foreach (json_decode(file_get_contents($path), true) ?: [] as $r) {
            if (in_array($r['slug'], self::OWNED_ELSEWHERE, true)) {
                continue;
            }
            DB::table('posts')->where('slug', $r['slug'])
                ->update(['content' => $r['content'], 'updated_at' => now()]);
        }
    }

    public function down(): void
    {
        // Body content only; the insert migration's down() removes the posts.
    }
};
