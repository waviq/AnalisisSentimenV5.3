<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordCababilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_cababilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word')->unique();
            $table->unsignedInteger('sentimen_id');
            $table->timestamps();
        });

        Schema::table('word_cababilities', function (Blueprint $kolom){
            $kolom->foreign('sentimen_id')
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
        Schema::table('word_cababilities', function (Blueprint $table){
            $table->dropForeign('word_cababilities_sentimen_id_foreign');
        });
        Schema::dropIfExists('word_cababilities');
    }
}
