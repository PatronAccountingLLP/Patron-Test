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
            $table->boolean('company_registration_enabled')->default(false)->after('partnership_button_link');
            $table->string('company_registration_title')->nullable()->after('company_registration_enabled');
            $table->json('company_registration_items')->nullable()->after('company_registration_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'company_registration_enabled',
                'company_registration_title',
                'company_registration_items'
            ]);
        });
    }
};
