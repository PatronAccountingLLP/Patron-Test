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
            $table->string('benefits_header_title')->nullable()->after('benefits_items');
            $table->text('benefits_header_description')->nullable()->after('benefits_header_title');
            $table->string('benefits_header_button1_text')->nullable()->after('benefits_header_description');
            $table->string('benefits_header_button1_link')->nullable()->after('benefits_header_button1_text');
            $table->string('benefits_header_button2_text')->nullable()->after('benefits_header_button1_link');
            $table->string('benefits_header_button2_link')->nullable()->after('benefits_header_button2_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'benefits_header_title',
                'benefits_header_description',
                'benefits_header_button1_text',
                'benefits_header_button1_link',
                'benefits_header_button2_text',
                'benefits_header_button2_link'
            ]);
        });
    }
};
