<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Lets DB-driven pages carry social copy separate from their SERP copy.
 *
 * <x-seo-meta> previously reused meta_title and meta_description for og:title and
 * og:description, so /about-us and /contact-us could not follow the convention the
 * blade-routed pages use: keyword-led copy for search, entity-led copy for social.
 *
 * Both columns are nullable and the component falls back to the meta_* values, so
 * existing rows keep behaving exactly as they do today.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('seo_meta', function (Blueprint $table) {
            if (! Schema::hasColumn('seo_meta', 'og_title')) {
                $table->string('og_title')->nullable()->after('meta_description');
            }
            if (! Schema::hasColumn('seo_meta', 'og_description')) {
                $table->text('og_description')->nullable()->after('og_title');
            }
        });
    }

    public function down(): void
    {
        Schema::table('seo_meta', function (Blueprint $table) {
            foreach (['og_title', 'og_description'] as $column) {
                if (Schema::hasColumn('seo_meta', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
