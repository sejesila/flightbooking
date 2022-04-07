<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');
            $table->string('departure_date');
            $table->string('arrival_date');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->unsignedBigInteger('route_no');
            $table->unsignedBigInteger('airline');


            $table->foreign('from')->references('id')->on('cities');
            $table->foreign('to')->references('id')->on('cities');
            $table->foreign('airline')->references('id')->on('airlines');
            $table->foreign('route_no')->references('id')->on('routes');
           // $table->foreignId('to_airport')->constrained('airports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
