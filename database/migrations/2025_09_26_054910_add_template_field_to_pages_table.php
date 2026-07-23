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
            $table->string('template')->default('default')->after('content');
            $table->text('excerpt')->nullable()->after('content');
            $table->string('featured_image')->nullable()->after('excerpt');
            $table->integer('sort_order')->default(0)->after('featured_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['template', 'excerpt', 'featured_image', 'sort_order']);
        });
    }
};
