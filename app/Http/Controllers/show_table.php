<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class show_table extends Controller
{
    public function cabang()
    {
        $data['data'] = DB::table('cabang')->get();
        return view('table.cabang', $data);
    }
    
    public function detail_barang()
    {
        $data['data'] = DB::table('detail_barang')->get();
        return view('table.detail_barang', $data);
    }

    public function jenis_pegawai()
    {
        $data['data'] = DB::table('jenis_pegawai')->get();
        return view('table.jenis_pegawai', $data);
    }

    public function kategori_barang()
    {
        $data['data'] = DB::table('kategori_barang')->get();
        return view('table.kategori_barang', $data);
    }

}
