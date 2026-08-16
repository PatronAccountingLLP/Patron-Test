<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * The `posts` table was replaced by a fresh copy, but the pivot tables' foreign
 * keys were never re-pointed and still reference the stale `posts_backup`. Any
 * insert of a row whose post exists only in the new `posts` (e.g. the seeder's
 * post 852/853) fails with a 1452 FK violation.
 *
 * This re-points both FKs (post_category_post.post_id and post_user.post_id)
 * from posts_backup to posts, after removing pivot rows that reference posts
 * which no longer exist in the live table.
 *
 * It is fully guarded so it is a no-op if the FK is already correct — safe if a
 * DBA fixed it by hand before this runs, and harmless to re-run.
 */
return new class extends Migration
{
    /** table => foreign-key constraint name, all keyed on a `post_id` column. */
    private array $fks = [
        'post_category_post' => 'post_category_post_post_id_foreign',
        'post_user'          => 'post_user_post_id_foreign',
    ];

    public function up(): void
    {
        $schema = DB::getDatabaseName();

        foreach ($this->fks as $table => $constraint) {
            if (! $this->tableExists($table)) {
                continue;
            }

            // 1. Drop pivot rows pointing at posts that no longer exist. These would
            //    otherwise block creating the new FK against `posts`.
            DB::statement("DELETE FROM `{$table}` WHERE `post_id` NOT IN (SELECT `id` FROM `posts`)");

            $target = $this->fkTarget($schema, $table, $constraint);

            if ($target === 'posts') {
                continue;                       // already correct — nothing to do
            }
            if ($target !== null) {
                DB::statement("ALTER TABLE `{$table}` DROP FOREIGN KEY `{$constraint}`");
            }
            DB::statement(
                "ALTER TABLE `{$table}` ADD CONSTRAINT `{$constraint}` " .
                "FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE"
            );
        }
    }

    public function down(): void
    {
        // Deliberately not reversed: pointing a FK back at posts_backup (a table
        // meant to be dropped) would re-introduce the bug. Left as a no-op.
    }

    private function tableExists(string $table): bool
    {
        return DB::selectOne(
            "SELECT 1 FROM information_schema.tables
             WHERE table_schema = DATABASE() AND table_name = ? LIMIT 1",
            [$table]
        ) !== null;
    }

    /** The table a FK currently references, or null if the FK does not exist. */
    private function fkTarget(string $schema, string $table, string $constraint): ?string
    {
        $row = DB::selectOne(
            "SELECT referenced_table_name AS t
             FROM information_schema.key_column_usage
             WHERE table_schema = ? AND table_name = ? AND constraint_name = ?
               AND referenced_table_name IS NOT NULL
             LIMIT 1",
            [$schema, $table, $constraint]
        );

        return $row->t ?? null;
    }
};
