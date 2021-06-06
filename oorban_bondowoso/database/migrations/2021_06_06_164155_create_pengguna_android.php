<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaAndroid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna_android', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap',50);
            $table->string('username',30)->unique();
            $table->string('password',60);
            $table->text('alamat');
            $table->string('nik',16);
            $table->string('no_hp',13)->unique();
            $table->string('email',50)->unique();
            $table->enum('gender', ['pria','wanita']);
            $table->text('scan_ktp');
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
        Schema::dropIfExists('pengguna_android');
    }
}
