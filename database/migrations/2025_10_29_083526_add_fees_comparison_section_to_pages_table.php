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
            // Fees Comparison Section (Part 2)
            $table->boolean('fees_comparison_enabled')->default(false)->after('benefits_enabled');
            $table->string('fees_comparison_title')->nullable()->after('fees_comparison_enabled');
            $table->text('fees_comparison_subtitle')->nullable()->after('fees_comparison_title');
            $table->json('fees_comparison_rows')->nullable()->after('fees_comparison_subtitle');
            $table->text('fees_comparison_note')->nullable()->after('fees_comparison_rows');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'fees_comparison_enabled',
                'fees_comparison_title',
                'fees_comparison_subtitle',
                'fees_comparison_rows',
                'fees_comparison_note'
            ]);
        });
    }
};
