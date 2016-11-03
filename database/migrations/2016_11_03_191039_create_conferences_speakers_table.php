<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }
}
