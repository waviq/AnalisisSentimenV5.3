<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgusIntegritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agus_integrities', function (Blueprint $kolom) {
            $kolom->increments('id')->unique();
            $kolom->unsignedInteger('sentiment_id')->nullable();
            $kolom->string('From_User')->nullable();
            $kolom->text('text')->nullable();
            $kolom->timestamps();
        });

        Schema::table('agus_integrities', function (Blueprint $kolom) {
            $kolom->foreign('sentiment_id')
                ->references('id')
                ->on('sentimen')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agus_integrities');
    }
}
