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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->enum('type', ['post', 'page', 'post_category', 'page_category', 'custom']);
            $table->string('url')->nullable(); // For custom URLs
            $table->unsignedBigInteger('object_id')->nullable(); // ID of linked post/page/category
            $table->string('object_type')->nullable(); // Type of linked object
            $table->unsignedBigInteger('parent_id')->nullable(); // For nested menus
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            
            $table->foreign('parent_id')->references('id')->on('menu_items')->onDelete('cascade');
            $table->index(['menu_id', 'parent_id', 'sort_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};