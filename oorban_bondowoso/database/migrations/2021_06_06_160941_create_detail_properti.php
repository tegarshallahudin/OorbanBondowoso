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
            $table->tinyInteger('umur_bangunan');
            $table->string('harga', 12);
            $table->tinyInteger('jml_kamartidur');
            $table->tinyInteger('jml_kamarmandi');
            $table->tinyInteger('luas_tanah');
            $table->tinyInteger('luas_bangunan');
            $table->tinyInteger('lantai');
            $table->tinyInteger('daya_listrik');
            $table->tinyInteger('tahun_dibangun');
            $table->tinyInteger('keterangan');
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
