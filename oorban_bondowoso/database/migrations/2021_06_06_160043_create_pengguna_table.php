<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nama_lengkap',50);
            $table->string('username',30)->unique();
            $table->string('password',60);
            $table->text('alamat');
            $table->string('no_hp',13)->unique();
            $table->string('email',50)->unique();
            $table->enum('level', ['super_admin','admin']);
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
        Schema::dropIfExists('pengguna');
    }
}
