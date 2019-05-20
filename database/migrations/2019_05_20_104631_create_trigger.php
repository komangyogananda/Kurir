<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER UpdateTracking_Update
                AFTER UPDATE 
                ON transaksi
                FOR EACH ROW
            BEGIN
                IF NEW.cabang_id <> OLD.cabang_id THEN
                    INSERT INTO tracking (`cabang_id`, `transaksi_id`, `kurir_id`, `created_at`, `updated_at`) VALUES (NEW.cabang_id, NEW.id, NEW.kurir_id, NEW.created_at, NEW.updated_at);
                END IF;
            END
        ');

        DB::unprepared('
            CREATE TRIGGER UpdateTracking_Insert
                AFTER INSERT 
                ON transaksi
                FOR EACH ROW
            BEGIN
                INSERT INTO tracking (`cabang_id`, `transaksi_id`, `kurir_id`, `created_at`, `updated_at`) VALUES(NEW.cabang_id, NEW.id, NEW.kurir_id, NEW.created_at, NEW.updated_at);
            END
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `UpdateTracking_Update`');
        DB::unprepared('DROP TRIGGER `UpdateTracking_Insert`');
    }
}
