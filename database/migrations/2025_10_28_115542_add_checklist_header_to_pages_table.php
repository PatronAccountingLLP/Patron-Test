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
            $table->string('checklist_header_title')->nullable()->after('checklist_items');
            $table->text('checklist_header_description')->nullable()->after('checklist_header_title');
            $table->string('checklist_header_button1_text')->nullable()->after('checklist_header_description');
            $table->string('checklist_header_button1_link')->nullable()->after('checklist_header_button1_text');
            $table->string('checklist_header_button2_text')->nullable()->after('checklist_header_button1_link');
            $table->string('checklist_header_button2_link')->nullable()->after('checklist_header_button2_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'checklist_header_title',
                'checklist_header_description',
                'checklist_header_button1_text',
                'checklist_header_button1_link',
                'checklist_header_button2_text',
                'checklist_header_button2_link'
            ]);
        });
    }
};
