<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi', 25)->unique();
            $table->bigInteger('id_properti')->unsigned();
            $table->bigInteger('id_pengguna_android')->unsigned();
            $table->tinyInteger('id_pengguna')->unsigned();
            $table->tinyInteger('total_bayar', false);
            $table->tinyInteger('kembalian', false);
            $table->timestamps();
            $table->foreign('id_properti')->references('id')->on('detail_properti');
            $table->foreign('id_pengguna_android')->references('id')->on('pengguna_android');
            $table->foreign('id_pengguna')->references('id')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_transaksi');
    }
}
