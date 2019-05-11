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
            $table->integer('kategori_barang_id')->unsigned();
            $table->integer('transaksi_id')->unsigned();
            $table->string('deskripsi_barang', 125);
            $table->integer('berat');
            $table->integer('tinggi');
            $table->integer('lebar');
            $table->integer('panjang');
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
        Schema::dropIfExists('detail_barang');
    }
}
