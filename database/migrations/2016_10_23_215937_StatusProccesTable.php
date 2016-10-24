<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StatusProccesTable extends Migration
{

    public function up()
    {
        Schema::create('status_procces', function (Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('procces')->nullable();
            $kolom->boolean('status')->default(false);
        });
    }


    public function down()
    {
        Schema::drop('status_procces');
    }
}
