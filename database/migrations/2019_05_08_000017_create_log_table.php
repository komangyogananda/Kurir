<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cabang_log_id');
            $table->bigInteger('kurir_log_id');
            $table->bigInteger('pegawai_log_id');
            $table->bigInteger('tipe_jasa_log_id');
            $table->integer('harga_baru_log');
            $table->integer('harga_lama_log');
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
        Schema::dropIfExists('log');
    }
}
