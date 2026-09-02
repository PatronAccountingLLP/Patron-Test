<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Our own copy of every enquiry.
 *
 * Until now an enquiry existed in exactly one place - Zoho Bigin - and only if
 * Zoho accepted it. Anything that went wrong in between (Zoho down, a field
 * silently discarded because the web form was not built with it, a blocked
 * script) lost the lead with no trace and no way to notice. This table is the
 * record we control: LeadCaptureController writes the row BEFORE it forwards to
 * Zoho, so the enquiry survives whatever happens next, and zoho_status says
 * which ones never made it so they can be re-entered by hand.
 *
 * Deliberately DB-agnostic: prod is MySQL, local is SQLite, and a MySQL-only
 * migration aborts the whole chain on SQLite.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            // What the visitor typed.
            $table->string('name', 255)->nullable();
            $table->string('phone', 32)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('city', 255)->nullable();

            // What the page told us about itself.
            $table->string('service', 255)->nullable();
            $table->string('deal_name', 255)->nullable();
            $table->text('page_url')->nullable();
            $table->text('message')->nullable();

            // Did Zoho take it? 'ok', 'failed', or 'error'. null = not tried yet.
            $table->string('zoho_status', 16)->nullable();
            $table->integer('zoho_http_code')->nullable();
            $table->text('zoho_response')->nullable();

            // Enough to spot a bot run without storing anything sensitive.
            $table->string('ip', 45)->nullable();
            $table->text('user_agent')->nullable();

            $table->boolean('is_read')->default(false);
            $table->timestamps();

            $table->index('created_at');
            $table->index('zoho_status');
            $table->index('phone');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
