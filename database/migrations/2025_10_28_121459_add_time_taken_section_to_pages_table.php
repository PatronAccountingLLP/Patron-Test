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
            $table->boolean('time_taken_enabled')->default(false)->after('fees_note');
            $table->string('time_taken_title')->nullable()->after('time_taken_enabled');
            $table->text('time_taken_content')->nullable()->after('time_taken_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'time_taken_enabled',
                'time_taken_title',
                'time_taken_content'
            ]);
        });
    }
};
