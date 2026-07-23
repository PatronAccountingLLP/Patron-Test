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
            $table->boolean('hero_enabled')->default(false)->after('intro_content');
            $table->string('hero_title')->nullable()->after('hero_enabled');
            $table->json('hero_benefits')->nullable()->after('hero_title');
            $table->string('hero_button_text')->nullable()->after('hero_benefits');
            $table->string('hero_button_link')->nullable()->after('hero_button_text');
            $table->string('hero_video_text')->nullable()->after('hero_button_link');
            $table->string('hero_video_link')->nullable()->after('hero_video_text');
            $table->string('hero_document_text')->nullable()->after('hero_video_link');
            $table->string('hero_document_link')->nullable()->after('hero_document_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'hero_enabled',
                'hero_title',
                'hero_benefits',
                'hero_button_text',
                'hero_button_link',
                'hero_video_text',
                'hero_video_link',
                'hero_document_text',
                'hero_document_link'
            ]);
        });
    }
};
