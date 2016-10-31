<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaInicial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('photo');
            $table->string('video');
            $table->string('tagLine');
            $table->string('description');
            $table->integer('score');
            $table->timestamps();
        });
      
        Schema::create('conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->dateTime('dateAndTime');
            $table->integer('duration');
            $table->timestamps();
        }); 
        
        Schema::create('speakers_conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('speaker_id');
            $table->integer('conference_id');
            $table->foreign('speaker_id')->references('id')->on('speakers');
            $table->foreign('conference_id')->references('id')->on('conferences');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('speakers_conferences');
        Schema::drop('conferences');        
        Schema::drop('speakers');
        
    }
}
