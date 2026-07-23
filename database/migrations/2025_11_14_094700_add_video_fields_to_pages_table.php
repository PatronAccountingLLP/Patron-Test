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
            $table->boolean('video_enabled')->default(false)->after('company_registration_items');
            $table->string('video_title')->nullable()->after('video_enabled');
            $table->text('video_description')->nullable()->after('video_title');
            $table->string('video_file')->nullable()->after('video_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['video_enabled', 'video_title', 'video_description', 'video_file']);
        });
    }
};
