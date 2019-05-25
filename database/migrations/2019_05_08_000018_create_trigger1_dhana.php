<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger1Dhana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        DB::unprepared('
            CREATE OR REPLACE TRIGGER log_transaksi
            AFTER UPDATE
            ON TRANSAKSI
            BEGIN
                INSERT INTO LOG_TRANSAKSI VALUES (:OLD.ID, :NEW.CABANG_ID, :NEW.KURIR_ID, :NEW.PEGAWAI_ID, :NEW.TIPE_JASA_ID, :NEW.HARGA, :OLD.HARGA);
            END;
        ');
        DB::unprepared('
            CREATE OR REPLACE TRIGGER auto_delete_transaksi
            BEFORE DELETE
            ON TRANSAKSI
            BEGIN
                DELETE FROM PENGIRIM WHERE ID = :OLD.PENGIRIM_ID;
                DELETE FROM PENERIMA WHERE ID = :OLD.PENERIMA_ID;
                DELETE FROM DETAIL_BARANG WHERE ID = :OLD.DETAIL_BARANG_ID;
            END;
        ');*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        DB::unprepared('DROP TRIGGER `log_transaksi`');
        DB::unprepared('DROP TRIGGER `auto_delete_transaksi`');
        */
    }
}
