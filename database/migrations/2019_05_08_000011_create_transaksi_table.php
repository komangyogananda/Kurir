<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cabang_id')->unsigned();
            $table->bigInteger('kurir_id')->unsigned();
            $table->bigInteger('pegawai_id')->unsigned();
            $table->bigInteger('tipe_jasa_id')->unsigned();
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('cabang_id')->references('id')->on('cabang');
            $table->foreign('kurir_id')->references('id')->on('kurir');
            $table->foreign('pegawai_id')->references('id')->on('pegawai');
            $table->foreign('tipe_jasa_id')->references('id')->on('tipe_jasa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
