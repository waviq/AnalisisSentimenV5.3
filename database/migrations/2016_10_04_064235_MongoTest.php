<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MongoTest extends Migration
{

    public function up()
    {
        Schema::create('test_table', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('nama');
            $kolom->integer('umur');
        });
    }


    public function down()
    {
        Schema::drop('test_table');
    }
}
