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
                'posisi' => 'Manager',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Teller',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Customer Service',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Security',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Operator Pemilah Barang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Operator Packing Barang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Operator Operasional Barang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Staff IT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Cleaning Service',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'posisi' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
