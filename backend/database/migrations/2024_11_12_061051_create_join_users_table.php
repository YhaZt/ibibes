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
        Schema::create('join_incubatees', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('product_name');
            $table->text('product_image');
            $table->text('product_description');
            $table->string('innovation_industry');
            $table->string('technology_readiness');
            $table->string('seed_grant');
            $table->string('founder_last_name');
            $table->string('founder_middle_name');
            $table->string('founder_first_name');
            $table->text('founder_image');
            $table->date('founder_birthday')->nullable();
            $table->string('gender');
            $table->string('email_address');
            $table->string('contact_number');
            $table->string('seen_in');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_incubatees');
    }
};
