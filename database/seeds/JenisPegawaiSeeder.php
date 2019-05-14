<?php

use Illuminate\Database\Seeder;

class JenisPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_pegawai')->delete();
        DB::table('jenis_pegawai')->insert([
            [
                'posisi' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Dokumen dan Surat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Makanan dan Minuman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Logam Mulia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Pecah Belah',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Barang Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Barang Besar',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
