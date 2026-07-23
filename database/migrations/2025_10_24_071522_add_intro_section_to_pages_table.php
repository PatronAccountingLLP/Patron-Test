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
            $table->boolean('intro_enabled')->default(false)->after('faq_items');
            $table->string('intro_title')->nullable()->after('intro_enabled');
            $table->text('intro_content')->nullable()->after('intro_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['intro_enabled', 'intro_title', 'intro_content']);
        });
    }
};
