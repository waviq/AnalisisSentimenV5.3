<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AhokCaseholdingTable extends Migration
{

    public function up()
    {
        Schema::create('caseholding_ahok', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('caseholding_ahok');
    }
}
