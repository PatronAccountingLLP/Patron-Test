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
            $table->boolean('fees_enabled')->default(false)->after('challenges_note');
            $table->string('fees_title')->nullable()->after('fees_enabled');
            $table->text('fees_description')->nullable()->after('fees_title');
            $table->json('fees_items')->nullable()->after('fees_description');
            $table->text('fees_note')->nullable()->after('fees_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'fees_enabled',
                'fees_title',
                'fees_description',
                'fees_items',
                'fees_note'
            ]);
        });
    }
};
