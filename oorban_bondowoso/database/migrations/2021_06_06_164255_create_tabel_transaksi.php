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
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('total_bayar')->nullable();
            $table->timestamps();
            $table->foreign('id_properti')->references('id')->on('detail_properti');
            $table->foreign('id_pengguna_android')->references('id')->on('pengguna_android');
            $table->foreign('users_id')->references('id')->on('users');
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
