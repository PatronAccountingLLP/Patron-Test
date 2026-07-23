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
        Schema::table('noc_registrations', function (Blueprint $table) {
            $table->string('whatsapp_number', 10)->nullable()->after('noc_sign_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('noc_registrations', function (Blueprint $table) {
            $table->dropColumn('whatsapp_number');
        });
    }
};
