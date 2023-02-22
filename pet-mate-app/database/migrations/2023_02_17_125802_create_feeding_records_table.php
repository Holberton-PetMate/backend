<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeding_records', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('weight');
            $table->enum('mode', ['input', 'output'])->default('output');
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
        Schema::dropIfExists('feeding_records');
    }
};
