<?php

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
        for ($i = 0; $i < 5000; $i++){
            DB::table('kurir')->insert([
                'nama_kurir' => $faker->name,
                'no_hp_kurir' => $faker->phoneNumber,
                'username' => Str::random(10),
                'password' => bcrypt(Str::random(10)),
            ]);
        }
    }
}
