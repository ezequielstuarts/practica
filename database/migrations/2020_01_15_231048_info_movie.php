<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_movie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');            
            $table->text('info_movie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_movie');
    }
}
