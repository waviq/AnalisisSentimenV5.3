<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WordIndonesianTable extends Migration
{

    public function up()
    {
        Schema::create('word_positif',function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('positif')->nullable;
            $kolom->timestamps();
        });
    }

   
    public function down()
    {
        Schema::drop('word_indonesia');
    }
}
