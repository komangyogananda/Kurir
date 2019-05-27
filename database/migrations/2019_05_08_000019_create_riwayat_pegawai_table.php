<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pegawai', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->bigInteger('jenis_pegawai_id')->unsigned();
            $table->bigInteger('cabang_id')->unsigned();
            $table->string('nama_pegawai', 125);
            $table->string('no_hp_pegawai', 20);
            $table->string('username', 50);
            $table->string('password', 200);
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
        Schema::dropIfExists('riwayat_pegawai');
    }
}
