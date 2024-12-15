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
        Schema::table('join_mentors', function (Blueprint $table) {
            $table->text('application_file');
        });
        Schema::table('join_investors', function (Blueprint $table) {
            $table->text('application_file');
        });
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->text('application_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('join_mentors', function (Blueprint $table) {
            $table->dropColumn(['application_file']);
        });
        Schema::table('join_investors', function (Blueprint $table) {
            $table->dropColumn(['application_file']);
        });
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->dropColumn(['application_file']);
        });
    }
};
