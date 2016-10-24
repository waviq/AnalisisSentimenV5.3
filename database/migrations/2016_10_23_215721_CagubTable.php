<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CagubTable extends Migration
{

    public function up()
    {
        Schema::create('cagub', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('nama_cagub');
        });
    }


    public function down()
    {
        Schema::drop('cagub');
    }
}
