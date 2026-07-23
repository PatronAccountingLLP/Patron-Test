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
        Schema::table('posts', function (Blueprint $table) {
            $table->text('description')->nullable()->after('excerpt');
            $table->string('custom_field_1')->nullable()->after('description');
            $table->string('custom_field_2')->nullable()->after('custom_field_1');
            $table->string('custom_field_3')->nullable()->after('custom_field_2');
            $table->string('custom_field_4')->nullable()->after('custom_field_3');
            $table->string('custom_field_5')->nullable()->after('custom_field_4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'custom_field_1',
                'custom_field_2',
                'custom_field_3',
                'custom_field_4',
                'custom_field_5'
            ]);
        });
    }
};
