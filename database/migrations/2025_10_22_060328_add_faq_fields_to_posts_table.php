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
            $table->boolean('faq_enabled')->default(false)->after('meta_keywords');
            $table->string('faq_title')->nullable()->after('faq_enabled');
            $table->text('faq_subtitle')->nullable()->after('faq_title');
            $table->json('faq_items')->nullable()->after('faq_subtitle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['faq_enabled', 'faq_title', 'faq_subtitle', 'faq_items']);
        });
    }
};
