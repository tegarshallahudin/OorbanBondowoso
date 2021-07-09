<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProperti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_properti', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik', 50);
            $table->bigInteger('umur_bangunan');
            $table->string('harga', 12);
            $table->bigInteger('jml_kamartidur');
            $table->bigInteger('jml_kamarmandi');
            $table->bigInteger('luas_tanah');
            $table->bigInteger('luas_bangunan');
            $table->bigInteger('lantai');
            $table->bigInteger('daya_listrik');
            $table->bigInteger('tahun_dibangun');
            $table->bigInteger('keterangan');
            $table->text('gambar');
            $table->enum('sertifikat',['SHM','SHGB','AJB']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_properti');
    }
}
