<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeKeteranganOnDetailPropertiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_properti', function (Blueprint $table) {
            $table->text('keterangan')->after('tahun_dibangun')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_properti', function (Blueprint $table) {
            $table->bigInteger('keterangan')->after('tahun_dibangun')->change();
        });
    }
}
