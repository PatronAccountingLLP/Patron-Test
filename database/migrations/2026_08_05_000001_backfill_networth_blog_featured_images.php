<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Backfill featured_image on the Net Worth & Solvency blogs.
 *
 * The injection migration is idempotent per slug: it skips any blog already present. That is
 * correct for re-running a deploy, but it means a LATER change to a record never reaches a
 * database that already has the row. The four hub blogs were injected before their hero
 * images existed, so production carried them with featured_image null and re-running the
 * injection could not fix it - the slugs were already there.
 *
 * This reads the same data file and writes featured_image wherever the stored value differs,
 * touching nothing else. Safe to re-run: once the values match it updates nothing.
 */
return new class extends Migration
{
    private function records(): array
    {
        $path = database_path('data/networth-cluster-blogs.json');
        if (! is_file($path)) {
            return [];
        }
        return json_decode(file_get_contents($path), true) ?: [];
    }

    public function up(): void
    {
        foreach ($this->records() as $r) {
            if (empty($r['featured_image'])) {
                continue;
            }
            DB::table('posts')
                ->where('slug', $r['slug'])
                ->where(function ($q) use ($r) {
                    $q->whereNull('featured_image')
                      ->orWhere('featured_image', '!=', $r['featured_image']);
                })
                ->update(['featured_image' => $r['featured_image']]);
        }
    }

    public function down(): void
    {
        // Deliberately not reversed: clearing featured_image would leave the posts worse off
        // than before this ran, and the value is regenerated from the data file anyway.
    }
};
