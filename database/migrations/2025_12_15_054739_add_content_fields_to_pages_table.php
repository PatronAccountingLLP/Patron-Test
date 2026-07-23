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
            // Report Components content
            $table->longText('report_components_content')->nullable()->after('report_components_note');
            // Procedure Steps content
            $table->longText('procedure_steps_content')->nullable()->after('procedure_steps_items');
            // Fees content
            $table->longText('fees_content')->nullable()->after('fees_note');
            // Benefits content
            $table->longText('benefits_content')->nullable()->after('benefits_note');
            // Company Registration content
            $table->longText('company_registration_content')->nullable()->after('company_registration_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'report_components_content',
                'procedure_steps_content',
                'fees_content',
                'benefits_content',
                'company_registration_content'
            ]);
        });
    }
};
