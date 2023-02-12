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
        Schema::create('feeding_times', function (Blueprint $table) {
            $table->id();
            $table->integer('hour')->numberBetween(0, 24);
            $table->integer('minute')->numberBetween(0, 60);
            $table->integer('weight');
            $table->unsignedBigInteger('feeder_id');
            $table->timestamps();

            $table->foreign('feeder_id')->references('id')->on('feeders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feeding_times');
    }
};
