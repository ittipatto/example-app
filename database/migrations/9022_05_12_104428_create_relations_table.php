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
        Schema::table('use_ones', function (Blueprint $table) {
            $table->foreign('storage_id')->references('id')->on('storage_images');
            $table->foreign('one_id')->references('id')->on('ones');
        });

        Schema::table('use_twos', function (Blueprint $table) {
            $table->foreign('storage_id')->references('id')->on('storage_images');
            $table->foreign('two_id')->references('id')->on('twos');
        });

        Schema::table('use_threes', function (Blueprint $table) {
            $table->foreign('storage_id')->references('id')->on('storage_images');
            $table->foreign('three_id')->references('id')->on('threes');
        });

        Schema::table('use_fours', function (Blueprint $table) {
            $table->foreign('storage_id')->references('id')->on('storage_images');
            $table->foreign('four_id')->references('id')->on('fours');
        });

        Schema::table('use_fives', function (Blueprint $table) {
            $table->foreign('storage_id')->references('id')->on('storage_images');
            $table->foreign('five_id')->references('id')->on('fives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations');
    }
};
