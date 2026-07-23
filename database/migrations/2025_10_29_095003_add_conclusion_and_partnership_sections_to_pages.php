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
            // Conclusion Section
            $table->boolean('conclusion_enabled')->default(false)->after('partner_services_note');
            $table->string('conclusion_title')->nullable()->after('conclusion_enabled');
            $table->text('conclusion_content')->nullable()->after('conclusion_title');
            
            // Partnership Section
            $table->boolean('partnership_enabled')->default(false)->after('conclusion_content');
            $table->string('partnership_image')->nullable()->after('partnership_enabled');
            $table->string('partnership_title')->nullable()->after('partnership_image');
            $table->string('partnership_services')->nullable()->after('partnership_title');
            $table->string('partnership_button_text')->nullable()->after('partnership_services');
            $table->string('partnership_button_link')->nullable()->after('partnership_button_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'conclusion_enabled',
                'conclusion_title',
                'conclusion_content',
                'partnership_enabled',
                'partnership_image',
                'partnership_title',
                'partnership_services',
                'partnership_button_text',
                'partnership_button_link'
            ]);
        });
    }
};
