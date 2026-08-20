<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Restores the Accounting category on the two posts the Stock Audit register also claims.
 *
 * perpetual-vs-periodic-inventory and retail-inventory-method-vs-cost-method belong to the
 * Accounting cluster and were published from it. An earlier revision of the recategorise
 * migration would have moved them to Stock Audit; this puts them back on any container that
 * ran that version before it was scoped, and does nothing everywhere else.
 */
return new class extends Migration
{
    private const SHARED = [
        'perpetual-vs-periodic-inventory',
        'retail-inventory-method-vs-cost-method',
    ];

    public function up(): void
    {
        $acct = DB::table('post_categories')
            ->whereIn('slug', ['accounting-and-bookkeeping', 'accounting-bookkeeping', 'accounting'])
            ->value('id');
        if (! $acct) {
            return;
        }
        $now = now();
        $ids = DB::table('posts')->whereIn('slug', self::SHARED)->pluck('id');
        foreach ($ids as $postId) {
            $linked = DB::table('post_category_post')
                ->where('post_id', $postId)->where('post_category_id', $acct)->exists();
            if (! $linked) {
                DB::table('post_category_post')->insert([
                    'post_id' => $postId, 'post_category_id' => $acct,
                    'created_at' => $now, 'updated_at' => $now,
                ]);
            }
            $sa = DB::table('post_categories')->where('slug', 'stock-audit')->value('id');
            if ($sa) {
                DB::table('post_category_post')
                    ->where('post_id', $postId)->where('post_category_id', $sa)->delete();
            }
        }
    }

    public function down(): void
    {
        // Restores ownership only; nothing to reverse.
    }
};
