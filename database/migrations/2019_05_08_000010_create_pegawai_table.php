<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jenis_pegawai_id')->unsigned();
            $table->bigInteger('cabang_id')->unsigned();
            $table->string('nama_pegawai', 125);
            $table->string('no_hp_pegawai', 15);
            $table->string('username', 50);
            $table->string('password', 200);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('jenis_pegawai_id')->references('id')->on('jenis_pegawai');
            $table->foreign('cabang_id')->references('id')->on('cabang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
