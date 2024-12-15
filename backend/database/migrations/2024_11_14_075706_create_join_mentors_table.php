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
        Schema::create('join_mentors', function (Blueprint $table) {
            $table->id();
            $table->string('mentor_last_name');
            $table->string('mentor_middle_name');
            $table->string('mentor_first_name');
            $table->text('mentor_image');
            $table->date('mentor_birthday');
            $table->string('gender');
            $table->string('email_address');
            $table->string('contact_number');
            $table->text('country_residence');
            $table->text('current_occupation');
            $table->text('company');
            $table->text('designation');
            $table->text('year_of_experience');
            $table->text('industry_name');
            $table->text('why_interested');
            $table->text('what_can_offer');
            $table->text('already_mentored_startups');
            $table->text('conflict_of_interest');
            $table->text('other_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_mentors');
    }
};
