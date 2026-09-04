<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Pages published from Radar: regulatory updates and GST advance rulings.
 *
 * ── ONE TABLE, AND THE BODY IS JSON ───────────────────────────────────────────────────────────
 *
 * Notifications and rulings are the same KIND of thing here — a page Radar wrote, at a URL this
 * site owns, in a section people browse — and they are read by one controller and one template.
 * Two tables would be two of everything to keep in step for the sake of columns that differ.
 *
 * The columns below are only what this side has to QUERY on: what it routes by (kind, section,
 * slug, path), what it orders by (dated), what it dedupes by (doc_key), and what it decides a
 * re-push by (content_hash). Everything the page actually renders lives in `payload`, exactly as
 * Radar sent it. That is deliberate: Radar owns the shape of a page's content, and a column per
 * field would mean a migration on this side every time it adds a heading — with the page silently
 * losing the new field until somebody deployed.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('radar_publications', function (Blueprint $table) {
            $table->id();

            $table->string('kind', 8);                      // notif | case
            $table->string('doc_key', 190)->unique();       // Radar's identity: same key, same page
            $table->string('section', 32);                  // gst | income-tax | mca | aar | aaar
            $table->string('slug', 200);
            $table->string('path', 300)->unique();          // the URL, decided once and never moved

            $table->string('title', 500);
            $table->string('meta_title', 300)->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->text('meta_keywords')->nullable();

            // The document's own date — issued_on for a notification, order_date for a ruling.
            // The left-hand rail and both hubs sort on this, not on when we happened to publish.
            $table->date('dated')->nullable();

            $table->json('payload');
            $table->string('pdf_path', 300)->nullable();
            $table->char('content_hash', 40)->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            // The rail's query: this kind, this section, newest first.
            $table->index(['kind', 'section', 'dated'], 'radar_pub_section_dated');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('radar_publications');
    }
};
