<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelFavorit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_favorit', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_properti')->unsigned();
            $table->bigInteger('id_pengguna_android')->unsigned();
            $table->timestamps();
            $table->foreign('id_properti')->references('id')->on('detail_properti');
            $table->foreign('id_pengguna_android')->references('id')->on('pengguna_android');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_favorit');
    }
}
