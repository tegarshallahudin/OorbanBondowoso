<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pengguna', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_lengkap');
            $table->string('username');
            $table->string('password');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('status_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_pengguna');
    }
}
