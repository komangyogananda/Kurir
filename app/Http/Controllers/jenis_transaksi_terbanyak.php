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

class jenis_transaksi_terbanyak extends Controller
{
    public function index()
    {
        $tipe_jasa = DB::table('tipe_jasa')->get();
        return view('form.jenis_transaksi_terbanyak')->with('tipe_jasa', $tipe_jasa);
    }

    public function terfavorit(Request $request)
    {
        $ans = DB::select('SELECT TotalJasa(?) as total', array($request->tipe_jasa));
        $tipe_jasa = DB::table('tipe_jasa')->get();
        return view('form.jenis_transaksi_terbanyak')->with('hasil', $ans)->with('tipe_jasa', $tipe_jasa);
    }



}
