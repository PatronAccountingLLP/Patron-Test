<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * Where on the page a click happened - header, nav, content, footer, a sticky
 * CTA, a form. This is what answers "did they change page from the header menu
 * or from a link inside the article?": the navigating click is the last click
 * before the next page view, and its region says which part of the page it was.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visitor_events', function (Blueprint $table) {
            $table->string('region', 24)->nullable()->after('element');
        });
    }

    public function down(): void
    {
        Schema::table('visitor_events', function (Blueprint $table) {
            $table->dropColumn('region');
        });
    }
};
