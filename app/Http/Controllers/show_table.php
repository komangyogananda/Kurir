<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Quotation;

class show_table extends Controller
{
    public function index()
    {
        return view('table.index');
    }

    public function cabang()
    {
        $data['data'] = DB::table('cabang')->paginate(50);
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

    public function kecamatan()
    {
        $data['data'] = DB::table('kecamatan')->get();
        return view('table.kecamatan', $data);
    }

    public function kelurahan()
    {
        $data['data'] = DB::table('kelurahan')->get();
        return view('table.kelurahan', $data);
    }

    public function kota()
    {
        $data['data'] = DB::table('kota')->get();
        return view('table.kota', $data);
    }

    public function kurir()
    {
        $data['data'] = DB::table('kurir')->get();
        return view('table.kurir', $data);
    }

    public function pegawai()
    {
        $data['data'] = DB::table('pegawai')->get();
        return view('table.pegawai', $data);
    }

    public function penerima()
    {
        $data['data'] = DB::table('penerima')->get();
        return view('table.penerima', $data);
    }

    public function pengirim()
    {
        $data['data'] = DB::table('pengirim')->get();
        return view('table.pengirim', $data);
    }

    public function provinsi()
    {
        $data['data'] = DB::table('provinsi')->get();
        return view('table.provinsi', $data);
    }

    public function tipe_jasa()
    {
        $data['data'] = DB::table('tipe_jasa')->get();
        return view('table.tipe_jasa', $data);
    }

    public function tracking()
    {
        $data['data'] = DB::table('tracking')->get();
        return view('table.tracking', $data);
    }

    public function transaksi()
    {
        $data['data'] = DB::table('transaksi')->get();
        return view('table.transaksi', $data);
    }

}
