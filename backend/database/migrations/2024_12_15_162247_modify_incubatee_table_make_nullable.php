<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyIncubateeTableMakeNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->string('company_name')->nullable()->change();
            $table->string('product_name')->nullable()->change();
            $table->string('product_image')->nullable()->change();
            $table->text('product_description')->nullable()->change();
            $table->string('innovation_industry')->nullable()->change();
            $table->string('technology_readiness')->nullable()->change();
            $table->decimal('seed_grant', 8, 2)->nullable()->change();
            $table->string('founder_last_name')->nullable()->change();
            $table->string('founder_first_name')->nullable()->change();
            $table->string('founder_middle_name')->nullable()->change();
            $table->string('founder_image')->nullable()->change();
            $table->string('gender')->nullable()->change();
            $table->string('email_address')->nullable()->change();
            $table->string('contact_number')->nullable()->change();
            $table->string('seen_in')->nullable()->change();
            $table->string('application_file')->nullable()->change();
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->string('company_name')->nullable(false)->change();
            $table->string('product_name')->nullable(false)->change();
            $table->string('product_image')->nullable(false)->change();
            $table->text('product_description')->nullable(false)->change();
            $table->string('innovation_industry')->nullable(false)->change();
            $table->string('technology_readiness')->nullable(false)->change();
            $table->decimal('seed_grant', 8, 2)->nullable(false)->change();
            $table->string('founder_last_name')->nullable(false)->change();
            $table->string('founder_first_name')->nullable(false)->change();
            $table->string('founder_middle_name')->nullable(false)->change();
            $table->string('founder_image')->nullable(false)->change();
            $table->string('gender')->nullable(false)->change();
            $table->string('email_address')->nullable(false)->change();
            $table->string('contact_number')->nullable(false)->change();
            $table->string('seen_in')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->string('application_file')->nullable(false)->change();
        });
    }
}
