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
            $table->boolean('license_types_enabled')->default(false)->after('partner_services_note');
            $table->string('license_types_title')->nullable()->after('license_types_enabled');
            $table->text('license_types_description')->nullable()->after('license_types_title');
            $table->json('license_types_rows')->nullable()->after('license_types_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['license_types_enabled', 'license_types_title', 'license_types_description', 'license_types_rows']);
        });
    }
};
