<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgusCaseholding extends Migration
{
    public function up()
    {
        Schema::create('caseholding_agus', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::create('caseholding_anis', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('caseholding_agus');
        Schema::drop('caseholding_anis');
    }
}
