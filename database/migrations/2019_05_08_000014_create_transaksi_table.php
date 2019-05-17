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
            $table->bigInteger('penerima_id')->unsigned();
            $table->bigInteger('pengirim_id')->unsigned();
            $table->bigInteger('detail_barang_id')->unsigned();
            $table->integer('status');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('cabang_id')->references('id')->on('cabang');
            $table->foreign('kurir_id')->references('id')->on('kurir');
            $table->foreign('pegawai_id')->references('id')->on('pegawai');
            $table->foreign('tipe_jasa_id')->references('id')->on('tipe_jasa');
            $table->foreign('penerima_id')->references('id')->on('penerima');
            $table->foreign('pengirim_id')->references('id')->on('pengirim');
            $table->foreign('detail_barang_id')->references('id')->on('detail_barang');
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
