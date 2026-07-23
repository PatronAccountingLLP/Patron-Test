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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('filename'); // Original filename
            $table->string('title')->nullable(); // User-friendly title
            $table->text('description')->nullable(); // File description
            $table->string('file_path'); // Storage path
            $table->string('file_url'); // Public URL
            $table->string('mime_type'); // File MIME type
            $table->string('file_type'); // image, video, document, audio
            $table->unsignedBigInteger('file_size'); // File size in bytes
            $table->json('metadata')->nullable(); // Additional metadata (dimensions, duration, etc.)
            $table->string('alt_text')->nullable(); // Alt text for images
            $table->unsignedBigInteger('uploaded_by'); // User who uploaded
            $table->boolean('is_public')->default(true); // Public/private file
            $table->timestamps();
            
            $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('cascade');
            $table->index(['file_type', 'is_public']);
            $table->index('uploaded_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
