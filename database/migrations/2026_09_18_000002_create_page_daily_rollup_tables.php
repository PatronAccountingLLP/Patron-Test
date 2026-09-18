<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * Phase 5 - the nightly rollup store. One row per page, per IST day, per device.
 *
 * THE RULE: every metric here is a SUM or a COUNT, never an average. Averages
 * cannot be added, so any date range is a plain SUM between two dates. An
 * average (e.g. mean time on page) is computed at read time as
 * SUM(total_seconds) / SUM(visits).
 *
 * Rows are written once per (date,url,device) and never updated; the rollup
 * command deletes a day's rows before re-inserting, so re-running is idempotent.
 * Bot-flagged sessions never enter these tables.
 *
 * DB-agnostic (SQLite local, MySQL prod). Reversible.
 */
return new class extends Migration
{
    public function up(): void
    {
        // Element-relative click position, for a heatmap that can merge across
        // screen sizes: a click stored as a fraction of its own element's box
        // (0..1) stacks correctly whether it came from a 1920px laptop or a
        // 390px phone. Raw pixels cannot. Device is still rolled up separately.
        Schema::table('visitor_events', function (Blueprint $table) {
            $table->float('el_x')->nullable()->after('vw'); // 0..1 within element
            $table->float('el_y')->nullable()->after('el_x');
        });

        Schema::create('page_daily', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('url', 255);
            $table->string('device', 16);            // mobile / desktop / tablet

            $table->unsignedInteger('visits')->default(0);
            $table->unsignedBigInteger('total_seconds')->default(0);   // SUM
            $table->unsignedBigInteger('total_read_pct')->default(0);  // SUM (0..100 each)
            $table->unsignedInteger('bounced_under_10s')->default(0);
            $table->unsignedInteger('exits')->default(0);
            $table->unsignedInteger('form_views')->default(0);
            $table->unsignedInteger('form_starts')->default(0);
            $table->unsignedInteger('form_submits')->default(0);
            $table->string('layout_version', 32)->nullable();

            $table->timestamps();
            $table->unique(['date', 'url', 'device']);
            $table->index(['url', 'date']);
        });

        Schema::create('page_daily_clicks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('url', 255);
            $table->string('device', 16);
            $table->string('element_key', 160);      // the stable key from Phase 1.4
            $table->unsignedInteger('clicks')->default(0);
            $table->unsignedInteger('clicked_sessions')->default(0); // distinct, so a rage-clicker can't skew
            $table->timestamps();
            $table->unique(['date', 'url', 'device', 'element_key'], 'pdc_unique');
            $table->index(['url', 'date']);
        });

        Schema::create('page_daily_sections', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('url', 255);
            $table->string('device', 16);
            $table->string('section_key', 160);
            $table->unsignedBigInteger('total_visible_seconds')->default(0); // SUM
            $table->unsignedInteger('sessions_reaching_section')->default(0);
            $table->timestamps();
            $table->unique(['date', 'url', 'device', 'section_key'], 'pds_unique');
            $table->index(['url', 'date']);
        });

        Schema::create('page_daily_exits', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('url', 255);
            $table->string('device', 16);
            $table->string('exit_type', 24);         // navigated_away / left_site / idle_timeout / off_site
            $table->unsignedInteger('count')->default(0);
            $table->timestamps();
            $table->unique(['date', 'url', 'device', 'exit_type'], 'pde_unique');
            $table->index(['url', 'date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_daily_exits');
        Schema::dropIfExists('page_daily_sections');
        Schema::dropIfExists('page_daily_clicks');
        Schema::dropIfExists('page_daily');
        Schema::table('visitor_events', function (Blueprint $table) {
            $table->dropColumn(['el_x', 'el_y']);
        });
    }
};
