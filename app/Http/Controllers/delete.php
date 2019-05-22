<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Quotation;

class delete extends Controller
{
    public function kurir($id)
    {
        DB::table('kurir')->where('id', $id)->delete();
        return view('table.kurir');
    }

    public function pegawai($id)
    {
        DB::table('pegawai')->where('id', $id)->delete();
        return view('table.pegawai');
    }
    
    public function transaksi($id)
    {
        DB::table('transaksi')->where('id', $id)->delete();
        return view('table.transaksi');
    }

    public function tracking($id)
    {
        DB::table('tracking')->where('id', $id)->delete();
        return view('table.tracking');
    }
}
