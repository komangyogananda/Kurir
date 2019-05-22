<?php

ini_set('memory_limit', '1024M');

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Cabang;
use App\Models\Kurir;
use App\Models\Pegawai;
use App\Models\Kelurahan;
use App\Models\TipeJasa;
use Faker\Provider\id_ID\Address as FakerProvider;


class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $cabang = Cabang::all();
        $kelurahan = Kelurahan::all();
        $kurir = Kurir::all();
        $pegawai = Pegawai::all();
        $hargaperjasa = [5000, 9000, 15000, 24000];
        for ($i = 1; $i <= 80000; $i++){
            $cabangPengirim = $cabang->random();
            $cabangPenerima = $cabang->random();
            $kelurahanPengirim = $cabangPengirim->kelurahan_id;
            $kelurahanPenerima = $cabangPenerima->kelurahan_id;
            $kurirId = $kurir->random()->id;
            $pegawaiId = $pegawai->random()->id;
            $tipeJasa = mt_rand(1, 4);
            $berat = mt_rand(1, 20);
            $tinggi = mt_rand(1, 2);
            $lebar = mt_rand(1, 2);
            $panjang = mt_rand(1, 2);
            $harga = ($tinggi * $lebar * $panjang) * $berat;
            $harga = $harga * $hargaperjasa[$tipeJasa-1];
            DB::table('pengirim')->insert([
                'kelurahan_id' => $kelurahanPengirim,
                'nama_pengirim' => $faker->name,
                'alamat_pengirim' => FakerProvider::streetPrefix().' '.FakerProvider::street().' No. '.(string)FakerProvider::buildingNumber(),
                'no_hp_pengirim' => $faker->phoneNumber
            ]);
            DB::table('penerima')->insert([
                'kelurahan_id' => $kelurahanPenerima,
                'nama_penerima' => $faker->name,
                'alamat_penerima' => FakerProvider::streetPrefix().' '.FakerProvider::street().' No. '.(string)FakerProvider::buildingNumber(),
                'no_hp_penerima' => $faker->phoneNumber
            ]);
            DB::table('detail_barang')->insert([
                'kategori_barang_id' => mt_rand(1, 7),
                'deskripsi_barang' => $faker->text(50),
                'berat' => mt_rand(1, 20),
                'tinggi' => mt_rand(1, 2),
                'lebar' => mt_rand(1, 2),
                'panjang' => mt_rand(1, 2),
            ]);
            DB::table('transaksi')->insert([
                'cabang_id' => $cabangPengirim->id,
                'kurir_id' => $kurirId,
                'pegawai_id' => $pegawaiId,
                'tipe_jasa_id' => $tipeJasa,
                'penerima_id' => $i,
                'pengirim_id' => $i,
                'detail_barang_id' => $i,
                'status' => 1,
                'harga' => $harga,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
