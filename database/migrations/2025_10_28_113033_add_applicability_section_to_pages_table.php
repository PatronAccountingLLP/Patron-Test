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
            $table->boolean('applicability_enabled')->default(false)->after('what_additional_content');
            $table->string('applicability_title')->nullable()->after('applicability_enabled');
            $table->text('applicability_content')->nullable()->after('applicability_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['applicability_enabled', 'applicability_title', 'applicability_content']);
        });
    }
};
