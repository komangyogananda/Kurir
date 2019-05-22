<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class create extends Controller
{
    public function formTransaksi()
    {
        $provinsi['provinsi'] = DB::table('provinsi')->get();
        $kota['kota'] = DB::table('kota')->get();
        $kecamatan['kecamatan'] = DB::table('kecamatan')->get();
        $kelurahan['kelurahan'] = DB::table('kelurahan')->get();

        return view('form.transaksi', $provinsi, $kota, $kecamatan, $kelurahan);
    }

    public function createTransaksi(Request $request)
    {
        DB::table('transaksi')->insert([

        ]);
    }
}
