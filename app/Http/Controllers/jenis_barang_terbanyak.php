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

class jenis_barang_terbanyak extends Controller
{
    public function index()
    {
        $ans['ans'] = DB::select('call MostThing()');
        return view('table.jenis_barang_terbanyak', $ans);
    }
}
