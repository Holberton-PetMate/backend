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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('weight');
            $table->integer('calories')->default(0);
            $table->integer('vitamines')->default(0);
            $table->integer('proteins')->default(0);
            $table->timestamps();

            $table->unsignedBigInteger('feeder_id');
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
        Schema::dropIfExists('foods');
    }
};
