<?php

ini_set('memory_limit', '512M');

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KurirSeeder extends Seeder
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
        for ($i = 0; $i < 30000; $i++){
            DB::table('kurir')->insert([
                'nama_kurir' => $faker->name,
                'no_hp_kurir' => "081".mt_rand(000000000, 999999999),
                'username' => $faker->userName,
                'password' => bcrypt(Str::random(10)),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
