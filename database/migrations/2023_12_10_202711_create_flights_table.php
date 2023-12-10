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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('airline_company');
            $table->timestamp('departure_time');
            $table->string('departure_city');
            $table->timestamp('arrival_time');
            $table->string('arrival_city');
            $table->string('class');
            $table->string('flight_time');
            $table->boolean('eat');
            $table->string('flight_distance');
            $table->string('equipment');
            $table->string('reservation_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
