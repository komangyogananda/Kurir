<?php

use Illuminate\Database\Seeder;
use Faker\Provider\id_ID\Address as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Kelurahan;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $faker = Faker::create();
        $data = Kelurahan::all();
        for ($i = 0; $i < 2000; $i++){
            $newId = $data->random()->id;
            $namaKelurahan = Kelurahan::select('nama_kelurahan')->where('id', $newId)->get();
            $nama_cabang = $namaKelurahan[0]['nama_kelurahan'];
            DB::table('cabang')->insert([
                'kelurahan_id' => $newId,
                'nama_cabang' => $nama_cabang,
                'alamat_cabang' => Faker::streetPrefix().' '.Faker::street().' No. '.(string)Faker::buildingNumber(),
            ]);
        }
    }
}
