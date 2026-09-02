<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Three ADT-1 posts sit in a category whose slug is a path fragment, not a slug:
 * "categories/stock-audit". It renders as "Stock Audit" on the cards, so it looks right to a
 * reader, but it is a separate row from the real stock-audit category and its URL cannot be
 * reached -- the slash makes it two path segments, which matches no route. The three posts
 * have therefore never been findable by browsing.
 *
 * They are auditor appointment and rotation guides, and the Audit category already holds
 * their siblings ("Appointment Of Auditor", "Change Of Auditor Requirements"), so that is
 * where they belong rather than Stock Audit.
 *
 * Once they move, the malformed category holds nothing. It then disappears from the chips on
 * /blog (built with whereHas('posts')) and its URL answers 410, both without further work.
 *
 * Idempotent: attaches only if not already attached, and detaches only from categories whose
 * slug is malformed. Safe to run against any environment -- Patron Local holds none of these
 * rows, so it no-ops there.
 */
return new class extends Migration
{
    private const POSTS = [
        'first-auditor-appointment-adt1-filing-guide',
        'first-statutory-auditor-appointment-adt-1-filing-guide',
        'auditor-rotation-5-year-term-adt1-reappointment-guide',
    ];

    private const TARGET = 'audit';

    public function up(): void
    {
        $target = DB::table('post_categories')->where('slug', self::TARGET)->value('id');
        if (! $target) {
            return;
        }

        // Any category slug carrying a slash (raw or percent-encoded) is malformed: a slug is
        // one path segment by definition.
        $malformed = DB::table('post_categories')
            ->where(function ($q) {
                $q->where('slug', 'like', '%/%')->orWhere('slug', 'like', '%\%2F%');
            })
            ->pluck('id')
            ->all();

        foreach (self::POSTS as $slug) {
            $postId = DB::table('posts')->where('slug', $slug)->value('id');
            if (! $postId) {
                continue;
            }

            $alreadyFiled = DB::table('post_category_post')
                ->where('post_id', $postId)
                ->where('post_category_id', $target)
                ->exists();

            if (! $alreadyFiled) {
                DB::table('post_category_post')->insert([
                    'post_id' => $postId,
                    'post_category_id' => $target,
                ]);
            }

            if ($malformed) {
                DB::table('post_category_post')
                    ->where('post_id', $postId)
                    ->whereIn('post_category_id', $malformed)
                    ->delete();
            }
        }
    }

    public function down(): void
    {
        $target = DB::table('post_categories')->where('slug', self::TARGET)->value('id');
        if (! $target) {
            return;
        }

        foreach (self::POSTS as $slug) {
            $postId = DB::table('posts')->where('slug', $slug)->value('id');
            if (! $postId) {
                continue;
            }

            DB::table('post_category_post')
                ->where('post_id', $postId)
                ->where('post_category_id', $target)
                ->delete();
        }
    }
};
