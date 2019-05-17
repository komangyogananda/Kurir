<?php

ini_set('memory_limit', '512M');

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\JenisPegawai;
use App\Models\Cabang;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create('id_ID');
        $jenisPegawai = JenisPegawai::all()->pluck('id');
        $cabang = Cabang::all()->pluck('id');
        for ($i = 0; $i < 5000; $i++){
            for($j = 0; $j < 10; $j++){
                if($j == 1){
                    for($k = 0; $k < 3; $k++){
                        $namaDepan = $faker->firstName;
                        $namaBelakang = $faker->lastName;
                        DB::table('pegawai')->insert([
                            'jenis_pegawai_id' => $jenisPegawai[$j],
                            'cabang_id' => $cabang[$i],
                            'nama_pegawai' => $namaDepan." ".$namaBelakang,
                            'no_hp_pegawai' => $faker->phoneNumber,
                            'username' => $namaDepan.mt_rand(00,99),
                            'password' => bcrypt(Str::random(10)),
                            'remember_token' => Str::random(10),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }else{
                    $namaDepan = $faker->firstName;
                    $namaBelakang = $faker->lastName;
                    DB::table('pegawai')->insert([
                        'jenis_pegawai_id' => $jenisPegawai[$j],
                        'cabang_id' => $cabang[$i],
                        'nama_pegawai' => $namaDepan." ".$namaBelakang,
                        'no_hp_pegawai' => $faker->phoneNumber,
                        'username' => $namaDepan.mt_rand(00,99),
                        'password' => bcrypt(Str::random(10)),
                        'remember_token' => Str::random(10),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }            
        }

    }
}
