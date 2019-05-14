<?php

use Illuminate\Database\Seeder;

class KategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_barang')->delete();
        DB::table('kategori_barang')->insert([
            [
                'nama_kategori' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_kategori' => 'Dokumen dan Surat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_kategori' => 'Makanan dan Minuman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_kategori' => 'Logam Mulia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_kategori' => 'Pecah Belah',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_kategori' => 'Barang Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_kategori' => 'Barang Besar',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
