<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('seo_canonical_url')->nullable()->after('meta_keywords');
            $table->text('seo_header_scripts')->nullable()->after('seo_canonical_url');
            $table->text('seo_footer_scripts')->nullable()->after('seo_header_scripts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['seo_canonical_url', 'seo_header_scripts', 'seo_footer_scripts']);
        });
    }
};
