<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgusStopword extends Migration
{
    public function up()
    {
        Schema::create('stopword_agus', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::create('stemming_agus', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::create('stopword_anis', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::create('stemming_anis', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('stopword_agus');
        Schema::drop('stemming_agus');
        Schema::drop('stopword_anis');
        Schema::drop('stemming_anis');
    }
}
