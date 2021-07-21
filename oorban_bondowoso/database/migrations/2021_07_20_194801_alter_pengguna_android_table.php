<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPenggunaAndroidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::unprepared("ALTER TABLE pengguna_android MODIFY COLUMN gender ENUM('pria','wanita', 'lainnya') DEFAULT 'lainnya';");
        Schema::table('pengguna_android', function (Blueprint $table) {
            $table->text('alamat')->nullable()->change();
            $table->string('nik',16)->nullable()->change();
            $table->string('no_hp',13)->nullable()->change();
            $table->text('scan_ktp')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengguna_android', function (Blueprint $table) {

        });
    }
}
