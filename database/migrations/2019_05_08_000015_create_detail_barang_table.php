<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kategori_barang_id')->unsigned();
            $table->bigInteger('transaksi_id')->unsigned();
            $table->string('deskripsi_barang', 125);
            $table->integer('berat');
            $table->integer('tinggi');
            $table->integer('lebar');
            $table->integer('panjang');
            $table->timestamps();

            $table->foreign('kategori_barang_id')->references('id')->on('kategori_barang');
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_barang');
    }
}
