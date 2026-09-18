<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * First-touch attribution and conversion, per visit.
 *
 *   channel        a human label for how the visit began - Google Search,
 *                  Google Business Profile, Google Ads, Direct, a referral, ...
 *                  Note: Google organic and a Google Business Profile click both
 *                  arrive with a google.com referrer and CANNOT be told apart
 *                  unless the Business Profile website link carries a utm_source.
 *   converted      did this visit submit the enquiry form.
 *
 * Also stores the raw utm/gclid so the channel can be recomputed later without
 * re-reading the referrer.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visitor_sessions', function (Blueprint $table) {
            $table->string('utm_source', 128)->nullable()->after('utm_campaign');
            $table->string('utm_medium', 128)->nullable()->after('utm_source');
            $table->string('gclid', 255)->nullable()->after('utm_medium');
            $table->string('channel', 48)->nullable()->after('gclid');
            $table->boolean('converted')->default(false)->after('channel');
            $table->timestamp('converted_at')->nullable()->after('converted');
        });
    }

    public function down(): void
    {
        Schema::table('visitor_sessions', function (Blueprint $table) {
            $table->dropColumn(['utm_source', 'utm_medium', 'gclid', 'channel', 'converted', 'converted_at']);
        });
    }
};
