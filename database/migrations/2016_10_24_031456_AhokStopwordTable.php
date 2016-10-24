<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AhokStopwordTable extends Migration
{

    public function up()
    {
        Schema::create('stopword_ahok', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::create('stemming_ahok', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('stopword_ahok');
        Schema::drop('stemming_ahok');
    }
}
