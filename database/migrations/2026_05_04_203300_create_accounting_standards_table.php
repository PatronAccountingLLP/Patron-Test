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
        Schema::create('accounting_standards', function (Blueprint $table) {
             $table->id();
            $table->string('std_type')->nullable();
            $table->string('std_no')->nullable();
            $table->string('std_name')->nullable();
            $table->string('category')->nullable();
            $table->string('url')->nullable();
            $table->longText('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('canonical')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('Interlink-page')->nullable(); // note: hyphen allowed but not recommended
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounting_standards');
    }
};
