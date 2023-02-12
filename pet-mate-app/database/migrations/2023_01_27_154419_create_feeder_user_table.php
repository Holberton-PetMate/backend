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
        Schema::create('feeder_user', function (Blueprint $table) {
            $table->unsignedBigInteger('feeder_id');
            $table->unsignedBigInteger('user_id');
            $table->primary(['feeder_id', 'user_id']);
            $table->timestamps();
            
            $table->foreign('feeder_id')->references('id')->on('feeders');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feeder_user');
    }
};
