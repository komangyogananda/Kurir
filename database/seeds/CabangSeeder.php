<?php

ini_set('memory_limit', '512M');

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
        $data = Kelurahan::all()->pluck('id');
        for ($i = 0; $i < 5000; $i++){
            $newId = $data->random(1);
            $namaKelurahan = Kelurahan::select('nama_kelurahan')->where('id', $newId[0])->get();
            DB::table('cabang')->insert([
                'kelurahan_id' => $newId[0],
                'nama_cabang' => "JNE ".$namaKelurahan[0]['nama_kelurahan'],
                'alamat_cabang' => Faker::streetPrefix().' '.Faker::street().' No. '.(string)Faker::buildingNumber(),
            ]);
        }
    }
}
