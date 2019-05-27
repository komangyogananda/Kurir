<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatKurirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_kurir', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('nama_kurir', 125);
            $table->string('no_hp_kurir', 20);
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
        Schema::dropIfExists('riwayat_kurir');
    }
}
