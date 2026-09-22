<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * Capture-layer upgrades (Phases 1 & 4).
 *
 *   visitor_events.element_key  a stable, groupable identity for a click,
 *                               resolved data-track > id > aria-label >
 *                               text+href > heading+tag. Never a positional
 *                               CSS path, so it survives a page edit. This is
 *                               what the nightly rollup groups clicks by.
 *
 *   visitor_sessions.bot_reason why a visit was flagged is_bot, kept for audit
 *                               so the rules can be tuned rather than trusted
 *                               blind. Null on a genuine human visit.
 *
 * DB-agnostic (SQLite local, MySQL prod). Reversible.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visitor_events', function (Blueprint $table) {
            $table->string('element_key', 160)->nullable()->after('element');
        });
        Schema::table('visitor_sessions', function (Blueprint $table) {
            $table->string('bot_reason', 48)->nullable()->after('is_bot');
        });
    }

    public function down(): void
    {
        Schema::table('visitor_events', function (Blueprint $table) {
            $table->dropColumn('element_key');
        });
        Schema::table('visitor_sessions', function (Blueprint $table) {
            $table->dropColumn('bot_reason');
        });
    }
};
