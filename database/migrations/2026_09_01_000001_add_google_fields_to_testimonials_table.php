<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Room on `testimonials` for reviews pulled from Google Business Profile.
 *
 * Additive only, and every column is guarded with hasColumn, because this
 * migration runs against SQLite locally and MySQL in production and the chain
 * has been aborted before by a statement only one of them understood. No
 * ->change() calls: doctrine/dbal is not installed, so they would fail.
 *
 * Existing columns are reused rather than duplicated - a synced review fills
 * name, content, rating and status like any manually entered one, so the admin
 * screens keep working untouched.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            // Google's own id. The sync upserts on this, which is what makes
            // re-running it harmless and lets an edited review update in place
            // instead of arriving as a duplicate.
            if (!Schema::hasColumn('testimonials', 'google_review_id')) {
                $table->string('google_review_id')->nullable()->unique();
            }

            // 'manual' or 'google'. Without it there is no way to tell a synced
            // review from a typed one, and the sync could overwrite hand-written
            // entries.
            if (!Schema::hasColumn('testimonials', 'source')) {
                $table->string('source')->default('manual')->index();
            }

            // Which Google location the review was left on, and the city that
            // maps to on the site.
            if (!Schema::hasColumn('testimonials', 'location_id')) {
                $table->string('location_id')->nullable()->index();
            }
            if (!Schema::hasColumn('testimonials', 'city')) {
                $table->string('city')->nullable()->index();
            }

            // Which services this review is shown against. Google does not tag
            // reviews by service, so this is ours to fill in.
            if (!Schema::hasColumn('testimonials', 'service_tags')) {
                $table->json('service_tags')->nullable();
            }

            // Google's timestamps, kept separate from Laravel's. update_time
            // drives the incremental sync: the walk stops at the first review
            // whose value is unchanged.
            if (!Schema::hasColumn('testimonials', 'google_create_time')) {
                $table->timestamp('google_create_time')->nullable();
            }
            if (!Schema::hasColumn('testimonials', 'google_update_time')) {
                $table->timestamp('google_update_time')->nullable();
            }

            // The owner's public reply, if there is one.
            if (!Schema::hasColumn('testimonials', 'reply')) {
                $table->text('reply')->nullable();
            }

            // Reviewer's Google avatar. `image` already exists but is a local
            // upload path; this is a remote URL and should not be confused
            // with one.
            if (!Schema::hasColumn('testimonials', 'profile_photo_url')) {
                $table->string('profile_photo_url')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            foreach ([
                'google_review_id', 'source', 'location_id', 'city', 'service_tags',
                'google_create_time', 'google_update_time', 'reply', 'profile_photo_url',
            ] as $column) {
                if (Schema::hasColumn('testimonials', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
