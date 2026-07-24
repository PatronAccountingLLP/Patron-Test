<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Adds the `key_points` column used by the blog "Quick answer" box
 * (resources/views/frontend/posts/show.blade.php reads $post->key_points).
 * The column is in the Post model's $fillable but was never migrated on
 * this deployment, so add it (idempotent).
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('posts', 'key_points')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->text('key_points')->nullable()->after('content');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('posts', 'key_points')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('key_points');
            });
        }
    }
};
