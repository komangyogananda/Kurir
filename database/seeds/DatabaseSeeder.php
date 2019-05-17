<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(CabangSeeder::class);
        $this->call(KurirSeeder::class);
        $this->call(JenisPegawaiSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(TipeJasaSeeder::class);
        $this->call(KategoriBarangSeeder::class);
    }
}
