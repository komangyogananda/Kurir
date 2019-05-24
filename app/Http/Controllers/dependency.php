<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class dependency extends Controller
{
    public function getKota($provinsi)
    {
        $kota = DB::table('kota')->where('provinsi_id', $provinsi)->pluck('id', 'nama_kota');
        return json_encode($kota);
    }

    public function getKecamatan($kota)
    {
        $kecamatan = DB::table('kecamatan')->where('kota_id', $kota)->pluck('id', 'nama_kecamatan');
        return json_encode($kecamatan);
    }

    public function getKelurahan($kecamatan)
    {
        $kelurahan = DB::table('kelurahan')->where('kecamatan_id', $kecamatan)->pluck('id', 'nama_kelurahan');
        return json_encode($kelurahan);
    }

    public function getCabang($kelurahan)
    {
        $cabang = DB::table('cabang')->where('kelurahan_id', $kelurahan)->pluck('id', 'nama_cabang');
        return json_encode($cabang);
    }
}
