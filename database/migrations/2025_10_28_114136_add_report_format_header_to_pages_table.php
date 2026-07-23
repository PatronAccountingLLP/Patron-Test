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
            $table->string('report_format_title')->nullable()->after('report_components_items');
            $table->text('report_format_description')->nullable()->after('report_format_title');
            $table->string('report_format_button1_text')->nullable()->after('report_format_description');
            $table->string('report_format_button1_link')->nullable()->after('report_format_button1_text');
            $table->string('report_format_button2_text')->nullable()->after('report_format_button1_link');
            $table->string('report_format_button2_link')->nullable()->after('report_format_button2_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'report_format_title',
                'report_format_description',
                'report_format_button1_text',
                'report_format_button1_link',
                'report_format_button2_text',
                'report_format_button2_link'
            ]);
        });
    }
};
