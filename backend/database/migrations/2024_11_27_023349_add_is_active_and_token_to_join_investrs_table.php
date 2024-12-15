<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('join_mentors', function (Blueprint $table) {
            $table->boolean('is_active')->default(false);
            $table->string('token', 30)->nullable();
            $table->string('password');
        });
        DB::table('join_mentors')->get()->each(function ($mentor) {
            DB::table('join_mentors')
                ->where('id', $mentor->id)
                ->update(['token' => Str::random(30)]);
        });
        Schema::table('join_mentors', function (Blueprint $table) {
            $table->string('token', 30)->unique()->change();
        });
        Schema::table('join_investors', function (Blueprint $table) {
            $table->boolean('is_active')->default(false);
            $table->string('token', 30)->nullable();
            $table->string('password');
        });
        DB::table('join_investors')->get()->each(function ($investor) {
            DB::table('join_investors')
                ->where('id', $investor->id)
                ->update(['token' => Str::random(30)]);
        });
        Schema::table('join_investors', function (Blueprint $table) {
            $table->string('token', 30)->unique()->change();
        });
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->boolean('is_active')->default(false);
            $table->string('token', 30)->nullable();
            $table->string('password');
        });
        DB::table('join_incubatees')->get()->each(function ($incubatee) {
            DB::table('join_incubatees')
                ->where('id', $incubatee->id)
                ->update(['token' => Str::random(30)]);
        });
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->string('token', 30)->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('join_mentors', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'token', 'password']);
        });
        Schema::table('join_investors', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'token', 'password']);
        });
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->dropColumn(['is_active', 'token', 'password']);
        });
    }
};
