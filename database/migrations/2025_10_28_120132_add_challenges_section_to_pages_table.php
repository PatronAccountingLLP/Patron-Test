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
            $table->boolean('challenges_enabled')->default(false)->after('checklist_note');
            $table->string('challenges_title')->nullable()->after('challenges_enabled');
            $table->text('challenges_description')->nullable()->after('challenges_title');
            $table->json('challenges_items')->nullable()->after('challenges_description');
            $table->text('challenges_note')->nullable()->after('challenges_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'challenges_enabled',
                'challenges_title',
                'challenges_description',
                'challenges_items',
                'challenges_note'
            ]);
        });
    }
};
