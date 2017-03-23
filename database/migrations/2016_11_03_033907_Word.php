<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Word extends Migration
{

    public function up()
    {
        Schema::create('sentimen', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('kriteria')->unique();
        });
        Schema::create('word', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('word')->unique();
            $kolom->unsignedInteger('sentimen_id');
        });

        Schema::table('word', function (Blueprint $kolom){
            $kolom->foreign('sentimen_id')
                ->references('id')
                ->on('sentimen')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::drop('word');
        Schema::drop('sentimen');
    }
}
