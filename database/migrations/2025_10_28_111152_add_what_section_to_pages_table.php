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
            $table->boolean('what_enabled')->default(false)->after('hero_document_link');
            $table->string('what_title')->nullable()->after('what_enabled');
            $table->text('what_content')->nullable()->after('what_title');
            $table->string('what_image')->nullable()->after('what_content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['what_enabled', 'what_title', 'what_content', 'what_image']);
        });
    }
};
