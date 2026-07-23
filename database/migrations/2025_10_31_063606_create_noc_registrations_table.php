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
        Schema::create('noc_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('property_owner_name');
            $table->text('property_address');
            $table->string('business_name');
            $table->string('authorized_person_name');
            $table->string('owner_director_partner');
            $table->string('relation');
            $table->string('bill_type');
            $table->string('state');
            $table->date('noc_sign_date');
            $table->string('owner_name');
            $table->string('place');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noc_registrations');
    }
};
