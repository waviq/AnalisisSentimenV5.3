<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgusNormalisasi extends Migration
{
    public function up()
    {
        Schema::create('normalisasi_agus', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::create('normalisasi_anis', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('normalisasi_agus');
        Schema::drop('normalisasi_anis');
    }
}
