<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AhokSentimentTable extends Migration
{

    public function up()
    {
        Schema::create('ahok_sentiment', function (Blueprint $kolom) {
            $kolom->increments('id')->unique();
            $kolom->unsignedInteger('sentiment_id')->nullable();
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::table('ahok_sentiment', function (Blueprint $kolom) {
            $kolom->foreign('sentiment_id')
                ->references('id')
                ->on('sentimen')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::drop('ahok_sentiment');
    }
}
