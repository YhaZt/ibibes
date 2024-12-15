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
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->string('are_you')->nullable();
            $table->string('way_to')->nullable();
            $table->string('product_to')->nullable();
            $table->string('solution_to')->nullable();
            $table->string('help_from')->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('join_incubatees', function (Blueprint $table) {
            $table->dropColumn(['are_you', 'way_to', 'product_to', 'solution_to', 'help_from', 'address','age']);
        });
    }
};
