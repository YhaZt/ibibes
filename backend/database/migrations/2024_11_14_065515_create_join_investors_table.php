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
        Schema::create('join_investors', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('type_of_investor');
            $table->text('investment_size');
            $table->text('country_residence');
            $table->string('investor_last_name');
            $table->string('investor_middle_name');
            $table->string('investor_first_name');
            $table->text('investor_image');
            $table->date('investor_birthday');
            $table->string('gender');
            $table->string('email_address');
            $table->string('contact_number');
            $table->text('other_information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_investors');
    }
};
