<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Quotation;
use App\Models\Transaksi;
use App\Models\Pengirim;
use App\Models\Penerima;
use App\Models\DetailBarang;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\KategoriBarang;
use App\Models\Cabang;

class Daerah extends Controller
{
    public function index()
    {
        $provinsi = DB::table('provinsi')->get();
        return view('form.terfavorit')->with('provinsi', $provinsi);
    }

    public function terfavorit(Request $request)
    {
        $prov = Provinsi::find($request->provinsi);
        $ans = DB::select('call TerFavorit(?)', array($prov->nama_provinsi));
        $provinsi = DB::table('provinsi')->get();
        return view('form.terfavorit')->with('hasil', $ans)->with('provinsi', $provinsi);
    }



}
