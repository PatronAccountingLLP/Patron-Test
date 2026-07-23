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
        Schema::table('pages', function (Blueprint $table) {
            // Check if columns exist before adding them
            if (!Schema::hasColumn('pages', 'faq_enabled')) {
                $table->boolean('faq_enabled')->default(false)->after('content');
            }
            if (!Schema::hasColumn('pages', 'faq_title')) {
                $table->string('faq_title')->nullable()->after('faq_enabled');
            }
            if (!Schema::hasColumn('pages', 'faq_subtitle')) {
                $table->text('faq_subtitle')->nullable()->after('faq_title');
            }
            if (!Schema::hasColumn('pages', 'faq_items')) {
                $table->longText('faq_items')->nullable()->after('faq_subtitle')->comment('JSON data for FAQ items');
            }
            if (!Schema::hasColumn('pages', 'excerpt')) {
                $table->text('excerpt')->nullable()->after('faq_items');
            }
            if (!Schema::hasColumn('pages', 'template')) {
                $table->string('template')->default('default')->after('excerpt');
            }
            if (!Schema::hasColumn('pages', 'featured_image')) {
                $table->string('featured_image')->nullable()->after('template');
            }
            if (!Schema::hasColumn('pages', 'sort_order')) {
                $table->integer('sort_order')->default(0)->after('featured_image');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $columns = ['faq_enabled', 'faq_title', 'faq_subtitle', 'faq_items', 'excerpt', 'template', 'featured_image', 'sort_order'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('pages', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
