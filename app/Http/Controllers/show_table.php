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
        foreach ($data['data'] as $cabang) {
            // print_r($cabang);
            $penghasilan[$cabang->id] = DB::select('select PenghasilanCabang(?) uang', array($cabang->id))[0]->uang;
        }
        // print_r($data['penghasilan']);
        // exit();
        return view('table.cabang', $data)->with('penghasilan', $penghasilan);
    }
    
    public function detail_barang()
    {
        $data['data'] = DB::table('detail_barang')->paginate(50);
        return view('table.detail_barang', $data);
    }

    public function jenis_pegawai()
    {
        $data['data'] = DB::table('jenis_pegawai')->paginate(50);
        return view('table.jenis_pegawai', $data);
    }

    public function kategori_barang()
    {
        $data['data'] = DB::table('kategori_barang')->paginate(50);
        return view('table.kategori_barang', $data);
    }

    public function kecamatan()
    {
        $data['data'] = DB::table('kecamatan')->paginate(50);
        return view('table.kecamatan', $data);
    }

    public function kelurahan()
    {
        $data['data'] = DB::table('kelurahan')->paginate(50);
        return view('table.kelurahan', $data);
    }

    public function kota()
    {
        $data['data'] = DB::table('kota')->paginate(50);
        return view('table.kota', $data);
    }

    public function kurir()
    {
        $data['data'] = DB::table('kurir')->paginate(50);
        return view('table.kurir', $data);
    }

    public function pegawai()
    {
        $data['data'] = DB::table('pegawai')->paginate(50);
        return view('table.pegawai', $data);
    }

    public function penerima()
    {
        $data['data'] = DB::table('penerima')->paginate(50);
        return view('table.penerima', $data);
    }

    public function pengirim()
    {
        $data['data'] = DB::table('pengirim')->paginate(50);
        return view('table.pengirim', $data);
    }

    public function provinsi()
    {
        $data['data'] = DB::table('provinsi')->paginate(50);
        return view('table.provinsi', $data);
    }

    public function tipe_jasa()
    {
        $data['data'] = DB::table('tipe_jasa')->paginate(50);
        return view('table.tipe_jasa', $data);
    }

    public function tracking()
    {
        $data['data'] = DB::table('tracking')->paginate(50);
        return view('table.tracking', $data);
    }

    public function transaksi()
    {
        $data['data'] = DB::table('transaksi')->paginate(50);
        return view('table.transaksi', $data);
    }

}
