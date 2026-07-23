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
        Schema::table('pages', function (Blueprint $table) {
            $table->string('procedure_header_title')->nullable()->after('procedure_steps_items');
            $table->text('procedure_header_description')->nullable()->after('procedure_header_title');
            $table->string('procedure_header_button1_text')->nullable()->after('procedure_header_description');
            $table->string('procedure_header_button1_link')->nullable()->after('procedure_header_button1_text');
            $table->string('procedure_header_button2_text')->nullable()->after('procedure_header_button1_link');
            $table->string('procedure_header_button2_link')->nullable()->after('procedure_header_button2_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'procedure_header_title',
                'procedure_header_description',
                'procedure_header_button1_text',
                'procedure_header_button1_link',
                'procedure_header_button2_text',
                'procedure_header_button2_link'
            ]);
        });
    }
};
