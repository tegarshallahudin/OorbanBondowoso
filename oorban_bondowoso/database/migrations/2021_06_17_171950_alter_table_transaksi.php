<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tabel_transaksi', function (Blueprint $table) {
            $table->text('bukti_pembayaran')->nullable();
            $table->dropColumn('kembalian');
            $table->enum('status_pembayaran', ['belum_bayar', 'sudah_bayar', 'ditolak']);
            $table->text('alasan_penolakan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
