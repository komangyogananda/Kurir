<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class create extends Controller
{
    public function formTransaksi()
    {
        $data['provinsi'] = DB::table('provinsi')->get();
        $data['tipe_jasa'] = DB::table('tipe_jasa')->get();
        $data['kategori_barang'] = DB::table('kategori_barang')->get();
        $a = 'a';
        return view('form.transaksi', $data);
    }

    public function createTransaksi(Request $request)
    {
        DB::table('transaksi')->insert([

        ]);
    }
}
