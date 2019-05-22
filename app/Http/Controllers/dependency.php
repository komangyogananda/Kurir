<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class dependency extends Controller
{
    public function getKota($provinsi)
    {
        $kota = DB::table('kota')->where('provinsi_id', $provinsi);
        return json_encode($kota);
    }

    public function getKecamatan($kota)
    {
        $kecamatan = DB::table('kecamatan')->where('kota_id', $kota);
        return json_encode($kecamatan);
    }

    public function getKelurahan($kecamatan)
    {
        $kelurahan = DB::table('kelurahan')->where('kecamatan_id', $kecamatan);
        return json_encode($kelurahan);
    }
}
