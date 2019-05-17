<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengirimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kelurahan_id')->unsigned();
            $table->string('nama_pengirim');
            $table->string('alamat_pengirim');
            $table->string('no_hp_pengirim', 20);
            $table->timestamps();

            $table->foreign('kelurahan_id')->references('id')->on('kelurahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengirim');
    }
}
