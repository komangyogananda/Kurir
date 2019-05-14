<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cabang_id')->unsigned();
            $table->bigInteger('transaksi_id')->unsigned();
            $table->bigInteger('kurir_id')->unsigned();
            $table->timestamps();

            $table->foreign('cabang_id')->references('id')->on('cabang');
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
            $table->foreign('kurir_id')->references('id')->on('kurir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracking');
    }
}
