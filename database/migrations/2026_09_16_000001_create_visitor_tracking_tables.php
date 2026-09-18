<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * Visitor Radar - the tracker's own store.
 *
 * Two tables, on purpose:
 *
 *   visitor_sessions  one row per visit, UPDATED in place by each heartbeat, so
 *                     a five-minute visit stays one row instead of thirty.
 *   visitor_events    append-only: page views, clicks, scroll marks. This is
 *                     what the per-visit journey and the per-visit click map are
 *                     drawn from.
 *
 * Deliberately DB-agnostic - prod is MySQL, local is SQLite, and a MySQL-only
 * migration aborts the whole chain on SQLite. Same rule the leads table follows.
 * No sensitive capture: the beacon never sends what a visitor types, only that a
 * field was focused or a form submitted.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visitor_sessions', function (Blueprint $table) {
            $table->id();

            // One visit; one person across visits.
            $table->string('session_id', 40)->unique();
            $table->string('visitor_id', 40)->index();

            // Added server-side from the request - never trusted from JS.
            $table->string('ip', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('device', 16)->nullable();   // mobile / desktop / tablet / bot
            $table->string('browser', 32)->nullable();
            $table->string('os', 32)->nullable();

            // Approximate location, filled later if a GeoIP source is added.
            $table->string('ip_city', 64)->nullable();
            $table->string('ip_region', 64)->nullable();
            $table->string('ip_country', 8)->nullable();

            // How the visit began.
            $table->text('landing_url')->nullable();
            $table->string('landing_path', 255)->nullable()->index();
            $table->text('referrer')->nullable();
            $table->string('source', 64)->nullable();     // google / direct / referral / ...
            $table->string('utm_campaign', 128)->nullable();

            // Updated by every heartbeat.
            $table->text('current_url')->nullable();
            $table->string('current_title', 255)->nullable();

            $table->unsignedInteger('page_count')->default(0);
            $table->unsignedInteger('click_count')->default(0);
            $table->unsignedInteger('engaged_seconds')->default(0);
            $table->unsignedTinyInteger('max_scroll_pct')->default(0);

            $table->boolean('is_bot')->default(false)->index();

            // Set when this visit produced an enquiry (joined to the leads table).
            $table->unsignedBigInteger('lead_id')->nullable()->index();

            $table->timestamp('started_at')->nullable();
            $table->timestamp('last_seen_at')->nullable()->index(); // drives "active now"
            $table->timestamps();
        });

        Schema::create('visitor_events', function (Blueprint $table) {
            $table->id();

            $table->string('session_id', 40)->index();
            $table->string('visitor_id', 40)->index();

            // page_view | click | scroll | form_start | form_submit | site_search | exit
            $table->string('type', 24);

            $table->text('url')->nullable();
            $table->string('path', 255)->nullable();
            $table->string('title', 255)->nullable();

            // For a click: the visible text and where it landed. x is a fraction of
            // page width (0-1) so it maps across screen sizes; y is pixels from the
            // top of the document; vw is the viewport width the click happened at.
            $table->string('label', 255)->nullable();
            $table->text('href')->nullable();
            $table->string('element', 255)->nullable();
            $table->float('x')->nullable();
            $table->unsignedInteger('y')->nullable();
            $table->unsignedInteger('vw')->nullable();

            $table->unsignedTinyInteger('scroll_pct')->nullable();
            $table->unsignedInteger('engaged_seconds')->nullable();

            $table->timestamp('occurred_at')->nullable();
            $table->timestamp('created_at')->nullable();

            // The journey query and the click-map query both read one session in
            // time order - this is the only index that has to be fast.
            $table->index(['session_id', 'id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visitor_events');
        Schema::dropIfExists('visitor_sessions');
    }
};
